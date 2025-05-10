<!-- resources/views/books/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Judul:</label><br>
        <input type="text" name="title" value="{{ $book->title }}"><br>

        <label>Penulis:</label><br>
        <input type="text" name="author" value="{{ $book->author }}"><br>

        <label>Tahun:</label><br>
        <input type="number" name="year" value="{{ $book->year }}"><br>

        <label>ISBN:</label><br>
        <input type="number" name="year" value="{{ $book->isbn }}"><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Kembali ke daftar buku</a>
</body>
</html>
