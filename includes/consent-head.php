<?php /* Cookie consent defaults. Must be the FIRST thing inside <head> on every page,
before GTM / gtag / Meta Pixel / Clarity load, so a visitor who declined
cookies is not tracked on later page loads. The banner itself lives in
includes/cookie-consent.php. */ ?>
<script>
(function (w, d) {
    var choice = null;
    try { choice = w.localStorage.getItem('op_cookie_consent'); } catch (e) {}
    var state = choice === 'denied' ? 'denied' : 'granted';

    // Google Consent Mode v2 (GTM, GA4, Google Ads)
    w.dataLayer = w.dataLayer || [];
    w.gtag = w.gtag || function () { w.dataLayer.push(arguments); };
    w.gtag('consent', 'default', {
        ad_storage: state,
        analytics_storage: state,
        ad_user_data: state,
        ad_personalization: state
    });

    if (state === 'denied') {
        // Meta Pixel: load the base code now and revoke consent before the
        // page's own fbq('init') / fbq('track') calls are queued.
        if (!w.fbq) {
            var n = w.fbq = function () {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
            };
            if (!w._fbq) w._fbq = n;
            n.push = n; n.loaded = true; n.version = '2.0'; n.queue = [];
            var t = d.createElement('script');
            t.async = true;
            t.src = 'https://connect.facebook.net/en_US/fbevents.js';
            var s = d.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(t, s);
        }
        w.fbq('consent', 'revoke');

        // Microsoft Clarity: queue "no consent" before the Clarity tag loads.
        w.clarity = w.clarity || function () { (w.clarity.q = w.clarity.q || []).push(arguments); };
        w.clarity('consent', false);
    }
})(window, document);
</script>
