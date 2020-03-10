<?php

session_start();
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$db = new Database();
$user = $db->getById('user', ['username' => "$username" ]);

if ( count($user) == 1 ) {

    foreach($user as $u):
    if ( password_verify($password, $u['password'] ) ) {

        $_SESSION = [
            'id_user'  => $u['id_user'],
            'nama'     => $u['nama'],
            'username' => $u['username'],
            'role'     => $u['role']
        ];
        header('Location: admin.php?halaman=outlet');

    } else {
        echo "Password tidak cocok..";
    }
    endforeach;


} else {
    echo "Akun tidak ditemukan";
}