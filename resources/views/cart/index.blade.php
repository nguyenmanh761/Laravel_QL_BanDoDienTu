@extends('layouts.app')

@section("content")
<div  style="margin-top:50px;" class="container">
    <div id="cart" style="height: 850px;" class="container">
        <div class="row">
            <div class="col-md-3 d-none d-lg-block" style="margin-top:50px;">
                <div class="container" id="mini_cart" style="border:3px var(--red) solid;">
                    <h3 style="line-height: 50px;text-align:center">
                        GIỎ HÀNG
                    </h3>
                    <table class="table table-stripped">
                        <tr>
                            <td>
                                Tổng tiền
                            </td>
                            <td class="cart_subtotal">
                                500.000
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Thuế
                            </td>
                            <td class="cart_tax">
                                50.000
                            </td>
                        </tr>
                        <tr style="border-top:2px var(--red) solid; font-size:1.2rem;">
                            <td>
                                Tổng tiền
                            </td>
                            <td class="cart_total">
                                530.000
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="container-fluid text-center">
                    <h2 class="section-title">
                        GIỎ HÀNG
                    </h2>
                </div>
                <div class="container-fluid text-center">
                    <img src="images/flower_string.png" width="30%">
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
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="./images/products/hoa1.jpg" alt="" style="width:4rem; margin-right:20px;float:left;">
                                <div>
                                    <span style="font-size:1.2rem;">
                                        Bambi Print Mini Backpack
                                    </span>
                                    <br>
                                    <span>
                                        Giá: 450.000đ
                                    </span>
                                    <br>
                                    <a href="#">
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <input type="text" id="item_1" value="2" class="form-control  cart_item_quantity" style="    text-align: center;
                            width: 3rem;">
                        </td>
                        <td  id="price_item_1">
                            450.000
                        </td>
                        <td id="total_item_1">
                            900.000
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="./images/products/hoa1.jpg" alt="" style="width:4rem; margin-right:20px;float:left;">
                                <div>
                                    <span style="font-size:1.2rem;">
                                        Bambi Print Mini Backpack
                                    </span>
                                    <br>
                                    <span>
                                        Giá: 450.000đ
                                    </span>
                                    <br>
                                    <a href="#">
                                        Xóa
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <input type="text" id="item_2" value="2" class="form-control cart_item_quantity" style="    text-align: center;
                            width: 3rem;">
                        </td>
                        <td  id="price_item_2">
                            450.000
                        </td>
                        <td id="total_item_2">
                            900.000
                        </td>
                    </tr>

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
                            Thuế
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
                            <button class="btn btn-danger">
                                Thanh toán
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection