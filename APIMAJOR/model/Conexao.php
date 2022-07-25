<?php


class Conexao{
    Private $con;

    function __construct()
    {

    }

    function connect(){
       // include_once dirname(__FILE__).'./Constants.php';
      
        //$this->con = new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
        $url = "majorcampeonatocsgo-server01.mysql.database.azure.com";
        $usuario ="yywdwifjeb";
        $senha = "AAU13131T1C2345Z$";
        $nomeBanco ="major_bd";
    
        $this->con = mysqli_connect($url,$usuario,$senha,$nomeBanco);

        //$this->con =  mysqli_connect($url,$user,$password,$nomebanco);
       

        if(mysqli_connect_error()){
            echo("Conexão falhou....".mysqli_connect_error());	
        }
        return $this->con;


    }
}