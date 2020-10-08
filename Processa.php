<?php 
    class Processa{
        public $nome;
        public $nascimento;
        public $sexo;
        public $formacao;
        public $profissao;
        public $cpf;
        public $data;
        public $imagem = "img/masc.png";
    

    function imprimir ($nome,$nascimento,$sexo,$formacao,$profissao,$cpf){
        echo "<center><h1>Nome: $nome</h1></center>";
        $data = date("d-m-y", strtotime($nascimento));
        echo "<center><h1>Nascimento: $nascimento</h1></center>";
        echo "<center><h1>Sexo: $sexo</h1></center>";
        if ($sexo == "masculino"){
            echo "<center> <img src='img/masc.png' height:'10px'> </center>";   
        }else {
            echo "<center> <img src='img/fem.png' height:'10px' > </center>";   
        }
        echo "<center><h1>Formacao: $formacao</h1></center>";
        echo "<center><h1>Profissao: $profissao</h1></center>";
        echo "<center><h1>Cpf: $cpf</h1></center>";
    }
    }
$cliente=new Processa;
$cliente -> imprimir($_POST["nome"],
                     $_POST["nascimento"],
                     $_POST["sexo"],
                     $_POST["formacao"],
                     $_POST["profissao"],
                     $_POST["cpf"]
);
?>