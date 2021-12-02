<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

div.primeiro ul li a img{
    width: 50px;
   
}
div.primeiro{
    top: 0;
width: 100%;
position: relative;
background-color: #0c76b4;
height: 60px;
box-shadow: 1px 7px 3px rgba(0,0,0,.8);

}
div.primeiro ul{
    top:20px;
    position: absolute;
    flex-direction: row;
    display: flex;
    text-align: center;
    align-items: center;
   margin: 0px -35px;
   text-decoration: none;
  
   
    
}
div.primeiro ul li{
    list-style: none;
    text-decoration: none;
    margin: 0px 30px;
    
    
}
div.primeiro ul li a{
    color: white;
    text-decoration: none;
   font-size: 18px;

}

div.primeiro ul li :hover{

  color: red;
  border-bottom: solid 5px red;
  padding: 18px 0px;
  transition: .5s;


}
div.primeiro div.imagens span.span1 img{
   
}
div.primeiro div.imagens img{
    width: 50px;
    display: none;
    text-decoration: none;
}
div.conta{
    position: absolute;
   margin-top: 150px;
   width: 100%;
}
        img{
            width: 100%;
           
        }
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

       


        div.pai{
            width: 100%;
            background: linear-gradient(-45deg,#0c76b4,#174ea0,black)no-repeat;
            height: 30vh;
        
            background-size: 300% 300%;
    animation: hd 2s ease alternate infinite;
    position: relative;
        }

        div.pai div.filho{
            position: absolute;
        }
        div.pai div.filho img{
width: 50px;
padding:70px 20px;
cursor: pointer;
        }
        div.filho h1{
           text-align: center;
           margin-top: -120px;
           align-items: center;
           margin-left: 600px;
           color: white;
        }
        div.filho img:hover{
            transform: translateY(-20px);
            transition: .5s;
            
        }
        div.filho h1:hover{
            transform: translateY(-20px);
            transition: .5s;
            cursor: pointer;
            
        }
        @keyframes hd{
from{
    background-position: 0  50%;
}
to{

    background-position: 100% 50%;
}
}
nav.danger{
position: fixed;
   margin-top: -500px;
   text-align: center;
}




    </style>
</head>
<body>
    
    <div class="primeiro">
           <ul>
               <li>
                   <a href="">
    
    
    <span>Home</span>
    
                   </a>
               </li>
               <li>
                <a href="cadastrar_aluno_fm.php">
    
    
    <span>Cadastrar Alunos</span>
    
                </a>
            </li>
    
            <li>
                <a href="listar_alunos_cadastrados.php">
    
    
    <span>Listar Alunos</span>
    
                </a>
            </li>
            <li>
                <a href="cadastrar_cursos_fm.php">
    
    
    <span>Cadastrar Cursos</span>
    
                </a>
            </li>
            <li>
                <a href="listar_cursos.php">
    
    
    <span>Listar Cursos</span>
    
                </a>
            </li>
           </ul>
       </div>

       <img src="rede_social/fundo3.png" alt="">


       <div class="pai">
<div class="filho">
    <a href="https://free.facebook.com/"><img src="rede_social/facebook2_old_127px.png" alt=""></a>
    <a href="https://mail.google.com/"><img src="rede_social/google2_127px.png" alt=""></a>
    <a href=""><img src="rede_social/twitter2_127px.png" alt=""></a>
    <a href=""><img src="rede_social/whatsapp2_127px.png" alt=""></a>

            <h1>=ISPCAN=</h1>
</div>

       </div>
</body>
</html>