<script>

window.addEventListener('scroll', function() {
    var footer = document.querySelector('footer');
    if (window.scrollY > 100) { // Angka 100 bisa disesuaikan dengan kebutuhan
        footer.classList.remove('footer-hidden');
    } else {
        footer.classList.add('footer-hidden');
    }
});

function tampilkanForm(imageSrc) {
    var form = document.getElementById('bookingForm');
    var image = document.getElementById('selectedHomestayImage');
    image.src = imageSrc; // Set the source of the image to the selected homestay's image

    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
    } else {
        form.style.display = 'none';
    }
}

</script>
