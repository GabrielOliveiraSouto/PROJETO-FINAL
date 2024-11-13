<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Cadastrados</title>
</head>
<body>
    <h1>Pacientes Cadastrados</h1>
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
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/view/paciente_view.php">Cadastrar novo paciente</a>
</body>
</html>
