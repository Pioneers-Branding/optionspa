<!DOCTYPE html>

<html lang="en-US" prefix="og: https://ogp.me/ns#">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<link href="_external/gmpg.org/xfn/11/index.html" rel="profile"/>

<script type="text/javascript">
			window.flatStyles = window.flatStyles || ''

			window.lightspeedOptimizeStylesheet = function () {
				const currentStylesheet = document.querySelector( '.tcb-lightspeed-style:not([data-ls-optimized])' )

				if ( currentStylesheet ) {
					try {
						if ( currentStylesheet.sheet && currentStylesheet.sheet.cssRules ) {
							if ( window.flatStyles ) {
								if ( this.optimizing ) {
									setTimeout( window.lightspeedOptimizeStylesheet.bind( this ), 24 )
								} else {
									this.optimizing = true;

									let rulesIndex = 0;

									while ( rulesIndex < currentStylesheet.sheet.cssRules.length ) {
										const rule = currentStylesheet.sheet.cssRules[ rulesIndex ]
										/* remove rules that already exist in the page */
										if ( rule.type === CSSRule.STYLE_RULE && window.flatStyles.includes( `${rule.selectorText}{` ) ) {
											currentStylesheet.sheet.deleteRule( rulesIndex )
										} else {
											rulesIndex ++
										}
									}
									/* optimize, mark it such, move to the next file, append the styles we have until now */
									currentStylesheet.setAttribute( 'data-ls-optimized', '1' )

									window.flatStyles += currentStylesheet.innerHTML

									this.optimizing = false
								}
							} else {
								window.flatStyles = currentStylesheet.innerHTML
								currentStylesheet.setAttribute( 'data-ls-optimized', '1' )
							}
						}
					} catch ( error ) {
						console.warn( error )
					}

					if ( currentStylesheet.parentElement.tagName !== 'HEAD' ) {
						/* always make sure that those styles end up in the head */
						const stylesheetID = currentStylesheet.id;
						/**
						 * make sure that there is only one copy of the css
						 * e.g display CSS
						 */
						if ( ( ! stylesheetID || ( stylesheetID && ! document.querySelector( `head #${stylesheetID}` ) ) ) ) {
							document.head.prepend( currentStylesheet )
						} else {
							currentStylesheet.remove();
						}
					}
				}
			}

			window.lightspeedOptimizeFlat = function ( styleSheetElement ) {
				if ( document.querySelectorAll( 'link[href*="thrive_flat.css"]' ).length > 1 ) {
					/* disable this flat if we already have one */
					styleSheetElement.setAttribute( 'disabled', true )
				} else {
					/* if this is the first one, make sure he's in head */
					if ( styleSheetElement.parentElement.tagName !== 'HEAD' ) {
						document.head.append( styleSheetElement )
					}
				}
			}
		</script>
