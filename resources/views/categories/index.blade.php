@extends('layouts.app')

@section("content")
<div  style="margin-top:50px" class="container">
    <div style="display: flex; height:1080px;">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              The current link item
            </a>
            <a href="#" class="list-group-item list-group-item-action">A second link item</a>
            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
            <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
        </div>

        <div>

            
        </div>
    </div>
    <br>
    <h3 class="text-danger">Hot</h3>
   
    <div class ="hot">

    </div>
</div>
@endsection