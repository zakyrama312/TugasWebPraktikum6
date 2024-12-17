<?php 

include "koneksi/koneksi.php";

if (isset($_POST['registrasi'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $cek = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_num_rows($cek) > 0){
        echo "<script>alert('Maaf Username sudah ada');
        window.location.href = 'register.php';</script>";
    }else{
        $simpan = mysqli_query($koneksi, "INSERT INTO users VALUES(null,'$nama','$username','$password','1')");
        if ($simpan) {
            echo "<script>alert('Data Berhasil Disimpan, Silahkan Login');
        window.location.href = 'login.php';</script>";
        }
    }
    
}



session_start();

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Query cek user
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['nama'] = $user['nama'];
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<script>alert('Password Salah');
        window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('Username Tidak Ditemukan');
        window.location.href = 'login.php';</script>";
    }
}

?>