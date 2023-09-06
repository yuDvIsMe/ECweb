<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add-category-product');
    }

    public function all_category_product(){
        $all = DB::table('tbl_category_product')->orderBy('category_id','desc')->get();
        $manage_category_product = view('admin.all-category-product')->with('all_category_product',$all);
        return view('admin-layout')->with('admin.all_category_product',$manage_category_product);
    }

    public function unactive_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>0]);
        Session::put('message','Ẩn danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function active_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>1]);
        Session::put('message','Hiển thị danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function edit_category_product($category_product_id){
        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
        $manage_category_product = view('admin.edit-category-product')->with('edit_category_product',$edit_category_product);
        return view('admin-layout')->with('admin.all_category_product',$manage_category_product);
    }

    public function delete_category_product($category_product_id){
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function save_category_product(Request $request){
        $data = array();

        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function update_category_product(Request $request, $category_product_id){
        $data = array();

        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;

        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

}
