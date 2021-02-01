<?php

$sub=addslashes($_POST[sub]);
$kat=addslashes($_POST[kat]);
    if(isset($_POST['simpan_sub'])){
   $conn->query("UPDATE sub_kategori SET 
        nama = '$sub',
        id_kategori = '$kat'
        WHERE id_sub='$_GET[id]'
        ");
    ?>
        <script>
                alert("Sukses Edit SubKategori");
                document.location="add_kategori";
        </script>
    <?php
}
?>
