<!DOCTYPE html>
<html>

<head>
    <title>Tambah Informasi</title>
</head>

<body>

    <h1>Tambah Informasi</h1>

    @if($errors->any())

        @foreach($errors->all() as $error)

            <p style="color: red;">
                {{ $error }}
            </p>

        @endforeach

    @endif

    <form action="/simpan-informasi" method="POST">

        @csrf

        <label>Kategori</label>
        <br>

        <select name="kategori_id">

            <option value="">
                -- Pilih Kategori --
            </option>

            @foreach($kategoris as $kategori)

                <option value="{{ $kategori->id }}">
                    {{ $kategori->nama }}
                </option>

            @endforeach

        </select>

        <br><br>


        <label>Judul</label>
        <br>

        <input type="text" name="judul">

        <br><br>


        <label>Ringkasan</label>
        <br>

        <textarea name="ringkasan"></textarea>

        <br><br>


        <label>Isi</label>
        <br>

        <textarea name="isi" rows="8"></textarea>

        <br><br>


        <label>Sumber</label>
        <br>

        <input type="text" name="sumber">

        <br><br>


        <label>Status</label>
        <br>

        <select name="status">

            <option value="draft">
                Draft
            </option>

            <option value="published">
                Published
            </option>

        </select>

        <br><br>

        <button type="submit">
            Simpan
        </button>

    </form>

    <br>

    <a href="/daftar-informasi">
        Kembali
    </a>

</body>

</html>