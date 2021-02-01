<?php

    $kategori=addslashes($_POST[kat]);


    if(isset($_POST['simpan_kategori'])){
        $conn->query("INSERT INTO kategori VALUES(
        DEFAULT,
        '$kategori'
        )");
         
         ?>
                <script>
                    alert("Input Kategori Berhasil");
                    document.location="add_kategori";
                </script>
            <?php
}    

?>
