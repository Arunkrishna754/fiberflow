<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fiberflow</title>
  <link rel="icon" type="image/x-icon" href="assets/images/resources/banner-icon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Existing CSS Imports -->
  <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/vendors/twoet-icons/flaticon_twoet.css">
  <link rel="stylesheet" href="assets/vendors/icomoon/style.css">
  <link rel="stylesheet" href="assets/vendors/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-select-main/bootstrap-select.min.css">
  <link rel="stylesheet" href="assets/vendors/youtube-popup/youtube-popup.css">
  <link rel="stylesheet" href="assets/plugins/sweetalert/sweetalert.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <style>
/* ------------------- NAVBAR STYLES ------------------- */
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 70px;
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(10px);
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  padding: 0 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 1000;
}
.navbar .brand-logo img { height: 45px; display: block; transition: transform 0.3s ease; }
.navbar .brand-logo img:hover { transform: scale(1.05); }

/* NAV LINKS */
.navbar .nav {
  display: flex;
  align-items: center;
  gap: 25px;
  list-style: none;
  margin: 0;
  padding: 0;
}
.navbar .nav-link {
  color: #333;
  font-weight: 500;
  text-decoration: none;
  font-size: 0.95rem;
  padding: 8px 10px;
  transition: color 0.3s ease, transform 0.3s ease;
  display: flex;
  align-items: center;
  height: 70px;
}
.navbar .nav-link:hover {
  color: #ff0055;
  transform: scale(1.05);
}

