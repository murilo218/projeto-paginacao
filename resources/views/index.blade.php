@extends('layouts.main_layout')

@section('content')
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-dark fw-bold">Catálogo de Produtos</h1>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-body p-0">
                <table class="table table-striped table-hover mb-0 align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th class="py-3 px-4">ID</th>
                            <th class="py-3 px-4">Nome</th>
                            <th class="py-3 px-4">Preço</th>
                            <th class="py-3 px-4">Validade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td class="px-4">{{ $product->id }}</td>
                                <td class="px-4 fw-semibold">{{ $product->name }}</td>
                                <td class="px-4">R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                                <td class="px-4">
                                    {{ \Carbon\Carbon::parse($product->expiration_date)->format('d/m/Y') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4 text-muted">
                                    <i class="fas fa-box-open fa-2x mb-2"></i><br>
                                    Nenhum produto encontrado.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    </div>
@endsection