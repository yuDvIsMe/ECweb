@extends('admin-layout')
@section('admin-content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục sản phẩm
                </header>

                <div class="panel-body">
                    <div class="position-center" method=post>
                        <form role="form" action="{{ URL::to('/save-category-product') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="category_product_name">Tên danh mục</label>
                                <input type="text" class="form-control" name="category_product_name"
                                    placeholder="Nhập tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="category_product_desc">Mô tả danh mục</label>
                                <textarea type="text" style="resize: none;" rows='8' class="form-control" name="category_product_desc"
                                    placeholder="Mô tả danh mục"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category_product_status">Hiển thị</label>
                                <select name="category_product_status" class="form-control m-bot15">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <button type="submit" name="add_category_product" class="btn btn-info">Thêm</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
