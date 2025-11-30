    document.addEventListener("DOMContentLoaded", function() {
        var bulbBtn = document.getElementById("bulbBtn");
        if (!bulbBtn) {
            console.error("Element with ID 'bulbBtn' not found.");
            return;
        }

        // Apply the saved theme preference on page load
        if (localStorage.getItem("theme") === "dark") {
            document.body.classList.add("dark-theme");
            bulbBtn.classList.add("on");
        }

        bulbBtn.addEventListener("click", function() {
            document.body.classList.toggle("dark-theme");
            bulbBtn.classList.toggle("on");

            // Save the theme preference
            if (document.body.classList.contains("dark-theme")) {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.setItem("theme", "light");
            }
        });
    });