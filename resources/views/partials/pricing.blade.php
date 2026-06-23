@php
    $pricingGroups = [
        [
            'label' => 'AI translation',
            'title' => 'Without Human in the Loop',
            'description' => 'Fast, format-preserving AI translation for recurring document volumes.',
            'plans' => [
                ['name' => 'Starter', 'perPage' => '$0.20', 'pages' => '50', 'fee' => '$10'],
                ['name' => 'Pro', 'perPage' => '$0.15', 'pages' => '200', 'fee' => '$29', 'featured' => true],
                ['name' => 'Team', 'perPage' => '$0.13', 'pages' => '500', 'fee' => '$65'],
            ],
        ],
        [
            'label' => 'Human reviewed',
            'title' => 'With Human in the Loop',
            'description' => 'Human in the Loop review for sensitive legal, HR, and regulatory documents.',
            'plans' => [
                ['name' => 'Starter', 'perPage' => '$2.50', 'pages' => '50', 'fee' => '$125'],
                ['name' => 'Pro', 'perPage' => '$2.20', 'pages' => '200', 'fee' => '$440', 'featured' => true],
                ['name' => 'Team', 'perPage' => '$2.00', 'pages' => '500', 'fee' => '$1,000'],
            ],
        ],
    ];
@endphp

<section id="pricing" class="py-28 px-8 lg:px-16 bg-white">
    <div class="container mx-auto max-w-7xl">
        <div class="text-center mb-14">
            <span class="inline-flex items-center rounded-full bg-[#ffe102]/20 px-4 py-2 text-[13px] font-bold uppercase tracking-[0.08em] text-[#005f83]">
                TASC Translate Pricing
            </span>
            <h2 class="mt-5 text-[44px] lg:text-[56px] font-semibold bg-clip-text text-transparent bg-gradient-to-r from-[#00bfff] to-[#56db46] font-['Poppins',sans-serif] leading-tight">
                Choose the right translation workflow
            </h2>
            <p class="mt-5 text-[18px] text-slate-600 font-['Poppins',sans-serif] max-w-3xl mx-auto">
                Start with AI-only translation for speed, or add Human in the Loop review when your documents need an expert human check before delivery.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            @foreach($pricingGroups as $group)
                <div class="rounded-[24px] border border-slate-200 bg-[#f8fbfd] p-5 lg:p-6 shadow-[0_18px_50px_rgba(0,95,131,0.08)]">
                    <div class="rounded-[18px] bg-[#005f83] px-6 py-6 text-white">
                        <p class="text-[13px] font-bold uppercase tracking-[0.12em] text-[#ffe102]">{{ $group['label'] }}</p>
                        <h3 class="mt-2 text-[32px] font-semibold font-['Poppins',sans-serif]">{{ $group['title'] }}</h3>
                        <p class="mt-2 text-[15px] leading-relaxed text-white/75">{{ $group['description'] }}</p>
                    </div>

                    <div class="mt-5 grid gap-4">
                        @foreach($group['plans'] as $plan)
                            <div class="rounded-[18px] border {{ !empty($plan['featured']) ? 'border-[#ffe102] bg-white shadow-lg' : 'border-slate-200 bg-white' }} p-5">
                                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                    <div>
                                        <div class="flex items-center gap-3">
                                            <h4 class="text-[24px] font-bold text-[#005f83] font-['Poppins',sans-serif]">{{ $plan['name'] }}</h4>
                                            @if(!empty($plan['featured']))
                                                <span class="rounded-full bg-[#ffe102] px-3 py-1 text-[11px] font-bold uppercase tracking-wide text-[#005f83]">Popular</span>
                                            @endif
                                        </div>
                                        <p class="mt-1 text-[14px] text-slate-500">{{ $plan['pages'] }} pages included each month</p>
                                    </div>

                                    <div class="text-left sm:text-right">
                                        <p class="text-[34px] font-bold text-[#005f83] leading-none">{{ $plan['fee'] }}<span class="text-[15px] font-semibold text-slate-500">/mo</span></p>
                                        <p class="mt-2 text-[14px] text-slate-500">{{ $plan['perPage'] }} per page</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
