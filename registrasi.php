<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Registrasi</h3>
            <p class="text-center">Selamat Datang</p>
            <form action="proses.php" method="post">
                <!-- Nama input -->
                <div class="mb-3">
                    <div class="form-floating mb-4">
                        <input type="text" id="form1Example13" class="form-control form-control-lg" placeholder="Nama"
                            name="nama" />
                        <label for="form1Example13">Masukkan Nama Lengkap</label>
                    </div>
                </div>

                <!-- Username input -->
                <div class="mb-3">
                    <div class="form-floating mb-4">
                        <input type="text" id="form1Example13" class="form-control form-control-lg"
                            placeholder="Username" name="username" />
                        <label for="form1Example13">Masukkan Username</label>
                    </div>
                </div>

                <!-- Password input -->
                <div class="mb-3">
                    <div class="form-floating mb-4">
                        <input type="password" id="form1Example23" class="form-control form-control-lg"
                            placeholder="Password" name="password" />
                        <label for="form1Example23">Masukkan Password</label>
                    </div>
                </div>
                <!-- Submit button -->
                <div class="d-grid mb-3">
                    <button type="submit" name="registrasi" class="btn btn-primary">Login</button>
                </div>
                <small>Sudah Punya Akun? <a href="login.php">Login</a></small>
            </form>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>