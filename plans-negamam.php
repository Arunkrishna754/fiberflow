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

    .section-banner .banner-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to right,
                rgba(84, 127, 183, 0.8) 0%,
                rgba(84, 127, 183, 0.5) 35%,
                rgba(84, 127, 183, 0) 100%);
        z-index: 1;
    }

    .section-banner .banner-container {
        position: relative;
        z-index: 2;
        color: #fff;
    }

    .section-banner .banner-breadcrumb a {
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 12px;
        opacity: 0.9;
        text-transform: uppercase;
        color: #fff;
        text-decoration: none;
    }

    .section-banner .banner-title {
        font-size: 3rem;
        font-weight: 700;
        line-height: 1.3;
        color: #fff !important;
    }

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
  BROADBAND PACKAGE SECTION
  ============================= */
    .section-plans {
        padding: 100px 8%;
        text-align: center;
        background: #fff;
    }

    .plan-tabs {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin-bottom: 50px;
        flex-wrap: wrap;
    }

    .plan-tab {
        background: none;
        border: none;
        font-size: 1rem;
        font-weight: 600;
        color: #000;
        cursor: pointer;
        position: relative;
        padding-bottom: 5px;
    }

    .plan-tab.active {
        color: #2a5fa9;
    }

    .plan-tab.active::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: #2a5fa9;
    }

    /* =============================
  PLAN CARDS SECTION
  ============================= */
    .plan-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .plan-card {
        width: 280px;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
    }

    .plan-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.15);
    }

    .plan-header {
        background: linear-gradient(135deg, #2454a4, #3d78e0);
        color: #fff;
        padding: 25px 20px;
        border-radius: 16px 16px 0 0;
    }

    .plan-header h3,
    .plan-header h2,
    .plan-header p {
        color: #fff;
    }

    .plan-body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .plan-feature {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .plan-feature img {
        width: 24px;
        height: 24px;
    }

    .plan-feature strong {
        display: block;
        color: #111;
        font-size: 0.95rem;
    }

    .plan-feature p {
        font-size: 0.85rem;
        color: #555;
        margin: 2px 0 0;
    }

    .subs-logos {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .subs-logos img {
        width: 40px;
        height: 40px;
        object-fit: contain;
        transition: transform 0.2s ease;
    }

    .plan-footer {
        background: #f3f7fc;
        text-align: center;
        padding: 15px;
        font-weight: 700;
        font-size: 1.1rem;
        color: #2a5fa9;
        border-top: 1px solid #eaeaea;
        margin-top: auto;
        transition: all 0.3s ease;
    }

    .plan-card:hover .plan-footer {
        background: #2a5fa9;
        color: #fff;
    }


    /* ---------- */


    /* =============================
DIGITAL EXPERIENCE SECTION (Below Plan Cards)
============================= */
    .section-digital-experience {
        padding: 80px 8%;

        text-align: center;

    }

    .section-digital-experience .price-note {
        font-style: italic;
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 35px;
    }

    .section-digital-experience h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #111;
        margin-bottom: 25px;
        line-height: 1.3;
    }

    .section-digital-experience .digital-desc {
        font-size: 1.1rem;
        color: #333;
        line-height: 1.8;
        max-width: 1000px;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .section-digital-experience h2 {
            font-size: 1.8rem;
        }

        .section-digital-experience .digital-desc {
            font-size: 1rem;
        }
    }


    /* =============================
FAQ / ACCORDION SECTION
============================= */
    .section-faq {
        padding: 80px 8%;
        background: #f9fbff;
    }

    .section-faq h2 {
        text-align: center;
        font-size: 2.4rem;
        font-weight: 700;
        color: #154a9f;
        margin-bottom: 25px;
    }

    .section-faq p.intro {
        text-align: center;
        max-width: 900px;
        margin: 0 auto 50px;
        color: #333;
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .faq-item {
        border-bottom: 1px solid #ddd;
        padding: 20px 0;
        cursor: pointer;
        position: relative;
    }

    .faq-question {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 700;
        font-size: 1.25rem;
        color: #000;
        transition: color 0.3s ease;
    }

    .faq-question:hover {
        color: #2a5fa9;
    }

    .faq-icon {
        font-size: 1.8rem;
        font-weight: 500;
        transition: transform 0.3s ease;
    }

    .faq-answer {
        display: none;
        padding-top: 15px;
        font-size: 1rem;
        color: #333;
        line-height: 1.7;
        animation: fadeIn 0.3s ease;
    }

    .faq-item.active .faq-answer {
        display: block;
    }

    .faq-answer ul {
        list-style: disc;
        margin: 10px 0 0 20px;
        text-align: left;
    }

    .faq-answer ul li {
        margin-bottom: 8px;
        line-height: 1.6;
    }


    .faq-item.active .faq-icon {
        transform: rotate(45deg);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }



    footer {
        position: relative;
        background: #111;
        color: #fff;
        padding: 40px 0;
        text-align: center;
        z-index: 2;
    }
</style>

<section class="section-banner">
    <div class="banner-overlay"></div>
    <div class="banner-container container">
        <p class="banner-breadcrumb">
            <a href="/index.php">HOME</a>
        </p>
        <h1 class="banner-title">Broadband Plans<br>in negamam</h1>
    </div>
</section>

<section class="section-plans">
    <div class="plans-container">
        <h2>Choose Your<br>Broadband Package</h2>
        <p class="plans-subtitle">
            Choose the perfect broadband plan for fast, reliable internet—designed to meet your
            needs, including streaming, work-from-home, online classes, gaming, and more.
        </p>

        <div class="plan-tabs">
            <button class="plan-tab active" data-plan="ott">OTT Plan</button>
            <button class="plan-tab" data-plan="wifi">Data only WiFi</button>
            <button class="plan-tab" data-plan="iptv">Premium IPTV Plan</button>
            <button class="plan-tab" data-plan="combo">OTT + Premium IPTV Plan</button>
            <button class="plan-tab" data-plan="airfiber">AirFiber Plans</button>
        </div>

        <div class="plan-cards"></div>
    </div>
</section>

<script>
    const tabs = document.querySelectorAll(".plan-tab");
    const planCardsContainer = document.querySelector(".plan-cards");

    const plansData = {
        ott: [{
                name: "MEG Basic",
                speed: "50 Mbps",
                desc: "Recommended for Basic Browsing",
                price: "₹499 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 50 Mbps",
                        text: "Smooth surfing, steady streaming"
                    },
                    {
                        icon: "assets/images/server.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
                subscriptions: ["assets/images/Z5.svg", "assets/images/aha_tamil.svg", "assets/images/sun.svg", "assets/images/FC.svg", "assets/images/450-live.png"]
            },
            {
                name: "MEG Pro",
                speed: "100 Mbps",
                desc: "Recommended for Small Home",
                price: "₹699 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 100 Mbps",
                        text: "Browse, stream, connect - without wait"
                    },
                    {
                        icon: "assets/images/server.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
                subscriptions: ["assets/images/jiohotstar.webp", "assets/images/Z5.svg", "assets/images/sun.svg", "assets/images/aha_tamil.svg", "assets/images/450-live.png"]
            },
            {
                name: "MEG Ultra",
                speed: "100 Mbps",
                desc: "Recommended for Small Home",
                price: "₹999 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 200 Mbps",
                        text: "Double the speed, double the fun"
                    },
                    {
                        icon: "assets/images/server.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
                subscriptions: ["assets/images/Amazon-Prime.png", "assets/images/sonyliv.png", "assets/images/sun.svg", "assets/images/jiohotstar.webp", "assets/images/450-live.png", "assets/images/FC.svg", "assets/images/Z5.svg", ]
            },
            {
                name: "MEG PROMAX",
                speed: "200 Mbps",
                desc: "Recommended for Streaming",
                price: "₹999 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 200 Mbps",
                        text: "Faster downloads, sharper streams"
                    },
                    {
                        icon: "assets/images/server.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
                subscriptions: ["assets/images/Amazon-Prime.png", "assets/images/sonyliv.png", "assets/images/sun.svg", "assets/images/jiohotstar.webp", "assets/images/450-live.png", "assets/images/FC.svg", "assets/images/Z5.svg", "assets/images/aha_tamil.svg", "assets/images/lionsgate.jpg"]
            },
            {
                name: "MEG Ultra",
                speed: "300 Mbps",
                desc: "Recommended for Pro Users",
                price: "₹1199 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 200 Mbps",
                        text: "Lightning-fast speed, zero compromise"
                    },
                    {
                        icon: "assets/images/server.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
                subscriptions: ["assets/images/Amazon-Prime.png", "assets/images/sonyliv.png", "assets/images/sun.svg", "assets/images/jiohotstar.webp", "assets/images/450-live.png", "assets/images/FC.svg", "assets/images/Z5.svg", "assets/images/aha_tamil.svg", "assets/images/lionsgate.jpg"]
            },
        ],
        wifi: [{
                name: "MEG 50",
                speed: "50 Mbps",
                desc: "Recommended for Basic Browsing",
                price: "₹499 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 50 Mbps",
                        text: "Smooth surfing, steady streaming"
                    },
                    {
                        icon: "assets/images/server.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
            },
            {
                name: "MEG 100",
                speed: "100 Mbps",
                desc: "Recommended for Small Home",
                price: "₹649 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 50 Mbps",
                        text: "Double the speed, double the fun"
                    },
                    {
                        icon: "assets/images/server.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
            },
            {
                name: "MEG 200",
                speed: "200 Mbps",
                desc: "Recommended for Streaming",
                price: "₹849 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 50 Mbps",
                        text: "Faster downloads, sharper streams"
                    },
                    {
                        icon: "assets/images/server.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],

            },
            {
                name: "MEG 300",
                speed: "300 Mbps",
                desc: "Recommended for Pro User",
                price: "₹1049 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 50 Mbps",
                        text: "Lighting-fast speed, zero compromise"
                    },
                    {
                        icon: "assets/images/server.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],

            }
        ],
        iptv: [{
                name: "MEG TV Basic",
                speed: "50 mbps",
                desc: "Recommended for Basic Browsing",
                price: "₹599 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 50 Mbps",
                        text: "Smooth surfing, steady streaming"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },

                ],
            },
            {
                name: "MEG IPTV Pro",
                speed: "100 Mbps",
                desc: "Recommended for Small Home",
                price: "₹799 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 100 Mbps",
                        text: "Double the speed, double the fun"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },
                ],
            },
            {
                name: "MEG TV Promax",
                speed: "200 Mbps",
                desc: "Recommended for Pro Users",
                price: "₹999 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 200 Mbps",
                        text: "Faster downloads, sharper streams"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },
                ],
            },
            {
                name: "MEG TV Ultra",
                speed: "300 Mbps",
                desc: "Recommended for Pro Users",
                price: "₹1199 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 300 Mbps",
                        text: "Lighting-fast speed, zero compromise"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },
                ],
            },
        ],
        combo: [{
                name: "Bundl Basic",
                speed: "50 mbps",
                desc: "Recommended for Basic Browsing",
                price: "₹625 / month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 50 Mbps",
                        text: "Smooth surfing, steady streaming"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },

                ],
                subscriptions: ["assets/images/sun.svg", "assets/images/450-live.png", "assets/images/FC.svg", "assets/images/Z5.svg", "assets/images/aha_tamil.svg"]
            },
            {
                name: "Bundl Pro",
                speed: "100 mbps",
                desc: "Recommended for Small Home",
                price: "₹825/ month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 50 Mbps",
                        text: "Browse, stream, connect - without wait"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },

                ],
                subscriptions: ["assets/images/jiohotstar.webp", "assets/images/sun.svg", "assets/images/Z5.svg", "assets/images/FC.svg", "assets/images/450-live.png", "assets/images/aha_tamil.svg"]
            },
            {
                name: "Bundl Elite",
                speed: "100 mbps",
                desc: "Recommended for Streaming",
                price: "₹925/ month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 100 Mbps",
                        text: "Double the speed, double the fun"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },

                ],
                subscriptions: ["assets/images/jiohotstar.webp", "assets/images/sun.svg", "assets/images/Z5.svg", "assets/images/FC.svg", "assets/images/450-live.png", "assets/images/aha_tamil.svg", "assets/images/Amazon-Prime.png"]
            },

            {
                name: "Bundl Promax",
                speed: "200 mbps",
                desc: "Recommended for Pro Users",
                price: "₹1175/ month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 200 Mbps",
                        text: "Faster downloads, sharper streams"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },

                ],
                subscriptions: ["assets/images/jiohotstar.webp", "assets/images/sun.svg", "assets/images/Z5.svg", "assets/images/FC.svg", "assets/images/450-live.png", "assets/images/aha_tamil.svg", "assets/images/Amazon-Prime.png", "assets/images/sonyliv.png", "assets/images/lionsgate.jpg"]
            },

            {
                name: "Bundl Ultra",
                speed: "300 mbps",
                desc: "Recommended for Pro Users",
                price: "₹1375/ month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 300 Mbps",
                        text: "Lighting-fast speed, zero compromise"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },

                ],
                subscriptions: ["assets/images/jiohotstar.webp", "assets/images/sun.svg", "assets/images/Z5.svg", "assets/images/FC.svg", "assets/images/450-live.png", "assets/images/aha_tamil.svg", "assets/images/Amazon-Prime.png", "assets/images/sonyliv.png", "assets/images/lionsgate.jpg"]
            },
        ],

        airfiber: [{
                name: "MEG AFB30",
                speed: "30 mbps",
                desc: "Recommended for Small Business Wireless Backup",
                price: "₹549/ month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 30 Mbps",
                        text: "Keep your business always online"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
            },

            {
                name: "MEG AFB40",
                speed: "40 mbps",
                desc: "Recommended for Growing Business Wireless Backup",
                price: "₹649/ month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 30 Mbps",
                        text: "Keep your business always online"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
            },

            {
                name: "MEG AFB50",
                speed: "50 mbps",
                desc: "Recommended for Medium Business Wireless Backup",
                price: "₹749/ month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 50 Mbps",
                        text: "Keep your business always online"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                ],
            },


            {
                name: "Bundl AF Pro",
                speed: "30 mbps",
                desc: "Recommended for Small Home",
                price: "₹599/ month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 30 Mbps",
                        text: "Smooth surfing, steady streaming"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },
                ],
                subscriptions: ["assets/images/jiohotstar.webp", "assets/images/sonyliv.png", "assets/images/Z5.svg", "assets/images/sun.svg", "assets/images/aha_tamil.svg", "assets/images/FC.svg", "assets/images/450-live.png"]

            },


            {
                name: "Bundl AF Elite",
                speed: "40 mbps",
                desc: "Recommended for Small Home",
                price: "₹699/ month",
                features: [{
                        icon: "assets/images/wifi.png",
                        title: "Internet with 40 Mbps",
                        text: "Limitless entertainment, limitless fun"
                    },
                    {
                        icon: "assets/images/wifi.png",
                        title: "Unlimited Data",
                        text: "Stream, surf and scroll - without limits"
                    },
                    {
                        icon: "assets/images/router.png",
                        title: "WiFi Router",
                        text: "Free to use dual-band router included"
                    },
                    {
                        icon: "assets/images/IPTV.png",
                        title: "IPTV 300+HD Channels",
                        text: "Free to watch a number of channels"
                    },
                ],
                subscriptions: ["assets/images/jiohotstar.webp", "assets/images/sonyliv.png", "assets/images/Z5.svg", "assets/images/sun.svg", "assets/images/aha_tamil.svg", "assets/images/FC.svg", "assets/images/450-live.png", "assets/images/Amazon-Prime.png"]

            },





        ]

    };






    function renderPlans(type) {
        const selectedPlans = plansData[type];
        planCardsContainer.innerHTML = selectedPlans.map(plan => `
      <div class="plan-card">
        <div class="plan-header">
          <h3>${plan.name}</h3>
          <h2>${plan.speed.split(" ")[0]} <span>${plan.speed.split(" ")[1]}</span></h2>
          <p>${plan.desc}</p>
        </div>
        <div class="plan-body">
          ${plan.features.map(f => `
            <div class="plan-feature">
              <img src="${f.icon}" alt="">
              <div
                <strong>${f.title}</strong>
                <p>${f.text}</p>
              </div>
            </div>`).join("")}
          ${plan.subscriptions ? `
          <h4 class="subs-title">Subscriptions</h4>
          <div class="subs-logos">
            ${plan.subscriptions.map(l => `<img src="${l}" alt="">`).join("")}
          </div>` : ""}
        </div>
        <div class="plan-footer">${plan.price}</div>
      </div>`).join("");
    }

    renderPlans("ott");

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {
            tabs.forEach(t => t.classList.remove("active"));
            tab.classList.add("active");
            renderPlans(tab.dataset.plan);
        });
    });
