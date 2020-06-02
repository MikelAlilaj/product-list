

<h1>Sales</h1>

<table class="table">

    <thead>
    <tr>

        <th class="wd-15p">Email Users</th>



    </tr>
    </thead>
    <tbody>


    @foreach( $users as $row)
        <tr>
            <td>{{ $row->email }}</td>



        </tr>
    @endforeach

    </tbody>

</table>






