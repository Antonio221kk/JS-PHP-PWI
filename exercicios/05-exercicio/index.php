<!DOCTYPE html>
<html>
<head>
    <title>..:: Gerenciamento de Livros ::..</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script type="module" src="assets/script.js" async></script>
</head>
<body>
<div class="container">
    <h1>Lista de Livros</h1>
    <div class="filter">
        <label for="category">Categoria:</label>
        <select id="category">
            <option value="">Selecione uma categoria</option>
        </select>
        <label for="author">Autor:</label>
        <select id="author">
            <option value="">Selecione um autor</option>
        </select>
        <label for="bookTitle">Título do Livro:</label>
        <input type="text" id="bookTitle">
    </div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Preço</th>
            <th>Apagar</th>
        </tr>
        </thead>
        <tbody id="bookList">
        <!--<tr data-id="2">
            <td>2</td>
            <td>Título</td>
            <td>Preço</td>
            <td><button>X</button></td>
        </tr>-->
        </tbody>
    </table>
</div>
<!-- Modal para editar Livro -->
<div id="edit-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Editar Livro</h2>
        <form id="edit-form">
            <input type="hidden" id="id" name="id">
            <label for="title">Título:</label>
            <input type="text" id="title" name="title">
            <label for="category_id">Categoria:</label>
            <select id="category_id" name="category_id">
                <option value="">Selecione uma Categoria</option>
            </select>
            <label for="author_id">Autor:</label>
            <select id="author_id" name="author_id">
                <option value="">Selecione um Author</option>
            </select>
            <label for="price">Preço:</label>
            <input type="text" id="price" name="price">
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>
</body>
</html>
