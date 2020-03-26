<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'tel'
    ];

    protected $table = 'clients';

    // Ver compras existentes por ID
    public function sales()
    {
        return $this->hasMany(Sales::class, 'customer_id');
    }

    public function vend_clientes()
    {
        return $this->hasManyThrough(Sales::class, Vendedores::class);
    }

    public function prod_clientes()
    {
        return $this->hasManyThrough(
            Sales::class,
            ProdutosVenda::class,
            'produto_id',
            'customer_id',
            'id',
            'id'
        );
    }

}
