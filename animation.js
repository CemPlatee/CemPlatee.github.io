document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to the scroll button
    document.getElementById('scrollButton').addEventListener('click', function() {
        // Scroll to the intro section with smooth behavior
        document.getElementById('intro').scrollIntoView({ behavior: 'smooth' });
    });
});