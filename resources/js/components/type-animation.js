// Type animation component
document.addEventListener('DOMContentLoaded', function() {
    const typeAnimationElement = document.getElementById('type-animation');
    if (!typeAnimationElement) return;

    const sequences = [
        'Translation Platform',
        2000,
        'منصة الترجمة المؤسسية',
        2000,
    ];

    let currentIndex = 0;
    let currentText = '';
    let isDeleting = false;
    let sequenceIndex = 0;

    function typeAnimation() {
        const currentSequence = sequences[sequenceIndex];
        
        if (typeof currentSequence === 'string') {
            if (!isDeleting && currentText.length < currentSequence.length) {
                currentText = currentSequence.substring(0, currentText.length + 1);
                typeAnimationElement.textContent = currentText;
                setTimeout(typeAnimation, 40);
            } else if (!isDeleting && currentText.length === currentSequence.length) {
                setTimeout(() => {
                    isDeleting = true;
                    typeAnimation();
                }, 2000);
            } else if (isDeleting && currentText.length > 0) {
                currentText = currentSequence.substring(0, currentText.length - 1);
                typeAnimationElement.textContent = currentText;
                setTimeout(typeAnimation, 30);
            } else if (isDeleting && currentText.length === 0) {
                isDeleting = false;
                sequenceIndex = (sequenceIndex + 1) % sequences.length;
                typeAnimation();
            }
        } else {
            // It's a number (delay)
            setTimeout(() => {
                sequenceIndex = (sequenceIndex + 1) % sequences.length;
                typeAnimation();
            }, currentSequence);
        }
    }

    typeAnimation();
});

