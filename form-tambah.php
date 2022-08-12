<?php 
  include 'layout/header.php';

  if(isset($_POST['add'])){
    if(create($_POST) > 0){
      echo "<script>alert('Data Berhasil Disimpan.'); document.location.href='index.php'; </script>";
    }else{
      echo "<script>alert('Data Gagal Untuk Disimpan.'); document.location.href='index.php'; </script>";
    }
  }
?>
  <div class="container mt-4">
    <h2>Kursus LdMore | Tambah Peserta</h2>
    <hr>

    <form action="" method="POST">
      <input type="hidden" class="form-control" id="id" name="id" placeholder="Input Id Peserta" readonly>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jender" name="jender" placeholder="Input Jenis Kelamin">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Input Tanggal Lahir">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">E-Mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Input Email">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <textarea rows="2" cols="" class="form-control" id="alamat" name="alamat" placeholder="Input Alamat"></textarea> 
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">No HP</label>
        <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Input No HP">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jadwal (Pagi, Siang, Sore)</label>
        <input type="text" class="form-control" id="jadwal" name="jadwal" placeholder="Input Jadwal">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Kursus (Matematika, Bahasa Inggris, IPA)</label>
        <input type="text" class="form-control" id="jenis_kursus" name="jenis_kursus" placeholder="Input Jenis Kursus">
      </div>
      <button type="submit" class="btn btn-info text-white mb-4" name="add" onClick="return confirm('Apakah data ini yakin untuk disimpan?');">Tambah Peserta</button>
    </form>
  </div>
<?php include 'layout/footer.php' ?>