@extends('layouts.app', [
    'title' => 'Thank You | TASC Translate',
    'description' => 'Thank you for contacting TASC Translate. Your request is under process and our team will reach out shortly.',
    'canonical' => 'https://www.tasctranslate.ai/thank-you',
    'robots' => 'noindex, nofollow',
])

@section('content')
<div class="min-h-screen bg-white font-['Poppins',sans-serif] text-[#005f83]">
    <header class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
        <div class="container mx-auto px-6 lg:px-16 py-4">
            <nav class="flex items-center justify-between gap-6">
                <a href="/" class="h-14 w-44 shrink-0" aria-label="Tasctranslate.ai home">
                    <img alt="Tasctranslate.ai Logo" class="h-full w-full object-contain" src="{{ asset('images/tasctranslate-logo.png') }}" />
                </a>

                <div class="hidden lg:flex items-center gap-10 text-black/90">
                    <a href="/#features" class="text-[15px] hover:text-[#005f83] transition-colors relative group">
                        Features
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                    </a>
                    <a href="/#use-cases" class="text-[15px] hover:text-[#005f83] transition-colors relative group">
                        Use Cases
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                    </a>
                    <a href="/#pricing" class="text-[15px] hover:text-[#005f83] transition-colors relative group">
                        Pricing
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                    </a>
                    <a href="/#about" class="text-[15px] hover:text-[#005f83] transition-colors relative group">
                        About
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                    </a>
                </div>

                <div class="hidden md:flex items-center gap-4">
                    <a href="https://app.tasctranslate.ai/Login" class="px-5 py-3 rounded-full border border-[#005f83]/20 text-[#005f83] font-medium text-[15px] hover:border-[#005f83]/40 hover:bg-[#005f83]/5 transition-all">
                        Login
                    </a>
                    <a href="/#how-it-works" class="text-[15px] text-black/80 hover:text-[#005f83] transition-colors">
                        Demo
                    </a>
                    <a href="https://app.tasctranslate.ai" class="px-6 py-3 rounded-full bg-gradient-to-r from-[#00bfff] to-[#56db46] text-white font-medium text-[15px] hover:shadow-[0_8px_30px_rgba(0,191,255,0.3)] hover:scale-105 transition-all">
                        Request Free Trial
                    </a>
                </div>

                <a href="https://app.tasctranslate.ai" class="md:hidden px-4 py-2.5 rounded-full bg-gradient-to-r from-[#00bfff] to-[#56db46] text-white font-medium text-[13px]">
                    Free Trial
                </a>
            </nav>
        </div>
    </header>

    <main class="pt-24">
        <section class="relative min-h-[calc(100vh-96px)] overflow-hidden bg-[#f7fbfd] flex items-center">
            <div class="absolute inset-x-0 top-0 h-2 bg-[#ffe102]"></div>
            <div class="absolute inset-0 opacity-[0.05]">
                <div class="absolute inset-0" style="background-image: linear-gradient(rgba(0, 95, 131, 0.35) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 95, 131, 0.35) 1px, transparent 1px); background-size: 56px 56px;"></div>
            </div>

            <div class="container mx-auto max-w-4xl px-6 lg:px-16 py-24 lg:py-32 relative z-10 text-center">
                <div class="mx-auto mb-8 flex h-20 w-20 items-center justify-center rounded-full bg-[#56db46] text-white shadow-[0_18px_50px_rgba(86,219,70,0.28)]">
                    <svg class="h-11 w-11" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>

                <div class="inline-flex items-center px-4 py-2 mb-6 bg-white rounded-full border border-[#005f83]/10 shadow-sm">
                    <span class="text-[13px] font-semibold uppercase tracking-[0.16em] text-[#005f83]">Request received</span>
                </div>

                <h1 class="text-[44px] sm:text-[58px] lg:text-[68px] font-semibold leading-[1.08] tracking-normal text-[#005f83] mb-6">
                    Thank you
                </h1>
                <p class="text-[20px] lg:text-[24px] leading-relaxed text-slate-600 max-w-3xl mx-auto mb-11">
                    Your request is under process. We will reach out to you shortly.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/" class="inline-flex items-center justify-center gap-3 px-7 py-4 rounded-full bg-[#005f83] text-white text-[16px] font-semibold hover:bg-[#004d6b] transition-all">
                        Back to Home
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.4" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="/#features" class="inline-flex items-center justify-center px-7 py-4 rounded-full border-2 border-[#005f83]/20 text-[#005f83] text-[16px] font-semibold hover:border-[#005f83]/45 hover:bg-white transition-all">
                        Explore Features
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-14 px-6 lg:px-16 bg-[#003d54]">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-8 mb-8">
                <a href="/" class="h-10 w-32">
                    <img alt="Tasctranslate.ai Logo" class="h-full w-full object-contain opacity-75" src="{{ asset('images/tasctranslate-logo.png') }}" />
                </a>

                <div class="text-center md:text-right text-[14px] text-white/55">
                    <div class="flex flex-wrap gap-x-8 gap-y-3 justify-center md:justify-end">
                        <a href="{{ route('terms-of-service') }}" class="hover:text-white transition-colors">Terms of Service</a>
                        <a href="mailto:info@tascoutsourcing.com" class="hover:text-white transition-colors">Contact</a>
                    </div>
                    <address class="not-italic mt-4 leading-relaxed">
                        2403, Nassima Tower, Sheikh Zayed Road, Dubai, UAE<br />
                        <a href="tel:+97143588500" class="hover:text-white transition-colors">+971 4 358 8500</a><br />
                        <br />
                        Riyadh<br />
                        Top Talent Consulting Ltd., Building 1, Office No. 4,<br />
                        1st Floor Salahuddin Al Ayoubi Street, King Abdulaziz Dist.<br />
                        Riyadh, Saudi Arabia, P.O. Box: 11452<br />
                        <a href="tel:+966112166218" class="hover:text-white transition-colors">+966 11 216 6218</a>
                    </address>
                </div>
            </div>

            <div class="pt-7 border-t border-white/10 text-center">
                <p class="text-[13px] text-white/40">
                    © 2026 Tasctranslate.ai. Enterprise AI Translation Software for Arabic & English Documents in the GCC.
                </p>
            </div>
        </div>
    </footer>
</div>
@endsection
