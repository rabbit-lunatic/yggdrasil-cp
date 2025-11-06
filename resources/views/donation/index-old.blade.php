@extends('layouts.app')

@section('title', 'Ygg Points - Myth of Yggdrasil')
@section('description', 'Manage your Ygg Points balance and transactions.')

@section('content')
<div class="flex-1 small:py-12 bg-ui-bg-subtle" data-testid="account-page">
    <div class="flex-1 h-full max-w-5xl mx-auto bg-white flex flex-col px-8">
        <div class="grid grid-cols-1 small:grid-cols-[240px_1fr] py-12">
            <!-- Sidebar Menu -->
            <div>
                <div class="small:hidden" data-testid="mobile-account-nav">
                    <div class="text-xl-semi mb-4 px-8">Hello {{ session('first_name') ?? 'User' }}</div>
                    <div class="text-base-regular">
                        <ul>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account"><div class="flex items-center gap-x-2"><span>Overview</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/game-accounts"><div class="flex items-center gap-x-2"><span>Game Accounts</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/ygg-points"><div class="flex items-center gap-x-2"><span>Ygg Points</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/votes"><div class="flex items-center gap-x-2"><span>Votos</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/orders"><div class="flex items-center gap-x-2"><span>transactions</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" href="/account/profile"><div class="flex items-center gap-x-2"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6663 18V16.3333C16.6663 15.4493 16.3152 14.6014 15.69 13.9763C15.0649 13.3512 14.2171 13 13.333 13H6.66634C5.78229 13 4.93444 13.3512 4.30932 13.9763C3.6842 14.6014 3.33301 15.4493 3.33301 16.3333V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.0003 9.66667C11.8413 9.66667 13.3337 8.17428 13.3337 6.33333C13.3337 4.49238 11.8413 3 10.0003 3C8.15938 3 6.66699 4.49238 6.66699 6.33333C6.66699 8.17428 8.15938 9.66667 10.0003 9.66667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Profile</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                            <li>
                                <form method="POST" action="/logout" class="w-full">
                                    @csrf
                                    <button type="submit" class="flex items-center justify-between py-4 border-b border-gray-200 px-8 w-full">
                                        <div class="flex items-center gap-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.167 1.944h3.11c.983 0 1.779.796 1.779 1.778v7.556c0 .982-.796 1.778-1.778 1.778H8.167"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 10.611 8.611 7.5 5.5 4.389M8.611 7.5H1.944"></path></svg>
                                            <span>Log out</span>
                                        </div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden small:block" data-testid="account-nav">
                    <div><div class="pb-4"><h3 class="text-base-semi">Account</h3></div><div class="text-base-regular"><ul class="flex mb-0 justify-start items-start flex-col gap-y-4"><li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="overview-link" href="/account">Overview</a></li><li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="game-accounts-link" href="/account/game-accounts">Game Accounts</a></li><li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="ygg-points-link" href="/account/ygg-points">Ygg Points</a></li><li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="votes-link" href="/account/votes">Votos</a></li><li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="orders-link" href="/account/orders">transactions</a></li><li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="download-link" href="/download">Download</a></li><li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="profile-link" href="/account/profile"><div class="flex items-center gap-x-2"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12.5 13.056V11.5c0-.663-.263-1.299-.732-1.768A2.5 2.5 0 0 0 10 9h-5a2.5 2.5 0 0 0-1.768.732A2.5 2.5 0 0 0 2.5 11.5v1.556"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 6A2.5 2.5 0 1 0 7.5 1a2.5 2.5 0 0 0 0 5Z"></path></svg><span>Profile</span></div></a></li><li class="text-grey-700"><form method="POST" action="/logout">@csrf<button type="submit" class="flex items-center gap-x-2 text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="logout-button"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.167 1.944h3.11c.983 0 1.779.796 1.779 1.778v7.556c0 .982-.796 1.778-1.778 1.778H8.167"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 10.611 8.611 7.5 5.5 4.389M8.611 7.5H1.944"></path></svg><span>Log out</span></button></form></li></ul></div></div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold font-robotoCond text-brand-main mb-2">Ygg Points</h1>
                    <p class="text-gray-600">Adquira pontos para desbloquear conteúdos e vantagens exclusivas</p>
                </div>

                @if(request()->get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    ✅ Pagamento processado! Seus pontos serão adicionados em breve.
                </div>
                @endif

                <!-- Saldo Atual -->
                <div class="bg-gradient-to-r from-brand-main to-blue-600 rounded-lg shadow-lg p-6 mb-8 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm opacity-90 mb-1">Seu saldo atual</p>
                            <p class="text-4xl font-bold font-robotoCond">{{ number_format($userPoints) }} <span class="text-2xl">Ygg Points</span></p>
                        </div>
                        <div class="text-6xl opacity-20">
                            💎
                        </div>
                    </div>
                </div>

                <!-- Pacotes de Doação -->
                <h2 class="text-2xl font-bold font-robotoCond text-brand-main mb-4">Pacotes Disponíveis</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    @foreach($packages as $package)
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow overflow-hidden {{ $package['popular'] ? 'ring-2 ring-brand-main' : '' }}">
                        @if($package['popular'])
                        <div class="bg-brand-main text-white text-center py-1 text-sm font-bold">
                            🔥 MAIS POPULAR
                        </div>
                        @endif
                        
                        <div class="p-6">
                            <div class="flex justify-center mb-4">
                                <img src="{{ $package['image'] }}" alt="{{ $package['points'] }} Ygg Points" class="w-24 h-24 object-contain">
                            </div>
                            
                            <h3 class="text-3xl font-bold font-robotoCond text-center text-brand-main mb-2">
                                {{ number_format($package['points']) }}
                            </h3>
                            <p class="text-center text-gray-600 mb-4">Ygg Points</p>
                            
                            <div class="text-center mb-4">
                                <span class="text-2xl font-bold text-gray-800">R$ {{ number_format($package['amount'] / 100, 2, ',', '.') }}</span>
                            </div>

                            <button 
                                onclick="processPayment({{ $package['points'] }}, {{ $package['amount'] }})"
                                class="w-full bg-brand-main text-white py-3 rounded-md font-robotoCond font-bold hover:bg-brand-green transition-colors">
                                Comprar com PIX
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Histórico de Transações -->
                @if($transactions->count() > 0)
                <h2 class="text-2xl font-bold font-robotoCond text-brand-main mb-4">Histórico de Transações</h2>
                
                <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pontos</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Valor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($transactions as $transaction)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $transaction->created_at->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-brand-main">
                                        +{{ number_format($transaction->points) }} pts
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        R$ {{ number_format($transaction->amount / 100, 2, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($transaction->status === 'paid')
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                ✓ Pago
                                            </span>
                                        @elseif($transaction->status === 'pending')
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                ⏳ Pendente
                                            </span>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                ✗ Cancelado
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif

                <!-- Informações -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <h3 class="font-bold text-lg mb-3 text-blue-900">ℹ️ Informações Importantes</h3>
                    <ul class="space-y-2 text-sm text-blue-800">
                        <li>• Os pontos são creditados automaticamente após a confirmação do pagamento PIX</li>
                        <li>• O pagamento PIX é processado instantaneamente pelo AbacatePay</li>
                        <li>• Você pode usar os pontos para desbloquear itens exclusivos no jogo</li>
                        <li>• Em caso de dúvidas, entre em contato com nossa equipe de suporte</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
function processPayment(points, amount) {
    const button = event.target;
    button.disabled = true;
    button.textContent = 'Processando...';

    fetch('/donation/create-payment', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            points: points,
            amount: amount
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Abrir URL do AbacatePay em nova aba
            window.open(data.payment_url, '_blank');
            
            // Mostrar mensagem de sucesso
            alert('Pagamento criado! Abra a nova aba para completar o pagamento PIX.');
            
            // Recarregar página após 3 segundos
            setTimeout(() => {
                location.reload();
            }, 3000);
        } else {
            alert('Erro: ' + data.message);
            button.disabled = false;
            button.textContent = 'Comprar com PIX';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Erro ao processar pagamento. Tente novamente.');
        button.disabled = false;
        button.textContent = 'Comprar com PIX';
    });
}
</script>
@endsection
