<?php


include_once 'inclue.php';
include_once 'menu.php';

include_once 'conexao2.php';


session_start();


?>

<div class="conta  containe">
<h2 style="margin-top: -70px;">Lista de Alunos</h2>
  <div class="offset-md-8 dog">
<a href="Gerador_de_Pdf.php" class=" btn-warning btn offset-md-5" style="margin-top: -70px;" > Imprimir  Relatório Formato Pdf</a>
</div>  

    <table class="table table-striped table-hover">

        <thead>
        <?php
if(isset($_SESSION['moring'])):
 echo $_SESSION['moring'];
 unset($_SESSION['moring']);
endif;
?>
<tr>
<th>Nome do Aluno  </th>
<th>Género </th>
<th>Número </th>
<th>Descrição do Curso </th>
<th>Duração </th>
<th>Bloco </th>
<th>Data de Cadastro </th>


</tr>
</thead>

        <tbody>
            
       





          <?php 
      
    

        $xd="select tbl_estudantes.codigo_aluno,tbl_estudantes.nome,tbl_estudantes.genero,tbl_estudantes.numero,tbl_estudantes.data_de_criacao,tbl_cursos.nome_curso,tbl_cursos.duracao,tbl_cursos.periodo,tbl_cursos.bloco from tbl_estudantes  join tbl_cursos on  tbl_estudantes.id_curso=tbl_cursos.codigo_curso";
    
        $moringa=mysqli_query($con,$xd);
        
        foreach($moringa as $sp):
    ?>
<tr>
    <td> <?php  echo $sp['nome'];  ?></td>
    <td> <?php  echo $sp['genero'];  ?></td>
    <td> <?php  echo $sp['numero'];  ?></td>
    <td> <?php  echo $sp['nome_curso'];  ?></td>
    <td> <?php  echo $sp['duracao'];  ?></td>
    <td> <?php  echo $sp['bloco'];  ?></td>
    <td> <?php  echo $sp['data_de_criacao'];  ?></td>
   
   
  
    <td>
        <div class="btn-group">
      <a href="deletar_alunos_cadastrado.php?codigo=<?php echo $sp['codigo_aluno'];  ?>"   class="btn-sm btn-danger btn"> Eliminar</a>
      <a href="editar_aluno.php?codigo=<?php echo $sp['codigo_aluno']; ?>" class="btn-sm btn-info btn"> Actualizar</a>
         
        </div>
    </td>
   
</tr>

<?php endforeach;   ?>
        </tbody>
       
    </table>
    </div>
  
   

</body>
</html>