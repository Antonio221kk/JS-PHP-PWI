# Exercício 04

## Utilizando programação assíncrona com JavaScript e PHP

1) No exercício 03, altere o script index.php, quando clicar em um dos produtos abre-se uma modal com os detalhes do produto para edição. Nesta modal, adicione um botão "Salvar" para serem gravadas as alterações do produto (o funcionamento da modal já está implementado, falta apenas colocar os dados do produto no formulário).
2) Utilize um input do typo hidden para armazenar o id do produto.
3) É necessário criar uma rota getProdutoById na pasta API. Esta rota deve receber o id do produto e retornar os dados do produto em formato JSON.

## Dicas

Para pegar o id do produto selecionado, crie um atributo data-id em cada uma das tr criadas, esse atributo receberá o id do produto da linha (já foi implementado também).
