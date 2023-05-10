@extends('layouts.admin')

@section('content')
<div class="container" style="margin-top: 100px;">
    <h3>Edit style ID: {{$style->id}}</h3>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error_message)
                    <li>{{$error_message}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('style.update', ['style'=>$style->id])}}" method="POST">
        @method('PUT')
        @csrf
        <table>
                <tr class="form-group">
                    <th>Name</th>
                    <td><input name="name" type="text" value="{{old('name')?old('name'):$style->name}}"></td>
                </tr>
                <tr class="form-group">
                    <th>Desctiption</th>
                    <td><textarea name="description" id="" cols="30" rows="10">{{old('description')?old('description'):$style->description}}</textarea></td>
                </tr>
                <tr class="form-group">
                    <th></th>
                    <td>
                        <input class="btn btn-primary" type="submit" value="Edit">
                    </td>
                </tr>
        </table>

    </form>
    </div>
@endsection