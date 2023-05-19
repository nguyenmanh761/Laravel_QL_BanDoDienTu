@extends('layouts.admin')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>Thêm mới khách hàng</h3>
<form action="{{route('customer.update',['customer'=>$customer->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
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
        <label for="name">Fullname</label>
        <input value="{{old('fullname')?old('fullname'):$customer->fullname}}" type="text" name="fullname" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label for="category_id">Ảnh</label>
        <input type="file" name="photos[]" multiple>
    </div>

    <div class="form-group">
    <label for="name">Sex</label>
            <div class="form-check">
            <input value="0" class="form-check-input" type="radio" name="sex" id="flexRadioDefault1" <?php echo $customer->sex==0?"checked":""?>>
            <label class="form-check-label" for="flexRadioDefault1" >
                Nam
            </label>
            </div>
            <div class="form-check">
            <input  value="1" class="form-check-input" type="radio" name="sex" id="flexRadioDefault2" <?php echo $customer->sex==1?"checked":""?>>
            <label class="form-check-label" for="flexRadioDefault2">
                Nữ
            </label>
</div>
    </div>
    <div class="form-group">
        <label for="name">Address</label>
        <input value="{{old('address')?old('address'):$customer->address}}" type="text" name="address" class="form-control" id="name" aria-describedby="nameHelp" >
    </div>
    <div class="form-group">
        <label for="name">Phone</label>
        <input value="{{old('phone')?old('phone'):$customer->phone}}" type="text" name="phone" class="form-control" id="name" aria-describedby="nameHelp" >
    </div>
    <div class="form-group">
        <label for="name">Email</label>
        <input value="{{old('email')?old('email'):$customer->email}}" type="text" name="email" class="form-control" id="name" aria-describedby="nameHelp" >
    </div>
    <div class="form-group">
        <label for="name">Description</label>
        <textarea  name="description" class="form-control" id="description" aria-describedby="textHelp" placeholder="Enter text">{{old('description')?old('description'):$customer->description}}</textarea>
    </div>
  <button type="submit" class="btn btn-primary">{{__('mylang.edit')}}</button>
</form>

</div>
@endsection