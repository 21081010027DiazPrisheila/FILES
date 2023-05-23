<?php
if (isset($_GET['kode_buku'])) {
    $kode_buku = $_GET['kode_buku'];

    // Mendapatkan data dari file buku.txt
    $file_name = "buku.txt";
    $data = file($file_name);

    $is_deleted = false;

    // Mencari dan menghapus data buku yang sesuai dengan kode buku
    foreach ($data as $key => $buku) {
        $data_buku = explode("-", $buku);
        if ($data_buku[0] === $kode_buku) {
            unset($data[$key]); // Menghapus data buku dari array

            // Simpan perubahan ke file
            file_put_contents($file_name, implode("", $data));
            $is_deleted = true;
            break;
        }
    }

    if ($is_deleted) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Data tidak ditemukan.";
    }
}

?>