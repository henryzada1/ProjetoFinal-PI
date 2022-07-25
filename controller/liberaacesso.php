<?php

session_start();
include_once("../model/conexao.php");
include_once("../model/timemodel.php");
extract($_REQUEST,EXTR_OVERWRITE);

$acesso = verificaAcesso($conn,$email);
//var_dump($acesso);
$link1 = header('Location:../ViwGenTime/ViewGen.php');
//$link2 = header('Location: ../ViewCadUsu/ViewSucesso.php');
if($acesso != $email){

	echo "<script>location.href='../ViewCadUsu/ViewSucesso.php'</script>";
	return;
}else{
echo "<script>location.href='../ViwGenTime/ViewGen.php'</script>";
        return;
}
?>        
