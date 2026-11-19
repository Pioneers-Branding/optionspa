<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/../../includes/consent-head.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Psychiatric care for depression, anxiety, PTSD, OCD, bipolar disorder and ADHD in Reading, PA. Evaluation, medication management, TMS and Spravato therapy at Options Psychiatry.">
    <meta name="keywords" content="psychiatrist Reading PA, depression treatment, anxiety treatment, PTSD treatment, OCD treatment, bipolar disorder treatment, ADHD assessment, medication management">
    <meta name="author" content="Options Psychiatry">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://optionspa.com/lp/mental-health-disease/">
    <title>Depression, Anxiety, PTSD, OCD, Bipolar &amp; ADHD Treatment | Options Psychiatry</title>

    <meta property="og:title" content="Depression, Anxiety, PTSD, OCD, Bipolar &amp; ADHD Treatment | Options Psychiatry">
    <meta property="og:description" content="Mental health conditions are treatable. Evaluation, medication management, TMS and Spravato therapy in Reading, PA.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://optionspa.com/lp/mental-health-disease/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1018652800573698');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1018652800573698&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtm.js?id=GTM-58G8N9XX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    </script>
    <!-- End Google Tag Manager -->

    <style>
        :root {
            --primary-navy: #163C62;
            --deep-navy: #0F2942;
            --light-navy: #1E4A6E;
            --accent-orange: #FF7A15;
            --accent-orange-hover: #E56A10;
            --warm-beige: #F5F0E8;
            --deep-charcoal: #2D3436;
            --soft-gray: #6B7280;
            --light-gray: #F8F9FA;
            --white: #FFFFFF;
            --off-white: #FAFAF8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--deep-charcoal);
            background: var(--white);
            line-height: 1.6;
        }

        h1, h2, h3, h4 {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 600;
            line-height: 1.2;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 10000;
            padding: 10px 0;
        }

        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .nav-links {
            display: none;
            list-style: none;
        }

        .nav-links li {
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--soft-gray);
            font-size: 0.9rem;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 50px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .nav-links a:hover {
            color: var(--primary-navy);
        }

        .nav-links a.active {
            color: var(--white);
        }

        .nav-links a.active::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--primary-navy);
            border-radius: 50px;
            z-index: -1;
        }

        .nav-cta {
            background: var(--white);
            color: var(--primary-navy);
            padding: 10px 24px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid var(--primary-navy);
        }

        .nav-cta:hover {
            background: white;
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(22, 60, 98, 0.25);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 28px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .btn-navy {
            background: var(--primary-navy);
            color: var(--white);
        }

        .btn-navy:hover {
            background: var(--deep-navy);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(22, 60, 98, 0.3);
        }

        .btn-white {
            background: var(--white);
            color: var(--primary-navy);
        }

        .btn-white:hover {
            background: var(--warm-beige);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-outline:hover {
            background: var(--white);
            color: var(--primary-navy);
        }

        .btn-ghost {
            background: transparent;
            color: var(--white);
            border: 2px solid rgba(255,255,255,0.5);
            backdrop-filter: blur(4px);
        }

        .btn-ghost:hover {
            background: rgba(255,255,255,0.15);
            border-color: var(--white);
        }

        .btn-orange {
            background: var(--accent-orange);
            color: var(--white);
        }

        .btn-orange:hover {
            background: var(--accent-orange-hover);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(22, 60, 98, 0.92), rgba(15, 41, 66, 0.88)),
                        url('../tms/tms-main.webp');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            padding-top: 80px;
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 120px;
            background: linear-gradient(to top, var(--white), transparent);
        }

        .hero-container {
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 60px;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            padding: 40px 0;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding: 8px 16px;
            border-radius: 50px;
            margin-bottom: 24px;
        }

        .hero-badge span {
            color: var(--white);
            font-size: 0.85rem;
            font-weight: 500;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            color: var(--white);
            margin-bottom: 24px;
            font-weight: 700;
            line-height: 1.15;
        }

        .hero h1 em {
            font-style: normal;
            color: var(--accent-orange);
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 32px;
            font-weight: 300;
            line-height: 1.8;
        }

        .hero-buttons {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        /* Hero Stats */
        .hero-stats {
            display: flex;
            gap: 24px;
            margin-bottom: 28px;
            padding: 16px 0;
            border-top: 1px solid rgba(255,255,255,0.2);
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .hero-stat {
            text-align: center;
            flex: 1;
        }

        .hero-stat-number {
            font-family: 'Inter', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--accent-orange);
            line-height: 1;
        }

        .hero-stat-number.hero-stat-text {
            font-size: 1.15rem;
            line-height: 1.2;
        }

        .hero-stat-label {
            font-size: 0.7rem;
            color: rgba(255,255,255,0.8);
            margin-top: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Hero Form */
        .hero-form {
            background: var(--white);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.25);
        }

        .hero-form h3 {
            font-size: 1.5rem;
            color: var(--deep-charcoal);
            margin-bottom: 8px;
            text-align: center;
        }

        .hero-form .form-subtitle {
            color: var(--soft-gray);
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--deep-charcoal);
            margin-bottom: 6px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--light-gray);
            border-radius: 12px;
            font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
            color: var(--deep-charcoal);
            background: var(--white);
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary-navy);
            box-shadow: 0 0 0 3px rgba(22, 60, 98, 0.1);
        }

        .form-group input::placeholder {
            color: var(--soft-gray);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .hero-form .btn-orange {
            width: 100%;
            padding: 16px;
            font-size: 1rem;
            margin-top: 8px;
        }

        .form-note {
            text-align: center;
            font-size: 0.8rem;
            color: var(--soft-gray);
            margin-top: 16px;
        }

        .form-note svg {
            width: 14px;
            height: 14px;
            vertical-align: middle;
            margin-right: 4px;
        }

        .play-icon {
            width: 48px;
            height: 48px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Benefits Section */
        .benefits {
            background: var(--white);
            padding: 60px 0;
        }

        .section-header {
            text-align: center;
            max-width: 640px;
            margin: 0 auto 60px;
        }

        .section-tag {
            display: inline-block;
            background: rgba(61, 154, 139, 0.1);
            color: var(--primary-navy);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 16px;
        }

        .section-header h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            color: var(--deep-charcoal);
            margin-bottom: 16px;
        }

        .section-header p {
            color: var(--soft-gray);
            font-size: 1.1rem;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .benefit-card {
            background: var(--light-gray);
            padding: 32px 24px;
            border-radius: 16px;
            text-align: center;
            transition: all 0.3s;
        }

        .benefit-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .benefit-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, var(--primary-navy), var(--deep-navy));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .benefit-icon svg {
            width: 32px;
            height: 32px;
            fill: var(--white);
        }

        .benefit-card h3 {
            font-size: 1.2rem;
            color: var(--deep-charcoal);
            margin-bottom: 8px;
        }

        .benefit-card p {
            color: var(--soft-gray);
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* Why Us Section */
        .why-us {
            background: var(--white);
            padding: 40px 0;
            overflow: hidden;
        }

        .why-us-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .why-us-image {
            position: relative;
        }

        .why-us-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.12);
        }

        .why-us-image::before {
            content: '';
            position: absolute;
            top: -15px;
            left: -15px;
            width: 100%;
            height: 100%;
            border: 3px solid var(--accent-orange);
            border-radius: 20px;
            z-index: -1;
        }

        .why-us-content {
            padding: 10px 0;
        }

        .why-us-content .section-tag {
            background: rgba(255, 122, 21, 0.1);
            color: var(--accent-orange);
            margin-bottom: 12px;
        }

        .why-us-content h2 {
            font-size: clamp(1.5rem, 3vw, 2rem);
            color: var(--deep-charcoal);
            margin-bottom: 16px;
            line-height: 1.3;
        }

        .why-us-content > p {
            color: var(--soft-gray);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .why-us-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .why-us-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 16px;
            background: var(--light-gray);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .why-us-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        .why-us-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-navy);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .why-us-icon svg {
            width: 20px;
            height: 20px;
            fill: var(--white);
        }

        .why-us-item-content h4 {
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--deep-charcoal);
            margin-bottom: 2px;
        }

        .why-us-item-content p {
            color: var(--soft-gray);
            font-size: 0.8rem;
            line-height: 1.4;
        }

        /* Trust Section */
        .trust {
            background: var(--off-white);
            padding: 60px 0;
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .trust-card {
            background: var(--white);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
            transition: all 0.3s;
        }

        .trust-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.08);
        }

        .trust-card.highlight {
            background: var(--deep-navy);
        }

        .trust-card.highlight * {
            color: var(--white) !important;
        }

        .trust-number {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-navy);
            margin-bottom: 8px;
        }

        .trust-card.highlight .trust-number {
            color: var(--white);
        }

        .trust-card h3 {
            font-size: 1.1rem;
            color: var(--deep-charcoal);
            margin-bottom: 8px;
        }

        .trust-card p {
            color: var(--soft-gray);
            font-size: 0.9rem;
        }

        /* What is TMS Section */
        .what-is {
            background: var(--warm-beige);
            padding: 50px 0;
        }

        .what-is-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .what-is-image {
            position: relative;
        }

        .what-is-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        .what-is-content {
            padding: 20px 0;
        }

        .what-is-content h2 {
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            color: var(--deep-charcoal);
            margin-bottom: 16px;
            line-height: 1.3;
        }

        .what-is-content > p {
            color: var(--soft-gray);
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 24px;
        }

        .what-is-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 28px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 14px;
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .feature-check {
            width: 24px;
            height: 24px;
            background: var(--accent-orange);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-check svg {
            width: 12px;
            height: 12px;
            fill: var(--white);
        }

        .feature-item span {
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--deep-charcoal);
        }

        .feature-item span {
            font-weight: 500;
            color: var(--deep-charcoal);
        }

        /* Services Section */
        .services {
            background: var(--warm-beige);
            padding: 60px 0;
            overflow: hidden;
        }

        .services-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 48px;
        }

        .services-header h2 {
            font-size: clamp(2rem, 4vw, 2.8rem);
            color: var(--deep-charcoal);
        }

        .services-header p {
            color: var(--soft-gray);
            max-width: 400px;
            margin-top: 8px;
        }

        .services-slider {
            display: flex;
            gap: 24px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 20px;
            scrollbar-width: none;
        }

        .services-slider::-webkit-scrollbar {
            display: none;
        }

        .service-card {
            flex: 0 0 360px;
            scroll-snap-align: start;
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.06);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-8px);
        }

        .service-card-img {
            height: 240px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .service-card-img::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.3), transparent);
        }

        .service-card-content {
            padding: 24px;
        }

        .service-card h3 {
            font-size: 1.3rem;
            color: var(--deep-charcoal);
            margin-bottom: 8px;
        }

        .service-card p {
            color: var(--soft-gray);
            font-size: 0.95rem;
            margin-bottom: 16px;
        }

        /* Journey Section */
        .journey {
            background: var(--white);
            padding: 60px 0;
        }

        .journey-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 60px;
            align-items: start;
        }

        .journey-left h2 {
            font-size: clamp(2rem, 4vw, 2.8rem);
            color: var(--deep-charcoal);
            margin-bottom: 24px;
        }

        .journey-left p {
            color: var(--soft-gray);
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 24px;
        }

        .journey-steps {
            display: flex;
            flex-direction: column;
            gap: 0;
            counter-reset: step;
        }

        .journey-step {
            counter-increment: step;
            position: relative;
            padding-left: 80px;
            padding-bottom: 40px;
        }

        .journey-step::before {
            content: counter(step, decimal-leading-zero);
            position: absolute;
            left: 0;
            top: 0;
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-navy);
            line-height: 1;
        }

        .journey-step::after {
            content: '';
            position: absolute;
            left: 22px;
            top: 40px;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary-navy), transparent);
        }

        .journey-step:last-child::after {
            display: none;
        }

        .journey-step h3 {
            font-size: 1.2rem;
            color: var(--deep-charcoal);
            margin-bottom: 8px;
        }

        .journey-step p {
            color: var(--soft-gray);
            font-size: 0.95rem;
        }

        /* Conditions Section */
        .conditions {
            background: var(--primary-navy);
            padding: 40px 0;
            position: relative;
            overflow: hidden;
        }

        .conditions::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255,122,21,0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        .conditions .section-header {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 40px;
        }

        .conditions .section-header h2 {
            color: var(--white);
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            margin-bottom: 12px;
        }

        .conditions .section-header p {
            color: rgba(255,255,255,0.7);
            font-size: 1rem;
        }

        .conditions-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        .condition-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 28px 24px;
            border-radius: 16px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .condition-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--accent-orange);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .condition-card:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-4px);
            border-color: rgba(255,255,255,0.2);
        }

        .condition-card:hover::before {
            transform: scaleX(1);
        }

        .condition-icon {
            width: 48px;
            height: 48px;
            background: rgba(255,122,21,0.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
        }

        .condition-icon svg {
            width: 24px;
            height: 24px;
            fill: var(--accent-orange);
        }

        .condition-card:hover .condition-icon {
            background: var(--accent-orange);
        }

        .condition-card:hover .condition-icon svg {
            fill: var(--white);
        }

        .condition-card h3 {
            color: var(--white);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .condition-card p {
            color: rgba(255,255,255,0.6);
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .conditions-cta {
            text-align: center;
            margin-top: 40px;
        }

        .conditions-cta p {
            color: rgba(255,255,255,0.8);
            font-size: 0.95rem;
            margin-bottom: 16px;
        }

        .condition-card p {
            color: rgba(255,255,255,0.6);
            font-size: 0.9rem;
        }

        /* Insurance Section */
        .insurance {
            background: var(--warm-beige);
            padding: 40px 0;
        }

        .insurance .section-header {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 40px;
        }

        .insurance .section-header h2 {
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            color: var(--deep-charcoal);
            margin-bottom: 12px;
        }

        .insurance .section-header p {
            color: var(--soft-gray);
            font-size: 1rem;
        }

        .insurance-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            margin-bottom: 32px;
        }

        .insurance-card {
            background: var(--white);
            padding: 24px 40px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .insurance-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.1);
        }

        .insurance-card img {
            max-height: 50px;
            width: auto;
            object-fit: contain;
        }

        .insurance-note {
            text-align: center;
        }

        .insurance-note p {
            color: var(--soft-gray);
            font-size: 0.95rem;
            margin-bottom: 16px;
        }

        /* Doctor Section */
        .doctor {
            background: var(--white);
            padding: 50px 0;
        }

        .doctor-grid {
            display: grid;
            grid-template-columns: 400px 1fr;
            gap: 60px;
            align-items: center;
        }

        .doctor-image {
            position: relative;
        }

        .doctor-image img {
            width: 100%;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .doctor-badge {
            position: absolute;
            bottom: -20px;
            right: -20px;
            background: var(--accent-orange);
            color: var(--white);
            padding: 16px 24px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: 0 10px 30px rgba(255,122,21,0.4);
        }

        .doctor-content {
            padding: 20px 0;
        }

        .doctor-content h2 {
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            color: var(--deep-charcoal);
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .doctor-title {
            font-size: 1.1rem;
            color: var(--primary-navy);
            font-weight: 600;
            margin-bottom: 24px;
        }

        .doctor-bio {
            color: var(--soft-gray);
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .doctor-bio:last-of-type {
            margin-bottom: 28px;
        }

        .doctor-specialties {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 32px;
        }

        .specialty-tag {
            display: flex;
            align-items: center;
            gap: 8px;
            background: var(--light-gray);
            padding: 10px 18px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--deep-charcoal);
        }

        .specialty-tag svg {
            width: 16px;
            height: 16px;
            fill: var(--accent-orange);
        }

        /* Testimonials Section */
        .testimonials {
            background: var(--primary-navy);
            padding: 50px 0;
            position: relative;
            overflow: visible;
        }

        .testimonials .section-header {
            max-width: 1400px;
            margin: 0 auto 40px;
            padding: 0 24px;
        }

        .testimonials::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            pointer-events: none;
        }

        .testimonials .section-header {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 48px;
            position: relative;
            z-index: 1;
        }

        .testimonials .section-header h2 {
            color: var(--white);
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            margin-bottom: 12px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .testimonials .section-header p {
            color: rgba(255,255,255,0.85);
            font-size: 1rem;
        }

        .testimonials .section-tag {
            background: var(--accent-orange);
            color: var(--white);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            position: relative;
            z-index: 1;
        }

        .testimonial-card {
            background: var(--white);
            padding: 32px;
            border-radius: 20px;
            position: relative;
            transition: all 0.3s ease;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 16px;
            right: 24px;
            font-family: 'Cormorant Garamond', serif;
            font-size: 6rem;
            color: var(--accent-orange);
            opacity: 0.2;
            line-height: 1;
        }

        .testimonial-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }

        .testimonial-stars {
            display: flex;
            gap: 4px;
            margin-bottom: 16px;
        }

        .star {
            width: 20px;
            height: 20px;
            fill: var(--accent-orange);
        }

        .testimonial-card blockquote {
            color: var(--deep-charcoal);
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 24px;
            font-style: italic;
            position: relative;
            z-index: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 14px;
            padding-top: 20px;
            border-top: 1px solid var(--light-gray);
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-navy), var(--accent-orange));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            font-size: 1rem;
        }

        .author-info h4 {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            color: var(--deep-charcoal);
        }

        .author-info span {
            font-size: 0.85rem;
            color: var(--soft-gray);
        }

        /* Slider Styles */
        .testimonials-slider-wrapper {
            display: flex;
            align-items: center;
            gap: 20px;
            position: relative;
            z-index: 1;
            max-width: 1400px;
            margin: 0 auto;
        }

        .testimonials-slider {
            display: flex;
            gap: 24px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
            flex: 1;
            padding: 20px 0;
            scrollbar-width: none;
        }

        .testimonials-slider::-webkit-scrollbar {
            display: none;
        }

        .slider-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--white);
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .slider-btn:hover {
            background: var(--accent-orange);
            transform: scale(1.1);
        }

        .slider-btn svg {
            width: 24px;
            height: 24px;
            fill: var(--primary-navy);
            transition: fill 0.3s ease;
        }

        .slider-btn:hover svg {
            fill: var(--white);
        }

        .testimonials-slider .testimonial-card {
            min-width: calc(50% - 12px);
            max-width: calc(50% - 12px);
            scroll-snap-align: start;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }

        /* Uniform cards: same quote length, author pinned to the bottom */
        .testimonials-slider .testimonial-card blockquote {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 6;
            line-clamp: 6;
            overflow: hidden;
            margin-bottom: 12px;
        }

        .testimonials-slider .testimonial-card blockquote.expanded {
            display: block;
            -webkit-line-clamp: unset;
            line-clamp: unset;
        }

        .testimonial-read-more {
            align-self: flex-start;
            background: none;
            border: none;
            padding: 0;
            margin-bottom: 20px;
            color: var(--accent-orange);
            font-family: inherit;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
        }

        .testimonial-read-more:hover {
            text-decoration: underline;
        }

        .testimonials-slider .testimonial-author {
            margin-top: auto;
        }

        .google-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
            padding: 6px 12px;
            background: #f8f8f8;
            border-radius: 20px;
            width: fit-content;
        }

        .google-badge .google-icon {
            width: 16px;
            height: 16px;
        }

        .google-badge span {
            font-size: 0.75rem;
            color: var(--soft-gray);
            font-weight: 500;
        }

        .testimonials-slider .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--accent-orange);
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
            position: relative;
            z-index: 1;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 24px;
        }

        .slider-dots .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.4);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-dots .dot.active {
            background: var(--accent-orange);
            transform: scale(1.2);
        }

        /* FAQ Section */
        .faq {
            background: var(--white);
            padding: 60px 0;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 60px;
        }

        .faq-left h2 {
            font-size: 1.8rem;
            color: var(--deep-charcoal);
            margin-bottom: 16px;
        }

        .faq-left p {
            color: var(--soft-gray);
            margin-bottom: 24px;
        }

        .faq-accordion {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .faq-item {
            background: var(--light-gray);
            border-radius: 12px;
            overflow: hidden;
        }

        .faq-question {
            width: 100%;
            padding: 20px 24px;
            background: none;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            color: var(--deep-charcoal);
            text-align: left;
        }

        .faq-question svg {
            width: 24px;
            height: 24px;
            fill: var(--primary-navy);
            transition: transform 0.3s;
        }

        .faq-item.active .faq-question svg {
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .faq-answer-content {
            padding: 0 24px 20px;
            color: var(--soft-gray);
            line-height: 1.7;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, var(--primary-navy), var(--deep-navy));
            padding: 50px 0;
            text-align: center;
        }

        .cta-inner {
            max-width: 600px;
            margin: 0 auto;
        }

        .cta-icon {
            width: 60px;
            height: 60px;
            background: var(--accent-orange);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }

        .cta-icon svg {
            width: 28px;
            height: 28px;
            color: var(--white);
        }

        .cta h2 {
            font-size: clamp(1.8rem, 4vw, 2.4rem);
            color: var(--white);
            margin-bottom: 16px;
        }

        .cta p {
            color: rgba(255,255,255,0.85);
            font-size: 1rem;
            max-width: 480px;
            margin: 0 auto 32px;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta .btn {
            padding: 14px 32px;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .cta .btn svg {
            width: 18px;
            height: 18px;
        }

        /* Footer */
        .footer {
            background: var(--deep-charcoal);
            padding: 80px 0 40px;
            position: relative;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 2fr repeat(3, 1fr);
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-brand .logo {
            margin-bottom: 20px;
        }

        .footer-brand .logo-text {
            color: var(--white);
        }

        .footer-brand p {
            color: rgba(255,255,255,0.6);
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 24px;
        }

        .footer-social {
            display: flex;
            gap: 12px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .social-link:hover {
            background: var(--primary-navy);
        }

        .social-link svg {
            width: 20px;
            height: 20px;
            fill: var(--white);
        }

        .footer-column h4 {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            color: var(--white);
            margin-bottom: 20px;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column li {
            margin-bottom: 12px;
        }

        .footer-column a {
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        .footer-column a:hover {
            color: var(--accent-orange);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-bottom p {
            color: rgba(255,255,255,0.4);
            font-size: 0.85rem;
        }

        .footer-bottom-links {
            display: flex;
            gap: 24px;
        }

        .footer-bottom-links a {
            color: rgba(255,255,255,0.4);
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.3s;
        }

        .footer-bottom-links a:hover {
            color: var(--primary-navy);
        }

        .footer-watermark {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Cormorant Garamond', serif;
            font-size: 8rem;
            font-weight: 700;
            color: rgba(255,255,255,0.03);
            white-space: nowrap;
            pointer-events: none;
            user-select: none;
        }

        /* Mobile Menu Button */
        .mobile-menu-btn {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 44px;
            height: 44px;
            background: #163C62;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            gap: 5px;
            flex-shrink: 0;
            position: relative;
        }

        .mobile-menu-btn span {
            display: block;
            width: 22px;
            height: 2px;
            background: #fff;
            transition: all 0.3s ease;
        }

        .mobile-menu-btn:hover {
            background: var(--deep-navy);
        }

        /* Mobile nav - show hamburger, hide desktop nav */
        @media (max-width: 1200px) {
            .mobile-menu-btn {
                display: flex !important;
            }
            .nav-links {
                display: none !important;
            }
        }

        @media (min-width: 1201px) {
            .mobile-menu-btn {
                display: none !important;
            }
            .nav-links {
                display: flex !important;
                align-items: center;
                gap: 8px;
                background: var(--light-gray);
                padding: 6px;
                border-radius: 50px;
            }
        }

        /* Shared Responsive Styles */
        @media (max-width: 1024px) {
            .hero-container {
                grid-template-columns: 1fr 380px;
                gap: 40px;
            }
            .benefits-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .trust-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .conditions-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
            }
            .footer-main {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Mobile Menu Overlay */
        .mobile-menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #163C62;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-menu-overlay.active {
            display: block;
            opacity: 1;
            visibility: visible;
        }

        .mobile-menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .mobile-menu-close {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border: none;
            border-radius: 50%;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile-menu-content {
            padding: 30px 20px;
        }

        .mobile-menu-content ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .mobile-menu-content li {
            margin-bottom: 5px;
        }

        .mobile-menu-content a {
            display: block;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }

        .mobile-menu-content a:hover {
            color: #FF7A15;
            padding-left: 10px;
        }

        .mobile-menu-cta {
            display: block;
            background: #FF7A15;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            padding: 15px 20px;
            border-radius: 8px;
            text-align: center;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .mobile-menu-cta:hover {
            background: #e66d12;
        }

        @media (max-width: 768px) {
            .hero-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .hero-form {
                padding: 24px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .why-us {
                padding: 40px 0;
            }

            .why-us-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .why-us-list {
                grid-template-columns: 1fr;
            }

            .why-us-image::before {
                display: none;
            }

            .conditions {
                padding: 40px 0;
            }

            .conditions-grid {
                grid-template-columns: 1fr;
            }

            .testimonials {
                padding: 40px 0;
            }

            .testimonials-slider-wrapper {
                flex-direction: row;
                gap: 0;
                padding: 0;
                max-width: 100%;
                overflow: visible;
            }

            .slider-btn {
                display: none;
            }

            .slider-btn svg {
                width: 16px;
                height: 16px;
            }

            .testimonials-slider {
                display: flex;
                gap: 12px;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
                scroll-behavior: smooth;
                width: 100%;
                padding: 0 15px;
            }

            .testimonials-slider::-webkit-scrollbar {
                display: none;
            }

            .testimonials-slider .testimonial-card {
                min-width: 70%;
                max-width: 70%;
                scroll-snap-align: start;
                flex-shrink: 0;
            }

            .slider-dots {
                margin-top: 15px;
                padding: 0 24px;
            }

            .testimonial-card blockquote {
                font-size: 0.85rem;
            }

            .doctor {
                padding: 40px 0;
            }

            .doctor-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .doctor-image {
                max-width: 350px;
                margin: 0 auto;
            }

            .doctor-image img {
                width: 100%;
                max-width: 350px;
            }

            .doctor-badge {
                bottom: -15px;
                right: -10px;
            }

            .insurance {
                padding: 40px 0;
            }

            .insurance-grid {
                gap: 20px;
            }

            .insurance-card {
                padding: 16px 24px;
            }

            .insurance-card img {
                max-height: 40px;
            }

            /* Already handled in 1024px block above */

            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .trust-grid {
                grid-template-columns: 1fr;
            }

            .what-is-grid {
                grid-template-columns: 1fr;
            }

            .journey-grid {
                grid-template-columns: 1fr;
            }

            .conditions-grid {
                grid-template-columns: 1fr;
            }

            .faq-grid {
                grid-template-columns: 1fr;
            }

            .services-header {
                flex-direction: column;
                text-align: center;
            }

            .footer-main {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .hero-buttons .btn {
                width: 100%;
            }

            .hero-stats {
                flex-direction: column;
                gap: 16px;
            }

            .hero-stat {
                display: flex;
                align-items: center;
                gap: 12px;
                text-align: left;
            }

            .hero-stat-number {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .testimonials-slider {
                padding: 0 15px;
                gap: 12px;
            }

            .testimonials-slider .testimonial-card {
                min-width: 75%;
                max-width: 75%;
            }
        }

        /* Schema.org Structured Data */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        /* ===== Mental Health Conditions LP additions ===== */
        .hero-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 32px;
        }

        .hero-pills a {
            color: var(--white);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 50px;
            border: 1px solid rgba(255,255,255,0.3);
            background: rgba(255,255,255,0.08);
            transition: all 0.3s;
        }

        .hero-pills a:hover {
            background: var(--accent-orange);
            border-color: var(--accent-orange);
        }

        .form-note-crisis {
            margin-top: 10px;
            font-size: 0.78rem;
            color: var(--soft-gray);
            text-align: center;
            line-height: 1.5;
        }

        .signs {
            background: var(--white);
            padding: 60px 0;
        }

        .signs-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .sign-card,
        .treatment-card {
            background: var(--light-gray);
            padding: 32px 24px;
            border-radius: 16px;
            text-align: center;
            transition: all 0.3s;
        }

        .sign-card:hover,
        .treatment-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .sign-card h3,
        .treatment-card h3 {
            font-size: 1.25rem;
            color: var(--deep-charcoal);
            margin-bottom: 8px;
        }

        .sign-card p,
        .treatment-card p {
            color: var(--soft-gray);
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .conditions-detail {
            background: var(--warm-beige);
            padding: 60px 0;
        }

        .cond-block {
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 48px;
            align-items: start;
            background: var(--white);
            border-radius: 20px;
            padding: 44px;
            margin-bottom: 28px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.05);
            scroll-margin-top: 100px;
        }

        .cond-block:last-child {
            margin-bottom: 0;
        }

        .cond-block-alt {
            grid-template-columns: 1.3fr 1fr;
        }

        .cond-block-alt .cond-intro {
            order: 2;
        }

        .cond-intro h3 {
            font-size: clamp(1.8rem, 3vw, 2.4rem);
            color: var(--deep-charcoal);
            margin-bottom: 16px;
        }

        .cond-intro p {
            color: var(--soft-gray);
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 24px;
        }

        .cond-lists {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .cond-list {
            background: var(--light-gray);
            border-radius: 16px;
            padding: 28px 24px;
        }

        .cond-list-help {
            background: var(--primary-navy);
        }

        .cond-list h4 {
            font-family: 'Inter', sans-serif;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary-navy);
            margin-bottom: 16px;
        }

        .cond-list-help h4 {
            color: var(--accent-orange);
        }

        .cond-list ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .cond-list li {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            font-size: 0.95rem;
            line-height: 1.5;
            color: var(--deep-charcoal);
        }

        .cond-list-help li {
            color: rgba(255,255,255,0.9);
        }

        .cond-list li svg {
            width: 18px;
            height: 18px;
            flex-shrink: 0;
            margin-top: 2px;
            fill: var(--accent-orange);
        }

        .treatments {
            background: var(--white);
            padding: 60px 0;
        }

        .treatments-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .treatment-card {
            text-align: left;
            padding: 36px 32px;
            display: flex;
            flex-direction: column;
        }

        .treatment-card .benefit-icon {
            margin: 0 0 20px;
        }

        .treatment-card p {
            flex: 1;
            margin-bottom: 20px;
        }

        .treatment-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--accent-orange);
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
        }

        .treatment-link svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
            transition: transform 0.3s;
        }

        .treatment-link:hover svg {
            transform: translateX(4px);
        }

        .treatments-note {
            text-align: center;
            color: var(--soft-gray);
            font-size: 0.9rem;
            margin-top: 32px;
        }

        .journey-alt {
            background: var(--light-gray);
        }

        .crisis {
            background: var(--white);
            padding: 0 0 60px;
        }

        .crisis-box {
            display: flex;
            gap: 20px;
            align-items: center;
            background: #FFF4EC;
            border: 1px solid rgba(255,122,21,0.35);
            border-left: 5px solid var(--accent-orange);
            border-radius: 16px;
            padding: 28px 32px;
        }

        .crisis-box svg {
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            fill: var(--accent-orange);
        }

        .crisis-box h3 {
            font-size: 1.5rem;
            color: var(--deep-charcoal);
            margin-bottom: 4px;
        }

        .crisis-box p {
            color: var(--deep-charcoal);
            font-size: 0.95rem;
        }

        .crisis-box a {
            color: var(--accent-orange);
            font-weight: 600;
        }

        @media (max-width: 1024px) {
            .signs-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .cond-block,
            .cond-block-alt {
                grid-template-columns: 1fr;
                gap: 28px;
                padding: 36px;
            }

            .cond-block-alt .cond-intro {
                order: 0;
            }
        }

        @media (max-width: 768px) {
            .signs-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .treatments-grid,
            .cond-lists {
                grid-template-columns: 1fr;
            }

            .cond-block {
                padding: 28px 20px;
            }

            .crisis-box {
                flex-direction: column;
                align-items: flex-start;
                padding: 24px 20px;
            }
        }

        @media (max-width: 480px) {
            .signs-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalBusiness",
        "name": "Options Psychiatry",
        "description": "Psychiatric care for depression, anxiety, PTSD, OCD, bipolar disorder and ADHD in Reading, PA",
        "url": "https://optionspa.com",
        "telephone": "(610) 741-6567",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "2211 Quarry Drive, Suite E56",
            "addressLocality": "Reading",
            "addressRegion": "PA",
            "postalCode": "19606",
            "addressCountry": "US"
        },
        "medicalSpecialty": "Psychiatry"
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" role="navigation" aria-label="Main navigation">
        <div class="container">
            <a href="/" class="logo" aria-label="Options Psychiatry Home">
                <img src="../tms/logo.png" alt="Options Psychiatry" height="40">
            </a>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#conditions">Conditions</a></li>
                <li><a href="#treatments">Treatments</a></li>
                <li><a href="#insurance">Insurance</a></li>
                <li><a href="#doctor">Our Doctor</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#heroForm" class="nav-cta">Book an Appointment</a></li>
            </ul>

            <button class="mobile-menu-btn" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobileOverlay">
        <div class="mobile-menu-header">
            <img src="../tms/logo.png" alt="Options Psychiatry" height="35">
            <button class="mobile-menu-close" id="mobileMenuClose">&times;</button>
        </div>
        <div class="mobile-menu-content">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#conditions">Conditions</a></li>
                <li><a href="#treatments">Treatments</a></li>
                <li><a href="#insurance">Insurance</a></li>
                <li><a href="#doctor">Our Doctor</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
            <a href="#heroForm" class="mobile-menu-cta">Book an Appointment</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    <span>Psychiatric Care in Reading, PA</span>
                </div>

                <h1>Psychiatric Care for <em>Depression, Anxiety, PTSD, OCD, Bipolar Disorder &amp; ADHD</em></h1>

                <p class="hero-subtitle">Mental health conditions are medical conditions, and they are treatable. Options Psychiatry offers evaluation, medication management, TMS and Spravato therapy in a supportive, respectful setting.</p>

                <div class="hero-pills"><a href="#depression">Depression</a><a href="#anxiety">Anxiety</a><a href="#ptsd">PTSD</a><a href="#ocd">OCD</a><a href="#bipolar">Bipolar Disorder</a><a href="#adhd">ADHD</a></div>

                <div class="hero-buttons">
                    <a href="#heroForm" class="btn btn-orange">Book an Appointment</a>
                    <a href="tel:6107416567" class="btn btn-white">Call (610) 741-6567</a>
                </div>
            </div>

            <div class="hero-form">
                <h3>Request a Consultation</h3>
                <p class="form-subtitle">Take the first step toward feeling better</p>

                <form id="heroForm" accept-charset="UTF-8" action="https://app.formester.com/forms/gBSyEQIdV/submissions" method="POST">
                    <input type="hidden" name="source" value="Mental Health Conditions LP">

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="John Smith" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="(555) 123-4567" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="john@email.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="condition">Select Your Concern</label>
                        <select id="condition" name="condition" required>
                            <option value="">Select your concern</option>
                            <option value="depression">Depression</option>
                            <option value="anxiety">Anxiety</option>
                            <option value="ptsd">PTSD</option>
                            <option value="ocd">OCD</option>
                            <option value="bipolar">Bipolar Disorder</option>
                            <option value="adhd">ADHD</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="preferred_time">Preferred Appointment Time</label>
                        <select id="preferred_time" name="preferred_time">
                            <option value="">Select a time</option>
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-orange">Request a Consultation</button>

                    <p class="form-note">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                        Your information is secure and confidential
                    </p>
                    <p class="form-note-crisis">Please don&rsquo;t share detailed medical history in this form. In a crisis, call or text 988 or dial 911.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- When to See a Psychiatrist -->
    <section class="signs" id="when">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Is It Time?</span>
                <h2>When Should You See a Psychiatrist?</h2>
                <p>Consider an evaluation if symptoms last more than a couple of weeks or interfere with work, relationships or daily life.</p>
            </div>

            <div class="signs-grid">
                <div class="sign-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></div>
                    <h3>Persistent mood changes</h3>
                    <p>Ongoing sadness, irritability, emptiness or sudden mood swings.</p>
                </div>
                <div class="sign-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg></div>
                    <h3>Constant worry or fear</h3>
                    <p>Racing thoughts, panic, or avoiding situations because of anxiety.</p>
                </div>
                <div class="sign-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M9.37 5.51A7.35 7.35 0 0 0 9.1 7.5c0 4.08 3.32 7.4 7.4 7.4.68 0 1.35-.09 1.99-.27A7.014 7.014 0 0 1 12 19c-3.86 0-7-3.14-7-7 0-2.93 1.81-5.45 4.37-6.49zM12 3a9 9 0 1 0 9 9c0-.46-.04-.92-.1-1.36a5.389 5.389 0 0 1-4.4 2.26 5.403 5.403 0 0 1-3.14-9.8c-.44-.06-.9-.1-1.36-.1z"/></svg></div>
                    <h3>Sleep &amp; energy problems</h3>
                    <p>Sleeping far too much or too little, or constant exhaustion.</p>
                </div>
                <div class="sign-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div>
                    <h3>Trouble functioning</h3>
                    <p>Difficulty concentrating, finishing tasks or enjoying things you used to.</p>
                </div>
                <div class="sign-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M17.65 6.35A7.958 7.958 0 0 0 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08A5.99 5.99 0 0 1 12 18c-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/></svg></div>
                    <h3>Treatment hasn&rsquo;t worked</h3>
                    <p>Medications or therapy so far haven&rsquo;t given enough relief.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Conditions Overview -->
    <section class="conditions" id="conditions">
        <div class="container">
            <div class="section-header">
                <h2>Conditions We Treat</h2>
                <p>Select a condition to learn about common signs and how we can help.</p>
            </div>

            <div class="conditions-grid">
                <a href="#depression" class="condition-card" style="text-decoration:none;">
                    <div class="condition-icon"><svg viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></div>
                    <h3>Depression</h3>
                    <p>Persistent low mood, loss of interest and low energy</p>
                </a>
                <a href="#anxiety" class="condition-card" style="text-decoration:none;">
                    <div class="condition-icon"><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg></div>
                    <h3>Anxiety Disorders</h3>
                    <p>Generalized anxiety, panic disorder and social anxiety</p>
                </a>
                <a href="#ptsd" class="condition-card" style="text-decoration:none;">
                    <div class="condition-icon"><svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg></div>
                    <h3>PTSD</h3>
                    <p>Trauma-informed care at a pace that feels right</p>
                </a>
                <a href="#ocd" class="condition-card" style="text-decoration:none;">
                    <div class="condition-icon"><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></div>
                    <h3>OCD</h3>
                    <p>Unwanted thoughts and repetitive rituals</p>
                </a>
                <a href="#bipolar" class="condition-card" style="text-decoration:none;">
                    <div class="condition-icon"><svg viewBox="0 0 24 24"><path d="M7 2v11h3v9l7-12h-4l4-8z"/></svg></div>
                    <h3>Bipolar Disorder</h3>
                    <p>Shifts between elevated mood and depression</p>
                </a>
                <a href="#adhd" class="condition-card" style="text-decoration:none;">
                    <div class="condition-icon"><svg viewBox="0 0 24 24"><path d="M9 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 8c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm6 5H3v-.99c.2-.72 3.3-2.01 6-2.01s5.8 1.29 6 2v1zm3-4v2h6v-2H12z"/></svg></div>
                    <h3>ADHD</h3>
                    <p>Attention, focus and impulse control, in adults too</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Condition Details -->
    <section class="conditions-detail" id="condition-details">
        <div class="container">
            <article class="cond-block" id="depression">
                <div class="cond-intro">
                    <span class="section-tag">Condition 01</span>
                    <h3>Depression</h3>
                    <p>Depression is more than feeling low. It is a medical condition that affects mood, energy, sleep, appetite and the ability to enjoy life. It can often be treated, including when earlier treatments haven&rsquo;t worked.</p>
                    <a href="#heroForm" class="btn btn-orange" data-concern="depression">Get Evaluated for Depression</a>
                </div>
                <div class="cond-lists">
                    <div class="cond-list">
                        <h4>Common signs</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Persistent sadness or emptiness</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Loss of interest in activities</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Fatigue and changes in sleep or appetite</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Difficulty concentrating, feelings of worthlessness</span></li>
                        </ul>
                    </div>
                    <div class="cond-list cond-list-help">
                        <h4>How we can help</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Psychiatric evaluation and medication management</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>TMS therapy for eligible patients</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Spravato (esketamine) for eligible patients with treatment-resistant depression</span></li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="cond-block cond-block-alt" id="anxiety">
                <div class="cond-intro">
                    <span class="section-tag">Condition 02</span>
                    <h3>Anxiety Disorders</h3>
                    <p>Anxiety disorders involve intense, persistent fear or worry that is hard to control. They include generalized anxiety, panic disorder and social anxiety, and they respond to proper care.</p>
                    <a href="#heroForm" class="btn btn-orange" data-concern="anxiety">Get Evaluated for Anxiety</a>
                </div>
                <div class="cond-lists">
                    <div class="cond-list">
                        <h4>Common signs</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Excessive worry that is hard to switch off</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Panic attacks, racing heart, shortness of breath</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Restlessness, muscle tension, poor sleep</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Avoiding social or everyday situations</span></li>
                        </ul>
                    </div>
                    <div class="cond-list cond-list-help">
                        <h4>How we can help</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Comprehensive psychiatric evaluation</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Medication management with regular monitoring</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Guidance on a personalized treatment plan</span></li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="cond-block" id="ptsd">
                <div class="cond-intro">
                    <span class="section-tag">Condition 03</span>
                    <h3>PTSD</h3>
                    <p>Post-traumatic stress disorder can develop after experiencing or witnessing a traumatic event. Our approach is trauma-informed, respectful of your pace, and focused on your safety and comfort.</p>
                    <a href="#heroForm" class="btn btn-orange" data-concern="ptsd">Get Evaluated for PTSD</a>
                </div>
                <div class="cond-lists">
                    <div class="cond-list">
                        <h4>Common signs</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Intrusive memories, flashbacks or nightmares</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Avoiding reminders of the event</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Being constantly on edge or easily startled</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Negative changes in mood and thinking</span></li>
                        </ul>
                    </div>
                    <div class="cond-list cond-list-help">
                        <h4>How we can help</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Trauma-informed psychiatric evaluation</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Medication management for symptoms</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Coordinated care and follow-up</span></li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="cond-block cond-block-alt" id="ocd">
                <div class="cond-intro">
                    <span class="section-tag">Condition 04</span>
                    <h3>OCD</h3>
                    <p>Obsessive-compulsive disorder involves unwanted, distressing thoughts (obsessions) and repetitive behaviors or mental rituals (compulsions) that take up time and disrupt life.</p>
                    <a href="#heroForm" class="btn btn-orange" data-concern="ocd">Get Evaluated for OCD</a>
                </div>
                <div class="cond-lists">
                    <div class="cond-list">
                        <h4>Common signs</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Intrusive thoughts about contamination, harm or order</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Repeated checking, cleaning or counting</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Rituals that feel impossible to stop</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Significant time lost to these behaviors</span></li>
                        </ul>
                    </div>
                    <div class="cond-list cond-list-help">
                        <h4>How we can help</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Evaluation and diagnosis</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Medication management</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Discussion of other treatment options suited to you</span></li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="cond-block" id="bipolar">
                <div class="cond-intro">
                    <span class="section-tag">Condition 05</span>
                    <h3>Bipolar Disorder</h3>
                    <p>Bipolar disorder causes shifts between periods of elevated mood and energy (mania or hypomania) and depression. Consistent, ongoing psychiatric management helps keep mood stable.</p>
                    <a href="#heroForm" class="btn btn-orange" data-concern="bipolar">Get Evaluated for Bipolar Disorder</a>
                </div>
                <div class="cond-lists">
                    <div class="cond-list">
                        <h4>Common signs</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Periods of unusually high energy or reduced need for sleep</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Racing thoughts, impulsive decisions</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Depressive episodes with low mood and fatigue</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Marked changes in activity and behavior</span></li>
                        </ul>
                    </div>
                    <div class="cond-list cond-list-help">
                        <h4>How we can help</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Accurate diagnosis and mood monitoring</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Long-term medication management</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Regular follow-up to support stability</span></li>
                        </ul>
                    </div>
                </div>
            </article>

            <article class="cond-block cond-block-alt" id="adhd">
                <div class="cond-intro">
                    <span class="section-tag">Condition 06</span>
                    <h3>ADHD</h3>
                    <p>ADHD affects attention, impulse control and activity levels, and often continues into adulthood. A careful assessment can clarify what is going on and which options may help.</p>
                    <a href="#heroForm" class="btn btn-orange" data-concern="adhd">Get Assessed for ADHD</a>
                </div>
                <div class="cond-lists">
                    <div class="cond-list">
                        <h4>Common signs</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Difficulty sustaining focus or finishing tasks</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Disorganization and forgetfulness</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Restlessness or impulsivity</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Problems with time management</span></li>
                        </ul>
                    </div>
                    <div class="cond-list cond-list-help">
                        <h4>How we can help</h4>
                        <ul>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Comprehensive assessment</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Treatment options discussed with your psychiatrist</span></li>
                                <li><svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg><span>Ongoing monitoring and follow-up</span></li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- Treatments -->
    <section class="treatments" id="treatments">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Our Services</span>
                <h2>Treatments We Offer</h2>
                <p>The right treatment depends on your diagnosis and history, and is decided after a clinical evaluation.</p>
            </div>

            <div class="treatments-grid">
                <div class="treatment-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M4.22 11.29l5.07-5.07a5.003 5.003 0 0 1 7.07 0 5.003 5.003 0 0 1 0 7.07l-5.07 5.07a5.003 5.003 0 0 1-7.07 0 5.003 5.003 0 0 1 0-7.07zm1.42 1.42a2.98 2.98 0 0 0 0 4.24 2.98 2.98 0 0 0 4.24 0l2.54-2.54-4.24-4.24-2.54 2.54z"/></svg></div>
                    <h3>Medication Management</h3>
                    <p>Evaluation, prescribing and regular monitoring tailored to your clinical needs.</p>
                    <a href="#heroForm" class="treatment-link">Book a Consultation <svg viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg></a>
                </div>
                <div class="treatment-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M13 2.05v2.02c3.95.49 7 3.85 7 7.93 0 3.21-1.92 6-4.72 7.28L13 17v5h5l-1.22-1.22C19.91 19.07 22 15.76 22 12c0-5.18-3.95-9.45-9-9.95zM11 2c-1.95.2-3.8.96-5.32 2.21L7.1 5.63A7.94 7.94 0 0 1 11 4.07V2zM4.2 5.68C2.96 7.2 2.2 9.05 2 11h2.03c.18-1.42.75-2.77 1.65-3.9L4.2 5.68zM2 13c.2 1.95.97 3.8 2.22 5.32l1.42-1.43A8.002 8.002 0 0 1 4.03 13H2zm5.1 5.37l-1.43 1.42A10.04 10.04 0 0 0 11 22v-2.03a7.94 7.94 0 0 1-3.9-1.6z"/></svg></div>
                    <h3>TMS Therapy</h3>
                    <p>A non-invasive treatment using magnetic pulses to stimulate specific areas of the brain. May be considered for eligible patients.</p>
                    <a href="#heroForm" class="treatment-link">Ask About TMS <svg viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg></a>
                </div>
                <div class="treatment-card">
                    <div class="benefit-icon"><svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg></div>
                    <h3>Spravato Therapy</h3>
                    <p>Esketamine for eligible patients with treatment-resistant depression, given under medical supervision.</p>
                    <a href="#heroForm" class="treatment-link">Ask About Spravato <svg viewBox="0 0 24 24"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctor Section -->
    <section class="doctor" id="doctor">
        <div class="container">
            <div class="doctor-grid">
                <div class="doctor-image">
                    <img src="../tms/Cyntrell-768x825.jpg" alt="Dr. Cyntrell Crawford" loading="lazy">
                    <div class="doctor-badge">10+ Years Experience</div>
                </div>

                <div class="doctor-content">
                    <h2>Dr. Cyntrell Crawford</h2>
                    <p class="doctor-title">Psychiatrist in Reading, PA | Chief Medical Officer &amp; Founder</p>

                    <p class="doctor-bio">With over 10 years of experience in mental health care, Dr. Crawford focuses on TMS therapy, medication management and addiction psychiatry, combining clinical expertise with personalized care.</p>

                    <div class="doctor-specialties">
                        <div class="specialty-tag">
                            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            Medication Management
                        </div>
                        <div class="specialty-tag">
                            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-6h2v6zm0-8h-2V7h2v4z"/></svg>
                            TMS Therapy
                        </div>
                        <div class="specialty-tag">
                            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                            Addiction Psychiatry
                        </div>
                    </div>

                    <a href="#heroForm" class="btn btn-orange">Schedule with Dr. Crawford</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey Section -->
    <section class="journey journey-alt">
        <div class="container">
            <div class="journey-grid">
                <div class="journey-left">
                    <span class="section-tag">Our Process</span>
                    <h2>Your Path to Treatment</h2>
                    <p>Getting started is simple. Our team will guide you from your first call through ongoing care.</p>
                    <a href="#heroForm" class="btn btn-navy">Request a Consultation</a>
                </div>

                <div class="journey-steps">
                    <div class="journey-step">
                        <h3>Request a Consultation</h3>
                        <p>Send a short form or call our office.</p>
                    </div>

                    <div class="journey-step">
                        <h3>Psychiatric Evaluation</h3>
                        <p>Discuss your symptoms and history with the psychiatrist.</p>
                    </div>

                    <div class="journey-step">
                        <h3>Personalized Plan</h3>
                        <p>Explore suitable options based on your evaluation.</p>
                    </div>

                    <div class="journey-step">
                        <h3>Ongoing Follow-up</h3>
                        <p>Regular check-ins to monitor progress and adjust care.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Insurance Section -->
    <section class="insurance" id="insurance">
        <div class="container">
            <div class="section-header">
                <h2>Insurance &amp; Payment</h2>
                <p>We work with several major insurance providers. Coverage depends on your plan, so our team can help verify your benefits before your visit.</p>
            </div>

            <div class="insurance-grid">
                <div class="insurance-card">
                    <img src="../tms/upmc.jpg" alt="UPMC Insurance">
                </div>
                <div class="insurance-card">
                    <img src="../tms/aetna.jpg" alt="Aetna Insurance">
                </div>
                <div class="insurance-card">
                    <img src="../tms/highmark.jpg" alt="Highmark Insurance">
                </div>
                <div class="insurance-card">
                    <img src="../tms/unitedhealthcare.png" alt="UnitedHealthcare Insurance">
                </div>
                <div class="insurance-card">
                    <img src="../tms/sigma.png" alt="Sigma Insurance">
                </div>
            </div>


            <div class="insurance-note">
                <p>Don&rsquo;t see your insurance or prefer self-pay? Contact our office to discuss your options.</p>
                <a href="#heroForm" class="btn btn-navy">Verify Your Insurance</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq" id="faq">
        <div class="container">
            <div class="faq-grid">
                <div class="faq-left">
                    <span class="section-tag">FAQ</span>
                    <h2>Frequently Asked Questions</h2>
                    <p>Have questions? We&rsquo;re here to help. Reach out and our team will respond as soon as possible.</p>
                    <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                        <a href="tel:6107416567" class="btn btn-navy">Call Our Office</a>
                        <a href="#heroForm" class="btn btn-orange">Book an Appointment</a>
                    </div>
                </div>

                <div class="faq-accordion">
                    <div class="faq-item">
                        <button class="faq-question">
                            How do I know if I have a mental health condition?
                            <svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Only a clinical evaluation can diagnose a condition. If symptoms persist or affect daily life, a psychiatric evaluation is a good next step.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            What happens during the first consultation?
                            <svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                You&rsquo;ll discuss your concerns, symptoms and medical history with the psychiatrist, who will recommend suitable next steps.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Are these conditions treatable?
                            <svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Many people benefit from treatment, though results vary from person to person and no outcome can be guaranteed.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            What is TMS therapy and who is eligible?
                            <svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                TMS is a non-invasive treatment using magnetic pulses. Eligibility is determined by clinical evaluation.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            What is Spravato?
                            <svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Spravato (esketamine) is for eligible patients with treatment-resistant depression and is given under medical supervision.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Do you offer medication management?
                            <svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Yes, with regular monitoring where appropriate.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Do you accept insurance?
                            <svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                We work with several major insurance providers. Coverage depends on your plan, so contact our team and we can help verify your benefits.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Is my information kept private?
                            <svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Your enquiry is handled according to our privacy policy. Please avoid sharing detailed medical history in the form.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crisis Notice -->
    <section class="crisis" aria-label="Crisis support">
        <div class="container">
            <div class="crisis-box">
                <svg viewBox="0 0 24 24"><path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/></svg>
                <div>
                    <h3>In a crisis or having thoughts of suicide?</h3>
                    <p>Call or text <a href="tel:988">988</a> (Suicide &amp; Crisis Lifeline) or dial <a href="tel:911">911</a> right away. This website cannot provide emergency help.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="contact">
        <div class="cta-inner">
            <div class="cta-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                </svg>
            </div>
            <h2>Take the First Step Towards Feeling Better</h2>
            <p>Talk to Options Psychiatry about your concerns and explore treatment options that fit you.</p>
            <div class="cta-buttons">
                <a href="tel:6107416567" class="btn btn-white">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                    Call (610) 741-6567
                </a>
                <a href="#heroForm" class="btn btn-orange">Request an Appointment</a>
                <a href="https://www.google.com/maps/search/?api=1&amp;query=2211+Quarry+Drive+Suite+E56+Reading+PA+19606" class="btn btn-white" target="_blank" rel="noopener">Get Directions</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-main">
                <div class="footer-brand">
                    <a href="/" class="logo">
                        <img src="../tms/logo-footer.png" alt="Options Psychiatry" height="40">
                    </a>
                    <p>Providing education, support, and therapeutic options for mental health in Reading, PA and surrounding communities since 2014.</p>
                    <div class="footer-social">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2zM4 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#conditions">Conditions</a></li>
                        <li><a href="#treatments">Treatments</a></li>
                        <li><a href="#doctor">Our Doctor</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#heroForm">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Conditions</h4>
                    <ul>
                        <li><a href="#depression">Depression</a></li>
                        <li><a href="#anxiety">Anxiety</a></li>
                        <li><a href="#ocd">OCD</a></li>
                        <li><a href="#ptsd">PTSD</a></li>
                        <li><a href="#adhd">ADHD</a></li>
                        <li><a href="#bipolar">Bipolar</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="tel:6107416567">(610) 741-6567</a></li>
                        <li><a href="mailto:help@optionspsychiatry.com">help@optionspsychiatry.com</a></li>
                        <li><a href="#">2211 Quarry Drive</a></li>
                        <li><a href="#">Suite E56</a></li>
                        <li><a href="#">Reading, PA 19606</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 Options Psychiatry. All rights reserved. For information only; not a substitute for medical advice. Individual results vary.</p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">HIPAA Notice</a>
                    <a href="#cookie-settings" data-cookie-settings>Cookie Settings</a>
                </div>
            </div>
        </div>
        <!-- <div class="footer-watermark">TMS THERAPY</div> -->
    </footer>

    <script>
        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.parentElement;
                const isActive = faqItem.classList.contains('active');

                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                });

                if (!isActive) {
                    faqItem.classList.add('active');
                }
            });
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const mobileOverlay = document.getElementById('mobileOverlay');
        const mobileMenuClose = document.getElementById('mobileMenuClose');

        if (mobileMenuBtn && mobileOverlay) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            if (mobileMenuClose) {
                mobileMenuClose.addEventListener('click', () => {
                    mobileOverlay.classList.remove('active');
                    document.body.style.overflow = '';
                });
            }

            mobileOverlay.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileOverlay.classList.remove('active');
                    document.body.style.overflow = '';
                });
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 1px 20px rgba(0,0,0,0.06)';
            }

            // Active link highlighting
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-links a:not(.nav-cta)');

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.offsetHeight;
                const scrollY = window.scrollY;

                if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + section.id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.benefit-card, .condition-card, .sign-card, .treatment-card, .cond-block').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });

        // Testimonials: "Read more" only on quotes cut off by the line clamp
        document.querySelectorAll('.testimonials-slider blockquote').forEach(quote => {
            if (quote.scrollHeight <= quote.clientHeight + 1) return;
            const toggle = document.createElement('button');
            toggle.type = 'button';
            toggle.className = 'testimonial-read-more';
            toggle.textContent = 'Read more';
            toggle.setAttribute('aria-expanded', 'false');
            toggle.addEventListener('click', () => {
                const expanded = quote.classList.toggle('expanded');
                toggle.textContent = expanded ? 'Read less' : 'Read more';
                toggle.setAttribute('aria-expanded', String(expanded));
            });
            quote.insertAdjacentElement('afterend', toggle);
        });

        // Testimonials Slider
        const slider = document.querySelector('.testimonials-slider');
        const prevBtn = document.querySelector('.slider-prev');
        const nextBtn = document.querySelector('.slider-next');
        const dotsContainer = document.querySelector('.slider-dots');
        const cards = slider ? slider.querySelectorAll('.testimonial-card') : [];

        // Create dots
        if (dotsContainer && cards.length > 0) {
            cards.forEach((_, index) => {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if (index === 0) dot.classList.add('active');
                dot.addEventListener('click', () => goToSlide(index));
                dotsContainer.appendChild(dot);
            });
        }

        function updateDots() {
            if (!slider || !dotsContainer) return;
            const dots = dotsContainer.querySelectorAll('.dot');
            const scrollLeft = slider.scrollLeft;
            const cardWidth = cards[0] ? cards[0].offsetWidth + 24 : 400; // card width + gap
            const activeIndex = Math.round(scrollLeft / cardWidth);

            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === activeIndex);
            });
        }

        function goToSlide(index) {
            if (!slider || !cards[index]) return;
            const cardWidth = cards[0].offsetWidth + 24;
            slider.scrollTo({
                left: cardWidth * index,
                behavior: 'smooth'
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                if (!slider || !cards.length) return;
                const cardWidth = cards[0].offsetWidth + 24;
                const currentIndex = Math.round(slider.scrollLeft / cardWidth);
                const newIndex = Math.max(0, currentIndex - 1);
                goToSlide(newIndex);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                if (!slider || !cards.length) return;
                const cardWidth = cards[0].offsetWidth + 24;
                const currentIndex = Math.round(slider.scrollLeft / cardWidth);
                const newIndex = Math.min(cards.length - 2, currentIndex + 1); // -2 so last slide shows 2 cards
                goToSlide(newIndex);
            });
        }

        if (slider) {
            slider.addEventListener('scroll', updateDots);
        }

        // Responsive slider adjustments
        function adjustSliderForScreen() {
            const width = window.innerWidth;
            if (slider && cards.length > 0) {
                if (width < 480) {
                    cards.forEach(card => {
                        card.style.minWidth = '75%';
                        card.style.maxWidth = '75%';
                        card.style.flexShrink = '0';
                    });
                    if (slider) {
                        slider.style.gap = '12px';
                    }
                } else if (width < 768) {
                    cards.forEach(card => {
                        card.style.minWidth = '70%';
                        card.style.maxWidth = '70%';
                        card.style.flexShrink = '0';
                    });
                    if (slider) {
                        slider.style.gap = '12px';
                    }
                } else {
                    cards.forEach(card => {
                        card.style.minWidth = 'calc(50% - 12px)';
                        card.style.maxWidth = 'calc(50% - 12px)';
                        card.style.flexShrink = '1';
                    });
                    if (slider) {
                        slider.style.gap = '24px';
                    }
                }
            }
        }

        window.addEventListener('resize', adjustSliderForScreen);
        adjustSliderForScreen();
    </script>

    <script>
        // Condition CTAs pre-select the concern in the form
        document.querySelectorAll('[data-concern]').forEach(btn => {
            btn.addEventListener('click', () => {
                const sel = document.getElementById('condition');
                if (sel) sel.value = btn.dataset.concern;
            });
        });
    </script>
<?php include __DIR__ . '/../../includes/cookie-consent.php'; ?>
</body>
</html>
