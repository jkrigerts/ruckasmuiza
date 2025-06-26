<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- open graph meta tags -->
        @isset($metaName)
            <x-open-tags :metaName='$metaName'/>
        @endisset

        @isset($meta)
            {{ $meta }}
        @endisset
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:600,900|roboto-condensed:300,300i,400,400i,700,700i" rel="stylesheet" />
        <link rel="icon" href="{{ asset('images/ruckasmuiza-favicon.png') }}">
        <!-- Styles -->
        {{-- @vite("resources/sass/app.scss") --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <script>
            // Define dataLayer and the gtag function.
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}

            // Set default consent to 'denied' as a placeholder
            // Determine actual values based on your own requirements
            const analyticsGranted = localStorage.getItem('analyticsGranted');

            if (analyticsGranted && JSON.parse(analyticsGranted)) {
                gtag('consent', 'default', {
                     'ad_storage': 'denied',
                     'ad_user_data': 'denied',
                     'ad_personalization': 'denied',
                     'analytics_storage': 'granted'
                });
            } else {
                gtag('consent', 'default', {
                     'ad_storage': 'denied',
                     'ad_user_data': 'denied',
                     'ad_personalization': 'denied',
                     'analytics_storage': 'denied'
                });
            }


            function hideCookieBannerIfConsentGiven() {
                const consentGiven = localStorage.getItem('analyticsGranted');
                const banner = document.getElementById('cookie-banner');

                if (consentGiven && banner) {
                    banner.style.display = 'none';
                }
            }

            document.addEventListener('DOMContentLoaded', hideCookieBannerIfConsentGiven);
            window.addEventListener('livewire:navigated', hideCookieBannerIfConsentGiven);
            
        </script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-R2SXRMD1LG"></script>
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}

            gtag('js', new Date());
            gtag('config', 'G-R2SXRMD1LG');
        </script>

        <!-- Create one update function for each consent parameter -->
        <script>
            function consentGrantedAnalyticsStorage() {
                gtag('consent', 'update', {
                    'analytics_storage': 'granted'
                });
                const banner = document.getElementById("cookie-banner");
                banner.style.display = "none";
                localStorage.setItem("analyticsGranted", JSON.stringify(true));
                

                const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
                if (isSafari) {
                    location.reload();
                }
            }

            function consentDeniedAnalyticsStorage() {
                const banner = document.getElementById("cookie-banner");
                banner.style.display = "none";
                localStorage.setItem("analyticsGranted", JSON.stringify(false));
            }
        </script>
    </head>
    <body>
        <livewire:navigation />
        <main class="">
            {{ $slot }}
        </main>
        <x-cookies></x-cookies>
    </body>
</html>
