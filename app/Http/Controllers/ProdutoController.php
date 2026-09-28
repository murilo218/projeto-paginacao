<?php

namespace App\Http\Controllers;

use App\Models\ProdutoModel;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $products = ProdutoModel::paginate(10);

        return view('index', compact('products'));
    }
}