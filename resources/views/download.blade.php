@extends('layouts.app')

@section('title', 'Download - Myth of Yggdrasil')
@section('description', 'Download Myth of Yggdrasil and start your adventure.')

@section('content')
<main class="flex flex-col items-center p-6 space-y-6 max-w-3xl mx-auto">
    <div class="flex justify-center items-center">
        <h1 class="font-medium h1-core text-5xl lg:text-6xl justify-items-center font-core uppercase mb-3">Comece sua<br/>aventura</h1>
    </div>
    <div class="flex justify-center space-x-5 w-full p-5">
        <div class="w-[82px] h-[94px] relative">
            <img alt="Explorers" src="{{ asset('img/explore.png') }}" />
        </div>
        <p class="mt-2 text-sm flex-row w-[50%] items-center justify-between">
            <a href="https://www.mediafire.com/file_premium/mif5203ouzgbs6j/Myth_of_Yggdrasil.rar/file" target="_blank" class="flex justify-center items-center">
                <button class="transition-fg inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-colored text-ui-fg-on-inverted border-ui-border-loud after:button-inverted-gradient hover:after:button-inverted-hover-gradient active:after:button-inverted-pressed-gradient focus:!shadow-buttons-colored-focus txt-compact-small-plus gap-x-1 bg-brand-main relative w-full p-3 hover:bg-brand-green active:bg-brand-green border-0 whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.056 9.944v1.334c0 .982-.796 1.778-1.778 1.778H3.722a1.777 1.777 0 0 1-1.778-1.778V9.944M4.389 5.5 7.5 8.611 10.611 5.5M7.5 8.611V1.944"></path>
                    </svg>
                    Iniciar Download
                </button>
            </a>
            <a href="https://www.mediafire.com/file/byf6i7b65exk940/Myth-of-Yggdrasil.rar/file" rel="noreferrer" class="text-brand-main pt-3 hover:underline">Link alternativo 1</a>
            <a href="https://drive.google.com/file/d/18hsfi3aL3_lfJ2xUkQkIUf6ebtlh8JNE/view?usp=sharing" rel="noreferrer" class="text-brand-main pt-3 hover:underline">Link alternativo 2</a>
        </p>
    </div>
    <div class="w-full mt-12 space-y-8">
        <h2 class="font-medium h2-core text-xl font-core uppercase mb-4">Passos de instalação</h2>
        <div>
            <h2 class="font-medium h2-core text-xl font-core uppercase mb-4">1° Configuração de Antivírus (Windows Defender)</h2>
            <div class="mb-4">
                <h3 class="font-core mb-2">Windows 11</h3>
                <ol class="list-decimal list-inside space-y-1">
                    <li>Selecione Iniciar &gt; Configurações &gt; Privacidade e segurança.</li>
                    <li>Clique em Proteção contra vírus e ameaças.</li>
                    <li>Em Configurações de proteção contra vírus e ameaças, escolha Gerenciar configurações.</li>
                    <li>Role até Exclusões e clique em Adicionar ou remover exclusões.</li>
                    <li>Clique em Adicionar uma exclusão, selecione Pasta e navegue até sua pasta Myth.</li>
                </ol>
                <p class="mt-2 text-sm">
                    <a href="https://support.microsoft.com/pt-br/windows/adicionar-uma-exclus%C3%A3o-no-windows-security-811816c0-4dfd-af4a-47e4-c301afe13b26" target="_blank" rel="noreferrer" class="text-brand-main underline">Suporte Microsoft</a>
                </p>
            </div>
            <div class="mb-4">
                <h3 class="font-core mb-2">Windows 10</h3>
                <ol class="list-decimal list-inside space-y-1">
                    <li>Acesse Iniciar &gt; Configurações &gt; Atualização &amp; Segurança &gt; Segurança do Windows &gt; Proteção contra vírus e ameaças.</li>
                    <li>Em Configurações de proteção contra vírus e ameaças, clique em Gerenciar configurações.</li>
                    <li>Role até Exclusões e selecione Adicionar ou remover exclusões.</li>
                    <li>Clique em Adicionar uma exclusão, escolha Pasta e selecione sua pasta Myth.</li>
                </ol>
            </div>
        </div>
        <div>
            <h2 class="font-medium h2-core text-xl font-core uppercase mb-4">2° Execute Myth.exe</h2>
            <div class="mb-4">
                <ol class="list-decimal list-inside space-y-1">
                    <li>Na pasta raiz do jogo, dê um duplo-clique em Myth.exe para iniciar.</li>
                </ol>
            </div>
        </div>
        <div>
            <h2 class="font-medium h2-core text-xl font-core uppercase mb-4">3° Atualização Automática</h2>
            <div class="mb-4">
                <ol class="list-decimal list-inside space-y-1">
                    <li>O launcher abrirá e atualizará automaticamente para a versão mais recente.</li>
                </ol>
            </div>
        </div>
        <div>
            <h2 class="font-medium h2-core text-xl font-core uppercase mb-4">4° Defina Sua Resolução</h2>
            <div class="mb-4">
                <ol class="list-decimal list-inside space-y-1">
                    <li>Clique no ícone de engrenagem no canto superior-direito do launcher.</li>
                    <li>Escolha sua resolução preferida de tela (1024×768 a 1920×1080 suportados).</li>
                    <li>Clique em Aplicar.</li>
                </ol>
            </div>
        </div>
        <div>
            <h2 class="font-medium h2-core text-xl font-core uppercase mb-4">5° Inicie a Aventura</h2>
            <div class="mb-4">
                <ol class="list-decimal list-inside space-y-1">
                    <li>Clique em Iniciar Jogo para entrar no mundo de Yggdrasil.</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-full small:flex-row items-end justify-between small:border-t border-gray-200 py-12 gap-8">
        <div>
            <h3 class="text-xl font-core leading-tight mb-4">Got questions?</h3>
            <span class="txt-medium font-base font-robotoCond text-ui-fg-base">You can find frequently asked questions and answers on our community.</span>
        </div>
        <div>
            <a href="https://discord.gg/mythofyggdrasil" target="_blank" rel="noreferrer" class="hover:text-ui-fg-base hover:underline flex gap-2 justify-center">Discord<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none"><path fill="#5865F2" d="M9.996 9.58c-.739 0-1.348-.678-1.348-1.511 0-.834.597-1.512 1.348-1.512s1.36.685 1.348 1.512c-.011.826-.59 1.511-1.348 1.511m-4.984 0c-.739 0-1.348-.678-1.348-1.511 0-.834.597-1.512 1.348-1.512s1.36.685 1.349 1.512c-.012.826-.598 1.511-1.349 1.511m7.684-6.85a12.4 12.4 0 0 0-3.052-.946.05.05 0 0 0-.05.023q-.21.38-.38.78a11.4 11.4 0 0 0-3.428 0 8 8 0 0 0-.386-.78.05.05 0 0 0-.05-.023c-1.054.181-2.08.5-3.052.946a.04.04 0 0 0-.02.017C.334 5.652-.199 8.486.062 11.287a.05.05 0 0 0 .02.034 12.4 12.4 0 0 0 3.744 1.894.05.05 0 0 0 .053-.017q.434-.591.766-1.247a.05.05 0 0 0-.027-.065 8 8 0 0 1-1.17-.558.05.05 0 0 1-.025-.04.05.05 0 0 1 .02-.042c.083-.06.158-.12.233-.182a.05.05 0 0 1 .048-.007c2.454 1.12 5.112 1.12 7.537 0a.05.05 0 0 1 .05.006 5 5 0 0 0 .233.182.05.05 0 0 1 .02.042.05.05 0 0 1-.024.04 7.7 7.7 0 0 1-1.166.555.1.1 0 0 0-.017.01.05.05 0 0 0-.014.037q0 .01.005.019.337.651.765 1.246a.047.047 0 0 0 .053.018 12.4 12.4 0 0 0 3.75-1.893.05.05 0 0 0 .02-.034c.312-3.235-.524-6.046-2.217-8.54a.04.04 0 0 0-.023-.015"></path></svg></a>
        </div>
    </div>
</main>
@endsection
