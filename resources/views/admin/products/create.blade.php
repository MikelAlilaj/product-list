
<h1>Krijo Produktin</h1>



<div class="row">
    {!! Form::open(['method'=>'POST', 'action'=> 'AdminProductsController@store',  'files'=>true ]) !!}




    <div class="form-group">
    {!! Form::label('photo_id', 'Foto:') !!}
        <input type="file" name="photo_id[]" class="form-control" multiple="true">
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
        {!! Form::submit('Krijo Produktin', ['class'=>'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}

</div>


<div class="row">


    @include('includes.form_error')



</div>

