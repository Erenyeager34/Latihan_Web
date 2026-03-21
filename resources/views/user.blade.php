<!DOCTYPE html>
<html>
    <head>
       <title>Data Kategori Barang</title>
    </head>
    <body>
        <h1>Data User dengan Level 2</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
                <th>AKsi</th>
            </tr>
            @foreach ($data as $data)
            <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->level_id }}</td>
                <td>
                    <a href="/user/ubah"{{ $data->user_id }}>ubah</a>
                    <a href="/user/hapus"{{ $data->user_id }}>hapus</a>
                </td>
            @endforeach
        </table>
    </body>
</html>
