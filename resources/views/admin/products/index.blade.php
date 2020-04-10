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
                <td>{{$product->photo_id}}</td>
                <td>{{$product->title}}</td>
                <td>{{$product->body}}</td>
                <td>{{$product->sasi_gjendje}}</td>
                <td>{{$product->sasi_peshe}}</td>

            </tr>
@endforeach

@endif

