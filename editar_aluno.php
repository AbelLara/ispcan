<?php
include_once 'menu.php';

include_once 'inclue.php';


include_once 'conexao2.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
     .container{
      margin-top: 200px;
      position: absolute;

     }
    </style>
</head>

<body>
 


<div class="container">
<?php 
  if(!empty($_GET['codigo'])):
    $codigo=$_GET['codigo'];
  endif;
  ?>

<?php 
  if(isset($_SESSION['kiabo'])):

    echo $_SESSION['kiabo'];
    unset($_SESSION['kiabo']);

  endif;
  ?>
  <h2 class="offset-md-2">Editar Aluno</h2>
<form action="actualisando_aluno.php" method="POST" >
<?php  
 $sql="select * from tbl_estudantes where codigo_aluno=$codigo";
 $dados=mysqli_query($con,$sql);
 foreach($dados as $gingibre):
 
 ?>
  <?php endforeach ; ?>
  
  <input type="hidden"  value="<?php echo $gingibre['codigo_aluno']; ?>" name="ide">
<div class="row justify-content-center">
<div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
 <input type="text" name="nome" placeholder="Digite o Nome do Estudante" value="<?php echo $gingibre['nome']; ?>" class="form-control"required>
</div>
<div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
    <select name="genero" id="" class="form-control">
    <option value="<?php echo $gingibre['genero']; ?>" selected> <?php echo $gingibre['genero']; ?></option>
<option value="Masculino"> Masculino</option>
<option value="Femenino"> Femenino</option>

    </select>
   </div>
</div>

<div class="row justify-content-center">
    <div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
     <input type="text" name="email" placeholder="Digite o Email"   value="<?php echo $gingibre['email']; ?>" class="form-control">
    </div>
    <div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
        <input type="text" name="telefone" placeholder="Digite o Número do Telefone" value="<?php echo $gingibre['numero']; ?>" class="form-control">
       </div>
    </div>

    <div class="row justify-content-center">
        <div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
         <input type="text" name="nascimento" placeholder="Digite a Data de Nascimento"  value="<?php echo $gingibre['nascimento']; ?>" class="form-control" required>
        </div>
        <div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
            <input type="text" name="bi" placeholder="Digite o Número do B.i"  value="<?php echo $gingibre['bi']; ?>" class="form-control" required>
           </div>
        </div>
        <div class="row justify-content-center">
       
        <div class=" form-group col-sm-8 col-md-8 col-lg-8"> 
       
        <select name="curso" id="" class="form-control">
        <?php 

$sql= " select * from tbl_cursos";
$moringa=mysqli_query($con,$sql);
while($variavel=mysqli_fetch_assoc($moringa)) {?>
        <option value="<?php echo $variavel['codigo_curso'];?>"> <?php echo $variavel['nome_curso'];?></option><?php }?> 
        <option value="" selected> Selecione o Curso </option>
       

    </select>
           </div>
        </div>
        <div class="offset-md-6">
        
 <button type="submit" class="btn btn-info  col-lg-8  col-sm-5 "> Actualizar Estudante</button> 
 </div>
 </div>
</form>
</div>

</body>
