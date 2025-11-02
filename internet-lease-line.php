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
    <h1 class="banner-title">Dedicated Internet<br>Leased Line / ILL</h1>
  </div>
</section>

<!-- ✅ Image + Text Section -->
<section class="section-info">
  <img src="assets/images/reliable-image.jpg" alt="Leased Line Image">
  <div class="info-text">
    <h2>Reliable Leased Line For Business Performance</h2>
    <p>
      Highly reliable leased line connectivity to keep your business always online.
      Our services go beyond just offering high-speed internet. With 100% dedicated
      bandwidth, we ensure you receive the highest level of performance for your
      operations, whether it’s cloud applications, collaboration tools, or video
      conferencing.
    </p>
  </div>
</section>


<!-- ✅ 2nd Section: Text Left + Image Right -->
<section class="section-info reverse">
  <div class="info-text">
    <h2>SLA-Backed Reliability With ILL Connectivity</h2>
    <p>
      Although most of the wired and wireless Internet connections provided today are marketed
      with the promise of seamless networks, what makes ILL a better option is the written
      service level agreement (SLA) that comes with it. This contract safeguards the subscribers
      against unexpected downtime issues and ensures complete support from the service provider.
    </p>
  </div>
  <img src="assets/images/service-image.jpg" alt="SLA Backed ILL Connectivity">
</section>


<!-- ✅ 3rd Section: Feature Cards -->
<section class="section-features">
  <div class="container">
    <h2 class="features-title">Reliable, Secure, And Optimized Connectivity Solutions</h2>

    <div class="features-grid">
      <!-- Card 1 -->
      <div class="feature-card">
        <img src="assets/images/icon-1.png" alt="Dedicated Bandwidth Icon" class="feature-icon">
        <h3>Dedicated Bandwidth</h3>
        <p>1:1 uplink and downlink ratio bandwidth to support data intensive applications.</p>
      </div>

      <!-- Card 2 -->
      <div class="feature-card">
        <img src="assets/images/icon-2.png" alt="Secure Icon" class="feature-icon">
        <h3>Secure</h3>
        <p>Built-in security with auto mitigation against cyber threats.</p>
      </div>

      <!-- Card 3 -->
      <div class="feature-card">
        <img src="assets/images/icon-3.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>Route Optimization</h3>
        <p>We can optimize the routing to provide the best latency anywhere across the globe.</p>
      </div>

            <!-- Card 4 -->
      <div class="feature-card">
        <img src="assets/images/icon-4.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>Service Assurance</h3>
        <p>Enterprise-grade Service Level Agreement for higher uptime and reliability.</p>
      </div>

            <!-- Card 5 -->
      <div class="feature-card">
        <img src="assets/images/icon-5.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>Dual Stack Support</h3>
        <p>IPv4 and IPv6 dual stack connectivity for hosting applications.</p>
      </div>


                  <!-- Card 7 -->
      <div class="feature-card">
        <img src="assets/images/icon-6.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>Direct cloud connectivity</h3>
        <p>with direct dedicated connections across all major cloud providers ensures your packet reaches the destination with minimal hops.</p>
      </div>

                  <!-- Card 8 -->
      <div class="feature-card">
        <img src="assets/images/icon-7.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>muti path last mile</h3>
        <p>95% of the internet downtime to customer occurs due to failure in last mile connectivity, we ensure to avoid that by giving mulitple redudant path via fiber and wireless to ensure zero downtime.</p>
      </div>

                        <!-- Card 9 -->
      <div class="feature-card">
        <img src="assets/images/icon-8.png" alt="Route Optimization Icon" class="feature-icon">
        <h3>24/7 Assited care</h3>
        <p>Our in-house customer care team monitors the links 24*7, and responds immediately even before the customers are aware. Remote and onsite support are extended anytime based on nature of concern raised.</p>
      </div>
    </div>
  </div>
</section>



<?php
include('include/footer.php');
?>
