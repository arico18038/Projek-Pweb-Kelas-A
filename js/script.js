<script>
window.addEventListener('scroll', function() {
    var footer = document.querySelector('footer');
    if (window.scrollY > 100) { // Angka 100 bisa disesuaikan dengan kebutuhan
        footer.classList.remove('footer-hidden');
    } else {
        footer.classList.add('footer-hidden');
    }
});
</script>
