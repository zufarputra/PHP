<form action="" method="post" enctype="multipart/form-data">
    pilih file gambar :
    <input type="file" name="uploud">
    <input type="submit" name="kirim" value="simpan">

</form>

<?php
if (isset($_POST['kirim'])) {
    $file = $_FILES['uploud'];
    //var_dump($_FILES['uploud']);
    foreach ($file as $key => $value) {
        echo $key . '=' . $value;
        echo "<br>";
    }
    $name = $_FILES['uploud']['name'];
    $temp = $_FILES['uploud']['tmp_name'];
    echo $name . '=' . $temp;
    move_uploaded_file($temp,'gambar/'.$name);
}



?>