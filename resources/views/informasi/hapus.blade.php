<!DOCTYPE html>
<html>

<head>
    <title>Hapus Informasi</title>
</head>

<body>

    <h1>Hapus Informasi</h1>

    <p>
        Apakah kamu yakin ingin menghapus:
    </p>

    <strong>
        {{ $informasi->judul }}
    </strong>

    <br><br>

    <form action="/hapus-informasi/{{ $informasi->id }}" method="POST">

        @csrf

        @method('DELETE')

        <button type="submit">
            Ya, Hapus
        </button>

    </form>

    <br>

    <a href="/daftar-informasi">
        Batal
    </a>

</body>

</html>