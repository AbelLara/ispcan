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
  <?php 
  if(!empty($_GET['codigo'])):
    $codigo=$_GET['codigo'];
  endif;
  ?>
  <h2 class="offset-md-2">Editar Curso</h2>
<form action="actualisando_cursos.php" method="POST" >
 <?php  
 $sql="select * from tbl_cursos where codigo_curso=$codigo";
 $dados=mysqli_query($con,$sql);
 
 foreach($dados as $gingibre):
 
 ?>
 
 <?php endforeach ; ?>
  
<input type="hidden"  value="<?php echo $gingibre['codigo_curso']; ?>" name="ide">
<div class="row justify-content-center">
<div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
 <input type="text" name="nome" placeholder="Digite o Nome do Curso" class="form-control"required value="<?php echo $gingibre['nome_curso']; ?>">
</div>
<div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
    <select name="periodo" id="" class="form-control" required>
        <option value="<?php echo $gingibre['periodo']; ?>" selected> <?php echo $gingibre['periodo']; ?></option>
<option value="Manhã"> Manhã</option>
<option value="Tarde"> Tarde</option>
<option value="Noite"> Noite</option>

    </select>
   </div>
</div>

<div class="row justify-content-center">
    <div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
     <input type="text" name="sala" placeholder="Digite a Sala" class="form-control" value="<?php echo $gingibre['sala']; ?>">
    </div>
    <div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
    <select name="bloco" id="" class="form-control" values="">
        <option selected>Selecione o Bloco</option>
       
        <option value="<?php echo $gingibre['bloco']; ?>" selected> <?php echo $gingibre['bloco']; ?></option>
         <option value="A">A</option>
         <option value="B">B</option>
         <option value="C">C</option>
         <option value="D">D</option>
         <option value="E">E</option>
         <option value="F">F</option>
         <option value="G">G</option>
         <option value="H">H</option>
        </select>
       </div>
    </div>
  
    <div class="row justify-content-center">
        <div class=" form-group col-sm-8 col-md-8 col-lg-8"> 

        <select name="duracao" id="" class="form-control">
        <option value="<?php echo $gingibre['duracao']; ?>" selected> <?php echo $gingibre['duracao']; ?></option>
     
         <option value="4 Anos">4 Anos</option>
         <option value="5 Anos">5 Anos</option>
         <option value="6 Anos">6 Anos</option>
        </select>
        
        </div>
       
        </div>
        
        <div class="offset-md-6">
        
 <button type="submit" class="btn btn-info  col-lg-8  col-sm-5 "> Guardar Edição</button> 
 </div>
 </div>
</form>
</div>

</body>
