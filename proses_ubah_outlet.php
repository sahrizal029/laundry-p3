<?php

require 'db.php';

$id     = $_POST['id'];

$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp   = $_POST['telp'];

$db = new Database();

$update = $db->update('outlet', [
    'nama'   => $nama,
    'alamat' => $alamat,
    'telp'   => $telp,
], [ 'id_outlet' => $id ] );

if ( $update > 0 ) {
    header('Location: admin.php?halaman=outlet');
} else {
    echo "Gagal mengubah data..".mysqli_error($db->connect());
}