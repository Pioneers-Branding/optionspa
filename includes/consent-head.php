<?php /* Cookie consent defaults (opt-in, same setup as Karma TMS). Must be the
FIRST thing inside <head> on every page, before GTM / gtag / Meta Pixel /
Clarity load. Nothing tracks until the visitor clicks Accept:
- Google Consent Mode v2 defaults to "denied".
- Meta Pixel consent is revoked before the page's own fbq('init').
- Clarity, Usermaven and other scripts are wrapped in opConsent.onGrant(fn) so they only
  load after Accept.
The banner itself lives in includes/cookie-consent.php. */ ?>
<script>
(function (w, d) {
    var choice = null;
    try { choice = w.localStorage.getItem('op_cookie_consent'); } catch (e) {}
    var granted = choice === 'granted';
    var queue = [];

    w.opConsent = {
        granted: function () { return granted; },
        onGrant: function (fn) {
            if (granted) { try { fn(); } catch (e) {} } else { queue.push(fn); }
        },
        _grant: function () {
            granted = true;
            while (queue.length) { try { queue.shift()(); } catch (e) {} }
        }
    };

    var state = granted ? 'granted' : 'denied';

    // Google Consent Mode v2 (GTM, GA4, Google Ads)
    w.dataLayer = w.dataLayer || [];
    w.gtag = w.gtag || function () { w.dataLayer.push(arguments); };
    w.gtag('consent', 'default', {
        ad_storage: state,
        analytics_storage: state,
        ad_user_data: state,
        ad_personalization: state,
        wait_for_update: 500
    });
    w.gtag('set', 'ads_data_redaction', true);

    if (!granted) {
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
    }
})(window, document);
</script>
