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

$editar=MYSQLI_ESCAPE_STRING($con,$_POST['ide']); 

$sql="update tbl_estudantes set nome='$nome',genero='$genero',email='$email',numero='$telefone',bi='$bi',nascimento='$nascimento',id_curso='$curco' where codigo_aluno=$editar";
$assafrao=mysqli_query($con,$sql);


if($assafrao):


header('location:listar_alunos_cadastrados.php');
else:
   
    header('location:listar_alunos_cadastrados.php');

endif;