</script>



<section class="section-digital-experience">
    <div class="container">
        <p class="price-note">
            All price mentioned above are exclusive of GST and taxes apply
        </p>
        <h2>Elevate Your Digital Experience With Best Broadband Plans In negamam</h2>
        <p class="digital-desc">
            In the fast-growing town of negamam, staying connected with a high-speed internet connection
            is no longer just a luxury—it’s an absolute necessity. That’s where Fiberflow Broadband steps in,
            bringing you a wide range of powerful plans designed to transform your online world. Whether you’re
            a passionate gamer, a movie lover who enjoys seamless streaming, or a professional who depends on
            reliable connectivity, our fiber optic broadband wifi plans in negamam are built to make your
            digital life smoother, faster, and truly enjoyable.
        </p>
    </div>
</section>



<section class="section-faq">
    <div class="faq-container">


        <div class="faq-item">
            <div class="faq-question">
                <span>Why Choose Fiberflow Broadband And WiFi Plans In negamam?</span>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                In today’s digital era, a fast and reliable internet connection is essential. Fiberflow brings you high-speed broadband and WiFi plans in negamam, designed for uninterrupted streaming, online gaming, remote work, and learning. With speeds of up to 1 Gbps, Fiberflow ensures you enjoy a smooth online experience with strong WiFi coverage across your home.
            </div>
        </div>


        <div class="faq-item">
            <div class="faq-question">
                <span>Best Broadband Plans In negamam</span>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                fiberflow offers a wide range of WiFi and broadband plans in negamam to suit different lifestyles:
                <ul style="margin-top: 10px; padding-left: 20px; list-style-type: disc;">
                    <li><strong>Students:</strong> Affordable WiFi plans for online classes and study materials.</li>
                    <li><strong>Remote Professionals:</strong> High-speed broadband for video calls, file transfers, and work tools.</li>
                    <li><strong>Gamers & Streamers:</strong> Low-latency WiFi plans for uninterrupted entertainment.</li>
                    <li><strong>Families:</strong> Broadband plans with strong WiFi coverage for multiple devices.</li>
                </ul>
                <p style="margin-top: 10px;">
                    Whether you need reliable internet for work, study, or entertainment, fiberflow has the perfect plan for you.
                </p>
            </div>

        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>Does Fiberflow Provide Whole-Home WiFi Coverage In negamam?</span>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                Absolutely! fiberflow’s WiFi plans in negamam are designed for seamless whole-home connectivity. Whether you’re browsing on your smartphone, streaming on your smart TV, or connecting smart devices, fiberflow broadband ensures no dead zones, no buffering, and no interruptions. Our advanced WiFi technology delivers stable internet throughout your home.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question">
                <span>How Can Fiberflow Broadband Enhance My Digital Lifestyle?</span>
                <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
                With fiberflow’s high-speed broadband and WiFi plans in negamam, you get:
                <ul style="margin-top: 10px; padding-left: 20px; list-style-type: disc;">
                    <li>Lightning-fast speeds up to <strong>1 Gbps</strong></li>
                    <li>Seamless <strong>4K streaming</strong> and binge-worthy entertainment</li>
                    <li><strong>Lag-free online gaming</strong> with ultra-low latency</li>
                    <li>Stable and clear <strong>video calls</strong> for work and study</li>
                    <li>Strong <strong>WiFi coverage</strong> for multiple devices at once</li>
                    <li>Future-ready <strong>fiber optic internet technology</strong></li>
                </ul>
            </div>

        </div>
    </div>
</section>


<script>
    document.querySelectorAll('.faq-item').forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });
</script>



<?php
include('include/footer.php');
?>