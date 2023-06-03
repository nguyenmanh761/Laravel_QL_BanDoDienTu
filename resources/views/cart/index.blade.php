@extends('layouts.app')

@section("content")
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div  style="margin-top:50px;" class="container">
    <div id="cart" style="margin-botton: 800px;" class="container">
        <div class="">

            <div class="col-lg-12">
                <div class="container-fluid text-center">
                    <h2 class="section-title">
                        GIỎ HÀNG
                    </h2>
                </div>
                <div class="container">
                    <table class="table table-stripped">
                        <tr class="bg-danger" style="font-size: 1rem;
                            background-color: var(--red);
                            color: white;">
                            <th style="width:50%">
                                Mặt hàng
                            </th>
                            <th style="width:15%">
                                Số lượng
                            </th>
                            <th style="width:15%">
                                Đơn giá
                            </th>
                            <th style="width:20%">
                                Thành tiền
                            </th>
                        </tr>


                        {{--  --}}
                        <?php $const =0; ?>
                        @foreach($carts as $cart)
                        <?php
                           $product = App\Models\Product::findOrFail($cart->product_id);
                       ?>
                            <tr class="item">
                                <td>
                                    <div class="cart-info"> 
                                            <?php
                                                    //use File;
                            
                                                    $dir = public_path('uploads') . "/products/" . $product->id;
                                                    if(File::exists($dir)){
                            
                                                        //print_r(File::Files($dir));
                                                        //basename($file->getPathname())
                                                        foreach(File::Files($dir) as $file)
                                                        {
                                                            ?>
                                                                <img src="/uploads/products/{{$product->id}}/{{basename($file->getPathname())}}" alt="" style="height: 100px; width:auto; ">
                                                            <?php
                                                        }
                                                    }
                                            ?>
                                        <div>
                                            <span style="display: none" class="product_id">{{$product->id}}</span>
                                            <span style="font-size:1.2rem;">
                                                {{$product->name}}

                                            </span>
                                            <br>
                                            <span>
                                                {{$product->price}}
                                            </span>
                                            <br>
                                            <form action="{{ route('cart.delete', ['id' => $product->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Xóa</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            <td>
                                <form method="POST" action="{{ route('cart.update') }}">
                                    @csrf
                                    <input name="product_id" class="" type="number" value="<?php echo $product->id;?>" style="display:none;">
                                    <input name="quantity" class="quantity" onchange="sumrow(<?php echo $const;?>); this.form.submit(); " min="0" type="number" id="item_1" value="<?php echo $cart->quantity; ?>" class="form-control  cart_item_quantity" style="    text-align: center;
                                        width: 3rem;">
                                </form>
                            </td>
                            <td class="price"  id="price_item_1">
                                {{$product->price}}
                            </td>
                            <td class="sumrow" id="total_item_1">
                                {{$product->price*$cart->quantity}}
                            </td>
                        </tr>
                        <?php $const+=1; ?>
                    @endforeach
                    {{--  --}}
                    

                    <tr>
                        <td colspan="2">
                        </td>
                        <td class="text-right" style="border-top: 2px var(--red) solid;">
                            Tổng tiền
                        </td>
                        <td style="font-weight:900;border-top: 2px var(--red) solid;" class="cart_subtotal">
                            500.000
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border:unset;">
                        </td>
                        <td class="text-right">
                            Thuế (3%)
                        </td>
                        <td style="font-weight:900;" class="cart_tax">
                            50.000
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border:unset;">
                        </td>
                        <td class="text-right">
                            Tổng tiền
                        </td>
                        <td style="font-weight:900;" class="cart_total">
                            530.000
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                        </td>
                        <td style="font-weight:900;">
                            <a href="/bills">Hóa đơn</a>
                            <a href="/cart-bill">
                                <button class="btn btn-danger">
                                    Thanh toán
                                </button>

                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection