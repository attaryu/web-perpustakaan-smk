<?php
require './login/koneksi.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        $_SESSION['registrasi'] = "Data Berhasil Ditambahkan";
        header("Location: http://localhost/web_dinamis/index.php?page=data_admin");
    } else {
        echo "data gagal ditambahkan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>

<body>
    <div>
        <div class="bg-secondary">
            <div class="container pt-2 pb-2 pe-5 ps-5 text-light">
                <h1 class="">Tambah Admin</h1>
            </div>
        </div>
        <div class="container pt-2 pb-2 pe-5 ps-5">
            <div class="mt-2">
                <form action="" method="post">
                    <div class="card p-3">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Bagus Adrian" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="1234" required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password2" id="password2" class="form-control" placeholder="1234" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="register" class="btn text-light" style="background-color: #00ADB5;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>