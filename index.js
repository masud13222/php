document.addEventListener('DOMContentLoaded', function() {
    // Initialize floating particles
    initFloatingParticles();
    
    // Initialize category cards
    initCategoryCards();
    
    // Initialize trending keywords
    initTrendingKeywords();

    // Add animation effects on scroll
    const sections = document.querySelectorAll('section');
    initScrollAnimations(sections);

    // Add smooth scroll behavior for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            document.querySelector(targetId).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add hover effects for buttons
    const buttons = document.querySelectorAll('.btn');
    
    buttons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.style.transform = 'translateY(-3px)';
        });
        
        button.addEventListener('mouseleave', () => {
            button.style.transform = 'translateY(0)';
        });
    });
});

// Initialize trending keywords
function initTrendingKeywords() {
    const keywordPills = document.querySelectorAll('.keyword-pill');
    
    keywordPills.forEach((pill, index) => {
        // Set animation delay
        pill.style.setProperty('--delay', index);
        
        // Add hover effects
        pill.addEventListener('mouseenter', () => {
            pill.style.transform = 'translateY(-5px)';
        });
        
        pill.addEventListener('mouseleave', () => {
            pill.style.transform = 'translateY(0)';
        });
    });
}

// Initialize floating particles
function initFloatingParticles() {
    const particlesContainer = document.querySelector('.floating-particles');
    if (!particlesContainer) return;

    // Create particles
    for (let i = 0; i < 50; i++) {
        createParticle(particlesContainer);
    }
}

function createParticle(container) {
    const particle = document.createElement('div');
    
    // Randomize particle properties
    const size = Math.random() * 5 + 2;
    const posX = Math.random() * 100;
    const posY = Math.random() * 100;
    const duration = Math.random() * 60 + 30;
    const delay = Math.random() * 10;
    const opacity = Math.random() * 0.5 + 0.3;
    
    // Set particle styling
    particle.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        background: ${Math.random() > 0.5 ? '#FFC107' : '#FF9800'};
        border-radius: 50%;
        top: ${posY}%;
        left: ${posX}%;
        opacity: ${opacity};
        filter: blur(${Math.random() > 0.5 ? '1px' : '0'});
        animation: float ${duration}s ease-in-out ${delay}s infinite alternate;
        z-index: -1;
    `;
    
    container.appendChild(particle);
}

// Initialize category cards
function initCategoryCards() {
    const categoryCards = document.querySelectorAll('.category-card');
    if (!categoryCards.length) return;
    
    // Add hover effects and animations
    categoryCards.forEach((card, index) => {
        // Add staggered animation on load
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 100 * index);
        
        // Add shine effect on hover
        card.addEventListener('mousemove', (e) => {
            const { left, top, width, height } = card.getBoundingClientRect();
            const x = (e.clientX - left) / width;
            const y = (e.clientY - top) / height;
            
            const shine = card.querySelector('.shine-effect') || createShineEffect(card);
            shine.style.opacity = '1';
            shine.style.transform = `translate(${x * 100}%, ${y * 100}%)`;
        });
        
        card.addEventListener('mouseleave', (e) => {
            const shine = card.querySelector('.shine-effect');
            if (shine) {
                shine.style.opacity = '0';
            }
        });
    });
}

function createShineEffect(element) {
    const shine = document.createElement('div');
    shine.classList.add('shine-effect');
    shine.style.cssText = `
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle at center, rgba(255,255,255,0.3) 0%, transparent 70%);
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    `;
    element.style.position = 'relative';
    element.style.overflow = 'hidden';
    element.appendChild(shine);
    return shine;
}

// Initialize scroll animations
function initScrollAnimations(sections) {
    if (!sections.length) return;
    
    // Add CSS for animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .section-hidden {
            opacity: 0;
            transform: translateY(30px);
        }
        
        .section-visible {
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .category-card {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
    `;
    document.head.appendChild(style);
    
    // Add initial class
    sections.forEach(section => {
        section.classList.add('section-hidden');
    });
    
    // Create intersection observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('section-visible');
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    });
    
    // Observe all sections
    sections.forEach(section => {
        observer.observe(section);
    });
} 