const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
}, {
    threshold: 0.1
});

document.querySelectorAll('.article, .article1, h2').forEach((el) => {
    el.classList.add('hidden');
    observer.observe(el);
});


