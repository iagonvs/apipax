# Documentação API PAX <h1>
### API para cadastro e controle de produtos e consumo do serviço de busca de estados api IBGE.

* Xampp ou Laragon
* Laravel 8
* PHP 7.~
* Mysql -> Criar uma base: pax_db
* Composer

1. composer update | composer install
2. php artisan serve
3. php artisan migrate


### UnitTest:
Rodar: ./vendor/bin/phpunit

### Endpoints:



Tipo
1. Buscar todos os tipos: http://127.0.0.1:8000/api/buscartipo
2. Salvar Tipo: http://127.0.0.1:8000/api/salvartipo?tipo=Alimentação
3. Atualizar Tipo: http://127.0.0.1:8000/api/atualizartipo?id=1&tipo=Limpeza
4. Deletar Tipo: http://127.0.0.1:8000/api/deletartipo?id=1

Modelo do Produto
5. Buscar todos os modelos de produto: http://127.0.0.1:8000/api/buscarmodelo
6. Salvar modelo de produto: http://127.0.0.1:8000/api/salvarmodelo?produto=Sabão Liquido
7. Atualizar modelo de produto: http://127.0.0.1:8000/api/atualizarmodelo?id=4&produto=Teste
8. Deletar modelo de produto: http://127.0.0.1:8000/api/deletarmodelo?id=4

Produto
9. Buscar todos os produtos: http://127.0.0.1:8000/api/buscarproduto
10. Salvar Produto: http://127.0.0.1:8000/api/salvarproduto?id_produto=1&id_tipo=1&quantidade=15
11. Atualizar Produto: http://127.0.0.1:8000/api/atualizarproduto?id=1&produto=Sabão em Pó&id_tipo=1&quantidade=3
12. Deletar Produto: http://127.0.0.1:8000/api/deletarproduto?id=2

Integração Estados
15. Buscar estados: http://127.0.0.1:8000/api/buscarestados
16. Salvar estados: http://127.0.0.1:8000/api/inserirestados
