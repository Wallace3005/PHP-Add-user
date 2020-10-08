<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="page-exercicio1.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    
    <title>Exercicio 1</title>
</head>
<body>
    <script type="text/javascript"></script>
        <h2>Cadastro De Usuário</h2>
    <div>
    <form method="POST" action="Processa.php">
        <fieldset>
            <legend class="title">Dados Pessoais</legend>
            <div class="imagem">
                <img src="img/mistery.png" id="imagem">
            </div>
            <legend>Nome:</legend>
                <input class="campo"type="text" name=nome>
            <legend>Data de Nascimento:</legend>
                <input class="campo" type="date" name=nascimento>
            <legend>Sexo:</legend>
                <input type="radio" onclick="alterarImagem('imagem','img/masc.png')" name=sexo value=masculino> Masculino
                <input type="radio" onclick="alterarImagem('imagem','img/fem.png')" name=sexo values=feminino> Feminino
                <br>
            
                <label>Formação:</label>
                    <br>
                <select name="formacao">
                    <option>Selecionar...</option>
                    <option value="Fundamental Incompleto">Ensino Fundamental Incompleto</option>
                    <option value="Fundamental Completo"> Ensino Fundamental Completo </option>
                    <option value="Medio Incompleto"> Ensino Médio Incompleto </option>
                    <option value="Medio Complemento"> Ensino Médio Completo </option>
                    <option value="Superior Incompleto"> Ensino Superior Incompleto </option>
                    <option value="Superior Completo"> Ensino Superior  Completo </option>
                    </select><br>

            <label>Profissão: </label>
                    <br>
                <select name="profissao">
                    <option>Selecionar...</option>
                    <option value="Analista de Redes">Analista de Redes</option>
                    <option value="Analista de Sistemas">Analista de Sistemas</option>
                    <option value="Analista de Business Intelligence">Analista de Business Intelligence</option>
                    <option value="Arquiteto de Soluções">Arquiteto de Soluções</option>
                    <option value="Desenvolvedor de Banco de Dados">Desenvolvedor de Banco de Dados</option>
                    <option value="Engenheiro de Software">Engenheiro de Software</option>
                    <option value="Desenvolvedor Web">Desenvolvedor Web</option>
                    </select> <br>
                

            <legend>CPF:</legend>
                <input class="campo"type="text" name=cpf>

                <br>
            <input class="button" type="submit" name="salvar" value="Salvar Dados">
            <input class="buttonReset" type="reset" name="limpar" value="Limpar Dados">

        </fieldset>
    </form>
</div>
    <!-- Função Javascript: -->
        <script type=text/javascript>
            function alterarImagem(objeto,caminhoNovaImagem){
                document.getElementById(objeto).src=caminhoNovaImagem;
            }
        </script>

    
</body>
</html>