<?php


$bdservidor ='127.0.0.1';
$bdusuario = 'root';
$bdsenha ='';
$bdbanco ='AUlATPI2';

$conexao = mysqli_connect($bdservidor,bdusuario,bdsenha,bdbanco);

   if(mysqli_connect_errno($conexao)){

   	 echo "prblemas para canectar ! verifique a conexao";
   	 die();
   }
?>