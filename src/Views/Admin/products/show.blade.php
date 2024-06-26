@extends('layouts.master')

@section('title')
Chi tiết danh mục
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Chi tiết danh mục {{ $product['name'] }}</h1>
                    </div>
                </div>
            </div>

            <div class="white_card_body">
            <a class="btn btn-primary" href="{{ url('admin/products') }}">Quay lại danh sách</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Trường</th>
                                <th>Giá trị</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $field => $value)
                                <tr>
                                    <td>{{ $field }}</td>
                                    @if ($field === 'img_thumbnail' && $value !== null)
                                            <td><img src="{{ asset($value) }}" alt="img_thumbnail" style="width: 100px; height: 100px;"></td>
                                        @elseif ($field === 'img_thumbnail' && $value === null)
                                            <td>No Thumbnail</td>
                                        @else
                                            <td>{{ $value }}</td>
                                        @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection