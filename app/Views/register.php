<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>Pendaftaran Akun</h1>
    <form action="/register" method="post">
        <?= csrf_field() ?>
        ID: <input type="text" name="id"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
