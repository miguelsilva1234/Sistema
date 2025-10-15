<?php

    unset(
        $_SESSION['id'],
        $_SESSION['nome'],   
        $_SESSION['email'], 

     );
    header('Location: index.php');


?>