<link href="wp-content/uploads/thrive/tcb-base-css-32-1633582922.css" id="tcb-style-base-thrive_template-32" media="all" rel="stylesheet" type="text/css"/><style class="tcb-lightspeed-style" id="tcb-style-template-thrive_template-32" onload="typeof window.lightspeedOptimizeStylesheet === 'function' &amp;&amp; window.lightspeedOptimizeStylesheet()" type="text/css">@media (min-width: 300px){.tve-theme-32 #content{padding: 0px !important;}.tve-theme-32 #wrapper{--header-background-width:100%;--footer-background-width:100%;--top-background-width:100%;--bottom-background-width:100%;}.tve-theme-32 .main-container{padding: 20px 10px !important;}.tve-theme-32 .content-section .section-content{padding: 20px 10px !important;}.tve-theme-32 .content-section [data-css="tve-u-1711c8af402"]{margin-top: 0px !important;margin-bottom: 0px !important;}.tve-theme-32 .top-section .section-background{border-top: 1px solid var(--tcb-skin-color-14);border-right: none;border-bottom: 1px solid var(--tcb-skin-color-14);border-left: none;border-image: initial;background-color: var(--tcb-skin-color-0) !important;background-image: none !important;}.tve-theme-32 .top-section .section-content{display: flex;flex-direction: column;text-align: center;--tve-color:rgb(255,255,255);justify-content: center;padding: 40px 20px !important;min-height: 224px !important;}.tve-theme-32 .top-section [data-css="tve-u-1705cdb4152"]{padding-bottom: 1px !important;}:not(#tve) .tve-theme-32 .top-section [data-css="tve-u-1707753ab8f"]{color: rgb(255,255,255) !important;--tcb-applied-color:rgb(255,255,255) !important;}:not(#tve) .tve-theme-32 .top-section [data-css="tve-u-17178510bfc"]{padding-bottom: 0px !important;margin-bottom: 0px !important;}.tve-theme-32 .bottom-section .section-background{background-image: linear-gradient(var(--tcb-skin-color-18),var(--tcb-skin-color-18)),url("wp-content/uploads/thrive-theme/images/img_bottom_03.jpg") !important;background-size: auto,cover !important;background-position: 50% 50%,50% 50% !important;background-attachment: scroll,fixed !important;background-repeat: no-repeat,no-repeat !important;}.tve-theme-32 .bottom-section .section-content{justify-content: center;display: flex;flex-direction: column;--tve-color:rgb(255,255,255);text-align: left;min-height: 375px !important;padding: 20px !important;}.tve-theme-32 .bottom-section [data-css="tve-u-16eb7f0b034"]{float: none;z-index: 3;position: relative;--tve-font-weight:var(--g-bold-weight,bold);--tve-font-family:Muli;--g-regular-weight:400;--g-bold-weight:600;--tve-font-size:12px;--tve-text-transform:uppercase;--tve-letter-spacing:1px;margin: 0px auto !important;}.tve-theme-32 .bottom-section [data-css="tve-u-16eb7f0b034"] .tcb-button-link{border: 2px solid rgb(255,255,255);border-radius: 100px;overflow: hidden;letter-spacing: var(--tve-letter-spacing,1px);background-color: transparent !important;padding: 20px !important;}:not(#tve) .tve-theme-32 .bottom-section [data-css="tve-u-1705d95f22d"]{color: rgb(255,255,255) !important;--tcb-applied-color:rgb(255,255,255) !important;padding-bottom: 0px !important;margin-bottom: 0px !important;font-size: 46px !important;font-weight: var(--g-bold-weight,bold) !important;}.tve-theme-32 .bottom-section [data-css="tve-u-1705d967199"]{float: none;padding: 0px !important;margin-bottom: 30px !important;margin-left: auto !important;margin-right: auto !important;background-color: transparent !important;}:not(#tve) .tve-theme-32 .bottom-section [data-css="tve-u-16eb7f0b034"] .tcb-button-link span{font-weight: var(--tve-font-weight,var(--g-bold-weight,bold));text-transform: var(--tve-text-transform,uppercase);}:not(#tve) .tve-theme-32 .bottom-section [data-css="tve-u-16eb7f0b034"] .tcb-button-link{font-family: var(--tve-font-family,Muli);font-size: var(--tve-font-size,12px) !important;}:not(#tve) .tve-theme-32 .bottom-section [data-css="tve-u-1707d9d150c"]{font-size: 15px !important;}}@media (max-width: 1023px){.tve-theme-32 #content{padding: 0px !important;}.tve-theme-32 .content-section .section-content{padding-left: 20px !important;padding-right: 20px !important;}.tve-theme-32 .main-container{padding-left: 20px !important;padding-right: 20px !important;}.tve-theme-32 .top-section .section-content{padding: 40px !important;}:not(#tve) .tve-theme-32 .bottom-section [data-css="tve-u-1705d95f22d"]{font-size: 33px !important;}.tve-theme-32 .bottom-section .section-content{min-height: 261px !important;padding-top: 10px !important;padding-bottom: 10px !important;}}@media (max-width: 767px){.tve-theme-32 .content-section .section-content{padding: 20px 10px !important;}.tve-theme-32 .main-container{padding: 10px !important;}.tve-theme-32 .top-section .section-content{padding: 25px 20px !important;}.tve-theme-32 .bottom-section .section-content{padding: 20px !important;}.tve-theme-32 .bottom-section [data-css="tve-u-1705d967199"]{margin-bottom: 20px !important;}:not(#tve) .tve-theme-32 .bottom-section [data-css="tve-u-16eb7f0b034"] .tcb-button-link span{font-weight: var(--tve-font-weight,var(--g-bold-weight,bold));}.tve-theme-32 .bottom-section [data-css="tve-u-16eb7f0b034"]{--tve-font-weight:var(--g-bold-weight,bold);--tve-line-height:2em;min-width: 100% !important;}:not(#tve) .tve-theme-32 .bottom-section [data-css="tve-u-16eb7f0b034"] .tcb-button-link{line-height: var(--tve-line-height,2em);}:not(#tve) .tve-theme-32 .bottom-section [data-css="tve-u-1705d95f22d"]{font-size: 26px !important;}.tve-theme-32 .bottom-section [data-css="tve-u-16eb7f0b034"] .tcb-button-link{padding: 14px !important;}}</style>
<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" data-pagespeed-no-defer="">
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
</script>
<!-- End Google Tag Manager for WordPress by gtm4wp.com -->
<!-- Search Engine Optimization by Rank Math - https://rankmath.com/ -->
<title>Depression Treatment in Reading, PA | Psychiatrist for Depression - Options Psychiatry</title>
<meta content="Get compassionate depression treatment in Reading, PA at Options Psychiatry. Our psychiatrists offer therapy, medication management, and advanced care for lasting recovery." name="description"/>
<meta content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" name="robots"/>
<link href="depression" rel="canonical"/>
<meta content="en_US" property="og:locale"/>
<meta content="article" property="og:type"/>
<meta content="Depression Treatment in Reading, PA | Psychiatrist for Depression - Options Psychiatry" property="og:title"/>
<meta content="Get compassionate depression treatment in Reading, PA at Options Psychiatry. Our psychiatrists offer therapy, medication management, and advanced care for lasting recovery." property="og:description"/>
<meta content="depression" property="og:url"/>
<meta content="Options Psychiatry" property="og:site_name"/>
<meta content="2026-06-29T03:14:59-04:00" property="og:updated_time"/>
<meta content="wp-content/uploads/2026/06/depression-journey_gk42ae.jpg" property="og:image"/>
<meta content="wp-content/uploads/2026/06/depression-journey_gk42ae.jpg" property="og:image:secure_url"/>
<meta content="1024" property="og:image:width"/>
<meta content="1024" property="og:image:height"/>
<meta content="Depression Treatment in Reading, PA | Psychiatrist for Depression" property="og:image:alt"/>
<meta content="image/jpeg" property="og:image:type"/>
<meta content="summary_large_image" name="twitter:card"/>
<meta content="Depression Treatment in Reading, PA | Psychiatrist for Depression - Options Psychiatry" name="twitter:title"/>
<meta content="Get compassionate depression treatment in Reading, PA at Options Psychiatry. Our psychiatrists offer therapy, medication management, and advanced care for lasting recovery." name="twitter:description"/>
<meta content="wp-content/uploads/2026/06/depression-journey_gk42ae.jpg" name="twitter:image"/>
<meta content="Time to read" name="twitter:label1"/>
<meta content="4 minutes" name="twitter:data1"/>
<!-- /Rank Math WordPress SEO plugin -->
<link href="//fonts.googleapis.com" rel="dns-prefetch"/>




<style id="wp-img-auto-sizes-contain-inline-css" type="text/css">
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
</style>
<link href="wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend__qf7ffcae6.css" id="hfe-widgets-style-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/themes/thrive-theme/inc/assets/dist/theme__q784709ed.css" id="thrive-theme-styles-css" media="all" rel="stylesheet" type="text/css"/>
<style id="wp-emoji-styles-inline-css" type="text/css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
/*# sourceURL=wp-emoji-styles-inline-css */
</style>
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
/*# sourceURL=/wp-includes/css/classic-themes.min.css */
</style>
<link href="wp-content/plugins/wp-blog-post-layouts/includes/assets/css/build__q8daf52c7.css" id="wpblog-post-layouts-block-style-css" media="all" rel="stylesheet" type="text/css"/>
<style id="global-styles-inline-css" type="text/css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-term-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-term-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
/*# sourceURL=global-styles-inline-css */
</style>
<link href="wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.min__qf503e290.css" id="kk-star-ratings-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/thrive-ultimatum/tcb-bridge/assets/css/placeholders__qe79741bf.css" id="tve-ult-main-frame-css-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor__qf7ffcae6.css" id="hfe-style-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/elementor/assets/css/frontend.min__q5be56f11.css" id="elementor-frontend-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/uploads/elementor/css/post-4716__q104fc520.css" id="elementor-post-4716-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/uploads/elementor/css/post-4816__qb269e709.css" id="elementor-post-4816-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/uploads/elementor/css/post-4753__q104fc520.css" id="elementor-post-4753-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/uploads/elementor/css/post-4746__q2b585c9b.css" id="elementor-post-4746-css" media="all" rel="stylesheet" type="text/css"/>
<link href="_external/fonts.googleapis.com/css/index__qe78199b5.html#038;subset=latin%2Clatin-ext" id="wpblog-post-layouts-google-fonts-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/wp-blog-post-layouts/includes/assets/fontawesome/css/all.min__qdc889823.css" id="fontawesome-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/thrive-ovation/tcb-bridge/frontend/css/frontend__q98f937dc.css" id="tvo-frontend-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/themes/thrive-theme/style__q784709ed.css" id="thrive-theme-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min__q705c789f.css" id="hfe-elementor-icons-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/elementor/assets/css/widget-icon-list.min__q44b4c90b.css" id="hfe-icons-list-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/elementor/assets/css/widget-social-icons.min__q24013a96.css" id="hfe-social-icons-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/elementor/assets/lib/font-awesome/css/brands__q52d586d1.css" id="hfe-social-share-icons-brands-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome__q52d586d1.css" id="hfe-social-share-icons-fontawesome-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/plugins/elementor/assets/lib/font-awesome/css/solid__q52d586d1.css" id="hfe-nav-menu-icons-css" media="all" rel="stylesheet" type="text/css"/>
<link href="_external/fonts.googleapis.com/css/index__q65d37b7f.html" id="elementor-gf-roboto-css" media="all" rel="stylesheet" type="text/css"/>
<link href="_external/fonts.googleapis.com/css/index__qb6c5de83.html" id="elementor-gf-robotoslab-css" media="all" rel="stylesheet" type="text/css"/>
<script id="jquery-core-js" src="wp-includes/js/jquery/jquery.min__qf43b551b.js" type="text/javascript"></script>
<script id="jquery-migrate-js" src="wp-includes/js/jquery/jquery-migrate.min__q558973c0.js" type="text/javascript"></script>
<script id="jquery-js-after" type="text/javascript">
/* <![CDATA[ */
!function($){"use strict";$(document).ready(function(){$(this).scrollTop()>100&&$(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"),$(window).scroll(function(){$(this).scrollTop()<100?$(".hfe-scroll-to-top-wrap").fadeOut(300):$(".hfe-scroll-to-top-wrap").fadeIn(300)}),$(".hfe-scroll-to-top-wrap").on("click",function(){$("html, body").animate({scrollTop:0},300);return!1})})}(jQuery);
!function($){'use strict';$(document).ready(function(){var bar=$('.hfe-reading-progress-bar');if(!bar.length)return;$(window).on('scroll',function(){var s=$(window).scrollTop(),d=$(document).height()-$(window).height(),p=d? s/d*100:0;bar.css('width',p+'%')});});}(jQuery);
//# sourceURL=jquery-js-after
/* ]]> */
</script>
<script id="jquery-ui-core-js" src="wp-includes/js/jquery/ui/core.min__qb37ee774.js" type="text/javascript"></script>
<script id="jquery-ui-menu-js" src="wp-includes/js/jquery/ui/menu.min__qb37ee774.js" type="text/javascript"></script>
<script id="wp-dom-ready-js" src="wp-includes/js/dist/dom-ready.min__q5346137b.js" type="text/javascript"></script>
<script id="wp-hooks-js" src="wp-includes/js/dist/hooks.min__qaf5f3db4.js" type="text/javascript"></script>
<script id="wp-i18n-js" src="wp-includes/js/dist/i18n.min__q1cde93bb.js" type="text/javascript"></script>
<script id="wp-i18n-js-after" type="text/javascript">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
//# sourceURL=wp-i18n-js-after
/* ]]> */
</script>
<script id="wp-a11y-js" src="wp-includes/js/dist/a11y.min__q1b1cf71c.js" type="text/javascript"></script>
<script id="jquery-ui-autocomplete-js" src="wp-includes/js/jquery/ui/autocomplete.min__qb37ee774.js" type="text/javascript"></script>
<script id="imagesloaded-js" src="wp-includes/js/imagesloaded.min__qbb938083.js" type="text/javascript"></script>
<script id="masonry-js" src="wp-includes/js/masonry.min__q3a0508bb.js" type="text/javascript"></script>
<script id="jquery-masonry-js" src="wp-includes/js/jquery/jquery.masonry.min__qef703437.js" type="text/javascript"></script>
<script id="tve_frontend-js-extra" type="text/javascript">
/* <![CDATA[ */
var tve_frontend_options = {"ajaxurl":"https://optionspa.com/wp-admin/admin-ajax.php","is_editor_page":"","page_events":"","is_single":"1","social_fb_app_id":"","dash_url":"https://optionspa.com/wp-content/plugins/thrive-ultimatum/thrive-dashboard","queried_object":{"ID":4816,"post_author":"4"},"query_vars":{"page":"","pagename":"depression","certificate_u":""},"$_POST":[],"translations":{"Copy":"Copy","empty_username":"ERROR: The username field is empty.","empty_password":"ERROR: The password field is empty.","empty_login":"ERROR: Enter a username or email address.","min_chars":"At least %s characters are needed","no_headings":"No headings found","registration_err":{"required_field":"\u003Cstrong\u003EError\u003C/strong\u003E: This field is required","required_email":"\u003Cstrong\u003EError\u003C/strong\u003E: Please type your email address","invalid_email":"\u003Cstrong\u003EError\u003C/strong\u003E: The email address isn&#8217;t correct","passwordmismatch":"\u003Cstrong\u003EError\u003C/strong\u003E: Password mismatch"}},"routes":{"posts":"https://optionspa.com/wp-json/tcb/v1/posts","video_reporting":"https://optionspa.com/wp-json/tcb/v1/video-reporting","courses":"https://optionspa.com/wp-json/tva/v1/course_list_element","certificate_search":"https://optionspa.com/wp-json/tva/v1/certificate/search","assessments":"https://optionspa.com/wp-json/tva/v1/user/assessment","testimonials":"https://optionspa.com/wp-json/tcb/v1/testimonials"},"nonce":"52d3aee43c","allow_video_src":"","google_client_id":null,"google_api_key":null,"facebook_app_id":null,"lead_generation_custom_tag_apis":["activecampaign","aweber","convertkit","drip","klicktipp","mailchimp","sendlane","zapier"],"post_request_data":[],"user_profile_nonce":"4c5041a2b9","ip":"14.195.188.138","current_user":[],"post_id":"4816","post_title":"Depression Treatment in Reading, PA | Psychiatrist for Depression","post_type":"page","post_url":"https://optionspa.com/depression/","is_lp":"","conditional_display":{"is_tooltip_dismissed":false}};
//# sourceURL=tve_frontend-js-extra
/* ]]> */
</script>
<script id="tve_frontend-js" src="wp-content/plugins/thrive-ultimatum/tcb/editor/js/dist/modules/general.min__qe79741bf.js" type="text/javascript"></script>
<script id="theme-frontend-js-extra" type="text/javascript">
/* <![CDATA[ */
var thrive_front_localize = {"comments_form":{"error_defaults":{"email":"Email address invalid","url":"Website address invalid","required":"Required field missing"}},"routes":{"posts":"https://optionspa.com/wp-json/tcb/v1/posts","frontend":"https://optionspa.com/wp-json/ttb/v1/frontend"},"tar_post_url":"?tve=true&action=architect&from_theme=1","is_editor":"","ID":"32","template_url":"?tve=true&action=architect&from_tar=4816","pagination_url":{"template":"https://optionspa.com/depression/page/[thrive_page_number]/","base":"https://optionspa.com/depression/"},"sidebar_visibility":[],"is_singular":"1","is_user_logged_in":""};
//# sourceURL=theme-frontend-js-extra
/* ]]> */
</script>
<script id="theme-frontend-js" src="wp-content/themes/thrive-theme/inc/assets/dist/frontend.min__q784709ed.js" type="text/javascript"></script>
<script id="display-testimonials-tcb-js" src="wp-content/plugins/thrive-ovation/tcb-bridge/frontend/js/display-testimonials-tcb.min__qe79741bf.js" type="text/javascript"></script>


<meta content="IQ1dcuJ47hx3D0nkl5e3QOOCEIZ_UU7NBBkRGBNuLN4" name="google-site-verification"/>
<link href="wp-content/uploads/custom-css-js/4734__qec47fe7e.css" id="4734-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/uploads/custom-css-js/4725__q70077246.css" id="4725-css" media="all" rel="stylesheet" type="text/css"/>
<link href="wp-content/uploads/custom-css-js/2880__q42b25d37.css" id="2880-css" media="all" rel="stylesheet" type="text/css"/>
<!-- start Simple Custom CSS and JS -->
<!-- Add HTML code to the header or the footer.

For example, you can use the following code for loading the jQuery library from Google CDN:
<script src="assets-ext/ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

or the following one for loading the Bootstrap library from jsDelivr:
<link rel="stylesheet" href="assets-ext/cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 <!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="_external/fonts.googleapis.com/css2/index__q179b911d.html" rel="stylesheet"/>
<!-- Font Awesome -->
<link href="_external/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"/>
<!-- End of the comment -->
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

</script>
<!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">


/* Default comment here */ 

</script>
<!-- end Simple Custom CSS and JS -->
<link href="_external/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
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
<noscript><img height="1" src="https://www.facebook.com/tr?id=1018652800573698&amp;ev=PageView&amp;noscript=1" style="display:none" width="1"/></noscript>
<!-- End Meta Pixel Code -->
<script type="text/javascript">     
    (function () {
        window.usermaven = window.usermaven || (function () { (window.usermavenQ = window.usermavenQ || []).push(arguments); })
        var t = document.createElement('script'),
            s = document.getElementsByTagName('script')[0];
        t.defer = true;
        t.id = 'um-tracker';
        t.setAttribute('data-tracking-host', "https://events.usermaven.com")
        t.setAttribute('data-key', 'UMn2O1MhLr');
        t.setAttribute('data-autocapture', 'true');  
        t.src = 'https://t.usermaven.com/lib.js';
        s.parentNode.insertBefore(t, s);
    })();
  </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-222721405-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-222721405-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WH4BGL7V');</script>
<!-- Google tag (gtag.js) -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-16883360986"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16883360986');
</script>
<!-- Event snippet for Submit lead form conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-16883360986/kOsaCIuwsqAaENrJzvI-'});
</script>
<!-- Google tag (gtag.js) -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-E9TV9LJDWM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E9TV9LJDWM');
</script>
<style>

    /* for unique landing page accent color values,  put any new css added here inside tcb-bridge/js/editor */

    /* accent color */
    #thrive-comments .tcm-color-ac,
    #thrive-comments .tcm-color-ac span {
        color: #03a9f4;
    }

    /* accent color background */
    #thrive-comments .tcm-background-color-ac,
    #thrive-comments .tcm-background-color-ac-h:hover span,
    #thrive-comments .tcm-background-color-ac-active:active {
        background-color: #03a9f4    }

    /* accent color border */
    #thrive-comments .tcm-border-color-ac {
        border-color: #03a9f4;
        outline: none;
    }

    #thrive-comments .tcm-border-color-ac-h:hover {
        border-color: #03a9f4;
    }

    #thrive-comments .tcm-border-bottom-color-ac {
        border-bottom-color: #03a9f4;
    }

    /* accent color fill*/
    #thrive-comments .tcm-svg-fill-ac {
        fill: #03a9f4;
    }

    /* accent color for general elements */

    /* inputs */
    #thrive-comments textarea:focus,
    #thrive-comments input:focus {
        border-color: #03a9f4;
        box-shadow: inset 0 0 3px#03a9f4;
    }

    /* links */
    #thrive-comments a {
        color: #03a9f4;
    }

    /*
	* buttons and login links
	* using id to override the default css border-bottom
	*/
    #thrive-comments button,
    #thrive-comments #tcm-login-up,
    #thrive-comments #tcm-login-down {
        color: #03a9f4;
        border-color: #03a9f4;
    }

    /* general buttons hover and active functionality */
    #thrive-comments button:hover,
    #thrive-comments button:focus,
    #thrive-comments button:active {
        background-color: #03a9f4    }

</style>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T79WRWW');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<!-- GTM Container placement set to off -->
<script data-cfasync="false" data-pagespeed-no-defer="">
	var dataLayer_content = {"pagePostType":"page","pagePostType2":"single-page","pagePostAuthor":"Dr. Cyntrell Crawford"};
	dataLayer.push( dataLayer_content );
</script>
<script data-cfasync="false" data-pagespeed-no-defer="">
	console.warn && console.warn("[GTM4WP] Google Tag Manager container code placement set to OFF !!!");
	console.warn && console.warn("[GTM4WP] Data layer codes are active but GTM container must be loaded using custom coding !!!");
