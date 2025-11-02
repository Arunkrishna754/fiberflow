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
        background: linear-gradient(to right,
                rgba(84, 127, 183, 0.8) 0%,
                rgba(84, 127, 183, 0.5) 35%,
                rgba(84, 127, 183, 0) 100%);
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
   INFO SECTION (Image + Text) — Optimized for Better Text Width
   ============================= */
    .section-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 60px;
        /* increased gap for breathing space */
        padding: 100px 8%;
        background: #fff;
    }

    /* ✅ Smaller image */
    .section-info img {
        width: 45%;
        /* reduced from ~600px to 45% width */
        max-width: 500px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        object-fit: cover;
    }

    /* ✅ Wider text area */
    .section-info .info-text {
        flex: 1.2;
        /* was 1; gives text ~55% width */
        max-width: 700px;
    }

    .section-info .info-text h2 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #111;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .section-info .info-text p {
        font-size: 1.1rem;
        color: #333;
        line-height: 1.8;
        margin-bottom: 16px;
    }

    /* ✅ Responsive layout */
    @media (max-width: 991px) {
        .section-info {
            flex-direction: column;
            text-align: center;
            padding: 60px 20px;
        }

        .section-info img {
            width: 100%;
            max-width: 100%;
            margin-bottom: 30px;
        }

        .section-info .info-text {
            max-width: 100%;
        }

        .section-info .info-text h2 {
            font-size: 1.8rem;
        }

        .section-info .info-text p {
            font-size: 1rem;
        }
    }

    /* =============================
   REVERSE VERSION (Image Right)
   ============================= */
    .section-info.reverse {
        background: #f0f6fc;
        flex-direction: row-reverse;
        gap: 60px;
    }

    .section-info.reverse img {
        width: 45%;
        max-width: 500px;
        border-radius: 10px;
        box-shadow: none;
    }

    .section-info.reverse .info-text {
        flex: 1.2;
        max-width: 700px;
        padding-right: 0;
    }

    /* Responsive Reverse */
    @media (max-width: 991px) {
        .section-info.reverse {
            flex-direction: column;
            text-align: center;
            padding: 60px 20px;
        }

        .section-info.reverse img {
            width: 100%;
        }

        .section-info.reverse .info-text {
            max-width: 100%;
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
        min-height: 320px;
        /* ✅ ensures equal height */
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
        margin-top: auto;
        /* pushes text evenly when different content lengths */
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
            min-height: 280px;
            /* slightly shorter for mobile */
        }
    }



    /* =============================
   FIBER OPTIC CABLE SECTION
   ============================= */
.section-fiber {
  background: #f6f9fc;
  padding: 100px 8%;
}

.fiber-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 60px;
  flex-wrap: wrap;
}

/* Left Text Area */
.fiber-text {
  flex: 1.2;
  max-width: 700px;
}

.fiber-text h2 {
  font-size: 2.2rem;
  font-weight: 700;
  color: #111;
  text-align: center;
  margin-bottom: 15px;
}

.fiber-text p {
  text-align: center;
  font-size: 1.1rem;
  color: #333;
  margin-bottom: 40px;
  line-height: 1.6;
}

.fiber-text h3 {
  font-size: 1.4rem;
  font-weight: 600;
  color: #000;
  margin-bottom: 20px;
}

/* ✅ Star bullet list */
.fiber-text ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.fiber-text ul li {
  position: relative;
  font-size: 1.05rem;
  color: #111;
  padding-left: 35px;
  margin-bottom: 12px;
  line-height: 1.6;
}

/* Red Star Icon */
.fiber-text ul li::before {
  content: "★";
  position: absolute;
  left: 0;
  top: 0;
  color: #e53935;
  font-size: 1.2rem;
}

/* Right Image */
.fiber-image {
  flex: 1;
  display: flex;
  justify-content: center;
}

.fiber-image img {
  width: 100%;
  max-width: 500px;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  object-fit: cover;
}

/* Responsive Layout */
@media (max-width: 991px) {
  .fiber-container {
    flex-direction: column;
    text-align: center;
  }

  .fiber-image img {
    max-width: 100%;
    margin-top: 30px;
  }

  .fiber-text h2 {
    font-size: 1.8rem;
    text-align: center;
  }

  .fiber-text p {
    font-size: 1rem;
    text-align: center;
  }

  .fiber-text ul li {
    font-size: 1rem;
    padding-left: 30px;
  }
}



/* =============================
   SERVICE OFFERING SECTION
   ============================= */
