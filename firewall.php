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
        <h1 class="banner-title">Firewall
            <br>
        </h1>
    </div>
</section>

<!-- ✅ Image + Text Section -->
<section class="section-info">
    <img src="assets/images/firewall-image.jpg" alt="Leased Line Image">
    <div class="info-text">
        <h2>We Offers Firewall Solutions to Protect Your Data, Assets, and Users in Hybrid Environments</h2>
        <p>
            In today’s hybrid environments, securing your data, assets, and users is more important than ever. Megnet provides advanced firewall solutions that play a crucial role in safeguarding your organization against a wide range of security threats. Whether you’re operating in the cloud, on-premises, or a combination of both, our solutions ensure that your systems stay protected from external and internal cyber risks, enabling safe and seamless operations.
        </p>
    </div>
</section>




<!-- ✅ 3rd Section: Feature Cards -->
<section class="section-features">
    <div class="container">
        <h2 class="features-title">Enhancing Security and Operations with AI-Powered Solutions</h2>

        <div class="features-grid">
            <!-- Card 1 -->
            <div class="feature-card">
                <img src="assets/images/icon-40.png" alt="Dedicated Bandwidth Icon" class="feature-icon">
                <h3>AI-POWERED SECURITY</h3>
                <p>Al-centric treat intelligence offers timely protection, proactive defense, and streamlined operations.</p>
            </div>

            <!-- Card 2 -->
            <div class="feature-card">
                <img src="assets/images/icon-40.png" alt="Secure Icon" class="feature-icon">
                <h3>SIMPLIFIED OPERATIONS</h3>
                <p>Unified management reduces network complexity and automates security posture across all edges.</p>
            </div>

            <!-- Card 3 -->
            <div class="feature-card">
                <img src="assets/images/icon-40.png" alt="Route Optimization Icon" class="feature-icon">
                <h3>BETTER USER EXPERIENCE</h3>
                <p>Integrated SD-WAN enables simplified orchestration and secure interconnection among offices.</p>
            </div>

            
        </div>
    </div>
</section>



<?php
include('include/footer.php');
?>