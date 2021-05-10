<?php 
    // mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");
     
    // memanggil file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=export-to-excel.xls");
     
    // memnggil tampildata
    include 'tampildata.php';
?>