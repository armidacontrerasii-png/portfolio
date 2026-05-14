// Initialize AOS (scroll animations)
AOS.init({
    duration: 800,
    once: true,
    offset: 100,
    easing: 'ease-out-quad'
});

// Custom cursor effect (only on desktop)
const cursor = document.querySelector('.custom-cursor');
if (cursor && window.innerWidth > 1024) {
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });
    
    // Hover effect on interactive elements
    const hoverables = document.querySelectorAll('a, button, .card-hover, .tech-badge');
    hoverables.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.style.transform = 'translate(-50%, -50%) scale(1.5)';
            cursor.style.borderColor = '#a855f7';
            cursor.style.background = 'rgba(168,85,247,0.1)';
        });
        el.addEventListener('mouseleave', () => {
            cursor.style.transform = 'translate(-50%, -50%) scale(1)';
            cursor.style.borderColor = '#06b6d4';
            cursor.style.background = 'transparent';
        });
    });
}

// Add floating animation to profile image (optional)
const profileImg = document.querySelector('.profile-animate');
if (profileImg) {
    profileImg.classList.add('animate-float');
}

// Dynamic year in footer handled by PHP, but add any interactive console greeting
console.log('%c🚀 AI System Developer Portfolio | Modern Animations Active', 'color: #06b6d4; font-size: 16px');