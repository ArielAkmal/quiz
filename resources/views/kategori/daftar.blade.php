<!DOCTYPE html>
<html>

<head>
    <title>Daftar Kategori</title>
</head>

<body>

    <h1>Daftar Kategori</h1>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="/tambah-kategori">
        Tambah Kategori
    </a>

    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        @foreach($kategoris as $kategori)

        <tr>

            <td>
                {{ $kategori->id }}
            </td>

            <td>
                {{ $kategori->nama }}
            </td>

            <td>

                <a href="/ubah-kategori/{{ $kategori->id }}">
                    Edit
                </a>

                |

                <form action="/hapus-kategori/{{ $kategori->id }}"
                      method="POST"
                      style="display:inline;">

                    @csrf

                    @method('DELETE')

                    <button type="submit">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</body>

</html>