<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM  tblkategori  WHERE idkategori=$id";

    $row =  $db->getITEM($sql);
}



?>



<h1>Update Data Kategori</h1>
<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="">Nama Kategori</label>
            <input type="text" name="kategori" required value="<?php echo $row['kategori'] ?>" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" id="" value="simpan" class="btn btn-primary">

        </div>
    </form>

</div>


<?php

if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];

    $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id";

    $db->runSQL($sql);

    header("location:?f=kategori&m=select");
}



?>