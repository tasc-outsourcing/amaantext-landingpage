<section class="py-32 px-8 lg:px-16 bg-[#005f83] relative overflow-hidden">
    {{-- Background --}}
    <div class="absolute inset-0 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255, 225, 2, 0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 225, 2, 0.5) 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-[56px] font-bold text-white mb-6 font-['Poppins',sans-serif] leading-tight">
                Watch Your Document<br />
                <span class="text-[#ffe102]">Transform in Real-Time</span>
            </h2>
            <p class="text-[20px] text-white/80 max-w-2xl mx-auto font-['Poppins',sans-serif]">
                Click through each step to see how AmaanText AI translates enterprise documents
            </p>
        </div>
        
        {{-- Main Content --}}
        <div class="grid lg:grid-cols-[1.3fr_1fr] gap-16 items-start">
            {{-- LEFT: Document Preview --}}
            <div class="lg:sticky lg:top-20">
                <div class="bg-white rounded-[24px] shadow-2xl overflow-hidden" style="height: 700px;">
                    {{-- Document Header --}}
                    <div class="bg-gradient-to-r from-gray-100 to-gray-50 px-8 py-6 border-b border-gray-200 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-[#005f83] flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-[16px] font-bold text-[#005f83]" id="doc-filename">Employment_Contract.pdf</div>
                                <div class="text-[13px] text-gray-500" id="doc-meta">English Document • 2.4 MB</div>
                            </div>
                        </div>
                        
                        {{-- Status Indicator --}}
                        <div class="px-4 py-2 rounded-full text-[13px] font-semibold transition-all duration-500 bg-blue-100 text-blue-700" id="status-indicator">
                            ● Ready to Upload
                        </div>
                    </div>
                    
                    {{-- Document Content --}}
                    <div class="p-10 h-full bg-white overflow-hidden relative">
                        {{-- Step 0: Original Document --}}
                        <div data-step-content="0" class="animate-fadeIn space-y-6">
                            <div>
                                <div class="text-[24px] font-bold text-[#005f83] mb-2">EMPLOYMENT AGREEMENT</div>
                                <div class="h-1 w-32 bg-[#005f83] rounded"></div>
                            </div>
                            
                            <div class="space-y-4 text-gray-700 leading-relaxed">
                                <p class="text-[15px]">
                                    <span class="font-semibold">This Employment Agreement</span> ("Agreement") is entered into as of January 15, 2025, by and between <span class="font-semibold">ABC Corporation</span> ("Employer") and <span class="font-semibold">John Smith</span> ("Employee").
                                </p>
                                
                                <div class="bg-gray-50 p-4 rounded-lg border-l-4 border-[#005f83]">
                                    <div class="font-bold text-[#005f83] mb-2">1. POSITION AND DUTIES</div>
                                    <p class="text-[14px]">Employee is hired as Senior Software Engineer and shall perform duties as assigned by management.</p>
                                </div>
                                
                                <div class="bg-gray-50 p-4 rounded-lg border-l-4 border-[#005f83]">
                                    <div class="font-bold text-[#005f83] mb-2">2. COMPENSATION</div>
                                    <p class="text-[14px]">Employee shall receive an annual salary of $120,000 USD, payable in accordance with standard company practices.</p>
                                </div>
                                
                                <div class="bg-gray-50 p-4 rounded-lg border-l-4 border-[#005f83]">
                                    <div class="font-bold text-[#005f83] mb-2">3. BENEFITS</div>
                                    <p class="text-[14px]">Employee is eligible for health insurance, 20 days paid vacation, and retirement plan contributions.</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Step 1: AI Translation in Progress --}}
                        <div data-step-content="1" class="hidden animate-fadeIn space-y-6 relative">
                            <div class="absolute inset-0 bg-gradient-to-b from-green-50/0 via-green-50/30 to-green-50/0 animate-pulse"></div>
                            
                            <div class="relative">
                                <div class="text-[24px] font-bold text-[#005f83] mb-2 flex items-center gap-3">
                                    <span class="opacity-50">EMPLOYMENT AGREEMENT</span>
                                    <svg class="w-6 h-6 text-green-600 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                </div>
                                <div class="h-1 w-32 bg-[#005f83] rounded"></div>
                            </div>
                            
                            <div class="space-y-4 relative">
                                <div class="bg-green-50 border-2 border-green-200 p-4 rounded-lg">
                                    <div class="flex items-center gap-2 mb-2">
                                        <div class="w-2 h-2 bg-green-600 rounded-full animate-pulse"></div>
                                        <span class="text-[13px] font-semibold text-green-700">Translating text...</span>
                                    </div>
                                    <p class="text-[14px] text-gray-600 line-through opacity-50">
                                        This Employment Agreement ("Agreement") is entered into as of January 15, 2025...
                                    </p>
                                    <p class="text-[14px] text-[#005f83] font-semibold mt-2" dir="rtl">
                                        يتم إبرام اتفاقية التوظيف هذه ("الاتفاقية") في 15 يناير 2025...
                                    </p>
                                </div>
                                
                                <div class="bg-yellow-50 border border-yellow-200 p-4 rounded-lg opacity-70">
                                    <div class="flex items-center gap-2 mb-2">
                                        <div class="w-2 h-2 bg-yellow-600 rounded-full animate-pulse"></div>
                                        <span class="text-[13px] font-semibold text-yellow-700">Processing section 2...</span>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="h-2 bg-yellow-200 rounded w-full animate-pulse"></div>
                                        <div class="h-2 bg-yellow-200 rounded w-4/5 animate-pulse"></div>
                                    </div>
                                </div>
                                
                                <div class="bg-gray-50 p-4 rounded-lg opacity-40">
                                    <div class="font-bold text-[#005f83] mb-2">3. BENEFITS</div>
                                    <div class="space-y-1">
                                        <div class="h-2 bg-gray-200 rounded w-full"></div>
                                        <div class="h-2 bg-gray-200 rounded w-3/4"></div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- AI Progress Indicator --}}
                            <div class="absolute bottom-8 left-0 right-0 bg-white/90 backdrop-blur p-4 rounded-lg shadow-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-[13px] font-semibold text-gray-700">AI Translation Progress</span>
                                    <span class="text-[13px] font-bold text-green-600">68%</span>
                                </div>
                                <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-green-500 to-green-600 rounded-full animate-progress" style="width: 68%;"></div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Step 2: Human Review --}}
                        <div data-step-content="2" class="hidden animate-fadeIn space-y-6" dir="rtl">
                            <div>
                                <div class="text-[24px] font-bold text-[#005f83] mb-2">اتفاقية التوظيف</div>
                                <div class="h-1 w-32 bg-[#005f83] rounded mr-auto"></div>
                            </div>
                            
                            <div class="space-y-4 text-gray-700 leading-relaxed">
                                <p class="text-[15px]">
                                    يتم إبرام <span class="font-semibold">اتفاقية التوظيف</span> هذه ("الاتفاقية") في 15 يناير 2025، بين <span class="font-semibold">شركة ABC</span> ("صاحب العمل") و <span class="font-semibold">جون سميث</span> ("الموظف").
                                </p>
                                
                                <div class="bg-purple-50 p-4 rounded-lg border-r-4 border-purple-600 relative">
                                    <div class="absolute -left-3 top-1/2 -translate-y-1/2 bg-purple-600 text-white px-3 py-1 rounded-full text-[11px] font-bold">
                                        ✓ Reviewed
                                    </div>
                                    <div class="font-bold text-[#005f83] mb-2">1. المنصب والمسؤوليات</div>
                                    <p class="text-[14px]">يتم تعيين الموظف كمهندس برمجيات أول وسيؤدي الواجبات المكلف بها من قبل الإدارة.</p>
                                </div>
                                
                                <div class="bg-purple-50 p-4 rounded-lg border-r-4 border-purple-600 relative">
                                    <div class="absolute -left-3 top-1/2 -translate-y-1/2 bg-purple-600 text-white px-3 py-1 rounded-full text-[11px] font-bold">
                                        ✓ Reviewed
                                    </div>
                                    <div class="font-bold text-[#005f83] mb-2">2. التعويض</div>
                                    <p class="text-[14px]">سيحصل الموظف على راتب سنوي قدره 120,000 دولار أمريكي، يُدفع وفقاً لممارسات الشركة القياسية.</p>
                                </div>
                                
                                <div class="bg-yellow-50 border-2 border-yellow-400 p-4 rounded-lg animate-pulse">
                                    <div class="flex items-center gap-2 mb-2">
                                        <div class="w-2 h-2 bg-yellow-600 rounded-full animate-ping"></div>
                                        <span class="text-[12px] font-bold text-yellow-700">Expert reviewing this section...</span>
                                    </div>
                                    <div class="font-bold text-[#005f83] mb-2">3. المزايا</div>
                                    <p class="text-[14px]">الموظف مؤهل للحصول على تأمين صحي، 20 يوم إجازة مدفوعة، ومساهمات خطة التقاعد.</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Step 3: Final Arabic Document --}}
                        <div data-step-content="3" class="hidden animate-fadeIn space-y-6" dir="rtl">
                            <div class="relative">
                                <div class="absolute -top-2 -right-2 bg-green-600 text-white px-4 py-1 rounded-full text-[12px] font-bold shadow-lg animate-bounce">
                                    ✓ Translation Complete
                                </div>
                                <div class="text-[24px] font-bold text-[#005f83] mb-2">اتفاقية التوظيف</div>
                                <div class="h-1 w-32 bg-[#ffe102] rounded mr-auto"></div>
                            </div>
                            
                            <div class="space-y-4 text-gray-700 leading-relaxed">
                                <p class="text-[15px]">
                                    يتم إبرام <span class="font-semibold">اتفاقية التوظيف</span> هذه ("الاتفاقية") في 15 يناير 2025، بين <span class="font-semibold">شركة ABC</span> ("صاحب العمل") و <span class="font-semibold">جون سميث</span> ("الموظف").
                                </p>
                                
                                <div class="bg-gradient-to-br from-[#ffe102]/20 to-[#ffd700]/20 p-4 rounded-lg border-r-4 border-[#ffe102]">
                                    <div class="font-bold text-[#005f83] mb-2">1. المنصب والمسؤوليات</div>
                                    <p class="text-[14px]">يتم تعيين الموظف كمهندس برمجيات أول وسيؤدي الواجبات المكلف بها من قبل الإدارة.</p>
                                </div>
                                
                                <div class="bg-gradient-to-br from-[#ffe102]/20 to-[#ffd700]/20 p-4 rounded-lg border-r-4 border-[#ffe102]">
                                    <div class="font-bold text-[#005f83] mb-2">2. التعويض</div>
                                    <p class="text-[14px]">سيحصل الموظف على راتب سنوي قدره 120,000 دولار أمريكي، يُدفع وفقاً لممارسات الشركة القياسية.</p>
                                </div>
                                
                                <div class="bg-gradient-to-br from-[#ffe102]/20 to-[#ffd700]/20 p-4 rounded-lg border-r-4 border-[#ffe102]">
                                    <div class="font-bold text-[#005f83] mb-2">3. المزايا</div>
                                    <p class="text-[14px]">الموظف مؤهل للحصول على تأمين صحي، 20 يوم إجازة مدفوعة، ومساهمات خطة التقاعد.</p>
                                </div>
                                
                                <div class="mt-6 pt-6 border-t-2 border-gray-200">
                                    <div class="flex items-center gap-3 text-[13px] text-gray-600">
                                        <div class="flex items-center gap-1">
                                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="font-semibold">98% Accuracy</span>
                                        </div>
                                        <span>•</span>
                                        <span>Formatting Preserved</span>
                                        <span>•</span>
                                        <span>Ready for Board Review</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- RIGHT: Step Cards --}}
            <div class="space-y-4">
                @foreach([
                    ['number' => '01', 'title' => 'Upload Your Document', 'description' => 'Drag and drop your English document. We support PDF, DOCX, and PPTX formats up to 50MB.'],
                    ['number' => '02', 'title' => 'AI Translation', 'description' => 'Our AI processes your document, translating text while preserving formatting, tables, and layouts.'],
                    ['number' => '03', 'title' => 'Human Review', 'description' => 'Expert linguists review critical sections for accuracy and cultural context.'],
                    ['number' => '04', 'title' => 'Download Arabic Version', 'description' => 'Receive your professionally translated document, ready for board meetings and legal use.']
                ] as $index => $step)
                <button data-step-button="{{ $index }}" data-step-card class="group w-full text-left transition-all duration-300 hover:scale-[1.01]">
                    <div class="relative rounded-[24px] p-6 transition-all duration-300 bg-white/10 hover:bg-white/15 backdrop-blur-sm">
                        <div class="relative flex gap-5 items-start">
                            {{-- Number --}}
                            <div class="flex-shrink-0 w-14 h-14 rounded-[16px] flex items-center justify-center text-[24px] font-bold transition-all duration-300 bg-white/10 text-white/40">
                                {{ $step['number'] }}
                            </div>
                            
                            {{-- Content --}}
                            <div class="flex-1 pt-1">
                                <h3 class="text-[22px] font-bold mb-2 font-['Poppins',sans-serif] transition-all duration-300 text-white">
                                    {{ $step['title'] }}
                                </h3>
                                <p class="text-[14px] leading-relaxed font-['Poppins',sans-serif] transition-all duration-300 text-white/60">
                                    {{ $step['description'] }}
                                </p>
                                
                                <div class="mt-3 text-[12px] text-white/40 group-hover:text-white/70 transition-colors flex items-center gap-1">
                                    <span>Click to view</span>
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
                @endforeach
                
                {{-- CTA Button --}}
                <div class="pt-6">
                    <button class="w-full bg-gradient-to-r from-[#ffe102] to-[#ffd700] text-[#005f83] px-8 py-5 rounded-[20px] text-[18px] font-bold hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-3">
                        <span>Try AmaanText AI Free</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

