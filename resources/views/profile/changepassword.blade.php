@extends('layout.app')
@section('content')
    <div>
        <form action="{{ route('changePassword') }}" method="POST">
            @csrf
            <label for="current_password">Mật khẩu hiện tại:</label>
            <input type="password" name="current_password" id="current_password">
        
            <label for="new_password">Mật khẩu mới:</label>
            <input type="password" name="new_password" id="new_password">
        
            <label for="confirm_password">Xác nhận mật khẩu mới:</label>
            <input type="password" name="confirm_password" id="confirm_password">
        
            <button type="submit">Đổi mật khẩu</button>
        </form>
        
    </div>
@endsection