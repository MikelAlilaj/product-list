

<h1>Krijo Produkt</h1>


<div class="row">
    {!! Form::open(['method'=>'POST', 'action'=> 'AdminProductsController@store','files'=>true]) !!}


    <div class="form-group">
        {!! Form::label('photo_id', 'Foto:') !!}
        {!! Form::file('photo_id', null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Titull:') !!}
        {!! Form::text('title', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Pershkrim:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::label('sasi_gjendje', 'Sasi Gjendje:') !!}
        {!! Form::text('sasi_gjendje', null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::label('sasi_peshe', 'Sasi Peshe:') !!}
        {!! Form::text('sasi_peshe', null, ['class'=>'form-control'])!!}
    </div>



    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}

</div>


<div class="row">


    @include('includes.form_error')



</div>



