<?php
include('include/header.php');
?>

<style>
/* =============================
   FIXED HEADER SAFE BANNER SECTION
   ============================= */
.section-banner {
  position: relative;
  width: 100%;
  height: 60vh;
  background: url('/assets/images/internet-image.jpg') no-repeat center center/cover;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  margin-top: 72px;
  overflow: hidden;
  z-index: 0;
}

/* Overlay */
.section-banner .banner-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to right,
    rgba(84, 127, 183, 0.8) 0%,
    rgba(84, 127, 183, 0.5) 35%,
    rgba(84, 127, 183, 0) 100%
  );
  z-index: 1;
}

/* Content container */
.section-banner .banner-container {
  position: relative;
  z-index: 2;
  color: #fff;
}

/* Breadcrumb */
.section-banner .banner-breadcrumb a {
  font-size: 1rem;
  font-weight: 500;
  margin-bottom: 12px;
  opacity: 0.9;
  text-transform: uppercase;
  color: #fff;
  text-decoration: none;
}
.section-banner .banner-breadcrumb a:hover {
  color: #ffeb3b;
}

/* Title */
.section-banner .banner-title {
  font-size: 3rem;
  font-weight: 700;
  line-height: 1.3;
  color: #fff !important;
}

/* RESPONSIVE DESIGN */
@media (max-width: 991px) {
  .section-banner {
    height: 50vh;
    margin-top: 70px;
  }
  .section-banner .banner-title {
    font-size: 2rem;
  }
  .section-banner .banner-container {
    padding: 0 20px;
  }
}

/* =============================
   INFO SECTION (Image + Text)
   ============================= */
.section-info {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  padding: 100px 8%;
  background: #fff;
}

.section-info img {
  width: 100%;
  max-width: 600px;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.section-info .info-text {
  flex: 1;
}

.section-info .info-text h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #111;
  margin-bottom: 20px;
}

.section-info .info-text p {
  font-size: 1.05rem;
  color: #333;
  line-height: 1.7;
}

/* Responsive layout */
@media (max-width: 991px) {
  .section-info {
    flex-direction: column;
    text-align: center;
    padding: 60px 20px;
  }
  .section-info img {
    max-width: 100%;
  }
}


.section-info.reverse {
  background: #f0f6fc; /* Light blue background */
  flex-direction: row;
}

.section-info.reverse img {
  border-radius: 0; /* remove rounded corners */
  box-shadow: none;
}

/* Make text area breathe */
.section-info.reverse .info-text {
  padding-right: 40px;
}

/* Responsive (stack on small devices) */
@media (max-width: 991px) {
  .section-info.reverse {
    flex-direction: column;
    text-align: center;
    padding: 60px 20px;
  }
  .section-info.reverse .info-text {
    padding-right: 0;
  }
}


/* =============================
   3RD SECTION - FEATURE CARDS
   ============================= */
/* =============================
   3RD SECTION - FEATURE CARDS (Updated Equal Height)
   ============================= */
.section-features {
  background: #fff;
  padding: 100px 8%;
  text-align: center;
}

.section-features .features-title {
  font-size: 2rem;
  font-weight: 700;
  color: #111;
  margin-bottom: 60px;
}

/* Grid layout */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  justify-items: center;
}

/* Equal-sized feature cards */
.feature-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  text-align: center;
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  padding: 40px 25px;
  width: 100%;
  max-width: 350px;
  min-height: 320px; /* ✅ ensures equal height */
  transition: all 0.3s ease;
}

.feature-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

/* Icon */
.feature-card .feature-icon {
  width: 80px;
  height: 80px;
  object-fit: contain;
  margin-bottom: 20px;
}

/* Title */
.feature-card h3 {
  font-size: 1.3rem;
  font-weight: 700;
  color: #000;
  margin-bottom: 12px;
  text-transform: capitalize;
}

/* Description (optional, keep consistent spacing) */
.feature-card p {
  font-size: 1rem;
  color: #333;
  line-height: 1.6;
  margin-top: auto; /* pushes text evenly when different content lengths */
}

/* Responsive */
@media (max-width: 768px) {
  .section-features {
    padding: 60px 20px;
  }
  .features-title {
    font-size: 1.5rem;
  }
  .feature-card {
    max-width: 100%;
    min-height: 280px; /* slightly shorter for mobile */
  }
}


/* FOOTER SAFETY FIX */
footer {
  position: relative;
  width: 100%;
  background: #111;
  color: #fff;
  padding: 40px 0;
  text-align: center;
  z-index: 2;
}
</style>

<!-- Banner -->
<section class="section-banner">
  <div class="banner-overlay"></div>
  <div class="banner-container container">
    <p class="banner-breadcrumb">
      <a href="/index.php">HOME</a>
    </p>
    <h1 class="banner-title">Managed
Network Services<br></h1>
  </div>
</section>

<!-- ✅ Image + Text Section -->
<section class="section-info">
  <img src="assets/images/network-image.jpg" alt="Leased Line Image">
  <div class="info-text">
    <h2>Design, Deployment, and Management</h2>
    <p>
      As technology evolves, so does the complexity of managing IT systems. Managed Network Services offer businesses the advantage of expert support and advanced tools to monitor and maintain their networks. With the right managed service provider, your business can ensure maximum uptime, prevent disruptions, and streamline operations.
    </p>
  </div>
</section>




<!-- ✅ 3rd Section: Feature Cards -->
<section class="section-features">
  <div class="container">
    <h2 class="features-title">Comprehensive Network Infrastructure Services for Businesses</h2>

    <div class="features-grid">
      <!-- Card 1 -->
      <div class="feature-card">
        <img src="assets/images/icon-15.png" alt="Dedicated Bandwidth Icon" class="feature-icon">
        <h3>network infrastructure design</h3>
      </div>

      <!-- Card 2 -->
      <div class="feature-card">
        <img src="assets/images/icon-16.png" alt="Secure Icon" class="feature-icon">
        <h3>deployment services</h3>
      </div>

      <!-- Card 3 -->
      <div class="feature-card">
        <img src="assets/images/icon-17.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>on permises vpn services</h3>
      </div>

            <!-- Card 4 -->
      <div class="feature-card">
        <img src="assets/images/icon-18.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>network configuration management</h3>
      </div>

            <!-- Card 5 -->
      <div class="feature-card">
        <img src="assets/images/icon-19.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>network security</h3>
      </div>



                  <!-- Card 8 -->
      <div class="feature-card">
        <img src="assets/images/icon-20.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>managed enterprise network</h3>
      </div>

            <div class="feature-card">
        <img src="assets/images/icon-21.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>cloud infra managed service</h3>
      </div>

                  <div class="feature-card">
        <img src="assets/images/icon-22.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>co location services</h3>
      </div>

      
                  <div class="feature-card">
        <img src="assets/images/icon-23.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>network auditing</h3>
      </div>

      
                  <div class="feature-card">
        <img src="assets/images/icon-24.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>managed infra service</h3>
      </div>


    </div>
  </div>
</section>



<?php
include('include/footer.php');
?>
