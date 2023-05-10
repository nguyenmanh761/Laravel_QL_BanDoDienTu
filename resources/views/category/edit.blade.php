@extends('layouts.admin')

@section("content")
<div class="container">
    <h3>Chỉnh sửa danh mục</h3>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error_message)
                    <li>{{$error_message}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('customer.update', ['customer'=>$customer->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="form-group">
    <label for="name">Tên danh mục</label>
    <input value="{{old('name')?old('name'):$customer->name}}" type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name" value="{{$customer->name}}">
    </div>

    <div class="form-group">
        <label for="price">Parent </label>
        <input value="{{$customer->parent_id}}" type="number" name="parent_id" class="form-control" id="parent_id" aria-describedby="priceHelp" placeholder="Enter price">
    </div>
    <div class="form-group">
        <label for="price">gia </label>
        <input value="{{$customer->feature}}" type="number" name="feature" class="form-control" id="price" aria-describedby="priceHelp" placeholder="Enter price">
    </div>

    <div class="form-group">
        <label for="text">Mo ta</label>
        <textarea  name="description" class="form-control" id="text" aria-describedby="textHelp" placeholder="Enter text">{{old('description')?old('description'):$customer->description}}</textarea>
    </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
@endsection