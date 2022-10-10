<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use File;
use Session;
use App\Http\Requests;
use App\Models\Gallery;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
use Brian2694\Toastr\Facades\Toastr;

class ProductCon extends Controller
{
    

    public function add_product(){
        

        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get(); // Lay id tu bang catagory_product
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        return view('backend.admin.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }

    public function all_product(){
        

        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->get();
        $manager_product = view('backend.admin.all_product')->with('all_product', $all_product);
        return view('backend.admin_layout')->with('admin.all_product', $manager_product);
    }


    public function save_product(Request $request){
       

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_color'] = $request->product_color;
        $data['product_slug'] = $request->product_slug;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;
        $data['brand_id'] = $request->product_brand;
        $data['product_image'] = $request->product_status;

        $get_image = $request->file('product_image');

        $path = 'public/upload/product/';
        $part_gallery = 'public/upload/gallery/';

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);

            File::copy($path.$new_image,$part_gallery.$new_image);
            
            $data['product_image'] = $new_image;
           
        }
        
        $pro_id = DB::table('tbl_product')->insertGetId($data);
        $gallery = new Gallery();
        $gallery->gallery_image = $new_image;
        $gallery->gallery_name = $name_image;
        $gallery->product_id = $pro_id;
        $gallery->save();

        Toastr::success('Thêm sản phẩm thành công','Thành Công');

        return Redirect::to('add-product');

    }

    public function unactive_product($product_id){
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>1]);
        Toastr::success('Unactive sản phẩm thành công','Thành Công');;
        return Redirect::to('all-product');
    }

    public function active_product($product_id){
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status'=>0]);

        Toastr::success('Active sản phẩm thành công','Thành Công');
        
        return Redirect::to('all-product');

    }

    public function edit_product($product_id){
        

        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get(); // Lay id tu bang catagory_product
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();

        $manager_product = view('backend.admin.edit_product')->with('edit_product', $edit_product)->with('cate_product',$cate_product)
        ->with('brand_product',$brand_product);

        return view('backend.admin_layout')->with('admin.edit_product', $manager_product);
    }

    public function update_product(Request $request, $product_id){
      

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_color'] = $request->product_color;
        $data['product_slug'] = $request->product_slug;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['product_status'] = $request->product_status;
        $data['brand_id'] = $request->product_brand;

        $get_image = $request->file('product_image');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            Toastr::success('Cập nhập sản phẩm thành công','Thành Công');
            return Redirect::to('/all-product');
        }


        DB::table('tbl_product')->where('product_id',$product_id)->update($data);

       

        Toastr::success('Cập nhập sản phẩm thành công','Thành Công');

        return Redirect::to('/all-product');
    }
    public function delete_product( $product_id){
       

        DB::table('tbl_product')->where('product_id', $product_id)->delete();

       Toastr::success('Xóa sản phẩm thành công','Thành Công');

        return Redirect::to('all-product');
    }

    public function ckeditor_image(Request $request){
        if($request->hasFile('upload')) {
 
             $originName = $request->file('upload')->getClientOriginalName();
             $fileName = pathinfo($originName, PATHINFO_FILENAME);
             $extension = $request->file('upload')->getClientOriginalExtension();
             $fileName = $fileName.'_'.time().'.'.$extension;
             $request->file('upload')->move('public/uploads/ckeditor', $fileName);
    
             $CKEditorFuncNum = $request->input('CKEditorFuncNum');
             $url = asset('public/uploads/ckeditor/'.$fileName); 
             $msg = 'Tải ảnh thành công'; 
             $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
             @header('Content-type: text/html; charset=utf-8'); 
             echo $response;
 
         }
     }
 


}