/* DROPDOWN (DESKTOP) */
.navbar .nav-item.dropdown { position: relative; }
.navbar .dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  display: none;
  padding: 8px 0;
  min-width: 220px;
}
.navbar .nav-item.dropdown:hover .dropdown-menu { display: block; }
.navbar .dropdown-item {
  padding: 8px 18px;
  font-size: 0.9rem;
  color: #333;
  text-decoration: none;
  display: block;
}
.navbar .dropdown-item:hover { background: #f9f9f9; color: #ff0055; }

/* AUTH BUTTONS */
.navbar .auth-buttons {
  display: flex;
  align-items: center;
  gap: 12px;
}
.navbar .auth-buttons a {
  font-weight: 500;
  border-radius: 8px;
  padding: 8px 18px;
  font-size: 0.9rem;
  text-decoration: none;
  transition: all 0.3s ease;
}
.navbar .auth-buttons .btn-outline-dark { border: 1px solid #333; color: #333; }
.navbar .auth-buttons .btn-outline-dark:hover { background: #333; color: #fff; }
.navbar .auth-buttons .btn-bg-primary { background: #ff0055; color: #fff; border: 1px solid #ff0055; }
.navbar .auth-buttons .btn-bg-primary:hover { background: #e6004f; }

/* ------------------- MOBILE ------------------- */
.menu-toggle {
  display: none;
  font-size: 1.5rem;
  background: none;
  border: none;
  cursor: pointer;
  color: #333;
}

.mobile-menu {
  position: fixed;
  top: 0;
  right: -100%;
  width: 260px;
  height: 100%;
  background: #fff;
  box-shadow: -2px 0 10px rgba(0,0,0,0.1);
  transition: right 0.3s ease;
  z-index: 2000;
  padding: 20px;
  display: flex;
  flex-direction: column;
  gap: 20px;
  overflow-y: auto;
}
.mobile-menu.active { right: 0; }

.mobile-menu .close-btn {
  font-size: 1.5rem;
  color: #333;
  background: none;
  border: none;
  align-self: flex-end;
  cursor: pointer;
}
.mobile-menu ul { list-style: none; padding: 0; margin: 0; }
.mobile-menu ul li { margin-bottom: 10px; }
.mobile-menu ul a {
  color: #333;
  text-decoration: none;
  font-weight: 500;
  display: block;
  padding: 8px 0;
}
.mobile-menu ul a:hover { color: #ff0055; }

/* MOBILE DROPDOWN FIX */
.mobile-dropdown .submenu {
  display: none;
  flex-direction: column;
  padding-left: 15px;
  margin-top: 5px;
}
.mobile-dropdown.open .submenu { display: flex; }
.mobile-dropdown .dropdown-toggle {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.mobile-dropdown .dropdown-toggle i {
  font-size: 0.9rem;
  transition: transform 0.3s ease;
}
.mobile-dropdown.open .dropdown-toggle i {
  transform: rotate(180deg);
}

@media (max-width: 991px) {
  .navbar { padding: 0 20px; }
  .navbar .nav, .navbar .auth-buttons { display: none; }
  .menu-toggle { display: block; }
}
  </style>
</head>

<body style="margin:0; padding:0;">
  <nav class="navbar">
    <div class="brand-logo">
      <a href="index.php"><img src="assets/images/logo/logo-h.png" alt="FiberFlow Logo"></a>
    </div>

    <ul class="nav">
      <li><a href="index.php" class="nav-link">Home</a></li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle">Fiberflow Services</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="internet-lease-line.php">Internet leased line / ILL</a></li>
          <li><a class="dropdown-item" href="p2p.php">Intranet / P2P</a></li>
          <li><a class="dropdown-item" href="managed-network-services.php">Managed Network Services</a></li>
          <li><a class="dropdown-item" href="broadband.php">Business Broadband</a></li>
          <li><a class="dropdown-item" href="sd-wan.php">SD-WAN</a></li>
          <li><a class="dropdown-item" href="voice.php">Voice</a></li>
          <li><a class="dropdown-item" href="wifi-design.php">Wifi Design</a></li>
          <li><a class="dropdown-item" href="firewall.php">Firewall</a></li>
          <li><a class="dropdown-item" href="fiber-networking.php">Fiber Networking</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle">Broadband Plans</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="plans-pollachi.php">Broadband Plans in Pollachi</a></li>
          <li><a class="dropdown-item" href="plans-anamalai.php">Broadband Plans in Anaimalai</a></li>
          <li><a class="dropdown-item" href="plans-vettaikaranpudur.php">Broadband Plans in Vettaikaranpudur</a></li>
          <li><a class="dropdown-item" href="plans-kinathukadavu.php">Broadband Plans in Kinathukadavu</a></li>
          <li><a class="dropdown-item" href="plans-negamam.php">Broadband Plans in Negamam</a></li>
          <li><a class="dropdown-item" href="plans-thamaraikulam.php">Broadband Plans in Thamaraikulam</a></li>
          <li><a class="dropdown-item" href="plans-pethampatti.php">Broadband Plans in Pethampatti</a></li>
          <li><a class="dropdown-item" href="plans-nalligoundanpalayam.php">Broadband Plans in Nalligoundanpalayam</a></li>
          <li><a class="dropdown-item" href="plans-Ponnapuram.php">Broadband Plans in Ponnapuram</a></li>
          <li><a class="dropdown-item" href="plans-Kongalnagaram.php">Broadband Plans in Kongalnagaram</a></li>
          <li><a class="dropdown-item" href="plans-Achipatti.php">Broadband Plans in Achipatti</a></li>
          <li><a class="dropdown-item" href="plans-Panikkampatti.php">Broadband Plans in Panikkampatti</a></li>
          <li><a class="dropdown-item" href="plans-NMSungam.php">Broadband Plans in NM Sungam</a></li>
        </ul>
      </li>

      <li><a href="plans.php" class="nav-link">Plans</a></li>
      <li><a href="about.php" class="nav-link">About us</a></li>
      <li><a href="contact.php" class="nav-link">Contact</a></li>
    </ul>

    <div class="auth-buttons">
      <a href="login.php" class="btn btn-outline-dark">Login</a>
      <a href="register.php" class="btn btn-bg-primary">Register</a>
    </div>

    <button class="menu-toggle"><i class="fas fa-bars"></i></button>
  </nav>

  <!-- MOBILE MENU -->
  <div class="mobile-menu" id="mobileMenu">
    <button class="close-btn"><i class="fas fa-times"></i></button>
    <ul>
      <li><a href="index.php">Home</a></li>

      <li class="mobile-dropdown">
        <a href="#" class="dropdown-toggle">Fiberflow Services <i class="fas fa-chevron-down"></i></a>
        <ul class="submenu">
          <li><a href="internet-lease-line.php">Internet leased line / ILL</a></li>
          <li><a href="p2p.php">Intranet / P2P</a></li>
          <li><a href="managed-network-services.php">Managed Network Services</a></li>
          <li><a href="broadband.php">Business Broadband</a></li>
          <li><a href="sd-wan.php">SD-WAN</a></li>
          <li><a href="voice.php">Voice</a></li>
          <li><a href="wifi-design.php">Wifi Design</a></li>
          <li><a href="firewall.php">Firewall</a></li>
          <li><a href="fiber-networking.php">Fiber Networking</a></li>
        </ul>
      </li>

      <li class="mobile-dropdown">
        <a href="#" class="dropdown-toggle">Broadband Plans <i class="fas fa-chevron-down"></i></a>
        <ul class="submenu">
          <li><a href="plans-pollachi.php">Broadband Plans in Pollachi</a></li>
          <li><a href="plans-anamalai.php">Broadband Plans in Anaimalai</a></li>
          <li><a href="plans-vettaikaranpudur.php">Broadband Plans in Vettaikaranpudur</a></li>
          <li><a href="plans-kinathukadavu.php">Broadband Plans in Kinathukadavu</a></li>
          <li><a href="plans-negamam.php">Broadband Plans in Negamam</a></li>
          <li><a href="plans-thamaraikulam.php">Broadband Plans in Thamaraikulam</a></li>
          <li><a href="plans-pethampatti.php">Broadband Plans in Pethampatti</a></li>
          <li><a href="plans-nalligoundanpalayam.php">Broadband Plans in Nalligoundanpalayam</a></li>
          <li><a href="plans-Ponnapuram.php">Broadband Plans in Ponnapuram</a></li>
          <li><a href="plans-Kongalnagaram.php">Broadband Plans in Kongalnagaram</a></li>
          <li><a href="plans-Achipatti.php">Broadband Plans in Achipatti</a></li>
          <li><a href="plans-Panikkampatti.php">Broadband Plans in Panikkampatti</a></li>
          <li><a href="plans-NMSungam.php">Broadband Plans in NM Sungam</a></li>
        </ul>
      </li>

      <li><a href="plans.php">Plans</a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>

    <div class="auth-buttons" style="margin-top:auto;">
      <a href="login.php" class="btn btn-outline-dark">Login</a>
      <a href="register.php" class="btn btn-bg-primary">Register</a>
    </div>
  </div>

  <!-- JS -->
  <script>
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('#mobileMenu');
    const closeBtn = document.querySelector('.close-btn');

    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.add('active');
    });
    closeBtn.addEventListener('click', () => {
      mobileMenu.classList.remove('active');
    });

    // Dropdown toggle for mobile
    document.querySelectorAll('.mobile-dropdown .dropdown-toggle').forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = toggle.parentElement;
        parent.classList.toggle('open');
      });
    });
  </script>
</body>
</html>
