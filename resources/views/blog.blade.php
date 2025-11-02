@extends('layouts.app')

@section('title', 'Blog - Myth of Yggdrasil')
@section('description', 'Latest news and updates from Myth of Yggdrasil.')

@section('content')
<main class="max-w-[1200px] mx-auto p-5">
    <header class="flex flex-row items-center justify-center gap-3 mb-10" aria-labelledby="blog-title">
        <img alt="Amanda Guide" loading="lazy" width="59" height="98" decoding="async" data-nimg="1" class="object-contain scale-x-[-1]" style="color:transparent" src="{{ asset('img/guide_amanda.gif') }}"/>
        <h1 class="text-4xl my-auto md:text-5xl text-start font-core text-brand-main uppercase">fofocando <br/> com amanda</h1>
    </header>
    <div class="flex md:flex-row-reverse flex-col-reverse w-full items-center justify-between gap-6 mb-10">
        <a class="py-3 rounded-md font-robotoCond font-bold text-lg w-full text-center bg-white text-brand-main border-2 border-brand-main hover:bg-brand-green hover:text-white hover:border-brand-green transition-colors duration-150 ease-in-out" href="{{ url('/blog?category=guidebook') }}">Guia Oficial</a>
        <a class="py-3 rounded-md font-robotoCond font-bold text-lg w-full text-center bg-white text-brand-main border-2 border-brand-main hover:bg-brand-green hover:text-white hover:border-brand-green transition-colors duration-150 ease-in-out" href="{{ url('/blog?category=news-and-events') }}">Novidades &amp; Eventos</a>
        <a class="py-3 rounded-md font-robotoCond font-bold text-lg w-full text-center bg-white text-brand-main border-2 border-brand-main hover:bg-brand-green hover:text-white hover:border-brand-green transition-colors duration-150 ease-in-out" href="{{ url('/blog?category=patch-notes') }}">Notas de Atualização</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Blog posts would be dynamically loaded here -->
        <div class="border rounded-md overflow-hidden shadow hover:shadow-md transition-all">
            <a href="{{ url('/blog/patchnotes-8') }}">
                <div class="relative w-full h-48">
                    <img alt="22/10 - outubro patch 3" src="{{ asset('img/patch_october3.png') }}" />
                </div>
            </a>
            <div class="p-5">
                <div class="flex flex-wrap gap-2 mb-2">
                    <a class="text-xs font-robotoCond uppercase bg-gray-200 px-2 py-1 rounded-sm hover:bg-gray-300" href="{{ url('/blog/category/patch-notes') }}">Notas de Atualização</a>
                </div>
                <a href="{{ url('/blog/patchnotes-8') }}">
                    <h2 class="text-2xl font-bold font-robotoCond mb-2 hover:text-brand-main">22/10 - outubro patch 3</h2>
                </a>
                <p class="text-gray-500 text-sm">22/10/2025</p>
            </div>
        </div>
        <!-- Add more posts as needed -->
    </div>
    <div class="text-center mt-6">
        <button class="bg-brand-main text-white px-4 py-2 rounded-md">Carregar mais</button>
    </div>
</main>
@endsection
