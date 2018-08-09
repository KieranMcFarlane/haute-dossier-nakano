<footer class="content-info">
  <div class="instagram-footer__section">
      @php(dynamic_sidebar('sidebar-footer'))
  </div>
  <div class="footer-widgets">
    <div class="footer-widgets__inner-container container">
    <div class="columns">
    <div class="footer-navigate__section __t-4">
        @php(dynamic_sidebar('sidebar-footer-2'))
    </div>
    <div class="footer-social__section __t-4">
      <h3>Our Social</h3>
      <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
      </ul> 
    </div>
    <div class="footer-signup__section __t-4">
        <h3>Our Newsletter</h3>
        <p>Sign up for updates of our latest posts</p>
        <label style="display: none;" for="primary">Primary address:</label>
        <div class="email-signup__container">
          <input class="email-footer" type="email" placeholder="Email Address"
          pattern=".+@globex.com" size="30" required
          title="Must be a globex.com email address" />
          <input class="submit-footer" type="submit">
        </div>
    </div>
    {{-- @php(dynamic_sidebar('sidebar-footer-3')) --}}
  </div>
</div>
</div>
  <div class="footer-info container">
    <div class="footer-info__left">
      <p>© Haute Dossier <?php echo date('Y'); ?>. All Rights Reserved.</p>
    </div>
    <div class="footer-info__right">
      <p>Design and Digital by Nakano</p>
    </div>
  </div>
</footer>
