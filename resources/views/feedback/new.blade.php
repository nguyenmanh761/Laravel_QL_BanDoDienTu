@extends('layouts.admin')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>Thêm mới danh mục</h3>
<form action="{{route('feedback.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error_message)
                    <li>{{$error_message}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">
        <label for="fullname">fullname</label>
        <input value="{{old('fullname')}}" type="text" name="fullname" class="form-control" id="fullname" aria-describedby="fullnameHelp" placeholder="Enter fullname">
    </div>
    <div class="form-group">
        <label for="phone">phone</label>
        <input value="{{old('phone')}}" type="number" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input value="{{old('email')}}" type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="title">title</label>
        <input value="{{old('title')}}" type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="content">content</label>
        <input value="{{old('content')}}" type="text" name="content" class="form-control" id="content" aria-describedby="contentHelp" placeholder="Enter content">
    </div>
    <div class="form-group">
            <label for="name">Status</label>
            <div class="form-check">
                <input value="0" class="form-check-input" type="radio" name="status" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                No
            </label>
            </div>
            <div class="form-check">
                <input  value="1" class="form-check-input" type="radio" name="status" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
                Yes
            </label>
    </div>
  <button type="submit" class="btn btn-primary">{{__('mylang.new')}}</button>
</form>

</div>
@endsection