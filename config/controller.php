<?php
  include 'db.php';

  //fungsi untuk menampilkan data peserta
  function select($query){
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    if(!$result){
      die(mysqli_error($db));
    }

    while($row = mysqli_fetch_array($result)){
      $rows[] = $row;
    }

    return $rows;
  }

  //fungsi untuk menambahkan data peserta
  function create($post){
    global $db;

    $nama = $post['nama'];
    $jender = $post['jender'];
    $tanggal_lahir = $post['tanggal_lahir'];
    $email = $post['email'];
    $alamat = $post['alamat'];
    $no_hp = $post['no_hp'];
    $jadwal = $post['jadwal'];
    $jenis_kursus = $post['jenis_kursus'];

    $query = "INSERT INTO peserta VALUES(null, '$nama', '$jender', '$tanggal_lahir', '$email', '$alamat', '$no_hp', '$jadwal', '$jenis_kursus')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
  }

  //fungsi untuk mengubah data peserta
  function update($post){
    global $db;

    $id = $post['id'];
    $nama = $post['nama'];
    $jender = $post['jender'];
    $tanggal_lahir = $post['tanggal_lahir'];
    $email = $post['email'];
    $alamat = $post['alamat'];
    $no_hp = $post['no_hp'];
    $jadwal = $post['jadwal'];
    $jenis_kursus = $post['jenis_kursus'];

    $query = "UPDATE peserta SET nama = '$nama', jender = '$jender', tanggal_lahir = '$tanggal_lahir', email = '$email', alamat = '$alamat', no_hp = '$no_hp', jadwal = '$jadwal', jenis_kursus = '$jenis_kursus' WHERE id = $id";
    mysqli_query($db, $query);
    // return die($query);
    return mysqli_affected_rows($db);
  }

  //fungsi untuk hapus data peserta
  function delete($id){
    global $db;

    mysqli_query($db, "DELETE FROM peserta WHERE id= $id");
    return mysqli_affected_rows($db);
  }
?>