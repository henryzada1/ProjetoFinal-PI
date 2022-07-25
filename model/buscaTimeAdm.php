<?php
include_once("./conexao.php")
    function buscatodostimes($conn,$codigoTimes){
        $query = "SELECT * from tbtimes where = '{$codigoTimes}'";
        $resultado = mysqli_query($conn, $query);
        $resultado = mysqli_fetch_array($resultado);
        return $resultado;
    }

    function buscatodosjogadores($conn,$codjogador){
        $query = "SELECT * from tbjogador";
        $resultado = mysqli_query($conn, $query);
        $resultado = mysqli_fetch_array($resultado);
        return $resultado;
    }
    //where idjogador ='{$idjogador}'
?>