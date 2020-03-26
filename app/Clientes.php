<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    // php artisan make:migration cria_tabela_produtos --create=Produtos

    // Define as colunas
    protected $fillable = ['id', 'nome', 'email', 'cpf'];

    // Nome da tabela
    protected $table = 'Clientes';
}
