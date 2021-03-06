<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'idCliente', 'idFuncionario', 'dataDaVenda', 'valorDaVenda'];
    protected $table ='Vendas';
}