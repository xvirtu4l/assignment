@extends('layouts.master')

@section('title')
Chỉnh sửa danh mục  
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Chỉnh sửa danh mục</h1>
                    </div>
                </div>
            </div>

            <div class="white_card_body">
                @if (!empty($_SESSION['errors']))
                                <div class="alert alert-warning">
                                    <ul>
                                        @foreach ($_SESSION['errors'] as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>

                                    @php
                                        unset($_SESSION['errors']);
                                    @endphp
                                </div>
                @endif

                <div class="table-responsive">
                <form action="{{ url("admin/products/{$product['id']}/update") }}" enctype="multipart/form-data"
                        method="POST">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$product['name']}}">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Category:</label>
                            <select name="category" id="category">
                                @foreach ($categoryPluck as $id => $name)
                                    <option 
                                        @if ($id == $product['category_id'])
                                            selected
                                        @endif
                                    value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Giá thường</label>
                            <input type="number" class="form-control" id="name" placeholder="Enter name" name="price_regular" value="{{$product['price_regular']}}">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Giá sale:</label>
                            <input type="number" class="form-control" id="name" placeholder="Enter name" name="price_sale" value="{{$product['price_sale']}}">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="overview" class="form-label">Overview:</label>
                            <input type="text" class="form-control" id="overview" placeholder="Enter overview" name="overview" value="{{$product['overview']}}">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="content" class="form-label">Nội dung:</label>
                            <input type="text" class="form-control" id="content" placeholder="Enter content" name="content" value="{{$product['content']}}">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="img" class="form-label">Ảnh:</label>
                            <input type="file" name="img_thumbnail" id="">
                            <img src="{{asset($product['img_thumbnail'])}}" alt="" width="100px">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection