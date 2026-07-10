<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data PKS</title>
</head>
<body>

    <h1>Data PKS</h1>

    <a href="{{ route('pks.create') }}">Tambah PKS</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama PKS</th>
        </tr>

        @foreach($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_pks }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>