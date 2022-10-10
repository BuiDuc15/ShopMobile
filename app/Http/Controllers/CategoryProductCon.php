<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\CategoryProductModel;

use App\Models\Product;

use Auth;
use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
use Brian2694\Toastr\Facades\Toastr;
use Str;

class CategoryProductCon extends Controller
{
   

    public function add_category_product(){
        
         $category = CategoryProductModel::where('category_parent',0)->orderBy('category_id','DESC')->get();
        // $category = $this->getCategoriesProduct();
        return view('backend.admin.add_category_product')->with(compact('category'));
    }

    // public function getCategoriesProduct()
    // {
    //     $categories = CategoryProductModel::where('category_parent',0)->where('category_status',0)->orderBy('category_id','DESC')->get();
    //     $listCategory = [];
    //     CategoryProductModel::recursive($categories, $parents =0, $level = 1, $listCategory);
    //     return $listCategory;
    // }

    public function all_category_product(){
        
        $category_product = CategoryProductModel::where('category_parent',0)->orderBy('category_id','DESC')->get();

        $all_category_product = DB::table('tbl_category_product')->get();

        $manager_category_product = view('backend.admin.all_category_product')->with('all_category_product', $all_category_product)->with('category_product',$category_product);;

        return view('backend.admin_layout')->with('admin.all_category_product', $manager_category_product);
    }


    public function save_category_product(Request $request){
       

        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_parent'] = $request->category_parent;
        $data['slug_category_product'] = \Str::slug($request->category_product_name).'-'.\Carbon\Carbon::now()->timestamp;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);

        Toastr::success('Thêm danh mục sản phẩm thành công','Thành Công');

        return Redirect::to('/all-category-product');

    }

    public function unactive_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>1]);
        Toastr::success('Unactive danh mục thành công','Thành Công');

        return Redirect::to('all-category-product');
    }

    public function active_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status'=>0]);

        Toastr::success('Active danh mục thành công','Thành Công');

        return Redirect::to('all-category-product');

    }

    public function edit_category_product($category_product_id){
        
        $category = CategoryProductModel::orderBy('category_id','DESC')->get();

        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();

        $manager_category_product = view('backend.admin.edit_category_product')->with('edit_category_product', $edit_category_product)->with('category',$category);
        
        return view('backend.admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }

    public function update_category_product(Request $request, $category_product_id){
       

        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_parent'] = $request->category_parent;
        $data['slug_category_product'] = $request->slug_category_product;

        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
        Toastr::success('Sửa danh mục sản phẩm thành công','Thành Công');

        return Redirect::to('all-category-product');
    }
    public function delete_category_product( $category_product_id){
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
        
        Toastr::success('Xóa danh mục sản phẩm thành công','Thành Công');

        return Redirect::to('all-category-product');
    }

    public function show_category_home(Request $request, $slug_category_product)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 

        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        $category_by_slug = CategoryProductModel::where('slug_category_product',$slug_category_product)->first();

       
         $category_id = $category_by_slug->category_id;
        


        if(isset($_GET['sort_by'])){

            $sort_by = $_GET['sort_by'];

            if($sort_by=='giam_dan'){

                $category_by_id = Product::with('category')->where('category_id',$category_id)->orderBy('product_price','DESC')->paginate(6)->appends(request()->query());

            }elseif($sort_by=='tang_dan'){

              $category_by_id = Product::with('category')->where('category_id',$category_id)->orderBy('product_price','ASC')->paginate(6)->appends(request()->query());

          }elseif($sort_by=='kytu_za'){

           $category_by_id = Product::with('category')->where('category_id',$category_id)->orderBy('product_name','DESC')->paginate(6)->appends(request()->query());


       }elseif($sort_by=='kytu_az'){

        $category_by_id = Product::with('category')->where('category_id',$category_id)->orderBy('product_name','ASC')->paginate(6)->appends(request()->query());
    }elseif(isset($_GET['cate'])){
        $category_filter = $_GET['cate'];
        $category_arr = explode(",",$category_filter);
        $category_by_id = Product::with('category')->whereIn('category_id',$category_arr)->orderBy('product_id','DESC')->appends(request()->query());

    }
}else{
    $category_by_id = Product::with('category')->where('category_id',$category_id)->orderBy('product_id','DESC')->paginate(6);
}

        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.slug_category_product',$slug_category_product)->limit(1)->get();



        return view('shop.category.show_category')->with('category',$cate_product)->with('brand',$brand_product)->
        with('category_by_id',$category_by_id)->with('category_name',$category_name);
    }
}


