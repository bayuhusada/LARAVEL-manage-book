<!-- resources/views/books/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku Baru</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="title"><br>

        <label>Penulis:</label><br>
        <input type="text" name="author"><br>

        <label>Tahun:</label><br>
        <input type="number" name="year"><br>

        <label>ISBN</label><br>
        <input type="number" name="isbn"><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Kembali ke daftar buku</a>
</body>
</html>
