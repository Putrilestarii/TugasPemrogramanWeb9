<?php 
   

    include ('C:\xampp\htdocs\reportexcel\koneksi.php'); // memanggil koneksi database

    $sql= "SELECT * FROM pesertadidik;"; // menampilkan tabel pesertadidik
    $query= mysqli_query($koneksi, $sql) or die("Proses cetak gagal"); // proses pengecekan koneksi kedalam database
    echo "<table width='75%' cellspacing='0' cellpadding='2' border='1'>    
    <tr>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>NISN</th>
        <th>NIK</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGGAL LAHIR</th>
        <th>AGAMA</th>
        <th>KEWARGANEGARAAN</th>
        <th>KEBUTUHAN KHUSUS</th>
        <th>ALAMAT</th>
        <th>RT</th>
        <th>RW</th>
        <th>NAMA DUSUN</th>
        <th>NAMA KELURAHAAN</th>
        <th>NAMA KECAMATAAN</th>
        <th>TEMPAT TINGGAL</th>
        <th>JENIS TRANSPORTASI</th>
        <th>NO KKS </th>
        <th>ANAK</th>
        <th>PENERIMA</th>
        <th>NO KPS</th>
    </tr>"; 

    $no=1; 
    while ($hasil = mysqli_fetch_assoc($query)) { // menampilkan variabel
            echo "<tr>"; // membuat tabel row
            echo "<td>".$hasil['nama']."</td>"; 
            echo "<td>".$hasil['jeniskelamin']."</td>"; 
            echo "<td>".$hasil['nisn']."</td>";  
            echo "<td>".$hasil['nik']."</td>"; 
            echo "<td>".$hasil['tempatlahir']."</td>"; 
            echo "<td>".$hasil['tanggallahir']."</td>"; 
            echo "<td>".$hasil['agama']."</td>"; 
            echo "<td>".$hasil['kwn']."</td>"; 
            echo "<td>".$hasil['khusus']."</td>"; 
            echo "<td>".$hasil['alamatjalan']."</td>";
            echo "<td>".$hasil['rt']."</td>"; 
            echo "<td>".$hasil['rw']."</td>"; 
            echo "<td>".$hasil['namadusun']."</td>"; 
            echo "<td>".$hasil['namakelurahan']."</td>"; 
            echo "<td>".$hasil['namakecamatan']."</td>"; 
            echo "<td>".$hasil['kodepos']."</td>"; 
            echo "<td>".$hasil['ttinggal']."</td>"; 
            echo "<td>".$hasil['mtrans']."</td>"; 
            echo "<td>".$hasil['nokks']."</td>"; 
            echo "<td>".$hasil['anak']."</td>"; 
            echo "<td>".$hasil['penerima']."</td>"; 
            echo "<td>".$hasil['nokps']."</td>"; 
            echo "</tr>";
            
            $no++; 
            
    }       
        echo "</table>";
 ?>
 <br> 
 <a href="export.php"><button>Export to Excel</button></a><br /> 