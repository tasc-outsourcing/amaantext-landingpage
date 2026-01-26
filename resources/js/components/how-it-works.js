// How It Works section component
document.addEventListener('DOMContentLoaded', function() {
    const stepButtons = document.querySelectorAll('[data-step-button]');
    const stepContents = document.querySelectorAll('[data-step-content]');
    const docFilename = document.getElementById('doc-filename');
    const docMeta = document.getElementById('doc-meta');
    const statusIndicator = document.getElementById('status-indicator');

    if (stepButtons.length === 0) return;

    let activeStep = 0;

    const statusConfig = [
        { text: '● Ready to Upload', class: 'bg-blue-100 text-blue-700' },
        { text: '● Translating...', class: 'bg-green-100 text-green-700 animate-pulse' },
        { text: '● Under Review', class: 'bg-purple-100 text-purple-700' },
        { text: '✓ Complete', class: 'bg-[#ffe102] text-[#005f83]' }
    ];

    function setActiveStep(stepIndex) {
        activeStep = stepIndex;

        // Update buttons
        stepButtons.forEach((btn, idx) => {
            const card = btn.closest('[data-step-card]');
            if (card) {
                if (idx === stepIndex) {
                    card.classList.add('bg-gradient-to-br', 'from-[#ffe102]', 'to-[#ffd700]', 'shadow-2xl');
                    card.classList.remove('bg-white/10', 'hover:bg-white/15');
                    
                    // Update number badge
                    const numberBadge = card.querySelector('.w-14.h-14');
                    if (numberBadge) {
                        numberBadge.classList.add('bg-[#005f83]', 'text-[#ffe102]', 'shadow-lg');
                        numberBadge.classList.remove('bg-white/10', 'text-white/40');
                    }
                    
                    // Update text colors
                    const title = card.querySelector('h3');
                    const desc = card.querySelector('p');
                    if (title) title.classList.replace('text-white', 'text-[#005f83]');
                    if (desc) desc.classList.replace('text-white/60', 'text-[#005f83]/70');
                } else {
                    card.classList.remove('bg-gradient-to-br', 'from-[#ffe102]', 'to-[#ffd700]', 'shadow-2xl');
                    card.classList.add('bg-white/10', 'hover:bg-white/15');
                    
                    // Update number badge
                    const numberBadge = card.querySelector('.w-14.h-14');
                    if (numberBadge) {
                        numberBadge.classList.remove('bg-[#005f83]', 'text-[#ffe102]', 'shadow-lg');
                        numberBadge.classList.add('bg-white/10', 'text-white/40');
                    }
                    
                    // Update text colors
                    const title = card.querySelector('h3');
                    const desc = card.querySelector('p');
                    if (title) title.classList.replace('text-[#005f83]', 'text-white');
                    if (desc) desc.classList.replace('text-[#005f83]/70', 'text-white/60');
                }
            }
        });

        // Update content
        stepContents.forEach((content, idx) => {
            if (idx === stepIndex) {
                content.classList.remove('hidden');
                content.classList.add('animate-fadeIn');
            } else {
                content.classList.add('hidden');
                content.classList.remove('animate-fadeIn');
            }
        });

        // Update document filename and meta
        if (docFilename && docMeta) {
            if (stepIndex < 3) {
                docFilename.textContent = 'Employment_Contract.pdf';
                docMeta.textContent = 'English Document • 2.4 MB';
            } else {
                docFilename.textContent = 'عقد_التوظيف.pdf';
                docMeta.textContent = 'مستند عربي • 2.4 MB';
            }
        }

        // Update status indicator
        if (statusIndicator && statusConfig[stepIndex]) {
            statusIndicator.className = `px-4 py-2 rounded-full text-[13px] font-semibold transition-all duration-500 ${statusConfig[stepIndex].class}`;
            statusIndicator.textContent = statusConfig[stepIndex].text;
        }
    }

    stepButtons.forEach((btn, idx) => {
        btn.addEventListener('click', () => setActiveStep(idx));
    });

    // Initialize
    setActiveStep(0);
});

