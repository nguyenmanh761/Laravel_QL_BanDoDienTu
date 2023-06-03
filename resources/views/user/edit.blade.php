@extends('layouts.admin')
@section('content')
<div style="margin-top:50px; padding-left:20%" class="container">
    <h3>New user!</h3>
    <form action="{{route('user.update', ['user'=>$user->id])}}" method="POST">
        @method('PUT')
        @csrf
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="name" id="" value="{{$user->name}}"></td>
            </tr>
            <tr>
                <th>Fullname</th>
                <td><input type="text" name="fullname" id="" value="{{$user->fullname}}"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1" value="0" <?php echo $user->sex==0?'checked':'';?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Nam
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault2" value="1" <?php echo $user->sex==0?'':'checked';?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Nữ
                        </label>
                      </div>
                </td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type="number" name="phone" id="" value="{{$user->phone}}"></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="address" id="" value="{{$user->address}}"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" id="" value="{{$user->email}}"></td>
            </tr>
            <tr>
                <th>Pssword</th>
                <td><input type="password" name="password" id="" value=""></td>
            </tr>
            <tr>
                <th>Isadmin</th>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="admin" id="flexRadioDefault1" value="0" <?php echo $user->admin==0?'checked':'';?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                          No
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="admin" id="flexRadioDefault2" value="1" <?php echo $user->admin==0?'':'checked';?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Yes
                        </label>
                      </div>
                </td>
            </tr>
        </table>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</div>
@endsection