<?php

class Operacao{

    private $con;

    function __construct()
    {
        //require_once dirname(__FILE__).'./Conexao.php';
        require_once 'Conexao.php';
        
        $bd = new Conexao();

        $this->con = $bd->connect();
    }


    function buscaJogador(){
        $stmt = $this->con->prepare("select * from tbjogador");
        $stmt->execute();
        $stmt->bind_result($codjogador,$nomeJogador,$foneJogador,$emailJogador,$validaEmail,$codigoTimes);

        $dicas = array();

        while($stmt->fetch()){
            $dica = array();
            $dica['codjogador']= $codjogador;
            $dica['nomeJogador'] = $nomeJogador;
            $dica['codigoTimes'] = $codigoTimes;
            $dica['foneJogador'] = $foneJogador;
            array_push($dicas,$dica);
        }
        return $dicas;
    }

    function getTimes(){
        $stmt = $this->con->prepare("Select * from tbtime");
        $stmt->execute();
        $stmt->bind_result($codigoTimes,$nomeTime,$logoTime,$validaTimekg);

        $dicas = array();

        while($stmt->fetch()){
            $dica = array();
            $dica['codigoTimes']= $codigoTimes;
            $dica['nomeTime'] = $nomeTime;
            $dica['logoTime'] = $logoTime;
            $dica['validaTimekg'] = $validaTimekg;
            array_push($dicas,$dica);
        }
        return $dicas;
    }

}
