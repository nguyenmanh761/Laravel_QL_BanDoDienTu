@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>Thêm mới đơn hàng</h3>
<form action="{{route('order.store')}}" method="POST" enctype="multipart/form-data">
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
        <label for="customer_id">Customer</label>
        <select type="..." name="customer_id" class="form-control" id="customer_id" aria-describedby="customer_idHelp" placeholder="Enter customer_id">
        @foreach ($customers as $customer)
            <option value="{{$customer->id}}" {{old('customer_id')==$customer->id?"selected":""}}>{{$customer->fullname}}</option>
        @endforeach
        </select>
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
    <div class="form-group">
        <label for="description">description</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{old('description')}}</textarea>
    </div>
  <button type="submit" class="btn btn-primary">{{__('mylang.new')}}</button>
</form>

</div>
@endsection