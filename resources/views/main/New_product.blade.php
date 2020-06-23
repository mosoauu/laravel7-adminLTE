@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>เพิ่มสินค้า</p>
    <div class="container">
      <form action="{{ route('insertproduct') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">Example label</label>
          <input type="text" class="form-control" name="nameproduct" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Another label</label>
          <input type="text" class="form-control" name="qty" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success">Success</button>
        </div>

</form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
