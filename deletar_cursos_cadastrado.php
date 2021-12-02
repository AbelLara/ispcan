<?php
include_once 'inclue.php';
session_start();
include_once 'conexao2.php';


$codigo=$_GET['codigo'];



$sql="delete from tbl_cursos where codigo_curso=$codigo";


$xd=mysqli_query($con,$sql);
if(mysqli_affected_rows($con)):
$_SESSION['moring']="<div class='alert alert-info col-sm-5 col-md-5   col-lg-5 ' > Curso Apagado com sucesso </div>";
header('location:listar_cursos.php');
else:
    $_SESSION['moring']="<div class='alert alert-info col-sm-5 col-md-5   col-lg-5 ' >O Curso não Apagado </div>";
    header('location:listar_cursos.php');

endif;







?>