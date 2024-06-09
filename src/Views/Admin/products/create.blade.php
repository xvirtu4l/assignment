@extends('layouts.master')

@section('title')
Thêm mới sản phẩm 
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Thêm mới sản phẩm</h1>
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
                    <form action="{{ url("admin/products/store") }}" enctype="multipart/form-data"
                        method="POST">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Category:</label>
                            <select name="category" id="category">
                                @foreach ($categoryPluck as $id => $name)
                                    <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Giá thường</label>
                            <input type="number" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Giá sale:</label>
                            <input type="number" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="overview" class="form-label">Overview:</label>
                            <input type="text" class="form-control" id="overview" placeholder="Enter overview" name="overview">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="content" class="form-label">Nội dung:</label>
                            <input type="text" class="form-control" id="content" placeholder="Enter content" name="content">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="img" class="form-label">Ảnh:</label>
                            <input type="file" name="img_thumbnail" id="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection