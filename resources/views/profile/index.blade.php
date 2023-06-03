@extends('layouts.app')
@section('content')
<div style="margin-top:50px"  class="container">

    <div class="avatar1">
        <div class="avatar2"><img src="" width="100%" height="100%" style="border-radius: 50%; overflow: hidden;" alt=""></div>
        <div class="profile">
            <div>
                <p style="font-size: 40px;">{{$profile->name}}</p>
                <p>UID: {{$profile->id}}</p>
            </div>
            
            <br>
            <div style="width: 1000px; height: 3px; background-color: gray; border-radius: 1px;"></div>
            <br>
           

    </div>
    <br>
    <div class="inf">
        <table class="table">
            <tr>
                <th>Họ và tên</th>
                <td>{{$profile->fullname}}</td>
            </tr>
            <tr>
                <th>Giới tính</th>
                <td><?php echo $profile->sex==0?'Nam':'Nữ'; ?></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td>{{$profile->address}}</td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td>{{$profile->phone}}</td>
            </tr>

        </table>
    </div>
    <br>
    <div class="list-btn">
        <a class="btn btn-info" href="">Đổi mật khẩu</a>
        <a class="btn btn-info" href="/profile.edit">Chỉnh sửa thông tin</a>
    </div>
</div>
@endsection