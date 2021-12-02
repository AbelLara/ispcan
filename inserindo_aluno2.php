<?php 
session_start();
include_once 'conexao2.php';


$nome=MYSQLI_ESCAPE_STRING($con,$_POST['nome']);
$genero=MYSQLI_ESCAPE_STRING($con,$_POST['genero']);    
$email=MYSQLI_ESCAPE_STRING($con,$_POST['email']); 
$telefone= MYSQLI_ESCAPE_STRING($con,$_POST['telefone']);   
$bi=MYSQLI_ESCAPE_STRING($con,$_POST['bi']);        
$nascimento=MYSQLI_ESCAPE_STRING($con,$_POST['nascimento']);              
$curco=MYSQLI_ESCAPE_STRING($con,$_POST['curso']);     


$sql="insert into tbl_estudantes (nome,genero,email,numero,bi,nascimento,id_curso) values('$nome','$genero','$email','$telefone','$bi','$nascimento','$curco')";
$assafrao=mysqli_query($con,$sql);


if(mysqli_insert_id($con)):

$_SESSION['kiabo']='<div class="alert alert-info col-md-5 offset-md-2"> Aluno Cadastrado com Sucesso </div>';

header('location:cadastrar_aluno_fm.php');
else:
    $_SESSION['kiabo']='<div class="alert alert-danger col-md-5 offset-md-2"> Aluno não foi Cadastrado </div>';
    header('location:cadastrar_aluno_fm.php');

endif;











