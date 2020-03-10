<?php

require 'db.php';

$id = $_GET['id'];

$db = new Database();
$delete = $db->delete('paket', ['id_paket' => $id]);

if ( $delete > 0 ) {
    header('Location: admin.php?halaman=paket');
} else {
    echo "Gagal menghapus data..".mysqli_error($db->connect());
}