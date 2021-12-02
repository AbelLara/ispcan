
<?php

include_once 'conexao2.php';
?>


<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  


    <style>
        body{
            text-align: center;
           
        }
        div.tabela{
            margin-top: 20px;
        }
           
       div.tabela table thead{
           background-color: black;
           padding: 30px;
           color: white;
       }
        div.tabela table{
            width: 100%;
            margin: 0;
            padding: 0;
            font-size:13px ;
            
        }
        div.tabela table td {
            text-align: center;
           border-bottom: solid 1px black;
            border-collapse: collapse;
            padding: 5px;

            
        }
        img{
            width: 110px;
            text-align: center;
            align-items: center;
        }
       

        h2{
            background-color: cornflowerblue;
            margin-top: -20px;
            color: white;
        }
        h1{
            margin-top: -20px;
        }
    </style>
</head>
<body>
    <img src="dompdf/img/ISPCAN3.JPG" alt="">
    <h1>ISPCAN</h1>
    <h4>Instituto Superior Politécnico Dom Alexandre Cardeal do Nascimento</h4>
    <h2>Relatório de Estudantes</h2>
    <div class="tabela">

<table>
    <thead>
  <tr>
      <th>Nome Completo</th>
      <th>Género</th>
      <th>Telefone</th>
      <th>Nome do Curso</th>
      <th>duracao</th>
      <th>Periodo</th>
      <th>sala</th>
      <th>Bloco</th>
   
    

  </tr>
    </thead>

    <tbody>
        <?php 
         $xd="select  tbl_estudantes.nome,tbl_estudantes.genero,tbl_estudantes.numero,tbl_cursos.nome_curso,tbl_cursos.duracao,tbl_cursos.periodo,tbl_cursos.bloco,tbl_cursos.sala from tbl_estudantes  join tbl_cursos on  tbl_estudantes.id_curso =tbl_cursos.codigo_curso";
    
         $moringa=mysqli_query($con,$xd);
         
         foreach($moringa as $sp): 
     ?>
<tr>
     <td><?php echo$sp['nome'] ;?></td>
     <td><?php echo$sp['genero'] ;?></td>
     <td><?php echo$sp['numero'] ;?></td>
     <td><?php echo$sp['nome_curso'] ;?></td>
     <td> <?php echo$sp['duracao'] ;?></td>
     <td><?php echo$sp['periodo'] ;?></td>
    
     <td><?php echo$sp['sala'] ;?></td>
     <td><?php echo$sp['bloco'] ;?></td>
   
</tr>
         <?php endforeach; ?>
    </tbody>
</table>
    </div>
</body>
</html>