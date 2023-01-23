<h1>
    đây là danh sách
</h1>
<table border="1px" width="100%">
    <tr><th>id</th>
    <th>name</th></tr>
    @foreach ($products as $item )
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
    </tr>
    @endforeach
</table>