// Pricing toggle component
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('pricing-toggle');
    const monthlyPrices = document.querySelectorAll('[data-monthly-price]');
    const yearlyPrices = document.querySelectorAll('[data-yearly-price]');
    const monthlyLabel = document.getElementById('monthly-label');
    const yearlyLabel = document.getElementById('yearly-label');
    const savingsBadge = document.getElementById('savings-badge');
    const toggleBg = toggle?.parentElement;
    const toggleSlider = toggle?.nextElementSibling;

    if (!toggle) return;

    let isYearly = toggle.checked;

    toggle.addEventListener('change', function() {
        isYearly = this.checked;
        updatePrices();
    });

    function updatePrices() {
        monthlyPrices.forEach(el => {
            el.classList.toggle('hidden', isYearly);
            el.classList.toggle('block', !isYearly);
        });
        yearlyPrices.forEach(el => {
            el.classList.toggle('hidden', !isYearly);
            el.classList.toggle('block', isYearly);
        });

        if (monthlyLabel) {
            monthlyLabel.classList.toggle('text-[#005f83]', !isYearly);
            monthlyLabel.classList.toggle('text-slate-400', isYearly);
        }

        if (yearlyLabel) {
            yearlyLabel.classList.toggle('text-[#005f83]', isYearly);
            yearlyLabel.classList.toggle('text-slate-400', !isYearly);
        }

        if (savingsBadge) {
            savingsBadge.style.display = isYearly ? 'inline-flex' : 'none';
        }

        // Update toggle background and slider position
        if (toggleBg) {
            toggleBg.style.backgroundColor = isYearly ? '#005f83' : '#e2e8f0';
        }
        if (toggleSlider) {
            toggleSlider.style.transform = isYearly ? 'translateX(32px)' : 'translateX(0)';
        }
    }

    updatePrices();
});

