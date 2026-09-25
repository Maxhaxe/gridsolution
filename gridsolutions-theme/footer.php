  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div>
          <h3><?php bloginfo('name'); ?></h3>
          <p>
            Engineeringsbureau voor de elektriciteitsnetten van Nederland. Wij voeren engineering- en
            tekenwerkopdrachten uit voor de grote netbeheerbedrijven, met diepgaande ervaring in
            ELCAD en EPLAN.
          </p>
          <ul class="tag-list">
            <li>ELCAD</li>
            <li>EPLAN</li>
            <li>Netbeheer</li>
          </ul>
        </div>
        <div>
          <h3>Navigatie</h3>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li><a href="<?php echo esc_url(gridsolutions_get_page_url('diensten')); ?>">Diensten</a></li>
            <li><a href="<?php echo esc_url(gridsolutions_get_page_url('over-ons')); ?>">Over ons</a></li>
            <li><a href="<?php echo esc_url(gridsolutions_get_page_url('vacatures')); ?>">Vacatures</a></li>
            <li><a href="<?php echo esc_url(gridsolutions_get_page_url('contact')); ?>">Contact</a></li>
          </ul>
        </div>
        <div>
          <h3>Diensten</h3>
          <ul>
            <li><a href="<?php echo esc_url(gridsolutions_get_page_url('diensten') . '#secundaire-engineering'); ?>">Secundaire engineering</a></li>
            <li><a href="<?php echo esc_url(gridsolutions_get_page_url('diensten') . '#elcad'); ?>">ELCAD-tekenwerk</a></li>
            <li><a href="<?php echo esc_url(gridsolutions_get_page_url('diensten') . '#eplan'); ?>">EPLAN engineering</a></li>
            <li><a href="<?php echo esc_url(gridsolutions_get_page_url('diensten') . '#werkpakketten'); ?>">Werkpakketten</a></li>
            <li><a href="<?php echo esc_url(gridsolutions_get_page_url('diensten') . '#detachering'); ?>">Detachering</a></li>
          </ul>
        </div>
        <div>
          <h3>Contact</h3>
          <ul class="footer-contact">
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
              <span><a href="mailto:info@gridsolutions.nl">info@gridsolutions.nl</a></span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 21s7-6.1 7-11a7 7 0 1 0-14 0c0 4.9 7 11 7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg>
              <span>Werkgebied: heel Nederland (op locatie of remote)</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l4 2"/></svg>
              <span>Reactie binnen 24 uur (op werkdagen)</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="mb-0">&copy; <span data-year><?php echo date('Y'); ?></span> <?php bloginfo('name'); ?> &ndash; Alle rechten voorbehouden.</p>
        <ul>
          <li><a href="<?php echo esc_url(gridsolutions_get_page_url('contact')); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url(gridsolutions_get_page_url('over-ons')); ?>">Over ons</a></li>
          <li><a href="<?php echo esc_url(gridsolutions_get_page_url('vacatures')); ?>">Vacatures</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
