

<h1>Sales</h1>

<table class="table">

                        <thead>
                        <tr>

                            <th class="wd-15p">Product Title</th>
                            <th class="wd-15p">User Name</th>
                            <th class="wd-15p">User Email</th>


                        </tr>
                        </thead>
                        <tbody>


                        @foreach($order as $row)
                            <tr>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>


                            </tr>
                        @endforeach

                        </tbody>


    <li>
        <a href="{{route('admin.users.frequented') }}">Most Frequented </a>
    </li>


</table>






