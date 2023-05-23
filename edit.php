<?php
if ($_POST) {
    $file_name = "buku.txt";
    $data = file($file_name);

    $kode_buku = $_POST['kode_buku'];

    foreach ($data as $key => $buku) {
        $data_buku = explode("-", $buku);
        if ($data_buku[0] === $kode_buku) {
            // Update data sesuai dengan input baru
            $data_buku[1] = $_POST['judul'];
            $data_buku[2] = $_POST['pengarang'];
            $data_buku[3] = $_POST['penerbit'];
            $data_buku[4] = $_POST['tahun_terbit'];

            // Menghapus karakter newline pada gambar sebelumnya
            $data_buku[5] = str_replace("\n", "", $data_buku[5]);

            // Cek apakah ada gambar baru yang diupload
            if ($_FILES['file']['size'] > 0) {
                $target_dir = "images/";
                $target_file = $target_dir . basename($_FILES['file']['name']);
                move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
                $data_buku[5] = basename($_FILES['file']['name']);
            }

            // Gabungkan data kembali menjadi string
            $data[$key] = implode("-", $data_buku) . "\n";

            // Simpan perubahan ke file
            file_put_contents($file_name, $data);
            echo "Data berhasil diperbarui.";
            break;
        }
    }
}
?>
