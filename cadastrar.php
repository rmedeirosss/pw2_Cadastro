<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela De Cadastro</title>
    <link rel="stylesheet" href="css/cadastrar.css">
</head>
<body>
    <div class="container">

    <h2>Cadastrar Aluno</h2>
    <form action="processa_cadastro.php" method="post">

        <label for="rm">Seu RM</label>
    <input type="text"    id="rm"     placeholder="rm" required>

        <label for="nome">Nome Completo</label>
    <input type="text"   id="nome"   placeholder="Nome completo" required>

        <label for="email">Seu E-mail</label>
    <input type="email"  id="email"  placeholder="E-mail do aluno" required>

        <label for="cpf">Seu CPF</label>
    <input type="text"   id="cpf"    placeholder="000.000.000-00" required>

    <button type="submit">Cadastrar</button>
    </form>
    </div>
</body>
</html>