<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;


class BrandProduct extends Controller
{
    public function add_brand_product(){
        return view('admin.add-brand-product');
    }

    public function all_brand_product(){
        $all = DB::table('tbl_brand_product')->orderBy('brand_id','desc')->get();
        $manage_brand_product = view('admin.all-brand-product')->with('all_brand_product',$all);
        return view('admin-layout')->with('admin.all_brand_product',$manage_brand_product);
    }

    public function unactive_brand_product($brand_product_id){
        DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','Ẩn thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }

    public function active_brand_product($brand_product_id){
        DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','Hiển thị thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }

    public function edit_brand_product($brand_product_id){
        $edit_brand_product = DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->get();
        $manage_brand_product = view('admin.edit-brand-product')->with('edit_brand_product',$edit_brand_product);
        return view('admin-layout')->with('admin.all_brand_product',$manage_brand_product);
    }

    public function delete_brand_product($brand_product_id){
        DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','Xóa thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }

    public function save_brand_product(Request $request){
        $data = array();

        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;

        DB::table('tbl_brand_product')->insert($data);
        Session::put('message','Thêm thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }

    public function update_brand_product(Request $request, $brand_product_id){
        $data = array();

        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;

        DB::table('tbl_brand_product')->where('brand_id',$brand_product_id)->update($data);
        Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('all-brand-product');
    }
}
