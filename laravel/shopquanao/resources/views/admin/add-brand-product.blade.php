@extends('admin-layout')
@section('admin-content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thương hiệu sản phẩm
                </header>

                <div class="panel-body">
                    <div class="position-center" method=post>
                        <form role="form" action="{{ URL::to('/save-brand-product') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="brand_product_name">Tên thương hiệu</label>
                                <input type="text" class="form-control" name="brand_product_name"
                                    placeholder="Nhập tên thương hiệu">
                            </div>
                            <div class="form-group">
                                <label for="brand_product_desc">Mô tả thương hiệu</label>
                                <textarea type="text" style="resize: none;" rows='8' class="form-control" name="brand_product_desc"
                                    placeholder="Mô tả thương hiệu"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="brand_product_status">Hiển thị</label>
                                <select name="brand_product_status" class="form-control m-bot15">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <button type="submit" name="add_brand_product" class="btn btn-info">Thêm</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
