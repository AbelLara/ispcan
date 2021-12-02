<?php


include_once 'inclue.php';
include_once 'menu.php';

include_once 'conexao2.php';


session_start();


?>

<div class="conta  containe">
  
<h2 style="margin-top: -70px;">Listar Cursos</h2>
    
    <table class="table table-striped table-hover">

        <thead>
        <?php 
  if(isset($_SESSION['kiabo'])):

    echo $_SESSION['kiabo'];
    unset($_SESSION['kiabo']);

  endif;
  ?>
        <?php
if(isset($_SESSION['moring'])):
 echo $_SESSION['moring'];
 unset($_SESSION['moring']);
endif;
?>
<tr>
<th>Nome do Curso  </th>
<th> Duração</th>
<th>Sala</th>
<th>Bloco</th>
<th>Periodo</th>
<th>Data de Cadastro</th>
<th>Data de Modificação</th>


</tr>
</thead>

        <tbody>
          <?php 
      
    

        $xd="select * from tbl_cursos";
    
        $moringa=mysqli_query($con,$xd);
        
        foreach($moringa as $sp):
    ?>
<tr>
    <td> <?php  echo $sp['nome_curso'];  ?></td>
    <td><?php   echo $sp['duracao'];  ?></td>
    <td><?php   echo $sp['sala'];  ?></td>
    <td><?php   echo $sp['bloco'];  ?></td>
    <td><?php   echo $sp['periodo'];  ?></td>
    <td><?php   echo $sp['data_de_criacao'];  ?></td>
    <td><?php   echo $sp['data_de_modificacao'];  ?></td>

  
    <td>
        <div class="btn-group">
      <a href="deletar_cursos_cadastrado.php?codigo=<?php echo $sp['codigo_curso']; ?>" class="btn-sm btn-danger btn"> Eliminar</a>
      <a href="editar_curso_form.php?codigo=<?php echo $sp['codigo_curso']; ?>" class="btn-sm btn-info btn"> Actualizar</a>
         
        </div>
    </td>
   
</tr>

<?php endforeach;   ?>
        </tbody>
       
    </table>
    </div>

   

</body>
</html>