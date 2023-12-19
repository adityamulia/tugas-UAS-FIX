<h1>Tambah Layanan</h1>

<form method='POST' action="simpan.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="judul">Nama Layanan</label>
        <input type="text" class="form-control" name="nama" id="judul" required>    
    </div>

    <div class="form-group">
        <label for="isi">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10" required id="isi"></textarea>
    </div>

    <div class="form-group">
        <label for="img">Gambar (Max 5MB, JPG/PNG)</label>
        <input class="form-control" name="img" type='file' accept="image/jpeg, image/png" required id="img">
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
