<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kategori</title>
</head>

<body>

    <h1>Tambah Kategori</h1>

    @if($errors->any())

        @foreach($errors->all() as $error)

            <p style="color: red;">
                {{ $error }}
            </p>

        @endforeach

    @endif

    <form action="/simpan-kategori" method="POST">

        @csrf

        <label>
            Nama Kategori
        </label>

        <br>

        <input type="text" name="nama">

        <br><br>

        <button type="submit">
            Simpan
        </button>

    </form>

    <br>

    <a href="/daftar-kategori">
        Kembali
    </a>

</body>

</html>