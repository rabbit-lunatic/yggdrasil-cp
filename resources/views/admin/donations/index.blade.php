@extends('layouts.app')

@section('title', 'Gerenciar Doações - Admin')

@section('content')
<main class="max-w-[1200px] mx-auto p-5">
    <div class="mb-8">
        <h1 class="text-4xl font-bold font-robotoCond text-brand-main text-center">Gerenciar Doações</h1>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        {{ session('error') }}
    </div>
    @endif

    <!-- Estatísticas -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-6">
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-xs font-medium text-gray-500 uppercase">Total</div>
            <div class="mt-1 text-2xl font-semibold text-gray-900">{{ $stats['total'] }}</div>
        </div>
        <div class="bg-yellow-50 rounded-lg shadow p-4">
            <div class="text-xs font-medium text-yellow-800 uppercase">Pendentes</div>
            <div class="mt-1 text-2xl font-semibold text-yellow-900">{{ $stats['pending'] }}</div>
        </div>
        <div class="bg-green-50 rounded-lg shadow p-4">
            <div class="text-xs font-medium text-green-800 uppercase">Pagas</div>
            <div class="mt-1 text-2xl font-semibold text-green-900">{{ $stats['paid'] }}</div>
        </div>
        <div class="bg-red-50 rounded-lg shadow p-4">
            <div class="text-xs font-medium text-red-800 uppercase">Canceladas</div>
            <div class="mt-1 text-2xl font-semibold text-red-900">{{ $stats['cancelled'] }}</div>
        </div>
        <div class="bg-blue-50 rounded-lg shadow p-4">
            <div class="text-xs font-medium text-blue-800 uppercase">Receita</div>
            <div class="mt-1 text-xl font-semibold text-blue-900">R$ {{ number_format($stats['total_revenue'], 2, ',', '.') }}</div>
        </div>
        <div class="bg-purple-50 rounded-lg shadow p-4">
            <div class="text-xs font-medium text-purple-800 uppercase">Pontos</div>
            <div class="mt-1 text-xl font-semibold text-purple-900">{{ number_format($stats['total_points']) }}</div>
        </div>
    </div>

    <!-- Filtros -->
    <div class="bg-white rounded-lg shadow mb-6 p-4">
        <form method="GET" action="{{ route('admin.donations.index') }}" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Buscar Usuário</label>
                <input 
                    type="text" 
                    name="search" 
                    value="{{ request('search') }}" 
                    placeholder="Username ou email..."
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                >
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="status" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">Todos</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pendente</option>
                    <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Pago</option>
                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelado</option>
                </select>
            </div>
            <div class="md:col-span-2 flex gap-2">
                <button type="submit" class="bg-brand-main text-white px-6 py-2 rounded-md hover:bg-brand-green font-robotoCond font-bold transition-colors">
                    Filtrar
                </button>
                <a href="{{ route('admin.donations.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-300 font-robotoCond font-bold transition-colors">
                    Limpar
                </a>
            </div>
        </form>
    </div>

    <!-- Tabela de Doações -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Usuário</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Valor</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pontos</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pago em</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($transactions as $transaction)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        #{{ $transaction->id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{ $transaction->user->username ?? 'N/A' }}</div>
                        <div class="text-sm text-gray-500">{{ $transaction->user->email ?? 'N/A' }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $transaction->created_at->format('d/m/Y H:i') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                        R$ {{ number_format($transaction->amount / 100, 2, ',', '.') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        {{ number_format($transaction->points) }} pts
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($transaction->status == 'paid')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Pago
                            </span>
                        @elseif($transaction->status == 'pending')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pendente
                            </span>
                        @elseif($transaction->status == 'cancelled')
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Cancelado
                            </span>
                        @else
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                {{ ucfirst($transaction->status) }}
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $transaction->paid_at ? $transaction->paid_at->format('d/m/Y H:i') : '-' }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        @if($transaction->status == 'pending')
                            <form action="{{ route('admin.donations.process', $transaction->id) }}" method="POST" class="inline" onsubmit="return confirm('Processar esta transação e creditar {{ number_format($transaction->points) }} pontos ao usuário?');">
                                @csrf
                                <button type="submit" class="text-green-600 hover:text-green-900 font-semibold">
                                    ✅ Processar
                                </button>
                            </form>
                        @else
                            <span class="text-gray-400">-</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-6 py-12 text-center text-gray-500">
                        Nenhuma transação encontrada.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Paginação -->
        @if($transactions->hasPages())
        <div class="bg-white px-4 py-3 border-t border-gray-200">
            {{ $transactions->links() }}
        </div>
        @endif
    </div>
</main>
@endsection
