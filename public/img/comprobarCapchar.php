<?php
    $correcto = false;
if(isset($_SESSION['captchar'])){
    if($_GET['texto'] == $_SESSION['captchar']){
        return true;
    }
    echo json_encode(correcto);
}
?>