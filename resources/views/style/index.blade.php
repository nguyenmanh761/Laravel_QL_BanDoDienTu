@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>Style list</h3>
    <a href="{{route('style.create')}}">
        <button class="btn btn-success">{{__('mylang.new')}}</button>
    </a>
    <table class="table table-dark table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th></th>
        </tr>
        @foreach($styles as $style)
        <tr class="">
            <td>{{$style->id}}</td>
            <td>{{$style->name}}</td>
            <td>{{$style->description}}</td>
            <td>
                <a href="{{route('style.edit', ['style'=>$style->id])}}">
                    <button class="btn btn-primary">{{__('mylang.edit')}}</button>
                </a>
                <form action="{{route('style.destroy', ['style'=>$style->id])}}" method="POST"
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