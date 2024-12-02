<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro!</title>
    <link rel="stylesheet" href="/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/views/estilos/updatepaci.css">
</head>
<body>
<header>
    <h2>Atualização de Pacientes</h2>
</header>

<h1 class="h12">Atualizar Cadastro</h1>
<form action="/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/update" method="POST">
    <input type="hidden" name="id" value="<?php echo $pacientes['id']; ?>">

    <div class="nome">
        <label for="nome">Nome:</label>
        <input type="text" id="title" name="nome" value="<?php echo $pacientes['nome']; ?>" required>
    </div>

    <div class="nome2">
        <label for="cpf">CPF:</label>
        <input type="text" id="author" name="cpf" value="<?php echo $pacientes['cpf']; ?>" required>
    </div>

    <div class="nome3">
        <label for="data_nascimento">Data de nascimento:</label>
        <input type="date" id="publication_year" name="data_nascimento" value="<?php echo $pacientes['data_nascimento']; ?>" required>
    </div>
   

    <div class="nome4">
    <label for="sexo">Sexo:</label>
        <input type="text" id="genre" name="sexo" value="<?php echo $pacientes['sexo']; ?>">
    </div>

    <div class="nome5">
    <label for="etnia">Etnia:</label>
    <input type="text" step="0.01" id="etnia" name="etnia" value="<?php echo $pacientes['etnia']; ?>" required>
    </div>

    <div class="nome6">
    <label for="pais">País:</label>
    <input type="text" id="genre" name="pais" value="<?php echo $pacientes['pais']; ?>">
    </div>

    <div class="nome7">
    <label for="cidade">Cidade:</label>
    <input type="text" id="genre" name="cidade" value="<?php echo $pacientes['cidade']; ?>">
    </div>

    <div class="nome8">
    <label for="estado">Estado:</label>
    <input type="text" id="genre" name="estado" value="<?php echo $pacientes['estado']; ?>">
    </div>

    <div class="nome9">
    <label for="endereco">Endereço:</label>
    <input type="text" id="genre" name="endereco" value="<?php echo $pacientes['endereco']; ?>">
    </div>

    <div class="nome10">
    <label for="telefone">Telefone:</label>
    <input type="text" id="genre" name="telefone" value="<?php echo $pacientes['telefone']; ?>">
    </div>

    <div class="nome11">
    <label for="email">E-mail:</label>
    <input type="text" id="genre" name="email" value="<?php echo $pacientes['email']; ?>">
    </div>


    <div class="botaoenviar"><input type="submit" value="Atualizar Livro"></div>
</form>

<a href="/meu_projeto_livraria/list-books" class="book2">Voltar para a lista de pacientes</a>

</body>
</html>
