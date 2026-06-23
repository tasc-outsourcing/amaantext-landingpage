<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TWHSHNFK');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'TASC Translate' }}</title>
    @php
        $metaDescription = $description ?? 'Enterprise AI translation software for Arabic and English documents in the GCC.';
        $canonicalUrl = $canonical ?? 'https://www.tasctranslate.ai/';
    @endphp
    <meta name="description" content="{{ $metaDescription }}">
    @isset($robots)
    <meta name="robots" content="{{ $robots }}">
    @endisset
    <meta name="application-name" content="TASC Translate">
    <meta name="apple-mobile-web-app-title" content="TASC Translate">
    <meta name="google-site-verification" content="39e7CxqA4KWCOZng2lTM27XZNQfK4Ezdhq23y0d3BZw">
    <meta property="og:title" content="{{ $title ?? 'TASC Translate' }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:site_name" content="TASC Translate">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebSite",
                    "@id": "https://www.tasctranslate.ai/#website",
                    "url": "https://www.tasctranslate.ai/",
                    "name": "TASC Translate",
                    "alternateName": "TASC Translate AI"
                },
                {
                    "@type": "Organization",
                    "@id": "https://www.tasctranslate.ai/#organization",
                    "name": "TASC Translate",
                    "url": "https://www.tasctranslate.ai/",
                    "email": "info@tascoutsourcing.com",
                    "telephone": "+971 4 358 8500",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "2403, Nassima Tower, Sheikh Zayed Road",
                        "addressLocality": "Dubai",
                        "addressCountry": "AE",
                        "postalCode": "117495"
                    }
                }
            ]
        }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWHSHNFK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('content')
</body>
</html>
