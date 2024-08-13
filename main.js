// Toggle between hamburger btn & close btn
document.addEventListener('DOMContentLoaded', function() {  
    const btn = document.querySelector(".hamburger-btn i.fas");

    if (btn) {
        btn.closest('.hamburger-btn').addEventListener('click', function() {  //Add event listener to the closest btn (itself)
            btn.classList.toggle("fa-bars");
            btn.classList.toggle("fa-times");
        });
    }
});

// AOS initializer
document.addEventListener('DOMContentLoaded', function() { // Ensure AOS initialization after DOM content is loaded
    AOS.init({
        duration: 1250, 
        easing: 'ease-in-out', 
        once: true, // Happen only once while scrolling down
    });
});

// Stats Counter initializer
document.addEventListener('DOMContentLoaded', function() { // Ensure counter initialization after DOM content is loaded
    const counters = document.querySelectorAll('.number');
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const increment = target / 200;

        const updateCounter = () => {
            count += increment;
            if (count < target) {
                counter.innerText = Math.ceil(count);
                requestAnimationFrame(updateCounter);
            } else {
                counter.innerText = target;
            }
        };

        updateCounter();
    });
});
