<section class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with OmniGas Technologies</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <p>We'd love to hear from you. Whether you have a question about our services, need technical support, or want to discuss a partnership opportunity, our team is ready to help.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-text">
                            <h4>Address</h4>
                            <p>Bole Dembel, behind Abbarus Complex BLD 1st Floor, Addis Ababa, Ethiopia</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>info@omnigas.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div class="contact-text">
                            <h4>Phone</h4>
                            <p>+44 7780378098</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-clock"></i></div>
                        <div class="contact-text">
                            <h4>Business Hours</h4>
                            <p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM</p>
                        </div>
                    </div>
                </div>

                <div class="social-section">
                    <h4>Follow Us</h4>
                    <div class="social-links-large">
                        <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-wrapper">
                <h2>Send Us a Message</h2>
                <?php
                $message = '';
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = htmlspecialchars($_POST['name'] ?? '');
                    $email = htmlspecialchars($_POST['email'] ?? '');
                    $phone = htmlspecialchars($_POST['phone'] ?? '');
                    $subject = htmlspecialchars($_POST['subject'] ?? '');
                    $msg = htmlspecialchars($_POST['message'] ?? '');
                    
                    if ($name && $email && $msg) {
                        $message = '<div class="alert alert-success"><i class="fas fa-check-circle"></i> Thank you for contacting us! We will get back to you soon.</div>';
                    } else {
                        $message = '<div class="alert alert-error"><i class="fas fa-exclamation-circle"></i> Please fill in all required fields.</div>';
                    }
                }
                echo $message;
                ?>
                
                <form method="POST" action="index.php?page=contact" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Name <span class="required">*</span></label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-large">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="container">
        <h2>Visit Our Office</h2>
        <div class="map-placeholder">
            <i class="fas fa-map-marked-alt"></i>
            <p>Bole Dembel, Addis Ababa, Ethiopia</p>
        </div>
    </div>
</section>
