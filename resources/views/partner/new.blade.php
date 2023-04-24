@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>Thêm mới</h3>
<form action="{{route('partner.store')}}" method="POST" enctype="multipart/form-data">
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
        <label for="name">Name</label>
        <input value="{{old('name')}}" type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input value="{{old('phone')}}" type="number" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Enter phone">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input value="{{old('email')}}" type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="website">Website</label>
        <input value="{{old('website')}}" type="text" name="website" class="form-control" id="website" aria-describedby="websiteHelp" placeholder="Enter website">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="" class="form-control"></textarea>
    </div>
  <button type="submit" class="btn btn-primary">{{__('mylang.new')}}</button>
</form>

</div>
@endsection