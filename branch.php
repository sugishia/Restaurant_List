<?php

//編集
if (isset($_POST['edit']) == true) {
    if(isset($_POST['listcode'])==false){
        header('Location: list_ng.php');
        exit();
    }
    $code = $_POST['listcode'];
    header('Location: list_edit.php?listcode='.$code);
    exit();
}

//削除
if (isset($_POST['delete']) == true) {
    if(isset($_POST['listcode'])==false){
        header('Location: list_ng.php');
        exit();
    }
    $code = $_POST['listcode'];
    header('Location: list_delete.php?listcode='.$code);
    exit();
}

//参照
if (isset($_POST['disp']) == true) {
    if(isset($_POST['listcode'])==false){
        header('Location: list_ng.php');
        exit();
    }
    $code = $_POST['listcode'];
    header('Location: list_disp.php?listcode='.$code);
    exit();
}

//追加
if (isset($_POST['add']) == true) {
    $code = $_POST['listcode'];
    header('Location: list_add.php?listcode='.$code);
    exit();
}
?>