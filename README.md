<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.pixel-studios.com/blog/wp-content/uploads/2018/12/012.jpg" width="400" alt="Biblioteca Logo"></a></p>


# Gerenciamento de biblioteca

### Como rodar o projeto em um ambiente local.

```
git clone https://github.com/Igorrteixeira/Library-management.git
cd Library-management
npm install
composer update -> se não tiver instale antes 
crie arquivo .env e compie o .env.example
start seu DB
php artisan migrate --seed
npm run dev 
```
* obs : Quando abrir no localhost clic em generate key app .

### Funcionalidades 
* E possivel 
    * Listar, criar, alterar e deletar usuarios. 
    * Listar, criar, alterar e deletar livros.
    * Listar, criar, alterar e deletar emprestimos de livros.
    * Filtrar livros por categoria.
    * Em alterar emprestimos e possivel mudar o seu status.
    * Ao livro ser emprestado muda seu status de disponivel  para emprestado, com valor booleano.

### Tecnologias

- **[Laravel](https://laravel.com/)**
- **[Php](https://www.php.net/manual/pt_BR/index.php)**
- **[Mysql](https://dev.mysql.com/doc/)**


