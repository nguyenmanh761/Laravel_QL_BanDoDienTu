@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>Partner</h3>
    <a href="{{route('partner.create')}}">
        <button class="btn btn-success">{{__('mylang.new')}}</button>
    </a>
    <table class="table table-dark table-hover table-striped">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Website</th>
            <th>Description</th>
            <th></th>
        </tr>
        @foreach($partners as $partner)
        <tr class="">
            <td>{{$partner->name}}</td>
            <td>{{$partner->phone}}</td>
            <td>{{$partner->email}}</td>
            <td>{{$partner->website}}</td>
            <td>{{$partner->description}}</td>
            <td>
                <a href="{{route('partner.edit', ['partner'=>$partner->id])}}">
                    <button class="btn btn-primary">{{__('mylang.edit')}}</button>
                </a>
                <form action="{{route('partner.destroy', ['partner'=>$partner->id])}}" method="POST"
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