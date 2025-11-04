@extends('layouts.app')

@section('title', 'Myth of Yggdrasil - A Evolução de um Clássico')
@section('description', 'Explore Myth Of Yggdrasil, uma aventura clássica de MMORPG renovada.')

@section('content')
<div class="w-full bg-ui-bg-subtle text-brand-main">
<!-- Hero Section -->
<section class="w-full relative">
    <div class="flex flex-col text-center gap-3 lg:gap-6">
        <div class="bg-[#F6BF96] rounded-md py-2 text-white font-robotoCond font-bold uppercase tracking-wide text-base">LANÇAMENTO OFICIAL 10/10/2025</div>
        <div class="flex flex-col-reverse gap-5 items-center lg:items-start justify-center lg:flex-row w-full">
            <div class="flex flex-col gap-5 justify-center w-full max-w-[550px]">
                <div class="relative w-[60%] h-[150px] mx-auto my-20 animate-float">
                    <img alt="Myth of Yggdrasil Logo" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcSet="{{ asset('img/logo-myth.png') }} 640w, {{ asset('img/logo-myth.png') }} 750w, {{ asset('img/logo-myth.png') }} 828w, {{ asset('img/logo-myth.png') }} 1080w, {{ asset('img/logo-myth.png') }} 1200w, {{ asset('img/logo-myth.png') }} 1920w, {{ asset('img/logo-myth.png') }} 2048w, {{ asset('img/logo-myth.png') }} 3840w" src="{{ asset('img/logo-myth.png') }}"/>
                </div>
                <div class="text-4xl md:text-5xl lg:text-6xl justify-items-center font-core leading-tight">
                    <h1>
                        <div class="flex items-center gap-5 justify-left">
                            <div class="relative w-[82px] h-[94px]">
                                <img alt="Explorers Team 1" loading="lazy" decoding="async" data-nimg="fill" class="scale-x-[-1]" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcSet="{{ asset('img/explore.png') }} 640w, {{ asset('img/explore.png') }} 750w, {{ asset('img/explore.png') }} 828w, {{ asset('img/explore.png') }} 1080w, {{ asset('img/explore.png') }} 1200w, {{ asset('img/explore.png') }} 1920w, {{ asset('img/explore.png') }} 2048w, {{ asset('img/explore.png') }} 3840w" src="{{ asset('img/explore.png') }}"/>
                            </div>
                            <div class="flex flex-col items-start justify-cente">
                                <span class="uppercase">A EVOLUÇÃO</span>
                                <span id="random-color-text">DE UM CLÁSSICO</span>
                            </div>
                        </div>
                    </h1>
                </div>
                <div class="text-justify lg:leading-7 p-6 md:p-3 font-robotoCond text-xl font-black">
                    <div class="prose prose-lg max-w-none">
                        <p class="text-lg font-robotoCond leading-7 my-4">Descubra um MMORPG que respeita suas origens enquanto se adapta aos novos tempos. Myth of Yggdrasil é uma experiência que acolhe os jogadores com liberdade estratégica, recursos modernos e conforto para evoluir no seu próprio ritmo. Explore um universo clássico, reimaginado e cheio de surpresas. Um futuro aberto, pronto para uma nova história, espera por você.</p>
                    </div>
                </div>
                <div class="flex justify-center w-full">
                    <div class="grid grid-cols-2 gap-5 md:flex-grow justify-between">
                        <div class="flex items-center justify-center">
                            <a href="#slider-section" class="bg-white leading-none relative border-2 rounded-lg border-solid border-brand-main w-full py-5 pl-5 pr-2 font-core uppercase text-lg hover:bg-brand-main hover:text-white duration-150 ease-in-out transition-colors">
                                <div class="w-[49px] h-[89px] absolute -top-4 -left-7 -scale-x-100">
                                    <img alt="Isabela NPC" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcSet="{{ asset('img/EG_isabella2.png') }} 640w, {{ asset('img/EG_isabella2.png') }} 750w, {{ asset('img/EG_isabella2.png') }} 828w, {{ asset('img/EG_isabella2.png') }} 1080w, {{ asset('img/EG_isabella2.png') }} 1200w, {{ asset('img/EG_isabella2.png') }} 1920w, {{ asset('img/EG_isabella2.png') }} 2048w, {{ asset('img/EG_isabella2.png') }} 3840w" src="{{ asset('img/EG_isabella2.png') }}"/>
                                </div>Explorar Mais
                            </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <a href="#joinNow-section" class="bg-white leading-none relative border-2 rounded-lg border-solid text-brand-green border-brand-green w-full py-5 px-2 font-core uppercase text-lg hover:bg-brand-green hover:text-white duration-150 ease-in-out transition-colors">
                                <span class="mr-2">Jogar Agora</span>
                            </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <a href="{{ url('/blog') }}" class="bg-white leading-none relative border-2 rounded-lg border-solid text-brand-purple border-brand-purple w-full py-5 px-2 font-core uppercase text-lg hover:bg-brand-purple hover:text-white duration-150 ease-in-out transition-colors">Notícias</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center w-full h-fit max-w-[400px] lg:max-w-[600px]">
                <div class="relative">
                    <img alt="Tree of Yggdrasil" loading="lazy" width="495" height="861" decoding="async" data-nimg="1" class="ease-in-out duration-300 hover:scale-105" style="color:transparent" src="{{ asset('img/ygg1.gif') }}"/>
                    <div class="absolute bottom-12 left-10 w-[65px] h-[115px]">
                        <img alt="Horong Monster 01" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/horong4.gif') }}"/>
                    </div>
                    <div class="absolute bottom-4 right-12 w-[65px] h-[115px]">
                        <img alt="Horong Monster 02" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/horong3.gif') }}"/>
                    </div>
                    <div class="absolute bottom-28 right-4 w-[65px] h-[115px]">
                        <img alt="Horong Monster 03" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/horong2.gif') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Slider Section -->
