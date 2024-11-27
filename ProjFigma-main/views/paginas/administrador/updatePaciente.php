<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar cadastro!</title>
</head>
<body>

<h1>Atualizar Cadastro</h1>
<form action="/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/update" method="POST">
    <input type="hidden" name="id" value="<?php echo $pacientes['id']; ?>">

    <label for="nome">Nome:</label>
    <input type="text" id="title" name="nome" value="<?php echo $pacientes['nome']; ?>" required><br><br>

    <label for="cpf">CPF:</label>
    <input type="text" id="author" name="cpf" value="<?php echo $pacientes['cpf']; ?>" required><br><br>

    <label for="data_nascimento">data de nascimento:</label>
    <input type="date" id="publication_year" name="data_nascimento" value="<?php echo $pacientes['data_nascimento']; ?>" required><br><br>

    <label for="sexo">Sexo:</label>
    <input type="text" id="genre" name="sexo" value="<?php echo $pacientes['sexo']; ?>"><br><br>

    <label for="etnia">Etnia (R$):</label>
    <input type="text" step="0.01" id="etnia" name="etnia" value="<?php echo $pacientes['etnia']; ?>" required><br><br>

    <label for="pais">País:</label>
    <input type="text" id="genre" name="pais" value="<?php echo $pacientes['pais']; ?>"><br><br>

    <label for="cidade">Cidade:</label>
    <input type="text" id="genre" name="cidade" value="<?php echo $pacientes['cidade']; ?>"><br><br>

    <label for="estado">Estado:</label>
    <input type="text" id="genre" name="estado" value="<?php echo $pacientes['estado']; ?>"><br><br>

    <label for="endereco">Endereço:</label>
    <input type="text" id="genre" name="endereco" value="<?php echo $pacientes['endereco']; ?>"><br><br>

    <label for="telefone">Telefone:</label>
    <input type="text" id="genre" name="telefone" value="<?php echo $pacientes['telefone']; ?>"><br><br>

    <label for="email">E-mail:</label>
    <input type="text" id="genre" name="email" value="<?php echo $pacientes['email']; ?>"><br><br>

    <input type="submit" value="Atualizar Livro">
</form>

<a href="/meu_projeto_livraria/list-books">Voltar para a lista de pacientes</a>

</body>
</html>
