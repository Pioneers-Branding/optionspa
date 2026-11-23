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
<link href="wp-content/uploads/thrive/tcb-base-css-2972-1755248066.css" id="tcb-style-base-thrive_template-2972" media="all" rel="stylesheet" type="text/css"/><style class="tcb-lightspeed-style" id="tcb-style-template-thrive_template-2972" onload="typeof window.lightspeedOptimizeStylesheet === 'function' &amp;&amp; window.lightspeedOptimizeStylesheet()" type="text/css">@media (min-width: 300px){.tve-theme-2972 #wrapper{--footer-background-width: 100%;--top-background-width: 100%;--header-background-width: 100%;}.tve-theme-2972 .content-section [data-css="tve-u-16f89c22ba3"]{margin-top: 0px !important;margin-bottom: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89c2ebc1"]{top: 28px;left: 10px;float: left;z-index: 3;max-width: 673px;position: absolute !important;padding: 4px 10px 4px 0px !important;margin-top: 0px !important;margin-bottom: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89c467df"]{border-right: 2px solid var(--tcb-skin-color-1) !important;}.tve-theme-2972 .content-section .section-content{padding: 20px 40px 20px 80px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89c805e8"]{text-align: right;--tve-line-height: 1.35em;min-height: 22px;--tve-font-weight: var(--g-bold-weight,bold);--tve-font-size: 68px;}.tve-theme-2972 .content-section .section-background{background-color: transparent !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-16f89e87f26"]{letter-spacing: 2px;text-transform: uppercase !important;font-size: 10px !important;font-weight: var(--g-bold-weight,bold) !important;color: rgba(0,0,0,0.4) !important;--tcb-applied-color: rgba(0,0,0,0.4) !important;padding-top: 0px !important;margin-top: 0px !important;padding-bottom: 0px !important;margin-bottom: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89e8f368"]{margin-top: 0px !important;margin-bottom: 0px !important;padding: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89e8f368"] .tve_social_items{font-size: 12px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89e98101"]{padding: 0px !important;margin-bottom: 12px !important;position: relative !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89eb68c9"]{font-size: 14px;width: 14px;height: 14px;position: relative;float: left;z-index: 3;margin-top: 0px !important;margin-bottom: 0px !important;margin-right: 8px !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-16f89eb68c9"] > :first-child{color: rgba(0,0,0,0.25);}.tve-theme-2972 .content-section [data-css="tve-u-16f89edb649"]{padding: 20px 0px !important;margin-bottom: 20px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89ef6441"]::after{clear: both;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper{width: calc(33.3333% - 13.3333px);}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a37"] .tcb-button-link{border: none;background-color: transparent !important;padding-right: 24px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a33"]{margin-left: 0px;padding: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a32"]{margin: 0px 0px 10px !important;background-color: rgb(248,248,248) !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a33"] > .tcb-flex-col > .tcb-col{justify-content: center;min-height: 70px;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a37"]{--tve-color: rgb(37,37,39);min-width: 100% !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a33"] > .tcb-flex-col{padding-left: 0px;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a38"]{margin: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list .tcb-post-title[data-css="tve-u-16f8a014a38"] a,.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list .tcb-post-title[data-css="tve-u-16f8a014a38"]{font-size: 16px !important;font-weight: normal !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"]{border-top: 1px solid rgba(0,0,0,0.18);border-bottom: 1px solid rgba(0,0,0,0.18);padding-top: 20px !important;padding-bottom: 20px !important;margin-top: 15px !important;margin-bottom: 0px !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list .tcb-post-title[data-css="tve-u-16f8a014a38"]:hover a,:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list .tcb-post-title[data-css="tve-u-16f8a014a38"]:hover{color: rgb(0,143,255) !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a34"]{margin-top: 0px !important;margin-bottom: 0px !important;padding: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a35"]{background-image: url("wp-content/uploads/2026/11/how-long-does-tms-therapy-last-apollo-tms-thumbnail.webp") !important;background-size: cover !important;background-position: 50% 50% !important;background-attachment: scroll !important;background-repeat: no-repeat !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list .thrv-content-box [data-css="tve-u-16f8a014a36"]{min-height: 75px !important;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:not(:nth-child(n+4)){margin-top: 0px !important;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:not(:nth-child(3n)){margin-right: 20px !important;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:nth-child(3n){margin-right: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a030d58"]{padding: 0px !important;background-image: none !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-16f8a0331a3"]{padding-top: 0px !important;margin-top: 0px !important;padding-bottom: 0px !important;margin-bottom: 0px !important;font-weight: var(--g-bold-weight,bold) !important;color: var(--tcb-skin-color-3) !important;--tcb-applied-color: var$(--tcb-skin-color-3) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a37"] .tcb-button-link span{color: var(--tve-color,rgb(37,37,39));--tcb-applied-color: rgb(37,37,39);}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a37"]:hover .tcb-button-link span{color: var(--tve-color,var(--tcb-skin-color-0)) !important;--tcb-applied-color: var$(--tcb-skin-color-0) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a37"]:hover{--tve-color: var(--tcb-skin-color-0) !important;}.tve-theme-2972 .content-section [data-css="tve-u-171303f9e88"]{margin-bottom: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-17130612c5d"]{border-top: 1px solid rgba(0,0,0,0.12) !important;}.tve-theme-2972 .content-section [data-css="tve-u-172dc113ef3"]{float: none;padding: 0px !important;margin: 0px auto 40px !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48e9"]{margin-top: 0px !important;margin-bottom: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ea"]{padding-top: 0px !important;padding-bottom: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ea"] > .tcb-flex-col > .tcb-col{justify-content: center;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48eb"]::after{clear: both;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ee"]::after{clear: both;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"] .tcb-button-link{letter-spacing: 2px;border-radius: 100px;overflow: hidden;box-shadow: rgba(203,203,203,0.18) 0px 3px 12px 0px;--tve-applied-box-shadow: 0px 3px 12px 0px rgba(203,203,203,0.18);background-image: linear-gradient(rgb(255,255,255),rgb(255,255,255)) !important;--tve-applied-background-image: linear-gradient(rgb(255,255,255),rgb(255,255,255)) !important;background-size: auto !important;background-attachment: scroll !important;padding: 25px 40px !important;background-position: 50% 50% !important;background-repeat: no-repeat !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"] .tcb-button-link span{color: rgb(255,255,255);--tcb-applied-color: #fff;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"] .tcb-button-link{font-size: var(--tve-font-size,13px) !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"]{--tve-font-size: 13px;--tve-text-transform: uppercase;--tve-color: var(--tcb-local-color-804be);--tve-applied---tve-color: var$(--tcb-local-color-804be);--tcb-local-color-804be: var(--tcb-skin-color-0);--tcb-local-color-63c2f: rgb(34,46,62);float: left;z-index: 3;position: relative;min-width: 250px;--tcb-local-color-62516: var(--tcb-local-color-804be) !important;margin-bottom: 0px !important;margin-top: 0px !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"] .tcb-button-link span{text-transform: var(--tve-text-transform,uppercase);color: var(--tve-color,var(--tcb-local-color-804be));--tve-applied-color: var$(--tve-color,var$(--tcb-local-color-804be));--tcb-applied-color: var$(--tcb-local-color-804be);}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"]:hover .tcb-button-link span{color: var(--tve-color,var(--tcb-local-color-63c2f) ) !important;--tve-applied-color: var$(--tve-color,var$(--tcb-local-color-63c2f) ) !important;--tcb-applied-color: var$(--tcb-local-color-63c2f) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"]:hover{--tve-color: var(--tcb-local-color-63c2f) !important;--tve-applied---tve-color: var$(--tcb-local-color-63c2f) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"]:hover .tcb-button-link{box-shadow: rgba(203,203,203,0.18) 0px 14px 40px 0px !important;--tve-applied-box-shadow: 0px 14px 40px 0px rgba(203,203,203,0.18) !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"] .tcb-button-link{letter-spacing: 2px;border-radius: 100px;overflow: hidden;box-shadow: rgba(203,203,203,0.18) 0px 3px 12px 0px;--tve-applied-box-shadow: 0px 3px 12px 0px rgba(203,203,203,0.18);background-image: linear-gradient(rgb(255,255,255),rgb(255,255,255)) !important;--tve-applied-background-image: linear-gradient(rgb(255,255,255),rgb(255,255,255)) !important;background-size: auto !important;background-attachment: scroll !important;padding: 25px 40px !important;background-position: 50% 50% !important;background-repeat: no-repeat !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"] .tcb-button-link span{color: rgb(255,255,255);--tcb-applied-color: #fff;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"] .tcb-button-link{font-size: var(--tve-font-size,13px) !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"]{--tve-font-size: 13px;--tve-text-transform: uppercase;--tve-color: var(--tcb-local-color-804be);--tve-applied---tve-color: var$(--tcb-local-color-804be);--tcb-local-color-804be: var(--tcb-skin-color-0);--tcb-local-color-63c2f: rgb(34,46,62);float: right;z-index: 3;position: relative;min-width: 250px;--tcb-local-color-62516: var(--tcb-local-color-804be) !important;margin-bottom: 0px !important;margin-top: 0px !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"] .tcb-button-link span{text-transform: var(--tve-text-transform,uppercase);color: var(--tve-color,var(--tcb-local-color-804be));--tve-applied-color: var$(--tve-color,var$(--tcb-local-color-804be));--tcb-applied-color: var$(--tcb-local-color-804be);}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"]:hover .tcb-button-link span{color: var(--tve-color,var(--tcb-local-color-63c2f) ) !important;--tve-applied-color: var$(--tve-color,var$(--tcb-local-color-63c2f) ) !important;--tcb-applied-color: var$(--tcb-local-color-63c2f) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"]:hover{--tve-color: var(--tcb-local-color-63c2f) !important;--tve-applied---tve-color: var$(--tcb-local-color-63c2f) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"]:hover .tcb-button-link{box-shadow: rgba(203,203,203,0.18) 0px 14px 40px 0px !important;--tve-applied-box-shadow: 0px 14px 40px 0px rgba(203,203,203,0.18) !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48f0"]{--tcb-local-color-icon: rgb(34,46,62);--tcb-local-color-var: rgb(34,46,62);--tve-icon-size: 13px;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ed"]{--tcb-local-color-icon: rgb(34,46,62);--tcb-local-color-var: rgb(34,46,62);--tve-icon-size: 13px;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:nth-child(n+4){margin-top: 20px !important;}.tve-theme-2972 .top-section .section-background{background-size: auto,cover !important;background-position: 50% 50%,50% 0% !important;background-attachment: scroll,scroll !important;background-repeat: no-repeat,no-repeat !important;background-image: linear-gradient(rgba(2,3,4,0.1) 22%,rgba(2,3,4,0.55) 100%),url("wp-content/uploads/2026/11/how-long-does-tms-therapy-last-hero.webp?v=2") !important;}.tve-theme-2972 .top-section .section-content{display: flex;text-align: center;--tve-color: rgb(255,255,255);justify-content: flex-end;flex-direction: column;min-height: 528px !important;padding: 40px 20px 60px !important;}.tve-theme-2972 .top-section [data-css="tve-u-16ed08ce675"]{padding: 0px 0px 100px !important;margin-bottom: 0px !important;}:not(#tve) .tve-theme-2972 .top-section [data-css="tve-u-16f7f4f617e"]{color: rgb(255,255,255) !important;--tcb-applied-color: rgb(255,255,255) !important;padding-bottom: 0px !important;margin-bottom: 0px !important;font-size: 42px !important;font-weight: var(--g-bold-weight,bold) !important;}.tve-theme-2972 .top-section [data-css="tve-u-1707d75f09d"]{height: 75px;bottom: 0px;fill: rgb(255,255,255);}:not(#layout) .tve-theme-2972 #wrapper{--layout-content-width: 1320px;--layout-background-width: 1320px;}.tve-theme-2972 .top-section [data-css="tve-u-18016f87742"]{max-width: 1320px;min-height: 1px !important;}.tve-theme-2972 .top-section [data-css="tve-u-18016f87741"]{--tcb-local-color-1763d: var(--tcb-skin-color-1);--tcb-local-related-1763d: --tcb-skin-color-1;--tcb-local-default-1763d: rgba(47,139,231,0.5);--tcb-local-color-d62ff: var(--tcb-skin-color-0);--tcb-local-related-d62ff: --tcb-skin-color-0;--tcb-local-default-d62ff: rgb(47,138,231);padding: 20px 40px 10px !important;}.tve-theme-2972 .top-section [data-css="tve-u-18016f95704"]{float: left;z-index: 3;position: relative;--tve-alignment: left;margin-top: 0px !important;margin-bottom: 0px !important;padding: 0px !important;}.tve-theme-2972 .top-section [data-css="tve-u-18016f95709"]::after{clear: both;}.tve-theme-2972 .top-section [data-css="tve-u-18016f95d3a"]{max-width: 79.7%;}.tve-theme-2972 .top-section [data-css="tve-u-18016f95d5f"]{max-width: 20.3%;}.tve-theme-2972 .top-section [data-css="tve-u-18016fd96a6"]{background-color: rgb(22,60,99) !important;--background-color: rgb(22,60,99) !important;--tve-applied-background-color: rgb(22,60,99) !important;}.tve-theme-2972 .top-section [data-css="tve-u-18016fdcc48"]{padding-top: 0px !important;padding-bottom: 0px !important;}.tve-theme-2972 .top-section{margin-top: -125px !important;}.tve-theme-2972 .top-section [data-css="tve-u-18016fedd95"]{float: right;z-index: 3;position: relative;--tve-alignment: right;--tcb-local-color-f3080: rgb(255,255,255) !important;--tcb-local-color-f2bba: rgba(255,255,255,0.5) !important;--tcb-local-color-trewq: rgba(255,255,255,0.7) !important;--tcb-local-color-poiuy: rgba(255,255,255,0.35) !important;--tcb-local-color-f83d7: rgba(255,255,255,0.4) !important;--tcb-local-color-frty6: rgba(255,255,255,0.2) !important;--tcb-local-color-flktr: rgba(255,255,255,0.8) !important;margin-top: 5px !important;}.tve-theme-2972 .top-section [data-css="tve-u-18016ff5240"]::after{clear: both;}.tve-theme-2972 .top-section [data-css="tve-u-18016fedd95"] .tve_social_items{font-size: 13px !important;}.tve-theme-2972 .top-section [data-css="tve-u-18016ff74d3"]{font-size: 13px !important;}:not(#tve) .tve-theme-2972 .top-section :not(#tve) [data-css="tve-u-18017074da8"]:hover svg.tcb-icon,:not(#tve) .tve-theme-2972 .top-section :not(#tve) [data-css="tve-u-18017074da8"]:hover .tve_s_icon .tve_sc_icon{color: rgb(255,179,121) !important;--tve-applied-color: rgb(255,179,121) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-180216a551b"]{font-weight: var(--g-bold-weight,bold) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-198aceccf90"]{font-weight: var(--g-bold-weight,bold) !important;font-size: 15px !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-198acecd92e"]{font-weight: var(--g-bold-weight,bold) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-198acf15da0"]{font-size: 15px !important;}}@media (max-width: 1023px){.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper{width: calc(33.3333% - 13.3333px);}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a32"]{margin-bottom: 10px !important;}.tve-theme-2972 .content-section .section-content{padding: 20px !important;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:not(:nth-child(n+4)){margin-top: 0px !important;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:not(:nth-child(3n)){margin-right: 20px !important;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:nth-child(3n){margin-right: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89c2ebc1"]{float: none;top: 0px;left: 0px;max-width: 100%;padding-left: 14px !important;margin-top: 0px !important;position: relative !important;margin-bottom: 15px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89ef6441"]::after{clear: both;}.tve-theme-2972 .content-section [data-css="tve-u-16f89c467df"]{border-right: none !important;border-left: 2px solid var(--tcb-skin-color-1) !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89c22ba3"]{max-width: 100%;margin-top: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-171303f9e88"]{max-width: 100%;float: left;z-index: 3;position: relative;margin-bottom: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-17130439c0e"]::after{clear: both;}.tve-theme-2972 .top-section .section-content{min-height: 487px !important;padding: 40px 40px 60px !important;}.tve-theme-2972 .top-section [data-css="tve-u-18016f87741"]{padding: 40px !important;}}@media (max-width: 767px){.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper{width: calc(100% + 0px);}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:nth-child(n+2)){margin-top: 30px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list [data-css="tve-u-16f8a014a33"]{flex-wrap: nowrap !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f8a014a2f"].tcb-post-list .post-wrapper{min-width: 100%;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:not(:nth-child(n+2)){margin-top: 0px !important;}.tve-theme-2972 .content-section .tcb-post-list[data-css="tve-u-16f8a014a2f"] .post-wrapper.thrv_wrapper:nth-child(n){margin-right: 0px !important;}.tve-theme-2972 .content-section .section-content{padding: 20px 10px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89c22ba3"]{margin-top: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89c2ebc1"]{float: left;z-index: 3;position: relative;margin-left: auto !important;margin-right: auto !important;padding-top: 2px !important;padding-bottom: 2px !important;}.tve-theme-2972 .content-section [data-css="tve-u-16f89ef6441"]::after{clear: both;}.tve-theme-2972 .content-section [data-css="tve-u-171303f9e88"]{margin-bottom: 0px !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"]{float: none;--tve-font-size: 11px;min-width: 100% !important;}.tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"]{float: none;--tve-font-size: 11px;min-width: 100% !important;margin-top: 10px !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ec"] .tcb-button-link{font-size: var(--tve-font-size,11px) !important;}:not(#tve) .tve-theme-2972 .content-section [data-css="tve-u-1746d2d48ef"] .tcb-button-link{font-size: var(--tve-font-size,11px) !important;}.tve-theme-2972 .top-section .section-content{justify-content: flex-end;display: flex;flex-direction: column;padding: 20px 20px 40px !important;min-height: 329px !important;}.tve-theme-2972 .top-section [data-css="tve-u-18016f87741"]{padding: 30px 20px !important;}.tve-theme-2972 .top-section [data-css="tve-u-16ed08ce675"]{padding-bottom: 50px !important;}:not(#tve) .tve-theme-2972 .top-section [data-css="tve-u-18017085d9b"]{font-size: 24px !important;}:not(#tve) .tve-theme-2972 .top-section [data-css="tve-u-16f7f4f617e"]{font-size: 38px !important;}}</style>
<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" data-pagespeed-no-defer="">
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
</script>
<!-- End Google Tag Manager for WordPress by gtm4wp.com -->
<!-- Search Engine Optimization by Rank Math - https://rankmath.com/ -->
<title>How Long Does TMS Therapy Last? Timeline &amp; Results | Options</title>
<meta content="How long does TMS therapy last? Sessions take 3–37 minutes, a full course runs 6–9 weeks, and results often last a year or more. See the full TMS timeline." name="description"/>
<meta content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" name="robots"/>
<link href="https://www.optionspa.com/how-long-does-tms-therapy-last" rel="canonical"/>
<meta content="en_US" property="og:locale"/>
<meta content="article" property="og:type"/>
<meta content="How Long Does TMS Therapy Last? Timeline &amp; Results" property="og:title"/>
<meta content="How long does TMS therapy last? Sessions take 3–37 minutes, a full course runs 6–9 weeks, and results often last a year or more. See the full TMS timeline." property="og:description"/>
<meta content="https://www.optionspa.com/how-long-does-tms-therapy-last" property="og:url"/>
<meta content="Options Psychiatry" property="og:site_name"/>
<meta content="TMS Therapy" property="article:section"/>
<meta content="Depression" property="article:section"/>
<meta content="2026-11-09T09:00:00-05:00" property="og:updated_time"/>
<meta content="wp-content/uploads/2026/11/how-long-does-tms-therapy-last-apollo-tms-thumbnail.webp" property="og:image"/>
<meta content="wp-content/uploads/2026/11/how-long-does-tms-therapy-last-apollo-tms-thumbnail.webp" property="og:image:secure_url"/>
<meta content="1376" property="og:image:width"/>
<meta content="768" property="og:image:height"/>
<meta content="How long does TMS therapy last - patient in a TMS treatment chair while a clinician positions the magnetic coil at Options Psychiatry in Reading, PA" property="og:image:alt"/>
<meta content="image/webp" property="og:image:type"/>
<meta content="2026-11-09T09:00:00-05:00" property="article:published_time"/>
<meta content="2026-11-09T09:00:00-05:00" property="article:modified_time"/>
<meta content="summary_large_image" name="twitter:card"/>
<meta content="How Long Does TMS Therapy Last? Timeline &amp; Results | Options" name="twitter:title"/>
<meta content="How long does TMS therapy last? Sessions take 3–37 minutes, a full course runs 6–9 weeks, and results often last a year or more. See the full TMS timeline." name="twitter:description"/>
<meta content="wp-content/uploads/2026/11/how-long-does-tms-therapy-last-apollo-tms-thumbnail.webp" name="twitter:image"/>
<meta content="Written by" name="twitter:label1"/>
<meta content="Dr. Cyntrell Crawford" name="twitter:data1"/>
<meta content="Time to read" name="twitter:label2"/>
<meta content="9 minutes" name="twitter:data2"/>
<!-- /Rank Math WordPress SEO plugin -->
<!-- start Simple Custom CSS and JS -->
<!-- Google Fonts -->

<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="_external/fonts.googleapis.com/css2/index__q179b911d.html" rel="stylesheet"/>
<!-- Font Awesome -->
<link data-perf-bundle="1" href="wp-content/cache/perf/css/b_cabdde2a.css" rel="stylesheet" type="text/css"/>

<!-- end Simple Custom CSS and JS -->
<link data-perf-bundle="1" href="wp-content/cache/perf/css/b_4e76bc5d.css" rel="stylesheet" type="text/css"/>

<style id="tve_global_variables" type="text/css">:root{--tcb-background-author-image:url("_external/secure.gravatar.com/avatar/0047baa95022e0117a11fdd310da4521de7ab91557a0210496da6c384c404e52/index__qb7b91a31.html");--tcb-background-user-image:url();--tcb-background-featured-image-thumbnail:url("wp-content/uploads/2026/11/how-long-does-tms-therapy-last-apollo-tms-thumbnail.webp");--tcb-skin-color-0:hsla(var(--tcb-theme-main-master-h,210), var(--tcb-theme-main-master-s,77%), var(--tcb-theme-main-master-l,54%), var(--tcb-theme-main-master-a,1));--tcb-skin-color-0-h:var(--tcb-theme-main-master-h,210);--tcb-skin-color-0-s:var(--tcb-theme-main-master-s,77%);--tcb-skin-color-0-l:var(--tcb-theme-main-master-l,54%);--tcb-skin-color-0-a:1;--tcb-skin-color-1:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 2% ), calc(var(--tcb-theme-main-master-l,54%) - 0% ), 0.5);--tcb-skin-color-1-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-1-s:calc(var(--tcb-theme-main-master-s,77%) + 2% );--tcb-skin-color-1-l:calc(var(--tcb-theme-main-master-l,54%) - 0% );--tcb-skin-color-1-a:0.5;--tcb-skin-color-2:rgb(248, 248, 248);--tcb-skin-color-2-h:0;--tcb-skin-color-2-s:0%;--tcb-skin-color-2-l:97%;--tcb-skin-color-2-a:1;--tcb-skin-color-3:hsla(calc(var(--tcb-theme-main-master-h,210) + 30 ), 85%, 13%, 1);--tcb-skin-color-3-h:calc(var(--tcb-theme-main-master-h,210) + 30 );--tcb-skin-color-3-s:85%;--tcb-skin-color-3-l:13%;--tcb-skin-color-3-a:1;--tcb-skin-color-4:rgb(12, 17, 21);--tcb-skin-color-4-h:206;--tcb-skin-color-4-s:27%;--tcb-skin-color-4-l:6%;--tcb-skin-color-4-a:1;--tcb-skin-color-5:rgb(106, 107, 108);--tcb-skin-color-5-h:210;--tcb-skin-color-5-s:0%;--tcb-skin-color-5-l:41%;--tcb-skin-color-5-a:1;--tcb-skin-color-8:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 2% ), calc(var(--tcb-theme-main-master-l,54%) - 0% ), 0.18);--tcb-skin-color-8-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-8-s:calc(var(--tcb-theme-main-master-s,77%) + 2% );--tcb-skin-color-8-l:calc(var(--tcb-theme-main-master-l,54%) - 0% );--tcb-skin-color-8-a:0.18;--tcb-skin-color-9:hsla(calc(var(--tcb-theme-main-master-h,210) - 3 ), 56%, 96%, 1);--tcb-skin-color-9-h:calc(var(--tcb-theme-main-master-h,210) - 3 );--tcb-skin-color-9-s:56%;--tcb-skin-color-9-l:96%;--tcb-skin-color-9-a:1;--tcb-skin-color-10:hsla(calc(var(--tcb-theme-main-master-h,210) - 21 ), calc(var(--tcb-theme-main-master-s,77%) + 23% ), calc(var(--tcb-theme-main-master-l,54%) + 27% ), 1);--tcb-skin-color-10-h:calc(var(--tcb-theme-main-master-h,210) - 21 );--tcb-skin-color-10-s:calc(var(--tcb-theme-main-master-s,77%) + 23% );--tcb-skin-color-10-l:calc(var(--tcb-theme-main-master-l,54%) + 27% );--tcb-skin-color-10-a:1;--tcb-skin-color-13:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 2% ), calc(var(--tcb-theme-main-master-l,54%) - 18% ), 0.5);--tcb-skin-color-13-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-13-s:calc(var(--tcb-theme-main-master-s,77%) + 2% );--tcb-skin-color-13-l:calc(var(--tcb-theme-main-master-l,54%) - 18% );--tcb-skin-color-13-a:0.5;--tcb-skin-color-14:rgb(230, 230, 230);--tcb-skin-color-14-h:0;--tcb-skin-color-14-s:0%;--tcb-skin-color-14-l:90%;--tcb-skin-color-14-a:1;--tcb-skin-color-16:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), 3%, 36%, 1);--tcb-skin-color-16-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-16-s:3%;--tcb-skin-color-16-l:36%;--tcb-skin-color-16-a:1;--tcb-skin-color-18:hsla(calc(var(--tcb-theme-main-master-h,210) - 1 ), calc(var(--tcb-theme-main-master-s,77%) + 1% ), calc(var(--tcb-theme-main-master-l,54%) - 1% ), 0.8);--tcb-skin-color-18-h:calc(var(--tcb-theme-main-master-h,210) - 1 );--tcb-skin-color-18-s:calc(var(--tcb-theme-main-master-s,77%) + 1% );--tcb-skin-color-18-l:calc(var(--tcb-theme-main-master-l,54%) - 1% );--tcb-skin-color-18-a:0.8;--tcb-skin-color-19:hsla(calc(var(--tcb-theme-main-master-h,210) - 3 ), 56%, 96%, 0.85);--tcb-skin-color-19-h:calc(var(--tcb-theme-main-master-h,210) - 3 );--tcb-skin-color-19-s:56%;--tcb-skin-color-19-l:96%;--tcb-skin-color-19-a:0.85;--tcb-skin-color-20:hsla(calc(var(--tcb-theme-main-master-h,210) - 3 ), 56%, 96%, 0.9);--tcb-skin-color-20-h:calc(var(--tcb-theme-main-master-h,210) - 3 );--tcb-skin-color-20-s:56%;--tcb-skin-color-20-l:96%;--tcb-skin-color-20-a:0.9;--tcb-skin-color-21:hsla(calc(var(--tcb-theme-main-master-h,210) - 210 ), calc(var(--tcb-theme-main-master-s,77%) - 77% ), calc(var(--tcb-theme-main-master-l,54%) + 46% ), 1);--tcb-skin-color-21-h:calc(var(--tcb-theme-main-master-h,210) - 210 );--tcb-skin-color-21-s:calc(var(--tcb-theme-main-master-s,77%) - 77% );--tcb-skin-color-21-l:calc(var(--tcb-theme-main-master-l,54%) + 46% );--tcb-skin-color-21-a:1;--tcb-skin-color-22:rgb(255, 255, 255);--tcb-skin-color-22-h:0;--tcb-skin-color-22-s:0%;--tcb-skin-color-22-l:100%;--tcb-skin-color-22-a:1;--tcb-skin-color-23:rgb(32, 65, 71);--tcb-skin-color-23-h:189;--tcb-skin-color-23-s:37%;--tcb-skin-color-23-l:20%;--tcb-skin-color-23-a:1;--tcb-skin-color-24:rgb(59, 59, 59);--tcb-skin-color-24-h:0;--tcb-skin-color-24-s:0%;--tcb-skin-color-24-l:23%;--tcb-skin-color-24-a:1;--tcb-skin-color-25:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 5% ), calc(var(--tcb-theme-main-master-l,54%) + 8% ), 0.04);--tcb-skin-color-25-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-25-s:calc(var(--tcb-theme-main-master-s,77%) + 5% );--tcb-skin-color-25-l:calc(var(--tcb-theme-main-master-l,54%) + 8% );--tcb-skin-color-25-a:0.04;--tcb-skin-color-26:hsla(calc(var(--tcb-theme-main-master-h,210) + 1 ), calc(var(--tcb-theme-main-master-s,77%) + 6% ), calc(var(--tcb-theme-main-master-l,54%) + 9% ), 0.12);--tcb-skin-color-26-h:calc(var(--tcb-theme-main-master-h,210) + 1 );--tcb-skin-color-26-s:calc(var(--tcb-theme-main-master-s,77%) + 6% );--tcb-skin-color-26-l:calc(var(--tcb-theme-main-master-l,54%) + 9% );--tcb-skin-color-26-a:0.12;--tcb-skin-color-27:hsla(calc(var(--tcb-theme-main-master-h,210) + 10 ), calc(var(--tcb-theme-main-master-s,77%) + 6% ), calc(var(--tcb-theme-main-master-l,54%) + 17% ), 1);--tcb-skin-color-27-h:calc(var(--tcb-theme-main-master-h,210) + 10 );--tcb-skin-color-27-s:calc(var(--tcb-theme-main-master-s,77%) + 6% );--tcb-skin-color-27-l:calc(var(--tcb-theme-main-master-l,54%) + 17% );--tcb-skin-color-27-a:1;--tcb-skin-color-28:hsla(calc(var(--tcb-theme-main-master-h,210) + 2 ), calc(var(--tcb-theme-main-master-s,77%) - 34% ), calc(var(--tcb-theme-main-master-l,54%) + 27% ), 1);--tcb-skin-color-28-h:calc(var(--tcb-theme-main-master-h,210) + 2 );--tcb-skin-color-28-s:calc(var(--tcb-theme-main-master-s,77%) - 34% );--tcb-skin-color-28-l:calc(var(--tcb-theme-main-master-l,54%) + 27% );--tcb-skin-color-28-a:1;--tcb-skin-color-29:hsla(calc(var(--tcb-theme-main-master-h,210) - 0 ), calc(var(--tcb-theme-main-master-s,77%) + 6% ), calc(var(--tcb-theme-main-master-l,54%) + 10% ), 0.4);--tcb-skin-color-29-h:calc(var(--tcb-theme-main-master-h,210) - 0 );--tcb-skin-color-29-s:calc(var(--tcb-theme-main-master-s,77%) + 6% );--tcb-skin-color-29-l:calc(var(--tcb-theme-main-master-l,54%) + 10% );--tcb-skin-color-29-a:0.4;--tcb-skin-color-30:hsla(calc(var(--tcb-theme-main-master-h,210) - 1 ), calc(var(--tcb-theme-main-master-s,77%) + 5% ), calc(var(--tcb-theme-main-master-l,54%) + 8% ), 0.85);--tcb-skin-color-30-h:calc(var(--tcb-theme-main-master-h,210) - 1 );--tcb-skin-color-30-s:calc(var(--tcb-theme-main-master-s,77%) + 5% );--tcb-skin-color-30-l:calc(var(--tcb-theme-main-master-l,54%) + 8% );--tcb-skin-color-30-a:0.85;--tcb-main-master-h:210;--tcb-main-master-s:77%;--tcb-main-master-l:54%;--tcb-main-master-a:1;--tcb-theme-main-master-h:210;--tcb-theme-main-master-s:77%;--tcb-theme-main-master-l:54%;--tcb-theme-main-master-a:1;}</style>
<link data-perf-bundle="1" href="wp-content/cache/perf/css/b_3be575df.css" rel="stylesheet" type="text/css"/>

