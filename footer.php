<?php
// footer.php
?>
<style>
/* ---------- Footer Styles (inline) ---------- */
.custom-footer {
  background-color: #f1f5ff;
  color: #333;
  padding: 40px 20px 10px;
  font-family: 'Poppins', sans-serif;
  box-shadow: inset 0 1px 5px rgba(0,0,0,0.05);
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-left,
.footer-right {
  flex: 1;
  min-width: 250px;
  margin-bottom: 20px;
}

.footer-left h3 {
  color: #4a63d9;
  margin-bottom: 10px;
  font-size: 1.25rem;
}

.footer-left p {
  margin: 4px 0;
  line-height: 1.5;
}

.footer-left a {
  color: #333;
  text-decoration: none;
}

.footer-left a:hover {
  text-decoration: underline;
}

.footer-right h4 {
  margin-bottom: 10px;
  color: #4a63d9;
  font-size: 1.1rem;
}

.social-links {
  list-style: none;
  padding: 0;
  margin: 0;
}

.social-links li {
  margin-bottom: 12px;
}

.social-links a {
  text-decoration: none;
  color: #333;
  display: flex;
  align-items: center;
  transition: color 0.3s ease;
  font-size: 0.95rem;
}

.social-links a:hover {
  color: #4a63d9;
}

.social-links img {
  width: 20px;
  height: 20px;
  margin-right: 8px;
  transition: filter 0.3s ease;
}

.social-links a:hover img {
  filter: brightness(1.3);
}

.footer-bottom {
  text-align: center;
  font-size: 0.9rem;
  margin-top: 20px;
  color: #777;
}

/* Responsive stack */
@media (max-width: 600px) {
  .footer-container {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
}
</style>

<footer class="custom-footer">
  <div class="footer-container">
    <!-- Left: Company Info -->
    <div class="footer-left">
      <h3>Digital Invoice Generator</h3>
      <p>
        123 Tech Street,<br>
        LPU Jalandhar,144410
      </p>
      <p>
        Email:
        <a href="mailto:support@digitalinvoicegen.com">
          support@digitalinvoicegen.com
        </a>
      </p>
    </div>

    <!-- Right: Social Media -->
    <div class="footer-right">
      <h4>Follow Us</h4>
      <ul class="social-links">
        <li>
          <a href="https://facebook.com/digitalinvoicegen" target="_blank">
            <img src="assets/img/facebook.svg" alt="Facebook"> Facebook
          </a>
        </li>
        <li>
          <a href="https://twitter.com/digitalinvoicegen" target="_blank">
            <img src="assets/img/twitter.svg" alt="Twitter"> Twitter
          </a>
        </li>
        <li>
          <a href="https://linkedin.com/company/digitalinvoicegen" target="_blank">
            <img src="assets/img/linkedin.svg" alt="LinkedIn"> LinkedIn
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Bottom copyright -->
  <div class="footer-bottom">
    <p>© 2025 Digital Invoice Generator. All rights reserved.</p>
  </div>
</footer>
