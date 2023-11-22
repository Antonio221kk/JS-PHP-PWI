<!DOCTYPE html>
<html>
<head>
    <title>..:: Gerencimanto de Livros ::..</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script type="module" src="assets/script.js" async></script>
</head>
<body>

<div class="container">
    <h1>Lista de Produtos</h1>
    <div class="filter">
        <label for="category">Categoria:</label>
        <select id="category">
            <option value="">Selecione uma Categoria...</option>
        </select>
        <label for="productName">Nome do Produto:</label>
        <input type="text" id="productName">
    </div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome do Produto</th>
            <th>Preço</th>
        </tr>
        </thead>
        <tbody id="productList">
        <!-- Os produtos serão listados aqui via JavaScript -->
        <!--<tr><td>2</td><td>TV</td><td>343</td></tr>-->
        </tbody>
    </table>
</div>

<!-- Modal para editar produto -->
<div id="edit-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Editar Produto</h2>
        <form id="edit-form">
            <input type="hidden" id="id" name="id">
            <label for="name">Nome do Produto:</label>
            <input type="text" id="name" name="name">
            <label for="price">Preço:</label>
            <input type="text" id="price" name="price">
            <label for="category_id">Categoria:</label>
            <select id="category_id" name="category_id">
                <option value="">Selecione uma Categoria</option>
            </select>
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>

</body>
</html>