<style id="thrive-default-styles" type="text/css">@media (min-width: 300px) { .tcb-style-wrap h1{ color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:40px;background-color:rgba(0, 0, 0, 0);font-style:normal;margin:0px;padding-top:0px;padding-bottom:24px;text-decoration:rgba(10, 10, 10, 0.85);text-transform:none;border-left:0px none rgba(10, 10, 10, 0.85);line-height:1.3em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-color:var(--tcb-skin-color-4);--tve-applied-color:var$(--tcb-skin-color-4);--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h2{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;font-size:34px;line-height:1.4em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h3{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;font-size:24px;line-height:1.4em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h4{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;font-size:20px;line-height:1.4em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h5{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;line-height:1.4em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap h6{ font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);color:var(--tcb-skin-color-4);--tcb-applied-color:var$(--tcb-skin-color-4);padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;line-height:1.6em;--tcb-typography-font-family:Barlow;--g-bold-weight:700;--tcb-typography-font-weight:var(--g-regular-weight, normal); }.tcb-style-wrap p{ color:rgb(42, 42, 42);--tcb-applied-color:rgb(42, 42, 42);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:18px;padding-top:0px;margin-top:0px;padding-bottom:24px;margin-bottom:0px;--tcb-typography-font-family:Barlow;--tcb-typography-color:rgb(42, 42, 42);--tve-applied-color:rgb(42, 42, 42);--tcb-typography-font-size:18px;--g-bold-weight:700; }:not(.inc) .thrv_text_element a:not(.tcb-button-link), :not(.inc) .tcb-styled-list a, :not(.inc) .tcb-numbered-list a, .tve-input-option-text a, .tcb-post-content p a, .tcb-post-content li a, .tcb-post-content blockquote a, .tcb-post-content pre a{ --tcb-applied-color:var$(--tcb-skin-color-5);font-family:var(--tve-font-family, Barlow);--g-regular-weight:400;font-weight:var(--g-regular-weight, normal) ;font-size:18px;text-decoration-line:none;--eff:none;text-decoration-color:var(--eff-color, currentColor);color:var(--tcb-skin-color-0);--tve-font-family:Barlow; }:not(.inc) .thrv_text_element a:not(.tcb-button-link):hover, :not(.inc) .tcb-styled-list a:hover, :not(.inc) .tcb-numbered-list a:hover, .tve-input-option-text a:hover, .tcb-post-content p a:hover, .tcb-post-content li a:hover, .tcb-post-content blockquote a:hover, .tcb-post-content pre a:hover { text-decoration-line:none;--eff:none;text-decoration-color:var(--eff-color, currentColor);color:var(--tcb-skin-color-3); }.tcb-style-wrap ul:not([class*="menu"]), .tcb-style-wrap ol{ color:var(--tcb-skin-color-5);--tcb-applied-color:var$(--tcb-skin-color-5);font-family:Muli;--g-regular-weight:400;--g-bold-weight:800;font-weight:var(--g-regular-weight, normal);font-size:18px;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:12px;padding-left:0px; }.tcb-style-wrap li:not([class*="menu"]){ color:rgb(42, 42, 42);--tcb-applied-color:rgb(42, 42, 42);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:18px;line-height:1.4em;padding-bottom:16px;margin-bottom:0px;--tcb-typography-font-family:Barlow;--tcb-typography-color:rgb(42, 42, 42);--tve-applied-color:rgb(42, 42, 42); }.tcb-style-wrap blockquote{ color:var(--tcb-skin-color-5);--tcb-applied-color:var$(--tcb-skin-color-5);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:18px;padding-top:0px;padding-bottom:0px;border-left:2px solid var(--tcb-skin-color-1);margin-top:0px;margin-bottom:24px;--tcb-typography-font-family:Barlow; }body, .tcb-plain-text{ color:var(--tcb-skin-color-5);--tcb-applied-color:var$(--tcb-skin-color-5);font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal);font-size:18px;--tcb-typography-font-family:Barlow; }.tcb-style-wrap pre{ font-family:Barlow;--tcb-typography-font-family:Barlow;--g-regular-weight:400;font-weight:var(--g-regular-weight, normal); } }@media (max-width: 1023px) { .tcb-style-wrap h1{ font-size:36px;padding-bottom:22px;margin-bottom:0px; }.tcb-style-wrap h2{ padding-bottom:22px;margin-bottom:0px;font-size:28px; }.tcb-style-wrap h3{ padding-bottom:22px;margin-bottom:0px;font-size:22px; }.tcb-style-wrap h4{ padding-bottom:22px;margin-bottom:0px; }.tcb-style-wrap h5{ padding-bottom:22px;margin-bottom:0px; }.tcb-style-wrap h6{ padding-bottom:22px;margin-bottom:0px; }.tcb-style-wrap p{ padding-bottom:22px;margin-bottom:0px;padding-top:0px;margin-top:0px; }.tcb-style-wrap ul:not([class*="menu"]), .tcb-style-wrap ol{ padding-top:0px;padding-bottom:4px; }.tcb-style-wrap li:not([class*="menu"]){ line-height:1.75em;--tcb-typography-line-height:1.75em;padding-bottom:14px;margin-bottom:0px; }.tcb-style-wrap blockquote{ margin-bottom:22px; } }@media (max-width: 767px) { .tcb-style-wrap h1{ font-size:28px;padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h2{ font-size:24px;padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h3{ font-size:22px;padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h4{ font-size:20px;padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h5{ padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap h6{ padding-bottom:20px;margin-bottom:0px; }.tcb-style-wrap p{ padding-bottom:20px;margin-bottom:0px;padding-top:0px;margin-top:0px;font-size:16px;--tcb-typography-font-size:16px; }.tcb-style-wrap ul:not([class*="menu"]), .tcb-style-wrap ol{ padding-left:0px;padding-bottom:4px;padding-top:0px; }.tcb-style-wrap li:not([class*="menu"]){ padding-bottom:10px;margin-bottom:0px;font-size:16px;--tcb-typography-font-size:16px; }.tcb-style-wrap blockquote{ margin-bottom:20px; } }</style>
<link href="wp-content/uploads/2025/12/OPTIONS-ADDICTION-RECOVERY-2.webp" rel="icon" sizes="32x32"/>
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

/* Typography & Layout Matched with Previous Blogs */
body, .tcb-style-wrap, .main-container, .tcb-post-content {
    font-family: 'Barlow', sans-serif !important;
}
.tve-theme-2972 .top-section .section-content {
    text-shadow: none !important;
}
.tcb-post-content p {
    font-family: 'Barlow', sans-serif !important;
    font-size: 18px !important;
    line-height: 1.6em !important;
    color: rgb(42, 42, 42) !important;
    margin-top: 0 !important;
    margin-bottom: 24px !important;
    padding: 0 !important;
}
/* Headings use theme defaults (matches does-spravato-help-with-anxiety) */
.tcb-post-content ul.wp-block-list, .tcb-post-content ol.wp-block-list {
    margin-top: 0 !important;
    margin-bottom: 24px !important;
    padding-left: 24px !important;
}
.tcb-post-content li {
    font-family: 'Barlow', sans-serif !important;
    font-size: 18px !important;
    color: rgb(42, 42, 42) !important;
    line-height: 1.6em !important;
    padding-bottom: 10px !important;
}
html {
    scroll-behavior: smooth;
}
h2[id], section[id] {
    scroll-margin-top: 110px;
}
.toc-block ul li a, .toc-block a {
    color: #2f8be7 !important;
    text-decoration: none !important;
    font-weight: 400 !important;
    font-size: 16px !important;
    cursor: pointer !important;
    transition: color 0.2s ease, text-decoration 0.2s ease !important;
}
.toc-block ul li a:hover, .toc-block a:hover {
    color: #163c63 !important;
    text-decoration: underline !important;
}
.tcb-post-content p a, .tcb-post-content li a, .tcb-post-content a:not(.main-cta-btn):not(.cta-link-btn) {
    color: #2f8be7 !important;
    text-decoration: none !important;
    font-weight: 400 !important;
    transition: color 0.2s ease;
}
.tcb-post-content p a strong, .tcb-post-content li a strong,
.tcb-post-content p a b, .tcb-post-content li a b {
    font-weight: 400 !important;
}
.tcb-post-content p a:hover, .tcb-post-content li a:hover, .tcb-post-content a:hover {
    color: #163c63 !important;
    text-decoration: underline !important;
}
.direct-answer-callout {
    border-left: 4px solid #2f8be7 !important;
    background-color: #f0f7ff !important;
    padding: 22px 24px !important;
    margin-bottom: 28px !important;
    border-radius: 6px !important;
    box-shadow: 0 2px 10px rgba(47,139,231,0.06) !important;
}
.direct-answer-callout p {
    color: #163c63 !important;
    font-size: 17px !important;
    line-height: 1.65 !important;
    margin: 0 !important;
}
.article-table {
    width: 100%;
    border-collapse: collapse;
    margin: 26px 0;
    font-size: 16px;
    background-color: #ffffff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    border-radius: 8px;
    overflow: hidden;
}
.article-table th {
    background: #173c63;
    color: #ffffff;
    padding: 13px 16px;
    text-align: left;
    font-weight: 600;
}
.article-table td {
    padding: 13px 16px;
    border-bottom: 1px solid #eef2f7;
    color: #333333;
    vertical-align: top;
}
.article-table tr:nth-child(even) {
    background-color: #f8fafc;
}
.article-table tr:hover {
    background-color: #f0f7ff;
}
.in-content-cta {
    background: #f8fafc;
    border: 1px solid #dbeafe;
    border-left: 5px solid #2f8be7;
    padding: 24px 26px;
    border-radius: 8px;
    margin: 32px 0;
    box-shadow: 0 4px 16px rgba(47,139,231,0.08);
}
.in-content-cta h3 {
    color: #173c63 !important;
    margin-top: 0 !important;
    margin-bottom: 10px !important;
    font-size: 21px !important;
    font-weight: 700 !important;
}
.in-content-cta p {
    color: #334155 !important;
    font-size: 16px !important;
    line-height: 1.6 !important;
    margin-bottom: 16px !important;
}
.in-content-cta a.cta-link-btn {
    display: inline-block;
    background: #2f8be7 !important;
    color: #ffffff !important;
    font-weight: 600 !important;
    font-size: 15px !important;
    padding: 12px 28px !important;
    border-radius: 6px !important;
    text-decoration: none !important;
    transition: background 0.2s ease, transform 0.2s ease;
}
.in-content-cta a.cta-link-btn:hover {
    background: #173c63 !important;
    color: #ffffff !important;
    transform: translateY(-1px);
}
.final-cta-card {
    background: linear-gradient(135deg, #173c63 0%, #1e528a 100%) !important;
    color: #ffffff !important;
    padding: 38px 30px !important;
    border-radius: 12px !important;
    margin: 40px 0 !important;
    text-align: center !important;
    box-shadow: 0 12px 30px rgba(23,60,99,0.24) !important;
}
.final-cta-card h3 {
    color: #ffffff !important;
    font-size: 25px !important;
    font-weight: 700 !important;
    margin-top: 0 !important;
    margin-bottom: 12px !important;
}
.final-cta-card p, .final-cta-card p.subtext {
    color: #eaf2ff !important;
    font-size: 17px !important;
    line-height: 1.65 !important;
    max-width: 740px !important;
    margin: 0 auto 22px auto !important;
}
.final-cta-card a.main-cta-btn {
    display: inline-block !important;
    background-color: #ff7a14 !important;
    color: #ffffff !important;
    font-size: 16px !important;
    font-weight: 700 !important;
    letter-spacing: 0.8px !important;
    text-transform: uppercase !important;
    padding: 15px 36px !important;
    border-radius: 50px !important;
    text-decoration: none !important;
    box-shadow: 0 4px 14px rgba(255,122,21,0.35) !important;
    transition: all 0.2s ease;
}
.final-cta-card a.main-cta-btn:hover {
    background-color: #e6680a !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 18px rgba(255,122,21,0.45) !important;
}
.final-cta-card .contact-meta, .final-cta-card .contact-meta p {
    font-size: 15px !important;
    color: #d0e3ff !important;
    margin-top: 20px !important;
    margin-bottom: 0 !important;
}
.final-cta-card .contact-meta a {
    color: #ffffff !important;
    font-weight: 600 !important;
    text-decoration: underline !important;
}

/* FAQ Section Styling */
.opt-section-faq {
    padding: 46px 28px !important;
    margin: 40px 0 !important;
    background: linear-gradient(135deg, rgb(255, 245, 238) 0%, rgb(255, 223, 204) 100%) !important;
    border-radius: 20px !important;
    box-sizing: border-box !important;
}
.opt-section-faq .opt-section-header {
    text-align: center !important;
    margin-bottom: 30px !important;
}
.opt-section-faq .opt-section-header h2 {
    font-family: 'Barlow', sans-serif !important;
    font-size: 30px !important;
    font-weight: 700 !important;
    color: #0F2C3A !important;
    margin: 0 0 8px 0 !important;
    line-height: 1.3 !important;
    text-align: center !important;
}
.opt-section-faq .opt-section-header p {
    font-family: 'Barlow', sans-serif !important;
    font-size: 16px !important;
    color: #5A6B7C !important;
    margin: 0 auto !important;
    max-width: 650px !important;
    line-height: 1.6 !important;
    text-align: center !important;
    padding: 0 !important;
}
.opt-faq-accordion {
    max-width: 950px !important;
    margin: 0 auto !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 18px !important;
}
.opt-faq-item {
    background: #ffffff !important;
    border-radius: 16px !important;
    border: 1px solid rgba(15, 44, 58, 0.1) !important;
    overflow: hidden !important;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    margin-bottom: 0 !important;
}
.opt-faq-item:hover {
    border-color: #FF7A15 !important;
    box-shadow: 0 10px 30px rgba(15, 44, 58, 0.08) !important;
    transform: translateY(-2px) !important;
}
.opt-faq-item.opt-active {
    border-color: #FF7A15 !important;
    box-shadow: 0 15px 45px rgba(255, 122, 21, 0.12) !important;
}
.opt-faq-question {
    width: 100% !important;
    padding: 22px 30px !important;
    background: none !important;
    border: none !important;
    text-align: left !important;
    cursor: pointer !important;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    font-family: 'Barlow', sans-serif !important;
    font-size: 18px !important;
    font-weight: 700 !important;
    color: #0F2C3A !important;
    transition: all 0.3s ease !important;
    margin: 0 !important;
    line-height: 1.4 !important;
    box-shadow: none !important;
    outline: none !important;
}
.opt-faq-question span:first-child {
    font-weight: 700 !important;
    color: inherit !important;
}
.opt-faq-item.opt-active .opt-faq-question,
.opt-faq-item.opt-active .opt-faq-question span:first-child {
    color: #FF7A15 !important;
    padding-bottom: 12px !important;
}
.opt-faq-toggle {
    font-size: 1.15rem !important;
    color: #0F2C3A !important;
    transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), color 0.3s ease !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-shrink: 0 !important;
    margin-left: 16px !important;
}
.opt-faq-item.opt-active .opt-faq-toggle {
    transform: rotate(180deg) !important;
    color: #FF7A15 !important;
}
.opt-faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    background: #ffffff !important;
}
.opt-faq-item.opt-active .opt-faq-answer {
    max-height: 800px !important;
}
.opt-faq-answer p {
    padding: 0 30px 24px 30px !important;
    margin: 0 !important;
    font-family: 'Barlow', sans-serif !important;
    font-size: 16px !important;
    line-height: 1.7 !important;
    color: #4a5568 !important;
}
@media (max-width: 768px) {
    .opt-section-faq {
        padding: 30px 18px !important;
        margin: 30px 0 !important;
    }
    .opt-faq-question {
        padding: 18px 20px !important;
        font-size: 16px !important;
    }
    .opt-faq-answer p {
        padding: 0 20px 20px 20px !important;
        font-size: 15px !important;
    }
    .article-table { font-size: 14px !important; }
    .article-table th, .article-table td { padding: 10px 8px !important; word-break: normal; }
    .in-content-cta, .final-cta-card { padding: 22px 18px !important; }
    .final-cta-card a.main-cta-btn { display: block !important; text-align: center !important; white-space: normal !important; }
}
</style>
<script async src="https://www.googletagmanager.com/gtm.js?id=GTM-58G8N9XX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
</script>
</head>
<body class="wp-singular post-template-default single single-post postid-8960single-format-standard wp-theme-thrive-theme ehf-header ehf-footer ehf-template-thrive-theme ehf-stylesheet-thrive-theme tve-theme-2972 thrive-layout-20 elementor-default elementor-kit-4716">

<div class="hfeed site" id="page">
<?php include __DIR__ . '/includes/header.php'; ?>

<div class="tcb-style-wrap" id="wrapper">
<div class="theme-section top-section" id="theme-top-section">
<div class="section-background">
<svg class="svg-shape-bottom" data-css="tve-u-1707d75f09d" data-ct="38730" data-position="bottom" decoration-type="Rounded Corner" id="Layer_1" preserveaspectratio="none" version="1.1" viewbox="0 0 1000 234.7" width="100%" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
<path class="p1707d75f097" d="M1000,2.2L571,172c-60.6,23.6-85.4,22.6-146.2,0L0,0v234.7h1000V2.2z"></path>
</svg>
</div>
<div class="section-content">
<div class="thrv_wrapper thrv-page-section thrv-lp-block tcb-local-vars-root tcb-window-width top-headerbaar" data-css="tve-u-18016f87741" data-inherit-lp-settings="1" data-keep-css_id="1" data-match-lp-colors="1" id="top-headerbaar" style="" tcb-template-id="3651" tcb-template-name="Benefits Area Block 10">
<div class="tve-page-section-out" data-css="tve-u-18016fd96a6"></div>
<div class="tve-page-section-in tve_empty_dropzone" data-css="tve-u-18016f87742">
<div class="thrv_wrapper thrv-columns" style="--tcb-col-el-width: 971;">
<div class="tcb-flex-row v-2 tcb-resized tcb--cols--2" data-css="tve-u-18016fdcc48">
<div class="tcb-flex-col" data-css="tve-u-18016f95d3a">
<div class="tcb-col">
<div class="tcb-clear" data-css="tve-u-18016f95709">
<div class="thrv_wrapper thrv_custom_html_shortcode" data-css="tve-u-18016f95704">
<div class="header-contactlist">
<ul>
<li><a href="tel:6107416567"><i aria-hidden="true" class="fa fa-phone"></i>(610) 741-6567</a></li>
<li><a href="mailto:info@optionspa.com"><i aria-hidden="true" class="fa fa-envelope-o"></i> info@optionspa.com</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="tcb-flex-col" data-css="tve-u-18016f95d5f">
<div class="tcb-col">
<div class="tcb-clear" data-css="tve-u-18016ff5240">
<div class="thrv_wrapper thrive_author_links thrv_social_custom thrv_social_follow tcb-local-vars-root tcb-custom-branding-social tve_links_style_5" data-css="tve-u-18016fedd95">
<div class="tve_social_items tve_social_custom tcb-social-follow tve_links_style_5 tve_social_itb tcb-local-vars-root tve-prevent-content-edit">
<div class="tve_s_item tve_s_fb_share thrv_wrapper tcb-local-vars-root" data-css="tve-u-18017074da8" data-href="https://www.facebook.com/OptionsAddiction" data-name="Facebook page" data-network="fb" data-s="fb_share">
<a href="https://www.facebook.com/OptionsAddiction" rel="nofollow" target="_blank">
<span class="tve_s_icon" data-css="tve-u-18016ff74d3">
<svg class="tcb-icon" data-id="facebook" viewbox="0 0 264 512">
<path d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path>
</svg>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="thrv_wrapper thrv_text_element" data-css="tve-u-16ed08ce675">
<h1 class="entry-title" data-css="tve-u-16f7f4f617e"><span class="thrive-shortcode-content" data-attr-link="0" data-css="tve-u-18017085d9b" data-extra_key="" data-option-inline="1" data-shortcode="tcb_post_title" data-shortcode-name="Post Title">How Long Does TMS Therapy Last? Sessions, Timeline &amp; Results</span></h1>
</div>
</div>
</div>

<div id="content">
<div class="main-container thrv_wrapper">
<div class="theme-section content-section" id="theme-content-section">
<div class="section-background"></div>
<div class="section-content">
<div class="tcb-clear" data-css="tve-u-16f89ef6441">
<div class="thrv_wrapper thrv_contentbox_shortcode thrv-content-box tve-elem-default-pad tcb-local-vars-root" data-css="tve-u-16f89c2ebc1">
<div class="tve-content-box-background" data-css="tve-u-16f89c467df"></div>
<div class="tve-cb" data-css="tve-u-16f89c805e8"></div>
</div>
</div>
<div class="tcb-clear" data-css="tve-u-17130439c0e">
<div class="thrv_wrapper thrv_text_element tcb-local-vars-root" data-css="tve-u-171303f9e88">
<h2 class="" data-css="tve-u-180216a551b" style="text-align: left;"><span class="thrive-shortcode-content" data-attr-css="" data-attr-link="1" data-attr-rel="0" data-attr-target="0" data-extra_key="" data-option-inline="1" data-shortcode="tcb_post_title" data-shortcode-name="Post title"><a data-css="" href="#" title="How Long Does TMS Therapy Last? Sessions, Timeline &amp; Results">How Long Does TMS Therapy Last? Sessions, Timeline &amp; Results</a></span></h2>
</div>
</div>
<div class="thrv_wrapper thrv_text_element">
<div class="tcb-plain-text" data-css="tve-u-198aceccf90"><span class="thrive-shortcode-content" data-attr-date-format="F j, Y" data-attr-date-format-select="F j, Y" data-attr-show-time="0" data-attr-time-format="" data-attr-time-format-select="g:i a" data-attr-type="published" data-extra_key="" data-option-inline="1" data-shortcode="tcb_post_published_date" data-shortcode-name="Post date">November 9, 2026 </span></div>
</div>
<div class="thrv_wrapper thrv_text_element">
<div class="tcb-plain-text" data-css="tve-u-198acecd92e"><span class="thrive-shortcode-content" data-attr-link="0" data-attr-rel="0" data-attr-target="0" data-css="tve-u-198acf15da0" data-extra_key="" data-option-inline="1" data-shortcode="tcb_post_author_name" data-shortcode-name="Author name">Dr. Cyntrell Crawford</span></div>
</div>

<section class="tcb-post-content tcb-shortcode thrv_wrapper" data-css="tve-u-16f89c22ba3">
<div class="kk-star-ratings kksr-auto kksr-align-left kksr-valign-top" data-payload='{"align":"left","id":"8960","slug":"default","valign":"top","ignore":"","reference":"auto","class":"","count":"1","legendonly":"","readonly":"","score":"5","starsonly":"","best":"5","gap":"5","greet":"Rate this post","legend":"5\/5 - (1 vote)","size":"24","title":"How Long Does TMS Therapy Last? Sessions, Timeline & Results","width":"142.5","_legend":"{score}\/{best} - ({count} {votes})","font_factor":"1.25"}'>
<div class="kksr-stars">
<div class="kksr-stars-inactive">
<div class="kksr-star" data-star="1" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
<div class="kksr-star" data-star="2" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
<div class="kksr-star" data-star="3" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
<div class="kksr-star" data-star="4" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
<div class="kksr-star" data-star="5" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
</div>
<div class="kksr-stars-active" style="width: 142.5px;">
<div class="kksr-star" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
<div class="kksr-star" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
<div class="kksr-star" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
<div class="kksr-star" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
<div class="kksr-star" style="padding-right: 5px"><div class="kksr-icon" style="width: 24px; height: 24px;"></div></div>
</div>
</div>
<div class="kksr-legend" style="font-size: 19.2px;">5/5 - (1 vote)</div>
</div>

<!-- AEO & Direct Answer Summary Block -->
<div class="wp-block-group direct-answer-callout">
<p><strong>Key Takeaway (Quick Answer):</strong> <em>How long does TMS therapy last?</em> <strong>TMS therapy lasts in three different ways.</strong> A single session takes about <strong>3 to 37 minutes</strong>, depending on the protocol. A standard full course runs <strong>5 days a week for about 6 weeks</strong>, often followed by a 3-week taper, so most people finish in <strong>6 to 9 weeks (around 30 to 36 sessions)</strong>. And for patients who respond, the antidepressant benefits of <a href="https://en.wikipedia.org/wiki/Transcranial_magnetic_stimulation" rel="noopener noreferrer" target="_blank">Transcranial Magnetic Stimulation (TMS)</a> commonly last <strong>a year or longer</strong>. In one large follow-up study, about 6 in 10 responders still met response criteria 12 months later. If symptoms come back, a repeat course or periodic "booster" sessions are often effective. Your exact timeline depends on your diagnosis, protocol, and how quickly your brain responds.</p>
</div>

<p>If you are considering <a href="tms-therapy-reading">TMS therapy</a> for depression, one of the first practical questions is about time. How long will each appointment take? How many weeks will I need to commit? And, most importantly, <strong>how long will the results last</strong> once treatment ends?</p>

<p>These are fair questions. TMS asks for a real commitment of weekday visits, and you deserve a clear picture before you start. At <strong>Options Psychiatry</strong> in Reading, PA, board-certified psychiatrist <a href="dr-crawford">Dr. Cyntrell Crawford</a> and our clinical team walk every patient through the full TMS timeline, from the first mapping session to long-term maintenance. This guide gives you the same answer-first breakdown.</p>

<!-- Table of Contents -->
<div class="wp-block-group toc-block" style="border-color:#e0e0e0;border-style:solid;border-width:1px;background-color:#f8f9fa;padding:20px;border-radius:6px;margin:25px 0;">
<div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
<h3 class="wp-block-heading" style="font-size:18px;font-weight:700;margin-top:0;color:#173c63;">📋 Table of Contents</h3>
<ul class="wp-block-list" style="margin-bottom:0;line-height:1.7;">
<li><a href="#three-meanings">The Three Answers to "How Long Does TMS Therapy Last?"</a></li>
<li><a href="#session-length">How Long Does a Single TMS Session Last?</a></li>
<li><a href="#course-length">How Long Does a Full Course of TMS Take?</a></li>
<li><a href="#week-by-week">Week-by-Week TMS Treatment Timeline</a></li>
<li><a href="#results-last">How Long Do TMS Results Last?</a></li>
<li><a href="#durability-factors">Factors That Affect How Long TMS Benefits Last</a></li>
<li><a href="#maintenance">Booster Sessions, Maintenance &amp; Retreatment</a></li>
<li><a href="#final-thoughts">Final Thoughts</a></li>
<li><a href="#faq">Frequently Asked Questions (FAQ)</a></li>
</ul>
</div>
</div>

<h2 id="three-meanings">The Three Answers to "How Long Does TMS Therapy Last?"</h2>
<p>When people search for <strong>how long does TMS therapy last</strong>, they usually mean one of three things. Each has a different answer:</p>
<ul class="wp-block-list">
<li><strong>Session length:</strong> How long you sit in the treatment chair each visit, usually <strong>3 to 37 minutes</strong>.</li>
<li><strong>Course length:</strong> How many weeks of treatment you need, usually <strong>6 to 9 weeks</strong> on a standard schedule.</li>
<li><strong>Durability of results:</strong> How long the improvement lasts after treatment ends, often <strong>12 months or more</strong> for patients who respond.</li>
</ul>
<p>Let's look at each one in detail.</p>

<h2 id="session-length">How Long Does a Single TMS Session Last?</h2>
<p><strong>Short answer:</strong> Most TMS sessions last <strong>about 19 to 37 minutes</strong> with standard repetitive TMS (rTMS), or <strong>about 3 to 10 minutes</strong> with theta burst stimulation. Including check-in and setup, plan on 30 to 45 minutes per visit.</p>
<p>Session length depends on the stimulation protocol your psychiatrist prescribes. All protocols are delivered while you are awake and seated. No anesthesia is used, and you can drive yourself home and return to work right after.</p>

<table class="article-table">
<thead>
<tr>
<th>TMS Protocol</th>
<th>Time in the Chair</th>
<th>Typical Schedule</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Standard rTMS (10 Hz)</strong></td>
<td>~19 to 37 minutes</td>
<td>1 session/day, 5 days/week</td>
</tr>
<tr>
<td><strong>Intermittent Theta Burst (iTBS)</strong></td>
<td>~3 to 10 minutes</td>
<td>1 session/day, 5 days/week</td>
</tr>
<tr>
<td><strong>Deep TMS (H-coil)</strong></td>
<td>~20 minutes</td>
<td>1 session/day, 5 days/week</td>
</tr>
<tr>
<td><strong>Accelerated TMS</strong></td>
<td>Several short sessions daily</td>
<td>Multiple sessions/day over days to 1&ndash;2 weeks</td>
</tr>
</tbody>
</table>

<p>Your <strong>very first appointment takes longer</strong>, usually 60 to 90 minutes. During this visit, your clinician performs "motor threshold mapping" to find the correct coil position and the right energy level for your brain. Every session after that follows the same quick routine. To understand what happens inside the brain during each session, see our guide on <a href="how-does-tms-work">how TMS works</a>.</p>

<h2 id="course-length">How Long Does a Full Course of TMS Take?</h2>
<p><strong>Short answer:</strong> A standard course of TMS for depression lasts <strong>about 6 weeks of daily weekday sessions</strong>, followed by an optional <strong>3-week taper</strong>, for a total of roughly <strong>30 to 36 sessions over 6 to 9 weeks</strong>.</p>
<p>Consistency matters. TMS works by repeatedly stimulating underactive mood circuits in the left dorsolateral prefrontal cortex, and that repetition is what builds lasting change. Missing a session now and then is usually fine, but frequent gaps can slow progress. For a deeper look at weekly frequency, read <a href="how-often-do-you-need-tms-treatment">how often you need TMS treatment</a>, and for the full scheduling breakdown see <a href="how-long-is-tms-treatment">how long TMS treatment takes</a>.</p>

<h3>Can TMS Be Done Faster?</h3>
<p>Yes, in some cases. <strong>Accelerated TMS</strong> protocols compress treatment into several sessions per day. One FDA-cleared approach delivers 10 short sessions daily over just 5 days. Accelerated options are not right for everyone, and insurance coverage varies, so your psychiatrist will help you weigh speed against convenience and cost.</p>

<!-- In-Content CTA Card -->
<div class="in-content-cta">
<h3>Wondering If TMS Fits Your Schedule?</h3>
<p>Most of our patients complete TMS before or after work, or on a lunch break. Dr. Cyntrell Crawford and the team at <strong>Options Psychiatry</strong> will review your history, confirm eligibility, verify your insurance, and build a treatment calendar that works for your life in Reading and across Berks County.</p>
<p style="margin-bottom:0;"><a class="cta-link-btn" href="contact">Book Your TMS Consultation Today &rarr;</a></p>
</div>

<h2 id="week-by-week">Week-by-Week TMS Treatment Timeline</h2>
<p>Everyone responds at a different pace, but most patients follow a broadly similar arc:</p>
<ul class="wp-block-list">
<li><strong>Week 1 (Sessions 1&ndash;5):</strong> Mapping and adjustment. Mild scalp discomfort or headache is common and usually fades. Most people do not notice mood changes yet.</li>
<li><strong>Weeks 2&ndash;3 (Sessions 6&ndash;15):</strong> Early shifts often appear first in sleep, energy, and concentration, before mood itself improves. Some patients briefly feel worse, a phenomenon known as the <a href="is-tms-dip-normal">TMS dip</a>.</li>
<li><strong>Weeks 4&ndash;6 (Sessions 16&ndash;30):</strong> This is when many patients notice a clearer lift in mood, motivation, and interest in daily life.</li>
<li><strong>Weeks 7&ndash;9 (Taper, Sessions 31&ndash;36):</strong> Sessions are gradually reduced to help consolidate gains and support a smoother transition off treatment.</li>
</ul>
<p>If you have not responded by week 3 or 4, that is not a sign of failure. Some people are "late responders" whose improvement shows up toward the end of the course. Your psychiatrist tracks your progress with standardized rating scales and can adjust the protocol when needed. Learn more about expected outcomes in <a href="how-effective-is-tms-therapy">how effective TMS therapy is</a>.</p>

<h2 id="results-last">How Long Do TMS Results Last?</h2>
<p><strong>Short answer:</strong> For people who respond to a full course, TMS benefits commonly last <strong>12 months or longer</strong>, and many patients stay well much longer. In a large naturalistic study that followed patients for a year after acute TMS, about <strong>62% of responders still met response criteria at 12 months</strong>.</p>
<p>That durability is one of the main reasons patients choose TMS. Unlike oral antidepressants, which typically need to be taken every day to keep working, TMS creates changes in brain network activity that can persist after the last session. The <a href="https://www.nimh.nih.gov/health/topics/brain-stimulation-therapies/brain-stimulation-therapies" rel="noopener noreferrer" target="_blank">National Institute of Mental Health (NIMH)</a> recognizes rTMS as an established brain stimulation therapy for depression that has not improved with other treatments.</p>
<p>It is important to be realistic, too. Depression is often a recurring condition, and TMS is not a guaranteed permanent cure. Some patients remain well for years. Others notice symptoms returning after several months. The good news is that a return of symptoms is usually manageable, and patients who responded once often respond again.</p>

<h3>Signs Your TMS Benefits May Be Fading</h3>
<ul class="wp-block-list">
<li>Returning low mood or loss of interest lasting more than two weeks</li>
<li>Changes in sleep, appetite, or energy that mirror your earlier depression</li>
<li>Pulling away from friends, family, or activities you enjoyed after treatment</li>
<li>Increased irritability, hopelessness, or difficulty concentrating at work</li>
</ul>
<p>If you notice these early warning signs, contact your psychiatrist promptly. Early intervention typically leads to faster recovery.</p>

<h2 id="durability-factors">Factors That Affect How Long TMS Benefits Last</h2>
<p>Several factors influence both how quickly TMS works and how long the improvement holds:</p>
<ul class="wp-block-list">
<li><strong>Remission vs. partial response:</strong> Patients who reach full remission (minimal symptoms) tend to stay well longer than those with only partial improvement.</li>
<li><strong>Completing the full course:</strong> Finishing all prescribed sessions, including the taper, supports more durable results.</li>
<li><strong>Ongoing therapy:</strong> Combining TMS with psychotherapy helps people build coping skills that protect against relapse.</li>
<li><strong>Medication management:</strong> Many patients continue an antidepressant after TMS. Careful <a href="medication-management-options">medication management</a> can extend benefits.</li>
<li><strong>Life stressors:</strong> Major losses, chronic stress, or trauma can trigger relapse, which is why ongoing support matters.</li>
<li><strong>Healthy routines:</strong> Regular sleep, physical activity, sunlight exposure, and limiting alcohol all support brain health and mood stability.</li>
<li><strong>Depression history:</strong> People with many prior episodes or long-standing treatment-resistant depression may benefit from a planned maintenance schedule.</li>
</ul>

<h2 id="maintenance">Booster Sessions, Maintenance &amp; Retreatment</h2>
<p>If symptoms return, you have options. TMS can be repeated, and research suggests most patients who responded the first time respond well to reintroduction.</p>

<h3>Booster (Reintroduction) Sessions</h3>
<p>A short series of sessions, sometimes over 1 to 3 weeks, used when early symptoms reappear. The goal is to restore benefits before a full depressive episode develops.</p>

<h3>Maintenance TMS</h3>
<p>For patients with a history of frequent relapse, some psychiatrists recommend scheduled maintenance sessions, such as once a week tapering to once a month, to help prevent symptoms from returning.</p>

<h3>Full Retreatment Course</h3>
<p>If depression fully returns, a second complete course may be recommended. Many insurance plans will consider coverage for retreatment when you showed a clear response the first time. Coverage rules differ, so learn more about <a href="is-tms-therapy-covered-by-insurance">TMS insurance coverage</a> and <a href="how-much-does-tms-cost">the cost of TMS</a> before planning.</p>

<!-- Final Callout CTA Card -->
<div class="final-cta-card">
<h3>Start Your TMS Journey With a Clear Plan</h3>
<p class="subtext">You deserve to know exactly what treatment will look like, from your first session to long-term follow-up. At Options Psychiatry, Dr. Cyntrell Crawford provides thorough TMS evaluations, personalized protocols, insurance verification, and ongoing aftercare for patients in Reading, Wyomissing, West Reading, Sinking Spring, and across Pennsylvania.</p>
<a class="main-cta-btn" href="contact">Schedule Your TMS Consultation in Reading, PA</a>
<div class="contact-meta">
<p>Prefer to speak directly? Call our clinic today at <a href="tel:6107416567">(610) 741-6567</a> | In-Person TMS in Reading &amp; Telehealth Evaluations Throughout Pennsylvania</p>
</div>
</div>

<h2 class="wp-block-heading" id="final-thoughts">Final Thoughts</h2>
<p>So, <strong>how long does TMS therapy last?</strong> Each session takes minutes, a full course usually takes 6 to 9 weeks, and for many people who respond, the benefits last a year or longer. Just as important, TMS is repeatable. If symptoms ever return, booster sessions or a second course can help you regain your footing.</p>
<p>TMS is a meaningful time investment, but for adults who have not found relief with antidepressants, it can open a path to lasting improvement without the systemic side effects of additional medications. Not sure whether you qualify? Review <a href="who-is-eligible-for-tms-therapy">who is eligible for TMS therapy</a>, read about <a href="tms-therapy-side-effects-explained">TMS side effects</a>, or take our quick <a href="tms-quiz">TMS self-assessment quiz</a>.</p>
<p>At <strong>Options Psychiatry</strong> in Reading, PA, <a href="dr-crawford">Dr. Cyntrell Crawford</a> and our team will help you understand your personal timeline, coordinate your sessions, and support you long after your final treatment. Visit our <a href="tms-therapy-reading">TMS therapy in Reading</a> page or reach out today to get started.</p>

<!-- FAQ Accordion Section -->
<section class="opt-section-faq" id="faq">
    <div class="opt-section-header">
        <h2>Frequently Asked Questions</h2>
        <p>Expert psychiatric answers to common questions about TMS session length, treatment duration, and how long TMS results last.</p>
    </div>

    <div class="opt-faq-accordion" id="faq-accordion">
        <div class="opt-faq-item rank-math-list-item" id="faq-question-1">
            <button type="button" class="opt-faq-question rank-math-question" aria-expanded="false">
                <span>How long does TMS therapy last in total?</span>
                <span class="opt-faq-toggle"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="opt-faq-answer rank-math-answer">
                <p>A standard course of TMS therapy for depression lasts about 6 weeks of daily weekday sessions, often followed by a 3-week taper. Most patients complete roughly 30 to 36 sessions over 6 to 9 weeks. Accelerated protocols can shorten this to days or a couple of weeks.</p>
            </div>
        </div>

        <div class="opt-faq-item rank-math-list-item" id="faq-question-2">
            <button type="button" class="opt-faq-question rank-math-question" aria-expanded="false">
                <span>How long does each TMS session take?</span>
                <span class="opt-faq-toggle"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="opt-faq-answer rank-math-answer">
                <p>A standard rTMS session takes about 19 to 37 minutes, while theta burst stimulation takes about 3 to 10 minutes. With check-in and setup, plan on 30 to 45 minutes per visit. The first appointment takes longer, about 60 to 90 minutes, because of motor threshold mapping.</p>
            </div>
        </div>

        <div class="opt-faq-item rank-math-list-item" id="faq-question-3">
            <button type="button" class="opt-faq-question rank-math-question" aria-expanded="false">
                <span>How long do the effects of TMS last after treatment ends?</span>
                <span class="opt-faq-toggle"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="opt-faq-answer rank-math-answer">
                <p>For patients who respond, TMS benefits commonly last 12 months or longer. In a large one-year follow-up study, about 62% of patients who responded to TMS still met response criteria 12 months later. Results vary, and some patients stay well for years.</p>
            </div>
        </div>

        <div class="opt-faq-item rank-math-list-item" id="faq-question-4">
            <button type="button" class="opt-faq-question rank-math-question" aria-expanded="false">
                <span>How soon will I notice results from TMS therapy?</span>
                <span class="opt-faq-toggle"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="opt-faq-answer rank-math-answer">
                <p>Many patients notice early changes in sleep, energy, or focus within 2 to 3 weeks, with clearer mood improvement around weeks 4 to 6. Some people are late responders and improve near the end of the course. A temporary dip in mood during treatment can also occur.</p>
            </div>
        </div>

        <div class="opt-faq-item rank-math-list-item" id="faq-question-5">
            <button type="button" class="opt-faq-question rank-math-question" aria-expanded="false">
                <span>Can TMS therapy be repeated if depression comes back?</span>
                <span class="opt-faq-toggle"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="opt-faq-answer rank-math-answer">
                <p>Yes. TMS can be repeated. Options include short booster sessions when early symptoms return, scheduled maintenance sessions, or a full second course. Patients who responded the first time often respond well again, and many insurance plans consider coverage for retreatment.</p>
            </div>
        </div>

        <div class="opt-faq-item rank-math-list-item" id="faq-question-6">
            <button type="button" class="opt-faq-question rank-math-question" aria-expanded="false">
                <span>Is TMS a permanent cure for depression?</span>
                <span class="opt-faq-toggle"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="opt-faq-answer rank-math-answer">
                <p>TMS is not a guaranteed permanent cure, because depression is often a recurring condition. However, it can produce long-lasting relief for many patients, and benefits can be extended with psychotherapy, medication management, healthy routines, and booster sessions when needed.</p>
            </div>
        </div>

        <div class="opt-faq-item rank-math-list-item" id="faq-question-7">
            <button type="button" class="opt-faq-question rank-math-question" aria-expanded="false">
                <span>Does insurance cover the full length of TMS treatment?</span>
                <span class="opt-faq-toggle"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="opt-faq-answer rank-math-answer">
                <p>Many insurance plans, including Medicare and major commercial carriers, cover a full course of TMS (often up to 36 sessions) for adults with treatment-resistant depression who meet medical criteria. Coverage details vary, so Options Psychiatry verifies your benefits before treatment begins.</p>
            </div>
        </div>

        <div class="opt-faq-item rank-math-list-item" id="faq-question-8">
            <button type="button" class="opt-faq-question rank-math-question" aria-expanded="false">
                <span>Where can I get TMS therapy near Reading, PA?</span>
                <span class="opt-faq-toggle"><i class="fas fa-chevron-down"></i></span>
            </button>
            <div class="opt-faq-answer rank-math-answer">
                <p>Options Psychiatry offers FDA-cleared TMS therapy at 2211 Quarry Drive, Suite E56, in Reading, PA, serving patients from Wyomissing, West Reading, Sinking Spring, Berks County, and across Pennsylvania. Call (610) 741-6567 to schedule a consultation.</p>
            </div>
        </div>

    </div>
</section>


<script>
(function() {
    function initFaqFloatingAccordion() {
        const accordion = document.getElementById('faq-accordion');
        if (!accordion) return;
        
        if (accordion.getAttribute('data-init') === '1') return;
        accordion.setAttribute('data-init', '1');

        accordion.addEventListener('click', function(e) {
            const btn = e.target.closest('.opt-faq-question');
            if (!btn) return;
            e.preventDefault();

            const item = btn.closest('.opt-faq-item');
            if (!item) return;
            const isActive = item.classList.contains('opt-active');

            // Close all sibling cards
            accordion.querySelectorAll('.opt-faq-item').forEach(function(sibling) {
                if (sibling !== item) {
                    sibling.classList.remove('opt-active');
                    const b = sibling.querySelector('.opt-faq-question');
                    if (b) b.setAttribute('aria-expanded', 'false');
                }
            });

            // Toggle selected card
            if (isActive) {
                item.classList.remove('opt-active');
                btn.setAttribute('aria-expanded', 'false');
            } else {
                item.classList.add('opt-active');
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFaqFloatingAccordion);
    } else {
        initFaqFloatingAccordion();
    }
})();
</script>

<!-- Valid Schema.org JSON-LD (Article/BlogPosting, FAQPage, MedicalClinic, BreadcrumbList) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.optionspa.com/how-long-does-tms-therapy-last#article",
      "isPartOf": {
        "@type": "WebPage",
        "@id": "https://www.optionspa.com/how-long-does-tms-therapy-last"
      },
      "headline": "How Long Does TMS Therapy Last? Sessions, Timeline & Results",
      "description": "How long does TMS therapy last? Sessions take 3–37 minutes, a full course runs 6–9 weeks, and results often last a year or more. See the full TMS timeline.",
      "mainEntityOfPage": "https://www.optionspa.com/how-long-does-tms-therapy-last",
      "datePublished": "2026-11-09T09:00:00-05:00",
      "dateModified": "2026-11-09T09:00:00-05:00",
      "inLanguage": "en-US",
      "articleSection": "TMS Therapy",
      "author": {
        "@type": "Person",
        "name": "Dr. Cyntrell Crawford",
        "jobTitle": "Board-Certified Psychiatrist & Medical Director",
        "url": "https://www.optionspa.com/dr-crawford"
      },
      "publisher": {
        "@type": "MedicalClinic",
        "name": "Options Psychiatry",
        "url": "https://www.optionspa.com/",
        "logo": {
          "@type": "ImageObject",
          "url": "https://www.optionspa.com/wp-content/uploads/2022/04/OPTIONS-ADDICTION-RECOVERY.png"
        },
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "2211 Quarry Drive, Suite E56",
          "addressLocality": "Reading",
          "addressRegion": "PA",
          "postalCode": "19609",
          "addressCountry": "US"
        },
        "telephone": "(610) 741-6567"
      },
      "image": {
        "@type": "ImageObject",
        "url": "https://www.optionspa.com/wp-content/uploads/2026/11/how-long-does-tms-therapy-last-apollo-tms-thumbnail.webp",
        "width": 1376,
        "height": 768,
        "caption": "How long does TMS therapy last - patient in a TMS treatment chair while a clinician positions the magnetic coil at Options Psychiatry in Reading, PA"
      },
      "about": {
        "@type": "MedicalTherapy",
        "name": "Transcranial Magnetic Stimulation",
        "sameAs": "https://en.wikipedia.org/wiki/Transcranial_magnetic_stimulation"
      },
      "keywords": [
        "how long does tms therapy last",
        "how long do tms results last",
        "how long is a tms session",
        "tms treatment timeline",
        "how many tms sessions do you need",
        "tms booster sessions",
        "tms maintenance therapy",
        "tms therapy reading pa",
        "options psychiatry reading pa"
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.optionspa.com/how-long-does-tms-therapy-last#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long does TMS therapy last in total?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard course of TMS therapy for depression lasts about 6 weeks of daily weekday sessions, often followed by a 3-week taper. Most patients complete roughly 30 to 36 sessions over 6 to 9 weeks. Accelerated protocols can shorten this to days or a couple of weeks."
          }
        },
        {
          "@type": "Question",
          "name": "How long does each TMS session take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard rTMS session takes about 19 to 37 minutes, while theta burst stimulation takes about 3 to 10 minutes. With check-in and setup, plan on 30 to 45 minutes per visit. The first appointment takes longer, about 60 to 90 minutes, because of motor threshold mapping."
          }
        },
        {
          "@type": "Question",
          "name": "How long do the effects of TMS last after treatment ends?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For patients who respond, TMS benefits commonly last 12 months or longer. In a large one-year follow-up study, about 62% of patients who responded to TMS still met response criteria 12 months later. Results vary, and some patients stay well for years."
          }
        },
        {
          "@type": "Question",
          "name": "How soon will I notice results from TMS therapy?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Many patients notice early changes in sleep, energy, or focus within 2 to 3 weeks, with clearer mood improvement around weeks 4 to 6. Some people are late responders and improve near the end of the course. A temporary dip in mood during treatment can also occur."
          }
        },
        {
          "@type": "Question",
          "name": "Can TMS therapy be repeated if depression comes back?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. TMS can be repeated. Options include short booster sessions when early symptoms return, scheduled maintenance sessions, or a full second course. Patients who responded the first time often respond well again, and many insurance plans consider coverage for retreatment."
          }
        },
        {
          "@type": "Question",
          "name": "Is TMS a permanent cure for depression?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TMS is not a guaranteed permanent cure, because depression is often a recurring condition. However, it can produce long-lasting relief for many patients, and benefits can be extended with psychotherapy, medication management, healthy routines, and booster sessions when needed."
          }
        },
        {
          "@type": "Question",
          "name": "Does insurance cover the full length of TMS treatment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Many insurance plans, including Medicare and major commercial carriers, cover a full course of TMS (often up to 36 sessions) for adults with treatment-resistant depression who meet medical criteria. Coverage details vary, so Options Psychiatry verifies your benefits before treatment begins."
          }
        },
        {
          "@type": "Question",
          "name": "Where can I get TMS therapy near Reading, PA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Options Psychiatry offers FDA-cleared TMS therapy at 2211 Quarry Drive, Suite E56, in Reading, PA, serving patients from Wyomissing, West Reading, Sinking Spring, Berks County, and across Pennsylvania. Call (610) 741-6567 to schedule a consultation."
          }
        }
      ]
    },
    {
      "@type": "MedicalClinic",
      "@id": "https://www.optionspa.com/#organization",
      "name": "Options Psychiatry",
      "url": "https://www.optionspa.com",
      "logo": "https://www.optionspa.com/wp-content/uploads/2022/04/OPTIONS-ADDICTION-RECOVERY.png",
      "telephone": "(610) 741-6567",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2211 Quarry Drive, Suite E56",
        "addressLocality": "Reading",
        "addressRegion": "PA",
        "postalCode": "19609",
        "addressCountry": "US"
      },
      "medicalSpecialty": "Psychiatry"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.optionspa.com/how-long-does-tms-therapy-last#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.optionspa.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Blog",
          "item": "https://www.optionspa.com/blog"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "How Long Does TMS Therapy Last?",
          "item": "https://www.optionspa.com/how-long-does-tms-therapy-last"
        }
      ]
    }
  ]
}
</script>

