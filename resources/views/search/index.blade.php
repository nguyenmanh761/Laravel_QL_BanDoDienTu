@extends('layouts.app')

@section("content")
<div class="container" style="margin-bottom: 800px">
    <h1>Search Form</h1>
    <form class="form-inline">
        <h1>Tìm kiếm</h1>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Input">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">Button</button>
          </div>
        </div>
    </form>
  </div>

@endsection