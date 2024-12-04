<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Cadastrados</title>
    <link rel="stylesheet" href="/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/views/estilos/listapaci.css">
</head>
<style>
    
</style>

<body>
<header>
    <h2>Controle de Pacientes</h2>
</header>
    <h1 class="plo">Pacientes Cadastrados</h1>
    <?php if (empty($pacientes)): ?>
        <p>Nenhum paciente.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Nascimento</th>
                    <th>Sexo</th>
                    <th>Etnia</th>
                    <th>País</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $paciente): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($paciente['nome']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['cpf']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['data_nascimento']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['sexo']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['etnia']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['pais']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['cidade']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['estado']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['endereco']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['telefone']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['email']); ?></td>
                        <td>
                         <!-- Link para a página de atualização do livro, enviando o ID do livro via URL -->
                         <a href="/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/update-paciente/<?php echo $paciente['id']; ?>">Atualizar</a>
                        <!-- Formulário para deletar o livro -->
                        <form action="/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/delete-paciente/" method="POST" style="display:inline;">
                         <!-- Campo oculto para enviar o título do livro a ser deletado -->
                        <input type="hidden" name="id" value="<?php echo $paciente['id']; ?>">
                        <button type="submit" class="">Excluir</button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <a href="/ProjetoSPMED_Final/PROJETO-FINAL/ProjFigma-main/public/paciente/cadastro" class="cadastro">Cadastrar novo paciente</a>
</body>
</html>
