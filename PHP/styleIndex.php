<?php header("Content-type: text/css"); ?>

@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, cyan, yellow);
    }
div.conteiner-login{
        background-color: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: #fff;
    }

h1{
    font-family: "Press Start 2P", sans-serif;
    font-size: 1em;
    color: #6363da;
}

input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
    }
button{
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
        font-size: 15px;
        
    }
button:hover{
        background-color: deepskyblue;
        cursor: pointer;
    }

.alert{
    text-aling: center;
    display: flex;
    justify-content: center;
    align-itens: center;
    text-align: center;
}
strong{
    color: red;
}
#invalid{
    animation: entrar 0.3s linear;
    font-family: "Press Start 2P", sans-serif;
    font-wheigt: bold;
    font-size: 1.5em;
    
    border-radius: 10px;
    text-aling: center;
    
    margin: auto;
    margin-top: auto;

}

@keyframes entrar {

   0%{
    opacity: 0;
   } 
   100%{
    opcaity: 1;
   }

  0%, 20%, 40%, 60%, 80% {
    transform: translateX(8px);
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    transform: translateX(-8px);
  }
}