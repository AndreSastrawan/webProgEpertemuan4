<?php
//transaksi penjualan produk
$NamaProduk = "Baju Sekolah";
$harga_satuan = 150000;
$qty = 5;

//hitung harga yang harus dibayar
$total_harga = $harga_satuan * $qty;
echo "<br>Nama Produk: ".$NamaProduk;
echo "<br>harga satuan: Rp".$harga_satuan;
echo "<br>jumlah barang: ".$qty;
echo "<br>total bayar: Rp".$total_harga;


//terdapat diskon 5% jika subtotal lebih dari 500.000
$subtotal= $harga_satuan*$qty;
if($subtotal >= 500000){
    $diskon =$subtotal * 5/100;
}else{
    $diskon = 0; 
}
        $total = $subtotal - $diskon;

echo "<br>diskon: ".$diskon;
echo "<br>total bayar: Rp".$total;

