<button id="mm-menu-toggle" class="mm-menu-toggle">Toggle Menu</button>
  <nav id="mm-menu" class="mm-menu">
    <div class="mm-menu__header">
      <img class="circle responsive-img" src="<?php echo base_url(); ?>files/img/<?php echo $datos_usuario['foto']; ?>">
      <h2 class="mm-menu__title">Nick Salloum</h2>
    </div>
    <ul class="mm-menu__items">
      <li class="mm-menu__item">
        <a class="mm-menu__link" href="#">
          <span class="mm-menu__link-text"><i class="md md-home"></i> Home</span>
        </a>
      </li>
      <li class="mm-menu__item">
        <a class="mm-menu__link" href="#">
          <span class="mm-menu__link-text"><i class="md md-person"></i> Profile</span>
        </a>
      </li>
      <li class="mm-menu__item">
        <a class="mm-menu__link" href="#">
          <span class="mm-menu__link-text"><i class="md md-inbox"></i> Inbox</span>
        </a>
      </li>
      <li class="mm-menu__item">
        <a class="mm-menu__link" href="#">
          <span class="mm-menu__link-text"><i class="md md-favorite"></i> Favourites</span>
        </a>
      </li>
      <li class="mm-menu__item">
        <a class="mm-menu__link" href="#">
          <span class="mm-menu__link-text"><i class="md md-settings"></i> Settings</span>
        </a>
      </li>
    </ul>
  </nav><!-- /nav -->


  <!-- PRODUCTION -->
  <script src="<?php echo base_url(); ?>assets/js/materialMenu.js"></script>
  <!-- TESTING
  <script src="js/development/materialMenu.js"></script>
  -->
  <script>
    var menu = new Menu;
  </script>
  <script src="<?php echo base_url(); ?>assets/js/external/githubIcons.js"></script>
  <link href="<?php echo base_url(); ?>assets/js/materialize.js" >
</body>
</html>
 