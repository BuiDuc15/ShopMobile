<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\Gallery;
use Session;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
session_start();

class GalleryController extends Controller
{
    public function add_gallery($product_id)
    {
        $pro_id = $product_id;
        return view('backend.admin.gallery.add_gallery')->with(compact('pro_id'));
    }

    public function select_gallery(Request $request)
    {
        $product_id = $request->pro_id;
        $gallery = Gallery::where('product_id', $product_id)->get();
        $gallery_count = $gallery->count();
        $output =' <form>
                    '.csrf_field().'
                        <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Thứ Tự</th>
                                        <th>Tên Hình Ảnh</th>
                                        <th>Hình Ảnh</th>
                                        <th>Thay Đổi</th>
                                    </tr>
                                </thead>
                             <tbody>
        ';
        if ($gallery_count > 0) {
            $i = 0;
            foreach($gallery as $key => $gal){
                $i++;
                $output.='
                    <tr>
                        <td>'.$i.'</td>
                        <td contenteditable class="edit_gal_name" data-gal_id="'.$gal->gallery_id.'">'.$gal->gallery_name.'</td>
                        <td>
                             <img src="'.url('public/upload/gallery/'.$gal->gallery_image).'"  class="img-thumbnail" width="120px" height="120px">


                             <input type="file" class="file_image" style="width:40%" data-gal_id="'.$gal->gallery_id.'" id="file-'.$gal->gallery_id.'" name="file" accept="image/*" />


                        </td>
                        <td>
                              <button type="button" data-gal_id="'.$gal->gallery_id.'" class="btn  btn-danger delete-gallery">Xóa</button>
                        </td>
                    </tr>
                ';
            }
        }else{
            $output.='
                <tr>
                    <td colspan="4"> Sản Phẩm chưa có gallery </td>
                    
                </tr>
            ';
        }
            $output.='
                </tbody>
                </table>
                </form>
            ';
        echo $output;
    }
        public function insert_gallery(Request $request, $pro_id)
        {
            $get_image = $request->file('file');
            if ($get_image) {
                foreach($get_image as $image){
                    $get_name_image = $image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image = $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
                    $image->move('public/upload/gallery', $new_image);
                   
                    $gallery = new Gallery();
                    $gallery->gallery_name = $name_image;
                    $gallery->gallery_image = $new_image;
                    $gallery->product_id = $pro_id;
                    $gallery->save();
                }
            }
            Session::put('message','Thêm Ảnh Thành Công');
            return redirect()->back();
        }

        public function update_gallery_name(Request $request)
        {
            $gal_id = $request->gal_id;
            $gal_text = $request->gal_text;
            $gallery = Gallery::find($gal_id);
            $gallery->gallery_name = $gal_text;
            $gallery->save();
        }

        public function delete_gallery(Request $request)
        {
            $gal_id = $request->gal_id;
            $gallery = Gallery::find($gal_id);
            unlink('public/upload/gallery/'.$gallery->gallery_image);
            $gallery->delete();
        }

        public function update_gallery(Request $request)
        {
            $get_image = $request->file('file');
            $gal_id = $request->gal_id;
            if ($get_image) {
                $gallery = Gallery::find($gal_id);
                unlink('public/upload/gallery/'.$gallery->gallery_image);
                    $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                    $get_image->move('public/upload/gallery',$new_image);
                    $gallery->gallery_image = $new_image;
                    $gallery->save(); 
                }
        }
}

