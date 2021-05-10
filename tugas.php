<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.warning {color: #FF0000;}  
</style><!--mengubah warna class warning--> 
</head>
<body>  

<?php // variabel error
$error_tanggal = ""; 
$error_nama = ""; 
$error_jeniskelamin = "";
$error_nisn = ""; 
$error_nik =""; 
$error_tempatlahir =""; 
$error_tanggallahir ="";
$error_agama =""; 
$error_kwn =""; 
$error_khusus =""; 
$error_alamatjalan ="";
$error_rt ="";
$error_rw ="";
$error_namadusun ="";
$error_namakelurahan ="";
$error_namakecamatan ="";
$error_kodepos ="";
$error_lintang =""; 
$error_bujur =""; 
$error_ttinggal =""; 
$error_mtrans =""; 
$error_nokks =""; 
$error_anak =""; 
$error_penerima =""; 
$error_nokps =""; 

// pendeklarasian variabel
$nama = "";  
$jeniskelamin = "";  
$nisn = ""; 
$nik ="";     
$tanggallahir ="";
$agama ="";  
$kwn ="";  
$khusus =""; 
$alamatjalan ="";  
$rt =""; 
$rw =""; 
$namadusun =""; 
$namakelurahan =""; 
$namakecamatan =""; 
$kodepos =""; 
$ttinggal =""; 
$mtrans ="";  
$nokks =""; 
$anak =""; 
$penerima ="";  
$nokps ="";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) 
  {
    $error_nama = "Nama tidak boleh kosong";
    // jika nama tidak diisi muncul teks nama tidak boleh kosong
  } 
  else 
  {
    $nama = cek_input($_POST["nama"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
    {
      $error_nama = "Inputan Hanya boleh huruf dan spasi"; 
    }
  }
  
    if (empty($_POST["nisn"])) 
  {
    $error_nisn = "NISN tidak boleh kosong";
  } // jika input nisn kosong maka akan muncul nisn tidak boleh kosong
  else 
  {
    $nisn = cek_input($_POST["nisn"]);

    if(!is_numeric($nisn)) 
    {
      $error_nisn = 'NISN hanya boleh angka';
    } //jika nisn yang diinputkkan selain angka maka muncul teks nisn hanya boleh angka
  }

    if (empty($_POST["nik"])) 
  {
    $error_nik = "NIK tidak boleh kosong";
  } // apabila nik tidak ditulis maka akan muncul pesan nik tisak boleh kosong
  else 
  {
    $nik = cek_input($_POST["nik"]);

    if(!is_numeric($nik)) 
    {
      $error_nik = 'NIK hanya boleh angka';
    } //apabila nik ditulis dengan huruf maka muncul nik hanya ditulis dengan angaka
  }

  	if (empty($_POST["tempatlahir"])) 
  {
    $error_tempatlahir = "Tempat Lahir tidak boleh kosong";
  }	  // jika input tempat tanggal lahir kosong maka akan muncul tempat tanggal lahir tidak boleh kosong


 	 if (empty($_POST["agama"])) 
  {
    $error_agama = "Agama tidak boleh kosong";
  }	  // apabila tampilan menu agama tidak diisi amak akan muncul pesan agama idak boleh kosong
if (empty($_POST["alamatjalan"])) 
  {
    $error_alamatjalan = "Alamat Jalan tidak boleh kosong";
  }	  // apabila tampilan menu alamat kosong maka akan muncul teks alamat jalan tidak boleh kosong


}



function cek_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}  
?>

