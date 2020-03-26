<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutosVenda extends Model
{
    protected $fillable = [
        'id',
        'venda_id',
        'produto_id',
        'quantidade',
        'valor'
    ];

    protected $table = 'ProdutosVenda';

    // Retorna o produto vendido daquela venda
    public function produtoVendido()
    {
        return $this->hasOne(Produtos::class, 'id');
    }
}
