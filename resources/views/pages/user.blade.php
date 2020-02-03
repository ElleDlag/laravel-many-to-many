<table>
    <thead>
        <tr>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
</table>



