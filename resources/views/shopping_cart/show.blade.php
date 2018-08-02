@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card padding">
            <header><h2>Mi Carrito de Compras</h2></header>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-6">
                        <products-shopping-component></products-shopping-component>
                </div>
                <div class="col-12 col-md-6 payments">
                    <p>Paga tu total facilmente con cualquiera de estos metodos, a traves de paypal</p>
                    <img src="/images/card.png" alt="" width="120"><p></p>
                    <img src="/images/paypal.png" alt="" width="120">
                    <div>
                        <a href="/pagar" class="btn btn-primary">Proceder al Pago</a>
                    </div>
                    
                </div>
            </div>
           
        </div>
        </div>
    </div>
@endsection