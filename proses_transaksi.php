<?php

require 'db.php';

$id_paket          = $_POST['id_paket'];
$id_outlet         = $_POST['id_outlet'];
$id_user           = $_POST['id_user'];
$id_transaksi      = $_POST['id_transaksi'];
$id_member         = $_POST['id_member'];
$kode_invoice      = $_POST['kode_invoice'];
$harga             = $_POST['harga'];
$jumlah            = $_POST['jumlah'];
$diskon            = $_POST['diskon'];
$pajak             = $_POST['pajak'];
$biaya_tambahan    = $_POST['biaya_tambahan'];
$tgl               = $_POST['tgl'];
$batas_waktu       = $_POST['batas_waktu'];
$tgl_bayar         = $_POST['tgl_bayar'];
$status_pemesanan  = $_POST['status_pemesanan'];
$status_pembayaran = $_POST['status_pembayaran'];


$inputTransaksi = $db->insert('transaksi', [
   'id_transaksi' => $id_transaksi,
   'id_outlet' => $id_outlet, 
   'id_member' => $id_member, 
   'id_user' => $id_user, 
   'kode_invoice' => $kode_invoice, 
   'tgl' => $tgl, 
   'batas_waktu' => $batas_waktu, 
   'tgl_bayar' => $tgl_bayar, 
   'biaya_tambahan' => $biaya_tambahan, 
   'diskon' => $diskon, 
   'pajak' => $pajak, 
   'status' => $status_pemesanan, 
   'dibayar' => $status_pembayaran 
]);

if ( $inputTransaksi > 0 ) {
    // Input detail transaksi

    $inputDetailTransaksi = $db->insert('detail_transaksi',[
        'id_detail_transaksi' => '',
        'id_transaksi' => $id_transaksi,
        'id_paket' => $id_paket,
        'qty' => $jumlah,
        'keterangan' => $keterangan,
    ]);

    if ( $inputDetailTransaksi > 0) {
        header('Location: admin.php?halaman=riwayat_transaksi');
    } else {
        echo "Gagal menambahkan data transaksi..".mysqli_error($db->connect());
    }

} else {
    echo "Gagal menambahkan data transaksi..".mysqli_error($db->connect());
}