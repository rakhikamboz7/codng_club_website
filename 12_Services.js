const themeToggle = document.getElementById('theme-toggle');
const body = document.body;

themeToggle.addEventListener('change', function() {
    if (this.checked) {
        body.classList.add('dark-theme');
    } else {
        body.classList.remove('dark-theme');
    }
});
document.addEventListener("DOMContentLoaded", function() {
    const expandableBox = document.getElementById('expandable-box');

    expandableBox.addEventListener('click', function() {
        this.classList.toggle('expanded');
    });
});
