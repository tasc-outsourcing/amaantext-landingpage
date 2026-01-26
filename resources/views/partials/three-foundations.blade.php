<section class="py-28 px-8 lg:px-16 bg-white">
    <div class="container mx-auto max-w-7xl">
        {{-- Header --}}
        <div class="text-center mb-16">
            <h2 class="text-[52px] font-bold text-[#005f83] mb-6 font-['Poppins',sans-serif] leading-tight">
                The Three Foundations of<br />Enterprise Translation Control
            </h2>
            <p class="text-[19px] text-slate-600 max-w-3xl mx-auto font-['Poppins',sans-serif]">
                AmaanText AI is built on three non-negotiable principles required by regulated enterprises in the GCC.
            </p>
        </div>

        {{-- Three Pillars - Side by Side --}}
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            @foreach([
                [
                    'number' => '1',
                    'badge' => 'Accuracy',
                    'title' => 'Legal-Grade Accuracy',
                    'points' => [
                        '97–98% Arabic and English accuracy',
                        'Specialised legal and regulatory terminology',
                        'Context preserved across long-form documents',
                        'Designed for high-stakes decision making'
                    ]
                ],
                [
                    'number' => '2',
                    'badge' => 'Document Handling',
                    'title' => 'Multi Format Support',
                    'points' => [
                        'Supports PowerPoint, PDF, and Word documents',
                        'Layout and formatting integrity maintained',
                        'Handles complex enterprise document structures',
                        'Outputs remain presentation and compliance ready'
                    ]
                ],
                [
                    'number' => '3',
                    'badge' => 'Governance',
                    'title' => 'Governance and Compliance',
                    'points' => [
                        'End-to-end encryption and access controls',
                        'Full audit logs and usage visibility',
                        'No external data training risk',
                        'Built to support PDPL and local data residency expectations'
                    ]
                ]
            ] as $pillar)
            <div class="bg-gradient-to-br from-[#005f83]/5 to-[#005f83]/10 rounded-[24px] p-8 border-2 border-[#005f83]/20 hover:border-[#005f83]/40 transition-all shadow-lg hover:shadow-xl group">
                {{-- Number Badge --}}
                <div class="flex justify-between items-start mb-6">
                    <div class="relative">
                        <div class="absolute inset-0 bg-[#ffe102] rounded-full blur-lg opacity-30 group-hover:opacity-50 transition-opacity"></div>
                        <div class="relative w-16 h-16 bg-[#005f83] rounded-full flex items-center justify-center">
                            <span class="text-[28px] font-bold text-[#ffe102]">{{ $pillar['number'] }}</span>
                        </div>
                    </div>
                    <span class="px-3 py-1.5 bg-[#ffe102] rounded-full text-[11px] font-bold text-[#005f83] uppercase tracking-wider">
                        {{ $pillar['badge'] }}
                    </span>
                </div>

                {{-- Title --}}
                <h3 class="text-[24px] font-bold text-[#005f83] mb-6 font-['Poppins',sans-serif] leading-tight">
                    {{ $pillar['title'] }}
                </h3>
                
                {{-- Key Points --}}
                <div class="space-y-2.5">
                    @foreach($pillar['points'] as $point)
                    <div class="flex gap-2.5 items-start">
                        <div class="flex-shrink-0 w-5 h-5 bg-[#005f83] rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-[13px] font-medium text-[#005f83] leading-snug">{{ $point }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        {{-- Bridge Line --}}
        <div class="bg-[#005f83] rounded-[20px] p-8 text-center shadow-xl">
            <p class="text-[20px] font-semibold text-white leading-relaxed font-['Poppins',sans-serif]">
                Together, these three foundations turn translation from an operational risk into a <span class="text-[#ffe102] font-bold">governed enterprise workflow.</span>
            </p>
        </div>
    </div>
</section>

