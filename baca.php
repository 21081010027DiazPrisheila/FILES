<?php
    echo "<h3>KATALOG BUKU</h3>";
    $file_name = "buku.txt";

    $read = file($file_name); 

    echo "<table border='1'>
        <tr>
            <td>Kode Buku</td>
            <td>Judul</td>
            <td>Pengerang</td>
            <td>Penerbit</td>
            <td>Tahun Terbit</td>
            <td>Cover Buku</td>
            <td>Action</td>
        </tr>";

    foreach ($read as $buku) {
        $data_buku = explode("-", $buku); //arr
        echo "<tr>";
        echo "<td>$data_buku[0]</td>";
        echo "<td>$data_buku[1]</td>";
        echo "<td>$data_buku[2]</td>";
        echo "<td>$data_buku[3]</td>";
        echo "<td>$data_buku[4]</td>";
        echo "<td><img src='images/". $data_buku[5] . "' width='100' height='100'></td>";
        echo "<td>
        <a href='update.php?kode_buku=" . $data_buku[0] . "'>Update</a> <br>
        <a href='delete.php?kode_buku=" . $data_buku[0] . "'>Delete</a>
        </td>";
        echo "</tr>";

    }
    echo "</table>";

    echo '<br><br><a href="add.php">Kembali ke Form</a>';
?>