<!DOCTYPE html>
<html>

<head>
    <title>Daftar Informasi</title>
</head>

<body>

    <h1>Daftar Informasi</h1>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="/tambah-informasi">
        Tambah Informasi
    </a>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Kategori ID</th>
            <th>Judul</th>
            <th>Ringkasan</th>
            <th>Isi</th>
            <th>Sumber</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        @foreach($informasis as $informasi)

        <tr>

            <td>{{ $informasi->id }}</td>

            <td>{{ $informasi->kategori_id }}</td>

            <td>{{ $informasi->judul }}</td>

            <td>{{ $informasi->ringkasan }}</td>

            <td>{{ $informasi->isi }}</td>

            <td>{{ $informasi->sumber }}</td>

            <td>{{ $informasi->status }}</td>

            <td>

                <a href="/ubah-informasi/{{ $informasi->id }}">
                    Edit
                </a>

                |

                <a href="/hapus-informasi/{{ $informasi->id }}">
                    Hapus
                </a>

            </td>

        </tr>

        @endforeach

    </table>

</body>

</html>