# Sistema de Gestão de Brinquedos

## Sobre o projeto

Esse projeto foi feito para a atividade de recuperação das atividades 6, 7 e 8.

O sistema foi desenvolvido para uma loja de brinquedos e serve para cadastrar e controlar os brinquedos que estão no estoque.

É possível cadastrar, visualizar, editar e excluir os brinquedos.


## Tecnologias usadas

- PHP
- MySQL
- HTML
- CSS
- PDO
- XAMPP
- Visual Studio Code

## Como executar

Para rodar o projeto é necessário ter o XAMPP instalado.

1. Colocar a pasta do projeto dentro da pasta `htdocs`.
2. Abrir o XAMPP.
3. Iniciar o Apache.
4. Iniciar o MySQL.
5. Abrir o `phpMyAdmin`.
6. Criar o banco de dados usado pelo projeto.
7. Criar a tabela de brinquedos.
8. Abrir o navegador.
9. Acessar o projeto pelo `localhost`.


## Funcionalidades

O sistema possui as funções principais de um CRUD:

**Cadastrar:** adiciona um novo brinquedo.

**Listar:** mostra os brinquedos cadastrados.

**Editar:** permite alterar os dados de um brinquedo.

**Excluir:** remove um brinquedo do sistema.

## Dados dos brinquedos

Cada brinquedo possui:

- Nome
- Categoria
- Faixa etária
- Preço
- Quantidade em estoque

## Segurança

As operações realizadas no banco de dados utilizam **Prepared Statements**.

Também foram feitas validações nos dados recebidos pelos formulários para evitar informações incorretas.

## Organização

Os arquivos do projeto foram separados para deixar o código mais organizado e facilitar a manutenção.

## Conclusão

Esse projeto foi feito para colocar em prática os conhecimentos de PHP, MySQL e CRUD.

Também foram trabalhados Prepared Statements, validação dos dados e tratamento de erros.

