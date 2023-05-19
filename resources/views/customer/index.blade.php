@extends('layouts.admin')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>{{__('customer.index.title')}}</h3>
    <a href="{{route('customer.create')}}">
        <button class="btn btn-success">{{__('mylang.new')}}</button>
    </a>
    <table class="table table-dark table-hover">
        <tr>
            <th>Id</th>
            <th>Fullname</th>
            <th>Photo</th>
            <th>Sex</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Description</th>
            <th></th>
        </tr>
        @foreach($customers as $customer)
        <tr class="">

            <td>{{$customer->id}}</td>
            <td>{{$customer->fullname}}</td>
            <td><div style="height:50px" overflow-y:scroll></div>
                <?php
                    //use File;

                     $dir = public_path('uploads') . "/customers/" . $customer->id;
                     if(File::exists($dir)){

                        //print_r(File::Files($dir));
                        //basename($file->getPathname())
                        foreach(File::Files($dir) as $file)
                        {
                            ?>
                                <img src="/uploads/customers/{{$customer->id}}/{{basename($file->getPathname())}}" alt="" width="50">
                            <?php
                        }
                     }
                ?>
            </div></td>
            <td><?php echo $customer->sex==0?"Nam":"Nữ";?></td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->description}}</td>
            <td>
                <a href="{{route('customer.edit', ['customer'=>$customer->id])}}">
                    <button class="btn btn-primary">{{__('mylang.edit')}}</button>
                </a>
                <form action="{{route('customer.destroy', ['customer'=>$customer->id])}}" method="POST"
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