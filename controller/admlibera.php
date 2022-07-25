<?php
session_start();
extract($_REQUEST,EXTR_OVERWRITE);

$email;
$senha;

if(($email === 'adm@senac.com') & ($senha === 'coronavac')) {
    $_SESSION["email1"] = $email;
//var_dump($_SESSION["email1"]);
   echo "<script>location.href='../ViewAdm/AdmTimes.php'</script>";
	return;
// exit;
    
}else{
    header("Location:../ViewAdm/ViewAdm.php");
}
?>