@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card padding">
        <header>
        <h4>Create Nuevo Producto</h4>
        </header>
        <div class="car-body">
           @include('products.form')
        </div>
    </div>
</div>
@endsection