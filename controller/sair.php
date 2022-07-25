<?php
session_start();
include_once("../model/timemodel.php");
sairTime();
if(sairTime()){
    header("Location:../index.php");

  }else{
    header("Location:../index.php");
  }



