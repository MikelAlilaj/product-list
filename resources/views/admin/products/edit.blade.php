



<h1>Edit Produkt</h1>

<div class="row">

    <div class="col-sm-3">


        <img src="{{$product->photo->file}}" alt="" class="img-responsive">


    </div>



    <div class="col-sm-9">




    {!! Form::model($product, ['method'=>'PATCH', 'action'=>[ 'AdminProductsController@update', $product->id], 'files'=>true ]) !!}




        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
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

            {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminProductsController@destroy', $product->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}


      </div>


    </div>


    <div class="row">


        @include('includes.form_error')



    </div>
