<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <p class="text-center">Selamat Datang</p>
            <form method="post" action="proses.php">
                <!-- Username input -->
                <div class="mb-3">
                    <div class="form-floating mb-4">
                        <input type="text" id="form1Example13" name="username" class="form-control form-control-lg"
                            placeholder="Username" />
                        <label for="form1Example13">Masukkan Username</label>
                    </div>
                </div>

                <!-- Password input -->
                <div class="mb-3">
                    <div class="form-floating mb-4">
                        <input type="password" name="password" id="form1Example23" class="form-control form-control-lg"
                            placeholder="Password" />
                        <label for="form1Example23">Masukkan Password</label>
                    </div>
                </div>
                <!-- Submit button -->
                <div class="d-grid mb-3">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
                <small>Belum Punya Akun? <a href="registrasi.php">Registrasi</a></small>
            </form>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>