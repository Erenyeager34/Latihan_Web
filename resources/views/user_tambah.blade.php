<!DOCTYPE html>
<html>
    <head>
       <title>Data User</title>
    </head>
    <body>
        <h1>Form tambah user</h1>
        <form method="post"action="/user/tambah_simpan">
            {{ csrf_field() }}
            <label>Username</label>
            <input type ="text" name ="username" placeholder ="Masukan username">
            <br>
            <label>Nama</label>
            <input type ="text" nama ="nama" placeholder ="Masukan nama">
            <br>
            <label>Password</label>
            <input type ="password" nama ="password" placeholder ="masukan password">
            <br>
            <label>Level ID</label>
            <input type ="number" nama ="Level_ID" placeholder="masukan ID level">
            <br><br>
            <input type ="submit" class="btn btn-success" value="simpan">
        </form>
    </body>
</html>
