{!! Form::open(['route' => [$product->url(),$product->id], 'method' => $product->method(),'class'=> 'app-form']) !!}
    <div>
        {!! Form::label('title','Titulo del producto')!!}
        {!! Form::text('title', $product->title ,['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('description','Descripcion')!!}
        {!! Form::textarea('description',$product->description,['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('price','Precio')!!}
        {!! Form::number('price',$product->price,['class' => 'form-control']) !!}
    </div>
    <div class="">
        <input type="submit" value="Guardar" class="btn btn-primary">
    </div>
{!! Form::close() !!}