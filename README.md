# Drugovich
### Método -> endpoint ("parametros":tipo) -> Funcionalidade

## Grupo de Usuário

- [POST] => http://localhost/api/group/insert ("name":string) -> Cadastrar Novo Grupo
- [GET] => http://localhost/api/groups/ ( ) -> Visualizar todos os Grupos
- [GET] => http://localhost/api/group/id ("id":integer) -> Visualizar um único Grupo
- [PUT] => http://localhost/api/group/id ("name":string) -> Atualizar o nome de um Grupo
- [DELETE] => http://localhost/api/group/delete/id ("id":integer) -> Excluir um Grupo

## Clientes

- [POST] => http://localhost/api/client/insert ("name":string, "cnpj":string, "foundationDate":date, "idGroup":integer) -> Cadastrar Novo Cliente
- [GET] => http://localhost/api/clientss/ ( ) -> Visualizar todos os Clientes
- [GET] => http://localhost/api/client/id ("id":integer) -> Visualizar um único Cliente
- [GET] => http://localhost/api/client/group/idGroup ("idGroup":integer) -> Visualizar cliente por Grupo
- [PUT] => http://localhost/api/client/id ("name":string, "cnpj":string, "foundationDate":date, "idGroup":integer) -> Atualizar dados de um Cliente
- [DELETE] => http://localhost/api/client/delete/id ("id":integer) -> Excluir um Cliente

## Gerentes

- [POST] => http://localhost/api/manager/register ("name":string, "email":string, "password":string, "level":integer) -> Cadastrar Novo Gerente
- [GET] => http://localhost/api/clients/ ( ) -> Visualizar todos os Gerentes
- [GET] => http://localhost/api/client/id ("id":integer) -> Visualizar um Gerente específico
- [PUT] => http://localhost/api/manager/id ("name":string, "email":string, "password":string, "level":integer) -> Atualizar dados de um Gerente
- [DELETE] => http://localhost/api/client/manager/id ("id":integer) -> Excluir um Gerente

## Nível do Gerente

| Código | Nível  |
| ------ | ------ |
| 1 | Gerente de Nível 1 |
| 2 | Gerente de Nível 2 |

## Autenticação

- A a autentição é via token, a versão utilizada é Bearer Token.
- Para a utilização do sistema é necessário passar o token por parametro no header, ou pode ser inserido dentro da Authorization 
 
## Banco de dados 

- O dump do banco de dados esta dentro da pasta Database
- A base utilizada foi mysql
