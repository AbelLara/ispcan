<?php

include_once 'inclue.php';

include_once 'conexao2.php';
session_start();

 




?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    
</head>
<body>
    <div class="cabecalho">
     <ul>
<li><a href="">

<span><img src="menu/home_300px.png" alt=""></span>
<span>Home</span>
</a></li>
<li><a href="">

<span><img src="menu/home_300px.png" alt=""></span>
<span>Home</span>
</a></li>
<li><a href="">

<span><img src="menu/home_300px.png" alt=""></span>
<span>Home</span>
</a></li>
<li><a href="">

<span><img src="menu/home_300px.png" alt=""></span>
<span>Home</span>
</a></li>
<li><a href="">

<span><img src="menu/home_300px.png" alt=""></span>
<span>Home</span>
</a></li>


     </ul>
    </div>


    <div class="containe">
    <div class="jumbotron">
<h1>Registros dos Estudantes</h1>
</div>

    <form action="listar_aluno.php" method="POST">
        <div class="col-sm-5 col-md-5 col-xl-5 form-group" >
    <input type="text" placeholder="Pesquisar Aluno pelo Nome" class="form-control" name="buscar">
    </div>
    <br>
    <div class="form-group col-sm-5 col-md-5 col-xl-5 form-group">
    <input type="submit" value="Pesquisar " class="btn btn-sm btn-info">
    </div>
    </form>
    <table class="table table-striped table-hover">

        <thead>
        <?php
if(isset($_SESSION['moring'])):
 echo $_SESSION['moring'];
 unset($_SESSION['moring']);
endif;
?>
<tr>
<th>Nome </th>
<th> Género</th>
<th>Telefone</th>
<th>Email</th>
<th>Bi</th>
<th>Nascimento</th>
<th>Cadastramento</th>
<th>Modificação</th>
</tr>
</thead>

        <tbody>
          <?php 
      
    

        $xd="CALL sp_listar_aluno('$carta')";
    
        $moringa=mysqli_query($con,$xd);
        
        foreach($moringa as $sp):
    ?>
<tr>
    <td> <?php   echo $sp['nome'];  ?></td>
    <td><?php   echo $sp['genero'];  ?></td>
    <td><?php   echo $sp['numero'];  ?></td>
    <td><?php   echo $sp['email'];  ?></td>
    <td><?php   echo $sp['bi'];  ?></td>
    <td><?php   echo $sp['nascimento'];  ?></td>
    <td><?php   echo $sp['data_de_criacao'];  ?></td>
    <td><?php  echo $sp['data_de_alteracao'];  ?></td>
    <td>
        <div class="btn-group">
      <a href="eliminar.php?codigo=<?php echo $sp['codigo_aluno']; ?>" class="btn-sm btn-danger btn"> Eliminar</a>
      <a href="eliminar.php?codigo=<?php echo $sp['codigo_aluno']; ?>" class="btn-sm btn-info btn"> Actualizar</a>
         
        </div>
    </td>
   
</tr>

<?php endforeach;   ?>
        </tbody>
       
    </table>
    </div>

   

</body>
</html>