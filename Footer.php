<style>
    /* Footer Animations */
footer {
    animation: fadeIn 1s ease-out;
}

.social-icons a {
    display: inline-block;
    transition: transform 0.3s ease;
}

.social-icons a:hover {
    transform: scale(1.2) rotate(360deg);
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
    40% {transform: translateY(-20px);}
    60% {transform: translateY(-10px);}
}

.social-icons a:active {
    animation: bounce 0.5s;
}
</style>
<footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-uppercase mb-4">MediCare Wellness</h5>
                    <p>Providing comprehensive healthcare with compassion and innovation.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-uppercase mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Home</a></li>
                        <li><a href="services.php" class="text-white">Services</a></li>
                        <li><a href="appointment.php" class="text-white">Appointment</a></li>
                        <li><a href="about.php" class="text-white">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="text-uppercase mb-4">Contact Info</h5>
                    <p>
                        <i class="fas fa-map-marker-alt me-2"></i> 123 Medical Street, Health City<br>
                        <i class="fas fa-phone me-2"></i> (555) 123-4567<br>
                        <i class="fas fa-envelope me-2"></i> info@medicarewell.com
                    </p>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2025 MediCare Wellness. All Rights Reserved.</p>
                <div class="social-icons">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>