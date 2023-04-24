@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>Thêm mới danh mục</h3>
<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
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
        <label for="parent_id">Parent</label>
        <input value="{{old('parent_id')}}" type="number" name="parent_id" class="form-control" id="parent_id" aria-describedby="nameHelp" placeholder="Enter Parent">
    </div>
    <div class="form-group">
        <label for="feature">Feature</label>
        <input value="{{old('parent_id')}}" type="number" name="feature" class="form-control" id="feature" aria-describedby="nameHelp" placeholder="Enter Feature">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea  name="description" class="form-control" id="description" aria-describedby="textHelp" placeholder="Enter text"></textarea>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection