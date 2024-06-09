@extends('layouts.master')

@section('title')
    Danh sách Danh mục
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">Danh sách Danh mục</h1>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">

                    <a class="btn btn-primary" href="{{ url('admin/categories/create') }}">Thêm mới</a>

                    @if (isset($_SESSION['status']) && $_SESSION['status'])
                        <div class="alert alert-success">
                            {{ $_SESSION['msg'] }}
                        </div>

                        @php
                            unset($_SESSION['status']);
                            unset($_SESSION['msg']);
                        @endphp
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $category)
                                    <tr>
                                        <td><?= $category['id'] ?></td>
                                
                                        <td><?= $category['name'] ?></td>
                                        <td>

                                            <a class="btn btn-info"
                                                href="{{ url('admin/categories/' . $category['id'] . '/show') }}">Xem</a>
                                            <a class="btn btn-warning"
                                                href="{{ url('admin/categories/' . $category['id'] . '/edit') }}">Sửa</a>
                                            <a class="btn btn-danger"
                                                href="{{ url('admin/categories/' . $category['id'] . '/delete') }}"
                                                onclick="return confirm('Chắc chắn xóa không?')">Xóa</a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    

                                    <!-- Các nút số trang -->
                                    @for ($i = 1; $i <= $totalPage; $i++)
                                        <li class="page-item{{ $currentPage == $i ? ' active' : '' }}">
                                            <a class="page-link" href="{{ url('admin/categories?page=' . $i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    
                                    
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection