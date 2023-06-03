@extends('layouts.app')

@section("content")
<div class="container" style="  display: flex;
justify-content: center;
align-items: center;
margin-top:100px;">

   
    <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data" >
        @method('GET')
        @csrf
        <table>
            <tr>
                <th>Họ tên</th>
                <td><input class="form-control" type="text" name="fullname" id="" value="{{$profile->fullname}}"></td>
            </tr>
            <tr>
                <th>Giới tính</th>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1" value="0" <?php echo $profile->sex==0?"cheked":"";?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Nam
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault2" value="1" <?php echo $profile->sex==1?"cheked":'';?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Nữ
                        </label>
                      </div>
                </td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><input class="form-control" type="text" name="address" id="" value="{{$profile->address}}"></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><input class="form-control" type="number" name="phone" id="" value="{{$profile->phone}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input class="btn btn-success" type="submit" value="Lưu lại"></td>
                
            </tr>
        </table>
    </form>
</div>
@endsection