<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{

    public function __construct()
    {
        // Só colocar isso já não deixa acessar as rotas para esse controlador.
        // Rota da linha 22
        // $this->middleware('auth');

        $this->middleware('auth');

    }


    public function index()
    {
        echo '<h4>Lista de Produtos</h4>';
        echo "<ul>";
            echo "<li>Feijão</li>";
            echo "<li>Arroz</li>";
            echo "<li>Macarrão</li>";
            echo "<li>Milho</li>";
        echo "</ul>";
    }
}
