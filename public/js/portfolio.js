/**
 * Aeron Salinas - Portfolio Core Interactions
 * Organized into self-contained modules.
 */

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 800, // Slightly slower for that premium feel
        easing: 'ease-out-cubic',
        once: true, // Only animate once per session
        offset: 50 // Trigger slightly earlier
    });

    initNavigation();
    initTypewriter();
    initSpotlight();
    initContactForm();
    init3DCursorAndTilt();
});

// ==========================================
// 1. Navigation & Scroll Handling
// ==========================================
function initNavigation() {
    const navbar = document.querySelector('.navbar');
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-links a');
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-links');
    const hamburgerIcon = document.querySelector('.hamburger i');
    const menuOverlay = document.querySelector('.menu-overlay');

    // Sticky Nav & Scrollspy
    window.addEventListener('scroll', () => {
        // Sticky Navbar
        window.scrollY > 50 ? navbar.classList.add('scrolled') : navbar.classList.remove('scrolled');

        // Scrollspy
        let current = '';
        sections.forEach(section => {
            if (scrollY >= (section.offsetTop - section.clientHeight / 3)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) link.classList.add('active');
        });
    }, { passive: true });

    // Mobile Menu Toggle
    const toggleMenu = () => {
        navMenu.classList.toggle('nav-active');
        menuOverlay.classList.toggle('active');
        const isActive = navMenu.classList.contains('nav-active');
        
        hamburgerIcon.className = isActive ? 'fas fa-times' : 'fas fa-bars';
        document.body.style.overflow = isActive ? 'hidden' : 'auto';
    };

    hamburger.addEventListener('click', toggleMenu);
    menuOverlay.addEventListener('click', () => { if (navMenu.classList.contains('nav-active')) toggleMenu(); });
    navLinks.forEach(item => {
        item.addEventListener('click', () => { if (navMenu.classList.contains('nav-active')) toggleMenu(); });
    });
}

// ==========================================
// 2. Typewriter Effect
// ==========================================
function initTypewriter() {
    const words = ["Web Developer", "Mobile App Developer"];
    let wordIndex = 0, charIndex = 0, isDeleting = false;
    const el = document.getElementById("typewriter");

    if (!el) return;

    function typeEffect() {
        const currentWord = words[wordIndex];
        
        isDeleting ? charIndex-- : charIndex++;
        el.textContent = currentWord.substring(0, charIndex);

        let typeSpeed = isDeleting ? 50 : 100;

        if (!isDeleting && charIndex === currentWord.length) {
            typeSpeed = 2000; // Pause at end of word
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            typeSpeed = 500; // Pause before typing next word
        }

        setTimeout(typeEffect, typeSpeed);
    }
    setTimeout(typeEffect, 500);
}

// ==========================================
// 3. Spotlight Glass Effect
// ==========================================
function initSpotlight() {
    document.querySelectorAll('.glass-panel').forEach(panel => {
        panel.addEventListener('mousemove', (e) => {
            const rect = panel.getBoundingClientRect();
            panel.style.setProperty('--x', `${e.clientX - rect.left}px`);
            panel.style.setProperty('--y', `${e.clientY - rect.top}px`);
        });
    });
}

// ==========================================
// 4. AJAX Contact Form
// ==========================================
function initContactForm() {
    const contactForm = document.getElementById('ajax-contact-form');
    if (!contactForm) return;

    const formMessage = document.getElementById('form-message');
    const submitBtn = document.getElementById('submit-btn');

    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();

        // Clear previous state
        formMessage.innerHTML = '';
        document.querySelectorAll('.error-text').forEach(el => el.remove());
        
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        submitBtn.disabled = true;

        try {
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || 
                              document.querySelector('input[name="_token"]')?.value;

            const response = await fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new FormData(this)
            });

            const data = await response.json();

            if (!response.ok) {
                if (response.status === 422) {
                    // Handle Laravel Validation Errors
                    for (const [field, messages] of Object.entries(data.errors)) {
                        const input = contactForm.querySelector(`[name="${field}"]`);
                        if (input) {
                            const errorSpan = document.createElement('span');
                            errorSpan.className = 'error-text';
                            errorSpan.style.cssText = 'color: var(--laravel-red); font-size: 0.85rem; display: block; margin-top: 0.5rem;';
                            errorSpan.textContent = messages[0];
                            input.parentElement.appendChild(errorSpan);
                        }
                    }
                } else {
                    throw new Error('Server error');
                }
            } else {
                // Success
                contactForm.reset();
                formMessage.innerHTML = `<div style="background: rgba(46, 204, 113, 0.2); border: 1px solid #2ecc71; color: #2ecc71; padding: 1rem; border-radius: 8px; text-align: center; margin-bottom: 1.5rem;">${data.success}</div>`;
            }
        } catch (error) {
            formMessage.innerHTML = `<div style="background: rgba(255, 45, 32, 0.2); border: 1px solid var(--laravel-red); color: var(--laravel-red); padding: 1rem; border-radius: 8px; text-align: center; margin-bottom: 1.5rem;">Oops! Something went wrong. Please try again.</div>`;
        } finally {
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
        }
    });
}

