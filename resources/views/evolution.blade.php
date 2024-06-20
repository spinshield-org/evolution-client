<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,viewport-fit=cover,interactive-widget=resizes-content">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Casino">
    <meta name="author" content="Evolution Gaming">
    <meta name="build" content="Build Version: 6.20240619.72648.42301-f895168235 at 2024-06-20 07:43:51 UTC" id="build">
    <meta name="browsermode" content="application">
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <meta name="google" content="notranslate">
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <title data-sandbox="ignore">Casino</title><noscript><div id="loader-popup"><div><label>Please enable JavaScript in your browser or ad-block settings.</label><a href="">Retry</a></div></div></noscript>
    <script>
        (function() {
            "use strict";
            try {
                Function("var{x,...y}={x:1,...{a:2}};if(y.a!==2||x!==1||!PointerEvent)throw y;")()
            } catch (Z) {
                n("ES2017 or PointerEvent")
            }
            var Z = new Image;

            function n(Z) {
                Z = "This browser does not support " + Z + ". Redirecting to the error page...";
                try {
                    console.error(Z)
                } catch (Z) {}
                location.href = "/frontend/evo/errors/unsupported-browsers.html" + location.search + location.hash
            }
            Z.onerror = function() {
                n("WebP")
            }, Z.src = "data:image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA=="
        })()
    </script>
    <script>
        (function() {
            "use strict";
            try {
                eval("Promise=class P extends Promise{constructor(...a){super(...a);this.__stackTraceError=new Error('Promise created');}}")
            } catch (N) {}
            window.globalThis || (window.globalThis = window), null == Element.prototype.getAttributeNames && (Element.prototype.getAttributeNames = function() {
                    const N = this.attributes,
                        k = N.length,
                        b = new Array(k);
                    for (let n = 0; n < k; n++) b[n] = N[n].name;
                    return b
                }),
                function(N) {
                    const k = N.performance || (N.performance = {});

                    function b() {}
                    k.mark || (k.mark = b), k.measure || (k.measure = b), N[Symbol("iOS weakref hack")] = k
                }(globalThis)
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const i = window.location,
                O = i.pathname;
            "/" !== O.slice(-1) && ".html" !== O.slice(-5) && i.replace(`${O}/${i.search}${i.hash}`);
            const q = {};
            for (const i of document.cookie.split(";")) {
                const [O, f] = i.replace(/^\s*(.*)\s*$/, "$1").split(/\s*=\s*(.+)/);
                q[O] = O in q ? void 0 : f
            }
            if (!q.cdn && !q.locale) try {
                const O = new URLSearchParams(i.hash.substr(1));
                q.locale = O.get("locale");
                const f = O.get("cdn");
                f && new URL(f).origin.endsWith(".egcdn.com") && (q.cdn = f)
            } catch (i) {}
            window.EVO_CDN = q.ignore_cdn ? "" : (q.cdn || "").replace(/\/+$/, ""), window.EVO_LOCALE = q.locale || void 0, window.EVO_VERBOSE = function() {
                return !1
            }, window.EVO_VERBOSE_ENABLE = function() {
                window.EVO_VERBOSE() || (document.cookie = "verbose=true; path=/", window.EVO_VERBOSE = function(i, O, q, f) {
                    if (!i) return !0;
                    const j = document.getElementById("verbose-log") || document.body;
                    if (!j) return !0;
                    let L = null,
                        S = !1;
                    if (q && (L = j.querySelector(`[data-key="${q}"]`)), L) {
                        const i = L.getAttribute("data-timer");
                        i && window.clearTimeout(parseFloat(i))
                    } else L = document.createElement("div"), q && L.setAttribute("data-key", q), S = !0;
                    if (L.textContent = i, L.style.color = ["", "#ffc", "#fcc"][O || 0], f) {
                        const i = window.setTimeout((() => {
                            L.parentNode === j && j.removeChild(L)
                        }), f);
                        L.setAttribute("data-timer", i.toString())
                    }
                    return S && (j.appendChild(L), j.scrollTop = j.offsetHeight), !0
                }, window.addEventListener("error", j, !0))
            }, window.EVO_VERBOSE_DISABLE = function() {
                document.cookie = "verbose=false; path=/", window.EVO_VERBOSE = function() {
                    return !1
                }, window.removeEventListener("error", j, !0)
            };
            const f = window.location.href.indexOf("verbose=") > -1;

            function j(i) {
                var O;
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                let q = (null === (O = i.error) || void 0 === O ? void 0 : O.stack) || i.message;
                i.filename && (q += ` ${i.filename}`), window.EVO_VERBOSE(q, 2, "", 1e4)
            }("true" === q.verbose || f) && window.EVO_VERBOSE_ENABLE(), window.addEventListener("unhandledrejection", (i => {
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                const O = i.reason;
                let q = `${O}`;
                const f = O instanceof Error ? O.stack : "";
                (null == O ? void 0 : O.name) && -1 === q.indexOf(O.name) && (q += ` ${O.name}`), (null == O ? void 0 : O.message) && -1 === q.indexOf(O.message) && (q += ` ${O.message}`);
                const j = `Unhandled promise rejection, reason: ${q}`,
                    L = new Error(j),
                    S = i.promise.__stackTraceError,
                    N = S ? S.stack.substr(7).replace(/\\n.*\\n/, "\\n") : "";
                L.stack = `${j}\n${N}\n${f}`, window.EVO_VERBOSE(j, 2), "undefined" != typeof Sentry && Sentry.captureException(L)
            })), window.EVO_VERBOSE("6.20240619.72648.42301-f895168235"), window.EVO_CDN && window.EVO_VERBOSE(`cdn: ${window.EVO_CDN}`), window.EVO_POPUP = function(i, O) {
                const q = document.getElementById("loader-popup"),
                    f = j("div", j("label", i));

                function j(i, O) {
                    const q = document.createElement(i);
                    return q.appendChild(function(i) {
                        return "undefined" != typeof Node ? i instanceof Node : "object" == typeof i
                    }(O) ? O : document.createTextNode(O)), q
                }
                null == O || O.forEach((function(i) {
                    const O = j("button", i.content);
                    O.onclick = function() {
                        var O;
                        null === (O = i.callback) || void 0 === O || O.call(i), q.removeChild(f)
                    }, f.appendChild(O)
                })), -1 === q.innerHTML.indexOf(f.outerHTML) && q.appendChild(f)
            }
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const R = "service.worker.7ec0c375.js";

            function F(F) {
                return !F.active || !F.active.scriptURL.endsWith(R)
            }

            function s(R) {
                "undefined" != typeof Sentry && Sentry.captureException(R)
            }(async function() {
                if (navigator.cookieEnabled) try {
                    await async function() {
                        if (!navigator.serviceWorker) return;
                        const W = await navigator.serviceWorker.getRegistrations();
                        let b = !1;
                        for (const R of W) F(R) ? await R.unregister() : b = !0;
                        b || await navigator.serviceWorker.register(R), navigator.serviceWorker.addEventListener("message", (R => {
                            if ("processing-failed" === R.data.type) {
                                const F = new Error(R.data.message);
                                F.stack = R.data.stack, s(F)
                            }
                        }))
                    }()
                } catch (R) {
                    s(R), console.error(R)
                }
            })()
        })()
    </script>
    <style id="loader">
        .loadingScreen--87788{align-items:center;background:#000;bottom:0;display:none;justify-content:center;left:0;position:absolute;right:0;top:0;z-index:1000000}.gradient--0f1d8{background-position:50%;background-repeat:no-repeat;background-size:cover;background:linear-gradient(45deg,transparent,rgba(5,10,10,.8) 50%,transparent),linear-gradient(45deg,#414650 -5%,#050a0a 50%,#414650 105%)!important}.loadingScreen--87788.finishProgress--0c00b{opacity:0;transition:opacity .5s}.content--1ddca{position:relative}.content--1ddca.narrow--8d0d9{font-size:6.25vw;height:56.25vw;width:100vw}.content--1ddca.wide--3bffa{font-size:11.11111vh;height:100vh;width:177.77778vh}.center--9aeab{height:.88em;margin:0 auto;top:66.1%;width:2.75em}.center--9aeab,.footer--fba55{left:0;position:absolute;right:0}.footer--fba55{align-items:center;display:flex;flex-direction:column;height:.3em;top:1.15em;width:100%}.footer--fba55>div{font-size:10%;margin-top:1em;white-space:nowrap}.footer--fba55>img{animation:appearingLogoKeyframes--af0f0 .2s linear;height:100%;margin:auto;width:auto}.mobile--76605 .footer--fba55{height:.24em;top:.93em}.mobile--76605 .content--1ddca.narrow--8d0d9{font-size:17vw;height:50vw;width:85vw}.mobile--76605 .content--1ddca.wide--3bffa{font-size:20vh;height:72vh;width:66vh}.mobile--76605 .center--9aeab{bottom:0;position:absolute;top:auto}.mobile--76605 .image--44b6b{bottom:1em;height:auto;max-height:100%;object-fit:contain;position:absolute}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .footer--fba55{height:.23em;top:.9em}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .center--9aeab{bottom:.72em}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .image--44b6b{bottom:1.62em;margin-left:2.5%;width:95%}.mobile--76605.withFooterLogo--6ca4a .content--1ddca.wide--3bffa{font-size:17vh}.line1--b6711{background-image:radial-gradient(hsla(0,0%,100%,.3) 15%,hsla(0,0%,100%,.1) 60%,hsla(0,0%,100%,0) 70%);background-position:center 0,center 50%;background-repeat:no-repeat,no-repeat;height:11.765%;position:absolute;top:11.765%;visibility:hidden;width:100%}.line1--b6711:after{background-image:radial-gradient(#fff 15%,hsla(0,0%,100%,0) 70%);content:"";display:block;height:18.234%;top:44%}.line1--b6711:after,.line2--f8241{background-position:50%;background-repeat:no-repeat;position:absolute;width:100%}.line2--f8241{background-image:radial-gradient(hsla(0,0%,100%,.5) 15%,hsla(0,0%,100%,.3) 65%,hsla(0,0%,100%,0) 71%);height:1.967%;overflow:hidden;top:17%;visibility:hidden}.star1--da76f{height:47.059%;position:absolute;top:-4.96%;transition:transform .2s;visibility:hidden;width:14.546%}.star2--7a218{animation:starRotationKeyframes--daa9e 2s linear infinite;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width='48' height='48' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3CradialGradient fx='50%25' fy='50%25' r='49.1%25' id='c'%3E%3Cstop stop-color='%23fff' offset='30%25'/%3E%3Cstop stop-color='%23fff' stop-opacity='.5' offset='100%25'/%3E%3C/radialGradient%3E%3Cfilter x='-84%25' y='-84%25' width='268%25' height='268%25' filterUnits='objectBoundingBox' id='a'%3E%3CfeMorphology radius='.1' operator='dilate' in='SourceAlpha' result='d'/%3E%3CfeOffset in='d' result='e'/%3E%3CfeGaussianBlur stdDeviation='2' in='e' result='f'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0' in='f' result='g'/%3E%3CfeOffset in='SourceAlpha' result='h'/%3E%3CfeGaussianBlur stdDeviation='7' in='h' result='i'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0' in='i' result='j'/%3E%3CfeMerge%3E%3CfeMergeNode in='g'/%3E%3CfeMergeNode in='j'/%3E%3C/feMerge%3E%3C/filter%3E%3Cpath d='M17.4 14H19l11 1-11 1h-1.6l1.1 1.1 7.1 8.5-8.5-7-1.1-1.2V19l-1 11-1-11v-1.6l-1.1 1.1-8.5 7.1 7-8.5 1.2-1.1H11L0 15l11-1h1.6l-1.1-1.1-7.1-8.5 8.5 7 1.1 1.2V11l1-11 1 11v1.6l1.1-1.1 8.5-7.1-7 8.5-1.2 1.1z' id='b'/%3E%3C/defs%3E%3Cg transform='translate(8.8 8.8)' fill='none' fill-rule='evenodd'%3E%3Cuse fill='%23000' filter='url(%23a)' xlink:href='%23b'/%3E%3Cuse fill='url(%23c)' xlink:href='%23b'/%3E%3C/g%3E%3C/svg%3E");background-position:100%;background-repeat:no-repeat;background-size:100% 100%;float:right;height:100%;width:100%}.evoLogo--06ffa{background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='330' height='40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23FFF'%3E%3Cpath d='M103.534 5.493h20.347v4.61h-15.06v6.727h10.026v4.61H108.82v7.53h15.525v4.611h-20.812z'/%3E%3Cpath d='M122.88 13.615h5.415l4.738 13.917 4.4-13.917h5.245l-7.276 19.966h-4.865zm18.967 10.025c0-6.09 4.23-10.406 10.28-10.406 6.006 0 10.236 4.315 10.236 10.406 0 6.007-4.314 10.322-10.364 10.322-6.006 0-10.152-4.23-10.152-10.322zm15.186.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.949 2.284-4.949 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.991-2.2 4.991-5.922zm7.714-18.655h5.287v28.469h-5.287zm8.306 20.474V13.615h5.245V25.29c0 2.665 1.27 4.23 3.638 4.23 2.75 0 3.892-2.326 3.892-5.753V13.615h5.245V33.58h-5.245v-2.834c-1.058 2.073-2.877 3.215-5.457 3.215-4.526 0-7.318-3.215-7.318-8.376zm22.815 2.707V17.845h-2.834v-4.23h2.834V9.85l5.119-2.876v6.64h3.934v4.231h-3.976v9.94c0 .974.465 1.397 1.438 1.44h2.326v4.356h-4.06c-3.85-.211-4.696-1.988-4.78-5.288zm11.436-22.715h5.457v5.118h-5.457V5.578zm.085 8.037h5.288V33.58h-5.288V13.615zm7.671 10.025c0-6.09 4.23-10.406 10.28-10.406 6.007 0 10.237 4.315 10.237 10.406 0 6.007-4.315 10.322-10.364 10.322-6.007 0-10.152-4.23-10.152-10.322zm15.187.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.95 2.284-4.95 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.992-2.2 4.992-5.922zm7.671-10.152h5.246v3.257c1.057-2.327 3.003-3.68 5.837-3.68 4.357 0 6.938 2.919 6.938 8.418v11.97h-5.246V21.906c0-2.792-1.057-4.23-3.51-4.23-2.497 0-4.02 2.03-4.02 5.753V33.58h-5.245V13.615zM94.61 8.579C89.833 2.276 81.135.499 73.929 4.347c2.816 6.339 4.926 13.779 18.806 14.214 1.629.051 3.418.007 5.391-.148-.284-3.975-1.578-7.276-3.516-9.834zm-2.56 11.108c-8.35.413-12.272 3.458-14.721 7.213-1.441 2.21-2.374 4.665-3.4 6.974 10.131 5.41 23.214-.295 24.198-14.067-2.253-.177-4.267-.21-6.075-.12z'/%3E%3C/g%3E%3C/svg%3E") no-repeat center .22em;background-size:contain;bottom:0;height:65%;opacity:0;position:absolute;text-align:left;transition:opacity .2s;width:100%}.evoLogo--06ffa:empty{opacity:0}.logoText--42a39{font:300 .14em Segoe UI,Helvetica,Arial,sans-serif;opacity:.65;position:absolute;text-align:center;transition:opacity .2s;width:100%}.image--44b6b{display:block;height:100%;object-fit:cover;opacity:0;transition:opacity .5s;width:100%}.image--44b6b.loaded--10bec{opacity:1}.awardLogos--861ba{align-items:center;display:flex;flex-direction:row;height:10em;justify-items:center;left:.5em;position:absolute;top:.5em}.awardLogos--861ba>img{animation:appearingLogoKeyframes--af0f0 .5s linear;height:100%;padding-right:.5em}.loadingScreen--87788.noImage--01a3d .content--1ddca.narrow--8d0d9{height:84vw}.loadingScreen--87788.noImage--01a3d .content--1ddca.wide--3bffa{height:133vh}.loadingScreen--87788.noImage--01a3d .content--1ddca.tablet--43c30{font-size:6.25vw}.loadingScreen--87788.noImage--01a3d .center--9aeab{height:1em;top:50%;width:2.85em}.loadingScreen--87788.noImage--01a3d .line1--b6711{bottom:0;top:auto}.loadingScreen--87788.noImage--01a3d .line2--f8241{bottom:.045em;top:auto}.loadingScreen--87788.noImage--01a3d .star1--da76f{bottom:-14.5%;height:.4em;top:auto;width:.4em}.loadingScreen--87788.noImage--01a3d .evoLogo--06ffa{background-position:center .36em;bottom:auto;height:1em;left:-1.13em;top:-.5em;width:5.1em}.loadingScreen--87788.noImage--01a3d .logoText--42a39{font-size:.18em}.loadingScreen--87788.properAnimation--47cc2 .line1--b6711,.loadingScreen--87788.properAnimation--47cc2 .line2--f8241,.loadingScreen--87788.properAnimation--47cc2 .star1--da76f{visibility:visible}.loadingScreen--87788.randomAnimation--de14a .star1--da76f{transform:translateX(300%);transition:none;visibility:visible}@media screen and (max-height:35px){.awardLogos--861ba,.evoLogo--06ffa,.image--44b6b{display:none}.content--1ddca{max-height:100vh}}@keyframes starRotationKeyframes--daa9e{0%{transform:rotate(0)}to{transform:rotate(1turn)}}@keyframes appearingLogoKeyframes--af0f0{0%{opacity:0}to{opacity:1}}*{margin:0;padding:0}:root{--rem-migration-size:10px;--root-size:10px;--size:10px}body,html{-moz-text-size-adjust:100%!important;text-size-adjust:100%!important;background-color:#000;color:#fff;font:10px/12px Inter,Arial,sans-serif;height:100%}body{position:relative}input,select,textarea{font-family:Inter,Arial,sans-serif}input::-ms-clear{display:none}.uc-video-toolbar{display:none}.loader-frame-container{align-items:center;display:flex;height:100vh;overflow:hidden;position:absolute;right:0;top:0;width:100vw}body.phone .loader-frame-container,body.tablet .loader-frame-container{height:100%;width:100%}.loader-frame-container iframe{background:rgba(0,0,0,.1);border:none;box-sizing:border-box;display:inline-block;vertical-align:top}body.phone .loader-frame-container iframe,body.tablet .loader-frame-container iframe{height:100%;width:100%}.loader-frame-container .games-container{align-items:center;display:flex;flex-wrap:wrap;justify-content:center}body.phone .loader-frame-container .games-container,body.tablet .loader-frame-container .games-container{align-items:start;height:100%;width:100%}.loader-frame-container .sidebar-container{bottom:0;height:100%;position:fixed;right:0}@media (orientation:landscape){.loader-frame-container .sidebar-container{top:0}}.loader-frame-container .sidebar-container iframe{background:0 0;height:100%;width:100%}.loader-frame-container .topbar-container{left:0;position:absolute;right:0;top:0;width:100%}body.tablet .loader-frame-container.withTopBar .games-container{height:calc(100% - 30px);padding-top:30px}body.phone .sidebar-container iframe{animation:MWshowKeyframes .5s linear forwards}body.phone .sidebar-container iframe.disposing{animation:MWhideKeyframes .5s linear}body.phone .loader-frame-container.withTopBar .games-container{height:calc(100% - 30px);padding-top:30px}@media (orientation:landscape){body.phone .loader-frame-container.withTopBar .sidebar-container{top:30px}}@keyframes MWshowKeyframes{0%{transform:translateY(100vh)}to{transform:translateY(0)}}@keyframes MWhideKeyframes{to{transform:translateY(100vh)}}#loader-popup{align-items:center;bottom:0;display:flex;flex-direction:column;flex-wrap:wrap;font:12px/1.5 Segoe UI,Helvetica,Arial,sans-serif;justify-content:center;left:0;position:absolute;right:0;top:0;-webkit-user-select:none;-moz-user-select:none;user-select:none;z-index:1000001}#loader-popup:empty{display:none}body.tablet #loader-popup{font-size:14px}body.desktop #loader-popup{font-size:calc(1vmin + 5px)}#loader-popup>div{background-color:#1a1a1a;border:.0833em solid rgba(150,255,255,.97);border-radius:.5em;box-sizing:border-box;margin:.5em;max-width:90%;padding:1.4em 2.8em;text-align:center}#loader-popup label{display:block}#loader-popup a,#loader-popup button{background-color:initial;border:.0833em solid #4d4d4d;border-radius:1.5em;color:#dcdcdc;cursor:pointer;font-size:1em;font-weight:400;line-height:2;margin:1em 1em 0;min-width:20%;padding:0 2em;text-decoration:none;text-transform:uppercase;transition:background-color .5s ease}#loader-popup a:hover,#loader-popup button:hover{background-color:hsla(0,0%,100%,.4);color:#fff}#loader-popup body.ka a,#loader-popup body.ka button{text-transform:none}.rootContainer--512ac{display:block;height:100%;left:0;overflow:auto;position:absolute;top:0;width:100%}body.ios.native .rootContainer--512ac{height:100vh;width:100vw}#verbose-log{word-wrap:break-word;color:#fff;font-family:monospace;font-size:10px;height:50vh;left:0;line-height:1;max-width:100%;overflow:hidden;pointer-events:none;position:fixed;text-shadow:1px 1px 2px #000;top:0;white-space:pre-wrap;width:100vw;z-index:1000002}
    </style>
</head>

<body class="loading notranslate">
    <div id="verbose-log" data-sandbox="ignore"></div>
    <div id="loader-popup"></div>
    <div class="loadingScreen--87788" data-sandbox="ignore">
        <div class="awardLogos--861ba"></div>
        <div class="content--1ddca"><img decoding="async" class="image--44b6b" alt="Loading screen">
            <div class="center--9aeab">
                <div class="line1--b6711"></div>
                <div class="line2--f8241"></div>
                <div class="evoLogo--06ffa"><span class="logoText--42a39"></span></div>
                <div class="star1--da76f">
                    <div class="star2--7a218"></div>
                </div>
                <div class="footer--fba55"></div>
            </div>
        </div>
    </div>
    <div id="root" class="rootContainer--512ac"></div>
    <script>
        var Sentry = function(X) {
            var Z = {};

            function Y() {
                return "undefined" != typeof window ? window : "undefined" != typeof self ? self : Z
            }

            function J(X, Z, J) {
                var p = J || Y(),
                    k = p.__SENTRY__ = p.__SENTRY__ || {};
                return k[X] || (k[X] = Z())
            }
            var p = Object.prototype.toString;

            function k(X) {
                switch (p.call(X)) {
                    case "[object Error]":
                    case "[object Exception]":
                    case "[object DOMException]":
                        return !0;
                    default:
                        return P(X, Error)
                }
            }

            function g(X, Z) {
                return p.call(X) === `[object ${Z}]`
            }

            function o(X) {
                return g(X, "ErrorEvent")
            }

            function b(X) {
                return g(X, "DOMError")
            }

            function t(X) {
                return g(X, "String")
            }

            function S(X) {
                return null === X || "object" != typeof X && "function" != typeof X
            }

            function w(X) {
                return g(X, "Object")
            }

            function D(X) {
                return "undefined" != typeof Event && P(X, Event)
            }

            function $(X) {
                return Boolean(X && X.then && "function" == typeof X.then)
            }

            function P(X, Z) {
                try {
                    return X instanceof Z
                } catch (X) {
                    return !1
                }
            }

            function M(X, Z) {
                try {
                    let J = X;
                    var Y = [];
                    let p, k = 0,
                        g = 0;
                    for (; J && k++ < 5 && (p = O(J, Z), !("html" === p || k > 1 && g + 3 * Y.length + p.length >= 80));) Y.push(p), g += p.length, J = J.parentNode;
                    return Y.reverse().join(" > ")
                } catch (X) {
                    return "<unknown>"
                }
            }

            function O(X, Z) {
                var Y = X,
                    J = [];
                let p, k, g, o, b;
                if (!Y || !Y.tagName) return "";
                J.push(Y.tagName.toLowerCase());
                var S = Z && Z.length ? Z.filter((X => Y.getAttribute(X))).map((X => [X, Y.getAttribute(X)])) : null;
                if (S && S.length) S.forEach((X => {
                    J.push(`[${X[0]}="${X[1]}"]`)
                }));
                else if (Y.id && J.push(`#${Y.id}`), p = Y.className, p && t(p))
                    for (k = p.split(/\s+/), b = 0; b < k.length; b++) J.push(`.${k[b]}`);
                var w = ["type", "name", "title", "alt"];
                for (b = 0; b < w.length; b++) g = w[b], o = Y.getAttribute(g), o && J.push(`[${g}="${o}"]`);
                return J.join("")
            }
            class f extends Error {
                constructor(X) {
                    super(X), this.message = X, this.name = new.target.prototype.constructor.name, Object.setPrototypeOf(this, new.target.prototype)
                }
            }
            var H = /^(?:(\w+):)\/\/(?:(\w+)(?::(\w+))?@)([\w.-]+)(?::(\d+))?\/(.+)/;

            function j(X, Z = !1) {
                const {
                    host: Y,
                    path: J,
                    pass: p,
                    port: k,
                    projectId: g,
                    protocol: o,
                    publicKey: b
                } = X;
                return `${o}://${b}${Z&&p?`:${p}`:""}@${Y}${k?`:${k}`:""}/${J?`${J}/`:J}${g}`
            }

            function Q(X) {
                return {
                    protocol: X.protocol,
                    publicKey: X.publicKey || "",
                    pass: X.pass || "",
                    host: X.host,
                    port: X.port || "",
                    path: X.path || "",
                    projectId: X.projectId
                }
            }

            function _(X) {
                return "string" == typeof X ? function(X) {
                    var Z = H.exec(X);
                    if (!Z) throw new f(`Invalid Sentry Dsn: ${X}`);
                    const [Y, J, p = "", k, g = "", o] = Z.slice(1);
                    let b = "",
                        t = o;
                    var S = t.split("/");
                    if (S.length > 1 && (b = S.slice(0, -1).join("/"), t = S.pop()), t) {
                        var w = t.match(/^\d+/);
                        w && (t = w[0])
                    }
                    return Q({
                        host: k,
                        pass: p,
                        path: b,
                        projectId: t,
                        port: g,
                        protocol: Y,
                        publicKey: J
                    })
                }(X) : Q(X)
            }
            var q, K = ["debug", "info", "warn", "error", "log", "assert", "trace"];

            function A(X, Z = 0) {
                return "string" != typeof X || 0 === Z || X.length <= Z ? X : `${X.substr(0,Z)}...`
            }

            function W(X, Z) {
                if (!Array.isArray(X)) return "";
                var Y = [];
                for (let Z = 0; Z < X.length; Z++) {
                    var J = X[Z];
                    try {
                        Y.push(String(J))
                    } catch (X) {
                        Y.push("[value cannot be serialized]")
                    }
                }
                return Y.join(Z)
            }

            function a(X, Z) {
                return !!t(X) && (g(Z, "RegExp") ? Z.test(X) : "string" == typeof Z && -1 !== X.indexOf(Z))
            }

            function e(X, Z, Y) {
                if (Z in X) {
                    var J = X[Z],
                        p = Y(J);
                    if ("function" == typeof p) try {
                        F(p, J)
                    } catch (X) {}
                    X[Z] = p
                }
            }

            function C(X, Z, Y) {
                Object.defineProperty(X, Z, {
                    value: Y,
                    writable: !0,
                    configurable: !0
                })
            }

            function F(X, Z) {
                var Y = Z.prototype || {};
                X.prototype = Z.prototype = Y, C(X, "__sentry_original__", Z)
            }

            function m(X) {
                return X.__sentry_original__
            }

            function U(X) {
                if (k(X)) return {
                    message: X.message,
                    name: X.name,
                    stack: X.stack,
                    ...G(X)
                };
                if (D(X)) {
                    var Z = {
                        type: X.type,
                        target: d(X.target),
                        currentTarget: d(X.currentTarget),
                        ...G(X)
                    };
                    return "undefined" != typeof CustomEvent && P(X, CustomEvent) && (Z.detail = X.detail), Z
                }
                return X
            }

            function d(X) {
                try {
                    return "undefined" != typeof Element && P(X, Element) ? M(X) : Object.prototype.toString.call(X)
                } catch (X) {
                    return "<unknown>"
                }
            }

            function G(X) {
                if ("object" == typeof X && null !== X) {
                    var Z = {};
                    for (var Y in X) Object.prototype.hasOwnProperty.call(X, Y) && (Z[Y] = X[Y]);
                    return Z
                }
                return {}
            }

            function l(X, Z = 40) {
                var Y = Object.keys(U(X));
                if (Y.sort(), !Y.length) return "[object has no keys]";
                if (Y[0].length >= Z) return A(Y[0], Z);
                for (let X = Y.length; X > 0; X--) {
                    var J = Y.slice(0, X).join(", ");
                    if (!(J.length > Z)) return X === Y.length ? J : A(J, Z)
                }
                return ""
            }

            function I(X) {
                return L(X, new Map)
            }

            function L(X, Z) {
                if (w(X)) {
                    if (void 0 !== (p = Z.get(X))) return p;
                    var Y = {};
                    for (var J of (Z.set(X, Y), Object.keys(X))) void 0 !== X[J] && (Y[J] = L(X[J], Z));
                    return Y
                }
                var p;
                return Array.isArray(X) ? void 0 !== (p = Z.get(X)) ? p : (Y = [], Z.set(X, Y), X.forEach((X => {
                    Y.push(L(X, Z))
                })), Y) : X
            }

            function R(...X) {
                var Z = X.sort(((X, Z) => X[0] - Z[0])).map((X => X[1]));
                return (X, Y = 0) => {
                    var J = [];
                    for (var p of X.split("\n").slice(Y))
                        for (var k of Z) {
                            var g = k(p);
                            if (g) {
                                J.push(g);
                                break
                            }
                        }
                    return function(X) {
                        if (!X.length) return [];
                        let Z = X;
                        var Y = Z[0].function || "",
                            J = Z[Z.length - 1].function || "";
                        return -1 === Y.indexOf("captureMessage") && -1 === Y.indexOf("captureException") || (Z = Z.slice(1)), -1 !== J.indexOf("sentryWrapped") && (Z = Z.slice(0, -1)), Z.slice(0, 50).map((X => ({ ...X,
                            filename: X.filename || Z[0].filename,
                            function: X.function || "?"
                        }))).reverse()
                    }(J)
                }
            }
            q = {
                enable: () => {},
                disable: () => {}
            }, K.forEach((X => {
                q[X] = () => {}
            }));
            var s = "<anonymous>";

            function V(X) {
                try {
                    return X && "function" == typeof X && X.name || s
                } catch (X) {
                    return s
                }
            }

            function B() {
                if (!("fetch" in Y())) return !1;
                try {
                    return new Headers, new Request(""), new Response, !0
                } catch (X) {
                    return !1
                }
            }

            function z(X) {
                return X && /^function fetch\(\)\s+\{\s+\[native code\]\s+\}$/.test(X.toString())
            }
            var u = Y(),
                E = {},
                c = {};

            function h(X, Z) {
                E[X] = E[X] || [], E[X].push(Z),
                    function(X) {
                        if (!c[X]) switch (c[X] = !0, X) {
                            case "console":
                                "console" in u && K.forEach((function(X) {
                                    X in u.console && e(u.console, X, (function(Z) {
                                        return function(...Y) {
                                            x("console", {
                                                args: Y,
                                                level: X
                                            }), Z && Z.apply(u.console, Y)
                                        }
                                    }))
                                }));
                                break;
                            case "dom":
                                ! function() {
                                    if ("document" in u) {
                                        var X = x.bind(null, "dom"),
                                            Z = N(X, !0);
                                        u.document.addEventListener("click", Z, !1), u.document.addEventListener("keypress", Z, !1), ["EventTarget", "Node"].forEach((Z => {
                                            var Y = u[Z] && u[Z].prototype;
                                            Y && Y.hasOwnProperty && Y.hasOwnProperty("addEventListener") && (e(Y, "addEventListener", (function(Z) {
                                                return function(Y, J, p) {
                                                    if ("click" === Y || "keypress" == Y) try {
                                                        var k = this.__sentry_instrumentation_handlers__ = this.__sentry_instrumentation_handlers__ || {},
                                                            g = k[Y] = k[Y] || {
                                                                refCount: 0
                                                            };
                                                        if (!g.handler) {
                                                            var o = N(X);
                                                            g.handler = o, Z.call(this, Y, o, p)
                                                        }
                                                        g.refCount += 1
                                                    } catch (X) {}
                                                    return Z.call(this, Y, J, p)
                                                }
                                            })), e(Y, "removeEventListener", (function(X) {
                                                return function(Z, Y, J) {
                                                    if ("click" === Z || "keypress" == Z) try {
                                                        var p = this.__sentry_instrumentation_handlers__ || {},
                                                            k = p[Z];
                                                        k && (k.refCount -= 1, k.refCount <= 0 && (X.call(this, Z, k.handler, J), k.handler = void 0, delete p[Z]), 0 === Object.keys(p).length && delete this.__sentry_instrumentation_handlers__)
                                                    } catch (X) {}
                                                    return X.call(this, Z, Y, J)
                                                }
                                            })))
                                        }))
                                    }
                                }();
                                break;
                            case "xhr":
                                ! function() {
                                    if ("XMLHttpRequest" in u) {
                                        var X = XMLHttpRequest.prototype;
                                        e(X, "open", (function(X) {
                                            return function(...Z) {
                                                var Y = this,
                                                    J = Z[1],
                                                    p = Y.__sentry_xhr__ = {
                                                        method: t(Z[0]) ? Z[0].toUpperCase() : Z[0],
                                                        url: Z[1]
                                                    };
                                                t(J) && "POST" === p.method && J.match(/sentry_key/) && (Y.__sentry_own_request__ = !0);
                                                var k = function() {
                                                    if (4 === Y.readyState) {
                                                        try {
                                                            p.status_code = Y.status
                                                        } catch (X) {}
                                                        x("xhr", {
                                                            args: Z,
                                                            endTimestamp: Date.now(),
                                                            startTimestamp: Date.now(),
                                                            xhr: Y
                                                        })
                                                    }
                                                };
                                                return "onreadystatechange" in Y && "function" == typeof Y.onreadystatechange ? e(Y, "onreadystatechange", (function(X) {
                                                    return function(...Z) {
                                                        return k(), X.apply(Y, Z)
                                                    }
                                                })) : Y.addEventListener("readystatechange", k), X.apply(Y, Z)
                                            }
                                        })), e(X, "send", (function(X) {
                                            return function(...Z) {
                                                return this.__sentry_xhr__ && void 0 !== Z[0] && (this.__sentry_xhr__.body = Z[0]), x("xhr", {
                                                    args: Z,
                                                    startTimestamp: Date.now(),
                                                    xhr: this
                                                }), X.apply(this, Z)
                                            }
                                        }))
                                    }
                                }();
                                break;
                            case "fetch":
                                (function() {
                                    if (!B()) return !1;
                                    var X = Y();
                                    if (z(X.fetch)) return !0;
                                    let Z = !1;
                                    var J = X.document;
                                    if (J && "function" == typeof J.createElement) try {
                                        var p = J.createElement("iframe");
                                        p.hidden = !0, J.head.appendChild(p), p.contentWindow && p.contentWindow.fetch && (Z = z(p.contentWindow.fetch)), J.head.removeChild(p)
                                    } catch (X) {}
                                    return Z
                                })() && e(u, "fetch", (function(X) {
                                    return function(...Z) {
                                        var Y = {
                                            args: Z,
                                            fetchData: {
                                                method: i(Z),
                                                url: v(Z)
                                            },
                                            startTimestamp: Date.now()
                                        };
                                        return x("fetch", { ...Y
                                        }), X.apply(u, Z).then((X => (x("fetch", { ...Y,
                                            endTimestamp: Date.now(),
                                            response: X
                                        }), X)), (X => {
                                            throw x("fetch", { ...Y,
                                                endTimestamp: Date.now(),
                                                error: X
                                            }), X
                                        }))
                                    }
                                }));
                                break;
                            case "history":
                                ! function() {
                                    if (function() {
                                            var X = Y(),
                                                Z = X.chrome,
                                                J = Z && Z.app && Z.app.runtime,
                                                p = "history" in X && !!X.history.pushState && !!X.history.replaceState;
                                            return !J && p
                                        }()) {
                                        var X = u.onpopstate;
                                        u.onpopstate = function(...Z) {
                                            var Y = u.location.href,
                                                J = n;
                                            if (n = Y, x("history", {
                                                    from: J,
                                                    to: Y
                                                }), X) try {
                                                return X.apply(this, Z)
                                            } catch (X) {}
                                        }, e(u.history, "pushState", Z), e(u.history, "replaceState", Z)
                                    }

                                    function Z(X) {
                                        return function(...Z) {
                                            var Y = Z.length > 2 ? Z[2] : void 0;
                                            if (Y) {
                                                var J = n,
                                                    p = String(Y);
                                                n = p, x("history", {
                                                    from: J,
                                                    to: p
                                                })
                                            }
                                            return X.apply(this, Z)
                                        }
                                    }
                                }();
                                break;
                            case "error":
                                y = u.onerror, u.onerror = function(X, Z, Y, J, p) {
                                    return x("error", {
                                        column: J,
                                        error: p,
                                        line: Y,
                                        msg: X,
                                        url: Z
                                    }), !!y && y.apply(this, arguments)
                                };
                                break;
                            case "unhandledrejection":
                                XX = u.onunhandledrejection, u.onunhandledrejection = function(X) {
                                    return x("unhandledrejection", X), !XX || XX.apply(this, arguments)
                                }
                        }
                    }(X)
            }

            function x(X, Z) {
                if (X && E[X])
                    for (var Y of E[X] || []) try {
                        Y(Z)
                    } catch (X) {}
            }

            function i(X = []) {
                return "Request" in u && P(X[0], Request) && X[0].method ? String(X[0].method).toUpperCase() : X[1] && X[1].method ? String(X[1].method).toUpperCase() : "GET"
            }

            function v(X = []) {
                return "string" == typeof X[0] ? X[0] : "Request" in u && P(X[0], Request) ? X[0].url : String(X[0])
            }
            let n, r, T;

            function N(X, Z = !1) {
                return Y => {
                    if (Y && T !== Y && ! function(X) {
                            if ("keypress" !== X.type) return !1;
                            try {
                                var Z = X.target;
                                if (!Z || !Z.tagName) return !0;
                                if ("INPUT" === Z.tagName || "TEXTAREA" === Z.tagName || Z.isContentEditable) return !1
                            } catch (X) {}
                            return !0
                        }(Y)) {
                        var J = "keypress" === Y.type ? "input" : Y.type;
                        (void 0 === r || function(X, Z) {
                            if (!X) return !0;
                            if (X.type !== Z.type) return !0;
                            try {
                                if (X.target !== Z.target) return !0
                            } catch (X) {}
                            return !1
                        }(T, Y)) && (X({
                            event: Y,
                            name: J,
                            global: Z
                        }), T = Y), clearTimeout(r), r = u.setTimeout((() => {
                            r = void 0
                        }), 1e3)
                    }
                }
            }
            let y = null,
                XX = null;

            function ZX() {
                var X = Y(),
                    Z = X.crypto || X.msCrypto;
                if (void 0 !== Z && Z.getRandomValues) {
                    var J = new Uint16Array(8);
                    Z.getRandomValues(J), J[3] = 4095 & J[3] | 16384, J[4] = 16383 & J[4] | 32768;
                    var p = X => {
                        let Z = X.toString(16);
                        for (; Z.length < 4;) Z = `0${Z}`;
                        return Z
                    };
                    return p(J[0]) + p(J[1]) + p(J[2]) + p(J[3]) + p(J[4]) + p(J[5]) + p(J[6]) + p(J[7])
                }
                return "xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx".replace(/[xy]/g, (X => {
                    var Z = 16 * Math.random() | 0;
                    return ("x" === X ? Z : 3 & Z | 8).toString(16)
                }))
            }

            function YX(X) {
                if (!X) return {};
                var Z = X.match(/^(([^:/?#]+):)?(\/\/([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/);
                if (!Z) return {};
                var Y = Z[6] || "",
                    J = Z[8] || "";
                return {
                    host: Z[4],
                    path: Z[5],
                    protocol: Z[2],
                    relative: Z[5] + Y + J
                }
            }

            function JX(X) {
                return X.exception && X.exception.values ? X.exception.values[0] : void 0
            }

            function pX(X) {
                const {
                    message: Z,
                    event_id: Y
                } = X;
                if (Z) return Z;
                var J = JX(X);
                return J ? J.type && J.value ? `${J.type}: ${J.value}` : J.type || J.value || Y || "<unknown>" : Y || "<unknown>"
            }

            function kX(X, Z, Y) {
                var J = X.exception = X.exception || {},
                    p = J.values = J.values || [],
                    k = p[0] = p[0] || {};
                k.value || (k.value = Z || ""), k.type || (k.type = Y || "Error")
            }

            function gX(X, Z) {
                var Y = JX(X);
                if (Y) {
                    var J = Y.mechanism;
                    if (Y.mechanism = {
                            type: "generic",
                            handled: !0,
                            ...J,
                            ...Z
                        }, Z && "data" in Z) {
                        var p = { ...J && J.data,
                            ...Z.data
                        };
                        Y.mechanism.data = p
                    }
                }
            }

            function oX(X) {
                if (X && X.__sentry_captured__) return !0;
                try {
                    C(X, "__sentry_captured__", !0)
                } catch (X) {}
                return !1
            }

            function bX(X, Z = 1 / 0, Y = 1 / 0) {
                try {
                    return SX("", X, Z, Y)
                } catch (X) {
                    return {
                        ERROR: `**non-serializable** (${X})`
                    }
                }
            }

            function tX(X, Z = 3, Y = 102400) {
                var J, p = bX(X, Z);
                return J = p,
                    function(X) {
                        return ~-encodeURI(X).split(/%..|./).length
                    }(JSON.stringify(J)) > Y ? tX(X, Z - 1, Y) : p
            }

            function SX(X, Z, Y = 1 / 0, J = 1 / 0, p = function() {
                var X = "function" == typeof WeakSet,
                    Z = X ? new WeakSet : [];
                return [function(Y) {
                    if (X) return !!Z.has(Y) || (Z.add(Y), !1);
                    for (let X = 0; X < Z.length; X++)
                        if (Z[X] === Y) return !0;
                    return Z.push(Y), !1
                }, function(Y) {
                    if (X) Z.delete(Y);
                    else
                        for (let X = 0; X < Z.length; X++)
                            if (Z[X] === Y) {
                                Z.splice(X, 1);
                                break
                            }
                }]
            }()) {
                const [k, g] = p;
                if (null === Z || ["number", "boolean", "string"].includes(typeof Z) && ("number" != typeof(o = Z) || o == o)) return Z;
                var o, b = function(X, Z) {
                    try {
                        return "domain" === X && Z && "object" == typeof Z && Z.t ? "[Domain]" : "domainEmitter" === X ? "[DomainEmitter]" : "undefined" != typeof global && Z === global ? "[Global]" : "undefined" != typeof window && Z === window ? "[Window]" : "undefined" != typeof document && Z === document ? "[Document]" : function(X) {
                            return w(X) && "nativeEvent" in X && "preventDefault" in X && "stopPropagation" in X
                        }(Z) ? "[SyntheticEvent]" : "number" == typeof Z && Z != Z ? "[NaN]" : void 0 === Z ? "[undefined]" : "function" == typeof Z ? `[Function: ${V(Z)}]` : "symbol" == typeof Z ? `[${String(Z)}]` : "bigint" == typeof Z ? `[BigInt: ${String(Z)}]` : `[object ${Object.getPrototypeOf(Z).constructor.name}]`
                    } catch (X) {
                        return `**non-serializable** (${X})`
                    }
                }(X, Z);
                if (!b.startsWith("[object ")) return b;
                if (Z.__sentry_skip_normalization__) return Z;
                if (0 === Y) return b.replace("object ", "");
                if (k(Z)) return "[Circular ~]";
                var t = Z;
                if (t && "function" == typeof t.toJSON) try {
                    return SX("", t.toJSON(), Y - 1, J, p)
                } catch (X) {}
                var S = Array.isArray(Z) ? [] : {};
                let D = 0;
                var $ = U(Z);
                for (var P in $)
                    if (Object.prototype.hasOwnProperty.call($, P)) {
                        if (D >= J) {
                            S[P] = "[MaxProperties ~]";
                            break
                        }
                        var M = $[P];
                        S[P] = SX(P, M, Y - 1, J, p), D += 1
                    }
                return g(Z), S
            }
            var wX;

            function DX(X) {
                return new PX((Z => {
                    Z(X)
                }))
            }

            function $X(X) {
                return new PX(((Z, Y) => {
                    Y(X)
                }))
            }! function(X) {
                X[X.PENDING = 0] = "PENDING", X[X.RESOLVED = 1] = "RESOLVED", X[X.REJECTED = 2] = "REJECTED"
            }(wX || (wX = {}));
            class PX {
                __init() {
                    this.i = wX.PENDING
                }
                __init2() {
                    this.o = []
                }
                constructor(X) {
                    PX.prototype.__init.call(this), PX.prototype.__init2.call(this), PX.prototype.__init3.call(this), PX.prototype.__init4.call(this), PX.prototype.__init5.call(this), PX.prototype.__init6.call(this);
                    try {
                        X(this.u, this.h)
                    } catch (X) {
                        this.h(X)
                    }
                }
                then(X, Z) {
                    return new PX(((Y, J) => {
                        this.o.push([!1, Z => {
                            if (X) try {
                                Y(X(Z))
                            } catch (X) {
                                J(X)
                            } else Y(Z)
                        }, X => {
                            if (Z) try {
                                Y(Z(X))
                            } catch (X) {
                                J(X)
                            } else J(X)
                        }]), this.l()
                    }))
                } catch (X) {
                    return this.then((X => X), X)
                } finally(X) {
                    return new PX(((Z, Y) => {
                        let J, p;
                        return this.then((Z => {
                            p = !1, J = Z, X && X()
                        }), (Z => {
                            p = !0, J = Z, X && X()
                        })).then((() => {
                            p ? Y(J) : Z(J)
                        }))
                    }))
                }
                __init3() {
                    this.u = X => {
                        this.v(wX.RESOLVED, X)
                    }
                }
                __init4() {
                    this.h = X => {
                        this.v(wX.REJECTED, X)
                    }
                }
                __init5() {
                    this.v = (X, Z) => {
                        this.i === wX.PENDING && ($(Z) ? Z.then(this.u, this.h) : (this.i = X, this.p = Z, this.l()))
                    }
                }
                __init6() {
                    this.l = () => {
                        if (this.i !== wX.PENDING) {
                            var X = this.o.slice();
                            this.o = [], X.forEach((X => {
                                X[0] || (this.i === wX.RESOLVED && X[1](this.p), this.i === wX.REJECTED && X[2](this.p), X[0] = !0)
                            }))
                        }
                    }
                }
            }
            var MX = ["fatal", "error", "warning", "log", "info", "debug"],
                OX = {
                    nowSeconds: () => Date.now() / 1e3
                },
                fX = function() {
                    const {
                        performance: X
                    } = Y();
                    if (X && X.now) return {
                        now: () => X.now(),
                        timeOrigin: Date.now() - X.now()
                    }
                }(),
                HX = void 0 === fX ? OX : {
                    nowSeconds: () => (fX.timeOrigin + fX.now()) / 1e3
                },
                jX = OX.nowSeconds.bind(OX),
                QX = HX.nowSeconds.bind(HX);

            function _X(X, Z = []) {
                return [X, Z]
            }

            function qX(X, Z) {
                const [Y, J] = X;
                return [Y, [...J, Z]]
            }

            function KX(X, Z) {
                X[1].forEach((X => {
                    var Y = X[0].type;
                    Z(X, Y)
                }))
            }

            function AX(X, Z) {
                return (Z || new TextEncoder).encode(X)
            }

            function WX(X, Z) {
                const [Y, J] = X;
                let p = JSON.stringify(Y);

                function k(X) {
                    "string" == typeof p ? p = "string" == typeof X ? p + X : [AX(p, Z), X] : p.push("string" == typeof X ? AX(X, Z) : X)
                }
                for (var g of J) {
                    const [X, Z] = g;
                    k(`\n${JSON.stringify(X)}\n`), k("string" == typeof Z || Z instanceof Uint8Array ? Z : JSON.stringify(Z))
                }
                return "string" == typeof p ? p : function(X) {
                    var Z = X.reduce(((X, Z) => X + Z.length), 0),
                        Y = new Uint8Array(Z);
                    let J = 0;
                    for (var p of X) Y.set(p, J), J += p.length;
                    return Y
                }(p)
            }

            function aX(X, Z) {
                var Y = "string" == typeof X.data ? AX(X.data, Z) : X.data;
                return [I({
                    type: "attachment",
                    length: Y.length,
                    filename: X.filename,
                    content_type: X.contentType,
                    attachment_type: X.attachmentType
                }), Y]
            }(() => {
                const {
                    performance: X
                } = Y();
                if (X && X.now) {
                    var Z = 36e5,
                        J = X.now(),
                        p = Date.now(),
                        k = X.timeOrigin ? Math.abs(X.timeOrigin + J - p) : Z,
                        g = k < Z,
                        o = X.timing && X.timing.navigationStart,
                        b = "number" == typeof o ? Math.abs(o + J - p) : Z;
                    (g || b < Z) && k <= b && X.timeOrigin
                }
            })();
            var eX = {
                session: "session",
                sessions: "session",
                attachment: "attachment",
                transaction: "transaction",
                event: "error",
                client_report: "internal",
                user_report: "default"
            };

            function CX(X) {
                return eX[X]
            }

            function FX(X, Z = {}) {
                if (Z.user && (!X.ipAddress && Z.user.ip_address && (X.ipAddress = Z.user.ip_address), X.did || Z.did || (X.did = Z.user.id || Z.user.email || Z.user.username)), X.timestamp = Z.timestamp || QX(), Z.ignoreDuration && (X.ignoreDuration = Z.ignoreDuration), Z.sid && (X.sid = 32 === Z.sid.length ? Z.sid : ZX()), void 0 !== Z.init && (X.init = Z.init), !X.did && Z.did && (X.did = `${Z.did}`), "number" == typeof Z.started && (X.started = Z.started), X.ignoreDuration) X.duration = void 0;
                else if ("number" == typeof Z.duration) X.duration = Z.duration;
                else {
                    var Y = X.timestamp - X.started;
                    X.duration = Y >= 0 ? Y : 0
                }
                Z.release && (X.release = Z.release), Z.environment && (X.environment = Z.environment), !X.ipAddress && Z.ipAddress && (X.ipAddress = Z.ipAddress), !X.userAgent && Z.userAgent && (X.userAgent = Z.userAgent), "number" == typeof Z.errors && (X.errors = Z.errors), Z.status && (X.status = Z.status)
            }
            class mX {
                constructor() {
                    this.m = !1, this.g = [], this._ = [], this.S = [], this.k = [], this.O = {}, this.j = {}, this.T = {}, this.D = {}, this.R = {}
                }
                static clone(X) {
                    var Z = new mX;
                    return X && (Z.S = [...X.S], Z.j = { ...X.j
                    }, Z.T = { ...X.T
                    }, Z.D = { ...X.D
                    }, Z.O = X.O, Z.I = X.I, Z.M = X.M, Z.C = X.C, Z.N = X.N, Z.A = X.A, Z._ = [...X._], Z.L = X.L, Z.k = [...X.k]), Z
                }
                addScopeListener(X) {
                    this.g.push(X)
                }
                addEventProcessor(X) {
                    return this._.push(X), this
                }
                setUser(X) {
                    return this.O = X || {}, this.C && FX(this.C, {
                        user: X
                    }), this.U(), this
                }
                getUser() {
                    return this.O
                }
                getRequestSession() {
                    return this.L
                }
                setRequestSession(X) {
                    return this.L = X, this
                }
                setTags(X) {
                    return this.j = { ...this.j,
                        ...X
                    }, this.U(), this
                }
                setTag(X, Z) {
                    return this.j = { ...this.j,
                        [X]: Z
                    }, this.U(), this
                }
                setExtras(X) {
                    return this.T = { ...this.T,
                        ...X
                    }, this.U(), this
                }
                setExtra(X, Z) {
                    return this.T = { ...this.T,
                        [X]: Z
                    }, this.U(), this
                }
                setFingerprint(X) {
                    return this.A = X, this.U(), this
                }
                setLevel(X) {
                    return this.I = X, this.U(), this
                }
                setTransactionName(X) {
                    return this.N = X, this.U(), this
                }
                setContext(X, Z) {
                    return null === Z ? delete this.D[X] : this.D = { ...this.D,
                        [X]: Z
                    }, this.U(), this
                }
                setSpan(X) {
                    return this.M = X, this.U(), this
                }
                getSpan() {
                    return this.M
                }
                getTransaction() {
                    var X = this.getSpan();
                    return X && X.transaction
                }
                setSession(X) {
                    return X ? this.C = X : delete this.C, this.U(), this
                }
                getSession() {
                    return this.C
                }
                update(X) {
                    if (!X) return this;
                    if ("function" == typeof X) {
                        var Z = X(this);
                        return Z instanceof mX ? Z : this
                    }
                    return X instanceof mX ? (this.j = { ...this.j,
                        ...X.j
                    }, this.T = { ...this.T,
                        ...X.T
                    }, this.D = { ...this.D,
                        ...X.D
                    }, X.O && Object.keys(X.O).length && (this.O = X.O), X.I && (this.I = X.I), X.A && (this.A = X.A), X.L && (this.L = X.L)) : w(X) && (this.j = { ...this.j,
                        ...X.tags
                    }, this.T = { ...this.T,
                        ...X.extra
                    }, this.D = { ...this.D,
                        ...X.contexts
                    }, X.user && (this.O = X.user), X.level && (this.I = X.level), X.fingerprint && (this.A = X.fingerprint), X.requestSession && (this.L = X.requestSession)), this
                }
                clear() {
                    return this.S = [], this.j = {}, this.T = {}, this.O = {}, this.D = {}, this.I = void 0, this.N = void 0, this.A = void 0, this.L = void 0, this.M = void 0, this.C = void 0, this.U(), this.k = [], this
                }
                addBreadcrumb(X, Z) {
                    var Y = "number" == typeof Z ? Math.min(Z, 100) : 100;
                    if (Y <= 0) return this;
                    var J = {
                        timestamp: jX(),
                        ...X
                    };
                    return this.S = [...this.S, J].slice(-Y), this.U(), this
                }
                clearBreadcrumbs() {
                    return this.S = [], this.U(), this
                }
                addAttachment(X) {
                    return this.k.push(X), this
                }
                getAttachments() {
                    return this.k
                }
                clearAttachments() {
                    return this.k = [], this
                }
                applyToEvent(X, Z = {}) {
                    if (this.T && Object.keys(this.T).length && (X.extra = { ...this.T,
                            ...X.extra
                        }), this.j && Object.keys(this.j).length && (X.tags = { ...this.j,
                            ...X.tags
                        }), this.O && Object.keys(this.O).length && (X.user = { ...this.O,
                            ...X.user
                        }), this.D && Object.keys(this.D).length && (X.contexts = { ...this.D,
                            ...X.contexts
                        }), this.I && (X.level = this.I), this.N && (X.transaction = this.N), this.M) {
                        X.contexts = {
                            trace: this.M.getTraceContext(),
                            ...X.contexts
                        };
                        var Y = this.M.transaction && this.M.transaction.name;
                        Y && (X.tags = {
                            transaction: Y,
                            ...X.tags
                        })
                    }
                    return this.q(X), X.breadcrumbs = [...X.breadcrumbs || [], ...this.S], X.breadcrumbs = X.breadcrumbs.length > 0 ? X.breadcrumbs : void 0, X.sdkProcessingMetadata = { ...X.sdkProcessingMetadata,
                        ...this.R
                    }, this.P([...UX(), ...this._], X, Z)
                }
                setSDKProcessingMetadata(X) {
                    return this.R = { ...this.R,
                        ...X
                    }, this
                }
                P(X, Z, Y, J = 0) {
                    return new PX(((p, k) => {
                        var g = X[J];
                        if (null === Z || "function" != typeof g) p(Z);
                        else {
                            var o = g({ ...Z
                            }, Y);
                            $(o) ? o.then((Z => this.P(X, Z, Y, J + 1).then(p))).then(null, k) : this.P(X, o, Y, J + 1).then(p).then(null, k)
                        }
                    }))
                }
                U() {
                    this.m || (this.m = !0, this.g.forEach((X => {
                        X(this)
                    })), this.m = !1)
                }
                q(X) {
                    X.fingerprint = X.fingerprint ? Array.isArray(X.fingerprint) ? X.fingerprint : [X.fingerprint] : [], this.A && (X.fingerprint = X.fingerprint.concat(this.A)), X.fingerprint && !X.fingerprint.length && delete X.fingerprint
                }
            }

            function UX() {
                return J("globalEventProcessors", (() => []))
            }

            function dX(X) {
                UX().push(X)
            }
            var GX = 100;
            class lX {
                __init() {
                    this.H = [{}]
                }
                constructor(X, Z = new mX, Y = 4) {
                    this.F = Y, lX.prototype.__init.call(this), this.getStackTop().scope = Z, X && this.bindClient(X)
                }
                isOlderThan(X) {
                    return this.F < X
                }
                bindClient(X) {
                    this.getStackTop().client = X, X && X.setupIntegrations && X.setupIntegrations()
                }
                pushScope() {
                    var X = mX.clone(this.getScope());
                    return this.getStack().push({
                        client: this.getClient(),
                        scope: X
                    }), X
                }
                popScope() {
                    return !(this.getStack().length <= 1 || !this.getStack().pop())
                }
                withScope(X) {
                    var Z = this.pushScope();
                    try {
                        X(Z)
                    } finally {
                        this.popScope()
                    }
                }
                getClient() {
                    return this.getStackTop().client
                }
                getScope() {
                    return this.getStackTop().scope
                }
                getStack() {
                    return this.H
                }
                getStackTop() {
                    return this.H[this.H.length - 1]
                }
                captureException(X, Z) {
                    var Y = this.B = Z && Z.event_id ? Z.event_id : ZX(),
                        J = new Error("Sentry syntheticException");
                    return this.X(((p, k) => {
                        p.captureException(X, {
                            originalException: X,
                            syntheticException: J,
                            ...Z,
                            event_id: Y
                        }, k)
                    })), Y
                }
                captureMessage(X, Z, Y) {
                    var J = this.B = Y && Y.event_id ? Y.event_id : ZX(),
                        p = new Error(X);
                    return this.X(((k, g) => {
                        k.captureMessage(X, Z, {
                            originalException: X,
                            syntheticException: p,
                            ...Y,
                            event_id: J
                        }, g)
                    })), J
                }
                captureEvent(X, Z) {
                    var Y = Z && Z.event_id ? Z.event_id : ZX();
                    return "transaction" !== X.type && (this.B = Y), this.X(((J, p) => {
                        J.captureEvent(X, { ...Z,
                            event_id: Y
                        }, p)
                    })), Y
                }
                lastEventId() {
                    return this.B
                }
                addBreadcrumb(X, Z) {
                    const {
                        scope: J,
                        client: p
                    } = this.getStackTop();
                    if (!J || !p) return;
                    const {
                        beforeBreadcrumb: k = null,
                        maxBreadcrumbs: g = GX
                    } = p.getOptions && p.getOptions() || {};
                    if (!(g <= 0)) {
                        var o = {
                                timestamp: jX(),
                                ...X
                            },
                            b = k ? function(X) {
                                var Z = Y();
                                if (!("console" in Z)) return X();
                                var J = Z.console,
                                    p = {};
                                K.forEach((X => {
                                    var Y = J[X] && J[X].__sentry_original__;
                                    X in Z.console && Y && (p[X] = J[X], J[X] = Y)
                                }));
                                try {
                                    return X()
                                } finally {
                                    Object.keys(p).forEach((X => {
                                        J[X] = p[X]
                                    }))
                                }
                            }((() => k(o, Z))) : o;
                        null !== b && J.addBreadcrumb(b, g)
                    }
                }
                setUser(X) {
                    var Z = this.getScope();
                    Z && Z.setUser(X)
                }
                setTags(X) {
                    var Z = this.getScope();
                    Z && Z.setTags(X)
                }
                setExtras(X) {
                    var Z = this.getScope();
                    Z && Z.setExtras(X)
                }
                setTag(X, Z) {
                    var Y = this.getScope();
                    Y && Y.setTag(X, Z)
                }
                setExtra(X, Z) {
                    var Y = this.getScope();
                    Y && Y.setExtra(X, Z)
                }
                setContext(X, Z) {
                    var Y = this.getScope();
                    Y && Y.setContext(X, Z)
                }
                configureScope(X) {
                    const {
                        scope: Z,
                        client: Y
                    } = this.getStackTop();
                    Z && Y && X(Z)
                }
                run(X) {
                    var Z = LX(this);
                    try {
                        X(this)
                    } finally {
                        LX(Z)
                    }
                }
                getIntegration(X) {
                    var Z = this.getClient();
                    if (!Z) return null;
                    try {
                        return Z.getIntegration(X)
                    } catch (X) {
                        return null
                    }
                }
                startTransaction(X, Z) {
                    return this.W("startTransaction", X, Z)
                }
                traceHeaders() {
                    return this.W("traceHeaders")
                }
                captureSession(X = !1) {
                    if (X) return this.endSession();
                    this.J()
                }
                endSession() {
                    var X = this.getStackTop(),
                        Z = X && X.scope,
                        Y = Z && Z.getSession();
                    Y && function(X, Z) {
                        let Y = {};
                        "ok" === X.status && (Y = {
                            status: "exited"
                        }), FX(X, Y)
                    }(Y), this.J(), Z && Z.setSession()
                }
                startSession(X) {
                    const {
                        scope: Z,
                        client: J
                    } = this.getStackTop(), {
                        release: p,
                        environment: k
                    } = J && J.getOptions() || {};
                    var g = Y();
                    const {
                        userAgent: o
                    } = g.navigator || {};
                    var b = function(X) {
                        var Z = QX(),
                            Y = {
                                sid: ZX(),
                                init: !0,
                                timestamp: Z,
                                started: Z,
                                duration: 0,
                                status: "ok",
                                errors: 0,
                                ignoreDuration: !1,
                                toJSON: () => function(X) {
                                    return I({
                                        sid: `${X.sid}`,
                                        init: X.init,
                                        started: new Date(1e3 * X.started).toISOString(),
                                        timestamp: new Date(1e3 * X.timestamp).toISOString(),
                                        status: X.status,
                                        errors: X.errors,
                                        did: "number" == typeof X.did || "string" == typeof X.did ? `${X.did}` : void 0,
                                        duration: X.duration,
                                        attrs: {
                                            release: X.release,
                                            environment: X.environment,
                                            ip_address: X.ipAddress,
                                            user_agent: X.userAgent
                                        }
                                    })
                                }(Y)
                            };
                        return X && FX(Y, X), Y
                    }({
                        release: p,
                        environment: k,
                        ...Z && {
                            user: Z.getUser()
                        },
                        ...o && {
                            userAgent: o
                        },
                        ...X
                    });
                    if (Z) {
                        var t = Z.getSession && Z.getSession();
                        t && "ok" === t.status && FX(t, {
                            status: "exited"
                        }), this.endSession(), Z.setSession(b)
                    }
                    return b
                }
                shouldSendDefaultPii() {
                    var X = this.getClient(),
                        Z = X && X.getOptions();
                    return Boolean(Z && Z.sendDefaultPii)
                }
                J() {
                    const {
                        scope: X,
                        client: Z
                    } = this.getStackTop();
                    if (X) {
                        var Y = X.getSession();
                        Y && Z && Z.captureSession && Z.captureSession(Y)
                    }
                }
                X(X) {
                    const {
                        scope: Z,
                        client: Y
                    } = this.getStackTop();
                    Y && X(Y, Z)
                }
                W(X, ...Z) {
                    var Y = IX().__SENTRY__;
                    if (Y && Y.extensions && "function" == typeof Y.extensions[X]) return Y.extensions[X].apply(this, Z)
                }
            }

            function IX() {
                var X = Y();
                return X.__SENTRY__ = X.__SENTRY__ || {
                    extensions: {},
                    hub: void 0
                }, X
            }

            function LX(X) {
                var Z = IX(),
                    Y = sX(Z);
                return VX(Z, X), Y
            }

            function RX() {
                var X, Z = IX();
                return (X = Z) && X.__SENTRY__ && X.__SENTRY__.hub && !sX(Z).isOlderThan(4) || VX(Z, new lX), sX(Z)
            }

            function sX(X) {
                return J("hub", (() => new lX), X)
            }

            function VX(X, Z) {
                return !!X && ((X.__SENTRY__ = X.__SENTRY__ || {}).hub = Z, !0)
            }

            function BX(X, Z) {
                return RX().captureException(X, {
                    captureContext: Z
                })
            }

            function zX(X) {
                RX().withScope(X)
            }

            function uX(X) {
                var Z = X.protocol ? `${X.protocol}:` : "",
                    Y = X.port ? `:${X.port}` : "";
                return `${Z}//${X.host}${Y}${X.path?`/${X.path}`:""}/api/`
            }

            function EX(X, Z = {}) {
                var Y = "string" == typeof Z ? Z : Z.tunnel,
                    J = "string" != typeof Z && Z.K ? Z.K.sdk : void 0;
                return Y || `${function(X){return`${uX(X)}${X.projectId}/envelope/`}(X)}?${function(X,Z){return Y={sentry_key:X.publicKey,sentry_version:"7",...Z&&{sentry_client:`${Z.name}/${Z.version}`}},Object.keys(Y).map((X=>`
                $ {
                    encodeURIComponent(X)
                } = $ {
                    encodeURIComponent(Y[X])
                }
                `)).join("&");var Y}(X,J)}`
            }

            function cX(X) {
                if (!X || !X.sdk) return;
                const {
                    name: Z,
                    version: Y
                } = X.sdk;
                return {
                    name: Z,
                    version: Y
                }
            }
            var hX = [];

            function xX(X) {
                return X.reduce(((X, Z) => (X.every((X => Z.name !== X.name)) && X.push(Z), X)), [])
            }

            function iX(X) {
                var Z = X.defaultIntegrations && [...X.defaultIntegrations] || [],
                    Y = X.integrations;
                let J = [...xX(Z)];
                Array.isArray(Y) ? J = [...J.filter((X => Y.every((Z => Z.name !== X.name)))), ...xX(Y)] : "function" == typeof Y && (J = Y(J), J = Array.isArray(J) ? J : [J]);
                var p = J.map((X => X.name)),
                    k = "Debug";
                return -1 !== p.indexOf(k) && J.push(...J.splice(p.indexOf(k), 1)), J
            }
            class vX {
                __init() {
                    this.G = {}
                }
                __init2() {
                    this.V = !1
                }
                __init3() {
                    this.Y = 0
                }
                __init4() {
                    this.Z = {}
                }
                constructor(X) {
                    if (vX.prototype.__init.call(this), vX.prototype.__init2.call(this), vX.prototype.__init3.call(this), vX.prototype.__init4.call(this), this.tt = X, X.dsn) {
                        this.nt = _(X.dsn);
                        var Z = EX(this.nt, X);
                        this.et = X.transport({
                            recordDroppedEvent: this.recordDroppedEvent.bind(this),
                            ...X.transportOptions,
                            url: Z
                        })
                    }
                }
                captureException(X, Z, Y) {
                    if (oX(X)) return;
                    let J = Z && Z.event_id;
                    return this.rt(this.eventFromException(X, Z).then((X => this.it(X, Z, Y))).then((X => {
                        J = X
                    }))), J
                }
                captureMessage(X, Z, Y, J) {
                    let p = Y && Y.event_id;
                    var k = S(X) ? this.eventFromMessage(String(X), Z, Y) : this.eventFromException(X, Y);
                    return this.rt(k.then((X => this.it(X, Y, J))).then((X => {
                        p = X
                    }))), p
                }
                captureEvent(X, Z, Y) {
                    if (Z && Z.originalException && oX(Z.originalException)) return;
                    let J = Z && Z.event_id;
                    return this.rt(this.it(X, Z, Y).then((X => {
                        J = X
                    }))), J
                }
                captureSession(X) {
                    this.st() && ("string" != typeof X.release || (this.sendSession(X), FX(X, {
                        init: !1
                    })))
                }
                getDsn() {
                    return this.nt
                }
                getOptions() {
                    return this.tt
                }
                getTransport() {
                    return this.et
                }
                flush(X) {
                    var Z = this.et;
                    return Z ? this.ot(X).then((Y => Z.flush(X).then((X => Y && X)))) : DX(!0)
                }
                close(X) {
                    return this.flush(X).then((X => (this.getOptions().enabled = !1, X)))
                }
                setupIntegrations() {
                    var X, Z;
                    this.st() && !this.V && (this.G = (X = this.tt.integrations, Z = {}, X.forEach((X => {
                        Z[X.name] = X, -1 === hX.indexOf(X.name) && (X.setupOnce(dX, RX), hX.push(X.name))
                    })), Z), this.V = !0)
                }
                getIntegrationById(X) {
                    return this.G[X]
                }
                getIntegration(X) {
                    try {
                        return this.G[X.id] || null
                    } catch (X) {
                        return null
                    }
                }
                sendEvent(X, Z = {}) {
                    if (this.nt) {
                        let J = function(X, Z, Y, J) {
                            var p = cX(Y),
                                k = X.type || "event";
                            const {
                                transactionSampling: g
                            } = X.sdkProcessingMetadata || {}, {
                                method: o,
                                rate: b
                            } = g || {};
                            ! function(X, Z) {
                                Z && (X.sdk = X.sdk || {}, X.sdk.name = X.sdk.name || Z.name, X.sdk.version = X.sdk.version || Z.version, X.sdk.integrations = [...X.sdk.integrations || [], ...Z.integrations || []], X.sdk.packages = [...X.sdk.packages || [], ...Z.packages || []])
                            }(X, Y && Y.sdk);
                            var t = function(X, Z, Y, J) {
                                var p = X.sdkProcessingMetadata && X.sdkProcessingMetadata.baggage,
                                    k = p && function(X) {
                                        return X[0]
                                    }(p);
                                return {
                                    event_id: X.event_id,
                                    sent_at: (new Date).toISOString(),
                                    ...Z && {
                                        sdk: Z
                                    },
                                    ...!!Y && {
                                        dsn: j(J)
                                    },
                                    ..."transaction" === X.type && k && {
                                        trace: I({ ...k
                                        })
                                    }
                                }
                            }(X, p, J, Z);
                            return delete X.sdkProcessingMetadata, _X(t, [
                                [{
                                    type: k,
                                    sample_rates: [{
                                        id: o,
                                        rate: b
                                    }]
                                }, X]
                            ])
                        }(X, this.nt, this.tt.K, this.tt.tunnel);
                        for (var Y of Z.attachments || []) J = qX(J, aX(Y, this.tt.transportOptions && this.tt.transportOptions.textEncoder));
                        this.ut(J)
                    }
                }
                sendSession(X) {
                    if (this.nt) {
                        var Z = function(X, Z, Y, J) {
                            var p = cX(Y);
                            return _X({
                                sent_at: (new Date).toISOString(),
                                ...p && {
                                    sdk: p
                                },
                                ...!!J && {
                                    dsn: j(Z)
                                }
                            }, ["aggregates" in X ? [{
                                type: "sessions"
                            }, X] : [{
                                type: "session"
                            }, X]])
                        }(X, this.nt, this.tt.K, this.tt.tunnel);
                        this.ut(Z)
                    }
                }
                recordDroppedEvent(X, Z) {
                    if (this.tt.sendClientReports) {
                        var Y = `${X}:${Z}`;
                        this.Z[Y] = this.Z[Y] + 1 || 1
                    }
                }
                at(X, Z) {
                    let Y = !1,
                        J = !1;
                    var p = Z.exception && Z.exception.values;
                    if (p)
                        for (var k of (J = !0, p)) {
                            var g = k.mechanism;
                            if (g && !1 === g.handled) {
                                Y = !0;
                                break
                            }
                        }
                    var o = "ok" === X.status;
                    (o && 0 === X.errors || o && Y) && (FX(X, { ...Y && {
                            status: "crashed"
                        },
                        errors: X.errors || Number(J || Y)
                    }), this.captureSession(X))
                }
                ot(X) {
                    return new PX((Z => {
                        let Y = 0;
                        var J = setInterval((() => {
                            0 == this.Y ? (clearInterval(J), Z(!0)) : (Y += 1, X && Y >= X && (clearInterval(J), Z(!1)))
                        }), 1)
                    }))
                }
                st() {
                    return !1 !== this.getOptions().enabled && void 0 !== this.nt
                }
                ct(X, Z, Y) {
                    const {
                        normalizeDepth: J = 3,
                        normalizeMaxBreadth: p = 1e3
                    } = this.getOptions();
                    var k = { ...X,
                        event_id: X.event_id || Z.event_id || ZX(),
                        timestamp: X.timestamp || jX()
                    };
                    this.ft(k), this.ht(k);
                    let g = Y;
                    Z.captureContext && (g = mX.clone(g).update(Z.captureContext));
                    let o = DX(k);
                    if (g) {
                        var b = [...Z.attachments || [], ...g.getAttachments()];
                        b.length && (Z.attachments = b), o = g.applyToEvent(k, Z)
                    }
                    return o.then((X => "number" == typeof J && J > 0 ? this.lt(X, J, p) : X))
                }
                lt(X, Z, Y) {
                    if (!X) return null;
                    var J = { ...X,
                        ...X.breadcrumbs && {
                            breadcrumbs: X.breadcrumbs.map((X => ({ ...X,
                                ...X.data && {
                                    data: bX(X.data, Z, Y)
                                }
                            })))
                        },
                        ...X.user && {
                            user: bX(X.user, Z, Y)
                        },
                        ...X.contexts && {
                            contexts: bX(X.contexts, Z, Y)
                        },
                        ...X.extra && {
                            extra: bX(X.extra, Z, Y)
                        }
                    };
                    return X.contexts && X.contexts.trace && J.contexts && (J.contexts.trace = X.contexts.trace, X.contexts.trace.data && (J.contexts.trace.data = bX(X.contexts.trace.data, Z, Y))), X.spans && (J.spans = X.spans.map((X => (X.data && (X.data = bX(X.data, Z, Y)), X)))), J
                }
                ft(X) {
                    var Z = this.getOptions();
                    const {
                        environment: Y,
                        release: J,
                        dist: p,
                        maxValueLength: k = 250
                    } = Z;
                    "environment" in X || (X.environment = "environment" in Z ? Y : "production"), void 0 === X.release && void 0 !== J && (X.release = J), void 0 === X.dist && void 0 !== p && (X.dist = p), X.message && (X.message = A(X.message, k));
                    var g = X.exception && X.exception.values && X.exception.values[0];
                    g && g.value && (g.value = A(g.value, k));
                    var o = X.request;
                    o && o.url && (o.url = A(o.url, k))
                }
                ht(X) {
                    var Z = Object.keys(this.G);
                    Z.length > 0 && (X.sdk = X.sdk || {}, X.sdk.integrations = [...X.sdk.integrations || [], ...Z])
                }
                it(X, Z = {}, Y) {
                    return this.vt(X, Z, Y).then((X => X.event_id), (X => {}))
                }
                vt(X, Z, Y) {
                    const {
                        beforeSend: J,
                        sampleRate: p
                    } = this.getOptions();
                    if (!this.st()) return $X(new f("SDK not enabled, will not capture event."));
                    var k = "transaction" === X.type;
                    return !k && "number" == typeof p && Math.random() > p ? (this.recordDroppedEvent("sample_rate", "error"), $X(new f(`Discarding event because it's not included in the random sample (sampling rate = ${p})`))) : this.ct(X, Z, Y).then((Y => {
                        if (null === Y) throw this.recordDroppedEvent("event_processor", X.type || "error"), new f("An event processor returned null, will not send event.");
                        return Z.data && !0 === Z.data.__sentry__ || k || !J ? Y : function(X) {
                            var Z = "`beforeSend` method has to return `null` or a valid event.";
                            if ($(X)) return X.then((X => {
                                if (!w(X) && null !== X) throw new f(Z);
                                return X
                            }), (X => {
                                throw new f(`beforeSend rejected with ${X}`)
                            }));
                            if (!w(X) && null !== X) throw new f(Z);
                            return X
                        }(J(Y, Z))
                    })).then((J => {
                        if (null === J) throw this.recordDroppedEvent("before_send", X.type || "error"), new f("`beforeSend` returned `null`, will not send event.");
                        var p = Y && Y.getSession();
                        return !k && p && this.at(p, J), this.sendEvent(J, Z), J
                    })).then(null, (X => {
                        if (X instanceof f) throw X;
                        throw this.captureException(X, {
                            data: {
                                __sentry__: !0
                            },
                            originalException: X
                        }), new f(`Event processing pipeline threw an error, original event will not be sent. Details have been sent as a new event.\nReason: ${X}`)
                    }))
                }
                rt(X) {
                    this.Y += 1, X.then((X => (this.Y -= 1, X)), (X => (this.Y -= 1, X)))
                }
                ut(X) {
                    this.et && this.nt && this.et.send(X).then(null, (X => {}))
                }
                dt() {
                    var X = this.Z;
                    return this.Z = {}, Object.keys(X).map((Z => {
                        const [Y, J] = Z.split(":");
                        return {
                            reason: Y,
                            category: J,
                            quantity: X[Z]
                        }
                    }))
                }
            }

            function nX(X, Z, Y = function(X) {
                var Z = [];

                function Y(X) {
                    return Z.splice(Z.indexOf(X), 1)[0]
                }
                return {
                    $: Z,
                    add: function(J) {
                        if (!(void 0 === X || Z.length < X)) return $X(new f("Not adding Promise due to buffer limit reached."));
                        var p = J();
                        return -1 === Z.indexOf(p) && Z.push(p), p.then((() => Y(p))).then(null, (() => Y(p).then(null, (() => {})))), p
                    },
                    drain: function(X) {
                        return new PX(((Y, J) => {
                            let p = Z.length;
                            if (!p) return Y(!0);
                            var k = setTimeout((() => {
                                X && X > 0 && Y(!1)
                            }), X);
                            Z.forEach((X => {
                                DX(X).then((() => {
                                    --p || (clearTimeout(k), Y(!0))
                                }), J)
                            }))
                        }))
                    }
                }
            }(X.bufferSize || 30)) {
                let J = {};
                return {
                    send: function(p) {
                        var k = [];
                        if (KX(p, ((Z, Y) => {
                                var p = CX(Y);
                                ! function(X, Z, Y = Date.now()) {
                                    return function(X, Z) {
                                        return X[Z] || X.all || 0
                                    }(X, Z) > Y
                                }(J, p) ? k.push(Z): X.recordDroppedEvent("ratelimit_backoff", p)
                            })), 0 === k.length) return DX();
                        var g = _X(p[0], k),
                            o = Z => {
                                KX(g, ((Y, J) => {
                                    X.recordDroppedEvent(Z, CX(J))
                                }))
                            };
                        return Y.add((() => Z({
                            body: WX(g, X.textEncoder)
                        }).then((X => {
                            J = function(X, {
                                statusCode: Z,
                                headers: Y
                            }, J = Date.now()) {
                                var p = { ...X
                                    },
                                    k = Y && Y["x-sentry-rate-limits"],
                                    g = Y && Y["retry-after"];
                                if (k)
                                    for (var o of k.trim().split(",")) {
                                        const [X, Z] = o.split(":", 2);
                                        var b = parseInt(X, 10),
                                            t = 1e3 * (isNaN(b) ? 60 : b);
                                        if (Z)
                                            for (var S of Z.split(";")) p[S] = J + t;
                                        else p.all = J + t
                                    } else g ? p.all = J + function(X, Z = Date.now()) {
                                        var Y = parseInt(`${X}`, 10);
                                        if (!isNaN(Y)) return 1e3 * Y;
                                        var J = Date.parse(`${X}`);
                                        return isNaN(J) ? 6e4 : J - Z
                                    }(g, J) : 429 === Z && (p.all = J + 6e4);
                                return p
                            }(J, X)
                        }), (X => {
                            o("network_error")
                        })))).then((X => X), (X => {
                            if (X instanceof f) return o("queue_overflow"), DX();
                            throw X
                        }))
                    },
                    flush: X => Y.drain(X)
                }
            }
            var rX = "7.7.0";
            let TX;
            class NX {
                constructor() {
                    NX.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "FunctionToString"
                }
                __init() {
                    this.name = NX.id
                }
                setupOnce() {
                    TX = Function.prototype.toString, Function.prototype.toString = function(...X) {
                        var Z = m(this) || this;
                        return TX.apply(Z, X)
                    }
                }
            }
            NX.__initStatic();
            var yX = [/^Script error\.?$/, /^Javascript error: Script error\.? on line 0$/];
            class XZ {
                static __initStatic() {
                    this.id = "InboundFilters"
                }
                __init() {
                    this.name = XZ.id
                }
                constructor(X = {}) {
                    this.tt = X, XZ.prototype.__init.call(this)
                }
                setupOnce(X, Z) {
                    var Y = X => {
                        var Y = Z();
                        if (Y) {
                            var J = Y.getIntegration(XZ);
                            if (J) {
                                var p = Y.getClient(),
                                    k = p ? p.getOptions() : {},
                                    g = function(X = {}, Z = {}) {
                                        return {
                                            allowUrls: [...X.allowUrls || [], ...Z.allowUrls || []],
                                            denyUrls: [...X.denyUrls || [], ...Z.denyUrls || []],
                                            ignoreErrors: [...X.ignoreErrors || [], ...Z.ignoreErrors || [], ...yX],
                                            ignoreInternal: void 0 === X.ignoreInternal || X.ignoreInternal
                                        }
                                    }(J.tt, k);
                                return function(X, Z) {
                                    return !((!Z.ignoreInternal || ! function(X) {
                                        try {
                                            return "SentryError" === X.exception.values[0].type
                                        } catch (X) {}
                                        return !1
                                    }(X)) && ! function(X, Z) {
                                        return !(!Z || !Z.length) && function(X) {
                                            if (X.message) return [X.message];
                                            if (X.exception) try {
                                                const {
                                                    type: Z = "",
                                                    value: Y = ""
                                                } = X.exception.values && X.exception.values[0] || {};
                                                return [`${Y}`, `${Z}: ${Y}`]
                                            } catch (X) {
                                                return []
                                            }
                                            return []
                                        }(X).some((X => Z.some((Z => a(X, Z)))))
                                    }(X, Z.ignoreErrors) && ! function(X, Z) {
                                        if (!Z || !Z.length) return !1;
                                        var Y = ZZ(X);
                                        return !!Y && Z.some((X => a(Y, X)))
                                    }(X, Z.denyUrls) && function(X, Z) {
                                        if (!Z || !Z.length) return !0;
                                        var Y = ZZ(X);
                                        return !Y || Z.some((X => a(Y, X)))
                                    }(X, Z.allowUrls))
                                }(X, g) ? null : X
                            }
                        }
                        return X
                    };
                    Y.id = this.name, X(Y)
                }
            }

            function ZZ(X) {
                try {
                    let Z;
                    try {
                        Z = X.exception.values[0].stacktrace.frames
                    } catch (X) {}
                    return Z ? function(X = []) {
                        for (let Y = X.length - 1; Y >= 0; Y--) {
                            var Z = X[Y];
                            if (Z && "<anonymous>" !== Z.filename && "[native code]" !== Z.filename) return Z.filename || null
                        }
                        return null
                    }(Z) : null
                } catch (X) {
                    return null
                }
            }
            XZ.__initStatic();
            var YZ = Object.freeze({
                __proto__: null,
                FunctionToString: NX,
                InboundFilters: XZ
            });

            function JZ(X, Z) {
                const Y = kZ(X, Z),
                    J = {
                        type: Z && Z.name,
                        value: oZ(Z)
                    };
                return Y.length && (J.stacktrace = {
                    frames: Y
                }), void 0 === J.type && "" === J.value && (J.value = "Unrecoverable error caught"), J
            }

            function pZ(X, Z) {
                return {
                    exception: {
                        values: [JZ(X, Z)]
                    }
                }
            }

            function kZ(X, Z) {
                const Y = Z.stacktrace || Z.stack || "",
                    J = function(X) {
                        if (X) {
                            if ("number" == typeof X.framesToPop) return X.framesToPop;
                            if (gZ.test(X.message)) return 1
                        }
                        return 0
                    }(Z);
                try {
                    return X(Y, J)
                } catch (X) {}
                return []
            }
            const gZ = /Minified React error #\d+;/i;

            function oZ(X) {
                const Z = X && X.message;
                return Z ? Z.error && "string" == typeof Z.error.message ? Z.error.message : Z : "No error message"
            }

            function bZ(X, Z, Y, J, p) {
                let t;
                if (o(Z) && Z.error) return pZ(X, Z.error);
                if (b(Z) || g(Z, "DOMException")) {
                    const p = Z;
                    if ("stack" in Z) t = pZ(X, Z);
                    else {
                        const Z = p.name || (b(p) ? "DOMError" : "DOMException"),
                            k = p.message ? `${Z}: ${p.message}` : Z;
                        t = tZ(X, k, Y, J), kX(t, k)
                    }
                    return "code" in p && (t.tags = { ...t.tags,
                        "DOMException.code": `${p.code}`
                    }), t
                }
                return k(Z) ? pZ(X, Z) : w(Z) || D(Z) ? (t = function(X, Z, Y, J) {
                    const p = {
                        exception: {
                            values: [{
                                type: D(Z) ? Z.constructor.name : J ? "UnhandledRejection" : "Error",
                                value: `Non-Error ${J?"promise rejection":"exception"} captured with keys: ${l(Z)}`
                            }]
                        },
                        extra: {
                            __serialized__: tX(Z)
                        }
                    };
                    if (Y) {
                        const Z = kZ(X, Y);
                        Z.length && (p.exception.values[0].stacktrace = {
                            frames: Z
                        })
                    }
                    return p
                }(X, Z, Y, p), gX(t, {
                    synthetic: !0
                }), t) : (t = tZ(X, Z, Y, J), kX(t, `${Z}`, void 0), gX(t, {
                    synthetic: !0
                }), t)
            }

            function tZ(X, Z, Y, J) {
                const p = {
                    message: Z
                };
                if (J && Y) {
                    const J = kZ(X, Y);
                    J.length && (p.exception = {
                        values: [{
                            value: Z,
                            stacktrace: {
                                frames: J
                            }
                        }]
                    })
                }
                return p
            }
            const SZ = "Breadcrumbs";
            class wZ {
                static __initStatic() {
                    this.id = SZ
                }
                __init() {
                    this.name = wZ.id
                }
                constructor(X) {
                    wZ.prototype.__init.call(this), this.options = {
                        console: !0,
                        dom: !0,
                        fetch: !0,
                        history: !0,
                        sentry: !0,
                        xhr: !0,
                        ...X
                    }
                }
                setupOnce() {
                    this.options.console && h("console", DZ), this.options.dom && h("dom", function(X) {
                        return function(Z) {
                            let Y, J = "object" == typeof X ? X.serializeAttribute : void 0;
                            "string" == typeof J && (J = [J]);
                            try {
                                Y = Z.event.target ? M(Z.event.target, J) : M(Z.event, J)
                            } catch (X) {
                                Y = "<unknown>"
                            }
                            0 !== Y.length && RX().addBreadcrumb({
                                category: `ui.${Z.name}`,
                                message: Y
                            }, {
                                event: Z.event,
                                name: Z.name,
                                global: Z.global
                            })
                        }
                    }(this.options.dom)), this.options.xhr && h("xhr", $Z), this.options.fetch && h("fetch", PZ), this.options.history && h("history", MZ)
                }
            }

            function DZ(X) {
                const Z = {
                    category: "console",
                    data: {
                        arguments: X.args,
                        logger: "console"
                    },
                    level: (Y = X.level, "warn" === Y ? "warning" : MX.includes(Y) ? Y : "log"),
                    message: W(X.args, " ")
                };
                var Y;
                if ("assert" === X.level) {
                    if (!1 !== X.args[0]) return;
                    Z.message = `Assertion failed: ${W(X.args.slice(1)," ")||"console.assert"}`, Z.data.arguments = X.args.slice(1)
                }
                RX().addBreadcrumb(Z, {
                    input: X.args,
                    level: X.level
                })
            }

            function $Z(X) {
                if (X.endTimestamp) {
                    if (X.xhr.__sentry_own_request__) return;
                    const {
                        method: Z,
                        url: Y,
                        status_code: J,
                        body: p
                    } = X.xhr.__sentry_xhr__ || {};
                    RX().addBreadcrumb({
                        category: "xhr",
                        data: {
                            method: Z,
                            url: Y,
                            status_code: J
                        },
                        type: "http"
                    }, {
                        xhr: X.xhr,
                        input: p
                    })
                }
            }

            function PZ(X) {
                X.endTimestamp && (X.fetchData.url.match(/sentry_key/) && "POST" === X.fetchData.method || (X.error ? RX().addBreadcrumb({
                    category: "fetch",
                    data: X.fetchData,
                    level: "error",
                    type: "http"
                }, {
                    data: X.error,
                    input: X.args
                }) : RX().addBreadcrumb({
                    category: "fetch",
                    data: { ...X.fetchData,
                        status_code: X.response.status
                    },
                    type: "http"
                }, {
                    input: X.args,
                    response: X.response
                })))
            }

            function MZ(X) {
                const Z = Y();
                let J = X.from,
                    p = X.to;
                const k = YX(Z.location.href);
                let g = YX(J);
                const o = YX(p);
                g.path || (g = k), k.protocol === o.protocol && k.host === o.host && (p = o.relative), k.protocol === g.protocol && k.host === g.host && (J = g.relative), RX().addBreadcrumb({
                    category: "navigation",
                    data: {
                        from: J,
                        to: p
                    }
                })
            }
            wZ.__initStatic();
            const OZ = Y();
            let fZ;

            function HZ() {
                if (fZ) return fZ;
                if (z(OZ.fetch)) return fZ = OZ.fetch.bind(OZ);
                const X = OZ.document;
                let Z = OZ.fetch;
                if (X && "function" == typeof X.createElement) try {
                    const Y = X.createElement("iframe");
                    Y.hidden = !0, X.head.appendChild(Y);
                    const J = Y.contentWindow;
                    J && J.fetch && (Z = J.fetch), X.head.removeChild(Y)
                } catch (X) {}
                return fZ = Z.bind(OZ)
            }
            const jZ = Y();
            class QZ extends vX {
                constructor(X) {
                    X.K = X.K || {}, X.K.sdk = X.K.sdk || {
                        name: "sentry.javascript.browser",
                        packages: [{
                            name: "npm:@sentry/browser",
                            version: rX
                        }],
                        version: rX
                    }, super(X), X.sendClientReports && jZ.document && jZ.document.addEventListener("visibilitychange", (() => {
                        "hidden" === jZ.document.visibilityState && this.yt()
                    }))
                }
                eventFromException(X, Z) {
                    return function(X, Z, Y, J) {
                        const p = bZ(X, Z, Y && Y.syntheticException || void 0, J);
                        return gX(p), p.level = "error", Y && Y.event_id && (p.event_id = Y.event_id), DX(p)
                    }(this.tt.stackParser, X, Z, this.tt.attachStacktrace)
                }
                eventFromMessage(X, Z = "info", Y) {
                    return function(X, Z, Y = "info", J, p) {
                        const k = tZ(X, Z, J && J.syntheticException || void 0, p);
                        return k.level = Y, J && J.event_id && (k.event_id = J.event_id), DX(k)
                    }(this.tt.stackParser, X, Z, Y, this.tt.attachStacktrace)
                }
                sendEvent(X, Z) {
                    const Y = this.getIntegrationById(SZ);
                    Y && Y.options && Y.options.sentry && RX().addBreadcrumb({
                        category: "sentry." + ("transaction" === X.type ? "transaction" : "event"),
                        event_id: X.event_id,
                        level: X.level,
                        message: pX(X)
                    }, {
                        event: X
                    }), super.sendEvent(X, Z)
                }
                ct(X, Z, Y) {
                    return X.platform = X.platform || "javascript", super.ct(X, Z, Y)
                }
                yt() {
                    const X = this.dt();
                    if (0 === X.length) return;
                    if (!this.nt) return;
                    const Z = EX(this.nt, this.tt),
                        Y = (J = X, _X((p = this.tt.tunnel && j(this.nt)) ? {
                            dsn: p
                        } : {}, [
                            [{
                                type: "client_report"
                            }, {
                                timestamp: jX(),
                                discarded_events: J
                            }]
                        ]));
                    var J, p;
                    try {
                        ! function(X, Z) {
                            "[object Navigator]" === Object.prototype.toString.call(OZ && OZ.navigator) && "function" == typeof OZ.navigator.sendBeacon ? OZ.navigator.sendBeacon.bind(OZ.navigator)(X, Z) : B() && HZ()(X, {
                                body: Z,
                                method: "POST",
                                credentials: "omit",
                                keepalive: !0
                            }).then(null, (X => {}))
                        }(Z, WX(Y))
                    } catch (X) {}
                }
            }

            function _Z(X, Z = HZ()) {
                return nX(X, (function(Y) {
                    const J = {
                        body: Y.body,
                        method: "POST",
                        referrerPolicy: "origin",
                        headers: X.headers,
                        ...X.fetchOptions
                    };
                    return Z(X.url, J).then((X => ({
                        statusCode: X.status,
                        headers: {
                            "x-sentry-rate-limits": X.headers.get("X-Sentry-Rate-Limits"),
                            "retry-after": X.headers.get("Retry-After")
                        }
                    })))
                }))
            }

            function qZ(X) {
                return nX(X, (function(Z) {
                    return new PX(((Y, J) => {
                        const p = new XMLHttpRequest;
                        p.onerror = J, p.onreadystatechange = () => {
                            4 === p.readyState && Y({
                                statusCode: p.status,
                                headers: {
                                    "x-sentry-rate-limits": p.getResponseHeader("X-Sentry-Rate-Limits"),
                                    "retry-after": p.getResponseHeader("Retry-After")
                                }
                            })
                        }, p.open("POST", X.url);
                        for (const Z in X.headers) Object.prototype.hasOwnProperty.call(X.headers, Z) && p.setRequestHeader(Z, X.headers[Z]);
                        p.send(Z.body)
                    }))
                }))
            }
            const KZ = "?";

            function AZ(X, Z, Y, J) {
                const p = {
                    filename: X,
                    function: Z,
                    in_app: !0
                };
                return void 0 !== Y && (p.lineno = Y), void 0 !== J && (p.colno = J), p
            }
            const WZ = /^\s*at (?:(.*?) ?\((?:address at )?)?((?:file|https?|blob|chrome-extension|address|native|eval|webpack|<anonymous>|[-a-z]+:|.*bundle|\/).*?)(?::(\d+))?(?::(\d+))?\)?\s*$/i,
                aZ = /\((\S*)(?::(\d+))(?::(\d+))\)/,
                eZ = [30, X => {
                    const Z = WZ.exec(X);
                    if (Z) {
                        if (Z[2] && 0 === Z[2].indexOf("eval")) {
                            const X = aZ.exec(Z[2]);
                            X && (Z[2] = X[1], Z[3] = X[2], Z[4] = X[3])
                        }
                        const [X, Y] = VZ(Z[1] || KZ, Z[2]);
                        return AZ(Y, X, Z[3] ? +Z[3] : void 0, Z[4] ? +Z[4] : void 0)
                    }
                }],
                CZ = /^\s*(.*?)(?:\((.*?)\))?(?:^|@)?((?:file|https?|blob|chrome|webpack|resource|moz-extension|capacitor).*?:\/.*?|\[native code\]|[^@]*(?:bundle|\d+\.js)|\/[\w\-. /=]+)(?::(\d+))?(?::(\d+))?\s*$/i,
                FZ = /(\S+) line (\d+)(?: > eval line \d+)* > eval/i,
                mZ = [50, X => {
                    const Z = CZ.exec(X);
                    if (Z) {
                        if (Z[3] && Z[3].indexOf(" > eval") > -1) {
                            const X = FZ.exec(Z[3]);
                            X && (Z[1] = Z[1] || "eval", Z[3] = X[1], Z[4] = X[2], Z[5] = "")
                        }
                        let X = Z[3],
                            Y = Z[1] || KZ;
                        return [Y, X] = VZ(Y, X), AZ(X, Y, Z[4] ? +Z[4] : void 0, Z[5] ? +Z[5] : void 0)
                    }
                }],
                UZ = /^\s*at (?:((?:\[object object\])?.+) )?\(?((?:file|ms-appx|https?|webpack|blob):.*?):(\d+)(?::(\d+))?\)?\s*$/i,
                dZ = [40, X => {
                    const Z = UZ.exec(X);
                    return Z ? AZ(Z[2], Z[1] || KZ, +Z[3], Z[4] ? +Z[4] : void 0) : void 0
                }],
                GZ = / line (\d+).*script (?:in )?(\S+)(?:: in function (\S+))?$/i,
                lZ = [10, X => {
                    const Z = GZ.exec(X);
                    return Z ? AZ(Z[2], Z[3] || KZ, +Z[1]) : void 0
                }],
                IZ = / line (\d+), column (\d+)\s*(?:in (?:<anonymous function: ([^>]+)>|([^)]+))\(.*\))? in (.*):\s*$/i,
                LZ = [20, X => {
                    const Z = IZ.exec(X);
                    return Z ? AZ(Z[5], Z[3] || Z[4] || KZ, +Z[1], +Z[2]) : void 0
                }],
                RZ = [eZ, mZ, dZ],
                sZ = R(...RZ),
                VZ = (X, Z) => {
                    const Y = -1 !== X.indexOf("safari-extension"),
                        J = -1 !== X.indexOf("safari-web-extension");
                    return Y || J ? [-1 !== X.indexOf("@") ? X.split("@")[0] : KZ, Y ? `safari-extension:${Z}` : `safari-web-extension:${Z}`] : [X, Z]
                };
            let BZ = 0;

            function zZ() {
                return BZ > 0
            }

            function uZ(X, Z = {}, Y) {
                if ("function" != typeof X) return X;
                try {
                    const Z = X.__sentry_wrapped__;
                    if (Z) return Z;
                    if (m(X)) return X
                } catch (Z) {
                    return X
                }
                const J = function() {
                    const J = Array.prototype.slice.call(arguments);
                    try {
                        Y && "function" == typeof Y && Y.apply(this, arguments);
                        const p = J.map((X => uZ(X, Z)));
                        return X.apply(this, p)
                    } catch (X) {
                        throw BZ += 1, setTimeout((() => {
                            BZ -= 1
                        })), zX((Y => {
                            Y.addEventProcessor((X => (Z.mechanism && (kX(X, void 0, void 0), gX(X, Z.mechanism)), X.extra = { ...X.extra,
                                arguments: J
                            }, X))), BX(X)
                        })), X
                    }
                };
                try {
                    for (const Z in X) Object.prototype.hasOwnProperty.call(X, Z) && (J[Z] = X[Z])
                } catch (X) {}
                F(J, X), C(X, "__sentry_wrapped__", J);
                try {
                    Object.getOwnPropertyDescriptor(J, "name").configurable && Object.defineProperty(J, "name", {
                        get: () => X.name
                    })
                } catch (X) {}
                return J
            }
            class EZ {
                static __initStatic() {
                    this.id = "GlobalHandlers"
                }
                __init() {
                    this.name = EZ.id
                }
                __init2() {
                    this.gt = {
                        onerror: cZ,
                        onunhandledrejection: hZ
                    }
                }
                constructor(X) {
                    EZ.prototype.__init.call(this), EZ.prototype.__init2.call(this), this.tt = {
                        onerror: !0,
                        onunhandledrejection: !0,
                        ...X
                    }
                }
                setupOnce() {
                    Error.stackTraceLimit = 50;
                    const X = this.tt;
                    for (const Z in X) {
                        const Y = this.gt[Z];
                        Y && X[Z] && (Y(), this.gt[Z] = void 0)
                    }
                }
            }

            function cZ() {
                h("error", (X => {
                    const [Z, Y, J] = vZ();
                    if (!Z.getIntegration(EZ)) return;
                    const {
                        msg: p,
                        url: k,
                        line: g,
                        column: b,
                        error: S
                    } = X;
                    if (zZ() || S && S.__sentry_own_request__) return;
                    const w = void 0 === S && t(p) ? function(X, Z, Y, J) {
                        let p = o(X) ? X.message : X,
                            k = "Error";
                        const g = p.match(/^(?:[Uu]ncaught (?:exception: )?)?(?:((?:Eval|Internal|Range|Reference|Syntax|Type|URI|)Error): )?(.*)$/i);
                        return g && (k = g[1], p = g[2]), xZ({
                            exception: {
                                values: [{
                                    type: k,
                                    value: p
                                }]
                            }
                        }, Z, Y, J)
                    }(p, k, g, b) : xZ(bZ(Y, S || p, void 0, J, !1), k, g, b);
                    w.level = "error", iZ(Z, S, w, "onerror")
                }))
            }

            function hZ() {
                h("unhandledrejection", (X => {
                    const [Z, Y, J] = vZ();
                    if (!Z.getIntegration(EZ)) return;
                    let p = X;
                    try {
                        "reason" in X ? p = X.reason : "detail" in X && "reason" in X.detail && (p = X.detail.reason)
                    } catch (X) {}
                    if (zZ() || p && p.__sentry_own_request__) return !0;
                    const k = S(p) ? {
                        exception: {
                            values: [{
                                type: "UnhandledRejection",
                                value: `Non-Error promise rejection captured with value: ${String(p)}`
                            }]
                        }
                    } : bZ(Y, p, void 0, J, !0);
                    k.level = "error", iZ(Z, p, k, "onunhandledrejection")
                }))
            }

            function xZ(X, Z, J, p) {
                const k = X.exception = X.exception || {},
                    g = k.values = k.values || [],
                    o = g[0] = g[0] || {},
                    b = o.stacktrace = o.stacktrace || {},
                    S = b.frames = b.frames || [],
                    w = isNaN(parseInt(p, 10)) ? void 0 : p,
                    D = isNaN(parseInt(J, 10)) ? void 0 : J,
                    $ = t(Z) && Z.length > 0 ? Z : function() {
                        var X = Y();
                        try {
                            return X.document.location.href
                        } catch (X) {
                            return ""
                        }
                    }();
                return 0 === S.length && S.push({
                    colno: w,
                    filename: $,
                    function: "?",
                    in_app: !0,
                    lineno: D
                }), X
            }

            function iZ(X, Z, Y, J) {
                gX(Y, {
                    handled: !1,
                    type: J
                }), X.captureEvent(Y, {
                    originalException: Z
                })
            }

            function vZ() {
                const X = RX(),
                    Z = X.getClient(),
                    Y = Z && Z.getOptions() || {
                        stackParser: () => [],
                        attachStacktrace: !1
                    };
                return [X, Y.stackParser, Y.attachStacktrace]
            }
            EZ.__initStatic();
            const nZ = ["EventTarget", "Window", "Node", "ApplicationCache", "AudioTrackList", "ChannelMergerNode", "CryptoOperation", "EventSource", "FileReader", "HTMLUnknownElement", "IDBDatabase", "IDBRequest", "IDBTransaction", "KeyOperation", "MediaController", "MessagePort", "ModalWindow", "Notification", "SVGElementInstance", "Screen", "TextTrack", "TextTrackCue", "TextTrackList", "WebSocket", "WebSocketWorker", "Worker", "XMLHttpRequest", "XMLHttpRequestEventTarget", "XMLHttpRequestUpload"];
            class rZ {
                static __initStatic() {
                    this.id = "TryCatch"
                }
                __init() {
                    this.name = rZ.id
                }
                constructor(X) {
                    rZ.prototype.__init.call(this), this.tt = {
                        XMLHttpRequest: !0,
                        eventTarget: !0,
                        requestAnimationFrame: !0,
                        setInterval: !0,
                        setTimeout: !0,
                        ...X
                    }
                }
                setupOnce() {
                    const X = Y();
                    this.tt.setTimeout && e(X, "setTimeout", TZ), this.tt.setInterval && e(X, "setInterval", TZ), this.tt.requestAnimationFrame && e(X, "requestAnimationFrame", NZ), this.tt.XMLHttpRequest && "XMLHttpRequest" in X && e(XMLHttpRequest.prototype, "send", yZ);
                    const Z = this.tt.eventTarget;
                    Z && (Array.isArray(Z) ? Z : nZ).forEach(XY)
                }
            }

            function TZ(X) {
                return function(...Z) {
                    const Y = Z[0];
                    return Z[0] = uZ(Y, {
                        mechanism: {
                            data: {
                                function: V(X)
                            },
                            handled: !0,
                            type: "instrument"
                        }
                    }), X.apply(this, Z)
                }
            }

            function NZ(X) {
                return function(Z) {
                    return X.apply(this, [uZ(Z, {
                        mechanism: {
                            data: {
                                function: "requestAnimationFrame",
                                handler: V(X)
                            },
                            handled: !0,
                            type: "instrument"
                        }
                    })])
                }
            }

            function yZ(X) {
                return function(...Z) {
                    const Y = this;
                    return ["onload", "onerror", "onprogress", "onreadystatechange"].forEach((X => {
                        X in Y && "function" == typeof Y[X] && e(Y, X, (function(Z) {
                            const Y = {
                                    mechanism: {
                                        data: {
                                            function: X,
                                            handler: V(Z)
                                        },
                                        handled: !0,
                                        type: "instrument"
                                    }
                                },
                                J = m(Z);
                            return J && (Y.mechanism.data.handler = V(J)), uZ(Z, Y)
                        }))
                    })), X.apply(this, Z)
                }
            }

            function XY(X) {
                const Z = Y(),
                    J = Z[X] && Z[X].prototype;
                J && J.hasOwnProperty && J.hasOwnProperty("addEventListener") && (e(J, "addEventListener", (function(Z) {
                    return function(Y, J, p) {
                        try {
                            "function" == typeof J.handleEvent && (J.handleEvent = uZ(J.handleEvent, {
                                mechanism: {
                                    data: {
                                        function: "handleEvent",
                                        handler: V(J),
                                        target: X
                                    },
                                    handled: !0,
                                    type: "instrument"
                                }
                            }))
                        } catch (X) {}
                        return Z.apply(this, [Y, uZ(J, {
                            mechanism: {
                                data: {
                                    function: "addEventListener",
                                    handler: V(J),
                                    target: X
                                },
                                handled: !0,
                                type: "instrument"
                            }
                        }), p])
                    }
                })), e(J, "removeEventListener", (function(X) {
                    return function(Z, Y, J) {
                        const p = Y;
                        try {
                            const Y = p && p.__sentry_wrapped__;
                            Y && X.call(this, Z, Y, J)
                        } catch (X) {}
                        return X.call(this, Z, p, J)
                    }
                })))
            }
            rZ.__initStatic();
            class ZY {
                static __initStatic() {
                    this.id = "LinkedErrors"
                }
                __init() {
                    this.name = ZY.id
                }
                constructor(X = {}) {
                    ZY.prototype.__init.call(this), this.bt = X.key || "cause", this._t = X.limit || 5
                }
                setupOnce() {
                    const X = RX().getClient();
                    X && dX(((Z, Y) => {
                        const J = RX().getIntegration(ZY);
                        return J ? function(X, Z, Y, J, p) {
                            if (!(J.exception && J.exception.values && p && P(p.originalException, Error))) return J;
                            const k = YY(X, Y, p.originalException, Z);
                            return J.exception.values = [...k, ...J.exception.values], J
                        }(X.getOptions().stackParser, J.bt, J._t, Z, Y) : Z
                    }))
                }
            }

            function YY(X, Z, Y, J, p = []) {
                if (!P(Y[J], Error) || p.length + 1 >= Z) return p;
                const k = JZ(X, Y[J]);
                return YY(X, Z, Y[J], J, [k, ...p])
            }
            ZY.__initStatic();
            const JY = Y();
            class pY {
                constructor() {
                    pY.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "HttpContext"
                }
                __init() {
                    this.name = pY.id
                }
                setupOnce() {
                    dX((X => {
                        if (RX().getIntegration(pY)) {
                            if (!JY.navigator && !JY.location && !JY.document) return X;
                            const Z = X.request && X.request.url || JY.location && JY.location.href,
                                {
                                    referrer: Y
                                } = JY.document || {},
                                {
                                    userAgent: J
                                } = JY.navigator || {},
                                p = { ...Z && {
                                        url: Z
                                    },
                                    headers: { ...X.request && X.request.headers,
                                        ...Y && {
                                            Referer: Y
                                        },
                                        ...J && {
                                            "User-Agent": J
                                        }
                                    }
                                };
                            return { ...X,
                                request: p
                            }
                        }
                        return X
                    }))
                }
            }
            pY.__initStatic();
            class kY {
                constructor() {
                    kY.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "Dedupe"
                }
                __init() {
                    this.name = kY.id
                }
                setupOnce(X, Z) {
                    const Y = X => {
                        const Y = Z().getIntegration(kY);
                        if (Y) {
                            try {
                                if (function(X, Z) {
                                        return !(!Z || ! function(X, Z) {
                                            const Y = X.message,
                                                J = Z.message;
                                            return !(!Y && !J || Y && !J || !Y && J || Y !== J || !oY(X, Z) || !gY(X, Z))
                                        }(X, Z) && ! function(X, Z) {
                                            const Y = bY(Z),
                                                J = bY(X);
                                            return !!(Y && J && Y.type === J.type && Y.value === J.value && oY(X, Z) && gY(X, Z))
                                        }(X, Z))
                                    }(X, Y.wt)) return null
                            } catch (Z) {
                                return Y.wt = X
                            }
                            return Y.wt = X
                        }
                        return X
                    };
                    Y.id = this.name, X(Y)
                }
            }

            function gY(X, Z) {
                let Y = tY(X),
                    J = tY(Z);
                if (!Y && !J) return !0;
                if (Y && !J || !Y && J) return !1;
                if (J.length !== Y.length) return !1;
                for (let X = 0; X < J.length; X++) {
                    const Z = J[X],
                        p = Y[X];
                    if (Z.filename !== p.filename || Z.lineno !== p.lineno || Z.colno !== p.colno || Z.function !== p.function) return !1
                }
                return !0
            }

            function oY(X, Z) {
                let Y = X.fingerprint,
                    J = Z.fingerprint;
                if (!Y && !J) return !0;
                if (Y && !J || !Y && J) return !1;
                try {
                    return !(Y.join("") !== J.join(""))
                } catch (X) {
                    return !1
                }
            }

            function bY(X) {
                return X.exception && X.exception.values && X.exception.values[0]
            }

            function tY(X) {
                const Z = X.exception;
                if (Z) try {
                    return Z.values[0].stacktrace.frames
                } catch (X) {
                    return
                }
            }
            kY.__initStatic();
            var SY = Object.freeze({
                __proto__: null,
                GlobalHandlers: EZ,
                TryCatch: rZ,
                Breadcrumbs: wZ,
                LinkedErrors: ZY,
                HttpContext: pY,
                Dedupe: kY
            });
            const wY = [new XZ, new NX, new rZ, new wZ, new EZ, new ZY, new kY, new pY];

            function DY(X) {
                X.startSession({
                    ignoreDuration: !0
                }), X.captureSession()
            }
            let $Y = {};
            const PY = Y();
            PY.Sentry && PY.Sentry.Integrations && ($Y = PY.Sentry.Integrations);
            const MY = { ...$Y,
                ...YZ,
                ...SY
            };
            return X.Breadcrumbs = wZ, X.BrowserClient = QZ, X.Dedupe = kY, X.FunctionToString = NX, X.GlobalHandlers = EZ, X.HttpContext = pY, X.Hub = lX, X.InboundFilters = XZ, X.Integrations = MY, X.LinkedErrors = ZY, X.SDK_VERSION = rX, X.Scope = mX, X.TryCatch = rZ, X.addBreadcrumb = function(X) {
                RX().addBreadcrumb(X)
            }, X.addGlobalEventProcessor = dX, X.captureEvent = function(X, Z) {
                return RX().captureEvent(X, Z)
            }, X.captureException = BX, X.captureMessage = function(X, Z) {
                var Y = "string" == typeof Z ? Z : void 0,
                    J = "string" != typeof Z ? {
                        captureContext: Z
                    } : void 0;
                return RX().captureMessage(X, Y, J)
            }, X.chromeStackLineParser = eZ, X.close = function(X) {
                const Z = RX().getClient();
                return Z ? Z.close(X) : DX(!1)
            }, X.configureScope = function(X) {
                RX().configureScope(X)
            }, X.createTransport = nX, X.defaultIntegrations = wY, X.defaultStackLineParsers = RZ, X.defaultStackParser = sZ, X.flush = function(X) {
                const Z = RX().getClient();
                return Z ? Z.flush(X) : DX(!1)
            }, X.forceLoad = function() {}, X.geckoStackLineParser = mZ, X.getCurrentHub = RX, X.getHubFromCarrier = sX, X.init = function(X = {}) {
                if (void 0 === X.defaultIntegrations && (X.defaultIntegrations = wY), void 0 === X.release) {
                    const Z = Y();
                    Z.SENTRY_RELEASE && Z.SENTRY_RELEASE.id && (X.release = Z.SENTRY_RELEASE.id)
                }
                void 0 === X.autoSessionTracking && (X.autoSessionTracking = !0), void 0 === X.sendClientReports && (X.sendClientReports = !0);
                const Z = { ...X,
                    stackParser: (J = X.stackParser || sZ, Array.isArray(J) ? R(...J) : J),
                    integrations: iX(X),
                    transport: X.transport || (B() ? _Z : qZ)
                };
                var J;
                ! function(X, Z) {
                    !0 === Z.debug && console.warn("[Sentry] Cannot initialize SDK with `debug` option using a non-debug bundle.");
                    var Y = RX(),
                        J = Y.getScope();
                    J && J.update(Z.initialScope);
                    var p = new X(Z);
                    Y.bindClient(p)
                }(QZ, Z), X.autoSessionTracking && function() {
                    if (void 0 === Y().document) return;
                    const X = RX();
                    X.captureSession && (DY(X), h("history", (({
                        from: X,
                        to: Z
                    }) => {
                        void 0 !== X && X !== Z && DY(RX())
                    })))
                }()
            }, X.lastEventId = function() {
                return RX().lastEventId()
            }, X.makeFetchTransport = _Z, X.makeMain = LX, X.makeXHRTransport = qZ, X.onLoad = function(X) {
                X()
            }, X.opera10StackLineParser = lZ, X.opera11StackLineParser = LZ, X.setContext = function(X, Z) {
                RX().setContext(X, Z)
            }, X.setExtra = function(X, Z) {
                RX().setExtra(X, Z)
            }, X.setExtras = function(X) {
                RX().setExtras(X)
            }, X.setTag = function(X, Z) {
                RX().setTag(X, Z)
            }, X.setTags = function(X) {
                RX().setTags(X)
            }, X.setUser = function(X) {
                RX().setUser(X)
            }, X.showReportDialog = function(X = {}, Z = RX()) {
                const J = Y();
                if (!J.document) return;
                const {
                    client: p,
                    scope: k
                } = Z.getStackTop(), g = X.dsn || p && p.getDsn();
                if (!g) return;
                k && (X.user = { ...k.getUser(),
                    ...X.user
                }), X.eventId || (X.eventId = Z.lastEventId());
                const o = J.document.createElement("script");
                o.async = !0, o.src = function(X, Z) {
                    var Y = _(X),
                        J = `${uX(Y)}embed/error-page/`;
                    let p = `dsn=${j(Y)}`;
                    for (var k in Z)
                        if ("dsn" !== k)
                            if ("user" === k) {
                                var g = Z.user;
                                if (!g) continue;
                                g.name && (p += `&name=${encodeURIComponent(g.name)}`), g.email && (p += `&email=${encodeURIComponent(g.email)}`)
                            } else p += `&${encodeURIComponent(k)}=${encodeURIComponent(Z[k])}`;
                    return `${J}?${p}`
                }(g, X), X.onLoad && (o.onload = X.onLoad);
                const b = J.document.head || J.document.body;
                b && b.appendChild(o)
            }, X.startTransaction = function(X, Z) {
                return RX().startTransaction({
                    metadata: {
                        source: "custom"
                    },
                    ...X
                }, Z)
            }, X.winjsStackLineParser = dZ, X.withScope = zX, X.wrap = function(X) {
                return uZ(X)()
            }, X
        }({})
    </script>
    <script>
        (function() {
            "use strict";
            const A = ["Breadcrumbs", "TryCatch"];
            let w = "production";
            const t = window.location.hostname;

            function X(A) {
                if ("string" == typeof A) {
                    const w = A.indexOf("EVOSESSIONID");
                    if (w > -1) return `${A.substr(0,w+10)}=***`
                } else {
                    if (Array.isArray(A)) return A.map(X);
                    "object" == typeof A && A && Object.keys(A).forEach((w => {
                        A[w] = X(A[w])
                    }))
                }
                return A
            }
            /\b(cit)(\d|\b)/.test(t) && (w = "cit"), /\b(uat)(\d|\b)/.test(t) && (w = "uat"), /^([\d\.:]+|[^\.]+)$/.test(t) && (w = "unknown"), /(slim\.evo-test)/.test(t) && (w = "slimdown"), null === Sentry || void 0 === Sentry || Sentry.init({
                dsn: {
                    cit: "https://72570d21b08341c19be61d59607c8435@o36526.ingest.sentry.io/81947",
                    uat: "https://711d62c6f4514adb824a81d4d7e546ea@o36526.ingest.sentry.io/81947",
                    unknown: "https://119b2d8d7f7945cea5636ca07afef0d3@o36526.ingest.sentry.io/81947",
                    development: "https://553a3f48f47c4479bbd70ae67cf1a334@o36526.ingest.sentry.io/81947",
                    slimdown: "https://8612b74a2dd94b1d948b06f40f2010a0@o36526.ingest.sentry.io/81947",
                    production: "https://5fbc2f970bc045c89b1fd0506e03697a@sentry.io/81947"
                }[w],
                release: "6.20240619.72648.42301-f895168235",
                environment: w,
                autoSessionTracking: !1,
                sampleRate: .5,
                ignoreErrors: ["InvalidStateError: Cannot resume a context that has been closed", "InvalidStateError: Audio context is going away", "InvalidStateError: Failed to start the audio device", /^NS_ERROR_/, "nativeViewDidAppear", "nativeViewDidDisappear", "cancelLongPress is not a function"],
                denyUrls: [/extensions\//i, /^chrome:\/\//i, /^pptr:\/\//i],
                integrations: w => w.filter((w => !A.includes(w.name))),
                beforeBreadcrumb: function(A) {
                    const w = A.data;
                    return w && "http" === A.type && 200 === w.status_code ? null : A
                },
                beforeSend: function(A) {
                    const w = "undefined";
                    return A.tags = A.tags || {}, w && (A.tags.sentryTriageSession = w), (null === window || void 0 === window ? void 0 : window.EVO_VERBOSE) ? function(A) {
                        const w = X(A),
                            t = JSON.stringify(w),
                            b = t.indexOf("EVOSESSIONID");
                        return b > -1 ? {
                            message: `${t.substr(0,b+13)}***`
                        } : w
                    }(A) : null
                }
            })
        })()
    </script>
    <script>
        window.BUNDLE_MANIFEST = {
            env: "production",
            version: "6.20240619.72648.42301-f895168235",
            publicPath: "/frontend/evo/r2/",
            commonAssets: ["js/vendor.043c28e7.js", "styles/commons.78542aeb.css", "js/commons.78542aeb.js", "js/commons.wrapped.d381346c.js", "styles/commons.rng.b9207102.css", "js/commons.rng.b9207102.js"],
            apps: {
                abstractGame: {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    audioLibrary: "legacy",
                    adaptive: "evo-game-bootstrap-[live]",
                    assets: [0, 1, 2, "styles/abstractga.1511a59d.css", "js/abstractga.1511a59d.js"]
                },
                andarbahar: {
                    nativeBundle: "evo_live_all",
                    title: "Andar Bahar",
                    loaderExpectedResourceCount: 13,
                    localization: "andarbahar",
                    audioLibrary: "legacy",
                    desktop: "andarBahar.desktop",
                    mobile: "andarBahar.mobile",
                    assets: [0, 1, 2, "styles/andarbahar.45bbe321.css", "js/andarbahar.45bbe321.js"]
                },
                bacbo: {
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    localization: "bacbo",
                    nativeBundle: "evo_live_all",
                    title: "BacBo",
                    desktop: "bacbo.desktop",
                    mobile: "bacbo.mobile",
                    assets: [0, 1, 2, "styles/bacbo.967c2758.css", "js/bacbo.967c2758.js"]
                },
                "baccarat.eight": {
                    title: "Baccarat 8",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-eight",
                    adaptive: "baccarat.eight",
                    assets: [0, 1, 2, "styles/baccarat.eight.8b23295c.css", "js/baccarat.eight.8b23295c.js"]
                },
                "baccarat.goldenWealth": {
                    title: "Golden Wealth Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 33,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-goldenwealth",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.goldenWealth",
                    assets: [0, 1, 2, "styles/baccarat.goldenweal.001d6465.css", "js/baccarat.goldenweal.001d6465.js"]
                },
                "baccarat.multiplay": {
                    title: "Baccarat Multiplay V2",
                    ignoreVideo: !0,
                    localization: "baccarat",
                    loaderExpectedResourceCount: 11,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "baccarat.multiplay.v2",
                    assets: [0, 1, 2, "styles/baccarat.multiplay.4f11d0b0.css", "js/baccarat.multiplay.4f11d0b0.js"]
                },
                "baccarat.peek": {
                    title: "Peek Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.peek",
                    assets: [0, 1, 2, "styles/baccarat.peek.671b7c52.css", "js/baccarat.peek.671b7c52.js"]
                },
                "baccarat.prosperity": {
                    title: "Prosperity Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-prosperity",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.prosperity",
                    assets: [0, 1, 2, "styles/baccarat.prosperity.f2f36eef.css", "js/baccarat.prosperity.f2f36eef.js"]
                },
                "baccarat.v1.lightning": {
                    title: "Lightning Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-lightning",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.lightning",
                    assets: [0, 1, 2, "styles/baccarat.v1.lightning.3c006a2b.css", "js/baccarat.v1.lightning.3c006a2b.js"]
                },
                "baccarat.v1.regular": {
                    title: "Regular Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.regular",
                    assets: [0, 1, 2, "styles/baccarat.v1.regular.d3be10cc.css", "js/baccarat.v1.regular.d3be10cc.js"]
                },
                "baccarat.xtreme": {
                    title: "XXXtreme Lightning Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-xtreme",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.xtreme",
                    assets: [0, 1, 2, "styles/baccarat.xtreme.64aa2470.css", "js/baccarat.xtreme.64aa2470.js"]
                },
                baccaratmultiplay: {
                    title: "Baccarat Multiplay",
                    ignoreVideo: !0,
                    localization: "baccarat",
                    loaderExpectedResourceCount: 11,
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "baccarat.multiplay",
                    assets: [0, 1, 2, "styles/baccaratmu.edc4e207.css", "js/baccaratmu.edc4e207.js"]
                },
                balloonrace: {
                    localization: "balloonrace",
                    audioLibrary: "ecas",
                    audioPackage: "balloonrace",
                    title: "",
                    loaderExpectedResourceCount: 27,
                    adaptive: "balloonrace",
                    assets: [0, 1, 2, "styles/balloonrac.9904e728.css", "js/balloonrac.9904e728.js"]
                },
                "blackjack.v3": {
                    localization: "blackjack",
                    loaderExpectedResourceCount: 17,
                    nativeBundle: "evo_live_all",
                    title: "Classic Blackjack, Speed Blackjack",
                    audioLibrary: "legacy",
                    desktop: "blackjack.desktop",
                    mobile: "blackjack.mobile",
                    assets: [0, 1, 2, "styles/blackjack.v3.acc98c03.css", "js/blackjack.v3.acc98c03.js"]
                },
                cashorcrash: {
                    localization: "cashorcrash",
                    nativeBundle: "evo_live_all",
                    title: "Cash or Crash",
                    audioLibrary: "legacy",
                    desktop: "cashorcrash.desktop",
                    mobile: "cashorcrash.mobile",
                    assets: [0, 1, 2, "styles/cashorcras.6326d9ec.css", "js/cashorcras.6326d9ec.js"]
                },
                compliance: {
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Compliance",
                    localization: "common",
                    audioLibrary: "legacy",
                    adaptive: "compliance",
                    assets: [0, 1, 2, "js/compliance.2ed7bb11.js"]
                },
                craps: {
                    loaderExpectedResourceCount: 20,
                    localization: "craps",
                    nativeBundle: "evo_live_all",
                    title: "Craps",
                    audioLibrary: "legacy",
                    desktop: "craps.desktop",
                    mobile: "craps.mobile",
                    assets: [0, 1, 2, "styles/craps.484d2e49.css", "js/craps.484d2e49.js"]
                },
                crazycoinflip: {
                    nativeBundle: "evo_live_all",
                    title: "Crazy Coin Flip",
                    localization: "crazycoinflip",
                    audioLibrary: "ecas",
                    audioPackage: "crazycoinflip",
                    desktop: "crazyCoinFlip.desktop",
                    mobile: "crazyCoinFlip.mobile",
                    assets: [0, 1, 2, "styles/crazycoinf.bee893a6.css", "js/crazycoinf.bee893a6.js"]
                },
                crazytime: {
                    localization: "crazytime",
                    nativeBundle: "evo_live_all",
                    title: "Crazy Time",
                    audioLibrary: "ecas",
                    audioPackage: "crazytime",
                    desktop: "crazyTime.desktop",
                    mobile: "crazyTime.mobile",
                    assets: [0, 1, 2, "styles/crazytime.5cf8df5b.css", "js/crazytime.5cf8df5b.js"]
                },
                csp: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Caribbean Stud Poker",
                    loaderExpectedResourceCount: 10,
                    adaptive: "poker.caribbean-stud-v2",
                    assets: [0, 1, 2, "styles/csp.94a26b47.css", "js/csp.94a26b47.js"]
                },
                customAppExample: {
                    ignoreVideo: !0,
                    audioLibrary: "legacy",
                    adaptive: "custom-app-example",
                    assets: [1, 2, "js/customappe.fcb15dd5.js"]
                },
                "deadalive.v0": {
                    nativeBundle: "evo_live_all",
                    title: "Dead or Alive: Saloon",
                    localization: "deadoralivesaloon",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "doa-saloon",
                    desktop: "deadalive.desktop",
                    mobile: "deadalive.mobile",
                    assets: [0, 1, 2, "styles/deadalive.v0.1932d233.css", "js/deadalive.v0.1932d233.js"]
                },
                dealnodeal: {
                    loaderExpectedResourceCount: 38,
                    localization: "dealnodeal",
                    nativeBundle: "evo_live_all",
                    title: "Deal Or No Deal",
                    audioLibrary: "legacy",
                    desktop: "dealnodeal.desktop",
                    mobile: "dealnodeal.mobile",
                    assets: [0, 1, 2, "styles/dealnodeal.0f9be34f.css", "js/dealnodeal.0f9be34f.js"]
                },
                dhp: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Double Hand Casino Hold'em",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.double-hand-poker",
                    assets: [0, 1, 2, "styles/dhp.c8c6feda.css", "js/dhp.c8c6feda.js"]
                },
                "dragontiger.lightning": {
                    title: "Lightning Dragon Tiger",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "dragontiger-lightning",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.lightning",
                    assets: [0, 1, 2, "styles/dragontige.lightning.6f7563be.css", "js/dragontige.lightning.6f7563be.js"]
                },
                "dragontiger.regular": {
                    title: "Dragon Tiger",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.regular",
                    assets: [0, 1, 2, "styles/dragontige.regular.bfd588a3.css", "js/dragontige.regular.bfd588a3.js"]
                },
                "dragontiger.topCard": {
                    title: "Top Card",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "top-card",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.topCard",
                    assets: [0, 1, 2, "styles/dragontige.topcard.7d4edd5b.css", "js/dragontige.topcard.7d4edd5b.js"]
                },
                "evo-game-bootstrap.[agslot]": {
                    title: "evo-game-bootstrap",
                    localization: "ne-slots-common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[agslot]",
                    assets: [0, 1, 2, "styles/evogameboo.agslot.1255c29e.css", "js/evogameboo.agslot.1255c29e.js"]
                },
                "evo-game-bootstrap.[live]": {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[live]",
                    assets: [0, 1, 2, "styles/abstractga.1511a59d.css", "js/abstractga.1511a59d.js"]
                },
                "evo-game-bootstrap.[rng]": {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[rng]",
                    assets: [0, 1, 2, "js/evogameboo.rng.54cbec18.js"]
                },
                "evo-rng-bacbo": {
                    title: "evo-rng-bacbo",
                    localization: "common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    loaderExpectedResourceCount: 0,
                    adaptive: "evo-rng-bacbo",
                    assets: [0, 1, 2, "styles/evorngbacb.90b8a109.css", "js/evorngbacb.90b8a109.js"]
                },
                "evo-roulette-new": {
                    title: "evo-roulette-new",
                    localization: "roulette-new",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-roulette-new",
                    assets: [0, 1, 2, "styles/evoroulett.d8e9ef95.css", "js/evoroulett.d8e9ef95.js"]
                },
                "ezugi.lobby": {
                    localization: "common",
                    nativeBundle: "wrapped_ezugi",
                    title: "Ezugi OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    loaderExpectedResourceCount: 26,
                    audioLibrary: "legacy",
                    adaptive: "live.ezugi.lobby",
                    assets: [0, 1, 2, 3, "styles/ezugi.lobby.7e7e2825.css", "js/ezugi.lobby.7e7e2825.js"]
                },
                fantan: {
                    loaderExpectedResourceCount: 19,
                    localization: "fantan",
                    nativeBundle: "evo_live_all",
                    title: "Fan Tan",
                    audioLibrary: "legacy",
                    desktop: "fanTan.desktop",
                    mobile: "fanTan.mobile",
                    assets: [0, 1, 2, "styles/fantan.f4207b2b.css", "js/fantan.f4207b2b.js"]
                },
                funkytime: {
                    nativeBundle: "evo_live_all",
                    title: "Funky Time",
                    localization: "funkytime",
                    audioLibrary: "ecas",
                    audioPackage: "funkytime",
                    desktop: "funkyTime.desktop",
                    mobile: "funkyTime.mobile",
                    assets: [0, 1, 2, "styles/funkytime.c0ca4431.css", "js/funkytime.c0ca4431.js"]
                },
                gonzotreasuremap: {
                    loaderExpectedResourceCount: 22,
                    localization: "gonzotreasuremap",
                    title: "Gonzo Treasure Map",
                    audioLibrary: "ecas",
                    audioPackage: "gonzotreasuremap",
                    nativeBundle: "evo_live_all",
                    desktop: "gonzotreasuremap.desktop",
                    mobile: "gonzotreasuremap.mobile",
                    assets: [0, 1, 2, "styles/gonzotreas.02c5c4af.css", "js/gonzotreas.02c5c4af.js"]
                },
                holdem: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Casino Hold'em",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.casino-holdem-v2",
                    assets: [0, 1, 2, "styles/holdem.b9bd510a.css", "js/holdem.b9bd510a.js"]
                },
                lightningball: {
                    localization: "lightninglotto",
                    audioLibrary: "ecas",
                    audioPackage: "lightningball",
                    title: "Lightning Ball",
                    desktop: "lightningBall.desktop",
                    mobile: "lightningBall.mobile",
                    assets: [0, 1, 2, "styles/lightningb.f800482c.css", "js/lightningb.f800482c.js"]
                },
                lightningdice: {
                    audioLibrary: "ecas",
                    audioPackage: "lightningdice",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 25,
                    localization: "sicbo",
                    title: "Lightning Dice",
                    desktop: "lightningdice.desktop",
                    mobile: "lightningdice.mobile",
                    assets: [0, 1, 2, "styles/lightningd.ecf692b5.css", "js/lightningd.ecf692b5.js"]
                },
                lightninglotto: {
                    localization: "lightninglotto",
                    audioLibrary: "ecas",
                    audioPackage: "lightninglotto",
                    title: "Lightning Lotto",
                    nativeBundle: "evo_live_all",
                    desktop: "lightningLotto.desktop",
                    mobile: "lightningLotto.mobile",
                    assets: [0, 1, 2, "styles/lightningl.c4070f28.css", "js/lightningl.c4070f28.js"]
                },
                "lightningstorm.V0": {
                    title: "Lightning Storm",
                    localization: "lightningstorm",
                    audioLibrary: "ecas",
                    audioPackage: "lightningstorm",
                    desktop: "lightningStorm.desktop",
                    mobile: "lightningStorm.mobile",
                    assets: [0, 1, 2, "styles/lightnings.v0.ce27262a.css", "js/lightnings.v0.ce27262a.js"]
                },
                "live.ezugi": {
                    localization: "common",
                    nativeBundle: "wrapped_ezugi",
                    title: "Ezugi OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    loaderExpectedResourceCount: 43,
                    audioLibrary: "legacy",
                    adaptive: "live.ezugi",
                    assets: [0, 1, 2, 3, "styles/live.ezugi.a8b2db75.css", "js/live.ezugi.a8b2db75.js"]
                },
                liveslotdealnodeal: {
                    loaderExpectedResourceCount: 38,
                    localization: "liveslotdealnodeal",
                    nativeBundle: "",
                    title: "Live Slot Deal Or No Deal",
                    audioLibrary: "ecas",
                    audioPackage: "liveslotdealnodeal",
                    desktop: "liveslot-dealnodeal.desktop",
                    mobile: "liveslot-dealnodeal.mobile",
                    assets: [0, 1, 2, "styles/liveslotde.37a17c54.css", "js/liveslotde.37a17c54.js"]
                },
                livespins: {
                    localization: "common",
                    title: "Livespins OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "livespins",
                    assets: [0, 1, 2, 3, "styles/livespins.a4ba91f8.css", "js/livespins.a4ba91f8.js"]
                },
                lobby: {
                    localization: "smartlobby",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Lobby",
                    loaderExpectedResourceCount: 11,
                    audioLibrary: "legacy",
                    adaptive: "lobby",
                    assets: [0, 1, 2, "styles/lobby.d1463c4d.css", "js/lobby.d1463c4d.js"]
                },
                "lobby-snippet": {
                    localization: "smartlobby",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Lobby Snippet",
                    audioLibrary: "legacy",
                    adaptive: "lobby-snippet",
                    assets: [0, 1, 2, "styles/lobbysnipp.d4acc6b1.css", "js/lobbysnipp.d4acc6b1.js"]
                },
                ls2: {
                    localization: "ls2",
                    audioLibrary: "ecas",
                    title: "Crazy Pachinko",
                    nativeBundle: "evo_live_all",
                    audioPackage: "crazypachinko",
                    desktop: "ls2.desktop",
                    mobile: "ls2.mobile",
                    assets: [0, 1, 2, "styles/ls2.8ca435fe.css", "js/ls2.8ca435fe.js"]
                },
                ls3: {
                    nativeBundle: "evo_live_all",
                    title: "Extra Chilli Epic Spins",
                    loaderExpectedResourceCount: 14,
                    localization: "ls3",
                    audioLibrary: "legacy",
                    desktop: "ls3.desktop",
                    mobile: "ls3.mobile",
                    assets: [0, 1, 2, "styles/ls3.9cdf69c2.css", "js/ls3.9cdf69c2.js"]
                },
                marblerace: {
                    title: "Marble Race",
                    localization: "marblerace",
                    adaptive: "marblerace",
                    assets: [0, 1, 2, "styles/marblerace.5e0aeb79.css", "js/marblerace.5e0aeb79.js"]
                },
                megaball: {
                    loaderExpectedResourceCount: 31,
                    localization: "megaball",
                    nativeBundle: "evo_live_all",
                    title: "Mega Ball",
                    audioLibrary: "legacy",
                    desktop: "megaball.desktop",
                    mobile: "megaball.mobile",
                    assets: [0, 1, 2, "styles/megaball.badf5a31.css", "js/megaball.badf5a31.js"]
                },
                moneywheel: {
                    localization: "money_wheel",
                    nativeBundle: "evo_live_all",
                    title: "Dream Catcher, Imperial Quest",
                    audioLibrary: "ecas",
                    audioPackage: "moneywheel",
                    desktop: "moneywheel.desktop",
                    mobile: "moneywheel.mobile",
                    assets: [0, 1, 2, "styles/moneywheel.e00d28e3.css", "js/moneywheel.e00d28e3.js"]
                },
                monopoly: {
                    localization: "monopoly",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly",
                    audioLibrary: "ecas",
                    audioPackage: "monopoly",
                    desktop: "monopoly.desktop",
                    mobile: "monopoly.mobile",
                    assets: [0, 1, 2, "styles/monopoly.8d084f08.css", "js/monopoly.8d084f08.js"]
                },
                "monopoly.v2": {
                    localization: "monopoly",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly Mobx",
                    audioLibrary: "ecas",
                    audioPackage: "monopoly",
                    desktop: "monopoly.desktop.v2",
                    mobile: "monopoly.mobile.v2",
                    assets: [0, 1, 2, "styles/monopoly.v2.3aded149.css", "js/monopoly.v2.3aded149.js"]
                },
                monopolybigballer: {
                    localization: "monopolybigballer",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly Big Baller",
                    audioLibrary: "ecas",
                    audioPackage: "monopoly-bigballer",
                    desktop: "monopolybigballer.desktop",
                    mobile: "monopolybigballer.mobile",
                    assets: [0, 1, 2, "styles/monopolybi.3bfcb62e.css", "js/monopolybi.3bfcb62e.js"]
                },
                "ne-bigbangboom": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "bigbangboom",
                    loaderExpectedResourceCount: 136,
                    localization: "ne-bigbangboom",
                    nativeBundle: "evo_ne_bigbangboom",
                    title: "Big Bang Boom",
                    adaptive: "ne-bigbangboom",
                    assets: [0, 1, 2, "styles/nebigbangb.7a632409.css", "js/nebigbangb.7a632409.js"]
                },
                "ne-bigmoneywheel": {
                    title: "Big Money Wheel",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "bigmoneywheel",
                    loaderExpectedResourceCount: 107,
                    localization: "ne-bigmoneywheel",
                    nativeBundle: "evo_ne_bigmoneywheel",
                    adaptive: "ne-bigmoneywheel",
                    assets: [0, 1, 2, "styles/nebigmoney.96e6c8ae.css", "js/nebigmoney.96e6c8ae.js"]
                },
                "ne-buckshot-wilds": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "buckshotwilds",
                    localization: "ne-buckshotwilds",
                    title: "Buckshot Wilds™",
                    loaderExpectedResourceCount: 125,
                    nativeBundle: "evo_ne_buckshotwilds",
                    adaptive: "ne-buckshot-wilds",
                    assets: [0, 1, 2, "styles/nebuckshot.a8f35564.css", "js/nebuckshot.a8f35564.js"]
                },
                "ne-candies101": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "101candies",
                    loaderExpectedResourceCount: 113,
                    localization: "ne-candies101",
                    title: "101 Candies",
                    nativeBundle: "evo_ne_candies101",
                    adaptive: "ne-candies101",
                    assets: [0, 1, 2, "styles/necandies1.cf157347.css", "js/necandies1.cf157347.js"]
                },
                "ne-corneliusmhm": {
                    title: "ne-corneliusmhm",
                    localization: "ne-corneliusmilkhuntermegaways",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "corneliusmhm",
                    loaderExpectedResourceCount: 50,
                    adaptive: "ne-corneliusmhm",
                    assets: [0, 1, 2, "styles/necorneliu.198db1f0.css", "js/necorneliu.198db1f0.js"]
                },
                "ne-crabtrap": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "crabtrap",
                    loaderExpectedResourceCount: 112,
                    localization: "ne-crabtrap",
                    nativeBundle: "evo_ne_crabtrap",
                    title: "Crab Trap",
                    adaptive: "ne-crabtrap",
                    assets: [0, 1, 2, "styles/necrabtrap.686367d8.css", "js/necrabtrap.686367d8.js"]
                },
                "ne-cursed-treasure": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "cursedtreasure",
                    loaderExpectedResourceCount: 96,
                    localization: "ne-cursedtreasure",
                    title: "Cursed treasure",
                    nativeBundle: "evo_ne_cursedtreasure",
                    adaptive: "ne-cursed-treasure",
                    assets: [0, 1, 2, "styles/necursedtr.013b1596.css", "js/necursedtr.013b1596.js"]
                },
                "ne-dazzleme": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "magicbox",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-goldenrealms",
                    title: "Dazzle Me",
                    adaptive: "ne-dazzleme",
                    assets: [0, 1, 2, "styles/nedazzleme.bc068dd9.css", "js/nedazzleme.bc068dd9.js"]
                },
                "ne-elk-hunter": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "elkhunter",
                    loaderExpectedResourceCount: 76,
                    localization: "ne-elkhunter",
                    title: "Elk Hunter",
                    nativeBundle: "evo_ne_elkhunter",
                    adaptive: "ne-elk-hunter",
                    assets: [0, 1, 2, "styles/neelkhunte.84cad92c.css", "js/neelkhunte.84cad92c.js"]
                },
                "ne-finncandyspin": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "finncandyspin",
                    loaderExpectedResourceCount: 119,
                    localization: "ne-finncandyspin",
                    title: "Finn and The Candy Spin",
                    nativeBundle: "evo_ne_finncandyspin",
                    adaptive: "ne-finncandyspin",
                    assets: [0, 1, 2, "styles/nefinncand.cb0c78bf.css", "js/nefinncand.cb0c78bf.js"]
                },
                "ne-fruitshop": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "starburst-brandable",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-slots-common",
                    adaptive: "ne-fruitshop",
                    assets: [0, 1, 2, "styles/nefruitsho.bfaf15fc.css", "js/nefruitsho.bfaf15fc.js"]
                },
                "ne-golden-wheels": {
                    title: "Golden Wheels of Egypt",
                    localization: "ne-goldenwheels",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "goldenwheels",
                    loaderExpectedResourceCount: 132,
                    nativeBundle: "evo_ne_goldenwheels",
                    adaptive: "ne-golden-wheels",
                    assets: [0, 1, 2, "styles/negoldenwh.e8461f8d.css", "js/negoldenwh.e8461f8d.js"]
                },
                "ne-goldenchicken": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "goldenchicken",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-goldenrealms",
                    adaptive: "ne-goldenchicken",
                    assets: [0, 1, 2, "styles/negoldench.1058f643.css", "js/negoldench.1058f643.js"]
                },
                "ne-goldenrealms": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "magicbox",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-goldenrealms",
                    title: "Golden Realms",
                    nativeBundle: "evo_ne_goldenrealms",
                    adaptive: "ne-goldenrealms",
                    assets: [0, 1, 2, "styles/negoldenre.f242eaef.css", "js/negoldenre.f242eaef.js"]
                },
                "ne-jack-and-beanstalk": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "jackandbeanstalkrem",
                    loaderExpectedResourceCount: 138,
                    localization: "ne-jackandbeanstalkrem",
                    title: "Jack and the Beanstalk Remastered",
                    nativeBundle: "evo_ne_jack_and_beanstalk",
                    adaptive: "ne-jack-and-beanstalk",
                    assets: [0, 1, 2, "styles/nejackandb.704c173e.css", "js/nejackandb.704c173e.js"]
                },
                "ne-jackhammer3": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "jackhammer3",
                    localization: "ne-jackhammer3",
                    loaderExpectedResourceCount: 88,
                    title: "Jack Hammer 3: Diamond Affair",
                    nativeBundle: "evo_ne_jackhammer3",
                    adaptive: "ne-jackhammer3",
                    assets: [0, 1, 2, "styles/nejackhamm.d7c152e5.css", "js/nejackhamm.d7c152e5.js"]
                },
                "ne-junglespiritmw": {
                    title: "Jungle Spirit Megaways",
                    localization: "ne-junglespiritmegaways",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "junglespiritmw",
                    loaderExpectedResourceCount: 106,
                    nativeBundle: "evo_ne_junglespiritmw",
                    adaptive: "ne-junglespiritmw",
                    assets: [0, 1, 2, "styles/nejunglesp.ab4a4a19.css", "js/nejunglesp.ab4a4a19.js"]
                },
                "ne-locknpop": {
                    title: "Lock and Pop",
                    localization: "ne-lockandpop",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "locknpop",
                    loaderExpectedResourceCount: 137,
                    nativeBundle: "evo_ne_locknpop",
                    adaptive: "ne-locknpop",
                    assets: [0, 1, 2, "styles/nelocknpop.69d6dcb3.css", "js/nelocknpop.69d6dcb3.js"]
                },
                "ne-rabidrandy": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rabidrandy",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-goldenrealms",
                    adaptive: "ne-rabidrandy",
                    assets: [0, 1, 2, "styles/nerabidran.2bb2ea7f.css", "js/nerabidran.2bb2ea7f.js"]
                },
                "ne-rage": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rage",
                    loaderExpectedResourceCount: 126,
                    localization: "ne-rage",
                    title: "Rage",
                    nativeBundle: "evo_ne_rage",
                    adaptive: "ne-rage",
                    assets: [0, 1, 2, "styles/nerage.bd8e6f10.css", "js/nerage.bd8e6f10.js"]
                },
                "ne-royalnuts": {
                    title: "Royal Nuts",
                    localization: "ne-royalnuts",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "royalnuts",
                    loaderExpectedResourceCount: 85,
                    nativeBundle: "evo_ne_royalnuts",
                    adaptive: "ne-royalnuts",
                    assets: [0, 1, 2, "styles/neroyalnut.236c66df.css", "js/neroyalnut.236c66df.js"]
                },
                "ne-sb-brandable": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    title: "starburst-brandable",
                    audioPackage: "Starburst Brandable",
                    loaderExpectedResourceCount: 41,
                    localization: "ne-starburst-brandable",
                    adaptive: "ne-starburst-brandable",
                    assets: [0, 1, 2, "styles/nesbbranda.8ead8fd4.css", "js/nesbbranda.8ead8fd4.js"]
                },
                "ne-spacewarsmw": {
                    title: "ne-spacewarsmw",
                    localization: "ne-spacewarsmwxxxtreme",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "spacewarsmw",
                    loaderExpectedResourceCount: 133,
                    adaptive: "ne-spacewarsmw",
                    assets: [0, 1, 2, "styles/nespacewar.924944c0.css", "js/nespacewar.924944c0.js"]
                },
                "ne-starburst-galaxy": {
                    title: "ne-starburst-galaxy",
                    localization: "ne-slots-common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "starburst-galaxy",
                    adaptive: "ne-starburst-galaxy",
                    assets: [0, 1, 2, "styles/nestarburs.5ef1bd41.css", "js/nestarburs.5ef1bd41.js"]
                },
                "ne-thrill-to-grill": {
                    localization: "ne-thrilltogrill",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "thrilltogrill",
                    loaderExpectedResourceCount: 118,
                    title: "Thrill to Grill",
                    nativeBundle: "evo_ne_thrilltogrill",
                    adaptive: "ne-thrill-to-grill",
                    assets: [0, 1, 2, "styles/nethrillto.cb000888.css", "js/nethrillto.cb000888.js"]
                },
                "ne-twister": {
                    title: "Twister",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "twister",
                    loaderExpectedResourceCount: 198,
                    localization: "ne-elkhunter",
                    adaptive: "ne-twister",
                    assets: [0, 1, 2, "styles/netwister.3364e088.css", "js/netwister.3364e088.js"]
                },
                "powerball.v0": {
                    localization: "powerball",
                    title: "Evo PowerBall",
                    audioLibrary: "ecas",
                    audioPackage: "powerball",
                    nativeBundle: "evo_live_all",
                    adaptive: "powerball.adaptive",
                    assets: [0, 1, 2, "styles/powerball.v0.664e2ec7.css", "js/powerball.v0.664e2ec7.js"]
                },
                promotions: {
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Promotions - Reward Games",
                    localization: "common",
                    loaderExpectedResourceCount: 16,
                    loaderResourcesCountingMode: "auto",
                    audioLibrary: "legacy",
                    adaptive: "promotions",
                    assets: [0, 1, 2, "styles/promotions.2a619cb6.css", "js/promotions.2a619cb6.js"]
                },
                "reserved-table": {
                    localization: "common",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "",
                    audioLibrary: "legacy",
                    adaptive: "reserved-table",
                    assets: [0, 1, 2, "styles/reservedta.1be6ba6a.css", "js/reservedta.1be6ba6a.js"]
                },
                "rng-baccarat.lightning": {
                    title: "First Person Lightning Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "ecas",
                    audioPackage: "rng-baccarat-lightning",
                    adaptive: "rng-baccarat.lightning",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.lightning.afa76bdf.css", "js/rngbaccara.lightning.afa76bdf.js"]
                },
                "rng-baccarat.prosperity": {
                    title: "First Person Prosperity Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "ecas",
                    audioPackage: "rng-baccarat-prosperity",
                    adaptive: "rng-baccarat.prosperity",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.prosperity.f1af71eb.css", "js/rngbaccara.prosperity.f1af71eb.js"]
                },
                "rng-baccarat.regular": {
                    title: "First Person Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "ecas",
                    audioPackage: "rng-baccarat",
                    adaptive: "rng-baccarat.regular",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.regular.0c6421c9.css", "js/rngbaccara.regular.0c6421c9.js"]
                },
                "rng-baccarat.v0": {
                    title: "First Person Baccarat, First Person Lightning Baccarat, First Person Golden Wealth Baccarat, First Person XXXtreme Lightning Baccarat, First Person Prosperity Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    nativeBundle: "evo_rng_baccarat",
                    audioLibrary: "legacy",
                    desktop: "rng-baccarat.desktop",
                    mobile: "rng-baccarat.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.v0.bcb98468.css", "js/rngbaccara.v0.bcb98468.js"]
                },
                "rng-blackjack.horizon": {
                    localization: "blackjack",
                    ignoreVideo: !0,
                    loaderExpectedResourceCount: 56,
                    nativeBundle: "evo_rng_blackjack",
                    title: "First Person Blackjack, First Person Lightning Blackjack",
                    audioLibrary: "legacy",
                    desktop: "rng-blackjack.horizon.desktop",
                    mobile: "rng-blackjack.horizon.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngblackja.horizon.37612f7d.css", "js/rngblackja.horizon.37612f7d.js"]
                },
                "rng-craps": {
                    ignoreVideo: !0,
                    loaderExpectedResourceCount: 94,
                    localization: "rng-craps",
                    nativeBundle: "evo_rng_craps",
                    title: "First Person Craps",
                    audioLibrary: "legacy",
                    desktop: "rng-craps.desktop",
                    mobile: "rng-craps.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngcraps.e604951c.css", "js/rngcraps.e604951c.js"]
                },
                "rng-dealnodeal": {
                    ignoreVideo: !0,
                    loaderExpectedResourceCount: 90,
                    localization: "rng-dealnodeal",
                    nativeBundle: "evo_rng_dealnodeal",
                    audioLibrary: "ecas",
                    audioPackage: "rng-dealnodeal",
                    title: "First Person Deal Or No Deal",
                    desktop: "rng-dealnodeal.desktop",
                    mobile: "rng-dealnodeal.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngdealnod.882fea68.css", "js/rngdealnod.882fea68.js"]
                },
                "rng-dragontiger.v0": {
                    nativeBundle: "evo_rng_topcard",
                    title: "First Person Top Card, First Person Dragon Tiger",
                    localization: "rng-dragontiger",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "legacy",
                    desktop: "rng-dragontiger.desktop",
                    mobile: "rng-dragontiger.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngdragont.v0.e73e4313.css", "js/rngdragont.v0.e73e4313.js"]
                },
                "rng-hilo.v0": {
                    localization: "rng-hilo",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rng-hilo",
                    title: "First Person HiLo",
                    loaderExpectedResourceCount: 49,
                    desktop: "rng-hilo.desktop",
                    mobile: "rng-hilo.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rnghilo.v0.265cedaa.css", "js/rnghilo.v0.265cedaa.js"]
                },
                "rng-lightninglotto": {
                    localization: "lightninglotto",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rng-lightninglotto",
                    title: "First Person Lightning Lotto",
                    nativeBundle: "evo_rng_lightninglotto",
                    adaptive: "rng-lightningLotto",
                    assets: [0, 1, 2, 4, 5, "styles/rnglightni.e1a7c964.css", "js/rnglightni.e1a7c964.js"]
                },
                "rng-megaball": {
                    ignoreVideo: !0,
                    loaderExpectedResourceCount: 45,
                    localization: "rng-megaball",
                    nativeBundle: "evo_rng_megaball",
                    title: "First Person Mega Ball",
                    audioLibrary: "legacy",
                    desktop: "rng-megaball.desktop",
                    mobile: "rng-megaball.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngmegabal.2ef5e20b.css", "js/rngmegabal.2ef5e20b.js"]
                },
                "rng-moneywheel.horizon": {
                    localization: "rng-moneywheel",
                    ignoreVideo: !0,
                    nativeBundle: "evo_rng_moneywheel",
                    title: "First Person Dream Catcher",
                    audioLibrary: "ecas",
                    audioPackage: "rng-moneywheel",
                    desktop: "rng-moneywheel.horizon.desktop",
                    mobile: "rng-moneywheel.horizon.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngmoneywh.horizon.2d767d21.css", "js/rngmoneywh.horizon.2d767d21.js"]
                },
                "rng-roulette.horizon.preview": {
                    ignoreVideo: !0,
                    nativeBundle: "evo_rng_roulette",
                    localization: "rng-roulette",
                    loaderExpectedResourceCount: 93,
                    title: "First Person Roulette, First Person Lightning Roulette, First Person American Roulette, First Person XXXtreme Lightning Roulette",
                    audioLibrary: "legacy",
                    desktop: "rng-roulette.horizon.desktop",
                    mobile: "rng-roulette.horizon.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngroulett.horizon.preview.74cc5967.css", "js/rngroulett.horizon.preview.74cc5967.js"]
                },
                "rng-sicbo": {
                    audioLibrary: "ecas",
                    audioPackage: "rng-sicbo",
                    loaderExpectedResourceCount: 51,
                    localization: "rng-sicbo",
                    nativeBundle: "evo_rng_sicbo",
                    title: "First Person Super Sic Bo",
                    adaptive: "rng.sicbo",
                    assets: [0, 1, 2, "styles/rngsicbo.f2475faf.css", "js/rngsicbo.f2475faf.js"]
                },
                "rng-videopoker.v1": {
                    localization: "poker",
                    nativeBundle: "evo_rng_videopoker",
                    audioLibrary: "ecas",
                    audioPackage: "rng-videopoker",
                    title: "First Person Video Poker",
                    loaderExpectedResourceCount: 73,
                    adaptive: "poker.rng-video-poker",
                    assets: [0, 1, 2, "styles/rngvideopo.v1.0210e128.css", "js/rngvideopo.v1.0210e128.js"]
                },
                roulette: {
                    localization: "roulette",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 23,
                    title: "Roulette, Auto-Roulette, Speed Roulette, American Roulette, Lightning Roulette, Gold Vault Roulette, Instant Roulette, XXXtreme Lightning Roulette, Immersive Roulette, Speed Auto-Roulette, Double Ball Roulette, VIP Roulette, Salon Privé Roulette, French Roulette Gold, Auto Lightning Roulette, Red Door Roulette",
                    audioLibrary: "legacy",
                    desktop: "roulette.desktop",
                    mobile: "roulette.mobile",
                    assets: [0, 1, 2, "styles/roulette.04389201.css", "js/roulette.04389201.js"]
                },
                "roulette.ecas": {
                    audioLibrary: "ecas",
                    audioPackage: "roulette",
                    localization: "roulette",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 23,
                    title: "Roulette, Auto-Roulette, Speed Roulette, American Roulette, Lightning Roulette, Gold Vault Roulette, Instant Roulette, XXXtreme Lightning Roulette, Immersive Roulette, Speed Auto-Roulette, Double Ball Roulette, VIP Roulette, Salon Privé Roulette, French Roulette Gold, Auto Lightning Roulette, Red Door Roulette",
                    desktop: "roulette.desktop",
                    mobile: "roulette.mobile",
                    assets: [0, 1, 2, "styles/roulette.04389201.css", "js/roulette.04389201.js"]
                },
                "scalableblackjack.v2": {
                    localization: "blackjack",
                    nativeBundle: "evo_live_all",
                    title: "Scalable Blackjack, Free Bet Blackjack, Power Blackjack, Lightning Blackjack",
                    loaderExpectedResourceCount: 21,
                    audioLibrary: "legacy",
                    desktop: "blackjack.scalable.desktop",
                    mobile: "blackjack.scalable.mobile",
                    assets: [0, 1, 2, "styles/scalablebl.v2.ddb88ea9.css", "js/scalablebl.v2.ddb88ea9.js"]
                },
                scalableblackjack: {
                    localization: "blackjack",
                    nativeBundle: "evo_live_all",
                    title: "Scalable Blackjack, Free Bet Blackjack, Power Blackjack, Lightning Blackjack",
                    loaderExpectedResourceCount: 21,
                    audioLibrary: "legacy",
                    desktop: "blackjack.scalable.desktop",
                    mobile: "blackjack.scalable.mobile",
                    assets: [0, 1, 2, "styles/scalablebl.v2.ddb88ea9.css", "js/scalablebl.v2.ddb88ea9.js"]
                },
                sicbo: {
                    audioLibrary: "ecas",
                    audioPackage: "sicbo",
                    loaderExpectedResourceCount: 28,
                    localization: "sicbo",
                    nativeBundle: "evo_live_all",
                    title: "Super Sic Bo",
                    desktop: "sicbo.desktop",
                    mobile: "sicbo.mobile",
                    assets: [0, 1, 2, "styles/sicbo.05a928e1.css", "js/sicbo.05a928e1.js"]
                },
                "sicbo.lightning": {
                    audioLibrary: "ecas",
                    audioPackage: "sicbo-lightning",
                    loaderExpectedResourceCount: 31,
                    localization: "sicbo",
                    title: "Lightning Sic Bo",
                    desktop: "sicbo.lightning.desktop",
                    mobile: "sicbo.lightning.mobile",
                    assets: [0, 1, 2, "styles/sicbo.lightning.f22fa298.css", "js/sicbo.lightning.f22fa298.js"]
                },
                sidebetcity: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "sidebetcity",
                    title: "Side Bet City",
                    loaderExpectedResourceCount: 10,
                    adaptive: "poker.side-bet-city",
                    assets: [0, 1, 2, "styles/sidebetcit.4928cf42.css", "js/sidebetcit.4928cf42.js"]
                },
                "slots.btg": {
                    localization: "common",
                    nativeBundle: "wrapped_btg",
                    title: "Big Time Gaming OSS wrapper",
                    ignoreVideo: !0,
                    audioLibrary: "legacy",
                    adaptive: "slots.btg",
                    assets: [0, 1, 2, 3, "styles/slots.btg.5f10a596.css", "js/slots.btg.5f10a596.js"]
                },
                "slots.ne": {
                    localization: "common",
                    nativeBundle: "wrapped_ne",
                    title: "Netent OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "slots.ne",
                    assets: [0, 1, 2, 3, "styles/slots.ne.aa92ee9f.css", "js/slots.ne.aa92ee9f.js"]
                },
                "slots.ne.horizon": {
                    localization: "common",
                    nativeBundle: "wrapped_ne",
                    title: "Netent OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "slots.ne.horizon",
                    assets: [0, 1, 2, 3, "styles/slots.ne.horizon.2167b867.css", "js/slots.ne.horizon.2167b867.js"]
                },
                "slots.nlc": {
                    localization: "common",
                    nativeBundle: "wrapped_nlc",
                    title: "No Limit City OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "slots.nlc",
                    assets: [0, 1, 2, 3, "styles/slots.nlc.7908aefd.css", "js/slots.nlc.7908aefd.js"]
                },
                "slots.rt": {
                    localization: "common",
                    nativeBundle: "wrapped_rt",
                    title: "RedTiger OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    loaderExpectedResourceCount: 150,
                    audioLibrary: "legacy",
                    adaptive: "slots.rt",
                    assets: [0, 1, 2, 3, "styles/slots.rt.1e980097.css", "js/slots.rt.1e980097.js"]
                },
                stockmarket: {
                    title: "Stock Market",
                    localization: "stockmarket",
                    audioLibrary: "ecas",
                    audioPackage: "stockmarket",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 33,
                    adaptive: "stockmarket",
                    assets: [0, 1, 2, "styles/stockmarke.9adb68a6.css", "js/stockmarke.9adb68a6.js"]
                },
                "tcp.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Three Card Poker, Triple Card Poker",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.d7d3b85a.css", "js/tcp.v2.d7d3b85a.js"]
                },
                "trp.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Three Card Poker, Triple Card Poker",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.d7d3b85a.css", "js/tcp.v2.d7d3b85a.js"]
                },
                teenpatti: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "teenpatti",
                    title: "Teen Patti",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.d7d3b85a.css", "js/tcp.v2.d7d3b85a.js"]
                },
                testgame: {
                    title: "testgame",
                    localization: "common",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "testgame",
                    assets: [0, 1, 2, "styles/testgame.a48fa284.css", "js/testgame.a48fa284.js"]
                },
                "thb.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Texas Hold'em Bonus Poker",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.texas-bonus-v2",
                    assets: [0, 1, 2, "styles/thb.v2.0ce5178b.css", "js/thb.v2.0ce5178b.js"]
                },
                topdice: {
                    audioLibrary: "ecas",
                    audioPackage: "topdice",
                    localization: "topdice",
                    nativeBundle: "evo_live_all",
                    title: "Top Dice",
                    desktop: "topdice.desktop",
                    mobile: "topdice.mobile",
                    assets: [0, 1, 2, "styles/topdice.c7aeb46f.css", "js/topdice.c7aeb46f.js"]
                },
                uprising: {
                    localization: "uprising",
                    title: "Uprising",
                    audioLibrary: "ecas",
                    audioPackage: "uprising",
                    desktop: "uprising.desktop",
                    mobile: "uprising.mobile",
                    assets: [0, 1, 2, "styles/uprising.9e32128e.css", "js/uprising.9e32128e.js"]
                },
                uth: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Ultimate Texas Hold'em, Extreme Texas Hold'em",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.ultimate-texas",
                    assets: [0, 1, 2, "styles/uth.def21d1b.css", "js/uth.def21d1b.js"]
                },
                eth: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Ultimate Texas Hold'em, Extreme Texas Hold'em",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.ultimate-texas",
                    assets: [0, 1, 2, "styles/uth.def21d1b.css", "js/uth.def21d1b.js"]
                },
                valkyrie: {
                    localization: "common",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "valkyrie",
                    assets: [0, 1, 2, 3, "styles/valkyrie.295efc73.css", "js/valkyrie.295efc73.js"]
                },
                "videopoker.v1": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "videopoker",
                    title: "Video Poker",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.video-poker",
                    assets: [0, 1, 2, "styles/videopoker.v1.5b1202c9.css", "js/videopoker.v1.5b1202c9.js"]
                }
            }
        }
    </script>
    <script>
        "use strict";
        (() => {
            var p, x, I, J, M = {
                    363188: (p, x, I) => {
                        I.d(x, {
                            $: () => J,
                            Z: () => M
                        });
                        class J extends Error {
                            constructor(p, x) {
                                super(`FetchUrl "${p}" exception: ${x instanceof Error?x:`${x.status} ${x.statusText}`}`), this.url = p, x instanceof Response ? (this.isOpaqueRedirect = "opaqueredirect" === x.type, this.status = x.status) : (this.isOpaqueRedirect = !1, this.status = null)
                            }
                        }

                        function M(p, x) {
                            console.error(p, x);
                            const I = window.EVO_LOADER;
                            if (I) {
                                let M;
                                if (x instanceof J) M = `HTTP code ${x.isOpaqueRedirect?"30x":x.status}`;
                                else if (x instanceof Response) M = `HTTP code ${"opaqueredirect"===x.type?"30x":x.status}`;
                                else if (x instanceof Error) M = x.stack;
                                else try {
                                    M = JSON.stringify(x) || "undefined"
                                } catch (p) {
                                    M = p ? p.toString() : ""
                                }
                                I.sendLog("CLIENT_ERROR_LOADING_STATIC_RESOURCE", {
                                    failedURL: p,
                                    error: M
                                })
                            }
                        }
                    },
                    894273: (p, x, I) => {
                        I.d(x, {
                            EL: () => w,
                            ah: () => C,
                            gE: () => M,
                            mN: () => D,
                            oj: () => T,
                            vV: () => $,
                            yW: () => z
                        });
                        class J extends Error {
                            constructor(p, x, {
                                extra: I,
                                localizedMessage: J,
                                sendToSentry: M
                            } = {}) {
                                super(p), this.type = x, this.name = x, this.sendToSentry = !1 !== M, this.localizedMessage = J, I && (this.extra = I)
                            }
                        }
                        class M extends J {
                            constructor(p, x = {}) {
                                super(p, "Generic", x)
                            }
                        }
                        class D extends J {
                            constructor(p, {
                                doNotRetry: x = !1,
                                localizedMessage: I,
                                sendToSentry: J
                            } = {}) {
                                super(p, "Loader", {
                                    localizedMessage: I,
                                    sendToSentry: J
                                }), this.doNotRetry = x
                            }
                        }
                        class z extends J {
                            constructor(p, x) {
                                super(p, "Sound", {
                                    extra: x
                                })
                            }
                        }
                        class C extends J {
                            constructor(p, x) {
                                super(p, "MultiwindowInitialization", {
                                    extra: x
                                })
                            }
                        }

                        function T(p) {
                            if ("string" == typeof p) return new D(p, {
                                sendToSentry: !1
                            });
                            if (p instanceof ErrorEvent) return new D(`Script loading error: filename: ${p.filename}, colno: ${p.colno}, lineno: ${p.lineno}, message: ${p.message}`);
                            const x = new D(p.message);
                            return x.stack = p.stack, x
                        }

                        function L(p) {
                            return p instanceof J
                        }

                        function w(p) {
                            return !!p && p instanceof Error && "Loader" === p.type
                        }

                        function $(p) {
                            window.EVO_VERBOSE(p.stack || p.message, 2), window.console.error(p);
                            const x = !L(p) || p.sendToSentry;
                            if ("undefined" != typeof Sentry && x) {
                                L(p) || (p.name = "UnclassifiedError" + (p.name ? ` - ${p.name}` : ""));
                                const x = L(p) ? p.type : "UnclassifiedError",
                                    I = L(p) ? p.extra : void 0;
                                Sentry.captureException(p, function(p, x) {
                                    return Object.assign({
                                        tags: {
                                            errorType: p
                                        }
                                    }, x ? {
                                        extra: {
                                            "Additional Info": x
                                        }
                                    } : {})
                                }(x, I))
                            }
                        }
                    },
                    502637: (p, x, I) => {
                        function J(p) {
                            let x = 1;
                            const I = {};
                            for (p.includes("+") && (p = p.replace(/\+/g, " ")); x < p.length;) {
                                let J = p.indexOf("&", x); - 1 === J && (J = p.length);
                                let M = p.indexOf("=", x); - 1 === M && (M = J);
                                const D = decodeURIComponent(p.substring(x, M)),
                                    z = decodeURIComponent(p.substring(M + 1, J)),
                                    C = I[D];
                                void 0 === C ? I[D] = z : Array.isArray(C) ? C.push(z) : I[D] = [C, z], x = J + 1
                            }
                            return I
                        }
                        I.d(x, {
                            F: () => L,
                            w: () => T
                        });
                        const M = document.createElement("a");
                        let D, z;

                        function C(p) {
                            const x = {};
                            for (const [I, J] of Object.entries(p)) x[I] = Array.isArray(J) ? [...J] : J;
                            return x
                        }

                        function T(p) {
                            const {
                                hostname: x,
                                pathname: I,
                                port: T,
                                protocol: w,
                                searchParams: $,
                                hashParams: b
                            } = function(p) {
                                if (p === D && z) return z;
                                const x = function(p) {
                                    M.href = p;
                                    let x = M.pathname || "";
                                    "/" !== x.charAt(0) && (x = `/${x}`);
                                    const I = M.protocol || window.location.protocol;
                                    let D = M.hostname,
                                        z = M.port;
                                    return D || (D = window.location.hostname, z = window.location.port), {
                                        hashParams: J(M.hash),
                                        hostname: D,
                                        pathname: x,
                                        port: z,
                                        protocol: I,
                                        searchParams: J(M.search)
                                    }
                                }(p);
                                return D = p, z = x, x
                            }(p);
                            return {
                                hashParams: C(b),
                                hostname: x,
                                pathname: I,
                                port: T,
                                protocol: w,
                                searchParams: C($),
                                toString: function() {
                                    return this.origin + this.pathname + this.search + this.hash
                                },
                                paramsToString: L,
                                getParam: function(p) {
                                    let x = this.searchParams[p];
                                    return void 0 === x && (x = this.hashParams[p], void 0 === x) ? null : Array.isArray(x) ? x[0] : x
                                },
                                get origin() {
                                    return `${this.protocol}//${this.hostname}${this.port?`:${this.port}`:""}`
                                },
                                get search() {
                                    return L("?", this.searchParams)
                                },
                                get hash() {
                                    return L("#", this.hashParams)
                                }
                            }
                        }

                        function L(p, x) {
                            let I = "";
                            for (const p of Object.keys(x)) {
                                const J = x[p],
                                    M = encodeURIComponent(p);
                                if (Array.isArray(J))
                                    for (const p of J) I && (I += "&"), I += `${M}=${encodeURIComponent(p)}`;
                                else null != J && (I && (I += "&"), I += `${M}=${encodeURIComponent(J)}`)
                            }
                            return I ? p + I : I
                        }
                    },
                    107133: (p, x, I) => {
                        I.d(x, {
                            Y: () => M
                        });
                        const J = !!window.EVO_VERBOSE;

                        function M() {
                            try {
                                return !Object || !window || !document.body || J && !window.EVO_VERBOSE
                            } catch (p) {
                                return !0
                            }
                        }
                    },
                    695500: (p, x, I) => {
                        I.d(x, {
                            Bt: () => b,
                            CB: () => $,
                            Ds: () => C,
                            EE: () => v,
                            ET: () => Z,
                            FB: () => t,
                            Nw: () => K,
                            QJ: () => o,
                            Rh: () => N,
                            UA: () => k,
                            YU: () => U,
                            ZN: () => P,
                            ZP: () => T,
                            cb: () => w,
                            kl: () => a,
                            u9: () => y,
                            wP: () => B,
                            wc: () => L,
                            z6: () => i
                        });
                        var J = I(363188),
                            M = I(894273),
                            D = I(502637),
                            z = I(107133);

                        function C(p = 32) {
                            const x = window.crypto.getRandomValues(new Uint8Array(p));
                            return window.btoa(String.fromCharCode.apply(null, x))
                        }

                        function T(p, x) {
                            const I = p.indexOf(x);
                            if (-1 === I) return !1;
                            const J = p.pop();
                            return I < p.length && (p[I] = J), !0
                        }

                        function L(p, x) {
                            if (x < 0 || x >= p.length) return !1;
                            const I = p.pop();
                            return x < p.length && (p[x] = I), !0
                        }

                        function w(p, x) {
                            return new Promise((I => {
                                window.setTimeout((() => I(x)), p)
                            }))
                        }

                        function $() {
                            const p = document.getElementById("verbose-log");
                            p && (p.innerHTML = "")
                        }

                        function b(p) {
                            p && (p.style.display = "none")
                        }

                        function a(p, x = !1) {
                            p && (p.style.display = x ? "flex" : "block")
                        }
                        const e = {},
                            _ = {};

                        function N(p, x) {
                            return new Promise(((I, J) => {
                                if (!p) return void J(new Error("No url or wrong build options"));
                                if (_[p]) return void J(new Error("linksPrefetched[url]"));
                                const M = document.createElement("link");
                                M.rel = "prefetch", M.as = x, M.href = p, M.crossOrigin = "anonymous", document.head.appendChild(M), _[p] = !0, M.addEventListener("error", (() => J(new Error(`Failed preload URL: ${p}`)))), M.addEventListener("load", I)
                            }))
                        }

                        function o(p, x, I) {
                            let M = e[p];
                            return void 0 !== M ? delete e[p] : (window.EVO_VERBOSE(`fetchUrl/started ${p}`, 0, p), M = fetch(p, Object.assign({
                                redirect: "follow",
                                credentials: "same-origin",
                                keepalive: !0,
                                mode: "cors"
                            }, I)).then((x => {
                                if (!x.ok) throw x;
                                return window.EVO_VERBOSE(`fetchUrl/done ${p}`, 0, p, 3e3), x
                            })).catch((x => {
                                throw window.EVO_VERBOSE(`fetchUrl/fail/${x.status} ${p}`, 2, p), new J.$(p, x)
                            }))), "json" === x ? M.then((p => p.json())) : "text" === x ? M.then((p => p.text())) : M
                        }

                        function t(p, x) {
                            const I = `/frontend/loc/strings/${encodeURIComponent(p)}/${x}.json`,
                                M = (window.EVO_CDN || window.EVO_ORIGIN || "") + I;
                            return window.EVO_CDN || window.EVO_ORIGIN, o(M, "json").catch(void 0).catch((p => (J.Z(M, p), Promise.reject(p))))
                        }
                        let f = !1;
                        window.addEventListener("beforeunload", (() => {
                            f = !0, "undefined" != typeof Sentry && Sentry.addBreadcrumb({
                                message: "window.onbeforeunload",
                                category: "location"
                            })
                        }));
                        const l = 5;

                        function Z(p, x) {
                            return (!M.EL(x) || !x.doNotRetry) && p <= l
                        }

                        function U(p) {
                            var x;
                            p.disableDuration && (function() {
                                const p = D.w(window.location.href);
                                p.searchParams.cdn = void 0, p.hashParams.cdn = void 0, window.history.replaceState(null, "", p.toString())
                            }(), function(p) {
                                const x = new Date(Date.now() + 60 * p * 1e3).toUTCString();
                                document.cookie = `ignore_cdn=true; expires=${x}; path=/`
                            }(p.disableDuration)), f || z.Y() || (window.setTimeout((() => {
                                window.location.reload()
                            }), (x = p.failureCount) * x * 100), f = !0)
                        }

                        function P() {
                            K(void 0)
                        }

                        function k(p) {
                            if (!p || D.w(p).origin === window.location.origin) return p;
                            window.console.error("Refusing to load manifest from remote", p)
                        }

                        function B() {
                            const p = D.w(window.location.href);
                            return parseInt(p.getParam("failed") || "0", 10)
                        }

                        function K(p) {
                            const x = D.w(window.location.href);
                            x.hashParams.failed = void 0 !== p ? p.toString() : void 0, window.history.replaceState(null, "", x.toString())
                        }

                        function i(p) {
                            window.EVO_LOADER.sendLog("CLIENT_GAME_RELOAD", {
                                reason: p
                            })
                        }

                        function y({
                            failureReason: p,
                            isCdnEnabled: x
                        }) {
                            if (!x) return 0;
                            switch (p) {
                                case "config":
                                case "setup":
                                case "style":
                                    return 0;
                                case "gameLoader":
                                    return 1;
                                default:
                                    return 5
                            }
                        }

                        function v(p = window.location.href) {
                            return D.w(p).getParam("provider")
                        }
                    },
                    934789: (p, x, I) => {
                        function J(p, x) {
                            var I = {};
                            for (var J in p) Object.prototype.hasOwnProperty.call(p, J) && x.indexOf(J) < 0 && (I[J] = p[J]);
                            if (null != p && "function" == typeof Object.getOwnPropertySymbols) {
                                var M = 0;
                                for (J = Object.getOwnPropertySymbols(p); M < J.length; M++) x.indexOf(J[M]) < 0 && Object.prototype.propertyIsEnumerable.call(p, J[M]) && (I[J[M]] = p[J[M]])
                            }
                            return I
                        }
                        I.d(x, {
                            Tt: () => J
                        }), Object.create, Object.create
                    }
                },
                D = {};

            function z(p) {
                var x = D[p];
                if (void 0 !== x) return x.exports;
                var I = D[p] = {
                    exports: {}
                };
                return M[p](I, I.exports, z), I.exports
            }
            z.m = M, x = Object.getPrototypeOf ? p => Object.getPrototypeOf(p) : p => p.__proto__, z.t = function(I, J) {
                if (1 & J && (I = this(I)), 8 & J) return I;
                if ("object" == typeof I && I) {
                    if (4 & J && I.__esModule) return I;
                    if (16 & J && "function" == typeof I.then) return I
                }
                var M = Object.create(null);
                z.r(M);
                var D = {};
                p = p || [null, x({}), x([]), x(x)];
                for (var C = 2 & J && I;
                    "object" == typeof C && !~p.indexOf(C); C = x(C)) Object.getOwnPropertyNames(C).forEach((p => D[p] = () => I[p]));
                return D.default = () => I, z.d(M, D), M
            }, z.d = (p, x) => {
                for (var I in x) z.o(x, I) && !z.o(p, I) && Object.defineProperty(p, I, {
                    enumerable: !0,
                    get: x[I]
                })
            }, z.f = {}, z.e = p => Promise.all(Object.keys(z.f).reduce(((x, I) => (z.f[I](p, x), x)), [])), z.u = p => "js/" + {
                1767: "sm.ecas",
                66885: "native-utilities",
                80616: "video-lib-local",
                83100: "sm.howler"
            }[p] + "." + {
                1767: "d2ef4301",
                66885: "d7f7fe57",
                80616: "455d5bed",
                83100: "f329ffc5"
            }[p] + ".js", z.miniCssF = p => {}, z.o = (p, x) => Object.prototype.hasOwnProperty.call(p, x), I = {}, J = "/frontend/evo/r2/:", z.l = (p, x, M, D) => {
                if (I[p]) I[p].push(x);
                else {
                    var C, T;
                    if (void 0 !== M)
                        for (var L = document.getElementsByTagName("script"), w = 0; w < L.length; w++) {
                            var $ = L[w];
                            if ($.getAttribute("src") == p || $.getAttribute("data-webpack") == J + M) {
                                C = $;
                                break
                            }
                        }
                    C || (T = !0, (C = document.createElement("script")).charset = "utf-8", C.timeout = NaN, z.nc && C.setAttribute("nonce", z.nc), C.setAttribute("data-webpack", J + M), C.src = p), I[p] = [x];
                    var b = (x, J) => {
                            C.onerror = C.onload = null, clearTimeout(a);
                            var M = I[p];
                            if (delete I[p], C.parentNode && C.parentNode.removeChild(C), M && M.forEach((p => p(J))), x) return x(J)
                        },
                        a = setTimeout(b.bind(null, void 0, {
                            type: "timeout",
                            target: C
                        }), window.EVO_CDN ? 15e3 : 6e4);
                    C.onerror = b.bind(null, C.onerror), C.onload = b.bind(null, C.onload), T && document.head.appendChild(C)
                }
            }, z.r = p => {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(p, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(p, "__esModule", {
                    value: !0
                })
            }, z.p = (globalThis.EVO_CDN || "") + "/frontend/evo/r2/", (() => {
                var p = {
                    14965: 0
                };
                z.f.j = (x, I) => {
                    var J = z.o(p, x) ? p[x] : void 0;
                    if (0 !== J)
                        if (J) I.push(J[2]);
                        else {
                            var M = new Promise(((I, M) => J = p[x] = [I, M]));
                            I.push(J[2] = M);
                            var D = z.p + z.u(x),
                                C = new Error;
                            z.l(D, (I => {
                                if (z.o(p, x) && (0 !== (J = p[x]) && (p[x] = void 0), J)) {
                                    var M = I && ("load" === I.type ? "missing" : I.type),
                                        D = I && I.target && I.target.src;
                                    C.message = "Loading chunk " + x + " failed.\n(" + M + ": " + D + ")", C.name = "ChunkLoadError", C.type = M, C.request = D, J[1](C)
                                }
                            }), "chunk-" + x, x)
                        }
                };
                var x = (x, I) => {
                        var J, M, [D, C, T] = I,
                            L = 0;
                        if (D.some((x => 0 !== p[x]))) {
                            for (J in C) z.o(C, J) && (z.m[J] = C[J]);
                            T && T(z)
                        }
                        for (x && x(I); L < D.length; L++) M = D[L], z.o(p, M) && p[M] && p[M][0](), p[M] = 0
                    },
                    I = self.webpackChunk_frontend_evo_r2_ = self.webpackChunk_frontend_evo_r2_ || [];
                I.forEach(x.bind(null, 0)), I.push = x.bind(null, I.push.bind(I))
            })(), (() => {
                var p, x = z(934789);

                function I(p) {
                    return null != p && null != p.data && Object.keys(p.data).length > 0 && "string" == typeof p.data.command && p.data.command.startsWith("EVO:")
                }

                function J(p) {
                    const {
                        name: x,
                        platform: I
                    } = p || {}, J = String(x).startsWith("EVO:"), M = void 0 === I || ["mobile", "desktop"].includes(String(I));
                    return J && M
                }

                function M(p) {
                    return Array.isArray(p) ? p.filter(J) : []
                }

                function D(p) {
                    return Array.isArray(p) ? p.filter(J) : []
                }(function(p) {
                    p.Subscribe = "EVO:EVENT_SUBSCRIBE", p.Connect = "EVO:CONNECT"
                })(p || (p = {}));
                class C {
                    constructor({
                        isDesktop: x,
                        sendLogMessage: J,
                        subscriptionsLimit: M = 100,
                        commandsThrottlingEnabled: D = !0
                    }) {
                        this.eventCache = {}, this.eventsEnabledBySubscription = new Map, this.eventsEnabledByConfig = new Set, this.commandsDisabledByConfig = new Set, this.commandListeners = {}, this.toTriggerOnDispose = [], this.isLogSenderSet = !1, this.commandThrottler = function(p) {
                            const x = new Map;
                            return {
                                throttle: function(p, I) {
                                    const J = Date.now(),
                                        M = JSON.stringify(p.data),
                                        D = x.get(M);
                                    (!D || J - D >= 250) && (I(p), x.set(M, J))
                                },
                                clear: function() {
                                    x.forEach(((p, I) => {
                                        x.delete(I)
                                    }))
                                }
                            }
                        }(), this.iOSNativeMiddleware = null, this.messageHandler = x => {
                            if (I(x)) {
                                if (this.broadcastMWMessageToGames(x), function(x) {
                                        var J;
                                        return I(x) && p.Connect === x.data.command && !!(null === (J = x.ports) || void 0 === J ? void 0 : J.length)
                                    }(x)) return this.messagePort = x.ports[0], void(this.messagePort.onmessage = this.messageHandler);
                                if (function(x) {
                                        return I(x) && p.Subscribe === x.data.command && "string" == typeof x.data.event && x.data.event.startsWith("EVO:")
                                    }(x)) this.handleSubscription(x.data.event, x.origin);
                                else {
                                    if (!this.commandsThrottlingEnabled) return void this.handleCommand(x);
                                    this.commandThrottler.throttle(x, (p => this.handleCommand(p)))
                                }
                            }
                        }, this.subscriptionsLimit = M, this.sendLogMessage = J, this.fallbackSendLogMessage = J, this.operatorWindow = function(p) {
                            const x = window.location.origin;
                            let I = p.parent;
                            try {
                                for (; I.location.origin === x && I.parent !== I;) I = I.parent
                            } catch (p) {}
                            return I
                        }(window), this.isDesktop = x, this.commandsThrottlingEnabled = D, window.addEventListener("message", this.messageHandler)
                    }
                    getEventConfig(p, x, I) {
                        var J, M;
                        if ("unstable" === I && "stable" === this.release) return;
                        const D = null === (M = null === (J = this._config) || void 0 === J ? void 0 : J.enabledEvents) || void 0 === M ? void 0 : M.find((x => x.name === p));
                        return D && x(D) ? D : void 0
                    }
                    isEventEnabledByConfig(p, x) {
                        return ("unstable" !== x || "stable" !== this.release) && this.eventsEnabledByConfig.has(p)
                    }
                    set config(p) {
                        var x, I;
                        this._config || (this._config = p, null === (x = function(p = [], x) {
                            return new Set([...p.filter((({
                                platform: p
                            }) => void 0 === p || "desktop" === p && x || "mobile" === p && !x)).map((p => p.name))])
                        }(p.enabledEvents, this.isDesktop)) || void 0 === x || x.forEach((p => this.eventsEnabledByConfig.add(p))), null === (I = function(p = [], x) {
                            return new Set([...p.filter((({
                                platform: p
                            }) => void 0 === p || "desktop" === p && x || "mobile" === p && !x)).map((p => p.name))])
                        }(p.disabledCommands, this.isDesktop)) || void 0 === I || I.forEach((p => this.commandsDisabledByConfig.add(p))))
                    }
                    setLogMessageSender(p) {
                        this.isLogSenderSet || (this.sendLogMessage = p, this.isLogSenderSet = !0)
                    }
                    postMessage(p, x) {
                        "unstable" === x.targetRelease && "stable" === this.release || ("enabledBySubscription" === x.type && x.postOnSubscription && (this.eventCache[p.event] = {
                            message: p,
                            options: x
                        }), "enabledBySubscription" === x.type && x.postOnlyToAllowedOrigins ? this.postMessagesOnlyToAllowedOrigins(p, x) : ("default" === x.type || "enabledBySubscription" === x.type && this.eventsEnabledBySubscription.has(p.event) || "enabledByConfig" === x.type && this.isEventEnabledByConfig(p.event, x.targetRelease)) && this.postMessageToContainer(p, {
                            disableLogging: x.disableLogging
                        }))
                    }
                    onContainerCommand(p, x, I) {
                        if ("unstable" === I.targetRelease && "stable" === this.release) return;
                        const J = this.commandListeners[p] || [];
                        J.push([x, I]), this.commandListeners[p] = J
                    }
                    onDispose(p) {
                        this.toTriggerOnDispose.push(p)
                    }
                    reset() {
                        for (const p of this.toTriggerOnDispose) p();
                        this.isLogSenderSet = !1, this.sendLogMessage = this.fallbackSendLogMessage, this.toTriggerOnDispose.length = 0, this.commandListeners = {}, this.eventsEnabledBySubscription.clear(), this.eventCache = {}, this.commandThrottler.clear()
                    }
                    get release() {
                        var p, x;
                        return null !== (x = null === (p = this._config) || void 0 === p ? void 0 : p.release) && void 0 !== x ? x : "stable"
                    }
                    get allowedOrigins() {
                        var p, x;
                        return null !== (x = null === (p = this._config) || void 0 === p ? void 0 : p.origins) && void 0 !== x ? x : []
                    }
                    postMessageToContainer(p, x = {}) {
                        var I, J, M;
                        x.disableLogging || this.log({
                            type: "event",
                            payload: p
                        }), this.operatorWindow.postMessage(p, null !== (I = x.origin) && void 0 !== I ? I : "*"), null === (J = this.messagePort) || void 0 === J || J.postMessage(p), null === (M = this.iOSNativeMiddleware) || void 0 === M || M.postMessageToContainer(p)
                    }
                    postMessagesOnlyToAllowedOrigins(p, x) {
                        const I = this.filterAllowedOriginsForMessageType(p.event);
                        for (const J of I) this.postMessageToContainer(p, {
                            disableLogging: x.disableLogging,
                            origin: J
                        })
                    }
                    isCommandDisabledByConfig(p) {
                        return this.commandsDisabledByConfig.has(p)
                    }
                    filterAllowedOriginsForMessageType(p) {
                        var x;
                        const I = null !== (x = this.eventsEnabledBySubscription.get(p)) && void 0 !== x ? x : [],
                            J = [...this.allowedOrigins];
                        return I.filter(((p, x, I) => J.includes(p) && x === I.indexOf(p)))
                    }
                    broadcastMWMessageToGames(p) {
                        var x, I;
                        if ("multi" === (null === (x = window.EVO_LOADER) || void 0 === x ? void 0 : x.instance.kind)) {
                            const x = window.EVO_LOADER.instance;
                            for (const J of x.frames) null === (I = J.frame.contentWindow) || void 0 === I || I.postMessage(p.data, "*")
                        }
                    }
                    handleSubscription(p, x) {
                        this.addSubscription(p, x), this.log({
                            type: "subscription",
                            payload: p,
                            meta: {
                                origin: x
                            }
                        });
                        const I = this.eventCache[p];
                        if (I) return "enabledBySubscription" === I.options.type && I.options.postOnlyToAllowedOrigins ? (this.allowedOrigins.includes(x) || console.error(`Subscription to ${I.message.event} is not allowed for ${x}.\n                Please contact customer support`), void this.postMessagesOnlyToAllowedOrigins(I.message, I.options)) : void this.postMessageToContainer(I.message, {
                            origin: x,
                            disableLogging: I.options.disableLogging
                        })
                    }
                    handleCommand({
                        data: p,
                        origin: I
                    }) {
                        const {
                            command: J
                        } = p, M = x.Tt(p, ["command"]);
                        if (this.isCommandDisabledByConfig(J)) return void console.warn(`${J} is ignored as disabled via backoffice config`);
                        this.log({
                            type: "command",
                            payload: p,
                            meta: {
                                origin: I
                            }
                        });
                        const D = this.commandListeners[J];
                        if (D)
                            for (const [p] of D) p(M)
                    }
                    addSubscription(p, x) {
                        var I;
                        this.eventsEnabledBySubscription.size >= this.subscriptionsLimit || (this.eventsEnabledBySubscription.has(p) || this.eventsEnabledBySubscription.set(p, []), x && (null === (I = this.eventsEnabledBySubscription.get(p)) || void 0 === I || I.push(x)))
                    }
                    log({
                        type: p,
                        payload: x,
                        meta: I
                    }) {
                        const J = Object.assign(Object.assign({
                            type: p
                        }, x && {
                            payload: x
                        }), I && {
                            meta: I
                        });
                        this.sendLogMessage("CLIENT_API_V2", J)
                    }
                }
                const T = window.origin || window.location.origin,
                    L = Object.freeze({
                        receive: T,
                        send: "null" === T ? "*" : T
                    }),
                    w = "evo-broadcast-state";

                function $(p, x) {
                    if (p && x.source !== p) try {
                        p.origin === window.origin && p.location.origin === window.location.origin && p.postMessage(x.data, L.send)
                    } catch (p) {}
                }
                var b = z(502637);

                function a(p) {
                    return {
                        name: p,
                        toString: () => p
                    }
                }
                class e {
                    constructor() {
                        this.listeners = [], this.messageReceiver = p => {
                            const x = p.data;
                            if (p.origin === L.receive && x && "object" == typeof x && x.key === w && x.value && "object" == typeof x.value)
                                for (const p of this.listeners) p(x.value)
                        }, window.addEventListener("message", this.messageReceiver)
                    }
                    addListener(p) {
                        this.listeners.push(p)
                    }
                    removeListener(p) {
                        const x = this.listeners.indexOf(p);
                        x > -1 && this.listeners.splice(x, 1)
                    }
                    send(p) {
                        window.postMessage({
                            key: w,
                            value: p
                        }, L.send)
                    }
                }
                e.instance = new e;
                const _ = a("ping {015f023c-9f1f-4218-b7f3-7f5c85650dc6}"),
                    N = a("init {44ee98ea-0aab-464b-91c8-fc2b6ca75758}"),
                    o = a("dispose {3fb190a3-d0cc-4237-bc6e-abc2ff1ab044}");
                class t {
                    constructor(p = e.instance, x = "default") {
                        this.instanceId = Date.now().toString(36) + Math.random().toString(36), this.messageId = 0, this.pingTimerId = 0, this.pingCheckTimerId = 0, this.disposed = !1, this.data = {}, this.listeners = {}, this.pings = {}, this.receiveValues = p => {
                            if (p.channel !== this.channel) return;
                            const x = p.instanceId,
                                I = p.messageKey;
                            switch (this.schedulePingCheck(x), I) {
                                case _.name:
                                    break;
                                case o.name:
                                    this.removeInstance(x);
                                    break;
                                case N.name:
                                    for (const p of Object.values(this.data))
                                        for (const x of p) this.transport.send(x);
                                    break;
                                default:
                                    const J = this.data[I] || (this.data[I] = []);
                                    for (let M = 0; M < J.length; M++) {
                                        const D = J[M];
                                        if (D.instanceId === x) return void(D.messageId < p.messageId && (J[M] = p, this.triggerListeners(I, x)))
                                    }
                                    J.push(p), this.triggerListeners(I, x)
                            }
                        }, this.channel = x, this.transport = p, p.addListener(this.receiveValues), this.sendValues(N, {})
                    }
                    dispose() {
                        this.disposed || (this.transport.removeListener(this.receiveValues), this.sendValues(o, {}), window.clearTimeout(this.pingTimerId), window.clearTimeout(this.pingCheckTimerId), this.disposed = !0)
                    }
                    reset() {
                        this.disposed || (window.clearTimeout(this.pingCheckTimerId), this.pingCheckTimerId = 0, this.sendValues(o, {}))
                    }
                    sendValues(p, x) {
                        const I = Object.assign(Object.assign({}, x), {
                            channel: this.channel,
                            instanceId: this.instanceId,
                            messageId: this.messageId++,
                            messageKey: p.name
                        });
                        this.disposed || (this.transport.send(I), this.receiveValues(I), this.schedulePing())
                    }
                    getValues(p) {
                        return this.data[p.name || p.toString()] || []
                    }
                    addListener(p, x) {
                        (this.listeners[p.name] || (this.listeners[p.name] = [])).push(x)
                    }
                    removeListener(p, x) {
                        const I = this.listeners[p.name],
                            J = I ? I.indexOf(x) : -1;
                        J > -1 && I.splice(J, 1)
                    }
                    removeAllListeners(p) {
                        this.listeners[p.name] && (this.listeners[p.name] = [])
                    }
                    schedulePing() {
                        window.clearTimeout(this.pingTimerId), this.pingTimerId = window.setTimeout((() => {
                            this.sendValues(_, {})
                        }), 5e3)
                    }
                    schedulePingCheck(p) {
                        const x = Date.now();
                        this.pings[p] = x, this.pingCheckTimerId || (this.pingCheckTimerId = window.setTimeout((() => {
                            this.pingCheckTimerId = 0, "hidden" !== document.visibilityState && this.removeDeadInstances(x)
                        }), 1e4))
                    }
                    triggerListeners(p, x) {
                        const I = this.listeners[p];
                        if (I) {
                            const J = this.getValues(p);
                            for (const p of I) p(J, x)
                        }
                    }
                    removeDeadInstances(p) {
                        for (const x of Object.keys(this.pings)) this.pings[x] <= p && this.removeInstance(x)
                    }
                    removeInstance(p) {
                        const x = [];
                        for (const I of Object.keys(this.data)) {
                            const J = this.data[I];
                            for (let M = 0; M < J.length; M++)
                                if (J[M].instanceId === p) {
                                    x.push(I), J.splice(M, 1);
                                    break
                                }
                        }
                        delete this.pings[p];
                        for (const I of x) this.triggerListeners(I, p)
                    }
                }
                var f, l, Z = z(894273);
                (function(p) {
                    p.Lobby = "lobby", p.Direct = "direct"
                })(f || (f = {})),
                function(p) {
                    p.PlayForFun = "pff", p.FreeGames = "free_games", p.BalanceId = "balance_id", p.Demo = "demo", p.SwitchBalanceId = "switch_balance_id"
                }(l || (l = {}));
                const U = ["lobbyIntent"];

                function P(p = {}, x = !1) {
                    const I = b.w(window.location.href);
                    for (const x of U) I.getParam(x) && !p.hasOwnProperty(x) && (p[x] = I.getParam(x));
                    const J = window.EVO_SESSION_ID_FALLBACK;
                    J && (p.EVOSESSIONID = J, p.cdn = window.EVO_CDN, p.locale = window.EVO_LOCALE);
                    const M = window.EVO_ORIGIN;
                    let D, z;
                    return M && !x && (p.origin = M), x ? (D = "?", z = `${M||window.location.origin}/entry`) : (D = "#", z = window.location.pathname), z + b.F(D, p)
                }

                function k(p, x = {}) {
                    "/" === p[0] && (p = (window.EVO_ORIGIN || "") + p);
                    const I = window.EVO_SESSION_ID_FALLBACK;
                    if (I && (x.EVOSESSIONID = I), x.client_version = "6.20240619.72648.42301-f895168235", window.EVO_LOADER) {
                        const {
                            deviceInfo: p
                        } = window.EVO_LOADER;
                        (null == p ? void 0 : p.isIosDevice) && p.isQQBrowser && (x.nocache = (Date.now() / 1e3).toFixed(0))
                    }
                    return p + b.F(p.includes("?") ? "&" : "?", x)
                }
                const B = "undefined" != typeof InstallTrigger,
                    K = "iFrAmE";

                function i(p) {
                    let x = !1;
                    if (B) x = !0;
                    else try {
                        let p = window;
                        const I = p.location;
                        for (; !x && p.parent !== p;) {
                            const J = p.parent.location;
                            J.origin === I.origin && J.pathname === I.pathname && J.search === I.search && (x = !0), p = p.parent
                        }
                    } catch (p) {}
                    if (x) {
                        const x = b.w(window.location.href),
                            I = b.w(p);
                        if (x.pathname === I.pathname && x.search === I.search) {
                            const J = x.getParam(K) || "";
                            I.searchParams[K] = `${J}x`, p = I.toString()
                        }
                    }
                    return p
                }

                function y(p) {
                    return "3!" === p ? ["", window.location.origin + window.location.pathname, "table_id", "vt_id", "game", "category", "instance_id"] : ["", window.location.origin, window.location.pathname, "table_id", "vt_id", "game", "category", "lobby_launch_id", "ua_launch_id"]
                }

                function v(p) {
                    const x = y("4!"),
                        I = x.length;
                    let J = "4!";
                    for (const x of p) M(x);
                    if (x.length > 1294) throw new Z.gE("Cannot encode URI");
                    for (let p = I; p < x.length; p++) J += `!${x[p].replace(/!/g,"%21").replace(/&/g,"%26")}`;
                    return J;

                    function M(p) {
                        const x = b.w(p);
                        "about:" !== x.protocol && (z(x.origin), z(x.pathname), D(x.searchParams), D(x.hashParams))
                    }

                    function D(p) {
                        for (const x of Object.keys(p)) {
                            const I = p[x];
                            if (x && null != I)
                                if (Array.isArray(I))
                                    for (const p of I) z(x), z(p);
                                else z(x), z(I)
                        }
                        J += "-"
                    }

                    function z(p) {
                        let I = x.indexOf(p); - 1 === I ? I = x.push(p) : I += 1;
                        let M = I.toString(36);
                        I > 35 && (M = `0${M}`), J += M
                    }
                }

                function W(p, x = !1) {
                    try {
                        return p ? function(p) {
                            const x = p.substring(0, 2),
                                I = y(x),
                                J = p.split(/!/g);
                            for (let p = 2; p < J.length; p++) I.push(J[p].replace(/%21/g, "!").replace(/%26/g, "&"));
                            const M = [],
                                D = J[1];
                            let z = 0;
                            for (; z < D.length;) M.push(C());
                            return M;

                            function C() {
                                let p = L();
                                "3!" !== x && (p += L());
                                const I = b.w(p);
                                return I.origin !== window.location.origin && (console.warn("Potentially unsecure origin blocked from the `mwg` arg", p), p = window.location.origin + I.pathname), p + T("?") + T("#")
                            }

                            function T(p) {
                                let x = "";
                                for (; z < D.length;) {
                                    if ("-" === D[z]) {
                                        z++;
                                        break
                                    }
                                    const I = L(),
                                        J = L();
                                    x += `${(x?"&":p)+encodeURIComponent(I)}=${encodeURIComponent(J)}`
                                }
                                return x
                            }

                            function L() {
                                let p = D[z++],
                                    x = "";
                                "0" === p && (p = D[z++], x = D[z++]);
                                const J = parseInt(p + x, 36);
                                return I[J - 1]
                            }
                        }(p) : []
                    } catch (I) {
                        if (window.console.error("Invalid multi URL", p, I), x) throw I;
                        return []
                    }
                }
                const c = /(password|SESSIONID)((=).+?($|&)|(%3D).+?($|%26))/gi;

                function R(p) {
                    return p.replace(c, "$1$3$5***$4$6")
                }
                const s = "ezugi",
                    G = "ezugi.lobby",
                    E = Object.freeze({
                        "error.noDealer": "This table is temporarily inactive. Please return later or select a different table.",
                        "message.unableLoadGame": "Something went wrong during loading the game. Please try again later or select a different table in the Lobby.",
                        "button.backToLobby": "BACK TO LOBBY",
                        "button.continue": "CONTINUE",
                        "button.tryAgain.uppercase": "TRY AGAIN",
                        "message.unsupportedLanguage": "This game is not available in your language",
                        "message.sessionExpired": "Your session has expired",
                        "mobile.unsupportedDevice_short": "Currently your device is not supported.",
                        "message.upgradeOperatingSystem": "For the best possible experience when playing our games, we recommend that you upgrade your operating system."
                    });
                var H, g, m = z(363188),
                    h = z(695500);

                function q(p) {
                    if (p = p && p.trim()) return p.startsWith("https://") || p.startsWith("data:") ? p : (p.startsWith("/") || (p = `/frontend/evo/branding/${p}`), `${window.EVO_CDN||window.EVO_ORIGIN||""}${p}`)
                }

                function V(p, x, I = !0, J = window.BUNDLE_MANIFEST) {
                    const M = (p.frontend_app || p.game || "lobby").split(",");
                    for (const p of M) {
                        const I = p.trim(),
                            M = J.apps[I];
                        if (null == M ? void 0 : M.assets.length) {
                            const p = J.publicPath,
                                D = M.adaptive || ("desktop" === x ? M.desktop : M.mobile);
                            return Object.assign(Object.assign({}, M), {
                                assets: M.assets.map((x => ("number" == typeof x && (x = J.commonAssets[x]), p + x))),
                                application: I,
                                loader: `${p}${D}`
                            })
                        }
                    }
                    if (I) throw new Error(`Cannot find any of the defined apps: ${M.join(", ")}`)
                }(function(p) {
                    p.LS2 = "ls2", p.LS3 = "ls3", p.AndarBahar = "andarbahar", p.Lobby = "lobby", p.Slingshot = "slingshot", p.CaribbeanStudPoker = "csp", p.CasinoHoldemPoker = "holdem", p.CasinoHoldemPokerNew = "chp", p.UltimateTexasHoldem = "uth", p.ExtremeTexasHoldem = "eth", p.TexasHoldemBonus = "thb", p.ThreeCardPoker = "tcp", p.TripleCardPoker = "trp", p.TeenPatti = "teenpatti", p.DoubleHandPoker = "dhp", p.BaccaratPro = "baccarat_pro", p.Roulette = "roulette", p.InstantRoulette = "instantroulette", p.DoubleBallRoulette = "double_ball_roulette", p.AmericanRoulette = "americanroulette", p.GoldBarRoulette = "goldbarroulette", p.Blackjack = "blackjack", p.ClassicFreebet = "classicfreebet", p.ScalableBlackjack = "scalableblackjack", p.FreebetBlackjack = "freebet", p.PowerBlackjack = "powerscalableblackjack", p.LightningBlackjack = "lightningscalablebj", p.Baccarat = "baccarat", p.DeadOrAliveSaloon = "deadoralivesaloon", p.LightningBaccarat = "lightningbaccarat", p.GoldenWealthBaccarat = "goldenwealth", p.BaccaratMultiplay = "baccaratmultiplay", p.MoneyWheel = "moneywheel", p.DragonTiger = "dragontiger", p.TopCard = "topcard", p.Monopoly = "monopoly", p.RNGBlackjack = "rng-blackjack", p.RNGLightningBlackjack = "rng-lightningscalablebj", p.RNGMoneyWheel = "rng-moneywheel", p.RNGRoulette = "rng-roulette", p.RNGAmericanRoulette = "rng-american-roulette", p.RNGBaccarat = "rng-baccarat", p.RNGCraps = "rng-craps", p.RNGMegaBall = "rng-megaball", p.RNGDragonTiger = "rng-dragontiger", p.RNGTopCard = "rng-topcard", p.DealOrNoDeal = "dealnodeal", p.RNGDealOrNoDeal = "rng-dealnodeal", p.SideBetCity = "sidebetcity", p.LightningDice = "lightningdice", p.SicBo = "sicbo", p.RNGSicBo = "rng-sicbo", p.CrazyTime = "crazytime", p.MegaBall = "megaball", p.Craps = "craps", p.GonzoTreasureHunt = "gonzotreasurehunt", p.CashOrCrash = "cashorcrash", p.FanTan = "fantan", p.BacBo = "bacbo", p.TopDice = "topdice", p.PowerBall = "powerball", p.CrazyCoinFlip = "crazycoinflip", p.GonzoTreasureMap = "gonzotreasuremap", p.MonopolyBigBaller = "monopolybigballer", p.FunkyTime = "funkytime", p.LightningLotto = "lightninglotto", p.RNGLightningLotto = "rng-lightninglotto", p.RNGHilo = "rng-hilo", p.LightningStorm = "lightningstorm", p.LightningBall = "lightningball"
                })(H || (H = {})),
                function(p) {
                    p.NewJersey = "new-jersey", p.Pennsylvania = "pennsylvania", p.Lightning = "lightning"
                }(g || (g = {}));
                class d {
                    static addEventListener(p, x, I) {
                        (this._addEventListener || p.addEventListener).call(p, x, I)
                    }
                }
                d.setTimeout = window.setTimeout.bind(window), d.clearTimeout = window.clearTimeout.bind(window), d._addEventListener = "undefined" == typeof EventTarget ? null : EventTarget.prototype.addEventListener;
                const j = [];

                function F(p) {
                    j.push(p), d.addEventListener(p, "load", n), d.addEventListener(p, "error", n)
                }

                function n() {
                    Object && (this.removeEventListener("load", n), this.removeEventListener("error", n), h.ZP(j, this))
                }
                class X {
                    init() {
                        Image = function(p) {
                            function x() {
                                const x = new p;
                                return F(x), x
                            }
                            return x.prototype = p.prototype, x
                        }(Image);
                        const p = document.createElement;
                        document.createElement = function(x, I) {
                            const J = p.call(this, x, I),
                                {
                                    tagName: M
                                } = J;
                            return "IMG" !== M && "SCRIPT" !== M && "LINK" !== M || F(J), J
                        }
                    }
                    reset() {
                        for (; j.length;) n.call(j[0])
                    }
                    clean() {
                        return new Promise(((p, x) => {
                            this.verify(1e3, p, x)
                        }))
                    }
                    verify(p, x, I) {
                        return p < 0 ? (window.console.error("Asset downloads are still pending", j.slice()), I("SandboxAssetWrapper detected pending assets")) : j.every(Q) ? x() : void d.setTimeout((() => this.verify(p - 25, x, I)), 25)
                    }
                }

                function Q(p) {
                    return "prefetch" === p.rel || !p.src && !p.href
                }
                const u = new Map;

                function r(p) {
                    return class extends p {
                        constructor(p) {
                            super(p), u.set(this, void 0)
                        }
                        close() {
                            const p = super.close();
                            return u.get(this) || (u.set(this, p), p.then((() => {
                                u.delete(this)
                            }), (() => {
                                "closed" !== this.state ? u.set(this, void 0) : u.delete(this)
                            }))), p
                        }
                    }
                }
                class S {
                    init() {
                        const p = window.webkitAudioContext;
                        "undefined" == typeof AudioContext && void 0 === p || ("undefined" != typeof AudioContext ? AudioContext = r(AudioContext) : void 0 !== p && (window.webkitAudioContext = r(p)))
                    }
                    reset() {
                        u.clear()
                    }
                    async clean() {
                        u.size && window.console.warn("AudioContext instances are not closed", Array.from(u.keys()));
                        const p = Array.from(u.entries());
                        try {
                            await Promise.all(p.map((([p, x]) => (null != x ? x : p.close()).catch((x => {
                                if ("closed" !== p.state) return Promise.reject(x)
                            })))))
                        } catch (p) {
                            throw new Error("SandboxAudioContextWrapper detected running AudioContexts")
                        }
                        u.clear()
                    }
                }
                const Y = Symbol("Sandbox event collection"),
                    A = Symbol("Remove all event listeners");
                class O {
                    constructor() {
                        this.isCapturing = !1, this.eventTargets = []
                    }
                    isSupported() {
                        return "undefined" != typeof EventTarget
                    }
                    init() {
                        const p = this.eventTargets,
                            x = EventTarget.prototype.addEventListener,
                            I = EventTarget.prototype.removeEventListener,
                            J = this;
                        EventTarget.prototype.addEventListener = function(I, M, D, z) {
                            if (x.call(this, I, M, D), "react-dom" === z || "evo-loader" === z || "test-tools" === z) return;
                            if (!J.isCapturing) return;
                            const C = null != this ? this : window,
                                T = C[Y] || (C[Y] = []);
                            T.length || p.push(C);
                            let L = null;
                            "object" == typeof D && D.once && (L = () => {
                                C.removeEventListener(I, M, D)
                            }, x.call(this, I, L, D));
                            const w = C instanceof HTMLImageElement ? C.src : new Error;
                            T.push({
                                type: I,
                                listener: M,
                                extraListener: L,
                                options: D,
                                stack: w
                            })
                        }, EventTarget.prototype.removeEventListener = function(x, J, M) {
                            I.call(this, x, J, M);
                            const D = null != this ? this : window,
                                z = D[Y];
                            if (z && Object) {
                                for (let p = 0; p < z.length; p++) {
                                    const D = z[p];
                                    if (D.listener === J && D.type === x && (C = D.options, T = M, Boolean("object" == typeof C ? null == C ? void 0 : C.capture : C) === Boolean("object" == typeof T ? null == T ? void 0 : T.capture : T))) {
                                        D.extraListener && I.call(this, x, D.extraListener, M), h.wc(z, p);
                                        break
                                    }
                                }
                                z.length || h.ZP(p, D)
                            }
                            var C, T
                        }, EventTarget.prototype[A] = function() {
                            const x = this[Y];
                            if (x) {
                                for (const p of x) I.call(this, p.type, p.listener, p.options);
                                x.length = 0
                            }
                            h.ZP(p, this)
                        }
                    }
                    reset() {
                        this.eventTargets.length = 0, this.isCapturing = !0
                    }
                    clean() {
                        for (let p = this.eventTargets.length - 1; p >= 0; p--) {
                            const x = this.eventTargets[p];
                            if (x instanceof Node && x !== document && !document.contains(x)) continue;
                            if (x instanceof WebSocket && x.readyState === WebSocket.CLOSED) continue;
                            if (x instanceof XMLHttpRequest && x.readyState === XMLHttpRequest.DONE) continue;
                            const I = x[Y];
                            if (!(null == I ? void 0 : I.length)) continue;
                            window.console.warn("addEventListener has not been cleared up by application code.", x, I.slice());
                            const J = EventTarget.prototype.removeEventListener;
                            let M = 0;
                            const D = I.length;
                            for (; I.length;) {
                                if (M++ > 2 * D) return Promise.reject("infinite sandbox removeEventListener");
                                const p = I[0];
                                J !== x.removeEventListener && J.call(x, p.type, p.listener, p.options), x.removeEventListener(p.type, p.listener, p.options)
                            }
                        }
                    }
                }
                const pp = "SandboxFetchWrapper aborted the request";
                class xp {
                    constructor() {
                        this.promiseCancelation = void 0
                    }
                    init() {
                        const p = window.fetch;
                        window.fetch = (x, I) => (null == I ? void 0 : I.evoIgnoreSandbox) ? p.call(window, x, I) : Promise.race([this.promiseCancelation, p.call(window, x, I)]).catch((p => (p === pp && window.console.warn("Sandbox interrupted request", x), Promise.reject(p))))
                    }
                    reset() {
                        this.promiseCancelation = new Promise(((p, x) => {
                            this.promiseRejector = x
                        })), this.promiseCancelation.catch((() => {}))
                    }
                    clean() {
                        this.promiseRejector && this.promiseRejector(pp)
                    }
                }
                const Ip = ["__autoTestVideoComponents", "defineEvoVideo", "__lobbyTileSizeHint", "_", "HowlerGlobal", "Howler", "Howl", "Sound", "Hammer", "mozPaintCount", "mozInnerScreenX", "mozInnerScreenY", "mozAnimationStartTime", "orientation", "localStorage", "sessionStorage", "length", "innerHeight", "outerHeight", "innerWidth", "outerWidth", "frameElement", "parent", "top", "scrollX", "scrollY", "pageXOffset", "pageYOffset", "webkitStorageInfo", "speechSynthesis", "caches", "webkit"];
                class Jp {
                    constructor() {
                        this.globals = void 0, this.resetFailed = null
                    }
                    init() {}
                    reset() {
                        if (null !== this.resetFailed) return;
                        this.resetFailed = !1;
                        let p = null;
                        try {
                            const x = {};
                            for (p of (this.globals = x, Object.keys(window))) Ip.includes(p) || (x[p] = window[p])
                        } catch (x) {
                            window.console.warn("SandboxGlobalsWrapper - failed to read", p, x), this.globals = void 0, this.resetFailed = !0
                        }
                    }
                    clean() {
                        if (this.resetFailed) return Promise.reject("SandboxGlobalsWrapper - could not capture window properties");
                        const p = this.globals;
                        if (!p) return Promise.resolve();
                        for (const x of Object.keys(window)) {
                            if (Ip.includes(x) || x.startsWith("webpack") || !Number.isNaN(+x)) continue;
                            const I = window[x],
                                J = p[x];
                            if (I !== J) {
                                window.console.warn(`window.${x} value has been changed from`, J, "to", I);
                                try {
                                    window[x] = J
                                } catch (p) {
                                    return Promise.reject(`SandboxGlobalsWrapper - window.${x} modified`)
                                }
                            }
                        }
                        return Promise.resolve()
                    }
                }
                const Mp = Symbol("Sandbox known DOM node"),
                    Dp = Symbol("Sandbox expected nodeValue"),
                    zp = Symbol("Sandbox expected attributes"),
                    Cp = Object.keys(HTMLElement.prototype).filter((p => p.startsWith("on")));
                class Tp {
                    constructor() {
                        this.title = "", this.bodyClassName = "", this.knownElementCount = -1
                    }
                    init() {}
                    reset() {
                        this.markAllIgnoredElements(), this.knownElementCount = this.markKnownElements(document.documentElement, 0), this.title = document.title, this.bodyClassName = document.body.className
                    }
                    clean() {
                        if (this.markAllIgnoredElements(), this.removeUnknownElements(document.documentElement, 0) !== this.knownElementCount) throw new Error("Predefined DOM node has been removed.");
                        this.title !== document.title && (window.console.warn("document.title not restored by the application"), document.title = this.title), this.bodyClassName !== document.body.className && (window.console.warn("document.body.className not restored by the application"), document.body.className = this.bodyClassName)
                    }
                    markAllIgnoredElements() {
                        this.markIgnoredElements('style[data-source="evo-video-components"]'), this.markIgnoredElements('script[src^="chrome-extension:"]')
                    }
                    markIgnoredElements(p) {
                        const x = document.querySelectorAll(p);
                        for (let p = 0; p < x.length; p++) x[p].setAttribute("data-sandbox", "ignore")
                    }
                    removeUnknownElements(p, x) {
                        for (; p;) {
                            const I = p.nextSibling;
                            if (p instanceof Element && "ignore" === p.getAttribute("data-sandbox")) {
                                p = I;
                                continue
                            }
                            const J = p[Mp];
                            if (J !== x) {
                                if (null != J) throw new Error("Predefined DOM node has been removed.");
                                this.warnMountedReact(p, !1), window.console.warn("DOM element not cleared up by the application.", p), p.parentNode.removeChild(p), p = I;
                                continue
                            }
                            x++;
                            const M = p[Dp];
                            if (p.nodeValue !== M && (window.console.warn("DOM element nodeValue not reset by the application.", p, {
                                    got: p.nodeValue,
                                    expected: M
                                }), p.nodeValue = M), p instanceof Element && this.resetAttributes(p), p._reactRootContainer) throw window.console.error("ReactDOM is not unmounted from the node.", p), new Error("ReactDOM is not unmounted");
                            p.firstChild && (x = this.removeUnknownElements(p.firstChild, x)), p = I
                        }
                        return x
                    }
                    warnMountedReact(p, x) {
                        for (; p;) p._reactRootContainer ? window.console.warn("ReactDOM is not unmounted from the node.", p) : p.firstChild && this.warnMountedReact(p.firstChild, !0), p = x ? p.nextSibling : null
                    }
                    markKnownElements(p, x) {
                        for (; p;) {
                            const I = p.nextSibling;
                            p instanceof Element && "ignore" === p.getAttribute("data-sandbox") || (p[Mp] = x, x++, p instanceof Element && p.hasAttributes() && (p[zp] = this.captureAttributes(p)), p[Dp] = p.nodeValue, p.firstChild && (x = this.markKnownElements(p.firstChild, x))), p = I
                        }
                        return x
                    }
                    resetAttributes(p) {
                        const x = p[zp];
                        if (!x) return;
                        for (let I = 0; I < x.length; I += 2) {
                            const J = x[I],
                                M = x[I + 1],
                                D = p.getAttribute(J);
                            M !== D && (("style" !== J || M || D) && window.console.warn("Attribute not restored by the application", p, {
                                name: J,
                                got: D,
                                expected: M
                            }), p.setAttribute(J, M))
                        }
                        const I = p.getAttributeNames();
                        for (const J of I) {
                            let I = !0;
                            if (x)
                                for (let p = 0; p < x.length; p += 2)
                                    if (x[p] === J) {
                                        I = !1;
                                        break
                                    }
                            I && p.removeAttribute(J)
                        }
                        for (const x of Cp) {
                            const I = p[x];
                            I && (window.console.warn("Event handler not removed", p, {
                                name: x,
                                got: I
                            }), p[x] = null)
                        }
                    }
                    captureAttributes(p) {
                        const x = [];
                        for (const I of p.getAttributeNames()) x.push(I, p.getAttribute(I));
                        return x
                    }
                }
                const Lp = Symbol("Sandbox event collection");
                class wp {
                    constructor() {
                        this.isCapturing = !1, this.eventTargets = []
                    }
                    isSupported() {
                        if (!window.matchMedia) return !0;
                        const p = this.getMediaQueryListPrototype();
                        return !!(null == p ? void 0 : p.addListener)
                    }
                    init() {
                        if (!window.matchMedia) return;
                        const p = this.eventTargets,
                            x = this.getMediaQueryListPrototype(),
                            I = x.addListener,
                            J = x.removeListener,
                            M = this;
                        x.addListener = function(x) {
                            if (I.call(this, x), !this || !M.isCapturing) return;
                            const J = this[Lp] || (this[Lp] = []);
                            J.length || p.push(this), J.push({
                                listener: x,
                                stack: new Error
                            })
                        }, x.removeListener = function(x) {
                            J.call(this, x);
                            const I = this[Lp];
                            if (I && Object) {
                                for (let p = 0; p < I.length; p++)
                                    if (I[p].listener === x) {
                                        h.wc(I, p);
                                        break
                                    }
                                I.length || h.ZP(p, this)
                            }
                        }
                    }
                    reset() {
                        this.eventTargets.length = 0, this.isCapturing = !0
                    }
                    clean() {
                        for (let p = this.eventTargets.length - 1; p >= 0; p--) {
                            const x = this.eventTargets[p],
                                I = x[Lp];
                            if (null == I ? void 0 : I.length)
                                for (window.console.warn("matchMedia().addListener has not been cleared up by application code.", x, I.slice()); I.length;) x.removeListener(I[0].listener)
                        }
                    }
                    getMediaQueryListPrototype() {
                        return "undefined" != typeof MediaQueryList ? MediaQueryList.prototype : Object.getPrototypeOf(window.matchMedia(""))
                    }
                }
                const $p = Error;
                class bp {
                    constructor() {
                        this.isCapturing = !1, this.timers = new Map, this.animationFrames = new Map
                    }
                    init() {
                        window.setTimeout = this.timerCreator(this.timers, !0, window.setTimeout), window.clearTimeout = this.timerRemover(this.timers, window.clearTimeout), window.setInterval = this.timerCreator(this.timers, !1, window.setInterval), window.clearInterval = this.timerRemover(this.timers, window.clearInterval), window.requestAnimationFrame && (window.requestAnimationFrame = this.rafCreator(this.animationFrames, window.requestAnimationFrame), window.cancelAnimationFrame = this.timerRemover(this.animationFrames, window.cancelAnimationFrame))
                    }
                    reset() {
                        this.timers.clear(), this.animationFrames.clear(), this.isCapturing = !0
                    }
                    clean() {
                        for (const [p, x] of this.timers) window.console.warn("setTimeout/setInterval has not been cleared up by application code.", x), window.clearTimeout(p);
                        for (const [p, x] of this.animationFrames) window.console.warn("requestAnimationFrame has not been cleared up by application code.", x), window.cancelAnimationFrame(p)
                    }
                    timerRemover(p, x) {
                        return I => {
                            "number" == typeof I && (x(I), p.delete(I))
                        }
                    }
                    timerCreator(p, x, I) {
                        return (J, M, ...D) => {
                            let z;
                            return z = I(x ? () => {
                                x && p.delete(z), "string" == typeof J ? Function(J)() : J && J.call(null, ...D)
                            } : J, M), this.isCapturing && p.set(z, new $p), z
                        }
                    }
                    rafCreator(p, x) {
                        return (I, J) => {
                            let M;
                            return M = x((x => {
                                p.delete(M), I && I.call(null, x)
                            })), this.isCapturing && "sandboxIgnore" !== J && p.set(M, new $p), M
                        }
                    }
                }
                const ap = [],
                    ep = WebSocket;

                function _p(p) {
                    if (arguments.length > 1) throw new Error("Only 1 argument expected");
                    const x = new ep(p);
                    return function(p) {
                        ap.push(p), d.addEventListener(p, "close", Np), d.addEventListener(p, "error", Np)
                    }(x), x
                }

                function Np() {
                    this.removeEventListener("close", Np), this.removeEventListener("error", Np), Object && h.ZP(ap, this)
                }
                Object.assign(_p, WebSocket), _p.prototype = ep.prototype;
                class op {
                    init() {
                        window.WebSocket = _p
                    }
                    reset() {
                        for (; ap.length;) Np.call(ap[0])
                    }
                    clean() {
                        return ap.length && window.console.warn("WebSocket instances are not closed", ap.slice()), new Promise(((p, x) => {
                            this.verify(1e3, p, x)
                        }))
                    }
                    verify(p, x, I) {
                        if (p < 0) return window.console.error("WebSocket instances are still open", ap.slice()), I("SandboxWebSocketWrapper detected open connections");
                        if (0 === ap.length) return x();
                        for (let p = ap.length - 1; p >= 0; p--) ap[p].close(4e3, "SPA switch");
                        d.setTimeout((() => this.verify(p - 25, x, I)), 25)
                    }
                }
                const tp = [];
                class fp {
                    init() {
                        if ("undefined" == typeof Worker) return;
                        const p = Worker;

                        function x(x) {
                            const I = new p(x);
                            var J;
                            return J = I, tp.push(J), I
                        }
                        Object.assign(x, Worker), x.prototype = p.prototype;
                        const I = p.prototype.terminate;
                        x.prototype.terminate = function() {
                            Object && h.ZP(tp, this), I.call(this)
                        }, window.Worker = x
                    }
                    reset() {
                        tp.length = 0
                    }
                    clean() {
                        tp.length && window.console.warn("Worker instances are not terminated", tp.slice());
                        for (let p = tp.length - 1; p >= 0; p--) tp[p].terminate()
                    }
                }
                const lp = [];

                function Zp() {
                    Object && (h.ZP(lp, this), Promise.resolve().then((() => {
                        this[A] && this[A]()
                    })))
                }
                class Up {
                    init() {
                        const p = XMLHttpRequest.prototype.send;
                        XMLHttpRequest.prototype.send = function(x) {
                            lp.push(this), "onloadend" in this ? this.addEventListener("loadend", Zp) : (this.addEventListener("load", Zp), this.addEventListener("abort", Zp), this.addEventListener("error", Zp)), p.call(this, x)
                        }
                    }
                    reset() {
                        lp.length = 0
                    }
                    clean() {
                        let p = 0;
                        for (; p++ < 5 && lp.length;) {
                            const p = lp.slice();
                            lp.length = 0;
                            for (const x of p) window.console.warn("Sandbox interrupted request", x), x.abort()
                        }
                        if (lp.length) return window.console.error("Pending requests", lp), Promise.reject("XMLHttpRequest infinite retries")
                    }
                }
                class Pp {
                    static getSingleton() {
                        return this._singleton || (this._singleton = new Pp), this._singleton
                    }
                    constructor() {
                        this.enabled = !0, this.wrappers = [new X, new xp, new Up, new bp, new O, new wp, new Tp, new Jp, new op, new fp, new S];
                        try {
                            if (window.EVO_LOADER.deviceInfo.isBaiduBrowser) return void(this.enabled = !1);
                            for (const p of this.wrappers)
                                if (p.isSupported && !p.isSupported()) return void(this.enabled = !1);
                            for (const p of this.wrappers) p.init()
                        } catch (p) {
                            const x = "Failed to initialize Sandbox: " + (p instanceof Error ? `${p.message}\n${p.stack}` : "");
                            window.EVO_VERBOSE(x, 1), window.console.error(x), this.enabled = !1
                        }
                    }
                    reset() {
                        return this.enabled ? Promise.all(this.wrappers.map((p => p.reset()))) : Promise.reject(new Error("Sandbox not supported in browser"))
                    }
                    clean() {
                        if (!this.enabled) return Promise.reject(new Z.mN("Sandbox not supported in browser", {
                            sendToSentry: !1
                        }));
                        let p = Promise.resolve();
                        for (let x = 0; x < 2; x++) p = p.then((() => Promise.all(this.wrappers.map((p => p.clean()))))), p = p.then((() => new Promise((p => {
                            d.setTimeout(p)
                        })))), p = p.then((() => window.console.log(`Sandbox cleanup phase ${x+1} done.`)));
                        return p
                    }
                }
                Pp._singleton = void 0;
                class kp {
                    constructor() {
                        this.disposed = !1, this.events = {}
                    }
                    subscribe(p, x) {
                        if (Array.isArray(p)) {
                            const I = p.map((p => this.ensureEvent(p).promise));
                            Promise.all(I).then((p => x(...p)))
                        } else this.ensureEvent(p).promise.then(x)
                    }
                    publish(p, x) {
                        const I = this.ensureEvent(p);
                        if (I.resolved) throw new Error(`publish() called more than once for ${p}`);
                        window.EVO_VERBOSE(`Loader/${p}: done`, 0, p), I.resolved = !0, I.value = x, I.resolver(x)
                    }
                    getValue(p) {
                        const x = this.events[p];
                        return null == x ? void 0 : x.value
                    }
                    getPromise(p) {
                        return this.ensureEvent(p).promise
                    }
                    resetEvent(p) {
                        const x = this.events[p];
                        if (x) {
                            if (!x.resolved) throw new Error("Cannot reset unfinished event.");
                            delete this.events[p]
                        }
                    }
                    dispose() {
                        this.disposed = !0, this.events = {}
                    }
                    ensureEvent(p) {
                        if (this.disposed) throw new Error("PubSub has been disposed");
                        const x = this.events[p];
                        if (x) return x;
                        let I;
                        window.EVO_VERBOSE(`Loader/${p}: waiting`, 0, p);
                        const J = new Promise((p => {
                            I = p
                        }));
                        if (!I) throw new Error("Async promise ctor");
                        return this.events[p] = {
                            promise: J,
                            resolver: I,
                            resolved: !1,
                            value: void 0
                        }
                    }
                }
                class Bp extends kp {
                    constructor(p) {
                        super(), this.loader = p, this.uaLaunchId = null, this.lobbyLaunchId = null, this.logs = [], this.consumer = void 0, this.attributionId = h.Ds()
                    }
                    get provider() {
                        var p;
                        return (null === (p = this.getValue("config")) || void 0 === p ? void 0 : p.game_provider) || h.EE() || this._provider
                    }
                    set provider(p) {
                        this._provider = p
                    }
                    dispose(p) {
                        return this.publish("disposing", p), this.consumer = void 0, this.logs.length = 0, Promise.resolve(super.dispose())
                    }
                    storeLog(p) {
                        this.consumer ? this.consumer(p) : this.logs.push(p)
                    }
                    setLogConsumer(p) {
                        this.consumer = p, this.logs.length && (this.logs.forEach((x => p(x))), this.logs.length = 0)
                    }
                }
                const Kp = Symbol("video-lib-timeout");
                class ip extends Bp {
                    constructor(p) {
                        super(p), this.loadProgress = null, this.sandboxInitialization = Pp.getSingleton().reset().catch((p => {
                            Z.vV(new Z.mN(`Failed to initialize Sandbox: ${p.message}`))
                        })), this.disposePromise = void 0, this.gameLoader = void 0, this.gameLoaderState = void 0, this.setupWorkflow()
                    }
                    dispose(p) {
                        if (this.disposePromise) return this.disposePromise;
                        const x = !this.gameLoader || void 0 === this.getValue("gameLoaded"),
                            I = performance.now();
                        return this.disposePromise = this.disposeInstance(p).then((() => x ? Promise.reject(new Z.mN("Game loader not yet finished", {
                            sendToSentry: !1
                        })) : Promise.race([this.gameLoader.dispose(this.gameLoaderState), h.cb(3e3).then((() => Promise.reject(new Error("Game dispose took >3 sec"))))]))).then((() => Pp.getSingleton().clean())).then((() => {
                            const p = performance.now();
                            window.console.log("Dispose of previous instance took", Math.floor(p - I), "ms")
                        }))
                    }
                    disposeInstance(p) {
                        var x, I;
                        return super.dispose({
                            applicationType: null !== (I = null === (x = this.gameLoader) || void 0 === x ? void 0 : x.applicationType) && void 0 !== I ? I : "unknown",
                            suppressLoadingScreen: (null == p ? void 0 : p.suppressLoadingScreen) || !1
                        })
                    }
                    setupWorkflow() {
                        const p = this.loader;
                        p.shared.subscribe("setup", (p => {
                            this.disposed || (this.subscribe("config", (x => this.handlePublishedConfig(p, x))), this.subscribe(["config", "sandbox"], (x => this.requestGameManifest(x, p))), this.subscribe(["gamePackageManifest", "config"], ((x, I) => {
                                this.requestAudioLibrary(p, x, I)
                            })), this.startSandbox())
                        })), this.subscribe("gamePackageManifest", (x => {
                            this.requestLocalization(x), this.requestScripts(x), this.requestStyleSheet(x), x.ignoreVideo || (this.loader.video.loadLibrary(), Promise.race([h.cb(1e4, Kp), p.video.getPromise("module")]).then((x => {
                                x === Kp && p.sendLog("CLIENT_ERROR", {
                                    error: "videoLibrary/timeout"
                                })
                            })))
                        })), p.shared.subscribe(["setup", "style", "i18n"], ((p, x, I) => {
                            this.disposed || this.subscribe(["config", "gamePackageManifest", "appLocalization", "bundleCss"], ((J, M, D) => {
                                this.runApp(p, x, Object.assign(Object.assign({}, I), D), J, M)
                            }))
                        }))
                    }
                    async handlePublishedConfig(p, x) {
                        var I, J, M, D, z, C;
                        "undefined" != typeof Sentry && (Sentry.configureScope((I => {
                            I.setTags({
                                gameType: x.game || x.frontend_app,
                                casinoId: p.casino_id
                            })
                        })), Sentry.setUser({
                            id: p.user_id,
                            username: p.player_id
                        }));
                        const T = b.w(window.location.href),
                            L = encodeURIComponent(T.getParam("branding_id") || x.branding_id || "");
                        if (L) {
                            const p = q(`${L}/manifest.json`);
                            try {
                                const x = await h.QJ(p, "json");
                                null === (J = null === (I = window.EVO_LOADER) || void 0 === I ? void 0 : I.instance) || void 0 === J || J.publish("brandingManifest", x)
                            } catch (x) {
                                m.Z(p, x), null === (D = null === (M = window.EVO_LOADER) || void 0 === M ? void 0 : M.instance) || void 0 === D || D.publish("brandingManifest", null)
                            }
                        } else null === (C = null === (z = window.EVO_LOADER) || void 0 === z ? void 0 : z.instance) || void 0 === C || C.publish("brandingManifest", null)
                    }
                    startSandbox() {
                        this.sandboxInitialization.then((() => {
                            this.publish("sandbox", !0)
                        })).catch((() => {
                            this.publish("sandbox", !1)
                        }))
                    }
                    requestGameManifest(p, x) {
                        let I = p.frontend_manifest;
                        const J = x.globalSettings;
                        if (!I && J && p.frontend_app) {
                            const x = J.manifests;
                            I = null == x ? void 0 : x[p.frontend_app]
                        }
                        I ? this.requestGameManifestRemote(p, I) : this.requestGameManifestLocal(p)
                    }
                    requestGameManifestRemote(p, x) {
                        const I = this.loader;
                        x.endsWith("/") && (x += "manifest.json"), h.QJ(x, "json").then((J => {
                            const M = V(p, I.deviceInfo.deviceType, !1, J);
                            if (!M) throw new Error(`Remote manifest '${x}' does not include definition for the given table.`);
                            this.publish("gamePackageManifest", M)
                        })).catch((p => {
                            this.loader.failed({
                                reason: "manifest",
                                failureDetails: p,
                                failedURL: x
                            })
                        }))
                    }
                    requestGameManifestLocal(p) {
                        let x;
                        try {
                            return x = V(p, this.loader.deviceInfo.deviceType), void this.publish("gamePackageManifest", x)
                        } catch (p) {
                            return void this.loader.failed({
                                reason: "manifest",
                                failureDetails: p
                            })
                        }
                    }
                    requestLocalization(p) {
                        let x = p.localization;
                        "common" !== x ? (x || ("undefined" != typeof Sentry && Sentry.captureMessage(`${p.application} does not define 'localization' in manifest`), x = `../${encodeURIComponent(window.EVO_LOCALE)}`), h.FB(window.EVO_LOCALE, x).then((p => this.publish("appLocalization", p))).catch((p => {
                            this.loader.failed({
                                reason: "i18n",
                                failureDetails: p,
                                failedURL: `loc://${window.EVO_LOCALE}/${x}.json`
                            })
                        }))) : this.publish("appLocalization", null)
                    }
                    requestScripts(p) {
                        const x = this.loader;
                        for (const I of p.assets) {
                            if (!I.endsWith(".js")) continue;
                            const p = window.EVO_CDN + I;
                            x.assets.loadScript(p).catch((I => {
                                x.failed({
                                    reason: "scripts",
                                    failureDetails: I,
                                    failedURL: p
                                })
                            }))
                        }
                    }
                    requestStyleSheet(p) {
                        const x = this.loader,
                            I = p.assets.filter((p => p.endsWith(".css")));
                        for (let p = 0; p < I.length; p++) I[p] = window.EVO_CDN + I[p];
                        x.assets.loadStyles(I, !0).then((() => {
                            this.publish("bundleCss", null)
                        })).catch((p => {
                            x.failed({
                                reason: "stylesheets",
                                failureDetails: p
                            })
                        }))
                    }
                    requestAudioLibrary(p, x, I) {
                        var J;
                        const M = this.loader,
                            D = x.audioLibrary,
                            z = I.audio_package || x.audioPackage,
                            C = !0 === (null === (J = p.globalSettings) || void 0 === J ? void 0 : J.enable_local_sounds);
                        M.audio.loadLibrary(D, C).then((p => {
                            this.publish("audioLibrary", p)
                        })), M.audio.loadAudioLibraryOptions(z, D, C).then((p => {
                            this.publish("audioLibraryOptions", p)
                        }))
                    }
                    runApp(p, x, I, J, M) {
                        const D = this.loader;
                        if (D.isFailed) return;
                        const z = {
                            reportProgress: p => {
                                this.loadProgress = p
                            },
                            gameType: J.game || H.Lobby,
                            instance: this,
                            setup: p,
                            deviceType: D.deviceInfo.deviceType,
                            tableConfig: J,
                            styles: x,
                            tableId: J.table_id || null,
                            virtualTableId: J.vt_id || null,
                            i18nData: I,
                            getRoot: () => document.getElementById("root"),
                            clientApi: D.clientApi
                        };
                        window.EVO_VERBOSE("gameLoader/started", 0, "gameLoader"), Promise.all([D.applications.getPromise(M.loader), this.getPromise("audioLibrary")]).then((([p, x]) => (this.gameLoader = p, p.initialize(Object.assign(Object.assign({}, z), {
                            audioLibrary: x,
                            audioLibraryOptionsPromise: this.getPromise("audioLibraryOptions")
                        }))))).then((p => {
                            this.gameLoaderState = p
                        })).then((() => {
                            var p, x;
                            window.EVO_VERBOSE("gameLoader/finish", 0, "gameLoader"), window.setTimeout((() => {
                                h.CB(), h.ZN()
                            }), 501), this.publish("gameLoaded", {
                                applicationType: null !== (x = null === (p = this.gameLoader) || void 0 === p ? void 0 : p.applicationType) && void 0 !== x ? x : "unknown"
                            }), performance.mark("evoLoaderClosed")
                        })).catch((p => {
                            const x = p instanceof Error ? p : new Error(`gameLoader failed: ${(null==p?void 0:p.message)||p}`, {
                                cause: p
                            });
                            D.failed({
                                reason: "gameLoader",
                                failureDetails: x
                            })
                        }))
                    }
                    loadNativeBundle(p, x) {
                        const I = this.loader;
                        Promise.all([h.QJ("../bundles.json", "json"), z.e(66885).then(z.bind(z, 701024))]).then((([I, {
                            getTargetBundle: J
                        }]) => J({
                            gameTypeOrLoader: (null == x ? void 0 : x.loader) || p.game || "lobby",
                            frontendApp: p.frontend_app
                        }, I, !1))).then((p => {
                            x && ("*" === p || "6.20240619.72648.42301-f895168235".endsWith(`-${p}-native`)) ? this.publish("gamePackageManifest", x) : (window.EVO_LOADER.sendLog("CLIENT_GAME_RELOAD", {
                                reason: "Loading native build - redirected from another place"
                            }), window.location.href = `../${p}/index.html${window.location.search}${window.location.hash}`)
                        })).catch((p => {
                            I.failed({
                                reason: "manifest",
                                failureDetails: p
                            })
                        }))
                    }
                }
                class yp extends ip {
                    constructor(p, x) {
                        let I;
                        super(p), this.kind = "app";
                        const J = x ? x.indexOf("@") : -1;
                        J > -1 && (I = h.UA(x.substr(J + 1)), x = x.substr(0, J)), x || (x = yp.defaultApp);
                        const M = {
                            game: "",
                            frontend_app: x,
                            frontend_manifest: I
                        };
                        x === G ? this.requestConfigData(x, M) : this.publish("config", M)
                    }
                    requestConfigData(p, x) {
                        const I = this.loader,
                            J = k("/config", {
                                app: p
                            });
                        h.QJ(J, "json").then((p => {
                            Object.assign(p, x), this.publish("config", p)
                        })).catch((p => {
                            p instanceof m.$ && 403 === p.status ? I.failedAuth() : (m.Z(J, p), I.failed({
                                reason: "config",
                                failureDetails: p,
                                failedURL: J
                            }))
                        }))
                    }
                }
                yp.defaultApp = "lobby";
                class vp extends Bp {
                    constructor() {
                        super(...arguments), this.kind = "empty", this.disposePromise = null
                    }
                    dispose() {
                        return this.disposePromise || (this.disposePromise = super.dispose()), this.disposePromise
                    }
                }
                class Wp extends ip {
                    constructor(p, x, I, J, M, D, z) {
                        super(p), this.tableId = x, this.virtualTableId = I, this.app = J, this.balanceId = M, this.uaLaunchId = D, this.lobbyLaunchId = z, this.kind = "game", this.redirected = !1, this.disposePromise2 = null, this.requestConfigData()
                    }
                    dispose(p) {
                        var x;
                        return this.redirected ? null !== (x = this.disposePromise2) && void 0 !== x ? x : this.disposePromise2 = super.disposeInstance(p) : super.dispose(p)
                    }
                    requestConfigData() {
                        const p = this.loader,
                            x = k("/config", {
                                table_id: this.tableId,
                                vt_id: this.virtualTableId,
                                origin: window.location.origin
                            });
                        h.QJ(x, "json").then((p => {
                            if (!this.checkPlatformSupport(p)) return;
                            const x = this.app;
                            if (x) {
                                window.console.warn("Overriding game type and manifest with", x);
                                let I = x.indexOf("@");
                                I < 0 ? I = x.length : p.frontend_manifest = h.UA(x.substr(I + 1)), I > 0 && (p.frontend_app = x.substr(0, I), delete p.loader_expected_resource_count, delete p.loader_resources_counting_mode)
                            }
                            this.gameType = p.game_type, this.publish("config", p)
                        })).catch((I => {
                            I instanceof m.$ && 403 === I.status ? p.failedAuth() : (m.Z(x, I), p.failed({
                                reason: "config",
                                failureDetails: I,
                                failedURL: x
                            }))
                        }))
                    }
                    checkPlatformSupport(p) {
                        const x = this.loader.deviceInfo.isDesktop ? p.desktop_table_id : p.mobile_table_id;
                        if (x) {
                            window.console.log("Because of platform, using a different table", x);
                            const [p, I] = x.split(";"), J = b.w(window.location.href);
                            return delete J.searchParams.table_id, delete J.searchParams.vt_id, J.hashParams.table_id = p, J.hashParams.vt_id = I, this.redirected = !0, this.loader.init(J.toString()), this.loader.sendLog("CLIENT_GAME_RELOAD", {
                                reason: "Platform not supported, redirecting to a different table"
                            }), !1
                        }
                        return !0
                    }
                }
                var cp, Rp;
                (function(p) {
                    p.SoundsVolume = "EvoInterfaceSoundsVolume", p.SoundsMuted = "EvoInterfaceSoundsMute", p.VideoVolume = "EvoInterfaceVideoVolume", p.VideoMuted = "EvoInterfaceVideoMuted", p.LastAppUri = "EvoLastAppUri"
                })(cp || (cp = {})),
                function(p) {
                    p.Evo = "", p.Neon = "Neon", p.DS = "DS"
                }(Rp || (Rp = {}));
                const {
                    getStorageKey: sp,
                    setStorageKey: Gp
                } = (Ep = Rp.Evo, {
                    getStorageKey(p) {
                        try {
                            const x = localStorage.getItem(Ep + p);
                            return x ? JSON.parse(x) : void 0
                        } catch (p) {
                            return
                        }
                    },
                    setStorageKey(p, x) {
                        try {
                            return void 0 === x ? localStorage.removeItem(Ep + p) : localStorage.setItem(Ep + p, JSON.stringify(x)), !0
                        } catch (p) {
                            return !1
                        }
                    }
                });
                var Ep;
                const Hp = "ShowEvoLogo";
                var gp;
                (function(p) {
                    p.Sidebar = "sidebar", p.Fill = "fill", p.TopBar = "topbar"
                })(gp || (gp = {}));
                class mp extends Bp {
                    get location() {
                        const p = this.frame.contentWindow;
                        let x = p ? p.location.href : null;
                        if (x && !x.startsWith("about:") || (x = this.frame.src), x.includes(K)) {
                            const p = b.w(x);
                            delete p.searchParams[K], x = p.toString()
                        }
                        return x
                    }
                    constructor(p, x, I, J, M = gp.Fill) {
                        super(x), this.parent = p, this.kind = "frame", this.layout = gp.Fill, this.disposePromise2 = null, this.frameUrlChanged = () => {
                            this.parent.updateUri(!0)
                        }, this.frameUnloadListener = () => {
                            setTimeout(this.frameLoadListener, 0)
                        }, this.frameLoadListener = () => {
                            this.frameUrlChanged();
                            const p = this.frame.contentWindow;
                            p && (p.addEventListener("pagehide", this.frameUnloadListener, !0, "evo-loader"), p.addEventListener("hashchange", this.frameUrlChanged, !0, "evo-loader"), p.addEventListener("pushstate", this.frameUrlChanged, !0, "evo-loader"), p.addEventListener("replacestate", this.frameUrlChanged, !0, "evo-loader"))
                        };
                        const D = document.createElement("iframe");
                        this.frame = D, this.layout = M, D.src = i(I), D.addEventListener("load", this.frameLoadListener), J.appendChild(D)
                    }
                    dispose() {
                        return this.disposePromise2 || (this.disposePromise2 = Promise.resolve().then((() => {
                            const p = this.frame;
                            p.removeEventListener("load", this.frameLoadListener), p.parentNode && p.parentNode.removeChild(p)
                        })).then((() => super.dispose()))), this.disposePromise2
                    }
                    navigate(p) {
                        p = i(p);
                        try {
                            const {
                                contentWindow: x
                            } = this.frame;
                            if (null == x ? void 0 : x.EVO_LOADER) return void(x.location.href !== p && x.location.replace(p))
                        } catch (p) {}
                        this.frame.src = p
                    }
                    resize(p, x) {
                        this.frame.style.width = `${Math.floor(p)}px`, this.frame.style.height = `${Math.floor(x)}px`
                    }
                }
                const hp = a("multiwindow {74d74998-b630-473a-b390-58f11d036a96}"),
                    qp = "mwLayout";
                class Vp extends Bp {
                    constructor(p, x, I = !1) {
                        var J;
                        super(p), this.kind = "multi", this.frames = [], this.window = window, this.wasMoveDone = !1, this.scrolling = !1, this.touchEndResetTimer = null, this.disposePromise2 = null, this.isSidebarFullHeight = !1, this.handleScrollAction = () => {
                            document.body.classList.contains("compact") && this.wasMoveDone && (this.scrolling = !0, this.removeResetTimeout(), this.touchEndResetTimer = window.setTimeout((() => {
                                this.scrolling = !1, this.wasMoveDone = !1, document.body.classList.contains("compact") && window.scrollTo(0, 0)
                            }), 500))
                        }, this.handleContinuousScroll = p => {
                            this.wasMoveDone = !0, this.scrolling && p.preventDefault()
                        }, this.getDimensionsAndLayoutFrames = () => {
                            const p = () => this.loader.deviceInfo.isIos15PhoneSafari ? window.innerHeight + window.scrollY : window.innerHeight;
                            let x = p(),
                                I = window.innerWidth;
                            this.layoutFrames(x, I), setTimeout((() => {
                                const J = p(),
                                    M = window.innerWidth;
                                J === x && M === I || (x = J, I = M, this.layoutFrames(J, M))
                            }), 1e3)
                        }, this.layoutFrames = (p, x) => {
                            const {
                                isPhone: I
                            } = this.loader.deviceInfo, J = this.countFrames();
                            let M = 0,
                                D = 0;
                            const z = J[gp.TopBar] > 0 ? 30 : 0;
                            J[gp.Sidebar] > 0 && (M = I ? Math.floor(x / J[gp.Sidebar]) : 400 * J[gp.Sidebar], D = !I || x > p || this.isSidebarFullHeight ? p : Math.floor(.85 * p), D -= z);
                            const C = I ? x : x - M,
                                T = p - z;
                            this.sidebarContainer.style.width = `${M}px`, this.sidebarContainer.style.height = `${D}px`, this.loader.deviceInfo.isDesktop && (this.gamesContainer.style.width = `calc(100% - ${M}px)`), z && this.container.classList.add("withTopBar"), this.topBarContainer.style.height = `${z}px`;
                            const L = this.calculateOptimumSize(C, T, J[gp.Fill]);
                            for (const p of this.frames) switch (p.layout) {
                                case gp.Fill:
                                    (this.loader.deviceInfo.isDesktop || this.loader.deviceInfo.isIosChromeBrowser) && p.resize(L.width, L.height);
                                    break;
                                case gp.Sidebar:
                                    J[gp.Sidebar] > 1 && p.resize(Math.floor(M / J[gp.Sidebar]), D);
                                    break;
                                case gp.TopBar:
                                    p.resize(L.width, 30)
                            }
                        };
                        const M = document.getElementById("inGameLobby");
                        (null == M ? void 0 : M.parentNode) && M.parentNode.removeChild(M);
                        const D = document.createElement("div");
                        this.container = D, D.className = "loader-frame-container", document.body.appendChild(D);
                        const z = document.createElement("div");
                        this.topBarContainer = z, z.className = "topbar-container", D.appendChild(z);
                        const C = document.createElement("div");
                        this.gamesContainer = C, C.className = "games-container", D.appendChild(C);
                        const T = document.createElement("div");
                        this.sidebarContainer = T, T.className = "sidebar-container", D.appendChild(T);
                        for (const p of W(x)) this.addFrame(p, !1);
                        I || this.frames.length || this.addFrame(P(), !1), this.getDimensionsAndLayoutFrames(), this.loader.deviceInfo.isPhone && this.loader.deviceInfo.isIosDevice && (setTimeout((() => {
                            this.getDimensionsAndLayoutFrames()
                        }), 400), window.addEventListener("scroll", this.handleScrollAction), document.body.addEventListener("touchmove", this.handleContinuousScroll), document.body.addEventListener("touchstart", this.handleContinuousScroll)), window.addEventListener("resize", this.getDimensionsAndLayoutFrames), this.loader.deviceInfo.isIosChromeBrowser && (null === (J = window.visualViewport) || void 0 === J || J.addEventListener("resize", this.getDimensionsAndLayoutFrames)), this.publish("gameLoaded", void 0), setTimeout(h.CB, 1e3)
                    }
                    removeResetTimeout() {
                        this.touchEndResetTimer && (window.clearTimeout(this.touchEndResetTimer), this.touchEndResetTimer = null)
                    }
                    dispose() {
                        return this.disposePromise2 || (this.disposePromise2 = Promise.resolve().then((() => {
                            var p;
                            window.removeEventListener("resize", this.getDimensionsAndLayoutFrames), document.body.removeChild(this.container), window.removeEventListener("scroll", this.handleScrollAction), document.body.removeEventListener("touchmove", this.handleContinuousScroll), document.body.removeEventListener("touchstart", this.handleContinuousScroll), this.loader.deviceInfo.isIosChromeBrowser && (null === (p = window.visualViewport) || void 0 === p || p.removeEventListener("resize", this.getDimensionsAndLayoutFrames)), this.removeResetTimeout()
                        })).then((() => Promise.all(this.frames.map((p => p.dispose()))))).then((() => super.dispose()))), this.disposePromise2
                    }
                    update(p, x = !1) {
                        if (!Array.isArray(p)) {
                            const x = p.getParam("mwg");
                            p = x ? W(x) : [p.toString()]
                        }
                        const I = this.frames;
                        for (let x = 0; x < Math.min(I.length, p.length); x++) {
                            const J = p[x];
                            I[x].layout === this.getFrameLayout(J) ? I[x].navigate(J) : (this.removeFrame(I[x].frame, {
                                update: !1
                            }), this.addFrame(J, !1))
                        }
                        for (; I.length < p.length;) this.addFrame(p[I.length], !1);
                        for (; I.length > p.length;) this.removeFrame(I[I.length - 1].frame, {
                            update: !1
                        });
                        return this.finalizeUpdate(x), Promise.resolve()
                    }
                    updateUri(p = !1) {
                        if (this.loader.instance === this) {
                            const x = function(p) {
                                if (1 === p.length) {
                                    const x = b.w(p[0]);
                                    if (x.origin === window.location.origin && x.pathname === window.location.pathname) return p[0]
                                }
                                return window.location.origin + P({
                                    mwg: v(p)
                                }, !1)
                            }(this.frames.map((p => p.location)));
                            if (window.location.href !== x) try {
                                window.history[p ? "replaceState" : "pushState"](null, "", x), Gp("EvoLastAppUri", x)
                            } catch (p) {}
                        }
                    }
                    getFrameLayout(p) {
                        return b.w(p).getParam(qp) || gp.Fill
                    }
                    addFrame(p, x = !0) {
                        const I = this.getFrameLayout(p);
                        let J = this.gamesContainer;
                        switch (I) {
                            case gp.Sidebar:
                                J = this.sidebarContainer;
                                break;
                            case gp.TopBar:
                                J = this.topBarContainer
                        }
                        this.frames.push(new mp(this, this.loader, p, J, I)), x && this.finalizeUpdate()
                    }
                    removeFrame(p, x = {
                        update: !0,
                        animateOnMobile: !1
                    }) {
                        const I = x.animateOnMobile && !this.loader.deviceInfo.isDesktop,
                            J = this.frames.findIndex((x => x.frame === p));
                        if (J > -1) {
                            const M = this.frames[J];
                            this.frames.splice(J, 1), this.isSidebarFullHeight && M.layout === gp.Sidebar && (this.isSidebarFullHeight = !1), I && p.classList.add("disposing"), setTimeout((() => {
                                M.dispose().catch((() => {})), x.update && this.finalizeUpdate()
                            }), I ? 500 : 0)
                        }
                    }
                    isLastFillFrame(p) {
                        for (const x of this.frames)
                            if (x.frame !== p && x.layout === gp.Fill) return !1;
                        return !0
                    }
                    finalizeUpdate(p = !1) {
                        this.frames.length || this.addFrame(P(), !1), this.getDimensionsAndLayoutFrames(), this.updateUri(p), this.loader.broadcast.sendValues(hp, {})
                    }
                    countFrames() {
                        let p = 0,
                            x = 0,
                            I = 0;
                        for (const {
                                layout: J
                            } of this.frames) switch (J) {
                            case gp.Fill:
                                p++;
                                break;
                            case gp.Sidebar:
                                x++;
                                break;
                            case gp.TopBar:
                                I++
                        }
                        return {
                            [gp.Fill]: p,
                            [gp.Sidebar]: x,
                            [gp.TopBar]: I
                        }
                    }
                    setSidebarHeight(p) {
                        this.isSidebarFullHeight = p;
                        const x = window.innerHeight,
                            I = window.innerWidth,
                            {
                                isPhone: J
                            } = this.loader.deviceInfo,
                            M = !J || I > x || this.isSidebarFullHeight ? x : Math.floor(.85 * x),
                            D = this.countFrames()[gp.TopBar] > 0 ? 30 : 0;
                        this.sidebarContainer.style.height = M - D + "px"
                    }
                    calculateOptimumSize(p, x, I) {
                        if (I < 2) return {
                            width: p,
                            height: x
                        };
                        let J = 0,
                            M = 0;
                        for (let D = 1; D <= I; D++) {
                            const z = Math.ceil(I / D),
                                C = Math.min(x / z, p / D * 9 / 16);
                            C > M && (M = C, J = 16 * C / 9)
                        }
                        return {
                            width: J,
                            height: M
                        }
                    }
                }
                class dp extends Bp {
                    constructor(p, x, I, J, M, D) {
                        super(p), this.tableId = x, this.virtualTableId = I, this.multiwindow = J, this.balanceId = M, this.app = D, this.kind = "switch"
                    }
                    dispose() {
                        return super.dispose().then((() => Promise.reject("Another switch is in progress")))
                    }
                }
                class jp {
                    constructor() {
                        this.scripts = {}, this.styles = {}, this.enabledStyles = [], this.timeout = window.EVO_CDN ? 15e3 : 6e4
                    }
                    loadStyles(p, x = !1) {
                        Array.isArray(p) || (p = [p]);
                        const I = p.map((p => (this.styles[p] || (this.styles[p] = this.createLinkElement(p))).then((p => this.setLinkEnabled(p, !0)))));
                        return Promise.all(I).then((p => {
                            if (x) {
                                for (const x of this.enabledStyles) p.includes(x) || this.setLinkEnabled(x, !1);
                                this.enabledStyles = p
                            } else this.enabledStyles.push(...p)
                        }))
                    }
                    loadScript(p, x = !1, I) {
                        const J = this.scripts[p];
                        if (J && !I) return J;
                        const M = document.createElement("script");
                        M.charset = "utf-8", M.async = x;
                        const D = this.waitForLoaded(M, p);
                        return this.scripts[p] = D, M.src = p, document.head.appendChild(M), document.head.removeChild(M), D
                    }
                    waitForLoaded(p, x) {
                        return new Promise(((I, J) => {
                            let M = 0;
                            const D = I => {
                                I.filename === p.src && (z(!0), J(`Failed: ${x}`))
                            };
                            window.addEventListener("error", D);
                            const z = x => {
                                clearTimeout(M), window.removeEventListener("error", D), x && p.parentNode && p.parentNode.removeChild(p)
                            };
                            M = setTimeout((() => {
                                window.EVO_VERBOSE(`timeout for ${x}`, 2), z(!0), J(`timeout: ${x}`)
                            }), this.timeout), p.addEventListener("error", (p => {
                                m.Z(x, p.error), z(!0), J(`Failed: ${x}`)
                            })), p.addEventListener("load", (() => {
                                z(!1), I(p)
                            }))
                        }))
                    }
                    setLinkEnabled(p, x) {
                        const I = Promise.resolve(p);
                        return p.disabled === !x ? I : (p.disabled = !x, x ? new Promise(((x, I) => {
                            let J = 0,
                                M = 0;
                            const D = document.styleSheets;
                            M = window.setInterval((function() {
                                if (J++ > 200) return clearInterval(M), I("setLinkEnabled");
                                for (let I = 0, J = D.length; I < J; I++)
                                    if (D[I].ownerNode === p) return clearInterval(M), x(p)
                            }), 16)
                        })) : I)
                    }
                    createLinkElement(p) {
                        const x = document.createElement("link");
                        x.rel = "stylesheet", x.href = p, x.setAttribute("data-sandbox", "ignore");
                        const I = this.waitForLoaded(x, p);
                        return document.head.appendChild(x), I
                    }
                }
                const Fp = Symbol("audio-lib-timeout");
                class np {
                    constructor() {
                        this.cache = {}
                    }
                    loadLibrary(p, x) {
                        var I;
                        const J = this.getLibraryType(p, x);
                        if (void 0 === this.cache[J]) {
                            let p;
                            p = "ecas" === J ? z.e(1767).then(z.bind(z, 681306)) : "legacy" === J ? z.e(83100).then(z.t.bind(z, 976314, 23)) : Promise.resolve(void 0), this.cache[J] = Promise.race([p, h.cb(1e4, Fp)]).then((p => {
                                if (p === Fp) throw new Z.yW("Loading failed to load due to 10s timeout");
                                return p
                            })).catch((p => {
                                this.handleLoadingError(new Z.yW(`"${J}" audio library failed to load: ${p}`))
                            }))
                        }
                        return null !== (I = this.cache[J]) && void 0 !== I ? I : Promise.resolve(void 0)
                    }
                    loadAudioLibraryOptions(p, x, I) {
                        if ("ecas" !== this.getLibraryType(x, I)) return Promise.resolve(void 0);
                        if (void 0 === p) return this.handleLoadingError(new Z.yW("Audio package for the game was not specified.")), Promise.resolve(void 0);
                        const J = `/frontend/gametech/sounds/${p}/ecasOptions.json`,
                            M = this.getLocalSoundsUrl(I) || window.EVO_CDN || window.EVO_ORIGIN || "";
                        return h.QJ(`${M}${J}`, "json").then((p => {
                            var x, I, J, D;
                            const z = null !== (I = null === (x = p.loadrConfig) || void 0 === x ? void 0 : x.loadPath) && void 0 !== I ? I : null === (D = null === (J = p.soundConfig) || void 0 === J ? void 0 : J.settings) || void 0 === D ? void 0 : D.loadPath;
                            return Object.assign(Object.assign({}, p), {
                                loadrConfig: Object.assign(Object.assign({}, p.loadrConfig), {
                                    loadPath: `${M}${z}`
                                })
                            })
                        })).catch((p => {
                            this.handleLoadingError(new Z.yW(`"Failed to load ECAS sound configuration: ${p}`))
                        }))
                    }
                    handleLoadingError(p) {
                        let x, I;
                        x = "warn", I = 1, window.console.warn(p), window.EVO_VERBOSE(p.stack || p.message, 1)
                    }
                    getLocalSoundsUrl(p) {
                        if (p) {
                            const p = this.getLocalSoundsParam();
                            return p && /^\d{4,5}$/.test(p) ? `http://127.0.0.1:${p}` : void 0
                        }
                    }
                    getLocalSoundsParam() {
                        return b.w(window.location.href).getParam("localSounds")
                    }
                    getLibraryType(p, x) {
                        return x && this.getLocalSoundsParam() ? "ecas" : p
                    }
                }
                var Xp, Qp, up;
                (function(p) {
                    p.Phone = "Phone", p.Tablet = "Tablet", p.Desktop = "Desktop"
                })(Xp || (Xp = {})),
                function(p) {
                    p.IpadNonRetina = "ipad-non-retina", p.IpadRetina = "ipad-retina", p.IpadPro = "ipad-pro", p.IpadPro11inch = "ipad-pro-11inch"
                }(Qp || (Qp = {})),
                function(p) {
                    p.Iphone5 = "iphone5", p.Iphone6 = "iphone6", p.IphonePlusZoomed = "iphone-plus-zoomed", p.IphonePlus = "iphone-plus", p.Iphone10 = "iphone10", p.Iphone10Zoomed = "iphone10Zoomed", p.Iphone10sMax = "iphone10sMax", p.Iphone10R = "iphone10R", p.Iphone10RZoomed = "iphone10RZoomed", p.Iphone12 = "iphone12", p.Iphone12ProMax = "iphone12ProMax", p.Iphone14Pro = "iphone14Pro", p.Iphone14ProMax = "iphone14ProMax"
                }(up || (up = {}));
                const rp = [{
                        min: 320,
                        max: 568,
                        ratio: 2,
                        type: up.Iphone5
                    }, {
                        min: 375,
                        max: 667,
                        ratio: 2,
                        type: up.Iphone6
                    }, {
                        min: 375,
                        max: 667,
                        ratio: 3,
                        type: up.IphonePlusZoomed
                    }, {
                        min: 414,
                        max: 736,
                        ratio: 3,
                        type: up.IphonePlus
                    }, {
                        min: 375,
                        max: 812,
                        ratio: 3,
                        type: up.Iphone10
                    }, {
                        min: 320,
                        max: 693,
                        ratio: 3,
                        type: up.Iphone10Zoomed
                    }, {
                        min: 414,
                        max: 896,
                        ratio: 3,
                        type: up.Iphone10sMax
                    }, {
                        min: 414,
                        max: 896,
                        ratio: 2,
                        type: up.Iphone10R
                    }, {
                        min: 375,
                        max: 812,
                        ratio: 2,
                        type: up.Iphone10RZoomed
                    }, {
                        min: 390,
                        max: 844,
                        ratio: 3,
                        type: up.Iphone12
                    }, {
                        min: 428,
                        max: 926,
                        ratio: 3,
                        type: up.Iphone12ProMax
                    }, {
                        min: 393,
                        max: 852,
                        ratio: 3,
                        type: up.Iphone14Pro
                    }, {
                        min: 430,
                        max: 932,
                        ratio: 3,
                        type: up.Iphone14ProMax
                    }, {
                        min: 768,
                        max: 1024,
                        ratio: 1,
                        type: Qp.IpadNonRetina
                    }, {
                        min: 768,
                        max: 1024,
                        ratio: 2,
                        type: Qp.IpadRetina
                    }, {
                        min: 834,
                        max: 1194,
                        ratio: 2,
                        type: Qp.IpadPro11inch
                    }, {
                        min: 1024,
                        max: 1366,
                        ratio: 2,
                        type: Qp.IpadPro
                    }],
                    Sp = "desktop",
                    Yp = "tablet",
                    Ap = "phone";
                class Op {
                    get connectionType() {
                        var p;
                        return null === (p = window.navigator.connection) || void 0 === p ? void 0 : p.effectiveType
                    }
                    constructor(p = window.navigator.userAgent) {
                        this.userAgent = p, this.isIosDevice = !!this.userAgent.match(/(iPhone|iPad)/i), this.isMacOSDevice = !!this.userAgent.match(/(Intel Mac OS X)/i), this.isQQBrowser = this.userAgent.includes("MQQBrowser"), this.isBaiduBrowser = this.userAgent.includes("baiduboxapp"), this.isIos15PhoneSafari = !!this.userAgent.match(/^Mozilla\/5\.0 \(iPhone; CPU iPhone OS 15_\S+ like Mac OS X\) AppleWebKit\/605\.1\.15 \(KHTML, like Gecko\) Version\/15\.\d Mobile\/15E148 Safari\/604\.1/), this.isIosChromeBrowser = this.isIosDevice && this.userAgent.includes("CriOS"), this.appleScreenType = (() => {
                            var p, x;
                            if (!this.isIosDevice && !this.isMacOSDevice) return null;
                            const I = (null === (p = window.screen) || void 0 === p ? void 0 : p.width) ? window.screen.width : window.innerWidth,
                                J = (null === (x = window.screen) || void 0 === x ? void 0 : x.height) ? window.screen.height : window.innerHeight,
                                M = window.devicePixelRatio || 1,
                                D = Math.min(I, J),
                                z = Math.max(I, J);
                            for (const p of rp)
                                if (p.min === D && p.max === z && p.ratio === M) return p.type;
                            return null
                        })(), this.isIPadOS = (() => {
                            const p = void 0 !== window.orientation,
                                x = navigator.maxTouchPoints > 1;
                            return this.isMacOSDevice && p && x
                        })(), this.deviceType = (() => {
                            if (this.isIPadOS) return Yp;
                            if (/\b(WOW64|Win64|x64|x86_64|Windows NT|Intel Mac OS X|CrOS aarch64|X11.*Linux)\b/i.test(this.userAgent)) return Sp;
                            if (this.userAgent.includes("iPhone")) return Ap;
                            if (this.userAgent.includes("iPad")) return Yp;
                            let p = window;
                            try {
                                for (; p !== p.parent;) p.parent.matchMedia, p = p.parent
                            } catch (p) {}
                            return p.matchMedia("(min-width: 1024px) and (min-height: 600px) and (orientation: landscape), (min-width: 768px) and (orientation: portrait)").matches ? Yp : Ap
                        })(), this.isTablet = this.deviceType === Yp, this.isPhone = this.deviceType === Ap, this.isDesktop = this.deviceType === Sp, this.isEventPassiveSupported = !1, this.isWrapper = (() => !!/(wv\)|Chrome\/\d+\.0\.0\.0)/.test(this.userAgent) || !(!this.isIosDevice || /(Chrome|CriOS|Safari|Edge)\/[0-9._]*/.test(this.userAgent)))(), this.checkEventPassiveSupport = (() => {
                            try {
                                let p = !1;
                                const x = {
                                        get capture() {
                                            return !0
                                        },
                                        get once() {
                                            return !0
                                        },
                                        get passive() {
                                            return p = !0, !0
                                        }
                                    },
                                    I = () => null;
                                window.addEventListener("test", I, x), window.removeEventListener("test", I, x), this.isEventPassiveSupported = p
                            } catch (p) {
                                this.isEventPassiveSupported = !1
                            }
                        })()
                    }
                }
                class px {
                    constructor(p) {
                        this.loader = p, this.lobbyLastGameType = void 0, this.lobbyLoadedGames = {}, this.lobbyLoadedGameCount = 0
                    }
                    preconnect(p, x) {
                        const I = document.createElement("link");
                        I.rel = x ? "dns-prefetch" : "preconnect", I.href = p, document.head.appendChild(I)
                    }
                    preload(p, x = !0, I = !1) {
                        var J;
                        const M = this.loader,
                            D = V(p, null === (J = window.EVO_LOADER) || void 0 === J ? void 0 : J.deviceInfo.deviceType, !1);
                        if (!D) return Promise.reject(new Z.mN("Manifest not found", {
                            sendToSentry: !1
                        }));
                        if (void 0 !== M.applications.getValue(D.loader)) return Promise.reject(new Z.mN("Already loaded", {
                            sendToSentry: !1
                        }));
                        const z = D.assets.map((p => {
                            const J = p.endsWith(".js"),
                                M = J ? !x : !I;
                            return this.preloadFromManifest(p, J ? "script" : "style", M)
                        }));
                        return Promise.all(z)
                    }
                    lobbyGameVisible(p, x) {
                        const {
                            game: I,
                            frontend_app: J
                        } = p, M = J || I || "";
                        if (this.lobbyLastGameType === M) return Promise.reject(new Error("Fast-path optimization to avoid hashmap lookups"));
                        if (this.lobbyLastGameType = M, this.lobbyLoadedGames[M]) return Promise.reject(new Error("Attempt to load game has been made"));
                        this.lobbyLoadedGames[M] = !0, this.lobbyLoadedGameCount++;
                        const D = this.loader.shared.getValue("style"),
                            z = null == D ? void 0 : D.data.fastTableSwitching,
                            C = "false" === (null == z ? void 0 : z.enabled),
                            T = ["baccarat", "roulette", "blackjack", "classicfreebet", "scalableblackjack", "freebet", "powerscalableblackjack", "lightningscalablebj"].includes(I),
                            L = !C && !x && (T || !1) && this.lobbyLoadedGameCount <= 5;
                        return this.preload(p, L, !1)
                    }
                    preloadFromManifest(p, x, I) {
                        const J = this.loader;
                        if (p) {
                            const M = window.EVO_CDN + p;
                            return I ? h.Rh(M, x) : "script" === x ? J.assets.loadScript(M) : J.assets.loadStyles(M)
                        }
                        return Promise.reject(new Error("assetPath is empty"))
                    }
                }
                class xx extends kp {
                    constructor(p) {
                        super(), this.loader = p, this.isStarted = !1
                    }
                    start() {
                        this.isStarted || (this.isStarted = !0, this.requestSetupData(), this.requestStyleData(), window.EVO_LOCALE ? this.requestLocalization(window.EVO_LOCALE) : this.subscribe("setup", (p => {
                            window.EVO_LOCALE = p.locale, this.requestLocalization(p.locale)
                        })))
                    }
                    requestLocalization(p) {
                        h.FB(p, "common").then((p => this.publish("i18n", p))).catch((x => {
                            this.loader.failed({
                                reason: "i18n",
                                failureDetails: x,
                                failedURL: `loc://${p}/common.json`
                            })
                        }))
                    }
                    getFingerprint() {
                        const p = "X-Fingerprint";
                        let x = null;
                        try {
                            x = window.localStorage.getItem(p)
                        } catch (p) {}
                        if (!x) {
                            x = h.Ds();
                            try {
                                window.localStorage.setItem(p, x)
                            } catch (p) {}
                        }
                        return x
                    }
                    requestSetupData() {
                        const p = this.loader,
                            x = p.deviceInfo,
                            I = {
                                device: x.deviceType,
                                "apple-screen": x.appleScreenType,
                                wrapped: x.isWrapper.toString()
                            },
                            J = {
                                keepalive: !1,
                                headers: {
                                    "X-Fingerprint": this.getFingerprint()
                                }
                            },
                            M = k("/setup", I);
                        h.QJ(M, "json", J).then((p => {
                            if (p.locale = window.EVO_LOCALE || p.locale, "string" == typeof p.globalSettings) try {
                                p.globalSettings = JSON.parse(p.globalSettings)
                            } catch (x) {
                                window.console.error("Invalid globalSettings.", "\n", x), p.globalSettings = void 0
                            }
                            this.publish("setup", p)
                        })).catch((x => {
                            x instanceof m.$ && 403 === x.status ? p.failedAuth() : (m.Z(M, x), p.failed({
                                reason: "setup",
                                failureDetails: x,
                                failedURL: M
                            }))
                        }))
                    }
                    requestStyleData() {
                        const p = this.loader,
                            x = k("/style");
                        h.QJ(x, "json").then((p => {
                            const x = {
                                data: p || {}
                            };
                            this.publish("style", x)
                        })).catch((I => {
                            I instanceof m.$ && 403 === I.status ? p.failedAuth() : (m.Z(x, I), p.failed({
                                reason: "style",
                                failureDetails: I,
                                failedURL: x
                            }))
                        }))
                    }
                }
                class Ix extends jp {
                    constructor() {
                        super(...arguments), this.moduleLoaders = new kp, this.define = (p, x, I) => {
                            if (null == x ? void 0 : x.length) throw new Error(`Expected no dependencies, got request for ${x}`);
                            this.moduleLoaders.publish(p, I())
                        }
                    }
                    loadModule(p, x, I) {
                        return new Promise(((J, M) => {
                            this.moduleLoaders.resetEvent(p), this.initModuleLoader(I), this.loadScript(x, !0, !0).catch(M), this.moduleLoaders.getPromise(p).then(J, M)
                        }))
                    }
                    initModuleLoader(p) {
                        const x = window[p];
                        void 0 !== x && x !== this.define && window.console.error(`window["${p}"] is already used, overwriting...`), window[p] = this.define
                    }
                }
                const Jx = "defineEvoVideo",
                    Mx = `${window.EVO_CDN}/frontend/cvi/evo-video-components`;
                class Dx extends kp {
                    constructor(p, x = 13) {
                        super(), this.apiVersion = x, this.modules = new Ix, this.isLoading = !1, this.handleLoadingError = p => {
                            window.console.error(p), p instanceof Error ? window.EVO_VERBOSE(p.stack || p.message, 2) : window.EVO_VERBOSE(p.message, 2), window.EVO_CDN && this.loader.failed({
                                reason: "video",
                                failureDetails: p
                            })
                        }, this.loader = p
                    }
                    loadLibrary(p = !1) {
                        this.isLoading || (this.isLoading = !0, this.loadIndependent(p))
                    }
                    ensureEvent(p) {
                        return this.loadLibrary(), super.ensureEvent(p)
                    }
                    loadIndependent(p) {
                        const x = p ? "all" : "wf4hfb",
                            I = (Date.now() / 36e5).toFixed(0),
                            J = this.getLastKnownVideoVersion();
                        Promise.all([this.loadVersion(I), this.loadVideoComponent(x, J)]).then((([p, I]) => {
                            let {
                                version: M
                            } = p;
                            const {
                                version: D
                            } = I;
                            if (D !== M) return M === J && (M += ".x"), this.setLastKnownVideoVersion(M), this.loadVideoComponent(x, M).then((p => {
                                this.publishModule(p)
                            })).catch((() => {
                                this.publishModule(I)
                            }));
                            this.publishModule(I)
                        })).catch(this.handleLoadingError)
                    }
                    getLastKnownVideoVersion() {
                        try {
                            return localStorage.getItem("EvoVideoLastKnownVersion") || void 0
                        } catch (p) {}
                    }
                    setLastKnownVideoVersion(p) {
                        try {
                            localStorage.setItem("EvoVideoLastKnownVersion", p)
                        } catch (p) {}
                    }
                    loadFromVendor() {
                        z.e(80616).then(z.t.bind(z, 360395, 23)).then((p => this.publishModule(p)))
                    }
                    publishModule(p) {
                        this.publish("module", {
                            component: p
                        })
                    }
                    loadVersion(p) {
                        return this.modules.loadModule("__version", `${Mx}/video_version_v${this.apiVersion}.js?${p}`, Jx)
                    }
                    loadVideoComponent(p, x = "") {
                        return this.modules.loadModule("videojs", `${Mx}/video_${p}_v${this.apiVersion}.js?${encodeURIComponent(x)}`, Jx)
                    }
                }
                class zx {
                    constructor() {
                        this.isFailed = !1, this.wasThrottled = !1, this.sentLogCount = 0, this.assets = new jp, this.deviceInfo = new Op, this.applications = new kp, this.shared = new xx(this), this.video = new Dx(this), this.audio = new np, this.prefetcher = new px(this), this.broadcast = new t, this.instance = new vp(this), this.cdnHost = window.EVO_CDN, this.onInstanceSwitch = [], this.onFailure = [], this.spaSwitches = 0, this.failureCount = h.wP(), this._initMetadata = {}, this.sendLog = (p, x, I) => {
                            if (void 0 !== this.shared.getValue("failedAuthentication")) return;
                            const {
                                store: J,
                                enhancers: M
                            } = Object.assign({
                                store: !1,
                                enhancers: []
                            }, I);
                            window.EVO_VERBOSE(`Sending log: ${p}`), this.sentLogCount += 1;
                            const D = Object.assign(Object.assign({
                                attributionId: this.instance.attributionId,
                                ua_launch_id: this.instance.uaLaunchId,
                                lobby_launch_id: this.instance.lobbyLaunchId,
                                connectionType: this.deviceInfo.connectionType,
                                userAgent: this.deviceInfo.userAgent,
                                buildId: "6.20240619.72648.42301-f895168235",
                                url: R(window.location.href),
                                provider: this.instance.provider
                            }, "game" === this.instance.kind && Object.assign({
                                tableId: this.instance.tableId,
                                virtualTableId: this.instance.virtualTableId
                            }, M.includes("gameType") ? {
                                gameType: this.instance.gameType
                            } : void 0)), x);
                            if (J) return void this.instance.storeLog({
                                type: p,
                                payload: D
                            });
                            const z = k("/log"),
                                C = JSON.stringify({
                                    log: {
                                        type: p,
                                        value: D
                                    }
                                });
                            let T = !1;
                            if (navigator.sendBeacon) try {
                                T = navigator.sendBeacon(z, C)
                            } catch (p) {
                                window.console.error(p)
                            }
                            T || fetch(z, {
                                method: "POST",
                                credentials: "same-origin",
                                headers: {
                                    "Content-Type": "text/plain"
                                },
                                body: C,
                                keepalive: !0,
                                evoIgnoreSandbox: !0
                            }).catch((I => {
                                console.error("Unable to send log", I, p, x)
                            }))
                        }
                    }
                    addInstanceSwitchListener(p) {
                        this.onInstanceSwitch.push(p), "empty" !== this.instance.kind && p(this.instance)
                    }
                    addFailureListener(p) {
                        this.onFailure.push(p)
                    }
                    failedAuth() {
                        this.isFailed || (this.isFailed = !0, this.shared.publish("failedAuthentication", null), window.location.href = "/")
                    }
                    failed(p) {
                        this.isFailed = !0, this.failureReason = p.reason, this.increaseFailureCount(), p.failureDetails && Z.vV(Z.oj(p.failureDetails));
                        const x = h.ET(this.failureCount, p.failureDetails);
                        if (this.onFailure.forEach((I => I({
                                failedURL: p.failedURL,
                                failureReason: p.reason,
                                failureDetails: p.failureDetails,
                                willRetry: x,
                                failureCount: this.failureCount
                            }))), !x) return void this.displayFailurePopup(Z.EL(p.failureDetails) && p.failureDetails.localizedMessage ? p.failureDetails : "message.unableLoadGame", !0, !0);
                        const I = h.u9({
                            failureReason: p.reason,
                            isCdnEnabled: !!window.EVO_CDN
                        });
                        h.YU({
                            disableDuration: I,
                            failureCount: this.failureCount
                        })
                    }
                    displayPopup(p, x) {
                        Promise.race([h.cb(3e3), this.shared.getPromise("i18n")]).then((() => {
                            const I = this.shared.getValue("i18n"),
                                J = (null == I ? void 0 : I.common) || E;
                            let M, D;
                            "string" == typeof p ? (M = J[p], D = p) : (M = p.localizedMessage || p.message, D = "custom"), this.sendLog("CLIENT_POPUP_DISPLAYED", {
                                popupId: D
                            }, {
                                enhancers: ["gameType"]
                            }), window.EVO_POPUP(M, x.map((p => ({
                                content: J[p.contentKey],
                                callback: p.callback
                            }))))
                        }))
                    }
                    displayFailurePopup(p, x, I) {
                        this.isFailed = !0;
                        const J = [];
                        x && J.push({
                            contentKey: "button.tryAgain.uppercase",
                            callback: () => {
                                window.location.reload()
                            }
                        });
                        const {
                            provider: M
                        } = this.instance, D = M && "evolution" !== M && M !== s && !this.getLicenseeLobbyUrl();
                        I && !D && J.push({
                            contentKey: "button.backToLobby",
                            callback: () => {
                                this.redirectToLobby()
                            }
                        }), this.displayPopup(p, J)
                    }
                    addDeviceTypeToGlobalClasses() {
                        document.body && document.body.classList.add(this.deviceInfo.deviceType)
                    }
                    init(p = window.location.href, x = {}) {
                        this._initMetadata = x, this.sentLogCount = 0, this.shared.start();
                        const I = b.w(p),
                            J = I.getParam("mwg") || null,
                            M = J ? null : I.getParam("table_id") || null,
                            D = J ? null : I.getParam("vt_id") || null,
                            z = J ? null : I.getParam("app") || null,
                            C = M && I.getParam("balance_id") || null,
                            T = this.instance;
                        if (!T.disposed) {
                            if ("multi" === T.kind) return T.update(I, !0);
                            if (M && "switch" === T.kind && T.tableId === M && T.virtualTableId === D && T.balanceId === C && T.app === z) return Promise.resolve()
                        }
                        "empty" !== T.kind && this.resetPerformanceMetrics();
                        const L = console.groupCollapsed || console.group;
                        return null == L || L.call(console, `%c📁 Application switch from ${T.kind} to tableId=${M}, vtId=${D}`, "font-size: 120%;"), this.instance = new dp(this, M, D, J, C, z), T.dispose().then((() => this.checkInitResources())).then((() => this.checkSwitchConfiguration(T))).then((() => {
                            let p;
                            window.EVO_VERBOSE(`SPA switch from ${T.kind}`), this.broadcast.reset();
                            let x = Promise.resolve();
                            if (J) p = new Vp(this, J);
                            else if ("multi" === T.kind) p = new Vp(this, "", !0), x = p.update(I, !0);
                            else if (M) {
                                const x = I.getParam("ua_launch_id") || null,
                                    J = I.getParam("lobby_launch_id") || null;
                                p = new Wp(this, M, D, z, C, x, J)
                            } else p = new yp(this, z);
                            this.instance = p;
                            for (const x of this.onInstanceSwitch) x(p);
                            return x
                        })).catch((p => {
                            this.isFailed = !0;
                            const x = "SPA bail because of ";
                            window.console.error(x, p), window.EVO_VERBOSE(x + p, 1), this.broadcast.dispose();
                            const I = b.w(window.location.href);
                            I.searchParams.mwg = void 0, I.searchParams.table_id = void 0, I.searchParams.vt_id = void 0, I.searchParams.freeGames = void 0, I.hashParams.mwg = J || void 0, I.hashParams.table_id = M || void 0, I.hashParams.vt_id = D || void 0, I.hashParams.balance_id = C || void 0;
                            const z = I.toString();
                            window.location.href !== z && (this.sendLog("CLIENT_GAME_RELOAD", {
                                reason: p
                            }), window.location.replace(z)), window.location.reload()
                        })).then((() => {
                            L && window.console.groupEnd()
                        }))
                    }
                    publishApplication(p, x, I) {
                        this.applications.publish(p + x, I), I.provider && (this.instance.provider = I.provider)
                    }
                    get initMetadata() {
                        return this._initMetadata
                    }
                    checkSwitchConfiguration(p) {
                        return "empty" === p.kind ? Promise.resolve() : new Promise(((p, x) => {
                            this.shared.subscribe("style", (I => {
                                const J = I.data.fastTableSwitching;
                                if ("false" === (null == J ? void 0 : J.enabled)) return x("fastTableSwitching is disabled in style settings");
                                p()
                            }))
                        }))
                    }
                    resetPerformanceMetrics() {
                        try {
                            performance.clearMarks(), performance.clearMeasures(), performance.clearResourceTimings(), performance.mark("evoAppSwitchStarted"), this.wasThrottled = !1
                        } catch (p) {
                            window.console.error("Cannot reset performance report", p)
                        }
                    }
                    checkInitResources() {
                        return this.spaSwitches++, this.spaSwitches >= 10 ? Promise.reject("10th load") : performance.now() > 6e5 ? Promise.reject("10 minute uptime") : Promise.resolve()
                    }
                    redirectToLobby() {
                        const p = this.getLicenseeLobbyUrl();
                        if (p) {
                            try {
                                window.top ? window.top.location.href = p : window.location.href = p
                            } catch (x) {
                                window.location.href = p
                            }
                            return
                        }
                        const x = b.w(window.location.href),
                            I = this.instance.provider === s ? G : void 0,
                            J = {
                                category: x.getParam("category"),
                                game: x.getParam("game"),
                                app: I
                            };
                        window.location.href = P(J)
                    }
                    getLicenseeLobbyUrl() {
                        var p;
                        const x = this.shared.getValue("style"),
                            I = this.deviceInfo.isDesktop ? null == x ? void 0 : x.data : null == x ? void 0 : x.data.mobile_settings;
                        return null === (p = null == I ? void 0 : I.licensee_lobby) || void 0 === p ? void 0 : p.url
                    }
                    increaseFailureCount() {
                        this.failureCount += 1, h.Nw(this.failureCount)
                    }
                }
                const Cx = "CLIENT_PAGE_HIDDEN",
                    Tx = "CLIENT_PAGE_VISIBLE";

                function Lx(p, I = C) {
                    const J = new I({
                        sendLogMessage: p.sendLog,
                        isDesktop: p.deviceInfo.isDesktop
                    });
                    p.addInstanceSwitchListener((() => {
                        J.postMessage({
                            event: "EVO:APPLICATION_LOAD_STARTED"
                        }, {
                            type: "default",
                            disableLogging: !0,
                            targetRelease: "stable"
                        })
                    })), p.shared.subscribe(["setup", "style"], ((x, I) => {
                        const z = x.clientApiV2,
                            C = I.data.clientApiV2,
                            T = I.data.client_api_v2,
                            L = C || T || z,
                            w = I.data.clientApiV2Overrides,
                            $ = function(p) {
                                const x = p;
                                return x && function(p) {
                                    return ["stable", "unstable"].includes(p)
                                }(x.release) ? Object.assign(Object.assign({
                                    release: x.release
                                }, function(p) {
                                    return Array.isArray(p) && p.length > 0 && p.some((p => "string" == typeof p && p.trim().length > 0))
                                }(x.origins) ? {
                                    origins: x.origins
                                } : void 0), {
                                    enabledEvents: x.enabledEvents ? M(x.enabledEvents) : void 0,
                                    disabledCommands: x.disabledCommands ? D(x.disabledCommands) : void 0
                                }) : null
                            }(Object.assign(Object.assign({}, L), w));
                        null !== $ && (p.clientApi = J, J.config = $)
                    })), p.shared.subscribe("failedAuthentication", (() => {
                        null == J || J.postMessage({
                            event: "EVO:SESSION_INVALID"
                        }, {
                            type: "default",
                            targetRelease: "stable"
                        })
                    })), p.addInstanceSwitchListener((I => {
                        I.subscribe("config", (J => {
                            I.subscribe("gameLoaded", (x => {
                                var M;
                                "game" === (null == x ? void 0 : x.applicationType) ? I.subscribe("gameMeta", (() => {
                                    var M;
                                    null === (M = p.clientApi) || void 0 === M || M.postMessage(Object.assign({
                                        event: "EVO:APPLICATION_READY"
                                    }, wx(J, I, x)), {
                                        type: "default",
                                        targetRelease: "stable"
                                    })
                                })): null === (M = p.clientApi) || void 0 === M || M.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_READY"
                                }, wx(J, I, x)), {
                                    type: "default",
                                    targetRelease: "stable"
                                }), window.addEventListener("beforeunload", (() => {
                                    var M, D;
                                    null === (M = p.clientApi) || void 0 === M || M.postMessage(Object.assign({
                                        event: "EVO:APPLICATION_UNLOAD"
                                    }, wx(J, I, x)), {
                                        type: "default",
                                        targetRelease: "stable"
                                    }), null === (D = p.clientApi) || void 0 === D || D.reset()
                                }))
                            })), I.subscribe("disposing", (M => {
                                var D, z;
                                null === (D = p.clientApi) || void 0 === D || D.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_UNLOAD"
                                }, wx(J, I, function(p) {
                                    if (!p) return;
                                    const {
                                        suppressLoadingScreen: I
                                    } = p;
                                    return x.Tt(p, ["suppressLoadingScreen"])
                                }(M))), {
                                    type: "default",
                                    targetRelease: "stable"
                                }), null === (z = p.clientApi) || void 0 === z || z.reset()
                            }))
                        }))
                    }))
                }

                function wx(p, x, I = {
                    applicationType: "unknown"
                }) {
                    return "game" === x.kind && "game" === I.applicationType ? Object.assign(Object.assign(Object.assign({}, I), {
                        gameType: p.game,
                        gameVertical: p.game_vertical,
                        tableId: x.tableId
                    }), x.virtualTableId && {
                        virtualTableId: x.virtualTableId
                    }) : I
                }
                const $x = {
                        isAvailable: function() {
                            var p;
                            return "function" == typeof(null === (p = window.EvolutionGamingAndroidAPI) || void 0 === p ? void 0 : p.send)
                        },
                        dispatch: function(p, x = {}) {
                            window.EvolutionGamingAndroidAPI.send(JSON.stringify({
                                type: p,
                                payload: x
                            }))
                        }
                    },
                    bx = {
                        isAvailable: function() {
                            try {
                                return window.parent !== window && !!window.parent.postMessage
                            } catch (p) {
                                return !1
                            }
                        },
                        dispatch: function(p, x = {}) {
                            window.parent.postMessage({
                                type: p,
                                payload: x
                            }, "*")
                        }
                    },
                    ax = {
                        isAvailable: function() {
                            var p, x, I;
                            return "function" == typeof(null === (I = null === (x = null === (p = window.webkit) || void 0 === p ? void 0 : p.messageHandlers) || void 0 === x ? void 0 : x.EvolutionGamingWrapperAPI) || void 0 === I ? void 0 : I.postMessage)
                        },
                        dispatch: function(p, x = {}) {
                            window.webkit.messageHandlers.EvolutionGamingWrapperAPI.postMessage(JSON.stringify({
                                type: p,
                                payload: x
                            }))
                        }
                    };
                class ex {
                    constructor() {
                        this.consumers = []
                    }
                    addConsumer(p) {
                        p.isAvailable() && this.consumers.push(p)
                    }
                    dispatch(p, x = {}) {
                        for (const I of this.consumers) I.dispatch(p, x)
                    }
                }
                let _x;
                const Nx = "index.html";

                function ox(p, x) {
                    if (x) h.z6("gameClientUrlSupport"), window.location.replace(p);
                    else try {
                        window.history.replaceState(null, "", p)
                    } catch (x) {
                        ox(p, !0)
                    }
                }
                const tx = "loadingScreen--87788",
                    fx = "gradient--0f1d8",
                    lx = "finishProgress--0c00b",
                    Zx = "footer--fba55",
                    Ux = "image--44b6b",
                    Px = "withFooterLogo--6ca4a",
                    kx = "loaded--10bec",
                    Bx = "awardLogos--861ba",
                    Kx = "noImage--01a3d",
                    ix = "properAnimation--47cc2",
                    yx = "randomAnimation--de14a";

                function vx(p, x = null, I = 1e4, J = !0) {
                    return new Promise(((M, D) => {
                        const z = new Image;
                        z.crossOrigin = x, z.onerror = () => T("error");
                        const C = window.setTimeout((() => {
                            T("timeout")
                        }), I);

                        function T(x) {
                            clearTimeout(C), J && m.Z(p, x), D(x)
                        }
                        z.onload = () => {
                            clearTimeout(C), M(z)
                        }, z.src = p
                    }))
                }

                function Wx(p) {
                    const x = document.getElementsByClassName(p).item(0);
                    if (!x) throw new Error(`Loading screen element not found: ${p}`);
                    return x
                }

                function cx() {
                    try {
                        let p = window;
                        for (;;) {
                            const x = p.EVO_LOADER;
                            if ("multi" === (null == x ? void 0 : x.instance.kind)) return x.instance;
                            if (p === p.parent) return null;
                            p = p.parent
                        }
                    } catch (p) {
                        return null
                    }
                }
                const Rx = "reality_check_handler";

                function sx() {
                    const p = b.w(window.location.href).getParam("EVOSESSIONID");
                    p && "undefined" !== p && (window.EVO_SESSION_ID_FALLBACK = p)
                }

                function Gx(p) {
                    return "compliance" === b.w(p).getParam("app")
                }

                function Ex(p) {
                    const x = b.w(p.href).getParam("mwg");
                    if (x)
                        for (const p of W(x))
                            if (Gx(p)) return !0;
                    return !1
                }

                function Hx(p) {
                    const x = P({
                            app: "compliance",
                            [qp]: gp.TopBar
                        }),
                        I = cx();
                    if (I) {
                        if ((null == I ? void 0 : I.window) !== window) return;
                        for (const p of I.frames)
                            if (p.layout === gp.TopBar && Gx(p.location)) return;
                        I.addFrame(x)
                    } else {
                        const I = P({
                            mwg: v([x, window.location.href])
                        });
                        p.init(I)
                    }
                }
                const gx = /^\*?(\d+\.\d+\.\d+\.\d+-[a-f0-9]{10}).*/,
                    mx = "6.20240619.72648.42301-f895168235".replace(gx, "$1");
                (function() {
                    sx(),
                        function() {
                            let p = !1;
                            window.addEventListener("beforeunload", (() => {
                                window.EVO_VERBOSE("beforeunload"), p = !0, setTimeout((() => {
                                    p = !1
                                }), 1e3)
                            })), window.addEventListener("popstate", (() => {
                                if (p) {
                                    window.EVO_VERBOSE("beforeunload > popstate");
                                    const p = window.location.href,
                                        x = b.w(p);
                                    x.searchParams._reload = Date.now().toFixed(), window.history.pushState(null, "", x.toString()), h.z6("Popstate event triggered for Gammix BB application"), window.location.replace(p)
                                }
                            }))
                        }(),
                        function() {
                            const p = window.history.pushState;
                            window.history.pushState = function(x, I, J) {
                                p.call(window.history, x, I, J), window.dispatchEvent(new CustomEvent("pushstate"))
                            };
                            const x = window.history.replaceState;
                            window.history.replaceState = function(p, I, J) {
                                x.call(window.history, p, I, J), window.dispatchEvent(new CustomEvent("replacestate"))
                            }
                        }(), window.addEventListener("message", (p => {
                            const x = p.data;
                            if (p.origin === L.receive && x && "object" == typeof x && x.key === w) {
                                window.parent !== window && $(window.parent, p);
                                for (let x = 0; x < window.length; x++) $(window[x], p)
                            }
                        }));
                    const p = b.w(window.location.href),
                        x = new zx;
                    window.EVO_LOADER = x, x.addDeviceTypeToGlobalClasses(), Object.defineProperty(window, "EVO_LOADER", {
                            get: () => x,
                            set: () => {
                                console.warn("window.EVO_LOADER cannot be overwritten")
                            }
                        }),
                        function(p) {
                            return function() {
                                const p = b.w(window.location.href),
                                    x = p.getParam("origin");
                                if (!x) return Promise.resolve();
                                if (x.startsWith("https%3A%2F%2F")) return Promise.reject("`origin` parameter has been incorrectly double encoded");
                                window.console.log("Full URL", window.location.href), window.console.log("Processing origin parameter:", x);
                                const I = b.w(x);
                                if (I.pathname.length <= 1 && !I.search) return J();
                                if (p.getParam("JSESSIONID") || p.getParam("params")) {
                                    const p = "⚠ `JSESSIONID` or `params` is defined outside of `origin` URL. Please ensure that `origin` value is properly url-encoded.";
                                    window.console.warn(p), window.EVO_VERBOSE(p, 1)
                                }
                                return I.searchParams.json = "true", I.searchParams.cc = "1", I.searchParams.client_version = "6.20240619.72648.42301-f895168235", h.QJ(I.toString(), "json").then((p => {
                                    const x = null == p ? void 0 : p.location;
                                    if ("string" != typeof x) throw new Error("Auth endpoint didn't return correct format.");
                                    const M = b.w(x);
                                    M.hashParams.origin = I.origin;
                                    const D = window.location.pathname + M.search + M.hash;
                                    h.z6("Setting remote origin");
                                    try {
                                        window.history.replaceState(null, "", D)
                                    } catch (p) {
                                        window.location.replace(D)
                                    }
                                    return sx(), J()
                                }));

                                function J() {
                                    if (!window.EVO_SESSION_ID_FALLBACK) return Promise.reject("origin is only allowed when session id is also given in url");
                                    const p = I.origin;
                                    return p.endsWith(".evo-games.com") || p.endsWith(".evolution.com") ? (window.EVO_ORIGIN = p, document.cookie ? fetch("/logout", {
                                        credentials: "same-origin",
                                        method: "POST"
                                    }).then((() => {})).catch((() => {})) : Promise.resolve()) : Promise.reject("unsafe origin rejected")
                                }
                            }().catch((x => (window.console.error("⛔", x), window.EVO_VERBOSE(x, 1), p.failedAuth(), Promise.reject(x))))
                        }(x).then((() => {
                            (function(p) {
                                let x = 0;

                                function I() {
                                    p.isFailed || p.sendLog("CLIENT_GAME_LOADER_TERMINATED", Object.assign({
                                        loadingTime: D()
                                    }, z()))
                                }
                                p.addInstanceSwitchListener((J => {
                                    x = performance.now(), p.sendLog("CLIENT_GAME_LOADER_STARTED", Object.assign({
                                        sharingBrowserContext: !!window.opener,
                                        failureCount: h.wP(),
                                        verboseEnabled: window.EVO_VERBOSE()
                                    }, p.initMetadata)), window.addEventListener("beforeunload", I);
                                    const D = M("visibilitychange"),
                                        z = M("pagehide"),
                                        C = M("pageshow");
                                    document.addEventListener("visibilitychange", D), window.addEventListener("pagehide", z), window.addEventListener("pageshow", C), J.subscribe("gameLoaded", (() => {
                                        window.removeEventListener("beforeunload", I), document.removeEventListener("visibilitychange", D), window.removeEventListener("pagehide", z), window.removeEventListener("pageshow", C)
                                    }))
                                })), p.addFailureListener((x => {
                                    p.sendLog("CLIENT_GAME_LOADER_FAILED", Object.assign({
                                        failureReason: x.failureReason,
                                        failureDetails: x.failureDetails,
                                        failedURL: x.failedURL,
                                        failureCount: x.failureCount,
                                        willRetry: x.willRetry,
                                        loadingTime: D()
                                    }, z()))
                                }));
                                let J = Tx;

                                function M(x) {
                                    return () => {
                                        const I = "pagehide" === x || "visibilitychange" === x && "hidden" === document.visibilityState ? Cx : Tx;
                                        I !== J && (p.sendLog(I, {
                                            loadingTime: D()
                                        }, {
                                            store: !0
                                        }), J = I)
                                    }
                                }

                                function D() {
                                    return Math.floor(performance.now() - x)
                                }

                                function z() {
                                    let x = 0,
                                        I = 0;
                                    return p.instance.setLogConsumer((({
                                        type: p
                                    }) => {
                                        p === Cx ? x += 1 : p === Tx && (I += 1)
                                    })), Object.assign({
                                        hideEvents: x,
                                        showEvents: I
                                    }, p.initMetadata)
                                }
                            })(x), Lx(x, C),
                                function(p) {
                                    window.EVO_ORIGIN || p.shared.subscribe("setup", (x => {
                                        var I;
                                        const J = null === (I = x.casinoConfig) || void 0 === I ? void 0 : I.gameClientUrl;
                                        if (J && !window.location.pathname.startsWith(J))
                                            if (window.EVO_VERBOSE()) window.console.warn(`Ignoring 'gameClientUrl=${J}' because of development/verbose mode.`);
                                            else {
                                                window.console.log("Adjusting the URL based on 'gameClientUrl'. It will take effect on next page reload.");
                                                const p = b.w(window.location.href);
                                                p.pathname = J, ox(p.toString(), !1)
                                            }
                                        p.addInstanceSwitchListener((p => {
                                            p.subscribe("config", (p => {
                                                let x = p.frontend_loader || "";
                                                if (x !== Nx && x) {
                                                    if (window.location.pathname.endsWith(x)) return
                                                } else {
                                                    if (window.location.pathname.endsWith(Nx) || window.location.pathname.endsWith("/")) return;
                                                    x = ""
                                                }
                                                window.console.log("Adjusting the URL based on 'frontend_loader'.");
                                                const I = b.w(window.location.href);
                                                I.pathname = I.pathname.substring(0, I.pathname.lastIndexOf("/") + 1) + x, ox(I.toString(), !0)
                                            }))
                                        }))
                                    }))
                                }(x),
                                function(p) {
                                    p.shared.subscribe(["setup", "style"], ((x, I) => {
                                        let J = window;
                                        if (function(p, x, I) {
                                                var J;
                                                if (p.isDesktop) return !1;
                                                const {
                                                    swe: M,
                                                    de: D,
                                                    arg: z
                                                } = (null === (J = null == x ? void 0 : x.casinoConfig) || void 0 === J ? void 0 : J.compliance) || {}, C = I.data.mobile_settings || {};
                                                return !(!("compliance" in C) || 0 === Object.keys(C.compliance).length || !M && !D && !z)
                                            }(p.deviceInfo, x, I)) try {
                                            let x = Ex(J.location);
                                            for (; !x && J !== J.parent;) x = Ex(J.parent.location), J = J.parent;
                                            x || (p.isFailed = !0, Hx(p))
                                        } catch (x) {
                                            window.console.error("Unable to read parent windows URL", x), p.isFailed = !0, Hx(p)
                                        } else "multi" === p.instance.kind && Ex(J.location) && function() {
                                            const p = cx();
                                            if (p)
                                                for (const x of p.frames) x.layout === gp.TopBar && Gx(x.location) && (null == p || p.removeFrame(x.frame, {
                                                    update: !0,
                                                    animateOnMobile: !1
                                                }))
                                        }()
                                    }))
                                }(x),
                                function(p, x) {
                                    p.shared.subscribe("setup", (x => {
                                        const I = x.wsHost;
                                        I && p.prefetcher.preconnect(`//${I}`, !0)
                                    }));
                                    const I = x.getParam("app") || x.getParam("game");
                                    I && !I.includes("@") && p.prefetcher.preload({
                                        game: I
                                    }, !0, !0).catch((() => {})), p.addInstanceSwitchListener((p => {
                                        "game" === p.kind && p.subscribe("config", (p => {
                                            const x = b.w(window.location.href);
                                            if ((x.getParam("game") || "") !== (p.game || "")) {
                                                x.searchParams.game = void 0, x.hashParams.game = p.game || void 0;
                                                try {
                                                    window.history.replaceState(null, "", x.toString())
                                                } catch (p) {}
                                            }
                                        }))
                                    }))
                                }(x, p),
                                function(p) {
                                    document.documentElement.setAttribute("lang", window.EVO_LOCALE), p.shared.subscribe("setup", (x => {
                                        p.addInstanceSwitchListener((() => {
                                            document.body.classList.add(x.lang)
                                        }))
                                    }))
                                }(x),
                                function(p) {
                                    p.addInstanceSwitchListener((x => {
                                        "game" === x.kind && p.shared.subscribe("style", (p => {
                                            var x;
                                            if (null === (x = p.data) || void 0 === x ? void 0 : x[Rx]) {
                                                let x = p.data[Rx].url;
                                                const I = document.getElementById("RealityCheckScript");
                                                if (x && !I) {
                                                    "/" === x[0] && (x = (window.EVO_ORIGIN || "") + x);
                                                    const p = document.createElement("script");
                                                    p.type = "text/javascript", p.charset = "utf-8", p.src = x, p.id = "RealityCheckScript", document.head.appendChild(p)
                                                }
                                            }
                                        }))
                                    }))
                                }(x),
                                function(p) {
                                    function x() {
                                        p.displayFailurePopup("error.noDealer", !1, !0)
                                    }
                                    p.addInstanceSwitchListener((I => {
                                        I.subscribe("config", (I => {
                                            var J;
                                            !I || I.error ? I && "object" == typeof I.error && "5013" === I.error.code ? x() : p.failed({
                                                reason: "config",
                                                failureDetails: new Error("invalid config")
                                            }) : (null === (J = I["disabled-client-versions"]) || void 0 === J ? void 0 : J.split(",").find((p => p.replace(gx, "$1") === mx))) && x()
                                        }))
                                    }))
                                }(x),
                                function(p) {
                                    p.addInstanceSwitchListener((p => {
                                        document.title = "Casino", "game" === p.kind && p.subscribe("config", (p => {
                                            document.title = `Casino: ${p.tableName||p.game||"game"}`
                                        }))
                                    }))
                                }(x),
                                function(p) {
                                    p.addInstanceSwitchListener((p => {
                                        p.subscribe(["config", "gameLoaded"], (x => {
                                            var I, J;
                                            "game" === p.kind && (I = {
                                                type: "GAME_LOADED",
                                                payload: {
                                                    gameType: x.game,
                                                    tableId: p.tableId,
                                                    tableName: x.tableName || ""
                                                }
                                            }, _x || (null === (J = window.EVO_LOADER) || void 0 === J ? void 0 : J.clientApi) || (_x = function() {
                                                const p = new ex;
                                                return p.addConsumer(bx), p.addConsumer(ax), p.addConsumer($x), p
                                            }()), null == _x || _x.dispatch(I.type, I.payload))
                                        }))
                                    }))
                                }(x),
                                function(p) {
                                    return document.addEventListener("visibilitychange", x), void document.addEventListener("webkitvisibilitychange", x);

                                    function x() {
                                        p.wasThrottled = !0
                                    }
                                }(x),
                                function(p) {
                                    const {
                                        isDesktop: x
                                    } = p.deviceInfo;
                                    let I = 0;
                                    if (x) {
                                        let p = !1;
                                        window.addEventListener("load", (() => {
                                            p = !0
                                        })), window.addEventListener("popstate", (() => {
                                            p && (I = setTimeout((() => {
                                                window.EVO_VERBOSE(`popstate ${window.location.hash}`), window.location.reload()
                                            }), 100))
                                        }))
                                    }
                                    window.addEventListener("hashchange", (() => {
                                        I && (clearTimeout(I), I = 0), window.EVO_VERBOSE(`hashchange ${window.location.hash}`), p.init(window.location.href)
                                    }))
                                }(x),
                                function(p) {
                                    if ("empty" === p.instance.kind && !cx()) try {
                                        p.instance = new Vp(p, "", !0)
                                    } catch (p) {
                                        Z.vV(new Z.ah("Initialization failed", p))
                                    }
                                }(x),
                                function(p) {
                                    let x;
                                    p.addInstanceSwitchListener((I => {
                                        p.shared.subscribe("style", (p => {
                                            var J;
                                            let M;
                                            if (null === (J = p.data) || void 0 === J ? void 0 : J.mobile_settings) {
                                                const x = p.data.mobile_settings.branded_lobby_gradient;
                                                (null == x ? void 0 : x.light) && x.dark && (M = [x.light, x.dark])
                                            }
                                            I.subscribe("config", (p => {
                                                let I, J;
                                                p.branded_cloth_gradient_light && p.branded_cloth_gradient_dark && (I = [p.branded_cloth_gradient_light, p.branded_cloth_gradient_dark]), p.branded_menu_gradient_light && p.branded_menu_gradient_dark && (J = [p.branded_menu_gradient_light, p.branded_menu_gradient_dark]), x = function(p, x, I, J) {
                                                    let M = "";
                                                    if (p) {
                                                        const x = `linear-gradient(45deg,rgba(${p[1]},0) 0%, rgba(${p[1]},0.8) 50%, rgba(${p[1]},0) 100%)`,
                                                            I = `linear-gradient(45deg,rgb(${p[0]}) -5%,rgb(${p[1]}) 50%,rgb(${p[0]}) 105%)`;
                                                        M += `.game-screen.cloth-gradient {background: -webkit-${x}, -webkit-${I} !important;background: ${x}, ${I} !important;background-size: cover !important;background-repeat: no-repeat !important; }`
                                                    }
                                                    const D = J ? x : I;
                                                    if (D) {
                                                        const p = `linear-gradient(45deg,rgba(${D[1]},0) 0%,rgba(${D[1]},0.8) 50%,rgba(${D[1]},0) 100%)`,
                                                            x = `linear-gradient(45deg,rgb(${D[0]}) -5%,rgb(${D[1]}) 50%,rgb(${D[0]}) 105%)`;
                                                        M += `.${tx}.${fx} {background: ${p}, ${x} !important;background-size: cover !important;background-repeat: no-repeat !important; }`
                                                    }
                                                    if (M.length) {
                                                        const p = document.createElement("style");
                                                        return p.type = "text/css", p.media = "screen", document.head.appendChild(p), p.sheet && ((p.sheet.ownerNode || p).innerHTML = M), p
                                                    }
                                                }(I, M, J, !p.game)
                                            }))
                                        })), I.subscribe("disposing", (() => {
                                            var p;
                                            null === (p = null == x ? void 0 : x.parentNode) || void 0 === p || p.removeChild(x)
                                        }))
                                    }))
                                }(x),
                                function(p) {
                                    const x = Wx(tx),
                                        I = Wx("star1--da76f");

                                    function J(p) {
                                        p.target instanceof HTMLElement && "BUTTON" === p.target.tagName || p.preventDefault()
                                    }

                                    function M(p = !0) {
                                        Wx("evoLogo--06ffa").style.opacity = p ? "1" : "0"
                                    }

                                    function D() {
                                        const x = Wx("content--1ddca"),
                                            I = p.deviceInfo.isDesktop ? 16 / 9 : 1,
                                            J = window.innerWidth / window.innerHeight > I,
                                            M = p.deviceInfo.isTablet;
                                        x.classList.toggle("wide--3bffa", J), x.classList.toggle("narrow--8d0d9", !J), x.classList.toggle("tablet--43c30", M)
                                    }

                                    function z(p, I, J) {
                                        I && x.classList.add(Kx), p || x.classList.add("mobile--76605", fx);
                                        const M = Wx("center--9aeab");
                                        J ? h.Bt(M) : h.kl(M), h.kl(x, !0), x.classList.remove(lx), Wx(Ux).classList.remove(kx)
                                    }

                                    function C() {
                                        x.classList.add(lx), window.removeEventListener("resize", D), window.setTimeout((() => {
                                            h.Bt(x), document.body.classList.remove("loading"), x.classList.remove(Kx, Px, yx, ix), I.style.transform = "", window.removeEventListener("touchmove", J), window.removeEventListener("touchstart", J), window.removeEventListener("touchend", J), x.style.maxHeight = "", x.style.height = "", x.style.margin = "", p.instance.publish("loadingScreenHidden", null)
                                        }), 500)
                                    }

                                    function T() {
                                        this.classList.add(kx)
                                    }

                                    function L(p, x) {
                                        for (const I of x) I && vx(I).then((x => p.prepend(x))).catch((() => {}))
                                    }

                                    function w(p = !0, x = window, I = {
                                        transfer: 0,
                                        count: 0
                                    }) {
                                        var J, M;
                                        const D = null === (M = null === (J = x.performance) || void 0 === J ? void 0 : J.getEntriesByType) || void 0 === M ? void 0 : M.call(J, "resource");
                                        for (const p of D || []) I.transfer += p.transferSize || 0, I.count++;
                                        if (p)
                                            for (let J = 0; J < x.length; J++) try {
                                                w(!0, x[J], I)
                                            } catch (p) {
                                                return null
                                            }
                                        return I
                                    }
                                    p.shared.getPromise("i18n").then((p => {
                                        Wx("logoText--42a39").textContent = p.common["mobile.poweredby"]
                                    })), p.addInstanceSwitchListener(($ => {
                                        const b = p.deviceInfo.isDesktop,
                                            a = "game" !== $.kind;
                                        let e = 0,
                                            _ = -1,
                                            N = null;
                                        if ("multi" === $.kind) return void C();
                                        z(b, a, !1), D(), window.removeEventListener("resize", D), window.addEventListener("resize", D);
                                        const o = p.deviceInfo.isEventPassiveSupported;
                                        window.addEventListener("touchmove", J, o && {
                                            passive: !1
                                        }), window.addEventListener("touchstart", J, o && {
                                            passive: !1
                                        }), window.addEventListener("touchend", J), p.shared.subscribe("style", (p => {
                                            const I = "false" === p.data.show_evo_logo;
                                            $.subscribe("config", (p => {
                                                const J = function(p, x = !1) {
                                                    const I = "evolution" === p.game_provider || !p.game_provider;
                                                    return x ? !1 !== function(p) {
                                                        try {
                                                            const x = window.sessionStorage.getItem(p);
                                                            return x ? JSON.parse(x) : void 0
                                                        } catch (p) {
                                                            return
                                                        }
                                                    }(Hp) : I ? "false" !== p.show_evo_logo : "true" === p.show_evo_logo
                                                }(p, a);
                                                var D;
                                                !I && J && (M(), D = function(p) {
                                                    const x = p.graphical_footerLogos;
                                                    return x ? x.trim().split(",").map(q) : []
                                                }(p), D.length && (x.classList.add(Px), L(Wx(Zx), D))), a || function(p, x, I) {
                                                    try {
                                                        window.sessionStorage.setItem(p, JSON.stringify(x))
                                                    } catch (p) {}
                                                }(Hp, J)
                                            }))
                                        })), p.shared.subscribe("setup", (p => {
                                            $.subscribe("config", (x => {
                                                var I;
                                                (function(p) {
                                                    if (p) {
                                                        const x = Wx(Ux);
                                                        x.removeEventListener("load", T), x.addEventListener("load", T), x.src = p
                                                    }
                                                })(function(p, x, I) {
                                                    const J = function(p, x, I) {
                                                        const J = window.EVO_LOCALE || x.locale,
                                                            M = x.lang,
                                                            D = I ? "graphical_desktopLoadingScreen" : "graphical_mobileLoadingScreen";
                                                        return p[`${D}_${J}`] || p[`${D}_${M}`] || p[D]
                                                    }(x, I, p);
                                                    return q(J)
                                                }(b, x, p)), b || (I = function(p) {
                                                    const x = p.graphical_mobileAwardLogos;
                                                    return x ? x.trim().split(",").map(q) : []
                                                }(x), L(Wx(Bx), I))
                                            }))
                                        })), $.subscribe(["config", "gamePackageManifest"], ((J, M) => {
                                            _ = parseFloat(J.loader_expected_resource_count || "0") || M.loaderExpectedResourceCount || 0, N = J.loader_resources_counting_mode || M.loaderResourcesCountingMode || "auto";
                                            const D = !_ || "none" === N;
                                            x.classList.add(D ? yx : ix), D && p.sendLog("CLIENT_LOADING_SCREEN_ISSUE", {
                                                error: "random-animation",
                                                game: J.game,
                                                app: M.application
                                            }), e = window.setInterval((() => {
                                                const p = w("auto" === N);
                                                if (p) {
                                                    if ("non-recursive" === N) {
                                                        const x = $.loadProgress;
                                                        if (!x) return;
                                                        p.count += x.count || 0, p.transfer += x.transfer || 0
                                                    }
                                                    if (_) {
                                                        const x = Math.max(.01, Math.min(.99, p.count / _));
                                                        I.style.transform = `translateX(${(600*x).toFixed(0)}%)`
                                                    }
                                                }
                                            }), 500)
                                        })), $.subscribe("gameLoaded", (() => {
                                            C(), clearInterval(e);
                                            const p = w("auto" === N);
                                            p && _ > 0 && Math.abs(1 - p.count / _) > .1 ? window.console.warn(`Mismatch between expected resource count (${_}) and actual.`, p) : window.console.log("Resources loaded:", p)
                                        })), $.subscribe("disposing", (x => {
                                            if (function() {
                                                    const p = Wx(Ux);
                                                    p.removeEventListener("load", T), p.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==", Wx(Bx).textContent = "", Wx(Zx).textContent = "", M(!1)
                                                }(), null == x ? void 0 : x.suppressLoadingScreen) return;
                                            const I = "switch" === p.instance.kind && !p.instance.tableId;
                                            z(b, I, !0)
                                        }))
                                    }))
                                }(x),
                                function(p) {
                                    const x = function(p, x, I) {
                                        let J = 0,
                                            M = !1;
                                        return (...I) => {
                                            if (J < p.limit) return J += 1, setTimeout((() => {
                                                J -= 1, M = !1
                                            }), p.timeSpan), x(...I);
                                            M || (M = !0)
                                        }
                                    }({
                                        limit: 20,
                                        timeSpan: 6e4
                                    }, p.sendLog);
                                    p.addInstanceSwitchListener((p => {
                                        p.subscribe("gameLoaded", (() => {
                                            window.parent.postMessage({
                                                type: "CLIENT_API_V1_USAGE_LOGGER_INITIALIZED"
                                            }, "*")
                                        }))
                                    })), window.addEventListener("message", (({
                                        data: p,
                                        origin: I
                                    }) => {
                                        "IFRAME_SUBSCRIBED_TO_EVENTS" === p.type && x("CLIENT_API_V1_USAGE", {
                                            origin: I,
                                            payload: p.payload
                                        })
                                    }))
                                }(x),
                                function(p) {
                                    p.shared.subscribe("setup", (x => {
                                        p.addInstanceSwitchListener((I => {
                                            I.subscribe("config", (I => {
                                                I.bare_session_id && I.bare_session_id !== x.bare_session_id && p.failed({
                                                    reason: "config",
                                                    failureDetails: "bare_session_id mismatch"
                                                })
                                            }))
                                        }))
                                    }))
                                }(x),
                                function(p) {
                                    window.addEventListener("pageshow", (x => {
                                        x.persisted && p.init(window.location.href, {
                                            triggeredBy: "bfcache"
                                        }).then((() => {
                                            window.EVO_VERBOSE("Re-initialized from bfcache")
                                        })).catch((p => {
                                            window.EVO_VERBOSE(`Re-initializing from failed due to ${p.message}`, 2)
                                        }))
                                    })), window.addEventListener("pagehide", (x => {
                                        x.persisted && p.instance.dispose().then((() => {
                                            console.log("Prepared for bfcache")
                                        })).catch((p => {
                                            console.error("Preparation of bfcache failed", p)
                                        }))
                                    }))
                                }(x), x.init()
                        })).catch((() => {}))
                })()
            })()
        })()
    </script>
</body>

</html>