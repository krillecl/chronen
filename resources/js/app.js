import './bootstrap';
import { createIcons, ArrowUpRight, Mail } from 'lucide';

/* ─────────────────────────────────────────────────────────
 * ANIMATION STORYBOARD — Page entrance
 *
 *    0ms   all elements invisible
 *   80ms   avatar fades in (scale 0.93 → 1.0)
 *  180ms   name + role slide up, fade in
 *  360ms   Om mig slides up, fades in
 *  480ms   Webprojekter slides up, fades in
 *  600ms   Uddannelse & kurser slides up, fades in
 *  720ms   Kontakt slides up, fades in
 * ───────────────────────────────────────────────────────── */

const TIMING = {
    avatar:   80,    // avatar appears, scale 0.93 → 1.0
    header:   180,   // name + role slide in
    section1: 360,   // om mig
    section2: 480,   // webprojekter
    section3: 600,   // uddannelse & kurser
    section4: 720,   // kontakt
};

/* ─── Entrance animation ─── */

document.addEventListener('DOMContentLoaded', () => {
    const avatar      = document.querySelector('.site-avatar');
    const headerText  = document.querySelector('.site-header > div');
    const sections    = document.querySelectorAll('.section');

    // Apply initial hidden state
    avatar.classList.add('entrance--scale');
    headerText.classList.add('entrance');
    sections.forEach(s => s.classList.add('entrance'));

    // Render lucide icons
    createIcons({ icons: { ArrowUpRight, Mail } });

    // Force reflow so initial state is painted before transitions begin
    document.body.getBoundingClientRect();

    // Trigger entrances
    setTimeout(() => avatar.classList.add('is-visible'),     TIMING.avatar);
    setTimeout(() => headerText.classList.add('is-visible'), TIMING.header);

    const sectionTimings = [TIMING.section1, TIMING.section2, TIMING.section3, TIMING.section4];
    sections.forEach((section, i) => {
        setTimeout(() => section.classList.add('is-visible'), sectionTimings[i]);
    });
});

/* ─── Cursor preview ─── */

const preview    = document.getElementById('cursorPreview');
const previewImg = document.getElementById('cursorPreviewImg');

document.querySelectorAll('.link-row--preview').forEach(link => {
    link.addEventListener('mouseenter', () => {
        previewImg.src = link.dataset.preview;
        preview.style.transitionDuration = '0.8s';
        preview.classList.add('is-visible');
    });

    link.addEventListener('mousemove', (e) => {
        preview.style.left = `${e.clientX}px`;
        preview.style.top  = `${e.clientY}px`;
    });

    link.addEventListener('mouseleave', () => {
        preview.style.transitionDuration = '0.2s';
        preview.classList.remove('is-visible');
    });
});
