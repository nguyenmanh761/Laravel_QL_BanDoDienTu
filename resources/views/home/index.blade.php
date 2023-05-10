@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <div>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <h1 style="color:white; position:absolute; z-index:95; margin: 150px 0 0 200px"> QLED 
                <br>
                8K</h1>
                <img src="/upload/banner/3.jpg" style="height:400px"  class="d-block w-100" alt="...">
                
                </div>
                <div class="carousel-item">
                <img src="/upload/banner/2.jpg" style="height:400px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/upload/banner/3.webp" style="height:400px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="/upload/banner/1.jpg" style="height:400px" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <br>
    <h3 class="text-danger">Hot</h3>
   
    <div class ="hot">
    @foreach($products as $product)
            <div class="hot_product">
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
                <a href="{{ route('home.show', ['id'=>$product->id]) }}">
                    <button type="button" class="btn btn-outline-info">Thông tin</button>
                </a>
                    
                    <button type="button" class="btn btn-outline-success">Mua hàng</button>
                </div>
            </div>
    @endforeach
    </div>
</div>
@endsection