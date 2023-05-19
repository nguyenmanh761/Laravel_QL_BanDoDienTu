@extends('layouts.app')

@section("content")
<div class="container">
    <h1>Search Form</h1>
    <form class="form-inline" >
        
        <div class="input-group" style="width: 50%">
          <input type="text" class="form-control"  placeholder="Searching....">
          <div class="input-group-append">
            <button class="btn btn-warning" type="button">Tìm kiếm</button>
          </div>
        </div>
    </form>
    <br>
    <div>
      @foreach($products as $product)
      <div class="hot_product" style="float: left">
                <a href="{{ route('home.show', ['id'=>$product->id]) }}" style="text-decoration: none">
                <div class="image">
                <?php
                        //use File;

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
                    <h3> {{$product->id}} </h3>
                    <h4 class="price">{{$product->price}}</h4>
                    <h5 class="old_price">{{$product->old_price}}</h5>
                    
                </div>
                <div class="button">

                </div>
            </a>
            </div>
      @endforeach
    </div>
  </div>

@endsection