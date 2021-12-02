<?php 
session_start();

include_once 'conexao2.php';
$nome=MYSQLI_ESCAPE_STRING($con,$_POST['nome']);
$senha=MYSQLI_ESCAPE_STRING($con,$_POST['senha']);  
$sql="select * from usuarios where senha=$senha";
$resultado=mysqli_query($con,$sql);
if(mysqli_num_rows($resultado)>0):
$segundo="select * from usuarios where senha='$senha' and nome='$nome'";
$resultado=mysqli_query($con,$segundo);
if(mysqli_num_rows($resultado)==1):
header('location:home_proprio.php');
else:
    $_SESSION['kiabo']='<div class="alert alert-danger col-md-8 offset-md-9">Usuário e Senha Incorreta</div>';
    header('location:logar_tela.php');
endif;
else:
    $_SESSION['kiabo']='<div class="alert alert-danger col-md-8 offset-md-9">Usuário Incorreto</div>';
    header('location:logar_tela.php');
endif;

?>