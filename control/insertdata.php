<?php

include ../connect/config.php;

    if(isset($_POST['kirim'])){
        var_dump($_POST);
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];

        $query = "INSERT INTO tb_user_web (nama, komentar) VALUES ('$nama', '$komentar')";

        // running query
        if (mysqli_query($conn, $query)) {
             header("Jawabanmu Terkirim, Makasih");
             exit();
            
        } else {
            echo "Error : " .$query. "<br/>" .mysqlierror($conn);
        }
    }
?>