<?php
include_once 'inclue.php';
session_start();
include_once 'conexao2.php';


$lara=$_GET['codigo'];



$sql="delete from tbl_estudantes where codigo_aluno=$lara";


$xd=mysqli_query($con,$sql);
$_SESSION['moring']="<div class='alert alert-info col-sm-5 col-md-5   col-lg-5 ' > Registro Apagado com sucesso </div>";
header('location:listar_alunos_cadastrados.php');







?>