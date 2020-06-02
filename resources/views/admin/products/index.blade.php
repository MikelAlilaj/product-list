<h1>Products</h1>

<table class="table">
    <thead>
    <tr>

        <th>foto</th>
        <th>titull</th>
        <th>Pershkrim</th>
        <th>Sasia ne gjendje</th>
        <th>Sasia ne peshe</th>
        <th>Bli</th>
    </tr>
    </thead>
    <tbody>

    @if($products)

        @foreach($products as $product)

            <tr>
                <td>
                    @foreach($product->photos as $photo)
                        <img height="50" src="{{$photo->file ? $photo->file : 'http://placehold.it/400x400' }} " alt="">
                    @endforeach

                </td>
                <td><a href="{{route('products.edit', $product->id)}}">{{$product->title}}</a></td>
                <td>{{$product->body}}</td>
                <td>{{$product->sasi_gjendje}}</td>
                <td>{{$product->sasi_peshe}}</td>

                <td>  <form action="{{ route('oncash.charge') }}" method="post" id="payment-form">
                    @csrf

                    <button class="btn btn-info">Pay Now</button>
                </form>
                </td>
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
        <a href="{{route('products.create')}}">Create Product</a>

    </li>
                <li>
                    <a href="{{route('admin.view.orders') }}">View Sales</a>
                </li>



    </tbody>
</table>









