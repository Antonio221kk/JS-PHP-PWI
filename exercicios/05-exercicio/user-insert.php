<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <script type="module" src="assets/user-insert.js" async></script>
    <title>..:: Cadastro de Usuário ::..</title>
</head>
<body>
<div class="container">
    <h1>Cadastrar Usuário</h1>
    <form id="form-user-insert">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email">
        <label for="password">Senha:</label>
        <input type="text" id="password" name="password">
        <button type="submit">Cadastrar</button>
    </form>
    <div id="message"></div>
</div>
</body>
</html>
