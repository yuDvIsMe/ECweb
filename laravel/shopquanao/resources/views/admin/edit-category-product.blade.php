@extends('admin-layout')
@section('admin-content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật danh mục sản phẩm
                </header>

                <div class="panel-body">
                    @foreach ($edit_category_product as $key => $edit_cate_pro)
                    <div class="position-center" method=post>
                        <form role="form" action="{{ URL::to('/update-category-product/'.$edit_cate_pro->category_id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="category_product_name">Tên danh mục</label>
                                <input type="text" class="form-control" name="category_product_name" value="{{$edit_cate_pro->category_name}}">
                            </div>
                            <div class="form-group">
                                <label for="category_product_desc">Mô tả danh mục</label>
                                <textarea type="text" style="resize: none;" rows='8' class="form-control" name="category_product_desc">{{$edit_cate_pro->category_desc}}</textarea>
                            </div>
                            <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
@endsection
