<?php 
include_once("../model/conexao.php");
include_once("../model/timemodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarkg ($conn,$codigoTimes,$vldemail)){

echo "<script>location.href='../ViewAdm/AdmTimes.php'</script>";
	return;
}else{
   echo "<script>location.href='../ViewAdm/AdmTimes.php'</script>";
	return;
}


/*
  echo("Dado alterado");
}else{
   echo("Dados não aterado"); 
}
*/
?>