</script>
<!-- End Google Tag Manager for WordPress by gtm4wp.com --><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJC7C7C4');</script>
<!-- End Google Tag Manager --><style id="thrive-theme-layout-css" type="text/css">@media (min-width: 300px){.thrive-layout-19 .main-container .sidebar-section{width: 28.51%;}.thrive-layout-19 .main-container .content-section{width: calc(71.49% - 80px);}}@media (max-width: 1023px){.thrive-layout-19 .main-container{flex-wrap: wrap;}.thrive-layout-19 #wrapper .main-content-background,.thrive-layout-19 #wrapper .layout-background-width .section-background,.thrive-layout-19 #wrapper .layout-background-width .symbol-section-out{width: 100%;}.thrive-layout-19 .layout-content-width.main-container{width: 100%;}.thrive-layout-19 .layout-content-width > .section-content{width: 100%;}.thrive-layout-19 .layout-content-width .symbol-section-in{width: 100%;}}</style><style id="tve_global_variables" type="text/css">:root{--tcb-background-author-image:url("_external/secure.gravatar.com/avatar/0047baa95022e0117a11fdd310da4521de7ab91557a0210496da6c384c404e52/index__qb7b91a31.html");--tcb-background-user-image:url();--tcb-background-featured-image-thumbnail:url("wp-content/plugins/thrive-ultimatum/tcb/editor/css/images/featured_image.png");--tcb-skin-color-0:hsla(var(--tcb-theme-main-master-h,210), var(--tcb-theme-main-master-s,77%), var(--tcb-theme-main-master-l,54%), var(--tcb-theme-main-master-a,1));--tcb-skin-color-0-h:var(--tcb-theme-main-master-h,210);--tcb-skin-color-0-s:var(--tcb-theme-main-master-s,77%);--tcb-skin-color-0-l:var(--tcb-theme-main-master-l,54%);--tcb-skin-color-0-a:var(--tcb-theme-main-master-a,1);--tcb-skin-color-1:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 2% ), calc(var(--tcb-theme-main-master-l,54%) - 0% ), 0.5);--tcb-skin-color-1-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-1-s:calc(var(--tcb-theme-main-master-s,77%) + 2% );--tcb-skin-color-1-l:calc(var(--tcb-theme-main-master-l,54%) - 0% );--tcb-skin-color-1-a:0.5;--tcb-skin-color-2:rgb(248, 248, 248);--tcb-skin-color-2-h:0;--tcb-skin-color-2-s:0%;--tcb-skin-color-2-l:97%;--tcb-skin-color-2-a:1;--tcb-skin-color-3:hsla(calc(var(--tcb-theme-main-master-h,210) + 30 ), 85%, 13%, 1);--tcb-skin-color-3-h:calc(var(--tcb-theme-main-master-h,210) + 30 );--tcb-skin-color-3-s:85%;--tcb-skin-color-3-l:13%;--tcb-skin-color-3-a:1;--tcb-skin-color-4:rgb(12, 17, 21);--tcb-skin-color-4-h:206;--tcb-skin-color-4-s:27%;--tcb-skin-color-4-l:6%;--tcb-skin-color-4-a:1;--tcb-skin-color-5:rgb(106, 107, 108);--tcb-skin-color-5-h:210;--tcb-skin-color-5-s:0%;--tcb-skin-color-5-l:41%;--tcb-skin-color-5-a:1;--tcb-skin-color-8:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 2% ), calc(var(--tcb-theme-main-master-l,54%) - 0% ), 0.18);--tcb-skin-color-8-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-8-s:calc(var(--tcb-theme-main-master-s,77%) + 2% );--tcb-skin-color-8-l:calc(var(--tcb-theme-main-master-l,54%) - 0% );--tcb-skin-color-8-a:0.18;--tcb-skin-color-9:hsla(calc(var(--tcb-theme-main-master-h,210) - 3 ), 56%, 96%, 1);--tcb-skin-color-9-h:calc(var(--tcb-theme-main-master-h,210) - 3 );--tcb-skin-color-9-s:56%;--tcb-skin-color-9-l:96%;--tcb-skin-color-9-a:1;--tcb-skin-color-10:hsla(calc(var(--tcb-theme-main-master-h,210) - 21 ), calc(var(--tcb-theme-main-master-s,77%) + 23% ), calc(var(--tcb-theme-main-master-l,54%) + 27% ), 1);--tcb-skin-color-10-h:calc(var(--tcb-theme-main-master-h,210) - 21 );--tcb-skin-color-10-s:calc(var(--tcb-theme-main-master-s,77%) + 23% );--tcb-skin-color-10-l:calc(var(--tcb-theme-main-master-l,54%) + 27% );--tcb-skin-color-10-a:1;--tcb-skin-color-13:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 2% ), calc(var(--tcb-theme-main-master-l,54%) - 18% ), 0.5);--tcb-skin-color-13-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-13-s:calc(var(--tcb-theme-main-master-s,77%) + 2% );--tcb-skin-color-13-l:calc(var(--tcb-theme-main-master-l,54%) - 18% );--tcb-skin-color-13-a:0.5;--tcb-skin-color-14:rgb(230, 230, 230);--tcb-skin-color-14-h:0;--tcb-skin-color-14-s:0%;--tcb-skin-color-14-l:90%;--tcb-skin-color-14-a:1;--tcb-skin-color-16:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), 3%, 36%, 1);--tcb-skin-color-16-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-16-s:3%;--tcb-skin-color-16-l:36%;--tcb-skin-color-16-a:1;--tcb-skin-color-18:hsla(calc(var(--tcb-theme-main-master-h,210) - 1 ), calc(var(--tcb-theme-main-master-s,77%) + 1% ), calc(var(--tcb-theme-main-master-l,54%) - 1% ), 0.8);--tcb-skin-color-18-h:calc(var(--tcb-theme-main-master-h,210) - 1 );--tcb-skin-color-18-s:calc(var(--tcb-theme-main-master-s,77%) + 1% );--tcb-skin-color-18-l:calc(var(--tcb-theme-main-master-l,54%) - 1% );--tcb-skin-color-18-a:0.8;--tcb-skin-color-19:hsla(calc(var(--tcb-theme-main-master-h,210) - 3 ), 56%, 96%, 0.85);--tcb-skin-color-19-h:calc(var(--tcb-theme-main-master-h,210) - 3 );--tcb-skin-color-19-s:56%;--tcb-skin-color-19-l:96%;--tcb-skin-color-19-a:0.85;--tcb-skin-color-20:hsla(calc(var(--tcb-theme-main-master-h,210) - 3 ), 56%, 96%, 0.9);--tcb-skin-color-20-h:calc(var(--tcb-theme-main-master-h,210) - 3 );--tcb-skin-color-20-s:56%;--tcb-skin-color-20-l:96%;--tcb-skin-color-20-a:0.9;--tcb-skin-color-21:hsla(calc(var(--tcb-theme-main-master-h,210) - 210 ), calc(var(--tcb-theme-main-master-s,77%) - 77% ), calc(var(--tcb-theme-main-master-l,54%) + 46% ), 1);--tcb-skin-color-21-h:calc(var(--tcb-theme-main-master-h,210) - 210 );--tcb-skin-color-21-s:calc(var(--tcb-theme-main-master-s,77%) - 77% );--tcb-skin-color-21-l:calc(var(--tcb-theme-main-master-l,54%) + 46% );--tcb-skin-color-21-a:1;--tcb-skin-color-22:rgb(255, 255, 255);--tcb-skin-color-22-h:0;--tcb-skin-color-22-s:0%;--tcb-skin-color-22-l:100%;--tcb-skin-color-22-a:1;--tcb-skin-color-23:rgb(32, 65, 71);--tcb-skin-color-23-h:189;--tcb-skin-color-23-s:37%;--tcb-skin-color-23-l:20%;--tcb-skin-color-23-a:1;--tcb-skin-color-24:rgb(59, 59, 59);--tcb-skin-color-24-h:0;--tcb-skin-color-24-s:0%;--tcb-skin-color-24-l:23%;--tcb-skin-color-24-a:1;--tcb-skin-color-25:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 5% ), calc(var(--tcb-theme-main-master-l,54%) + 8% ), 0.04);--tcb-skin-color-25-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-25-s:calc(var(--tcb-theme-main-master-s,77%) + 5% );--tcb-skin-color-25-l:calc(var(--tcb-theme-main-master-l,54%) + 8% );--tcb-skin-color-25-a:0.04;--tcb-skin-color-26:hsla(calc(var(--tcb-theme-main-master-h,210) + 1 ), calc(var(--tcb-theme-main-master-s,77%) + 6% ), calc(var(--tcb-theme-main-master-l,54%) + 9% ), 0.12);--tcb-skin-color-26-h:calc(var(--tcb-theme-main-master-h,210) + 1 );--tcb-skin-color-26-s:calc(var(--tcb-theme-main-master-s,77%) + 6% );--tcb-skin-color-26-l:calc(var(--tcb-theme-main-master-l,54%) + 9% );--tcb-skin-color-26-a:0.12;--tcb-skin-color-27:hsla(calc(var(--tcb-theme-main-master-h,210) + 10 ), calc(var(--tcb-theme-main-master-s,77%) + 6% ), calc(var(--tcb-theme-main-master-l,54%) + 17% ), 1);--tcb-skin-color-27-h:calc(var(--tcb-theme-main-master-h,210) + 10 );--tcb-skin-color-27-s:calc(var(--tcb-theme-main-master-s,77%) + 6% );--tcb-skin-color-27-l:calc(var(--tcb-theme-main-master-l,54%) + 17% );--tcb-skin-color-27-a:1;--tcb-skin-color-28:hsla(calc(var(--tcb-theme-main-master-h,210) + 2 ), calc(var(--tcb-theme-main-master-s,77%) - 34% ), calc(var(--tcb-theme-main-master-l,54%) + 27% ), 1);--tcb-skin-color-28-h:calc(var(--tcb-theme-main-master-h,210) + 2 );--tcb-skin-color-28-s:calc(var(--tcb-theme-main-master-s,77%) - 34% );--tcb-skin-color-28-l:calc(var(--tcb-theme-main-master-l,54%) + 27% );--tcb-skin-color-28-a:1;--tcb-skin-color-29:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 6% ), calc(var(--tcb-theme-main-master-l,54%) + 10% ), 0.4);--tcb-skin-color-29-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-29-s:calc(var(--tcb-theme-main-master-s,77%) + 6% );--tcb-skin-color-29-l:calc(var(--tcb-theme-main-master-l,54%) + 10% );--tcb-skin-color-29-a:0.4;--tcb-skin-color-30:hsla(calc(var(--tcb-theme-main-master-h,210) - 1 ), calc(var(--tcb-theme-main-master-s,77%) + 5% ), calc(var(--tcb-theme-main-master-l,54%) + 8% ), 0.85);--tcb-skin-color-30-h:calc(var(--tcb-theme-main-master-h,210) - 1 );--tcb-skin-color-30-s:calc(var(--tcb-theme-main-master-s,77%) + 5% );--tcb-skin-color-30-l:calc(var(--tcb-theme-main-master-l,54%) + 8% );--tcb-skin-color-30-a:0.85;--tcb-main-master-h:210;--tcb-main-master-s:77%;--tcb-main-master-l:54%;--tcb-main-master-a:1;--tcb-theme-main-master-h:210;--tcb-theme-main-master-s:77%;--tcb-theme-main-master-l:54%;--tcb-theme-main-master-a:1;}</style><meta content="Elementor 3.35.3; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap" name="generator"/>
<style>
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
					background-image: none !important;
				}
				@media screen and (max-height: 1024px) {
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
				@media screen and (max-height: 640px) {
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
			</style>
<link class="thrive-external-font" href="_external/fonts.googleapis.com/css/index__q1713ae60.html" rel="stylesheet" type="text/css"/><link class="thrive-external-font" href="_external/fonts.googleapis.com/css/index__q02c3b389.html" rel="stylesheet" type="text/css"/><link class="thrive-external-font" href="_external/fonts.googleapis.com/css/index__qbe0afaa7.html" rel="stylesheet" type="text/css"/><style id="thrive-default-styles" type="text/css">@media (min-width: 300px) { .tcb-style-wrap h1{ color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:40px;background-color:rgba(0, 0, 0, 0);font-style:normal;margin:0px;padding-top:0px;padding-bottom:24px;text-decoration:rgba(10, 10, 10, 0.85);text-transform:none;border-left:0px none rgba(10, 10, 10, 0.85);line-height:1.3em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-color:var(--tcb-skin-color-4);--tve-applied-color:var$(--tcb-skin-color-4);--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h2{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;font-size:34px;line-height:1.4em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h3{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;font-size:24px;line-height:1.4em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h4{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;font-size:20px;line-height:1.4em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h5{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;line-height:1.4em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h6{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;line-height:1.6em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap p{ color:rgb(42, 42, 42);--tcb-applied-color:rgb(42, 42, 42);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:18px;padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;--tcb-typography-font-family:Barlow;--tcb-typography-color:rgb(42, 42, 42);--tve-applied-color:rgb(42, 42, 42);--tcb-typography-font-size:18px;--g-bold-weight:700; }:not(.inc) .thrv_text_element a:not(.tcb-button-link), :not(.inc) .tcb-styled-list a, :not(.inc) .tcb-numbered-list a, .tve-input-option-text a, .tcb-post-content p a, .tcb-post-content li a, .tcb-post-content blockquote a, .tcb-post-content pre a{ --tcb-applied-color:var$(--tcb-skin-color-5);font-family:var(--tve-font-family, Barlow);--g-regular-weight:400;font-weight:var(--g-regular-weight, normal) ;font-size:18px;text-decoration-line:none;--eff:none;text-decoration-color:var(--eff-color, currentColor);color:var(--tcb-skin-color-0);--tve-font-family:Barlow; }:not(.inc) .thrv_text_element a:not(.tcb-button-link):hover, :not(.inc) .tcb-styled-list a:hover, :not(.inc) .tcb-numbered-list a:hover, .tve-input-option-text a:hover, .tcb-post-content p a:hover, .tcb-post-content li a:hover, .tcb-post-content blockquote a:hover, .tcb-post-content pre a:hover { text-decoration-line:none;--eff:none;text-decoration-color:var(--eff-color, currentColor);color:var(--tcb-skin-color-3); }.tcb-style-wrap ul:not([class*="menu"]), .tcb-style-wrap ol{ color:var(--tcb-skin-color-5);--tcb-applied-color:var$(--tcb-skin-color-5);font-family:Muli;--g-regular-weight:400;--g-bold-weight:800;font-weight:var(--g-regular-weight, normal);font-size:18px;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:12px;padding-left:0px; }.tcb-style-wrap li:not([class*="menu"]){ color:rgb(42, 42, 42);--tcb-applied-color:rgb(42, 42, 42);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:18px;line-height:1.4em;padding-bottom:16px;margin-bottom:0px;--tcb-typography-font-family:Barlow;--tcb-typography-color:rgb(42, 42, 42);--tve-applied-color:rgb(42, 42, 42); }.tcb-style-wrap blockquote{ color:var(--tcb-skin-color-5);--tcb-applied-color:var$(--tcb-skin-color-5);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:18px;padding-top:0px;padding-bottom:0px;border-left:2px solid var(--tcb-skin-color-1);margin-top:0px;margin-bottom:24px;--tcb-typography-font-family:Barlow; }body, .tcb-plain-text{ color:var(--tcb-skin-color-5);--tcb-applied-color:var$(--tcb-skin-color-5);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:18px;--tcb-typography-font-family:Barlow; }.tcb-style-wrap pre{ font-family:Barlow;--tcb-typography-font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal); } }@media (max-width: 1023px) { .tcb-style-wrap h1{ font-size:36px;padding-bottom:22px;margin-bottom:0px; }.tcb-style-wrap h2{ padding-bottom:22px;margin-bottom:0px;font-size:28px; }.tcb-style-wrap h3{ padding-bottom:22px;margin-bottom:0px;font-size:22px; }.tcb-style-wrap h4{ padding-bottom:22px;margin-bottom:0px; }.tcb-style-wrap h5{ padding-bottom:22px;margin-bottom:0px; }.tcb-style-wrap h6{ padding-bottom:22px;margin-bottom:0px; }.tcb-style-wrap p{ padding-bottom:22px;margin-bottom:0px;padding-top:0px;margin-top:0px; }.tcb-style-wrap ul:not([class*="menu"]), .tcb-style-wrap ol{ padding-top:0px;padding-bottom:4px; }.tcb-style-wrap li:not([class*="menu"]){ line-height:1.75em;--tcb-typography-line-height:1.75em;padding-bottom:14px;margin-bottom:0px; }.tcb-style-wrap blockquote{ margin-bottom:22px; } }@media (max-width: 767px) { .tcb-style-wrap h1{ font-size:28px;padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h2{ font-size:24px;padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h3{ font-size:22px;padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h4{ font-size:20px;padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h5{ padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h6{ padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap p{ padding-bottom:20px;margin-bottom:0px;padding-top:0px;margin-top:0px;font-size:16px;--tcb-typography-font-size:16px; }.tcb-style-wrap ul:not([class*="menu"]), .tcb-style-wrap ol{ padding-left:0px;padding-bottom:4px;padding-top:0px; }.tcb-style-wrap li:not([class*="menu"]){ padding-bottom:10px;margin-bottom:0px;font-size:16px;--tcb-typography-font-size:16px; }.tcb-style-wrap blockquote{ margin-bottom:20px; } }</style><link href="wp-content/uploads/2025/12/OPTIONS-ADDICTION-RECOVERY-2.webp" rel="icon" sizes="32x32"/>
<link href="wp-content/uploads/2025/12/OPTIONS-ADDICTION-RECOVERY-2.webp" rel="icon" sizes="192x192"/>
<link href="wp-content/uploads/2025/12/OPTIONS-ADDICTION-RECOVERY-2.webp" rel="apple-touch-icon"/>
<meta content="wp-content/uploads/2025/12/OPTIONS-ADDICTION-RECOVERY-2.webp" name="msapplication-TileImage"/>
<style id="wp-custom-css" type="text/css">
			
#testi button, input[type="button"], input[type="reset"], input[type="submit"] {
    background: #ff7a14 !important;
    color: #fff;
   
}




@media (min-width: 300px) {
    .tve-theme-2972 .top-section {
        margin-top: 1px !important;
    }
}

#top-headerbaar{
	margin-top: -125px !important;
}
		</style>
</head>
<body class="wp-singular page-template page-template-elementor_header_footer page page-id-4816 wp-theme-thrive-theme ehf-header ehf-footer ehf-template-thrive-theme ehf-stylesheet-thrive-theme tve-theme-32 thrive-layout-19 thrive-no-prev-post-in-category thrive-no-next-post-in-category elementor-default elementor-template-full-width elementor-kit-4716 elementor-page elementor-page-4816">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-T79WRWW" style="display:none;visibility:hidden" width="0"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="hfeed site" id="page">
<?php include __DIR__ . '/includes/header.php'; ?>
<div class="elementor elementor-4816" data-elementor-id="4816" data-elementor-type="wp-page">
<div class="elementor-element elementor-element-3b1505b e-con-full e-flex e-con e-parent" data-e-type="container" data-element_type="container" data-id="3b1505b">
</div>
<div class="elementor-element elementor-element-e16831c e-con-full e-flex e-con e-parent" data-e-type="container" data-element_type="container" data-id="e16831c">
<div class="elementor-element elementor-element-fa9d2f8 elementor-widget elementor-widget-html" data-e-type="widget" data-element_type="widget" data-id="fa9d2f8" data-widget_type="html.default">
<style>
        /* =========================================
           CORE VARIABLES & RESET
           ========================================= */
        :root {
            --primary-dark: #0F2C3A;
            --accent-orange: #FF7A15;
            --text-main: #1A1A1A;
            --text-muted: #5A6B7C;
            --bg-white: #FFFFFF;
            --bg-soft: #F4F7F9;
            --bg-warm-gradient: linear-gradient(135deg, rgb(255, 245, 238) 0%, rgb(255, 223, 204) 100%);
            --radius-xl: 32px;
            --radius-lg: 20px;
        }

        html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Barlow', sans-serif;
            color: var(--text-main);
            line-height: 1.6;
            background-color: var(--bg-white);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4 {
            color: var(--primary-dark);
            line-height: 1.2;
            font-weight: 400;
            font-family: 'DM Serif Display', serif;
        }

        h1 {
            font-size: 3.5rem;
        }

        h2 {
            font-size: 2.75rem;
            margin-bottom: 24px;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 16px;
            font-family: 'Barlow', sans-serif;
            font-weight: 600;
        }

        p {
            color: var(--text-muted);
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .opt-section {
            padding: 40px 0;
            position: relative;
        }

        .opt-bg-light {
            background-color: var(--bg-soft);
        }

        .opt-bg-warm {
            background: var(--bg-warm-gradient);
        }

        .opt-text-center {
            text-align: center;
        }

        /* Badge & Buttons */
        .opt-badge-pill {
            display: inline-block;
            background: rgba(255, 122, 21, 0.1);
            color: var(--accent-orange);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
            padding: 8px 16px;
            border-radius: 50px;
            margin-bottom: 24px;
        }

        .opt-btn-hero-dark {
            background: var(--accent-orange);
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            box-shadow: 0 10px 30px rgba(255, 122, 21, 0.3);
            border: none;
            cursor: pointer;
        }

        .opt-btn-hero-dark:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 122, 21, 0.4);
            background: #e06000;
        }

        /* Hero Section */
        .opt-hero {
            padding: 160px 0 100px;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("wp-content/uploads/2026/06/depression-bg_gatq3p.webp");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            position: relative;
        }

        .opt-hero-container {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 60px;
            align-items: center;
        }

        .opt-hero-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: white !important;
            opacity: 1 !important;
            visibility: visible !important;
            display: block !important;
        }

        .opt-hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9) !important;
            margin-bottom: 40px;
            opacity: 1 !important;
        }

        /* Symptom Cards */
        .opt-symptoms-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .opt-symptom-card {
            background: white;
            padding: 40px;
            border-radius: var(--radius-xl);
            box-shadow: 0 10px 40px rgba(15, 44, 58, 0.05);
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .opt-symptom-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-orange);
            box-shadow: 0 20px 60px rgba(15, 44, 58, 0.1);
        }

        .opt-symptom-icon {
            font-size: 2.5rem;
            color: var(--accent-orange);
            margin-bottom: 20px;
        }

        /* Reveal Animation */
        .opt-reveal {
            opacity: 1;
            transform: none;
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .opt-reveal.opt-active {
            opacity: 1 !important;
            transform: translateY(0) !important;
            visibility: visible !important;
        }

        /* Immediate visibility for hero elements to ensure no content is hidden on load */
        .opt-hero-content,
        .opt-hero-form,
        .opt-hero-title,
        .opt-hero-subtitle,
        .opt-hero-features-grid {
            opacity: 1 !important;
            transform: translateY(0) !important;
            visibility: visible !important;
        }

        /* Consultation Form Card */
        .opt-consultation-card {
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(15, 44, 58, 0.1);
        }

        .opt-form-group {
            margin-bottom: 20px;
        }

        .opt-form-control {
            width: 100%;
            padding: 16px;
            border: 1px solid #E2E8F0;
            border-radius: 12px;
            font-family: inherit;
            font-size: 1rem;
            background: #F8FAFC;
        }

        .opt-btn-submit {
            width: 100%;
            background: var(--accent-orange);
            color: white;
            padding: 18px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .opt-btn-submit:hover {
            background: #e06000;
            transform: translateY(-2px);
        }

        /* Hero Feature Grid Styling */
        .opt-hero-features-label {
            font-weight: 700;
            color: white;
            margin: 30px 0 15px;
            display: block;
            font-size: 1.1rem;
        }

        .opt-hero-features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 40px;
        }

        .opt-feature-item-card {
            background: white;
            padding: 20px;
            border-radius: 16px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: 1px solid transparent;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .opt-feature-item-card:hover {
            border-color: var(--accent-orange);
            box-shadow: 0 8px 30px rgba(255, 122, 21, 0.1);
            transform: translateY(-5px);
        }

        .opt-feature-icon-circle {
            width: 45px;
            height: 45px;
            background: #F0F4F7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-dark);
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .opt-feature-text h4 {
            font-size: 1rem;
            margin-bottom: 4px;
            color: var(--primary-dark);
            font-weight: 700;
            font-family: 'Barlow', sans-serif;
        }

        .opt-feature-text p {
            font-size: 0.85rem;
            margin: 0;
            color: var(--text-muted);
            line-height: 1.4;
        }

        /* Types & Signs Styling */
        .opt-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .opt-type-card {
            background: white;
            padding: 35px;
            border-radius: var(--radius-xl);
            border-bottom: 4px solid #E2E8F0;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.02);
        }

        .opt-type-card:hover {
            border-color: var(--accent-orange);
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(15, 44, 58, 0.08);
        }

        .opt-type-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary-dark);
        }

        .opt-type-card p {
            font-size: 1rem;
            margin-bottom: 0;
            color: var(--text-muted);
        }

        .opt-signs-row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 40px;
        }

        .opt-sign-item {
            display: flex;
            gap: 20px;
            background: white;
            padding: 24px;
            border-radius: var(--radius-lg);
            align-items: center;
        }

        .opt-sign-icon {
            width: 60px;
            height: 60px;
            background: var(--bg-warm-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-orange);
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .opt-sign-text h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            font-family: 'Barlow', sans-serif;
            font-weight: 700;
        }

        .opt-sign-text p {
            font-size: 0.95rem;
            margin: 0;
        }

        @media (max-width: 968px) {

            .opt-grid-3,
            .opt-signs-row,
            .opt-hero-features-grid {
                grid-template-columns: 1fr !important;
            }

            .opt-hero-container {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }

            .opt-hero-title {
                font-size: 2.5rem;
            }

            .opt-symptoms-grid {
                grid-template-columns: 1fr;
            }

            .opt-responsive-grid {
                grid-template-columns: 1fr !important;
                gap: 30px !important;
            }

            .opt-mobile-menu-toggle {
                display: flex !important;
                flex-direction: column;
                gap: 5px;
                background: none;
                border: none;
                cursor: pointer;
                padding: 10px;
                z-index: 1001;
            }

            .opt-mobile-menu-toggle span {
                width: 30px;
                height: 3px;
                background-color: var(--primary-dark) !important;
                border-radius: 3px;
                transition: all 0.3s ease;
            }

            .opt-mobile-menu-toggle.opt-active span:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .opt-mobile-menu-toggle.opt-active span:nth-child(2) {
                opacity: 0;
            }

            .opt-mobile-menu-toggle.opt-active span:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }

            .opt-nav-menu {
                position: fixed;
                top: 80px;
                left: 0;
                right: 0;
                background: white;
                max-height: 0;
                overflow: hidden;
                transition: all 0.3s ease;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }

            .opt-nav-menu.opt-active {
                max-height: 100vh;
                padding-bottom: 20px;
            }

            .opt-nav-list {
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
            }

            .opt-nav-item {
                width: 100%;
                text-align: center;
            }

            .opt-dropdown-menu {
                position: static !important;
                opacity: 1 !important;
                visibility: visible !important;
                transform: none !important;
                box-shadow: none !important;
                background: var(--bg-soft) !important;
                display: none;
                width: 100% !important;
            }

            .opt-nav-item.opt-dropdown.opt-active .opt-dropdown-menu {
                display: block;
            }
        }
    </style>
<main>
<!-- Hero Section -->
<section class="opt-hero">
<div class="opt-container opt-hero-container">
<div class="opt-hero-content opt-reveal">
<span class="opt-badge-pill">Specialized Depression Care</span>
<h1 class="opt-hero-title">Depression Treatment in Reading, PA</h1>
<p class="opt-hero-subtitle">If you're feeling stuck in a cycle of persistent sadness and low energy, we offer evidence-based depression treatment in Reading, PA — proudly serving Berks County, West Reading, Wyomissing, Pottstown, Kutztown, Lebanon, and surrounding Pennsylvania communities.</p>
<span class="opt-hero-features-label">Our Core Benefits</span>
<div class="opt-hero-features-grid">
<!-- Card 1 -->
<div class="opt-feature-item-card">
<div class="opt-feature-icon-circle">
<i class="fa-solid fa-notes-medical"></i>
</div>
<div class="opt-feature-text">
<h4>Non-Invasive</h4>
<p>No surgery &amp; No anesthesia</p>
</div>
</div>
<!-- Card 2 -->
<div class="opt-feature-item-card">
<div class="opt-feature-icon-circle">
<i class="fa-solid fa-shield-halved"></i>
</div>
<div class="opt-feature-text">
<h4>FDA Cleared</h4>
<p>Safe &amp; Effective Therapy</p>
</div>
</div>
<!-- Card 3 -->
<div class="opt-feature-item-card">
<div class="opt-feature-icon-circle">
<i class="fa-solid fa-ban"></i>
</div>
<div class="opt-feature-text">
<h4>No Side Effects</h4>
<p>No weight gain or drowsines</p>
</div>
</div>
<!-- Card 4 -->
<div class="opt-feature-item-card">
<div class="opt-feature-icon-circle">
<i class="fa-solid fa-file-invoice-dollar"></i>
</div>
<div class="opt-feature-text">
<h4>Insurance Covered</h4>
<p>Medicare &amp; Major Plans</p>
</div>
</div>
</div>
<div class="opt-hero-actions">
<a class="opt-btn-hero-dark" href="contact" style="margin-right:12px;">Book Your Consultation</a>
<a class="opt-btn opt-btn-contact-orange" href="tel:6107416567" style="text-decoration:none;">Call (610) 741-6567</a>
</div>
</div>
<div class="opt-hero-form opt-reveal">
<div class="opt-consultation-card">
<h3>Start Your Journey</h3>
<p>Speak with our specialists about your path to recovery.</p>
<form accept-charset="UTF-8" action="https://app.formester.com/forms/qYHPZIOTp/submissions" method="POST">
<div class="opt-form-group">
<input class="opt-form-control" name="name" placeholder="Full Name *" required="" type="text"/>
</div>
<div class="opt-form-group">
<input class="opt-form-control" name="phone" placeholder="Phone Number *" required="" type="tel"/>
</div>
<div class="opt-form-group">
<input class="opt-form-control" name="email" placeholder="Email Address" type="email"/>
</div>
<button class="opt-btn-submit" type="submit">Request A Call Back</button>
</form>
</div>
</div>
</div>
</section>
<!-- Section 1: Understanding Depression -->
<section class="opt-section">
<div class="opt-container opt-responsive-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
<div class="opt-reveal">
<img alt="Understanding Depression Journey" decoding="async" src="wp-content/uploads/2026/06/depression-journey_gk42ae.jpg" style="width: 100%; border-radius: 32px; box-shadow: 20px 20px 0px var(--bg-warm-gradient);"/>
</div>
<div class="opt-reveal">
<span class="opt-badge-pill">Clinical Definition</span>
<h2>A Deep Dive into Depression</h2>
<p>Major Depressive Disorder is a serious medical condition that affects how you feel, think, and
                        handle daily activities. It's more than just feeling blue — it's a persistent state that can
                        last for weeks, months, or even years without appropriate care.</p>
<p>At <a href="./" style=" color: blue;">Options Psychiatry</a>, we understand that every experience with depression is different. That's
                        why we focus on identifying the root causes and providing a customized path toward stability and
                        joy.</p>
</div>
</div>
</section>
<!-- SECTION: EARLY SIGNS -->
<section class="opt-section opt-bg-warm">
<div class="opt-container">
<div class="opt-text-center opt-reveal" style="max-width: 800px; margin: 0 auto 40px;">
<span class="opt-badge-pill">Early Detection</span>
<h2>Early Warning Signs of Depression</h2>
<p>Recognizing the subtle shifts in behavior or mood before they become overwhelming can lead to
                        faster recovery and more effective treatment.</p>
</div>
<div class="opt-signs-row">
<div class="opt-sign-item opt-reveal">
<div class="opt-sign-icon"><i class="fa-solid fa-moon"></i></div>
<div class="opt-sign-text">
<h4>Disrupted Sleep</h4>
<p>Harder time falling asleep or sleeping significantly more than usual.</p>
</div>
</div>
<div class="opt-sign-item opt-reveal">
<div class="opt-sign-icon"><i class="fa-solid fa-bolt"></i></div>
<div class="opt-sign-text">
<h4>Increased Irritability</h4>
<p>Feeling "on edge" or snapping at loved ones over minor issues.</p>
</div>
</div>
<div class="opt-sign-item opt-reveal">
<div class="opt-sign-icon"><i class="fa-solid fa-cloud"></i></div>
<div class="opt-sign-text">
<h4>Persistent Brain Fog</h4>
<p>Difficulty making simple decisions or focusing at work or school.</p>
</div>
</div>
<div class="opt-sign-item opt-reveal">
<div class="opt-sign-icon"><i class="fa-solid fa-users-slash"></i></div>
<div class="opt-sign-text">
<h4>Social Withdrawal</h4>
<p>Canceling plans or losing the urge to connect with friends and family.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Section 2: Symptoms -->
<section class="opt-section opt-bg-light">
<div class="opt-container">
<div class="opt-text-center opt-reveal" style="max-width: 800px; margin: 0 auto 40px;">
<span class="opt-badge-pill">Know the Signs</span>
<h2>How Depression Manifests</h2>
</div>
<div class="opt-symptoms-grid">
<div class="opt-symptom-card opt-reveal">
<div class="opt-symptom-icon"><img class="img-fluid" decoding="async" src="wp-content/uploads/2026/06/Emotional_jjyfpk.png" style="width:50px"/>
</div>
<h3>Emotional</h3>
<p>Persistent sadness, feelings of hopelessness, guilt, worthlessness, or loss of interest in
                            once-loved activities.</p>
</div>
<div class="opt-symptom-card opt-reveal" style="transition-delay: 0.1s;">
<div class="opt-symptom-icon"><img class="img-fluid" decoding="async" src="wp-content/uploads/2026/06/physical_psynrx.png" style="width:50px"/>
</div>
<h3>Physical</h3>
<p>Chronic fatigue, changes in appetite or weight, sleep disturbances, and unexplained aches or
                            pains.</p>
</div>
<div class="opt-symptom-card opt-reveal" style="transition-delay: 0.2s;">
<div class="opt-symptom-icon"><i class="fa-solid fa-cloud-sun"></i></div>
<h3>Cognitive</h3>
<p>Difficulty concentrating, memory issues, indecisiveness, and persistent negative thought
                            patterns.</p>
</div>
</div>
</div>
</section>
<section class="opt-cta-contact-strip">
<div bis_skin_checked="1" class="opt-container">
<div bis_skin_checked="1" class="opt-cta-contact-card">
<div bis_skin_checked="1" class="opt-cta-contact-text">
<h3>Could TMS Therapy Help You?</h3>
<p>Take our quick 2-minute quiz to find out if TMS therapy could be the key to your mental
                            wellness journey.</p>
</div>
<div bis_skin_checked="1" class="cta-contact-action">
<a class="opt-btn opt-btn-contact-orange" href="tms-quiz">Take TMS
                            Quiz</a>
</div>
</div>
</div>
</section>
<!-- SECTION: TYPES OF DEPRESSION -->
<section class="opt-section opt-bg-warm">
<div class="opt-container">
<div class="opt-text-center opt-reveal" style="max-width: 800px; margin: 0 auto 40px;">
<span class="opt-badge-pill">Clinical Categories</span>
<h2>Common Types of Depression</h2>
<p>Depression is an umbrella term for several distinct clinical conditions. Identifying the specific
                        type is the first step in building an effective treatment plan.</p>
</div>
<div class="opt-grid-3">
<div class="opt-type-card opt-reveal">
<h3>Major Depressive Disorder (MDD)</h3>
<p>The most common form, characterized by a persistent low mood that interferes with daily life
                            for at least two weeks.</p>
</div>
<div class="opt-type-card opt-reveal" style="transition-delay: 0.1s;">
<h3>Persistent Depressive Disorder</h3>
<p>Also known as Dysthymia, this involves a chronic low-level depression that lasts for two
                            years or more.</p>
</div>
<div class="opt-type-card opt-reveal" style="transition-delay: 0.2s;">
<h3>Postpartum Depression</h3>
<p>A severe form of depression that occurs after childbirth, affecting mood, energy, and bonding
                            with the baby.</p>
</div>
<div class="opt-type-card opt-reveal" style="transition-delay: 0.3s;">
<h3>Seasonal Affective Disorder (SAD)</h3>
<p>Depression that occurs at the same time each year, usually during the dark winter months.</p>
</div>
<a href="bipolar-disorder">
<div class="opt-type-card opt-reveal" style="transition-delay: 0.4s;">
<h3>Bipolar Disorder</h3>
<p>Involves periods of intense lows (depression) alternating with periods of intense highs
                            (mania).</p>
</div></a>
<div class="opt-type-card opt-reveal" style="transition-delay: 0.5s;">
<h3>Psychotic Depression</h3>
<p>Severe depression accompanied by some form of psychosis, such as hallucinations or
                            delusions.</p>
</div>
</div>
</div>
</section>
<!-- Section 3: Advanced Solutions -->
<section class="opt-section" id="treatment">
<div class="opt-container opt-responsive-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 60px; align-items: center;">
<div class="opt-reveal">
<span class="opt-badge-pill">Innovative Solutions</span>
<h2>Tailored Treatment Protocols</h2>
<p>We believe in a holistic strategy for overcoming depression. Our clinic specializes in both
                        standard psychiatric care and evidence-based treatment approaches.</p>
<p>From <a href="tms-therapy-reading" style="color: blue;">TMS Therapy (Transcranial Magnetic Stimulation)</a>, a non-invasive, medication-free approach
                        FDA-cleared for depression, to precise <a href="medication-management-options" style="color: blue;">Medication Management</a>, we ensure you have access to
                        the highest standard of care.</p>
<ul style="list-style: none; margin-top: 30px; display: flex; flex-direction: column; gap: 15px;">
<li style="display: flex; gap: 15px; align-items: center;">
<i class="fa-solid fa-circle-check" style="color: var(--accent-orange);"></i>
<span>Comprehensive physical and mental health evaluations</span>
</li>
<li style="display: flex; gap: 15px; align-items: center;">
<i class="fa-solid fa-circle-check" style="color: var(--accent-orange);"></i>
<span>Medication adjustments with focus on minimizing side effects</span>
</li>
<li style="display: flex; gap: 15px; align-items: center;">
<i class="fa-solid fa-circle-check" style="color: var(--accent-orange);"></i>
<span>Advanced TMS Therapy for treatment-resistant depression</span>
</li>
</ul>
<div style="margin-top: 40px;">
<a class="opt-btn-hero-dark" href="contact">Start Your Treatment
                            Plan</a>
</div>
</div>
<div class="opt-reveal">
<img alt="Depression Recovery Solutions" decoding="async" src="wp-content/uploads/2026/06/gallery-6_xyqkws.webp" style="width: 100%; border-radius: 32px; box-shadow: -20px 20px 50px rgba(0,0,0,0.15);"/>
</div>
</div>
</section>
<!-- FAQ Section -->
<!-- Location & Related Services Section - Options Psychiatry Depression -->
<section class="opt-section opt-bg-white" style="padding:60px 0;">
<div class="opt-container">
<div style="text-align:center;margin-bottom:40px;">
<span class="opt-section-label">Serving Pennsylvania</span>
<h2 style="margin-bottom:15px;">Depression Treatment Near You in Berks County, PA</h2>
<p style="max-width:700px;margin:0 auto 30px;">Options Psychiatry is conveniently located in Reading, PA and provides expert psychiatrist services for depression across Berks County and beyond — including West Reading, Wyomissing, Pottstown, Kutztown, Lebanon, Fleetwood, Boyertown, Phoenixville, Norristown, and throughout southeastern Pennsylvania. Telehealth options are also available for patients across the state.</p>
<a class="opt-btn-hero-dark" href="contact" style="margin-right:15px;">Schedule Your Free Consultation</a>
<a class="opt-btn opt-btn-contact-orange" href="tel:6107416567" style="text-decoration:none;margin-right:15px;">Call (610) 741-6567 Now</a>
<a class="opt-btn opt-btn-contact-orange" href="tms-therapy-reading" style="text-decoration:none;">Explore TMS Therapy</a>
</div>
<div style="background:#f0f4f8;border-radius:12px;padding:30px;margin-top:30px;">
<h3 style="margin-bottom:20px;text-align:center;">Related Mental Health Conditions We Treat</h3>
<p style="text-align:center;margin-bottom:25px;">Depression often co-occurs with other mental health conditions. Our experienced Reading, PA psychiatrists provide comprehensive care for a range of conditions:</p>
<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;">
<a href="anxiety" style="display:block;padding:18px;background:white;border-radius:8px;text-decoration:none;color:#0F2C3A;border:1px solid #e0e0e0;text-align:center;font-weight:600;transition:box-shadow 0.2s;">Anxiety Disorders Treatment →</a>
<a href="ptsd" style="display:block;padding:18px;background:white;border-radius:8px;text-decoration:none;color:#0F2C3A;border:1px solid #e0e0e0;text-align:center;font-weight:600;">PTSD &amp; Trauma Treatment →</a>
<a href="ocd" style="display:block;padding:18px;background:white;border-radius:8px;text-decoration:none;color:#0F2C3A;border:1px solid #e0e0e0;text-align:center;font-weight:600;">OCD Treatment →</a>
<a href="bipolar-disorder" style="display:block;padding:18px;background:white;border-radius:8px;text-decoration:none;color:#0F2C3A;border:1px solid #e0e0e0;text-align:center;font-weight:600;">Bipolar Disorder Treatment →</a>
<a href="adhd" style="display:block;padding:18px;background:white;border-radius:8px;text-decoration:none;color:#0F2C3A;border:1px solid #e0e0e0;text-align:center;font-weight:600;">ADHD Treatment →</a>
<a href="medication-management-options" style="display:block;padding:18px;background:white;border-radius:8px;text-decoration:none;color:#0F2C3A;border:1px solid #e0e0e0;text-align:center;font-weight:600;">Medication Management →</a>
</div>
</div>
</div>
</section>
<section class="opt-section-faq opt-bg-light" id="faq">
<div class="opt-container">
<div class="opt-text-center opt-reveal" style="max-width: 800px; margin: 0 auto 40px;">
<span class="opt-badge-pill">Questions &amp; Answers</span>
<h2>Depression Care FAQ</h2>
</div>
<div class="opt-faq-accordion opt-reveal">
<div class="opt-faq-item">
<button class="opt-faq-question">
<span>What are the first signs of depression?</span>
<span class="opt-faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
</button>
<div class="opt-faq-answer">
<p>Early signs of depression may include persistent sadness, fatigue, loss of interest in activities, sleep problems, and difficulty concentrating. If these symptoms continue for more than two weeks, a psychiatrist can help evaluate and provide appropriate depression treatment in Reading PA.</p>
</div>
</div>
<div class="opt-faq-item">
<button class="opt-faq-question">
<span>How does therapy help in the treatment of depression?</span>
<span class="opt-faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
</button>
<div class="opt-faq-answer">
<p>Therapy helps individuals understand negative thought patterns, develop coping strategies, and improve emotional health. Many people combine therapy with medication or TMS for depression for better results. A <a href="./" style="color: blue;">psychiatrist in Reading PA</a> can recommend the right approach for effective depression treatment in Reading PA.</p>
</div>
</div>
<div class="opt-faq-item">
<button class="opt-faq-question">
<span>Is depression a disability?</span>
<span class="opt-faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
</button>
<div class="opt-faq-answer">
<p>Depression can be considered a disability when it significantly affects a person’s ability to work or perform daily activities. Seeking professional depression treatment in Reading PA from a qualified psychiatrist can help manage symptoms and improve quality of life.</p>
</div>
</div>
<div class="opt-faq-item">
<button class="opt-faq-question">
<span>How long does TMS last for depression?</span>
<span class="opt-faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
</button>
<div class="opt-faq-answer">
<p>Results from TMS for depression can last several months to a year for many patients. Some individuals may benefit from maintenance sessions to sustain results. If you are looking for TMS therapy near you, a consultation with a psychiatrist can help determine if it’s right for you.</p>
</div>
</div>
<div class="opt-faq-item">
<button class="opt-faq-question">
<span>Can depression cause memory loss?</span>
<span class="opt-faq-toggle"><i class="fa-solid fa-chevron-down"></i></span>
</button>
<div class="opt-faq-answer">
<p>Yes, depression can affect memory, focus, and concentration. Treating depression through therapy, medication, or TMS for depression may help improve cognitive function. Clinics offering <a href="tms-therapy-reading" style="color: blue;">TMS Therapy in Reading PA</a> often treat patients whose symptoms do not improve with medication alone.</p>
</div>
</div>
</div>
</div>
</section>
</main>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            // Local Reveal Logic
            const revealElements = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

            revealElements.forEach(el => revealObserver.observe(el));

            // Hero immediate reveal
            document.querySelectorAll('.hero .reveal').forEach(el => el.classList.add('active'));

            // Mobile Menu Toggle
            const menuToggle = document.querySelector('.mobile-menu-toggle');
            const navMenu = document.querySelector('.nav-menu');

            if (menuToggle && navMenu) {
                // Mark as initialized to prevent animations.js from adding duplicate listeners
                menuToggle.setAttribute('data-menu-initialized', 'true');

                menuToggle.addEventListener('click', function () {
                    navMenu.classList.toggle('active');
                    this.classList.toggle('active');
                });
            }

            // Handle Dropdowns in Mobile
            document.querySelectorAll('.nav-item.dropdown > a').forEach(dropdownToggle => {
                dropdownToggle.addEventListener('click', function (e) {
                    if (window.innerWidth <= 968) {
                        e.preventDefault();
                        const parent = this.parentElement;
                        parent.classList.toggle('active');
                    }
                });
            });


        });
    </script> </div>
</div>
</div>
<span class="tve-leads-two-step-trigger tl-2step-trigger-0"></span><span class="tve-leads-two-step-trigger tl-2step-trigger-0"></span>
<?php include __DIR__ . '/includes/footer.php'; ?>
</div><!-- #page -->
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/thrive-theme/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<div style="display: none;">
<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
<defs>
<symbol id="tcm-reply" viewbox="0 0 100 100">
<g>
<path d="M69.9,38.1L69.9,38.1c-1.5-3.7-4.7-6.4-7.4-9.2c-2.8-2.8-6.3-4.7-9.9-6.3c-3.7-1.6-7.7-2.4-11.7-2.4h-11
					l4.7-4.8c3.4-3.4,3.4-9,0-12.4c-3.4-3.4-8.9-3.4-12.2,0L2.8,22.7c-3.4,3.4-3.4,9,0,12.4l19.4,19.7c1.7,1.7,3.9,2.6,6.1,2.6
					c2.2,0,4.4-0.9,6.1-2.6c3.4-3.4,3.4-9,0-12.4l-4.6-4.6h10.9c3.4,0,6.6,1.4,9.1,3.8l4.8,4.8c1.2,2,3,3.4,5.1,4.1
					c2.1,0.6,4.5,0.4,6.6-0.7C70.5,47.5,72,42.3,69.9,38.1z"></path>
<ellipse cx="81.1" cy="60.8" rx="8.5" ry="8.6"></ellipse>
</g>
</symbol>
<symbol id="tcm-icon-thumb_down" viewbox="0 0 24 24">
<g>
<path d="M18.984 3h4.031v12h-4.031v-12zM15 3c1.078 0 2.016 0.938 2.016 2.016v9.984c0 0.563-0.234 1.031-0.609
			1.406l-6.563 6.609-1.078-1.078c-0.281-0.281-0.422-0.609-0.422-1.031v-0.328l0.984-4.594h-6.328c-1.078 0-2.016-0.891-2.016-1.969l0.047-0.094h-0.047v-1.922c0-0.281
			0.047-0.516 0.141-0.75l3.047-7.031c0.281-0.703 0.984-1.219 1.828-1.219h9z"></path>
</g>
</symbol>
<symbol id="tcm-icon-thumb_up" viewbox="0 0 24 24">
<g>
<path d="M23.016 9.984l-0.047 0.094h0.047v1.922c0 0.281-0.047 0.516-0.141 0.75l-3.047 7.031c-0.281 0.703-0.984
			1.219-1.828 1.219h-9c-1.078 0-2.016-0.938-2.016-2.016v-9.984c0-0.563 0.234-1.031 0.609-1.406l6.563-6.609 1.078
			1.078c0.281 0.281 0.422 0.609 0.422 1.031v0.328l-0.984 4.594h6.328c1.078 0 2.016 0.891 2.016 1.969zM0.984 21v-12h4.031v12h-4.031z"></path>
</g>&gt;

	</symbol>
<symbol id="tcm-add-comment" viewbox="0 0 267.3 245">
<path class="st0" d="M265.7,61C259.6,27.5,230.3,2,195.1,2H72.5C33,2,0.8,34.2,0.8,73.8v77c0,0.1,0,0.1,0,0.2v81.6
			c0,0-1.8,11.1,9.7,11.1c0,0,4.2,1,13.1-4.6l46.8-43.2h124.6c39.5,0,71.7-32.2,71.7-71.7V83.8L265.7,61z M78.4,114
			c-8.1,0-14.6-6.5-14.6-14.6c0-8.1,6.5-14.6,14.6-14.6S93,91.4,93,99.5C93,107.5,86.5,114,78.4,114z M137.5,114
			c-8.1,0-14.6-6.5-14.6-14.6c0-8.1,6.5-14.6,14.6-14.6c8.1,0,14.6,6.5,14.6,14.6C152.1,107.5,145.5,114,137.5,114z M196.5,114
			c-8.1,0-14.6-6.5-14.6-14.6c0-8.1,6.5-14.6,14.6-14.6c8.1,0,14.6,6.5,14.6,14.6C211.1,107.5,204.6,114,196.5,114z" style="fill:#FFFFFF;"></path>
</symbol>
<symbol id="tcm-logo-footer" viewbox="0 0 130 100">
<path class="st0" d="M108.8,26.5C106.7,14.9,96.5,6.1,84.4,6.1H41.9C28.2,6.1,17,17.2,17,30.9v26.7c0,0,0,0,0,0.1v28.2
			c0,0-0.6,3.8,3.4,3.8c0,0,1.5,0.4,4.6-1.6l16.2-14.9h12.1c0.1-0.2,0.3-0.4,0.4-0.6l2.2-3.1c0.4-0.6,1.9-2.3,3.1-3.6H37.6
			c-1.1,0-2.1,0.6-2.8,1.4l0,0L24.1,78.6V58.2c0-0.2,0.1-0.4,0.1-0.6V30.9c0-9.7,7.9-17.6,17.6-17.6h42.5c9.7,0,17.6,7.9,17.6,17.6
			v16.9c2.6-0.4,5.3-0.6,7.2-0.7V34.4L108.8,26.5z" style="fill:#434343;"></path>
<path class="st1" d="M43.7,39.9c-3.3,0-6-2.7-6-6c0-3.3,2.7-6,6-6h38.9c3.3,0,6,2.7,6,6c0,3.3-2.7,6-6,6H43.7z" style="fill:#57A245;"></path>
<path class="st0" d="M43.7,52.2h38.9c2.4,0,4.3-1.9,4.3-4.3s-1.9-4.3-4.3-4.3H43.7c-2.4,0-4.3,1.9-4.3,4.3S41.3,52.2,43.7,52.2" style="fill:#434343;"></path>
<path class="st2" d="M118.2,52.4c-1.2,0-1.6,0.2-2.4,0.5c-0.9,0.3-1.9,1-2.6,1.7l-1.8,1.7c-0.2,0.2-0.2,0.2-0.3,0.4
			c-3.4,4.2-4.1,4.9-6.8,10.2c-1.2,2.5-2.7,4.8-4.2,7.1c-1,1.6-2,3.2-3.2,4.6c-0.1,0.2-0.2,0.2-0.3,0.4c-0.7,0.9-1.7,1.7-2.5,2.5
			c-0.6,0.5-1.3,1-1.9,1.5c-0.6,0.4-1.1,0.8-1.7,1.1l-0.9,0.5c-0.2,0.1-0.3,0.2-0.5,0.3c-0.1,0-0.3,0.2-0.4,0.2
			c-0.2,0.1-0.4,0.2-0.5,0.2c-3.7,1.8-8.5,3-12.7,3.4L72.7,89c-0.8,0.1-2.8,0.2-4.7,0.2c-1.6,0-3,0-3.5-0.2l0.3-0.7
			c0.6-1.4,1.3-2.8,2.1-4.1c0.1-0.2,0.2-0.4,0.4-0.6l1.5-2.6l3.9-5.3l3.5-3.6l0.2-0.2c0.2-0.1,0.2-0.1,0.3-0.2l0.8-0.7
			c0.1-0.1,0.2-0.1,0.3-0.2c0.2-0.2,0.3-0.3,0.5-0.4l3.7-2.5c1.3-0.8,2.6-1.6,3.8-2.3l4-2.1c1.5-0.8,4-2.1,5.5-2.7l4.1-1.9
			c-0.6,0.1-1.4,0.4-1.9,0.6c-0.6,0.2-1.3,0.4-1.9,0.6l-3.8,1.3c-1.8,0.6-3.6,1.4-5.5,2.1l-3.5,1.5c-1.3,0.5-3.3,1.6-4.7,2.3
			c-1.5,0.8-2.9,1.8-4.3,2.6l-4.8,3.4c-0.1,0.1-0.2,0.2-0.4,0.3l-2.7,2.3c-0.8,0.8-1.8,1.7-2.5,2.5c-0.2,0.2-0.2,0.2-0.3,0.4
			c-0.7,0.7-1.3,1.6-1.9,2.4c-0.9,1.2-1.8,2.5-2.5,3.8l-1.3,2.5c-0.5,1-2.7,6-2.8,7.4h-0.2c0-0.2-0.5-2.5-0.7-4.4v-1.6
			c0-0.1,0-0.1,0-0.2c0.2-1.1,0.1-1.8,0.3-3.1c0.6-3.6,2.2-7.4,4.2-10.4l2.1-3c0.6-0.8,2.8-3.4,3.5-3.8c0.6-0.5,1.2-1.3,1.9-1.8
			c0.3-0.2,0.6-0.5,0.9-0.8c0.4-0.2,0.6-0.5,1-0.8l2-1.5c2-1.5,4.2-2.8,6.4-3.8c2.4-1.2,4.7-2.1,7.2-3.1c3.2-1.3,7.6-2.2,10.9-2.9
			c3.5-0.7,12.3-2.3,16.6-2.3h0.9C114,51.2,117.4,51.2,118.2,52.4z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#57A245;"></path>
<path class="st3" d="M99.5,58.5c0.4,0,0.2,0,0.2-0.1C99.4,58.4,99.6,58.4,99.5,58.5z M99.5,58.5c0.1-0.1-0.1-0.1,0.2-0.1
			C99.7,58.5,99.9,58.5,99.5,58.5 M99.9,58.3l-0.1,0.1 M99.5,58.5c-0.6,0.1-1.4,0.4-1.9,0.6c-0.6,0.2-1.3,0.4-1.9,0.6l-3.8,1.3
			c-1.8,0.6-3.6,1.4-5.5,2.1l-3.5,1.5c-1.3,0.5-3.3,1.6-4.7,2.3c-1.5,0.8-2.9,1.8-4.3,2.6l-4.8,3.4c-0.1,0.1-0.2,0.2-0.4,0.3l-2.7,2.3
			c-0.8,0.8-1.8,1.7-2.5,2.5c-0.2,0.2-0.2,0.2-0.3,0.4c-0.7,0.7-1.3,1.6-1.9,2.4c-0.9,1.2-1.8,2.5-2.5,3.8l-1.3,2.5
			c-0.5,1-2.7,6-2.8,7.4h-0.2c0-0.2-0.5-2.5-0.7-4.4v-1.6c0-0.1,0-0.1,0-0.2c0.2-1.1,0.1-1.8,0.3-3.1c0.6-3.6,2.2-7.4,4.2-10.4l2.1-3
			c0.6-0.8,2.8-3.4,3.5-3.8c0.6-0.5,1.2-1.3,1.9-1.8c0.3-0.2,0.6-0.5,0.9-0.8c0.4-0.2,0.6-0.5,1-0.8l2-1.5c2-1.5,4.2-2.8,6.4-3.8
			c2.4-1.2,4.7-2.1,7.2-3.1c3.2-1.3,7.6-2.2,10.9-2.9c3.5-0.7,12.3-2.3,16.6-2.3h0h0.2h0.6c2.2,0,5.6,0.1,6.4,1.3
			c-1.2,0-1.6,0.2-2.4,0.5c-0.9,0.3-1.9,1-2.6,1.7l-1.8,1.7c-0.2,0.2-0.2,0.2-0.3,0.4c-3.4,4.2-4.1,4.9-6.8,10.2
			c-1.2,2.5-2.7,4.8-4.2,7.1c-1,1.6-2,3.2-3.2,4.6c-0.1,0.2-0.2,0.2-0.3,0.4c-0.7,0.9-1.7,1.7-2.5,2.5c-0.6,0.5-1.3,1-1.9,1.5
			c-0.6,0.4-1.1,0.8-1.7,1.1l-0.9,0.5c-0.2,0.1-0.3,0.2-0.5,0.3c-0.1,0-0.3,0.2-0.4,0.2c-0.2,0.1-0.4,0.2-0.5,0.2
			c-3.7,1.8-8.5,3-12.7,3.4L72.7,89c-0.8,0.1-2.8,0.2-4.7,0.2c-1.6,0-3,0-3.5-0.2l0.3-0.7c0.6-1.4,1.3-2.8,2.1-4.1
			c0.1-0.2,0.2-0.4,0.4-0.6l1.5-2.6l3.9-5.3l3.5-3.6c0.1-0.1,0.2-0.2,0.2-0.2c0.2-0.1,0.2-0.1,0.3-0.2l0.8-0.7
			c0.1-0.1,0.2-0.1,0.3-0.2c0.2-0.2,0.3-0.3,0.5-0.4l3.7-2.5c1.3-0.8,2.6-1.6,3.8-2.3l4-2.1c1.5-0.8,4-2.1,5.5-2.7L99.5,58.5" style="fill:none;"></path>
</symbol>
<symbol id="tcm-related-posts-arrow" viewbox="0 0 16 16">
<path class="st0" d="M8,15.9c-4.4,0-7.9-3.5-7.9-7.9S3.6,0.1,8,0.1s7.9,3.5,7.9,7.9S12.4,15.9,8,15.9z M8,2.4C4.9,2.4,2.4,4.9,2.4,8
			s2.5,5.6,5.6,5.6s5.6-2.5,5.6-5.6S11.1,2.4,8,2.4z M11.9,8.3l-3.3,3.3c-0.1,0.1-0.2,0.1-0.2,0.1c-0.2,0-0.3-0.2-0.3-0.3v-2H4.4
			C4.2,9.3,4.1,9.2,4.1,9V7c0-0.2,0.2-0.3,0.3-0.3H8v-2c0-0.2,0.1-0.3,0.3-0.3c0.1,0,0.2,0,0.2,0.1l3.3,3.3C11.9,7.9,12,7.9,12,8
			S11.9,8.2,11.9,8.3z"></path>
</symbol>
<symbol id="tcm-sort-by-dropdown" viewbox="0 0 12 7">
<path class="st0" d="M0.3,1.5l5.2,5.2c0,0,0.5,0.5,1.1,0l5.2-5.2c0,0,0.4-0.4,0.2-0.9c0,0-0.1-0.4-0.7-0.4H0.8c0,0-0.5,0-0.7,0.4
			C0.1,0.5-0.2,1,0.3,1.5z" style="fill:#6E767D;"></path>
</symbol>
<symbol id="tcm-author-icon" viewbox="0 0 1020 1080">
<polygon class="st0" points="44.5,882.9 251.4,1081 251.4,889.8 " style="fill:#474F57"></polygon>
<path class="st1" d="M937.8,891.8H81.2c-44.3,0-80.6-36.3-80.6-80.6V82.7c0-44.3,36.3-80.6,80.6-80.6h856.6
			c44.3,0,80.6,36.3,80.6,80.6v728.5C1018.4,855.5,982.1,891.8,937.8,891.8z" style="fill:#6E767D"></path>
<g>
<path class="st2" d="M732,688.3c-0.5,0.1-2.7,0.5-6.3,1.1c-142.4,25.4-168.6,29.8-171.6,30.1c-7,0.8-12.3,0.4-16-1.3
				c-2.4-1-3.6-2.3-4-2.8c0.2-1,1.4-3.3,2.2-4.7c0.7-1.4,1.6-3,2.3-4.6c4.9-11.1,1.5-22.4-8.9-29.5c-7.8-5.3-18.1-7.4-30.6-6.3
				c-7.5,0.6-138.9,22.6-211.1,34.7l-35.4,27.7c82.6-13.9,240.1-40.2,248.4-41c7.4-0.6,13.2,0.3,16.7,2.7c2,1.4,1.8,1.8,1.3,3.1
				c-0.4,0.9-1,2-1.6,3.2c-2.4,4.4-5.6,10.5-4.5,18c1.2,8.2,7.3,15.3,16.7,19.4c5.3,2.3,11.4,3.5,18.4,3.5c2.8,0,5.7-0.2,8.8-0.5
				c5.7-0.7,63.8-10.9,172.9-30.3c3.6-0.6,5.8-1,6.3-1.1c5.9-1,9.8-6.6,8.7-12.5C743.4,691.2,737.8,687.3,732,688.3L732,688.3z
				 M732,688.3" style="fill:#6E767D"></path>
<path class="st2" d="M349.8,583.9l-91.7,95.5c-10.1,10.5-17.2,23.5-20.6,37.7l130.2-102c40.8,18,73.3,23.7,98.3,23.7
				c43.8,0,64.2-17.7,64.2-17.7c-40.8-21.2-46.6-60.6-46.6-60.6c31.3,13.2,96.4,28.7,96.4,28.7c86.5-57.5,131.7-181.9,131.7-181.9
				c-9,2.5-17.5,3.5-25.6,3.5c-40.6,0-68.5-25.9-68.5-25.9l113-24.5c37.6-76.7,41.2-211.1,41.2-211.1L428.2,453.5
				C389.2,487.9,361.9,533.4,349.8,583.9L349.8,583.9z M349.8,583.9" style="fill:#FFFFFF"></path>
</g>
</symbol>
<symbol id="tcm-bulk-action-arrow" viewbox="0 0 12 7">
<path class="st0" d="M0.3,1.5l5.2,5.2c0,0,0.5,0.5,1.1,0l5.2-5.2c0,0,0.4-0.4,0.2-0.9c0,0-0.1-0.4-0.7-0.4H0.8c0,0-0.5,0-0.7,0.4
			C0.1,0.5-0.2,1,0.3,1.5z" style="fill:#6E767D"></path>
</symbol>
</defs>
</svg>
</div><script type="text/javascript">( $ => {
	/**
	 * Displays toast message from storage, it is used when the user is redirected after login
	 */
	if ( window.sessionStorage ) {
		$( window ).on( 'tcb_after_dom_ready', () => {
			const message = sessionStorage.getItem( 'tcb_toast_message' );

			if ( message ) {
				tcbToast( sessionStorage.getItem( 'tcb_toast_message' ), false );
				sessionStorage.removeItem( 'tcb_toast_message' );
			}
		} );
	}

	/**
	 * Displays toast message
	 *
	 * @param {string}   message  - message to display
	 * @param {Boolean}  error    - whether the message is an error or not
	 * @param {Function} callback - callback function to be called after the message is closed
	 */
	function tcbToast( message, error, callback ) {
		/* Also allow "message" objects */
		if ( typeof message !== 'string' ) {
			message = message.message || message.error || message.success;
		}
		if ( ! error ) {
			error = false;
		}
		TCB_Front.notificationElement.toggle( message, error ? 'error' : 'success', callback );
	}
} )( typeof ThriveGlobal === 'undefined' ? jQuery : ThriveGlobal.$j );
</script><style id="tve_notification_styles" type="text/css"></style>
<div class="tvd-toast tve-fe-message" style="display: none">
<div class="tve-toast-message tve-success-message">
<div class="tve-toast-icon-container">
<span class="tve_tick thrv-svg-icon"></span>
</div>
<div class="tve-toast-message-container"></div>
</div>
</div> <script>
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
<script id="kk-star-ratings-js-extra" type="text/javascript">
/* <![CDATA[ */
var kk_star_ratings = {"action":"kk-star-ratings","endpoint":"https://optionspa.com/wp-admin/admin-ajax.php","nonce":"5a73145632"};
//# sourceURL=kk-star-ratings-js-extra
/* ]]> */
</script>
<script id="kk-star-ratings-js" src="wp-content/plugins/kk-star-ratings/src/core/public/js/kk-star-ratings.min__qf503e290.js" type="text/javascript"></script>
<script id="wpblog-post-layouts-elements-scripts-js" src="wp-content/plugins/wp-blog-post-layouts/includes/assets/js/elementor-frontend__q8daf52c7.js" type="text/javascript"></script>
<script id="elementor-webpack-runtime-js" src="wp-content/plugins/elementor/assets/js/webpack.runtime.min__q5be56f11.js" type="text/javascript"></script>
<script id="elementor-frontend-modules-js" src="wp-content/plugins/elementor/assets/js/frontend-modules.min__q5be56f11.js" type="text/javascript"></script>
<script id="elementor-frontend-js-before" type="text/javascript">
/* <![CDATA[ */
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":false},"version":"3.35.3","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"e_optimized_markup":true,"e_pro_free_trial_popup":true,"nested-elements":true,"home_screen":true,"global_classes_should_enforce_capabilities":true,"e_variables":true,"cloud-library":true,"e_opt_in_v4_page":true,"e_components":true,"e_interactions":true,"e_editor_one":true,"import-export-customization":true},"urls":{"assets":"https:\/\/optionspa.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/optionspa.com\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/optionspa.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"7448d0d352"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":4816,"title":"Depression%20Treatment%20in%20Reading%2C%20PA%20%7C%20Psychiatrist%20for%20Depression%20-%20Options%20Psychiatry","excerpt":"","featuredImage":false}};
//# sourceURL=elementor-frontend-js-before
/* ]]> */
</script>
<script id="elementor-frontend-js" src="wp-content/plugins/elementor/assets/js/frontend.min__q5be56f11.js" type="text/javascript"></script>
<script id="wpblog-post-layouts-public-script-js" src="wp-content/plugins/wp-blog-post-layouts/includes/assets/js/frontend__q8daf52c7.js" type="text/javascript"></script>
<script id="tve-dash-frontend-js-extra" type="text/javascript">
/* <![CDATA[ */
var tve_dash_front = {"ajaxurl":"https://optionspa.com/wp-admin/admin-ajax.php","force_ajax_send":"1","is_crawler":"","recaptcha":[],"turnstile":[],"post_id":"4816"};
//# sourceURL=tve-dash-frontend-js-extra
/* ]]> */
</script>
<script id="tve-dash-frontend-js" src="wp-content/plugins/thrive-ultimatum/thrive-dashboard/js/dist/frontend.min__qe79741bf.js" type="text/javascript"></script>
<script id="tve_frontend_menu-js" src="wp-content/plugins/thrive-ultimatum/tcb/editor/js/dist/modules/menu.min__q011b470d.js" type="text/javascript"></script>
<script id="tve_frontend_social-share-js" src="wp-content/plugins/thrive-ultimatum/tcb/editor/js/dist/modules/social-share.min__q011b470d.js" type="text/javascript"></script>
<script type="text/javascript">var tcb_current_post_lists=JSON.parse('[]'); var tcb_post_lists=tcb_post_lists?[...tcb_post_lists,...tcb_current_post_lists]:tcb_current_post_lists;</script><script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"/wp-includes/js/wp-emoji-release.min__q98f937dc.js"}}
</script>
<script type="module">
/* <![CDATA[ */
/*! This file is auto-generated */
var e="script#wp-emoji-settings",t=document.querySelector(e);if(!(t instanceof HTMLScriptElement))throw new Error("Element missing: "+e);const r=JSON.parse(t.text),s=(window._wpemojiSettings=r,"wpEmojiSettingsSupports"),o=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(s,JSON.stringify(t))}catch(e){}}function c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const r=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return t.every((e,t)=>e===r[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e<n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,r){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!r(e,"\ud83e\u1fac8")}return!1}function f(e,t,n,r){let a;const s=(a="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement("canvas")).getContext("2d",{willReadFrequently:!0}),o=(s.textBaseline="top",s.font="600 32px Arial",{});return e.forEach(e=>{o[e]=t(s,e,n,r)}),o}function a(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}r.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(s));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(o),u.toString(),c.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"});const a=new Worker(URL.createObjecturl(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=e=>{i(n=e.data),a.terminate(),t(n)})}catch(e){}i(n=f(o,u,c,p))}t(n)}).then(e=>{for(const n in e)r.supports[n]=e[n],r.supports.everything=r.supports.everything&&r.supports[n],"flag"!==n&&(r.supports.everythingExceptFlag=r.supports.everythingExceptFlag&&r.supports[n]);var t;r.supports.everythingExceptFlag=r.supports.everythingExceptFlag&&!r.supports.flag,r.supports.everything||((t=r.source||{}).concatemoji?a(t.concatemoji):t.wpemoji&&t.twemoji&&(a(t.twemoji),a(t.wpemoji)))});
//# sourceURL=/wp-includes/js/wp-emoji-loader.min.js
/* ]]> */
</script>
<script type="text/javascript">/*<![CDATA[*/if ( !window.TL_Const ) {var TL_Const={"security":"ea42a27cef","ajax_url":"https:\/\/optionspa.com\/wp-admin\/admin-ajax.php","forms":[],"action_conversion":"tve_leads_ajax_conversion","action_impression":"tve_leads_ajax_impression","ajax_load":0,"custom_post_data":[],"current_screen":{"screen_type":3,"screen_id":4816},"ignored_fields":["email","_captcha_size","_captcha_theme","_captcha_type","_submit_option","_use_captcha","g-recaptcha-response","__tcb_lg_fc","__tcb_lg_msg","_state","_form_type","_error_message_option","_back_url","_submit_option","url","_asset_group","_asset_option","mailchimp_optin","tcb_token","tve_labels","tve_mapping","_api_custom_fields","_sendParams","_autofill"]};} else { window.TL_Front && TL_Front.extendConst && TL_Front.extendConst({"security":"ea42a27cef","ajax_url":"https:\/\/optionspa.com\/wp-admin\/admin-ajax.php","forms":[],"action_conversion":"tve_leads_ajax_conversion","action_impression":"tve_leads_ajax_impression","ajax_load":0,"custom_post_data":[],"current_screen":{"screen_type":3,"screen_id":4816},"ignored_fields":["email","_captcha_size","_captcha_theme","_captcha_type","_submit_option","_use_captcha","g-recaptcha-response","__tcb_lg_fc","__tcb_lg_msg","_state","_form_type","_error_message_option","_back_url","_submit_option","url","_asset_group","_asset_option","mailchimp_optin","tcb_token","tve_labels","tve_mapping","_api_custom_fields","_sendParams","_autofill"]})} /*]]> */</script><div></div><!-- start Simple Custom CSS and JS -->
<!-- Add HTML code to the header or the footer.

