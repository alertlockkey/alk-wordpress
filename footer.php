    <!-- Footer -->
    <footer id="footer">
      <ul class="icons">
        <li><a href="#" class="icon brands fa-yelp"><span class="label">Yelp!</span></a></li>
        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
      </ul>

      <ul class="copyright">
        <li>&copy; 2020–<span id="currentYear"></span></li>
        <li><a href="http://alertlock.net">Alert Lock & Key</a></li>
        <li>LIC. #B11924</li>
      </ul>
    </footer>

    <script>
      const currentYear = new Date().getFullYear();
      document.getElementById('currentYear').textContent = currentYear;
    </script>

    <?php wp_footer(); ?>
  </div> <!-- end page-wrapper -->
</body>
</html>
