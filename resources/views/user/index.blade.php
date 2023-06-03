@extends('layouts.admin')
@section('content')
<div style="margin-top:50px" class="container">
    <h3>Users</h3>
    <a href="{{route('user.create')}}">
        <button class="btn btn-success">New</button>
    </a>
    <table class="table table-dark table-hover">
        <tr>
            <th>ID</th>
            <th>User name</th>
            <th>Fullname</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Is admin</th>
            <th></th>
        </tr>
        @foreach($users as $user)
        <tr class="">

            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->fullname}}</td>
            <td><?php echo $user->sex==0?'Nam':'Nữ'; ?></td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->email}}</td>
            <td> <input class="form-check-input" type="checkbox" name="" id="" <?php echo $user->admin==1?'checked':'';?>> </td>
            <td>
                <a href="{{route('user.edit', ['user'=>$user->id])}}">
                    <button class="btn btn-primary">{{__('mylang.edit')}}</button>
                </a>
                <form action="{{route('user.destroy', ['user'=>$user->id])}}" method="POST"
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