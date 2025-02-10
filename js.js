document.addEventListener("keydown", function(event) {
    if (event.key === "Escape" || event.key === "F11" || (event.ctrlKey && event.key === "F4")) {
        event.preventDefault();
    }
});