<div class="row"> 
<div class="col-md-10">
<div class="card"> 
  <div class="card-header"> 
   <center> FORMULIR PESERTA DIDIK </center> 
  </div><br>

  <div class="form-group row"> 
    <label for="tanggal" class="col-sm-2 col-form-label">TANGGAL</label> 
    <div class="col-sm-3"> 
      <input type="date" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : ""); ?>" id="tanggal" placeholder="" value="<?php echo $tanggal; ?>"><span class="warning"><?php echo $error_tanggal; ?></span>
    </div>
  </div> 

  <div class="header2"> 
   <center> DATA PRIBADI </center>  
  </div>


  <div class="card-body">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	<div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label> 
    <div class="col-sm-10"> 
      <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
    </div>
  </div>

  <div class="jkel"> 
  		<td class="jkel"> Jenis Kelamin</td> 
  		<td>
  			<input type="radio" name="jenis_kelamin" class="laki"> Laki-laki
  			<input type="radio" name="jenis_kelamin" class="perempuan"> Perempuan
  		</td>
  </div><br>

   <div class="form-group row"> 
    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
    <div class="col-sm-3">
      <input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
    </div>
  </div>

  <div class="form-group row">
    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
    <div class="col-sm-4">
      <input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
    </div>
  </div>

   <div class="form-group row">
    <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-3">
      <input type="text" name="tempatlahir" class="form-control <?php echo($error_tempatlahir !="" ? "is-invalid" : ""); ?>" id="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $tempatlahir; ?>"><span class="warning"><?php echo $error_tempatlahir; ?></span>
    </div>
  </div>

   <div class="form-group row">
    <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-3">
      <input type="date" name="tanggallahir" class="form-control <?php echo($error_tanggallahir !="" ? "is-invalid" : ""); ?>" id="tanggallahir" placeholder="Tanggal Lahir" value="<?php echo $tanggallahir; ?>"><span class="warning"><?php echo $error_tanggallahir; ?></span>
    </div>
  </div

   <div class="form-group row"> 
    <label for="agama" class="col-sm-2 col-form-label">Agama</label> 
    <div class="col-sm-10">
      <input type="text" name="agama" class="form-control <?php echo($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="Agama" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama; ?></span>
    </div>
  </div> 

    <div class="kwn"> 
  		<td> Kewarganegaraan</td>
  		<td>
  			<input type="radio" name="jenis_kelamin" class="in"> Indonesia(WNI)
  			<input type="radio" name="jenis_kelamin" class="as"> Asing(WNA)
  		</td> 
  </div><br>

   <div class="form-group row">     <label for="khusus" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label> 
    <div class="col-sm-10">
      <input type="text" name="khusus" class="form-control <?php echo($error_khusus !="" ? "is-invalid" : ""); ?>" id="khusus" placeholder="Berkebutuhan Khusus" value="<?php echo $khusus; ?>"><span class="warning"><?php echo $error_khusus; ?></span>
    </div>
  </div> 

   <div class="form-group row"> 
    <label for="alamatjalan" class="col-sm-2 col-form-label">Alamat Jalan</label>
    <div class="col-sm-10">
      <input type="text" name="alamatjalan" class="form-control <?php echo($error_alamatjalan !="" ? "is-invalid" : ""); ?>" id="alamatjalan" placeholder="Alamat Jalan" value="<?php echo $alamatjalan; ?>"><span class="warning"><?php echo $error_alamatjalan; ?></span>
    </div>
  </div>

   <div class="form-group row"> 
    <label for="rt" class="col-sm-2 col-form-label">RT</label>
    
    <div class="col-sm-3">
      <input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
    </div> 
  </div>

   <div class="form-group row"> 
    <label for="rw" class="col-sm-2 col-form-label">RW</label> 
    <div class="col-sm-3">
      <input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
    </div> 
  </div>

   <div class="form-group row"> 
    <label for="namadusun" class="col-sm-2 col-form-label">Nama Dusun</label> 
    <div class="col-sm-10">
      <input type="text" name="namadusun" class="form-control <?php echo($error_namadusun !="" ? "is-invalid" : ""); ?>" id="namadusun" placeholder="Nama Dusun" value="<?php echo $namadusun; ?>"><span class="warning"><?php echo $error_namadusun; ?></span>
    </div>
  </div>

   <div class="form-group row">
    <label for="namadusun" class="col-sm-2 col-form-label">Nama Kelurahan / Desa</label>
    <div class="col-sm-10">
      <input type="text" name="namadusun" class="form-control <?php echo($error_namadusun !="" ? "is-invalid" : ""); ?>" id="namadusun" placeholder="Nama Kelurahan / Desa" value="<?php echo $namadusun; ?>"><span class="warning"><?php echo $error_namadusun; ?></span>
    </div> 
  </div>

   <div class="form-group row"> 
    <label for="namakecamatan" class="col-sm-2 col-form-label">Kecamataan</label> 
    <div class="col-sm-10">
      <input type="text" name="namakecamatan" class="form-control <?php echo($error_namakecamatan !="" ? "is-invalid" : ""); ?>" id="namakecamatan" placeholder="Kecamatan" value="<?php echo $namakecamatan; ?>"><span class="warning"><?php echo $error_namakecamatan; ?></span>
    </div> 
  </div>

   <div class="form-group row"> 
    <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label> 
    <div class="col-sm-4">
      <input type="text" name="kodepos" class="form-control <?php echo($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>"><span class="warning"><?php echo $error_kodepos; ?></span> 
    </div>
  </div> 

   <div class="form-group row">
    <label for="ttinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label> 
    <div class="col-sm-2">
      <input type="text" name="ttinggal" class="form-control <?php echo($error_ttinggal !="" ? "is-invalid" : ""); ?>" id="ttinggal" placeholder="Tempat Tinggal" value="<?php echo $ttinggal; ?>"><span class="warning"><?php echo $error_ttinggal; ?></span>
    </div>
  </div>

   <div class="form-group row"> 
    <label for="mtrans" class="col-sm-2 col-form-label">Moda Transportasi</label> 
    <div class="col-sm-2">
      <input type="text" name="mtrans" class="form-control <?php echo($error_mtrans !="" ? "is-invalid" : ""); ?>" id="mtrans" placeholder="Moda Transportasi" value="<?php echo $mtrans; ?>"><span class="warning"><?php echo $error_mtrans; ?></span>
    </div> 
  </div>

   <div class="form-group row"> 
    <label for="nokks" class="col-sm-2 col-form-label">Nomor KKS <br> (Kartu Keluarga Sejahtera)</label> 
    <div class="col-sm-10">
      <input type="text" name="nokks" class="form-control <?php echo($error_nokks !="" ? "is-invalid" : ""); ?>" id="nokks" placeholder="Nomor KKS" value="<?php echo $nokks; ?>"><span class="warning"><?php echo $error_nokks; ?></span>
    </div> 
  </div>

   <div class="form-group row"> 
    <label for="anak" class="col-sm-2 col-form-label">Anak ke-berapa <br> (Berdasarkan KK)</label> 
    <div class="col-sm-2">
      <input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : ""); ?>" id="anak" placeholder="Anak ke-berapa" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak; ?></span>
    </div> 
  </div> 

    <div class="pnn"> 
  		<td> Penerima KPS / PKH</td>
  		<td>
  			<input type="radio" name="jenis_kelamin" class="yy">Ya
  			<input type="radio" name="jenis_kelamin" class="tt">Tidak
  		</td> 
  </div><br>

   <div class="form-group row"> 
    <label for="nokps" class="col-sm-2 col-form-label">Nomor KPS / PKH </label> 
    <div class="col-sm-10">
      <input type="text" name="nokps" class="form-control <?php echo($error_nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder="Nomor KPS / PKH" value="<?php echo $nokps; ?>"><span class="warning"><?php echo $error_nokps; ?></span>
    </div>
  </div> 

  <div class="form-group row"> 
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">KIRIM</button>
    </div> 
  </div>
