<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah PKS</title>
</head>
<body>
    <h1>Tambah PKS</h1>
    <form action="{{ route('pks.store') }}" method="POST">
        @csrf
        <label>Nama PKS</label><br>
        <input type="text" name="nama_pks">
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
