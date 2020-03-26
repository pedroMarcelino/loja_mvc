<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    // php artisan make:migration cria_tabela_produtos --create=Produtos

    // Define as colunas
    protected $fillable = ['id', 'nome', 'descricao'];

    // Nome da tabela
    protected $table = 'Categorias';
}
