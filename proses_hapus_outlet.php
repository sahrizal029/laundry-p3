<?php

require 'db.php';

$id = $_GET['id'];

$db = new Database();
$delete = $db->delete('outlet', ['id_outlet' => $id]);

if ( $delete > 0 ) {
    header('Location: admin.php?halaman=outlet');
} else {
echo "Gagal menghapus data..".mysqli_error($db->connect());
}