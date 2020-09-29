<?php

require_once "../function.php";


$sql = "DELETE FROM tblkategori WHERE idkategori = $id";

$result = mysqli_query($koneksi, $sql);

header("location:http://localhost/PHP-SMK/restoran/kategori/select.php");
