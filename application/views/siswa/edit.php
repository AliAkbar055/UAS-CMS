<h3>Edit Siswa</h3>

<form action="<?= base_url('index.php/siswa/update/'.$siswa->id) ?>" method="post">

    <div class="mb-2">
        <label>NIS</label>
        <input type="text" name="nis" value="<?= $siswa->nis ?>" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Nama</label>
        <input type="text" name="nama_lengkap" value="<?= $siswa->nama_lengkap ?>" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Kelas</label>
        <input type="text" name="kelas" value="<?= $siswa->kelas ?>" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Jurusan</label>
        <input type="text" name="jurusan" value="<?= $siswa->jurusan ?>" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="<?= base_url('index.php/siswa') ?>" class="btn btn-secondary">Kembali</a>

</form>
