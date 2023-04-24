@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
    <h3>New style ++++++</h3>
    <form action="{{route('style.store')}}" method="POST">
        @csrf
        <table>
                <tr class="form-group">
                    <th>Name</th>
                    <td><input name="name" type="text"></td>
                </tr>
                <tr class="form-group">
                    <th>Desctiption</th>
                    <td><textarea name="description" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr class="form-group">
                    <th></th>
                    <td>
                        <input class="btn btn-success" type="submit" value="{{__('mylang.new')}}">
                    </td>
                </tr>
        </table>

    </form>
    </div>
@endsection