<span class="tve-leads-two-step-trigger tl-2step-trigger-0"></span>
</section>

<!-- Previous / Next Navigation -->
<div class="thrv_wrapper thrive_prev_next tcb-compact-element tcb-local-vars-root" data-css="tve-u-172dc113ef3" data-ct="thrive_prev_next-qbebs7" data-ct-name="Previous Next Template 02">
<div class="thrive-prev-next-container">
<div class="thrv_wrapper thrv-columns" data-css="tve-u-1746d2d48e9" style="--tcb-col-el-width: 595.703;">
<div class="tcb-flex-row" data-css="tve-u-1746d2d48ea">
<div class="wrapper-shortcode tcb-flex-col ui-resizable" data-shortcode="thrive_prev_column">
<div class="tcb-col">
<div class="tcb-clear" data-css="tve-u-1746d2d48eb">
<div class="thrv_wrapper thrv-button thrv-button-v2 tcb-local-vars-root thrv-prev-next-button tcb-with-icon tcb_post_prev_link" data-button-style="btn-tpl-61034" data-css="tve-u-1746d2d48ec">
<a class="tcb-button-link tve-dynamic-link" dynamic-postlink="tcb_post_prev_link" href="seasonal-depression-in-fall-and-winter-signs-causes-and-treatment-options">
<span class="tcb-button-icon">
<div class="thrv_wrapper thrv_icon tve_no_drag tve_no_icons tcb-icon-inherit-style tcb-icon-display tcb-local-vars-root" data-css="tve-u-1746d2d48ed"><svg class="tcb-icon" data-id="icon-angle-double-left-solid" viewbox="0 0 448 512"><path d="M223.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L319.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L393.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34zm-192 34l136 136c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9L127.9 256l96.4-96.4c9.4-9.4 9.4-24.6 0-33.9L201.7 103c-9.4-9.4-24.6-9.4-33.9 0l-136 136c-9.5 9.4-9.5 24.6-.1 34z"></path></svg></div>
</span>
<span class="tcb-button-texts">
<span class="tcb-button-text thrv-inline-text">Previous Article</span>
</span>
</a>
</div>
</div>
</div>
</div>
<div class="wrapper-shortcode tcb-flex-col ui-resizable" data-shortcode="thrive_next_column">
<div class="tcb-col">
<div class="tcb-clear" data-css="tve-u-1746d2d48ee">
<div class="thrv_wrapper thrv-button thrv-button-v2 tcb-local-vars-root thrv-prev-next-button tcb-with-icon tcb-excluded-from-group-item tcb-flip tcb_post_next_link" data-button-size="s" data-button-style="btn-tpl-61034" data-css="tve-u-1746d2d48ef">
<a class="tcb-button-link tve-dynamic-link" dynamic-postlink="tcb_post_next_link" href="how-long-is-tms-treatment">
<span class="tcb-button-icon">
<div class="thrv_wrapper thrv_icon tve_no_drag tve_no_icons tcb-icon-inherit-style tcb-icon-display tcb-local-vars-root" data-css="tve-u-1746d2d48f0"><svg class="tcb-icon" data-id="icon-angle-double-right-solid" viewbox="0 0 448 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"></path></svg></div>
</span>
<span class="tcb-button-texts">
<span class="tcb-button-text thrv-inline-text">Next Article</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Share Widget -->
<div class="thrv_wrapper thrv_contentbox_shortcode thrv-content-box tve-elem-default-pad tcb-local-vars-root" data-css="tve-u-16f89edb649">
<div class="tve-content-box-background" data-css="tve-u-17130612c5d"></div>
<div class="tve-cb">
<div class="thrv_wrapper thrv_icon tcb-icon-display" data-css="tve-u-16f89eb68c9" data-float-d="1">
<svg class="tcb-icon" data-id="icon-share-alt-solid" viewbox="0 0 448 512">
<path d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z"></path>
</svg>
</div>
<div class="thrv_wrapper thrv_text_element" data-css="tve-u-16f89e98101"><p data-css="tve-u-16f89e87f26">share this</p></div>
<div class="thrv_wrapper thrv_social_custom thrv_social" data-css="tve-u-16f89e8f368">
<div class="tve_social_items tve_social_custom tve_style_4 tve_social_cb">
<div class="tve_s_item tve_s_fb_share" data-href="https://www.optionspa.com/how-long-does-tms-therapy-last" data-label="Share" data-s="fb_share">
<a class="tve_s_link" href="javascript:void(0)"><span class="tve_s_icon thrv-svg-icon"><svg class="tcb-facebook" viewbox="0 0 16 28" xmlns="http://www.w3.org/2000/svg"><path d="M14.984 0.187v4.125h-2.453q-1.344 0-1.813 0.562t-0.469 1.687v2.953h4.578l-0.609 4.625h-3.969v11.859h-4.781v-11.859h-3.984v-4.625h3.984v-3.406q0-2.906 1.625-4.508t4.328-1.602q2.297 0 3.563 0.187z"></path></svg></span><span class="tve_s_text">Share</span><span class="tve_s_count">0</span></a>
</div>
<div class="tve_s_item tve_s_t_share" data-href="https://www.optionspa.com/how-long-does-tms-therapy-last" data-label="Tweet" data-s="t_share">
<a class="tve_s_link" href="javascript:void(0)"><span class="tve_s_icon thrv-svg-icon"><svg class="tcb-twitter" viewbox="0 0 26 28" xmlns="http://www.w3.org/2000/svg"><path d="M25.312 6.375q-1.047 1.531-2.531 2.609 0.016 0.219 0.016 0.656 0 2.031-0.594 4.055t-1.805 3.883-2.883 3.289-4.031 2.281-5.047 0.852q-4.234 0-7.75-2.266 0.547 0.063 1.219 0.063 3.516 0 6.266-2.156-1.641-0.031-2.938-1.008t-1.781-2.492q0.516 0.078 0.953 0.078 0.672 0 1.328-0.172-1.75-0.359-2.898-1.742t-1.148-3.211v-0.063q1.062 0.594 2.281 0.641-1.031-0.688-1.641-1.797t-0.609-2.406q0-1.375 0.688-2.547 1.891 2.328 4.602 3.727t5.805 1.555q-0.125-0.594-0.125-1.156 0-2.094 1.477-3.57t3.57-1.477q2.188 0 3.687 1.594 1.703-0.328 3.203-1.219-0.578 1.797-2.219 2.781 1.453-0.156 2.906-0.781z"></path></svg></span><span class="tve_s_text">Tweet</span><span class="tve_s_count">0</span></a>
</div>
<div class="tve_s_item tve_s_pin_share" data-href="https://www.optionspa.com/how-long-does-tms-therapy-last" data-label="Pin" data-s="pin_share">
<a class="tve_s_link" href="javascript:void(0)"><span class="tve_s_icon thrv-svg-icon"><svg class="tcb-pinterest" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M16 0c-8.837 0-16 7.163-16 16 0 6.778 4.217 12.568 10.169 14.899-0.14-1.266-0.266-3.208 0.055-4.59 0.291-1.249 1.876-7.953 1.876-7.953s-0.479-0.958-0.479-2.375c0-2.225 1.29-3.886 2.895-3.886 1.365 0 2.024 1.025 2.024 2.254 0 1.373-0.874 3.425-1.325 5.327-0.377 1.593 0.799 2.892 2.369 2.892 2.844 0 5.030-2.999 5.030-7.327 0-3.831-2.753-6.509-6.683-6.509-4.552 0-7.225 3.415-7.225 6.943 0 1.375 0.53 2.85 1.191 3.651 0.131 0.158 0.15 0.297 0.111 0.459-0.121 0.506-0.391 1.593-0.444 1.815-0.070 0.293-0.232 0.355-0.535 0.214-1.998-0.93-3.248-3.852-3.248-6.198 0-5.047 3.667-9.682 10.572-9.682 5.55 0 9.864 3.955 9.864 9.241 0 5.514-3.477 9.952-8.302 9.952-1.621 0-3.145-0.842-3.667-1.837 0 0-0.802 3.055-0.997 3.803-0.361 1.39-1.337 3.132-1.989 4.195 1.497 0.463 3.088 0.713 4.738 0.713 8.836-0 16-7.163 16-16s-7.163-16-16-16z"></path></svg></span><span class="tve_s_text">Pin</span><span class="tve_s_count">0</span></a>
</div>
</div>
</div>
</div>
</div>

