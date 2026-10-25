@extends('layouts.main_layout')

@section('content')
    <div class="container py-5">
        <!-- Cabeçalho da Página -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
            <div>
                <h1 class="h3 text-dark fw-bold mb-1">Catálogo de Produtos</h1>
                <p class="text-muted mb-0">Gerencie e visualize todos os produtos cadastrados no sistema.</p>
            </div>
        </div>

        <!-- Card da Tabela com Visual Moderno -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light text-secondary text-uppercase fs-7 fw-bold">
                            <tr>
                                <th class="py-3 px-4">#ID</th>
                                <th class="py-3 px-4">Nome do Produto</th>
                                <th class="py-3 px-4">Preço</th>
                                <th class="py-3 px-4">Validade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td class="px-4 text-muted fw-medium">#{{ $product->id }}</td>
                                    <td class="px-4 fw-semibold text-dark">{{ $product->name }}</td>
                                    <td class="px-4 text-success fw-bold">
                                        R$ {{ number_format($product->price, 2, ',', '.') }}
                                    </td>
                                    <td class="px-4 text-secondary">
                                        <span class="badge bg-light text-dark border px-2 py-1 fw-normal">
                                            {{ \Carbon\Carbon::parse($product->expiration_date)->format('d/m/Y') }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5 text-muted">
                                        <div class="my-3">
                                            <i class="fas fa-box-open fa-3x text-secondary opacity-50 mb-3"></i>
                                            <h5 class="fw-semibold text-dark">Nenhum produto encontrado</h5>
                                            <p class="text-muted small mb-0">Não há registros disponíveis no momento.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Paginação Centralizada -->
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    </div>
@endsection