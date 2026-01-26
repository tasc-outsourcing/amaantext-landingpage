<section id="pricing" class="py-28 px-8 lg:px-16 bg-white">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-12">
            <h2 class="text-[54px] font-semibold bg-clip-text text-transparent bg-gradient-to-r from-[#00bfff] to-[#56db46] mb-6 font-['Poppins',sans-serif] leading-tight">
                Transparent Pricing for<br />Enterprise Translation Control
            </h2>
            <p class="text-[18px] text-slate-600 font-['Poppins',sans-serif] mb-8">
                Choose the plan that fits your document volume and security requirements
            </p>
            
            {{-- Toggle Switch --}}
            <div class="flex items-center justify-center gap-4 mb-4">
                <span id="monthly-label" class="text-[16px] font-semibold transition-colors text-slate-400">Monthly</span>
                <label class="relative w-16 h-8 bg-slate-200 rounded-full transition-colors hover:bg-slate-300 cursor-pointer">
                    <input type="checkbox" id="pricing-toggle" class="sr-only" checked>
                    <div class="absolute top-1 left-1 w-6 h-6 bg-white rounded-full shadow-md transition-transform translate-x-[32px]"></div>
                </label>
                <span id="yearly-label" class="text-[16px] font-semibold transition-colors text-[#005f83]">Yearly</span>
            </div>
            
            {{-- Savings Badge --}}
            <div id="savings-badge" class="inline-flex items-center gap-2 px-4 py-2 bg-[#ffe102]/20 border border-[#ffe102] rounded-full">
                <svg class="w-4 h-4 text-[#005f83]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="text-[13px] font-bold text-[#005f83]">Save up to 20% with annual billing</span>
            </div>
        </div>
        
        {{-- Pricing Grid --}}
        <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6">
            {{-- Starter Plan --}}
            <div class="bg-white rounded-[20px] p-6 border-2 border-slate-200 hover:border-slate-300 transition-all shadow-md hover:shadow-lg flex flex-col">
                <div class="mb-6 h-[72px]">
                    <h3 class="text-[24px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">Starter</h3>
                    <p class="text-[13px] text-slate-500 leading-relaxed">For teams exploring AI translation with small projects</p>
                </div>
                
                <div class="mb-6 h-[68px]">
                    <div class="text-[42px] font-bold text-[#005f83] font-['Poppins',sans-serif]">
                        $0<span class="text-[18px] text-slate-500">/mo</span>
                    </div>
                </div>
                
                <button class="w-full px-4 py-3 rounded-full bg-[#005f83] text-white text-[14px] font-bold hover:bg-[#004d6b] transition-all mb-6">
                    Try Free
                </button>
                
                <div class="pt-6 border-t border-slate-200 flex-1">
                    <p class="text-[12px] font-bold text-slate-500 mb-4 uppercase tracking-wider">Use AmaanText for free, forever:</p>
                    <div class="space-y-3">
                        @foreach(['5 documents/month', 'Standard accuracy', 'PowerPoint, PDF, Word', 'Basic formatting preserved'] as $feature)
                        <div class="flex gap-2 items-start">
                            <div class="flex-shrink-0 w-4 h-4 rounded-full bg-slate-300 flex items-center justify-center mt-0.5">
                                <svg class="w-2.5 h-2.5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-[13px] text-slate-700 leading-snug">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Professional Plan --}}
            <div class="bg-white rounded-[20px] p-6 border-2 border-slate-200 hover:border-slate-300 transition-all shadow-md hover:shadow-lg flex flex-col">
                <div class="mb-6 h-[72px]">
                    <h3 class="text-[24px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">Professional</h3>
                    <p class="text-[13px] text-slate-500 leading-relaxed">For teams that need the essentials, done right and fast</p>
                </div>
                
                <div class="mb-6 h-[68px]">
                    <div class="text-[42px] font-bold text-[#005f83] font-['Poppins',sans-serif]">
                        <span data-monthly-price="">$349</span><span data-yearly-price="" class="hidden">$299</span><span class="text-[18px] text-slate-500">/mo</span>
                    </div>
                    <p class="text-[11px] text-slate-400 mt-1"><span data-monthly-price="">billed monthly</span><span data-yearly-price="" class="hidden">billed annually</span></p>
                </div>
                
                <button class="w-full px-4 py-3 rounded-full bg-[#005f83] text-white text-[14px] font-bold hover:bg-[#004d6b] transition-all mb-6">
                    Try Free
                </button>
                
                <div class="pt-6 border-t border-slate-200 flex-1">
                    <p class="text-[12px] font-bold text-slate-500 mb-4 uppercase tracking-wider">Everything in Free, plus:</p>
                    <div class="space-y-3">
                        @foreach([
                            ['text' => '50 documents/month', 'highlight' => true],
                            ['text' => '97-98% accuracy', 'highlight' => false],
                            ['text' => 'Priority processing', 'highlight' => false],
                            ['text' => 'Email support', 'highlight' => false],
                            ['text' => 'Advanced formatting', 'highlight' => false]
                        ] as $item)
                        <div class="flex gap-2 items-start">
                            <div class="flex-shrink-0 w-4 h-4 rounded-full bg-slate-300 flex items-center justify-center mt-0.5">
                                <svg class="w-2.5 h-2.5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-[13px] text-slate-700 leading-snug">
                                @if($item['highlight'])
                                    <span class="text-[#00bfff] font-semibold">{{ $item['text'] }}</span>
                                @else
                                    {{ $item['text'] }}
                                @endif
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Business Plan - MOST POPULAR --}}
            <div class="bg-white rounded-[20px] p-6 border-2 border-[#ffe102] hover:border-[#ffd700] transition-all shadow-lg hover:shadow-xl relative flex flex-col">
                {{-- Most Popular Badge --}}
                <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-4 py-1.5 bg-[#ffe102] rounded-full">
                    <span class="text-[10px] font-bold text-[#005f83] uppercase tracking-wider">Most Popular</span>
                </div>
                
                <div class="mb-6 mt-2 h-[72px]">
                    <h3 class="text-[24px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">Business</h3>
                    <p class="text-[13px] text-slate-500 leading-relaxed">For scaling teams that need better control</p>
                </div>
                
                <div class="mb-6 h-[68px]">
                    <div class="text-[42px] font-bold text-[#005f83] font-['Poppins',sans-serif]">
                        <span data-monthly-price="">$949</span><span data-yearly-price="" class="hidden">$799</span><span class="text-[18px] text-slate-500">/mo</span>
                    </div>
                    <p class="text-[11px] text-slate-400 mt-1"><span data-monthly-price="">billed monthly</span><span data-yearly-price="" class="hidden">billed annually</span></p>
                </div>
                
                <button class="w-full px-4 py-3 rounded-full bg-[#ffe102] text-[#005f83] text-[14px] font-bold hover:bg-[#ffd700] transition-all mb-6">
                    Try Free
                </button>
                
                <div class="pt-6 border-t border-slate-200 flex-1">
                    <p class="text-[12px] font-bold text-slate-500 mb-4 uppercase tracking-wider">Everything in Professional, plus:</p>
                    <div class="space-y-3">
                        @foreach([
                            ['text' => '200 documents/month', 'highlight' => true],
                            ['text' => 'Legal-grade accuracy', 'highlight' => true],
                            ['text' => 'Basic audit logs', 'highlight' => false],
                            ['text' => 'Role-based access', 'highlight' => false],
                            ['text' => 'Custom workflows', 'highlight' => false],
                            ['text' => 'Dedicated support', 'highlight' => false]
                        ] as $item)
                        <div class="flex gap-2 items-start">
                            <div class="flex-shrink-0 w-4 h-4 rounded-full bg-[#ffe102] flex items-center justify-center mt-0.5">
                                <svg class="w-2.5 h-2.5 text-[#005f83]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-[13px] text-slate-700 leading-snug">
                                @if($item['highlight'])
                                    <span class="text-[#005f83] font-semibold">{{ $item['text'] }}</span>
                                @else
                                    {{ $item['text'] }}
                                @endif
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Advanced Plan --}}
            <div class="bg-white rounded-[20px] p-6 border-2 border-slate-200 hover:border-slate-300 transition-all shadow-md hover:shadow-lg flex flex-col">
                <div class="mb-6 h-[72px]">
                    <h3 class="text-[24px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">Advanced</h3>
                    <p class="text-[13px] text-slate-500 leading-relaxed">For teams with complex, multi-department setups</p>
                </div>
                
                <div class="mb-6 h-[68px]">
                    <div class="text-[42px] font-bold text-[#005f83] font-['Poppins',sans-serif]">
                        $1,999<span class="text-[18px] text-slate-500">/mo</span>
                    </div>
                    <p class="text-[11px] text-slate-400 mt-1">starting at, with annual billing</p>
                </div>
                
                <button class="w-full px-4 py-3 rounded-full border-2 border-[#005f83] text-[#005f83] text-[14px] font-bold hover:bg-[#005f83] hover:text-white transition-all mb-6 inline-flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Chat with Sales
                </button>
                
                <div class="pt-6 border-t border-slate-200 flex-1">
                    <p class="text-[12px] font-bold text-slate-500 mb-4 uppercase tracking-wider">Everything in Business, plus:</p>
                    <div class="space-y-3">
                        @foreach([
                            ['text' => 'Unlimited documents', 'highlight' => true],
                            ['text' => 'Custom AI profiles', 'highlight' => false],
                            ['text' => 'Advanced integrations', 'highlight' => false],
                            ['text' => 'Custom workflows', 'highlight' => false],
                            ['text' => 'Priority support + CSM', 'highlight' => false],
                            ['text' => 'Full audit logs', 'highlight' => false]
                        ] as $item)
                        <div class="flex gap-2 items-start">
                            <div class="flex-shrink-0 w-4 h-4 rounded-full bg-[#005f83] flex items-center justify-center mt-0.5">
                                <svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-[13px] text-slate-700 leading-snug">
                                @if($item['highlight'])
                                    <span class="text-[#005f83] font-semibold">{{ $item['text'] }}</span>
                                @else
                                    {{ $item['text'] }}
                                @endif
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Enterprise Plan --}}
            <div class="bg-white rounded-[20px] p-6 border-2 border-slate-200 hover:border-slate-300 transition-all shadow-md hover:shadow-lg flex flex-col">
                <div class="mb-6 h-[72px]">
                    <h3 class="text-[24px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">Enterprise</h3>
                    <p class="text-[13px] text-slate-500 leading-relaxed">For global orgs with bespoke security and support needs</p>
                </div>
                
                <div class="mb-6 h-[68px]">
                    <div class="text-[20px] font-semibold text-slate-600 font-['Poppins',sans-serif] mb-2">
                        Get an estimate -
                    </div>
                    <a href="#" class="text-[14px] text-[#00bfff] font-semibold hover:underline">contact us</a>
                </div>
                
                <button class="w-full px-4 py-3 rounded-full border-2 border-[#005f83] text-[#005f83] text-[14px] font-bold hover:bg-[#005f83] hover:text-white transition-all mb-6 inline-flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Chat with Sales
                </button>
                
                <div class="pt-6 border-t border-slate-200 flex-1">
                    <p class="text-[12px] font-bold text-slate-500 mb-4 uppercase tracking-wider">Everything in Advanced, plus:</p>
                    <div class="space-y-3">
                        @foreach(['Unlimited integrations', 'Custom workflows', 'Dedicated CSM manager', 'Full audit logs', 'SSO', 'PDPL compliance support'] as $feature)
                        <div class="flex gap-2 items-start">
                            <div class="flex-shrink-0 w-4 h-4 rounded-full bg-[#005f83] flex items-center justify-center mt-0.5">
                                <svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-[13px] text-slate-700 leading-snug">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

