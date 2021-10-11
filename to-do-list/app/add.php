<?php

    if(isset($_POST['title'])){
        require '../connection.php';

        $title = $_POST['title'];

        if(empty($title)){
            header("Location: ../index.php?mess=Error");
        } else {
            $stmt = $conn->prepare("INSERT INTO todos (title) VALUES (?)");
            $req = $stmt->execute([$title]);

            if($req){

                header("Location: ../index.php?mess=Success");
            } else {
                header("Location: ../index.php");
            }
            $conn = null;
            exit();
        }
    } else {
        header("Location: ../index.php?mess=Error");
    }




?>