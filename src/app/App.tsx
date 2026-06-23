import imgImage5 from "figma:asset/2b3412e8fe117b35199bad27286347d3bc75c3be.png";
import tascTranslateLogo from "../assets/tasctranslate-logo.png";
import svgPaths from "@/imports/svg-eckgmhz3vm";
import { TypeAnimation } from 'react-type-animation';
import { HowItWorksSection } from '@/app/components/HowItWorksSection';
import { EnterpriseInfographic } from '@/app/components/EnterpriseInfographic';
import { UseCasesSection } from '@/app/components/UseCasesSection';
import React from 'react';

export default function App() {
  const pricingGroups = [
    {
      label: 'AI translation',
      title: 'Without Human in the Loop',
      description: 'Fast, format-preserving AI translation for recurring document volumes.',
      plans: [
        { name: 'Starter', perPage: '$0.20', pages: '50', fee: '$10' },
        { name: 'Pro', perPage: '$0.15', pages: '200', fee: '$29', featured: true },
        { name: 'Team', perPage: '$0.13', pages: '500', fee: '$65' },
      ],
    },
    {
      label: 'Human reviewed',
      title: 'With Human in the Loop',
      description: 'Human in the Loop review for sensitive legal, HR, and regulatory documents.',
      plans: [
        { name: 'Starter', perPage: '$2.50', pages: '50', fee: '$125' },
        { name: 'Pro', perPage: '$2.20', pages: '200', fee: '$440', featured: true },
        { name: 'Team', perPage: '$2.00', pages: '500', fee: '$1,000' },
      ],
    },
  ];

  return (
    <div className="min-h-screen bg-white font-['Poppins',sans-serif]">
      {/* Hero Section */}
      <div className="relative bg-[#005f83] overflow-hidden" style={{ minHeight: "900px" }}>
        {/* Subtle Pattern Overlay */}
        <div className="absolute inset-0 opacity-[0.03]">
          <div className="absolute inset-0" style={{
            backgroundImage: `
              linear-gradient(rgba(255, 225, 2, 0.3) 1px, transparent 1px),
              linear-gradient(90deg, rgba(255, 225, 2, 0.3) 1px, transparent 1px)
            `,
            backgroundSize: '60px 60px'
          }}></div>
        </div>
        
        {/* Header Navigation - Fixed/Sticky */}
        <header className="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
          <div className="container mx-auto px-8 lg:px-16 py-4">
            <nav className="flex items-center justify-between">
              <div className="h-16 w-48">
                <img alt="Tasctranslate.ai Logo" className="h-full w-full object-contain" src={tascTranslateLogo} />
              </div>
              
              <div className="hidden lg:flex items-center gap-10 text-black/90">
                <a href="#features" className="text-[15px] hover:text-[#ffe102] transition-colors relative group">
                  Features
                  <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                </a>
                <a href="#use-cases" className="text-[15px] hover:text-[#ffe102] transition-colors relative group">
                  Use Cases
                  <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                </a>
                <a href="#pricing" className="text-[15px] hover:text-[#ffe102] transition-colors relative group">
                  Pricing
                  <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                </a>
                <a href="#about" className="text-[15px] hover:text-[#ffe102] transition-colors relative group">
                  About
                  <span className="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ffe102] group-hover:w-full transition-all"></span>
                </a>
              </div>
              
              <div className="flex items-center gap-3">
                <a href="https://app.tasctranslate.ai/Login" className="px-5 py-3 rounded-full border border-[#005f83]/20 text-[#005f83] font-medium text-[15px] hover:border-[#005f83]/40 hover:bg-[#005f83]/5 transition-all">
                  Login
                </a>
                <button className="px-7 py-3.5 rounded-full bg-gradient-to-r from-[#00bfff] to-[#56db46] text-white font-medium text-[15px] hover:shadow-[0_8px_30px_rgba(0,191,255,0.3)] hover:scale-105 transition-all">
                  Request a Private Pilot
                </button>
              </div>
            </nav>
          </div>
        </header>
        
        {/* Hero Content */}
        <div className="relative z-10 container mx-auto px-8 lg:px-16 pt-32 pb-40 text-center">
          <div className="max-w-6xl mx-auto">
            {/* Badge */}
            <div className="inline-flex items-center gap-2.5 px-5 py-2.5 mb-10 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
              <div className="w-2 h-2 bg-[#ffe102] rounded-full animate-pulse"></div>
              <span className="text-[14px] font-medium text-white/95 tracking-wide">ENTERPRISE AI TRANSLATION FOR THE GCC</span>
            </div>
            
            {/* Main Heading */}
            <h1 className="font-['Poppins',sans-serif] mb-8">
              <span className="block text-[56px] lg:text-[72px] font-semibold leading-[1.1] text-white tracking-tight mb-3">
                Welcome to Tasctranslate.ai
              </span>
              <span className="block text-[56px] lg:text-[72px] font-semibold leading-[1.1] tracking-tight min-h-[1.1em]">
                <TypeAnimation
                  sequence={[
                    'Translation Platform',
                    2000,
                    'منصة الترجمة المؤسسية',
                    2000,
                  ]}
                  wrapper="span"
                  speed={40}
                  className="text-[#ffe102]"
                  repeat={Infinity}
                />
              </span>
            </h1>
            
            {/* Subheading */}
            <p className="text-[20px] lg:text-[22px] text-white/80 leading-relaxed mb-12 max-w-4xl mx-auto font-['Gotham',sans-serif] font-light">
              Translate over 100-page PPT, DOCX, or PDF in one click with enterprise-grade translation and perfect formatting.
            </p>
            
            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4 justify-center items-center mb-24">
              <button className="px-8 py-4 rounded-full bg-gradient-to-r from-[#00bfff] to-[#56db46] text-white text-[17px] font-semibold hover:shadow-[0_8px_40px_rgba(0,191,255,0.4)] hover:scale-105 transition-all">
                Request a Private Pilot
              </button>
              <button className="px-8 py-4 rounded-full border-2 border-white/30 text-white text-[17px] font-semibold hover:bg-white/10 hover:border-white/50 transition-all">
                Watch Demo
              </button>
            </div>
            
            {/* Stats Bar */}
            <div className="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
              {[
                { value: "97-98%", label: "Translation Accuracy" },
                { value: "100%", label: "Data Security" },
                { value: "Zero", label: "Format Loss" }
              ].map((stat, idx) => (
                <div key={idx} className="bg-white/10 backdrop-blur-md rounded-[20px] p-8 border border-white/20 hover:bg-white/15 transition-all">
                  <div className="text-[48px] font-bold text-[#ffe102] mb-2 font-['Poppins',sans-serif]">{stat.value}</div>
                  <div className="text-white/80 text-[15px] font-medium">{stat.label}</div>
                </div>
              ))}
            </div>
          </div>
        </div>
        
        {/* Bottom Curve */}
        <div className="absolute bottom-0 left-0 w-full">
          <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" className="w-full">
            <path d="M0,64L60,69.3C120,75,240,85,360,80C480,75,600,53,720,48C840,43,960,53,1080,58.7C1200,64,1320,64,1380,64L1440,64L1440,120L1380,120C1320,120,1200,120,1080,120C960,120,840,120,720,120C600,120,480,120,360,120C240,120,120,120,60,120L0,120Z" fill="#ffe102"/>
          </svg>
        </div>
      </div>
      
      {/* Yellow Metrics Bar */}
      <div className="bg-[#ffe102] py-16 px-8 lg:px-16">
        <div className="container mx-auto max-w-7xl">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div className="text-center">
              <div className="text-[42px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">30% Cost Savings</div>
              <div className="text-[18px] text-[#005f83] font-['Poppins',sans-serif]">on enterprise translation</div>
            </div>
            <div className="text-center">
              <div className="text-[42px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">20% Faster</div>
              <div className="text-[18px] text-[#005f83] font-['Poppins',sans-serif]">Time-to-Market</div>
            </div>
            <div className="text-center">
              <div className="text-[42px] font-bold text-[#005f83] mb-2 font-['Poppins',sans-serif]">100% Compliance</div>
              <div className="text-[18px] text-[#005f83] font-['Poppins',sans-serif]">guaranteed</div>
            </div>
          </div>
        </div>
      </div>
      
      {/* Existing Tools Section */}
      <EnterpriseInfographic />
      
      {/* CTA Section Before Three Foundations */}
      <section className="py-20 px-8 lg:px-16 bg-gradient-to-br from-[#005f83] to-[#004d6b] relative overflow-hidden">
        {/* Decorative Elements */}
        <div className="absolute inset-0 opacity-[0.05]">
          <div className="absolute inset-0" style={{
            backgroundImage: `
              linear-gradient(rgba(255, 225, 2, 0.3) 1px, transparent 1px),
              linear-gradient(90deg, rgba(255, 225, 2, 0.3) 1px, transparent 1px)
            `,
            backgroundSize: '60px 60px'
          }}></div>
        </div>
        
        <div className="container mx-auto max-w-5xl relative z-10 text-center">
          <h2 className="text-[46px] font-bold text-white mb-6 font-['Poppins',sans-serif] leading-tight">
            See How Tasctranslate.ai Delivers<br />
            <span className="text-[#ffe102]">Enterprise-Grade Translation Control</span>
          </h2>
          <p className="text-[20px] text-white/90 mb-10 max-w-3xl mx-auto font-['Poppins',sans-serif]">
            Our platform is built on three non-negotiable foundations that set the standard for secure, accurate AI translation in regulated industries.
          </p>
          
          <button className="px-10 py-5 rounded-full bg-[#ffe102] text-[#005f83] text-[18px] font-bold hover:shadow-[0_8px_40px_rgba(255,225,2,0.5)] hover:scale-105 transition-all inline-flex items-center gap-3">
            Request a Demo
            <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2.5} d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </button>
        </div>
      </section>
      
      {/* Three Foundations Section */}
      <section className="py-28 px-8 lg:px-16 bg-white">
        <div className="container mx-auto max-w-7xl">
          {/* Header */}
          <div className="text-center mb-16">
            <h2 className="text-[52px] font-bold text-[#005f83] mb-6 font-['Poppins',sans-serif] leading-tight">
              The Three Foundations of<br />Enterprise Translation Control
            </h2>
            <p className="text-[19px] text-slate-600 max-w-3xl mx-auto font-['Poppins',sans-serif]">
              Tasctranslate.ai is built on three non-negotiable principles required by regulated enterprises in the GCC.
            </p>
          </div>

          {/* Three Pillars - Side by Side */}
          <div className="grid lg:grid-cols-3 gap-8 mb-12">
            {/* Pillar 1 - Accuracy */}
            <div className="bg-gradient-to-br from-[#005f83]/5 to-[#005f83]/10 rounded-[24px] p-8 border-2 border-[#005f83]/20 hover:border-[#005f83]/40 transition-all shadow-lg hover:shadow-xl group">
              {/* Number Badge */}
              <div className="flex justify-between items-start mb-6">
                <div className="relative">
                  <div className="absolute inset-0 bg-[#ffe102] rounded-full blur-lg opacity-30 group-hover:opacity-50 transition-opacity"></div>
                  <div className="relative w-16 h-16 bg-[#005f83] rounded-full flex items-center justify-center">
                    <span className="text-[28px] font-bold text-[#ffe102]">1</span>
                  </div>
                </div>
                <span className="px-3 py-1.5 bg-[#ffe102] rounded-full text-[11px] font-bold text-[#005f83] uppercase tracking-wider">
                  Accuracy
                </span>
              </div>

              {/* Title */}
              <h3 className="text-[24px] font-bold text-[#005f83] mb-6 font-['Poppins',sans-serif] leading-tight">
                Legal-Grade Accuracy
              </h3>
              
              {/* Key Points */}
              <div className="space-y-2.5">
                {[
                  "97–98% Arabic and English accuracy",
                  "Specialised legal and regulatory terminology",
                  "Context preserved across long-form documents",
                  "Designed for high-stakes decision making"
                ].map((point, idx) => (
                  <div key={idx} className="flex gap-2.5 items-start">
                    <div className="flex-shrink-0 w-5 h-5 bg-[#005f83] rounded-full flex items-center justify-center mt-0.5">
                      <svg className="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={3} d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <span className="text-[13px] font-medium text-[#005f83] leading-snug">{point}</span>
                  </div>
                ))}
              </div>
            </div>

            {/* Pillar 2 - Document Handling */}
            <div className="bg-gradient-to-br from-[#005f83]/5 to-[#005f83]/10 rounded-[24px] p-8 border-2 border-[#005f83]/20 hover:border-[#005f83]/40 transition-all shadow-lg hover:shadow-xl group">
              {/* Number Badge */}
              <div className="flex justify-between items-start mb-6">
                <div className="relative">
                  <div className="absolute inset-0 bg-[#ffe102] rounded-full blur-lg opacity-30 group-hover:opacity-50 transition-opacity"></div>
                  <div className="relative w-16 h-16 bg-[#005f83] rounded-full flex items-center justify-center">
                    <span className="text-[28px] font-bold text-[#ffe102]">2</span>
                  </div>
                </div>
                <span className="px-3 py-1.5 bg-[#ffe102] rounded-full text-[11px] font-bold text-[#005f83] uppercase tracking-wider">
                  Document Handling
                </span>
              </div>

              {/* Title */}
              <h3 className="text-[24px] font-bold text-[#005f83] mb-6 font-['Poppins',sans-serif] leading-tight">
                Multi Format Support
              </h3>

              {/* Key Points */}
              <div className="space-y-2.5">
                {[
                  "Supports PowerPoint, PDF, and Word documents",
                  "Layout and formatting integrity maintained",
                  "Handles complex enterprise document structures",
                  "Outputs remain presentation and compliance ready"
                ].map((point, idx) => (
                  <div key={idx} className="flex gap-2.5 items-start">
                    <div className="flex-shrink-0 w-5 h-5 bg-[#005f83] rounded-full flex items-center justify-center mt-0.5">
                      <svg className="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={3} d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <span className="text-[13px] font-medium text-[#005f83] leading-snug">{point}</span>
                  </div>
                ))}
              </div>
            </div>

            {/* Pillar 3 - Governance & Compliance */}
            <div className="bg-gradient-to-br from-[#005f83]/5 to-[#005f83]/10 rounded-[24px] p-8 border-2 border-[#005f83]/20 hover:border-[#005f83]/40 transition-all shadow-lg hover:shadow-xl group">
              {/* Number Badge */}
              <div className="flex justify-between items-start mb-6">
                <div className="relative">
                  <div className="absolute inset-0 bg-[#ffe102] rounded-full blur-lg opacity-30 group-hover:opacity-50 transition-opacity"></div>
                  <div className="relative w-16 h-16 bg-[#005f83] rounded-full flex items-center justify-center">
                    <span className="text-[28px] font-bold text-[#ffe102]">3</span>
                  </div>
                </div>
                <span className="px-3 py-1.5 bg-[#ffe102] rounded-full text-[11px] font-bold text-[#005f83] uppercase tracking-wider">
                  Governance
                </span>
              </div>

              {/* Title */}
              <h3 className="text-[24px] font-bold text-[#005f83] mb-6 font-['Poppins',sans-serif] leading-tight">
                Governance and Compliance
              </h3>
              
              {/* Key Points */}
              <div className="space-y-2.5">
                {[
                  "End-to-end encryption and access controls",
                  "Full audit logs and usage visibility",
                  "No external data training risk",
                  "Built to support PDPL and local data residency expectations"
                ].map((point, idx) => (
                  <div key={idx} className="flex gap-2.5 items-start">
                    <div className="flex-shrink-0 w-5 h-5 bg-[#005f83] rounded-full flex items-center justify-center mt-0.5">
                      <svg className="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={3} d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <span className="text-[13px] font-medium text-[#005f83] leading-snug">{point}</span>
                  </div>
                ))}
              </div>
            </div>
          </div>

          {/* Bridge Line */}
          <div className="bg-[#005f83] rounded-[20px] p-8 text-center shadow-xl">
            <p className="text-[20px] font-semibold text-white leading-relaxed font-['Poppins',sans-serif]">
              Together, these three foundations turn translation from an operational risk into a <span className="text-[#ffe102] font-bold">governed enterprise workflow.</span>
            </p>
          </div>
        </div>
      </section>
      
      {/* Features Section */}
      <section id="features" className="py-28 px-8 lg:px-16 bg-white">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center mb-16">
            <h2 className="text-[54px] font-semibold bg-clip-text text-transparent bg-gradient-to-r from-[#00bfff] to-[#56db46] mb-6 font-['Poppins',sans-serif] leading-tight">
              See Tasctranslate.ai in Action
            </h2>
            <p className="text-[19px] text-slate-600 max-w-3xl mx-auto font-['Poppins',sans-serif]">
              Watch how enterprises translate complex Arabic and English documents with accuracy, security, and preserved formatting.
            </p>
          </div>
          
          {/* Video Container */}
          <div className="relative max-w-5xl mx-auto">
            <div className="relative rounded-[30px] overflow-hidden shadow-2xl border-4 border-[#005f83]/20">
              <div className="relative pb-[56.25%]">
                <iframe
                  className="absolute top-0 left-0 w-full h-full"
                  src="https://www.youtube.com/embed/552aT1LhvVM"
                  title="Tasctranslate.ai Demo"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowFullScreen
                ></iframe>
              </div>
            </div>
            
            {/* Decorative Corner Accents */}
            <div className="absolute -top-4 -left-4 w-20 h-20 bg-[#ffe102] rounded-full blur-2xl opacity-30"></div>
            <div className="absolute -bottom-4 -right-4 w-20 h-20 bg-[#00bfff] rounded-full blur-2xl opacity-30"></div>
          </div>
        </div>
      </section>
      
      {/* How It Works Section */}
      <HowItWorksSection />
      
      {/* Use Cases Section */}
      <UseCasesSection />
      
      {/* Pricing Section */}
      <section id="pricing" className="py-28 px-8 lg:px-16 bg-white">
        <div className="container mx-auto max-w-7xl">
          <div className="text-center mb-14">
            <span className="inline-flex items-center rounded-full bg-[#ffe102]/20 px-4 py-2 text-[13px] font-bold uppercase tracking-[0.08em] text-[#005f83]">
              TASC Translate Pricing
            </span>
            <h2 className="mt-5 text-[44px] lg:text-[56px] font-semibold bg-clip-text text-transparent bg-gradient-to-r from-[#00bfff] to-[#56db46] font-['Poppins',sans-serif] leading-tight">
              Choose the right translation workflow
            </h2>
            <p className="mt-5 text-[18px] text-slate-600 font-['Poppins',sans-serif] max-w-3xl mx-auto">
              Start with AI-only translation for speed, or add Human in the Loop review when your documents need an expert human check before delivery.
            </p>
          </div>

          <div className="grid lg:grid-cols-2 gap-8">
            {pricingGroups.map((group) => (
              <div key={group.title} className="rounded-[24px] border border-slate-200 bg-[#f8fbfd] p-5 lg:p-6 shadow-[0_18px_50px_rgba(0,95,131,0.08)]">
                <div className="rounded-[18px] bg-[#005f83] px-6 py-6 text-white">
                  <p className="text-[13px] font-bold uppercase tracking-[0.12em] text-[#ffe102]">{group.label}</p>
                  <h3 className="mt-2 text-[32px] font-semibold font-['Poppins',sans-serif]">{group.title}</h3>
                  <p className="mt-2 text-[15px] leading-relaxed text-white/75">{group.description}</p>
                </div>

                <div className="mt-5 grid gap-4">
                  {group.plans.map((plan) => (
                    <div key={`${group.title}-${plan.name}`} className={`rounded-[18px] border ${plan.featured ? 'border-[#ffe102] bg-white shadow-lg' : 'border-slate-200 bg-white'} p-5`}>
                      <div className="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                          <div className="flex items-center gap-3">
                            <h4 className="text-[24px] font-bold text-[#005f83] font-['Poppins',sans-serif]">{plan.name}</h4>
                            {plan.featured && (
                              <span className="rounded-full bg-[#ffe102] px-3 py-1 text-[11px] font-bold uppercase tracking-wide text-[#005f83]">Popular</span>
                            )}
                          </div>
                          <p className="mt-1 text-[14px] text-slate-500">{plan.pages} pages included each month</p>
                        </div>

                        <div className="text-left sm:text-right">
                          <p className="text-[34px] font-bold text-[#005f83] leading-none">{plan.fee}<span className="text-[15px] font-semibold text-slate-500">/mo</span></p>
                          <p className="mt-2 text-[14px] text-slate-500">{plan.perPage} per page</p>
                        </div>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            ))}
          </div>

        </div>
      </section>
      
      {/* Final CTA Section */}
      <section className="py-28 px-8 lg:px-16 bg-[#005f83] relative overflow-hidden">
        {/* Decorative Elements */}
        <div className="absolute inset-0 opacity-[0.03]">
          <div className="absolute inset-0" style={{
            backgroundImage: `
              linear-gradient(rgba(255, 225, 2, 0.3) 1px, transparent 1px),
              linear-gradient(90deg, rgba(255, 225, 2, 0.3) 1px, transparent 1px)
            `,
            backgroundSize: '60px 60px'
          }}></div>
        </div>
        
        <div className="container mx-auto max-w-5xl relative z-10 text-center">
          <h2 className="text-[54px] font-semibold bg-clip-text text-transparent bg-gradient-to-r from-[#00bfff] to-[#56db46] mb-6 font-['Poppins',sans-serif] leading-tight">
            Test Enterprise AI Translation<br />With Your Own Documents
          </h2>
          <p className="text-[22px] text-white/90 mb-4 max-w-3xl mx-auto font-['Gotham',sans-serif]">
            Run a private pilot using your actual contracts, policies, or presentations.
          </p>
          <p className="text-[18px] text-white/70 mb-14 max-w-2xl mx-auto font-['Gotham',sans-serif]">
            Evaluate translation accuracy, security controls, and output quality in a real enterprise environment.
          </p>
          
          <button className="px-12 py-5 rounded-full bg-gradient-to-r from-[#00bfff] to-[#56db46] text-white text-[19px] font-semibold hover:shadow-[0_8px_40px_rgba(0,191,255,0.4)] hover:scale-105 transition-all inline-flex items-center gap-3">
            Request a Private Pilot
            <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
          </button>
        </div>
      </section>
      
      {/* Footer */}
      <footer className="py-16 px-8 lg:px-16 bg-[#003d54]">
        <div className="container mx-auto max-w-6xl">
          <div className="flex flex-col md:flex-row justify-between items-center md:items-start gap-8 mb-10">
            <div className="h-10 w-28">
              <img alt="Tasctranslate.ai Logo" className="h-full w-full object-contain opacity-70" src={tascTranslateLogo} />
            </div>
            
            <div className="text-center md:text-right text-[14px] text-white/50 font-['Poppins',sans-serif]">
              <div className="flex gap-10 justify-center md:justify-end">
                <a href="/terms-of-service" className="hover:text-white transition-colors">Terms of Service</a>
                <a href="#" className="hover:text-white transition-colors">Contact</a>
              </div>
              <address className="not-italic mt-4 leading-relaxed">
                2403, Nassima Tower, Sheikh Zayed Road, Dubai,<br />
                UAE, P.O. Box: 117495<br />
                <a href="tel:+97143588500" className="hover:text-white transition-colors">+971 4 358 8500</a><br />
                <br />
                Riyadh<br />
                Top Talent Consulting Ltd., Building 1, Office No. 4,<br />
                1st Floor Salahuddin Al Ayoubi Street, King Abdulaziz Dist.<br />
                Riyadh, Saudi Arabia, P.O. Box: 11452<br />
                <a href="tel:+966112166218" className="hover:text-white transition-colors">+966 11 216 6218</a><br />
                <a href="mailto:info@tascoutsourcing.com" className="hover:text-white transition-colors">info@tascoutsourcing.com</a>
              </address>
            </div>
          </div>
          
          <div className="pt-8 border-t border-white/10 text-center">
            <p className="text-[13px] text-white/40 font-['Poppins',sans-serif]">
              © 2026 Tasctranslate.ai. Enterprise AI Translation Software for Arabic & English Documents in the GCC.
            </p>
          </div>
        </div>
      </footer>
    </div>
  );
}
