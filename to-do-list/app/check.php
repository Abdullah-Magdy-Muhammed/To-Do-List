<?php

    if(isset($_POST['id'])){
        require '../connection.php';

        $id = $_POST['id'];

        if(empty($id)){

            echo 'error';
            
        } else {

            $todos = $conn->prepare("SELECT id,checked FROM todos WHERE id=?");
            $todos->execute([$id]);

            $todo = $todos->fetch();
            $uID = $todo['id'];
            $checked = $todo['checked'];

            $inchecked = $checked ? 0 : 1;

            $res = $conn->query("UPDATE todos SET checked = $inchecked WHERE id=$uID");

            if($res){

                echo $checked;
            } else {
                echo "Error";
            }
            $conn = null;
            exit();
        }
    } else {
        header("Location: ../index.php?mess=Error");
    }




?>