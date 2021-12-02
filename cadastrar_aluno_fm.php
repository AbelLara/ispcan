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
  if(isset($_SESSION['kiabo'])):

    echo $_SESSION['kiabo'];
    unset($_SESSION['kiabo']);

  endif;
  ?>
  <h2 class="offset-md-2">Cadastro de Aluno</h2>
<form action="inserindo_aluno2.php" method="POST" >
<div class="row justify-content-center">
<div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
 <input type="text" name="nome" placeholder="Digite o Nome do Estudante" class="form-control"required>
</div>
<div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
    <select name="genero" id="" class="form-control" required>
        <option value="" selected> Selecione o Género</option>
<option value="Masculino"> Masculino</option>
<option value="Femenino"> Femenino</option>

    </select>
   </div>
</div>

<div class="row justify-content-center">
    <div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
     <input type="text" name="email" placeholder="Digite o Email" class="form-control">
    </div>
    <div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
        <input type="text" name="telefone" placeholder="Digite o Número do Telefone" class="form-control">
       </div>
    </div>

    <div class="row justify-content-center">
        <div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
         <input type="text" name="nascimento" placeholder="Digite a Data de Nascimento" class="form-control" required>
        </div>
        <div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
            <input type="text" name="bi" placeholder="Digite o Número do B.i" class="form-control" required>
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
        
 <button type="submit" class="btn btn-info  col-lg-8  col-sm-5 "> Cadastrar Estudante</button> 
 </div>
 </div>
</form>
</div>

</body>

