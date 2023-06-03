@extends('layouts.app')
@section('content')
<div style="margin-top:50px;" class="container">
    <h3>Thông tin đơn hàng</h3>
    <table>
        <tr>
            <th>Ngày</th>
            <th>Thông tin</th>
        </tr>
        @foreach($bills as $bill)
            <tr>
                <th>{{$bill->created_at}}</th>
                <td>
                    <textarea name="" id="" cols="50" rows="5">{{$bill->text}}</textarea>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection