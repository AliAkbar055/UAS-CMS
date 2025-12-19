<form action="<?= base_url('index.php/siswa/simpan') ?>" method="post">
    <div class="mb-2">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Nama</label>
        <input type="text" name="nama_lengkap" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>
