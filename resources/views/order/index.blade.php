@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>Danh sach don hang</h3>
    <a href="{{route('order.create')}}">
        <button class="btn btn-success">{{__('order.index.new')}}</button>
    </a>
    <table class="table table-dark table-hover">
        <tr>
            <th>ID</th>
            <th>Created_at</th>
            <th>Customer_id</th>
            <th>Status</th>
            <th>Description</th>
            <th></th>
        </tr>
        @foreach($orders as $order)
        <tr class="">
            <td>{{$order->id}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->customer_id}}</td>
            <td><input class="form-check-input mt-0" type="checkbox" name="" id="" <?php echo $order->status==1?"checked":""; ?> Enable></td>
            <td>{{$order->description}}</td>
            <td>
                <a href="{{route('order.edit', ['order'=>$order->id])}}">
                    <button class="btn btn-primary">{{__('mylang.edit')}}</button>
                </a>
                <form action="{{route('order.destroy', ['order'=>$order->id])}}" method="POST"
                    onsubmit = "return confirm('Xac nhan xoa!')"
                >
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="{{__('mylang.delete')}}">
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>
@endsection