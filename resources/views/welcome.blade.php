@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white font-['Poppins',sans-serif]">
    {{-- Hero Section --}}
    <div class="relative bg-[#005f83] overflow-hidden" style="min-height: 900px;">
        {{-- Subtle Pattern Overlay --}}
        <div class="absolute inset-0 opacity-[0.03]">
            <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255, 225, 2, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 225, 2, 0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
        </div>
        
        {{-- Header Navigation - Fixed/Sticky --}}
        <header class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
            <div class="container mx-auto px-8 lg:px-16 py-4">
                <nav class="flex items-center justify-between">
                    <div class="h-16 w-48">
                        <img alt="AmaanText AI Logo" class="h-full w-full object-contain" src="{{ asset('images/a2ec735a587b0c6790f0022759483bc195d10feb.png') }}" />
                    </div>
                    
                    <div class="hidden lg:flex items-center gap-10 text-black/90">
                        <a href="#features" class="text-[15px] hover:text-[#ffe102] transition-colors relative group">
                            Features
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                        </a>
                        <a href="#use-cases" class="text-[15px] hover:text-[#ffe102] transition-colors relative group">
                            Use Cases
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                        </a>
                        <a href="#pricing" class="text-[15px] hover:text-[#ffe102] transition-colors relative group">
                            Pricing
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                        </a>
                        <a href="#about" class="text-[15px] hover:text-[#ffe102] transition-colors relative group">
                            About
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                        </a>
                    </div>
                    
                    <button class="px-7 py-3.5 rounded-full bg-gradient-to-r from-[#00bfff] to-[#56db46] text-white font-medium text-[15px] hover:shadow-[0_8px_30px_rgba(0,191,255,0.3)] hover:scale-105 transition-all">
                        Request a Private Pilot
                    </button>
                </nav>
            </div>
        </header>
        
        {{-- Hero Content --}}
        <div class="relative z-10 container mx-auto px-8 lg:px-16 pt-32 pb-40 text-center">
            <div class="max-w-6xl mx-auto">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2.5 px-5 py-2.5 mb-10 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    <div class="w-2 h-2 bg-[#ffe102] rounded-full animate-pulse"></div>
                    <span class="text-[14px] font-medium text-white/95 tracking-wide">ENTERPRISE AI TRANSLATION FOR THE GCC</span>
                </div>
                
                {{-- Main Heading --}}
                <h1 class="font-['Poppins',sans-serif] mb-8">
                    <span class="block text-[56px] lg:text-[72px] font-semibold leading-[1.1] text-white tracking-tight mb-3">
                        Welcome to AmaanText.ai
                    </span>
                    <span class="block text-[56px] lg:text-[72px] font-semibold leading-[1.1] tracking-tight min-h-[1.1em]">
                        <span id="type-animation" class="text-[#ffe102]"></span>
                    </span>
                </h1>
                
                {{-- Subheading --}}
                <p class="text-[20px] lg:text-[22px] text-white/80 leading-relaxed mb-12 max-w-4xl mx-auto font-['Gotham',sans-serif] font-light">
                    Delivers speed, compliance, and legal-grade accuracy required for today's enterprise.
                </p>
                
                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-24">
                    <button class="px-8 py-4 rounded-full bg-gradient-to-r from-[#00bfff] to-[#56db46] text-white text-[17px] font-semibold hover:shadow-[0_8px_40px_rgba(0,191,255,0.4)] hover:scale-105 transition-all">
                        Request a Private Pilot
                    </button>
                    <button class="px-8 py-4 rounded-full border-2 border-white/30 text-white text-[17px] font-semibold hover:bg-white/10 hover:border-white/50 transition-all">
                        Watch Demo
                    </button>
                </div>
                
                {{-- Stats Bar --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    @foreach([
                        ['value' => '97-98%', 'label' => 'Translation Accuracy'],
                        ['value' => '100%', 'label' => 'Data Security'],
                        ['value' => 'Zero', 'label' => 'Format Loss']
                    ] as $stat)
                    <div class="bg-white/10 backdrop-blur-md rounded-[20px] p-8 border border-white/20 hover:bg-white/15 transition-all">
                        <div class="text-[48px] font-bold text-[#ffe102] mb-2 font-['Poppins',sans-serif]">{{ $stat['value'] }}</div>
                        <div class="text-white/80 text-[15px] font-medium">{{ $stat['label'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        {{-- Bottom Curve --}}
        <div class="absolute bottom-0 left-0 w-full">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                <path d="M0,64L60,69.3C120,75,240,85,360,80C480,75,600,53,720,48C840,43,960,53,1080,58.7C1200,64,1320,64,1380,64L1440,64L1440,120L1380,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z" fill="#ffe102"/>
            </svg>
        </div>
    </div>
    
    {{-- Yellow Metrics Bar --}}
    <div class="bg-[#ffe102] py-16 px-8 lg:px-16">
        <div class="container mx-auto max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center">
                    <div class="text-[42px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">30% Cost Savings</div>
                    <div class="text-[18px] text-[#005f83] font-['Poppins',sans-serif]">on enterprise translation</div>
                </div>
                <div class="text-center">
                    <div class="text-[42px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">20% Faster</div>
                    <div class="text-[18px] text-[#005f83] font-['Poppins',sans-serif]">Time-to-Market</div>
                </div>
                <div class="text-center">
                    <div class="text-[42px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">100% Compliance</div>
                    <div class="text-[18px] text-[#005f83] font-['Poppins',sans-serif]">guaranteed</div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Existing Tools Section --}}
    @include('partials.enterprise-infographic')
    
    {{-- CTA Section Before Three Foundations --}}
    <section class="py-20 px-8 lg:px-16 bg-gradient-to-br from-[#005f83] to-[#004d6b] relative overflow-hidden">
        {{-- Decorative Elements --}}
        <div class="absolute inset-0 opacity-[0.05]">
            <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255, 225, 2, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 225, 2, 0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
        </div>
        
        <div class="container mx-auto max-w-5xl relative z-10 text-center">
            <h2 class="text-[46px] font-bold text-white mb-6 font-['Poppins',sans-serif] leading-tight">
                See How AmaanText AI Delivers<br />
                <span class="text-[#ffe102]">Enterprise-Grade Translation Control</span>
            </h2>
            <p class="text-[20px] text-white/90 mb-10 max-w-3xl mx-auto font-['Poppins',sans-serif]">
                Our platform is built on three non-negotiable foundations that set the standard for secure, accurate AI translation in regulated industries.
            </p>
            
            <button class="px-10 py-5 rounded-full bg-[#ffe102] text-[#005f83] text-[18px] font-bold hover:shadow-[0_8px_40px_rgba(255,225,2,0.5)] hover:scale-105 transition-all inline-flex items-center gap-3">
                Request a Demo
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
    </section>
    
    {{-- Three Foundations Section --}}
    @include('partials.three-foundations')
    
    {{-- Features Section --}}
    @include('partials.features-section')
    
    {{-- How It Works Section --}}
    @include('partials.how-it-works')
    
    {{-- Use Cases Section --}}
    @include('partials.use-cases')
    
    {{-- Pricing Section --}}
    @include('partials.pricing')
    
    {{-- Final CTA Section --}}
    <section class="py-28 px-8 lg:px-16 bg-[#005f83] relative overflow-hidden">
        {{-- Decorative Elements --}}
        <div class="absolute inset-0 opacity-[0.03]">
            <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255, 225, 2, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 225, 2, 0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
        </div>
        
        <div class="container mx-auto max-w-5xl relative z-10 text-center">
            <h2 class="text-[54px] font-semibold bg-clip-text text-transparent bg-gradient-to-r from-[#00bfff] to-[#56db46] mb-6 font-['Poppins',sans-serif] leading-tight">
                Test Enterprise AI Translation<br />With Your Own Documents
            </h2>
            <p class="text-[22px] text-white/90 mb-4 max-w-3xl mx-auto font-['Gotham',sans-serif]">
                Run a private pilot using your actual contracts, policies, or presentations.
            </p>
            <p class="text-[18px] text-white/70 mb-14 max-w-2xl mx-auto font-['Gotham',sans-serif]">
                Evaluate translation accuracy, security controls, and output quality in a real enterprise environment.
            </p>
            
            <button class="px-12 py-5 rounded-full bg-gradient-to-r from-[#00bfff] to-[#56db46] text-white text-[19px] font-semibold hover:shadow-[0_8px_40px_rgba(0,191,255,0.4)] hover:scale-105 transition-all inline-flex items-center gap-3">
                Request a Private Pilot
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </button>
        </div>
    </section>
    
    {{-- Footer --}}
    <footer class="py-16 px-8 lg:px-16 bg-[#003d54]">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8 mb-10">
                <div class="h-10 w-28">
                    <img alt="AmaanText AI Logo" class="h-full w-full object-contain opacity-70" src="{{ asset('images/a2ec735a587b0c6790f0022759483bc195d10feb.png') }}" />
                </div>
                
                <div class="flex gap-10 text-[14px] text-white/50 font-['Poppins',sans-serif]">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-white transition-colors">Contact</a>
                </div>
            </div>
            
            <div class="pt-8 border-t border-white/10 text-center">
                <p class="text-[13px] text-white/40 font-['Poppins',sans-serif]">
                    © 2026 AmaanText AI. Enterprise AI Translation Software for Arabic & English Documents in the GCC.
                </p>
            </div>
        </div>
    </footer>
</div>
@endsection

