<section class="py-28 px-8 lg:px-16 bg-white">
    <div class="container mx-auto max-w-7xl">
        {{-- Header --}}
        <div class="text-center mb-20">
            <h2 class="text-[48px] font-bold text-[#1e293b] mb-4 font-['Poppins',sans-serif] tracking-tight">
                From a High-Risk Cost Center to a Strategic Enabler
            </h2>
            <p class="text-[18px] text-slate-600 max-w-3xl mx-auto font-['Poppins',sans-serif]">
                How large GCC enterprises move from fragmented, risky translation processes to a single governed platform
            </p>
        </div>

        {{-- Main Infographic --}}
        <div class="grid lg:grid-cols-[1fr_auto_1fr] gap-0 mb-16">
            {{-- LEFT: BEFORE - Chaos --}}
            <div class="bg-gradient-to-br from-slate-100 to-slate-50 p-10 border-2 border-slate-200 relative">
                {{-- Header --}}
                <div class="mb-10">
                    <div class="inline-block px-4 py-2 bg-slate-700 text-white text-[13px] font-bold uppercase tracking-wider mb-3">
                        Before
                    </div>
                    <h3 class="text-[24px] font-bold text-slate-800 font-['Poppins',sans-serif]">
                        Fragmented Translation Workflow
                    </h3>
                </div>

                {{-- Chaos Pattern - scattered boxes --}}
                <div class="space-y-6 relative">
                    <div class="relative">
                        <div class="absolute top-0 left-0 w-full h-full opacity-10">
                            <svg class="w-full h-full" viewBox="0 0 400 500">
                                <line x1="80" y1="60" x2="120" y2="140" stroke="#94a3b8" stroke-width="2" stroke-dasharray="4 4" />
                                <line x1="200" y1="80" x2="180" y2="160" stroke="#94a3b8" stroke-width="2" stroke-dasharray="4 4" />
                                <line x1="100" y1="180" x2="200" y2="240" stroke="#94a3b8" stroke-width="2" stroke-dasharray="4 4" />
                                <line x1="250" y1="200" x2="150" y2="300" stroke="#94a3b8" stroke-width="2" stroke-dasharray="4 4" />
                            </svg>
                        </div>

                        @foreach([
                            ['title' => 'Manual Translation Agency', 'issue' => '⚠ Slow turnaround', 'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'],
                            ['title' => 'Email & File Sharing', 'issue' => '⚠ Data exposure risk', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                            ['title' => 'Generic Online AI Tools', 'issue' => '⚠ Inconsistent Arabic accuracy', 'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9'],
                            ['title' => 'Internal Reviews & Rework', 'issue' => '⚠ Broken formatting', 'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'],
                            ['title' => 'Version Control Issues', 'issue' => '⚠ No audit trail', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z']
                        ] as $index => $node)
                        <div class="mb-5 {{ $index % 2 === 0 ? '' : 'ml-auto max-w-[280px]' }} transform {{ $index % 2 === 0 ? '-rotate-1' : 'rotate-1' }}">
                            <div class="bg-white border-2 border-slate-300 p-5 shadow-sm">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 bg-slate-200 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $node['icon'] }}" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-[15px] font-bold text-slate-800 mb-1">{{ $node['title'] }}</div>
                                        <div class="text-[12px] text-red-600 font-semibold">{{ $node['issue'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Bottom Label --}}
                <div class="mt-10 pt-6 border-t-2 border-slate-300">
                    <div class="text-[14px] font-bold text-slate-500 uppercase tracking-wider">
                        Risk Profile: <span class="text-red-600">High</span>
                    </div>
                </div>
            </div>

            {{-- CENTER: CONTROL LAYER --}}
            <div class="relative flex items-center justify-center bg-[#005f83] px-8 py-10 lg:py-0">
                <div class="text-center">
                    {{-- Icon/Logo --}}
                    <div class="mb-6">
                        <div class="w-16 h-16 bg-[#ffe102] mx-auto flex items-center justify-center">
                            <svg class="w-9 h-9 text-[#005f83]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>

                    {{-- Text --}}
                    <div class="text-[#ffe102] font-bold text-[16px] uppercase tracking-widest mb-2 [writing-mode:vertical-lr] lg:[writing-mode:horizontal-tb] rotate-180 lg:rotate-0">
                        Tasctranslate.ai
                    </div>
                    <div class="text-white/80 text-[12px] font-semibold [writing-mode:vertical-lr] lg:[writing-mode:horizontal-tb] rotate-180 lg:rotate-0 whitespace-nowrap">
                        Enterprise Control Layer
                    </div>

                    {{-- Arrows --}}
                    <div class="hidden lg:block absolute -right-6 top-1/2 -translate-y-1/2">
                        <svg class="w-12 h-12 text-[#ffe102]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"/>
                        </svg>
                    </div>
                </div>
            </div>

            {{-- RIGHT: AFTER - Control --}}
            <div class="bg-white p-10 border-2 border-[#005f83] relative">
                {{-- Header --}}
                <div class="mb-10">
                    <div class="inline-block px-4 py-2 bg-[#005f83] text-white text-[13px] font-bold uppercase tracking-wider mb-3">
                        After
                    </div>
                    <h3 class="text-[24px] font-bold text-[#005f83] font-['Poppins',sans-serif]">
                        Governed Enterprise Translation
                    </h3>
                </div>

                {{-- Structured Flow --}}
                <div class="space-y-4">
                    {{-- Input --}}
                    <div class="bg-slate-50 border-l-4 border-[#005f83] p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-8 h-8 bg-[#005f83] flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                            </div>
                            <div class="text-[15px] font-bold text-[#005f83]">Secure Document Upload</div>
                        </div>
                        <div class="text-[13px] text-slate-600 leading-relaxed">
                            End-to-end encryption • Role-based access • Compliance ready
                        </div>
                    </div>

                    {{-- Arrow --}}
                    <div class="flex justify-center">
                        <svg class="w-6 h-6 text-[#005f83]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l-1.41 1.41 7.59 7.59h-16.18v2h16.18l-7.59 7.59 1.41 1.41 10-10-10-10z" transform="rotate(90 12 12)"/>
                        </svg>
                    </div>

                    {{-- Processing Blocks --}}
                    <div class="grid grid-cols-2 gap-3">
                        <div class="bg-slate-50 border border-slate-300 p-4">
                            <div class="text-[13px] font-bold text-slate-800 mb-1">97-98% Accuracy</div>
                            <div class="text-[11px] text-slate-600">Arabic & English</div>
                        </div>
                        <div class="bg-slate-50 border border-slate-300 p-4">
                            <div class="text-[13px] font-bold text-slate-800 mb-1">Format Preserved</div>
                            <div class="text-[11px] text-slate-600">Tables, headers, layout</div>
                        </div>
                    </div>

                    {{-- Arrow --}}
                    <div class="flex justify-center">
                        <svg class="w-6 h-6 text-[#005f83]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l-1.41 1.41 7.59 7.59h-16.18v2h16.18l-7.59 7.59 1.41 1.41 10-10-10-10z" transform="rotate(90 12 12)"/>
                        </svg>
                    </div>

                    {{-- Optional validation --}}
                    <div class="bg-slate-50 border-l-4 border-[#ffe102] p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-8 h-8 bg-[#ffe102] flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-[#005f83]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="text-[15px] font-bold text-slate-800">Optional Human Validation</div>
                        </div>
                        <div class="text-[13px] text-slate-600 leading-relaxed">
                            Expert review for critical documents • Legal compliance
                        </div>
                    </div>

                    {{-- Arrow --}}
                    <div class="flex justify-center">
                        <svg class="w-6 h-6 text-[#005f83]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l-1.41 1.41 7.59 7.59h-16.18v2h16.18l-7.59 7.59 1.41 1.41 10-10-10-10z" transform="rotate(90 12 12)"/>
                        </svg>
                    </div>

                    {{-- Output --}}
                    <div class="bg-gradient-to-br from-[#005f83] to-[#004766] border-2 border-[#005f83] p-5">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-8 h-8 bg-[#ffe102] flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-[#005f83]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="text-[15px] font-bold text-white">Board-Ready Document</div>
                        </div>
                        <div class="text-[13px] text-white/80 leading-relaxed">
                            Full audit trail • Version control • Instant download
                        </div>
                    </div>
                </div>

                {{-- Bottom Label --}}
                <div class="mt-10 pt-6 border-t-2 border-[#005f83]/20">
                    <div class="text-[14px] font-bold text-slate-500 uppercase tracking-wider">
                        Risk Profile: <span class="text-green-600">Governed</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer Statement --}}
        <div class="text-center pt-12 border-t-2 border-slate-200">
            <p class="text-[20px] font-bold text-slate-700 font-['Poppins',sans-serif] tracking-tight">
                From operational translation risk to enterprise-grade control.
            </p>
        </div>
    </div>
</section>

