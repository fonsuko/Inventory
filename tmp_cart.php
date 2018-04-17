<?php
    session_start();

    if(!isset($_GET['r'])){

        $pid = $_GET['p'];
        if($_GET['q'] == ""){
            $quantity = 1;
        } else {
            $quantity = $_GET['q'];
        }
    
        $flag = false;
        for($i=0;$i<count($_SESSION['tmpcart']);$i++){
            if($_SESSION['tmpcart'][$i][0] == $pid){
                if($_GET['u'] == 'false'){
                    $_SESSION['tmpcart'][$i][1] = $_SESSION['tmpcart'][$i][1] + $quantity;
                    $flag = true;
                    echo "pid: ".$_SESSION['tmpcart'][$i][0]." quantity: ".$_SESSION['tmpcart'][$i][1];
                } else if ($_GET['u'] == 'true'){
                    $_SESSION['tmpcart'][$i][1] = $quantity;
                    $flag = true;
                    echo "pid: ".$_SESSION['tmpcart'][$i][0]." quantity: ".$_SESSION['tmpcart'][$i][1];
                }
            }

        }
        if(!$flag){
            array_push($_SESSION['tmpcart'],array($pid,$quantity));
            echo "pid: ".$pid." quantity: ".$quantity;
        }
    } else {
        //echo "remove".$_GET['r'];
        for($i=0;$i<count($_SESSION['tmpcart']);$i++){
            if($_SESSION['tmpcart'][$i][0] == $_GET['r']){
                unset($_SESSION['tmpcart'][$i]);
            }
        }
    }

?>