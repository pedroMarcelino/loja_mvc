<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
        'id',
        'customer_id',
        'sale_date',
        'seller_id'
    ];

    protected $table = 'sales';

    // Ver a que cliente pertence a venda pesquisada
    public function client()
    {
        return $this->belongsTo(Client::class, 'customer_id');
    }

    // Qual a nota fiscal associada aquela venda
    public function notaFiscal()
    {
        return $this->hasOne(NotasFiscais::class, 'venda_id');
    }

    public function produtosVenda()
    {
        return $this->hasMany(ProdutosVenda::class, 'venda_id');
    }

    // Qual o vendedor associado aquela venda
    public function vendaVendedor()
    {
        return $this->belongsTo(Vendedores::class, 'id');
    }
}
