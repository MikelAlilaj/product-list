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
                <td><a href="{{route('products.edit', $product->id)}}">{{$product->title}}</a></td>
                <td>{{$product->body}}</td>
                <td>{{$product->sasi_gjendje}}</td>
                <td>{{$product->sasi_peshe}}</td>

            </tr>

        @endforeach

    @endif

    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
        {{ Auth::user()->name }} <span class="caret"></span>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <li>
        <a href="{{route('products.create')}}">Krijo produkt</a>
    </li>

    </tbody>
</table>






