<?php 
  include 'layout/header.php';

  //mengambil data dari id peserta
  $id = (int) $_GET['id'];
  $peserta = select("SELECT * FROM peserta WHERE id = $id")[0];

  if(isset($_POST['edit'])){
    if(update($_POST) > 0){
      echo "<script>alert('Data Berhasil Diubah.'); document.location.href='index.php'; </script>";
    }else{
      echo "<script>alert('Data Gagal Untuk Diubah.'); document.location.href='index.php'; </script>";
    }
  }
?>
  <div class="container mt-4">
    <h2>Kursus LdMore | Edit Peserta</h2>
    <hr>

    <form action="" method="POST">
      <input type="hidden" class="form-control" id="id" name="id" value=<?= $peserta['id']; ?> placeholder="Input Id Peserta" readonly>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value=<?= $peserta['nama']; ?> placeholder="Input Nama">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jender" name="jender" value=<?= $peserta['jender']; ?> placeholder="Input Jenis Kelamin">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value=<?= $peserta['tanggal_lahir']; ?> placeholder="Input Tanggal Lahir">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-Mail</label>
        <input type="email" class="form-control" id="email" name="email" value=<?= $peserta['email']; ?>  placeholder="Input Email">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <textarea rows="2" cols="" class="form-control" id="alamat" name="alamat" placeholder="Input Alamat"><?= $peserta['alamat']; ?></textarea> 
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No HP</label>
        <input type="number" class="form-control" id="no_hp" name="no_hp" value=<?= $peserta['no_hp']; ?> placeholder="Input No HP">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jadwal (Pagi, Siang, Sore)</label>
        <input type="text" class="form-control" id="jadwal" name="jadwal" value=<?= $peserta['jadwal']; ?> placeholder="Input Jadwal">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Kursus (Matematika, Bahasa Inggris, IPA)</label>
        <input type="text" class="form-control" id="jenis_kursus" name="jenis_kursus" value=<?= $peserta['jenis_kursus']; ?> placeholder="Input Jenis Kursus">
      </div>
      <button type="submit" class="btn btn-info text-white mb-4" name="edit" onClick="return confirm('Apakah data yang anda ubah sudah sesuai?');">Ubah</button>
    </form>
  </div>
<?php include 'layout/footer.php' ?>