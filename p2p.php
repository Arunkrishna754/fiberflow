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

/* Individual feature card */
.feature-card {
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  padding: 40px 25px;
  max-width: 350px;
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
}

/* Description */
.feature-card p {
  font-size: 1rem;
  color: #333;
  line-height: 1.6;
}

/* Responsive */
@media (max-width: 768px) {
  .section-features {
    padding: 60px 20px;
  }
  .features-title {
    font-size: 1.5rem;
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
    <h1 class="banner-title">Intranet/P2P<br></h1>
  </div>
</section>

<!-- ✅ Image + Text Section -->
<section class="section-info">
  <img src="assets/images/p2p-image.jpg" alt="Leased Line Image">
  <div class="info-text">
    <h2>What is an Intranet? A Private Network for Your Organization</h2>
    <p>
      An intranet is a private network accessible only to an organization’s staff. It enables employees to share information, collaborate on projects, and access internal resources like documents, data, and communication tools. Essentially, it’s like a mini-internet for a company, designed to improve communication and productivity within the organization
    </p>
  </div>
</section>




<!-- ✅ 3rd Section: Feature Cards -->
<section class="section-features">
  <div class="container">
    <h2 class="features-title">Ultra-Secure, Low-Latency Intranet / P2P Connectivity for Your Organization</h2>

    <div class="features-grid">
      <!-- Card 1 -->
      <div class="feature-card">
        <img src="assets/images/icon-9.png" alt="Dedicated Bandwidth Icon" class="feature-icon">
        <h3>ultra secure</h3>
        <p>highly secure connection since it is a private link between your company network and ensure data and traffic will be 100% private.</p>
      </div>

      <!-- Card 2 -->
      <div class="feature-card">
        <img src="assets/images/icon-10.png" alt="Secure Icon" class="feature-icon">
        <h3>ultra low latency</h3>
        <p>Dedicated point to point link or point to multi point links, thereby ensuring minimal latency, allowing you to access applications in real-time..</p>
      </div>

      <!-- Card 3 -->
      <div class="feature-card">
        <img src="assets/images/icon-11.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>ultra fast</h3>
        <p>99.9% assurance on the bandwidth promised on all time.</p>
      </div>

            <!-- Card 4 -->
      <div class="feature-card">
        <img src="assets/images/icon-12.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>multi connectivity</h3>
        <p>ensure connectivity with our core fiber & wireless network PoPs to get unmatched connection within your organisation.</p>
      </div>

            <!-- Card 5 -->
      <div class="feature-card">
        <img src="assets/images/icon-13.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>reliable</h3>
        <p>dedicated link that is best suited for transferring or backing up large data files across organizations..</p>
      </div>



                  <!-- Card 8 -->
      <div class="feature-card">
        <img src="assets/images/icon-14.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>cost</h3>
        <p>reduces operational bandwidth costs across the organization for the huge growing bandwidth requirement.</p>
      </div>


    </div>
  </div>
</section>



<?php
include('include/footer.php');
?>