For example, you can use the following code for loading the jQuery library from Google CDN:
<script src="assets-ext/ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

or the following one for loading the Bootstrap library from jsDelivr:
<link rel="stylesheet" href="assets-ext/cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

-- End of the comment -->
<script>
	
function addScrollAnimations() {
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('aos-animate');
            }
        });
    }, observerOptions);

    // Add animation classes to elements
    const animateElements = document.querySelectorAll(`
        .opt-section-tms-intro,
        .opt-section-conditions,
        .opt-section-process,
        .opt-section-why-choose,
        .opt-section-testimonials,
        .opt-section-faq,
        .opt-process-card,
        .opt-why-card,
        .stat-card,
        .opt-doctor-profile-wrapper,
        .opt-credential-badge,
        .opt-testimonial-card,
        .opt-faq-item
    `);

    animateElements.forEach((el, index) => {
        // If already has active class, don't hide it
        if (el.classList.contains('opt-active')) {
            el.classList.add('aos-animate');
            return;
        }
        // el.style.opacity = '0';
        // el.style.transform = 'translateY(30px)';
        el.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
        observer.observe(el);
    });
}

// Add animation trigger class
const style = document.createElement('style');
style.textContent = `
    .aos-animate {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
`;
document.head.appendChild(style);

// ============================================
// 2. ENHANCED BUTTON RIPPLE EFFECT
// ============================================
function addRippleEffect() {
    const buttons = document.querySelectorAll('.opt-btn, .opt-btn-primary, .opt-btn-submit, .opt-condition-tab');

    buttons.forEach(button => {
        button.addEventListener('click', function (e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');

            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });
    });
}