</form>

  </div>
</div>
</div>
</div>

<?php 

	include('koneksi.php'); //memanggil file koneksi

	if(  isset($_POST['nama']) && isset($_POST['jeniskelamin'])  && isset($_POST['nisn'])  && isset($_POST['tempatlahir'])  && isset($_POST['tanggallahir'])  && isset($_POST['agama'])  && isset($_POST['kwn'])  && isset($_POST['khusus'])  && isset($_POST['alamatjalan'])  && isset($_POST['rt'])  && isset($_POST['rw'])  && isset($_POST['namadusun'])  && isset($_POST['namakelurahan'])  && isset($_POST['namakecamatan'])  && isset($_POST['kodepos'])  && isset($_POST['ttinggal'])  && isset($_POST['mtrans'])  && isset($_POST['nokks'])  && isset($_POST['anak'])  && isset($_POST['penerima'])  && isset($_POST['nokps']) ){
    //memasukkan data dalam method POST

		// menyimpan data dalam variabel
		$nama = $_POST ['nama'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$nisn = $_POST ['nisn'];
		$tempatlahir = $_POST ['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$agama = $_POST['agama'];
		$kwn = $_POST['kwn'];
		$khusus = $_POST['khusus'];
		$alamatjalan = $_POST['alamatjalan'];
		$rt = $_POST ['rt'];
		$rw = $_POST ['rw'];
		$namadusun = $_POST ['namadusun'];
		$namakelurahan = $_POST ['namakelurahan'];
		$namakecamatan = $_POST ['namakecamatan'];
		$ttinggal = $_POST ['ttinggal'];
		$mtrans = $_POST ['mtrans'];
		$nokks = $_POST ['nokks'];
		$anak = $_POST ['anak'];
		$penerima = $_POST ['penerima'];
		$nokps = $_POST ['nokps'];

    $sql = "INSERT INTO pesertadidik (nama,jeniskelamin,nisn,nik,tempatlahir,tanggallahir,agama,kwn,khusus,alamatjalan,rt,rw,namadusun,namakelurahan,namakecamatan,kodepos,ttinggal,mtrans,nokks,anak,penerima,nokps) VALUES ('$nama','$jeniskelamin','$nisn','$nik','tempatlahir','$tanggallahir','$agama','kwn','khusus','alamatjalan','rt','rw','namadusun','namakelurahan','namakecamatan','kodepos','ttinggal','mtrans','nokks','anak','penerima','nokps')";
    //sql input kedalam tabel
		if (mysqli_query($conn,$sql)) {
			echo "<script type='text/javascript'>alert('TAMBAH PESERTA BERHASIL');</script>";
			echo "<script type='text/javascript'>window.location='tugas.php';</script>";
		}else{
			echo "TAMBAH PESERTA GAGAL". mysqli_error($conn);
		}
		mysqli_close($conn);
	}
 ?>

<form method="POST" action="tampildata.php">
  <button type="submit">Lihat Data Pendaftar</button>
</form>
</body>
</html>