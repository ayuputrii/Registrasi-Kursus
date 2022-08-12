<?php 
  include 'layout/header.php';

  $data = select("SELECT * FROM peserta ORDER BY id DESC");
?>
  <div class="container mt-4">
    <h2>Pendaftaran Peserta Kursus</h2>
    <div>
      <p align="center">by <a href="#" target="blank">Ayu Armadani - 422011045</a>
      <br/>
    </div>  
    <hr> 
    <a href="form-tambah.php" class="btn btn-info text-white mb-2">Tambah Peserta</a>
    <table class="table table-striped mt-2 table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th>E-Mail</th>
          <th>Alamat</th>
          <th>No HP</th>
          <th>Jadwal</th>
          <th>Jenis Kursus</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data as $peserta) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $peserta['nama']; ?></td>
          <td><?= $peserta['jender']; ?></td>
          <td><?= $peserta['tanggal_lahir']; ?></td>
          <td><?= $peserta['email']; ?></td>
          <td><?= $peserta['alamat']; ?></td>
          <td><?= $peserta['no_hp']; ?></td>
          <td><?= $peserta['jadwal']; ?></td>
          <td><?= $peserta['jenis_kursus']; ?></td>      
          <td width="15%" class="text-center">
            <a href="form-ubah.php?id=<?= $peserta['id']; ?>" class="btn btn-success"  onClick="return confirm('Apakah anda yakin data peserta ini diubah?');">Ubah</a>
            <a href="delete.php?id=<?= $peserta['id']; ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin data peserta ini dihapus?');">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php include 'layout/footer.php'?>