.section-services {
  background: #fff;
  padding: 100px 8%;
  text-align: center;
}

.section-services h2 {
  font-size: 2rem;
  font-weight: 700;
  color: #111;
  margin-bottom: 60px;
}

/* Layout */
.services-content {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  gap: 50px;
  flex-wrap: wrap;
}

/* Two-column lists */
.service-list {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: left;
  flex: 1;
  min-width: 280px;
}

.service-list li {
  font-size: 1.1rem;
  color: #111;
  margin-bottom: 16px;
  padding-left: 25px;
  position: relative;
  line-height: 1.6;
}

/* ✅ Black round bullets */
.service-list li::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  background: #000;
  border-radius: 50%;
  left: 0;
  top: 9px;
}

/* Image on the right */
.services-image {
  flex: 0.8;
  min-width: 280px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.services-image img {
  width: 100%;
  max-width: 400px;
  object-fit: contain;
}

/* Responsive */
@media (max-width: 991px) {
  .section-services {
    padding: 60px 20px;
  }

  .section-services h2 {
    font-size: 1.6rem;
    margin-bottom: 40px;
  }

  .services-content {
    flex-direction: column;
    align-items: center;
  }

  .service-list {
    text-align: center;
    padding-left: 0;
  }

  .service-list li {
    padding-left: 0;
  }

  .service-list li::before {
    display: none;
  }

  .services-image img {
    max-width: 300px;
    margin-top: 30px;
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
        <h1 class="banner-title">Fiber Networking
            <br>
        </h1>
    </div>
</section>

<!-- ✅ Image + Text Section -->
<section class="section-info">
    <img src="assets/images/fiber-networking-image.jpg" alt="Leased Line Image">
    <div class="info-text">
        <h2>Let Us Handle Your Fiber Optic Services</h2>
        <p>
We offering turnkey solutions tailored to meet the digital connectivity needs of your business. We work with projects large or small, aerial and underground, catering to both existing and new sites. With meticulous attention to detail, we ensure every project is tailored to meet the specific needs of our clients, delivering a reliable network backbone ready for future technologies. we have industrial experience for deploying fiber optic network for number of industries and educational institutes.
        </p>
    </div>
</section>





<!-- ✅ Fiber Optic Cable Services Section -->
<section class="section-fiber">
  <div class="fiber-container">
    <!-- Left Text Section -->
    <div class="fiber-text">
      <h2>Fiber Optic Cable Services</h2>
      <p>
        Either it is outdoor or indoor deployments, MEGNET will take care of your fiber network.
      </p>

      <h3>Fusion Splicing Services</h3>
      <ul>
        <li>Expert Fusion and Mass Fusion Splicing</li>
        <li>Unarmored, Armored, and Duct Cable Splicing</li>
        <li>Single Mode, Multi-Mode Fiber Splicing</li>
        <li>Active System "Hot Cut" Splicing</li>
        <li>Transition and Termination Splicing</li>
        <li>Hot Transmission and Distribution Environment</li>
        <li>Manhole or Direct Buried Splicing</li>
      </ul>
    </div>

    <!-- Right Image -->
    <div class="fiber-image">
      <img src="assets/images/fiber-image.jpeg" alt="Fiber Optic Cable Image">
    </div>
  </div>
</section>


<!-- ✅ Our Robust Service Offering Section -->
<section class="section-services">
  <div class="services-container">
    <h2>Our Robust Service Offering Extends to</h2>

    <div class="services-content">
      <!-- Left Column -->
      <ul class="service-list">
        <li>Fiber Construction</li>
        <li>Fiber Optic Splicing</li>
        <li>Underground (UG) Construction</li>
        <li>Fiber Optic Cable Installation, Relocation, & Systems Testing</li>
        <li>System/Network Maintenance</li>
        <li>Aerial Construction</li>
      </ul>

      <!-- Right Column -->
      <ul class="service-list">
        <li>Emergency Repair & Technical Support</li>
        <li>Damaged Fiber Restoration</li>
        <li>Building, Testing, & Certifying New Fiber Rings</li>
        <li>Proficiency in DWDM, CWDM Technology</li>
        <li>Fiber Optic Cable Supplies</li>
        <li>Fiber Optic Ring & Cable Maintenance</li>
        <li>Proficiency in Relocation & Section Cuts</li>
      </ul>

      <!-- Side Image -->
      <div class="services-image">
        <img src="assets/images/image-fiber.png" alt="Service Illustration">
      </div>
    </div>
  </div>
</section>





<?php
include('include/footer.php');
?>