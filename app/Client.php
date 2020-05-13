<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // Define as colunas
    protected $fillable = ['id', 'name', 'email', 'address'];

    // Nome da tabela
    protected $table = 'clients';
}
