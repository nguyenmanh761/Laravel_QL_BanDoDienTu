@extends('layouts.app')

@section("content")
<div class="container">
    <h3>Sửa sản phẩm</h3>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error_message)
                    <li>{{$error_message}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('product.update', ['product'=>$product->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="form-group">
    <label for="name">Tên sản phẩm</label>
    <input value="{{old('name')?old('name'):$product->name}}" type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name" value="{{$product->name}}">
    </div>

    <div class="form-group">
        <label for="category_id">Danh mục</label>
        <input type="file" name="photos[]" multiple>
    </div>

    <div class="form-group">
        <label for="category_id">Danh mục</label>
        <select type="..." name="category_id" class="form-control" id="category_id" aria-describedby="category_idHelp" placeholder="Enter category_id">
        @foreach ($categories as $category)
            <option value="{{$category->id}}" {{$category->id == (old('category_id')?old('category_id'):$product->category_id)?"selected":""}}>{{$category->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="style_id">Kiểu</label>
        <select type="..." name="style_id" class="form-control" id="style_id" aria-describedby="style_idHelp" placeholder="Enter style_id">
        @foreach ($styles as $style)
            <option value="{{$style->id}}" {{$style->id == (old('style_id')?old('style_id'):$product->style_id)?"selected":""}}>{{$style->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="size">Kích thước</label>
        <input value="{{old('size')?old('size'):$product->size}}" type="text" name="size" class="form-control" id="size" aria-describedby="sizeHelp" placeholder="Enter size"  >
    </div>
    <div class="form-group">
        <label for="weight">trong luong</label>
        <input value="{{old('weight')?old('weight'):$product->weight}}" type="text" name="weight" class="form-control" id="weight" aria-describedby="weightHelp" placeholder="Enter weight">
    </div>
    <div class="form-group">
        <label for="price">gia </label>
        <input value="{{$product->price}}" type="text" name="price" class="form-control" id="price" aria-describedby="priceHelp" placeholder="Enter price">
    </div>
    <div class="form-group">
        <label for="old_price">gia cu</label>
        <input value="{{old('old_price')?old('old_price'):$product->old_price}}" type="text" name="old_price" class="form-control" id="old_price" aria-describedby="old_priceHelp" placeholder="Enter old_price">
    </div>
    <div class="form-group">
        <label for="partner_id">...</label>
        <select name="partner_id" class="form-control" id="partner_id" aria-describedby="partner_idHelp" placeholder="Enter partner_id">
        @foreach ($partners as $partner)
            <option value="{{$partner->id}}" {{$partner->id==(old('partner_id')?old('partner_id'):$product->partner_id)?"selected":""}}>{{$partner->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="text">Mo ta</label>
        <textarea  name="text" class="form-control" id="text" aria-describedby="textHelp" placeholder="Enter text">{{old('text')?old('text'):$product->text}}</textarea>
    </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
@endsection