@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>Danh muc san pham</h3>
    <a href="{{route('feedback.create')}}">
        <button class="btn btn-success">{{__('mylang.new')}}</button>
    </a>
    <table class="table table-dark table-hover">
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Title</th>
            <th>Content</th>
            <th>Status</th>
            <th></th>
        </tr>
        @foreach($feedbacks as $feedback)
        <tr class="">
            <td>{{$feedback->id}}</td>
            <td>{{$feedback->fullname}}</td>
            <td>{{$feedback->phone}}</td>
            <td>{{$feedback->email}}</td>
            <td>{{$feedback->title}}</td>
            <td>{{$feedback->content}}</td>
            <td><input class="form-check-input mt-0" type="checkbox" name="" id="" <?php echo $feedback->status==1?"checked":""; ?> Enable></td>
            <td>
                <a href="{{route('feedback.edit', ['feedback'=>$feedback->id])}}">
                    <button class="btn btn-primary">{{__('mylang.edit')}}</button>
                </a>
                <form action="{{route('feedback.destroy', ['feedback'=>$feedback->id])}}" method="POST"
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