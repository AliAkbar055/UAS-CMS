<a href="<?= base_url('index.php/siswa/tambah') ?>" class="btn btn-primary mb-3">
    + Tambah Siswa
</a>

<table class="table table-bordered">
<thead class="table-dark">
<tr>
    <th>NIS</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Jurusan</th>
    <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php if(!empty($siswa)): foreach($siswa as $s): ?>
<tr>
    <td><?= $s->nis ?></td>
    <td><?= $s->nama_lengkap ?></td>
    <td><?= $s->kelas ?></td>
    <td><?= $s->jurusan ?></td>
    <td>
        <a href="<?= base_url('index.php/siswa/edit/'.$s->id) ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="<?= base_url('index.php/siswa/hapus/'.$s->id) ?>"
           onclick="return confirm('Hapus data?')"
           class="btn btn-danger btn-sm">Hapus</a>
    </td>
</tr>
<?php endforeach; else: ?>
<tr>
    <td colspan="5" class="text-center">Belum ada data</td>
</tr>
<?php endif ?>
</tbody>
</table>
