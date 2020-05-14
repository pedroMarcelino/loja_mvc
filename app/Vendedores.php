<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
        // Define as colunas
        protected $fillable = ['id', 'nome'];

        // Nome da tabela
        protected $table = 'vendedores';
}
