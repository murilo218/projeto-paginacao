<?php

namespace App\Http\Controllers;

use App\Models\ProdutoModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProdutoController extends Controller
{
    public function index()
    {
        $products = ProdutoModel::paginate(10);

        /*
        $produtosArray = collect([
            'Teclado',
            'Mouse',
            'Monitor',
            'Headset',
            'Webcam',
            'Microfone',
            'Controle',
            'Mousepad',
            'Caixa de som',
            'Notebook',
            'Cadeira gamer',
            'Suporte para monitor'
        ]);
        
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        
        $currentItems = $produtosArray
            ->slice(($currentPage - 1) * $perPage, $perPage)
            ->values();
        
        $products = new LengthAwarePaginator(
            $currentItems,
            $produtosArray->count(),
            $perPage,
            $currentPage,
            [
                'path' => request()->url(),
                'query' => request()->query()
            ]
        );
        */

        return view('index', compact('products'));
    }
}