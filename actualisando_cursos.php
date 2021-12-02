<?php
session_start();
include_once 'conexao2.php';


$ide=MYSQLI_ESCAPE_STRING($con,$_POST['ide']);
$nome=MYSQLI_ESCAPE_STRING($con,$_POST['nome']);    
$periodo=MYSQLI_ESCAPE_STRING($con,$_POST['periodo']); 
$sala=MYSQLI_ESCAPE_STRING($con,$_POST['sala']);   
$bloco=MYSQLI_ESCAPE_STRING($con,$_POST['bloco']);        
$duracao=MYSQLI_ESCAPE_STRING($con,$_POST['duracao']);              
  

$editar=MYSQLI_ESCAPE_STRING($con,$_POST['ide']); 

$sql="update tbl_cursos set nome_curso='$nome',periodo='$periodo',sala='$sala',bloco='$bloco',duracao='$duracao',data_de_modificacao=NOW() where codigo_curso='$ide'";
$assafrao=mysqli_query($con,$sql);


if($assafrao):



header('location:listar_cursos.php');
$_SESSION['kiabo']='<div class="alert alert-info col-md-5 offset-md-2"> Curso Actualizado com Sucesso </div>';
else:
   
    header('location:editar_curso_form.php');
    $_SESSION['kiabo']='<div class="alert alert-info col-md-5 offset-md-2"> Curso não foi Actualizado </div>';

endif;
