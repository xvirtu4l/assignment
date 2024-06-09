@extends('layouts.master')

@section('title')
Chi tiết người dùng
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Chi tiết người dùng {{ $user['name'] }}</h1>
                    </div>
                </div>
            </div>

            <div class="white_card_body">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Trường</th>
                                <th>Giá trị</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user as $field => $value)
                                @if ($field !== 'password')
                                    <tr>
                                        <td>{{ $field }}</td>
                                        @if ($field === 'avatar' && $value !== null)
                                            <td><img src="{{ $value }}" alt="Avatar" style="width: 100px; height: 100px;"></td>
                                        @elseif ($field === 'avatar' && $value === null)
                                            <td>No Avatar</td>
                                        @else
                                            <td>{{ $value }}</td>
                                        @endif
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection