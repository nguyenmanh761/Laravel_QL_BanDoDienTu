@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <h3>{{__('product.index.title')}}</h3>
    <a href="{{route('product.create')}}">
        <button class="btn btn-success">{{__('mylang.new')}}</button>
    </a>
    <table class="table table-dark table-hover">
        <tr>
            <th>{{__('product.index.id')}}</th>
            <th>{{__('product.index.name')}}</th>
            <th>{{__('product.index.name')}}</th>
            <th>{{__('product.index.photo')}}</th>
            <th>{{__('product.index.style')}}</th>
            <th>{{__('product.index.size')}}</th>
            <th>{{__('product.index.weight')}}</th>
            <th>{{__('product.index.price')}}</th>
            <th>{{__('product.index.oldprice')}}</th>
            <th>{{__('product.index.partner')}}</th>
            <th>{{__('product.index.description')}}</th>
            <th></th>
        </tr>
        @foreach($products as $product)
        <tr class="">

            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td><div style="height:50px" overflow-y:scroll></div>
                <?php
                    //use File;

                     $dir = public_path('uploads') . "/products/" . $product->id;
                     if(File::exists($dir)){

                        //print_r(File::Files($dir));
                        //basename($file->getPathname())
                        foreach(File::Files($dir) as $file)
                        {
                            ?>
                                <img src="/uploads/products/{{$product->id}}/{{basename($file->getPathname())}}" alt="" width="50">
                            <?php
                        }
                     }
                ?>
            </div></td>
            <td>{{$product->category_id}}</td>
            <td>{{$product->style_id}}</td>
            <td>{{$product->size}}</td>
            <td>{{$product->weight}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->old_price}}</td>
            <td>{{$product->partner_id}}</td>
            <td>{{$product->text}}</td>
            <td>
                <a href="{{route('product.edit', ['product'=>$product->id])}}">
                    <button class="btn btn-primary">{{__('mylang.edit')}}</button>
                </a>
                <form action="{{route('product.destroy', ['product'=>$product->id])}}" method="POST"
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
        {{$products->links()}}
</div>
@endsection