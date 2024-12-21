<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // passando os campos no protected para garantir que somente este campo serao preenchido em atribuição de massa. Protegendo a aplicação contra Mass Assignment Vulnerabilities.
    protected $fillable = ['name', 'email', 'telefone'];
}
