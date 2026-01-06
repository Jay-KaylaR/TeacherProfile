// Animate skill progress bars when in viewport
document.addEventListener("DOMContentLoaded", function () {
    const progressBars = document.querySelectorAll(".progress-bar");

    function animateBars() {
        progressBars.forEach(bar => {
            const percentage = bar.getAttribute("data-percentage");
            const barPosition = bar.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;

            if (barPosition < screenHeight - 50 && !bar.classList.contains("animated")) {
                bar.classList.add("animated");
                bar.style.width = "0%"; // start from 0
                setTimeout(() => {
                    bar.style.width = percentage + "%";
                }, 100);
            }
        });
    }

    window.addEventListener("scroll", animateBars);
    animateBars(); // run on load
});

