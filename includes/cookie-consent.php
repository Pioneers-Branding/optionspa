<?php /* Cookie consent banner, shown until the visitor accepts or declines.
Included from includes/footer.php and the landing pages in lp/.
Tracking is off until Accept; defaults are set in includes/consent-head.php.
Any link with data-cookie-settings reopens the banner. */ ?>
<div class="op-cc" id="opCookieConsent" role="dialog" aria-live="polite" aria-label="Cookie consent" hidden>
    <div class="op-cc-inner">
        <div class="op-cc-text">
            <p class="op-cc-title">We value your privacy</p>
            <p>We use cookies and similar tools from Google, Meta, Microsoft Clarity and Usermaven to understand how our website is used and to measure our advertising. These only run if you accept. Choosing "Decline" also opts you out of the sale or sharing of your personal information. Read our <a href="/privacy-policy">Privacy Policy</a>.</p>
        </div>
        <div class="op-cc-actions">
            <button type="button" class="op-cc-btn op-cc-decline" data-consent="denied">Decline</button>
            <button type="button" class="op-cc-btn op-cc-accept" data-consent="granted">Accept</button>
        </div>
    </div>
</div>

<style>
    .op-cc {
        position: fixed;
        left: 16px;
        right: 16px;
        bottom: 16px;
        z-index: 2147483000;
        display: flex;
        justify-content: center;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        animation: op-cc-in 0.35s ease-out;
    }

    .op-cc[hidden] { display: none; }

    @keyframes op-cc-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .op-cc-inner {
        width: 100%;
        max-width: 960px;
        display: flex;
        align-items: center;
        gap: 24px;
        background: #163C62;
        color: #FFFFFF;
        border-radius: 16px;
        padding: 20px 24px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        box-shadow: 0 16px 48px rgba(15, 41, 66, 0.35);
    }

    .op-cc-text { flex: 1; }

    .op-cc-text p {
        margin: 0;
        font-size: 14px;
        line-height: 1.55;
        color: rgba(255, 255, 255, 0.88);
    }

    .op-cc-text .op-cc-title {
        font-size: 16px;
        font-weight: 600;
        color: #FFFFFF;
        margin-bottom: 4px;
    }

    .op-cc-text a {
        color: #FF7A15;
        font-weight: 600;
        text-decoration: underline;
    }

    .op-cc-actions {
        display: flex;
        gap: 10px;
        flex-shrink: 0;
    }

    .op-cc-btn {
        font: inherit;
        font-size: 14px;
        font-weight: 600;
        padding: 11px 24px;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.2s ease;
        line-height: 1.2;
    }

    .op-cc-decline {
        background: transparent;
        color: #FFFFFF;
        border: 1.5px solid rgba(255, 255, 255, 0.55);
    }

    .op-cc-decline:hover { border-color: #FFFFFF; background: rgba(255, 255, 255, 0.08); }

    .op-cc-accept {
        background: #FF7A15;
        color: #FFFFFF;
        border: 1.5px solid #FF7A15;
    }

    .op-cc-accept:hover { background: #E56A10; border-color: #E56A10; }

    .op-cc-btn:focus-visible { outline: 3px solid #FFFFFF; outline-offset: 2px; }

    @media (max-width: 700px) {
        .op-cc { left: 12px; right: 12px; bottom: 12px; }

        .op-cc-inner {
            flex-direction: column;
            align-items: stretch;
            gap: 16px;
            padding: 18px;
        }

        .op-cc-actions .op-cc-btn { flex: 1; }
    }
</style>

<script>
(function (w, d) {
    var KEY = 'op_cookie_consent';
    var banner = d.getElementById('opCookieConsent');
    if (!banner) return;

    function stored() {
        try { return w.localStorage.getItem(KEY); } catch (e) { return null; }
    }

    // First-party cookies set by Google Ads/Analytics, Meta Pixel and Clarity.
    var TRACKING_COOKIES = /^(_ga|_ga_.*|_gid|_gat.*|_gcl_.*|_fbp|_fbc|_clck|_clsk)$/;
    function clearTrackingCookies() {
        var host = w.location.hostname.split('.');
        var domains = [''];
        for (var i = 0; i < host.length - 1; i++) domains.push('; domain=.' + host.slice(i).join('.'));
        d.cookie.split(';').forEach(function (c) {
            var name = c.split('=')[0].trim();
            if (!TRACKING_COOKIES.test(name)) return;
            domains.forEach(function (dm) {
                d.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/' + dm;
            });
        });
    }

    function apply(state) {
        var granted = state === 'granted';
        var wasGranted = !!(w.opConsent && w.opConsent.granted());
        try { w.localStorage.setItem(KEY, state); } catch (e) {}

        w.dataLayer = w.dataLayer || [];
        var gtag = w.gtag || function () { w.dataLayer.push(arguments); };
        var v = granted ? 'granted' : 'denied';
        gtag('consent', 'update', {
            ad_storage: v,
            analytics_storage: v,
            ad_user_data: v,
            ad_personalization: v
        });
        w.dataLayer.push({ event: 'cookie_consent_update', cookie_consent: state });

        if (granted) {
            if (typeof w.fbq === 'function') {
                w.fbq('consent', 'grant');
                // The PageView sent while consent was revoked was dropped; send it now.
                w.fbq('track', 'PageView');
            }
            if (w.opConsent) w.opConsent._grant();
        } else {
            if (typeof w.fbq === 'function') w.fbq('consent', 'revoke');
            clearTrackingCookies();
            // Scripts that already loaded cannot be unloaded; reload so they stop.
            if (wasGranted) { w.location.reload(); return; }
        }

        banner.hidden = true;
    }

    banner.querySelectorAll('[data-consent]').forEach(function (btn) {
        btn.addEventListener('click', function () { apply(btn.getAttribute('data-consent')); });
    });

    d.addEventListener('click', function (e) {
        var link = e.target.closest && e.target.closest('[data-cookie-settings]');
        if (!link) return;
        e.preventDefault();
        banner.hidden = false;
    });

    var choice = stored();
    if (choice !== 'granted') clearTrackingCookies();
    // First visit: ask. A Global Privacy Control signal with no saved choice
    // counts as "Decline", so no banner.
    var gpc = w.navigator.globalPrivacyControl === true;
    if (choice !== 'granted' && choice !== 'denied' && !gpc) banner.hidden = false;
})(window, document);
</script>
