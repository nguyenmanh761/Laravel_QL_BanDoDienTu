@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>{{__('category.index.title')}}</h3>
    <a href="{{route('category.create')}}">
        <button class="btn btn-success">{{__('mylang.new')}}</button>
    </a>
    <table class="table table-dark table-hover">
        <tr>
            <th>{{__('category.index.id')}}</th>
            <th>{{__('category.index.name')}}</th>
            <th>{{__('category.index.parent_id')}}</th>
            <th>{{__('category.index.feature')}}</th>
            <th>{{__('category.index.description')}}</th>
            <th></th>
        </tr>
        @foreach($categories as $category)
        <tr class="">
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->parent_id}}</td>
            <td>{{$category->feature}}</td>
            <td>{{$category->description}}</td>
            <td>
                <a href="{{route('category.edit', ['category'=>$category->id])}}">
                    <button class="btn btn-primary">{{__('mylang.edit')}}</button>
                </a>
                <form action="{{route('category.destroy', ['category'=>$category->id])}}" method="POST"
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