<!-- Related Posts Section -->
<div class="thrv_wrapper thrv_text_element" data-css="tve-u-16f8a030d58">
<p data-css="tve-u-16f8a0331a3">Related TMS Therapy Insights</p>
</div>
<div class="tcb-post-list tve-content-list thrv_wrapper" data-css="tve-u-16f8a014a2f" data-type="grid">

<article class="post-item post-wrapper thrv_wrapper" style="margin-bottom:20px;">
<div style="background:#ffffff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.05);display:flex;flex-direction:column;height:100%;">
<a href="how-long-is-tms-treatment" style="display:block;height:180px;overflow:hidden;">
<img decoding="async" loading="lazy" height="750" width="1170" src="wp-content/uploads/2026/01/how-long-is-tms-treatment-timeline.jpg" alt="How long is TMS treatment timeline" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;">
</a>
<div style="padding:18px;display:flex;flex-direction:column;flex-grow:1;">
<h4 style="margin:0 0 10px 0;font-size:17px;font-weight:700;line-height:1.4;"><a href="how-long-is-tms-treatment" style="color:#173c63;text-decoration:none;">How Long Is TMS Treatment? Timeline, Sessions &amp; Schedule</a></h4>
<p style="font-size:14px;color:#555;line-height:1.6;margin-bottom:16px;flex-grow:1;">A detailed look at TMS session scheduling, weekly frequency, and what to expect from your first visit to your last.</p>
<a href="how-long-is-tms-treatment" style="color:#2f8be7;font-weight:700;font-size:14px;text-decoration:none;">Read Article &rarr;</a>
</div>
</div>
</article>

