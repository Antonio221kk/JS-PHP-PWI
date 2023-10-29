# Exercício 01

## Utilizando programação assíncrona com JavaScript e PHP

1) No arquivo 'login.php' tem um formulário de login, as informações do formulário devem ser enviadas para o arquivo 'api/user-login.php'. O arquivo 'api/user-login.php' deve receber os dados do formulário para validar se o usuário e senha estão corretos, no vetor $users tem uma lista de usuários. 

Se estiverem corretos devolva em JSON os dados do usuário:

```json
{
    "id": 1,
    "name": "João da Silva",
    "email": "joao@gmail.com"
}

```
Na div class="message-box" exiba uma mensagem de boas vindas ao usuário.

Se e-mail e/ou senha estiverem incorretos, devolva em JSON uma mensagem de erro:

```json
{
    "error": "Usuário e/ou senha incorretos"
}
```

Se e-mail e senha estiverem em branco:
    
```json
{
 "error": "Usuário e/ou senha em branco"
}
```
Na div class="message-box" exiba as mensagens de erro.

2) No arquivo 'index.php' faça uma requisição ao arquivo 'api/user-list.php' para obter a lista de usuários. Exiba a lista de usuários na tabela. O retorno deve ser em JSON.

```json
[
  {"id":1,"name":"John Doe","email":"john@gmail.com","password":"123456"},
  {"id":2,"name":"Mary Doe","email":"mary@gmail.com","password":"123456"},
  {"id":3,"name":"Peter Doe","email":"peter@gmail.com","password":"123456"},
  {"id":4,"name":"Jane Doe","email":"jane@gmail.com","password":"123456"}
]
```
