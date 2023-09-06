@extends('admin-layout')
@section('admin-content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sản phẩm
                </header>

                <div class="panel-body">
                    <div class="position-center" method=post>
                        <form role="form" action="{{ URL::to('/save-product') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="product_name">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="product_name"
                                    placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="product_price">Giá sản phẩm</label>
                                <input type="text" class="form-control" name="product_price"
                                    placeholder="Nhập giá sản phẩm">
                            </div>
                            <div class="form-group">
                                <label for="product_desc">Mô tả sản phẩm</label>
                                <textarea type="text" style="resize: none;" rows='5' class="form-control" name="product_desc"
                                    placeholder="Mô tả sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_content">Nội dung sản phẩm</label>
                                <textarea type="text" style="resize: none;" rows='5' class="form-control" name="product_content"
                                    placeholder="Nội dung sản phẩm"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="product_image">Ảnh</label>
                                <input type="file" class="form-control" name="product_image">
                            </div>
                            <div class="form-group">
                                <label for="category_product">Danh mục sản phẩm</label>
                                <select name="product_cate" class="form-control m-bot15">
                                    @foreach ($category_product as $key=>$category)
                                        <option value="{{ $category->category_id }}">{{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand_product">Thương hiệu sản phẩm</label>
                                <select name="product_brand" class="form-control m-bot15">
                                    @foreach ($brand_product as $key=>$brand)
                                        <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_status">Hiển thị</label>
                                <select name="product_status" class="form-control m-bot15">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <button type="submit" name="add_product" class="btn btn-info">Thêm</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
