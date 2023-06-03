@extends('layouts.app')

@section("content")
<div  style="margin-top:50px; height:1920px" class="container">
    <div style="display: flex;">
        <div style="font-size: 24px">
            <a href="/categoriess/2" style="float:left" class="list-group-item list-group-item-action">Điện thoại</a>
            <a href="/categoriess/1" style="float:left" class="list-group-item list-group-item-action" >Tivi</a>
            <a href="/categoriess/5" style="float:left" class="list-group-item list-group-item-action">Lap top</a>
            <a href="/categoriess/62" style="float:left" class="list-group-item list-group-item-action">Máy tính bảng</a>
        </div>

        <div style=" width:auto; height:400px">
            <?php $const=0;?>
            @foreach($products as $product)
            <div class="hot_product"  style="float: left; display:inline-block">
                <a href="{{ route('home.show', ['id'=>$product->id]) }}" style="text-decoration: none">
                <div class="image">
                <?php
                        //use File;
                        $const +=1;
                        $dir = public_path('uploads') . "/products/" . $product->id;
                        if(File::exists($dir)){

                            //print_r(File::Files($dir));
                            //basename($file->getPathname())
                            foreach(File::Files($dir) as $file)
                            {
                                ?>
                                    <img src="/uploads/products/{{$product->id}}/{{basename($file->getPathname())}}" alt="" width="100%">
                                <?php
                            }
                        }
                ?>
                </div>
                <br>
                <div class="aboutpr">
                    <h3 class="name">{{$product->name}}</h3>
                    
                    <h4 class="price">{{$product->price}}</h4>
                    <h5 class="old_price">{{$product->old_price}}</h5>
                    
                </div>
                <div class="button">

                </div>
            </a>
            </div>
            <?php if($const%4==0) echo '<br>';?>
            @endforeach
            
        </div>
    </div>

</div>
@endsection