// ==========================================
// 5. 3D Morphing Cursor & Card Tilt
// ==========================================
function init3DCursorAndTilt() {
    const isTouchDevice = matchMedia("(hover:none), (pointer:coarse)").matches;
    if (isTouchDevice) return; // Exit on mobile devices

    const dot = document.getElementById("cursorDot");
    const svg = document.getElementById("cursorSvg");
    const glow = document.getElementById("cursorGlow");
    const stroke = document.getElementById("cursorStroke");
    const cards = document.querySelectorAll("[data-card]");
    
    if (!dot || !svg || !glow || !stroke) return;

    let hoverCard = null;
    const DOT = 8, CIRCLE_R = 14, PAD = 12, PERSPECTIVE = 900, Math_PI = Math.PI;
    const Z_LIFT = 10, LINE_STEPS = 40, ARC_STEPS = 20;
    const N = 4 * LINE_STEPS + 4 * ARC_STEPS - 7;
    const m = { x: innerWidth * 0.5, y: innerHeight * 0.5 };
    const cur = Array.from({ length: N }, () => ({ x: m.x, y: m.y }));
    const tgt = Array.from({ length: N }, () => ({ x: m.x, y: m.y }));

    // Setup SVG Canvas
    const resizeSVG = () => {
        svg.setAttribute("width", innerWidth);
        svg.setAttribute("height", innerHeight);
        svg.setAttribute("viewBox", `0 0 ${innerWidth} ${innerHeight}`);
    };
    addEventListener("resize", resizeSVG, { passive: true });
    resizeSVG();

    // Card Hover Listeners
    cards.forEach((card) => {
        card._inner = card.querySelector(".skill-card-inner");
        card._isFlat = card.getAttribute("data-card") === "flat";

        card.addEventListener("pointerenter", () => { hoverCard = card; });
        card.addEventListener("pointerleave", () => {
            if (hoverCard === card) hoverCard = null;
            if (card._inner) card._inner.style.transform = `rotateX(0deg) rotateY(0deg) translateZ(0px)`;
            stroke.style.opacity = '1';
        });
    });

    // Track Mouse
    addEventListener("pointermove", (e) => {
        m.x = e.clientX; 
        m.y = e.clientY;
        dot.style.transform = `translate(${m.x - DOT / 2}px, ${m.y - DOT / 2}px)`;
    }, { passive: true });

    // Geometry Helpers
    function circlePoints(cx, cy, r, out) {
        const start = (-3 * Math_PI) / 4;
        for (let i = 0; i < N; i++) {
            const t = start - (i / N) * Math_PI * 2;
            out[i].x = cx + Math.cos(t) * r;
            out[i].y = cy + Math.sin(t) * r;
        }
    }

    function projectPoint(x, y, z, rxRad, ryRad) {
        const cy = Math.cos(ryRad), sy = Math.sin(ryRad);
        const cx = Math.cos(rxRad), sx = Math.sin(rxRad);
        let x1 = x * cy + z * sy, z1 = -x * sy + z * cy;
        let y2 = y * cx - z1 * sx, z2 = y * sx + z1 * cx;
        const s = PERSPECTIVE / Math.max(1, PERSPECTIVE - z2);
        return { x: x1 * s, y: y2 * s };
    }

    function addPathSegment(out, idx, cx, cy, rx, ry, type, args) {
        const steps = type === 'line' ? LINE_STEPS : ARC_STEPS;
        for (let i = 0; i < steps; i++) {
            if (args.skipFirst && i === 0) continue;
            const t = i / (steps - 1);
            let pX, pY;
            if (type === 'line') {
                pX = args.x0 + (args.x1 - args.x0) * t;
                pY = args.y0 + (args.y1 - args.y0) * t;
            } else {
                const a = args.a0 + (args.a1 - args.a0) * t;
                pX = args.ccx + Math.cos(a) * args.r;
                pY = args.ccy + Math.sin(a) * args.r;
            }
            const p = projectPoint(pX, pY, Z_LIFT, rx, ry);
            out[idx] = { x: cx + p.x, y: cy + p.y };
            idx++;
        }
        return idx;
    }

    function roundedRectProjectedPoints(out, cx, cy, w, h, rad, rxDeg, ryDeg) {
        const rx = rxDeg * (Math_PI / 180), ry = ryDeg * (Math_PI / 180);
        const hw = w * 0.5, hh = h * 0.5, r = Math.max(0, Math.min(rad, hw, hh));
        const x0 = -hw, x1 = hw, y0 = -hh, y1 = hh;
        let idx = 0;

        idx = addPathSegment(out, idx, cx, cy, rx, ry, 'line', { x0: x0+r, y0, x1: x1-r, y1: y0, skipFirst: false });
        idx = addPathSegment(out, idx, cx, cy, rx, ry, 'arc', { ccx: x1-r, ccy: y0+r, r, a0: -Math_PI/2, a1: 0, skipFirst: true });
        idx = addPathSegment(out, idx, cx, cy, rx, ry, 'line', { x0: x1, y0: y0+r, x1, y1: y1-r, skipFirst: true });
        idx = addPathSegment(out, idx, cx, cy, rx, ry, 'arc', { ccx: x1-r, ccy: y1-r, r, a0: 0, a1: Math_PI/2, skipFirst: true });
        idx = addPathSegment(out, idx, cx, cy, rx, ry, 'line', { x0: x1-r, y0: y1, x1: x0+r, y1, skipFirst: true });
        idx = addPathSegment(out, idx, cx, cy, rx, ry, 'arc', { ccx: x0+r, ccy: y1-r, r, a0: Math_PI/2, a1: Math_PI, skipFirst: true });
        idx = addPathSegment(out, idx, cx, cy, rx, ry, 'line', { x0, y0: y1-r, x1: x0, y1: y0+r, skipFirst: true });
        idx = addPathSegment(out, idx, cx, cy, rx, ry, 'arc', { ccx: x0+r, ccy: y0+r, r, a0: Math_PI, a1: (3*Math_PI)/2, skipFirst: true });

        const last = idx > 0 ? out[idx - 1] : { x: cx, y: cy };
        while (idx < out.length) { out[idx++] = { x: last.x, y: last.y }; }
    }

    // Main Render Loop
    function tick() {
        if (hoverCard) {
            const r = hoverCard.getBoundingClientRect();
            const tx = (Math.max(0, Math.min(1, (m.x - r.left) / (r.width || 1))) - 0.5) * 2;
            const ty = (Math.max(0, Math.min(1, (m.y - r.top) / (r.height || 1))) - 0.5) * 2;

            hoverCard._rx = hoverCard._isFlat ? 0 : -ty * 10;
            hoverCard._ry = hoverCard._isFlat ? 0 : tx * 12;

            if (hoverCard._inner) {
                hoverCard._inner.style.transform = `rotateX(${hoverCard._rx}deg) rotateY(${hoverCard._ry}deg) translateZ(${Z_LIFT}px)`;
            }

            const targetEl = hoverCard._inner || hoverCard;
            roundedRectProjectedPoints(tgt, r.left + r.width * 0.5, r.top + r.height * 0.5, 
                                     targetEl.offsetWidth + PAD * 2, targetEl.offsetHeight + PAD * 2, 
                                     Math.min(16 + PAD, targetEl.offsetWidth * 0.5), hoverCard._rx, hoverCard._ry);
        } else {
            circlePoints(m.x, m.y, CIRCLE_R, tgt);
        }

        const a = hoverCard ? 0.24 : 0.18;
        let d = `M ${cur[0].x.toFixed(2)} ${cur[0].y.toFixed(2)}`;
        
        for (let i = 0; i < N; i++) {
            cur[i].x += (tgt[i].x - cur[i].x) * a;
            cur[i].y += (tgt[i].y - cur[i].y) * a;
            if (i > 0) d += ` L ${cur[i].x.toFixed(2)} ${cur[i].y.toFixed(2)}`;
        }
        d += " Z";

        glow.setAttribute("d", d);
        stroke.setAttribute("d", d);

        requestAnimationFrame(tick);
    }

    circlePoints(m.x, m.y, CIRCLE_R, cur);
    requestAnimationFrame(tick);
}