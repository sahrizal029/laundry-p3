<?php

require 'db.php';

$nama     = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role     = $_POST['role'];

$db = new Database();
$user = $db->getById('user', ['username' => "{$username}" ]);

if ( count($user) == 0 ) {
    // Akun dg username tsb boleh didaftarkan

    // Hash dulu passwordnya
    $hashed_pw = password_hash($password, PASSWORD_DEFAULT);

    // Simpan data akun tsb ke tabel user
    $insert = $db->insert('user', [
        'id_user'   => '',
        'id_outlet' => 1,
        'nama'      => $nama,
        'username'  => $username,
        'password'  => $hashed_pw,
        'role'      => $role
    ]);

    if ( $insert > 0 ) {
        echo "Akun berhasil didaftarkan!";
        echo "Klik <a href='login.php'>disini</a> untuk login";
    } else {
        echo "Gagal mendaftarkan akun..".mysqli_error($db->connect());
    }

} else {
    // Username sudah terpakai
    echo "Username sudah terpakai silahkan gunakan username yang lain..";
}