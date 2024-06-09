@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item"><a href="">Users </a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Sales</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="white_card card_height_100 mb_20 ">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Top 8 Sản phẩm</h3>
                </div>
                <div class="header_more_tool">
                    <div class="dropdown">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="white_card_body QA_section">
            <div class="QA_table ">

                <table class="table lms_table_active2 p-0">
                    <thead>
                        <tr>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Danh mục sản phẩm</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Giảm giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="customer d-flex align-items-center">
                                    <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50"
                                            src="{{ asset('assets/admin/img/customers/pro_1.png') }}" alt></div>
                                    <span class="f_s_14 f_w_400 color_text_1">Product 1</span>
                                </div>
                            </td>
                            <td class="f_s_14 f_w_400 color_text_2">$564</td>
                            <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
        <div class="white_card card_height_100 mb_20 ">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Danh mục</h3>
                    </div>
                    <div class="header_more_tool">
                        <div class="dropdown">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white_card_body QA_section">
                <div class="QA_table ">
                    <table class="table lms_table_active2 p-0">
                        <thead>
                            <tr>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Tổng sản phẩm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="f_s_14 f_w_400 color_text_2">$564</td>
                                <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection