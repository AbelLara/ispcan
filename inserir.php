<?php 

include_once 'inclue.php';

include_once 'conexao2.php';


?>

<body>
    <div class="jumbotron">
    <h1> Cadastro de Aluno</h1>
    
</div>
<div class="container">
<form action="" method="POST" >
<div class="row justify-content-center">
<div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
 <input type="text" name="nome" placeholder="Digite o Nome do Estudante" class="form-control">
</div>
<div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
    <select name="" id="" class="form-control">
        <option value="" selected> Selecione o Género</option>
<option value=""> Masculino</option>
<option value=""> Femenino</option>

    </select>
   </div>
</div>

<div class="row justify-content-center">
    <div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
     <input type="text" name="nome" placeholder="Digite o Email" class="form-control">
    </div>
    <div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
        <input type="text" name="nome" placeholder="Digite o Número do Telefone" class="form-control">
       </div>
    </div>

    <div class="row justify-content-center">
        <div class=" form-group col-sm-3 col-md-3 col-lg-3"> 
         <input type="text" name="nome" placeholder="Digite a Data de Nascimento" class="form-control">
        </div>
        <div class=" form-group col-sm-3 col-md-5 col-lg-5"> 
            <input type="text" name="nome" placeholder="Digite o Número do B.i" class="form-control">
           </div>


        </div>

        <div class="row justify-content-center">

<div class=" form-group col-sm-8 col-md-8 col-lg-8"> 
    <select name="" id="" class="form-control">
        <option value="" selected> Selecione o Curso</option>
<option value=""> Masculino</option>
<option value=""> Femenino</option>

    </select>
   </div>
</div>
<div class="row justify-content-center">
<input type="submit" value="Cadastrar Aluno" class="btn btn-info col-sm-7 col-md-7 col-lg-7"> 
</div>    
</form>
</div>


</body>
</html>