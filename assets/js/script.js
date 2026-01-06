// =============================
// Portfolio Script
// =============================

// Animate skill progress bars when they enter viewport
document.addEventListener("DOMContentLoaded", function () {
    const progressBars = document.querySelectorAll(".progress-bar");

    const options = {
        threshold: 0.5
    };

    const fillProgressBar = (entry) => {
        if (entry.isIntersecting) {
            const bar = entry.target;
            const width = bar.getAttribute("style").match(/width:\s*(\d+)%/)[1];
            bar.style.width = "0%"; // reset first
            setTimeout(() => {
                bar.style.width = width + "%";
            }, 200);
            observer.unobserve(bar); // animate once
        }
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(fillProgressBar);
    }, options);

    progressBars.forEach(bar => {
        observer.observe(bar);
    });
});

// Smooth scroll for navbar links
document.querySelectorAll('a.nav-link').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        if (this.hash !== "") {
            e.preventDefault();
            const target = document.querySelector(this.hash);
            if (target) {
                target.scrollIntoView({ behavior: "smooth" });
            }
        }
    });
});

// Navbar background change on scroll
window.addEventListener("scroll", () => {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
        navbar.classList.add("shadow-sm", "bg-dark");
    } else {
        navbar.classList.remove("shadow-sm", "bg-dark");
    }
});

