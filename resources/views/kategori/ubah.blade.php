<!DOCTYPE html>
<html>

<head>
    <title>Ubah Kategori</title>
</head>

<body>

    <h1>Ubah Kategori</h1>

    @if($errors->any())

        @foreach($errors->all() as $error)

            <p style="color: red;">
                {{ $error }}
            </p>

        @endforeach

    @endif

    <form action="/update-kategori/{{ $kategori->id }}"
          method="POST">

        @csrf

        @method('PUT')

        <input type="hidden"
               name="id"
               value="{{ $kategori->id }}">

        <label>
            Nama Kategori
        </label>

        <br>

        <input type="text"
               name="nama"
               value="{{ $kategori->nama }}">

        <br><br>

        <button type="submit">
            Simpan Perubahan
        </button>

    </form>

    <br>

    <a href="/daftar-kategori">
        Kembali
    </a>

</body>

</html>