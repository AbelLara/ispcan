<?php 
session_start();
include_once 'conexao2.php';


$nome=MYSQLI_ESCAPE_STRING($con,$_POST['nome']);
$sala=MYSQLI_ESCAPE_STRING($con,$_POST['sala']);    
$duracao=MYSQLI_ESCAPE_STRING($con,$_POST['duracao']); 
$periodo= MYSQLI_ESCAPE_STRING($con,$_POST['periodo']);   
$bloco=MYSQLI_ESCAPE_STRING($con,$_POST['bloco']);        


$sql="insert into tbl_cursos (nome_curso,duracao,sala,bloco,periodo) values('$nome','$duracao','$sala','$bloco','$periodo')";
$assafrao=mysqli_query($con,$sql);


if(mysqli_insert_id($con)):

$_SESSION['kiabo']='<div class="alert alert-info col-md-5 offset-md-2"> Curso Cadastrado com Sucesso </div>';

header('location:cadastrar_cursos_fm.php');
else:
    $_SESSION['kiabo']='<div class="alert alert-danger col-md-5 offset-md-2">O Curso não foi Cadastrado </div>';
    header('location:cadastrar_cursos_fm.php');

endif;





