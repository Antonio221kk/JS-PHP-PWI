<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <script type="module" src="assets/insert-book.js" async></script>
    <title>..:: Formulário de Inclusão de Livros ::..</title>
</head>
<body>
<div class="container">
    <h1>Editar Livro</h1>
    <form id="edit-form">
        <input type="hidden" id="bookId" name="bookId">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title">
        <label for="category">Categoria:</label>
        <select id="category" name="category">
            <option value="">Selecione uma Categoria</option>
        </select>
        <label for="category">Autor:</label>
        <select id="author" name="author">
            <option value="">Selecione um Author</option>
        </select>
        <label for="price">Preço:</label>
        <input type="text" id="price" name="price">
        <button type="submit">Salvar</button>
    </form>
</div>
</body>
</html>
