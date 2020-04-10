<h1>Products</h1>

<table class="table">
    <thead>
    <tr>

        <th>foto</th>
        <th>titull</th>
        <th>Pershkrim</th>
        <th>Sasia ne gjendje</th>
        <th>Sasia ne peshe</th>
    </tr>
    </thead>
    <tbody>

    @if($products)

        @foreach($products as $product)

            <tr>
                <td><img height="50" src="{{$product->photo ? $product->photo->file : 'http://placehold.it/400x400' }} " alt=""></td>
                <td>{{$product->title}}</td>
                <td>{{$product->body}}</td>
                <td>{{$product->sasi_gjendje}}</td>
                <td>{{$product->sasi_peshe}}</td>

            </tr>
@endforeach

@endif

