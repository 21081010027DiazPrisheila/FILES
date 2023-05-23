<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <h3>
        INPUT DATA BUKU
    </h3>
    <form action="simpan.php" method="post" enctype="multipart/form-data">

        <div>
            <label for="kodebuku">Kode Buku</label>
            <input type="text" name="kode_buku" id="kodebuku" required="required">
        </div>
        <div>
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" required="required">
        </div>
        <div>
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" required="required">
        </div>
        <div>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" required="required">
        </div>
        <div>
            <label for="tahunterbit">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" id="tahunterbit" required="required">
        </div>
        <div>
            <label for="file">Cover Buku</label>
            <input type="file" accept="image/*" name="file" id="file">
        </div>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>