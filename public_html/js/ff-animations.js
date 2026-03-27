/**
 * Floris Fleur - Premium Scroll Animations
 * Uses IntersectionObserver to trigger CSS animations on text and cards.
 */
(function () {
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('ff-visible');
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    document.addEventListener('DOMContentLoaded', function () {

        // ── Section titles & subtitles ─────────────────────────────
        document.querySelectorAll(
            '.grd-section-title h3, .grd-section-title .desc p, ' +
            '.grd-section-title .title, .entry-title h4, .entry-title a h4, ' +
            '.aboutweare h4, .missionvalue h3'
        ).forEach(function (el) {
            el.classList.add('ff-animate', 'ff-scale-in');
            io.observe(el);
        });

        // ── Paragraphs & descriptions ──────────────────────────────
        document.querySelectorAll(
            '.entry-content p, .descreption span, .descreption p, ' +
            '.grd-image-box-1 .entry-content p, .aboutweare p, ' +
            '.missionvalue .desc p, .grd-list ul li'
        ).forEach(function (el, i) {
            el.classList.add('ff-animate', 'ff-fade-up');
            el.classList.add('ff-delay-' + Math.min(i % 3 + 2, 5));
            io.observe(el);
        });

        // ── Card titles (BOUQUETS / BASKETS etc.) ──────────────────
        document.querySelectorAll(
            '.grd-icon-box-1 .emtry-title p, .grd-icon-box-1 .BOUQUETS, ' +
            '.grd-icon-box-1 .title, .grd-icon-box-3 .emtry-title p, ' +
            '.grd-icon-box-3 .title, .grd-icon-box-list-1 .title'
        ).forEach(function (el) {
            el.classList.add('ff-animate', 'ff-fade-up', 'ff-delay-1');
            io.observe(el);
        });

        // ── Card body text (descreption inside grd-icon-box) ──────
        document.querySelectorAll(
            '.grd-icon-box-1 .content .descreption, ' +
            '.grd-icon-box-3 .content .descreption, ' +
            '.grd-icon-box-4 .content .descreption, ' +
            '.grd-icon-box-list-1 .descreption'
        ).forEach(function (el) {
            el.classList.add('ff-animate', 'ff-fade-up', 'ff-delay-2');
            io.observe(el);
        });

        // ── Service card icons ─────────────────────────────────────
        document.querySelectorAll('.grd-icon-box-4 .icon, .grd-icon-box-list-1 .icon').forEach(function (el) {
            el.classList.add('ff-animate', 'ff-scale-in', 'ff-delay-1');
            io.observe(el);
        });

        // ── Working process section ────────────────────────────────
        document.querySelectorAll('.working-process-1 p, .working-process-1 h3').forEach(function (el, i) {
            el.classList.add('ff-animate', 'ff-fade-up');
            el.classList.add('ff-delay-' + Math.min(i + 1, 5));
            io.observe(el);
        });

        // ── Testimonials ───────────────────────────────────────────
        document.querySelectorAll('.grd-testimonial, .testimonial-1 .title, .testimonial-1 p, .item-testi').forEach(function (el, i) {
            el.classList.add('ff-animate', (i % 2 === 0) ? 'ff-fade-left' : 'ff-fade-right');
            io.observe(el);
        });

        // ── "Our Services" working-process card titles ─────────────
        document.querySelectorAll('.grd-icon-box-4 .emtry-title p').forEach(function (el, i) {
            el.classList.add('ff-animate', 'ff-fade-up', 'ff-delay-2');
            io.observe(el);
        });

        // ── Gallery portfolio items ────────────────────────────────
        document.querySelectorAll('.portfolio-item .entry-title, .portfolio-item .entry-meta').forEach(function (el, i) {
            el.classList.add('ff-animate', 'ff-fade-up');
            el.classList.add('ff-delay-' + Math.min(i % 4 + 1, 5));
            io.observe(el);
        });

        // ── Whole cards (staggered per column) ─────────────────────
        document.querySelectorAll('.whychooseus_1 [class*="col-lg-"], .aboutus-5 .col-md-6').forEach(function (el, i) {
            el.classList.add('ff-animate', 'ff-fade-up');
            el.classList.add('ff-delay-' + Math.min(i + 1, 5));
            io.observe(el);
        });

        // ── "box_btn" More Details buttons ────────────────────────
        document.querySelectorAll('.box_btn a').forEach(function (el) {
            el.classList.add('ff-animate', 'ff-fade-up', 'ff-delay-3');
            io.observe(el);
        });

        // ── Service cards (whole card, staggered) ─────────────────
        document.querySelectorAll('.working-process-1 .grd-icon-box-4, .whyus-1 .grd-icon-box-list-1').forEach(function (el, i) {
            el.classList.add('ff-animate', 'ff-fade-up');
            el.classList.add('ff-delay-' + Math.min(i % 3 + 1, 5));
            io.observe(el);
        });

        // ── Portfolio / gallery image cards (whole card, staggered) 
        document.querySelectorAll('.portfolio-item').forEach(function (el, i) {
            el.classList.add('ff-animate', 'ff-fade-up');
            el.classList.add('ff-delay-' + Math.min(i + 1, 5));
            io.observe(el);
        });

        // ── Also animate images ────────────────────────────────────
        document.querySelectorAll('.portfolio-item .entry-thumbnail img, .aboutweimg img').forEach(function (el, i) {
            el.classList.add('ff-animate', 'ff-scale-in', 'ff-delay-2');
            io.observe(el);
        });

        // ── Contact page boxes ─────────────────────────────────────
        document.querySelectorAll('.contact-pagebox, .grd-contact-box').forEach(function (el, i) {
            el.classList.add('ff-animate', 'ff-fade-up');
            el.classList.add('ff-delay-' + Math.min(i + 1, 5));
            io.observe(el);
        });

    });
})();
