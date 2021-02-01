<?php

    $kategori=addslashes($_POST[kat]);
    $sub=addslashes($_POST[sub]);


    if(isset($_POST['simpan_subkategori'])){
        $conn->query("INSERT INTO sub_kategori VALUES(
        DEFAULT,
        '$sub',
        '$kategori'
        )");
         
         ?>
                <script>
                    alert("Input SubKategori Berhasil");
                    document.location="add_kategori";
                </script>
            <?php
}    

?>
