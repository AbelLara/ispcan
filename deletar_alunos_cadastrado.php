<?php
include_once 'inclue.php';
session_start();
include_once 'conexao2.php';


$codigo=$_GET['codigo'];



$sql="delete from tbl_estudantes where codigo_aluno=$codigo";


$xd=mysqli_query($con,$sql);
if($xd):
$_SESSION['moring']="<div class='alert alert-info col-sm-5 col-md-5   col-lg-5'> Aluno Apagado com sucesso </div>";
header('location:listar_alunos_cadastrados.php');
else:
    $_SESSION['moring']="<div class='alert alert-info col-sm-5 col-md-5   col-lg-5 ' >O Aluno não Apagado </div>";
    header('location:listar_alunos_cadastrados.php');

endif;







?>