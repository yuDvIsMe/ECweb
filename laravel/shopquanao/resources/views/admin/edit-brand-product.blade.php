@extends('admin-layout')
@section('admin-content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thương hiệu sản phẩm
                </header>

                <div class="panel-body">
                    @foreach ($edit_brand_product as $key => $edit_brand_pro)
                    <div class="position-center" method=post>
                        <form role="form" action="{{ URL::to('/update-brand-product/'.$edit_brand_pro->brand_id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="brand_product_name">Tên thương hiệu</label>
                                <input type="text" class="form-control" name="brand_product_name" value="{{$edit_brand_pro->brand_name}}">
                            </div>
                            <div class="form-group">
                                <label for="brand_product_desc">Mô tả thương hiệu</label>
                                <textarea type="text" style="resize: none;" rows='8' class="form-control" name="brand_product_desc">{{$edit_brand_pro->brand_desc}}</textarea>
                            </div>
                            <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
@endsection