<section id="slider-section" class="mt-20 w-full">
        <div class="flex flex-col items-center gap-10 relative mt-10 md:mt-0">
            <div class="w-full relative z-10 flex flex-col items-center gap-3 max-w-[1200px] mx-auto px-4 md:px-6">
                <div class="flex items-center justify-between gap-6 w-full">
                    <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-neutral text-ui-fg-base border-ui-border-base after:button-neutral-gradient hover:after:button-neutral-hover-gradient active:bg-ui-button-neutral-pressed active:after:button-neutral-pressed-gradient focus:shadow-buttons-neutral-focus p-[5px] h-16 w-14 z-10 bg-[#5B719F] hover:bg-[#5B719F]/90 border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" class="scale-150">
                            <path stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1.944 7.5h11.112M5.722 11.278 1.944 7.5l3.778-3.778"></path>
                        </svg>
                    </button>
                    <div class="flex flex-col items-start z-10">
                        <h1 class="text-4xl md:text-7xl font-core leading-none break-words max-w-[100%] md:max-w-full">
                            <span class="capitalize">NOVA<!-- --> </span><span class="capitalize text-brand-green">REALIDADE</span>
                        </h1>
                    </div>
                    <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-neutral text-ui-fg-base border-ui-border-base after:button-neutral-gradient hover:after:button-neutral-hover-gradient active:bg-ui-button-neutral-pressed active:after:button-neutral-pressed-gradient focus:shadow-buttons-neutral-focus p-[5px] h-16 w-14 z-10 bg-[#5B719F] hover:bg-[#5B719F]/90 border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" class="scale-150">
                            <path stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.056 7.5H1.944M9.278 3.722 13.056 7.5l-3.778 3.778"></path>
                        </svg>
                    </button>
                </div>
                <div class="max-w-[80%] text-start md:text-justify lg:leading-7 p-3 font-robotoCond text-xl font-black">
                    <div class="prose prose-lg max-w-none">
                                                <p class="text-lg font-robotoCond leading-7 my-4">Experimente uma jogabilidade dinâmica e com inúmeras possibilidades, enquanto a história se expande com novos capítulos para serem vividos. Descubra um mundo com paisagens vibrantes, monstros emocionantes e chefes desafiadores</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-8 w-full">
                    <div class="w-full flex justify-center items-center order-1 md:order-2">
                        <div class="w-full max-w-full rounded-lg overflow-hidden aspect-video">
                            <iframe src="https://www.youtube.com/embed/BeqTEJQwmgw?autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=BeqTEJQwmgw&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowFullScreen="" loading="lazy" class="w-full h-full"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Journey Allies Section -->
<section id="journey-allies-section" class="mt-20 w-full">
    <div class="w-full relative z-10 flex flex-col items-center gap-3 max-w-[1200px] mx-auto px-4 md:px-6">
        <div class="flex flex-col-reverse md:flex-row justify-center items-center gap-6">
            <div class="flex flex-col items-center md:items-end">
                <h1 class="text-5xl md:text-7xl font-core whitespace-nowrap">JOURNEY <span class="text-brand-purple">ALLIES</span></h1>
                <p class="text-sm md:text-base text-right mr-2">Joguem Juntos, Ganhem Juntos</p>
            </div>
            <div class="relative w-[81px] h-[83px]">
                <img alt="Journey Allies Image" loading="lazy" decoding="async" data-nimg="fill" 
                     src="{{ asset('img/journey-allies.gif') }}"
                     style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"/>
            </div>
        </div>
        
        <div class="max-w-[80%] text-justify lg:leading-7 p-3 font-robotoCond text-xl font-black">
            <div class="prose prose-lg max-w-none">
                <p class="text-lg font-robotoCond leading-7 my-4">
                    Traga seus amigos para a sua jornada em <strong>Myth of Yggdrasil</strong> e tornem-se mais fortes juntos! 
                    As recompensas do sistema <strong>Journey Allies</strong> premiam jogadores que formam equipes, 
                    tornando cada batalha mais gratificante tanto para o Recrutador quanto para os Recrutados. 
                    Convide quantos amigos quiser e desbloqueie recompensas exclusivas jogando lado a lado.
                </p>
            </div>
        </div>
        
        <div class="p-6 md:p-0 grid grid-cols grid-rows-4 md:grid-cols-2 md:grid-rows-2 lg:grid-cols-4 lg:grid-rows-1 gap-14 md:gap-0">
                    
                    <!-- Card 1 - RECRUTE ALIADOS -->

                    <div class="p-4 md:min-h-[400px] hover:-translate-y-1 transition-transform delay-50 shadow-[0_5px_rgba(91,_113,_159,_0.4),_0_10px_rgba(91,_113,_159,_0.3),_0_15px_rgba(91,_113,_159,_0.2),_0_20px_rgba(91,_113,_159,_0.1),_0_25px_rgba(91,_113,_159,_0.05)] border border-solid border-brand-main rounded-lg flex justify-start items-center flex-row p-3 gap-2 w-full md:flex-col md:scale-95">
                        <div class="min-h-[200px] justify-around flex flex-col items-center">
                            <h2 class="font-core text-5xl ">1</h2>
                            <div class="relative my-5 w-[131px] h-[99px] flex items-center justify-center">
                                <img alt="RECRUTE ALIADOS" loading="lazy" src="{{ asset('img/recruit_allies.png') }}" width="133" height="98"/>
                                </div>
                            </div>
                                <div class="flex flex-col items-center justify-center gap-3">
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <h3 class="font-core text-2xl leading-5 ">RECRUTE ALIADOS</h3>
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <div class="min-h-[125px] text-start leading-5 px-1 md:p-3 font-robotoCond font-black"><div class="prose prose-lg max-w-none"><p class="text-lg font-robotoCond leading-7 my-4">Convide amigos ilimitados para se juntarem à aventura. Cada Recruta está vinculado a um único Recrutador, mas você pode ter quantos Recrutas quiser!</p></div></div></div></div>

                    <!-- Card 2 - CULTIVE AFINIDADE -->
                    <div class="p-4 md:min-h-[400px] hover:-translate-y-1 transition-transform delay-50 shadow-[0_5px_rgba(91,_113,_159,_0.4),_0_10px_rgba(91,_113,_159,_0.3),_0_15px_rgba(91,_113,_159,_0.2),_0_20px_rgba(91,_113,_159,_0.1),_0_25px_rgba(91,_113,_159,_0.05)] border border-solid border-[#5B719F] rounded-lg flex justify-start items-center flex-row p-3 gap-2 w-full md:flex-col md:scale-95">
                        <div class="min-h-[200px] justify-around flex flex-col items-center">
                            <h2 class="font-core text-5xl ">2</h2>
                            <div class="relative my-5 w-[131px] h-[99px] flex items-center justify-center">
                                <img alt="CULTIVE AFINIDADE" loading="lazy" src="{{ asset('img/grow_affinity.png') }}" width="109" height="105"/>
                                </div>
                            </div>
                                <div class="flex flex-col items-center justify-center gap-3">
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <h3 class="font-core text-2xl leading-5 ">CULTIVE AFINIDADE</h3>
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <div class="min-h-[125px] text-start leading-5 px-1 md:p-3 font-robotoCond font-black"><div class="prose prose-lg max-w-none"><p class="text-lg font-robotoCond leading-7 my-4">Ganhe Pontos de Afinidade jogando em grupo. Receba um bônus ao formar equipe com Aliados. Cada segundo lutando juntos contribui para recompensas exclusivas.</p></div></div></div></div>

                    <!-- Card 3 - DESBLOQUEIE RECOMPENSAS -->
                    <div class="p-4 md:min-h-[400px] hover:-translate-y-1 transition-transform delay-50 shadow-[0_5px_rgba(91,_113,_159,_0.4),_0_10px_rgba(91,_113,_159,_0.3),_0_15px_rgba(91,_113,_159,_0.2),_0_20px_rgba(91,_113,_159,_0.1),_0_25px_rgba(91,_113,_159,_0.05)] border border-solid border-brand-main rounded-lg flex justify-start items-center flex-row p-3 gap-2 w-full md:flex-col md:scale-95">
                        <div class="min-h-[200px] justify-around flex flex-col items-center">
                            <h2 class="font-core text-5xl ">3</h2>
                            <div class="relative my-5 w-[131px] h-[99px] flex items-center justify-center">
                                <img alt="DESBLOQUEIE RECOMPENSAS" loading="lazy" src="{{ asset('img/unlock_rewards.png') }}" width="107" height="125"/>
                                </div>
                            </div>
                                <div class="flex flex-col items-center justify-center gap-3">
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <h3 class="font-core text-2xl leading-5 ">DESBLOQUEIE RECOMPENSAS</h3>
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <div class="min-h-[125px] text-start leading-5 px-1 md:p-3 font-robotoCond font-black"><div class="prose prose-lg max-w-none"><p class="text-lg font-robotoCond leading-7 my-4">Quanto mais vocês jogarem juntos, mais valiosas serão as recompensas, como melhorias na qualidade de vida, trajes e cromas especiais.</p></div></div></div></div>

                    <!-- Card 4 - SEJA BENEFACTOR -->
                    <div class="p-4 md:min-h-[400px] hover:-translate-y-1 transition-transform delay-50 shadow-[0_5px_rgba(136,_104,_191,_0.4),_0_10px_rgba(136,_104,_191,_0.3),_0_15px_rgba(136,_104,_191,_0.2),_0_20px_rgba(136,_104,_191,_0.1),_0_25px_rgba(136,_104,_191,_0.05)] border border-solid border-brand-purple rounded-lg flex justify-start items-center flex-row p-3 gap-2 w-full md:flex-col md:scale-95">
                        <div class="min-h-[200px] justify-around flex flex-col items-center">
                            <h2 class="font-core text-5xl text-brand-purple">4</h2>
                            <div class="relative my-5 w-[131px] h-[99px] flex items-center justify-center">
                                <img alt="SEJA BENEFACTOR"  loading="lazy" src="{{ asset('img/be_benefactor.png') }}" width="119" height="126"/>
                                </div>
                            </div>
                                <div class="flex flex-col items-center justify-center gap-3">
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <h3 class="font-core text-2xl leading-5 text-brand-purple">SEJA BENEFACTOR</h3>
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <div class="min-h-[125px] text-start leading-5 px-1 md:p-3 font-robotoCond font-black"><div class="prose prose-lg max-w-none"><p class="text-lg font-robotoCond leading-7 my-4">Quando seus Recrutas ativarem o Benefector deles, você recebe 10% do tempo como bônus. Mantenha seu status de Benefector ativo durante o mês com o apoio dos seus Recrutas!</p></div></div></div></div>

                </div>
        </div>
    </div>
</section>

<!-- Join Now Section -->
<section id="joinNow-section" class="mt-20 w-full">
    <div class="max-w-[1200px] mx-auto px-5">
        <div class="flex flex-col items-center justify-center">
            <div class="relative z-10 md:flex justify-between items-center gap-28 max-w-[1200px] md:px-6 ">
                <div class="relative mx-auto md:left-0 my-10 w-[180px] h-[195px] ease-in-out duration-300 hover:scale-110">
                    <div class="absolute -bottom-4 -left-6 w-[237px] h-[80px]">
                        <img alt="Shadow" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/sombra_da_carruagem.png') }}"/>
                    </div>
                    <img alt="Carruagem" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/carruagem.png') }}"/>
                    <div class="absolute -bottom-5 -left-10 w-[109px] h-[110px]">
                    <img alt="Pecopecos" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/pecopecos.gif') }}"/>
                    </div>
                    <div class="absolute -bottom-3 left-44 w-[57px] h-[101px] -scale-x-100">
                        <img alt="NPC Guys" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/KC_charioteer.gif') }}"/>
                    </div>
                    <div class="absolute bottom-20 left-48 w-[74px] h-[69px]">
                        <img alt="Join Now" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/join_now3.gif') }}"/>
                    </div>
                </div>
                <div class="flex flex-col gap-6 max-w-[450px] md:max-w-[450px] items-center md:items-start">
                    <h1 class="text-6xl md:text-7xl font-core md:text-left text-brand-main">UMA CLÁSSICA AVENTURA<!-- --> <span class="text-[#F6BF96]">MODERNA</span></h1>
                    <div class="flex flex-col-2 md:flex-row gap-4 justify-between ">
                        <a href="{{ url('/download') }}" class="w-full">
                            <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-colored text-ui-fg-on-inverted border-ui-border-loud after:button-inverted-gradient hover:after:button-inverted-hover-gradient active:after:button-inverted-pressed-gradient focus:!shadow-buttons-colored-focus txt-compact-small-plus gap-x-1 bg-brand-red p-3 hover:bg-slate-300 active:bg-slate-300 border-0 w-full md:w-fit whitespace-nowrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.056 9.944v1.334c0 .982-.796 1.778-1.778 1.778H3.722a1.777 1.777 0 0 1-1.778-1.778V9.944M4.389 5.5 7.5 8.611 10.611 5.5M7.5 8.611V1.944"></path>
                                </svg> Download
                            </button>
                        </a>
                        <a href="{{ url('/account') }}" class="w-full">
                            <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-colored text-ui-fg-on-inverted border-ui-border-loud after:button-inverted-gradient hover:after:button-inverted-hover-gradient active:after:button-inverted-pressed-gradient focus:!shadow-buttons-colored-focus txt-compact-small-plus gap-x-1 bg-brand-red p-3 hover:bg-[#ED7780CF] active:bg-brand-red border-0 w-full md:w-fit whitespace-nowrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 5.944a2.444 2.444 0 0 0 0-4.888 2.444 2.444 0 0 0 0 4.888M11.733 13.292c.764-.24 1.166-1.085.842-1.818A5.55 5.55 0 0 0 7.5 8.167a5.55 5.55 0 0 0-5.075 3.307c-.324.733.078 1.577.842 1.818a14.1 14.1 0 0 0 8.466 0"></path>
                                </svg> Sign up
                            </button>
                        </a>
                        <a href="https://discord.gg/mythofyggdrasil" target="_blank" rel="noreferrer" class="w-full">
                            <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-colored text-ui-fg-on-inverted border-ui-border-loud after:button-inverted-gradient hover:after:button-inverted-hover-gradient active:after:button-inverted-pressed-gradient focus:!shadow-buttons-colored-focus txt-compact-small-plus gap-x-1 bg-brand-red p-3 hover:bg-[#ED7780CF] active:bg-brand-red border-0 w-full md:w-fit whitespace-nowrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" clip-path="url(#a)">
                                        <path d="M7.722 5.056h4.89c.735 0 1.332.597 1.332 1.333v4c0 .736-.597 1.333-1.333 1.333h-.444v2.223l-2.445-2.223h-2A1.334 1.334 0 0 1 6.39 10.39v-4c0-.736.597-1.333 1.333-1.333"></path>
                                        <path d="M10.11 2.833A1.78 1.78 0 0 0 8.39 1.5H2.833c-.982 0-1.777.796-1.777 1.778v4.445c0 .981.796 1.778 1.777 1.777v2.667l1.334-1.455"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="a">
                                            <path fill="#fff" d="M0 0h15v15H0z"></path>
                                        </clipPath>
                                    </defs>
                                </svg> Join Community
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="slider-section" class="mt-20 w-full">
    <div class="max-w-[1200px] mx-auto px-5">
        <div class="flex flex-col md:flex-row items-center justify-center gap-10 mb-20 md:gap-40 mt-5 px-12 max-w-[1200px] mx-auto">
            <div class="w-full md:w-1/2 order-2 md:order-1 z-0">
                <div class="space-y-6">
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">O que é Myth of Yggdrasil</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Myth of Yggdrasil é um MMORPG adaptado por jogadores que, como você, cresceram em mundos virtuais e encontraram conexões genuínas e experiências memoráveis. Inspirado nos clássicos do gênero, buscamos reinterpretar essa jornada introduzindo mecânicas modernas que aprimoram a liberdade de construção de personagem, estratégia e personalização.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">Mais do que apenas um jogo, Myth of Yggdrasil é um projeto independente que busca crescer do seu próprio jeito enquanto evolui junto com sua comunidade. Nosso objetivo é construir um universo que respeite as raízes dos MMORPGs enquanto se adapta aos tempos modernos, oferecendo um mundo dinâmico e acolhedor para todos que desejam fazer parte dessa história.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">Queremos compartilhar essa experiência não apenas com jogadores veteranos, mas também com novas gerações que descobrirão a si mesmas nesse universo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">Quem está por trás do Myth?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">A equipe do Myth é composta por jogadores e desenvolvedores que trabalham juntos há mais de três anos para criar algo especial. Nosso objetivo sempre foi transformar um clássico em uma experiência moderna, respeitando suas raízes enquanto explorando novas possibilidades.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">Myth of Yggdrasil é nosso primeiro projeto, nascido de uma jornada de aprendizado e colaboração. Mais do que apenas um jogo, é o começo de um estúdio que visa criar seus próprios mundos e crescer junto com a comunidade.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">Há algum comércio usando dinheiro real?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Sim, porém, a equipe do Myth valoriza o progresso alcançado dentro do jogo. A principal forma de evoluir seu personagem é jogando, acumulando Zeny e explorando o mundo.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">Para jogadores que desejam compartilhar conquistas raras, criamos o <strong>Bazar dos Tesouros</strong> – um espaço seguro e regulamentado onde colecionadores podem vender equipamentos específicos diretamente para outros jogadores. Para fazer isso, você deve ser um <em>Colecionador</em> (conta vendedora brasileira verificada), garantindo segurança e transparência.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">O Bazar dos Tesouros não é um requisito para progredir no jogo, mas sim uma opção para aqueles que valorizam a liberdade de negociar seus tesouros.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">Onde posso encontrar mais informações sobre o jogo?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Myth of Yggdrasil foi projetado para acolher seus jogadores. Todas as informações necessárias estão disponíveis dentro do jogo: através do Omnibook, você pode acessar detalhes sobre monstros e itens, enquanto NPCs no mundo mantêm você atualizado sobre sistemas e recursos. Tudo que você precisa está dentro do universo Myth.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">Para notícias e comunicação externa, visite nossa seção de notícias no site e junte-se à nossa comunidade Discord, onde você pode interagir com outros jogadores e ficar atualizado com os anúncios da equipe Myth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">Como posso contatar a equipe do Myth?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Para contatar a equipe do Myth diretamente, use o sistema de tíquetes de suporte.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">Embora sigamos de perto a comunidade e mantenhamos uma distância segura para garantir a integridade do projeto, nossos moderadores estão ativos na comunidade para interações gerais. A equipe de desenvolvimento permanece focada em manter e evoluir o mundo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">Como posso reportar um bug ou problema?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">A melhor maneira de nos ajudar a melhorar Myth of Yggdrasil é reportando diretamente através do nosso sistema de tíquetes. Basta visitar o site oficial ou nossa comunidade Discord para abrir um tíquete com os detalhes. Sua contribuição faz uma grande diferença para aprimorar a experiência para todos os jogadores!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">Quais são os benefícios de criar conteúdo para o Myth?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Criadores de conteúdo têm um papel especial na comunidade Myth of Yggdrasil! Além de ajudar a espalhar a palavra sobre o jogo, você pode ganhar reconhecimento, recompensas exclusivas e até Pontos Ygg participando de eventos e campanhas oficiais. É uma maneira de compartilhar sua paixão enquanto apoia o crescimento do Myth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col items-center justify-center gap-5 md:-ml-[25%] order-1 md:order-2">
                <div class="flex flex-col -ml-[10%] items-start">
                    <h3 class="font-core -mb-3 md:-mb-4 ml-1 text-lg md:text-xl">WHAT THE</h3>
                    <h1 class="text-6xl md:text-7xl font-core">FAQ?!</h1>
                </div>
                <div class="relative w-[118px] h-[101px]">
                    <img alt="Group of People" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/faq.png') }}"/>
                    <div class="absolute -top-3 -left-6 w-[37px] h-[38px]">
                        <img alt="Emoji" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/faq_emote.gif') }}"/>
                    </div>
                    <div class="absolute -top-4 right-12 w-[38px] h-[32px]">
                        <img alt="Emoji" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/faq_emote2.gif') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Script para aplicar cor aleatória ao texto "DE UM CLÁSSICO"
        const colors = [
            'text-brand-red',
            'text-brand-yellow', 
            'text-brand-green',
            'text-brand-purple'
        ];
        
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        const element = document.getElementById('random-color-text');
        
        if (element) {
            element.classList.add(randomColor);
        }

        // Script para accordion do FAQ
        const faqButtons = document.querySelectorAll('.faq-button');
        
        faqButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('.faq-icon');
                
                // Toggle do conteúdo
                if (content.classList.contains('grid-rows-[0fr]')) {
                    content.classList.remove('grid-rows-[0fr]', 'opacity-0');
                    content.classList.add('grid-rows-[1fr]', 'opacity-100');
                    icon.textContent = '−';
                } else {
                    content.classList.remove('grid-rows-[1fr]', 'opacity-100');
                    content.classList.add('grid-rows-[0fr]', 'opacity-0');
                    icon.textContent = '+';
                }
            });
        });
    });
</script>
</div>
@endsection
