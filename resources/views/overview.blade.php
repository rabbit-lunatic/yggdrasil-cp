@extends('layouts.app')

@section('title', 'Overview - Myth of Yggdrasil')
@section('description', 'Manage your global MoY account overview.')

@section('content')
<div class="flex-1 small:py-12" data-testid="account-page">
    <div class="flex-1 content-container h-full max-w-5xl mx-auto bg-white flex flex-col">
        <div class="grid grid-cols-1  small:grid-cols-[240px_1fr] py-12">
                        <div>
                            <div class="small:hidden" data-testid="mobile-account-nav">
                                <div class="text-xl-semi mb-4 px-8">Hello {{ session('first_name') ?? 'User' }}</div>
                                <div class="text-base-regular">
                                    <ul>
                                        <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" data-testid="game-accounts-link" href="/account/game-accounts"><div class="flex items-center gap-x-2"><span>Game Accounts</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                                        <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" data-testid="ygg-points-link" href="/account/ygg-points"><div class="flex items-center gap-x-2"><span>Ygg Points</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                                        <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" data-testid="orders-link" href="/account/orders"><div class="flex items-center gap-x-2"><span>transactions</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                                        <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" data-testid="download-link" href="/download"><div class="flex items-center gap-x-2"><span>Download</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                                        <li><a class="flex items-center justify-between py-4 border-b border-gray-200 px-8" data-testid="profile-link" href="/account/profile"><div class="flex items-center gap-x-2"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6663 18V16.3333C16.6663 15.4493 16.3152 14.6014 15.69 13.9763C15.0649 13.3512 14.2171 13 13.333 13H6.66634C5.78229 13 4.93444 13.3512 4.30932 13.9763C3.6842 14.6014 3.33301 15.4493 3.33301 16.3333V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.0003 9.66667C11.8413 9.66667 13.3337 8.17428 13.3337 6.33333C13.3337 4.49238 11.8413 3 10.0003 3C8.15938 3 6.66699 4.49238 6.66699 6.33333C6.66699 8.17428 8.15938 9.66667 10.0003 9.66667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Profile</span></div><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90"><path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></a></li>
                                        <li>
                                            <form method="POST" action="/logout" class="w-full">
                                                @csrf
                                                <button type="submit" class="flex items-center justify-between py-4 border-b border-gray-200 px-8 w-full" data-testid="logout-button">
                                                    <div class="flex items-center gap-x-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.167 1.944h3.11c.983 0 1.779.796 1.779 1.778v7.556c0 .982-.796 1.778-1.778 1.778H8.167"></path>
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 10.611 8.611 7.5 5.5 4.389M8.611 7.5H1.944"></path>
                                                        </svg>
                                                        <span>Log out</span>
                                                    </div>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transform -rotate-90">
                                                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hidden small:block text-lg font-robotoCond" data-testid="account-nav">
                                <div>
                                    <div class="pb-4 flex flex-row items-start gap-x-2">
                                        <h3 class="font-core text-2xl uppercase leading-5">
                                            <div class="flex items-center gap-x-1">Global
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" class="text-brand-main ">
                                                    <g fill="currentColor" clip-path="url(#a)">
                                                        <path d="M11.016 2.825c.181.03.368-.02.513-.132l.136-.106A6.4 6.4 0 0 0 7.5 1.057a6.44 6.44 0 0 0-6.075 4.31c.606 1.364 1.388 2.429 2.354 3.135l.212.15q.119.083.23.164l.021.016c.262.196.488.41.603.728.084.233.074.418.06.652-.018.35-.043.783.26 1.286.278.462.638.652.901.79.201.106.294.159.379.287.248.372.124.943.059 1.17l-.033.111c.336.055.677.09 1.028.09a6.44 6.44 0 0 0 6.006-4.119c-.43-.971-.974-1.517-1.658-1.647-.724-.137-1.267.244-1.705.55-.37.256-.61.415-.853.366-.14-.025-.205-.09-.426-.356-.206-.247-.49-.587-.97-.87-.784-.458-1.756-.575-2.898-.35-.113-.32-.197-.784.02-1.224.047-.095.305-.577.774-.707.372-.103.732.073 1.11.259.424.208 1.004.492 1.564.136.627-.4.559-1.15.504-1.753-.04-.436-.086-.93.11-1.174.24-.301.948-.385 1.939-.23z"></path>
                                                        <path d="M7.5 14.611c-3.92 0-7.111-3.19-7.111-7.111S3.579.389 7.5.389s7.111 3.19 7.111 7.111-3.19 7.111-7.111 7.111m0-12.889A5.784 5.784 0 0 0 1.722 7.5 5.784 5.784 0 0 0 7.5 13.278 5.784 5.784 0 0 0 13.278 7.5 5.784 5.784 0 0 0 7.5 1.722"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="a">
                                                            <path fill="#fff" d="M0 0h15v15H0z"></path>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            Account
                                        </h3>
                                    </div>
                                    <div class="text-base-regular">
                                        <ul class="flex mb-0 justify-start items-start flex-col gap-y-4">
                                            <li><a class="hover:underline hover:text-ui-fg-base font-semibold uppercase font-robotoCond text-brand-main" data-testid="overview-link" href="/account">Overview</a></li>
                                            <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="game-accounts-link" href="/account/game-accounts">Game Accounts</a></li>
                                            <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="ygg-points-link" href="/account/ygg-points">Ygg Points</a></li>
                                            <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="orders-link" href="/account/orders">Transactions</a></li>
                                            <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="download-link" href="/download">Download</a></li>
                                            <li><a class="text-brand-main hover:underline hover:text-ui-fg-base font-robotoCond uppercase" data-testid="profile-link" href="/account/profile">Profile</a></li>
                                            <li>
                                                <form method="POST" action="/logout" class="w-full">
                                                    @csrf
                                                    <button type="submit" data-testid="logout-button">
                                                        <span class="flex gap-x-1 items-center text-grey-700 text-md uppercase font-robotoCond">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.167 1.944h3.11c.983 0 1.779.796 1.779 1.778v7.556c0 .982-.796 1.778-1.778 1.778H8.167"></path>
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 10.611 8.611 7.5 5.5 4.389M8.611 7.5H1.944"></path>
                                                            </svg>
                                                            Log out
                                                        </span>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div data-testid="overview-page-wrapper">
                                <div class="hidden small:block">
                                    <div class="text-xl-semi flex justify-between items-center mb-4">
                                        <span class="font-robotoCond" data-testid="welcome-message" data-value="{{ session('first_name') ?? 'User' }}">Olá, {{ session('first_name') ?? 'User' }}</span>
                                        <span class="text-small-regular text-ui-fg-base">Logado como: <span class="font-semibold" data-testid="customer-email" data-value="{{ session('email') }}">{{ session('email') }}</span></span>
                                    </div>
                                    <div class="flex flex-col py-8 border-t border-gray-200">
                                        <div class="flex flex-col gap-y-4 h-full col-span-1 row-span-2 flex-1">
                                            <div class="flex items-start gap-x-16 mb-6">
                                                <div class="flex flex-col gap-y-4">
                                                    <div class="flex items-center gap-x-2">
                                                        <div class="w-full px-48 text-center text-xl-semi font-robotoCond">Gerencie sua conta global</div>
                                                    </div>
                                                    <h3 class="font-semibold font-robotoCond text-lg">Banco de Ygg Points</h3>
                                                    <div class="flex items-center gap-x-2">
                                                        <img alt="Ygg-point" loading="lazy" width="40" height="40" decoding="async" data-nimg="1" class="items-center mx-2" srcset="/_next/image?url=https%3A%2F%2Fcdn.mythofyggdrasil.com%2Fassets%2Fygg-point.png&amp;w=48&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.mythofyggdrasil.com%2Fassets%2Fygg-point.png&amp;w=96&amp;q=75 2x" src="/_next/image?url=https%3A%2F%2Fcdn.mythofyggdrasil.com%2Fassets%2Fygg-point.png&amp;w=96&amp;q=75" style="color: transparent;">
                                                        <span class="font-robotoCond text-3xl-semi" data-testid="customer-ygg-point" data-value="0">0</span>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col gap-y-4">
                                                    <div class="flex items-center gap-x-2">
                                                        <h3 class="text-large-semi font-robotoCond text-lg">Transações Recentes</h3>
                                                    </div>
                                                    <ul class="flex flex-col gap-y-4" data-testid="orders-wrapper">
                                                        <span data-testid="no-orders-message">No recent transactions</span>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="w-full bg-[#5B719F] text-white py-16">
            <div class="container mx-auto flex flex-col-reverse md:flex-row items-center justify-center gap-8 px-6 md:px-12">
                <div class="flex flex-col items-center text-left">
                    <div class="flex justify-center mb-4">
                        <img alt="Myth of Yggdrasil Logo" loading="lazy" width="130" height="130" decoding="async" data-nimg="1" style="color:transparent" srcset="/_next/image?url=https%3A%2F%2Fcdn.mythofyggdrasil.com%2Fassets%2Fmoy_fit2.png&amp;w=256&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.mythofyggdrasil.com%2Fassets%2Fmoy_fit2.png&amp;w=384&amp;q=75 2x" src="/_next/image?url=https%3A%2F%2Fcdn.mythofyggdrasil.com%2Fassets%2Fmoy_fit2.png&amp;w=384&amp;q=75">
                    </div>
                    <div class="text-gray-200 text-sm ">
                        <p class="mb-1/2">Made with <span>🤍</span> for all community.</p>
                        <p class="txt-medium font-normal font-sans">Copyright © Myth of Yggdrasil</p>
                    </div>
                </div>
                <div class="hidden md:block w-10"></div>
                <div class="flex flex-col items-start text-left">
                    <h3 class="font-bold text-xl mb-4">Myth of Yggdrasil</h3>
                    <ul class="space-y-2">
                        <li><a href="https://discord.gg/mythofyggdrasil" target="_blank" rel="noreferrer" class="hover:text-gray-300 transition">Discord</a></li>
                        <li><a href="https://www.youtube.com/watch?v=f2H-dw7u16o" target="_blank" rel="noreferrer" class="hover:text-gray-300 transition">Youtube</a></li>
                        <li><a href="https://www.instagram.com/myth.yggdrasil/" target="_blank" rel="noreferrer" class="hover:text-gray-300 transition">Instagram</a></li>
                        <li><a href="https://www.tiktok.com/@mythofyggdrasil" target="_blank" rel="noreferrer" class="hover:text-gray-300 transition">TikTok</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection