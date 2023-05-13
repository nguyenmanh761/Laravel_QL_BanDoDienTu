@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">

    <div class="content">

        <div class="baner">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
                        $dir = public_path('uploads') . "/products/" . $product->id;
                        if(File::exists($dir)){
                            foreach(File::Files($dir) as $file)
                            {
                                ?>
                                    <div class="carousel-item active">
                                        <h1 style="color:white; position:absolute; z-index:95; margin: 150px 0 0 200px"> QLED 
                                        <br>
                                        8K</h1>
                                        <img src="/uploads/products/{{$product->id}}/{{basename($file->getPathname())}}" style="height:400px" class="d-block w-100" alt="..." >
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>


        <div class="info">
            <h2>{{$product->name}}</h2>
            <table class="table">
                <tr>
                    <th>Kiểu</th>
                    <td>{{$product->style}}</td>
                </tr>
                <tr>
                    <th>Kích thước</th>
                    <td>{{$product->size}}</td>
                </tr>
                <tr>
                    <th>Trọng lượng</th>
                    <td>{{$product->weight}}</td>
                </tr>
                <tr>
                    <th>Giá</th>
                    <td>{{$product->price}}</td>
                </tr>
                <tr>
                    <th>Giảm Giá</th>
                    <td>{{$product->old_price}}</td>
                </tr>
                <tr>
                    <th>Nhà sản xuất</th>
                    <td>{{$product->partner_id}}</td>
                </tr>
                <tr>
                    <th>Thông tin thêm</th>
                    <td>{{$product->description}}</td>
                </tr>
            </table>

            <form action="{{route('inserttocart.store')}}" method="post">
                @csrf
                <input type="number" name="product_id" id="" value="<?php echo $product->id; ?>" style="display: none">
                <button type="submit" class="btn btn-warning" >Thêm vào giỏ hàng</button>


            </form>
        </div>

    </div>
    <h2>Các sản phẩm khác</h2>
    <div class ="hot">
    @foreach($products as $product)
            <div class="hot_product" style="width:200px">
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
                    <h4 class="name">{{$product->name}}</h4>
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