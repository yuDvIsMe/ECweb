@extends('admin-layout')
@section('admin-content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật sản phẩm
                </header>

                <div class="panel-body">
                    <div class="position-center" method=post>
                        @foreach ($edit_product as $key => $edit_pro)
                            <form role="form" action="{{ URL::to('/update-product/'.$edit_pro->product_id) }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="product_name">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="product_name"
                                        value="{{ $edit_pro->product_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="product_price">Giá sản phẩm</label>
                                    <input type="text" class="form-control" name="product_price"
                                        value="{{ $edit_pro->product_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="product_desc">Mô tả sản phẩm</label>
                                    <textarea type="text" style="resize: none;" rows='5' class="form-control" name="product_desc">{{ $edit_pro->product_desc }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="product_content">Nội dung sản phẩm</label>
                                    <textarea type="text" style="resize: none;" rows='5' class="form-control" name="product_content">{{ $edit_pro->product_content }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="product_image">Ảnh</label>
                                    <input type="file" class="form-control" name="product_image">
                                    <img src="{{ URL::to('public/uploads/products/' . $edit_pro->product_image) }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="category_product">Danh mục sản phẩm</label>
                                    <select name="product_cate" class="form-control m-bot15">
                                        @foreach ($category_product as $key => $category)
                                            @if ($category->category_id == $edit_pro->category_id)
                                                <option selected value="{{ $category->category_id }}">
                                                    {{ $category->category_name }}
                                                </option>
                                            @else
                                                <option value="{{ $category->category_id }}">
                                                    {{ $category->category_name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="brand_product">Thương hiệu sản phẩm</label>
                                    <select name="product_brand" class="form-control m-bot15">
                                        @foreach ($brand_product as $key => $brand)
                                            @if ($brand->brand_id == $edit_pro->brand_id)
                                                <option selected value="{{ $brand->brand_id }}">{{ $brand->brand_name }}
                                                </option>
                                            @else
                                                <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}
                                                </option>
                                            @endif
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
                                <button type="submit" name="update_product" class="btn btn-info">Cập nhật</button>
                            </form>
                        @endforeach

                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection
