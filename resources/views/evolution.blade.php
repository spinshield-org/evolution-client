<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,viewport-fit=cover,interactive-widget=resizes-content">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Casino">
    <meta name="author" content="Evolution Gaming">
    <meta name="build" content="Build Version: 6.20240625.71558.42417-629900b49f at 2024-06-26 08:07:03 UTC" id="build">
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
            } catch (J) {
                u("ES2017 or PointerEvent")
            }
            var J = new Image;

            function u(J) {
                J = "This browser does not support " + J + ". Redirecting to the error page...";
                try {
                    console.error(J)
                } catch (J) {}
                location.href = "/frontend/evo/errors/unsupported-browsers.html" + location.search + location.hash
            }
            J.onerror = function() {
                u("WebP")
            }, J.src = "data:image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA=="
        })()
    </script>
    <script>
        (function() {
            "use strict";
            try {
                eval("Promise=class P extends Promise{constructor(...a){super(...a);this.__stackTraceError=new Error('Promise created');}}")
            } catch (p) {}
            window.globalThis || (window.globalThis = window), null == Element.prototype.getAttributeNames && (Element.prototype.getAttributeNames = function() {
                    const p = this.attributes,
                        B = p.length,
                        _ = new Array(B);
                    for (let l = 0; l < B; l++) _[l] = p[l].name;
                    return _
                }),
                function(p) {
                    const B = p.performance || (p.performance = {});

                    function _() {}
                    B.mark || (B.mark = _), B.measure || (B.measure = _), p[Symbol("iOS weakref hack")] = B
                }(globalThis)
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const s = window.location,
                V = s.pathname;
            "/" !== V.slice(-1) && ".html" !== V.slice(-5) && s.replace(`${V}/${s.search}${s.hash}`);
            const x = {};
            for (const s of document.cookie.split(";")) {
                const [V, _] = s.replace(/^\s*(.*)\s*$/, "$1").split(/\s*=\s*(.+)/);
                x[V] = V in x ? void 0 : _
            }
            if (!x.cdn && !x.locale) try {
                const V = new URLSearchParams(s.hash.substr(1));
                x.locale = V.get("locale");
                const _ = V.get("cdn");
                _ && new URL(_).origin.endsWith(".egcdn.com") && (x.cdn = _)
            } catch (s) {}
            window.EVO_CDN = x.ignore_cdn ? "" : (x.cdn || "").replace(/\/+$/, ""), window.EVO_LOCALE = x.locale || void 0, window.EVO_VERBOSE = function() {
                return !1
            }, window.EVO_VERBOSE_ENABLE = function() {
                window.EVO_VERBOSE() || (document.cookie = "verbose=true; path=/", window.EVO_VERBOSE = function(s, V, x, _) {
                    if (!s) return !0;
                    const n = document.getElementById("verbose-log") || document.body;
                    if (!n) return !0;
                    let h = null,
                        m = !1;
                    if (x && (h = n.querySelector(`[data-key="${x}"]`)), h) {
                        const s = h.getAttribute("data-timer");
                        s && window.clearTimeout(parseFloat(s))
                    } else h = document.createElement("div"), x && h.setAttribute("data-key", x), m = !0;
                    if (h.textContent = s, h.style.color = ["", "#ffc", "#fcc"][V || 0], _) {
                        const s = window.setTimeout((() => {
                            h.parentNode === n && n.removeChild(h)
                        }), _);
                        h.setAttribute("data-timer", s.toString())
                    }
                    return m && (n.appendChild(h), n.scrollTop = n.offsetHeight), !0
                }, window.addEventListener("error", n, !0))
            }, window.EVO_VERBOSE_DISABLE = function() {
                document.cookie = "verbose=false; path=/", window.EVO_VERBOSE = function() {
                    return !1
                }, window.removeEventListener("error", n, !0)
            };
            const _ = window.location.href.indexOf("verbose=") > -1;

            function n(s) {
                var V;
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                let x = (null === (V = s.error) || void 0 === V ? void 0 : V.stack) || s.message;
                s.filename && (x += ` ${s.filename}`), window.EVO_VERBOSE(x, 2, "", 1e4)
            }("true" === x.verbose || _) && window.EVO_VERBOSE_ENABLE(), window.addEventListener("unhandledrejection", (s => {
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                const V = s.reason;
                let x = `${V}`;
                const _ = V instanceof Error ? V.stack : "";
                (null == V ? void 0 : V.name) && -1 === x.indexOf(V.name) && (x += ` ${V.name}`), (null == V ? void 0 : V.message) && -1 === x.indexOf(V.message) && (x += ` ${V.message}`);
                const n = `Unhandled promise rejection, reason: ${x}`,
                    h = new Error(n),
                    m = s.promise.__stackTraceError,
                    U = m ? m.stack.substr(7).replace(/\\n.*\\n/, "\\n") : "";
                h.stack = `${n}\n${U}\n${_}`, window.EVO_VERBOSE(n, 2), "undefined" != typeof Sentry && Sentry.captureException(h)
            })), window.EVO_VERBOSE("6.20240625.71558.42417-629900b49f"), window.EVO_CDN && window.EVO_VERBOSE(`cdn: ${window.EVO_CDN}`), window.EVO_POPUP = function(s, V) {
                const x = document.getElementById("loader-popup"),
                    _ = n("div", n("label", s));

                function n(s, V) {
                    const x = document.createElement(s);
                    return x.appendChild(function(s) {
                        return "undefined" != typeof Node ? s instanceof Node : "object" == typeof s
                    }(V) ? V : document.createTextNode(V)), x
                }
                null == V || V.forEach((function(s) {
                    const V = n("button", s.content);
                    V.onclick = function() {
                        var V;
                        null === (V = s.callback) || void 0 === V || V.call(s), x.removeChild(_)
                    }, _.appendChild(V)
                })), -1 === x.innerHTML.indexOf(_.outerHTML) && x.appendChild(_)
            }
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const B = "service.worker.9081bd6f.js";

            function X(X) {
                return !X.active || !X.active.scriptURL.endsWith(B)
            }

            function R(B) {
                "undefined" != typeof Sentry && Sentry.captureException(B)
            }(async function() {
                if (navigator.cookieEnabled) try {
                    await async function() {
                        if (!navigator.serviceWorker) return;
                        const i = await navigator.serviceWorker.getRegistrations();
                        let J = !1;
                        for (const B of i) X(B) ? await B.unregister() : J = !0;
                        J || await navigator.serviceWorker.register(B), navigator.serviceWorker.addEventListener("message", (B => {
                            if ("processing-failed" === B.data.type) {
                                const X = new Error(B.data.message);
                                X.stack = B.data.stack, R(X)
                            }
                        }))
                    }()
                } catch (B) {
                    R(B), console.error(B)
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
        var Sentry = function($) {
            var b = {};

            function p() {
                return "undefined" != typeof window ? window : "undefined" != typeof self ? self : b
            }

            function A($, b, A) {
                var k = A || p(),
                    Y = k.__SENTRY__ = k.__SENTRY__ || {};
                return Y[$] || (Y[$] = b())
            }
            var k = Object.prototype.toString;

            function Y($) {
                switch (k.call($)) {
                    case "[object Error]":
                    case "[object Exception]":
                    case "[object DOMException]":
                        return !0;
                    default:
                        return Z($, Error)
                }
            }

            function w($, b) {
                return k.call($) === `[object ${b}]`
            }

            function j($) {
                return w($, "ErrorEvent")
            }

            function n($) {
                return w($, "DOMError")
            }

            function v($) {
                return w($, "String")
            }

            function c($) {
                return null === $ || "object" != typeof $ && "function" != typeof $
            }

            function B($) {
                return w($, "Object")
            }

            function X($) {
                return "undefined" != typeof Event && Z($, Event)
            }

            function y($) {
                return Boolean($ && $.then && "function" == typeof $.then)
            }

            function Z($, b) {
                try {
                    return $ instanceof b
                } catch ($) {
                    return !1
                }
            }

            function H($, b) {
                try {
                    let A = $;
                    var p = [];
                    let k, Y = 0,
                        w = 0;
                    for (; A && Y++ < 5 && (k = R(A, b), !("html" === k || Y > 1 && w + 3 * p.length + k.length >= 80));) p.push(k), w += k.length, A = A.parentNode;
                    return p.reverse().join(" > ")
                } catch ($) {
                    return "<unknown>"
                }
            }

            function R($, b) {
                var p = $,
                    A = [];
                let k, Y, w, j, n;
                if (!p || !p.tagName) return "";
                A.push(p.tagName.toLowerCase());
                var c = b && b.length ? b.filter(($ => p.getAttribute($))).map(($ => [$, p.getAttribute($)])) : null;
                if (c && c.length) c.forEach(($ => {
                    A.push(`[${$[0]}="${$[1]}"]`)
                }));
                else if (p.id && A.push(`#${p.id}`), k = p.className, k && v(k))
                    for (Y = k.split(/\s+/), n = 0; n < Y.length; n++) A.push(`.${Y[n]}`);
                var B = ["type", "name", "title", "alt"];
                for (n = 0; n < B.length; n++) w = B[n], j = p.getAttribute(w), j && A.push(`[${w}="${j}"]`);
                return A.join("")
            }
            class Q extends Error {
                constructor($) {
                    super($), this.message = $, this.name = new.target.prototype.constructor.name, Object.setPrototypeOf(this, new.target.prototype)
                }
            }
            var l = /^(?:(\w+):)\/\/(?:(\w+)(?::(\w+))?@)([\w.-]+)(?::(\d+))?\/(.+)/;

            function K($, b = !1) {
                const {
                    host: p,
                    path: A,
                    pass: k,
                    port: Y,
                    projectId: w,
                    protocol: j,
                    publicKey: n
                } = $;
                return `${j}://${n}${b&&k?`:${k}`:""}@${p}${Y?`:${Y}`:""}/${A?`${A}/`:A}${w}`
            }

            function M($) {
                return {
                    protocol: $.protocol,
                    publicKey: $.publicKey || "",
                    pass: $.pass || "",
                    host: $.host,
                    port: $.port || "",
                    path: $.path || "",
                    projectId: $.projectId
                }
            }

            function u($) {
                return "string" == typeof $ ? function($) {
                    var b = l.exec($);
                    if (!b) throw new Q(`Invalid Sentry Dsn: ${$}`);
                    const [p, A, k = "", Y, w = "", j] = b.slice(1);
                    let n = "",
                        v = j;
                    var c = v.split("/");
                    if (c.length > 1 && (n = c.slice(0, -1).join("/"), v = c.pop()), v) {
                        var B = v.match(/^\d+/);
                        B && (v = B[0])
                    }
                    return M({
                        host: Y,
                        pass: k,
                        path: n,
                        projectId: v,
                        port: w,
                        protocol: p,
                        publicKey: A
                    })
                }($) : M($)
            }
            var V, f = ["debug", "info", "warn", "error", "log", "assert", "trace"];

            function S($, b = 0) {
                return "string" != typeof $ || 0 === b || $.length <= b ? $ : `${$.substr(0,b)}...`
            }

            function T($, b) {
                if (!Array.isArray($)) return "";
                var p = [];
                for (let b = 0; b < $.length; b++) {
                    var A = $[b];
                    try {
                        p.push(String(A))
                    } catch ($) {
                        p.push("[value cannot be serialized]")
                    }
                }
                return p.join(b)
            }

            function _($, b) {
                return !!v($) && (w(b, "RegExp") ? b.test($) : "string" == typeof b && -1 !== $.indexOf(b))
            }

            function i($, b, p) {
                if (b in $) {
                    var A = $[b],
                        k = p(A);
                    if ("function" == typeof k) try {
                        r(k, A)
                    } catch ($) {}
                    $[b] = k
                }
            }

            function L($, b, p) {
                Object.defineProperty($, b, {
                    value: p,
                    writable: !0,
                    configurable: !0
                })
            }

            function r($, b) {
                var p = b.prototype || {};
                $.prototype = b.prototype = p, L($, "__sentry_original__", b)
            }

            function I($) {
                return $.__sentry_original__
            }

            function P($) {
                if (Y($)) return {
                    message: $.message,
                    name: $.name,
                    stack: $.stack,
                    ...N($)
                };
                if (X($)) {
                    var b = {
                        type: $.type,
                        target: D($.target),
                        currentTarget: D($.currentTarget),
                        ...N($)
                    };
                    return "undefined" != typeof CustomEvent && Z($, CustomEvent) && (b.detail = $.detail), b
                }
                return $
            }

            function D($) {
                try {
                    return "undefined" != typeof Element && Z($, Element) ? H($) : Object.prototype.toString.call($)
                } catch ($) {
                    return "<unknown>"
                }
            }

            function N($) {
                if ("object" == typeof $ && null !== $) {
                    var b = {};
                    for (var p in $) Object.prototype.hasOwnProperty.call($, p) && (b[p] = $[p]);
                    return b
                }
                return {}
            }

            function C($, b = 40) {
                var p = Object.keys(P($));
                if (p.sort(), !p.length) return "[object has no keys]";
                if (p[0].length >= b) return S(p[0], b);
                for (let $ = p.length; $ > 0; $--) {
                    var A = p.slice(0, $).join(", ");
                    if (!(A.length > b)) return $ === p.length ? A : S(A, b)
                }
                return ""
            }

            function s($) {
                return g($, new Map)
            }

            function g($, b) {
                if (B($)) {
                    if (void 0 !== (k = b.get($))) return k;
                    var p = {};
                    for (var A of (b.set($, p), Object.keys($))) void 0 !== $[A] && (p[A] = g($[A], b));
                    return p
                }
                var k;
                return Array.isArray($) ? void 0 !== (k = b.get($)) ? k : (p = [], b.set($, p), $.forEach(($ => {
                    p.push(g($, b))
                })), p) : $
            }

            function e(...$) {
                var b = $.sort((($, b) => $[0] - b[0])).map(($ => $[1]));
                return ($, p = 0) => {
                    var A = [];
                    for (var k of $.split("\n").slice(p))
                        for (var Y of b) {
                            var w = Y(k);
                            if (w) {
                                A.push(w);
                                break
                            }
                        }
                    return function($) {
                        if (!$.length) return [];
                        let b = $;
                        var p = b[0].function || "",
                            A = b[b.length - 1].function || "";
                        return -1 === p.indexOf("captureMessage") && -1 === p.indexOf("captureException") || (b = b.slice(1)), -1 !== A.indexOf("sentryWrapped") && (b = b.slice(0, -1)), b.slice(0, 50).map(($ => ({ ...$,
                            filename: $.filename || b[0].filename,
                            function: $.function || "?"
                        }))).reverse()
                    }(A)
                }
            }
            V = {
                enable: () => {},
                disable: () => {}
            }, f.forEach(($ => {
                V[$] = () => {}
            }));
            var O = "<anonymous>";

            function G($) {
                try {
                    return $ && "function" == typeof $ && $.name || O
                } catch ($) {
                    return O
                }
            }

            function t() {
                if (!("fetch" in p())) return !1;
                try {
                    return new Headers, new Request(""), new Response, !0
                } catch ($) {
                    return !1
                }
            }

            function o($) {
                return $ && /^function fetch\(\)\s+\{\s+\[native code\]\s+\}$/.test($.toString())
            }
            var d = p(),
                E = {},
                W = {};

            function a($, b) {
                E[$] = E[$] || [], E[$].push(b),
                    function($) {
                        if (!W[$]) switch (W[$] = !0, $) {
                            case "console":
                                "console" in d && f.forEach((function($) {
                                    $ in d.console && i(d.console, $, (function(b) {
                                        return function(...p) {
                                            z("console", {
                                                args: p,
                                                level: $
                                            }), b && b.apply(d.console, p)
                                        }
                                    }))
                                }));
                                break;
                            case "dom":
                                ! function() {
                                    if ("document" in d) {
                                        var $ = z.bind(null, "dom"),
                                            b = x($, !0);
                                        d.document.addEventListener("click", b, !1), d.document.addEventListener("keypress", b, !1), ["EventTarget", "Node"].forEach((b => {
                                            var p = d[b] && d[b].prototype;
                                            p && p.hasOwnProperty && p.hasOwnProperty("addEventListener") && (i(p, "addEventListener", (function(b) {
                                                return function(p, A, k) {
                                                    if ("click" === p || "keypress" == p) try {
                                                        var Y = this.__sentry_instrumentation_handlers__ = this.__sentry_instrumentation_handlers__ || {},
                                                            w = Y[p] = Y[p] || {
                                                                refCount: 0
                                                            };
                                                        if (!w.handler) {
                                                            var j = x($);
                                                            w.handler = j, b.call(this, p, j, k)
                                                        }
                                                        w.refCount += 1
                                                    } catch ($) {}
                                                    return b.call(this, p, A, k)
                                                }
                                            })), i(p, "removeEventListener", (function($) {
                                                return function(b, p, A) {
                                                    if ("click" === b || "keypress" == b) try {
                                                        var k = this.__sentry_instrumentation_handlers__ || {},
                                                            Y = k[b];
                                                        Y && (Y.refCount -= 1, Y.refCount <= 0 && ($.call(this, b, Y.handler, A), Y.handler = void 0, delete k[b]), 0 === Object.keys(k).length && delete this.__sentry_instrumentation_handlers__)
                                                    } catch ($) {}
                                                    return $.call(this, b, p, A)
                                                }
                                            })))
                                        }))
                                    }
                                }();
                                break;
                            case "xhr":
                                ! function() {
                                    if ("XMLHttpRequest" in d) {
                                        var $ = XMLHttpRequest.prototype;
                                        i($, "open", (function($) {
                                            return function(...b) {
                                                var p = this,
                                                    A = b[1],
                                                    k = p.__sentry_xhr__ = {
                                                        method: v(b[0]) ? b[0].toUpperCase() : b[0],
                                                        url: b[1]
                                                    };
                                                v(A) && "POST" === k.method && A.match(/sentry_key/) && (p.__sentry_own_request__ = !0);
                                                var Y = function() {
                                                    if (4 === p.readyState) {
                                                        try {
                                                            k.status_code = p.status
                                                        } catch ($) {}
                                                        z("xhr", {
                                                            args: b,
                                                            endTimestamp: Date.now(),
                                                            startTimestamp: Date.now(),
                                                            xhr: p
                                                        })
                                                    }
                                                };
                                                return "onreadystatechange" in p && "function" == typeof p.onreadystatechange ? i(p, "onreadystatechange", (function($) {
                                                    return function(...b) {
                                                        return Y(), $.apply(p, b)
                                                    }
                                                })) : p.addEventListener("readystatechange", Y), $.apply(p, b)
                                            }
                                        })), i($, "send", (function($) {
                                            return function(...b) {
                                                return this.__sentry_xhr__ && void 0 !== b[0] && (this.__sentry_xhr__.body = b[0]), z("xhr", {
                                                    args: b,
                                                    startTimestamp: Date.now(),
                                                    xhr: this
                                                }), $.apply(this, b)
                                            }
                                        }))
                                    }
                                }();
                                break;
                            case "fetch":
                                (function() {
                                    if (!t()) return !1;
                                    var $ = p();
                                    if (o($.fetch)) return !0;
                                    let b = !1;
                                    var A = $.document;
                                    if (A && "function" == typeof A.createElement) try {
                                        var k = A.createElement("iframe");
                                        k.hidden = !0, A.head.appendChild(k), k.contentWindow && k.contentWindow.fetch && (b = o(k.contentWindow.fetch)), A.head.removeChild(k)
                                    } catch ($) {}
                                    return b
                                })() && i(d, "fetch", (function($) {
                                    return function(...b) {
                                        var p = {
                                            args: b,
                                            fetchData: {
                                                method: F(b),
                                                url: U(b)
                                            },
                                            startTimestamp: Date.now()
                                        };
                                        return z("fetch", { ...p
                                        }), $.apply(d, b).then(($ => (z("fetch", { ...p,
                                            endTimestamp: Date.now(),
                                            response: $
                                        }), $)), ($ => {
                                            throw z("fetch", { ...p,
                                                endTimestamp: Date.now(),
                                                error: $
                                            }), $
                                        }))
                                    }
                                }));
                                break;
                            case "history":
                                ! function() {
                                    if (function() {
                                            var $ = p(),
                                                b = $.chrome,
                                                A = b && b.app && b.app.runtime,
                                                k = "history" in $ && !!$.history.pushState && !!$.history.replaceState;
                                            return !A && k
                                        }()) {
                                        var $ = d.onpopstate;
                                        d.onpopstate = function(...b) {
                                            var p = d.location.href,
                                                A = q;
                                            if (q = p, z("history", {
                                                    from: A,
                                                    to: p
                                                }), $) try {
                                                return $.apply(this, b)
                                            } catch ($) {}
                                        }, i(d.history, "pushState", b), i(d.history, "replaceState", b)
                                    }

                                    function b($) {
                                        return function(...b) {
                                            var p = b.length > 2 ? b[2] : void 0;
                                            if (p) {
                                                var A = q,
                                                    k = String(p);
                                                q = k, z("history", {
                                                    from: A,
                                                    to: k
                                                })
                                            }
                                            return $.apply(this, b)
                                        }
                                    }
                                }();
                                break;
                            case "error":
                                h = d.onerror, d.onerror = function($, b, p, A, k) {
                                    return z("error", {
                                        column: A,
                                        error: k,
                                        line: p,
                                        msg: $,
                                        url: b
                                    }), !!h && h.apply(this, arguments)
                                };
                                break;
                            case "unhandledrejection":
                                $$ = d.onunhandledrejection, d.onunhandledrejection = function($) {
                                    return z("unhandledrejection", $), !$$ || $$.apply(this, arguments)
                                }
                        }
                    }($)
            }

            function z($, b) {
                if ($ && E[$])
                    for (var p of E[$] || []) try {
                        p(b)
                    } catch ($) {}
            }

            function F($ = []) {
                return "Request" in d && Z($[0], Request) && $[0].method ? String($[0].method).toUpperCase() : $[1] && $[1].method ? String($[1].method).toUpperCase() : "GET"
            }

            function U($ = []) {
                return "string" == typeof $[0] ? $[0] : "Request" in d && Z($[0], Request) ? $[0].url : String($[0])
            }
            let q, J, m;

            function x($, b = !1) {
                return p => {
                    if (p && m !== p && ! function($) {
                            if ("keypress" !== $.type) return !1;
                            try {
                                var b = $.target;
                                if (!b || !b.tagName) return !0;
                                if ("INPUT" === b.tagName || "TEXTAREA" === b.tagName || b.isContentEditable) return !1
                            } catch ($) {}
                            return !0
                        }(p)) {
                        var A = "keypress" === p.type ? "input" : p.type;
                        (void 0 === J || function($, b) {
                            if (!$) return !0;
                            if ($.type !== b.type) return !0;
                            try {
                                if ($.target !== b.target) return !0
                            } catch ($) {}
                            return !1
                        }(m, p)) && ($({
                            event: p,
                            name: A,
                            global: b
                        }), m = p), clearTimeout(J), J = d.setTimeout((() => {
                            J = void 0
                        }), 1e3)
                    }
                }
            }
            let h = null,
                $$ = null;

            function b$() {
                var $ = p(),
                    b = $.crypto || $.msCrypto;
                if (void 0 !== b && b.getRandomValues) {
                    var A = new Uint16Array(8);
                    b.getRandomValues(A), A[3] = 4095 & A[3] | 16384, A[4] = 16383 & A[4] | 32768;
                    var k = $ => {
                        let b = $.toString(16);
                        for (; b.length < 4;) b = `0${b}`;
                        return b
                    };
                    return k(A[0]) + k(A[1]) + k(A[2]) + k(A[3]) + k(A[4]) + k(A[5]) + k(A[6]) + k(A[7])
                }
                return "xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx".replace(/[xy]/g, ($ => {
                    var b = 16 * Math.random() | 0;
                    return ("x" === $ ? b : 3 & b | 8).toString(16)
                }))
            }

            function p$($) {
                if (!$) return {};
                var b = $.match(/^(([^:/?#]+):)?(\/\/([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/);
                if (!b) return {};
                var p = b[6] || "",
                    A = b[8] || "";
                return {
                    host: b[4],
                    path: b[5],
                    protocol: b[2],
                    relative: b[5] + p + A
                }
            }

            function A$($) {
                return $.exception && $.exception.values ? $.exception.values[0] : void 0
            }

            function k$($) {
                const {
                    message: b,
                    event_id: p
                } = $;
                if (b) return b;
                var A = A$($);
                return A ? A.type && A.value ? `${A.type}: ${A.value}` : A.type || A.value || p || "<unknown>" : p || "<unknown>"
            }

            function Y$($, b, p) {
                var A = $.exception = $.exception || {},
                    k = A.values = A.values || [],
                    Y = k[0] = k[0] || {};
                Y.value || (Y.value = b || ""), Y.type || (Y.type = p || "Error")
            }

            function w$($, b) {
                var p = A$($);
                if (p) {
                    var A = p.mechanism;
                    if (p.mechanism = {
                            type: "generic",
                            handled: !0,
                            ...A,
                            ...b
                        }, b && "data" in b) {
                        var k = { ...A && A.data,
                            ...b.data
                        };
                        p.mechanism.data = k
                    }
                }
            }

            function j$($) {
                if ($ && $.__sentry_captured__) return !0;
                try {
                    L($, "__sentry_captured__", !0)
                } catch ($) {}
                return !1
            }

            function n$($, b = 1 / 0, p = 1 / 0) {
                try {
                    return c$("", $, b, p)
                } catch ($) {
                    return {
                        ERROR: `**non-serializable** (${$})`
                    }
                }
            }

            function v$($, b = 3, p = 102400) {
                var A, k = n$($, b);
                return A = k,
                    function($) {
                        return ~-encodeURI($).split(/%..|./).length
                    }(JSON.stringify(A)) > p ? v$($, b - 1, p) : k
            }

            function c$($, b, p = 1 / 0, A = 1 / 0, k = function() {
                var $ = "function" == typeof WeakSet,
                    b = $ ? new WeakSet : [];
                return [function(p) {
                    if ($) return !!b.has(p) || (b.add(p), !1);
                    for (let $ = 0; $ < b.length; $++)
                        if (b[$] === p) return !0;
                    return b.push(p), !1
                }, function(p) {
                    if ($) b.delete(p);
                    else
                        for (let $ = 0; $ < b.length; $++)
                            if (b[$] === p) {
                                b.splice($, 1);
                                break
                            }
                }]
            }()) {
                const [Y, w] = k;
                if (null === b || ["number", "boolean", "string"].includes(typeof b) && ("number" != typeof(j = b) || j == j)) return b;
                var j, n = function($, b) {
                    try {
                        return "domain" === $ && b && "object" == typeof b && b.t ? "[Domain]" : "domainEmitter" === $ ? "[DomainEmitter]" : "undefined" != typeof global && b === global ? "[Global]" : "undefined" != typeof window && b === window ? "[Window]" : "undefined" != typeof document && b === document ? "[Document]" : function($) {
                            return B($) && "nativeEvent" in $ && "preventDefault" in $ && "stopPropagation" in $
                        }(b) ? "[SyntheticEvent]" : "number" == typeof b && b != b ? "[NaN]" : void 0 === b ? "[undefined]" : "function" == typeof b ? `[Function: ${G(b)}]` : "symbol" == typeof b ? `[${String(b)}]` : "bigint" == typeof b ? `[BigInt: ${String(b)}]` : `[object ${Object.getPrototypeOf(b).constructor.name}]`
                    } catch ($) {
                        return `**non-serializable** (${$})`
                    }
                }($, b);
                if (!n.startsWith("[object ")) return n;
                if (b.__sentry_skip_normalization__) return b;
                if (0 === p) return n.replace("object ", "");
                if (Y(b)) return "[Circular ~]";
                var v = b;
                if (v && "function" == typeof v.toJSON) try {
                    return c$("", v.toJSON(), p - 1, A, k)
                } catch ($) {}
                var c = Array.isArray(b) ? [] : {};
                let X = 0;
                var y = P(b);
                for (var Z in y)
                    if (Object.prototype.hasOwnProperty.call(y, Z)) {
                        if (X >= A) {
                            c[Z] = "[MaxProperties ~]";
                            break
                        }
                        var H = y[Z];
                        c[Z] = c$(Z, H, p - 1, A, k), X += 1
                    }
                return w(b), c
            }
            var B$;

            function X$($) {
                return new Z$((b => {
                    b($)
                }))
            }

            function y$($) {
                return new Z$(((b, p) => {
                    p($)
                }))
            }! function($) {
                $[$.PENDING = 0] = "PENDING", $[$.RESOLVED = 1] = "RESOLVED", $[$.REJECTED = 2] = "REJECTED"
            }(B$ || (B$ = {}));
            class Z$ {
                __init() {
                    this.i = B$.PENDING
                }
                __init2() {
                    this.o = []
                }
                constructor($) {
                    Z$.prototype.__init.call(this), Z$.prototype.__init2.call(this), Z$.prototype.__init3.call(this), Z$.prototype.__init4.call(this), Z$.prototype.__init5.call(this), Z$.prototype.__init6.call(this);
                    try {
                        $(this.u, this.h)
                    } catch ($) {
                        this.h($)
                    }
                }
                then($, b) {
                    return new Z$(((p, A) => {
                        this.o.push([!1, b => {
                            if ($) try {
                                p($(b))
                            } catch ($) {
                                A($)
                            } else p(b)
                        }, $ => {
                            if (b) try {
                                p(b($))
                            } catch ($) {
                                A($)
                            } else A($)
                        }]), this.l()
                    }))
                } catch ($) {
                    return this.then(($ => $), $)
                } finally($) {
                    return new Z$(((b, p) => {
                        let A, k;
                        return this.then((b => {
                            k = !1, A = b, $ && $()
                        }), (b => {
                            k = !0, A = b, $ && $()
                        })).then((() => {
                            k ? p(A) : b(A)
                        }))
                    }))
                }
                __init3() {
                    this.u = $ => {
                        this.v(B$.RESOLVED, $)
                    }
                }
                __init4() {
                    this.h = $ => {
                        this.v(B$.REJECTED, $)
                    }
                }
                __init5() {
                    this.v = ($, b) => {
                        this.i === B$.PENDING && (y(b) ? b.then(this.u, this.h) : (this.i = $, this.p = b, this.l()))
                    }
                }
                __init6() {
                    this.l = () => {
                        if (this.i !== B$.PENDING) {
                            var $ = this.o.slice();
                            this.o = [], $.forEach(($ => {
                                $[0] || (this.i === B$.RESOLVED && $[1](this.p), this.i === B$.REJECTED && $[2](this.p), $[0] = !0)
                            }))
                        }
                    }
                }
            }
            var H$ = ["fatal", "error", "warning", "log", "info", "debug"],
                R$ = {
                    nowSeconds: () => Date.now() / 1e3
                },
                Q$ = function() {
                    const {
                        performance: $
                    } = p();
                    if ($ && $.now) return {
                        now: () => $.now(),
                        timeOrigin: Date.now() - $.now()
                    }
                }(),
                l$ = void 0 === Q$ ? R$ : {
                    nowSeconds: () => (Q$.timeOrigin + Q$.now()) / 1e3
                },
                K$ = R$.nowSeconds.bind(R$),
                M$ = l$.nowSeconds.bind(l$);

            function u$($, b = []) {
                return [$, b]
            }

            function V$($, b) {
                const [p, A] = $;
                return [p, [...A, b]]
            }

            function f$($, b) {
                $[1].forEach(($ => {
                    var p = $[0].type;
                    b($, p)
                }))
            }

            function S$($, b) {
                return (b || new TextEncoder).encode($)
            }

            function T$($, b) {
                const [p, A] = $;
                let k = JSON.stringify(p);

                function Y($) {
                    "string" == typeof k ? k = "string" == typeof $ ? k + $ : [S$(k, b), $] : k.push("string" == typeof $ ? S$($, b) : $)
                }
                for (var w of A) {
                    const [$, b] = w;
                    Y(`\n${JSON.stringify($)}\n`), Y("string" == typeof b || b instanceof Uint8Array ? b : JSON.stringify(b))
                }
                return "string" == typeof k ? k : function($) {
                    var b = $.reduce((($, b) => $ + b.length), 0),
                        p = new Uint8Array(b);
                    let A = 0;
                    for (var k of $) p.set(k, A), A += k.length;
                    return p
                }(k)
            }

            function _$($, b) {
                var p = "string" == typeof $.data ? S$($.data, b) : $.data;
                return [s({
                    type: "attachment",
                    length: p.length,
                    filename: $.filename,
                    content_type: $.contentType,
                    attachment_type: $.attachmentType
                }), p]
            }(() => {
                const {
                    performance: $
                } = p();
                if ($ && $.now) {
                    var b = 36e5,
                        A = $.now(),
                        k = Date.now(),
                        Y = $.timeOrigin ? Math.abs($.timeOrigin + A - k) : b,
                        w = Y < b,
                        j = $.timing && $.timing.navigationStart,
                        n = "number" == typeof j ? Math.abs(j + A - k) : b;
                    (w || n < b) && Y <= n && $.timeOrigin
                }
            })();
            var i$ = {
                session: "session",
                sessions: "session",
                attachment: "attachment",
                transaction: "transaction",
                event: "error",
                client_report: "internal",
                user_report: "default"
            };

            function L$($) {
                return i$[$]
            }

            function r$($, b = {}) {
                if (b.user && (!$.ipAddress && b.user.ip_address && ($.ipAddress = b.user.ip_address), $.did || b.did || ($.did = b.user.id || b.user.email || b.user.username)), $.timestamp = b.timestamp || M$(), b.ignoreDuration && ($.ignoreDuration = b.ignoreDuration), b.sid && ($.sid = 32 === b.sid.length ? b.sid : b$()), void 0 !== b.init && ($.init = b.init), !$.did && b.did && ($.did = `${b.did}`), "number" == typeof b.started && ($.started = b.started), $.ignoreDuration) $.duration = void 0;
                else if ("number" == typeof b.duration) $.duration = b.duration;
                else {
                    var p = $.timestamp - $.started;
                    $.duration = p >= 0 ? p : 0
                }
                b.release && ($.release = b.release), b.environment && ($.environment = b.environment), !$.ipAddress && b.ipAddress && ($.ipAddress = b.ipAddress), !$.userAgent && b.userAgent && ($.userAgent = b.userAgent), "number" == typeof b.errors && ($.errors = b.errors), b.status && ($.status = b.status)
            }
            class I$ {
                constructor() {
                    this.m = !1, this.g = [], this._ = [], this.S = [], this.k = [], this.O = {}, this.j = {}, this.T = {}, this.D = {}, this.R = {}
                }
                static clone($) {
                    var b = new I$;
                    return $ && (b.S = [...$.S], b.j = { ...$.j
                    }, b.T = { ...$.T
                    }, b.D = { ...$.D
                    }, b.O = $.O, b.I = $.I, b.M = $.M, b.C = $.C, b.N = $.N, b.A = $.A, b._ = [...$._], b.L = $.L, b.k = [...$.k]), b
                }
                addScopeListener($) {
                    this.g.push($)
                }
                addEventProcessor($) {
                    return this._.push($), this
                }
                setUser($) {
                    return this.O = $ || {}, this.C && r$(this.C, {
                        user: $
                    }), this.U(), this
                }
                getUser() {
                    return this.O
                }
                getRequestSession() {
                    return this.L
                }
                setRequestSession($) {
                    return this.L = $, this
                }
                setTags($) {
                    return this.j = { ...this.j,
                        ...$
                    }, this.U(), this
                }
                setTag($, b) {
                    return this.j = { ...this.j,
                        [$]: b
                    }, this.U(), this
                }
                setExtras($) {
                    return this.T = { ...this.T,
                        ...$
                    }, this.U(), this
                }
                setExtra($, b) {
                    return this.T = { ...this.T,
                        [$]: b
                    }, this.U(), this
                }
                setFingerprint($) {
                    return this.A = $, this.U(), this
                }
                setLevel($) {
                    return this.I = $, this.U(), this
                }
                setTransactionName($) {
                    return this.N = $, this.U(), this
                }
                setContext($, b) {
                    return null === b ? delete this.D[$] : this.D = { ...this.D,
                        [$]: b
                    }, this.U(), this
                }
                setSpan($) {
                    return this.M = $, this.U(), this
                }
                getSpan() {
                    return this.M
                }
                getTransaction() {
                    var $ = this.getSpan();
                    return $ && $.transaction
                }
                setSession($) {
                    return $ ? this.C = $ : delete this.C, this.U(), this
                }
                getSession() {
                    return this.C
                }
                update($) {
                    if (!$) return this;
                    if ("function" == typeof $) {
                        var b = $(this);
                        return b instanceof I$ ? b : this
                    }
                    return $ instanceof I$ ? (this.j = { ...this.j,
                        ...$.j
                    }, this.T = { ...this.T,
                        ...$.T
                    }, this.D = { ...this.D,
                        ...$.D
                    }, $.O && Object.keys($.O).length && (this.O = $.O), $.I && (this.I = $.I), $.A && (this.A = $.A), $.L && (this.L = $.L)) : B($) && (this.j = { ...this.j,
                        ...$.tags
                    }, this.T = { ...this.T,
                        ...$.extra
                    }, this.D = { ...this.D,
                        ...$.contexts
                    }, $.user && (this.O = $.user), $.level && (this.I = $.level), $.fingerprint && (this.A = $.fingerprint), $.requestSession && (this.L = $.requestSession)), this
                }
                clear() {
                    return this.S = [], this.j = {}, this.T = {}, this.O = {}, this.D = {}, this.I = void 0, this.N = void 0, this.A = void 0, this.L = void 0, this.M = void 0, this.C = void 0, this.U(), this.k = [], this
                }
                addBreadcrumb($, b) {
                    var p = "number" == typeof b ? Math.min(b, 100) : 100;
                    if (p <= 0) return this;
                    var A = {
                        timestamp: K$(),
                        ...$
                    };
                    return this.S = [...this.S, A].slice(-p), this.U(), this
                }
                clearBreadcrumbs() {
                    return this.S = [], this.U(), this
                }
                addAttachment($) {
                    return this.k.push($), this
                }
                getAttachments() {
                    return this.k
                }
                clearAttachments() {
                    return this.k = [], this
                }
                applyToEvent($, b = {}) {
                    if (this.T && Object.keys(this.T).length && ($.extra = { ...this.T,
                            ...$.extra
                        }), this.j && Object.keys(this.j).length && ($.tags = { ...this.j,
                            ...$.tags
                        }), this.O && Object.keys(this.O).length && ($.user = { ...this.O,
                            ...$.user
                        }), this.D && Object.keys(this.D).length && ($.contexts = { ...this.D,
                            ...$.contexts
                        }), this.I && ($.level = this.I), this.N && ($.transaction = this.N), this.M) {
                        $.contexts = {
                            trace: this.M.getTraceContext(),
                            ...$.contexts
                        };
                        var p = this.M.transaction && this.M.transaction.name;
                        p && ($.tags = {
                            transaction: p,
                            ...$.tags
                        })
                    }
                    return this.q($), $.breadcrumbs = [...$.breadcrumbs || [], ...this.S], $.breadcrumbs = $.breadcrumbs.length > 0 ? $.breadcrumbs : void 0, $.sdkProcessingMetadata = { ...$.sdkProcessingMetadata,
                        ...this.R
                    }, this.P([...P$(), ...this._], $, b)
                }
                setSDKProcessingMetadata($) {
                    return this.R = { ...this.R,
                        ...$
                    }, this
                }
                P($, b, p, A = 0) {
                    return new Z$(((k, Y) => {
                        var w = $[A];
                        if (null === b || "function" != typeof w) k(b);
                        else {
                            var j = w({ ...b
                            }, p);
                            y(j) ? j.then((b => this.P($, b, p, A + 1).then(k))).then(null, Y) : this.P($, j, p, A + 1).then(k).then(null, Y)
                        }
                    }))
                }
                U() {
                    this.m || (this.m = !0, this.g.forEach(($ => {
                        $(this)
                    })), this.m = !1)
                }
                q($) {
                    $.fingerprint = $.fingerprint ? Array.isArray($.fingerprint) ? $.fingerprint : [$.fingerprint] : [], this.A && ($.fingerprint = $.fingerprint.concat(this.A)), $.fingerprint && !$.fingerprint.length && delete $.fingerprint
                }
            }

            function P$() {
                return A("globalEventProcessors", (() => []))
            }

            function D$($) {
                P$().push($)
            }
            var N$ = 100;
            class C$ {
                __init() {
                    this.H = [{}]
                }
                constructor($, b = new I$, p = 4) {
                    this.F = p, C$.prototype.__init.call(this), this.getStackTop().scope = b, $ && this.bindClient($)
                }
                isOlderThan($) {
                    return this.F < $
                }
                bindClient($) {
                    this.getStackTop().client = $, $ && $.setupIntegrations && $.setupIntegrations()
                }
                pushScope() {
                    var $ = I$.clone(this.getScope());
                    return this.getStack().push({
                        client: this.getClient(),
                        scope: $
                    }), $
                }
                popScope() {
                    return !(this.getStack().length <= 1 || !this.getStack().pop())
                }
                withScope($) {
                    var b = this.pushScope();
                    try {
                        $(b)
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
                captureException($, b) {
                    var p = this.B = b && b.event_id ? b.event_id : b$(),
                        A = new Error("Sentry syntheticException");
                    return this.X(((k, Y) => {
                        k.captureException($, {
                            originalException: $,
                            syntheticException: A,
                            ...b,
                            event_id: p
                        }, Y)
                    })), p
                }
                captureMessage($, b, p) {
                    var A = this.B = p && p.event_id ? p.event_id : b$(),
                        k = new Error($);
                    return this.X(((Y, w) => {
                        Y.captureMessage($, b, {
                            originalException: $,
                            syntheticException: k,
                            ...p,
                            event_id: A
                        }, w)
                    })), A
                }
                captureEvent($, b) {
                    var p = b && b.event_id ? b.event_id : b$();
                    return "transaction" !== $.type && (this.B = p), this.X(((A, k) => {
                        A.captureEvent($, { ...b,
                            event_id: p
                        }, k)
                    })), p
                }
                lastEventId() {
                    return this.B
                }
                addBreadcrumb($, b) {
                    const {
                        scope: A,
                        client: k
                    } = this.getStackTop();
                    if (!A || !k) return;
                    const {
                        beforeBreadcrumb: Y = null,
                        maxBreadcrumbs: w = N$
                    } = k.getOptions && k.getOptions() || {};
                    if (!(w <= 0)) {
                        var j = {
                                timestamp: K$(),
                                ...$
                            },
                            n = Y ? function($) {
                                var b = p();
                                if (!("console" in b)) return $();
                                var A = b.console,
                                    k = {};
                                f.forEach(($ => {
                                    var p = A[$] && A[$].__sentry_original__;
                                    $ in b.console && p && (k[$] = A[$], A[$] = p)
                                }));
                                try {
                                    return $()
                                } finally {
                                    Object.keys(k).forEach(($ => {
                                        A[$] = k[$]
                                    }))
                                }
                            }((() => Y(j, b))) : j;
                        null !== n && A.addBreadcrumb(n, w)
                    }
                }
                setUser($) {
                    var b = this.getScope();
                    b && b.setUser($)
                }
                setTags($) {
                    var b = this.getScope();
                    b && b.setTags($)
                }
                setExtras($) {
                    var b = this.getScope();
                    b && b.setExtras($)
                }
                setTag($, b) {
                    var p = this.getScope();
                    p && p.setTag($, b)
                }
                setExtra($, b) {
                    var p = this.getScope();
                    p && p.setExtra($, b)
                }
                setContext($, b) {
                    var p = this.getScope();
                    p && p.setContext($, b)
                }
                configureScope($) {
                    const {
                        scope: b,
                        client: p
                    } = this.getStackTop();
                    b && p && $(b)
                }
                run($) {
                    var b = g$(this);
                    try {
                        $(this)
                    } finally {
                        g$(b)
                    }
                }
                getIntegration($) {
                    var b = this.getClient();
                    if (!b) return null;
                    try {
                        return b.getIntegration($)
                    } catch ($) {
                        return null
                    }
                }
                startTransaction($, b) {
                    return this.W("startTransaction", $, b)
                }
                traceHeaders() {
                    return this.W("traceHeaders")
                }
                captureSession($ = !1) {
                    if ($) return this.endSession();
                    this.J()
                }
                endSession() {
                    var $ = this.getStackTop(),
                        b = $ && $.scope,
                        p = b && b.getSession();
                    p && function($, b) {
                        let p = {};
                        "ok" === $.status && (p = {
                            status: "exited"
                        }), r$($, p)
                    }(p), this.J(), b && b.setSession()
                }
                startSession($) {
                    const {
                        scope: b,
                        client: A
                    } = this.getStackTop(), {
                        release: k,
                        environment: Y
                    } = A && A.getOptions() || {};
                    var w = p();
                    const {
                        userAgent: j
                    } = w.navigator || {};
                    var n = function($) {
                        var b = M$(),
                            p = {
                                sid: b$(),
                                init: !0,
                                timestamp: b,
                                started: b,
                                duration: 0,
                                status: "ok",
                                errors: 0,
                                ignoreDuration: !1,
                                toJSON: () => function($) {
                                    return s({
                                        sid: `${$.sid}`,
                                        init: $.init,
                                        started: new Date(1e3 * $.started).toISOString(),
                                        timestamp: new Date(1e3 * $.timestamp).toISOString(),
                                        status: $.status,
                                        errors: $.errors,
                                        did: "number" == typeof $.did || "string" == typeof $.did ? `${$.did}` : void 0,
                                        duration: $.duration,
                                        attrs: {
                                            release: $.release,
                                            environment: $.environment,
                                            ip_address: $.ipAddress,
                                            user_agent: $.userAgent
                                        }
                                    })
                                }(p)
                            };
                        return $ && r$(p, $), p
                    }({
                        release: k,
                        environment: Y,
                        ...b && {
                            user: b.getUser()
                        },
                        ...j && {
                            userAgent: j
                        },
                        ...$
                    });
                    if (b) {
                        var v = b.getSession && b.getSession();
                        v && "ok" === v.status && r$(v, {
                            status: "exited"
                        }), this.endSession(), b.setSession(n)
                    }
                    return n
                }
                shouldSendDefaultPii() {
                    var $ = this.getClient(),
                        b = $ && $.getOptions();
                    return Boolean(b && b.sendDefaultPii)
                }
                J() {
                    const {
                        scope: $,
                        client: b
                    } = this.getStackTop();
                    if ($) {
                        var p = $.getSession();
                        p && b && b.captureSession && b.captureSession(p)
                    }
                }
                X($) {
                    const {
                        scope: b,
                        client: p
                    } = this.getStackTop();
                    p && $(p, b)
                }
                W($, ...b) {
                    var p = s$().__SENTRY__;
                    if (p && p.extensions && "function" == typeof p.extensions[$]) return p.extensions[$].apply(this, b)
                }
            }

            function s$() {
                var $ = p();
                return $.__SENTRY__ = $.__SENTRY__ || {
                    extensions: {},
                    hub: void 0
                }, $
            }

            function g$($) {
                var b = s$(),
                    p = O$(b);
                return G$(b, $), p
            }

            function e$() {
                var $, b = s$();
                return ($ = b) && $.__SENTRY__ && $.__SENTRY__.hub && !O$(b).isOlderThan(4) || G$(b, new C$), O$(b)
            }

            function O$($) {
                return A("hub", (() => new C$), $)
            }

            function G$($, b) {
                return !!$ && (($.__SENTRY__ = $.__SENTRY__ || {}).hub = b, !0)
            }

            function t$($, b) {
                return e$().captureException($, {
                    captureContext: b
                })
            }

            function o$($) {
                e$().withScope($)
            }

            function d$($) {
                var b = $.protocol ? `${$.protocol}:` : "",
                    p = $.port ? `:${$.port}` : "";
                return `${b}//${$.host}${p}${$.path?`/${$.path}`:""}/api/`
            }

            function E$($, b = {}) {
                var p = "string" == typeof b ? b : b.tunnel,
                    A = "string" != typeof b && b.K ? b.K.sdk : void 0;
                return p || `${function($){return`${d$($)}${$.projectId}/envelope/`}($)}?${function($,b){return p={sentry_key:$.publicKey,sentry_version:"7",...b&&{sentry_client:`${b.name}/${b.version}`}},Object.keys(p).map(($=>`
                $ {
                    encodeURIComponent($)
                } = $ {
                    encodeURIComponent(p[$])
                }
                `)).join("&");var p}($,A)}`
            }

            function W$($) {
                if (!$ || !$.sdk) return;
                const {
                    name: b,
                    version: p
                } = $.sdk;
                return {
                    name: b,
                    version: p
                }
            }
            var a$ = [];

            function z$($) {
                return $.reduce((($, b) => ($.every(($ => b.name !== $.name)) && $.push(b), $)), [])
            }

            function F$($) {
                var b = $.defaultIntegrations && [...$.defaultIntegrations] || [],
                    p = $.integrations;
                let A = [...z$(b)];
                Array.isArray(p) ? A = [...A.filter(($ => p.every((b => b.name !== $.name)))), ...z$(p)] : "function" == typeof p && (A = p(A), A = Array.isArray(A) ? A : [A]);
                var k = A.map(($ => $.name)),
                    Y = "Debug";
                return -1 !== k.indexOf(Y) && A.push(...A.splice(k.indexOf(Y), 1)), A
            }
            class U$ {
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
                constructor($) {
                    if (U$.prototype.__init.call(this), U$.prototype.__init2.call(this), U$.prototype.__init3.call(this), U$.prototype.__init4.call(this), this.tt = $, $.dsn) {
                        this.nt = u($.dsn);
                        var b = E$(this.nt, $);
                        this.et = $.transport({
                            recordDroppedEvent: this.recordDroppedEvent.bind(this),
                            ...$.transportOptions,
                            url: b
                        })
                    }
                }
                captureException($, b, p) {
                    if (j$($)) return;
                    let A = b && b.event_id;
                    return this.rt(this.eventFromException($, b).then(($ => this.it($, b, p))).then(($ => {
                        A = $
                    }))), A
                }
                captureMessage($, b, p, A) {
                    let k = p && p.event_id;
                    var Y = c($) ? this.eventFromMessage(String($), b, p) : this.eventFromException($, p);
                    return this.rt(Y.then(($ => this.it($, p, A))).then(($ => {
                        k = $
                    }))), k
                }
                captureEvent($, b, p) {
                    if (b && b.originalException && j$(b.originalException)) return;
                    let A = b && b.event_id;
                    return this.rt(this.it($, b, p).then(($ => {
                        A = $
                    }))), A
                }
                captureSession($) {
                    this.st() && ("string" != typeof $.release || (this.sendSession($), r$($, {
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
                flush($) {
                    var b = this.et;
                    return b ? this.ot($).then((p => b.flush($).then(($ => p && $)))) : X$(!0)
                }
                close($) {
                    return this.flush($).then(($ => (this.getOptions().enabled = !1, $)))
                }
                setupIntegrations() {
                    var $, b;
                    this.st() && !this.V && (this.G = ($ = this.tt.integrations, b = {}, $.forEach(($ => {
                        b[$.name] = $, -1 === a$.indexOf($.name) && ($.setupOnce(D$, e$), a$.push($.name))
                    })), b), this.V = !0)
                }
                getIntegrationById($) {
                    return this.G[$]
                }
                getIntegration($) {
                    try {
                        return this.G[$.id] || null
                    } catch ($) {
                        return null
                    }
                }
                sendEvent($, b = {}) {
                    if (this.nt) {
                        let A = function($, b, p, A) {
                            var k = W$(p),
                                Y = $.type || "event";
                            const {
                                transactionSampling: w
                            } = $.sdkProcessingMetadata || {}, {
                                method: j,
                                rate: n
                            } = w || {};
                            ! function($, b) {
                                b && ($.sdk = $.sdk || {}, $.sdk.name = $.sdk.name || b.name, $.sdk.version = $.sdk.version || b.version, $.sdk.integrations = [...$.sdk.integrations || [], ...b.integrations || []], $.sdk.packages = [...$.sdk.packages || [], ...b.packages || []])
                            }($, p && p.sdk);
                            var v = function($, b, p, A) {
                                var k = $.sdkProcessingMetadata && $.sdkProcessingMetadata.baggage,
                                    Y = k && function($) {
                                        return $[0]
                                    }(k);
                                return {
                                    event_id: $.event_id,
                                    sent_at: (new Date).toISOString(),
                                    ...b && {
                                        sdk: b
                                    },
                                    ...!!p && {
                                        dsn: K(A)
                                    },
                                    ..."transaction" === $.type && Y && {
                                        trace: s({ ...Y
                                        })
                                    }
                                }
                            }($, k, A, b);
                            return delete $.sdkProcessingMetadata, u$(v, [
                                [{
                                    type: Y,
                                    sample_rates: [{
                                        id: j,
                                        rate: n
                                    }]
                                }, $]
                            ])
                        }($, this.nt, this.tt.K, this.tt.tunnel);
                        for (var p of b.attachments || []) A = V$(A, _$(p, this.tt.transportOptions && this.tt.transportOptions.textEncoder));
                        this.ut(A)
                    }
                }
                sendSession($) {
                    if (this.nt) {
                        var b = function($, b, p, A) {
                            var k = W$(p);
                            return u$({
                                sent_at: (new Date).toISOString(),
                                ...k && {
                                    sdk: k
                                },
                                ...!!A && {
                                    dsn: K(b)
                                }
                            }, ["aggregates" in $ ? [{
                                type: "sessions"
                            }, $] : [{
                                type: "session"
                            }, $]])
                        }($, this.nt, this.tt.K, this.tt.tunnel);
                        this.ut(b)
                    }
                }
                recordDroppedEvent($, b) {
                    if (this.tt.sendClientReports) {
                        var p = `${$}:${b}`;
                        this.Z[p] = this.Z[p] + 1 || 1
                    }
                }
                at($, b) {
                    let p = !1,
                        A = !1;
                    var k = b.exception && b.exception.values;
                    if (k)
                        for (var Y of (A = !0, k)) {
                            var w = Y.mechanism;
                            if (w && !1 === w.handled) {
                                p = !0;
                                break
                            }
                        }
                    var j = "ok" === $.status;
                    (j && 0 === $.errors || j && p) && (r$($, { ...p && {
                            status: "crashed"
                        },
                        errors: $.errors || Number(A || p)
                    }), this.captureSession($))
                }
                ot($) {
                    return new Z$((b => {
                        let p = 0;
                        var A = setInterval((() => {
                            0 == this.Y ? (clearInterval(A), b(!0)) : (p += 1, $ && p >= $ && (clearInterval(A), b(!1)))
                        }), 1)
                    }))
                }
                st() {
                    return !1 !== this.getOptions().enabled && void 0 !== this.nt
                }
                ct($, b, p) {
                    const {
                        normalizeDepth: A = 3,
                        normalizeMaxBreadth: k = 1e3
                    } = this.getOptions();
                    var Y = { ...$,
                        event_id: $.event_id || b.event_id || b$(),
                        timestamp: $.timestamp || K$()
                    };
                    this.ft(Y), this.ht(Y);
                    let w = p;
                    b.captureContext && (w = I$.clone(w).update(b.captureContext));
                    let j = X$(Y);
                    if (w) {
                        var n = [...b.attachments || [], ...w.getAttachments()];
                        n.length && (b.attachments = n), j = w.applyToEvent(Y, b)
                    }
                    return j.then(($ => "number" == typeof A && A > 0 ? this.lt($, A, k) : $))
                }
                lt($, b, p) {
                    if (!$) return null;
                    var A = { ...$,
                        ...$.breadcrumbs && {
                            breadcrumbs: $.breadcrumbs.map(($ => ({ ...$,
                                ...$.data && {
                                    data: n$($.data, b, p)
                                }
                            })))
                        },
                        ...$.user && {
                            user: n$($.user, b, p)
                        },
                        ...$.contexts && {
                            contexts: n$($.contexts, b, p)
                        },
                        ...$.extra && {
                            extra: n$($.extra, b, p)
                        }
                    };
                    return $.contexts && $.contexts.trace && A.contexts && (A.contexts.trace = $.contexts.trace, $.contexts.trace.data && (A.contexts.trace.data = n$($.contexts.trace.data, b, p))), $.spans && (A.spans = $.spans.map(($ => ($.data && ($.data = n$($.data, b, p)), $)))), A
                }
                ft($) {
                    var b = this.getOptions();
                    const {
                        environment: p,
                        release: A,
                        dist: k,
                        maxValueLength: Y = 250
                    } = b;
                    "environment" in $ || ($.environment = "environment" in b ? p : "production"), void 0 === $.release && void 0 !== A && ($.release = A), void 0 === $.dist && void 0 !== k && ($.dist = k), $.message && ($.message = S($.message, Y));
                    var w = $.exception && $.exception.values && $.exception.values[0];
                    w && w.value && (w.value = S(w.value, Y));
                    var j = $.request;
                    j && j.url && (j.url = S(j.url, Y))
                }
                ht($) {
                    var b = Object.keys(this.G);
                    b.length > 0 && ($.sdk = $.sdk || {}, $.sdk.integrations = [...$.sdk.integrations || [], ...b])
                }
                it($, b = {}, p) {
                    return this.vt($, b, p).then(($ => $.event_id), ($ => {}))
                }
                vt($, b, p) {
                    const {
                        beforeSend: A,
                        sampleRate: k
                    } = this.getOptions();
                    if (!this.st()) return y$(new Q("SDK not enabled, will not capture event."));
                    var Y = "transaction" === $.type;
                    return !Y && "number" == typeof k && Math.random() > k ? (this.recordDroppedEvent("sample_rate", "error"), y$(new Q(`Discarding event because it's not included in the random sample (sampling rate = ${k})`))) : this.ct($, b, p).then((p => {
                        if (null === p) throw this.recordDroppedEvent("event_processor", $.type || "error"), new Q("An event processor returned null, will not send event.");
                        return b.data && !0 === b.data.__sentry__ || Y || !A ? p : function($) {
                            var b = "`beforeSend` method has to return `null` or a valid event.";
                            if (y($)) return $.then(($ => {
                                if (!B($) && null !== $) throw new Q(b);
                                return $
                            }), ($ => {
                                throw new Q(`beforeSend rejected with ${$}`)
                            }));
                            if (!B($) && null !== $) throw new Q(b);
                            return $
                        }(A(p, b))
                    })).then((A => {
                        if (null === A) throw this.recordDroppedEvent("before_send", $.type || "error"), new Q("`beforeSend` returned `null`, will not send event.");
                        var k = p && p.getSession();
                        return !Y && k && this.at(k, A), this.sendEvent(A, b), A
                    })).then(null, ($ => {
                        if ($ instanceof Q) throw $;
                        throw this.captureException($, {
                            data: {
                                __sentry__: !0
                            },
                            originalException: $
                        }), new Q(`Event processing pipeline threw an error, original event will not be sent. Details have been sent as a new event.\nReason: ${$}`)
                    }))
                }
                rt($) {
                    this.Y += 1, $.then(($ => (this.Y -= 1, $)), ($ => (this.Y -= 1, $)))
                }
                ut($) {
                    this.et && this.nt && this.et.send($).then(null, ($ => {}))
                }
                dt() {
                    var $ = this.Z;
                    return this.Z = {}, Object.keys($).map((b => {
                        const [p, A] = b.split(":");
                        return {
                            reason: p,
                            category: A,
                            quantity: $[b]
                        }
                    }))
                }
            }

            function q$($, b, p = function($) {
                var b = [];

                function p($) {
                    return b.splice(b.indexOf($), 1)[0]
                }
                return {
                    $: b,
                    add: function(A) {
                        if (!(void 0 === $ || b.length < $)) return y$(new Q("Not adding Promise due to buffer limit reached."));
                        var k = A();
                        return -1 === b.indexOf(k) && b.push(k), k.then((() => p(k))).then(null, (() => p(k).then(null, (() => {})))), k
                    },
                    drain: function($) {
                        return new Z$(((p, A) => {
                            let k = b.length;
                            if (!k) return p(!0);
                            var Y = setTimeout((() => {
                                $ && $ > 0 && p(!1)
                            }), $);
                            b.forEach(($ => {
                                X$($).then((() => {
                                    --k || (clearTimeout(Y), p(!0))
                                }), A)
                            }))
                        }))
                    }
                }
            }($.bufferSize || 30)) {
                let A = {};
                return {
                    send: function(k) {
                        var Y = [];
                        if (f$(k, ((b, p) => {
                                var k = L$(p);
                                ! function($, b, p = Date.now()) {
                                    return function($, b) {
                                        return $[b] || $.all || 0
                                    }($, b) > p
                                }(A, k) ? Y.push(b): $.recordDroppedEvent("ratelimit_backoff", k)
                            })), 0 === Y.length) return X$();
                        var w = u$(k[0], Y),
                            j = b => {
                                f$(w, ((p, A) => {
                                    $.recordDroppedEvent(b, L$(A))
                                }))
                            };
                        return p.add((() => b({
                            body: T$(w, $.textEncoder)
                        }).then(($ => {
                            A = function($, {
                                statusCode: b,
                                headers: p
                            }, A = Date.now()) {
                                var k = { ...$
                                    },
                                    Y = p && p["x-sentry-rate-limits"],
                                    w = p && p["retry-after"];
                                if (Y)
                                    for (var j of Y.trim().split(",")) {
                                        const [$, b] = j.split(":", 2);
                                        var n = parseInt($, 10),
                                            v = 1e3 * (isNaN(n) ? 60 : n);
                                        if (b)
                                            for (var c of b.split(";")) k[c] = A + v;
                                        else k.all = A + v
                                    } else w ? k.all = A + function($, b = Date.now()) {
                                        var p = parseInt(`${$}`, 10);
                                        if (!isNaN(p)) return 1e3 * p;
                                        var A = Date.parse(`${$}`);
                                        return isNaN(A) ? 6e4 : A - b
                                    }(w, A) : 429 === b && (k.all = A + 6e4);
                                return k
                            }(A, $)
                        }), ($ => {
                            j("network_error")
                        })))).then(($ => $), ($ => {
                            if ($ instanceof Q) return j("queue_overflow"), X$();
                            throw $
                        }))
                    },
                    flush: $ => p.drain($)
                }
            }
            var J$ = "7.7.0";
            let m$;
            class x$ {
                constructor() {
                    x$.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "FunctionToString"
                }
                __init() {
                    this.name = x$.id
                }
                setupOnce() {
                    m$ = Function.prototype.toString, Function.prototype.toString = function(...$) {
                        var b = I(this) || this;
                        return m$.apply(b, $)
                    }
                }
            }
            x$.__initStatic();
            var h$ = [/^Script error\.?$/, /^Javascript error: Script error\.? on line 0$/];
            class $b {
                static __initStatic() {
                    this.id = "InboundFilters"
                }
                __init() {
                    this.name = $b.id
                }
                constructor($ = {}) {
                    this.tt = $, $b.prototype.__init.call(this)
                }
                setupOnce($, b) {
                    var p = $ => {
                        var p = b();
                        if (p) {
                            var A = p.getIntegration($b);
                            if (A) {
                                var k = p.getClient(),
                                    Y = k ? k.getOptions() : {},
                                    w = function($ = {}, b = {}) {
                                        return {
                                            allowUrls: [...$.allowUrls || [], ...b.allowUrls || []],
                                            denyUrls: [...$.denyUrls || [], ...b.denyUrls || []],
                                            ignoreErrors: [...$.ignoreErrors || [], ...b.ignoreErrors || [], ...h$],
                                            ignoreInternal: void 0 === $.ignoreInternal || $.ignoreInternal
                                        }
                                    }(A.tt, Y);
                                return function($, b) {
                                    return !((!b.ignoreInternal || ! function($) {
                                        try {
                                            return "SentryError" === $.exception.values[0].type
                                        } catch ($) {}
                                        return !1
                                    }($)) && ! function($, b) {
                                        return !(!b || !b.length) && function($) {
                                            if ($.message) return [$.message];
                                            if ($.exception) try {
                                                const {
                                                    type: b = "",
                                                    value: p = ""
                                                } = $.exception.values && $.exception.values[0] || {};
                                                return [`${p}`, `${b}: ${p}`]
                                            } catch ($) {
                                                return []
                                            }
                                            return []
                                        }($).some(($ => b.some((b => _($, b)))))
                                    }($, b.ignoreErrors) && ! function($, b) {
                                        if (!b || !b.length) return !1;
                                        var p = bb($);
                                        return !!p && b.some(($ => _(p, $)))
                                    }($, b.denyUrls) && function($, b) {
                                        if (!b || !b.length) return !0;
                                        var p = bb($);
                                        return !p || b.some(($ => _(p, $)))
                                    }($, b.allowUrls))
                                }($, w) ? null : $
                            }
                        }
                        return $
                    };
                    p.id = this.name, $(p)
                }
            }

            function bb($) {
                try {
                    let b;
                    try {
                        b = $.exception.values[0].stacktrace.frames
                    } catch ($) {}
                    return b ? function($ = []) {
                        for (let p = $.length - 1; p >= 0; p--) {
                            var b = $[p];
                            if (b && "<anonymous>" !== b.filename && "[native code]" !== b.filename) return b.filename || null
                        }
                        return null
                    }(b) : null
                } catch ($) {
                    return null
                }
            }
            $b.__initStatic();
            var pb = Object.freeze({
                __proto__: null,
                FunctionToString: x$,
                InboundFilters: $b
            });

            function Ab($, b) {
                const p = Yb($, b),
                    A = {
                        type: b && b.name,
                        value: jb(b)
                    };
                return p.length && (A.stacktrace = {
                    frames: p
                }), void 0 === A.type && "" === A.value && (A.value = "Unrecoverable error caught"), A
            }

            function kb($, b) {
                return {
                    exception: {
                        values: [Ab($, b)]
                    }
                }
            }

            function Yb($, b) {
                const p = b.stacktrace || b.stack || "",
                    A = function($) {
                        if ($) {
                            if ("number" == typeof $.framesToPop) return $.framesToPop;
                            if (wb.test($.message)) return 1
                        }
                        return 0
                    }(b);
                try {
                    return $(p, A)
                } catch ($) {}
                return []
            }
            const wb = /Minified React error #\d+;/i;

            function jb($) {
                const b = $ && $.message;
                return b ? b.error && "string" == typeof b.error.message ? b.error.message : b : "No error message"
            }

            function nb($, b, p, A, k) {
                let v;
                if (j(b) && b.error) return kb($, b.error);
                if (n(b) || w(b, "DOMException")) {
                    const k = b;
                    if ("stack" in b) v = kb($, b);
                    else {
                        const b = k.name || (n(k) ? "DOMError" : "DOMException"),
                            Y = k.message ? `${b}: ${k.message}` : b;
                        v = vb($, Y, p, A), Y$(v, Y)
                    }
                    return "code" in k && (v.tags = { ...v.tags,
                        "DOMException.code": `${k.code}`
                    }), v
                }
                return Y(b) ? kb($, b) : B(b) || X(b) ? (v = function($, b, p, A) {
                    const k = {
                        exception: {
                            values: [{
                                type: X(b) ? b.constructor.name : A ? "UnhandledRejection" : "Error",
                                value: `Non-Error ${A?"promise rejection":"exception"} captured with keys: ${C(b)}`
                            }]
                        },
                        extra: {
                            __serialized__: v$(b)
                        }
                    };
                    if (p) {
                        const b = Yb($, p);
                        b.length && (k.exception.values[0].stacktrace = {
                            frames: b
                        })
                    }
                    return k
                }($, b, p, k), w$(v, {
                    synthetic: !0
                }), v) : (v = vb($, b, p, A), Y$(v, `${b}`, void 0), w$(v, {
                    synthetic: !0
                }), v)
            }

            function vb($, b, p, A) {
                const k = {
                    message: b
                };
                if (A && p) {
                    const A = Yb($, p);
                    A.length && (k.exception = {
                        values: [{
                            value: b,
                            stacktrace: {
                                frames: A
                            }
                        }]
                    })
                }
                return k
            }
            const cb = "Breadcrumbs";
            class Bb {
                static __initStatic() {
                    this.id = cb
                }
                __init() {
                    this.name = Bb.id
                }
                constructor($) {
                    Bb.prototype.__init.call(this), this.options = {
                        console: !0,
                        dom: !0,
                        fetch: !0,
                        history: !0,
                        sentry: !0,
                        xhr: !0,
                        ...$
                    }
                }
                setupOnce() {
                    this.options.console && a("console", Xb), this.options.dom && a("dom", function($) {
                        return function(b) {
                            let p, A = "object" == typeof $ ? $.serializeAttribute : void 0;
                            "string" == typeof A && (A = [A]);
                            try {
                                p = b.event.target ? H(b.event.target, A) : H(b.event, A)
                            } catch ($) {
                                p = "<unknown>"
                            }
                            0 !== p.length && e$().addBreadcrumb({
                                category: `ui.${b.name}`,
                                message: p
                            }, {
                                event: b.event,
                                name: b.name,
                                global: b.global
                            })
                        }
                    }(this.options.dom)), this.options.xhr && a("xhr", yb), this.options.fetch && a("fetch", Zb), this.options.history && a("history", Hb)
                }
            }

            function Xb($) {
                const b = {
                    category: "console",
                    data: {
                        arguments: $.args,
                        logger: "console"
                    },
                    level: (p = $.level, "warn" === p ? "warning" : H$.includes(p) ? p : "log"),
                    message: T($.args, " ")
                };
                var p;
                if ("assert" === $.level) {
                    if (!1 !== $.args[0]) return;
                    b.message = `Assertion failed: ${T($.args.slice(1)," ")||"console.assert"}`, b.data.arguments = $.args.slice(1)
                }
                e$().addBreadcrumb(b, {
                    input: $.args,
                    level: $.level
                })
            }

            function yb($) {
                if ($.endTimestamp) {
                    if ($.xhr.__sentry_own_request__) return;
                    const {
                        method: b,
                        url: p,
                        status_code: A,
                        body: k
                    } = $.xhr.__sentry_xhr__ || {};
                    e$().addBreadcrumb({
                        category: "xhr",
                        data: {
                            method: b,
                            url: p,
                            status_code: A
                        },
                        type: "http"
                    }, {
                        xhr: $.xhr,
                        input: k
                    })
                }
            }

            function Zb($) {
                $.endTimestamp && ($.fetchData.url.match(/sentry_key/) && "POST" === $.fetchData.method || ($.error ? e$().addBreadcrumb({
                    category: "fetch",
                    data: $.fetchData,
                    level: "error",
                    type: "http"
                }, {
                    data: $.error,
                    input: $.args
                }) : e$().addBreadcrumb({
                    category: "fetch",
                    data: { ...$.fetchData,
                        status_code: $.response.status
                    },
                    type: "http"
                }, {
                    input: $.args,
                    response: $.response
                })))
            }

            function Hb($) {
                const b = p();
                let A = $.from,
                    k = $.to;
                const Y = p$(b.location.href);
                let w = p$(A);
                const j = p$(k);
                w.path || (w = Y), Y.protocol === j.protocol && Y.host === j.host && (k = j.relative), Y.protocol === w.protocol && Y.host === w.host && (A = w.relative), e$().addBreadcrumb({
                    category: "navigation",
                    data: {
                        from: A,
                        to: k
                    }
                })
            }
            Bb.__initStatic();
            const Rb = p();
            let Qb;

            function lb() {
                if (Qb) return Qb;
                if (o(Rb.fetch)) return Qb = Rb.fetch.bind(Rb);
                const $ = Rb.document;
                let b = Rb.fetch;
                if ($ && "function" == typeof $.createElement) try {
                    const p = $.createElement("iframe");
                    p.hidden = !0, $.head.appendChild(p);
                    const A = p.contentWindow;
                    A && A.fetch && (b = A.fetch), $.head.removeChild(p)
                } catch ($) {}
                return Qb = b.bind(Rb)
            }
            const Kb = p();
            class Mb extends U$ {
                constructor($) {
                    $.K = $.K || {}, $.K.sdk = $.K.sdk || {
                        name: "sentry.javascript.browser",
                        packages: [{
                            name: "npm:@sentry/browser",
                            version: J$
                        }],
                        version: J$
                    }, super($), $.sendClientReports && Kb.document && Kb.document.addEventListener("visibilitychange", (() => {
                        "hidden" === Kb.document.visibilityState && this.yt()
                    }))
                }
                eventFromException($, b) {
                    return function($, b, p, A) {
                        const k = nb($, b, p && p.syntheticException || void 0, A);
                        return w$(k), k.level = "error", p && p.event_id && (k.event_id = p.event_id), X$(k)
                    }(this.tt.stackParser, $, b, this.tt.attachStacktrace)
                }
                eventFromMessage($, b = "info", p) {
                    return function($, b, p = "info", A, k) {
                        const Y = vb($, b, A && A.syntheticException || void 0, k);
                        return Y.level = p, A && A.event_id && (Y.event_id = A.event_id), X$(Y)
                    }(this.tt.stackParser, $, b, p, this.tt.attachStacktrace)
                }
                sendEvent($, b) {
                    const p = this.getIntegrationById(cb);
                    p && p.options && p.options.sentry && e$().addBreadcrumb({
                        category: "sentry." + ("transaction" === $.type ? "transaction" : "event"),
                        event_id: $.event_id,
                        level: $.level,
                        message: k$($)
                    }, {
                        event: $
                    }), super.sendEvent($, b)
                }
                ct($, b, p) {
                    return $.platform = $.platform || "javascript", super.ct($, b, p)
                }
                yt() {
                    const $ = this.dt();
                    if (0 === $.length) return;
                    if (!this.nt) return;
                    const b = E$(this.nt, this.tt),
                        p = (A = $, u$((k = this.tt.tunnel && K(this.nt)) ? {
                            dsn: k
                        } : {}, [
                            [{
                                type: "client_report"
                            }, {
                                timestamp: K$(),
                                discarded_events: A
                            }]
                        ]));
                    var A, k;
                    try {
                        ! function($, b) {
                            "[object Navigator]" === Object.prototype.toString.call(Rb && Rb.navigator) && "function" == typeof Rb.navigator.sendBeacon ? Rb.navigator.sendBeacon.bind(Rb.navigator)($, b) : t() && lb()($, {
                                body: b,
                                method: "POST",
                                credentials: "omit",
                                keepalive: !0
                            }).then(null, ($ => {}))
                        }(b, T$(p))
                    } catch ($) {}
                }
            }

            function ub($, b = lb()) {
                return q$($, (function(p) {
                    const A = {
                        body: p.body,
                        method: "POST",
                        referrerPolicy: "origin",
                        headers: $.headers,
                        ...$.fetchOptions
                    };
                    return b($.url, A).then(($ => ({
                        statusCode: $.status,
                        headers: {
                            "x-sentry-rate-limits": $.headers.get("X-Sentry-Rate-Limits"),
                            "retry-after": $.headers.get("Retry-After")
                        }
                    })))
                }))
            }

            function Vb($) {
                return q$($, (function(b) {
                    return new Z$(((p, A) => {
                        const k = new XMLHttpRequest;
                        k.onerror = A, k.onreadystatechange = () => {
                            4 === k.readyState && p({
                                statusCode: k.status,
                                headers: {
                                    "x-sentry-rate-limits": k.getResponseHeader("X-Sentry-Rate-Limits"),
                                    "retry-after": k.getResponseHeader("Retry-After")
                                }
                            })
                        }, k.open("POST", $.url);
                        for (const b in $.headers) Object.prototype.hasOwnProperty.call($.headers, b) && k.setRequestHeader(b, $.headers[b]);
                        k.send(b.body)
                    }))
                }))
            }
            const fb = "?";

            function Sb($, b, p, A) {
                const k = {
                    filename: $,
                    function: b,
                    in_app: !0
                };
                return void 0 !== p && (k.lineno = p), void 0 !== A && (k.colno = A), k
            }
            const Tb = /^\s*at (?:(.*?) ?\((?:address at )?)?((?:file|https?|blob|chrome-extension|address|native|eval|webpack|<anonymous>|[-a-z]+:|.*bundle|\/).*?)(?::(\d+))?(?::(\d+))?\)?\s*$/i,
                _b = /\((\S*)(?::(\d+))(?::(\d+))\)/,
                ib = [30, $ => {
                    const b = Tb.exec($);
                    if (b) {
                        if (b[2] && 0 === b[2].indexOf("eval")) {
                            const $ = _b.exec(b[2]);
                            $ && (b[2] = $[1], b[3] = $[2], b[4] = $[3])
                        }
                        const [$, p] = Gb(b[1] || fb, b[2]);
                        return Sb(p, $, b[3] ? +b[3] : void 0, b[4] ? +b[4] : void 0)
                    }
                }],
                Lb = /^\s*(.*?)(?:\((.*?)\))?(?:^|@)?((?:file|https?|blob|chrome|webpack|resource|moz-extension|capacitor).*?:\/.*?|\[native code\]|[^@]*(?:bundle|\d+\.js)|\/[\w\-. /=]+)(?::(\d+))?(?::(\d+))?\s*$/i,
                rb = /(\S+) line (\d+)(?: > eval line \d+)* > eval/i,
                Ib = [50, $ => {
                    const b = Lb.exec($);
                    if (b) {
                        if (b[3] && b[3].indexOf(" > eval") > -1) {
                            const $ = rb.exec(b[3]);
                            $ && (b[1] = b[1] || "eval", b[3] = $[1], b[4] = $[2], b[5] = "")
                        }
                        let $ = b[3],
                            p = b[1] || fb;
                        return [p, $] = Gb(p, $), Sb($, p, b[4] ? +b[4] : void 0, b[5] ? +b[5] : void 0)
                    }
                }],
                Pb = /^\s*at (?:((?:\[object object\])?.+) )?\(?((?:file|ms-appx|https?|webpack|blob):.*?):(\d+)(?::(\d+))?\)?\s*$/i,
                Db = [40, $ => {
                    const b = Pb.exec($);
                    return b ? Sb(b[2], b[1] || fb, +b[3], b[4] ? +b[4] : void 0) : void 0
                }],
                Nb = / line (\d+).*script (?:in )?(\S+)(?:: in function (\S+))?$/i,
                Cb = [10, $ => {
                    const b = Nb.exec($);
                    return b ? Sb(b[2], b[3] || fb, +b[1]) : void 0
                }],
                sb = / line (\d+), column (\d+)\s*(?:in (?:<anonymous function: ([^>]+)>|([^)]+))\(.*\))? in (.*):\s*$/i,
                gb = [20, $ => {
                    const b = sb.exec($);
                    return b ? Sb(b[5], b[3] || b[4] || fb, +b[1], +b[2]) : void 0
                }],
                eb = [ib, Ib, Db],
                Ob = e(...eb),
                Gb = ($, b) => {
                    const p = -1 !== $.indexOf("safari-extension"),
                        A = -1 !== $.indexOf("safari-web-extension");
                    return p || A ? [-1 !== $.indexOf("@") ? $.split("@")[0] : fb, p ? `safari-extension:${b}` : `safari-web-extension:${b}`] : [$, b]
                };
            let tb = 0;

            function ob() {
                return tb > 0
            }

            function db($, b = {}, p) {
                if ("function" != typeof $) return $;
                try {
                    const b = $.__sentry_wrapped__;
                    if (b) return b;
                    if (I($)) return $
                } catch (b) {
                    return $
                }
                const A = function() {
                    const A = Array.prototype.slice.call(arguments);
                    try {
                        p && "function" == typeof p && p.apply(this, arguments);
                        const k = A.map(($ => db($, b)));
                        return $.apply(this, k)
                    } catch ($) {
                        throw tb += 1, setTimeout((() => {
                            tb -= 1
                        })), o$((p => {
                            p.addEventProcessor(($ => (b.mechanism && (Y$($, void 0, void 0), w$($, b.mechanism)), $.extra = { ...$.extra,
                                arguments: A
                            }, $))), t$($)
                        })), $
                    }
                };
                try {
                    for (const b in $) Object.prototype.hasOwnProperty.call($, b) && (A[b] = $[b])
                } catch ($) {}
                r(A, $), L($, "__sentry_wrapped__", A);
                try {
                    Object.getOwnPropertyDescriptor(A, "name").configurable && Object.defineProperty(A, "name", {
                        get: () => $.name
                    })
                } catch ($) {}
                return A
            }
            class Eb {
                static __initStatic() {
                    this.id = "GlobalHandlers"
                }
                __init() {
                    this.name = Eb.id
                }
                __init2() {
                    this.gt = {
                        onerror: Wb,
                        onunhandledrejection: ab
                    }
                }
                constructor($) {
                    Eb.prototype.__init.call(this), Eb.prototype.__init2.call(this), this.tt = {
                        onerror: !0,
                        onunhandledrejection: !0,
                        ...$
                    }
                }
                setupOnce() {
                    Error.stackTraceLimit = 50;
                    const $ = this.tt;
                    for (const b in $) {
                        const p = this.gt[b];
                        p && $[b] && (p(), this.gt[b] = void 0)
                    }
                }
            }

            function Wb() {
                a("error", ($ => {
                    const [b, p, A] = Ub();
                    if (!b.getIntegration(Eb)) return;
                    const {
                        msg: k,
                        url: Y,
                        line: w,
                        column: n,
                        error: c
                    } = $;
                    if (ob() || c && c.__sentry_own_request__) return;
                    const B = void 0 === c && v(k) ? function($, b, p, A) {
                        let k = j($) ? $.message : $,
                            Y = "Error";
                        const w = k.match(/^(?:[Uu]ncaught (?:exception: )?)?(?:((?:Eval|Internal|Range|Reference|Syntax|Type|URI|)Error): )?(.*)$/i);
                        return w && (Y = w[1], k = w[2]), zb({
                            exception: {
                                values: [{
                                    type: Y,
                                    value: k
                                }]
                            }
                        }, b, p, A)
                    }(k, Y, w, n) : zb(nb(p, c || k, void 0, A, !1), Y, w, n);
                    B.level = "error", Fb(b, c, B, "onerror")
                }))
            }

            function ab() {
                a("unhandledrejection", ($ => {
                    const [b, p, A] = Ub();
                    if (!b.getIntegration(Eb)) return;
                    let k = $;
                    try {
                        "reason" in $ ? k = $.reason : "detail" in $ && "reason" in $.detail && (k = $.detail.reason)
                    } catch ($) {}
                    if (ob() || k && k.__sentry_own_request__) return !0;
                    const Y = c(k) ? {
                        exception: {
                            values: [{
                                type: "UnhandledRejection",
                                value: `Non-Error promise rejection captured with value: ${String(k)}`
                            }]
                        }
                    } : nb(p, k, void 0, A, !0);
                    Y.level = "error", Fb(b, k, Y, "onunhandledrejection")
                }))
            }

            function zb($, b, A, k) {
                const Y = $.exception = $.exception || {},
                    w = Y.values = Y.values || [],
                    j = w[0] = w[0] || {},
                    n = j.stacktrace = j.stacktrace || {},
                    c = n.frames = n.frames || [],
                    B = isNaN(parseInt(k, 10)) ? void 0 : k,
                    X = isNaN(parseInt(A, 10)) ? void 0 : A,
                    y = v(b) && b.length > 0 ? b : function() {
                        var $ = p();
                        try {
                            return $.document.location.href
                        } catch ($) {
                            return ""
                        }
                    }();
                return 0 === c.length && c.push({
                    colno: B,
                    filename: y,
                    function: "?",
                    in_app: !0,
                    lineno: X
                }), $
            }

            function Fb($, b, p, A) {
                w$(p, {
                    handled: !1,
                    type: A
                }), $.captureEvent(p, {
                    originalException: b
                })
            }

            function Ub() {
                const $ = e$(),
                    b = $.getClient(),
                    p = b && b.getOptions() || {
                        stackParser: () => [],
                        attachStacktrace: !1
                    };
                return [$, p.stackParser, p.attachStacktrace]
            }
            Eb.__initStatic();
            const qb = ["EventTarget", "Window", "Node", "ApplicationCache", "AudioTrackList", "ChannelMergerNode", "CryptoOperation", "EventSource", "FileReader", "HTMLUnknownElement", "IDBDatabase", "IDBRequest", "IDBTransaction", "KeyOperation", "MediaController", "MessagePort", "ModalWindow", "Notification", "SVGElementInstance", "Screen", "TextTrack", "TextTrackCue", "TextTrackList", "WebSocket", "WebSocketWorker", "Worker", "XMLHttpRequest", "XMLHttpRequestEventTarget", "XMLHttpRequestUpload"];
            class Jb {
                static __initStatic() {
                    this.id = "TryCatch"
                }
                __init() {
                    this.name = Jb.id
                }
                constructor($) {
                    Jb.prototype.__init.call(this), this.tt = {
                        XMLHttpRequest: !0,
                        eventTarget: !0,
                        requestAnimationFrame: !0,
                        setInterval: !0,
                        setTimeout: !0,
                        ...$
                    }
                }
                setupOnce() {
                    const $ = p();
                    this.tt.setTimeout && i($, "setTimeout", mb), this.tt.setInterval && i($, "setInterval", mb), this.tt.requestAnimationFrame && i($, "requestAnimationFrame", xb), this.tt.XMLHttpRequest && "XMLHttpRequest" in $ && i(XMLHttpRequest.prototype, "send", hb);
                    const b = this.tt.eventTarget;
                    b && (Array.isArray(b) ? b : qb).forEach($p)
                }
            }

            function mb($) {
                return function(...b) {
                    const p = b[0];
                    return b[0] = db(p, {
                        mechanism: {
                            data: {
                                function: G($)
                            },
                            handled: !0,
                            type: "instrument"
                        }
                    }), $.apply(this, b)
                }
            }

            function xb($) {
                return function(b) {
                    return $.apply(this, [db(b, {
                        mechanism: {
                            data: {
                                function: "requestAnimationFrame",
                                handler: G($)
                            },
                            handled: !0,
                            type: "instrument"
                        }
                    })])
                }
            }

            function hb($) {
                return function(...b) {
                    const p = this;
                    return ["onload", "onerror", "onprogress", "onreadystatechange"].forEach(($ => {
                        $ in p && "function" == typeof p[$] && i(p, $, (function(b) {
                            const p = {
                                    mechanism: {
                                        data: {
                                            function: $,
                                            handler: G(b)
                                        },
                                        handled: !0,
                                        type: "instrument"
                                    }
                                },
                                A = I(b);
                            return A && (p.mechanism.data.handler = G(A)), db(b, p)
                        }))
                    })), $.apply(this, b)
                }
            }

            function $p($) {
                const b = p(),
                    A = b[$] && b[$].prototype;
                A && A.hasOwnProperty && A.hasOwnProperty("addEventListener") && (i(A, "addEventListener", (function(b) {
                    return function(p, A, k) {
                        try {
                            "function" == typeof A.handleEvent && (A.handleEvent = db(A.handleEvent, {
                                mechanism: {
                                    data: {
                                        function: "handleEvent",
                                        handler: G(A),
                                        target: $
                                    },
                                    handled: !0,
                                    type: "instrument"
                                }
                            }))
                        } catch ($) {}
                        return b.apply(this, [p, db(A, {
                            mechanism: {
                                data: {
                                    function: "addEventListener",
                                    handler: G(A),
                                    target: $
                                },
                                handled: !0,
                                type: "instrument"
                            }
                        }), k])
                    }
                })), i(A, "removeEventListener", (function($) {
                    return function(b, p, A) {
                        const k = p;
                        try {
                            const p = k && k.__sentry_wrapped__;
                            p && $.call(this, b, p, A)
                        } catch ($) {}
                        return $.call(this, b, k, A)
                    }
                })))
            }
            Jb.__initStatic();
            class bp {
                static __initStatic() {
                    this.id = "LinkedErrors"
                }
                __init() {
                    this.name = bp.id
                }
                constructor($ = {}) {
                    bp.prototype.__init.call(this), this.bt = $.key || "cause", this._t = $.limit || 5
                }
                setupOnce() {
                    const $ = e$().getClient();
                    $ && D$(((b, p) => {
                        const A = e$().getIntegration(bp);
                        return A ? function($, b, p, A, k) {
                            if (!(A.exception && A.exception.values && k && Z(k.originalException, Error))) return A;
                            const Y = pp($, p, k.originalException, b);
                            return A.exception.values = [...Y, ...A.exception.values], A
                        }($.getOptions().stackParser, A.bt, A._t, b, p) : b
                    }))
                }
            }

            function pp($, b, p, A, k = []) {
                if (!Z(p[A], Error) || k.length + 1 >= b) return k;
                const Y = Ab($, p[A]);
                return pp($, b, p[A], A, [Y, ...k])
            }
            bp.__initStatic();
            const Ap = p();
            class kp {
                constructor() {
                    kp.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "HttpContext"
                }
                __init() {
                    this.name = kp.id
                }
                setupOnce() {
                    D$(($ => {
                        if (e$().getIntegration(kp)) {
                            if (!Ap.navigator && !Ap.location && !Ap.document) return $;
                            const b = $.request && $.request.url || Ap.location && Ap.location.href,
                                {
                                    referrer: p
                                } = Ap.document || {},
                                {
                                    userAgent: A
                                } = Ap.navigator || {},
                                k = { ...b && {
                                        url: b
                                    },
                                    headers: { ...$.request && $.request.headers,
                                        ...p && {
                                            Referer: p
                                        },
                                        ...A && {
                                            "User-Agent": A
                                        }
                                    }
                                };
                            return { ...$,
                                request: k
                            }
                        }
                        return $
                    }))
                }
            }
            kp.__initStatic();
            class Yp {
                constructor() {
                    Yp.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "Dedupe"
                }
                __init() {
                    this.name = Yp.id
                }
                setupOnce($, b) {
                    const p = $ => {
                        const p = b().getIntegration(Yp);
                        if (p) {
                            try {
                                if (function($, b) {
                                        return !(!b || ! function($, b) {
                                            const p = $.message,
                                                A = b.message;
                                            return !(!p && !A || p && !A || !p && A || p !== A || !jp($, b) || !wp($, b))
                                        }($, b) && ! function($, b) {
                                            const p = np(b),
                                                A = np($);
                                            return !!(p && A && p.type === A.type && p.value === A.value && jp($, b) && wp($, b))
                                        }($, b))
                                    }($, p.wt)) return null
                            } catch (b) {
                                return p.wt = $
                            }
                            return p.wt = $
                        }
                        return $
                    };
                    p.id = this.name, $(p)
                }
            }

            function wp($, b) {
                let p = vp($),
                    A = vp(b);
                if (!p && !A) return !0;
                if (p && !A || !p && A) return !1;
                if (A.length !== p.length) return !1;
                for (let $ = 0; $ < A.length; $++) {
                    const b = A[$],
                        k = p[$];
                    if (b.filename !== k.filename || b.lineno !== k.lineno || b.colno !== k.colno || b.function !== k.function) return !1
                }
                return !0
            }

            function jp($, b) {
                let p = $.fingerprint,
                    A = b.fingerprint;
                if (!p && !A) return !0;
                if (p && !A || !p && A) return !1;
                try {
                    return !(p.join("") !== A.join(""))
                } catch ($) {
                    return !1
                }
            }

            function np($) {
                return $.exception && $.exception.values && $.exception.values[0]
            }

            function vp($) {
                const b = $.exception;
                if (b) try {
                    return b.values[0].stacktrace.frames
                } catch ($) {
                    return
                }
            }
            Yp.__initStatic();
            var cp = Object.freeze({
                __proto__: null,
                GlobalHandlers: Eb,
                TryCatch: Jb,
                Breadcrumbs: Bb,
                LinkedErrors: bp,
                HttpContext: kp,
                Dedupe: Yp
            });
            const Bp = [new $b, new x$, new Jb, new Bb, new Eb, new bp, new Yp, new kp];

            function Xp($) {
                $.startSession({
                    ignoreDuration: !0
                }), $.captureSession()
            }
            let yp = {};
            const Zp = p();
            Zp.Sentry && Zp.Sentry.Integrations && (yp = Zp.Sentry.Integrations);
            const Hp = { ...yp,
                ...pb,
                ...cp
            };
            return $.Breadcrumbs = Bb, $.BrowserClient = Mb, $.Dedupe = Yp, $.FunctionToString = x$, $.GlobalHandlers = Eb, $.HttpContext = kp, $.Hub = C$, $.InboundFilters = $b, $.Integrations = Hp, $.LinkedErrors = bp, $.SDK_VERSION = J$, $.Scope = I$, $.TryCatch = Jb, $.addBreadcrumb = function($) {
                e$().addBreadcrumb($)
            }, $.addGlobalEventProcessor = D$, $.captureEvent = function($, b) {
                return e$().captureEvent($, b)
            }, $.captureException = t$, $.captureMessage = function($, b) {
                var p = "string" == typeof b ? b : void 0,
                    A = "string" != typeof b ? {
                        captureContext: b
                    } : void 0;
                return e$().captureMessage($, p, A)
            }, $.chromeStackLineParser = ib, $.close = function($) {
                const b = e$().getClient();
                return b ? b.close($) : X$(!1)
            }, $.configureScope = function($) {
                e$().configureScope($)
            }, $.createTransport = q$, $.defaultIntegrations = Bp, $.defaultStackLineParsers = eb, $.defaultStackParser = Ob, $.flush = function($) {
                const b = e$().getClient();
                return b ? b.flush($) : X$(!1)
            }, $.forceLoad = function() {}, $.geckoStackLineParser = Ib, $.getCurrentHub = e$, $.getHubFromCarrier = O$, $.init = function($ = {}) {
                if (void 0 === $.defaultIntegrations && ($.defaultIntegrations = Bp), void 0 === $.release) {
                    const b = p();
                    b.SENTRY_RELEASE && b.SENTRY_RELEASE.id && ($.release = b.SENTRY_RELEASE.id)
                }
                void 0 === $.autoSessionTracking && ($.autoSessionTracking = !0), void 0 === $.sendClientReports && ($.sendClientReports = !0);
                const b = { ...$,
                    stackParser: (A = $.stackParser || Ob, Array.isArray(A) ? e(...A) : A),
                    integrations: F$($),
                    transport: $.transport || (t() ? ub : Vb)
                };
                var A;
                ! function($, b) {
                    !0 === b.debug && console.warn("[Sentry] Cannot initialize SDK with `debug` option using a non-debug bundle.");
                    var p = e$(),
                        A = p.getScope();
                    A && A.update(b.initialScope);
                    var k = new $(b);
                    p.bindClient(k)
                }(Mb, b), $.autoSessionTracking && function() {
                    if (void 0 === p().document) return;
                    const $ = e$();
                    $.captureSession && (Xp($), a("history", (({
                        from: $,
                        to: b
                    }) => {
                        void 0 !== $ && $ !== b && Xp(e$())
                    })))
                }()
            }, $.lastEventId = function() {
                return e$().lastEventId()
            }, $.makeFetchTransport = ub, $.makeMain = g$, $.makeXHRTransport = Vb, $.onLoad = function($) {
                $()
            }, $.opera10StackLineParser = Cb, $.opera11StackLineParser = gb, $.setContext = function($, b) {
                e$().setContext($, b)
            }, $.setExtra = function($, b) {
                e$().setExtra($, b)
            }, $.setExtras = function($) {
                e$().setExtras($)
            }, $.setTag = function($, b) {
                e$().setTag($, b)
            }, $.setTags = function($) {
                e$().setTags($)
            }, $.setUser = function($) {
                e$().setUser($)
            }, $.showReportDialog = function($ = {}, b = e$()) {
                const A = p();
                if (!A.document) return;
                const {
                    client: k,
                    scope: Y
                } = b.getStackTop(), w = $.dsn || k && k.getDsn();
                if (!w) return;
                Y && ($.user = { ...Y.getUser(),
                    ...$.user
                }), $.eventId || ($.eventId = b.lastEventId());
                const j = A.document.createElement("script");
                j.async = !0, j.src = function($, b) {
                    var p = u($),
                        A = `${d$(p)}embed/error-page/`;
                    let k = `dsn=${K(p)}`;
                    for (var Y in b)
                        if ("dsn" !== Y)
                            if ("user" === Y) {
                                var w = b.user;
                                if (!w) continue;
                                w.name && (k += `&name=${encodeURIComponent(w.name)}`), w.email && (k += `&email=${encodeURIComponent(w.email)}`)
                            } else k += `&${encodeURIComponent(Y)}=${encodeURIComponent(b[Y])}`;
                    return `${A}?${k}`
                }(w, $), $.onLoad && (j.onload = $.onLoad);
                const n = A.document.head || A.document.body;
                n && n.appendChild(j)
            }, $.startTransaction = function($, b) {
                return e$().startTransaction({
                    metadata: {
                        source: "custom"
                    },
                    ...$
                }, b)
            }, $.winjsStackLineParser = Db, $.withScope = o$, $.wrap = function($) {
                return db($)()
            }, $
        }({})
    </script>
    <script>
        (function() {
            "use strict";
            const d = ["Breadcrumbs", "TryCatch"];
            let S = "production";
            const X = window.location.hostname;

            function l(d) {
                if ("string" == typeof d) {
                    const S = d.indexOf("EVOSESSIONID");
                    if (S > -1) return `${d.substr(0,S+10)}=***`
                } else {
                    if (Array.isArray(d)) return d.map(l);
                    "object" == typeof d && d && Object.keys(d).forEach((S => {
                        d[S] = l(d[S])
                    }))
                }
                return d
            }
            /\b(cit)(\d|\b)/.test(X) && (S = "cit"), /\b(uat)(\d|\b)/.test(X) && (S = "uat"), /^([\d\.:]+|[^\.]+)$/.test(X) && (S = "unknown"), /(slim\.evo-test)/.test(X) && (S = "slimdown"), null === Sentry || void 0 === Sentry || Sentry.init({
                dsn: {
                    cit: "https://72570d21b08341c19be61d59607c8435@o36526.ingest.sentry.io/81947",
                    uat: "https://711d62c6f4514adb824a81d4d7e546ea@o36526.ingest.sentry.io/81947",
                    unknown: "https://119b2d8d7f7945cea5636ca07afef0d3@o36526.ingest.sentry.io/81947",
                    development: "https://553a3f48f47c4479bbd70ae67cf1a334@o36526.ingest.sentry.io/81947",
                    slimdown: "https://8612b74a2dd94b1d948b06f40f2010a0@o36526.ingest.sentry.io/81947",
                    production: "https://5fbc2f970bc045c89b1fd0506e03697a@sentry.io/81947"
                }[S],
                release: "6.20240625.71558.42417-629900b49f",
                environment: S,
                autoSessionTracking: !1,
                sampleRate: .5,
                ignoreErrors: ["InvalidStateError: Cannot resume a context that has been closed", "InvalidStateError: Audio context is going away", "InvalidStateError: Failed to start the audio device", /^NS_ERROR_/, "nativeViewDidAppear", "nativeViewDidDisappear", "cancelLongPress is not a function"],
                denyUrls: [/extensions\//i, /^chrome:\/\//i, /^pptr:\/\//i],
                integrations: S => S.filter((S => !d.includes(S.name))),
                beforeBreadcrumb: function(d) {
                    const S = d.data;
                    return S && "http" === d.type && 200 === S.status_code ? null : d
                },
                beforeSend: function(d) {
                    const S = "undefined";
                    return d.tags = d.tags || {}, S && (d.tags.sentryTriageSession = S), (null === window || void 0 === window ? void 0 : window.EVO_VERBOSE) ? function(d) {
                        const S = l(d),
                            X = JSON.stringify(S),
                            E = X.indexOf("EVOSESSIONID");
                        return E > -1 ? {
                            message: `${X.substr(0,E+13)}***`
                        } : S
                    }(d) : null
                }
            })
        })()
    </script>
    <script>
        window.BUNDLE_MANIFEST = {
            env: "production",
            version: "6.20240625.71558.42417-629900b49f",
            publicPath: "/frontend/evo/r2/",
            commonAssets: ["js/vendor.18c6690d.js", "styles/commons.f688dc30.css", "js/commons.f688dc30.js", "js/commons.wrapped.655b5aa0.js", "styles/commons.rng.3b313af0.css", "js/commons.rng.3b313af0.js"],
            apps: {
                abstractGame: {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    audioLibrary: "legacy",
                    adaptive: "evo-game-bootstrap-[live]",
                    assets: [0, 1, 2, "styles/abstractga.0a10f168.css", "js/abstractga.0a10f168.js"]
                },
                andarbahar: {
                    nativeBundle: "evo_live_all",
                    title: "Andar Bahar",
                    loaderExpectedResourceCount: 13,
                    localization: "andarbahar",
                    audioLibrary: "legacy",
                    desktop: "andarBahar.desktop",
                    mobile: "andarBahar.mobile",
                    assets: [0, 1, 2, "styles/andarbahar.60586593.css", "js/andarbahar.60586593.js"]
                },
                bacbo: {
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    localization: "bacbo",
                    nativeBundle: "evo_live_all",
                    title: "BacBo",
                    desktop: "bacbo.desktop",
                    mobile: "bacbo.mobile",
                    assets: [0, 1, 2, "styles/bacbo.eb012690.css", "js/bacbo.eb012690.js"]
                },
                "baccarat.eight": {
                    title: "Baccarat 8",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-eight",
                    adaptive: "baccarat.eight",
                    assets: [0, 1, 2, "styles/baccarat.eight.97748d81.css", "js/baccarat.eight.97748d81.js"]
                },
                "baccarat.goldenWealth": {
                    title: "Golden Wealth Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 33,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-goldenwealth",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.goldenWealth",
                    assets: [0, 1, 2, "styles/baccarat.goldenweal.66cddeba.css", "js/baccarat.goldenweal.66cddeba.js"]
                },
                "baccarat.multiplay": {
                    title: "Baccarat Multiplay V2",
                    ignoreVideo: !0,
                    localization: "baccarat",
                    loaderExpectedResourceCount: 11,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "baccarat.multiplay.v2",
                    assets: [0, 1, 2, "styles/baccarat.multiplay.a48a6ec4.css", "js/baccarat.multiplay.a48a6ec4.js"]
                },
                "baccarat.peek": {
                    title: "Peek Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.peek",
                    assets: [0, 1, 2, "styles/baccarat.peek.205dde83.css", "js/baccarat.peek.205dde83.js"]
                },
                "baccarat.prosperity": {
                    title: "Prosperity Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-prosperity",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.prosperity",
                    assets: [0, 1, 2, "styles/baccarat.prosperity.327d5703.css", "js/baccarat.prosperity.327d5703.js"]
                },
                "baccarat.v1.lightning": {
                    title: "Lightning Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-lightning",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.lightning",
                    assets: [0, 1, 2, "styles/baccarat.v1.lightning.b3f4c165.css", "js/baccarat.v1.lightning.b3f4c165.js"]
                },
                "baccarat.v1.regular": {
                    title: "Regular Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.regular",
                    assets: [0, 1, 2, "styles/baccarat.v1.regular.3ab3a914.css", "js/baccarat.v1.regular.3ab3a914.js"]
                },
                "baccarat.xtreme": {
                    title: "XXXtreme Lightning Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-xtreme",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.xtreme",
                    assets: [0, 1, 2, "styles/baccarat.xtreme.2cca4358.css", "js/baccarat.xtreme.2cca4358.js"]
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
                    assets: [0, 1, 2, "styles/baccaratmu.d09aeab7.css", "js/baccaratmu.d09aeab7.js"]
                },
                balloonrace: {
                    localization: "balloonrace",
                    audioLibrary: "ecas",
                    audioPackage: "balloonrace",
                    title: "Balloon Race",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 27,
                    adaptive: "balloonrace",
                    assets: [0, 1, 2, "styles/balloonrac.4083686b.css", "js/balloonrac.4083686b.js"]
                },
                "blackjack.v3": {
                    localization: "blackjack",
                    loaderExpectedResourceCount: 17,
                    nativeBundle: "evo_live_all",
                    title: "Classic Blackjack, Speed Blackjack",
                    audioLibrary: "legacy",
                    desktop: "blackjack.desktop",
                    mobile: "blackjack.mobile",
                    assets: [0, 1, 2, "styles/blackjack.v3.28d6cfc5.css", "js/blackjack.v3.28d6cfc5.js"]
                },
                cashorcrash: {
                    localization: "cashorcrash",
                    nativeBundle: "evo_live_all",
                    title: "Cash or Crash",
                    audioLibrary: "legacy",
                    desktop: "cashorcrash.desktop",
                    mobile: "cashorcrash.mobile",
                    assets: [0, 1, 2, "styles/cashorcras.9fe83395.css", "js/cashorcras.9fe83395.js"]
                },
                compliance: {
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Compliance",
                    localization: "common",
                    audioLibrary: "legacy",
                    adaptive: "compliance",
                    assets: [0, 1, 2, "js/compliance.3bfef02f.js"]
                },
                craps: {
                    loaderExpectedResourceCount: 20,
                    localization: "craps",
                    nativeBundle: "evo_live_all",
                    title: "Craps",
                    audioLibrary: "legacy",
                    desktop: "craps.desktop",
                    mobile: "craps.mobile",
                    assets: [0, 1, 2, "styles/craps.0d2eee9f.css", "js/craps.0d2eee9f.js"]
                },
                crazycoinflip: {
                    nativeBundle: "evo_live_all",
                    title: "Crazy Coin Flip",
                    localization: "crazycoinflip",
                    audioLibrary: "ecas",
                    audioPackage: "crazycoinflip",
                    desktop: "crazyCoinFlip.desktop",
                    mobile: "crazyCoinFlip.mobile",
                    assets: [0, 1, 2, "styles/crazycoinf.626c3b3a.css", "js/crazycoinf.626c3b3a.js"]
                },
                crazytime: {
                    localization: "crazytime",
                    nativeBundle: "evo_live_all",
                    title: "Crazy Time",
                    audioLibrary: "ecas",
                    audioPackage: "crazytime",
                    desktop: "crazyTime.desktop",
                    mobile: "crazyTime.mobile",
                    assets: [0, 1, 2, "styles/crazytime.03c12504.css", "js/crazytime.03c12504.js"]
                },
                csp: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Caribbean Stud Poker",
                    loaderExpectedResourceCount: 10,
                    adaptive: "poker.caribbean-stud-v2",
                    assets: [0, 1, 2, "styles/csp.66ab83e1.css", "js/csp.66ab83e1.js"]
                },
                customAppExample: {
                    ignoreVideo: !0,
                    audioLibrary: "legacy",
                    adaptive: "custom-app-example",
                    assets: [1, 2, "js/customappe.54677e74.js"]
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
                    assets: [0, 1, 2, "styles/deadalive.v0.3f3242de.css", "js/deadalive.v0.3f3242de.js"]
                },
                dealnodeal: {
                    loaderExpectedResourceCount: 38,
                    localization: "dealnodeal",
                    nativeBundle: "evo_live_all",
                    title: "Deal Or No Deal",
                    audioLibrary: "legacy",
                    desktop: "dealnodeal.desktop",
                    mobile: "dealnodeal.mobile",
                    assets: [0, 1, 2, "styles/dealnodeal.7f3995b2.css", "js/dealnodeal.7f3995b2.js"]
                },
                dhp: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Double Hand Casino Hold'em",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.double-hand-poker",
                    assets: [0, 1, 2, "styles/dhp.257c31bc.css", "js/dhp.257c31bc.js"]
                },
                "dragontiger.lightning": {
                    title: "Lightning Dragon Tiger",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "dragontiger-lightning",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.lightning",
                    assets: [0, 1, 2, "styles/dragontige.lightning.bbf24ddb.css", "js/dragontige.lightning.bbf24ddb.js"]
                },
                "dragontiger.regular": {
                    title: "Dragon Tiger",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.regular",
                    assets: [0, 1, 2, "styles/dragontige.regular.1ee0f6f1.css", "js/dragontige.regular.1ee0f6f1.js"]
                },
                "dragontiger.topCard": {
                    title: "Top Card",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "top-card",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.topCard",
                    assets: [0, 1, 2, "styles/dragontige.topcard.9a6285d9.css", "js/dragontige.topcard.9a6285d9.js"]
                },
                "evo-game-bootstrap.[agslot]": {
                    title: "evo-game-bootstrap",
                    localization: "ne-slots-common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[agslot]",
                    assets: [0, 1, 2, "styles/evogameboo.agslot.6ed3296b.css", "js/evogameboo.agslot.6ed3296b.js"]
                },
                "evo-game-bootstrap.[live]": {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[live]",
                    assets: [0, 1, 2, "styles/abstractga.0a10f168.css", "js/abstractga.0a10f168.js"]
                },
                "evo-game-bootstrap.[rng]": {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[rng]",
                    assets: [0, 1, 2, "js/evogameboo.rng.481840c6.js"]
                },
                "evo-rng-bacbo": {
                    title: "evo-rng-bacbo",
                    localization: "common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    loaderExpectedResourceCount: 0,
                    adaptive: "evo-rng-bacbo",
                    assets: [0, 1, 2, "styles/evorngbacb.fb800259.css", "js/evorngbacb.fb800259.js"]
                },
                "evo-roulette-new": {
                    title: "evo-roulette-new",
                    localization: "roulette-new",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-roulette-new",
                    assets: [0, 1, 2, "styles/evoroulett.71d67963.css", "js/evoroulett.71d67963.js"]
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
                    assets: [0, 1, 2, 3, "styles/ezugi.lobby.fa61bee4.css", "js/ezugi.lobby.fa61bee4.js"]
                },
                fantan: {
                    loaderExpectedResourceCount: 19,
                    localization: "fantan",
                    nativeBundle: "evo_live_all",
                    title: "Fan Tan",
                    audioLibrary: "legacy",
                    desktop: "fanTan.desktop",
                    mobile: "fanTan.mobile",
                    assets: [0, 1, 2, "styles/fantan.6c5bdb8e.css", "js/fantan.6c5bdb8e.js"]
                },
                funkytime: {
                    nativeBundle: "evo_live_all",
                    title: "Funky Time",
                    localization: "funkytime",
                    audioLibrary: "ecas",
                    audioPackage: "funkytime",
                    desktop: "funkyTime.desktop",
                    mobile: "funkyTime.mobile",
                    assets: [0, 1, 2, "styles/funkytime.f14cdacb.css", "js/funkytime.f14cdacb.js"]
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
                    assets: [0, 1, 2, "styles/gonzotreas.9f988b0b.css", "js/gonzotreas.9f988b0b.js"]
                },
                holdem: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Casino Hold'em",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.casino-holdem-v2",
                    assets: [0, 1, 2, "styles/holdem.3cf5951a.css", "js/holdem.3cf5951a.js"]
                },
                lightningball: {
                    localization: "lightninglotto",
                    audioLibrary: "ecas",
                    audioPackage: "lightningball",
                    title: "Lightning Ball",
                    desktop: "lightningBall.desktop",
                    mobile: "lightningBall.mobile",
                    assets: [0, 1, 2, "styles/lightningb.06045cd4.css", "js/lightningb.06045cd4.js"]
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
                    assets: [0, 1, 2, "styles/lightningd.bcb236cc.css", "js/lightningd.bcb236cc.js"]
                },
                lightninglotto: {
                    localization: "lightninglotto",
                    audioLibrary: "ecas",
                    audioPackage: "lightninglotto",
                    title: "Lightning Lotto",
                    nativeBundle: "evo_live_all",
                    desktop: "lightningLotto.desktop",
                    mobile: "lightningLotto.mobile",
                    assets: [0, 1, 2, "styles/lightningl.4f27ad4b.css", "js/lightningl.4f27ad4b.js"]
                },
                "lightningstorm.V0": {
                    title: "Lightning Storm",
                    localization: "lightningstorm",
                    audioLibrary: "ecas",
                    audioPackage: "lightningstorm",
                    desktop: "lightningStorm.desktop",
                    mobile: "lightningStorm.mobile",
                    assets: [0, 1, 2, "styles/lightnings.v0.c22fe673.css", "js/lightnings.v0.c22fe673.js"]
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
                    assets: [0, 1, 2, 3, "styles/live.ezugi.23880a2a.css", "js/live.ezugi.23880a2a.js"]
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
                    assets: [0, 1, 2, "styles/liveslotde.dd138884.css", "js/liveslotde.dd138884.js"]
                },
                livespins: {
                    localization: "common",
                    title: "Livespins OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "livespins",
                    assets: [0, 1, 2, 3, "styles/livespins.55d788ef.css", "js/livespins.55d788ef.js"]
                },
                lobby: {
                    localization: "smartlobby",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Lobby",
                    loaderExpectedResourceCount: 11,
                    audioLibrary: "legacy",
                    adaptive: "lobby",
                    assets: [0, 1, 2, "styles/lobby.81a707ad.css", "js/lobby.81a707ad.js"]
                },
                "lobby-snippet": {
                    localization: "smartlobby",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Lobby Snippet",
                    audioLibrary: "legacy",
                    adaptive: "lobby-snippet",
                    assets: [0, 1, 2, "styles/lobbysnipp.59b840ad.css", "js/lobbysnipp.59b840ad.js"]
                },
                ls2: {
                    localization: "ls2",
                    audioLibrary: "ecas",
                    title: "Crazy Pachinko",
                    nativeBundle: "evo_live_all",
                    audioPackage: "crazypachinko",
                    desktop: "ls2.desktop",
                    mobile: "ls2.mobile",
                    assets: [0, 1, 2, "styles/ls2.596f8c31.css", "js/ls2.596f8c31.js"]
                },
                ls3: {
                    nativeBundle: "evo_live_all",
                    title: "Extra Chilli Epic Spins",
                    loaderExpectedResourceCount: 14,
                    localization: "ls3",
                    audioLibrary: "legacy",
                    desktop: "ls3.desktop",
                    mobile: "ls3.mobile",
                    assets: [0, 1, 2, "styles/ls3.d6146ac7.css", "js/ls3.d6146ac7.js"]
                },
                marblerace: {
                    title: "Marble Race",
                    localization: "marblerace",
                    adaptive: "marblerace",
                    assets: [0, 1, 2, "styles/marblerace.fe32074c.css", "js/marblerace.fe32074c.js"]
                },
                megaball: {
                    loaderExpectedResourceCount: 31,
                    localization: "megaball",
                    nativeBundle: "evo_live_all",
                    title: "Mega Ball",
                    audioLibrary: "legacy",
                    desktop: "megaball.desktop",
                    mobile: "megaball.mobile",
                    assets: [0, 1, 2, "styles/megaball.9958bb84.css", "js/megaball.9958bb84.js"]
                },
                moneywheel: {
                    localization: "money_wheel",
                    nativeBundle: "evo_live_all",
                    title: "Dream Catcher, Imperial Quest",
                    audioLibrary: "ecas",
                    audioPackage: "moneywheel",
                    desktop: "moneywheel.desktop",
                    mobile: "moneywheel.mobile",
                    assets: [0, 1, 2, "styles/moneywheel.433a5ee4.css", "js/moneywheel.433a5ee4.js"]
                },
                monopoly: {
                    localization: "monopoly",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly",
                    audioLibrary: "ecas",
                    audioPackage: "monopoly",
                    desktop: "monopoly.desktop",
                    mobile: "monopoly.mobile",
                    assets: [0, 1, 2, "styles/monopoly.cea9733f.css", "js/monopoly.cea9733f.js"]
                },
                "monopoly.v2": {
                    localization: "monopoly",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly Mobx",
                    audioLibrary: "ecas",
                    audioPackage: "monopoly",
                    desktop: "monopoly.desktop.v2",
                    mobile: "monopoly.mobile.v2",
                    assets: [0, 1, 2, "styles/monopoly.v2.a5293c0a.css", "js/monopoly.v2.a5293c0a.js"]
                },
                monopolybigballer: {
                    localization: "monopolybigballer",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly Big Baller",
                    audioLibrary: "ecas",
                    audioPackage: "monopoly-bigballer",
                    desktop: "monopolybigballer.desktop",
                    mobile: "monopolybigballer.mobile",
                    assets: [0, 1, 2, "styles/monopolybi.808c4aee.css", "js/monopolybi.808c4aee.js"]
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
                    assets: [0, 1, 2, "styles/nebigbangb.25799f25.css", "js/nebigbangb.25799f25.js"]
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
                    assets: [0, 1, 2, "styles/nebigmoney.84ddc3c3.css", "js/nebigmoney.84ddc3c3.js"]
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
                    assets: [0, 1, 2, "styles/nebuckshot.d734b714.css", "js/nebuckshot.d734b714.js"]
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
                    assets: [0, 1, 2, "styles/necandies1.ac239ea9.css", "js/necandies1.ac239ea9.js"]
                },
                "ne-corneliusmhm": {
                    title: "ne-corneliusmhm",
                    localization: "ne-corneliusmilkhuntermegaways",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "corneliusmhm",
                    loaderExpectedResourceCount: 147,
                    adaptive: "ne-corneliusmhm",
                    assets: [0, 1, 2, "styles/necorneliu.76549ee2.css", "js/necorneliu.76549ee2.js"]
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
                    assets: [0, 1, 2, "styles/necrabtrap.4bbcaa45.css", "js/necrabtrap.4bbcaa45.js"]
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
                    assets: [0, 1, 2, "styles/necursedtr.0cbf08d6.css", "js/necursedtr.0cbf08d6.js"]
                },
                "ne-dazzleme": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "magicbox",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-goldenrealms",
                    title: "Dazzle Me",
                    adaptive: "ne-dazzleme",
                    assets: [0, 1, 2, "styles/nedazzleme.c984238b.css", "js/nedazzleme.c984238b.js"]
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
                    assets: [0, 1, 2, "styles/neelkhunte.0b9ecf59.css", "js/neelkhunte.0b9ecf59.js"]
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
                    assets: [0, 1, 2, "styles/nefinncand.4020f885.css", "js/nefinncand.4020f885.js"]
                },
                "ne-fruitshop": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "starburst-brandable",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-slots-common",
                    adaptive: "ne-fruitshop",
                    assets: [0, 1, 2, "styles/nefruitsho.9dae2a5a.css", "js/nefruitsho.9dae2a5a.js"]
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
                    assets: [0, 1, 2, "styles/negoldenwh.c6b8eb06.css", "js/negoldenwh.c6b8eb06.js"]
                },
                "ne-goldenchicken": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "goldenchicken",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-goldenrealms",
                    adaptive: "ne-goldenchicken",
                    assets: [0, 1, 2, "styles/negoldench.ee0ebd43.css", "js/negoldench.ee0ebd43.js"]
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
                    assets: [0, 1, 2, "styles/negoldenre.5b41119c.css", "js/negoldenre.5b41119c.js"]
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
                    assets: [0, 1, 2, "styles/nejackandb.74381fb6.css", "js/nejackandb.74381fb6.js"]
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
                    assets: [0, 1, 2, "styles/nejackhamm.8faea6fd.css", "js/nejackhamm.8faea6fd.js"]
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
                    assets: [0, 1, 2, "styles/nejunglesp.e3d88a03.css", "js/nejunglesp.e3d88a03.js"]
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
                    assets: [0, 1, 2, "styles/nelocknpop.d1730776.css", "js/nelocknpop.d1730776.js"]
                },
                "ne-rabidrandy": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rabidrandy",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-goldenrealms",
                    adaptive: "ne-rabidrandy",
                    assets: [0, 1, 2, "styles/nerabidran.c289e7a0.css", "js/nerabidran.c289e7a0.js"]
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
                    assets: [0, 1, 2, "styles/nerage.1eb1caf0.css", "js/nerage.1eb1caf0.js"]
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
                    assets: [0, 1, 2, "styles/neroyalnut.1a05e94b.css", "js/neroyalnut.1a05e94b.js"]
                },
                "ne-sb-brandable": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    title: "starburst-brandable",
                    audioPackage: "Starburst Brandable",
                    loaderExpectedResourceCount: 41,
                    localization: "ne-starburst-brandable",
                    adaptive: "ne-starburst-brandable",
                    assets: [0, 1, 2, "styles/nesbbranda.c8bcd1d0.css", "js/nesbbranda.c8bcd1d0.js"]
                },
                "ne-spacewarsmw": {
                    title: "ne-spacewarsmw",
                    localization: "ne-spacewarsmw",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "spacewarsmw",
                    loaderExpectedResourceCount: 133,
                    adaptive: "ne-spacewarsmw",
                    assets: [0, 1, 2, "styles/nespacewar.64d7102b.css", "js/nespacewar.64d7102b.js"]
                },
                "ne-starburst-galaxy": {
                    title: "ne-starburst-galaxy",
                    localization: "ne-slots-common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "starburst-galaxy",
                    adaptive: "ne-starburst-galaxy",
                    assets: [0, 1, 2, "styles/nestarburs.eee829b0.css", "js/nestarburs.eee829b0.js"]
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
                    assets: [0, 1, 2, "styles/nethrillto.4fdb6982.css", "js/nethrillto.4fdb6982.js"]
                },
                "ne-twin-spin": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "twister",
                    loaderExpectedResourceCount: 76,
                    localization: "ne-elkhunter",
                    title: "Twin Spin",
                    adaptive: "ne-twin-spin",
                    assets: [0, 1, 2, "styles/netwinspin.e8430633.css", "js/netwinspin.e8430633.js"]
                },
                "ne-twister": {
                    title: "Twister",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "twister",
                    loaderExpectedResourceCount: 198,
                    localization: "ne-twister",
                    adaptive: "ne-twister",
                    assets: [0, 1, 2, "styles/netwister.6d5e7a22.css", "js/netwister.6d5e7a22.js"]
                },
                "powerball.v0": {
                    localization: "powerball",
                    title: "Evo PowerBall",
                    audioLibrary: "ecas",
                    audioPackage: "powerball",
                    nativeBundle: "evo_live_all",
                    adaptive: "powerball.adaptive",
                    assets: [0, 1, 2, "styles/powerball.v0.f6a0a2c2.css", "js/powerball.v0.f6a0a2c2.js"]
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
                    assets: [0, 1, 2, "styles/promotions.62c6ee12.css", "js/promotions.62c6ee12.js"]
                },
                "reserved-table": {
                    localization: "common",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "",
                    audioLibrary: "legacy",
                    adaptive: "reserved-table",
                    assets: [0, 1, 2, "styles/reservedta.cd1a39d6.css", "js/reservedta.cd1a39d6.js"]
                },
                "rng-baccarat.lightning": {
                    title: "First Person Lightning Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "ecas",
                    audioPackage: "rng-baccarat-lightning",
                    adaptive: "rng-baccarat.lightning",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.lightning.cf33d8d2.css", "js/rngbaccara.lightning.cf33d8d2.js"]
                },
                "rng-baccarat.prosperity": {
                    title: "First Person Prosperity Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "ecas",
                    audioPackage: "rng-baccarat-prosperity",
                    adaptive: "rng-baccarat.prosperity",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.prosperity.828b06d2.css", "js/rngbaccara.prosperity.828b06d2.js"]
                },
                "rng-baccarat.regular": {
                    title: "First Person Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "ecas",
                    audioPackage: "rng-baccarat",
                    adaptive: "rng-baccarat.regular",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.regular.f9136465.css", "js/rngbaccara.regular.f9136465.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.v0.de701860.css", "js/rngbaccara.v0.de701860.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngblackja.horizon.f9239bbc.css", "js/rngblackja.horizon.f9239bbc.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngcraps.f59cffda.css", "js/rngcraps.f59cffda.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngdealnod.f75d7155.css", "js/rngdealnod.f75d7155.js"]
                },
                "rng-dragontiger.v0": {
                    nativeBundle: "evo_rng_topcard",
                    title: "First Person Top Card, First Person Dragon Tiger",
                    localization: "rng-dragontiger",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "legacy",
                    desktop: "rng-dragontiger.desktop",
                    mobile: "rng-dragontiger.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngdragont.v0.af026408.css", "js/rngdragont.v0.af026408.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rnghilo.v0.b7295bbc.css", "js/rnghilo.v0.b7295bbc.js"]
                },
                "rng-lightninglotto": {
                    localization: "lightninglotto",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rng-lightninglotto",
                    title: "First Person Lightning Lotto",
                    nativeBundle: "evo_rng_lightninglotto",
                    adaptive: "rng-lightningLotto",
                    assets: [0, 1, 2, 4, 5, "styles/rnglightni.86cc4b01.css", "js/rnglightni.86cc4b01.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngmegabal.11987595.css", "js/rngmegabal.11987595.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngmoneywh.horizon.417ee8ff.css", "js/rngmoneywh.horizon.417ee8ff.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngroulett.horizon.preview.b6274c3d.css", "js/rngroulett.horizon.preview.b6274c3d.js"]
                },
                "rng-sicbo": {
                    audioLibrary: "ecas",
                    audioPackage: "rng-sicbo",
                    loaderExpectedResourceCount: 51,
                    localization: "rng-sicbo",
                    nativeBundle: "evo_rng_sicbo",
                    title: "First Person Super Sic Bo",
                    adaptive: "rng.sicbo",
                    assets: [0, 1, 2, "styles/rngsicbo.285d49bd.css", "js/rngsicbo.285d49bd.js"]
                },
                "rng-videopoker.v1": {
                    localization: "poker",
                    nativeBundle: "evo_rng_videopoker",
                    audioLibrary: "ecas",
                    audioPackage: "rng-videopoker",
                    title: "First Person Video Poker",
                    loaderExpectedResourceCount: 73,
                    adaptive: "poker.rng-video-poker",
                    assets: [0, 1, 2, "styles/rngvideopo.v1.5955f2fc.css", "js/rngvideopo.v1.5955f2fc.js"]
                },
                roulette: {
                    localization: "roulette",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 23,
                    title: "Roulette, Auto-Roulette, Speed Roulette, American Roulette, Lightning Roulette, Gold Vault Roulette, Instant Roulette, XXXtreme Lightning Roulette, Immersive Roulette, Speed Auto-Roulette, Double Ball Roulette, VIP Roulette, Salon Privé Roulette, French Roulette Gold, Auto Lightning Roulette, Red Door Roulette",
                    audioLibrary: "legacy",
                    desktop: "roulette.desktop",
                    mobile: "roulette.mobile",
                    assets: [0, 1, 2, "styles/roulette.65968f95.css", "js/roulette.65968f95.js"]
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
                    assets: [0, 1, 2, "styles/roulette.65968f95.css", "js/roulette.65968f95.js"]
                },
                "scalableblackjack.v2": {
                    localization: "blackjack",
                    nativeBundle: "evo_live_all",
                    title: "Scalable Blackjack, Free Bet Blackjack, Power Blackjack, Lightning Blackjack",
                    loaderExpectedResourceCount: 21,
                    audioLibrary: "legacy",
                    desktop: "blackjack.scalable.desktop",
                    mobile: "blackjack.scalable.mobile",
                    assets: [0, 1, 2, "styles/scalablebl.v2.0dae10dd.css", "js/scalablebl.v2.0dae10dd.js"]
                },
                scalableblackjack: {
                    localization: "blackjack",
                    nativeBundle: "evo_live_all",
                    title: "Scalable Blackjack, Free Bet Blackjack, Power Blackjack, Lightning Blackjack",
                    loaderExpectedResourceCount: 21,
                    audioLibrary: "legacy",
                    desktop: "blackjack.scalable.desktop",
                    mobile: "blackjack.scalable.mobile",
                    assets: [0, 1, 2, "styles/scalablebl.v2.0dae10dd.css", "js/scalablebl.v2.0dae10dd.js"]
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
                    assets: [0, 1, 2, "styles/sicbo.5641c28e.css", "js/sicbo.5641c28e.js"]
                },
                "sicbo.lightning": {
                    audioLibrary: "ecas",
                    audioPackage: "sicbo-lightning",
                    loaderExpectedResourceCount: 31,
                    localization: "sicbo",
                    title: "Lightning Sic Bo",
                    desktop: "sicbo.lightning.desktop",
                    mobile: "sicbo.lightning.mobile",
                    assets: [0, 1, 2, "styles/sicbo.lightning.7a906eba.css", "js/sicbo.lightning.7a906eba.js"]
                },
                sidebetcity: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "sidebetcity",
                    title: "Side Bet City",
                    loaderExpectedResourceCount: 10,
                    adaptive: "poker.side-bet-city",
                    assets: [0, 1, 2, "styles/sidebetcit.0ef18643.css", "js/sidebetcit.0ef18643.js"]
                },
                "slots.btg": {
                    localization: "common",
                    nativeBundle: "wrapped_btg",
                    title: "Big Time Gaming OSS wrapper",
                    ignoreVideo: !0,
                    audioLibrary: "legacy",
                    adaptive: "slots.btg",
                    assets: [0, 1, 2, 3, "styles/slots.btg.0d18391e.css", "js/slots.btg.0d18391e.js"]
                },
                "slots.ne": {
                    localization: "common",
                    nativeBundle: "wrapped_ne",
                    title: "Netent OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "slots.ne",
                    assets: [0, 1, 2, 3, "styles/slots.ne.7521e826.css", "js/slots.ne.7521e826.js"]
                },
                "slots.ne.horizon": {
                    localization: "common",
                    nativeBundle: "wrapped_ne",
                    title: "Netent OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "slots.ne.horizon",
                    assets: [0, 1, 2, 3, "styles/slots.ne.horizon.a8242099.css", "js/slots.ne.horizon.a8242099.js"]
                },
                "slots.nlc": {
                    localization: "common",
                    nativeBundle: "wrapped_nlc",
                    title: "No Limit City OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "slots.nlc",
                    assets: [0, 1, 2, 3, "styles/slots.nlc.6e56b814.css", "js/slots.nlc.6e56b814.js"]
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
                    assets: [0, 1, 2, 3, "styles/slots.rt.ba1a962a.css", "js/slots.rt.ba1a962a.js"]
                },
                stockmarket: {
                    title: "Stock Market",
                    localization: "stockmarket",
                    audioLibrary: "ecas",
                    audioPackage: "stockmarket",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 33,
                    adaptive: "stockmarket",
                    assets: [0, 1, 2, "styles/stockmarke.24af53ce.css", "js/stockmarke.24af53ce.js"]
                },
                "tcp.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Three Card Poker, Triple Card Poker",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.d7cadc27.css", "js/tcp.v2.d7cadc27.js"]
                },
                "trp.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Three Card Poker, Triple Card Poker",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.d7cadc27.css", "js/tcp.v2.d7cadc27.js"]
                },
                teenpatti: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "teenpatti",
                    title: "Teen Patti",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.d7cadc27.css", "js/tcp.v2.d7cadc27.js"]
                },
                testgame: {
                    title: "testgame",
                    localization: "common",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "testgame",
                    assets: [0, 1, 2, "styles/testgame.db4c795f.css", "js/testgame.db4c795f.js"]
                },
                "thb.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Texas Hold'em Bonus Poker",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.texas-bonus-v2",
                    assets: [0, 1, 2, "styles/thb.v2.12abf7c7.css", "js/thb.v2.12abf7c7.js"]
                },
                topdice: {
                    audioLibrary: "ecas",
                    audioPackage: "topdice",
                    localization: "topdice",
                    nativeBundle: "evo_live_all",
                    title: "Top Dice",
                    desktop: "topdice.desktop",
                    mobile: "topdice.mobile",
                    assets: [0, 1, 2, "styles/topdice.b48b256b.css", "js/topdice.b48b256b.js"]
                },
                uprising: {
                    localization: "uprising",
                    title: "Uprising",
                    audioLibrary: "ecas",
                    audioPackage: "uprising",
                    desktop: "uprising.desktop",
                    mobile: "uprising.mobile",
                    assets: [0, 1, 2, "styles/uprising.462b696a.css", "js/uprising.462b696a.js"]
                },
                uth: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Ultimate Texas Hold'em, Extreme Texas Hold'em",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.ultimate-texas",
                    assets: [0, 1, 2, "styles/uth.ea2e6016.css", "js/uth.ea2e6016.js"]
                },
                eth: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Ultimate Texas Hold'em, Extreme Texas Hold'em",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.ultimate-texas",
                    assets: [0, 1, 2, "styles/uth.ea2e6016.css", "js/uth.ea2e6016.js"]
                },
                valkyrie: {
                    localization: "common",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "valkyrie",
                    assets: [0, 1, 2, 3, "styles/valkyrie.e9737183.css", "js/valkyrie.e9737183.js"]
                },
                "videopoker.v1": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "videopoker",
                    title: "Video Poker",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.video-poker",
                    assets: [0, 1, 2, "styles/videopoker.v1.ecb56b8d.css", "js/videopoker.v1.ecb56b8d.js"]
                }
            }
        }
    </script>
    <script>
        "use strict";
        (() => {
            var z, t, C, w, V = {
                    363188: (z, t, C) => {
                        C.d(t, {
                            $: () => w,
                            Z: () => V
                        });
                        class w extends Error {
                            constructor(z, t) {
                                super(`FetchUrl "${z}" exception: ${t instanceof Error?t:`${t.status} ${t.statusText}`}`), this.url = z, t instanceof Response ? (this.isOpaqueRedirect = "opaqueredirect" === t.type, this.status = t.status) : (this.isOpaqueRedirect = !1, this.status = null)
                            }
                        }

                        function V(z, t) {
                            console.error(z, t);
                            const C = window.EVO_LOADER;
                            if (C) {
                                let V;
                                if (t instanceof w) V = `HTTP code ${t.isOpaqueRedirect?"30x":t.status}`;
                                else if (t instanceof Response) V = `HTTP code ${"opaqueredirect"===t.type?"30x":t.status}`;
                                else if (t instanceof Error) V = t.stack;
                                else try {
                                    V = JSON.stringify(t) || "undefined"
                                } catch (z) {
                                    V = z ? z.toString() : ""
                                }
                                C.sendLog("CLIENT_ERROR_LOADING_STATIC_RESOURCE", {
                                    failedURL: z,
                                    error: V
                                })
                            }
                        }
                    },
                    894273: (z, t, C) => {
                        C.d(t, {
                            EL: () => W,
                            ah: () => y,
                            gE: () => V,
                            mN: () => h,
                            oj: () => Z,
                            vV: () => H,
                            yW: () => I
                        });
                        class w extends Error {
                            constructor(z, t, {
                                extra: C,
                                localizedMessage: w,
                                sendToSentry: V
                            } = {}) {
                                super(z), this.type = t, this.name = t, this.sendToSentry = !1 !== V, this.localizedMessage = w, C && (this.extra = C)
                            }
                        }
                        class V extends w {
                            constructor(z, t = {}) {
                                super(z, "Generic", t)
                            }
                        }
                        class h extends w {
                            constructor(z, {
                                doNotRetry: t = !1,
                                localizedMessage: C,
                                sendToSentry: w
                            } = {}) {
                                super(z, "Loader", {
                                    localizedMessage: C,
                                    sendToSentry: w
                                }), this.doNotRetry = t
                            }
                        }
                        class I extends w {
                            constructor(z, t) {
                                super(z, "Sound", {
                                    extra: t
                                })
                            }
                        }
                        class y extends w {
                            constructor(z, t) {
                                super(z, "MultiwindowInitialization", {
                                    extra: t
                                })
                            }
                        }

                        function Z(z) {
                            if ("string" == typeof z) return new h(z, {
                                sendToSentry: !1
                            });
                            if (z instanceof ErrorEvent) return new h(`Script loading error: filename: ${z.filename}, colno: ${z.colno}, lineno: ${z.lineno}, message: ${z.message}`);
                            const t = new h(z.message);
                            return t.stack = z.stack, t
                        }

                        function R(z) {
                            return z instanceof w
                        }

                        function W(z) {
                            return !!z && z instanceof Error && "Loader" === z.type
                        }

                        function H(z) {
                            window.EVO_VERBOSE(z.stack || z.message, 2), window.console.error(z);
                            const t = !R(z) || z.sendToSentry;
                            if ("undefined" != typeof Sentry && t) {
                                R(z) || (z.name = "UnclassifiedError" + (z.name ? ` - ${z.name}` : ""));
                                const t = R(z) ? z.type : "UnclassifiedError",
                                    C = R(z) ? z.extra : void 0;
                                Sentry.captureException(z, function(z, t) {
                                    return Object.assign({
                                        tags: {
                                            errorType: z
                                        }
                                    }, t ? {
                                        extra: {
                                            "Additional Info": t
                                        }
                                    } : {})
                                }(t, C))
                            }
                        }
                    },
                    502637: (z, t, C) => {
                        function w(z) {
                            let t = 1;
                            const C = {};
                            for (z.includes("+") && (z = z.replace(/\+/g, " ")); t < z.length;) {
                                let w = z.indexOf("&", t); - 1 === w && (w = z.length);
                                let V = z.indexOf("=", t); - 1 === V && (V = w);
                                const h = decodeURIComponent(z.substring(t, V)),
                                    I = decodeURIComponent(z.substring(V + 1, w)),
                                    y = C[h];
                                void 0 === y ? C[h] = I : Array.isArray(y) ? y.push(I) : C[h] = [y, I], t = w + 1
                            }
                            return C
                        }
                        C.d(t, {
                            F: () => R,
                            w: () => Z
                        });
                        const V = document.createElement("a");
                        let h, I;

                        function y(z) {
                            const t = {};
                            for (const [C, w] of Object.entries(z)) t[C] = Array.isArray(w) ? [...w] : w;
                            return t
                        }

                        function Z(z) {
                            const {
                                hostname: t,
                                pathname: C,
                                port: Z,
                                protocol: W,
                                searchParams: H,
                                hashParams: D
                            } = function(z) {
                                if (z === h && I) return I;
                                const t = function(z) {
                                    V.href = z;
                                    let t = V.pathname || "";
                                    "/" !== t.charAt(0) && (t = `/${t}`);
                                    const C = V.protocol || window.location.protocol;
                                    let h = V.hostname,
                                        I = V.port;
                                    return h || (h = window.location.hostname, I = window.location.port), {
                                        hashParams: w(V.hash),
                                        hostname: h,
                                        pathname: t,
                                        port: I,
                                        protocol: C,
                                        searchParams: w(V.search)
                                    }
                                }(z);
                                return h = z, I = t, t
                            }(z);
                            return {
                                hashParams: y(D),
                                hostname: t,
                                pathname: C,
                                port: Z,
                                protocol: W,
                                searchParams: y(H),
                                toString: function() {
                                    return this.origin + this.pathname + this.search + this.hash
                                },
                                paramsToString: R,
                                getParam: function(z) {
                                    let t = this.searchParams[z];
                                    return void 0 === t && (t = this.hashParams[z], void 0 === t) ? null : Array.isArray(t) ? t[0] : t
                                },
                                get origin() {
                                    return `${this.protocol}//${this.hostname}${this.port?`:${this.port}`:""}`
                                },
                                get search() {
                                    return R("?", this.searchParams)
                                },
                                get hash() {
                                    return R("#", this.hashParams)
                                }
                            }
                        }

                        function R(z, t) {
                            let C = "";
                            for (const z of Object.keys(t)) {
                                const w = t[z],
                                    V = encodeURIComponent(z);
                                if (Array.isArray(w))
                                    for (const z of w) C && (C += "&"), C += `${V}=${encodeURIComponent(z)}`;
                                else null != w && (C && (C += "&"), C += `${V}=${encodeURIComponent(w)}`)
                            }
                            return C ? z + C : C
                        }
                    },
                    107133: (z, t, C) => {
                        C.d(t, {
                            Y: () => V
                        });
                        const w = !!window.EVO_VERBOSE;

                        function V() {
                            try {
                                return !Object || !window || !document.body || w && !window.EVO_VERBOSE
                            } catch (z) {
                                return !0
                            }
                        }
                    },
                    695500: (z, t, C) => {
                        C.d(t, {
                            Bt: () => D,
                            CB: () => H,
                            Ds: () => y,
                            EE: () => c,
                            ET: () => v,
                            FB: () => d,
                            Nw: () => u,
                            QJ: () => X,
                            Rh: () => _,
                            UA: () => T,
                            YU: () => i,
                            ZN: () => q,
                            ZP: () => Z,
                            cb: () => W,
                            kl: () => O,
                            u9: () => B,
                            wP: () => Y,
                            wc: () => R,
                            z6: () => S
                        });
                        var w = C(363188),
                            V = C(894273),
                            h = C(502637),
                            I = C(107133);

                        function y(z = 32) {
                            const t = window.crypto.getRandomValues(new Uint8Array(z));
                            return window.btoa(String.fromCharCode.apply(null, t))
                        }

                        function Z(z, t) {
                            const C = z.indexOf(t);
                            if (-1 === C) return !1;
                            const w = z.pop();
                            return C < z.length && (z[C] = w), !0
                        }

                        function R(z, t) {
                            if (t < 0 || t >= z.length) return !1;
                            const C = z.pop();
                            return t < z.length && (z[t] = C), !0
                        }

                        function W(z, t) {
                            return new Promise((C => {
                                window.setTimeout((() => C(t)), z)
                            }))
                        }

                        function H() {
                            const z = document.getElementById("verbose-log");
                            z && (z.innerHTML = "")
                        }

                        function D(z) {
                            z && (z.style.display = "none")
                        }

                        function O(z, t = !1) {
                            z && (z.style.display = t ? "flex" : "block")
                        }
                        const U = {},
                            n = {};

                        function _(z, t) {
                            return new Promise(((C, w) => {
                                if (!z) return void w(new Error("No url or wrong build options"));
                                if (n[z]) return void w(new Error("linksPrefetched[url]"));
                                const V = document.createElement("link");
                                V.rel = "prefetch", V.as = t, V.href = z, V.crossOrigin = "anonymous", document.head.appendChild(V), n[z] = !0, V.addEventListener("error", (() => w(new Error(`Failed preload URL: ${z}`)))), V.addEventListener("load", C)
                            }))
                        }

                        function X(z, t, C) {
                            let V = U[z];
                            return void 0 !== V ? delete U[z] : (window.EVO_VERBOSE(`fetchUrl/started ${z}`, 0, z), V = fetch(z, Object.assign({
                                redirect: "follow",
                                credentials: "same-origin",
                                keepalive: !0,
                                mode: "cors"
                            }, C)).then((t => {
                                if (!t.ok) throw t;
                                return window.EVO_VERBOSE(`fetchUrl/done ${z}`, 0, z, 3e3), t
                            })).catch((t => {
                                throw window.EVO_VERBOSE(`fetchUrl/fail/${t.status} ${z}`, 2, z), new w.$(z, t)
                            }))), "json" === t ? V.then((z => z.json())) : "text" === t ? V.then((z => z.text())) : V
                        }

                        function d(z, t) {
                            const C = `/frontend/loc/strings/${encodeURIComponent(z)}/${t}.json`,
                                V = (window.EVO_CDN || window.EVO_ORIGIN || "") + C;
                            return window.EVO_CDN || window.EVO_ORIGIN, X(V, "json").catch(void 0).catch((z => (w.Z(V, z), Promise.reject(z))))
                        }
                        let s = !1;
                        window.addEventListener("beforeunload", (() => {
                            s = !0, "undefined" != typeof Sentry && Sentry.addBreadcrumb({
                                message: "window.onbeforeunload",
                                category: "location"
                            })
                        }));
                        const J = 5;

                        function v(z, t) {
                            return (!V.EL(t) || !t.doNotRetry) && z <= J
                        }

                        function i(z) {
                            var t;
                            z.disableDuration && (function() {
                                const z = h.w(window.location.href);
                                z.searchParams.cdn = void 0, z.hashParams.cdn = void 0, window.history.replaceState(null, "", z.toString())
                            }(), function(z) {
                                const t = new Date(Date.now() + 60 * z * 1e3).toUTCString();
                                document.cookie = `ignore_cdn=true; expires=${t}; path=/`
                            }(z.disableDuration)), s || I.Y() || (window.setTimeout((() => {
                                window.location.reload()
                            }), (t = z.failureCount) * t * 100), s = !0)
                        }

                        function q() {
                            u(void 0)
                        }

                        function T(z) {
                            if (!z || h.w(z).origin === window.location.origin) return z;
                            window.console.error("Refusing to load manifest from remote", z)
                        }

                        function Y() {
                            const z = h.w(window.location.href);
                            return parseInt(z.getParam("failed") || "0", 10)
                        }

                        function u(z) {
                            const t = h.w(window.location.href);
                            t.hashParams.failed = void 0 !== z ? z.toString() : void 0, window.history.replaceState(null, "", t.toString())
                        }

                        function S(z) {
                            window.EVO_LOADER.sendLog("CLIENT_GAME_RELOAD", {
                                reason: z
                            })
                        }

                        function B({
                            failureReason: z,
                            isCdnEnabled: t
                        }) {
                            if (!t) return 0;
                            switch (z) {
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

                        function c(z = window.location.href) {
                            return h.w(z).getParam("provider")
                        }
                    },
                    934789: (z, t, C) => {
                        function w(z, t) {
                            var C = {};
                            for (var w in z) Object.prototype.hasOwnProperty.call(z, w) && t.indexOf(w) < 0 && (C[w] = z[w]);
                            if (null != z && "function" == typeof Object.getOwnPropertySymbols) {
                                var V = 0;
                                for (w = Object.getOwnPropertySymbols(z); V < w.length; V++) t.indexOf(w[V]) < 0 && Object.prototype.propertyIsEnumerable.call(z, w[V]) && (C[w[V]] = z[w[V]])
                            }
                            return C
                        }
                        C.d(t, {
                            Tt: () => w
                        }), Object.create, Object.create
                    }
                },
                h = {};

            function I(z) {
                var t = h[z];
                if (void 0 !== t) return t.exports;
                var C = h[z] = {
                    exports: {}
                };
                return V[z](C, C.exports, I), C.exports
            }
            I.m = V, t = Object.getPrototypeOf ? z => Object.getPrototypeOf(z) : z => z.__proto__, I.t = function(C, w) {
                if (1 & w && (C = this(C)), 8 & w) return C;
                if ("object" == typeof C && C) {
                    if (4 & w && C.__esModule) return C;
                    if (16 & w && "function" == typeof C.then) return C
                }
                var V = Object.create(null);
                I.r(V);
                var h = {};
                z = z || [null, t({}), t([]), t(t)];
                for (var y = 2 & w && C;
                    "object" == typeof y && !~z.indexOf(y); y = t(y)) Object.getOwnPropertyNames(y).forEach((z => h[z] = () => C[z]));
                return h.default = () => C, I.d(V, h), V
            }, I.d = (z, t) => {
                for (var C in t) I.o(t, C) && !I.o(z, C) && Object.defineProperty(z, C, {
                    enumerable: !0,
                    get: t[C]
                })
            }, I.f = {}, I.e = z => Promise.all(Object.keys(I.f).reduce(((t, C) => (I.f[C](z, t), t)), [])), I.u = z => "js/" + {
                1767: "sm.ecas",
                66885: "native-utilities",
                80616: "video-lib-local",
                83100: "sm.howler"
            }[z] + "." + {
                1767: "70d5f030",
                66885: "125555e5",
                80616: "5f562e13",
                83100: "cec4c3d6"
            }[z] + ".js", I.miniCssF = z => {}, I.o = (z, t) => Object.prototype.hasOwnProperty.call(z, t), C = {}, w = "/frontend/evo/r2/:", I.l = (z, t, V, h) => {
                if (C[z]) C[z].push(t);
                else {
                    var y, Z;
                    if (void 0 !== V)
                        for (var R = document.getElementsByTagName("script"), W = 0; W < R.length; W++) {
                            var H = R[W];
                            if (H.getAttribute("src") == z || H.getAttribute("data-webpack") == w + V) {
                                y = H;
                                break
                            }
                        }
                    y || (Z = !0, (y = document.createElement("script")).charset = "utf-8", y.timeout = NaN, I.nc && y.setAttribute("nonce", I.nc), y.setAttribute("data-webpack", w + V), y.src = z), C[z] = [t];
                    var D = (t, w) => {
                            y.onerror = y.onload = null, clearTimeout(O);
                            var V = C[z];
                            if (delete C[z], y.parentNode && y.parentNode.removeChild(y), V && V.forEach((z => z(w))), t) return t(w)
                        },
                        O = setTimeout(D.bind(null, void 0, {
                            type: "timeout",
                            target: y
                        }), window.EVO_CDN ? 15e3 : 6e4);
                    y.onerror = D.bind(null, y.onerror), y.onload = D.bind(null, y.onload), Z && document.head.appendChild(y)
                }
            }, I.r = z => {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(z, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(z, "__esModule", {
                    value: !0
                })
            }, I.p = (globalThis.EVO_CDN || "") + "/frontend/evo/r2/", (() => {
                var z = {
                    14965: 0
                };
                I.f.j = (t, C) => {
                    var w = I.o(z, t) ? z[t] : void 0;
                    if (0 !== w)
                        if (w) C.push(w[2]);
                        else {
                            var V = new Promise(((C, V) => w = z[t] = [C, V]));
                            C.push(w[2] = V);
                            var h = I.p + I.u(t),
                                y = new Error;
                            I.l(h, (C => {
                                if (I.o(z, t) && (0 !== (w = z[t]) && (z[t] = void 0), w)) {
                                    var V = C && ("load" === C.type ? "missing" : C.type),
                                        h = C && C.target && C.target.src;
                                    y.message = "Loading chunk " + t + " failed.\n(" + V + ": " + h + ")", y.name = "ChunkLoadError", y.type = V, y.request = h, w[1](y)
                                }
                            }), "chunk-" + t, t)
                        }
                };
                var t = (t, C) => {
                        var w, V, [h, y, Z] = C,
                            R = 0;
                        if (h.some((t => 0 !== z[t]))) {
                            for (w in y) I.o(y, w) && (I.m[w] = y[w]);
                            Z && Z(I)
                        }
                        for (t && t(C); R < h.length; R++) V = h[R], I.o(z, V) && z[V] && z[V][0](), z[V] = 0
                    },
                    C = self.webpackChunk_frontend_evo_r2_ = self.webpackChunk_frontend_evo_r2_ || [];
                C.forEach(t.bind(null, 0)), C.push = t.bind(null, C.push.bind(C))
            })(), (() => {
                var z, t = I(934789);

                function C(z) {
                    return null != z && null != z.data && Object.keys(z.data).length > 0 && "string" == typeof z.data.command && z.data.command.startsWith("EVO:")
                }

                function w(z) {
                    const {
                        name: t,
                        platform: C
                    } = z || {}, w = String(t).startsWith("EVO:"), V = void 0 === C || ["mobile", "desktop"].includes(String(C));
                    return w && V
                }

                function V(z) {
                    return Array.isArray(z) ? z.filter(w) : []
                }

                function h(z) {
                    return Array.isArray(z) ? z.filter(w) : []
                }(function(z) {
                    z.Subscribe = "EVO:EVENT_SUBSCRIBE", z.Connect = "EVO:CONNECT"
                })(z || (z = {}));
                class y {
                    constructor({
                        isDesktop: t,
                        sendLogMessage: w,
                        subscriptionsLimit: V = 100,
                        commandsThrottlingEnabled: h = !0
                    }) {
                        this.eventCache = {}, this.eventsEnabledBySubscription = new Map, this.eventsEnabledByConfig = new Set, this.commandsDisabledByConfig = new Set, this.commandListeners = {}, this.toTriggerOnDispose = [], this.isLogSenderSet = !1, this.commandThrottler = function(z) {
                            const t = new Map;
                            return {
                                throttle: function(z, C) {
                                    const w = Date.now(),
                                        V = JSON.stringify(z.data),
                                        h = t.get(V);
                                    (!h || w - h >= 250) && (C(z), t.set(V, w))
                                },
                                clear: function() {
                                    t.forEach(((z, C) => {
                                        t.delete(C)
                                    }))
                                }
                            }
                        }(), this.iOSNativeMiddleware = null, this.messageHandler = t => {
                            if (C(t)) {
                                if (this.broadcastMWMessageToGames(t), function(t) {
                                        var w;
                                        return C(t) && z.Connect === t.data.command && !!(null === (w = t.ports) || void 0 === w ? void 0 : w.length)
                                    }(t)) return this.messagePort = t.ports[0], void(this.messagePort.onmessage = this.messageHandler);
                                if (function(t) {
                                        return C(t) && z.Subscribe === t.data.command && "string" == typeof t.data.event && t.data.event.startsWith("EVO:")
                                    }(t)) this.handleSubscription(t.data.event, t.origin);
                                else {
                                    if (!this.commandsThrottlingEnabled) return void this.handleCommand(t);
                                    this.commandThrottler.throttle(t, (z => this.handleCommand(z)))
                                }
                            }
                        }, this.subscriptionsLimit = V, this.sendLogMessage = w, this.fallbackSendLogMessage = w, this.operatorWindow = function(z) {
                            const t = window.location.origin;
                            let C = z.parent;
                            try {
                                for (; C.location.origin === t && C.parent !== C;) C = C.parent
                            } catch (z) {}
                            return C
                        }(window), this.isDesktop = t, this.commandsThrottlingEnabled = h, window.addEventListener("message", this.messageHandler)
                    }
                    getEventConfig(z, t, C) {
                        var w, V;
                        if ("unstable" === C && "stable" === this.release) return;
                        const h = null === (V = null === (w = this._config) || void 0 === w ? void 0 : w.enabledEvents) || void 0 === V ? void 0 : V.find((t => t.name === z));
                        return h && t(h) ? h : void 0
                    }
                    isEventEnabledByConfig(z, t) {
                        return ("unstable" !== t || "stable" !== this.release) && this.eventsEnabledByConfig.has(z)
                    }
                    set config(z) {
                        var t, C;
                        this._config || (this._config = z, null === (t = function(z = [], t) {
                            return new Set([...z.filter((({
                                platform: z
                            }) => void 0 === z || "desktop" === z && t || "mobile" === z && !t)).map((z => z.name))])
                        }(z.enabledEvents, this.isDesktop)) || void 0 === t || t.forEach((z => this.eventsEnabledByConfig.add(z))), null === (C = function(z = [], t) {
                            return new Set([...z.filter((({
                                platform: z
                            }) => void 0 === z || "desktop" === z && t || "mobile" === z && !t)).map((z => z.name))])
                        }(z.disabledCommands, this.isDesktop)) || void 0 === C || C.forEach((z => this.commandsDisabledByConfig.add(z))))
                    }
                    setLogMessageSender(z) {
                        this.isLogSenderSet || (this.sendLogMessage = z, this.isLogSenderSet = !0)
                    }
                    postMessage(z, t) {
                        "unstable" === t.targetRelease && "stable" === this.release || ("enabledBySubscription" === t.type && t.postOnSubscription && (this.eventCache[z.event] = {
                            message: z,
                            options: t
                        }), "enabledBySubscription" === t.type && t.postOnlyToAllowedOrigins ? this.postMessagesOnlyToAllowedOrigins(z, t) : ("default" === t.type || "enabledBySubscription" === t.type && this.eventsEnabledBySubscription.has(z.event) || "enabledByConfig" === t.type && this.isEventEnabledByConfig(z.event, t.targetRelease)) && this.postMessageToContainer(z, {
                            disableLogging: t.disableLogging
                        }))
                    }
                    onContainerCommand(z, t, C) {
                        if ("unstable" === C.targetRelease && "stable" === this.release) return;
                        const w = this.commandListeners[z] || [];
                        w.push([t, C]), this.commandListeners[z] = w
                    }
                    onDispose(z) {
                        this.toTriggerOnDispose.push(z)
                    }
                    reset() {
                        for (const z of this.toTriggerOnDispose) z();
                        this.isLogSenderSet = !1, this.sendLogMessage = this.fallbackSendLogMessage, this.toTriggerOnDispose.length = 0, this.commandListeners = {}, this.eventsEnabledBySubscription.clear(), this.eventCache = {}, this.commandThrottler.clear()
                    }
                    get release() {
                        var z, t;
                        return null !== (t = null === (z = this._config) || void 0 === z ? void 0 : z.release) && void 0 !== t ? t : "stable"
                    }
                    get allowedOrigins() {
                        var z, t;
                        return null !== (t = null === (z = this._config) || void 0 === z ? void 0 : z.origins) && void 0 !== t ? t : []
                    }
                    postMessageToContainer(z, t = {}) {
                        var C, w, V;
                        t.disableLogging || this.log({
                            type: "event",
                            payload: z
                        }), this.operatorWindow.postMessage(z, null !== (C = t.origin) && void 0 !== C ? C : "*"), null === (w = this.messagePort) || void 0 === w || w.postMessage(z), null === (V = this.iOSNativeMiddleware) || void 0 === V || V.postMessageToContainer(z)
                    }
                    postMessagesOnlyToAllowedOrigins(z, t) {
                        const C = this.filterAllowedOriginsForMessageType(z.event);
                        for (const w of C) this.postMessageToContainer(z, {
                            disableLogging: t.disableLogging,
                            origin: w
                        })
                    }
                    isCommandDisabledByConfig(z) {
                        return this.commandsDisabledByConfig.has(z)
                    }
                    filterAllowedOriginsForMessageType(z) {
                        var t;
                        const C = null !== (t = this.eventsEnabledBySubscription.get(z)) && void 0 !== t ? t : [],
                            w = [...this.allowedOrigins];
                        return C.filter(((z, t, C) => w.includes(z) && t === C.indexOf(z)))
                    }
                    broadcastMWMessageToGames(z) {
                        var t, C;
                        if ("multi" === (null === (t = window.EVO_LOADER) || void 0 === t ? void 0 : t.instance.kind)) {
                            const t = window.EVO_LOADER.instance;
                            for (const w of t.frames) null === (C = w.frame.contentWindow) || void 0 === C || C.postMessage(z.data, "*")
                        }
                    }
                    handleSubscription(z, t) {
                        this.addSubscription(z, t), this.log({
                            type: "subscription",
                            payload: z,
                            meta: {
                                origin: t
                            }
                        });
                        const C = this.eventCache[z];
                        if (C) return "enabledBySubscription" === C.options.type && C.options.postOnlyToAllowedOrigins ? (this.allowedOrigins.includes(t) || console.error(`Subscription to ${C.message.event} is not allowed for ${t}.\n                Please contact customer support`), void this.postMessagesOnlyToAllowedOrigins(C.message, C.options)) : void this.postMessageToContainer(C.message, {
                            origin: t,
                            disableLogging: C.options.disableLogging
                        })
                    }
                    handleCommand({
                        data: z,
                        origin: C
                    }) {
                        const {
                            command: w
                        } = z, V = t.Tt(z, ["command"]);
                        if (this.isCommandDisabledByConfig(w)) return void console.warn(`${w} is ignored as disabled via backoffice config`);
                        this.log({
                            type: "command",
                            payload: z,
                            meta: {
                                origin: C
                            }
                        });
                        const h = this.commandListeners[w];
                        if (h)
                            for (const [z] of h) z(V)
                    }
                    addSubscription(z, t) {
                        var C;
                        this.eventsEnabledBySubscription.size >= this.subscriptionsLimit || (this.eventsEnabledBySubscription.has(z) || this.eventsEnabledBySubscription.set(z, []), t && (null === (C = this.eventsEnabledBySubscription.get(z)) || void 0 === C || C.push(t)))
                    }
                    log({
                        type: z,
                        payload: t,
                        meta: C
                    }) {
                        const w = Object.assign(Object.assign({
                            type: z
                        }, t && {
                            payload: t
                        }), C && {
                            meta: C
                        });
                        this.sendLogMessage("CLIENT_API_V2", w)
                    }
                }
                const Z = window.origin || window.location.origin,
                    R = Object.freeze({
                        receive: Z,
                        send: "null" === Z ? "*" : Z
                    }),
                    W = "evo-broadcast-state";

                function H(z, t) {
                    if (z && t.source !== z) try {
                        z.origin === window.origin && z.location.origin === window.location.origin && z.postMessage(t.data, R.send)
                    } catch (z) {}
                }
                var D = I(502637);

                function O(z) {
                    return {
                        name: z,
                        toString: () => z
                    }
                }
                class U {
                    constructor() {
                        this.listeners = [], this.messageReceiver = z => {
                            const t = z.data;
                            if (z.origin === R.receive && t && "object" == typeof t && t.key === W && t.value && "object" == typeof t.value)
                                for (const z of this.listeners) z(t.value)
                        }, window.addEventListener("message", this.messageReceiver)
                    }
                    addListener(z) {
                        this.listeners.push(z)
                    }
                    removeListener(z) {
                        const t = this.listeners.indexOf(z);
                        t > -1 && this.listeners.splice(t, 1)
                    }
                    send(z) {
                        window.postMessage({
                            key: W,
                            value: z
                        }, R.send)
                    }
                }
                U.instance = new U;
                const n = O("ping {015f023c-9f1f-4218-b7f3-7f5c85650dc6}"),
                    _ = O("init {44ee98ea-0aab-464b-91c8-fc2b6ca75758}"),
                    X = O("dispose {3fb190a3-d0cc-4237-bc6e-abc2ff1ab044}");
                class d {
                    constructor(z = U.instance, t = "default") {
                        this.instanceId = Date.now().toString(36) + Math.random().toString(36), this.messageId = 0, this.pingTimerId = 0, this.pingCheckTimerId = 0, this.disposed = !1, this.data = {}, this.listeners = {}, this.pings = {}, this.receiveValues = z => {
                            if (z.channel !== this.channel) return;
                            const t = z.instanceId,
                                C = z.messageKey;
                            switch (this.schedulePingCheck(t), C) {
                                case n.name:
                                    break;
                                case X.name:
                                    this.removeInstance(t);
                                    break;
                                case _.name:
                                    for (const z of Object.values(this.data))
                                        for (const t of z) this.transport.send(t);
                                    break;
                                default:
                                    const w = this.data[C] || (this.data[C] = []);
                                    for (let V = 0; V < w.length; V++) {
                                        const h = w[V];
                                        if (h.instanceId === t) return void(h.messageId < z.messageId && (w[V] = z, this.triggerListeners(C, t)))
                                    }
                                    w.push(z), this.triggerListeners(C, t)
                            }
                        }, this.channel = t, this.transport = z, z.addListener(this.receiveValues), this.sendValues(_, {})
                    }
                    dispose() {
                        this.disposed || (this.transport.removeListener(this.receiveValues), this.sendValues(X, {}), window.clearTimeout(this.pingTimerId), window.clearTimeout(this.pingCheckTimerId), this.disposed = !0)
                    }
                    reset() {
                        this.disposed || (window.clearTimeout(this.pingCheckTimerId), this.pingCheckTimerId = 0, this.sendValues(X, {}))
                    }
                    sendValues(z, t) {
                        const C = Object.assign(Object.assign({}, t), {
                            channel: this.channel,
                            instanceId: this.instanceId,
                            messageId: this.messageId++,
                            messageKey: z.name
                        });
                        this.disposed || (this.transport.send(C), this.receiveValues(C), this.schedulePing())
                    }
                    getValues(z) {
                        return this.data[z.name || z.toString()] || []
                    }
                    addListener(z, t) {
                        (this.listeners[z.name] || (this.listeners[z.name] = [])).push(t)
                    }
                    removeListener(z, t) {
                        const C = this.listeners[z.name],
                            w = C ? C.indexOf(t) : -1;
                        w > -1 && C.splice(w, 1)
                    }
                    removeAllListeners(z) {
                        this.listeners[z.name] && (this.listeners[z.name] = [])
                    }
                    schedulePing() {
                        window.clearTimeout(this.pingTimerId), this.pingTimerId = window.setTimeout((() => {
                            this.sendValues(n, {})
                        }), 5e3)
                    }
                    schedulePingCheck(z) {
                        const t = Date.now();
                        this.pings[z] = t, this.pingCheckTimerId || (this.pingCheckTimerId = window.setTimeout((() => {
                            this.pingCheckTimerId = 0, "hidden" !== document.visibilityState && this.removeDeadInstances(t)
                        }), 1e4))
                    }
                    triggerListeners(z, t) {
                        const C = this.listeners[z];
                        if (C) {
                            const w = this.getValues(z);
                            for (const z of C) z(w, t)
                        }
                    }
                    removeDeadInstances(z) {
                        for (const t of Object.keys(this.pings)) this.pings[t] <= z && this.removeInstance(t)
                    }
                    removeInstance(z) {
                        const t = [];
                        for (const C of Object.keys(this.data)) {
                            const w = this.data[C];
                            for (let V = 0; V < w.length; V++)
                                if (w[V].instanceId === z) {
                                    t.push(C), w.splice(V, 1);
                                    break
                                }
                        }
                        delete this.pings[z];
                        for (const C of t) this.triggerListeners(C, z)
                    }
                }
                var s, J, v = I(894273);
                (function(z) {
                    z.Lobby = "lobby", z.Direct = "direct"
                })(s || (s = {})),
                function(z) {
                    z.PlayForFun = "pff", z.FreeGames = "free_games", z.BalanceId = "balance_id", z.Demo = "demo", z.SwitchBalanceId = "switch_balance_id"
                }(J || (J = {}));
                const i = ["lobbyIntent"];

                function q(z = {}, t = !1) {
                    const C = D.w(window.location.href);
                    for (const t of i) C.getParam(t) && !z.hasOwnProperty(t) && (z[t] = C.getParam(t));
                    const w = window.EVO_SESSION_ID_FALLBACK;
                    w && (z.EVOSESSIONID = w, z.cdn = window.EVO_CDN, z.locale = window.EVO_LOCALE);
                    const V = window.EVO_ORIGIN;
                    let h, I;
                    return V && !t && (z.origin = V), t ? (h = "?", I = `${V||window.location.origin}/entry`) : (h = "#", I = window.location.pathname), I + D.F(h, z)
                }

                function T(z, t = {}) {
                    "/" === z[0] && (z = (window.EVO_ORIGIN || "") + z);
                    const C = window.EVO_SESSION_ID_FALLBACK;
                    if (C && (t.EVOSESSIONID = C), t.client_version = "6.20240625.71558.42417-629900b49f", window.EVO_LOADER) {
                        const {
                            deviceInfo: z
                        } = window.EVO_LOADER;
                        (null == z ? void 0 : z.isIosDevice) && z.isQQBrowser && (t.nocache = (Date.now() / 1e3).toFixed(0))
                    }
                    return z + D.F(z.includes("?") ? "&" : "?", t)
                }
                const Y = "undefined" != typeof InstallTrigger,
                    u = "iFrAmE";

                function S(z) {
                    let t = !1;
                    if (Y) t = !0;
                    else try {
                        let z = window;
                        const C = z.location;
                        for (; !t && z.parent !== z;) {
                            const w = z.parent.location;
                            w.origin === C.origin && w.pathname === C.pathname && w.search === C.search && (t = !0), z = z.parent
                        }
                    } catch (z) {}
                    if (t) {
                        const t = D.w(window.location.href),
                            C = D.w(z);
                        if (t.pathname === C.pathname && t.search === C.search) {
                            const w = t.getParam(u) || "";
                            C.searchParams[u] = `${w}x`, z = C.toString()
                        }
                    }
                    return z
                }

                function B(z) {
                    return "3!" === z ? ["", window.location.origin + window.location.pathname, "table_id", "vt_id", "game", "category", "instance_id"] : ["", window.location.origin, window.location.pathname, "table_id", "vt_id", "game", "category", "lobby_launch_id", "ua_launch_id"]
                }

                function c(z) {
                    const t = B("4!"),
                        C = t.length;
                    let w = "4!";
                    for (const t of z) V(t);
                    if (t.length > 1294) throw new v.gE("Cannot encode URI");
                    for (let z = C; z < t.length; z++) w += `!${t[z].replace(/!/g,"%21").replace(/&/g,"%26")}`;
                    return w;

                    function V(z) {
                        const t = D.w(z);
                        "about:" !== t.protocol && (I(t.origin), I(t.pathname), h(t.searchParams), h(t.hashParams))
                    }

                    function h(z) {
                        for (const t of Object.keys(z)) {
                            const C = z[t];
                            if (t && null != C)
                                if (Array.isArray(C))
                                    for (const z of C) I(t), I(z);
                                else I(t), I(C)
                        }
                        w += "-"
                    }

                    function I(z) {
                        let C = t.indexOf(z); - 1 === C ? C = t.push(z) : C += 1;
                        let V = C.toString(36);
                        C > 35 && (V = `0${V}`), w += V
                    }
                }

                function $(z, t = !1) {
                    try {
                        return z ? function(z) {
                            const t = z.substring(0, 2),
                                C = B(t),
                                w = z.split(/!/g);
                            for (let z = 2; z < w.length; z++) C.push(w[z].replace(/%21/g, "!").replace(/%26/g, "&"));
                            const V = [],
                                h = w[1];
                            let I = 0;
                            for (; I < h.length;) V.push(y());
                            return V;

                            function y() {
                                let z = R();
                                "3!" !== t && (z += R());
                                const C = D.w(z);
                                return C.origin !== window.location.origin && (console.warn("Potentially unsecure origin blocked from the `mwg` arg", z), z = window.location.origin + C.pathname), z + Z("?") + Z("#")
                            }

                            function Z(z) {
                                let t = "";
                                for (; I < h.length;) {
                                    if ("-" === h[I]) {
                                        I++;
                                        break
                                    }
                                    const C = R(),
                                        w = R();
                                    t += `${(t?"&":z)+encodeURIComponent(C)}=${encodeURIComponent(w)}`
                                }
                                return t
                            }

                            function R() {
                                let z = h[I++],
                                    t = "";
                                "0" === z && (z = h[I++], t = h[I++]);
                                const w = parseInt(z + t, 36);
                                return C[w - 1]
                            }
                        }(z) : []
                    } catch (C) {
                        if (window.console.error("Invalid multi URL", z, C), t) throw C;
                        return []
                    }
                }
                const l = /(password|SESSIONID)((=).+?($|&)|(%3D).+?($|%26))/gi;

                function G(z) {
                    return z.replace(l, "$1$3$5***$4$6")
                }
                const M = "ezugi",
                    a = "ezugi.lobby",
                    A = Object.freeze({
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
                var K, L, P = I(363188),
                    r = I(695500);

                function N(z) {
                    if (z = z && z.trim()) return z.startsWith("https://") || z.startsWith("data:") ? z : (z.startsWith("/") || (z = `/frontend/evo/branding/${z}`), `${window.EVO_CDN||window.EVO_ORIGIN||""}${z}`)
                }

                function g(z, t, C = !0, w = window.BUNDLE_MANIFEST) {
                    const V = (z.frontend_app || z.game || "lobby").split(",");
                    for (const z of V) {
                        const C = z.trim(),
                            V = w.apps[C];
                        if (null == V ? void 0 : V.assets.length) {
                            const z = w.publicPath,
                                h = V.adaptive || ("desktop" === t ? V.desktop : V.mobile);
                            return Object.assign(Object.assign({}, V), {
                                assets: V.assets.map((t => ("number" == typeof t && (t = w.commonAssets[t]), z + t))),
                                application: C,
                                loader: `${z}${h}`
                            })
                        }
                    }
                    if (C) throw new Error(`Cannot find any of the defined apps: ${V.join(", ")}`)
                }(function(z) {
                    z.LS2 = "ls2", z.LS3 = "ls3", z.AndarBahar = "andarbahar", z.Lobby = "lobby", z.Slingshot = "slingshot", z.CaribbeanStudPoker = "csp", z.CasinoHoldemPoker = "holdem", z.CasinoHoldemPokerNew = "chp", z.UltimateTexasHoldem = "uth", z.ExtremeTexasHoldem = "eth", z.TexasHoldemBonus = "thb", z.ThreeCardPoker = "tcp", z.TripleCardPoker = "trp", z.TeenPatti = "teenpatti", z.DoubleHandPoker = "dhp", z.BaccaratPro = "baccarat_pro", z.Roulette = "roulette", z.InstantRoulette = "instantroulette", z.DoubleBallRoulette = "double_ball_roulette", z.AmericanRoulette = "americanroulette", z.GoldBarRoulette = "goldbarroulette", z.Blackjack = "blackjack", z.ClassicFreebet = "classicfreebet", z.ScalableBlackjack = "scalableblackjack", z.FreebetBlackjack = "freebet", z.PowerBlackjack = "powerscalableblackjack", z.LightningBlackjack = "lightningscalablebj", z.Baccarat = "baccarat", z.DeadOrAliveSaloon = "deadoralivesaloon", z.LightningBaccarat = "lightningbaccarat", z.GoldenWealthBaccarat = "goldenwealth", z.BaccaratMultiplay = "baccaratmultiplay", z.MoneyWheel = "moneywheel", z.DragonTiger = "dragontiger", z.TopCard = "topcard", z.Monopoly = "monopoly", z.RNGBlackjack = "rng-blackjack", z.RNGLightningBlackjack = "rng-lightningscalablebj", z.RNGMoneyWheel = "rng-moneywheel", z.RNGRoulette = "rng-roulette", z.RNGAmericanRoulette = "rng-american-roulette", z.RNGBaccarat = "rng-baccarat", z.RNGCraps = "rng-craps", z.RNGMegaBall = "rng-megaball", z.RNGDragonTiger = "rng-dragontiger", z.RNGTopCard = "rng-topcard", z.DealOrNoDeal = "dealnodeal", z.RNGDealOrNoDeal = "rng-dealnodeal", z.SideBetCity = "sidebetcity", z.LightningDice = "lightningdice", z.SicBo = "sicbo", z.RNGSicBo = "rng-sicbo", z.CrazyTime = "crazytime", z.MegaBall = "megaball", z.Craps = "craps", z.GonzoTreasureHunt = "gonzotreasurehunt", z.CashOrCrash = "cashorcrash", z.FanTan = "fantan", z.BacBo = "bacbo", z.TopDice = "topdice", z.PowerBall = "powerball", z.CrazyCoinFlip = "crazycoinflip", z.GonzoTreasureMap = "gonzotreasuremap", z.MonopolyBigBaller = "monopolybigballer", z.FunkyTime = "funkytime", z.LightningLotto = "lightninglotto", z.RNGLightningLotto = "rng-lightninglotto", z.RNGHilo = "rng-hilo", z.LightningStorm = "lightningstorm", z.LightningBall = "lightningball"
                })(K || (K = {})),
                function(z) {
                    z.NewJersey = "new-jersey", z.Pennsylvania = "pennsylvania", z.Lightning = "lightning"
                }(L || (L = {}));
                class j {
                    static addEventListener(z, t, C) {
                        (this._addEventListener || z.addEventListener).call(z, t, C)
                    }
                }
                j.setTimeout = window.setTimeout.bind(window), j.clearTimeout = window.clearTimeout.bind(window), j._addEventListener = "undefined" == typeof EventTarget ? null : EventTarget.prototype.addEventListener;
                const x = [];

                function m(z) {
                    x.push(z), j.addEventListener(z, "load", o), j.addEventListener(z, "error", o)
                }

                function o() {
                    Object && (this.removeEventListener("load", o), this.removeEventListener("error", o), r.ZP(x, this))
                }
                class f {
                    init() {
                        Image = function(z) {
                            function t() {
                                const t = new z;
                                return m(t), t
                            }
                            return t.prototype = z.prototype, t
                        }(Image);
                        const z = document.createElement;
                        document.createElement = function(t, C) {
                            const w = z.call(this, t, C),
                                {
                                    tagName: V
                                } = w;
                            return "IMG" !== V && "SCRIPT" !== V && "LINK" !== V || m(w), w
                        }
                    }
                    reset() {
                        for (; x.length;) o.call(x[0])
                    }
                    clean() {
                        return new Promise(((z, t) => {
                            this.verify(1e3, z, t)
                        }))
                    }
                    verify(z, t, C) {
                        return z < 0 ? (window.console.error("Asset downloads are still pending", x.slice()), C("SandboxAssetWrapper detected pending assets")) : x.every(e) ? t() : void j.setTimeout((() => this.verify(z - 25, t, C)), 25)
                    }
                }

                function e(z) {
                    return "prefetch" === z.rel || !z.src && !z.href
                }
                const p = new Map;

                function E(z) {
                    return class extends z {
                        constructor(z) {
                            super(z), p.set(this, void 0)
                        }
                        close() {
                            const z = super.close();
                            return p.get(this) || (p.set(this, z), z.then((() => {
                                p.delete(this)
                            }), (() => {
                                "closed" !== this.state ? p.set(this, void 0) : p.delete(this)
                            }))), z
                        }
                    }
                }
                class k {
                    init() {
                        const z = window.webkitAudioContext;
                        "undefined" == typeof AudioContext && void 0 === z || ("undefined" != typeof AudioContext ? AudioContext = E(AudioContext) : void 0 !== z && (window.webkitAudioContext = E(z)))
                    }
                    reset() {
                        p.clear()
                    }
                    async clean() {
                        p.size && window.console.warn("AudioContext instances are not closed", Array.from(p.keys()));
                        const z = Array.from(p.entries());
                        try {
                            await Promise.all(z.map((([z, t]) => (null != t ? t : z.close()).catch((t => {
                                if ("closed" !== z.state) return Promise.reject(t)
                            })))))
                        } catch (z) {
                            throw new Error("SandboxAudioContextWrapper detected running AudioContexts")
                        }
                        p.clear()
                    }
                }
                const Q = Symbol("Sandbox event collection"),
                    F = Symbol("Remove all event listeners");
                class b {
                    constructor() {
                        this.isCapturing = !1, this.eventTargets = []
                    }
                    isSupported() {
                        return "undefined" != typeof EventTarget
                    }
                    init() {
                        const z = this.eventTargets,
                            t = EventTarget.prototype.addEventListener,
                            C = EventTarget.prototype.removeEventListener,
                            w = this;
                        EventTarget.prototype.addEventListener = function(C, V, h, I) {
                            if (t.call(this, C, V, h), "react-dom" === I || "evo-loader" === I || "test-tools" === I) return;
                            if (!w.isCapturing) return;
                            const y = null != this ? this : window,
                                Z = y[Q] || (y[Q] = []);
                            Z.length || z.push(y);
                            let R = null;
                            "object" == typeof h && h.once && (R = () => {
                                y.removeEventListener(C, V, h)
                            }, t.call(this, C, R, h));
                            const W = y instanceof HTMLImageElement ? y.src : new Error;
                            Z.push({
                                type: C,
                                listener: V,
                                extraListener: R,
                                options: h,
                                stack: W
                            })
                        }, EventTarget.prototype.removeEventListener = function(t, w, V) {
                            C.call(this, t, w, V);
                            const h = null != this ? this : window,
                                I = h[Q];
                            if (I && Object) {
                                for (let z = 0; z < I.length; z++) {
                                    const h = I[z];
                                    if (h.listener === w && h.type === t && (y = h.options, Z = V, Boolean("object" == typeof y ? null == y ? void 0 : y.capture : y) === Boolean("object" == typeof Z ? null == Z ? void 0 : Z.capture : Z))) {
                                        h.extraListener && C.call(this, t, h.extraListener, V), r.wc(I, z);
                                        break
                                    }
                                }
                                I.length || r.ZP(z, h)
                            }
                            var y, Z
                        }, EventTarget.prototype[F] = function() {
                            const t = this[Q];
                            if (t) {
                                for (const z of t) C.call(this, z.type, z.listener, z.options);
                                t.length = 0
                            }
                            r.ZP(z, this)
                        }
                    }
                    reset() {
                        this.eventTargets.length = 0, this.isCapturing = !0
                    }
                    clean() {
                        for (let z = this.eventTargets.length - 1; z >= 0; z--) {
                            const t = this.eventTargets[z];
                            if (t instanceof Node && t !== document && !document.contains(t)) continue;
                            if (t instanceof WebSocket && t.readyState === WebSocket.CLOSED) continue;
                            if (t instanceof XMLHttpRequest && t.readyState === XMLHttpRequest.DONE) continue;
                            const C = t[Q];
                            if (!(null == C ? void 0 : C.length)) continue;
                            window.console.warn("addEventListener has not been cleared up by application code.", t, C.slice());
                            const w = EventTarget.prototype.removeEventListener;
                            let V = 0;
                            const h = C.length;
                            for (; C.length;) {
                                if (V++ > 2 * h) return Promise.reject("infinite sandbox removeEventListener");
                                const z = C[0];
                                w !== t.removeEventListener && w.call(t, z.type, z.listener, z.options), t.removeEventListener(z.type, z.listener, z.options)
                            }
                        }
                    }
                }
                const zz = "SandboxFetchWrapper aborted the request";
                class tz {
                    constructor() {
                        this.promiseCancelation = void 0
                    }
                    init() {
                        const z = window.fetch;
                        window.fetch = (t, C) => (null == C ? void 0 : C.evoIgnoreSandbox) ? z.call(window, t, C) : Promise.race([this.promiseCancelation, z.call(window, t, C)]).catch((z => (z === zz && window.console.warn("Sandbox interrupted request", t), Promise.reject(z))))
                    }
                    reset() {
                        this.promiseCancelation = new Promise(((z, t) => {
                            this.promiseRejector = t
                        })), this.promiseCancelation.catch((() => {}))
                    }
                    clean() {
                        this.promiseRejector && this.promiseRejector(zz)
                    }
                }
                const Cz = ["__autoTestVideoComponents", "defineEvoVideo", "__lobbyTileSizeHint", "_", "HowlerGlobal", "Howler", "Howl", "Sound", "Hammer", "mozPaintCount", "mozInnerScreenX", "mozInnerScreenY", "mozAnimationStartTime", "orientation", "localStorage", "sessionStorage", "length", "innerHeight", "outerHeight", "innerWidth", "outerWidth", "frameElement", "parent", "top", "scrollX", "scrollY", "pageXOffset", "pageYOffset", "webkitStorageInfo", "speechSynthesis", "caches", "webkit"];
                class wz {
                    constructor() {
                        this.globals = void 0, this.resetFailed = null
                    }
                    init() {}
                    reset() {
                        if (null !== this.resetFailed) return;
                        this.resetFailed = !1;
                        let z = null;
                        try {
                            const t = {};
                            for (z of (this.globals = t, Object.keys(window))) Cz.includes(z) || (t[z] = window[z])
                        } catch (t) {
                            window.console.warn("SandboxGlobalsWrapper - failed to read", z, t), this.globals = void 0, this.resetFailed = !0
                        }
                    }
                    clean() {
                        if (this.resetFailed) return Promise.reject("SandboxGlobalsWrapper - could not capture window properties");
                        const z = this.globals;
                        if (!z) return Promise.resolve();
                        for (const t of Object.keys(window)) {
                            if (Cz.includes(t) || t.startsWith("webpack") || !Number.isNaN(+t)) continue;
                            const C = window[t],
                                w = z[t];
                            if (C !== w) {
                                window.console.warn(`window.${t} value has been changed from`, w, "to", C);
                                try {
                                    window[t] = w
                                } catch (z) {
                                    return Promise.reject(`SandboxGlobalsWrapper - window.${t} modified`)
                                }
                            }
                        }
                        return Promise.resolve()
                    }
                }
                const Vz = Symbol("Sandbox known DOM node"),
                    hz = Symbol("Sandbox expected nodeValue"),
                    Iz = Symbol("Sandbox expected attributes"),
                    yz = Object.keys(HTMLElement.prototype).filter((z => z.startsWith("on")));
                class Zz {
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
                    markIgnoredElements(z) {
                        const t = document.querySelectorAll(z);
                        for (let z = 0; z < t.length; z++) t[z].setAttribute("data-sandbox", "ignore")
                    }
                    removeUnknownElements(z, t) {
                        for (; z;) {
                            const C = z.nextSibling;
                            if (z instanceof Element && "ignore" === z.getAttribute("data-sandbox")) {
                                z = C;
                                continue
                            }
                            const w = z[Vz];
                            if (w !== t) {
                                if (null != w) throw new Error("Predefined DOM node has been removed.");
                                this.warnMountedReact(z, !1), window.console.warn("DOM element not cleared up by the application.", z), z.parentNode.removeChild(z), z = C;
                                continue
                            }
                            t++;
                            const V = z[hz];
                            if (z.nodeValue !== V && (window.console.warn("DOM element nodeValue not reset by the application.", z, {
                                    got: z.nodeValue,
                                    expected: V
                                }), z.nodeValue = V), z instanceof Element && this.resetAttributes(z), z._reactRootContainer) throw window.console.error("ReactDOM is not unmounted from the node.", z), new Error("ReactDOM is not unmounted");
                            z.firstChild && (t = this.removeUnknownElements(z.firstChild, t)), z = C
                        }
                        return t
                    }
                    warnMountedReact(z, t) {
                        for (; z;) z._reactRootContainer ? window.console.warn("ReactDOM is not unmounted from the node.", z) : z.firstChild && this.warnMountedReact(z.firstChild, !0), z = t ? z.nextSibling : null
                    }
                    markKnownElements(z, t) {
                        for (; z;) {
                            const C = z.nextSibling;
                            z instanceof Element && "ignore" === z.getAttribute("data-sandbox") || (z[Vz] = t, t++, z instanceof Element && z.hasAttributes() && (z[Iz] = this.captureAttributes(z)), z[hz] = z.nodeValue, z.firstChild && (t = this.markKnownElements(z.firstChild, t))), z = C
                        }
                        return t
                    }
                    resetAttributes(z) {
                        const t = z[Iz];
                        if (!t) return;
                        for (let C = 0; C < t.length; C += 2) {
                            const w = t[C],
                                V = t[C + 1],
                                h = z.getAttribute(w);
                            V !== h && (("style" !== w || V || h) && window.console.warn("Attribute not restored by the application", z, {
                                name: w,
                                got: h,
                                expected: V
                            }), z.setAttribute(w, V))
                        }
                        const C = z.getAttributeNames();
                        for (const w of C) {
                            let C = !0;
                            if (t)
                                for (let z = 0; z < t.length; z += 2)
                                    if (t[z] === w) {
                                        C = !1;
                                        break
                                    }
                            C && z.removeAttribute(w)
                        }
                        for (const t of yz) {
                            const C = z[t];
                            C && (window.console.warn("Event handler not removed", z, {
                                name: t,
                                got: C
                            }), z[t] = null)
                        }
                    }
                    captureAttributes(z) {
                        const t = [];
                        for (const C of z.getAttributeNames()) t.push(C, z.getAttribute(C));
                        return t
                    }
                }
                const Rz = Symbol("Sandbox event collection");
                class Wz {
                    constructor() {
                        this.isCapturing = !1, this.eventTargets = []
                    }
                    isSupported() {
                        if (!window.matchMedia) return !0;
                        const z = this.getMediaQueryListPrototype();
                        return !!(null == z ? void 0 : z.addListener)
                    }
                    init() {
                        if (!window.matchMedia) return;
                        const z = this.eventTargets,
                            t = this.getMediaQueryListPrototype(),
                            C = t.addListener,
                            w = t.removeListener,
                            V = this;
                        t.addListener = function(t) {
                            if (C.call(this, t), !this || !V.isCapturing) return;
                            const w = this[Rz] || (this[Rz] = []);
                            w.length || z.push(this), w.push({
                                listener: t,
                                stack: new Error
                            })
                        }, t.removeListener = function(t) {
                            w.call(this, t);
                            const C = this[Rz];
                            if (C && Object) {
                                for (let z = 0; z < C.length; z++)
                                    if (C[z].listener === t) {
                                        r.wc(C, z);
                                        break
                                    }
                                C.length || r.ZP(z, this)
                            }
                        }
                    }
                    reset() {
                        this.eventTargets.length = 0, this.isCapturing = !0
                    }
                    clean() {
                        for (let z = this.eventTargets.length - 1; z >= 0; z--) {
                            const t = this.eventTargets[z],
                                C = t[Rz];
                            if (null == C ? void 0 : C.length)
                                for (window.console.warn("matchMedia().addListener has not been cleared up by application code.", t, C.slice()); C.length;) t.removeListener(C[0].listener)
                        }
                    }
                    getMediaQueryListPrototype() {
                        return "undefined" != typeof MediaQueryList ? MediaQueryList.prototype : Object.getPrototypeOf(window.matchMedia(""))
                    }
                }
                const Hz = Error;
                class Dz {
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
                        for (const [z, t] of this.timers) window.console.warn("setTimeout/setInterval has not been cleared up by application code.", t), window.clearTimeout(z);
                        for (const [z, t] of this.animationFrames) window.console.warn("requestAnimationFrame has not been cleared up by application code.", t), window.cancelAnimationFrame(z)
                    }
                    timerRemover(z, t) {
                        return C => {
                            "number" == typeof C && (t(C), z.delete(C))
                        }
                    }
                    timerCreator(z, t, C) {
                        return (w, V, ...h) => {
                            let I;
                            return I = C(t ? () => {
                                t && z.delete(I), "string" == typeof w ? Function(w)() : w && w.call(null, ...h)
                            } : w, V), this.isCapturing && z.set(I, new Hz), I
                        }
                    }
                    rafCreator(z, t) {
                        return (C, w) => {
                            let V;
                            return V = t((t => {
                                z.delete(V), C && C.call(null, t)
                            })), this.isCapturing && "sandboxIgnore" !== w && z.set(V, new Hz), V
                        }
                    }
                }
                const Oz = [],
                    Uz = WebSocket;

                function nz(z) {
                    if (arguments.length > 1) throw new Error("Only 1 argument expected");
                    const t = new Uz(z);
                    return function(z) {
                        Oz.push(z), j.addEventListener(z, "close", _z), j.addEventListener(z, "error", _z)
                    }(t), t
                }

                function _z() {
                    this.removeEventListener("close", _z), this.removeEventListener("error", _z), Object && r.ZP(Oz, this)
                }
                Object.assign(nz, WebSocket), nz.prototype = Uz.prototype;
                class Xz {
                    init() {
                        window.WebSocket = nz
                    }
                    reset() {
                        for (; Oz.length;) _z.call(Oz[0])
                    }
                    clean() {
                        return Oz.length && window.console.warn("WebSocket instances are not closed", Oz.slice()), new Promise(((z, t) => {
                            this.verify(1e3, z, t)
                        }))
                    }
                    verify(z, t, C) {
                        if (z < 0) return window.console.error("WebSocket instances are still open", Oz.slice()), C("SandboxWebSocketWrapper detected open connections");
                        if (0 === Oz.length) return t();
                        for (let z = Oz.length - 1; z >= 0; z--) Oz[z].close(4e3, "SPA switch");
                        j.setTimeout((() => this.verify(z - 25, t, C)), 25)
                    }
                }
                const dz = [];
                class sz {
                    init() {
                        if ("undefined" == typeof Worker) return;
                        const z = Worker;

                        function t(t) {
                            const C = new z(t);
                            var w;
                            return w = C, dz.push(w), C
                        }
                        Object.assign(t, Worker), t.prototype = z.prototype;
                        const C = z.prototype.terminate;
                        t.prototype.terminate = function() {
                            Object && r.ZP(dz, this), C.call(this)
                        }, window.Worker = t
                    }
                    reset() {
                        dz.length = 0
                    }
                    clean() {
                        dz.length && window.console.warn("Worker instances are not terminated", dz.slice());
                        for (let z = dz.length - 1; z >= 0; z--) dz[z].terminate()
                    }
                }
                const Jz = [];

                function vz() {
                    Object && (r.ZP(Jz, this), Promise.resolve().then((() => {
                        this[F] && this[F]()
                    })))
                }
                class iz {
                    init() {
                        const z = XMLHttpRequest.prototype.send;
                        XMLHttpRequest.prototype.send = function(t) {
                            Jz.push(this), "onloadend" in this ? this.addEventListener("loadend", vz) : (this.addEventListener("load", vz), this.addEventListener("abort", vz), this.addEventListener("error", vz)), z.call(this, t)
                        }
                    }
                    reset() {
                        Jz.length = 0
                    }
                    clean() {
                        let z = 0;
                        for (; z++ < 5 && Jz.length;) {
                            const z = Jz.slice();
                            Jz.length = 0;
                            for (const t of z) window.console.warn("Sandbox interrupted request", t), t.abort()
                        }
                        if (Jz.length) return window.console.error("Pending requests", Jz), Promise.reject("XMLHttpRequest infinite retries")
                    }
                }
                class qz {
                    static getSingleton() {
                        return this._singleton || (this._singleton = new qz), this._singleton
                    }
                    constructor() {
                        this.enabled = !0, this.wrappers = [new f, new tz, new iz, new Dz, new b, new Wz, new Zz, new wz, new Xz, new sz, new k];
                        try {
                            if (window.EVO_LOADER.deviceInfo.isBaiduBrowser) return void(this.enabled = !1);
                            for (const z of this.wrappers)
                                if (z.isSupported && !z.isSupported()) return void(this.enabled = !1);
                            for (const z of this.wrappers) z.init()
                        } catch (z) {
                            const t = "Failed to initialize Sandbox: " + (z instanceof Error ? `${z.message}\n${z.stack}` : "");
                            window.EVO_VERBOSE(t, 1), window.console.error(t), this.enabled = !1
                        }
                    }
                    reset() {
                        return this.enabled ? Promise.all(this.wrappers.map((z => z.reset()))) : Promise.reject(new Error("Sandbox not supported in browser"))
                    }
                    clean() {
                        if (!this.enabled) return Promise.reject(new v.mN("Sandbox not supported in browser", {
                            sendToSentry: !1
                        }));
                        let z = Promise.resolve();
                        for (let t = 0; t < 2; t++) z = z.then((() => Promise.all(this.wrappers.map((z => z.clean()))))), z = z.then((() => new Promise((z => {
                            j.setTimeout(z)
                        })))), z = z.then((() => window.console.log(`Sandbox cleanup phase ${t+1} done.`)));
                        return z
                    }
                }
                qz._singleton = void 0;
                class Tz {
                    constructor() {
                        this.disposed = !1, this.events = {}
                    }
                    subscribe(z, t) {
                        if (Array.isArray(z)) {
                            const C = z.map((z => this.ensureEvent(z).promise));
                            Promise.all(C).then((z => t(...z)))
                        } else this.ensureEvent(z).promise.then(t)
                    }
                    publish(z, t) {
                        const C = this.ensureEvent(z);
                        if (C.resolved) throw new Error(`publish() called more than once for ${z}`);
                        window.EVO_VERBOSE(`Loader/${z}: done`, 0, z), C.resolved = !0, C.value = t, C.resolver(t)
                    }
                    getValue(z) {
                        const t = this.events[z];
                        return null == t ? void 0 : t.value
                    }
                    getPromise(z) {
                        return this.ensureEvent(z).promise
                    }
                    resetEvent(z) {
                        const t = this.events[z];
                        if (t) {
                            if (!t.resolved) throw new Error("Cannot reset unfinished event.");
                            delete this.events[z]
                        }
                    }
                    dispose() {
                        this.disposed = !0, this.events = {}
                    }
                    ensureEvent(z) {
                        if (this.disposed) throw new Error("PubSub has been disposed");
                        const t = this.events[z];
                        if (t) return t;
                        let C;
                        window.EVO_VERBOSE(`Loader/${z}: waiting`, 0, z);
                        const w = new Promise((z => {
                            C = z
                        }));
                        if (!C) throw new Error("Async promise ctor");
                        return this.events[z] = {
                            promise: w,
                            resolver: C,
                            resolved: !1,
                            value: void 0
                        }
                    }
                }
                class Yz extends Tz {
                    constructor(z) {
                        super(), this.loader = z, this.uaLaunchId = null, this.lobbyLaunchId = null, this.logs = [], this.consumer = void 0, this.attributionId = r.Ds()
                    }
                    get provider() {
                        var z;
                        return (null === (z = this.getValue("config")) || void 0 === z ? void 0 : z.game_provider) || r.EE() || this._provider
                    }
                    set provider(z) {
                        this._provider = z
                    }
                    dispose(z) {
                        return this.publish("disposing", z), this.consumer = void 0, this.logs.length = 0, Promise.resolve(super.dispose())
                    }
                    storeLog(z) {
                        this.consumer ? this.consumer(z) : this.logs.push(z)
                    }
                    setLogConsumer(z) {
                        this.consumer = z, this.logs.length && (this.logs.forEach((t => z(t))), this.logs.length = 0)
                    }
                }
                const uz = Symbol("video-lib-timeout");
                class Sz extends Yz {
                    constructor(z) {
                        super(z), this.loadProgress = null, this.sandboxInitialization = qz.getSingleton().reset().catch((z => {
                            v.vV(new v.mN(`Failed to initialize Sandbox: ${z.message}`))
                        })), this.disposePromise = void 0, this.gameLoader = void 0, this.gameLoaderState = void 0, this.setupWorkflow()
                    }
                    dispose(z) {
                        if (this.disposePromise) return this.disposePromise;
                        const t = !this.gameLoader || void 0 === this.getValue("gameLoaded"),
                            C = performance.now();
                        return this.disposePromise = this.disposeInstance(z).then((() => t ? Promise.reject(new v.mN("Game loader not yet finished", {
                            sendToSentry: !1
                        })) : Promise.race([this.gameLoader.dispose(this.gameLoaderState), r.cb(3e3).then((() => Promise.reject(new Error("Game dispose took >3 sec"))))]))).then((() => qz.getSingleton().clean())).then((() => {
                            const z = performance.now();
                            window.console.log("Dispose of previous instance took", Math.floor(z - C), "ms")
                        }))
                    }
                    disposeInstance(z) {
                        var t, C;
                        return super.dispose({
                            applicationType: null !== (C = null === (t = this.gameLoader) || void 0 === t ? void 0 : t.applicationType) && void 0 !== C ? C : "unknown",
                            suppressLoadingScreen: (null == z ? void 0 : z.suppressLoadingScreen) || !1
                        })
                    }
                    setupWorkflow() {
                        const z = this.loader;
                        z.shared.subscribe("setup", (z => {
                            this.disposed || (this.subscribe("config", (t => this.handlePublishedConfig(z, t))), this.subscribe(["config", "sandbox"], (t => this.requestGameManifest(t, z))), this.subscribe(["gamePackageManifest", "config"], ((t, C) => {
                                this.requestAudioLibrary(z, t, C)
                            })), this.startSandbox())
                        })), this.subscribe("gamePackageManifest", (t => {
                            this.requestLocalization(t), this.requestScripts(t), this.requestStyleSheet(t), t.ignoreVideo || (this.loader.video.loadLibrary(), Promise.race([r.cb(1e4, uz), z.video.getPromise("module")]).then((t => {
                                t === uz && z.sendLog("CLIENT_ERROR", {
                                    error: "videoLibrary/timeout"
                                })
                            })))
                        })), z.shared.subscribe(["setup", "style", "i18n"], ((z, t, C) => {
                            this.disposed || this.subscribe(["config", "gamePackageManifest", "appLocalization", "bundleCss"], ((w, V, h) => {
                                this.runApp(z, t, Object.assign(Object.assign({}, C), h), w, V)
                            }))
                        }))
                    }
                    async handlePublishedConfig(z, t) {
                        var C, w, V, h, I, y;
                        "undefined" != typeof Sentry && (Sentry.configureScope((C => {
                            C.setTags({
                                gameType: t.game || t.frontend_app,
                                casinoId: z.casino_id
                            })
                        })), Sentry.setUser({
                            id: z.user_id,
                            username: z.player_id
                        }));
                        const Z = D.w(window.location.href),
                            R = encodeURIComponent(Z.getParam("branding_id") || t.branding_id || "");
                        if (R) {
                            const z = N(`${R}/manifest.json`);
                            try {
                                const t = await r.QJ(z, "json");
                                null === (w = null === (C = window.EVO_LOADER) || void 0 === C ? void 0 : C.instance) || void 0 === w || w.publish("brandingManifest", t)
                            } catch (t) {
                                P.Z(z, t), null === (h = null === (V = window.EVO_LOADER) || void 0 === V ? void 0 : V.instance) || void 0 === h || h.publish("brandingManifest", null)
                            }
                        } else null === (y = null === (I = window.EVO_LOADER) || void 0 === I ? void 0 : I.instance) || void 0 === y || y.publish("brandingManifest", null)
                    }
                    startSandbox() {
                        this.sandboxInitialization.then((() => {
                            this.publish("sandbox", !0)
                        })).catch((() => {
                            this.publish("sandbox", !1)
                        }))
                    }
                    requestGameManifest(z, t) {
                        let C = z.frontend_manifest;
                        const w = t.globalSettings;
                        if (!C && w && z.frontend_app) {
                            const t = w.manifests;
                            C = null == t ? void 0 : t[z.frontend_app]
                        }
                        C ? this.requestGameManifestRemote(z, C) : this.requestGameManifestLocal(z)
                    }
                    requestGameManifestRemote(z, t) {
                        const C = this.loader;
                        t.endsWith("/") && (t += "manifest.json"), r.QJ(t, "json").then((w => {
                            const V = g(z, C.deviceInfo.deviceType, !1, w);
                            if (!V) throw new Error(`Remote manifest '${t}' does not include definition for the given table.`);
                            this.publish("gamePackageManifest", V)
                        })).catch((z => {
                            this.loader.failed({
                                reason: "manifest",
                                failureDetails: z,
                                failedURL: t
                            })
                        }))
                    }
                    requestGameManifestLocal(z) {
                        let t;
                        try {
                            return t = g(z, this.loader.deviceInfo.deviceType), void this.publish("gamePackageManifest", t)
                        } catch (z) {
                            return void this.loader.failed({
                                reason: "manifest",
                                failureDetails: z
                            })
                        }
                    }
                    requestLocalization(z) {
                        let t = z.localization;
                        "common" !== t ? (t || ("undefined" != typeof Sentry && Sentry.captureMessage(`${z.application} does not define 'localization' in manifest`), t = `../${encodeURIComponent(window.EVO_LOCALE)}`), r.FB(window.EVO_LOCALE, t).then((z => this.publish("appLocalization", z))).catch((z => {
                            this.loader.failed({
                                reason: "i18n",
                                failureDetails: z,
                                failedURL: `loc://${window.EVO_LOCALE}/${t}.json`
                            })
                        }))) : this.publish("appLocalization", null)
                    }
                    requestScripts(z) {
                        const t = this.loader;
                        for (const C of z.assets) {
                            if (!C.endsWith(".js")) continue;
                            const z = window.EVO_CDN + C;
                            t.assets.loadScript(z).catch((C => {
                                t.failed({
                                    reason: "scripts",
                                    failureDetails: C,
                                    failedURL: z
                                })
                            }))
                        }
                    }
                    requestStyleSheet(z) {
                        const t = this.loader,
                            C = z.assets.filter((z => z.endsWith(".css")));
                        for (let z = 0; z < C.length; z++) C[z] = window.EVO_CDN + C[z];
                        t.assets.loadStyles(C, !0).then((() => {
                            this.publish("bundleCss", null)
                        })).catch((z => {
                            t.failed({
                                reason: "stylesheets",
                                failureDetails: z
                            })
                        }))
                    }
                    requestAudioLibrary(z, t, C) {
                        var w;
                        const V = this.loader,
                            h = t.audioLibrary,
                            I = C.audio_package || t.audioPackage,
                            y = !0 === (null === (w = z.globalSettings) || void 0 === w ? void 0 : w.enable_local_sounds);
                        V.audio.loadLibrary(h, y).then((z => {
                            this.publish("audioLibrary", z)
                        })), V.audio.loadAudioLibraryOptions(I, h, y).then((z => {
                            this.publish("audioLibraryOptions", z)
                        }))
                    }
                    runApp(z, t, C, w, V) {
                        const h = this.loader;
                        if (h.isFailed) return;
                        const I = {
                            reportProgress: z => {
                                this.loadProgress = z
                            },
                            gameType: w.game || K.Lobby,
                            instance: this,
                            setup: z,
                            deviceType: h.deviceInfo.deviceType,
                            tableConfig: w,
                            styles: t,
                            tableId: w.table_id || null,
                            virtualTableId: w.vt_id || null,
                            i18nData: C,
                            getRoot: () => document.getElementById("root"),
                            clientApi: h.clientApi
                        };
                        window.EVO_VERBOSE("gameLoader/started", 0, "gameLoader"), Promise.all([h.applications.getPromise(V.loader), this.getPromise("audioLibrary")]).then((([z, t]) => (this.gameLoader = z, z.initialize(Object.assign(Object.assign({}, I), {
                            audioLibrary: t,
                            audioLibraryOptionsPromise: this.getPromise("audioLibraryOptions")
                        }))))).then((z => {
                            this.gameLoaderState = z
                        })).then((() => {
                            var z, t;
                            window.EVO_VERBOSE("gameLoader/finish", 0, "gameLoader"), window.setTimeout((() => {
                                r.CB(), r.ZN()
                            }), 501), this.publish("gameLoaded", {
                                applicationType: null !== (t = null === (z = this.gameLoader) || void 0 === z ? void 0 : z.applicationType) && void 0 !== t ? t : "unknown"
                            }), performance.mark("evoLoaderClosed")
                        })).catch((z => {
                            const t = z instanceof Error ? z : new Error(`gameLoader failed: ${(null==z?void 0:z.message)||z}`, {
                                cause: z
                            });
                            h.failed({
                                reason: "gameLoader",
                                failureDetails: t
                            })
                        }))
                    }
                    loadNativeBundle(z, t) {
                        const C = this.loader;
                        Promise.all([r.QJ("../bundles.json", "json"), I.e(66885).then(I.bind(I, 701024))]).then((([C, {
                            getTargetBundle: w
                        }]) => w({
                            gameTypeOrLoader: (null == t ? void 0 : t.loader) || z.game || "lobby",
                            frontendApp: z.frontend_app
                        }, C, !1))).then((z => {
                            t && ("*" === z || "6.20240625.71558.42417-629900b49f".endsWith(`-${z}-native`)) ? this.publish("gamePackageManifest", t) : (window.EVO_LOADER.sendLog("CLIENT_GAME_RELOAD", {
                                reason: "Loading native build - redirected from another place"
                            }), window.location.href = `../${z}/index.html${window.location.search}${window.location.hash}`)
                        })).catch((z => {
                            C.failed({
                                reason: "manifest",
                                failureDetails: z
                            })
                        }))
                    }
                }
                class Bz extends Sz {
                    constructor(z, t) {
                        let C;
                        super(z), this.kind = "app";
                        const w = t ? t.indexOf("@") : -1;
                        w > -1 && (C = r.UA(t.substr(w + 1)), t = t.substr(0, w)), t || (t = Bz.defaultApp);
                        const V = {
                            game: "",
                            frontend_app: t,
                            frontend_manifest: C
                        };
                        t === a ? this.requestConfigData(t, V) : this.publish("config", V)
                    }
                    requestConfigData(z, t) {
                        const C = this.loader,
                            w = T("/config", {
                                app: z
                            });
                        r.QJ(w, "json").then((z => {
                            Object.assign(z, t), this.publish("config", z)
                        })).catch((z => {
                            z instanceof P.$ && 403 === z.status ? C.failedAuth() : (P.Z(w, z), C.failed({
                                reason: "config",
                                failureDetails: z,
                                failedURL: w
                            }))
                        }))
                    }
                }
                Bz.defaultApp = "lobby";
                class cz extends Yz {
                    constructor() {
                        super(...arguments), this.kind = "empty", this.disposePromise = null
                    }
                    dispose() {
                        return this.disposePromise || (this.disposePromise = super.dispose()), this.disposePromise
                    }
                }
                class $z extends Sz {
                    constructor(z, t, C, w, V, h, I) {
                        super(z), this.tableId = t, this.virtualTableId = C, this.app = w, this.balanceId = V, this.uaLaunchId = h, this.lobbyLaunchId = I, this.kind = "game", this.redirected = !1, this.disposePromise2 = null, this.requestConfigData()
                    }
                    dispose(z) {
                        var t;
                        return this.redirected ? null !== (t = this.disposePromise2) && void 0 !== t ? t : this.disposePromise2 = super.disposeInstance(z) : super.dispose(z)
                    }
                    requestConfigData() {
                        const z = this.loader,
                            t = T("/config", {
                                table_id: this.tableId,
                                vt_id: this.virtualTableId,
                                origin: window.location.origin
                            });
                        r.QJ(t, "json").then((z => {
                            if (!this.checkPlatformSupport(z)) return;
                            const t = this.app;
                            if (t) {
                                window.console.warn("Overriding game type and manifest with", t);
                                let C = t.indexOf("@");
                                C < 0 ? C = t.length : z.frontend_manifest = r.UA(t.substr(C + 1)), C > 0 && (z.frontend_app = t.substr(0, C), delete z.loader_expected_resource_count, delete z.loader_resources_counting_mode)
                            }
                            this.gameType = z.game_type, this.publish("config", z)
                        })).catch((C => {
                            C instanceof P.$ && 403 === C.status ? z.failedAuth() : (P.Z(t, C), z.failed({
                                reason: "config",
                                failureDetails: C,
                                failedURL: t
                            }))
                        }))
                    }
                    checkPlatformSupport(z) {
                        const t = this.loader.deviceInfo.isDesktop ? z.desktop_table_id : z.mobile_table_id;
                        if (t) {
                            window.console.log("Because of platform, using a different table", t);
                            const [z, C] = t.split(";"), w = D.w(window.location.href);
                            return delete w.searchParams.table_id, delete w.searchParams.vt_id, w.hashParams.table_id = z, w.hashParams.vt_id = C, this.redirected = !0, this.loader.init(w.toString()), this.loader.sendLog("CLIENT_GAME_RELOAD", {
                                reason: "Platform not supported, redirecting to a different table"
                            }), !1
                        }
                        return !0
                    }
                }
                var lz, Gz;
                (function(z) {
                    z.SoundsVolume = "EvoInterfaceSoundsVolume", z.SoundsMuted = "EvoInterfaceSoundsMute", z.VideoVolume = "EvoInterfaceVideoVolume", z.VideoMuted = "EvoInterfaceVideoMuted", z.LastAppUri = "EvoLastAppUri"
                })(lz || (lz = {})),
                function(z) {
                    z.Evo = "", z.Neon = "Neon", z.DS = "DS"
                }(Gz || (Gz = {}));
                const {
                    getStorageKey: Mz,
                    setStorageKey: az
                } = (Az = Gz.Evo, {
                    getStorageKey(z) {
                        try {
                            const t = localStorage.getItem(Az + z);
                            return t ? JSON.parse(t) : void 0
                        } catch (z) {
                            return
                        }
                    },
                    setStorageKey(z, t) {
                        try {
                            return void 0 === t ? localStorage.removeItem(Az + z) : localStorage.setItem(Az + z, JSON.stringify(t)), !0
                        } catch (z) {
                            return !1
                        }
                    }
                });
                var Az;
                const Kz = "ShowEvoLogo";
                var Lz;
                (function(z) {
                    z.Sidebar = "sidebar", z.Fill = "fill", z.TopBar = "topbar"
                })(Lz || (Lz = {}));
                class Pz extends Yz {
                    get location() {
                        const z = this.frame.contentWindow;
                        let t = z ? z.location.href : null;
                        if (t && !t.startsWith("about:") || (t = this.frame.src), t.includes(u)) {
                            const z = D.w(t);
                            delete z.searchParams[u], t = z.toString()
                        }
                        return t
                    }
                    constructor(z, t, C, w, V = Lz.Fill) {
                        super(t), this.parent = z, this.kind = "frame", this.layout = Lz.Fill, this.disposePromise2 = null, this.frameUrlChanged = () => {
                            this.parent.updateUri(!0)
                        }, this.frameUnloadListener = () => {
                            setTimeout(this.frameLoadListener, 0)
                        }, this.frameLoadListener = () => {
                            this.frameUrlChanged();
                            const z = this.frame.contentWindow;
                            z && (z.addEventListener("pagehide", this.frameUnloadListener, !0, "evo-loader"), z.addEventListener("hashchange", this.frameUrlChanged, !0, "evo-loader"), z.addEventListener("pushstate", this.frameUrlChanged, !0, "evo-loader"), z.addEventListener("replacestate", this.frameUrlChanged, !0, "evo-loader"))
                        };
                        const h = document.createElement("iframe");
                        this.frame = h, this.layout = V, h.src = S(C), h.addEventListener("load", this.frameLoadListener), w.appendChild(h)
                    }
                    dispose() {
                        return this.disposePromise2 || (this.disposePromise2 = Promise.resolve().then((() => {
                            const z = this.frame;
                            z.removeEventListener("load", this.frameLoadListener), z.parentNode && z.parentNode.removeChild(z)
                        })).then((() => super.dispose()))), this.disposePromise2
                    }
                    navigate(z) {
                        z = S(z);
                        try {
                            const {
                                contentWindow: t
                            } = this.frame;
                            if (null == t ? void 0 : t.EVO_LOADER) return void(t.location.href !== z && t.location.replace(z))
                        } catch (z) {}
                        this.frame.src = z
                    }
                    resize(z, t) {
                        this.frame.style.width = `${Math.floor(z)}px`, this.frame.style.height = `${Math.floor(t)}px`
                    }
                }
                const rz = O("multiwindow {74d74998-b630-473a-b390-58f11d036a96}"),
                    Nz = "mwLayout";
                class gz extends Yz {
                    constructor(z, t, C = !1) {
                        var w;
                        super(z), this.kind = "multi", this.frames = [], this.window = window, this.wasMoveDone = !1, this.scrolling = !1, this.touchEndResetTimer = null, this.disposePromise2 = null, this.isSidebarFullHeight = !1, this.handleScrollAction = () => {
                            document.body.classList.contains("compact") && this.wasMoveDone && (this.scrolling = !0, this.removeResetTimeout(), this.touchEndResetTimer = window.setTimeout((() => {
                                this.scrolling = !1, this.wasMoveDone = !1, document.body.classList.contains("compact") && window.scrollTo(0, 0)
                            }), 500))
                        }, this.handleContinuousScroll = z => {
                            this.wasMoveDone = !0, this.scrolling && z.preventDefault()
                        }, this.getDimensionsAndLayoutFrames = () => {
                            const z = () => this.loader.deviceInfo.isIos15PhoneSafari ? window.innerHeight + window.scrollY : window.innerHeight;
                            let t = z(),
                                C = window.innerWidth;
                            this.layoutFrames(t, C), setTimeout((() => {
                                const w = z(),
                                    V = window.innerWidth;
                                w === t && V === C || (t = w, C = V, this.layoutFrames(w, V))
                            }), 1e3)
                        }, this.layoutFrames = (z, t) => {
                            const {
                                isPhone: C
                            } = this.loader.deviceInfo, w = this.countFrames();
                            let V = 0,
                                h = 0;
                            const I = w[Lz.TopBar] > 0 ? 30 : 0;
                            w[Lz.Sidebar] > 0 && (V = C ? Math.floor(t / w[Lz.Sidebar]) : 400 * w[Lz.Sidebar], h = !C || t > z || this.isSidebarFullHeight ? z : Math.floor(.85 * z), h -= I);
                            const y = C ? t : t - V,
                                Z = z - I;
                            this.sidebarContainer.style.width = `${V}px`, this.sidebarContainer.style.height = `${h}px`, this.loader.deviceInfo.isDesktop && (this.gamesContainer.style.width = `calc(100% - ${V}px)`), I && this.container.classList.add("withTopBar"), this.topBarContainer.style.height = `${I}px`;
                            const R = this.calculateOptimumSize(y, Z, w[Lz.Fill]);
                            for (const z of this.frames) switch (z.layout) {
                                case Lz.Fill:
                                    (this.loader.deviceInfo.isDesktop || this.loader.deviceInfo.isIosChromeBrowser) && z.resize(R.width, R.height);
                                    break;
                                case Lz.Sidebar:
                                    w[Lz.Sidebar] > 1 && z.resize(Math.floor(V / w[Lz.Sidebar]), h);
                                    break;
                                case Lz.TopBar:
                                    z.resize(R.width, 30)
                            }
                        };
                        const V = document.getElementById("inGameLobby");
                        (null == V ? void 0 : V.parentNode) && V.parentNode.removeChild(V);
                        const h = document.createElement("div");
                        this.container = h, h.className = "loader-frame-container", document.body.appendChild(h);
                        const I = document.createElement("div");
                        this.topBarContainer = I, I.className = "topbar-container", h.appendChild(I);
                        const y = document.createElement("div");
                        this.gamesContainer = y, y.className = "games-container", h.appendChild(y);
                        const Z = document.createElement("div");
                        this.sidebarContainer = Z, Z.className = "sidebar-container", h.appendChild(Z);
                        for (const z of $(t)) this.addFrame(z, !1);
                        C || this.frames.length || this.addFrame(q(), !1), this.getDimensionsAndLayoutFrames(), this.loader.deviceInfo.isPhone && this.loader.deviceInfo.isIosDevice && (setTimeout((() => {
                            this.getDimensionsAndLayoutFrames()
                        }), 400), window.addEventListener("scroll", this.handleScrollAction), document.body.addEventListener("touchmove", this.handleContinuousScroll), document.body.addEventListener("touchstart", this.handleContinuousScroll)), window.addEventListener("resize", this.getDimensionsAndLayoutFrames), this.loader.deviceInfo.isIosChromeBrowser && (null === (w = window.visualViewport) || void 0 === w || w.addEventListener("resize", this.getDimensionsAndLayoutFrames)), this.publish("gameLoaded", void 0), setTimeout(r.CB, 1e3)
                    }
                    removeResetTimeout() {
                        this.touchEndResetTimer && (window.clearTimeout(this.touchEndResetTimer), this.touchEndResetTimer = null)
                    }
                    dispose() {
                        return this.disposePromise2 || (this.disposePromise2 = Promise.resolve().then((() => {
                            var z;
                            window.removeEventListener("resize", this.getDimensionsAndLayoutFrames), document.body.removeChild(this.container), window.removeEventListener("scroll", this.handleScrollAction), document.body.removeEventListener("touchmove", this.handleContinuousScroll), document.body.removeEventListener("touchstart", this.handleContinuousScroll), this.loader.deviceInfo.isIosChromeBrowser && (null === (z = window.visualViewport) || void 0 === z || z.removeEventListener("resize", this.getDimensionsAndLayoutFrames)), this.removeResetTimeout()
                        })).then((() => Promise.all(this.frames.map((z => z.dispose()))))).then((() => super.dispose()))), this.disposePromise2
                    }
                    update(z, t = !1) {
                        if (!Array.isArray(z)) {
                            const t = z.getParam("mwg");
                            z = t ? $(t) : [z.toString()]
                        }
                        const C = this.frames;
                        for (let t = 0; t < Math.min(C.length, z.length); t++) {
                            const w = z[t];
                            C[t].layout === this.getFrameLayout(w) ? C[t].navigate(w) : (this.removeFrame(C[t].frame, {
                                update: !1
                            }), this.addFrame(w, !1))
                        }
                        for (; C.length < z.length;) this.addFrame(z[C.length], !1);
                        for (; C.length > z.length;) this.removeFrame(C[C.length - 1].frame, {
                            update: !1
                        });
                        return this.finalizeUpdate(t), Promise.resolve()
                    }
                    updateUri(z = !1) {
                        if (this.loader.instance === this) {
                            const t = function(z) {
                                if (1 === z.length) {
                                    const t = D.w(z[0]);
                                    if (t.origin === window.location.origin && t.pathname === window.location.pathname) return z[0]
                                }
                                return window.location.origin + q({
                                    mwg: c(z)
                                }, !1)
                            }(this.frames.map((z => z.location)));
                            if (window.location.href !== t) try {
                                window.history[z ? "replaceState" : "pushState"](null, "", t), az("EvoLastAppUri", t)
                            } catch (z) {}
                        }
                    }
                    getFrameLayout(z) {
                        return D.w(z).getParam(Nz) || Lz.Fill
                    }
                    addFrame(z, t = !0) {
                        const C = this.getFrameLayout(z);
                        let w = this.gamesContainer;
                        switch (C) {
                            case Lz.Sidebar:
                                w = this.sidebarContainer;
                                break;
                            case Lz.TopBar:
                                w = this.topBarContainer
                        }
                        this.frames.push(new Pz(this, this.loader, z, w, C)), t && this.finalizeUpdate()
                    }
                    removeFrame(z, t = {
                        update: !0,
                        animateOnMobile: !1
                    }) {
                        const C = t.animateOnMobile && !this.loader.deviceInfo.isDesktop,
                            w = this.frames.findIndex((t => t.frame === z));
                        if (w > -1) {
                            const V = this.frames[w];
                            this.frames.splice(w, 1), this.isSidebarFullHeight && V.layout === Lz.Sidebar && (this.isSidebarFullHeight = !1), C && z.classList.add("disposing"), setTimeout((() => {
                                V.dispose().catch((() => {})), t.update && this.finalizeUpdate()
                            }), C ? 500 : 0)
                        }
                    }
                    isLastFillFrame(z) {
                        for (const t of this.frames)
                            if (t.frame !== z && t.layout === Lz.Fill) return !1;
                        return !0
                    }
                    finalizeUpdate(z = !1) {
                        this.frames.length || this.addFrame(q(), !1), this.getDimensionsAndLayoutFrames(), this.updateUri(z), this.loader.broadcast.sendValues(rz, {})
                    }
                    countFrames() {
                        let z = 0,
                            t = 0,
                            C = 0;
                        for (const {
                                layout: w
                            } of this.frames) switch (w) {
                            case Lz.Fill:
                                z++;
                                break;
                            case Lz.Sidebar:
                                t++;
                                break;
                            case Lz.TopBar:
                                C++
                        }
                        return {
                            [Lz.Fill]: z,
                            [Lz.Sidebar]: t,
                            [Lz.TopBar]: C
                        }
                    }
                    setSidebarHeight(z) {
                        this.isSidebarFullHeight = z;
                        const t = window.innerHeight,
                            C = window.innerWidth,
                            {
                                isPhone: w
                            } = this.loader.deviceInfo,
                            V = !w || C > t || this.isSidebarFullHeight ? t : Math.floor(.85 * t),
                            h = this.countFrames()[Lz.TopBar] > 0 ? 30 : 0;
                        this.sidebarContainer.style.height = V - h + "px"
                    }
                    calculateOptimumSize(z, t, C) {
                        if (C < 2) return {
                            width: z,
                            height: t
                        };
                        let w = 0,
                            V = 0;
                        for (let h = 1; h <= C; h++) {
                            const I = Math.ceil(C / h),
                                y = Math.min(t / I, z / h * 9 / 16);
                            y > V && (V = y, w = 16 * y / 9)
                        }
                        return {
                            width: w,
                            height: V
                        }
                    }
                }
                class jz extends Yz {
                    constructor(z, t, C, w, V, h) {
                        super(z), this.tableId = t, this.virtualTableId = C, this.multiwindow = w, this.balanceId = V, this.app = h, this.kind = "switch"
                    }
                    dispose() {
                        return super.dispose().then((() => Promise.reject("Another switch is in progress")))
                    }
                }
                class xz {
                    constructor() {
                        this.scripts = {}, this.styles = {}, this.enabledStyles = [], this.timeout = window.EVO_CDN ? 15e3 : 6e4
                    }
                    loadStyles(z, t = !1) {
                        Array.isArray(z) || (z = [z]);
                        const C = z.map((z => (this.styles[z] || (this.styles[z] = this.createLinkElement(z))).then((z => this.setLinkEnabled(z, !0)))));
                        return Promise.all(C).then((z => {
                            if (t) {
                                for (const t of this.enabledStyles) z.includes(t) || this.setLinkEnabled(t, !1);
                                this.enabledStyles = z
                            } else this.enabledStyles.push(...z)
                        }))
                    }
                    loadScript(z, t = !1, C) {
                        const w = this.scripts[z];
                        if (w && !C) return w;
                        const V = document.createElement("script");
                        V.charset = "utf-8", V.async = t;
                        const h = this.waitForLoaded(V, z);
                        return this.scripts[z] = h, V.src = z, document.head.appendChild(V), document.head.removeChild(V), h
                    }
                    waitForLoaded(z, t) {
                        return new Promise(((C, w) => {
                            let V = 0;
                            const h = C => {
                                C.filename === z.src && (I(!0), w(`Failed: ${t}`))
                            };
                            window.addEventListener("error", h);
                            const I = t => {
                                clearTimeout(V), window.removeEventListener("error", h), t && z.parentNode && z.parentNode.removeChild(z)
                            };
                            V = setTimeout((() => {
                                window.EVO_VERBOSE(`timeout for ${t}`, 2), I(!0), w(`timeout: ${t}`)
                            }), this.timeout), z.addEventListener("error", (z => {
                                P.Z(t, z.error), I(!0), w(`Failed: ${t}`)
                            })), z.addEventListener("load", (() => {
                                I(!1), C(z)
                            }))
                        }))
                    }
                    setLinkEnabled(z, t) {
                        const C = Promise.resolve(z);
                        return z.disabled === !t ? C : (z.disabled = !t, t ? new Promise(((t, C) => {
                            let w = 0,
                                V = 0;
                            const h = document.styleSheets;
                            V = window.setInterval((function() {
                                if (w++ > 200) return clearInterval(V), C("setLinkEnabled");
                                for (let C = 0, w = h.length; C < w; C++)
                                    if (h[C].ownerNode === z) return clearInterval(V), t(z)
                            }), 16)
                        })) : C)
                    }
                    createLinkElement(z) {
                        const t = document.createElement("link");
                        t.rel = "stylesheet", t.href = z, t.setAttribute("data-sandbox", "ignore");
                        const C = this.waitForLoaded(t, z);
                        return document.head.appendChild(t), C
                    }
                }
                const mz = Symbol("audio-lib-timeout");
                class oz {
                    constructor() {
                        this.cache = {}
                    }
                    loadLibrary(z, t) {
                        var C;
                        const w = this.getLibraryType(z, t);
                        if (void 0 === this.cache[w]) {
                            let z;
                            z = "ecas" === w ? I.e(1767).then(I.bind(I, 681306)) : "legacy" === w ? I.e(83100).then(I.t.bind(I, 976314, 23)) : Promise.resolve(void 0), this.cache[w] = Promise.race([z, r.cb(1e4, mz)]).then((z => {
                                if (z === mz) throw new v.yW("Loading failed to load due to 10s timeout");
                                return z
                            })).catch((z => {
                                this.handleLoadingError(new v.yW(`"${w}" audio library failed to load: ${z}`))
                            }))
                        }
                        return null !== (C = this.cache[w]) && void 0 !== C ? C : Promise.resolve(void 0)
                    }
                    loadAudioLibraryOptions(z, t, C) {
                        if ("ecas" !== this.getLibraryType(t, C)) return Promise.resolve(void 0);
                        if (void 0 === z) return this.handleLoadingError(new v.yW("Audio package for the game was not specified.")), Promise.resolve(void 0);
                        const w = `/frontend/gametech/sounds/${z}/ecasOptions.json`,
                            V = this.getLocalSoundsUrl(C) || window.EVO_CDN || window.EVO_ORIGIN || "";
                        return r.QJ(`${V}${w}`, "json").then((z => {
                            var t, C, w, h;
                            const I = null !== (C = null === (t = z.loadrConfig) || void 0 === t ? void 0 : t.loadPath) && void 0 !== C ? C : null === (h = null === (w = z.soundConfig) || void 0 === w ? void 0 : w.settings) || void 0 === h ? void 0 : h.loadPath;
                            return Object.assign(Object.assign({}, z), {
                                loadrConfig: Object.assign(Object.assign({}, z.loadrConfig), {
                                    loadPath: `${V}${I}`
                                })
                            })
                        })).catch((z => {
                            this.handleLoadingError(new v.yW(`"Failed to load ECAS sound configuration: ${z}`))
                        }))
                    }
                    handleLoadingError(z) {
                        let t, C;
                        t = "warn", C = 1, window.console.warn(z), window.EVO_VERBOSE(z.stack || z.message, 1)
                    }
                    getLocalSoundsUrl(z) {
                        if (z) {
                            const z = this.getLocalSoundsParam();
                            return z && /^\d{4,5}$/.test(z) ? `http://127.0.0.1:${z}` : void 0
                        }
                    }
                    getLocalSoundsParam() {
                        return D.w(window.location.href).getParam("localSounds")
                    }
                    getLibraryType(z, t) {
                        return t && this.getLocalSoundsParam() ? "ecas" : z
                    }
                }
                var fz, ez, pz;
                (function(z) {
                    z.Phone = "Phone", z.Tablet = "Tablet", z.Desktop = "Desktop"
                })(fz || (fz = {})),
                function(z) {
                    z.IpadNonRetina = "ipad-non-retina", z.IpadRetina = "ipad-retina", z.IpadPro = "ipad-pro", z.IpadPro11inch = "ipad-pro-11inch"
                }(ez || (ez = {})),
                function(z) {
                    z.Iphone5 = "iphone5", z.Iphone6 = "iphone6", z.IphonePlusZoomed = "iphone-plus-zoomed", z.IphonePlus = "iphone-plus", z.Iphone10 = "iphone10", z.Iphone10Zoomed = "iphone10Zoomed", z.Iphone10sMax = "iphone10sMax", z.Iphone10R = "iphone10R", z.Iphone10RZoomed = "iphone10RZoomed", z.Iphone12 = "iphone12", z.Iphone12ProMax = "iphone12ProMax", z.Iphone14Pro = "iphone14Pro", z.Iphone14ProMax = "iphone14ProMax"
                }(pz || (pz = {}));
                const Ez = [{
                        min: 320,
                        max: 568,
                        ratio: 2,
                        type: pz.Iphone5
                    }, {
                        min: 375,
                        max: 667,
                        ratio: 2,
                        type: pz.Iphone6
                    }, {
                        min: 375,
                        max: 667,
                        ratio: 3,
                        type: pz.IphonePlusZoomed
                    }, {
                        min: 414,
                        max: 736,
                        ratio: 3,
                        type: pz.IphonePlus
                    }, {
                        min: 375,
                        max: 812,
                        ratio: 3,
                        type: pz.Iphone10
                    }, {
                        min: 320,
                        max: 693,
                        ratio: 3,
                        type: pz.Iphone10Zoomed
                    }, {
                        min: 414,
                        max: 896,
                        ratio: 3,
                        type: pz.Iphone10sMax
                    }, {
                        min: 414,
                        max: 896,
                        ratio: 2,
                        type: pz.Iphone10R
                    }, {
                        min: 375,
                        max: 812,
                        ratio: 2,
                        type: pz.Iphone10RZoomed
                    }, {
                        min: 390,
                        max: 844,
                        ratio: 3,
                        type: pz.Iphone12
                    }, {
                        min: 428,
                        max: 926,
                        ratio: 3,
                        type: pz.Iphone12ProMax
                    }, {
                        min: 393,
                        max: 852,
                        ratio: 3,
                        type: pz.Iphone14Pro
                    }, {
                        min: 430,
                        max: 932,
                        ratio: 3,
                        type: pz.Iphone14ProMax
                    }, {
                        min: 768,
                        max: 1024,
                        ratio: 1,
                        type: ez.IpadNonRetina
                    }, {
                        min: 768,
                        max: 1024,
                        ratio: 2,
                        type: ez.IpadRetina
                    }, {
                        min: 834,
                        max: 1194,
                        ratio: 2,
                        type: ez.IpadPro11inch
                    }, {
                        min: 1024,
                        max: 1366,
                        ratio: 2,
                        type: ez.IpadPro
                    }],
                    kz = "desktop",
                    Qz = "tablet",
                    Fz = "phone";
                class bz {
                    get connectionType() {
                        var z;
                        return null === (z = window.navigator.connection) || void 0 === z ? void 0 : z.effectiveType
                    }
                    constructor(z = window.navigator.userAgent) {
                        this.userAgent = z, this.isIosDevice = !!this.userAgent.match(/(iPhone|iPad)/i), this.isMacOSDevice = !!this.userAgent.match(/(Intel Mac OS X)/i), this.isQQBrowser = this.userAgent.includes("MQQBrowser"), this.isBaiduBrowser = this.userAgent.includes("baiduboxapp"), this.isIos15PhoneSafari = !!this.userAgent.match(/^Mozilla\/5\.0 \(iPhone; CPU iPhone OS 15_\S+ like Mac OS X\) AppleWebKit\/605\.1\.15 \(KHTML, like Gecko\) Version\/15\.\d Mobile\/15E148 Safari\/604\.1/), this.isIosChromeBrowser = this.isIosDevice && this.userAgent.includes("CriOS"), this.appleScreenType = (() => {
                            var z, t;
                            if (!this.isIosDevice && !this.isMacOSDevice) return null;
                            const C = (null === (z = window.screen) || void 0 === z ? void 0 : z.width) ? window.screen.width : window.innerWidth,
                                w = (null === (t = window.screen) || void 0 === t ? void 0 : t.height) ? window.screen.height : window.innerHeight,
                                V = window.devicePixelRatio || 1,
                                h = Math.min(C, w),
                                I = Math.max(C, w);
                            for (const z of Ez)
                                if (z.min === h && z.max === I && z.ratio === V) return z.type;
                            return null
                        })(), this.isIPadOS = (() => {
                            const z = void 0 !== window.orientation,
                                t = navigator.maxTouchPoints > 1;
                            return this.isMacOSDevice && z && t
                        })(), this.deviceType = (() => {
                            if (this.isIPadOS) return Qz;
                            if (/\b(WOW64|Win64|x64|x86_64|Windows NT|Intel Mac OS X|CrOS aarch64|X11.*Linux)\b/i.test(this.userAgent)) return kz;
                            if (this.userAgent.includes("iPhone")) return Fz;
                            if (this.userAgent.includes("iPad")) return Qz;
                            let z = window;
                            try {
                                for (; z !== z.parent;) z.parent.matchMedia, z = z.parent
                            } catch (z) {}
                            return z.matchMedia("(min-width: 1024px) and (min-height: 600px) and (orientation: landscape), (min-width: 768px) and (orientation: portrait)").matches ? Qz : Fz
                        })(), this.isTablet = this.deviceType === Qz, this.isPhone = this.deviceType === Fz, this.isDesktop = this.deviceType === kz, this.isEventPassiveSupported = !1, this.isWrapper = (() => !!/(wv\)|Chrome\/\d+\.0\.0\.0)/.test(this.userAgent) || !(!this.isIosDevice || /(Chrome|CriOS|Safari|Edge)\/[0-9._]*/.test(this.userAgent)))(), this.checkEventPassiveSupport = (() => {
                            try {
                                let z = !1;
                                const t = {
                                        get capture() {
                                            return !0
                                        },
                                        get once() {
                                            return !0
                                        },
                                        get passive() {
                                            return z = !0, !0
                                        }
                                    },
                                    C = () => null;
                                window.addEventListener("test", C, t), window.removeEventListener("test", C, t), this.isEventPassiveSupported = z
                            } catch (z) {
                                this.isEventPassiveSupported = !1
                            }
                        })()
                    }
                }
                class zt {
                    constructor(z) {
                        this.loader = z, this.lobbyLastGameType = void 0, this.lobbyLoadedGames = {}, this.lobbyLoadedGameCount = 0
                    }
                    preconnect(z, t) {
                        const C = document.createElement("link");
                        C.rel = t ? "dns-prefetch" : "preconnect", C.href = z, document.head.appendChild(C)
                    }
                    preload(z, t = !0, C = !1) {
                        var w;
                        const V = this.loader,
                            h = g(z, null === (w = window.EVO_LOADER) || void 0 === w ? void 0 : w.deviceInfo.deviceType, !1);
                        if (!h) return Promise.reject(new v.mN("Manifest not found", {
                            sendToSentry: !1
                        }));
                        if (void 0 !== V.applications.getValue(h.loader)) return Promise.reject(new v.mN("Already loaded", {
                            sendToSentry: !1
                        }));
                        const I = h.assets.map((z => {
                            const w = z.endsWith(".js"),
                                V = w ? !t : !C;
                            return this.preloadFromManifest(z, w ? "script" : "style", V)
                        }));
                        return Promise.all(I)
                    }
                    lobbyGameVisible(z, t) {
                        const {
                            game: C,
                            frontend_app: w
                        } = z, V = w || C || "";
                        if (this.lobbyLastGameType === V) return Promise.reject(new Error("Fast-path optimization to avoid hashmap lookups"));
                        if (this.lobbyLastGameType = V, this.lobbyLoadedGames[V]) return Promise.reject(new Error("Attempt to load game has been made"));
                        this.lobbyLoadedGames[V] = !0, this.lobbyLoadedGameCount++;
                        const h = this.loader.shared.getValue("style"),
                            I = null == h ? void 0 : h.data.fastTableSwitching,
                            y = "false" === (null == I ? void 0 : I.enabled),
                            Z = ["baccarat", "roulette", "blackjack", "classicfreebet", "scalableblackjack", "freebet", "powerscalableblackjack", "lightningscalablebj"].includes(C),
                            R = !y && !t && (Z || !1) && this.lobbyLoadedGameCount <= 5;
                        return this.preload(z, R, !1)
                    }
                    preloadFromManifest(z, t, C) {
                        const w = this.loader;
                        if (z) {
                            const V = window.EVO_CDN + z;
                            return C ? r.Rh(V, t) : "script" === t ? w.assets.loadScript(V) : w.assets.loadStyles(V)
                        }
                        return Promise.reject(new Error("assetPath is empty"))
                    }
                }
                class tt extends Tz {
                    constructor(z) {
                        super(), this.loader = z, this.isStarted = !1
                    }
                    start() {
                        this.isStarted || (this.isStarted = !0, this.requestSetupData(), this.requestStyleData(), window.EVO_LOCALE ? this.requestLocalization(window.EVO_LOCALE) : this.subscribe("setup", (z => {
                            window.EVO_LOCALE = z.locale, this.requestLocalization(z.locale)
                        })))
                    }
                    requestLocalization(z) {
                        r.FB(z, "common").then((z => this.publish("i18n", z))).catch((t => {
                            this.loader.failed({
                                reason: "i18n",
                                failureDetails: t,
                                failedURL: `loc://${z}/common.json`
                            })
                        }))
                    }
                    getFingerprint() {
                        const z = "X-Fingerprint";
                        let t = null;
                        try {
                            t = window.localStorage.getItem(z)
                        } catch (z) {}
                        if (!t) {
                            t = r.Ds();
                            try {
                                window.localStorage.setItem(z, t)
                            } catch (z) {}
                        }
                        return t
                    }
                    requestSetupData() {
                        const z = this.loader,
                            t = z.deviceInfo,
                            C = {
                                device: t.deviceType,
                                "apple-screen": t.appleScreenType,
                                wrapped: t.isWrapper.toString()
                            },
                            w = {
                                keepalive: !1,
                                headers: {
                                    "X-Fingerprint": this.getFingerprint()
                                }
                            },
                            V = T("/setup", C);
                        r.QJ(V, "json", w).then((z => {
                            if (z.locale = window.EVO_LOCALE || z.locale, "string" == typeof z.globalSettings) try {
                                z.globalSettings = JSON.parse(z.globalSettings)
                            } catch (t) {
                                window.console.error("Invalid globalSettings.", "\n", t), z.globalSettings = void 0
                            }
                            this.publish("setup", z)
                        })).catch((t => {
                            t instanceof P.$ && 403 === t.status ? z.failedAuth() : (P.Z(V, t), z.failed({
                                reason: "setup",
                                failureDetails: t,
                                failedURL: V
                            }))
                        }))
                    }
                    requestStyleData() {
                        const z = this.loader,
                            t = T("/style");
                        r.QJ(t, "json").then((z => {
                            const t = {
                                data: z || {}
                            };
                            this.publish("style", t)
                        })).catch((C => {
                            C instanceof P.$ && 403 === C.status ? z.failedAuth() : (P.Z(t, C), z.failed({
                                reason: "style",
                                failureDetails: C,
                                failedURL: t
                            }))
                        }))
                    }
                }
                class Ct extends xz {
                    constructor() {
                        super(...arguments), this.moduleLoaders = new Tz, this.define = (z, t, C) => {
                            if (null == t ? void 0 : t.length) throw new Error(`Expected no dependencies, got request for ${t}`);
                            this.moduleLoaders.publish(z, C())
                        }
                    }
                    loadModule(z, t, C) {
                        return new Promise(((w, V) => {
                            this.moduleLoaders.resetEvent(z), this.initModuleLoader(C), this.loadScript(t, !0, !0).catch(V), this.moduleLoaders.getPromise(z).then(w, V)
                        }))
                    }
                    initModuleLoader(z) {
                        const t = window[z];
                        void 0 !== t && t !== this.define && window.console.error(`window["${z}"] is already used, overwriting...`), window[z] = this.define
                    }
                }
                const wt = "defineEvoVideo",
                    Vt = `${window.EVO_CDN}/frontend/cvi/evo-video-components`;
                class ht extends Tz {
                    constructor(z, t = 13) {
                        super(), this.apiVersion = t, this.modules = new Ct, this.isLoading = !1, this.handleLoadingError = z => {
                            window.console.error(z), z instanceof Error ? window.EVO_VERBOSE(z.stack || z.message, 2) : window.EVO_VERBOSE(z.message, 2), window.EVO_CDN && this.loader.failed({
                                reason: "video",
                                failureDetails: z
                            })
                        }, this.loader = z
                    }
                    loadLibrary(z = !1) {
                        this.isLoading || (this.isLoading = !0, this.loadIndependent(z))
                    }
                    ensureEvent(z) {
                        return this.loadLibrary(), super.ensureEvent(z)
                    }
                    loadIndependent(z) {
                        const t = z ? "all" : "wf4hfb",
                            C = (Date.now() / 36e5).toFixed(0),
                            w = this.getLastKnownVideoVersion();
                        Promise.all([this.loadVersion(C), this.loadVideoComponent(t, w)]).then((([z, C]) => {
                            let {
                                version: V
                            } = z;
                            const {
                                version: h
                            } = C;
                            if (h !== V) return V === w && (V += ".x"), this.setLastKnownVideoVersion(V), this.loadVideoComponent(t, V).then((z => {
                                this.publishModule(z)
                            })).catch((() => {
                                this.publishModule(C)
                            }));
                            this.publishModule(C)
                        })).catch(this.handleLoadingError)
                    }
                    getLastKnownVideoVersion() {
                        try {
                            return localStorage.getItem("EvoVideoLastKnownVersion") || void 0
                        } catch (z) {}
                    }
                    setLastKnownVideoVersion(z) {
                        try {
                            localStorage.setItem("EvoVideoLastKnownVersion", z)
                        } catch (z) {}
                    }
                    loadFromVendor() {
                        I.e(80616).then(I.t.bind(I, 360395, 23)).then((z => this.publishModule(z)))
                    }
                    publishModule(z) {
                        this.publish("module", {
                            component: z
                        })
                    }
                    loadVersion(z) {
                        return this.modules.loadModule("__version", `${Vt}/video_version_v${this.apiVersion}.js?${z}`, wt)
                    }
                    loadVideoComponent(z, t = "") {
                        return this.modules.loadModule("videojs", `${Vt}/video_${z}_v${this.apiVersion}.js?${encodeURIComponent(t)}`, wt)
                    }
                }
                class It {
                    constructor() {
                        this.isFailed = !1, this.wasThrottled = !1, this.sentLogCount = 0, this.assets = new xz, this.deviceInfo = new bz, this.applications = new Tz, this.shared = new tt(this), this.video = new ht(this), this.audio = new oz, this.prefetcher = new zt(this), this.broadcast = new d, this.instance = new cz(this), this.cdnHost = window.EVO_CDN, this.onInstanceSwitch = [], this.onFailure = [], this.spaSwitches = 0, this.failureCount = r.wP(), this._initMetadata = {}, this.sendLog = (z, t, C) => {
                            if (void 0 !== this.shared.getValue("failedAuthentication")) return;
                            const {
                                store: w,
                                enhancers: V
                            } = Object.assign({
                                store: !1,
                                enhancers: []
                            }, C);
                            window.EVO_VERBOSE(`Sending log: ${z}`), this.sentLogCount += 1;
                            const h = Object.assign(Object.assign({
                                attributionId: this.instance.attributionId,
                                ua_launch_id: this.instance.uaLaunchId,
                                lobby_launch_id: this.instance.lobbyLaunchId,
                                connectionType: this.deviceInfo.connectionType,
                                userAgent: this.deviceInfo.userAgent,
                                buildId: "6.20240625.71558.42417-629900b49f",
                                url: G(window.location.href),
                                provider: this.instance.provider
                            }, "game" === this.instance.kind && Object.assign({
                                tableId: this.instance.tableId,
                                virtualTableId: this.instance.virtualTableId
                            }, V.includes("gameType") ? {
                                gameType: this.instance.gameType
                            } : void 0)), t);
                            if (w) return void this.instance.storeLog({
                                type: z,
                                payload: h
                            });
                            const I = T("/log"),
                                y = JSON.stringify({
                                    log: {
                                        type: z,
                                        value: h
                                    }
                                });
                            let Z = !1;
                            if (navigator.sendBeacon) try {
                                Z = navigator.sendBeacon(I, y)
                            } catch (z) {
                                window.console.error(z)
                            }
                            Z || fetch(I, {
                                method: "POST",
                                credentials: "same-origin",
                                headers: {
                                    "Content-Type": "text/plain"
                                },
                                body: y,
                                keepalive: !0,
                                evoIgnoreSandbox: !0
                            }).catch((C => {
                                console.error("Unable to send log", C, z, t)
                            }))
                        }
                    }
                    addInstanceSwitchListener(z) {
                        this.onInstanceSwitch.push(z), "empty" !== this.instance.kind && z(this.instance)
                    }
                    addFailureListener(z) {
                        this.onFailure.push(z)
                    }
                    failedAuth() {
                        this.isFailed || (this.isFailed = !0, this.shared.publish("failedAuthentication", null), window.location.href = "/")
                    }
                    failed(z) {
                        this.isFailed = !0, this.failureReason = z.reason, this.increaseFailureCount(), z.failureDetails && v.vV(v.oj(z.failureDetails));
                        const t = r.ET(this.failureCount, z.failureDetails);
                        if (this.onFailure.forEach((C => C({
                                failedURL: z.failedURL,
                                failureReason: z.reason,
                                failureDetails: z.failureDetails,
                                willRetry: t,
                                failureCount: this.failureCount
                            }))), !t) return void this.displayFailurePopup(v.EL(z.failureDetails) && z.failureDetails.localizedMessage ? z.failureDetails : "message.unableLoadGame", !0, !0);
                        const C = r.u9({
                            failureReason: z.reason,
                            isCdnEnabled: !!window.EVO_CDN
                        });
                        r.YU({
                            disableDuration: C,
                            failureCount: this.failureCount
                        })
                    }
                    displayPopup(z, t) {
                        Promise.race([r.cb(3e3), this.shared.getPromise("i18n")]).then((() => {
                            const C = this.shared.getValue("i18n"),
                                w = (null == C ? void 0 : C.common) || A;
                            let V, h;
                            "string" == typeof z ? (V = w[z], h = z) : (V = z.localizedMessage || z.message, h = "custom"), this.sendLog("CLIENT_POPUP_DISPLAYED", {
                                popupId: h
                            }, {
                                enhancers: ["gameType"]
                            }), window.EVO_POPUP(V, t.map((z => ({
                                content: w[z.contentKey],
                                callback: z.callback
                            }))))
                        }))
                    }
                    displayFailurePopup(z, t, C) {
                        this.isFailed = !0;
                        const w = [];
                        t && w.push({
                            contentKey: "button.tryAgain.uppercase",
                            callback: () => {
                                window.location.reload()
                            }
                        });
                        const {
                            provider: V
                        } = this.instance, h = V && "evolution" !== V && V !== M && !this.getLicenseeLobbyUrl();
                        C && !h && w.push({
                            contentKey: "button.backToLobby",
                            callback: () => {
                                this.redirectToLobby()
                            }
                        }), this.displayPopup(z, w)
                    }
                    addDeviceTypeToGlobalClasses() {
                        document.body && document.body.classList.add(this.deviceInfo.deviceType)
                    }
                    init(z = window.location.href, t = {}) {
                        this._initMetadata = t, this.sentLogCount = 0, this.shared.start();
                        const C = D.w(z),
                            w = C.getParam("mwg") || null,
                            V = w ? null : C.getParam("table_id") || null,
                            h = w ? null : C.getParam("vt_id") || null,
                            I = w ? null : C.getParam("app") || null,
                            y = V && C.getParam("balance_id") || null,
                            Z = this.instance;
                        if (!Z.disposed) {
                            if ("multi" === Z.kind) return Z.update(C, !0);
                            if (V && "switch" === Z.kind && Z.tableId === V && Z.virtualTableId === h && Z.balanceId === y && Z.app === I) return Promise.resolve()
                        }
                        "empty" !== Z.kind && this.resetPerformanceMetrics();
                        const R = console.groupCollapsed || console.group;
                        return null == R || R.call(console, `%c📁 Application switch from ${Z.kind} to tableId=${V}, vtId=${h}`, "font-size: 120%;"), this.instance = new jz(this, V, h, w, y, I), Z.dispose().then((() => this.checkInitResources())).then((() => this.checkSwitchConfiguration(Z))).then((() => {
                            let z;
                            window.EVO_VERBOSE(`SPA switch from ${Z.kind}`), this.broadcast.reset();
                            let t = Promise.resolve();
                            if (w) z = new gz(this, w);
                            else if ("multi" === Z.kind) z = new gz(this, "", !0), t = z.update(C, !0);
                            else if (V) {
                                const t = C.getParam("ua_launch_id") || null,
                                    w = C.getParam("lobby_launch_id") || null;
                                z = new $z(this, V, h, I, y, t, w)
                            } else z = new Bz(this, I);
                            this.instance = z;
                            for (const t of this.onInstanceSwitch) t(z);
                            return t
                        })).catch((z => {
                            this.isFailed = !0;
                            const t = "SPA bail because of ";
                            window.console.error(t, z), window.EVO_VERBOSE(t + z, 1), this.broadcast.dispose();
                            const C = D.w(window.location.href);
                            C.searchParams.mwg = void 0, C.searchParams.table_id = void 0, C.searchParams.vt_id = void 0, C.searchParams.freeGames = void 0, C.hashParams.mwg = w || void 0, C.hashParams.table_id = V || void 0, C.hashParams.vt_id = h || void 0, C.hashParams.balance_id = y || void 0;
                            const I = C.toString();
                            window.location.href !== I && (this.sendLog("CLIENT_GAME_RELOAD", {
                                reason: z
                            }), window.location.replace(I)), window.location.reload()
                        })).then((() => {
                            R && window.console.groupEnd()
                        }))
                    }
                    publishApplication(z, t, C) {
                        this.applications.publish(z + t, C), C.provider && (this.instance.provider = C.provider)
                    }
                    get initMetadata() {
                        return this._initMetadata
                    }
                    checkSwitchConfiguration(z) {
                        return "empty" === z.kind ? Promise.resolve() : new Promise(((z, t) => {
                            this.shared.subscribe("style", (C => {
                                const w = C.data.fastTableSwitching;
                                if ("false" === (null == w ? void 0 : w.enabled)) return t("fastTableSwitching is disabled in style settings");
                                z()
                            }))
                        }))
                    }
                    resetPerformanceMetrics() {
                        try {
                            performance.clearMarks(), performance.clearMeasures(), performance.clearResourceTimings(), performance.mark("evoAppSwitchStarted"), this.wasThrottled = !1
                        } catch (z) {
                            window.console.error("Cannot reset performance report", z)
                        }
                    }
                    checkInitResources() {
                        return this.spaSwitches++, this.spaSwitches >= 10 ? Promise.reject("10th load") : performance.now() > 6e5 ? Promise.reject("10 minute uptime") : Promise.resolve()
                    }
                    redirectToLobby() {
                        const z = this.getLicenseeLobbyUrl();
                        if (z) {
                            try {
                                window.top ? window.top.location.href = z : window.location.href = z
                            } catch (t) {
                                window.location.href = z
                            }
                            return
                        }
                        const t = D.w(window.location.href),
                            C = this.instance.provider === M ? a : void 0,
                            w = {
                                category: t.getParam("category"),
                                game: t.getParam("game"),
                                app: C
                            };
                        window.location.href = q(w)
                    }
                    getLicenseeLobbyUrl() {
                        var z;
                        const t = this.shared.getValue("style"),
                            C = this.deviceInfo.isDesktop ? null == t ? void 0 : t.data : null == t ? void 0 : t.data.mobile_settings;
                        return null === (z = null == C ? void 0 : C.licensee_lobby) || void 0 === z ? void 0 : z.url
                    }
                    increaseFailureCount() {
                        this.failureCount += 1, r.Nw(this.failureCount)
                    }
                }
                const yt = "CLIENT_PAGE_HIDDEN",
                    Zt = "CLIENT_PAGE_VISIBLE";

                function Rt(z, C = y) {
                    const w = new C({
                        sendLogMessage: z.sendLog,
                        isDesktop: z.deviceInfo.isDesktop
                    });
                    z.addInstanceSwitchListener((() => {
                        w.postMessage({
                            event: "EVO:APPLICATION_LOAD_STARTED"
                        }, {
                            type: "default",
                            disableLogging: !0,
                            targetRelease: "stable"
                        })
                    })), z.shared.subscribe(["setup", "style"], ((t, C) => {
                        const I = t.clientApiV2,
                            y = C.data.clientApiV2,
                            Z = C.data.client_api_v2,
                            R = y || Z || I,
                            W = C.data.clientApiV2Overrides,
                            H = function(z) {
                                const t = z;
                                return t && function(z) {
                                    return ["stable", "unstable"].includes(z)
                                }(t.release) ? Object.assign(Object.assign({
                                    release: t.release
                                }, function(z) {
                                    return Array.isArray(z) && z.length > 0 && z.some((z => "string" == typeof z && z.trim().length > 0))
                                }(t.origins) ? {
                                    origins: t.origins
                                } : void 0), {
                                    enabledEvents: t.enabledEvents ? V(t.enabledEvents) : void 0,
                                    disabledCommands: t.disabledCommands ? h(t.disabledCommands) : void 0
                                }) : null
                            }(Object.assign(Object.assign({}, R), W));
                        null !== H && (z.clientApi = w, w.config = H)
                    })), z.shared.subscribe("failedAuthentication", (() => {
                        null == w || w.postMessage({
                            event: "EVO:SESSION_INVALID"
                        }, {
                            type: "default",
                            targetRelease: "stable"
                        })
                    })), z.addInstanceSwitchListener((C => {
                        C.subscribe("config", (w => {
                            C.subscribe("gameLoaded", (t => {
                                var V;
                                "game" === (null == t ? void 0 : t.applicationType) ? C.subscribe("gameMeta", (() => {
                                    var V;
                                    null === (V = z.clientApi) || void 0 === V || V.postMessage(Object.assign({
                                        event: "EVO:APPLICATION_READY"
                                    }, Wt(w, C, t)), {
                                        type: "default",
                                        targetRelease: "stable"
                                    })
                                })): null === (V = z.clientApi) || void 0 === V || V.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_READY"
                                }, Wt(w, C, t)), {
                                    type: "default",
                                    targetRelease: "stable"
                                }), window.addEventListener("beforeunload", (() => {
                                    var V, h;
                                    null === (V = z.clientApi) || void 0 === V || V.postMessage(Object.assign({
                                        event: "EVO:APPLICATION_UNLOAD"
                                    }, Wt(w, C, t)), {
                                        type: "default",
                                        targetRelease: "stable"
                                    }), null === (h = z.clientApi) || void 0 === h || h.reset()
                                }))
                            })), C.subscribe("disposing", (V => {
                                var h, I;
                                null === (h = z.clientApi) || void 0 === h || h.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_UNLOAD"
                                }, Wt(w, C, function(z) {
                                    if (!z) return;
                                    const {
                                        suppressLoadingScreen: C
                                    } = z;
                                    return t.Tt(z, ["suppressLoadingScreen"])
                                }(V))), {
                                    type: "default",
                                    targetRelease: "stable"
                                }), null === (I = z.clientApi) || void 0 === I || I.reset()
                            }))
                        }))
                    }))
                }

                function Wt(z, t, C = {
                    applicationType: "unknown"
                }) {
                    return "game" === t.kind && "game" === C.applicationType ? Object.assign(Object.assign(Object.assign({}, C), {
                        gameType: z.game,
                        gameVertical: z.game_vertical,
                        tableId: t.tableId
                    }), t.virtualTableId && {
                        virtualTableId: t.virtualTableId
                    }) : C
                }
                const Ht = {
                        isAvailable: function() {
                            var z;
                            return "function" == typeof(null === (z = window.EvolutionGamingAndroidAPI) || void 0 === z ? void 0 : z.send)
                        },
                        dispatch: function(z, t = {}) {
                            window.EvolutionGamingAndroidAPI.send(JSON.stringify({
                                type: z,
                                payload: t
                            }))
                        }
                    },
                    Dt = {
                        isAvailable: function() {
                            try {
                                return window.parent !== window && !!window.parent.postMessage
                            } catch (z) {
                                return !1
                            }
                        },
                        dispatch: function(z, t = {}) {
                            window.parent.postMessage({
                                type: z,
                                payload: t
                            }, "*")
                        }
                    },
                    Ot = {
                        isAvailable: function() {
                            var z, t, C;
                            return "function" == typeof(null === (C = null === (t = null === (z = window.webkit) || void 0 === z ? void 0 : z.messageHandlers) || void 0 === t ? void 0 : t.EvolutionGamingWrapperAPI) || void 0 === C ? void 0 : C.postMessage)
                        },
                        dispatch: function(z, t = {}) {
                            window.webkit.messageHandlers.EvolutionGamingWrapperAPI.postMessage(JSON.stringify({
                                type: z,
                                payload: t
                            }))
                        }
                    };
                class Ut {
                    constructor() {
                        this.consumers = []
                    }
                    addConsumer(z) {
                        z.isAvailable() && this.consumers.push(z)
                    }
                    dispatch(z, t = {}) {
                        for (const C of this.consumers) C.dispatch(z, t)
                    }
                }
                let nt;
                const _t = "index.html";

                function Xt(z, t) {
                    if (t) r.z6("gameClientUrlSupport"), window.location.replace(z);
                    else try {
                        window.history.replaceState(null, "", z)
                    } catch (t) {
                        Xt(z, !0)
                    }
                }
                const dt = "loadingScreen--87788",
                    st = "gradient--0f1d8",
                    Jt = "finishProgress--0c00b",
                    vt = "footer--fba55",
                    it = "image--44b6b",
                    qt = "withFooterLogo--6ca4a",
                    Tt = "loaded--10bec",
                    Yt = "awardLogos--861ba",
                    ut = "noImage--01a3d",
                    St = "properAnimation--47cc2",
                    Bt = "randomAnimation--de14a";

                function ct(z, t = null, C = 1e4, w = !0) {
                    return new Promise(((V, h) => {
                        const I = new Image;
                        I.crossOrigin = t, I.onerror = () => Z("error");
                        const y = window.setTimeout((() => {
                            Z("timeout")
                        }), C);

                        function Z(t) {
                            clearTimeout(y), w && P.Z(z, t), h(t)
                        }
                        I.onload = () => {
                            clearTimeout(y), V(I)
                        }, I.src = z
                    }))
                }

                function $t(z) {
                    const t = document.getElementsByClassName(z).item(0);
                    if (!t) throw new Error(`Loading screen element not found: ${z}`);
                    return t
                }

                function lt() {
                    try {
                        let z = window;
                        for (;;) {
                            const t = z.EVO_LOADER;
                            if ("multi" === (null == t ? void 0 : t.instance.kind)) return t.instance;
                            if (z === z.parent) return null;
                            z = z.parent
                        }
                    } catch (z) {
                        return null
                    }
                }
                const Gt = "reality_check_handler";

                function Mt() {
                    const z = D.w(window.location.href).getParam("EVOSESSIONID");
                    z && "undefined" !== z && (window.EVO_SESSION_ID_FALLBACK = z)
                }

                function at(z) {
                    return "compliance" === D.w(z).getParam("app")
                }

                function At(z) {
                    const t = D.w(z.href).getParam("mwg");
                    if (t)
                        for (const z of $(t))
                            if (at(z)) return !0;
                    return !1
                }

                function Kt(z) {
                    const t = q({
                            app: "compliance",
                            [Nz]: Lz.TopBar
                        }),
                        C = lt();
                    if (C) {
                        if ((null == C ? void 0 : C.window) !== window) return;
                        for (const z of C.frames)
                            if (z.layout === Lz.TopBar && at(z.location)) return;
                        C.addFrame(t)
                    } else {
                        const C = q({
                            mwg: c([t, window.location.href])
                        });
                        z.init(C)
                    }
                }
                const Lt = /^\*?(\d+\.\d+\.\d+\.\d+-[a-f0-9]{10}).*/,
                    Pt = "6.20240625.71558.42417-629900b49f".replace(Lt, "$1");
                (function() {
                    Mt(),
                        function() {
                            let z = !1;
                            window.addEventListener("beforeunload", (() => {
                                window.EVO_VERBOSE("beforeunload"), z = !0, setTimeout((() => {
                                    z = !1
                                }), 1e3)
                            })), window.addEventListener("popstate", (() => {
                                if (z) {
                                    window.EVO_VERBOSE("beforeunload > popstate");
                                    const z = window.location.href,
                                        t = D.w(z);
                                    t.searchParams._reload = Date.now().toFixed(), window.history.pushState(null, "", t.toString()), r.z6("Popstate event triggered for Gammix BB application"), window.location.replace(z)
                                }
                            }))
                        }(),
                        function() {
                            const z = window.history.pushState;
                            window.history.pushState = function(t, C, w) {
                                z.call(window.history, t, C, w), window.dispatchEvent(new CustomEvent("pushstate"))
                            };
                            const t = window.history.replaceState;
                            window.history.replaceState = function(z, C, w) {
                                t.call(window.history, z, C, w), window.dispatchEvent(new CustomEvent("replacestate"))
                            }
                        }(), window.addEventListener("message", (z => {
                            const t = z.data;
                            if (z.origin === R.receive && t && "object" == typeof t && t.key === W) {
                                window.parent !== window && H(window.parent, z);
                                for (let t = 0; t < window.length; t++) H(window[t], z)
                            }
                        }));
                    const z = D.w(window.location.href),
                        t = new It;
                    window.EVO_LOADER = t, t.addDeviceTypeToGlobalClasses(), Object.defineProperty(window, "EVO_LOADER", {
                            get: () => t,
                            set: () => {
                                console.warn("window.EVO_LOADER cannot be overwritten")
                            }
                        }),
                        function(z) {
                            return function() {
                                const z = D.w(window.location.href),
                                    t = z.getParam("origin");
                                if (!t) return Promise.resolve();
                                if (t.startsWith("https%3A%2F%2F")) return Promise.reject("`origin` parameter has been incorrectly double encoded");
                                window.console.log("Full URL", window.location.href), window.console.log("Processing origin parameter:", t);
                                const C = D.w(t);
                                if (C.pathname.length <= 1 && !C.search) return w();
                                if (z.getParam("JSESSIONID") || z.getParam("params")) {
                                    const z = "⚠ `JSESSIONID` or `params` is defined outside of `origin` URL. Please ensure that `origin` value is properly url-encoded.";
                                    window.console.warn(z), window.EVO_VERBOSE(z, 1)
                                }
                                return C.searchParams.json = "true", C.searchParams.cc = "1", C.searchParams.client_version = "6.20240625.71558.42417-629900b49f", r.QJ(C.toString(), "json").then((z => {
                                    const t = null == z ? void 0 : z.location;
                                    if ("string" != typeof t) throw new Error("Auth endpoint didn't return correct format.");
                                    const V = D.w(t);
                                    V.hashParams.origin = C.origin;
                                    const h = window.location.pathname + V.search + V.hash;
                                    r.z6("Setting remote origin");
                                    try {
                                        window.history.replaceState(null, "", h)
                                    } catch (z) {
                                        window.location.replace(h)
                                    }
                                    return Mt(), w()
                                }));

                                function w() {
                                    if (!window.EVO_SESSION_ID_FALLBACK) return Promise.reject("origin is only allowed when session id is also given in url");
                                    const z = C.origin;
                                    return z.endsWith(".evo-games.com") || z.endsWith(".evolution.com") ? (window.EVO_ORIGIN = z, document.cookie ? fetch("/logout", {
                                        credentials: "same-origin",
                                        method: "POST"
                                    }).then((() => {})).catch((() => {})) : Promise.resolve()) : Promise.reject("unsafe origin rejected")
                                }
                            }().catch((t => (window.console.error("⛔", t), window.EVO_VERBOSE(t, 1), z.failedAuth(), Promise.reject(t))))
                        }(t).then((() => {
                            (function(z) {
                                let t = 0;

                                function C() {
                                    z.isFailed || z.sendLog("CLIENT_GAME_LOADER_TERMINATED", Object.assign({
                                        loadingTime: h()
                                    }, I()))
                                }
                                z.addInstanceSwitchListener((w => {
                                    t = performance.now(), z.sendLog("CLIENT_GAME_LOADER_STARTED", Object.assign({
                                        sharingBrowserContext: !!window.opener,
                                        failureCount: r.wP(),
                                        verboseEnabled: window.EVO_VERBOSE()
                                    }, z.initMetadata)), window.addEventListener("beforeunload", C);
                                    const h = V("visibilitychange"),
                                        I = V("pagehide"),
                                        y = V("pageshow");
                                    document.addEventListener("visibilitychange", h), window.addEventListener("pagehide", I), window.addEventListener("pageshow", y), w.subscribe("gameLoaded", (() => {
                                        window.removeEventListener("beforeunload", C), document.removeEventListener("visibilitychange", h), window.removeEventListener("pagehide", I), window.removeEventListener("pageshow", y)
                                    }))
                                })), z.addFailureListener((t => {
                                    z.sendLog("CLIENT_GAME_LOADER_FAILED", Object.assign({
                                        failureReason: t.failureReason,
                                        failureDetails: t.failureDetails,
                                        failedURL: t.failedURL,
                                        failureCount: t.failureCount,
                                        willRetry: t.willRetry,
                                        loadingTime: h()
                                    }, I()))
                                }));
                                let w = Zt;

                                function V(t) {
                                    return () => {
                                        const C = "pagehide" === t || "visibilitychange" === t && "hidden" === document.visibilityState ? yt : Zt;
                                        C !== w && (z.sendLog(C, {
                                            loadingTime: h()
                                        }, {
                                            store: !0
                                        }), w = C)
                                    }
                                }

                                function h() {
                                    return Math.floor(performance.now() - t)
                                }

                                function I() {
                                    let t = 0,
                                        C = 0;
                                    return z.instance.setLogConsumer((({
                                        type: z
                                    }) => {
                                        z === yt ? t += 1 : z === Zt && (C += 1)
                                    })), Object.assign({
                                        hideEvents: t,
                                        showEvents: C
                                    }, z.initMetadata)
                                }
                            })(t), Rt(t, y),
                                function(z) {
                                    window.EVO_ORIGIN || z.shared.subscribe("setup", (t => {
                                        var C;
                                        const w = null === (C = t.casinoConfig) || void 0 === C ? void 0 : C.gameClientUrl;
                                        if (w && !window.location.pathname.startsWith(w))
                                            if (window.EVO_VERBOSE()) window.console.warn(`Ignoring 'gameClientUrl=${w}' because of development/verbose mode.`);
                                            else {
                                                window.console.log("Adjusting the URL based on 'gameClientUrl'. It will take effect on next page reload.");
                                                const z = D.w(window.location.href);
                                                z.pathname = w, Xt(z.toString(), !1)
                                            }
                                        z.addInstanceSwitchListener((z => {
                                            z.subscribe("config", (z => {
                                                let t = z.frontend_loader || "";
                                                if (t !== _t && t) {
                                                    if (window.location.pathname.endsWith(t)) return
                                                } else {
                                                    if (window.location.pathname.endsWith(_t) || window.location.pathname.endsWith("/")) return;
                                                    t = ""
                                                }
                                                window.console.log("Adjusting the URL based on 'frontend_loader'.");
                                                const C = D.w(window.location.href);
                                                C.pathname = C.pathname.substring(0, C.pathname.lastIndexOf("/") + 1) + t, Xt(C.toString(), !0)
                                            }))
                                        }))
                                    }))
                                }(t),
                                function(z) {
                                    z.shared.subscribe(["setup", "style"], ((t, C) => {
                                        let w = window;
                                        if (function(z, t, C) {
                                                var w;
                                                if (z.isDesktop) return !1;
                                                const {
                                                    swe: V,
                                                    de: h,
                                                    arg: I
                                                } = (null === (w = null == t ? void 0 : t.casinoConfig) || void 0 === w ? void 0 : w.compliance) || {}, y = C.data.mobile_settings || {};
                                                return !(!("compliance" in y) || 0 === Object.keys(y.compliance).length || !V && !h && !I)
                                            }(z.deviceInfo, t, C)) try {
                                            let t = At(w.location);
                                            for (; !t && w !== w.parent;) t = At(w.parent.location), w = w.parent;
                                            t || (z.isFailed = !0, Kt(z))
                                        } catch (t) {
                                            window.console.error("Unable to read parent windows URL", t), z.isFailed = !0, Kt(z)
                                        } else "multi" === z.instance.kind && At(w.location) && function() {
                                            const z = lt();
                                            if (z)
                                                for (const t of z.frames) t.layout === Lz.TopBar && at(t.location) && (null == z || z.removeFrame(t.frame, {
                                                    update: !0,
                                                    animateOnMobile: !1
                                                }))
                                        }()
                                    }))
                                }(t),
                                function(z, t) {
                                    z.shared.subscribe("setup", (t => {
                                        const C = t.wsHost;
                                        C && z.prefetcher.preconnect(`//${C}`, !0)
                                    }));
                                    const C = t.getParam("app") || t.getParam("game");
                                    C && !C.includes("@") && z.prefetcher.preload({
                                        game: C
                                    }, !0, !0).catch((() => {})), z.addInstanceSwitchListener((z => {
                                        "game" === z.kind && z.subscribe("config", (z => {
                                            const t = D.w(window.location.href);
                                            if ((t.getParam("game") || "") !== (z.game || "")) {
                                                t.searchParams.game = void 0, t.hashParams.game = z.game || void 0;
                                                try {
                                                    window.history.replaceState(null, "", t.toString())
                                                } catch (z) {}
                                            }
                                        }))
                                    }))
                                }(t, z),
                                function(z) {
                                    document.documentElement.setAttribute("lang", window.EVO_LOCALE), z.shared.subscribe("setup", (t => {
                                        z.addInstanceSwitchListener((() => {
                                            document.body.classList.add(t.lang)
                                        }))
                                    }))
                                }(t),
                                function(z) {
                                    z.addInstanceSwitchListener((t => {
                                        "game" === t.kind && z.shared.subscribe("style", (z => {
                                            var t;
                                            if (null === (t = z.data) || void 0 === t ? void 0 : t[Gt]) {
                                                let t = z.data[Gt].url;
                                                const C = document.getElementById("RealityCheckScript");
                                                if (t && !C) {
                                                    "/" === t[0] && (t = (window.EVO_ORIGIN || "") + t);
                                                    const z = document.createElement("script");
                                                    z.type = "text/javascript", z.charset = "utf-8", z.src = t, z.id = "RealityCheckScript", document.head.appendChild(z)
                                                }
                                            }
                                        }))
                                    }))
                                }(t),
                                function(z) {
                                    function t() {
                                        z.displayFailurePopup("error.noDealer", !1, !0)
                                    }
                                    z.addInstanceSwitchListener((C => {
                                        C.subscribe("config", (C => {
                                            var w;
                                            !C || C.error ? C && "object" == typeof C.error && "5013" === C.error.code ? t() : z.failed({
                                                reason: "config",
                                                failureDetails: new Error("invalid config")
                                            }) : (null === (w = C["disabled-client-versions"]) || void 0 === w ? void 0 : w.split(",").find((z => z.replace(Lt, "$1") === Pt))) && t()
                                        }))
                                    }))
                                }(t),
                                function(z) {
                                    z.addInstanceSwitchListener((z => {
                                        document.title = "Casino", "game" === z.kind && z.subscribe("config", (z => {
                                            document.title = `Casino: ${z.tableName||z.game||"game"}`
                                        }))
                                    }))
                                }(t),
                                function(z) {
                                    z.addInstanceSwitchListener((z => {
                                        z.subscribe(["config", "gameLoaded"], (t => {
                                            var C, w;
                                            "game" === z.kind && (C = {
                                                type: "GAME_LOADED",
                                                payload: {
                                                    gameType: t.game,
                                                    tableId: z.tableId,
                                                    tableName: t.tableName || ""
                                                }
                                            }, nt || (null === (w = window.EVO_LOADER) || void 0 === w ? void 0 : w.clientApi) || (nt = function() {
                                                const z = new Ut;
                                                return z.addConsumer(Dt), z.addConsumer(Ot), z.addConsumer(Ht), z
                                            }()), null == nt || nt.dispatch(C.type, C.payload))
                                        }))
                                    }))
                                }(t),
                                function(z) {
                                    return document.addEventListener("visibilitychange", t), void document.addEventListener("webkitvisibilitychange", t);

                                    function t() {
                                        z.wasThrottled = !0
                                    }
                                }(t),
                                function(z) {
                                    const {
                                        isDesktop: t
                                    } = z.deviceInfo;
                                    let C = 0;
                                    if (t) {
                                        let z = !1;
                                        window.addEventListener("load", (() => {
                                            z = !0
                                        })), window.addEventListener("popstate", (() => {
                                            z && (C = setTimeout((() => {
                                                window.EVO_VERBOSE(`popstate ${window.location.hash}`), window.location.reload()
                                            }), 100))
                                        }))
                                    }
                                    window.addEventListener("hashchange", (() => {
                                        C && (clearTimeout(C), C = 0), window.EVO_VERBOSE(`hashchange ${window.location.hash}`), z.init(window.location.href)
                                    }))
                                }(t),
                                function(z) {
                                    if ("empty" === z.instance.kind && !lt()) try {
                                        z.instance = new gz(z, "", !0)
                                    } catch (z) {
                                        v.vV(new v.ah("Initialization failed", z))
                                    }
                                }(t),
                                function(z) {
                                    let t;
                                    z.addInstanceSwitchListener((C => {
                                        z.shared.subscribe("style", (z => {
                                            var w;
                                            let V;
                                            if (null === (w = z.data) || void 0 === w ? void 0 : w.mobile_settings) {
                                                const t = z.data.mobile_settings.branded_lobby_gradient;
                                                (null == t ? void 0 : t.light) && t.dark && (V = [t.light, t.dark])
                                            }
                                            C.subscribe("config", (z => {
                                                let C, w;
                                                z.branded_cloth_gradient_light && z.branded_cloth_gradient_dark && (C = [z.branded_cloth_gradient_light, z.branded_cloth_gradient_dark]), z.branded_menu_gradient_light && z.branded_menu_gradient_dark && (w = [z.branded_menu_gradient_light, z.branded_menu_gradient_dark]), t = function(z, t, C, w) {
                                                    let V = "";
                                                    if (z) {
                                                        const t = `linear-gradient(45deg,rgba(${z[1]},0) 0%, rgba(${z[1]},0.8) 50%, rgba(${z[1]},0) 100%)`,
                                                            C = `linear-gradient(45deg,rgb(${z[0]}) -5%,rgb(${z[1]}) 50%,rgb(${z[0]}) 105%)`;
                                                        V += `.game-screen.cloth-gradient {background: -webkit-${t}, -webkit-${C} !important;background: ${t}, ${C} !important;background-size: cover !important;background-repeat: no-repeat !important; }`
                                                    }
                                                    const h = w ? t : C;
                                                    if (h) {
                                                        const z = `linear-gradient(45deg,rgba(${h[1]},0) 0%,rgba(${h[1]},0.8) 50%,rgba(${h[1]},0) 100%)`,
                                                            t = `linear-gradient(45deg,rgb(${h[0]}) -5%,rgb(${h[1]}) 50%,rgb(${h[0]}) 105%)`;
                                                        V += `.${dt}.${st} {background: ${z}, ${t} !important;background-size: cover !important;background-repeat: no-repeat !important; }`
                                                    }
                                                    if (V.length) {
                                                        const z = document.createElement("style");
                                                        return z.type = "text/css", z.media = "screen", document.head.appendChild(z), z.sheet && ((z.sheet.ownerNode || z).innerHTML = V), z
                                                    }
                                                }(C, V, w, !z.game)
                                            }))
                                        })), C.subscribe("disposing", (() => {
                                            var z;
                                            null === (z = null == t ? void 0 : t.parentNode) || void 0 === z || z.removeChild(t)
                                        }))
                                    }))
                                }(t),
                                function(z) {
                                    const t = $t(dt),
                                        C = $t("star1--da76f");

                                    function w(z) {
                                        z.target instanceof HTMLElement && "BUTTON" === z.target.tagName || z.preventDefault()
                                    }

                                    function V(z = !0) {
                                        $t("evoLogo--06ffa").style.opacity = z ? "1" : "0"
                                    }

                                    function h() {
                                        const t = $t("content--1ddca"),
                                            C = z.deviceInfo.isDesktop ? 16 / 9 : 1,
                                            w = window.innerWidth / window.innerHeight > C,
                                            V = z.deviceInfo.isTablet;
                                        t.classList.toggle("wide--3bffa", w), t.classList.toggle("narrow--8d0d9", !w), t.classList.toggle("tablet--43c30", V)
                                    }

                                    function I(z, C, w) {
                                        C && t.classList.add(ut), z || t.classList.add("mobile--76605", st);
                                        const V = $t("center--9aeab");
                                        w ? r.Bt(V) : r.kl(V), r.kl(t, !0), t.classList.remove(Jt), $t(it).classList.remove(Tt)
                                    }

                                    function y() {
                                        t.classList.add(Jt), window.removeEventListener("resize", h), window.setTimeout((() => {
                                            r.Bt(t), document.body.classList.remove("loading"), t.classList.remove(ut, qt, Bt, St), C.style.transform = "", window.removeEventListener("touchmove", w), window.removeEventListener("touchstart", w), window.removeEventListener("touchend", w), t.style.maxHeight = "", t.style.height = "", t.style.margin = "", z.instance.publish("loadingScreenHidden", null)
                                        }), 500)
                                    }

                                    function Z() {
                                        this.classList.add(Tt)
                                    }

                                    function R(z, t) {
                                        for (const C of t) C && ct(C).then((t => z.prepend(t))).catch((() => {}))
                                    }

                                    function W(z = !0, t = window, C = {
                                        transfer: 0,
                                        count: 0
                                    }) {
                                        var w, V;
                                        const h = null === (V = null === (w = t.performance) || void 0 === w ? void 0 : w.getEntriesByType) || void 0 === V ? void 0 : V.call(w, "resource");
                                        for (const z of h || []) C.transfer += z.transferSize || 0, C.count++;
                                        if (z)
                                            for (let w = 0; w < t.length; w++) try {
                                                W(!0, t[w], C)
                                            } catch (z) {
                                                return null
                                            }
                                        return C
                                    }
                                    z.shared.getPromise("i18n").then((z => {
                                        $t("logoText--42a39").textContent = z.common["mobile.poweredby"]
                                    })), z.addInstanceSwitchListener((H => {
                                        const D = z.deviceInfo.isDesktop,
                                            O = "game" !== H.kind;
                                        let U = 0,
                                            n = -1,
                                            _ = null;
                                        if ("multi" === H.kind) return void y();
                                        I(D, O, !1), h(), window.removeEventListener("resize", h), window.addEventListener("resize", h);
                                        const X = z.deviceInfo.isEventPassiveSupported;
                                        window.addEventListener("touchmove", w, X && {
                                            passive: !1
                                        }), window.addEventListener("touchstart", w, X && {
                                            passive: !1
                                        }), window.addEventListener("touchend", w), z.shared.subscribe("style", (z => {
                                            const C = "false" === z.data.show_evo_logo;
                                            H.subscribe("config", (z => {
                                                const w = function(z, t = !1) {
                                                    const C = "evolution" === z.game_provider || !z.game_provider;
                                                    return t ? !1 !== function(z) {
                                                        try {
                                                            const t = window.sessionStorage.getItem(z);
                                                            return t ? JSON.parse(t) : void 0
                                                        } catch (z) {
                                                            return
                                                        }
                                                    }(Kz) : C ? "false" !== z.show_evo_logo : "true" === z.show_evo_logo
                                                }(z, O);
                                                var h;
                                                !C && w && (V(), h = function(z) {
                                                    const t = z.graphical_footerLogos;
                                                    return t ? t.trim().split(",").map(N) : []
                                                }(z), h.length && (t.classList.add(qt), R($t(vt), h))), O || function(z, t, C) {
                                                    try {
                                                        window.sessionStorage.setItem(z, JSON.stringify(t))
                                                    } catch (z) {}
                                                }(Kz, w)
                                            }))
                                        })), z.shared.subscribe("setup", (z => {
                                            H.subscribe("config", (t => {
                                                var C;
                                                (function(z) {
                                                    if (z) {
                                                        const t = $t(it);
                                                        t.removeEventListener("load", Z), t.addEventListener("load", Z), t.src = z
                                                    }
                                                })(function(z, t, C) {
                                                    const w = function(z, t, C) {
                                                        const w = window.EVO_LOCALE || t.locale,
                                                            V = t.lang,
                                                            h = C ? "graphical_desktopLoadingScreen" : "graphical_mobileLoadingScreen";
                                                        return z[`${h}_${w}`] || z[`${h}_${V}`] || z[h]
                                                    }(t, C, z);
                                                    return N(w)
                                                }(D, t, z)), D || (C = function(z) {
                                                    const t = z.graphical_mobileAwardLogos;
                                                    return t ? t.trim().split(",").map(N) : []
                                                }(t), R($t(Yt), C))
                                            }))
                                        })), H.subscribe(["config", "gamePackageManifest"], ((w, V) => {
                                            n = parseFloat(w.loader_expected_resource_count || "0") || V.loaderExpectedResourceCount || 0, _ = w.loader_resources_counting_mode || V.loaderResourcesCountingMode || "auto";
                                            const h = !n || "none" === _;
                                            t.classList.add(h ? Bt : St), h && z.sendLog("CLIENT_LOADING_SCREEN_ISSUE", {
                                                error: "random-animation",
                                                game: w.game,
                                                app: V.application
                                            }), U = window.setInterval((() => {
                                                const z = W("auto" === _);
                                                if (z) {
                                                    if ("non-recursive" === _) {
                                                        const t = H.loadProgress;
                                                        if (!t) return;
                                                        z.count += t.count || 0, z.transfer += t.transfer || 0
                                                    }
                                                    if (n) {
                                                        const t = Math.max(.01, Math.min(.99, z.count / n));
                                                        C.style.transform = `translateX(${(600*t).toFixed(0)}%)`
                                                    }
                                                }
                                            }), 500)
                                        })), H.subscribe("gameLoaded", (() => {
                                            y(), clearInterval(U);
                                            const z = W("auto" === _);
                                            z && n > 0 && Math.abs(1 - z.count / n) > .1 ? window.console.warn(`Mismatch between expected resource count (${n}) and actual.`, z) : window.console.log("Resources loaded:", z)
                                        })), H.subscribe("disposing", (t => {
                                            if (function() {
                                                    const z = $t(it);
                                                    z.removeEventListener("load", Z), z.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==", $t(Yt).textContent = "", $t(vt).textContent = "", V(!1)
                                                }(), null == t ? void 0 : t.suppressLoadingScreen) return;
                                            const C = "switch" === z.instance.kind && !z.instance.tableId;
                                            I(D, C, !0)
                                        }))
                                    }))
                                }(t),
                                function(z) {
                                    const t = function(z, t, C) {
                                        let w = 0,
                                            V = !1;
                                        return (...C) => {
                                            if (w < z.limit) return w += 1, setTimeout((() => {
                                                w -= 1, V = !1
                                            }), z.timeSpan), t(...C);
                                            V || (V = !0)
                                        }
                                    }({
                                        limit: 20,
                                        timeSpan: 6e4
                                    }, z.sendLog);
                                    z.addInstanceSwitchListener((z => {
                                        z.subscribe("gameLoaded", (() => {
                                            window.parent.postMessage({
                                                type: "CLIENT_API_V1_USAGE_LOGGER_INITIALIZED"
                                            }, "*")
                                        }))
                                    })), window.addEventListener("message", (({
                                        data: z,
                                        origin: C
                                    }) => {
                                        "IFRAME_SUBSCRIBED_TO_EVENTS" === z.type && t("CLIENT_API_V1_USAGE", {
                                            origin: C,
                                            payload: z.payload
                                        })
                                    }))
                                }(t),
                                function(z) {
                                    z.shared.subscribe("setup", (t => {
                                        z.addInstanceSwitchListener((C => {
                                            C.subscribe("config", (C => {
                                                C.bare_session_id && C.bare_session_id !== t.bare_session_id && z.failed({
                                                    reason: "config",
                                                    failureDetails: "bare_session_id mismatch"
                                                })
                                            }))
                                        }))
                                    }))
                                }(t),
                                function(z) {
                                    window.addEventListener("pageshow", (t => {
                                        t.persisted && z.init(window.location.href, {
                                            triggeredBy: "bfcache"
                                        }).then((() => {
                                            window.EVO_VERBOSE("Re-initialized from bfcache")
                                        })).catch((z => {
                                            window.EVO_VERBOSE(`Re-initializing from failed due to ${z.message}`, 2)
                                        }))
                                    })), window.addEventListener("pagehide", (t => {
                                        t.persisted && z.instance.dispose().then((() => {
                                            console.log("Prepared for bfcache")
                                        })).catch((z => {
                                            console.error("Preparation of bfcache failed", z)
                                        }))
                                    }))
                                }(t), t.init()
                        })).catch((() => {}))
                })()
            })()
        })()
    </script>
</body>

</html>