// Ripple CSS
const rippleStyle = document.createElement('style');
rippleStyle.textContent = `
    .opt-btn, .opt-btn-primary, .opt-btn-submit, .opt-condition-tab {
        position: relative;
        overflow: hidden;
    }
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: rippleEffect 0.6s ease-out;
        pointer-events: none;
    }
    @keyframes rippleEffect {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(rippleStyle);

// ============================================
// 3. PARALLAX EFFECT FOR HERO SECTION
// ============================================
function addParallaxEffect() {
    const hero = document.querySelector('.opt-hero-section');
    if (!hero) return;

    window.addEventListener('scroll', () => {
        const scroll = window.pageYOffset;
        hero.style.transform = `translateY(${scroll * 0.5}px)`;
    });
}

// ============================================
// 4. COUNTER ANIMATION FOR STATS
// ============================================
function animateCounters() {
    const counters = document.querySelectorAll('.opt-stat-number');
    const speed = 200;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                const target = entry.target;
                const text = target.innerText;
                const hasPlus = text.includes('+');
                const hasPercent = text.includes('%');
                const num = parseInt(text.replace(/[^0-9]/g, ''));

                let count = 0;
                const increment = num / speed;

                const updateCount = () => {
                    count += increment;
                    if (count < num) {
                        let displayValue = Math.ceil(count);
                        if (hasPlus) displayValue += '+';
                        if (hasPercent) displayValue += '%';
                        target.innerText = displayValue;
                        requestAnimationFrame(updateCount);
                    } else {
                        target.innerText = text;
                        target.classList.add('counted');
                    }
                };
                updateCount();
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
}

// ============================================
// 5. SMOOTH SCROLL FOR ANCHOR LINKS
// ============================================
function addSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#' || href === '') return;

            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// ============================================
// 6. FAQ ACCORDION FUNCTIONALITY
// ============================================
function initFAQ() {
    // Use event delegation on the document to handle all FAQ clicks
    // This avoids issues with DOM readiness or dynamic elements
    if (document.body.hasAttribute('data-faq-delegated')) return; // Prevent double delegation

    document.body.addEventListener('click', function (e) {
        // Check if the clicked element or its parent is a faq-question
        const questionBtn = e.target.closest('.opt-faq-question');

        if (questionBtn) {
            e.preventDefault();

            const item = questionBtn.closest('.opt-faq-item');
            if (!item) return;

            const isActive = item.classList.contains('opt-active');
            const accordion = item.closest('.opt-faq-accordion');

            // If inside an accordion container, close siblings
            if (accordion) {
                const siblings = accordion.querySelectorAll('.opt-faq-item');
                siblings.forEach(el => {
                    if (el !== item) {
                        el.classList.remove('opt-active');
                    }
                });
            }

            // Toggle current item
            if (isActive) {
                item.classList.remove('opt-active');
            } else {
                item.classList.add('opt-active');
            }
        }
    });

    document.body.setAttribute('data-faq-delegated', 'true');
    console.log('✅ FAQ Event Delegation Initialized');
}

// ============================================
// 7. HEADER SCROLL EFFECT
// ============================================
function initHeaderScroll() {
    const header = document.querySelector('.opt-header');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            header.classList.add('opt-scrolled');
        } else {
            header.classList.remove('opt-scrolled');
        }
    });
}

// ============================================
// 8. MOBILE MENU TOGGLE
// ============================================
function initMobileMenu() {
    const menuToggle = document.querySelector('.opt-mobile-menu-toggle');
    const navMenu = document.querySelector('.opt-nav-menu');
    const dropdownToggles = document.querySelectorAll('.opt-dropdown > .opt-nav-link');

    console.log('🍔 Mobile Menu Init:', {
        menuToggle: menuToggle,
        navMenu: navMenu,
        dropdowns: dropdownToggles.length
    });

    if (menuToggle && navMenu) {
        // Check if inline script has already attached listeners
        // by checking if the elements already have a data attribute
        if (!menuToggle.hasAttribute('data-menu-initialized')) {
            console.log('✅ Adding menu event listeners from animations.js');
            menuToggle.addEventListener('click', (e) => {
                console.log('🔥 HAMBURGER CLICKED (from animations.js)!');
                navMenu.classList.toggle('opt-active');
                menuToggle.classList.toggle('opt-active');
                console.log('Menu active:', navMenu.classList.contains('opt-active'));
            });
            menuToggle.setAttribute('data-menu-initialized', 'true');
        } else {
            console.log('ℹ️ Menu already initialized by inline script, skipping animations.js listeners');
        }
    } else {
        console.error('❌ Menu elements NOT found!', {
            toggle: !!menuToggle,
            menu: !!navMenu
        });
    }

    // Mobile dropdown functionality  
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const dropdown = toggle.parentElement;
                dropdown.classList.toggle('opt-active');
            }
        });
    });
}

// ============================================
// 9. TESTIMONIALS SLIDER
// ============================================
function initTestimonialsSlider() {
    const track = document.querySelector('.opt-testimonial-track');
    if (!track) return;

    const cards = Array.from(track.children);
    const nextBtn = document.querySelector('.opt-testimonial-next');
    const prevBtn = document.querySelector('.opt-testimonial-prev');
    const dotsContainer = document.querySelector('.opt-testimonial-dots');

    if (!cards.length) return;

    let currentIndex = 0;

    // Clear existing dots if any
    if (dotsContainer) {
        dotsContainer.innerHTML = '';

        cards.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('opt-testimonial-dot');
            if (index === 0) dot.classList.add('opt-active');
            dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
            dot.addEventListener('click', () => {
                goToSlide(index);
            });
            dotsContainer.appendChild(dot);
        });
    }

    const dots = dotsContainer ? Array.from(dotsContainer.children) : [];

    function goToSlide(index) {
        if (index < 0) index = cards.length - 1;
        if (index >= cards.length) index = 0;

        currentIndex = index;

        const offset = index * 100;
        track.style.transform = `translateX(-${offset}%)`;

        dots.forEach(d => d.classList.remove('opt-active'));
        if (dots[currentIndex]) {
            dots[currentIndex].classList.add('opt-active');
        }
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            goToSlide(currentIndex + 1);
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            goToSlide(currentIndex - 1);
        });
    }

    // Initialize first slide
    goToSlide(0);
}

// ============================================
// INITIALIZE ALL EFFECTS
// ============================================
document.addEventListener('DOMContentLoaded', () => {
    addScrollAnimations();
    addRippleEffect();
    // addParallaxEffect(); // Removed per user request
    animateCounters();
    addSmoothScroll();
    initFAQ();
    initMobileMenu();
    initHeaderScroll();
    initTestimonialsSlider();

    console.log('Modern animations and interactions loaded');
});








	
	
</script><!-- end Simple Custom CSS and JS -->
<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

</script>
<!-- end Simple Custom CSS and JS -->
<script type="text/javascript">
/* <![CDATA[ */
var TVE_Ult_Data = {"ajaxurl":"https:\/\/optionspa.com\/wp-admin\/admin-ajax.php","ajax_load_action":"tve_ult_ajax_load","conversion_events_action":"tve_ult_conversion_event","shortcode_campaign_ids":[],"matched_display_settings":[],"campaign_ids":[],"post_id":4816,"is_singular":true,"tu_em":"","evergreen_redirects":[]};
/* ]]> */
</script>
<script src="wp-content/plugins/thrive-ultimatum/js/dist/no-campaign.min__q04f4ffbd.js" type="text/javascript"></script></body>
</html>
