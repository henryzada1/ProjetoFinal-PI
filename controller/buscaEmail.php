<?php
function buscaEmail($conn,$h){
    $query = "select * from tbjogador where emailJogador ='{$h}'";
    $resultado =mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
}

?>