<article class="post-item post-wrapper thrv_wrapper" style="margin-bottom:20px;">
<div style="background:#ffffff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.05);display:flex;flex-direction:column;height:100%;">
<a href="is-tms-dip-normal" style="display:block;height:180px;overflow:hidden;">
<img decoding="async" loading="lazy" height="832" width="1248" src="wp-content/uploads/2026/01/Gemini_Generated_Image_50j5ff50j5ff50j5.webp" alt="Is the TMS dip normal" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;">
</a>
<div style="padding:18px;display:flex;flex-direction:column;flex-grow:1;">
<h4 style="margin:0 0 10px 0;font-size:17px;font-weight:700;line-height:1.4;"><a href="is-tms-dip-normal" style="color:#173c63;text-decoration:none;">Is the TMS Dip Normal? What It Means, How Long It Lasts &amp; What to Do</a></h4>
<p style="font-size:14px;color:#555;line-height:1.6;margin-bottom:16px;flex-grow:1;">Understand why some patients feel temporarily worse mid-treatment and why it is usually not a sign that TMS is failing.</p>
<a href="is-tms-dip-normal" style="color:#2f8be7;font-weight:700;font-size:14px;text-decoration:none;">Read Article &rarr;</a>
</div>
</div>
</article>

<article class="post-item post-wrapper thrv_wrapper" style="margin-bottom:20px;">
<div style="background:#ffffff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.05);display:flex;flex-direction:column;height:100%;">
<a href="how-effective-is-tms-therapy" style="display:block;height:180px;overflow:hidden;">
<img decoding="async" loading="lazy" height="734" width="1100" src="wp-content/uploads/2025/07/TMS-Apollo.webp" alt="How effective is TMS therapy" style="width:100%;height:100%;object-fit:cover;transition:transform 0.3s ease;">
</a>
<div style="padding:18px;display:flex;flex-direction:column;flex-grow:1;">
<h4 style="margin:0 0 10px 0;font-size:17px;font-weight:700;line-height:1.4;"><a href="how-effective-is-tms-therapy" style="color:#173c63;text-decoration:none;">How Effective is TMS Therapy? Essential Results Explained</a></h4>
<p style="font-size:14px;color:#555;line-height:1.6;margin-bottom:16px;flex-grow:1;">Explore TMS response and remission rates and the factors that influence your chances of lasting relief.</p>
<a href="how-effective-is-tms-therapy" style="color:#2f8be7;font-weight:700;font-size:14px;text-decoration:none;">Read Article &rarr;</a>
</div>
</div>
</article>


</div>

</div>
</div>
</div>
</div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
</div><!-- #page -->

<script id="jquery-core-js" src="wp-includes/js/jquery/jquery.min__qf43b551b.js" type="text/javascript" defer></script>
<script id="jquery-migrate-js" src="wp-includes/js/jquery/jquery-migrate.min__q558973c0.js" type="text/javascript" defer></script>
</body>
</html>
