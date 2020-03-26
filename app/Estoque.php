<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    // php artisan make:migration cria_tabela_produtos --create=Produtos

    // Define as colunas
    protected $fillable = ['id', 'nome', 'quantidade'];

    // Nome da tabela
    protected $table = 'Estoque';
}
