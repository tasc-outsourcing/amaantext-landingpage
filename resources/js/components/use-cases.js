// Use Cases section component
document.addEventListener('DOMContentLoaded', function() {
    const rolePills = document.querySelectorAll('[data-role-pill]');
    const roleCards = document.querySelectorAll('[data-role-card]');

    if (rolePills.length === 0) return;

    let selectedRole = 0;

    function setSelectedRole(roleIndex) {
        selectedRole = roleIndex;

        // Update pills
        rolePills.forEach((pill, idx) => {
            if (idx === roleIndex) {
                pill.classList.add('bg-[#005f83]', 'text-white', 'shadow-lg');
                pill.classList.remove('bg-white', 'text-slate-600', 'border-slate-300');
            } else {
                pill.classList.remove('bg-[#005f83]', 'text-white', 'shadow-lg');
                pill.classList.add('bg-white', 'text-slate-600', 'border-slate-300');
            }
        });

        // Update cards
        roleCards.forEach((card, idx) => {
            if (idx === roleIndex) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }

    rolePills.forEach((pill, idx) => {
        pill.addEventListener('click', () => setSelectedRole(idx));
    });

    // Initialize
    setSelectedRole(0);
});

