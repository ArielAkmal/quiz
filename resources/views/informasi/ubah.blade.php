<!DOCTYPE html>
<html>

<head>
    <title>Ubah Informasi</title>
</head>

<body>

    <h1>Ubah Informasi</h1>

    @if($errors->any())

        @foreach($errors->all() as $error)

            <p style="color: red;">
                {{ $error }}
            </p>

        @endforeach

    @endif

    <form action="/update-informasi/{{ $informasi->id }}" method="POST">

        @csrf

        @method('PUT')

        <input type="hidden"
               name="id"
               value="{{ $informasi->id }}">


        <label>Kategori</label>
        <br>

        <select name="kategori_id">

            @foreach($kategoris as $kategori)

                <option value="{{ $kategori->id }}"
                    {{ $informasi->kategori_id == $kategori->id ? 'selected' : '' }}>

                    {{ $kategori->nama }}

                </option>

            @endforeach

        </select>

        <br><br>


        <label>Judul</label>
        <br>

        <input type="text"
               name="judul"
               value="{{ $informasi->judul }}">

        <br><br>


        <label>Ringkasan</label>
        <br>

        <textarea name="ringkasan">{{ $informasi->ringkasan }}</textarea>

        <br><br>


        <label>Isi</label>
        <br>

        <textarea name="isi" rows="8">{{ $informasi->isi }}</textarea>

        <br><br>


        <label>Sumber</label>
        <br>

        <input type="text"
               name="sumber"
               value="{{ $informasi->sumber }}">

        <br><br>


        <label>Status</label>
        <br>

        <select name="status">

            <option value="draft"
                {{ $informasi->status == 'draft' ? 'selected' : '' }}>
                Draft
            </option>

            <option value="published"
                {{ $informasi->status == 'published' ? 'selected' : '' }}>
                Published
            </option>

        </select>

        <br><br>


        <button type="submit">
            Simpan Perubahan
        </button>

    </form>

    <br>

    <a href="/daftar-informasi">
        Kembali
    </a>

</body>

</html>