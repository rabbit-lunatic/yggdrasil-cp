@extends('layouts.app')

@section('title', 'Sign in - Myth of Yggdrasil')
@section('description', 'Sign in to your global MoY account.')

@section('content')
<main class="flex-1 small:py-12" data-testid="account-page">
    <div class="flex-1 content-container h-full max-w-5xl mx-auto bg-white flex flex-col">
        <div class="grid grid-cols-1 small:grid-cols-[240px_1fr] py-12">
            <div></div>
            <div class="flex-1">
                <div class="w-full flex justify-start px-8 py-8">
                    <div class="max-w-sm w-full flex flex-col items-center" data-testid="login-page">

                        @if(session('message'))
                            <div class="w-full mb-4 p-3 rounded-md {{ session('message_type') === 'success' ? 'bg-green-100 text-green-800 border border-green-300' : 'bg-red-100 text-red-800 border border-red-300' }}">
                                {{ session('message') }}
                            </div>
                        @endif

                        <!-- Formulário de Login -->
                        <div id="login-form" class="w-full">
                            <div class="flex items-center gap-5">
                                <div class="relative w-[82px] h-[94px]">
                                    <div class="relative w-[76px] h-[93px]">
                                        <img alt="Explorers Team 2" src="{{ asset('img/explore2.png') }}" class="scale-x-[-1]" />
                                    </div>
                                </div>
                                <h1 class="text-5xl lg:text-6xl justify-items-center font-core uppercase mb-3">Welcome back</h1>
                            </div>
                            <p class="text-justify lg:leading-7 p-6 md:p-3 font-robotoCond text-xl font-black mb-3">Sign in to access your global account.</p>
                            <form class="w-full" action="{{ url('/account') }}" method="POST" encType="multipart/form-data">
                                @csrf
                                <div class="flex flex-col w-full gap-y-2">
                                    <div class="flex flex-col w-full">
                                        <div class="relative z-0 w-full">
                                            <input type="email" placeholder=" " required="" class="peer block w-full rounded-md border border-brand-main bg-white py-3 px-4 text-base text-brand-main placeholder-transparent focus:outline-none focus:ring-2 @error('email') border-red-500 @enderror" title="Enter a valid email address." autoComplete="email" data-testid="email-input" name="email"/>
                                            <label for="email" class="absolute left-4 top-3 text-sm text-brand-main transition-all duration-300 peer-placeholder-shown:top-6 peer-focus:left-6 peer-focus:text-brand-main">Email<span class="ml-1 text-brand-red">*</span></label>
                                        </div>
                                        @error('email')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <div class="relative z-0 w-full">
                                            <input type="password" placeholder=" " required="" class="peer block w-full rounded-md border border-brand-main bg-white py-3 px-4 text-base text-brand-main placeholder-transparent focus:outline-none focus:ring-2 @error('password') border-red-500 @enderror" title="Enter your password" autoComplete="current-password" data-testid="password-input" name="password"/>
                                            <label for="password" class="absolute left-4 top-3 text-sm text-brand-main transition-all duration-300 peer-placeholder-shown:top-6 peer-focus:left-6 peer-focus:text-brand-main">Password<span class="ml-1 text-brand-red">*</span></label>
                                            <button type="button" class="absolute right-4 top-3 focus:outline-none">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.56818 4.70906C9.0375 4.59921 9.518 4.54429 10 4.54543C14.7727 4.54543 17.5 9.99997 17.5 9.99997C17.0861 10.7742 16.5925 11.5032 16.0273 12.175M11.4455 11.4454C11.2582 11.6464 11.0324 11.8076 10.7815 11.9194C10.5306 12.0312 10.2597 12.0913 9.98506 12.0961C9.71042 12.101 9.43761 12.0505 9.18292 11.9476C8.92822 11.8447 8.69686 11.6916 8.50262 11.4973C8.30839 11.3031 8.15527 11.0718 8.05239 10.8171C7.94952 10.5624 7.899 10.2896 7.90384 10.0149C7.90869 9.74027 7.9688 9.46941 8.0806 9.2185C8.19239 8.9676 8.35358 8.74178 8.55455 8.55452M14.05 14.05C12.8845 14.9384 11.4653 15.4306 10 15.4545C5.22727 15.4545 2.5 9.99997 2.5 9.99997C3.34811 8.41945 4.52441 7.03857 5.95 5.94997L14.05 14.05Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M2.5 2.5L17.5 17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        @error('password')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" data-testid="sign-in-button" class="w-full py-3 px-6 text-white bg-brand-main rounded-md hover:bg-brand-green focus:ring-2 focus:ring-brand-main focus:outline-none disabled:bg-gray-300 disabled:cursor-not-allowed transition-all w-full mt-6">Sign in</button>
                            </form>
                        </div>

                        <!-- Formulário de Registro -->
                        <div id="register-form" class="w-full hidden">
                            <div class="flex items-center gap-5 mb-6">
                                <div class="relative w-[82px] h-[94px]">
                                    <div class="relative w-[76px] h-[93px]">
                                        <img alt="Explorers Team 2" src="{{ asset('img/explore2.png') }}" class="scale-x-[-1]" />
                                    </div>
                                </div>
                                <h1 class="text-large-semi uppercase mb-6">Become a Myth of Yggdrasil Hero</h1>
                            </div>
                            <p class="text-center text-base-regular text-ui-fg-base mb-4">Create your Myth of Yggdrasil profile, and get access to an enhanced game experience.</p>
                            <form class="w-full" action="{{ url('/account/register') }}" method="POST" encType="multipart/form-data">
                                @csrf
                                <div class="flex flex-col w-full gap-y-2">
                                    <div class="flex flex-col w-full">
                                        <div class="relative z-0 w-full">
                                            <input placeholder=" " required="" class="peer block w-full rounded-md border border-brand-main bg-white py-3 px-4 text-base text-brand-main placeholder-transparent focus:outline-none focus:ring-2 @error('first_name') border-red-500 @enderror" title="Enter your first name" autoComplete="given-name" data-testid="first-name-input" name="first_name"/>
                                            <label for="first_name" class="absolute left-4 top-3 text-sm text-brand-main transition-all duration-300 peer-placeholder-shown:top-6 peer-focus:left-6 peer-focus:text-brand-main">First name<span class="ml-1 text-brand-red">*</span></label>
                                        </div>
                                        @error('first_name')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <div class="relative z-0 w-full">
                                            <input placeholder=" " required="" class="peer block w-full rounded-md border border-brand-main bg-white py-3 px-4 text-base text-brand-main placeholder-transparent focus:outline-none focus:ring-2 @error('last_name') border-red-500 @enderror" title="Enter your last name" autoComplete="family-name" data-testid="last-name-input" name="last_name"/>
                                            <label for="last_name" class="absolute left-4 top-3 text-sm text-brand-main transition-all duration-300 peer-placeholder-shown:top-6 peer-focus:left-6 peer-focus:text-brand-main">Last name<span class="ml-1 text-brand-red">*</span></label>
                                        </div>
                                        @error('last_name')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <div class="relative z-0 w-full">
                                            <input placeholder=" " required="" class="peer block w-full rounded-md border border-brand-main bg-white py-3 px-4 text-base text-brand-main placeholder-transparent focus:outline-none focus:ring-2 @error('email') border-red-500 @enderror" title="Enter a valid email address." autoComplete="email" data-testid="email-input" type="email" name="email"/>
                                            <label for="email" class="absolute left-4 top-3 text-sm text-brand-main transition-all duration-300 peer-placeholder-shown:top-6 peer-focus:left-6 peer-focus:text-brand-main">Email<span class="ml-1 text-brand-red">*</span></label>
                                        </div>
                                        @error('email')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <div class="relative z-0 w-full">
                                            <input placeholder=" " class="peer block w-full rounded-md border border-brand-main bg-white py-3 px-4 text-base text-brand-main placeholder-transparent focus:outline-none focus:ring-2 @error('phone') border-red-500 @enderror" title="Enter your phone number" autoComplete="tel" data-testid="phone-input" type="tel" name="phone"/>
                                            <label for="phone" class="absolute left-4 top-3 text-sm text-brand-main transition-all duration-300 peer-placeholder-shown:top-6 peer-focus:left-6 peer-focus:text-brand-main">Phone</label>
                                        </div>
                                        @error('phone')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <div class="relative z-0 w-full">
                                            <input placeholder=" " required="" class="peer block w-full rounded-md border border-brand-main bg-white py-3 px-4 text-base text-brand-main placeholder-transparent focus:outline-none focus:ring-2 @error('password') border-red-500 @enderror" title="Enter a password" autoComplete="new-password" data-testid="password-input" type="password" name="password"/>
                                            <label for="password" class="absolute left-4 top-3 text-sm text-brand-main transition-all duration-300 peer-placeholder-shown:top-6 peer-focus:left-6 peer-focus:text-brand-main">Password<span class="ml-1 text-brand-red">*</span></label>
                                            <button type="button" class="absolute right-4 top-3 focus:outline-none">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.56818 4.70906C9.0375 4.59921 9.518 4.54429 10 4.54543C14.7727 4.54543 17.5 9.99997 17.5 9.99997C17.0861 10.7742 16.5925 11.5032 16.0273 12.175M11.4455 11.4454C11.2582 11.6464 11.0324 11.8076 10.7815 11.9194C10.5306 12.0312 10.2597 12.0913 9.98506 12.0961C9.71042 12.101 9.43761 12.0505 9.18292 11.9476C8.92822 11.8447 8.69686 11.6916 8.50262 11.4973C8.30839 11.3031 8.15527 11.0718 8.05239 10.8171C7.94952 10.5624 7.899 10.2896 7.90384 10.0149C7.90869 9.74027 7.9688 9.46941 8.0806 9.2185C8.19239 8.9676 8.35358 8.74178 8.55455 8.55452M14.05 14.05C12.8845 14.9384 11.4653 15.4306 10 15.4545C5.22727 15.4545 2.5 9.99997 2.5 9.99997C3.34811 8.41945 4.52441 7.03857 5.95 5.94997L14.05 14.05Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M2.5 2.5L17.5 17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        @error('password')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <div class="relative z-0 w-full">
                                            <input placeholder=" " required="" class="peer block w-full rounded-md border border-brand-main bg-white py-3 px-4 text-base text-brand-main placeholder-transparent focus:outline-none focus:ring-2 @error('password') border-red-500 @enderror" title="Confirm your password" autoComplete="new-password" data-testid="confirm-password-input" type="password" name="password_confirmation"/>
                                            <label for="confirm_password" class="absolute left-4 top-3 text-sm text-brand-main transition-all duration-300 peer-placeholder-shown:top-6 peer-focus:left-6 peer-focus:text-brand-main">Confirm Password<span class="ml-1 text-brand-red">*</span></label>
                                        </div>
                                        @error('password_confirmation')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <span class="text-center text-ui-fg-base text-small-regular mt-6">By creating an account, you agree to Myth of Yggdrasil's <a class="underline" href="/br/content/privacy-policy">Privacy Policy</a> and <a class="underline" href="/br/content/terms-of-use">Terms of Use</a>.</span>
                                <button type="submit" data-testid="register-button" class="w-full py-3 px-6 text-white bg-brand-main rounded-md hover:bg-brand-green focus:ring-2 focus:ring-brand-main focus:outline-none disabled:bg-gray-300 disabled:cursor-not-allowed transition-all w-full mt-6">Join</button>
                            </form>
                        </div>

                        <!-- Formulário de Reset de Senha -->
                        <div id="reset-form" class="w-full hidden">
                            <div class="flex items-center gap-5 mb-6">
                                <div class="relative w-[82px] h-[94px]">
                                    <div class="relative w-[76px] h-[93px]">
                                        <img alt="Explorers Team 2" src="{{ asset('img/explore2.png') }}" class="scale-x-[-1]" />
                                    </div>
                                </div>
                                <h1 class="text-4xl lg:text-5xl justify-items-center font-core uppercase mb-3">Reset Password</h1>
                            </div>
                            <p class="text-justify lg:leading-7 p-6 md:p-3 font-robotoCond text-xl font-black mb-3">Enter your email address and we'll send you a link to reset your password.</p>
                            <form class="w-full" action="{{ url('/account/reset') }}" method="POST" encType="multipart/form-data">
                                @csrf
                                <div class="flex flex-col w-full gap-y-2">
                                    <div class="flex flex-col w-full">
                                        <div class="relative z-0 w-full">
                                            <input type="email" placeholder=" " required="" class="peer block w-full rounded-md border border-brand-main bg-white py-3 px-4 text-base text-brand-main placeholder-transparent focus:outline-none focus:ring-2 @error('email') border-red-500 @enderror" title="Enter your email address" autoComplete="email" data-testid="reset-email-input" name="email"/>
                                            <label for="email" class="absolute left-4 top-3 text-sm text-brand-main transition-all duration-300 peer-placeholder-shown:top-6 peer-focus:left-6 peer-focus:text-brand-main">Email<span class="ml-1 text-brand-red">*</span></label>
                                        </div>
                                        @error('email')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" data-testid="send-reset-link-button" class="w-full py-3 px-6 text-white bg-brand-main rounded-md hover:bg-brand-green focus:ring-2 focus:ring-brand-main focus:outline-none disabled:bg-gray-300 disabled:cursor-not-allowed transition-all w-full mt-6">Send Reset Link</button>
                            </form>
                        </div>

                        <!-- Links de navegação -->
                        <div class="w-full mt-6">
                            <span class="items-start w-full md:p-3 font-robotoCond text-base font-bold block">
                                Not a member?
                                <button onclick="showForm('register'); return false;" class="underline text-brand-green text-base font-black hover:text-brand-main transition-colors" data-testid="register-button">Create Account</button>
                            </span>
                            <span class="items-start w-full md:p-3 font-robotoCond text-base font-black md:-mt-5 block">
                                Forgot Password?
                                <button onclick="showForm('reset'); return false;" class="underline text-brand-purple text-base font-black hover:text-brand-main transition-colors" data-testid="forgot-password-button">Reset Password</button>
                            </span>
                            <span class="text-center text-ui-fg-base text-small-regular mt-6">Already a member? <button class="underline">Sign in</button>.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col small:flex-row items-end justify-start small:border-t border-gray-200 py-12 gap-2">
            <div>
                <h3 class="text-3xl font-core leading-tight uppercase">Got questions?</h3>
                <span class="text-lg font-robotoCond text-ui-fg-base">You can find frequently asked questions and answers on our community:</span>
            </div>
            <div>
                <a href="https://discord.gg/mythofyggdrasil" target="_blank" rel="noreferrer" class="text-lg font-robotoCond text-ui-fg-base hover:underline flex gap-2 items-center font-bold uppercase justify-center">join our Discord<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none"><path fill="#5865F2" d="M9.996 9.58c-.739 0-1.348-.678-1.348-1.511 0-.834.597-1.512 1.348-1.512s1.36.685 1.348 1.512c-.011.826-.59 1.511-1.348 1.511m-4.984 0c-.739 0-1.348-.678-1.348-1.511 0-.834.597-1.512 1.348-1.512s1.36.685 1.349 1.512c-.012.826-.598 1.511-1.349 1.511m7.684-6.85a12.4 12.4 0 0 0-3.052-.946.05.05 0 0 0-.05.023q-.21.38-.38.78a11.4 11.4 0 0 0-3.428 0 8 8 0 0 0-.386-.78.05.05 0 0 0-.05-.023c-1.054.181-2.08.5-3.052.946a.04.04 0 0 0-.02.017C.334 5.652-.199 8.486.062 11.287a.05.05 0 0 0 .02.034 12.4 12.4 0 0 0 3.744 1.894.05.05 0 0 0 .053-.017q.434-.591.766-1.247a.05.05 0 0 0-.027-.065 8 8 0 0 1-1.17-.558.05.05 0 0 1-.025-.04.05.05 0 0 1 .02-.042c.083-.06.158-.12.233-.182a.05.05 0 0 1 .048-.007c2.454 1.12 5.112 1.12 7.537 0a.05.05 0 0 1 .05.006 5 5 0 0 0 .233.182.05.05 0 0 1 .02.042.05.05 0 0 1-.024.04 7.7 7.7 0 0 1-1.166.555.1.1 0 0 0-.017.01.05.05 0 0 0-.014.037q0 .01.005.019.337.651.765 1.246a.047.047 0 0 0 .053.018 12.4 12.4 0 0 0 3.75-1.893.05.05 0 0 0 .02-.034c.312-3.235-.524-6.046-2.217-8.54a.04.04 0 0 0-.023-.015"></path></svg></a>
            </div>
        </div>
    </div>
</main>

<script>
function showForm(formType) {
    // Esconder todos os formulários
    document.getElementById('login-form').classList.add('hidden');
    document.getElementById('register-form').classList.add('hidden');
    document.getElementById('reset-form').classList.add('hidden');

    // Mostrar o formulário selecionado
    document.getElementById(formType + '-form').classList.remove('hidden');

    // Mostrar/esconder o link "Back to Login"
    const backToLogin = document.getElementById('back-to-login');
    if (formType === 'login') {
        backToLogin.classList.add('hidden');
    } else {
        backToLogin.classList.remove('hidden');
    }
}

// Verificar se há erros de validação no formulário de registro e mostrar automaticamente
document.addEventListener('DOMContentLoaded', function() {
    // Verificar se há erros nos campos do registro
    const registerErrors = document.querySelectorAll('#register-form .text-red-500');
    if (registerErrors.length > 0) {
        showForm('register');
    }
});
</script>
@endsection
