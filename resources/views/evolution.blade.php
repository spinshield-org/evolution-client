<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,viewport-fit=cover,interactive-widget=resizes-content">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Casino">
    <meta name="author" content="Evolution Gaming">
    <meta name="build" content="Build Version: 6.20240808.72721.43530-9cfa25698c at 2024-08-09 07:44:09 UTC" id="build">
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
            } catch (s) {
                H("ES2017 or PointerEvent")
            }
            var s = new Image;

            function H(s) {
                s = "This browser does not support " + s + ". Redirecting to the error page...";
                try {
                    console.error(s)
                } catch (s) {}
                0 && alert(s), location.href = "/frontend/evo/errors/unsupported-browsers.html" + location.search + location.hash
            }
            s.onerror = function() {
                H("WebP")
            }, s.src = "data:" + "image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA=="
        })()
    </script>
    <script>
        (function() {
            "use strict";
            try {
                eval("Promise=class P extends Promise{constructor(...a){super(...a);this.__stackTraceError=new Error('Promise created');}}")
            } catch (A) {}
            window.globalThis || (window.globalThis = window), null == Element.prototype.getAttributeNames && (Element.prototype.getAttributeNames = function() {
                    const A = this.attributes,
                        Q = A.length,
                        X = new Array(Q);
                    for (let F = 0; F < Q; F++) X[F] = A[F].name;
                    return X
                }),
                function(A) {
                    const Q = A.performance || (A.performance = {});

                    function X() {}
                    Q.mark || (Q.mark = X), Q.measure || (Q.measure = X), A[Symbol("iOS weakref hack")] = Q
                }(globalThis)
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const x = window.location,
                L = x.pathname;
            if ("/" !== L.slice(-1) && ".html" !== L.slice(-5) && x.replace(`${L}/${x.search}${x.hash}`), 0) try {
                window.__REACT_DEVTOOLS_GLOBAL_HOOK__ = window.top.__REACT_DEVTOOLS_GLOBAL_HOOK__
            } catch (x) {}
            const q = {};
            for (const x of document.cookie.split(";")) {
                const [L, g] = x.replace(/^\s*(.*)\s*$/, "$1").split(/\s*=\s*(.+)/);
                q[L] = L in q ? void 0 : g
            }
            if (!q.cdn && !q.locale) try {
                const L = new URLSearchParams(x.hash.substr(1));
                q.locale = L.get("locale");
                const g = L.get("cdn");
                g && new URL(g).origin.endsWith(".egcdn.com") && (q.cdn = g)
            } catch (x) {}
            window.EVO_CDN = 0 || q.ignore_cdn ? "" : (q.cdn || "").replace(/\/+$/, ""), window.EVO_LOCALE = q.locale || void 0, window.EVO_VERBOSE = function() {
                return !1
            }, window.EVO_VERBOSE_ENABLE = function() {
                window.EVO_VERBOSE() || (document.cookie = "verbose=true; path=/", window.EVO_VERBOSE = function(x, L, q, g) {
                    if (!x) return !0;
                    const a = document.getElementById("verbose-log") || document.body;
                    if (!a) return !0;
                    let u = null,
                        d = !1;
                    if (q && (u = a.querySelector(`[data-key="${q}"]`)), u) {
                        const x = u.getAttribute("data-timer");
                        x && window.clearTimeout(parseFloat(x))
                    } else u = document.createElement("div"), q && u.setAttribute("data-key", q), d = !0;
                    if (u.textContent = x, u.style.color = ["", "#ffc", "#fcc"][L || 0], g) {
                        const x = window.setTimeout((() => {
                            u.parentNode === a && a.removeChild(u)
                        }), g);
                        u.setAttribute("data-timer", x.toString())
                    }
                    return d && (a.appendChild(u), a.scrollTop = a.offsetHeight), !0
                }, window.addEventListener("error", a, !0))
            }, window.EVO_VERBOSE_DISABLE = function() {
                document.cookie = "verbose=false; path=/", window.EVO_VERBOSE = function() {
                    return !1
                }, window.removeEventListener("error", a, !0)
            };
            const g = window.location.href.indexOf("verbose=") > -1;

            function a(x) {
                var L;
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                let q = (null === (L = x.error) || void 0 === L ? void 0 : L.stack) || x.message;
                x.filename && (q += ` ${x.filename}`), window.EVO_VERBOSE(q, 2, "", 1e4)
            }(0 || "true" === q.verbose || g) && window.EVO_VERBOSE_ENABLE(), window.addEventListener("unhandledrejection", (x => {
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                const L = x.reason;
                let q = `${L}`;
                const g = L instanceof Error ? L.stack : "";
                (null == L ? void 0 : L.name) && -1 === q.indexOf(L.name) && (q += ` ${L.name}`), (null == L ? void 0 : L.message) && -1 === q.indexOf(L.message) && (q += ` ${L.message}`);
                const a = `Unhandled promise rejection, reason: ${q}`,
                    u = new Error(a),
                    d = x.promise.__stackTraceError,
                    i = d ? d.stack.substr(7).replace(/\\n.*\\n/, "\\n") : "";
                u.stack = `${a}\n${i}\n${g}`, window.EVO_VERBOSE(a, 2), "undefined" != typeof Sentry && Sentry.captureException(u)
            })), window.EVO_VERBOSE("6.20240808.72721.43530-9cfa25698c"), window.EVO_CDN && window.EVO_VERBOSE(`cdn: ${window.EVO_CDN}`), window.EVO_POPUP = function(x, L) {
                const q = document.getElementById("loader-popup"),
                    g = a("div", a("label", x));

                function a(x, L) {
                    const q = document.createElement(x);
                    return q.appendChild(function(x) {
                        return "undefined" != typeof Node ? x instanceof Node : "object" == typeof x
                    }(L) ? L : document.createTextNode(L)), q
                }
                null == L || L.forEach((function(x) {
                    const L = a("button", x.content);
                    L.onclick = function() {
                        var L;
                        null === (L = x.callback) || void 0 === L || L.call(x), q.removeChild(g)
                    }, g.appendChild(L)
                })), -1 === q.innerHTML.indexOf(g.outerHTML) && q.appendChild(g)
            }
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const X = "service.worker.38adda51.js";

            function a(a) {
                return !a.active || !a.active.scriptURL.endsWith(X)
            }

            function P(X) {
                "undefined" != typeof Sentry && Sentry.captureException(X)
            }(async function() {
                if (navigator.cookieEnabled) try {
                    await async function() {
                        if (!navigator.serviceWorker) return;
                        const j = await navigator.serviceWorker.getRegistrations();
                        let J = !1;
                        for (const X of j) a(X) ? await X.unregister() : (0 && X.update(), J = !0);
                        J || await navigator.serviceWorker.register(X), navigator.serviceWorker.addEventListener("message", (X => {
                            if ("processing-failed" === X.data.type) {
                                const a = new Error(X.data.message);
                                a.stack = X.data.stack, P(a)
                            }
                        }))
                    }()
                } catch (X) {
                    P(X), console.error(X)
                }
            })()
        })()
    </script>
    <style id="loader">
        .loadingScreen--87788{align-items:center;background:#000;bottom:0;display:none;justify-content:center;left:0;position:absolute;right:0;top:0;z-index:1000000}.gradientContent--e45a4{background-position:50%;background-repeat:no-repeat;background-size:cover;background:linear-gradient(45deg,transparent,rgba(5,10,10,.8) 50%,transparent),linear-gradient(45deg,#414650 -5%,#050a0a 50%,#414650 105%)!important;display:none;height:100%;left:0;position:absolute;top:0;width:100%}.loadingScreen--87788.gradient--0f1d8 .gradientContent--e45a4{display:block}.loadingScreen--87788.capturedLogo--1678b{background:0 0}.loadingScreen--87788.capturedLogo--1678b.finishProgress--0c00b .awardLogos--861ba,.loadingScreen--87788.capturedLogo--1678b.finishProgress--0c00b .center--9aeab,.loadingScreen--87788.capturedLogo--1678b.finishProgress--0c00b .gradientContent--e45a4,.loadingScreen--87788.finishProgress--0c00b:not(.capturedLogo--1678b){opacity:0;transition:opacity .5s}.content--1ddca{position:relative}.content--1ddca.narrow--8d0d9{font-size:6.25vw;height:56.25vw;width:100vw}.content--1ddca.wide--3bffa{font-size:11.11111vh;height:100vh;width:177.77778vh}.center--9aeab{height:.88em;margin:0 auto;top:66.1%;width:2.75em}.center--9aeab,.footer--fba55{left:0;position:absolute;right:0}.footer--fba55{align-items:center;display:flex;flex-direction:column;height:.3em;top:1.15em;width:100%}.footer--fba55>div{font-size:10%;margin-top:1em;white-space:nowrap}.footer--fba55>img{animation:appearingLogoKeyframes--af0f0 .2s linear;height:100%;margin:auto;width:auto}.mobile--76605 .footer--fba55{height:.24em;top:.93em}.mobile--76605 .content--1ddca.narrow--8d0d9{font-size:17vw;height:50vw;width:85vw}.mobile--76605 .content--1ddca.wide--3bffa{font-size:20vh;height:72vh;width:66vh}.mobile--76605 .center--9aeab{bottom:0;position:absolute;top:auto}.mobile--76605 .image--44b6b{bottom:1em;height:auto;max-height:100%;object-fit:contain;position:absolute}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .footer--fba55{height:.23em;top:.9em}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .center--9aeab{bottom:.72em}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .image--44b6b{bottom:1.62em;margin-left:2.5%;width:95%}.mobile--76605.withFooterLogo--6ca4a .content--1ddca.wide--3bffa{font-size:17vh}.line1--b6711{background-image:radial-gradient(hsla(0,0%,100%,.3) 15%,hsla(0,0%,100%,.1) 60%,hsla(0,0%,100%,0) 70%);background-position:center 0,center 50%;background-repeat:no-repeat,no-repeat;height:11.765%;position:absolute;top:11.765%;visibility:hidden;width:100%}.line1--b6711:after{background-image:radial-gradient(#fff 15%,hsla(0,0%,100%,0) 70%);content:"";display:block;height:18.234%;top:44%}.line1--b6711:after,.line2--f8241{background-position:50%;background-repeat:no-repeat;position:absolute;width:100%}.line2--f8241{background-image:radial-gradient(hsla(0,0%,100%,.5) 15%,hsla(0,0%,100%,.3) 65%,hsla(0,0%,100%,0) 71%);height:1.967%;overflow:hidden;top:17%;visibility:hidden}.star1--da76f{height:47.059%;position:absolute;top:-4.96%;transition:transform .2s;visibility:hidden;width:14.546%}.star2--7a218{animation:starRotationKeyframes--daa9e 2s linear infinite;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width='48' height='48' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3CradialGradient fx='50%25' fy='50%25' r='49.1%25' id='c'%3E%3Cstop stop-color='%23fff' offset='30%25'/%3E%3Cstop stop-color='%23fff' stop-opacity='.5' offset='100%25'/%3E%3C/radialGradient%3E%3Cfilter x='-84%25' y='-84%25' width='268%25' height='268%25' filterUnits='objectBoundingBox' id='a'%3E%3CfeMorphology radius='.1' operator='dilate' in='SourceAlpha' result='d'/%3E%3CfeOffset in='d' result='e'/%3E%3CfeGaussianBlur stdDeviation='2' in='e' result='f'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0' in='f' result='g'/%3E%3CfeOffset in='SourceAlpha' result='h'/%3E%3CfeGaussianBlur stdDeviation='7' in='h' result='i'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0' in='i' result='j'/%3E%3CfeMerge%3E%3CfeMergeNode in='g'/%3E%3CfeMergeNode in='j'/%3E%3C/feMerge%3E%3C/filter%3E%3Cpath d='M17.4 14H19l11 1-11 1h-1.6l1.1 1.1 7.1 8.5-8.5-7-1.1-1.2V19l-1 11-1-11v-1.6l-1.1 1.1-8.5 7.1 7-8.5 1.2-1.1H11L0 15l11-1h1.6l-1.1-1.1-7.1-8.5 8.5 7 1.1 1.2V11l1-11 1 11v1.6l1.1-1.1 8.5-7.1-7 8.5-1.2 1.1z' id='b'/%3E%3C/defs%3E%3Cg transform='translate(8.8 8.8)' fill='none' fill-rule='evenodd'%3E%3Cuse fill='%23000' filter='url(%23a)' xlink:href='%23b'/%3E%3Cuse fill='url(%23c)' xlink:href='%23b'/%3E%3C/g%3E%3C/svg%3E");background-position:100%;background-repeat:no-repeat;background-size:100% 100%;float:right;height:100%;width:100%}.evoLogo--06ffa{background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='330' height='40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23FFF'%3E%3Cpath d='M103.534 5.493h20.347v4.61h-15.06v6.727h10.026v4.61H108.82v7.53h15.525v4.611h-20.812z'/%3E%3Cpath d='M122.88 13.615h5.415l4.738 13.917 4.4-13.917h5.245l-7.276 19.966h-4.865zm18.967 10.025c0-6.09 4.23-10.406 10.28-10.406 6.006 0 10.236 4.315 10.236 10.406 0 6.007-4.314 10.322-10.364 10.322-6.006 0-10.152-4.23-10.152-10.322zm15.186.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.949 2.284-4.949 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.991-2.2 4.991-5.922zm7.714-18.655h5.287v28.469h-5.287zm8.306 20.474V13.615h5.245V25.29c0 2.665 1.27 4.23 3.638 4.23 2.75 0 3.892-2.326 3.892-5.753V13.615h5.245V33.58h-5.245v-2.834c-1.058 2.073-2.877 3.215-5.457 3.215-4.526 0-7.318-3.215-7.318-8.376zm22.815 2.707V17.845h-2.834v-4.23h2.834V9.85l5.119-2.876v6.64h3.934v4.231h-3.976v9.94c0 .974.465 1.397 1.438 1.44h2.326v4.356h-4.06c-3.85-.211-4.696-1.988-4.78-5.288zm11.436-22.715h5.457v5.118h-5.457V5.578zm.085 8.037h5.288V33.58h-5.288V13.615zm7.671 10.025c0-6.09 4.23-10.406 10.28-10.406 6.007 0 10.237 4.315 10.237 10.406 0 6.007-4.315 10.322-10.364 10.322-6.007 0-10.152-4.23-10.152-10.322zm15.187.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.95 2.284-4.95 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.992-2.2 4.992-5.922zm7.671-10.152h5.246v3.257c1.057-2.327 3.003-3.68 5.837-3.68 4.357 0 6.938 2.919 6.938 8.418v11.97h-5.246V21.906c0-2.792-1.057-4.23-3.51-4.23-2.497 0-4.02 2.03-4.02 5.753V33.58h-5.245V13.615zM94.61 8.579C89.833 2.276 81.135.499 73.929 4.347c2.816 6.339 4.926 13.779 18.806 14.214 1.629.051 3.418.007 5.391-.148-.284-3.975-1.578-7.276-3.516-9.834zm-2.56 11.108c-8.35.413-12.272 3.458-14.721 7.213-1.441 2.21-2.374 4.665-3.4 6.974 10.131 5.41 23.214-.295 24.198-14.067-2.253-.177-4.267-.21-6.075-.12z'/%3E%3C/g%3E%3C/svg%3E") no-repeat center .22em;background-size:contain;bottom:0;height:65%;opacity:0;position:absolute;text-align:left;transition:opacity .2s;width:100%}.evoLogo--06ffa:empty{opacity:0}.logoText--42a39{font:300 .14em Segoe UI,Helvetica,Arial,sans-serif;opacity:.65;position:absolute;text-align:center;transition:opacity .2s;width:100%}.image--44b6b{display:block;height:100%;object-fit:cover;opacity:0;transition:opacity .5s;width:100%}.image--44b6b.loaded--10bec{opacity:1}.awardLogos--861ba{align-items:center;display:flex;flex-direction:row;height:10em;justify-items:center;left:.5em;position:absolute;top:.5em}.awardLogos--861ba>img{animation:appearingLogoKeyframes--af0f0 .5s linear;height:100%;padding-right:.5em}.loadingScreen--87788.noImage--01a3d .content--1ddca.narrow--8d0d9{height:84vw}.loadingScreen--87788.noImage--01a3d .content--1ddca.wide--3bffa{height:133vh}.loadingScreen--87788.noImage--01a3d .content--1ddca.tablet--43c30{font-size:6.25vw}.loadingScreen--87788.noImage--01a3d .center--9aeab{height:1em;top:50%;width:2.85em}.loadingScreen--87788.noImage--01a3d .line1--b6711{bottom:0;top:auto}.loadingScreen--87788.noImage--01a3d .line2--f8241{bottom:.045em;top:auto}.loadingScreen--87788.noImage--01a3d .star1--da76f{bottom:-14.5%;height:.4em;top:auto;width:.4em}.loadingScreen--87788.noImage--01a3d .evoLogo--06ffa{background-position:center .36em;bottom:auto;height:1em;left:-1.13em;top:-.5em;width:5.1em}.loadingScreen--87788.noImage--01a3d .logoText--42a39{font-size:.18em}.loadingScreen--87788.properAnimation--47cc2 .line1--b6711,.loadingScreen--87788.properAnimation--47cc2 .line2--f8241,.loadingScreen--87788.properAnimation--47cc2 .star1--da76f{visibility:visible}.loadingScreen--87788.randomAnimation--de14a .star1--da76f{transform:translateX(300%);transition:none;visibility:visible}@media screen and (max-height:35px){.awardLogos--861ba,.evoLogo--06ffa,.image--44b6b{display:none}.content--1ddca{max-height:100vh}}@keyframes starRotationKeyframes--daa9e{0%{transform:rotate(0)}to{transform:rotate(1turn)}}@keyframes appearingLogoKeyframes--af0f0{0%{opacity:0}to{opacity:1}}*{margin:0;padding:0}:root{--rem-migration-size:10px;--root-size:10px;--size:10px}body,html{-moz-text-size-adjust:100%!important;text-size-adjust:100%!important;background-color:#000;color:#fff;font:10px/12px Inter,Arial,sans-serif;height:100%}body{position:relative}input,select,textarea{font-family:Inter,Arial,sans-serif}input::-ms-clear{display:none}.uc-video-toolbar{display:none}.loader-frame-container{align-items:center;display:flex;height:100vh;overflow:hidden;position:absolute;right:0;top:0;width:100vw}body.phone .loader-frame-container,body.tablet .loader-frame-container{height:100%;width:100%}.loader-frame-container iframe{background:rgba(0,0,0,.1);border:none;box-sizing:border-box;display:inline-block;vertical-align:top}body.phone .loader-frame-container iframe,body.tablet .loader-frame-container iframe{height:100%;width:100%}.loader-frame-container .games-container{align-items:center;display:flex;flex-wrap:wrap;justify-content:center}body.phone .loader-frame-container .games-container,body.tablet .loader-frame-container .games-container{align-items:start;height:100%;width:100%}.loader-frame-container .sidebar-container{bottom:0;height:100%;position:fixed;right:0}@media (orientation:landscape){.loader-frame-container .sidebar-container{top:0}}.loader-frame-container .sidebar-container iframe{background:0 0;height:100%;width:100%}.loader-frame-container .topbar-container{left:0;position:absolute;right:0;top:0;width:100%}body.tablet .loader-frame-container.withTopBar .games-container{height:calc(100% - 30px);padding-top:30px}body.phone .sidebar-container iframe{animation:MWshowKeyframes .5s linear forwards}body.phone .sidebar-container iframe.disposing{animation:MWhideKeyframes .5s linear}body.phone .loader-frame-container.withTopBar .games-container{height:calc(100% - 30px);padding-top:30px}@media (orientation:landscape){body.phone .loader-frame-container.withTopBar .sidebar-container{top:30px}}@keyframes MWshowKeyframes{0%{transform:translateY(100vh)}to{transform:translateY(0)}}@keyframes MWhideKeyframes{to{transform:translateY(100vh)}}#loader-popup{align-items:center;bottom:0;display:flex;flex-direction:column;flex-wrap:wrap;font:12px/1.5 Segoe UI,Helvetica,Arial,sans-serif;justify-content:center;left:0;position:absolute;right:0;top:0;-webkit-user-select:none;-moz-user-select:none;user-select:none;z-index:1000001}#loader-popup:empty{display:none}body.tablet #loader-popup{font-size:14px}body.desktop #loader-popup{font-size:calc(1vmin + 5px)}#loader-popup>div{background-color:#1a1a1a;border:.0833em solid rgba(150,255,255,.97);border-radius:.5em;box-sizing:border-box;margin:.5em;max-width:90%;padding:1.4em 2.8em;text-align:center}#loader-popup label{display:block}#loader-popup a,#loader-popup button{background-color:initial;border:.0833em solid #4d4d4d;border-radius:1.5em;color:#dcdcdc;cursor:pointer;font-size:1em;font-weight:400;line-height:2;margin:1em 1em 0;min-width:20%;padding:0 2em;text-decoration:none;text-transform:uppercase;transition:background-color .5s ease}#loader-popup a:hover,#loader-popup button:hover{background-color:hsla(0,0%,100%,.4);color:#fff}#loader-popup body.ka a,#loader-popup body.ka button{text-transform:none}.rootContainer--512ac{display:block;height:100%;left:0;overflow:auto;position:absolute;top:0;width:100%}body.ios.native .rootContainer--512ac{height:100vh;width:100vw}#verbose-log{word-wrap:break-word;color:#fff;font-family:monospace;font-size:10px;height:50vh;left:0;line-height:1;max-width:100%;overflow:hidden;pointer-events:none;position:fixed;text-shadow:1px 1px 2px #000;top:0;white-space:pre-wrap;width:100vw;z-index:1000002}
    </style>
    <style>
    .messageInputContainer--f9de5 {
        display: none !important;
    }
    </style>
</head>

<body class="loading notranslate">
    <div id="verbose-log" data-sandbox="ignore"></div>
    <div id="loader-popup"></div>
    <div class="loadingScreen--87788" data-sandbox="ignore">
        <div class="gradientContent--e45a4"></div>
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
            var $ = {};

            function e() {
                return "undefined" != typeof window ? window : "undefined" != typeof self ? self : $
            }

            function l(X, $, l) {
                var q = l || e(),
                    c = q.__SENTRY__ = q.__SENTRY__ || {};
                return c[X] || (c[X] = $())
            }
            var q = Object.prototype.toString;

            function c(X) {
                switch (q.call(X)) {
                    case "[object Error]":
                    case "[object Exception]":
                    case "[object DOMException]":
                        return !0;
                    default:
                        return C(X, Error)
                }
            }

            function T(X, $) {
                return q.call(X) === `[object ${$}]`
            }

            function F(X) {
                return T(X, "ErrorEvent")
            }

            function V(X) {
                return T(X, "DOMError")
            }

            function o(X) {
                return T(X, "String")
            }

            function x(X) {
                return null === X || "object" != typeof X && "function" != typeof X
            }

            function W(X) {
                return T(X, "Object")
            }

            function g(X) {
                return "undefined" != typeof Event && C(X, Event)
            }

            function f(X) {
                return Boolean(X && X.then && "function" == typeof X.then)
            }

            function C(X, $) {
                try {
                    return X instanceof $
                } catch (X) {
                    return !1
                }
            }

            function Q(X, $) {
                try {
                    let q = X;
                    var e = [];
                    let c = 0,
                        T = 0;
                    var l = " > ".length;
                    let F;
                    for (; q && c++ < 5 && (F = B(q, $), !("html" === F || c > 1 && T + e.length * l + F.length >= 80));) e.push(F), T += F.length, q = q.parentNode;
                    return e.reverse().join(" > ")
                } catch (X) {
                    return "<unknown>"
                }
            }

            function B(X, $) {
                var e = X,
                    l = [];
                let q, c, T, F, V;
                if (!e || !e.tagName) return "";
                l.push(e.tagName.toLowerCase());
                var x = $ && $.length ? $.filter((X => e.getAttribute(X))).map((X => [X, e.getAttribute(X)])) : null;
                if (x && x.length) x.forEach((X => {
                    l.push(`[${X[0]}="${X[1]}"]`)
                }));
                else if (e.id && l.push(`#${e.id}`), q = e.className, q && o(q))
                    for (c = q.split(/\s+/), V = 0; V < c.length; V++) l.push(`.${c[V]}`);
                var W = ["type", "name", "title", "alt"];
                for (V = 0; V < W.length; V++) T = W[V], F = e.getAttribute(T), F && l.push(`[${T}="${F}"]`);
                return l.join("")
            }
            class J extends Error {
                constructor(X) {
                    super(X), this.message = X, this.name = new.target.prototype.constructor.name, Object.setPrototypeOf(this, new.target.prototype)
                }
            }
            var h = /^(?:(\w+):)\/\/(?:(\w+)(?::(\w+))?@)([\w.-]+)(?::(\d+))?\/(.+)/;

            function G(X, $ = !1) {
                const {
                    host: e,
                    path: l,
                    pass: q,
                    port: c,
                    projectId: T,
                    protocol: F,
                    publicKey: V
                } = X;
                return `${F}://${V}${$&&q?`:${q}`:""}@${e}${c?`:${c}`:""}/${l?`${l}/`:l}${T}`
            }

            function M(X) {
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

            function n(X) {
                return "string" == typeof X ? function(X) {
                    var $ = h.exec(X);
                    if (!$) throw new J(`Invalid Sentry Dsn: ${X}`);
                    const [e, l, q = "", c, T = "", F] = $.slice(1);
                    let V = "",
                        o = F;
                    var x = o.split("/");
                    if (x.length > 1 && (V = x.slice(0, -1).join("/"), o = x.pop()), o) {
                        var W = o.match(/^\d+/);
                        W && (o = W[0])
                    }
                    return M({
                        host: c,
                        pass: q,
                        path: V,
                        projectId: o,
                        port: T,
                        protocol: e,
                        publicKey: l
                    })
                }(X) : M(X)
            }
            var I, L = ["debug", "info", "warn", "error", "log", "assert", "trace"];

            function D(X, $ = 0) {
                return "string" != typeof X || 0 === $ || X.length <= $ ? X : `${X.substr(0,$)}...`
            }

            function k(X, $) {
                if (!Array.isArray(X)) return "";
                var e = [];
                for (let $ = 0; $ < X.length; $++) {
                    var l = X[$];
                    try {
                        e.push(String(l))
                    } catch (X) {
                        e.push("[value cannot be serialized]")
                    }
                }
                return e.join($)
            }

            function P(X, $) {
                return !!o(X) && (T($, "RegExp") ? $.test(X) : "string" == typeof $ && -1 !== X.indexOf($))
            }

            function O(X, $, e) {
                if ($ in X) {
                    var l = X[$],
                        q = e(l);
                    if ("function" == typeof q) try {
                        t(q, l)
                    } catch (X) {}
                    X[$] = q
                }
            }

            function m(X, $, e) {
                Object.defineProperty(X, $, {
                    value: e,
                    writable: !0,
                    configurable: !0
                })
            }

            function t(X, $) {
                var e = $.prototype || {};
                X.prototype = $.prototype = e, m(X, "__sentry_original__", $)
            }

            function Y(X) {
                return X.__sentry_original__
            }

            function E(X) {
                if (c(X)) return {
                    message: X.message,
                    name: X.name,
                    stack: X.stack,
                    ...Z(X)
                };
                if (g(X)) {
                    var $ = {
                        type: X.type,
                        target: z(X.target),
                        currentTarget: z(X.currentTarget),
                        ...Z(X)
                    };
                    return "undefined" != typeof CustomEvent && C(X, CustomEvent) && ($.detail = X.detail), $
                }
                return X
            }

            function z(X) {
                try {
                    return "undefined" != typeof Element && C(X, Element) ? Q(X) : Object.prototype.toString.call(X)
                } catch (X) {
                    return "<unknown>"
                }
            }

            function Z(X) {
                if ("object" == typeof X && null !== X) {
                    var $ = {};
                    for (var e in X) Object.prototype.hasOwnProperty.call(X, e) && ($[e] = X[e]);
                    return $
                }
                return {}
            }

            function i(X, $ = 40) {
                var e = Object.keys(E(X));
                if (e.sort(), !e.length) return "[object has no keys]";
                if (e[0].length >= $) return D(e[0], $);
                for (let X = e.length; X > 0; X--) {
                    var l = e.slice(0, X).join(", ");
                    if (!(l.length > $)) return X === e.length ? l : D(l, $)
                }
                return ""
            }

            function y(X) {
                return d(X, new Map)
            }

            function d(X, $) {
                if (W(X)) {
                    if (void 0 !== (q = $.get(X))) return q;
                    var e = {};
                    for (var l of ($.set(X, e), Object.keys(X))) void 0 !== X[l] && (e[l] = d(X[l], $));
                    return e
                }
                var q;
                return Array.isArray(X) ? void 0 !== (q = $.get(X)) ? q : (e = [], $.set(X, e), X.forEach((X => {
                    e.push(d(X, $))
                })), e) : X
            }

            function u(...X) {
                var $ = X.sort(((X, $) => X[0] - $[0])).map((X => X[1]));
                return (X, e = 0) => {
                    var l = [];
                    for (var q of X.split("\n").slice(e))
                        for (var c of $) {
                            var T = c(q);
                            if (T) {
                                l.push(T);
                                break
                            }
                        }
                    return function(X) {
                        if (!X.length) return [];
                        let $ = X;
                        var e = $[0].function || "",
                            l = $[$.length - 1].function || "";
                        return -1 === e.indexOf("captureMessage") && -1 === e.indexOf("captureException") || ($ = $.slice(1)), -1 !== l.indexOf("sentryWrapped") && ($ = $.slice(0, -1)), $.slice(0, 50).map((X => ({ ...X,
                            filename: X.filename || $[0].filename,
                            function: X.function || "?"
                        }))).reverse()
                    }(l)
                }
            }
            I = {
                enable: () => {},
                disable: () => {}
            }, L.forEach((X => {
                I[X] = () => {}
            }));
            var K = "<anonymous>";

            function j(X) {
                try {
                    return X && "function" == typeof X && X.name || K
                } catch (X) {
                    return K
                }
            }

            function A() {
                if (!("fetch" in e())) return !1;
                try {
                    return new Headers, new Request(""), new Response, !0
                } catch (X) {
                    return !1
                }
            }

            function p(X) {
                return X && /^function fetch\(\)\s+\{\s+\[native code\]\s+\}$/.test(X.toString())
            }
            var H = e(),
                S = {},
                _ = {};

            function b(X, $) {
                S[X] = S[X] || [], S[X].push($),
                    function(X) {
                        if (!_[X]) switch (_[X] = !0, X) {
                            case "console":
                                "console" in H && L.forEach((function(X) {
                                    X in H.console && O(H.console, X, (function($) {
                                        return function(...e) {
                                            a("console", {
                                                args: e,
                                                level: X
                                            }), $ && $.apply(H.console, e)
                                        }
                                    }))
                                }));
                                break;
                            case "dom":
                                ! function() {
                                    if ("document" in H) {
                                        var X = a.bind(null, "dom"),
                                            $ = s(X, !0);
                                        H.document.addEventListener("click", $, !1), H.document.addEventListener("keypress", $, !1), ["EventTarget", "Node"].forEach(($ => {
                                            var e = H[$] && H[$].prototype;
                                            e && e.hasOwnProperty && e.hasOwnProperty("addEventListener") && (O(e, "addEventListener", (function($) {
                                                return function(e, l, q) {
                                                    if ("click" === e || "keypress" == e) try {
                                                        var c = this.__sentry_instrumentation_handlers__ = this.__sentry_instrumentation_handlers__ || {},
                                                            T = c[e] = c[e] || {
                                                                refCount: 0
                                                            };
                                                        if (!T.handler) {
                                                            var F = s(X);
                                                            T.handler = F, $.call(this, e, F, q)
                                                        }
                                                        T.refCount += 1
                                                    } catch (X) {}
                                                    return $.call(this, e, l, q)
                                                }
                                            })), O(e, "removeEventListener", (function(X) {
                                                return function($, e, l) {
                                                    if ("click" === $ || "keypress" == $) try {
                                                        var q = this.__sentry_instrumentation_handlers__ || {},
                                                            c = q[$];
                                                        c && (c.refCount -= 1, c.refCount <= 0 && (X.call(this, $, c.handler, l), c.handler = void 0, delete q[$]), 0 === Object.keys(q).length && delete this.__sentry_instrumentation_handlers__)
                                                    } catch (X) {}
                                                    return X.call(this, $, e, l)
                                                }
                                            })))
                                        }))
                                    }
                                }();
                                break;
                            case "xhr":
                                ! function() {
                                    if ("XMLHttpRequest" in H) {
                                        var X = XMLHttpRequest.prototype;
                                        O(X, "open", (function(X) {
                                            return function(...$) {
                                                var e = this,
                                                    l = $[1],
                                                    q = e.__sentry_xhr__ = {
                                                        method: o($[0]) ? $[0].toUpperCase() : $[0],
                                                        url: $[1]
                                                    };
                                                o(l) && "POST" === q.method && l.match(/sentry_key/) && (e.__sentry_own_request__ = !0);
                                                var c = function() {
                                                    if (4 === e.readyState) {
                                                        try {
                                                            q.status_code = e.status
                                                        } catch (X) {}
                                                        a("xhr", {
                                                            args: $,
                                                            endTimestamp: Date.now(),
                                                            startTimestamp: Date.now(),
                                                            xhr: e
                                                        })
                                                    }
                                                };
                                                return "onreadystatechange" in e && "function" == typeof e.onreadystatechange ? O(e, "onreadystatechange", (function(X) {
                                                    return function(...$) {
                                                        return c(), X.apply(e, $)
                                                    }
                                                })) : e.addEventListener("readystatechange", c), X.apply(e, $)
                                            }
                                        })), O(X, "send", (function(X) {
                                            return function(...$) {
                                                return this.__sentry_xhr__ && void 0 !== $[0] && (this.__sentry_xhr__.body = $[0]), a("xhr", {
                                                    args: $,
                                                    startTimestamp: Date.now(),
                                                    xhr: this
                                                }), X.apply(this, $)
                                            }
                                        }))
                                    }
                                }();
                                break;
                            case "fetch":
                                (function() {
                                    if (!A()) return !1;
                                    var X = e();
                                    if (p(X.fetch)) return !0;
                                    let $ = !1;
                                    var l = X.document;
                                    if (l && "function" == typeof l.createElement) try {
                                        var q = l.createElement("iframe");
                                        q.hidden = !0, l.head.appendChild(q), q.contentWindow && q.contentWindow.fetch && ($ = p(q.contentWindow.fetch)), l.head.removeChild(q)
                                    } catch (X) {}
                                    return $
                                })() && O(H, "fetch", (function(X) {
                                    return function(...$) {
                                        var e = {
                                            args: $,
                                            fetchData: {
                                                method: v($),
                                                url: w($)
                                            },
                                            startTimestamp: Date.now()
                                        };
                                        return a("fetch", { ...e
                                        }), X.apply(H, $).then((X => (a("fetch", { ...e,
                                            endTimestamp: Date.now(),
                                            response: X
                                        }), X)), (X => {
                                            throw a("fetch", { ...e,
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
                                            var X = e(),
                                                $ = X.chrome,
                                                l = $ && $.app && $.app.runtime,
                                                q = "history" in X && !!X.history.pushState && !!X.history.replaceState;
                                            return !l && q
                                        }()) {
                                        var X = H.onpopstate;
                                        H.onpopstate = function(...$) {
                                            var e = H.location.href,
                                                l = r;
                                            if (r = e, a("history", {
                                                    from: l,
                                                    to: e
                                                }), X) try {
                                                return X.apply(this, $)
                                            } catch (X) {}
                                        }, O(H.history, "pushState", $), O(H.history, "replaceState", $)
                                    }

                                    function $(X) {
                                        return function(...$) {
                                            var e = $.length > 2 ? $[2] : void 0;
                                            if (e) {
                                                var l = r,
                                                    q = String(e);
                                                r = q, a("history", {
                                                    from: l,
                                                    to: q
                                                })
                                            }
                                            return X.apply(this, $)
                                        }
                                    }
                                }();
                                break;
                            case "error":
                                R = H.onerror, H.onerror = function(X, $, e, l, q) {
                                    return a("error", {
                                        column: l,
                                        error: q,
                                        line: e,
                                        msg: X,
                                        url: $
                                    }), !!R && R.apply(this, arguments)
                                };
                                break;
                            case "unhandledrejection":
                                XX = H.onunhandledrejection, H.onunhandledrejection = function(X) {
                                    return a("unhandledrejection", X), !XX || XX.apply(this, arguments)
                                }
                        }
                    }(X)
            }

            function a(X, $) {
                if (X && S[X])
                    for (var e of S[X] || []) try {
                        e($)
                    } catch (X) {}
            }

            function v(X = []) {
                return "Request" in H && C(X[0], Request) && X[0].method ? String(X[0].method).toUpperCase() : X[1] && X[1].method ? String(X[1].method).toUpperCase() : "GET"
            }

            function w(X = []) {
                return "string" == typeof X[0] ? X[0] : "Request" in H && C(X[0], Request) ? X[0].url : String(X[0])
            }
            let r, U, N;

            function s(X, $ = !1) {
                return e => {
                    if (e && N !== e && ! function(X) {
                            if ("keypress" !== X.type) return !1;
                            try {
                                var $ = X.target;
                                if (!$ || !$.tagName) return !0;
                                if ("INPUT" === $.tagName || "TEXTAREA" === $.tagName || $.isContentEditable) return !1
                            } catch (X) {}
                            return !0
                        }(e)) {
                        var l = "keypress" === e.type ? "input" : e.type;
                        (void 0 === U || function(X, $) {
                            if (!X) return !0;
                            if (X.type !== $.type) return !0;
                            try {
                                if (X.target !== $.target) return !0
                            } catch (X) {}
                            return !1
                        }(N, e)) && (X({
                            event: e,
                            name: l,
                            global: $
                        }), N = e), clearTimeout(U), U = H.setTimeout((() => {
                            U = void 0
                        }), 1e3)
                    }
                }
            }
            let R = null,
                XX = null;

            function $X() {
                var X = e(),
                    $ = X.crypto || X.msCrypto;
                if (void 0 !== $ && $.getRandomValues) {
                    var l = new Uint16Array(8);
                    $.getRandomValues(l), l[3] = 4095 & l[3] | 16384, l[4] = 16383 & l[4] | 32768;
                    var q = X => {
                        let $ = X.toString(16);
                        for (; $.length < 4;) $ = `0${$}`;
                        return $
                    };
                    return q(l[0]) + q(l[1]) + q(l[2]) + q(l[3]) + q(l[4]) + q(l[5]) + q(l[6]) + q(l[7])
                }
                return "xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx".replace(/[xy]/g, (X => {
                    var $ = 16 * Math.random() | 0;
                    return ("x" === X ? $ : 3 & $ | 8).toString(16)
                }))
            }

            function eX(X) {
                if (!X) return {};
                var $ = X.match(/^(([^:/?#]+):)?(\/\/([^/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/);
                if (!$) return {};
                var e = $[6] || "",
                    l = $[8] || "";
                return {
                    host: $[4],
                    path: $[5],
                    protocol: $[2],
                    relative: $[5] + e + l
                }
            }

            function lX(X) {
                return X.exception && X.exception.values ? X.exception.values[0] : void 0
            }

            function qX(X) {
                const {
                    message: $,
                    event_id: e
                } = X;
                if ($) return $;
                var l = lX(X);
                return l ? l.type && l.value ? `${l.type}: ${l.value}` : l.type || l.value || e || "<unknown>" : e || "<unknown>"
            }

            function cX(X, $, e) {
                var l = X.exception = X.exception || {},
                    q = l.values = l.values || [],
                    c = q[0] = q[0] || {};
                c.value || (c.value = $ || ""), c.type || (c.type = e || "Error")
            }

            function TX(X, $) {
                var e = lX(X);
                if (e) {
                    var l = e.mechanism;
                    if (e.mechanism = {
                            type: "generic",
                            handled: !0,
                            ...l,
                            ...$
                        }, $ && "data" in $) {
                        var q = { ...l && l.data,
                            ...$.data
                        };
                        e.mechanism.data = q
                    }
                }
            }

            function FX(X) {
                if (X && X.__sentry_captured__) return !0;
                try {
                    m(X, "__sentry_captured__", !0)
                } catch (X) {}
                return !1
            }

            function VX(X, $ = 1 / 0, e = 1 / 0) {
                try {
                    return xX("", X, $, e)
                } catch (X) {
                    return {
                        ERROR: `**non-serializable** (${X})`
                    }
                }
            }

            function oX(X, $ = 3, e = 102400) {
                var l, q = VX(X, $);
                return l = q,
                    function(X) {
                        return ~-encodeURI(X).split(/%..|./).length
                    }(JSON.stringify(l)) > e ? oX(X, $ - 1, e) : q
            }

            function xX(X, $, e = 1 / 0, l = 1 / 0, q = function() {
                var X = "function" == typeof WeakSet,
                    $ = X ? new WeakSet : [];
                return [function(e) {
                    if (X) return !!$.has(e) || ($.add(e), !1);
                    for (let X = 0; X < $.length; X++)
                        if ($[X] === e) return !0;
                    return $.push(e), !1
                }, function(e) {
                    if (X) $.delete(e);
                    else
                        for (let X = 0; X < $.length; X++)
                            if ($[X] === e) {
                                $.splice(X, 1);
                                break
                            }
                }]
            }()) {
                const [c, T] = q;
                if (null === $ || ["number", "boolean", "string"].includes(typeof $) && ("number" != typeof(F = $) || F == F)) return $;
                var F, V = function(X, $) {
                    try {
                        return "domain" === X && $ && "object" == typeof $ && $.t ? "[Domain]" : "domainEmitter" === X ? "[DomainEmitter]" : "undefined" != typeof global && $ === global ? "[Global]" : "undefined" != typeof window && $ === window ? "[Window]" : "undefined" != typeof document && $ === document ? "[Document]" : function(X) {
                            return W(X) && "nativeEvent" in X && "preventDefault" in X && "stopPropagation" in X
                        }($) ? "[SyntheticEvent]" : "number" == typeof $ && $ != $ ? "[NaN]" : void 0 === $ ? "[undefined]" : "function" == typeof $ ? `[Function: ${j($)}]` : "symbol" == typeof $ ? `[${String($)}]` : "bigint" == typeof $ ? `[BigInt: ${String($)}]` : `[object ${Object.getPrototypeOf($).constructor.name}]`
                    } catch (X) {
                        return `**non-serializable** (${X})`
                    }
                }(X, $);
                if (!V.startsWith("[object ")) return V;
                if ($.__sentry_skip_normalization__) return $;
                if (0 === e) return V.replace("object ", "");
                if (c($)) return "[Circular ~]";
                var o = $;
                if (o && "function" == typeof o.toJSON) try {
                    return xX("", o.toJSON(), e - 1, l, q)
                } catch (X) {}
                var x = Array.isArray($) ? [] : {};
                let g = 0;
                var f = E($);
                for (var C in f)
                    if (Object.prototype.hasOwnProperty.call(f, C)) {
                        if (g >= l) {
                            x[C] = "[MaxProperties ~]";
                            break
                        }
                        var Q = f[C];
                        x[C] = xX(C, Q, e - 1, l, q), g += 1
                    }
                return T($), x
            }
            var WX;

            function gX(X) {
                return new CX(($ => {
                    $(X)
                }))
            }

            function fX(X) {
                return new CX((($, e) => {
                    e(X)
                }))
            }! function(X) {
                X[X.PENDING = 0] = "PENDING", X[X.RESOLVED = 1] = "RESOLVED", X[X.REJECTED = 2] = "REJECTED"
            }(WX || (WX = {}));
            class CX {
                __init() {
                    this.i = WX.PENDING
                }
                __init2() {
                    this.o = []
                }
                constructor(X) {
                    CX.prototype.__init.call(this), CX.prototype.__init2.call(this), CX.prototype.__init3.call(this), CX.prototype.__init4.call(this), CX.prototype.__init5.call(this), CX.prototype.__init6.call(this);
                    try {
                        X(this.u, this.h)
                    } catch (X) {
                        this.h(X)
                    }
                }
                then(X, $) {
                    return new CX(((e, l) => {
                        this.o.push([!1, $ => {
                            if (X) try {
                                e(X($))
                            } catch (X) {
                                l(X)
                            } else e($)
                        }, X => {
                            if ($) try {
                                e($(X))
                            } catch (X) {
                                l(X)
                            } else l(X)
                        }]), this.l()
                    }))
                } catch (X) {
                    return this.then((X => X), X)
                } finally(X) {
                    return new CX((($, e) => {
                        let l, q;
                        return this.then(($ => {
                            q = !1, l = $, X && X()
                        }), ($ => {
                            q = !0, l = $, X && X()
                        })).then((() => {
                            q ? e(l) : $(l)
                        }))
                    }))
                }
                __init3() {
                    this.u = X => {
                        this.v(WX.RESOLVED, X)
                    }
                }
                __init4() {
                    this.h = X => {
                        this.v(WX.REJECTED, X)
                    }
                }
                __init5() {
                    this.v = (X, $) => {
                        this.i === WX.PENDING && (f($) ? $.then(this.u, this.h) : (this.i = X, this.p = $, this.l()))
                    }
                }
                __init6() {
                    this.l = () => {
                        if (this.i !== WX.PENDING) {
                            var X = this.o.slice();
                            this.o = [], X.forEach((X => {
                                X[0] || (this.i === WX.RESOLVED && X[1](this.p), this.i === WX.REJECTED && X[2](this.p), X[0] = !0)
                            }))
                        }
                    }
                }
            }
            var QX = ["fatal", "error", "warning", "log", "info", "debug"],
                BX = {
                    nowSeconds: () => Date.now() / 1e3
                },
                JX = function() {
                    const {
                        performance: X
                    } = e();
                    if (X && X.now) return {
                        now: () => X.now(),
                        timeOrigin: Date.now() - X.now()
                    }
                }(),
                hX = void 0 === JX ? BX : {
                    nowSeconds: () => (JX.timeOrigin + JX.now()) / 1e3
                },
                GX = BX.nowSeconds.bind(BX),
                MX = hX.nowSeconds.bind(hX);

            function nX(X, $ = []) {
                return [X, $]
            }

            function IX(X, $) {
                const [e, l] = X;
                return [e, [...l, $]]
            }

            function LX(X, $) {
                X[1].forEach((X => {
                    var e = X[0].type;
                    $(X, e)
                }))
            }

            function DX(X, $) {
                return ($ || new TextEncoder).encode(X)
            }

            function kX(X, $) {
                const [e, l] = X;
                let q = JSON.stringify(e);

                function c(X) {
                    "string" == typeof q ? q = "string" == typeof X ? q + X : [DX(q, $), X] : q.push("string" == typeof X ? DX(X, $) : X)
                }
                for (var T of l) {
                    const [X, $] = T;
                    c(`\n${JSON.stringify(X)}\n`), c("string" == typeof $ || $ instanceof Uint8Array ? $ : JSON.stringify($))
                }
                return "string" == typeof q ? q : function(X) {
                    var $ = X.reduce(((X, $) => X + $.length), 0),
                        e = new Uint8Array($);
                    let l = 0;
                    for (var q of X) e.set(q, l), l += q.length;
                    return e
                }(q)
            }

            function PX(X, $) {
                var e = "string" == typeof X.data ? DX(X.data, $) : X.data;
                return [y({
                    type: "attachment",
                    length: e.length,
                    filename: X.filename,
                    content_type: X.contentType,
                    attachment_type: X.attachmentType
                }), e]
            }(() => {
                const {
                    performance: X
                } = e();
                if (X && X.now) {
                    var $ = 36e5,
                        l = X.now(),
                        q = Date.now(),
                        c = X.timeOrigin ? Math.abs(X.timeOrigin + l - q) : $,
                        T = c < $,
                        F = X.timing && X.timing.navigationStart,
                        V = "number" == typeof F ? Math.abs(F + l - q) : $;
                    (T || V < $) && c <= V && X.timeOrigin
                }
            })();
            var OX = {
                session: "session",
                sessions: "session",
                attachment: "attachment",
                transaction: "transaction",
                event: "error",
                client_report: "internal",
                user_report: "default"
            };

            function mX(X) {
                return OX[X]
            }

            function tX(X, $ = {}) {
                if ($.user && (!X.ipAddress && $.user.ip_address && (X.ipAddress = $.user.ip_address), X.did || $.did || (X.did = $.user.id || $.user.email || $.user.username)), X.timestamp = $.timestamp || MX(), $.ignoreDuration && (X.ignoreDuration = $.ignoreDuration), $.sid && (X.sid = 32 === $.sid.length ? $.sid : $X()), void 0 !== $.init && (X.init = $.init), !X.did && $.did && (X.did = `${$.did}`), "number" == typeof $.started && (X.started = $.started), X.ignoreDuration) X.duration = void 0;
                else if ("number" == typeof $.duration) X.duration = $.duration;
                else {
                    var e = X.timestamp - X.started;
                    X.duration = e >= 0 ? e : 0
                }
                $.release && (X.release = $.release), $.environment && (X.environment = $.environment), !X.ipAddress && $.ipAddress && (X.ipAddress = $.ipAddress), !X.userAgent && $.userAgent && (X.userAgent = $.userAgent), "number" == typeof $.errors && (X.errors = $.errors), $.status && (X.status = $.status)
            }
            class YX {
                constructor() {
                    this.m = !1, this.g = [], this._ = [], this.S = [], this.k = [], this.O = {}, this.j = {}, this.T = {}, this.D = {}, this.R = {}
                }
                static clone(X) {
                    var $ = new YX;
                    return X && ($.S = [...X.S], $.j = { ...X.j
                    }, $.T = { ...X.T
                    }, $.D = { ...X.D
                    }, $.O = X.O, $.I = X.I, $.M = X.M, $.C = X.C, $.N = X.N, $.A = X.A, $._ = [...X._], $.L = X.L, $.k = [...X.k]), $
                }
                addScopeListener(X) {
                    this.g.push(X)
                }
                addEventProcessor(X) {
                    return this._.push(X), this
                }
                setUser(X) {
                    return this.O = X || {}, this.C && tX(this.C, {
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
                setTag(X, $) {
                    return this.j = { ...this.j,
                        [X]: $
                    }, this.U(), this
                }
                setExtras(X) {
                    return this.T = { ...this.T,
                        ...X
                    }, this.U(), this
                }
                setExtra(X, $) {
                    return this.T = { ...this.T,
                        [X]: $
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
                setContext(X, $) {
                    return null === $ ? delete this.D[X] : this.D = { ...this.D,
                        [X]: $
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
                        var $ = X(this);
                        return $ instanceof YX ? $ : this
                    }
                    return X instanceof YX ? (this.j = { ...this.j,
                        ...X.j
                    }, this.T = { ...this.T,
                        ...X.T
                    }, this.D = { ...this.D,
                        ...X.D
                    }, X.O && Object.keys(X.O).length && (this.O = X.O), X.I && (this.I = X.I), X.A && (this.A = X.A), X.L && (this.L = X.L)) : W(X) && (this.j = { ...this.j,
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
                addBreadcrumb(X, $) {
                    var e = "number" == typeof $ ? Math.min($, 100) : 100;
                    if (e <= 0) return this;
                    var l = {
                        timestamp: GX(),
                        ...X
                    };
                    return this.S = [...this.S, l].slice(-e), this.U(), this
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
                applyToEvent(X, $ = {}) {
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
                        var e = this.M.transaction && this.M.transaction.name;
                        e && (X.tags = {
                            transaction: e,
                            ...X.tags
                        })
                    }
                    return this.q(X), X.breadcrumbs = [...X.breadcrumbs || [], ...this.S], X.breadcrumbs = X.breadcrumbs.length > 0 ? X.breadcrumbs : void 0, X.sdkProcessingMetadata = { ...X.sdkProcessingMetadata,
                        ...this.R
                    }, this.P([...EX(), ...this._], X, $)
                }
                setSDKProcessingMetadata(X) {
                    return this.R = { ...this.R,
                        ...X
                    }, this
                }
                P(X, $, e, l = 0) {
                    return new CX(((q, c) => {
                        var T = X[l];
                        if (null === $ || "function" != typeof T) q($);
                        else {
                            var F = T({ ...$
                            }, e);
                            f(F) ? F.then(($ => this.P(X, $, e, l + 1).then(q))).then(null, c) : this.P(X, F, e, l + 1).then(q).then(null, c)
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

            function EX() {
                return l("globalEventProcessors", (() => []))
            }

            function zX(X) {
                EX().push(X)
            }
            var ZX = 100;
            class iX {
                __init() {
                    this.H = [{}]
                }
                constructor(X, $ = new YX, e = 4) {
                    this.F = e, iX.prototype.__init.call(this), this.getStackTop().scope = $, X && this.bindClient(X)
                }
                isOlderThan(X) {
                    return this.F < X
                }
                bindClient(X) {
                    this.getStackTop().client = X, X && X.setupIntegrations && X.setupIntegrations()
                }
                pushScope() {
                    var X = YX.clone(this.getScope());
                    return this.getStack().push({
                        client: this.getClient(),
                        scope: X
                    }), X
                }
                popScope() {
                    return !(this.getStack().length <= 1 || !this.getStack().pop())
                }
                withScope(X) {
                    var $ = this.pushScope();
                    try {
                        X($)
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
                captureException(X, $) {
                    var e = this.B = $ && $.event_id ? $.event_id : $X(),
                        l = new Error("Sentry syntheticException");
                    return this.X(((q, c) => {
                        q.captureException(X, {
                            originalException: X,
                            syntheticException: l,
                            ...$,
                            event_id: e
                        }, c)
                    })), e
                }
                captureMessage(X, $, e) {
                    var l = this.B = e && e.event_id ? e.event_id : $X(),
                        q = new Error(X);
                    return this.X(((c, T) => {
                        c.captureMessage(X, $, {
                            originalException: X,
                            syntheticException: q,
                            ...e,
                            event_id: l
                        }, T)
                    })), l
                }
                captureEvent(X, $) {
                    var e = $ && $.event_id ? $.event_id : $X();
                    return "transaction" !== X.type && (this.B = e), this.X(((l, q) => {
                        l.captureEvent(X, { ...$,
                            event_id: e
                        }, q)
                    })), e
                }
                lastEventId() {
                    return this.B
                }
                addBreadcrumb(X, $) {
                    const {
                        scope: l,
                        client: q
                    } = this.getStackTop();
                    if (!l || !q) return;
                    const {
                        beforeBreadcrumb: c = null,
                        maxBreadcrumbs: T = ZX
                    } = q.getOptions && q.getOptions() || {};
                    if (!(T <= 0)) {
                        var F = {
                                timestamp: GX(),
                                ...X
                            },
                            V = c ? function(X) {
                                var $ = e();
                                if (!("console" in $)) return X();
                                var l = $.console,
                                    q = {};
                                L.forEach((X => {
                                    var e = l[X] && l[X].__sentry_original__;
                                    X in $.console && e && (q[X] = l[X], l[X] = e)
                                }));
                                try {
                                    return X()
                                } finally {
                                    Object.keys(q).forEach((X => {
                                        l[X] = q[X]
                                    }))
                                }
                            }((() => c(F, $))) : F;
                        null !== V && l.addBreadcrumb(V, T)
                    }
                }
                setUser(X) {
                    var $ = this.getScope();
                    $ && $.setUser(X)
                }
                setTags(X) {
                    var $ = this.getScope();
                    $ && $.setTags(X)
                }
                setExtras(X) {
                    var $ = this.getScope();
                    $ && $.setExtras(X)
                }
                setTag(X, $) {
                    var e = this.getScope();
                    e && e.setTag(X, $)
                }
                setExtra(X, $) {
                    var e = this.getScope();
                    e && e.setExtra(X, $)
                }
                setContext(X, $) {
                    var e = this.getScope();
                    e && e.setContext(X, $)
                }
                configureScope(X) {
                    const {
                        scope: $,
                        client: e
                    } = this.getStackTop();
                    $ && e && X($)
                }
                run(X) {
                    var $ = dX(this);
                    try {
                        X(this)
                    } finally {
                        dX($)
                    }
                }
                getIntegration(X) {
                    var $ = this.getClient();
                    if (!$) return null;
                    try {
                        return $.getIntegration(X)
                    } catch (X) {
                        return null
                    }
                }
                startTransaction(X, $) {
                    return this.W("startTransaction", X, $)
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
                        $ = X && X.scope,
                        e = $ && $.getSession();
                    e && function(X, $) {
                        let e = {};
                        $ ? e = {
                            status: $
                        } : "ok" === X.status && (e = {
                            status: "exited"
                        }), tX(X, e)
                    }(e), this.J(), $ && $.setSession()
                }
                startSession(X) {
                    const {
                        scope: $,
                        client: l
                    } = this.getStackTop(), {
                        release: q,
                        environment: c
                    } = l && l.getOptions() || {};
                    var T = e();
                    const {
                        userAgent: F
                    } = T.navigator || {};
                    var V = function(X) {
                        var $ = MX(),
                            e = {
                                sid: $X(),
                                init: !0,
                                timestamp: $,
                                started: $,
                                duration: 0,
                                status: "ok",
                                errors: 0,
                                ignoreDuration: !1,
                                toJSON: () => function(X) {
                                    return y({
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
                                }(e)
                            };
                        return X && tX(e, X), e
                    }({
                        release: q,
                        environment: c,
                        ...$ && {
                            user: $.getUser()
                        },
                        ...F && {
                            userAgent: F
                        },
                        ...X
                    });
                    if ($) {
                        var o = $.getSession && $.getSession();
                        o && "ok" === o.status && tX(o, {
                            status: "exited"
                        }), this.endSession(), $.setSession(V)
                    }
                    return V
                }
                shouldSendDefaultPii() {
                    var X = this.getClient(),
                        $ = X && X.getOptions();
                    return Boolean($ && $.sendDefaultPii)
                }
                J() {
                    const {
                        scope: X,
                        client: $
                    } = this.getStackTop();
                    if (X) {
                        var e = X.getSession();
                        e && $ && $.captureSession && $.captureSession(e)
                    }
                }
                X(X) {
                    const {
                        scope: $,
                        client: e
                    } = this.getStackTop();
                    e && X(e, $)
                }
                W(X, ...$) {
                    var e = yX().__SENTRY__;
                    if (e && e.extensions && "function" == typeof e.extensions[X]) return e.extensions[X].apply(this, $)
                }
            }

            function yX() {
                var X = e();
                return X.__SENTRY__ = X.__SENTRY__ || {
                    extensions: {},
                    hub: void 0
                }, X
            }

            function dX(X) {
                var $ = yX(),
                    e = KX($);
                return jX($, X), e
            }

            function uX() {
                var X, $ = yX();
                return (X = $) && X.__SENTRY__ && X.__SENTRY__.hub && !KX($).isOlderThan(4) || jX($, new iX), KX($)
            }

            function KX(X) {
                return l("hub", (() => new iX), X)
            }

            function jX(X, $) {
                return !!X && ((X.__SENTRY__ = X.__SENTRY__ || {}).hub = $, !0)
            }

            function AX(X, $) {
                return uX().captureException(X, {
                    captureContext: $
                })
            }

            function pX(X) {
                uX().withScope(X)
            }

            function HX(X) {
                var $ = X.protocol ? `${X.protocol}:` : "",
                    e = X.port ? `:${X.port}` : "";
                return `${$}//${X.host}${e}${X.path?`/${X.path}`:""}/api/`
            }

            function SX(X, $ = {}) {
                var e = "string" == typeof $ ? $ : $.tunnel,
                    l = "string" != typeof $ && $.K ? $.K.sdk : void 0;
                return e || `${function(X){return`${HX(X)}${X.projectId}/envelope/`}(X)}?${function(X,$){return e={sentry_key:X.publicKey,sentry_version:"7",...$&&{sentry_client:`${$.name}/${$.version}`}},Object.keys(e).map((X=>`
                $ {
                    encodeURIComponent(X)
                } = $ {
                    encodeURIComponent(e[X])
                }
                `)).join("&");var e}(X,l)}`
            }

            function _X(X) {
                if (!X || !X.sdk) return;
                const {
                    name: $,
                    version: e
                } = X.sdk;
                return {
                    name: $,
                    version: e
                }
            }
            var bX = [];

            function aX(X) {
                return X.reduce(((X, $) => (X.every((X => $.name !== X.name)) && X.push($), X)), [])
            }

            function vX(X) {
                var $ = X.defaultIntegrations && [...X.defaultIntegrations] || [],
                    e = X.integrations;
                let l = [...aX($)];
                Array.isArray(e) ? l = [...l.filter((X => e.every(($ => $.name !== X.name)))), ...aX(e)] : "function" == typeof e && (l = e(l), l = Array.isArray(l) ? l : [l]);
                var q = l.map((X => X.name)),
                    c = "Debug";
                return -1 !== q.indexOf(c) && l.push(...l.splice(q.indexOf(c), 1)), l
            }
            class wX {
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
                    if (wX.prototype.__init.call(this), wX.prototype.__init2.call(this), wX.prototype.__init3.call(this), wX.prototype.__init4.call(this), this.tt = X, X.dsn) {
                        this.nt = n(X.dsn);
                        var $ = SX(this.nt, X);
                        this.et = X.transport({
                            recordDroppedEvent: this.recordDroppedEvent.bind(this),
                            ...X.transportOptions,
                            url: $
                        })
                    }
                }
                captureException(X, $, e) {
                    if (FX(X)) return;
                    let l = $ && $.event_id;
                    return this.rt(this.eventFromException(X, $).then((X => this.it(X, $, e))).then((X => {
                        l = X
                    }))), l
                }
                captureMessage(X, $, e, l) {
                    let q = e && e.event_id;
                    var c = x(X) ? this.eventFromMessage(String(X), $, e) : this.eventFromException(X, e);
                    return this.rt(c.then((X => this.it(X, e, l))).then((X => {
                        q = X
                    }))), q
                }
                captureEvent(X, $, e) {
                    if ($ && $.originalException && FX($.originalException)) return;
                    let l = $ && $.event_id;
                    return this.rt(this.it(X, $, e).then((X => {
                        l = X
                    }))), l
                }
                captureSession(X) {
                    this.st() && ("string" != typeof X.release || (this.sendSession(X), tX(X, {
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
                    var $ = this.et;
                    return $ ? this.ot(X).then((e => $.flush(X).then((X => e && X)))) : gX(!0)
                }
                close(X) {
                    return this.flush(X).then((X => (this.getOptions().enabled = !1, X)))
                }
                setupIntegrations() {
                    var X, $;
                    this.st() && !this.V && (this.G = (X = this.tt.integrations, $ = {}, X.forEach((X => {
                        $[X.name] = X, -1 === bX.indexOf(X.name) && (X.setupOnce(zX, uX), bX.push(X.name))
                    })), $), this.V = !0)
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
                sendEvent(X, $ = {}) {
                    if (this.nt) {
                        let l = function(X, $, e, l) {
                            var q = _X(e),
                                c = X.type || "event";
                            const {
                                transactionSampling: T
                            } = X.sdkProcessingMetadata || {}, {
                                method: F,
                                rate: V
                            } = T || {};
                            ! function(X, $) {
                                $ && (X.sdk = X.sdk || {}, X.sdk.name = X.sdk.name || $.name, X.sdk.version = X.sdk.version || $.version, X.sdk.integrations = [...X.sdk.integrations || [], ...$.integrations || []], X.sdk.packages = [...X.sdk.packages || [], ...$.packages || []])
                            }(X, e && e.sdk);
                            var o = function(X, $, e, l) {
                                var q = X.sdkProcessingMetadata && X.sdkProcessingMetadata.baggage,
                                    c = q && function(X) {
                                        return X[0]
                                    }(q);
                                return {
                                    event_id: X.event_id,
                                    sent_at: (new Date).toISOString(),
                                    ...$ && {
                                        sdk: $
                                    },
                                    ...!!e && {
                                        dsn: G(l)
                                    },
                                    ..."transaction" === X.type && c && {
                                        trace: y({ ...c
                                        })
                                    }
                                }
                            }(X, q, l, $);
                            return delete X.sdkProcessingMetadata, nX(o, [
                                [{
                                    type: c,
                                    sample_rates: [{
                                        id: F,
                                        rate: V
                                    }]
                                }, X]
                            ])
                        }(X, this.nt, this.tt.K, this.tt.tunnel);
                        for (var e of $.attachments || []) l = IX(l, PX(e, this.tt.transportOptions && this.tt.transportOptions.textEncoder));
                        this.ut(l)
                    }
                }
                sendSession(X) {
                    if (this.nt) {
                        var $ = function(X, $, e, l) {
                            var q = _X(e);
                            return nX({
                                sent_at: (new Date).toISOString(),
                                ...q && {
                                    sdk: q
                                },
                                ...!!l && {
                                    dsn: G($)
                                }
                            }, ["aggregates" in X ? [{
                                type: "sessions"
                            }, X] : [{
                                type: "session"
                            }, X]])
                        }(X, this.nt, this.tt.K, this.tt.tunnel);
                        this.ut($)
                    }
                }
                recordDroppedEvent(X, $) {
                    if (this.tt.sendClientReports) {
                        var e = `${X}:${$}`;
                        this.Z[e] = this.Z[e] + 1 || 1
                    }
                }
                at(X, $) {
                    let e = !1,
                        l = !1;
                    var q = $.exception && $.exception.values;
                    if (q)
                        for (var c of (l = !0, q)) {
                            var T = c.mechanism;
                            if (T && !1 === T.handled) {
                                e = !0;
                                break
                            }
                        }
                    var F = "ok" === X.status;
                    (F && 0 === X.errors || F && e) && (tX(X, { ...e && {
                            status: "crashed"
                        },
                        errors: X.errors || Number(l || e)
                    }), this.captureSession(X))
                }
                ot(X) {
                    return new CX(($ => {
                        let e = 0;
                        var l = setInterval((() => {
                            0 == this.Y ? (clearInterval(l), $(!0)) : (e += 1, X && e >= X && (clearInterval(l), $(!1)))
                        }), 1)
                    }))
                }
                st() {
                    return !1 !== this.getOptions().enabled && void 0 !== this.nt
                }
                ct(X, $, e) {
                    const {
                        normalizeDepth: l = 3,
                        normalizeMaxBreadth: q = 1e3
                    } = this.getOptions();
                    var c = { ...X,
                        event_id: X.event_id || $.event_id || $X(),
                        timestamp: X.timestamp || GX()
                    };
                    this.ft(c), this.ht(c);
                    let T = e;
                    $.captureContext && (T = YX.clone(T).update($.captureContext));
                    let F = gX(c);
                    if (T) {
                        var V = [...$.attachments || [], ...T.getAttachments()];
                        V.length && ($.attachments = V), F = T.applyToEvent(c, $)
                    }
                    return F.then((X => "number" == typeof l && l > 0 ? this.lt(X, l, q) : X))
                }
                lt(X, $, e) {
                    if (!X) return null;
                    var l = { ...X,
                        ...X.breadcrumbs && {
                            breadcrumbs: X.breadcrumbs.map((X => ({ ...X,
                                ...X.data && {
                                    data: VX(X.data, $, e)
                                }
                            })))
                        },
                        ...X.user && {
                            user: VX(X.user, $, e)
                        },
                        ...X.contexts && {
                            contexts: VX(X.contexts, $, e)
                        },
                        ...X.extra && {
                            extra: VX(X.extra, $, e)
                        }
                    };
                    return X.contexts && X.contexts.trace && l.contexts && (l.contexts.trace = X.contexts.trace, X.contexts.trace.data && (l.contexts.trace.data = VX(X.contexts.trace.data, $, e))), X.spans && (l.spans = X.spans.map((X => (X.data && (X.data = VX(X.data, $, e)), X)))), l
                }
                ft(X) {
                    var $ = this.getOptions();
                    const {
                        environment: e,
                        release: l,
                        dist: q,
                        maxValueLength: c = 250
                    } = $;
                    "environment" in X || (X.environment = "environment" in $ ? e : "production"), void 0 === X.release && void 0 !== l && (X.release = l), void 0 === X.dist && void 0 !== q && (X.dist = q), X.message && (X.message = D(X.message, c));
                    var T = X.exception && X.exception.values && X.exception.values[0];
                    T && T.value && (T.value = D(T.value, c));
                    var F = X.request;
                    F && F.url && (F.url = D(F.url, c))
                }
                ht(X) {
                    var $ = Object.keys(this.G);
                    $.length > 0 && (X.sdk = X.sdk || {}, X.sdk.integrations = [...X.sdk.integrations || [], ...$])
                }
                it(X, $ = {}, e) {
                    return this.vt(X, $, e).then((X => X.event_id), (X => {}))
                }
                vt(X, $, e) {
                    const {
                        beforeSend: l,
                        sampleRate: q
                    } = this.getOptions();
                    if (!this.st()) return fX(new J("SDK not enabled, will not capture event."));
                    var c = "transaction" === X.type;
                    return !c && "number" == typeof q && Math.random() > q ? (this.recordDroppedEvent("sample_rate", "error"), fX(new J(`Discarding event because it's not included in the random sample (sampling rate = ${q})`))) : this.ct(X, $, e).then((e => {
                        if (null === e) throw this.recordDroppedEvent("event_processor", X.type || "error"), new J("An event processor returned null, will not send event.");
                        return $.data && !0 === $.data.__sentry__ || c || !l ? e : function(X) {
                            var $ = "`beforeSend` method has to return `null` or a valid event.";
                            if (f(X)) return X.then((X => {
                                if (!W(X) && null !== X) throw new J($);
                                return X
                            }), (X => {
                                throw new J(`beforeSend rejected with ${X}`)
                            }));
                            if (!W(X) && null !== X) throw new J($);
                            return X
                        }(l(e, $))
                    })).then((l => {
                        if (null === l) throw this.recordDroppedEvent("before_send", X.type || "error"), new J("`beforeSend` returned `null`, will not send event.");
                        var q = e && e.getSession();
                        return !c && q && this.at(q, l), this.sendEvent(l, $), l
                    })).then(null, (X => {
                        if (X instanceof J) throw X;
                        throw this.captureException(X, {
                            data: {
                                __sentry__: !0
                            },
                            originalException: X
                        }), new J(`Event processing pipeline threw an error, original event will not be sent. Details have been sent as a new event.\nReason: ${X}`)
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
                    return this.Z = {}, Object.keys(X).map(($ => {
                        const [e, l] = $.split(":");
                        return {
                            reason: e,
                            category: l,
                            quantity: X[$]
                        }
                    }))
                }
            }

            function rX(X, $, e = function(X) {
                var $ = [];

                function e(X) {
                    return $.splice($.indexOf(X), 1)[0]
                }
                return {
                    $,
                    add: function(l) {
                        if (!(void 0 === X || $.length < X)) return fX(new J("Not adding Promise due to buffer limit reached."));
                        var q = l();
                        return -1 === $.indexOf(q) && $.push(q), q.then((() => e(q))).then(null, (() => e(q).then(null, (() => {})))), q
                    },
                    drain: function(X) {
                        return new CX(((e, l) => {
                            let q = $.length;
                            if (!q) return e(!0);
                            var c = setTimeout((() => {
                                X && X > 0 && e(!1)
                            }), X);
                            $.forEach((X => {
                                gX(X).then((() => {
                                    --q || (clearTimeout(c), e(!0))
                                }), l)
                            }))
                        }))
                    }
                }
            }(X.bufferSize || 30)) {
                let l = {};
                return {
                    send: function(q) {
                        var c = [];
                        if (LX(q, (($, e) => {
                                var q = mX(e);
                                ! function(X, $, e = Date.now()) {
                                    return function(X, $) {
                                        return X[$] || X.all || 0
                                    }(X, $) > e
                                }(l, q) ? c.push($): X.recordDroppedEvent("ratelimit_backoff", q)
                            })), 0 === c.length) return gX();
                        var T = nX(q[0], c),
                            F = $ => {
                                LX(T, ((e, l) => {
                                    X.recordDroppedEvent($, mX(l))
                                }))
                            };
                        return e.add((() => $({
                            body: kX(T, X.textEncoder)
                        }).then((X => {
                            l = function(X, {
                                statusCode: $,
                                headers: e
                            }, l = Date.now()) {
                                var q = { ...X
                                    },
                                    c = e && e["x-sentry-rate-limits"],
                                    T = e && e["retry-after"];
                                if (c)
                                    for (var F of c.trim().split(",")) {
                                        const [X, $] = F.split(":", 2);
                                        var V = parseInt(X, 10),
                                            o = 1e3 * (isNaN(V) ? 60 : V);
                                        if ($)
                                            for (var x of $.split(";")) q[x] = l + o;
                                        else q.all = l + o
                                    } else T ? q.all = l + function(X, $ = Date.now()) {
                                        var e = parseInt(`${X}`, 10);
                                        if (!isNaN(e)) return 1e3 * e;
                                        var l = Date.parse(`${X}`);
                                        return isNaN(l) ? 6e4 : l - $
                                    }(T, l) : 429 === $ && (q.all = l + 6e4);
                                return q
                            }(l, X)
                        }), (X => {
                            F("network_error")
                        })))).then((X => X), (X => {
                            if (X instanceof J) return F("queue_overflow"), gX();
                            throw X
                        }))
                    },
                    flush: X => e.drain(X)
                }
            }
            var UX = "7.7.0";
            let NX;
            class sX {
                constructor() {
                    sX.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "FunctionToString"
                }
                __init() {
                    this.name = sX.id
                }
                setupOnce() {
                    NX = Function.prototype.toString, Function.prototype.toString = function(...X) {
                        var $ = Y(this) || this;
                        return NX.apply($, X)
                    }
                }
            }
            sX.__initStatic();
            var RX = [/^Script error\.?$/, /^Javascript error: Script error\.? on line 0$/];
            class X$ {
                static __initStatic() {
                    this.id = "InboundFilters"
                }
                __init() {
                    this.name = X$.id
                }
                constructor(X = {}) {
                    this.tt = X, X$.prototype.__init.call(this)
                }
                setupOnce(X, $) {
                    var e = X => {
                        var e = $();
                        if (e) {
                            var l = e.getIntegration(X$);
                            if (l) {
                                var q = e.getClient(),
                                    c = q ? q.getOptions() : {},
                                    T = function(X = {}, $ = {}) {
                                        return {
                                            allowUrls: [...X.allowUrls || [], ...$.allowUrls || []],
                                            denyUrls: [...X.denyUrls || [], ...$.denyUrls || []],
                                            ignoreErrors: [...X.ignoreErrors || [], ...$.ignoreErrors || [], ...RX],
                                            ignoreInternal: void 0 === X.ignoreInternal || X.ignoreInternal
                                        }
                                    }(l.tt, c);
                                return function(X, $) {
                                    return !((!$.ignoreInternal || ! function(X) {
                                        try {
                                            return "SentryError" === X.exception.values[0].type
                                        } catch (X) {}
                                        return !1
                                    }(X)) && ! function(X, $) {
                                        return !(!$ || !$.length) && function(X) {
                                            if (X.message) return [X.message];
                                            if (X.exception) try {
                                                const {
                                                    type: $ = "",
                                                    value: e = ""
                                                } = X.exception.values && X.exception.values[0] || {};
                                                return [`${e}`, `${$}: ${e}`]
                                            } catch (X) {
                                                return []
                                            }
                                            return []
                                        }(X).some((X => $.some(($ => P(X, $)))))
                                    }(X, $.ignoreErrors) && ! function(X, $) {
                                        if (!$ || !$.length) return !1;
                                        var e = $$(X);
                                        return !!e && $.some((X => P(e, X)))
                                    }(X, $.denyUrls) && function(X, $) {
                                        if (!$ || !$.length) return !0;
                                        var e = $$(X);
                                        return !e || $.some((X => P(e, X)))
                                    }(X, $.allowUrls))
                                }(X, T) ? null : X
                            }
                        }
                        return X
                    };
                    e.id = this.name, X(e)
                }
            }

            function $$(X) {
                try {
                    let $;
                    try {
                        $ = X.exception.values[0].stacktrace.frames
                    } catch (X) {}
                    return $ ? function(X = []) {
                        for (let e = X.length - 1; e >= 0; e--) {
                            var $ = X[e];
                            if ($ && "<anonymous>" !== $.filename && "[native code]" !== $.filename) return $.filename || null
                        }
                        return null
                    }($) : null
                } catch (X) {
                    return null
                }
            }
            X$.__initStatic();
            var e$ = Object.freeze({
                __proto__: null,
                FunctionToString: sX,
                InboundFilters: X$
            });

            function l$(X, $) {
                const e = c$(X, $),
                    l = {
                        type: $ && $.name,
                        value: F$($)
                    };
                return e.length && (l.stacktrace = {
                    frames: e
                }), void 0 === l.type && "" === l.value && (l.value = "Unrecoverable error caught"), l
            }

            function q$(X, $) {
                return {
                    exception: {
                        values: [l$(X, $)]
                    }
                }
            }

            function c$(X, $) {
                const e = $.stacktrace || $.stack || "",
                    l = function(X) {
                        if (X) {
                            if ("number" == typeof X.framesToPop) return X.framesToPop;
                            if (T$.test(X.message)) return 1
                        }
                        return 0
                    }($);
                try {
                    return X(e, l)
                } catch (X) {}
                return []
            }
            const T$ = /Minified React error #\d+;/i;

            function F$(X) {
                const $ = X && X.message;
                return $ ? $.error && "string" == typeof $.error.message ? $.error.message : $ : "No error message"
            }

            function V$(X, $, e, l, q) {
                let o;
                if (F($) && $.error) return q$(X, $.error);
                if (V($) || T($, "DOMException")) {
                    const q = $;
                    if ("stack" in $) o = q$(X, $);
                    else {
                        const $ = q.name || (V(q) ? "DOMError" : "DOMException"),
                            c = q.message ? `${$}: ${q.message}` : $;
                        o = o$(X, c, e, l), cX(o, c)
                    }
                    return "code" in q && (o.tags = { ...o.tags,
                        "DOMException.code": `${q.code}`
                    }), o
                }
                return c($) ? q$(X, $) : W($) || g($) ? (o = function(X, $, e, l) {
                    const q = {
                        exception: {
                            values: [{
                                type: g($) ? $.constructor.name : l ? "UnhandledRejection" : "Error",
                                value: `Non-Error ${l?"promise rejection":"exception"} captured with keys: ${i($)}`
                            }]
                        },
                        extra: {
                            __serialized__: oX($)
                        }
                    };
                    if (e) {
                        const $ = c$(X, e);
                        $.length && (q.exception.values[0].stacktrace = {
                            frames: $
                        })
                    }
                    return q
                }(X, $, e, q), TX(o, {
                    synthetic: !0
                }), o) : (o = o$(X, $, e, l), cX(o, `${$}`, void 0), TX(o, {
                    synthetic: !0
                }), o)
            }

            function o$(X, $, e, l) {
                const q = {
                    message: $
                };
                if (l && e) {
                    const l = c$(X, e);
                    l.length && (q.exception = {
                        values: [{
                            value: $,
                            stacktrace: {
                                frames: l
                            }
                        }]
                    })
                }
                return q
            }
            const x$ = "Breadcrumbs";
            class W$ {
                static __initStatic() {
                    this.id = x$
                }
                __init() {
                    this.name = W$.id
                }
                constructor(X) {
                    W$.prototype.__init.call(this), this.options = {
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
                    this.options.console && b("console", g$), this.options.dom && b("dom", function(X) {
                        return function($) {
                            let e, l = "object" == typeof X ? X.serializeAttribute : void 0;
                            "string" == typeof l && (l = [l]);
                            try {
                                e = $.event.target ? Q($.event.target, l) : Q($.event, l)
                            } catch (X) {
                                e = "<unknown>"
                            }
                            0 !== e.length && uX().addBreadcrumb({
                                category: `ui.${$.name}`,
                                message: e
                            }, {
                                event: $.event,
                                name: $.name,
                                global: $.global
                            })
                        }
                    }(this.options.dom)), this.options.xhr && b("xhr", f$), this.options.fetch && b("fetch", C$), this.options.history && b("history", Q$)
                }
            }

            function g$(X) {
                const $ = {
                    category: "console",
                    data: {
                        arguments: X.args,
                        logger: "console"
                    },
                    level: (e = X.level, "warn" === e ? "warning" : QX.includes(e) ? e : "log"),
                    message: k(X.args, " ")
                };
                var e;
                if ("assert" === X.level) {
                    if (!1 !== X.args[0]) return;
                    $.message = `Assertion failed: ${k(X.args.slice(1)," ")||"console.assert"}`, $.data.arguments = X.args.slice(1)
                }
                uX().addBreadcrumb($, {
                    input: X.args,
                    level: X.level
                })
            }

            function f$(X) {
                if (X.endTimestamp) {
                    if (X.xhr.__sentry_own_request__) return;
                    const {
                        method: $,
                        url: e,
                        status_code: l,
                        body: q
                    } = X.xhr.__sentry_xhr__ || {};
                    uX().addBreadcrumb({
                        category: "xhr",
                        data: {
                            method: $,
                            url: e,
                            status_code: l
                        },
                        type: "http"
                    }, {
                        xhr: X.xhr,
                        input: q
                    })
                }
            }

            function C$(X) {
                X.endTimestamp && (X.fetchData.url.match(/sentry_key/) && "POST" === X.fetchData.method || (X.error ? uX().addBreadcrumb({
                    category: "fetch",
                    data: X.fetchData,
                    level: "error",
                    type: "http"
                }, {
                    data: X.error,
                    input: X.args
                }) : uX().addBreadcrumb({
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

            function Q$(X) {
                const $ = e();
                let l = X.from,
                    q = X.to;
                const c = eX($.location.href);
                let T = eX(l);
                const F = eX(q);
                T.path || (T = c), c.protocol === F.protocol && c.host === F.host && (q = F.relative), c.protocol === T.protocol && c.host === T.host && (l = T.relative), uX().addBreadcrumb({
                    category: "navigation",
                    data: {
                        from: l,
                        to: q
                    }
                })
            }
            W$.__initStatic();
            const B$ = e();
            let J$;

            function h$() {
                if (J$) return J$;
                if (p(B$.fetch)) return J$ = B$.fetch.bind(B$);
                const X = B$.document;
                let $ = B$.fetch;
                if (X && "function" == typeof X.createElement) try {
                    const e = X.createElement("iframe");
                    e.hidden = !0, X.head.appendChild(e);
                    const l = e.contentWindow;
                    l && l.fetch && ($ = l.fetch), X.head.removeChild(e)
                } catch (X) {}
                return J$ = $.bind(B$)
            }
            const G$ = e();
            class M$ extends wX {
                constructor(X) {
                    X.K = X.K || {}, X.K.sdk = X.K.sdk || {
                        name: "sentry.javascript.browser",
                        packages: [{
                            name: "npm:@sentry/browser",
                            version: UX
                        }],
                        version: UX
                    }, super(X), X.sendClientReports && G$.document && G$.document.addEventListener("visibilitychange", (() => {
                        "hidden" === G$.document.visibilityState && this.yt()
                    }))
                }
                eventFromException(X, $) {
                    return function(X, $, e, l) {
                        const q = V$(X, $, e && e.syntheticException || void 0, l);
                        return TX(q), q.level = "error", e && e.event_id && (q.event_id = e.event_id), gX(q)
                    }(this.tt.stackParser, X, $, this.tt.attachStacktrace)
                }
                eventFromMessage(X, $ = "info", e) {
                    return function(X, $, e = "info", l, q) {
                        const c = o$(X, $, l && l.syntheticException || void 0, q);
                        return c.level = e, l && l.event_id && (c.event_id = l.event_id), gX(c)
                    }(this.tt.stackParser, X, $, e, this.tt.attachStacktrace)
                }
                sendEvent(X, $) {
                    const e = this.getIntegrationById(x$);
                    e && e.options && e.options.sentry && uX().addBreadcrumb({
                        category: "sentry." + ("transaction" === X.type ? "transaction" : "event"),
                        event_id: X.event_id,
                        level: X.level,
                        message: qX(X)
                    }, {
                        event: X
                    }), super.sendEvent(X, $)
                }
                ct(X, $, e) {
                    return X.platform = X.platform || "javascript", super.ct(X, $, e)
                }
                yt() {
                    const X = this.dt();
                    if (0 === X.length) return;
                    if (!this.nt) return;
                    const $ = SX(this.nt, this.tt),
                        e = (l = X, nX((q = this.tt.tunnel && G(this.nt)) ? {
                            dsn: q
                        } : {}, [
                            [{
                                type: "client_report"
                            }, {
                                timestamp: c || GX(),
                                discarded_events: l
                            }]
                        ]));
                    var l, q, c;
                    try {
                        ! function(X, $) {
                            "[object Navigator]" === Object.prototype.toString.call(B$ && B$.navigator) && "function" == typeof B$.navigator.sendBeacon ? B$.navigator.sendBeacon.bind(B$.navigator)(X, $) : A() && h$()(X, {
                                body: $,
                                method: "POST",
                                credentials: "omit",
                                keepalive: !0
                            }).then(null, (X => {}))
                        }($, kX(e))
                    } catch (X) {}
                }
            }

            function n$(X, $ = h$()) {
                return rX(X, (function(e) {
                    const l = {
                        body: e.body,
                        method: "POST",
                        referrerPolicy: "origin",
                        headers: X.headers,
                        ...X.fetchOptions
                    };
                    return $(X.url, l).then((X => ({
                        statusCode: X.status,
                        headers: {
                            "x-sentry-rate-limits": X.headers.get("X-Sentry-Rate-Limits"),
                            "retry-after": X.headers.get("Retry-After")
                        }
                    })))
                }))
            }

            function I$(X) {
                return rX(X, (function($) {
                    return new CX(((e, l) => {
                        const q = new XMLHttpRequest;
                        q.onerror = l, q.onreadystatechange = () => {
                            4 === q.readyState && e({
                                statusCode: q.status,
                                headers: {
                                    "x-sentry-rate-limits": q.getResponseHeader("X-Sentry-Rate-Limits"),
                                    "retry-after": q.getResponseHeader("Retry-After")
                                }
                            })
                        }, q.open("POST", X.url);
                        for (const $ in X.headers) Object.prototype.hasOwnProperty.call(X.headers, $) && q.setRequestHeader($, X.headers[$]);
                        q.send($.body)
                    }))
                }))
            }
            const L$ = "?";

            function D$(X, $, e, l) {
                const q = {
                    filename: X,
                    function: $,
                    in_app: !0
                };
                return void 0 !== e && (q.lineno = e), void 0 !== l && (q.colno = l), q
            }
            const k$ = /^\s*at (?:(.*?) ?\((?:address at )?)?((?:file|https?|blob|chrome-extension|address|native|eval|webpack|<anonymous>|[-a-z]+:|.*bundle|\/).*?)(?::(\d+))?(?::(\d+))?\)?\s*$/i,
                P$ = /\((\S*)(?::(\d+))(?::(\d+))\)/,
                O$ = [30, X => {
                    const $ = k$.exec(X);
                    if ($) {
                        if ($[2] && 0 === $[2].indexOf("eval")) {
                            const X = P$.exec($[2]);
                            X && ($[2] = X[1], $[3] = X[2], $[4] = X[3])
                        }
                        const [X, e] = j$($[1] || L$, $[2]);
                        return D$(e, X, $[3] ? +$[3] : void 0, $[4] ? +$[4] : void 0)
                    }
                }],
                m$ = /^\s*(.*?)(?:\((.*?)\))?(?:^|@)?((?:file|https?|blob|chrome|webpack|resource|moz-extension|capacitor).*?:\/.*?|\[native code\]|[^@]*(?:bundle|\d+\.js)|\/[\w\-. /=]+)(?::(\d+))?(?::(\d+))?\s*$/i,
                t$ = /(\S+) line (\d+)(?: > eval line \d+)* > eval/i,
                Y$ = [50, X => {
                    const $ = m$.exec(X);
                    if ($) {
                        if ($[3] && $[3].indexOf(" > eval") > -1) {
                            const X = t$.exec($[3]);
                            X && ($[1] = $[1] || "eval", $[3] = X[1], $[4] = X[2], $[5] = "")
                        }
                        let X = $[3],
                            e = $[1] || L$;
                        return [e, X] = j$(e, X), D$(X, e, $[4] ? +$[4] : void 0, $[5] ? +$[5] : void 0)
                    }
                }],
                E$ = /^\s*at (?:((?:\[object object\])?.+) )?\(?((?:file|ms-appx|https?|webpack|blob):.*?):(\d+)(?::(\d+))?\)?\s*$/i,
                z$ = [40, X => {
                    const $ = E$.exec(X);
                    return $ ? D$($[2], $[1] || L$, +$[3], $[4] ? +$[4] : void 0) : void 0
                }],
                Z$ = / line (\d+).*script (?:in )?(\S+)(?:: in function (\S+))?$/i,
                i$ = [10, X => {
                    const $ = Z$.exec(X);
                    return $ ? D$($[2], $[3] || L$, +$[1]) : void 0
                }],
                y$ = / line (\d+), column (\d+)\s*(?:in (?:<anonymous function: ([^>]+)>|([^)]+))\(.*\))? in (.*):\s*$/i,
                d$ = [20, X => {
                    const $ = y$.exec(X);
                    return $ ? D$($[5], $[3] || $[4] || L$, +$[1], +$[2]) : void 0
                }],
                u$ = [O$, Y$, z$],
                K$ = u(...u$),
                j$ = (X, $) => {
                    const e = -1 !== X.indexOf("safari-extension"),
                        l = -1 !== X.indexOf("safari-web-extension");
                    return e || l ? [-1 !== X.indexOf("@") ? X.split("@")[0] : L$, e ? `safari-extension:${$}` : `safari-web-extension:${$}`] : [X, $]
                };
            let A$ = 0;

            function p$() {
                return A$ > 0
            }

            function H$(X, $ = {}, e) {
                if ("function" != typeof X) return X;
                try {
                    const $ = X.__sentry_wrapped__;
                    if ($) return $;
                    if (Y(X)) return X
                } catch ($) {
                    return X
                }
                const l = function() {
                    const l = Array.prototype.slice.call(arguments);
                    try {
                        e && "function" == typeof e && e.apply(this, arguments);
                        const q = l.map((X => H$(X, $)));
                        return X.apply(this, q)
                    } catch (X) {
                        throw A$ += 1, setTimeout((() => {
                            A$ -= 1
                        })), pX((e => {
                            e.addEventProcessor((X => ($.mechanism && (cX(X, void 0, void 0), TX(X, $.mechanism)), X.extra = { ...X.extra,
                                arguments: l
                            }, X))), AX(X)
                        })), X
                    }
                };
                try {
                    for (const $ in X) Object.prototype.hasOwnProperty.call(X, $) && (l[$] = X[$])
                } catch (X) {}
                t(l, X), m(X, "__sentry_wrapped__", l);
                try {
                    Object.getOwnPropertyDescriptor(l, "name").configurable && Object.defineProperty(l, "name", {
                        get: () => X.name
                    })
                } catch (X) {}
                return l
            }
            class S$ {
                static __initStatic() {
                    this.id = "GlobalHandlers"
                }
                __init() {
                    this.name = S$.id
                }
                __init2() {
                    this.gt = {
                        onerror: _$,
                        onunhandledrejection: b$
                    }
                }
                constructor(X) {
                    S$.prototype.__init.call(this), S$.prototype.__init2.call(this), this.tt = {
                        onerror: !0,
                        onunhandledrejection: !0,
                        ...X
                    }
                }
                setupOnce() {
                    Error.stackTraceLimit = 50;
                    const X = this.tt;
                    for (const $ in X) {
                        const e = this.gt[$];
                        e && X[$] && (e(), this.gt[$] = void 0)
                    }
                }
            }

            function _$() {
                b("error", (X => {
                    const [$, e, l] = w$();
                    if (!$.getIntegration(S$)) return;
                    const {
                        msg: q,
                        url: c,
                        line: T,
                        column: V,
                        error: x
                    } = X;
                    if (p$() || x && x.__sentry_own_request__) return;
                    const W = void 0 === x && o(q) ? function(X, $, e, l) {
                        let q = F(X) ? X.message : X,
                            c = "Error";
                        const T = q.match(/^(?:[Uu]ncaught (?:exception: )?)?(?:((?:Eval|Internal|Range|Reference|Syntax|Type|URI|)Error): )?(.*)$/i);
                        return T && (c = T[1], q = T[2]), a$({
                            exception: {
                                values: [{
                                    type: c,
                                    value: q
                                }]
                            }
                        }, $, e, l)
                    }(q, c, T, V) : a$(V$(e, x || q, void 0, l, !1), c, T, V);
                    W.level = "error", v$($, x, W, "onerror")
                }))
            }

            function b$() {
                b("unhandledrejection", (X => {
                    const [$, e, l] = w$();
                    if (!$.getIntegration(S$)) return;
                    let q = X;
                    try {
                        "reason" in X ? q = X.reason : "detail" in X && "reason" in X.detail && (q = X.detail.reason)
                    } catch (X) {}
                    if (p$() || q && q.__sentry_own_request__) return !0;
                    const c = x(q) ? {
                        exception: {
                            values: [{
                                type: "UnhandledRejection",
                                value: `Non-Error promise rejection captured with value: ${String(q)}`
                            }]
                        }
                    } : V$(e, q, void 0, l, !0);
                    c.level = "error", v$($, q, c, "onunhandledrejection")
                }))
            }

            function a$(X, $, l, q) {
                const c = X.exception = X.exception || {},
                    T = c.values = c.values || [],
                    F = T[0] = T[0] || {},
                    V = F.stacktrace = F.stacktrace || {},
                    x = V.frames = V.frames || [],
                    W = isNaN(parseInt(q, 10)) ? void 0 : q,
                    g = isNaN(parseInt(l, 10)) ? void 0 : l,
                    f = o($) && $.length > 0 ? $ : function() {
                        var X = e();
                        try {
                            return X.document.location.href
                        } catch (X) {
                            return ""
                        }
                    }();
                return 0 === x.length && x.push({
                    colno: W,
                    filename: f,
                    function: "?",
                    in_app: !0,
                    lineno: g
                }), X
            }

            function v$(X, $, e, l) {
                TX(e, {
                    handled: !1,
                    type: l
                }), X.captureEvent(e, {
                    originalException: $
                })
            }

            function w$() {
                const X = uX(),
                    $ = X.getClient(),
                    e = $ && $.getOptions() || {
                        stackParser: () => [],
                        attachStacktrace: !1
                    };
                return [X, e.stackParser, e.attachStacktrace]
            }
            S$.__initStatic();
            const r$ = ["EventTarget", "Window", "Node", "ApplicationCache", "AudioTrackList", "ChannelMergerNode", "CryptoOperation", "EventSource", "FileReader", "HTMLUnknownElement", "IDBDatabase", "IDBRequest", "IDBTransaction", "KeyOperation", "MediaController", "MessagePort", "ModalWindow", "Notification", "SVGElementInstance", "Screen", "TextTrack", "TextTrackCue", "TextTrackList", "WebSocket", "WebSocketWorker", "Worker", "XMLHttpRequest", "XMLHttpRequestEventTarget", "XMLHttpRequestUpload"];
            class U$ {
                static __initStatic() {
                    this.id = "TryCatch"
                }
                __init() {
                    this.name = U$.id
                }
                constructor(X) {
                    U$.prototype.__init.call(this), this.tt = {
                        XMLHttpRequest: !0,
                        eventTarget: !0,
                        requestAnimationFrame: !0,
                        setInterval: !0,
                        setTimeout: !0,
                        ...X
                    }
                }
                setupOnce() {
                    const X = e();
                    this.tt.setTimeout && O(X, "setTimeout", N$), this.tt.setInterval && O(X, "setInterval", N$), this.tt.requestAnimationFrame && O(X, "requestAnimationFrame", s$), this.tt.XMLHttpRequest && "XMLHttpRequest" in X && O(XMLHttpRequest.prototype, "send", R$);
                    const $ = this.tt.eventTarget;
                    $ && (Array.isArray($) ? $ : r$).forEach(Xe)
                }
            }

            function N$(X) {
                return function(...$) {
                    const e = $[0];
                    return $[0] = H$(e, {
                        mechanism: {
                            data: {
                                function: j(X)
                            },
                            handled: !0,
                            type: "instrument"
                        }
                    }), X.apply(this, $)
                }
            }

            function s$(X) {
                return function($) {
                    return X.apply(this, [H$($, {
                        mechanism: {
                            data: {
                                function: "requestAnimationFrame",
                                handler: j(X)
                            },
                            handled: !0,
                            type: "instrument"
                        }
                    })])
                }
            }

            function R$(X) {
                return function(...$) {
                    const e = this;
                    return ["onload", "onerror", "onprogress", "onreadystatechange"].forEach((X => {
                        X in e && "function" == typeof e[X] && O(e, X, (function($) {
                            const e = {
                                    mechanism: {
                                        data: {
                                            function: X,
                                            handler: j($)
                                        },
                                        handled: !0,
                                        type: "instrument"
                                    }
                                },
                                l = Y($);
                            return l && (e.mechanism.data.handler = j(l)), H$($, e)
                        }))
                    })), X.apply(this, $)
                }
            }

            function Xe(X) {
                const $ = e(),
                    l = $[X] && $[X].prototype;
                l && l.hasOwnProperty && l.hasOwnProperty("addEventListener") && (O(l, "addEventListener", (function($) {
                    return function(e, l, q) {
                        try {
                            "function" == typeof l.handleEvent && (l.handleEvent = H$(l.handleEvent, {
                                mechanism: {
                                    data: {
                                        function: "handleEvent",
                                        handler: j(l),
                                        target: X
                                    },
                                    handled: !0,
                                    type: "instrument"
                                }
                            }))
                        } catch (X) {}
                        return $.apply(this, [e, H$(l, {
                            mechanism: {
                                data: {
                                    function: "addEventListener",
                                    handler: j(l),
                                    target: X
                                },
                                handled: !0,
                                type: "instrument"
                            }
                        }), q])
                    }
                })), O(l, "removeEventListener", (function(X) {
                    return function($, e, l) {
                        const q = e;
                        try {
                            const e = q && q.__sentry_wrapped__;
                            e && X.call(this, $, e, l)
                        } catch (X) {}
                        return X.call(this, $, q, l)
                    }
                })))
            }
            U$.__initStatic();
            class $e {
                static __initStatic() {
                    this.id = "LinkedErrors"
                }
                __init() {
                    this.name = $e.id
                }
                constructor(X = {}) {
                    $e.prototype.__init.call(this), this.bt = X.key || "cause", this._t = X.limit || 5
                }
                setupOnce() {
                    const X = uX().getClient();
                    X && zX((($, e) => {
                        const l = uX().getIntegration($e);
                        return l ? function(X, $, e, l, q) {
                            if (!(l.exception && l.exception.values && q && C(q.originalException, Error))) return l;
                            const c = ee(X, e, q.originalException, $);
                            return l.exception.values = [...c, ...l.exception.values], l
                        }(X.getOptions().stackParser, l.bt, l._t, $, e) : $
                    }))
                }
            }

            function ee(X, $, e, l, q = []) {
                if (!C(e[l], Error) || q.length + 1 >= $) return q;
                const c = l$(X, e[l]);
                return ee(X, $, e[l], l, [c, ...q])
            }
            $e.__initStatic();
            const le = e();
            class qe {
                constructor() {
                    qe.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "HttpContext"
                }
                __init() {
                    this.name = qe.id
                }
                setupOnce() {
                    zX((X => {
                        if (uX().getIntegration(qe)) {
                            if (!le.navigator && !le.location && !le.document) return X;
                            const $ = X.request && X.request.url || le.location && le.location.href,
                                {
                                    referrer: e
                                } = le.document || {},
                                {
                                    userAgent: l
                                } = le.navigator || {},
                                q = { ...$ && {
                                        url: $
                                    },
                                    headers: { ...X.request && X.request.headers,
                                        ...e && {
                                            Referer: e
                                        },
                                        ...l && {
                                            "User-Agent": l
                                        }
                                    }
                                };
                            return { ...X,
                                request: q
                            }
                        }
                        return X
                    }))
                }
            }
            qe.__initStatic();
            class ce {
                constructor() {
                    ce.prototype.__init.call(this)
                }
                static __initStatic() {
                    this.id = "Dedupe"
                }
                __init() {
                    this.name = ce.id
                }
                setupOnce(X, $) {
                    const e = X => {
                        const e = $().getIntegration(ce);
                        if (e) {
                            try {
                                if (function(X, $) {
                                        return !(!$ || ! function(X, $) {
                                            const e = X.message,
                                                l = $.message;
                                            return !(!e && !l || e && !l || !e && l || e !== l || !Fe(X, $) || !Te(X, $))
                                        }(X, $) && ! function(X, $) {
                                            const e = Ve($),
                                                l = Ve(X);
                                            return !!(e && l && e.type === l.type && e.value === l.value && Fe(X, $) && Te(X, $))
                                        }(X, $))
                                    }(X, e.wt)) return null
                            } catch ($) {
                                return e.wt = X
                            }
                            return e.wt = X
                        }
                        return X
                    };
                    e.id = this.name, X(e)
                }
            }

            function Te(X, $) {
                let e = oe(X),
                    l = oe($);
                if (!e && !l) return !0;
                if (e && !l || !e && l) return !1;
                if (l.length !== e.length) return !1;
                for (let X = 0; X < l.length; X++) {
                    const $ = l[X],
                        q = e[X];
                    if ($.filename !== q.filename || $.lineno !== q.lineno || $.colno !== q.colno || $.function !== q.function) return !1
                }
                return !0
            }

            function Fe(X, $) {
                let e = X.fingerprint,
                    l = $.fingerprint;
                if (!e && !l) return !0;
                if (e && !l || !e && l) return !1;
                try {
                    return !(e.join("") !== l.join(""))
                } catch (X) {
                    return !1
                }
            }

            function Ve(X) {
                return X.exception && X.exception.values && X.exception.values[0]
            }

            function oe(X) {
                const $ = X.exception;
                if ($) try {
                    return $.values[0].stacktrace.frames
                } catch (X) {
                    return
                }
            }
            ce.__initStatic();
            var xe = Object.freeze({
                __proto__: null,
                GlobalHandlers: S$,
                TryCatch: U$,
                Breadcrumbs: W$,
                LinkedErrors: $e,
                HttpContext: qe,
                Dedupe: ce
            });
            const We = [new X$, new sX, new U$, new W$, new S$, new $e, new ce, new qe];

            function ge(X) {
                X.startSession({
                    ignoreDuration: !0
                }), X.captureSession()
            }
            let fe = {};
            const Ce = e();
            Ce.Sentry && Ce.Sentry.Integrations && (fe = Ce.Sentry.Integrations);
            const Qe = { ...fe,
                ...e$,
                ...xe
            };
            return X.Breadcrumbs = W$, X.BrowserClient = M$, X.Dedupe = ce, X.FunctionToString = sX, X.GlobalHandlers = S$, X.HttpContext = qe, X.Hub = iX, X.InboundFilters = X$, X.Integrations = Qe, X.LinkedErrors = $e, X.SDK_VERSION = UX, X.Scope = YX, X.TryCatch = U$, X.addBreadcrumb = function(X) {
                uX().addBreadcrumb(X)
            }, X.addGlobalEventProcessor = zX, X.captureEvent = function(X, $) {
                return uX().captureEvent(X, $)
            }, X.captureException = AX, X.captureMessage = function(X, $) {
                var e = "string" == typeof $ ? $ : void 0,
                    l = "string" != typeof $ ? {
                        captureContext: $
                    } : void 0;
                return uX().captureMessage(X, e, l)
            }, X.chromeStackLineParser = O$, X.close = function(X) {
                const $ = uX().getClient();
                return $ ? $.close(X) : gX(!1)
            }, X.configureScope = function(X) {
                uX().configureScope(X)
            }, X.createTransport = rX, X.defaultIntegrations = We, X.defaultStackLineParsers = u$, X.defaultStackParser = K$, X.flush = function(X) {
                const $ = uX().getClient();
                return $ ? $.flush(X) : gX(!1)
            }, X.forceLoad = function() {}, X.geckoStackLineParser = Y$, X.getCurrentHub = uX, X.getHubFromCarrier = KX, X.init = function(X = {}) {
                if (void 0 === X.defaultIntegrations && (X.defaultIntegrations = We), void 0 === X.release) {
                    const $ = e();
                    $.SENTRY_RELEASE && $.SENTRY_RELEASE.id && (X.release = $.SENTRY_RELEASE.id)
                }
                void 0 === X.autoSessionTracking && (X.autoSessionTracking = !0), void 0 === X.sendClientReports && (X.sendClientReports = !0);
                const $ = { ...X,
                    stackParser: (l = X.stackParser || K$, Array.isArray(l) ? u(...l) : l),
                    integrations: vX(X),
                    transport: X.transport || (A() ? n$ : I$)
                };
                var l;
                ! function(X, $) {
                    !0 === $.debug && console.warn("[Sentry] Cannot initialize SDK with `debug` option using a non-debug bundle.");
                    var e = uX(),
                        l = e.getScope();
                    l && l.update($.initialScope);
                    var q = new X($);
                    e.bindClient(q)
                }(M$, $), X.autoSessionTracking && function() {
                    if (void 0 === e().document) return;
                    const X = uX();
                    X.captureSession && (ge(X), b("history", (({
                        from: X,
                        to: $
                    }) => {
                        void 0 !== X && X !== $ && ge(uX())
                    })))
                }()
            }, X.lastEventId = function() {
                return uX().lastEventId()
            }, X.makeFetchTransport = n$, X.makeMain = dX, X.makeXHRTransport = I$, X.onLoad = function(X) {
                X()
            }, X.opera10StackLineParser = i$, X.opera11StackLineParser = d$, X.setContext = function(X, $) {
                uX().setContext(X, $)
            }, X.setExtra = function(X, $) {
                uX().setExtra(X, $)
            }, X.setExtras = function(X) {
                uX().setExtras(X)
            }, X.setTag = function(X, $) {
                uX().setTag(X, $)
            }, X.setTags = function(X) {
                uX().setTags(X)
            }, X.setUser = function(X) {
                uX().setUser(X)
            }, X.showReportDialog = function(X = {}, $ = uX()) {
                const l = e();
                if (!l.document) return;
                const {
                    client: q,
                    scope: c
                } = $.getStackTop(), T = X.dsn || q && q.getDsn();
                if (!T) return;
                c && (X.user = { ...c.getUser(),
                    ...X.user
                }), X.eventId || (X.eventId = $.lastEventId());
                const F = l.document.createElement("script");
                F.async = !0, F.src = function(X, $) {
                    var e = n(X),
                        l = `${HX(e)}embed/error-page/`;
                    let q = `dsn=${G(e)}`;
                    for (var c in $)
                        if ("dsn" !== c)
                            if ("user" === c) {
                                var T = $.user;
                                if (!T) continue;
                                T.name && (q += `&name=${encodeURIComponent(T.name)}`), T.email && (q += `&email=${encodeURIComponent(T.email)}`)
                            } else q += `&${encodeURIComponent(c)}=${encodeURIComponent($[c])}`;
                    return `${l}?${q}`
                }(T, X), X.onLoad && (F.onload = X.onLoad);
                const V = l.document.head || l.document.body;
                V && V.appendChild(F)
            }, X.startTransaction = function(X, $) {
                return uX().startTransaction({
                    metadata: {
                        source: "custom"
                    },
                    ...X
                }, $)
            }, X.winjsStackLineParser = z$, X.withScope = pX, X.wrap = function(X) {
                return H$(X)()
            }, X
        }({})
    </script>
    <script>
        (function() {
            "use strict";
            const O = ["Breadcrumbs", "TryCatch"];
            let u = "production";
            const k = window.location.hostname;

            function t(O) {
                if ("string" == typeof O) {
                    const u = O.indexOf("EVOSESSIONID");
                    if (u > -1) return `${O.substr(0,u+10)}=***`
                } else {
                    if (Array.isArray(O)) return O.map(t);
                    "object" == typeof O && O && Object.keys(O).forEach((u => {
                        O[u] = t(O[u])
                    }))
                }
                return O
            }
            /\b(cit)(\d|\b)/.test(k) && (u = "cit"), /\b(uat)(\d|\b)/.test(k) && (u = "uat"), /^([\d\.:]+|[^\.]+)$/.test(k) && (u = "unknown"), /(slim\.evo-test)/.test(k) && (u = "slimdown"), 0 && (u = "development"), null === Sentry || void 0 === Sentry || Sentry.init({
                dsn: {
                    cit: "https://72570d21b08341c19bed61d59607c8435@o36526.ingest.sentry.io/81947",
                    uat: "https://711d62c6f4514adb82d4a81d4d7e546ea@o36526.ingest.sentry.io/81947",
                    unknown: "https://119b2d8d7f7945dcea5636ca07afef0d3@o36526.ingest.sentry.io/81947",
                    development: "https://553a3f48f4d7c4479bbd70ae67cf1a334@o36526.ingest.sentry.io/81947",
                    slimdown: "https://8612b74a2dd94b1dd948b06f40f2010a0@o36526.ingest.sentry.io/81947",
                    production: "https://5fbc2f970bc0d45c89b1fd0506e03697a@sentry.io/81947"
                }[u],
                release: "6.20240808.72721.43530-9cfa25698c",
                environment: u,
                autoSessionTracking: !1,
                sampleRate: .5,
                ignoreErrors: ["InvalidStateError: Cannot resume a context that has been closed", "InvalidStateError: Audio context is going away", "InvalidStateError: Failed to start the audio device", /^NS_ERROR_/, "nativeViewDidAppear", "nativeViewDidDisappear", "cancelLongPress is not a function"],
                denyUrls: [/extensions\//i, /^chrome:\/\//i, /^pptr:\/\//i],
                integrations: u => u.filter((u => !O.includes(u.name))),
                beforeBreadcrumb: function(O) {
                    const u = O.data;
                    return u && "http" === O.type && 200 === u.status_code ? null : O
                },
                beforeSend: function(O) {
                    const u = "undefined";
                    if (O.tags = O.tags || {}, 0) {
                        try {
                            window.console.log("sentry:beforeSend:", {
                                event: O,
                                sentryTriageSession: u
                            })
                        } catch (O) {}
                        if (!u) return null
                    }
                    return u && (O.tags.sentryTriageSession = u), (null === window || void 0 === window ? void 0 : window.EVO_VERBOSE) ? function(O) {
                        const u = t(O),
                            k = JSON.stringify(u),
                            S = k.indexOf("EVOSESSIONID");
                        return S > -1 ? {
                            message: `${k.substr(0,S+13)}***`
                        } : u
                    }(O) : null
                }
            })
        })()
    </script>
    <script>
        window.BUNDLE_MANIFEST = {
            env: "production",
            version: "6.20240808.72721.43530-9cfa25698c",
            publicPath: "/frontend/evo/r2/",
            commonAssets: ["js/vendor.96e3f4a3.js", "styles/commons.1f9e6d87.css", "js/commons.1f9e6d87.js", "js/commons.wrapped.d62acb3a.js", "styles/commons.rng.847976cd.css", "js/commons.rng.847976cd.js"],
            apps: {
                abstractGame: {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    audioLibrary: "legacy",
                    adaptive: "evo-game-bootstrap-[live]",
                    assets: [0, 1, 2, "styles/abstractga.d31452e3.css", "js/abstractga.d31452e3.js"]
                },
                andarbahar: {
                    nativeBundle: "evo_live_all",
                    title: "Andar Bahar",
                    loaderExpectedResourceCount: 13,
                    localization: "andarbahar",
                    audioLibrary: "legacy",
                    desktop: "andarBahar.desktop",
                    mobile: "andarBahar.mobile",
                    assets: [0, 1, 2, "styles/andarbahar.71f5a289.css", "js/andarbahar.71f5a289.js"]
                },
                bacbo: {
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    localization: "bacbo",
                    nativeBundle: "evo_live_all",
                    title: "BacBo",
                    desktop: "bacbo.desktop",
                    mobile: "bacbo.mobile",
                    assets: [0, 1, 2, "styles/bacbo.9b6935d3.css", "js/bacbo.9b6935d3.js"]
                },
                "baccarat.eight": {
                    title: "Baccarat 8",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-eight",
                    adaptive: "baccarat.eight",
                    assets: [0, 1, 2, "styles/baccarat.eight.31dcaa42.css", "js/baccarat.eight.31dcaa42.js"]
                },
                "baccarat.goldenWealth": {
                    title: "Golden Wealth Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 33,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-goldenwealth",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.goldenWealth",
                    assets: [0, 1, 2, "styles/baccarat.goldenweal.6357b9a8.css", "js/baccarat.goldenweal.6357b9a8.js"]
                },
                "baccarat.multiplay": {
                    title: "Baccarat Multiplay V2",
                    ignoreVideo: !0,
                    localization: "baccarat",
                    loaderExpectedResourceCount: 11,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "baccarat.multiplay.v2",
                    assets: [0, 1, 2, "styles/baccarat.multiplay.5950f661.css", "js/baccarat.multiplay.5950f661.js"]
                },
                "baccarat.peek": {
                    title: "Peek Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.peek",
                    assets: [0, 1, 2, "styles/baccarat.peek.ea16f78c.css", "js/baccarat.peek.ea16f78c.js"]
                },
                "baccarat.prosperity": {
                    title: "Prosperity Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-prosperity",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.prosperity",
                    assets: [0, 1, 2, "styles/baccarat.prosperity.2a33fd5c.css", "js/baccarat.prosperity.2a33fd5c.js"]
                },
                "baccarat.v1.lightning": {
                    title: "Lightning Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-lightning",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.lightning",
                    assets: [0, 1, 2, "styles/baccarat.v1.lightning.8b86ce12.css", "js/baccarat.v1.lightning.8b86ce12.js"]
                },
                "baccarat.v1.regular": {
                    title: "Regular Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 18,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.regular",
                    assets: [0, 1, 2, "styles/baccarat.v1.regular.558fa527.css", "js/baccarat.v1.regular.558fa527.js"]
                },
                "baccarat.xtreme": {
                    title: "XXXtreme Lightning Baccarat",
                    localization: "baccarat",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "baccarat-xtreme",
                    nativeBundle: "evo_live_all",
                    adaptive: "baccarat.xtreme",
                    assets: [0, 1, 2, "styles/baccarat.xtreme.903bbd8c.css", "js/baccarat.xtreme.903bbd8c.js"]
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
                    assets: [0, 1, 2, "styles/baccaratmu.b04a1453.css", "js/baccaratmu.b04a1453.js"]
                },
                balloonrace: {
                    localization: "balloonrace",
                    audioLibrary: "ecas",
                    audioPackage: "balloonrace",
                    title: "Balloon Race",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 27,
                    adaptive: "balloonrace",
                    assets: [0, 1, 2, "styles/balloonrac.7ba09c8e.css", "js/balloonrac.7ba09c8e.js"]
                },
                "blackjack.v3": {
                    localization: "blackjack",
                    loaderExpectedResourceCount: 17,
                    nativeBundle: "evo_live_all",
                    title: "Classic Blackjack, Speed Blackjack",
                    audioLibrary: "legacy",
                    desktop: "blackjack.desktop",
                    mobile: "blackjack.mobile",
                    assets: [0, 1, 2, "styles/blackjack.v3.88d18985.css", "js/blackjack.v3.88d18985.js"]
                },
                cashorcrash: {
                    localization: "cashorcrash",
                    nativeBundle: "evo_live_all",
                    title: "Cash or Crash",
                    audioLibrary: "legacy",
                    desktop: "cashorcrash.desktop",
                    mobile: "cashorcrash.mobile",
                    assets: [0, 1, 2, "styles/cashorcras.a207facb.css", "js/cashorcras.a207facb.js"]
                },
                compliance: {
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Compliance",
                    localization: "common",
                    audioLibrary: "legacy",
                    adaptive: "compliance",
                    assets: [0, 1, 2, "js/compliance.da4cc571.js"]
                },
                craps: {
                    loaderExpectedResourceCount: 20,
                    localization: "craps",
                    nativeBundle: "evo_live_all",
                    title: "Craps",
                    audioLibrary: "legacy",
                    desktop: "craps.desktop",
                    mobile: "craps.mobile",
                    assets: [0, 1, 2, "styles/craps.3009eadd.css", "js/craps.3009eadd.js"]
                },
                crazycoinflip: {
                    nativeBundle: "evo_live_all",
                    title: "Crazy Coin Flip",
                    localization: "crazycoinflip",
                    audioLibrary: "ecas",
                    audioPackage: "crazycoinflip",
                    desktop: "crazyCoinFlip.desktop",
                    mobile: "crazyCoinFlip.mobile",
                    assets: [0, 1, 2, "styles/crazycoinf.2d0a1f8b.css", "js/crazycoinf.2d0a1f8b.js"]
                },
                crazytime: {
                    localization: "crazytime",
                    nativeBundle: "evo_live_all",
                    title: "Crazy Time",
                    audioLibrary: "ecas",
                    audioPackage: "crazytime",
                    desktop: "crazyTime.desktop",
                    mobile: "crazyTime.mobile",
                    assets: [0, 1, 2, "styles/crazytime.08248968.css", "js/crazytime.08248968.js"]
                },
                csp: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Caribbean Stud Poker",
                    loaderExpectedResourceCount: 10,
                    adaptive: "poker.caribbean-stud-v2",
                    assets: [0, 1, 2, "styles/csp.140ab020.css", "js/csp.140ab020.js"]
                },
                customAppExample: {
                    ignoreVideo: !0,
                    audioLibrary: "legacy",
                    adaptive: "custom-app-example",
                    assets: [1, 2, "js/customappe.28e4b7a9.js"]
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
                    assets: [0, 1, 2, "styles/deadalive.v0.06c3719f.css", "js/deadalive.v0.06c3719f.js"]
                },
                dealnodeal: {
                    loaderExpectedResourceCount: 38,
                    localization: "dealnodeal",
                    nativeBundle: "evo_live_all",
                    title: "Deal Or No Deal",
                    audioLibrary: "legacy",
                    desktop: "dealnodeal.desktop",
                    mobile: "dealnodeal.mobile",
                    assets: [0, 1, 2, "styles/dealnodeal.dadb68e6.css", "js/dealnodeal.dadb68e6.js"]
                },
                dhp: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Double Hand Casino Hold'em",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.double-hand-poker",
                    assets: [0, 1, 2, "styles/dhp.95dfce79.css", "js/dhp.95dfce79.js"]
                },
                "dragontiger.lightning": {
                    title: "Lightning Dragon Tiger",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "dragontiger-lightning",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.lightning",
                    assets: [0, 1, 2, "styles/dragontige.lightning.3dbc1c7e.css", "js/dragontige.lightning.3dbc1c7e.js"]
                },
                "dragontiger.regular": {
                    title: "Dragon Tiger",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.regular",
                    assets: [0, 1, 2, "styles/dragontige.regular.fd1dbf74.css", "js/dragontige.regular.fd1dbf74.js"]
                },
                "dragontiger.topCard": {
                    title: "Top Card",
                    localization: "dragontiger",
                    loaderExpectedResourceCount: 19,
                    audioLibrary: "ecas",
                    audioPackage: "top-card",
                    nativeBundle: "evo_live_all",
                    adaptive: "dragonTiger.topCard",
                    assets: [0, 1, 2, "styles/dragontige.topcard.2addb17b.css", "js/dragontige.topcard.2addb17b.js"]
                },
                "evo-game-bootstrap.[agslot]": {
                    title: "evo-game-bootstrap",
                    localization: "ne-elkhunter",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "elkhunter",
                    adaptive: "evo-game-bootstrap-[agslot]",
                    assets: [0, 1, 2, "styles/evogameboo.agslot.a28ba105.css", "js/evogameboo.agslot.a28ba105.js"]
                },
                "evo-game-bootstrap.[live]": {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[live]",
                    assets: [0, 1, 2, "styles/abstractga.d31452e3.css", "js/abstractga.d31452e3.js"]
                },
                "evo-game-bootstrap.[rng]": {
                    title: "evo-game-bootstrap",
                    localization: "common",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "evo-game-bootstrap-[rng]",
                    assets: [0, 1, 2, "styles/evogameboo.rng.64c76d7d.css", "js/evogameboo.rng.64c76d7d.js"]
                },
                "evo-rng-bacbo": {
                    title: "evo-rng-bacbo",
                    localization: "rng-bacbo",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    loaderExpectedResourceCount: 0,
                    adaptive: "evo-rng-bacbo",
                    assets: [0, 1, 2, "styles/evorngbacb.65509342.css", "js/evorngbacb.65509342.js"]
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
                    assets: [0, 1, 2, 3, "styles/ezugi.lobby.af1b9b91.css", "js/ezugi.lobby.af1b9b91.js"]
                },
                fantan: {
                    loaderExpectedResourceCount: 19,
                    localization: "fantan",
                    nativeBundle: "evo_live_all",
                    title: "Fan Tan",
                    audioLibrary: "legacy",
                    desktop: "fanTan.desktop",
                    mobile: "fanTan.mobile",
                    assets: [0, 1, 2, "styles/fantan.d18882d5.css", "js/fantan.d18882d5.js"]
                },
                funkytime: {
                    nativeBundle: "evo_live_all",
                    title: "Funky Time",
                    localization: "funkytime",
                    audioLibrary: "ecas",
                    audioPackage: "funkytime",
                    desktop: "funkyTime.desktop",
                    mobile: "funkyTime.mobile",
                    assets: [0, 1, 2, "styles/funkytime.e8bbe6b3.css", "js/funkytime.e8bbe6b3.js"]
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
                    assets: [0, 1, 2, "styles/gonzotreas.88be02d9.css", "js/gonzotreas.88be02d9.js"]
                },
                holdem: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Casino Hold'em",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.casino-holdem-v2",
                    assets: [0, 1, 2, "styles/holdem.72a55d0a.css", "js/holdem.72a55d0a.js"]
                },
                lightningbacbo: {
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    localization: "bacbo",
                    title: "Lightning BacBo",
                    adaptive: "bacbo.lightning",
                    assets: [0, 1, 2, "styles/lightningb.a2535eb0.css", "js/lightningb.a2535eb0.js"]
                },
                lightningball: {
                    localization: "lightninglotto",
                    audioLibrary: "ecas",
                    audioPackage: "lightningball",
                    title: "Lightning Ball",
                    nativeBundle: "evo_live_all",
                    desktop: "lightningBall.desktop",
                    mobile: "lightningBall.mobile",
                    assets: [0, 1, 2, "styles/lightningb.418cc97e.css", "js/lightningb.418cc97e.js"]
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
                    assets: [0, 1, 2, "styles/lightningd.573692b8.css", "js/lightningd.573692b8.js"]
                },
                lightninglotto: {
                    localization: "lightninglotto",
                    audioLibrary: "ecas",
                    audioPackage: "lightninglotto",
                    title: "Lightning Lotto",
                    nativeBundle: "evo_live_all",
                    desktop: "lightningLotto.desktop",
                    mobile: "lightningLotto.mobile",
                    assets: [0, 1, 2, "styles/lightningl.19d7e1fb.css", "js/lightningl.19d7e1fb.js"]
                },
                "lightningstorm.V0": {
                    nativeBundle: "evo_live_all",
                    title: "Lightning Storm",
                    localization: "lightningstorm",
                    audioLibrary: "ecas",
                    audioPackage: "lightningstorm",
                    desktop: "lightningStorm.desktop",
                    mobile: "lightningStorm.mobile",
                    assets: [0, 1, 2, "styles/lightnings.v0.0dbcdd75.css", "js/lightnings.v0.0dbcdd75.js"]
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
                    assets: [0, 1, 2, 3, "styles/live.ezugi.d8a81d88.css", "js/live.ezugi.d8a81d88.js"]
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
                    assets: [0, 1, 2, "styles/liveslotde.fc0fb794.css", "js/liveslotde.fc0fb794.js"]
                },
                livespins: {
                    localization: "common",
                    title: "Livespins OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "livespins",
                    assets: [0, 1, 2, 3, "styles/livespins.048edb18.css", "js/livespins.048edb18.js"]
                },
                lobby: {
                    localization: "smartlobby",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Lobby",
                    loaderExpectedResourceCount: 11,
                    audioLibrary: "legacy",
                    adaptive: "lobby",
                    assets: [0, 1, 2, "styles/lobby.947347a5.css", "js/lobby.947347a5.js"]
                },
                "lobby-snippet": {
                    localization: "smartlobby",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "Lobby Snippet",
                    audioLibrary: "legacy",
                    adaptive: "lobby-snippet",
                    assets: [0, 1, 2, "styles/lobbysnipp.0525d625.css", "js/lobbysnipp.0525d625.js"]
                },
                ls2: {
                    localization: "ls2",
                    audioLibrary: "ecas",
                    title: "Crazy Pachinko",
                    nativeBundle: "evo_live_all",
                    audioPackage: "crazypachinko",
                    desktop: "ls2.desktop",
                    mobile: "ls2.mobile",
                    assets: [0, 1, 2, "styles/ls2.8b93d96b.css", "js/ls2.8b93d96b.js"]
                },
                ls3: {
                    nativeBundle: "evo_live_all",
                    title: "Extra Chilli Epic Spins",
                    loaderExpectedResourceCount: 14,
                    localization: "ls3",
                    audioLibrary: "legacy",
                    desktop: "ls3.desktop",
                    mobile: "ls3.mobile",
                    assets: [0, 1, 2, "styles/ls3.24f75eac.css", "js/ls3.24f75eac.js"]
                },
                marblerace: {
                    title: "Marble Race",
                    localization: "marblerace",
                    adaptive: "marblerace",
                    assets: [0, 1, 2, "styles/marblerace.8790b0d3.css", "js/marblerace.8790b0d3.js"]
                },
                megaball: {
                    loaderExpectedResourceCount: 31,
                    localization: "megaball",
                    nativeBundle: "evo_live_all",
                    title: "Mega Ball",
                    audioLibrary: "ecas",
                    audioPackage: "megaball",
                    desktop: "megaball.desktop",
                    mobile: "megaball.mobile",
                    assets: [0, 1, 2, "styles/megaball.49fa1667.css", "js/megaball.49fa1667.js"]
                },
                moneywheel: {
                    localization: "money_wheel",
                    nativeBundle: "evo_live_all",
                    title: "Dream Catcher, Imperial Quest",
                    audioLibrary: "ecas",
                    audioPackage: "moneywheel",
                    desktop: "moneywheel.desktop",
                    mobile: "moneywheel.mobile",
                    assets: [0, 1, 2, "styles/moneywheel.ba80ebac.css", "js/moneywheel.ba80ebac.js"]
                },
                monopoly: {
                    localization: "monopoly",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly",
                    audioLibrary: "ecas",
                    audioPackage: "monopoly",
                    desktop: "monopoly.desktop",
                    mobile: "monopoly.mobile",
                    assets: [0, 1, 2, "styles/monopoly.ce4c8de9.css", "js/monopoly.ce4c8de9.js"]
                },
                "monopoly.v2": {
                    localization: "monopoly",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly Mobx",
                    audioLibrary: "ecas",
                    audioPackage: "monopoly",
                    desktop: "monopoly.desktop.v2",
                    mobile: "monopoly.mobile.v2",
                    assets: [0, 1, 2, "styles/monopoly.v2.0757937f.css", "js/monopoly.v2.0757937f.js"]
                },
                monopolybigballer: {
                    localization: "monopolybigballer",
                    nativeBundle: "evo_live_all",
                    title: "Monopoly Big Baller",
                    audioLibrary: "ecas",
                    audioPackage: "monopoly-bigballer",
                    desktop: "monopolybigballer.desktop",
                    mobile: "monopolybigballer.mobile",
                    assets: [0, 1, 2, "styles/monopolybi.7c63a028.css", "js/monopolybi.7c63a028.js"]
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
                    assets: [0, 1, 2, "styles/nebigbangb.3312b653.css", "js/nebigbangb.3312b653.js"]
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
                    assets: [0, 1, 2, "styles/nebigmoney.ef21072c.css", "js/nebigmoney.ef21072c.js"]
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
                    assets: [0, 1, 2, "styles/nebuckshot.823f1f67.css", "js/nebuckshot.823f1f67.js"]
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
                    assets: [0, 1, 2, "styles/necandies1.45a2ff23.css", "js/necandies1.45a2ff23.js"]
                },
                "ne-corneliusmhm": {
                    title: "ne-corneliusmhm",
                    localization: "ne-corneliusmilkhuntermegaways",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "corneliusmhm",
                    loaderExpectedResourceCount: 126,
                    adaptive: "ne-corneliusmhm",
                    assets: [0, 1, 2, "styles/necorneliu.f884e2ac.css", "js/necorneliu.f884e2ac.js"]
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
                    assets: [0, 1, 2, "styles/necrabtrap.56b3902d.css", "js/necrabtrap.56b3902d.js"]
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
                    assets: [0, 1, 2, "styles/necursedtr.578f199e.css", "js/necursedtr.578f199e.js"]
                },
                "ne-dazzleme": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "magicbox",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-goldenrealms",
                    title: "Dazzle Me",
                    adaptive: "ne-dazzleme",
                    assets: [0, 1, 2, "styles/nedazzleme.9aa330e8.css", "js/nedazzleme.9aa330e8.js"]
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
                    assets: [0, 1, 2, "styles/neelkhunte.6c6c3749.css", "js/neelkhunte.6c6c3749.js"]
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
                    assets: [0, 1, 2, "styles/nefinncand.c91570e1.css", "js/nefinncand.c91570e1.js"]
                },
                "ne-fruitshop": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "fruitshop",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-slots-common",
                    adaptive: "ne-fruitshop",
                    assets: [0, 1, 2, "styles/nefruitsho.80626b42.css", "js/nefruitsho.80626b42.js"]
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
                    assets: [0, 1, 2, "styles/negoldenwh.1123f37c.css", "js/negoldenwh.1123f37c.js"]
                },
                "ne-goldenegginvaders": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "goldenchicken",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-goldenegginvaders",
                    adaptive: "ne-goldenegginvaders",
                    assets: [0, 1, 2, "styles/negoldeneg.35c03258.css", "js/negoldeneg.35c03258.js"]
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
                    assets: [0, 1, 2, "styles/negoldenre.30b773a3.css", "js/negoldenre.30b773a3.js"]
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
                    assets: [0, 1, 2, "styles/nejackandb.79e9b389.css", "js/nejackandb.79e9b389.js"]
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
                    assets: [0, 1, 2, "styles/nejackhamm.d30bb457.css", "js/nejackhamm.d30bb457.js"]
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
                    assets: [0, 1, 2, "styles/nejunglesp.1cd89137.css", "js/nejunglesp.1cd89137.js"]
                },
                "ne-kingway": {
                    title: "ne-kingway",
                    localization: "ne-junglespiritmegaways",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "junglespiritmw",
                    loaderExpectedResourceCount: 106,
                    adaptive: "ne-kingway",
                    assets: [0, 1, 2, "styles/nekingway.dd13dc83.css", "js/nekingway.dd13dc83.js"]
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
                    assets: [0, 1, 2, "styles/nelocknpop.83b04e88.css", "js/nelocknpop.83b04e88.js"]
                },
                "ne-rabidrandy": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rabidrandy",
                    loaderExpectedResourceCount: 80,
                    localization: "ne-rabidrandy",
                    adaptive: "ne-rabidrandy",
                    assets: [0, 1, 2, "styles/nerabidran.e4196990.css", "js/nerabidran.e4196990.js"]
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
                    assets: [0, 1, 2, "styles/nerage.48e316e3.css", "js/nerage.48e316e3.js"]
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
                    assets: [0, 1, 2, "styles/neroyalnut.c67638c8.css", "js/neroyalnut.c67638c8.js"]
                },
                "ne-sb-brandable": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    title: "starburst-brandable",
                    audioPackage: "starburst-brandable",
                    loaderExpectedResourceCount: 41,
                    localization: "ne-starburst-brandable",
                    adaptive: "ne-starburst-brandable",
                    assets: [0, 1, 2, "styles/nesbbranda.2fe0eec2.css", "js/nesbbranda.2fe0eec2.js"]
                },
                "ne-spacewarsmw": {
                    title: "ne-spacewarsmw",
                    localization: "ne-spacewarsmw",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "spacewarsmw",
                    loaderExpectedResourceCount: 133,
                    adaptive: "ne-spacewarsmw",
                    assets: [0, 1, 2, "styles/nespacewar.7c8410ec.css", "js/nespacewar.7c8410ec.js"]
                },
                "ne-starburst-galaxy": {
                    title: "ne-starburst-galaxy",
                    localization: "ne-starburstgalaxy",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "starburst-galaxy",
                    loaderExpectedResourceCount: 158,
                    adaptive: "ne-starburst-galaxy",
                    assets: [0, 1, 2, "styles/nestarburs.f3adc9a6.css", "js/nestarburs.f3adc9a6.js"]
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
                    assets: [0, 1, 2, "styles/nethrillto.fc9cee25.css", "js/nethrillto.fc9cee25.js"]
                },
                "ne-twin-spin": {
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "twinspin",
                    loaderExpectedResourceCount: 76,
                    localization: "ne-elkhunter",
                    title: "Twin Spin",
                    adaptive: "ne-twin-spin",
                    assets: [0, 1, 2, "styles/netwinspin.6cd6700e.css", "js/netwinspin.6cd6700e.js"]
                },
                "ne-twister": {
                    title: "Twister",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "twister",
                    loaderExpectedResourceCount: 133,
                    localization: "ne-twister",
                    adaptive: "ne-twister",
                    assets: [0, 1, 2, "styles/netwister.01cb7255.css", "js/netwister.01cb7255.js"]
                },
                "powerball.v0": {
                    localization: "powerball",
                    title: "Evo PowerBall",
                    audioLibrary: "ecas",
                    audioPackage: "powerball",
                    nativeBundle: "evo_live_all",
                    adaptive: "powerball.adaptive",
                    assets: [0, 1, 2, "styles/powerball.v0.43d3cbdd.css", "js/powerball.v0.43d3cbdd.js"]
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
                    assets: [0, 1, 2, "styles/promotions.f0d88c6b.css", "js/promotions.f0d88c6b.js"]
                },
                "reserved-table": {
                    localization: "common",
                    ignoreVideo: !0,
                    nativeBundle: "*",
                    title: "",
                    audioLibrary: "legacy",
                    adaptive: "reserved-table",
                    assets: [0, 1, 2, "styles/reservedta.4ab6318f.css", "js/reservedta.4ab6318f.js"]
                },
                "rng-baccarat.lightning": {
                    title: "First Person Lightning Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "ecas",
                    audioPackage: "rng-baccarat-lightning",
                    adaptive: "rng-baccarat.lightning",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.lightning.c7e52c8a.css", "js/rngbaccara.lightning.c7e52c8a.js"]
                },
                "rng-baccarat.prosperity": {
                    title: "First Person Prosperity Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "ecas",
                    audioPackage: "rng-baccarat-prosperity",
                    adaptive: "rng-baccarat.prosperity",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.prosperity.e60a6185.css", "js/rngbaccara.prosperity.e60a6185.js"]
                },
                "rng-baccarat.regular": {
                    title: "Regular First Person Baccarat",
                    ignoreVideo: !0,
                    localization: "rng-baccarat",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "ecas",
                    audioPackage: "rng-baccarat",
                    nativeBundle: "evo_rng_baccarat_v2",
                    adaptive: "rng-baccarat.regular",
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.regular.20eedb7c.css", "js/rngbaccara.regular.20eedb7c.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngbaccara.v0.b6100f10.css", "js/rngbaccara.v0.b6100f10.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngblackja.horizon.9a9d406c.css", "js/rngblackja.horizon.9a9d406c.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngcraps.d86bf9d2.css", "js/rngcraps.d86bf9d2.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngdealnod.dc2e091c.css", "js/rngdealnod.dc2e091c.js"]
                },
                "rng-dragontiger.v0": {
                    nativeBundle: "evo_rng_topcard",
                    title: "First Person Top Card, First Person Dragon Tiger",
                    localization: "rng-dragontiger",
                    loaderExpectedResourceCount: 80,
                    audioLibrary: "legacy",
                    desktop: "rng-dragontiger.desktop",
                    mobile: "rng-dragontiger.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngdragont.v0.59a5997f.css", "js/rngdragont.v0.59a5997f.js"]
                },
                "rng-hilo.v0": {
                    localization: "rng-hilo",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rng-hilo",
                    title: "First Person HiLo",
                    nativeBundle: "evo_rng_hilo",
                    loaderExpectedResourceCount: 49,
                    desktop: "rng-hilo.desktop",
                    mobile: "rng-hilo.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rnghilo.v0.70cde1ae.css", "js/rnghilo.v0.70cde1ae.js"]
                },
                "rng-lightninglotto": {
                    localization: "lightninglotto",
                    ignoreVideo: !0,
                    audioLibrary: "ecas",
                    audioPackage: "rng-lightninglotto",
                    title: "First Person Lightning Lotto",
                    nativeBundle: "evo_rng_lightninglotto",
                    adaptive: "rng-lightningLotto",
                    assets: [0, 1, 2, 4, 5, "styles/rnglightni.e6fc1d3b.css", "js/rnglightni.e6fc1d3b.js"]
                },
                "rng-megaball": {
                    ignoreVideo: !0,
                    loaderExpectedResourceCount: 45,
                    localization: "rng-megaball",
                    nativeBundle: "evo_rng_megaball",
                    title: "First Person Mega Ball",
                    audioLibrary: "ecas",
                    audioPackage: "rng-megaball",
                    desktop: "rng-megaball.desktop",
                    mobile: "rng-megaball.mobile",
                    assets: [0, 1, 2, 4, 5, "styles/rngmegabal.209d5133.css", "js/rngmegabal.209d5133.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngmoneywh.horizon.c74f43ad.css", "js/rngmoneywh.horizon.c74f43ad.js"]
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
                    assets: [0, 1, 2, 4, 5, "styles/rngroulett.horizon.preview.07cadbc6.css", "js/rngroulett.horizon.preview.07cadbc6.js"]
                },
                "rng-sicbo": {
                    audioLibrary: "ecas",
                    audioPackage: "rng-sicbo",
                    loaderExpectedResourceCount: 51,
                    localization: "rng-sicbo",
                    nativeBundle: "evo_rng_sicbo",
                    title: "First Person Super Sic Bo",
                    adaptive: "rng.sicbo",
                    assets: [0, 1, 2, "styles/rngsicbo.0b4eb7ab.css", "js/rngsicbo.0b4eb7ab.js"]
                },
                "rng-videopoker.v1": {
                    localization: "poker",
                    nativeBundle: "evo_rng_videopoker",
                    audioLibrary: "ecas",
                    audioPackage: "rng-videopoker",
                    title: "First Person Video Poker",
                    loaderExpectedResourceCount: 73,
                    adaptive: "poker.rng-video-poker",
                    assets: [0, 1, 2, "styles/rngvideopo.v1.d8e6f328.css", "js/rngvideopo.v1.d8e6f328.js"]
                },
                roulette: {
                    localization: "roulette",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 23,
                    title: "Roulette, Auto-Roulette, Speed Roulette, American Roulette, Lightning Roulette, Gold Vault Roulette, Instant Roulette, XXXtreme Lightning Roulette, Immersive Roulette, Speed Auto-Roulette, Double Ball Roulette, VIP Roulette, Salon Privé Roulette, French Roulette Gold, Auto Lightning Roulette, Red Door Roulette",
                    audioLibrary: "legacy",
                    desktop: "roulette.desktop",
                    mobile: "roulette.mobile",
                    assets: [0, 1, 2, "styles/roulette.4d27e1ca.css", "js/roulette.4d27e1ca.js"]
                },
                "roulette.bolt.european": {
                    title: "Bolt European Roulette",
                    localization: "roulette-new",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "entry",
                    assets: [0, 1, 2, "styles/roulette.bolt.european.d142d0d0.css", "js/roulette.bolt.european.d142d0d0.js"]
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
                    assets: [0, 1, 2, "styles/roulette.4d27e1ca.css", "js/roulette.4d27e1ca.js"]
                },
                "roulette.regular.european": {
                    title: "Regular European Roulette",
                    localization: "roulette-new",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "entry",
                    assets: [0, 1, 2, "styles/roulette.regular.european.533ebdd8.css", "js/roulette.regular.european.533ebdd8.js"]
                },
                "scalableblackjack.v2": {
                    localization: "blackjack",
                    nativeBundle: "evo_live_all",
                    title: "Scalable Blackjack, Free Bet Blackjack, Power Blackjack, Lightning Blackjack",
                    loaderExpectedResourceCount: 21,
                    audioLibrary: "legacy",
                    desktop: "blackjack.scalable.desktop",
                    mobile: "blackjack.scalable.mobile",
                    assets: [0, 1, 2, "styles/scalablebl.v2.57faef34.css", "js/scalablebl.v2.57faef34.js"]
                },
                scalableblackjack: {
                    localization: "blackjack",
                    nativeBundle: "evo_live_all",
                    title: "Scalable Blackjack, Free Bet Blackjack, Power Blackjack, Lightning Blackjack",
                    loaderExpectedResourceCount: 21,
                    audioLibrary: "legacy",
                    desktop: "blackjack.scalable.desktop",
                    mobile: "blackjack.scalable.mobile",
                    assets: [0, 1, 2, "styles/scalablebl.v2.57faef34.css", "js/scalablebl.v2.57faef34.js"]
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
                    assets: [0, 1, 2, "styles/sicbo.71870aa7.css", "js/sicbo.71870aa7.js"]
                },
                "sicbo.lightning": {
                    audioLibrary: "ecas",
                    audioPackage: "sicbo-lightning",
                    loaderExpectedResourceCount: 31,
                    localization: "sicbo",
                    nativeBundle: "evo_live_all",
                    title: "Lightning Sic Bo",
                    desktop: "sicbo.lightning.desktop",
                    mobile: "sicbo.lightning.mobile",
                    assets: [0, 1, 2, "styles/sicbo.lightning.350a440f.css", "js/sicbo.lightning.350a440f.js"]
                },
                sidebetcity: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "sidebetcity",
                    title: "Side Bet City",
                    loaderExpectedResourceCount: 10,
                    adaptive: "poker.side-bet-city",
                    assets: [0, 1, 2, "styles/sidebetcit.7115ed1a.css", "js/sidebetcit.7115ed1a.js"]
                },
                "slots.btg": {
                    localization: "common",
                    nativeBundle: "wrapped_btg",
                    title: "Big Time Gaming OSS wrapper",
                    ignoreVideo: !0,
                    audioLibrary: "legacy",
                    adaptive: "slots.btg",
                    assets: [0, 1, 2, 3, "styles/slots.btg.9de66573.css", "js/slots.btg.9de66573.js"]
                },
                "slots.ne": {
                    localization: "ne-slots-portfolio",
                    nativeBundle: "wrapped_ne",
                    title: "Netent OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "slots.ne",
                    assets: [0, 1, 2, 3, "styles/slots.ne.6284e3ea.css", "js/slots.ne.6284e3ea.js"]
                },
                "slots.ne.horizon": {
                    localization: "ne-slots-portfolio",
                    nativeBundle: "wrapped_ne",
                    title: "Netent OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "slots.ne.horizon",
                    assets: [0, 1, 2, 3, "styles/slots.ne.horizon.e163d0db.css", "js/slots.ne.horizon.e163d0db.js"]
                },
                "slots.nlc": {
                    localization: "common",
                    nativeBundle: "wrapped_nlc",
                    title: "No Limit City OSS wrapper",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "slots.nlc",
                    assets: [0, 1, 2, 3, "styles/slots.nlc.06343038.css", "js/slots.nlc.06343038.js"]
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
                    assets: [0, 1, 2, 3, "styles/slots.rt.1fb37c0e.css", "js/slots.rt.1fb37c0e.js"]
                },
                stockmarket: {
                    title: "Stock Market",
                    localization: "stockmarket",
                    audioLibrary: "ecas",
                    audioPackage: "stockmarket",
                    nativeBundle: "evo_live_all",
                    loaderExpectedResourceCount: 33,
                    adaptive: "stockmarket",
                    assets: [0, 1, 2, "styles/stockmarke.82212a6e.css", "js/stockmarke.82212a6e.js"]
                },
                "tcp.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Three Card Poker, Triple Card Poker",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.ca8bd863.css", "js/tcp.v2.ca8bd863.js"]
                },
                "trp.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Three Card Poker, Triple Card Poker",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.ca8bd863.css", "js/tcp.v2.ca8bd863.js"]
                },
                teenpatti: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "teenpatti",
                    title: "Teen Patti",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.three-card-v2",
                    assets: [0, 1, 2, "styles/tcp.v2.ca8bd863.css", "js/tcp.v2.ca8bd863.js"]
                },
                testgame: {
                    title: "testgame",
                    localization: "common",
                    audioLibrary: "ecas",
                    audioPackage: "common",
                    adaptive: "testgame",
                    assets: [0, 1, 2, "styles/testgame.7f82b3e7.css", "js/testgame.7f82b3e7.js"]
                },
                "thb.v2": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Texas Hold'em Bonus Poker",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.texas-bonus-v2",
                    assets: [0, 1, 2, "styles/thb.v2.a509c901.css", "js/thb.v2.a509c901.js"]
                },
                topdice: {
                    audioLibrary: "ecas",
                    audioPackage: "topdice",
                    localization: "topdice",
                    nativeBundle: "evo_live_all",
                    title: "Top Dice",
                    desktop: "topdice.desktop",
                    mobile: "topdice.mobile",
                    assets: [0, 1, 2, "styles/topdice.ca6b57c4.css", "js/topdice.ca6b57c4.js"]
                },
                uprising: {
                    localization: "uprising",
                    title: "Uprising",
                    audioLibrary: "ecas",
                    audioPackage: "uprising",
                    desktop: "uprising.desktop",
                    mobile: "uprising.mobile",
                    assets: [0, 1, 2, "styles/uprising.e72a6c21.css", "js/uprising.e72a6c21.js"]
                },
                uth: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Ultimate Texas Hold'em, Extreme Texas Hold'em",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.ultimate-texas",
                    assets: [0, 1, 2, "styles/uth.ec35d1a9.css", "js/uth.ec35d1a9.js"]
                },
                eth: {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "poker",
                    title: "Ultimate Texas Hold'em, Extreme Texas Hold'em",
                    loaderExpectedResourceCount: 11,
                    adaptive: "poker.ultimate-texas",
                    assets: [0, 1, 2, "styles/uth.ec35d1a9.css", "js/uth.ec35d1a9.js"]
                },
                valkyrie: {
                    localization: "common",
                    ignoreVideo: !0,
                    loaderResourcesCountingMode: "non-recursive",
                    audioLibrary: "legacy",
                    adaptive: "valkyrie",
                    assets: [0, 1, 2, 3, "styles/valkyrie.f82c03d4.css", "js/valkyrie.f82c03d4.js"]
                },
                "videopoker.v1": {
                    localization: "poker",
                    nativeBundle: "evo_live_all",
                    audioLibrary: "ecas",
                    audioPackage: "videopoker",
                    title: "Video Poker",
                    loaderExpectedResourceCount: 12,
                    adaptive: "poker.video-poker",
                    assets: [0, 1, 2, "styles/videopoker.v1.17cb34f4.css", "js/videopoker.v1.17cb34f4.js"]
                }
            }
        }
    </script>
    <script>
        "use strict";
        (() => {
            var o, m, h, t, B = {
                    117592: (o, m, h) => {
                        h.d(m, {
                            $: () => t,
                            Z: () => B
                        });
                        class t extends Error {
                            constructor(o, m) {
                                super(`FetchUrl "${o}" exception: ${m instanceof Error?m:`${m.status} ${m.statusText}`}`), this.url = o, m instanceof Response ? (this.isOpaqueRedirect = "opaqueredirect" === m.type, this.status = m.status) : (this.isOpaqueRedirect = !1, this.status = null)
                            }
                        }

                        function B(o, m) {
                            console.error(o, m);
                            const h = window.EVO_LOADER;
                            if (h) {
                                let B;
                                if (m instanceof t) B = `HTTP code ${m.isOpaqueRedirect?"30x":m.status}`;
                                else if (m instanceof Response) B = `HTTP code ${"opaqueredirect"===m.type?"30x":m.status}`;
                                else if (m instanceof Error) B = m.stack;
                                else try {
                                    B = JSON.stringify(m) || "undefined"
                                } catch (o) {
                                    B = o ? o.toString() : ""
                                }
                                h.sendLog("CLIENT_ERROR_LOADING_STATIC_RESOURCE", {
                                    failedURL: o,
                                    error: B
                                })
                            }
                        }
                    },
                    387565: (o, m, h) => {
                        h.d(m, {
                            EL: () => y,
                            ah: () => i,
                            gE: () => B,
                            mN: () => P,
                            oj: () => w,
                            vV: () => J,
                            yW: () => E
                        });
                        class t extends Error {
                            constructor(o, m, {
                                extra: h,
                                localizedMessage: t,
                                sendToSentry: B
                            } = {}) {
                                super(o), this.type = m, this.name = m, this.sendToSentry = !1 !== B, this.localizedMessage = t, h && (this.extra = h)
                            }
                        }
                        class B extends t {
                            constructor(o, m = {}) {
                                super(o, "Generic", m)
                            }
                        }
                        class P extends t {
                            constructor(o, {
                                doNotRetry: m = !1,
                                localizedMessage: h,
                                sendToSentry: t
                            } = {}) {
                                super(o, "Loader", {
                                    localizedMessage: h,
                                    sendToSentry: t
                                }), this.doNotRetry = m
                            }
                        }
                        class E extends t {
                            constructor(o, m) {
                                super(o, "Sound", {
                                    extra: m
                                })
                            }
                        }
                        class i extends t {
                            constructor(o, m) {
                                super(o, "MultiwindowInitialization", {
                                    extra: m
                                })
                            }
                        }

                        function w(o) {
                            if ("string" == typeof o) return new P(o, {
                                sendToSentry: !1
                            });
                            if (o instanceof ErrorEvent) return new P(`Script loading error: filename: ${o.filename}, colno: ${o.colno}, lineno: ${o.lineno}, message: ${o.message}`);
                            const m = new P(o.message);
                            return m.stack = o.stack, m
                        }

                        function f(o) {
                            return o instanceof t
                        }

                        function y(o) {
                            return !!o && o instanceof Error && "Loader" === o.type
                        }

                        function J(o) {
                            window.EVO_VERBOSE(o.stack || o.message, 2), window.console.error(o);
                            const m = !f(o) || o.sendToSentry;
                            if ("undefined" != typeof Sentry && m) {
                                f(o) || (o.name = `UnclassifiedError${o.name?` - ${o.name}`:""}`);
                                const m = f(o) ? o.type : "UnclassifiedError",
                                    h = f(o) ? o.extra : void 0;
                                Sentry.captureException(o, function(o, m) {
                                    return Object.assign({
                                        tags: {
                                            errorType: o
                                        }
                                    }, m ? {
                                        extra: {
                                            "Additional Info": m
                                        }
                                    } : {})
                                }(m, h))
                            }
                        }
                    },
                    377105: (o, m, h) => {
                        function t(o) {
                            let m = 1;
                            const h = {};
                            for (o.includes("+") && (o = o.replace(/\+/g, " ")); m < o.length;) {
                                let t = o.indexOf("&", m); - 1 === t && (t = o.length);
                                let B = o.indexOf("=", m); - 1 === B && (B = t);
                                const P = decodeURIComponent(o.substring(m, B)),
                                    E = decodeURIComponent(o.substring(B + 1, t)),
                                    i = h[P];
                                void 0 === i ? h[P] = E : Array.isArray(i) ? i.push(E) : h[P] = [i, E], m = t + 1
                            }
                            return h
                        }
                        h.d(m, {
                            F: () => f,
                            w: () => w
                        });
                        const B = 0 ? 0 : document.createElement("a");
                        let P, E;

                        function i(o) {
                            const m = {};
                            for (const [h, t] of Object.entries(o)) m[h] = Array.isArray(t) ? [...t] : t;
                            return m
                        }

                        function w(o) {
                            const {
                                hostname: m,
                                pathname: h,
                                port: w,
                                protocol: y,
                                searchParams: J,
                                hashParams: O
                            } = function(o) {
                                if (o === P && E) return E;
                                const m = function(o) {
                                    B.href = o;
                                    let m = B.pathname || "";
                                    "/" !== m.charAt(0) && (m = `/${m}`);
                                    const h = B.protocol || window.location.protocol;
                                    let P = B.hostname,
                                        E = B.port;
                                    return P || (P = window.location.hostname, E = window.location.port), {
                                        hashParams: t(B.hash),
                                        hostname: P,
                                        pathname: m,
                                        port: E,
                                        protocol: h,
                                        searchParams: t(B.search)
                                    }
                                }(o);
                                return P = o, E = m, m
                            }(o);
                            return {
                                hashParams: i(O),
                                hostname: m,
                                pathname: h,
                                port: w,
                                protocol: y,
                                searchParams: i(J),
                                toString: function() {
                                    return this.origin + this.pathname + this.search + this.hash
                                },
                                paramsToString: f,
                                getParam: function(o) {
                                    let m = this.searchParams[o];
                                    return void 0 === m && (m = this.hashParams[o], void 0 === m) ? null : Array.isArray(m) ? m[0] : m
                                },
                                get origin() {
                                    return `${this.protocol}//${this.hostname}${this.port?`:${this.port}`:""}`
                                },
                                get search() {
                                    return f("?", this.searchParams)
                                },
                                get hash() {
                                    return f("#", this.hashParams)
                                }
                            }
                        }

                        function f(o, m) {
                            let h = "";
                            for (const o of Object.keys(m)) {
                                const t = m[o],
                                    B = encodeURIComponent(o);
                                if (Array.isArray(t))
                                    for (const o of t) h && (h += "&"), h += `${B}=${encodeURIComponent(o)}`;
                                else null != t && (h && (h += "&"), h += `${B}=${encodeURIComponent(t)}`)
                            }
                            return h ? o + h : h
                        }
                    },
                    537593: (o, m, h) => {
                        h.d(m, {
                            Y: () => B
                        });
                        const t = !!window.EVO_VERBOSE;

                        function B() {
                            try {
                                return !Object || !window || !document.body || t && !window.EVO_VERBOSE
                            } catch (o) {
                                return !0
                            }
                        }
                    },
                    356512: (o, m, h) => {
                        h.d(m, {
                            Bt: () => O,
                            CB: () => J,
                            Ds: () => i,
                            EE: () => T,
                            ET: () => z,
                            FB: () => s,
                            Nw: () => A,
                            QJ: () => p,
                            Rh: () => j,
                            UA: () => K,
                            YU: () => g,
                            ZN: () => v,
                            ZP: () => w,
                            cb: () => y,
                            kl: () => e,
                            u9: () => U,
                            wP: () => l,
                            wc: () => f,
                            z6: () => b
                        });
                        var t = h(117592),
                            B = h(387565),
                            P = h(377105),
                            E = h(537593);

                        function i(o = 32) {
                            const m = window.crypto.getRandomValues(new Uint8Array(o));
                            return window.btoa(String.fromCharCode.apply(null, m))
                        }

                        function w(o, m) {
                            const h = o.indexOf(m);
                            if (-1 === h) return !1;
                            const t = o.pop();
                            return h < o.length && (o[h] = t), !0
                        }

                        function f(o, m) {
                            if (m < 0 || m >= o.length) return !1;
                            const h = o.pop();
                            return m < o.length && (o[m] = h), !0
                        }

                        function y(o, m) {
                            return new Promise((h => {
                                window.setTimeout((() => h(m)), o)
                            }))
                        }

                        function J() {
                            const o = document.getElementById("verbose-log");
                            o && (o.innerHTML = "")
                        }

                        function O(o) {
                            o && (o.style.display = "none")
                        }

                        function e(o, m = !1) {
                            o && (o.style.display = m ? "flex" : "block")
                        }
                        const H = {},
                            a = {};

                        function j(o, m) {
                            return new Promise(((h, t) => {
                                if (!o || 0) return void t(new Error("No url or wrong build options"));
                                if (a[o]) return void t(new Error("linksPrefetched[url]"));
                                const B = document.createElement("link");
                                B.rel = "prefetch", B.as = m, B.href = o, B.crossOrigin = "anonymous", document.head.appendChild(B), a[o] = !0, B.addEventListener("error", (() => t(new Error(`Failed preload URL: ${o}`)))), B.addEventListener("load", h)
                            }))
                        }

                        function p(o, m, h) {
                            let B = H[o];
                            return void 0 !== B ? delete H[o] : (window.EVO_VERBOSE(`fetchUrl/started ${o}`, 0, o), B = fetch(o, Object.assign({
                                redirect: "follow",
                                credentials: "same-origin",
                                keepalive: !0,
                                mode: "cors"
                            }, h)).then((m => {
                                if (!m.ok) throw m;
                                return window.EVO_VERBOSE(`fetchUrl/done ${o}`, 0, o, 3e3), m
                            })).catch((m => {
                                throw window.EVO_VERBOSE(`fetchUrl/fail/${m.status} ${o}`, 2, o), new t.$(o, m)
                            }))), "json" === m ? B.then((o => o.json())) : "text" === m ? B.then((o => o.text())) : B
                        }

                        function s(o, m) {
                            const h = `/frontend/loc/strings/${encodeURIComponent(o)}/${m}.json`,
                                B = (!1 || window.EVO_CDN || window.EVO_ORIGIN || "") + h,
                                P = (window.EVO_CDN || window.EVO_ORIGIN, 0 ? 0 : void 0);
                            return p(B, "json").catch(P).catch((o => (t.Z(0 ? 0 : B, o), Promise.reject(o))))
                        }
                        let Q = !1;
                        window.addEventListener("beforeunload", (() => {
                            Q = !0, "undefined" != typeof Sentry && Sentry.addBreadcrumb({
                                message: "window.onbeforeunload",
                                category: "location"
                            })
                        }));
                        const q = 5;

                        function z(o, m) {
                            return (!B.EL(m) || !m.doNotRetry) && o <= q
                        }

                        function g(o) {
                            var m;
                            o.disableDuration && (function() {
                                const o = P.w(window.location.href);
                                o.searchParams.cdn = void 0, o.hashParams.cdn = void 0, window.history.replaceState(null, "", o.toString())
                            }(), function(o) {
                                const m = new Date(Date.now() + 60 * o * 1e3).toUTCString();
                                document.cookie = `ignore_cdn=true; expires=${m}; path=/`
                            }(o.disableDuration)), Q || E.Y() || (window.setTimeout((() => {
                                window.location.reload()
                            }), 100 * ((m = o.failureCount) * m)), Q = !0)
                        }

                        function v() {
                            A(void 0)
                        }

                        function K(o) {
                            if (!o || P.w(o).origin === window.location.origin) return o;
                            window.console.error("Refusing to load manifest from remote", o)
                        }

                        function l() {
                            const o = P.w(window.location.href);
                            return parseInt(o.getParam("failed") || "0", 10)
                        }

                        function A(o) {
                            const m = P.w(window.location.href);
                            m.hashParams.failed = void 0 !== o ? o.toString() : void 0, window.history.replaceState(null, "", m.toString())
                        }

                        function b(o) {
                            window.EVO_LOADER.sendLog("CLIENT_GAME_RELOAD", {
                                reason: o
                            })
                        }

                        function U({
                            failureReason: o,
                            isCdnEnabled: m
                        }) {
                            if (!m) return 0;
                            switch (o) {
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

                        function T(o = window.location.href) {
                            return P.w(o).getParam("provider")
                        }
                    }
                },
                P = {};

            function E(o) {
                var m = P[o];
                if (void 0 !== m) return m.exports;
                var h = P[o] = {
                    exports: {}
                };
                return B[o](h, h.exports, E), h.exports
            }
            E.m = B, m = Object.getPrototypeOf ? o => Object.getPrototypeOf(o) : o => o.__proto__, E.t = function(h, t) {
                if (1 & t && (h = this(h)), 8 & t) return h;
                if ("object" == typeof h && h) {
                    if (4 & t && h.__esModule) return h;
                    if (16 & t && "function" == typeof h.then) return h
                }
                var B = Object.create(null);
                E.r(B);
                var P = {};
                o = o || [null, m({}), m([]), m(m)];
                for (var i = 2 & t && h;
                    "object" == typeof i && !~o.indexOf(i); i = m(i)) Object.getOwnPropertyNames(i).forEach((o => P[o] = () => h[o]));
                return P["default"] = () => h, E.d(B, P), B
            }, E.d = (o, m) => {
                for (var h in m) E.o(m, h) && !E.o(o, h) && Object.defineProperty(o, h, {
                    enumerable: !0,
                    get: m[h]
                })
            }, E.f = {}, E.e = o => Promise.all(Object.keys(E.f).reduce(((m, h) => (E.f[h](o, m), m)), [])), E.u = o => "js/" + {
                66885: "native-utilities",
                80616: "video-lib-local",
                83100: "sm.howler"
            }[o] + "." + {
                66885: "55eacda0",
                80616: "9f5bdacd",
                83100: "3742f7c1"
            }[o] + ".js", E.miniCssF = o => {}, E.o = (o, m) => Object.prototype.hasOwnProperty.call(o, m), h = {}, t = "/frontend/evo/r2/:", E.l = (o, m, B, P) => {
                if (h[o]) h[o].push(m);
                else {
                    var i, w;
                    if (void 0 !== B)
                        for (var f = document.getElementsByTagName("script"), y = 0; y < f.length; y++) {
                            var J = f[y];
                            if (J.getAttribute("src") == o || J.getAttribute("data-webpack") == t + B) {
                                i = J;
                                break
                            }
                        }
                    i || (w = !0, (i = document.createElement("script")).charset = "utf-8", i.timeout = NaN, E.nc && i.setAttribute("nonce", E.nc), i.setAttribute("data-webpack", t + B), i.src = o), h[o] = [m];
                    var O = (m, t) => {
                            i.onerror = i.onload = null, clearTimeout(e);
                            var B = h[o];
                            if (delete h[o], i.parentNode && i.parentNode.removeChild(i), B && B.forEach((o => o(t))), m) return m(t)
                        },
                        e = setTimeout(O.bind(null, void 0, {
                            type: "timeout",
                            target: i
                        }), window.EVO_CDN ? 15e3 : 6e4);
                    i.onerror = O.bind(null, i.onerror), i.onload = O.bind(null, i.onload), w && document.head.appendChild(i)
                }
            }, E.r = o => {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(o, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(o, "__esModule", {
                    value: !0
                })
            }, E.p = (globalThis.EVO_CDN || "") + "/frontend/evo/r2/", (() => {
                var o = {
                    14965: 0
                };
                E.f.j = (m, h) => {
                    var t = E.o(o, m) ? o[m] : void 0;
                    if (0 !== t)
                        if (t) h.push(t[2]);
                        else if (1) {
                        var B = new Promise(((h, B) => t = o[m] = [h, B]));
                        h.push(t[2] = B);
                        var P = E.p + E.u(m),
                            i = new Error;
                        E.l(P, (h => {
                            if (E.o(o, m) && (0 !== (t = o[m]) && (o[m] = void 0), t)) {
                                var B = h && ("load" === h.type ? "missing" : h.type),
                                    P = h && h.target && h.target.src;
                                i.message = "Loading chunk " + m + " failed.\n(" + B + ": " + P + ")", i.name = "ChunkLoadError", i.type = B, i.request = P, t[1](i)
                            }
                        }), "chunk-" + m, m)
                    }
                };
                var m = (m, h) => {
                        var t, B, [P, i, w] = h,
                            f = 0;
                        if (P.some((m => 0 !== o[m]))) {
                            for (t in i) E.o(i, t) && (E.m[t] = i[t]);
                            w && w(E)
                        }
                        for (m && m(h); f < P.length; f++) B = P[f], E.o(o, B) && o[B] && o[B][0](), o[B] = 0
                    },
                    h = self["webpackChunk_frontend_evo_r2_"] = self["webpackChunk_frontend_evo_r2_"] || [];
                h.forEach(m.bind(null, 0)), h.push = m.bind(null, h.push.bind(h))
            })(), (() => {
                function o(o, m) {
                    var h = {};
                    for (var t in o) Object.prototype.hasOwnProperty.call(o, t) && m.indexOf(t) < 0 && (h[t] = o[t]);
                    if (null != o && "function" == typeof Object.getOwnPropertySymbols) {
                        var B = 0;
                        for (t = Object.getOwnPropertySymbols(o); B < t.length; B++) m.indexOf(t[B]) < 0 && Object.prototype.propertyIsEnumerable.call(o, t[B]) && (h[t[B]] = o[t[B]])
                    }
                    return h
                }
                var m;

                function h(o) {
                    return null != o && null != o.data && Object.keys(o.data).length > 0 && "string" == typeof o.data.command && o.data.command.startsWith("EVO:")
                }

                function t(o) {
                    const {
                        name: m,
                        platform: h
                    } = o || {}, t = String(m).startsWith("EVO:"), B = void 0 === h || ["mobile", "desktop"].includes(String(h));
                    return t && B
                }

                function B(o) {
                    return Array.isArray(o) ? o.filter(t) : []
                }

                function P(o) {
                    return Array.isArray(o) ? o.filter(t) : []
                }
                Object.create, Object.create, "function" == typeof SuppressedError && SuppressedError,
                    function(o) {
                        o["Subscribe"] = "EVO:EVENT_SUBSCRIBE", o["Connect"] = "EVO:CONNECT"
                    }(m || (m = {}));
                const i = 100,
                    w = "CLIENT_API_V2",
                    f = 250;
                class y {
                    constructor({
                        isDesktop: o,
                        sendLogMessage: t,
                        subscriptionsLimit: B = i,
                        commandsThrottlingEnabled: P = !0
                    }) {
                        this.eventCache = {}, this.eventsEnabledBySubscription = new Map, this.eventsEnabledByConfig = new Set, this.commandsDisabledByConfig = new Set, this.commandListeners = {}, this.toTriggerOnDispose = [], this.isLogSenderSet = !1, this.commandThrottler = function(o) {
                            const m = new Map;
                            return {
                                throttle: function(h, t) {
                                    const B = Date.now(),
                                        P = JSON.stringify(h.data),
                                        E = m.get(P);
                                    (!E || B - E >= o) && (t(h), m.set(P, B))
                                },
                                clear: function() {
                                    m.forEach(((o, h) => {
                                        m.delete(h)
                                    }))
                                }
                            }
                        }(f), this.iOSNativeMiddleware = null, this.messageHandler = o => {
                            if (h(o)) {
                                if (this.broadcastMWMessageToGames(o), function(o) {
                                        var t;
                                        return h(o) && m.Connect === o.data.command && !!(null === (t = o.ports) || void 0 === t ? void 0 : t.length)
                                    }(o)) return this.messagePort = o.ports[0], void(this.messagePort.onmessage = this.messageHandler);
                                if (function(o) {
                                        return h(o) && m.Subscribe === o.data.command && "string" == typeof o.data.event && o.data.event.startsWith("EVO:")
                                    }(o)) this.handleSubscription(o.data.event, o.origin);
                                else {
                                    if (!this.commandsThrottlingEnabled) return void this.handleCommand(o);
                                    this.commandThrottler.throttle(o, (o => this.handleCommand(o)))
                                }
                            }
                        }, this.subscriptionsLimit = B, this.sendLogMessage = t, this.fallbackSendLogMessage = t, this.operatorWindow = function(o) {
                            const m = window.location.origin;
                            let h = o.parent;
                            try {
                                for (; h.location.origin === m && h.parent !== h;) h = h.parent
                            } catch (o) {}
                            return h
                        }(window), this.isDesktop = o, this.commandsThrottlingEnabled = P, window.addEventListener("message", this.messageHandler)
                    }
                    getEventConfig(o, m, h) {
                        var t, B;
                        if ("unstable" === h && "stable" === this.release) return;
                        const P = null === (B = null === (t = this._config) || void 0 === t ? void 0 : t.enabledEvents) || void 0 === B ? void 0 : B.find((m => m.name === o));
                        return P && m(P) ? P : void 0
                    }
                    isEventEnabledByConfig(o, m) {
                        return ("unstable" !== m || "stable" !== this.release) && this.eventsEnabledByConfig.has(o)
                    }
                    set config(o) {
                        var m, h;
                        this._config || (this._config = o, null === (m = function(o = [], m) {
                            return new Set([...o.filter((({
                                platform: o
                            }) => void 0 === o || "desktop" === o && m || "mobile" === o && !m)).map((o => o.name))])
                        }(o.enabledEvents, this.isDesktop)) || void 0 === m || m.forEach((o => this.eventsEnabledByConfig.add(o))), null === (h = function(o = [], m) {
                            return new Set([...o.filter((({
                                platform: o
                            }) => void 0 === o || "desktop" === o && m || "mobile" === o && !m)).map((o => o.name))])
                        }(o.disabledCommands, this.isDesktop)) || void 0 === h || h.forEach((o => this.commandsDisabledByConfig.add(o))))
                    }
                    setLogMessageSender(o) {
                        this.isLogSenderSet || (this.sendLogMessage = o, this.isLogSenderSet = !0)
                    }
                    postMessage(o, m) {
                        "unstable" === m.targetRelease && "stable" === this.release || ("enabledBySubscription" === m.type && m.postOnSubscription && (this.eventCache[o.event] = {
                            message: o,
                            options: m
                        }), "enabledBySubscription" === m.type && m.postOnlyToAllowedOrigins ? this.postMessagesOnlyToAllowedOrigins(o, m) : ("default" === m.type || "enabledBySubscription" === m.type && this.eventsEnabledBySubscription.has(o.event) || "enabledByConfig" === m.type && this.isEventEnabledByConfig(o.event, m.targetRelease)) && this.postMessageToContainer(o, {
                            disableLogging: m.disableLogging
                        }))
                    }
                    onContainerCommand(o, m, h) {
                        if ("unstable" === h.targetRelease && "stable" === this.release) return;
                        const t = this.commandListeners[o] || [];
                        t.push([m, h]), this.commandListeners[o] = t
                    }
                    onDispose(o) {
                        this.toTriggerOnDispose.push(o)
                    }
                    reset() {
                        for (const o of this.toTriggerOnDispose) o();
                        this.isLogSenderSet = !1, this.sendLogMessage = this.fallbackSendLogMessage, this.toTriggerOnDispose.length = 0, this.commandListeners = {}, this.eventsEnabledBySubscription.clear(), this.eventCache = {}, this.commandThrottler.clear()
                    }
                    get release() {
                        var o, m;
                        return null !== (m = null === (o = this._config) || void 0 === o ? void 0 : o.release) && void 0 !== m ? m : "stable"
                    }
                    get allowedOrigins() {
                        var o, m;
                        return null !== (m = null === (o = this._config) || void 0 === o ? void 0 : o.origins) && void 0 !== m ? m : []
                    }
                    postMessageToContainer(o, m = {}) {
                        var h, t, B;
                        m.disableLogging || this.log({
                            type: "event",
                            payload: o
                        }), this.operatorWindow.postMessage(o, null !== (h = m.origin) && void 0 !== h ? h : "*"), null === (t = this.messagePort) || void 0 === t || t.postMessage(o), null === (B = this.iOSNativeMiddleware) || void 0 === B || B.postMessageToContainer(o)
                    }
                    postMessagesOnlyToAllowedOrigins(o, m) {
                        const h = this.filterAllowedOriginsForMessageType(o.event);
                        for (const t of h) this.postMessageToContainer(o, {
                            disableLogging: m.disableLogging,
                            origin: t
                        })
                    }
                    isCommandDisabledByConfig(o) {
                        return this.commandsDisabledByConfig.has(o)
                    }
                    filterAllowedOriginsForMessageType(o) {
                        var m;
                        const h = null !== (m = this.eventsEnabledBySubscription.get(o)) && void 0 !== m ? m : [],
                            t = [...this.allowedOrigins];
                        return h.filter(((o, m, h) => t.includes(o) && m === h.indexOf(o)))
                    }
                    broadcastMWMessageToGames(o) {
                        var m, h;
                        if ("multi" === (null === (m = window.EVO_LOADER) || void 0 === m ? void 0 : m.instance.kind)) {
                            const m = window.EVO_LOADER.instance;
                            for (const t of m.frames) null === (h = t.frame.contentWindow) || void 0 === h || h.postMessage(o.data, "*")
                        }
                    }
                    handleSubscription(o, m) {
                        this.addSubscription(o, m), this.log({
                            type: "subscription",
                            payload: o,
                            meta: {
                                origin: m
                            }
                        });
                        const h = this.eventCache[o];
                        if (h) return "enabledBySubscription" === h.options.type && h.options.postOnlyToAllowedOrigins ? (this.allowedOrigins.includes(m) || console.error(`Subscription to ${h.message.event} is not allowed for ${m}.\n                Please contact customer support`), void this.postMessagesOnlyToAllowedOrigins(h.message, h.options)) : void this.postMessageToContainer(h.message, {
                            origin: m,
                            disableLogging: h.options.disableLogging
                        })
                    }
                    handleCommand({
                        data: m,
                        origin: h
                    }) {
                        const {
                            command: t
                        } = m, B = o(m, ["command"]);
                        if (this.isCommandDisabledByConfig(t)) return void console.warn(`${t} is ignored as disabled via backoffice config`);
                        this.log({
                            type: "command",
                            payload: m,
                            meta: {
                                origin: h
                            }
                        });
                        const P = this.commandListeners[t];
                        if (P)
                            for (const [o] of P) o(B)
                    }
                    addSubscription(o, m) {
                        var h;
                        this.eventsEnabledBySubscription.size >= this.subscriptionsLimit || (this.eventsEnabledBySubscription.has(o) || this.eventsEnabledBySubscription.set(o, []), m && (null === (h = this.eventsEnabledBySubscription.get(o)) || void 0 === h || h.push(m)))
                    }
                    log({
                        type: o,
                        payload: m,
                        meta: h
                    }) {
                        const t = Object.assign(Object.assign({
                            type: o
                        }, m && {
                            payload: m
                        }), h && {
                            meta: h
                        });
                        this.sendLogMessage(w, t)
                    }
                }
                const J = window.origin || window.location.origin,
                    O = Object.freeze({
                        receive: J,
                        send: "null" === J ? "*" : J
                    }),
                    e = "evo-broadcast-state";

                function H(o, m) {
                    if (o && m.source !== o) try {
                        o.origin === window.origin && o.location.origin === window.location.origin && o.postMessage(m.data, O.send)
                    } catch (o) {}
                }
                var a = E(377105);

                function j(o) {
                    return {
                        name: o,
                        toString: () => o
                    }
                }
                class p {
                    constructor() {
                        this.listeners = [], this.messageReceiver = o => {
                            const m = o.data;
                            if (o.origin === O.receive && m && "object" == typeof m && m.key === e && m.value && "object" == typeof m.value)
                                for (const o of this.listeners) o(m.value)
                        }, window.addEventListener("message", this.messageReceiver)
                    }
                    addListener(o) {
                        this.listeners.push(o)
                    }
                    removeListener(o) {
                        const m = this.listeners.indexOf(o);
                        m > -1 && this.listeners.splice(m, 1)
                    }
                    send(o) {
                        window.postMessage({
                            key: e,
                            value: o
                        }, O.send)
                    }
                }
                p.instance = new p;
                const s = 5e3,
                    Q = j("ping {015f023c-9f1f-4218-b7f3-7f5c85650dc6}"),
                    q = j("init {44ee98ea-0aab-464b-91c8-fc2b6ca75758}"),
                    z = j("dispose {3fb190a3-d0cc-4237-bc6e-abc2ff1ab044}");
                class g {
                    constructor(o = p.instance, m = "default") {
                        this.instanceId = Date.now().toString(36) + Math.random().toString(36), this.messageId = 0, this.pingTimerId = 0, this.pingCheckTimerId = 0, this.disposed = !1, this.data = {}, this.listeners = {}, this.pings = {}, this.receiveValues = o => {
                            if (o.channel !== this.channel) return;
                            const m = o.instanceId,
                                h = o.messageKey;
                            switch (this.schedulePingCheck(m), h) {
                                case Q.name:
                                    break;
                                case z.name:
                                    this.removeInstance(m);
                                    break;
                                case q.name:
                                    for (const o of Object.values(this.data))
                                        for (const m of o) this.transport.send(m);
                                    break;
                                default:
                                    const t = this.data[h] || (this.data[h] = []);
                                    for (let B = 0; B < t.length; B++) {
                                        const P = t[B];
                                        if (P.instanceId === m) return void(P.messageId < o.messageId && (t[B] = o, this.triggerListeners(h, m)))
                                    }
                                    t.push(o), this.triggerListeners(h, m)
                            }
                        }, this.channel = m, this.transport = o, o.addListener(this.receiveValues), this.sendValues(q, {})
                    }
                    dispose() {
                        this.disposed || (this.transport.removeListener(this.receiveValues), this.sendValues(z, {}), window.clearTimeout(this.pingTimerId), window.clearTimeout(this.pingCheckTimerId), this.disposed = !0)
                    }
                    reset() {
                        this.disposed || (window.clearTimeout(this.pingCheckTimerId), this.pingCheckTimerId = 0, this.sendValues(z, {}))
                    }
                    sendValues(o, m) {
                        const h = Object.assign(Object.assign({}, m), {
                            channel: this.channel,
                            instanceId: this.instanceId,
                            messageId: this.messageId++,
                            messageKey: o.name
                        });
                        this.disposed || (this.transport.send(h), this.receiveValues(h), this.schedulePing())
                    }
                    getValues(o) {
                        return this.data[o.name || o.toString()] || []
                    }
                    addListener(o, m) {
                        (this.listeners[o.name] || (this.listeners[o.name] = [])).push(m)
                    }
                    removeListener(o, m) {
                        const h = this.listeners[o.name],
                            t = h ? h.indexOf(m) : -1;
                        t > -1 && h.splice(t, 1)
                    }
                    removeAllListeners(o) {
                        this.listeners[o.name] && (this.listeners[o.name] = [])
                    }
                    schedulePing() {
                        window.clearTimeout(this.pingTimerId), this.pingTimerId = window.setTimeout((() => {
                            this.sendValues(Q, {})
                        }), s)
                    }
                    schedulePingCheck(o) {
                        const m = Date.now();
                        this.pings[o] = m, this.pingCheckTimerId || (this.pingCheckTimerId = window.setTimeout((() => {
                            this.pingCheckTimerId = 0, "hidden" !== document.visibilityState && this.removeDeadInstances(m)
                        }), 2 * s))
                    }
                    triggerListeners(o, m) {
                        const h = this.listeners[o];
                        if (h) {
                            const t = this.getValues(o);
                            for (const o of h) o(t, m)
                        }
                    }
                    removeDeadInstances(o) {
                        for (const m of Object.keys(this.pings)) this.pings[m] <= o && this.removeInstance(m)
                    }
                    removeInstance(o) {
                        const m = [];
                        for (const h of Object.keys(this.data)) {
                            const t = this.data[h];
                            for (let B = 0; B < t.length; B++)
                                if (t[B].instanceId === o) {
                                    m.push(h), t.splice(B, 1);
                                    break
                                }
                        }
                        delete this.pings[o];
                        for (const h of m) this.triggerListeners(h, o)
                    }
                }
                var v, K, l = E(387565);
                (function(o) {
                    o["Lobby"] = "lobby", o["Direct"] = "direct"
                })(v || (v = {})),
                function(o) {
                    o["PlayForFun"] = "pff", o["FreeGames"] = "free_games", o["BalanceId"] = "balance_id", o["Demo"] = "demo", o["SwitchBalanceId"] = "switch_balance_id"
                }(K || (K = {}));
                const A = ["lobbyIntent"];

                function b(o = {}, m = !1) {
                    const h = a.w(window.location.href);
                    for (const m of A) h.getParam(m) && !o.hasOwnProperty(m) && (o[m] = h.getParam(m));
                    const t = window.EVO_SESSION_ID_FALLBACK;
                    t && (o.EVOSESSIONID = t, o.cdn = window.EVO_CDN, o.locale = window.EVO_LOCALE);
                    const B = window.EVO_ORIGIN;
                    let P, E;
                    return B && !m && (o.origin = B), m ? (P = "?", E = `${B||window.location.origin}/entry`) : (P = "#", E = window.location.pathname), E + a.F(P, o)
                }

                function U(o, m = {}) {
                    "/" === o[0] && (o = (window.EVO_ORIGIN || "") + o);
                    const h = window.EVO_SESSION_ID_FALLBACK;
                    if (h && (m.EVOSESSIONID = h), m.client_version = "6.20240808.72721.43530-9cfa25698c", window.EVO_LOADER) {
                        const {
                            deviceInfo: o
                        } = window.EVO_LOADER;
                        (null == o ? void 0 : o.isIosDevice) && o.isQQBrowser && (m.nocache = (Date.now() / 1e3).toFixed(0))
                    }
                    return o + a.F(o.includes("?") ? "&" : "?", m)
                }
                const T = "undefined" != typeof InstallTrigger,
                    k = "iFrAmE";

                function S(o) {
                    let m = !1;
                    if (T) m = !0;
                    else try {
                        let o = window;
                        const h = o.location;
                        for (; !m && o.parent !== o;) {
                            const t = o.parent.location;
                            t.origin === h.origin && t.pathname === h.pathname && t.search === h.search && (m = !0), o = o.parent
                        }
                    } catch (o) {}
                    if (m) {
                        const m = a.w(window.location.href),
                            h = a.w(o);
                        if (m.pathname === h.pathname && m.search === h.search) {
                            const t = m.getParam(k) || "";
                            h.searchParams[k] = `${t}x`, o = h.toString()
                        }
                    }
                    return o
                }

                function G(o) {
                    return "3!" === o ? ["", window.location.origin + window.location.pathname, "table_id", "vt_id", "game", "category", "instance_id"] : ["", window.location.origin, window.location.pathname, "table_id", "vt_id", "game", "category", "lobby_launch_id", "ua_launch_id"]
                }

                function u(o) {
                    const m = "4!",
                        h = G(m),
                        t = h.length;
                    let B = m;
                    for (const m of o) P(m);
                    if (h.length > 1294) throw new l.gE("Cannot encode URI");
                    for (let o = t; o < h.length; o++) B += `!${h[o].replace(/!/g,"%21").replace(/&/g,"%26")}`;
                    return B;

                    function P(o) {
                        const m = a.w(o);
                        "about:" !== m.protocol && (i(m.origin), i(m.pathname), E(m.searchParams), E(m.hashParams))
                    }

                    function E(o) {
                        for (const m of Object.keys(o)) {
                            const h = o[m];
                            if (m && null != h)
                                if (Array.isArray(h))
                                    for (const o of h) i(m), i(o);
                                else i(m), i(h)
                        }
                        B += "-"
                    }

                    function i(o) {
                        let m = h.indexOf(o); - 1 === m ? m = h.push(o) : m += 1;
                        let t = m.toString(36);
                        m > 35 && (t = `0${t}`), B += t
                    }
                }

                function _(o, m = !1) {
                    try {
                        return o ? function(o) {
                            const m = o.substring(0, 2),
                                h = G(m),
                                t = o.split(/!/g);
                            for (let o = 2; o < t.length; o++) h.push(t[o].replace(/%21/g, "!").replace(/%26/g, "&"));
                            const B = [],
                                P = t[1];
                            let E = 0;
                            for (; E < P.length;) B.push(i());
                            return B;

                            function i() {
                                let o = f();
                                "3!" !== m && (o += f());
                                const h = a.w(o);
                                return h.origin !== window.location.origin && (console.warn("Potentially unsecure origin blocked from the `mwg` arg", o), o = window.location.origin + h.pathname), o + w("?") + w("#")
                            }

                            function w(o) {
                                let m = "";
                                for (; E < P.length;) {
                                    if ("-" === P[E]) {
                                        E++;
                                        break
                                    }
                                    const h = f(),
                                        t = f();
                                    m += `${(m?"&":o)+encodeURIComponent(h)}=${encodeURIComponent(t)}`
                                }
                                return m
                            }

                            function f() {
                                let o = P[E++],
                                    m = "";
                                "0" === o && (o = P[E++], m = P[E++]);
                                const t = parseInt(o + m, 36);
                                return h[t - 1]
                            }
                        }(o) : []
                    } catch (h) {
                        if (window.console.error("Invalid multi URL", o, h), m) throw h;
                        return []
                    }
                }
                const R = /(password|SESSIONID)((=).+?($|&)|(%3D).+?($|%26))/gi;

                function n(o) {
                    return o.replace(R, "$1$3$5***$4$6")
                }
                const X = "ezugi",
                    r = "ezugi.lobby",
                    C = Object.freeze({
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
                var L, V, N = E(117592),
                    c = E(356512);

                function F(o) {
                    if (o = o && o.trim()) return o.startsWith("https://") || o.startsWith("data:") ? o : (o.startsWith("/") || (o = `/frontend/evo/branding/${o}`), `${window.EVO_CDN||window.EVO_ORIGIN||""}${o}`)
                }

                function $(o, m, h = !0, t = window.BUNDLE_MANIFEST) {
                    const B = (o.frontend_app || o.game || "lobby").split(",");
                    for (const o of B) {
                        const h = o.trim(),
                            B = t.apps[h];
                        if (null == B ? void 0 : B.assets.length) {
                            const o = t.publicPath,
                                P = B.adaptive || ("desktop" === m ? B.desktop : B.mobile);
                            return Object.assign(Object.assign({}, B), {
                                assets: B.assets.map((m => ("number" == typeof m && (m = t.commonAssets[m]), o + m))),
                                application: h,
                                loader: `${o}${P}`
                            })
                        }
                    }
                    if (h) throw new Error(`Cannot find any of the defined apps: ${B.join(", ")}`)
                }(function(o) {
                    o["LS2"] = "ls2", o["LS3"] = "ls3", o["AndarBahar"] = "andarbahar", o["Lobby"] = "lobby", o["Slingshot"] = "slingshot", o["CaribbeanStudPoker"] = "csp", o["CasinoHoldemPoker"] = "holdem", o["CasinoHoldemPokerNew"] = "chp", o["UltimateTexasHoldem"] = "uth", o["ExtremeTexasHoldem"] = "eth", o["TexasHoldemBonus"] = "thb", o["ThreeCardPoker"] = "tcp", o["TripleCardPoker"] = "trp", o["TeenPatti"] = "teenpatti", o["DoubleHandPoker"] = "dhp", o["BaccaratPro"] = "baccarat_pro", o["Roulette"] = "roulette", o["InstantRoulette"] = "instantroulette", o["DoubleBallRoulette"] = "double_ball_roulette", o["AmericanRoulette"] = "americanroulette", o["GoldBarRoulette"] = "goldbarroulette", o["Blackjack"] = "blackjack", o["ClassicFreebet"] = "classicfreebet", o["ScalableBlackjack"] = "scalableblackjack", o["FreebetBlackjack"] = "freebet", o["PowerBlackjack"] = "powerscalableblackjack", o["LightningBlackjack"] = "lightningscalablebj", o["Baccarat"] = "baccarat", o["DeadOrAliveSaloon"] = "deadoralivesaloon", o["LightningBaccarat"] = "lightningbaccarat", o["GoldenWealthBaccarat"] = "goldenwealth", o["BaccaratMultiplay"] = "baccaratmultiplay", o["MoneyWheel"] = "moneywheel", o["DragonTiger"] = "dragontiger", o["TopCard"] = "topcard", o["Monopoly"] = "monopoly", o["RNGBlackjack"] = "rng-blackjack", o["RNGLightningBlackjack"] = "rng-lightningscalablebj", o["RNGMoneyWheel"] = "rng-moneywheel", o["RNGRoulette"] = "rng-roulette", o["RNGAmericanRoulette"] = "rng-american-roulette", o["RNGBaccarat"] = "rng-baccarat", o["RNGCraps"] = "rng-craps", o["RNGMegaBall"] = "rng-megaball", o["RNGDragonTiger"] = "rng-dragontiger", o["RNGTopCard"] = "rng-topcard", o["DealOrNoDeal"] = "dealnodeal", o["RNGDealOrNoDeal"] = "rng-dealnodeal", o["SideBetCity"] = "sidebetcity", o["LightningDice"] = "lightningdice", o["SicBo"] = "sicbo", o["RNGSicBo"] = "rng-sicbo", o["CrazyTime"] = "crazytime", o["MegaBall"] = "megaball", o["Craps"] = "craps", o["GonzoTreasureHunt"] = "gonzotreasurehunt", o["CashOrCrash"] = "cashorcrash", o["FanTan"] = "fantan", o["BacBo"] = "bacbo", o["TopDice"] = "topdice", o["PowerBall"] = "powerball", o["CrazyCoinFlip"] = "crazycoinflip", o["GonzoTreasureMap"] = "gonzotreasuremap", o["MonopolyBigBaller"] = "monopolybigballer", o["FunkyTime"] = "funkytime", o["LightningLotto"] = "lightninglotto", o["RNGLightningLotto"] = "rng-lightninglotto", o["RNGHilo"] = "rng-hilo", o["LightningStorm"] = "lightningstorm", o["LightningBall"] = "lightningball"
                })(L || (L = {})),
                function(o) {
                    o["NewJersey"] = "new-jersey", o["Pennsylvania"] = "pennsylvania", o["Lightning"] = "lightning"
                }(V || (V = {}));
                class I {
                    static addEventListener(o, m, h) {
                        (this._addEventListener || o.addEventListener).call(o, m, h)
                    }
                }
                I.setTimeout = window.setTimeout.bind(window), I.clearTimeout = window.clearTimeout.bind(window), I._addEventListener = "undefined" == typeof EventTarget ? null : EventTarget.prototype.addEventListener;
                const d = [];

                function D(o) {
                    d.push(o), I.addEventListener(o, "load", x), I.addEventListener(o, "error", x)
                }

                function x() {
                    Object && (this.removeEventListener("load", x), this.removeEventListener("error", x), c.ZP(d, this))
                }
                class W {
                    init() {
                        Image = function(o) {
                            function m() {
                                const m = new o;
                                return D(m), m
                            }
                            return m.prototype = o.prototype, m
                        }(Image);
                        const o = document.createElement;
                        document.createElement = function(m, h) {
                            const t = o.call(this, m, h),
                                {
                                    tagName: B
                                } = t;
                            return "IMG" !== B && "SCRIPT" !== B && "LINK" !== B || D(t), t
                        }
                    }
                    reset() {
                        for (; d.length;) x.call(d[0])
                    }
                    clean() {
                        return new Promise(((o, m) => {
                            this.verify(1e3, o, m)
                        }))
                    }
                    verify(o, m, h) {
                        return o < 0 ? (window.console.error("Asset downloads are still pending", d.slice()), h("SandboxAssetWrapper detected pending assets")) : d.every(Y) ? m() : void I.setTimeout((() => this.verify(o - 25, m, h)), 25)
                    }
                }

                function Y(o) {
                    return "prefetch" === o.rel || !o.src && !o.href
                }
                const M = new Map;

                function Z(o) {
                    return class extends o {
                        constructor(o) {
                            super(o), M.set(this, void 0)
                        }
                        close() {
                            const o = super.close();
                            return M.get(this) || (M.set(this, o), o.then((() => {
                                M.delete(this)
                            }), (() => {
                                "closed" !== this.state ? M.set(this, void 0) : M.delete(this)
                            }))), o
                        }
                    }
                }
                class oo {
                    init() {
                        const o = window.webkitAudioContext;
                        "undefined" == typeof AudioContext && void 0 === o || ("undefined" != typeof AudioContext ? AudioContext = Z(AudioContext) : void 0 !== o && (window.webkitAudioContext = Z(o)))
                    }
                    reset() {
                        M.clear()
                    }
                    async clean() {
                        M.size && window.console.warn("AudioContext instances are not closed", Array.from(M.keys()));
                        const o = Array.from(M.entries());
                        try {
                            await Promise.all(o.map((([o, m]) => (null != m ? m : o.close()).catch((m => {
                                if ("closed" !== o.state) return Promise.reject(m)
                            })))))
                        } catch (o) {
                            throw new Error(`SandboxAudioContextWrapper detected running AudioContexts`)
                        }
                        M.clear()
                    }
                }
                const mo = Symbol("Sandbox event collection"),
                    ho = Symbol("Remove all event listeners");
                class to {
                    constructor() {
                        this.isCapturing = !1, this.eventTargets = []
                    }
                    isSupported() {
                        return "undefined" != typeof EventTarget
                    }
                    init() {
                        const o = this.eventTargets,
                            m = EventTarget.prototype.addEventListener,
                            h = EventTarget.prototype.removeEventListener,
                            t = this;
                        EventTarget.prototype.addEventListener = function(h, B, P, E) {
                            if (m.call(this, h, B, P), "react-dom" === E || "evo-loader" === E || "test-tools" === E) return;
                            if (!t.isCapturing) return;
                            const i = null != this ? this : window,
                                w = i[mo] || (i[mo] = []);
                            w.length || o.push(i);
                            let f = null;
                            "object" == typeof P && P.once && (f = () => {
                                i.removeEventListener(h, B, P)
                            }, m.call(this, h, f, P));
                            const y = i instanceof HTMLImageElement ? i.src : new Error;
                            w.push({
                                type: h,
                                listener: B,
                                extraListener: f,
                                options: P,
                                stack: y
                            })
                        }, EventTarget.prototype.removeEventListener = function(m, t, B) {
                            h.call(this, m, t, B);
                            const P = null != this ? this : window,
                                E = P[mo];
                            if (E && Object) {
                                for (let o = 0; o < E.length; o++) {
                                    const P = E[o];
                                    if (P.listener === t && P.type === m && (i = P.options, w = B, Boolean("object" == typeof i ? null == i ? void 0 : i.capture : i) === Boolean("object" == typeof w ? null == w ? void 0 : w.capture : w))) {
                                        P.extraListener && h.call(this, m, P.extraListener, B), c.wc(E, o);
                                        break
                                    }
                                }
                                E.length || c.ZP(o, P)
                            }
                            var i, w
                        }, EventTarget.prototype[ho] = function() {
                            const m = this[mo];
                            if (m) {
                                for (const o of m) h.call(this, o.type, o.listener, o.options);
                                m.length = 0
                            }
                            c.ZP(o, this)
                        }
                    }
                    reset() {
                        this.eventTargets.length = 0, this.isCapturing = !0
                    }
                    clean() {
                        for (let o = this.eventTargets.length - 1; o >= 0; o--) {
                            const m = this.eventTargets[o];
                            if (m instanceof Node && m !== document && !document.contains(m)) continue;
                            if (m instanceof WebSocket && m.readyState === WebSocket.CLOSED) continue;
                            if (m instanceof XMLHttpRequest && m.readyState === XMLHttpRequest.DONE) continue;
                            const h = m[mo];
                            if (!(null == h ? void 0 : h.length)) continue;
                            window.console.warn("addEventListener has not been cleared up by application code.", m, h.slice());
                            const t = EventTarget.prototype.removeEventListener;
                            let B = 0;
                            const P = h.length;
                            for (; h.length;) {
                                if (B++ > 2 * P) return Promise.reject("infinite sandbox removeEventListener");
                                const o = h[0];
                                t !== m.removeEventListener && t.call(m, o.type, o.listener, o.options), m.removeEventListener(o.type, o.listener, o.options)
                            }
                        }
                    }
                }
                const Bo = "SandboxFetchWrapper aborted the request";
                class Po {
                    constructor() {
                        this.promiseCancelation = void 0
                    }
                    init() {
                        const o = window.fetch;
                        window.fetch = (m, h) => (null == h ? void 0 : h.evoIgnoreSandbox) ? o.call(window, m, h) : Promise.race([this.promiseCancelation, o.call(window, m, h)]).catch((o => (o === Bo && window.console.warn("Sandbox interrupted request", m), Promise.reject(o))))
                    }
                    reset() {
                        this.promiseCancelation = new Promise(((o, m) => {
                            this.promiseRejector = m
                        })), this.promiseCancelation.catch((() => {}))
                    }
                    clean() {
                        this.promiseRejector && this.promiseRejector(Bo)
                    }
                }
                const Eo = ["__autoTestVideoComponents", "defineEvoVideo", "__lobbyTileSizeHint", "_", "HowlerGlobal", "Howler", "Howl", "Sound", "Hammer", "mozPaintCount", "mozInnerScreenX", "mozInnerScreenY", "mozAnimationStartTime", "orientation", "localStorage", "sessionStorage", "length", "innerHeight", "outerHeight", "innerWidth", "outerWidth", "frameElement", "parent", "top", "scrollX", "scrollY", "pageXOffset", "pageYOffset", "webkitStorageInfo", "speechSynthesis", "caches", "webkit"];
                class io {
                    constructor() {
                        this.globals = void 0, this.resetFailed = null
                    }
                    init() {}
                    reset() {
                        if (null !== this.resetFailed) return;
                        this.resetFailed = !1;
                        let o = null;
                        try {
                            const m = {};
                            for (o of (this.globals = m, Object.keys(window))) Eo.includes(o) || (m[o] = window[o])
                        } catch (m) {
                            window.console.warn("SandboxGlobalsWrapper - failed to read", o, m), this.globals = void 0, this.resetFailed = !0
                        }
                    }
                    clean() {
                        if (this.resetFailed) return Promise.reject(`SandboxGlobalsWrapper - could not capture window properties`);
                        const o = this.globals;
                        if (!o) return Promise.resolve();
                        for (const m of Object.keys(window)) {
                            if (Eo.includes(m) || m.startsWith("webpack") || !Number.isNaN(+m)) continue;
                            const h = window[m],
                                t = o[m];
                            if (h !== t) {
                                window.console.warn(`window.${m} value has been changed from`, t, "to", h);
                                try {
                                    window[m] = t
                                } catch (o) {
                                    return Promise.reject(`SandboxGlobalsWrapper - window.${m} modified`)
                                }
                            }
                        }
                        return Promise.resolve()
                    }
                }
                const wo = Symbol("Sandbox known DOM node"),
                    fo = Symbol("Sandbox expected nodeValue"),
                    yo = Symbol("Sandbox expected attributes"),
                    Jo = Object.keys(HTMLElement.prototype).filter((o => o.startsWith("on")));
                class Oo {
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
                        this.markIgnoredElements(`style[data-source="evo-video-components"]`), this.markIgnoredElements(`script[src^="chrome-extension:"]`)
                    }
                    markIgnoredElements(o) {
                        const m = document.querySelectorAll(o);
                        for (let o = 0; o < m.length; o++) m[o].setAttribute("data-sandbox", "ignore")
                    }
                    removeUnknownElements(o, m) {
                        for (; o;) {
                            const h = o.nextSibling;
                            if (o instanceof Element && "ignore" === o.getAttribute("data-sandbox")) {
                                o = h;
                                continue
                            }
                            const t = o[wo];
                            if (t !== m) {
                                if (null != t) throw new Error("Predefined DOM node has been removed.");
                                this.warnMountedReact(o, !1), window.console.warn("DOM element not cleared up by the application.", o), o.parentNode.removeChild(o), o = h;
                                continue
                            }
                            m++;
                            const B = o[fo];
                            if (o.nodeValue !== B && (window.console.warn("DOM element nodeValue not reset by the application.", o, {
                                    got: o.nodeValue,
                                    expected: B
                                }), o.nodeValue = B), o instanceof Element && this.resetAttributes(o), o._reactRootContainer) throw window.console.error("ReactDOM is not unmounted from the node.", o), new Error("ReactDOM is not unmounted");
                            o.firstChild && (m = this.removeUnknownElements(o.firstChild, m)), o = h
                        }
                        return m
                    }
                    warnMountedReact(o, m) {
                        for (; o;) o._reactRootContainer ? window.console.warn("ReactDOM is not unmounted from the node.", o) : o.firstChild && this.warnMountedReact(o.firstChild, !0), o = m ? o.nextSibling : null
                    }
                    markKnownElements(o, m) {
                        for (; o;) {
                            const h = o.nextSibling;
                            o instanceof Element && "ignore" === o.getAttribute("data-sandbox") || (o[wo] = m, m++, o instanceof Element && o.hasAttributes() && (o[yo] = this.captureAttributes(o)), o[fo] = o.nodeValue, o.firstChild && (m = this.markKnownElements(o.firstChild, m))), o = h
                        }
                        return m
                    }
                    resetAttributes(o) {
                        const m = o[yo];
                        if (!m) return;
                        for (let h = 0; h < m.length; h += 2) {
                            const t = m[h],
                                B = m[h + 1],
                                P = o.getAttribute(t);
                            B !== P && (("style" !== t || B || P) && window.console.warn("Attribute not restored by the application", o, {
                                name: t,
                                got: P,
                                expected: B
                            }), o.setAttribute(t, B))
                        }
                        const h = o.getAttributeNames();
                        for (const t of h) {
                            let h = !0;
                            if (m)
                                for (let o = 0; o < m.length; o += 2)
                                    if (m[o] === t) {
                                        h = !1;
                                        break
                                    }
                            h && o.removeAttribute(t)
                        }
                        for (const m of Jo) {
                            const h = o[m];
                            h && (window.console.warn("Event handler not removed", o, {
                                name: m,
                                got: h
                            }), o[m] = null)
                        }
                    }
                    captureAttributes(o) {
                        const m = [];
                        for (const h of o.getAttributeNames()) m.push(h, o.getAttribute(h));
                        return m
                    }
                }
                const eo = Symbol("Sandbox event collection");
                class Ho {
                    constructor() {
                        this.isCapturing = !1, this.eventTargets = []
                    }
                    isSupported() {
                        if (!window.matchMedia) return !0;
                        const o = this.getMediaQueryListPrototype();
                        return !!(null == o ? void 0 : o.addListener)
                    }
                    init() {
                        if (!window.matchMedia) return;
                        const o = this.eventTargets,
                            m = this.getMediaQueryListPrototype(),
                            h = m.addListener,
                            t = m.removeListener,
                            B = this;
                        m.addListener = function(m) {
                            if (h.call(this, m), !this || !B.isCapturing) return;
                            const t = this[eo] || (this[eo] = []);
                            t.length || o.push(this), t.push({
                                listener: m,
                                stack: new Error
                            })
                        }, m.removeListener = function(m) {
                            t.call(this, m);
                            const h = this[eo];
                            if (h && Object) {
                                for (let o = 0; o < h.length; o++)
                                    if (h[o].listener === m) {
                                        c.wc(h, o);
                                        break
                                    }
                                h.length || c.ZP(o, this)
                            }
                        }
                    }
                    reset() {
                        this.eventTargets.length = 0, this.isCapturing = !0
                    }
                    clean() {
                        for (let o = this.eventTargets.length - 1; o >= 0; o--) {
                            const m = this.eventTargets[o],
                                h = m[eo];
                            if (null == h ? void 0 : h.length)
                                for (window.console.warn("matchMedia().addListener has not been cleared up by application code.", m, h.slice()); h.length;) m.removeListener(h[0].listener)
                        }
                    }
                    getMediaQueryListPrototype() {
                        return "undefined" != typeof MediaQueryList ? MediaQueryList.prototype : Object.getPrototypeOf(window.matchMedia(""))
                    }
                }
                const ao = Error;
                class jo {
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
                        for (const [o, m] of this.timers) window.console.warn("setTimeout/setInterval has not been cleared up by application code.", m), window.clearTimeout(o);
                        for (const [o, m] of this.animationFrames) window.console.warn("requestAnimationFrame has not been cleared up by application code.", m), window.cancelAnimationFrame(o)
                    }
                    timerRemover(o, m) {
                        return h => {
                            "number" == typeof h && (m(h), o.delete(h))
                        }
                    }
                    timerCreator(o, m, h) {
                        return (t, B, ...P) => {
                            let E;
                            return E = h(m ? () => {
                                m && o.delete(E), "string" == typeof t ? Function(t)() : t && t.call(null, ...P)
                            } : t, B), this.isCapturing && o.set(E, new ao), E
                        }
                    }
                    rafCreator(o, m) {
                        return (h, t) => {
                            let B;
                            return B = m((m => {
                                o.delete(B), h && h.call(null, m)
                            })), this.isCapturing && "sandboxIgnore" !== t && o.set(B, new ao), B
                        }
                    }
                }
                const po = [],
                    so = WebSocket;

                function Qo(o) {
                    if (arguments.length > 1) throw new Error("Only 1 argument expected");
                    const m = new so(o);
                    return function(o) {
                        po.push(o), I.addEventListener(o, "close", qo), I.addEventListener(o, "error", qo)
                    }(m), m
                }

                function qo() {
                    this.removeEventListener("close", qo), this.removeEventListener("error", qo), Object && c.ZP(po, this)
                }
                Object.assign(Qo, WebSocket), Qo.prototype = so.prototype;
                class zo {
                    init() {
                        window.WebSocket = Qo
                    }
                    reset() {
                        for (; po.length;) qo.call(po[0])
                    }
                    clean() {
                        return po.length && window.console.warn("WebSocket instances are not closed", po.slice()), new Promise(((o, m) => {
                            this.verify(1e3, o, m)
                        }))
                    }
                    verify(o, m, h) {
                        if (o < 0) return window.console.error("WebSocket instances are still open", po.slice()), h("SandboxWebSocketWrapper detected open connections");
                        if (0 === po.length) return m();
                        for (let o = po.length - 1; o >= 0; o--) po[o].close(4e3, "SPA switch");
                        I.setTimeout((() => this.verify(o - 25, m, h)), 25)
                    }
                }
                const go = [];
                class vo {
                    init() {
                        if ("undefined" == typeof Worker) return;
                        const o = Worker;

                        function m(m) {
                            const h = new o(m);
                            var t;
                            return t = h, go.push(t), h
                        }
                        Object.assign(m, Worker), m.prototype = o.prototype;
                        const h = o.prototype.terminate;
                        m.prototype.terminate = function() {
                            Object && c.ZP(go, this), h.call(this)
                        }, window.Worker = m
                    }
                    reset() {
                        go.length = 0
                    }
                    clean() {
                        go.length && window.console.warn("Worker instances are not terminated", go.slice());
                        for (let o = go.length - 1; o >= 0; o--) go[o].terminate()
                    }
                }
                const Ko = [];

                function lo() {
                    Object && (c.ZP(Ko, this), Promise.resolve().then((() => {
                        this[ho] && this[ho]()
                    })))
                }
                class Ao {
                    init() {
                        const o = XMLHttpRequest.prototype.send;
                        XMLHttpRequest.prototype.send = function(m) {
                            Ko.push(this), "onloadend" in this ? this.addEventListener("loadend", lo) : (this.addEventListener("load", lo), this.addEventListener("abort", lo), this.addEventListener("error", lo)), o.call(this, m)
                        }
                    }
                    reset() {
                        Ko.length = 0
                    }
                    clean() {
                        let o = 0;
                        for (; o++ < 5 && Ko.length;) {
                            const o = Ko.slice();
                            Ko.length = 0;
                            for (const m of o) window.console.warn("Sandbox interrupted request", m), m.abort()
                        }
                        if (Ko.length) return window.console.error("Pending requests", Ko), Promise.reject("XMLHttpRequest infinite retries")
                    }
                }
                class bo {
                    static getSingleton() {
                        return this._singleton || (this._singleton = new bo), this._singleton
                    }
                    constructor() {
                        this.enabled = !0, this.wrappers = 0 ? 0 : [new W, new Po, new Ao, new jo, new to, new Ho, new Oo, new io, new zo, new vo, new oo];
                        try {
                            if (window.EVO_LOADER.deviceInfo.isBaiduBrowser) return void(this.enabled = !1);
                            for (const o of this.wrappers)
                                if (o.isSupported && !o.isSupported()) return void(this.enabled = !1);
                            for (const o of this.wrappers) o.init()
                        } catch (o) {
                            const m = `Failed to initialize Sandbox: ${o instanceof Error?`${o.message}\n${o.stack}`:``}`;
                            window.EVO_VERBOSE(m, 1), window.console.error(m), this.enabled = !1
                        }
                    }
                    reset() {
                        return this.enabled ? Promise.all(this.wrappers.map((o => o.reset()))) : Promise.reject(new Error("Sandbox not supported in browser"))
                    }
                    clean() {
                        if (!this.enabled) return Promise.reject(new l.mN("Sandbox not supported in browser", {
                            sendToSentry: !1
                        }));
                        let o = Promise.resolve();
                        for (let m = 0; m < 2; m++) o = o.then((() => Promise.all(this.wrappers.map((o => o.clean()))))), o = o.then((() => new Promise((o => {
                            I.setTimeout(o)
                        })))), o = o.then((() => window.console.log(`Sandbox cleanup phase ${m+1} done.`)));
                        return o
                    }
                }
                bo._singleton = void 0;
                class Uo {
                    constructor() {
                        this.disposed = !1, this.events = {}
                    }
                    subscribe(o, m) {
                        if (Array.isArray(o)) {
                            const h = o.map((o => this.ensureEvent(o).promise));
                            Promise.all(h).then((o => m(...o)))
                        } else this.ensureEvent(o).promise.then(m)
                    }
                    publish(o, m) {
                        const h = this.ensureEvent(o);
                        if (h.resolved) throw new Error(`publish() called more than once for ${o}`);
                        window.EVO_VERBOSE(`Loader/${o}: done`, 0, o), h.resolved = !0, h.value = m, h.resolver(m)
                    }
                    getValue(o) {
                        const m = this.events[o];
                        return null == m ? void 0 : m.value
                    }
                    getPromise(o) {
                        return this.ensureEvent(o).promise
                    }
                    resetEvent(o) {
                        const m = this.events[o];
                        if (m) {
                            if (!m.resolved) throw new Error("Cannot reset unfinished event.");
                            delete this.events[o]
                        }
                    }
                    dispose() {
                        this.disposed = !0, this.events = {}
                    }
                    ensureEvent(o) {
                        if (this.disposed) throw new Error("PubSub has been disposed");
                        const m = this.events[o];
                        if (m) return m;
                        let h;
                        window.EVO_VERBOSE(`Loader/${o}: waiting`, 0, o);
                        const t = new Promise((o => {
                            h = o
                        }));
                        if (!h) throw new Error("Async promise ctor");
                        return this.events[o] = {
                            promise: t,
                            resolver: h,
                            resolved: !1,
                            value: void 0
                        }
                    }
                }
                class To extends Uo {
                    constructor(o) {
                        super(), this.loader = o, this.uaLaunchId = null, this.lobbyLaunchId = null, this.logs = [], this.consumer = void 0, this.attributionId = c.Ds()
                    }
                    get provider() {
                        var o;
                        return (null === (o = this.getValue("config")) || void 0 === o ? void 0 : o.game_provider) || c.EE() || this._provider
                    }
                    set provider(o) {
                        this._provider = o
                    }
                    dispose(o) {
                        return this.publish("disposing", o), this.consumer = void 0, this.logs.length = 0, Promise.resolve(super.dispose())
                    }
                    storeLog(o) {
                        this.consumer ? this.consumer(o) : this.logs.push(o)
                    }
                    setLogConsumer(o) {
                        this.consumer = o, this.logs.length && (this.logs.forEach((m => o(m))), this.logs.length = 0)
                    }
                }
                const ko = 1e4,
                    So = Symbol("video-lib-timeout");
                class Go extends To {
                    constructor(o) {
                        super(o), this.loadProgress = null, this.sandboxInitialization = bo.getSingleton().reset().catch((o => {
                            l.vV(new l.mN(`Failed to initialize Sandbox: ${o.message}`))
                        })), this.disposePromise = void 0, this.gameLoader = void 0, this.gameLoaderState = void 0, this.setupWorkflow()
                    }
                    dispose(o) {
                        if (this.disposePromise) return this.disposePromise;
                        const m = !this.gameLoader || void 0 === this.getValue("gameLoaded"),
                            h = performance.now();
                        return this.disposePromise = this.disposeInstance(o).then((() => m ? Promise.reject(new l.mN("Game loader not yet finished", {
                            sendToSentry: !1
                        })) : Promise.race([this.gameLoader.dispose(this.gameLoaderState), c.cb(3e3).then((() => Promise.reject(new Error("Game dispose took >3 sec"))))]))).then((() => bo.getSingleton().clean())).then((() => {
                            const o = performance.now();
                            window.console.log("Dispose of previous instance took", Math.floor(o - h), "ms")
                        }))
                    }
                    disposeInstance(o) {
                        var m, h;
                        return super.dispose({
                            applicationType: null !== (h = null === (m = this.gameLoader) || void 0 === m ? void 0 : m.applicationType) && void 0 !== h ? h : "unknown",
                            suppressLoadingScreen: (null == o ? void 0 : o.suppressLoadingScreen) || !1
                        })
                    }
                    setupWorkflow() {
                        const o = this.loader;
                        o.shared.subscribe("setup", (o => {
                            this.disposed || (this.subscribe("config", (m => this.handlePublishedConfig(o, m))), this.subscribe(["config", "sandbox"], (m => this.requestGameManifest(m, o))), this.subscribe(["gamePackageManifest", "config"], ((m, h) => {
                                this.requestAudioLibrary(o, m, h)
                            })), this.startSandbox())
                        })), this.subscribe("gamePackageManifest", (m => {
                            this.requestLocalization(m), this.requestScripts(m), this.requestStyleSheet(m), m.ignoreVideo || (this.loader.video.loadLibrary(), Promise.race([c.cb(ko, So), o.video.getPromise("module")]).then((m => {
                                m === So && o.sendLog("CLIENT_ERROR", {
                                    error: "videoLibrary/timeout"
                                })
                            })))
                        })), o.shared.subscribe(["setup", "style", "i18n"], ((o, m, h) => {
                            this.disposed || this.subscribe(["config", "gamePackageManifest", "appLocalization", "bundleCss"], ((t, B, P) => {
                                this.runApp(o, m, Object.assign(Object.assign({}, h), P), t, B)
                            }))
                        }))
                    }
                    async handlePublishedConfig(o, m) {
                        var h, t, B, P, E, i;
                        "undefined" != typeof Sentry && (Sentry.configureScope((h => {
                            h.setTags({
                                gameType: m.game || m.frontend_app,
                                casinoId: o.casino_id
                            })
                        })), Sentry.setUser({
                            id: o.user_id,
                            username: o.player_id
                        }));
                        const w = a.w(window.location.href),
                            f = encodeURIComponent(w.getParam("branding_id") || m.branding_id || "");
                        if (f) {
                            const o = F(`${f}/manifest.json`);
                            try {
                                const m = await c.QJ(o, "json");
                                null === (t = null === (h = window.EVO_LOADER) || void 0 === h ? void 0 : h.instance) || void 0 === t || t.publish("brandingManifest", m)
                            } catch (m) {
                                N.Z(o, m), null === (P = null === (B = window.EVO_LOADER) || void 0 === B ? void 0 : B.instance) || void 0 === P || P.publish("brandingManifest", null)
                            }
                        } else null === (i = null === (E = window.EVO_LOADER) || void 0 === E ? void 0 : E.instance) || void 0 === i || i.publish("brandingManifest", null)
                    }
                    startSandbox() {
                        this.sandboxInitialization.then((() => {
                            this.publish("sandbox", !0)
                        })).catch((() => {
                            this.publish("sandbox", !1)
                        }))
                    }
                    requestGameManifest(o, m) {
                        let h = o.frontend_manifest;
                        const t = m.globalSettings;
                        if (!h && t && o.frontend_app) {
                            const m = t.manifests;
                            h = null == m ? void 0 : m[o.frontend_app]
                        }
                        1 && h ? this.requestGameManifestRemote(o, h) : this.requestGameManifestLocal(o)
                    }
                    requestGameManifestRemote(o, m) {
                        const h = this.loader;
                        m.endsWith("/") && (m += "manifest.json"), c.QJ(m, "json").then((t => {
                            const B = $(o, h.deviceInfo.deviceType, !1, t);
                            if (!B) throw new Error(`Remote manifest '${m}' does not include definition for the given table.`);
                            this.publish("gamePackageManifest", B)
                        })).catch((o => {
                            this.loader.failed({
                                reason: "manifest",
                                failureDetails: o,
                                failedURL: m
                            })
                        }))
                    }
                    requestGameManifestLocal(o) {
                        let m;
                        try {
                            if (m = $(o, this.loader.deviceInfo.deviceType), 1) return void this.publish("gamePackageManifest", m);
                            this.loadNativeBundle(o, m)
                        } catch (m) {
                            if (1) return void this.loader.failed({
                                reason: "manifest",
                                failureDetails: m
                            });
                            1 && this.loadNativeBundle(o)
                        }
                    }
                    requestLocalization(o) {
                        let m = o.localization;
                        "common" !== m ? (m || (0 || "undefined" != typeof Sentry && Sentry.captureMessage(`${o.application} does not define 'localization' in manifest`), m = `../${encodeURIComponent(window.EVO_LOCALE)}`), c.FB(window.EVO_LOCALE, m).then((o => this.publish("appLocalization", o))).catch((o => {
                            this.loader.failed({
                                reason: "i18n",
                                failureDetails: o,
                                failedURL: `loc://${window.EVO_LOCALE}/${m}.json`
                            })
                        }))) : this.publish("appLocalization", null)
                    }
                    requestScripts(o) {
                        const m = this.loader;
                        for (const h of o.assets) {
                            if (!h.endsWith(".js")) continue;
                            const o = window.EVO_CDN + h;
                            m.assets.loadScript(o).catch((h => {
                                m.failed({
                                    reason: "scripts",
                                    failureDetails: h,
                                    failedURL: o
                                })
                            }))
                        }
                    }
                    requestStyleSheet(o) {
                        const m = this.loader,
                            h = o.assets.filter((o => o.endsWith(".css")));
                        for (let o = 0; o < h.length; o++) h[o] = window.EVO_CDN + h[o];
                        m.assets.loadStyles(h, !0).then((() => {
                            this.publish("bundleCss", null)
                        })).catch((o => {
                            m.failed({
                                reason: "stylesheets",
                                failureDetails: o
                            })
                        }))
                    }
                    requestAudioLibrary(o, m, h) {
                        var t;
                        const B = !1 || !0 === (null === (t = o.globalSettings) || void 0 === t ? void 0 : t.enable_local_sounds);
                        this.loader.audio.loadLibrary(m.audioLibrary, h.audio_package || m.audioPackage, B, this.getPromise("gameLoaded")).then((o => {
                            this.publish("audioLibrary", o)
                        })).catch((o => {
                            window.EVO_VERBOSE(`failed to load audio library: ${null==o?void 0:o.message}`, 2)
                        }))
                    }
                    runApp(o, m, h, t, B) {
                        const P = this.loader;
                        if (P.isFailed) return;
                        const E = {
                            reportProgress: o => {
                                this.loadProgress = o
                            },
                            gameType: t.game || L.Lobby,
                            instance: this,
                            setup: o,
                            deviceType: P.deviceInfo.deviceType,
                            tableConfig: t,
                            styles: m,
                            tableId: t.table_id || null,
                            virtualTableId: t.vt_id || null,
                            i18nData: h,
                            getRoot: () => document.getElementById("root"),
                            clientApi: P.clientApi,
                            captureLogo: P.captureLogo
                        };
                        window.EVO_VERBOSE("gameLoader/started", 0, "gameLoader"), Promise.all([P.applications.getPromise(B.loader), this.getPromise("audioLibrary")]).then((([o, m]) => (this.gameLoader = o, o.initialize(Object.assign(Object.assign({}, E), {
                            audioLibrary: m
                        }))))).then((o => {
                            this.gameLoaderState = o
                        })).then((() => {
                            var o, m;
                            window.EVO_VERBOSE("gameLoader/finish", 0, "gameLoader"), window.setTimeout((() => {
                                c.CB(), c.ZN()
                            }), 501), this.publish("gameLoaded", {
                                applicationType: null !== (m = null === (o = this.gameLoader) || void 0 === o ? void 0 : o.applicationType) && void 0 !== m ? m : "unknown"
                            }), performance.mark("evoLoaderClosed")
                        })).catch((o => {
                            const m = o instanceof Error ? o : new Error(`gameLoader failed: ${(null==o?void 0:o.message)||o}`, {
                                cause: o
                            });
                            P.failed({
                                reason: "gameLoader",
                                failureDetails: m
                            })
                        }))
                    }
                    loadNativeBundle(o, m) {
                        const h = this.loader;
                        Promise.all([c.QJ("../bundles.json", "json"), E.e(66885).then(E.bind(E, 845972))]).then((([h, {
                            getTargetBundle: t
                        }]) => t({
                            gameTypeOrLoader: (null == m ? void 0 : m.loader) || o.game || "lobby",
                            frontendApp: o.frontend_app
                        }, h, !1))).then((o => {
                            m && ("*" === o || "6.20240808.72721.43530-9cfa25698c".endsWith(`-${o}-native`)) ? this.publish("gamePackageManifest", m) : (window.EVO_LOADER.sendLog("CLIENT_GAME_RELOAD", {
                                reason: "Loading native build - redirected from another place"
                            }), window.location.href = `../${o}/index.html${window.location.search}${window.location.hash}`)
                        })).catch((o => {
                            0 || h.failed({
                                reason: "manifest",
                                failureDetails: o
                            })
                        }))
                    }
                }
                class uo extends Go {
                    constructor(o, m) {
                        let h;
                        super(o), this.kind = "app";
                        const t = m ? m.indexOf("@") : -1;
                        t > -1 && (h = c.UA(m.substr(t + 1)), m = m.substr(0, t)), m || (m = uo.defaultApp);
                        const B = {
                            game: "",
                            frontend_app: m,
                            frontend_manifest: h
                        };
                        m === r ? this.requestConfigData(m, B) : this.publish("config", B)
                    }
                    requestConfigData(o, m) {
                        const h = this.loader,
                            t = U("/config", {
                                app: o
                            });
                        c.QJ(t, "json").then((o => {
                            Object.assign(o, m), this.publish("config", o)
                        })).catch((o => {
                            o instanceof N.$ && 403 === o.status ? h.failedAuth() : (N.Z(t, o), h.failed({
                                reason: "config",
                                failureDetails: o,
                                failedURL: t
                            }))
                        }))
                    }
                }
                uo.defaultApp = "lobby";
                class _o extends To {
                    constructor() {
                        super(...arguments), this.kind = "empty", this.disposePromise = null
                    }
                    dispose() {
                        return this.disposePromise || (this.disposePromise = super.dispose()), this.disposePromise
                    }
                }
                class Ro extends Go {
                    constructor(o, m, h, t, B, P, E) {
                        super(o), this.tableId = m, this.virtualTableId = h, this.app = t, this.balanceId = B, this.uaLaunchId = P, this.lobbyLaunchId = E, this.kind = "game", this.redirected = !1, this.disposePromise2 = null, this.requestConfigData()
                    }
                    dispose(o) {
                        var m;
                        return this.redirected ? null !== (m = this.disposePromise2) && void 0 !== m ? m : this.disposePromise2 = super.disposeInstance(o) : super.dispose(o)
                    }
                    requestConfigData() {
                        const o = this.loader,
                            m = U("/config", {
                                table_id: this.tableId,
                                vt_id: this.virtualTableId,
                                origin: window.location.origin
                            });
                        c.QJ(m, "json").then((o => {
                            if (!this.checkPlatformSupport(o)) return;
                            const m = this.app;
                            if (m) {
                                window.console.warn("Overriding game type and manifest with", m);
                                let h = m.indexOf("@");
                                h < 0 ? h = m.length : o.frontend_manifest = c.UA(m.substr(h + 1)), h > 0 && (o.frontend_app = m.substr(0, h), delete o.loader_expected_resource_count, delete o.loader_resources_counting_mode)
                            }
                            this.gameType = o.game_type, this.publish("config", o)
                        })).catch((h => {
                            h instanceof N.$ && 403 === h.status ? o.failedAuth() : (N.Z(m, h), o.failed({
                                reason: "config",
                                failureDetails: h,
                                failedURL: m
                            }))
                        }))
                    }
                    checkPlatformSupport(o) {
                        const m = this.loader.deviceInfo.isDesktop ? o.desktop_table_id : o.mobile_table_id;
                        if (m) {
                            window.console.log("Because of platform, using a different table", m);
                            const [o, h] = m.split(";"), t = a.w(window.location.href);
                            return delete t.searchParams["table_id"], delete t.searchParams["vt_id"], t.hashParams["table_id"] = o, t.hashParams["vt_id"] = h, this.redirected = !0, this.loader.init(t.toString()), this.loader.sendLog("CLIENT_GAME_RELOAD", {
                                reason: "Platform not supported, redirecting to a different table"
                            }), !1
                        }
                        return !0
                    }
                }
                var no, Xo;
                (function(o) {
                    o["SoundsVolume"] = "EvoInterfaceSoundsVolume", o["SoundsMuted"] = "EvoInterfaceSoundsMute", o["VideoVolume"] = "EvoInterfaceVideoVolume", o["VideoMuted"] = "EvoInterfaceVideoMuted", o["LastAppUri"] = "EvoLastAppUri"
                })(no || (no = {})),
                function(o) {
                    o["Evo"] = "", o["Neon"] = "Neon", o["DS"] = "DS"
                }(Xo || (Xo = {}));
                const {
                    getStorageKey: ro,
                    setStorageKey: Co
                } = (Lo = Xo.Evo, {
                    getStorageKey(o) {
                        try {
                            const m = localStorage.getItem(Lo + o);
                            return m ? JSON.parse(m) : void 0
                        } catch (o) {
                            return
                        }
                    },
                    setStorageKey(o, m) {
                        try {
                            return void 0 === m ? localStorage.removeItem(Lo + o) : localStorage.setItem(Lo + o, JSON.stringify(m)), !0
                        } catch (o) {
                            return !1
                        }
                    }
                });
                var Lo;
                const Vo = "ShowEvoLogo";
                var No;
                (function(o) {
                    o["Sidebar"] = "sidebar", o["Fill"] = "fill", o["TopBar"] = "topbar"
                })(No || (No = {}));
                class co extends To {
                    get location() {
                        const o = this.frame.contentWindow;
                        let m = o ? o.location.href : null;
                        if (m && !m.startsWith("about:") || (m = this.frame.src), m.includes(k)) {
                            const o = a.w(m);
                            delete o.searchParams[k], m = o.toString()
                        }
                        return m
                    }
                    constructor(o, m, h, t, B = No.Fill) {
                        super(m), this.parent = o, this.kind = "frame", this.layout = No.Fill, this.disposePromise2 = null, this.frameUrlChanged = () => {
                            this.parent.updateUri(!0)
                        }, this.frameUnloadListener = () => {
                            setTimeout(this.frameLoadListener, 0)
                        }, this.frameLoadListener = () => {
                            this.frameUrlChanged();
                            const o = this.frame.contentWindow;
                            o && (o.addEventListener("pagehide", this.frameUnloadListener, !0, "evo-loader"), o.addEventListener("hashchange", this.frameUrlChanged, !0, "evo-loader"), o.addEventListener("pushstate", this.frameUrlChanged, !0, "evo-loader"), o.addEventListener("replacestate", this.frameUrlChanged, !0, "evo-loader"))
                        };
                        const P = document.createElement("iframe");
                        this.frame = P, this.layout = B, P.src = S(h), P.addEventListener("load", this.frameLoadListener), t.appendChild(P)
                    }
                    dispose() {
                        return this.disposePromise2 || (this.disposePromise2 = Promise.resolve().then((() => {
                            const o = this.frame;
                            o.removeEventListener("load", this.frameLoadListener), o.parentNode && o.parentNode.removeChild(o)
                        })).then((() => super.dispose()))), this.disposePromise2
                    }
                    navigate(o) {
                        o = S(o);
                        try {
                            const {
                                contentWindow: m
                            } = this.frame;
                            if (null == m ? void 0 : m.EVO_LOADER) return void(m.location.href !== o && m.location.replace(o))
                        } catch (o) {}
                        this.frame.src = o
                    }
                    resize(o, m) {
                        this.frame.style.width = `${Math.floor(o)}px`, this.frame.style.height = `${Math.floor(m)}px`
                    }
                }
                const Fo = j("multiwindow {74d74998-b630-473a-b390-58f11d036a96}"),
                    $o = "mwLayout",
                    Io = 400,
                    Do = .85,
                    xo = 30;
                class Wo extends To {
                    constructor(o, m, h = !1) {
                        var t;
                        super(o), this.kind = "multi", this.frames = [], this.window = window, this.wasMoveDone = !1, this.scrolling = !1, this.touchEndResetTimer = null, this.disposePromise2 = null, this.isSidebarFullHeight = !1, this.handleScrollAction = () => {
                            document.body.classList.contains("compact") && this.wasMoveDone && (this.scrolling = !0, this.removeResetTimeout(), this.touchEndResetTimer = window.setTimeout((() => {
                                this.scrolling = !1, this.wasMoveDone = !1, document.body.classList.contains("compact") && window.scrollTo(0, 0)
                            }), 500))
                        }, this.handleContinuousScroll = o => {
                            this.wasMoveDone = !0, this.scrolling && o.preventDefault()
                        }, this.getDimensionsAndLayoutFrames = () => {
                            const o = () => this.loader.deviceInfo.isIos15PhoneSafari ? window.innerHeight + window.scrollY : window.innerHeight;
                            let m = o(),
                                h = window.innerWidth;
                            this.layoutFrames(m, h), setTimeout((() => {
                                const t = o(),
                                    B = window.innerWidth;
                                t === m && B === h || (m = t, h = B, this.layoutFrames(t, B))
                            }), 1e3)
                        }, this.layoutFrames = (o, m) => {
                            const {
                                isPhone: h
                            } = this.loader.deviceInfo, t = this.countFrames();
                            let B = 0,
                                P = 0;
                            const E = t[No.TopBar] > 0 ? xo : 0;
                            t[No.Sidebar] > 0 && (B = h ? Math.floor(m / t[No.Sidebar]) : Io * t[No.Sidebar], P = !h || m > o || this.isSidebarFullHeight ? o : Math.floor(o * Do), P -= E);
                            const i = h ? m : m - B,
                                w = o - E;
                            this.sidebarContainer.style.width = `${B}px`, this.sidebarContainer.style.height = `${P}px`, this.loader.deviceInfo.isDesktop && (this.gamesContainer.style.width = `calc(100% - ${B}px)`), E && this.container.classList.add("withTopBar"), this.topBarContainer.style.height = `${E}px`;
                            const f = this.calculateOptimumSize(i, w, t[No.Fill]);
                            for (const o of this.frames) switch (o.layout) {
                                case No.Fill:
                                    (this.loader.deviceInfo.isDesktop || this.loader.deviceInfo.isIosChromeBrowser) && o.resize(f.width, f.height);
                                    break;
                                case No.Sidebar:
                                    t[No.Sidebar] > 1 && o.resize(Math.floor(B / t[No.Sidebar]), P);
                                    break;
                                case No.TopBar:
                                    o.resize(f.width, xo)
                            }
                        };
                        const B = document.getElementById("inGameLobby");
                        (null == B ? void 0 : B.parentNode) && B.parentNode.removeChild(B);
                        const P = document.createElement("div");
                        this.container = P, P.className = "loader-frame-container", document.body.appendChild(P);
                        const E = document.createElement("div");
                        this.topBarContainer = E, E.className = "topbar-container", P.appendChild(E);
                        const i = document.createElement("div");
                        this.gamesContainer = i, i.className = "games-container", P.appendChild(i);
                        const w = document.createElement("div");
                        this.sidebarContainer = w, w.className = "sidebar-container", P.appendChild(w);
                        for (const o of _(m)) this.addFrame(o, !1);
                        h || this.frames.length || this.addFrame(b(), !1), this.getDimensionsAndLayoutFrames(), this.loader.deviceInfo.isPhone && this.loader.deviceInfo.isIosDevice && (setTimeout((() => {
                            this.getDimensionsAndLayoutFrames()
                        }), 400), window.addEventListener("scroll", this.handleScrollAction), document.body.addEventListener("touchmove", this.handleContinuousScroll), document.body.addEventListener("touchstart", this.handleContinuousScroll)), window.addEventListener("resize", this.getDimensionsAndLayoutFrames), this.loader.deviceInfo.isIosChromeBrowser && (null === (t = window.visualViewport) || void 0 === t || t.addEventListener("resize", this.getDimensionsAndLayoutFrames)), this.publish("gameLoaded", void 0), setTimeout(c.CB, 1e3)
                    }
                    removeResetTimeout() {
                        this.touchEndResetTimer && (window.clearTimeout(this.touchEndResetTimer), this.touchEndResetTimer = null)
                    }
                    dispose() {
                        return this.disposePromise2 || (this.disposePromise2 = Promise.resolve().then((() => {
                            var o;
                            window.removeEventListener("resize", this.getDimensionsAndLayoutFrames), document.body.removeChild(this.container), window.removeEventListener("scroll", this.handleScrollAction), document.body.removeEventListener("touchmove", this.handleContinuousScroll), document.body.removeEventListener("touchstart", this.handleContinuousScroll), this.loader.deviceInfo.isIosChromeBrowser && (null === (o = window.visualViewport) || void 0 === o || o.removeEventListener("resize", this.getDimensionsAndLayoutFrames)), this.removeResetTimeout()
                        })).then((() => Promise.all(this.frames.map((o => o.dispose()))))).then((() => super.dispose()))), this.disposePromise2
                    }
                    update(o, m = !1) {
                        if (!Array.isArray(o)) {
                            const m = o.getParam("mwg");
                            o = m ? _(m) : [o.toString()]
                        }
                        const h = this.frames;
                        for (let m = 0; m < Math.min(h.length, o.length); m++) {
                            const t = o[m];
                            h[m].layout === this.getFrameLayout(t) ? h[m].navigate(t) : (this.removeFrame(h[m].frame, {
                                update: !1
                            }), this.addFrame(t, !1))
                        }
                        for (; h.length < o.length;) this.addFrame(o[h.length], !1);
                        for (; h.length > o.length;) this.removeFrame(h[h.length - 1].frame, {
                            update: !1
                        });
                        return this.finalizeUpdate(m), Promise.resolve()
                    }
                    updateUri(o = !1) {
                        if (this.loader.instance === this) {
                            const m = function(o) {
                                if (1 === o.length) {
                                    const m = a.w(o[0]);
                                    if (m.origin === window.location.origin && m.pathname === window.location.pathname) return o[0]
                                }
                                return window.location.origin + b({
                                    mwg: u(o)
                                }, !1)
                            }(this.frames.map((o => o.location)));
                            if (window.location.href !== m) try {
                                window.history[o ? "replaceState" : "pushState"](null, "", m), Co("EvoLastAppUri", m)
                            } catch (o) {}
                        }
                    }
                    getFrameLayout(o) {
                        return a.w(o).getParam($o) || No.Fill
                    }
                    addFrame(o, m = !0) {
                        const h = this.getFrameLayout(o);
                        let t = this.gamesContainer;
                        switch (h) {
                            case No.Sidebar:
                                t = this.sidebarContainer;
                                break;
                            case No.TopBar:
                                t = this.topBarContainer
                        }
                        this.frames.push(new co(this, this.loader, o, t, h)), m && this.finalizeUpdate()
                    }
                    removeFrame(o, m = {
                        update: !0,
                        animateOnMobile: !1
                    }) {
                        const h = m.animateOnMobile && !this.loader.deviceInfo.isDesktop,
                            t = this.frames.findIndex((m => m.frame === o));
                        if (t > -1) {
                            const B = this.frames[t];
                            this.frames.splice(t, 1), this.isSidebarFullHeight && B.layout === No.Sidebar && (this.isSidebarFullHeight = !1), h && o.classList.add("disposing"), setTimeout((() => {
                                B.dispose().catch((() => {})), m.update && this.finalizeUpdate()
                            }), h ? 500 : 0)
                        }
                    }
                    isLastFillFrame(o) {
                        for (const m of this.frames)
                            if (m.frame !== o && m.layout === No.Fill) return !1;
                        return !0
                    }
                    finalizeUpdate(o = !1) {
                        this.frames.length || this.addFrame(b(), !1), this.getDimensionsAndLayoutFrames(), this.updateUri(o), this.loader.broadcast.sendValues(Fo, {})
                    }
                    countFrames() {
                        let o = 0,
                            m = 0,
                            h = 0;
                        for (const {
                                layout: t
                            } of this.frames) switch (t) {
                            case No.Fill:
                                o++;
                                break;
                            case No.Sidebar:
                                m++;
                                break;
                            case No.TopBar:
                                h++
                        }
                        return {
                            [No.Fill]: o,
                            [No.Sidebar]: m,
                            [No.TopBar]: h
                        }
                    }
                    setSidebarHeight(o) {
                        this.isSidebarFullHeight = o;
                        const m = window.innerHeight,
                            h = window.innerWidth,
                            {
                                isPhone: t
                            } = this.loader.deviceInfo,
                            B = !t || h > m || this.isSidebarFullHeight ? m : Math.floor(m * Do),
                            P = this.countFrames()[No.TopBar] > 0 ? xo : 0;
                        this.sidebarContainer.style.height = `${B-P}px`
                    }
                    calculateOptimumSize(o, m, h) {
                        if (h < 2) return {
                            width: o,
                            height: m
                        };
                        let t = 0,
                            B = 0;
                        for (let P = 1; P <= h; P++) {
                            const E = Math.ceil(h / P),
                                i = Math.min(m / E, o / P * 9 / 16);
                            i > B && (B = i, t = 16 * i / 9)
                        }
                        return {
                            width: t,
                            height: B
                        }
                    }
                }
                class Yo extends To {
                    constructor(o, m, h, t, B, P) {
                        super(o), this.tableId = m, this.virtualTableId = h, this.multiwindow = t, this.balanceId = B, this.app = P, this.kind = "switch"
                    }
                    dispose() {
                        return super.dispose().then((() => Promise.reject("Another switch is in progress")))
                    }
                }
                class Mo {
                    constructor() {
                        this.scripts = {}, this.styles = {}, this.enabledStyles = [], this.timeout = window.EVO_CDN ? 15e3 : 6e4
                    }
                    loadStyles(o, m = !1) {
                        Array.isArray(o) || (o = [o]);
                        const h = o.map((o => (this.styles[o] || (this.styles[o] = this.createLinkElement(o))).then((o => this.setLinkEnabled(o, !0)))));
                        return Promise.all(h).then((o => {
                            if (m) {
                                for (const m of this.enabledStyles) o.includes(m) || this.setLinkEnabled(m, !1);
                                this.enabledStyles = o
                            } else this.enabledStyles.push(...o)
                        }))
                    }
                    loadScript(o, m = !1, h = !1, t = !1) {
                        const B = this.scripts[o];
                        if (B && !h) return B;
                        const P = document.createElement("script");
                        P.charset = "utf-8", P.async = m;
                        const E = this.waitForLoaded(P, o);
                        return this.scripts[o] = E, P.src = o, t && (P.type = "module"), document.head.appendChild(P), document.head.removeChild(P), E
                    }
                    waitForLoaded(o, m) {
                        return new Promise(((h, t) => {
                            let B = 0;
                            const P = h => {
                                h.filename === o.src && (E(!0), t(`Failed: ${m}`))
                            };
                            window.addEventListener("error", P);
                            const E = m => {
                                clearTimeout(B), window.removeEventListener("error", P), m && o.parentNode && o.parentNode.removeChild(o)
                            };
                            B = setTimeout((() => {
                                window.EVO_VERBOSE(`timeout for ${m}`, 2), E(!0), t(`timeout: ${m}`)
                            }), this.timeout), o.addEventListener("error", (o => {
                                N.Z(m, o.error), E(!0), t(`Failed: ${m}`)
                            })), o.addEventListener("load", (() => {
                                E(!1), h(o)
                            }))
                        }))
                    }
                    setLinkEnabled(o, m) {
                        const h = Promise.resolve(o);
                        return o.disabled === !m ? h : (o.disabled = !m, m ? new Promise(((m, h) => {
                            let t = 0,
                                B = 0;
                            const P = document.styleSheets;
                            B = window.setInterval((function() {
                                if (t++ > 200) return clearInterval(B), h("setLinkEnabled");
                                for (let h = 0, t = P.length; h < t; h++)
                                    if (P[h].ownerNode === o) return clearInterval(B), m(o)
                            }), 16)
                        })) : h)
                    }
                    createLinkElement(o) {
                        const m = document.createElement("link");
                        m.rel = "stylesheet", m.href = o, m.setAttribute("data-sandbox", "ignore");
                        const h = this.waitForLoaded(m, o);
                        return document.head.appendChild(m), h
                    }
                }

                function Zo(o = !1) {
                    const m = window.EVO_CDN || window.EVO_ORIGIN || "";
                    if (!o) return m;
                    const h = a.w(window.location.href).getParam("localSounds");
                    return null !== h && /^\d{4,5}$/.test(h) ? `http://127.0.0.1:${encodeURIComponent(h)}` : m
                }
                let om;
                const mm = 1e4,
                    hm = Symbol("audio-lib-timeout");

                function tm(o) {
                    let m, h;
                    0 || (m = "warn", h = 1), window.console[m](o), window.EVO_VERBOSE(o.stack || o.message, h)
                }
                class Bm {
                    constructor() {
                        this.cache = {}
                    }
                    loadLibrary(o, m, h, t) {
                        let B = this.cache[o];
                        return void 0 !== B ? B : "ecas" === o || h && null !== a.w(window.location.href).getParam("localSounds") ? (async function(o, m = !1 || !1, h) {
                            var t, B;
                            const P = a.w(window.location.href);
                            if (null !== P.getParam("ecasOff")) throw new Error("Ecas is disabled");
                            const E = null !== (t = P.getParam("ecasPackage")) && void 0 !== t ? t : o;
                            if (!E) throw new Error("Failed to get package name");
                            const i = async function(o, m = !1) {
                                    const h = `${Zo(m)}/frontend/gametech/sounds/${encodeURIComponent(o)}/`;
                                    return c.QJ(`${h}ecasOptions.json`, "json").then((o => Object.assign(Object.assign({}, o), {
                                        loadrConfig: Object.assign(Object.assign({}, o.loadrConfig), {
                                            loadPath: h
                                        })
                                    })))
                                }(E, m),
                                w = null !== (B = P.getParam("ecasVersion")) && void 0 !== B ? B : "latest",
                                f = await async function(o = "latest", m = !1) {
                                    var h, t, B, P, E, i, w, f;
                                    if (void 0 !== om) return om.dispose(), window.ecas = om, om;
                                    const y = function(o = "latest", m = !1) {
                                        return `${Zo(m)}${`/frontend/gametech/sounds/ecas-distribution/`}${m?encodeURIComponent(o):"latest"}/provider.js`
                                    }(o, m);
                                    if (void 0 === (null === (t = null === (h = window.EVO_LOADER) || void 0 === h ? void 0 : h.assets) || void 0 === t ? void 0 : t.loadScript)) throw new Error("Failed to load script, loader is undefined");
                                    if (await (null === (P = null === (B = window.EVO_LOADER) || void 0 === B ? void 0 : B.assets) || void 0 === P ? void 0 : P.loadScript(y, !0, !0, !0)), "function" != typeof(null === (E = window.ecas) || void 0 === E ? void 0 : E.withOptions) || "function" != typeof(null === (i = window.ecas) || void 0 === i ? void 0 : i.load) || "function" != typeof(null === (w = window.ecas) || void 0 === w ? void 0 : w.trigger) || "function" != typeof(null === (f = window.ecas) || void 0 === f ? void 0 : f.dispose)) throw new Error("Failed to load ecas");
                                    return om = window.ecas, om
                                }(w, m);
                            await h;
                            const y = await i;
                            return f.withOptions(y).load(), f
                        }(m, h, t).catch((m => {
                            tm(new l.yW(`"${o}" audio library failed to load: ${m}`))
                        })), Promise.resolve("ecas")) : (B = "legacy" === o ? Promise.race([E.e(83100).then(E.t.bind(E, 976314, 23)), c.cb(mm, hm)]).then((o => {
                            if (o === hm) throw new l.yW(`Loading failed to load due to ${mm/1e3}s timeout`);
                            return o
                        })).catch((m => {
                            tm(new l.yW(`"${o}" audio library failed to load: ${m}`))
                        })) : Promise.resolve(void 0), this.cache[o] = B, B)
                    }
                }
                var Pm, Em, im;
                (function(o) {
                    o["Phone"] = "Phone", o["Tablet"] = "Tablet", o["Desktop"] = "Desktop"
                })(Pm || (Pm = {})),
                function(o) {
                    o["IpadNonRetina"] = "ipad-non-retina", o["IpadRetina"] = "ipad-retina", o["IpadPro"] = "ipad-pro", o["IpadPro11inch"] = "ipad-pro-11inch"
                }(Em || (Em = {})),
                function(o) {
                    o["Iphone5"] = "iphone5", o["Iphone6"] = "iphone6", o["IphonePlusZoomed"] = "iphone-plus-zoomed", o["IphonePlus"] = "iphone-plus", o["Iphone10"] = "iphone10", o["Iphone10Zoomed"] = "iphone10Zoomed", o["Iphone10sMax"] = "iphone10sMax", o["Iphone10R"] = "iphone10R", o["Iphone10RZoomed"] = "iphone10RZoomed", o["Iphone12"] = "iphone12", o["Iphone12ProMax"] = "iphone12ProMax", o["Iphone14Pro"] = "iphone14Pro", o["Iphone14ProMax"] = "iphone14ProMax"
                }(im || (im = {}));
                const wm = [{
                        min: 320,
                        max: 568,
                        ratio: 2,
                        type: im.Iphone5
                    }, {
                        min: 375,
                        max: 667,
                        ratio: 2,
                        type: im.Iphone6
                    }, {
                        min: 375,
                        max: 667,
                        ratio: 3,
                        type: im.IphonePlusZoomed
                    }, {
                        min: 414,
                        max: 736,
                        ratio: 3,
                        type: im.IphonePlus
                    }, {
                        min: 375,
                        max: 812,
                        ratio: 3,
                        type: im.Iphone10
                    }, {
                        min: 320,
                        max: 693,
                        ratio: 3,
                        type: im.Iphone10Zoomed
                    }, {
                        min: 414,
                        max: 896,
                        ratio: 3,
                        type: im.Iphone10sMax
                    }, {
                        min: 414,
                        max: 896,
                        ratio: 2,
                        type: im.Iphone10R
                    }, {
                        min: 375,
                        max: 812,
                        ratio: 2,
                        type: im.Iphone10RZoomed
                    }, {
                        min: 390,
                        max: 844,
                        ratio: 3,
                        type: im.Iphone12
                    }, {
                        min: 428,
                        max: 926,
                        ratio: 3,
                        type: im.Iphone12ProMax
                    }, {
                        min: 393,
                        max: 852,
                        ratio: 3,
                        type: im.Iphone14Pro
                    }, {
                        min: 430,
                        max: 932,
                        ratio: 3,
                        type: im.Iphone14ProMax
                    }, {
                        min: 768,
                        max: 1024,
                        ratio: 1,
                        type: Em.IpadNonRetina
                    }, {
                        min: 768,
                        max: 1024,
                        ratio: 2,
                        type: Em.IpadRetina
                    }, {
                        min: 834,
                        max: 1194,
                        ratio: 2,
                        type: Em.IpadPro11inch
                    }, {
                        min: 1024,
                        max: 1366,
                        ratio: 2,
                        type: Em.IpadPro
                    }],
                    fm = "desktop",
                    ym = "tablet",
                    Jm = "phone";
                class Om {
                    get connectionType() {
                        var o;
                        return null === (o = window.navigator.connection) || void 0 === o ? void 0 : o.effectiveType
                    }
                    constructor(o = window.navigator.userAgent) {
                        this.userAgent = o, this.isIosDevice = !!this.userAgent.match(/(iPhone|iPad)/i), this.isMacOSDevice = !!this.userAgent.match(/(Intel Mac OS X)/i), this.isQQBrowser = this.userAgent.includes("MQQBrowser"), this.isBaiduBrowser = this.userAgent.includes("baiduboxapp"), this.isIos15PhoneSafari = !!this.userAgent.match(/^Mozilla\/5\.0 \(iPhone; CPU iPhone OS 15_\S+ like Mac OS X\) AppleWebKit\/605\.1\.15 \(KHTML, like Gecko\) Version\/15\.\d Mobile\/15E148 Safari\/604\.1/), this.isIosChromeBrowser = this.isIosDevice && this.userAgent.includes("CriOS"), this.appleScreenType = (() => {
                            var o, m;
                            if (!this.isIosDevice && !this.isMacOSDevice) return null;
                            const h = (null === (o = window.screen) || void 0 === o ? void 0 : o.width) ? window.screen.width : window.innerWidth,
                                t = (null === (m = window.screen) || void 0 === m ? void 0 : m.height) ? window.screen.height : window.innerHeight,
                                B = window.devicePixelRatio || 1,
                                P = Math.min(h, t),
                                E = Math.max(h, t);
                            for (const o of wm)
                                if (o.min === P && o.max === E && o.ratio === B) return o.type;
                            return null
                        })(), this.isIPadOS = (() => {
                            const o = void 0 !== window.orientation,
                                m = navigator.maxTouchPoints > 1;
                            return this.isMacOSDevice && o && m
                        })(), this.deviceType = (() => {
                            if (this.isIPadOS) return ym;
                            if (1 && /\b(WOW64|Win64|x64|x86_64|Windows NT|Intel Mac OS X|CrOS aarch64|X11.*Linux)\b/i.test(this.userAgent)) return fm;
                            if (this.userAgent.includes("iPhone")) return Jm;
                            if (this.userAgent.includes("iPad")) return ym;
                            let o = window;
                            try {
                                for (; o !== o.parent;) o.parent.matchMedia, o = o.parent
                            } catch (o) {}
                            return o.matchMedia("(min-width: 1024px) and (min-height: 600px) and (orientation: landscape), (min-width: 768px) and (orientation: portrait)").matches ? ym : Jm
                        })(), this.isTablet = this.deviceType === ym, this.isPhone = this.deviceType === Jm, this.isDesktop = this.deviceType === fm, this.isEventPassiveSupported = !1, this.isWrapper = (() => !!/(wv\)|Chrome\/\d+\.0\.0\.0)/.test(this.userAgent) || !(!this.isIosDevice || /(Chrome|CriOS|Safari|Edge)\/[0-9._]*/.test(this.userAgent)))(), this.checkEventPassiveSupport = (() => {
                            try {
                                let o = !1;
                                const m = {
                                        get capture() {
                                            return !0
                                        },
                                        get once() {
                                            return !0
                                        },
                                        get passive() {
                                            return o = !0, !0
                                        }
                                    },
                                    h = () => null;
                                window.addEventListener("test", h, m), window.removeEventListener("test", h, m), this.isEventPassiveSupported = o
                            } catch (o) {
                                this.isEventPassiveSupported = !1
                            }
                        })()
                    }
                }
                class em {
                    constructor(o) {
                        this.loader = o, this.lobbyLastGameType = void 0, this.lobbyLoadedGames = {}, this.lobbyLoadedGameCount = 0
                    }
                    preconnect(o, m) {
                        const h = document.createElement("link");
                        h.rel = m ? "dns-prefetch" : "preconnect", h.href = o, document.head.appendChild(h)
                    }
                    preload(o, m = !0, h = !1) {
                        var t;
                        const B = this.loader,
                            P = $(o, null === (t = window.EVO_LOADER) || void 0 === t ? void 0 : t.deviceInfo.deviceType, !1);
                        if (!P) return Promise.reject(new l.mN("Manifest not found", {
                            sendToSentry: !1
                        }));
                        if (void 0 !== B.applications.getValue(P.loader)) return Promise.reject(new l.mN("Already loaded", {
                            sendToSentry: !1
                        }));
                        const E = P.assets.map((o => {
                            const t = o.endsWith(".js"),
                                B = t ? !m : !h;
                            return this.preloadFromManifest(o, t ? "script" : "style", B)
                        }));
                        return Promise.all(E)
                    }
                    lobbyGameVisible(o, m) {
                        const {
                            game: h,
                            frontend_app: t
                        } = o, B = t || h || "";
                        if (this.lobbyLastGameType === B) return Promise.reject(new Error("Fast-path optimization to avoid hashmap lookups"));
                        if (this.lobbyLastGameType = B, this.lobbyLoadedGames[B]) return Promise.reject(new Error("Attempt to load game has been made"));
                        this.lobbyLoadedGames[B] = !0, this.lobbyLoadedGameCount++;
                        const P = this.loader.shared.getValue("style"),
                            E = null == P ? void 0 : P.data.fastTableSwitching,
                            i = "false" === (null == E ? void 0 : E.enabled),
                            w = ["baccarat", "roulette", "blackjack", "classicfreebet", "scalableblackjack", "freebet", "powerscalableblackjack", "lightningscalablebj"].includes(h),
                            f = !i && !m && (w || !1) && this.lobbyLoadedGameCount <= 5;
                        return this.preload(o, f, !1)
                    }
                    preloadFromManifest(o, m, h) {
                        const t = this.loader;
                        if (o) {
                            const B = window.EVO_CDN + o;
                            return h ? c.Rh(B, m) : "script" === m ? t.assets.loadScript(B) : t.assets.loadStyles(B)
                        }
                        return Promise.reject(new Error("assetPath is empty"))
                    }
                }
                class Hm extends Uo {
                    constructor(o) {
                        super(), this.loader = o, this.isStarted = !1
                    }
                    start() {
                        this.isStarted || (this.isStarted = !0, this.requestSetupData(), this.requestStyleData(), window.EVO_LOCALE ? this.requestLocalization(window.EVO_LOCALE) : this.subscribe("setup", (o => {
                            window.EVO_LOCALE = o.locale, this.requestLocalization(o.locale)
                        })))
                    }
                    requestLocalization(o) {
                        c.FB(o, "common").then((o => this.publish("i18n", o))).catch((m => {
                            this.loader.failed({
                                reason: "i18n",
                                failureDetails: m,
                                failedURL: `loc://${o}/common.json`
                            })
                        }))
                    }
                    getFingerprint() {
                        const o = "X-Fingerprint";
                        let m = null;
                        try {
                            m = window.localStorage.getItem(o)
                        } catch (o) {}
                        if (!m) {
                            m = c.Ds();
                            try {
                                window.localStorage.setItem(o, m)
                            } catch (o) {}
                        }
                        return m
                    }
                    requestSetupData() {
                        const o = this.loader,
                            m = o.deviceInfo,
                            h = {
                                device: m.deviceType,
                                "apple-screen": m.appleScreenType,
                                wrapped: m.isWrapper.toString()
                            },
                            t = {
                                keepalive: !1,
                                headers: 0 ? 0 : {
                                    "X-Fingerprint": this.getFingerprint()
                                }
                            },
                            B = U("/setup", h);
                        c.QJ(B, "json", t).then((o => {
                            if (o.locale = window.EVO_LOCALE || o.locale, "string" == typeof o.globalSettings) try {
                                o.globalSettings = JSON.parse(o.globalSettings)
                            } catch (m) {
                                0 || window.console.error("Invalid globalSettings.", "\n", m), o.globalSettings = void 0
                            }
                            this.publish("setup", o)
                        })).catch((m => {
                            m instanceof N.$ && 403 === m.status ? o.failedAuth() : (N.Z(B, m), o.failed({
                                reason: "setup",
                                failureDetails: m,
                                failedURL: B
                            }))
                        }))
                    }
                    requestStyleData() {
                        const o = this.loader,
                            m = U("/style");
                        c.QJ(m, "json").then((o => {
                            const m = {
                                data: o || {}
                            };
                            this.publish("style", m)
                        })).catch((h => {
                            h instanceof N.$ && 403 === h.status ? o.failedAuth() : (N.Z(m, h), o.failed({
                                reason: "style",
                                failureDetails: h,
                                failedURL: m
                            }))
                        }))
                    }
                }
                class am extends Mo {
                    constructor() {
                        super(...arguments), this.moduleLoaders = new Uo, this.define = (o, m, h) => {
                            if (null == m ? void 0 : m.length) throw new Error(`Expected no dependencies, got request for ${m}`);
                            this.moduleLoaders.publish(o, h())
                        }
                    }
                    loadModule(o, m, h) {
                        return new Promise(((t, B) => {
                            this.moduleLoaders.resetEvent(o), this.initModuleLoader(h), this.loadScript(m, !0, !0).catch(B), this.moduleLoaders.getPromise(o).then(t, B)
                        }))
                    }
                    initModuleLoader(o) {
                        const m = window[o];
                        void 0 !== m && m !== this.define && window.console.error(`window["${o}"] is already used, overwriting...`), window[o] = this.define
                    }
                }
                const jm = "independent" == "wds",
                    pm = jm ? "define" : "defineEvoVideo",
                    sm = jm ? "http://127.0.0.1:8080" : `${window.EVO_CDN}/frontend/cvi/evo-video-components`,
                    Qm = !0 && !0;
                class qm extends Uo {
                    constructor(o, m = 13) {
                        super(), this.apiVersion = m, this.modules = new am, this.isLoading = !1, this.handleLoadingError = o => {
                            window.console.error(o), o instanceof Error ? window.EVO_VERBOSE(o.stack || o.message, 2) : window.EVO_VERBOSE(o.message, 2), 1 && window.EVO_CDN && this.loader.failed({
                                reason: "video",
                                failureDetails: o
                            })
                        }, this.loader = o
                    }
                    loadLibrary(o = !1) {
                        this.isLoading || (this.isLoading = !0, Qm ? this.loadIndependent(o) : this.loadFromVendor())
                    }
                    ensureEvent(o) {
                        return this.loadLibrary(), super.ensureEvent(o)
                    }
                    loadIndependent(o) {
                        const m = o ? "all" : "wf4hfb",
                            h = (Date.now() / 36e5).toFixed(0),
                            t = this.getLastKnownVideoVersion();
                        Promise.all([this.loadVersion(h), this.loadVideoComponent(m, t)]).then((([o, h]) => {
                            let {
                                version: B
                            } = o;
                            const {
                                version: P
                            } = h;
                            if (P !== B) return B === t && (B += ".x"), this.setLastKnownVideoVersion(B), this.loadVideoComponent(m, B).then((o => {
                                this.publishModule(o)
                            })).catch((() => {
                                this.publishModule(h)
                            }));
                            this.publishModule(h)
                        })).catch(this.handleLoadingError)
                    }
                    getLastKnownVideoVersion() {
                        try {
                            return localStorage.getItem("EvoVideoLastKnownVersion") || void 0
                        } catch (o) {}
                    }
                    setLastKnownVideoVersion(o) {
                        try {
                            localStorage.setItem("EvoVideoLastKnownVersion", o)
                        } catch (o) {}
                    }
                    loadFromVendor() {
                        (0 ? 0 : E.e(80616).then(E.t.bind(E, 360395, 23))).then((o => this.publishModule(o)))
                    }
                    publishModule(o) {
                        this.publish("module", {
                            component: o
                        })
                    }
                    loadVersion(o) {
                        return this.modules.loadModule("__version", `${sm}/video_version_v${this.apiVersion}.js?${o}`, pm)
                    }
                    loadVideoComponent(o, m = "") {
                        return this.modules.loadModule("videojs", `${sm}/video_${o}_v${this.apiVersion}.js?${encodeURIComponent(m)}`, pm)
                    }
                }
                class zm {
                    constructor() {
                        this.isFailed = !1, this.wasThrottled = !1, this.sentLogCount = 0, this.assets = new Mo, this.deviceInfo = new Om, this.applications = new Uo, this.shared = new Hm(this), this.video = new qm(this), this.audio = new Bm, this.prefetcher = new em(this), this.broadcast = new g, this.instance = new _o(this), this.cdnHost = window.EVO_CDN, this.onInstanceSwitch = [], this.onFailure = [], this.spaSwitches = 0, this.failureCount = c.wP(), this._initMetadata = {}, this.sendLog = (o, m, h) => {
                            if (void 0 !== this.shared.getValue("failedAuthentication")) return;
                            const {
                                store: t,
                                enhancers: B
                            } = Object.assign({
                                store: !1,
                                enhancers: []
                            }, h);
                            window.EVO_VERBOSE(`Sending log: ${o}`), this.sentLogCount += 1;
                            const P = Object.assign(Object.assign({
                                attributionId: this.instance.attributionId,
                                ua_launch_id: this.instance.uaLaunchId,
                                lobby_launch_id: this.instance.lobbyLaunchId,
                                connectionType: this.deviceInfo.connectionType,
                                userAgent: this.deviceInfo.userAgent,
                                buildId: "6.20240808.72721.43530-9cfa25698c",
                                url: n(window.location.href),
                                provider: this.instance.provider
                            }, "game" === this.instance.kind && Object.assign({
                                tableId: this.instance.tableId,
                                virtualTableId: this.instance.virtualTableId
                            }, B.includes("gameType") ? {
                                gameType: this.instance.gameType
                            } : void 0)), m);
                            if (t) return void this.instance.storeLog({
                                type: o,
                                payload: P
                            });
                            const E = U("/log"),
                                i = JSON.stringify({
                                    log: {
                                        type: o,
                                        value: P
                                    }
                                });
                            let w = !1;
                            if (1 && navigator.sendBeacon) try {
                                w = navigator.sendBeacon(E, i)
                            } catch (o) {
                                window.console.error(o)
                            }
                            w || fetch(E, {
                                method: "POST",
                                credentials: "same-origin",
                                headers: {
                                    "Content-Type": "text/plain"
                                },
                                body: i,
                                keepalive: !0,
                                evoIgnoreSandbox: !0
                            }).catch((h => {
                                console.error("Unable to send log", h, o, m)
                            }))
                        }
                    }
                    addInstanceSwitchListener(o) {
                        this.onInstanceSwitch.push(o), "empty" !== this.instance.kind && o(this.instance)
                    }
                    removeInstanceSwitchListener(o) {
                        const m = this.onInstanceSwitch.indexOf(o);
                        m >= 0 && this.onInstanceSwitch.splice(m, 1)
                    }
                    addFailureListener(o) {
                        this.onFailure.push(o)
                    }
                    failedAuth() {
                        this.isFailed || (this.isFailed = !0, this.shared.publish("failedAuthentication", null), 0 || (window.location.href = "/"))
                    }
                    failed(o) {
                        this.isFailed = !0, this.failureReason = o.reason, this.increaseFailureCount(), o.failureDetails && l.vV(l.oj(o.failureDetails));
                        const m = c.ET(this.failureCount, o.failureDetails);
                        if (this.onFailure.forEach((h => h({
                                failedURL: o.failedURL,
                                failureReason: o.reason,
                                failureDetails: o.failureDetails,
                                willRetry: m,
                                failureCount: this.failureCount
                            }))), !m) return void this.displayFailurePopup(l.EL(o.failureDetails) && o.failureDetails.localizedMessage ? o.failureDetails : "message.unableLoadGame", !0, !0);
                        const h = c.u9({
                            failureReason: o.reason,
                            isCdnEnabled: !!window.EVO_CDN
                        });
                        c.YU({
                            disableDuration: h,
                            failureCount: this.failureCount
                        })
                    }
                    displayPopup(o, m) {
                        Promise.race([c.cb(3e3), this.shared.getPromise("i18n")]).then((() => {
                            const h = this.shared.getValue("i18n"),
                                t = (null == h ? void 0 : h.common) || C;
                            let B, P;
                            "string" == typeof o ? (B = t[o], P = o) : (B = o.localizedMessage || o.message, P = "custom"), this.sendLog("CLIENT_POPUP_DISPLAYED", {
                                popupId: P
                            }, {
                                enhancers: ["gameType"]
                            }), window.EVO_POPUP(B, m.map((o => ({
                                content: t[o.contentKey],
                                callback: o.callback
                            }))))
                        }))
                    }
                    displayFailurePopup(o, m, h) {
                        this.isFailed = !0;
                        const t = [];
                        m && t.push({
                            contentKey: "button.tryAgain.uppercase",
                            callback: () => {
                                window.location.reload()
                            }
                        });
                        const {
                            provider: B
                        } = this.instance, P = B && "evolution" !== B && B !== X && !this.getLicenseeLobbyUrl();
                        h && !P && t.push({
                            contentKey: "button.backToLobby",
                            callback: () => {
                                this.redirectToLobby()
                            }
                        }), this.displayPopup(o, t)
                    }
                    addDeviceTypeToGlobalClasses() {
                        document.body && document.body.classList.add(this.deviceInfo.deviceType)
                    }
                    init(o = window.location.href, m = {}) {
                        this._initMetadata = m, this.sentLogCount = 0, this.shared.start();
                        const h = a.w(o),
                            t = h.getParam("mwg") || null,
                            B = t ? null : h.getParam("table_id") || null,
                            P = t ? null : h.getParam("vt_id") || null,
                            E = t ? null : h.getParam("app") || null,
                            i = B && h.getParam("balance_id") || null,
                            w = this.instance;
                        if (!w.disposed) {
                            if ("multi" === w.kind) return w.update(h, !0);
                            if (B && "switch" === w.kind && w.tableId === B && w.virtualTableId === P && w.balanceId === i && w.app === E) return Promise.resolve()
                        }
                        "empty" !== w.kind && this.resetPerformanceMetrics();
                        const f = console.groupCollapsed || console.group;
                        return null == f || f.call(console, `%c📁 Application switch from ${w.kind} to tableId=${B}, vtId=${P}`, "font-size: 120%;"), this.instance = new Yo(this, B, P, t, i, E), w.dispose().then((() => this.checkInitResources())).then((() => this.checkSwitchConfiguration(w))).then((() => {
                            let o;
                            window.EVO_VERBOSE(`SPA switch from ${w.kind}`), this.broadcast.reset();
                            let m = Promise.resolve();
                            if (t) o = new Wo(this, t);
                            else if ("multi" === w.kind) o = new Wo(this, "", !0), m = o.update(h, !0);
                            else if (B) {
                                const m = h.getParam("ua_launch_id") || null,
                                    t = h.getParam("lobby_launch_id") || null;
                                o = new Ro(this, B, P, E, i, m, t)
                            } else o = new uo(this, E);
                            this.instance = o;
                            for (const m of this.onInstanceSwitch) m(o);
                            return m
                        })).catch((o => {
                            this.isFailed = !0;
                            const m = "SPA bail because of ";
                            window.console.error(m, o), window.EVO_VERBOSE(m + o, 1), this.broadcast.dispose();
                            const h = a.w(window.location.href);
                            h.searchParams.mwg = void 0, h.searchParams.table_id = void 0, h.searchParams.vt_id = void 0, h.searchParams.freeGames = void 0, h.hashParams.mwg = t || void 0, h.hashParams.table_id = B || void 0, h.hashParams.vt_id = P || void 0, h.hashParams.balance_id = i || void 0;
                            const E = h.toString();
                            window.location.href !== E && (this.sendLog("CLIENT_GAME_RELOAD", {
                                reason: o
                            }), window.location.replace(E)), window.location.reload()
                        })).then((() => {
                            f && window.console.groupEnd()
                        }))
                    }
                    publishApplication(o, m, h) {
                        this.applications.publish(o + m, h), h.provider && (this.instance.provider = h.provider)
                    }
                    get initMetadata() {
                        return this._initMetadata
                    }
                    checkSwitchConfiguration(o) {
                        return "empty" === o.kind ? Promise.resolve() : new Promise(((o, m) => {
                            this.shared.subscribe("style", (h => {
                                const t = h.data.fastTableSwitching;
                                if ("false" === (null == t ? void 0 : t.enabled)) return m("fastTableSwitching is disabled in style settings");
                                o()
                            }))
                        }))
                    }
                    resetPerformanceMetrics() {
                        try {
                            performance.clearMarks(), performance.clearMeasures(), performance.clearResourceTimings(), performance.mark("evoAppSwitchStarted"), this.wasThrottled = !1
                        } catch (o) {
                            window.console.error("Cannot reset performance report", o)
                        }
                    }
                    checkInitResources() {
                        return this.spaSwitches++, this.spaSwitches >= 10 ? Promise.reject("10th load") : performance.now() > 10 * 6e4 ? Promise.reject("10 minute uptime") : Promise.resolve()
                    }
                    redirectToLobby() {
                        const o = this.getLicenseeLobbyUrl();
                        if (o && !0) {
                            try {
                                window.top ? window.top.location.href = o : window.location.href = o
                            } catch (m) {
                                window.location.href = o
                            }
                            return
                        }
                        const m = a.w(window.location.href),
                            h = this.instance.provider === X ? r : void 0,
                            t = {
                                category: m.getParam("category"),
                                game: m.getParam("game"),
                                app: h
                            };
                        window.location.href = b(t)
                    }
                    getLicenseeLobbyUrl() {
                        var o;
                        const m = this.shared.getValue("style"),
                            h = this.deviceInfo.isDesktop ? null == m ? void 0 : m.data : null == m ? void 0 : m.data.mobile_settings;
                        return null === (o = null == h ? void 0 : h.licensee_lobby) || void 0 === o ? void 0 : o.url
                    }
                    increaseFailureCount() {
                        this.failureCount += 1, c.Nw(this.failureCount)
                    }
                }
                const gm = "CLIENT_GAME_LOADER_STARTED",
                    vm = "CLIENT_GAME_LOADER_FAILED",
                    Km = "CLIENT_GAME_LOADER_TERMINATED",
                    lm = "CLIENT_PAGE_HIDDEN",
                    Am = "CLIENT_PAGE_VISIBLE",
                    bm = "CLIENT_API_V1_USAGE",
                    Um = "CLIENT_API_V1_USAGE_LOGGER_INITIALIZED",
                    Tm = "IFRAME_SUBSCRIBED_TO_EVENTS";

                function km(m, h = y) {
                    const t = new h({
                        sendLogMessage: m.sendLog,
                        isDesktop: m.deviceInfo.isDesktop
                    });
                    m.addInstanceSwitchListener((() => {
                        t.postMessage({
                            event: "EVO:APPLICATION_LOAD_STARTED"
                        }, {
                            type: "default",
                            disableLogging: !0,
                            targetRelease: "stable"
                        })
                    })), m.shared.subscribe(["setup", "style"], ((o, h) => {
                        const E = o.clientApiV2,
                            i = h.data.clientApiV2,
                            w = h.data.client_api_v2,
                            f = i || w || E,
                            y = h.data.clientApiV2Overrides,
                            J = function(o) {
                                const m = o;
                                return m && function(o) {
                                    return ["stable", "unstable"].includes(o)
                                }(m.release) ? Object.assign(Object.assign({
                                    release: m.release
                                }, function(o) {
                                    return Array.isArray(o) && o.length > 0 && o.some((o => "string" == typeof o && o.trim().length > 0))
                                }(m.origins) ? {
                                    origins: m.origins
                                } : void 0), {
                                    enabledEvents: m.enabledEvents ? B(m.enabledEvents) : void 0,
                                    disabledCommands: m.disabledCommands ? P(m.disabledCommands) : void 0
                                }) : null
                            }(Object.assign(Object.assign({}, f), y));
                        null !== J && (m.clientApi = t, t.config = J)
                    })), m.shared.subscribe("failedAuthentication", (() => {
                        null == t || t.postMessage({
                            event: "EVO:SESSION_INVALID"
                        }, {
                            type: "default",
                            targetRelease: "stable"
                        })
                    })), m.addInstanceSwitchListener((h => {
                        h.subscribe("config", (t => {
                            h.subscribe("gameLoaded", (o => {
                                var B;
                                "game" === (null == o ? void 0 : o.applicationType) ? h.subscribe("gameMeta", (() => {
                                    var B;
                                    null === (B = m.clientApi) || void 0 === B || B.postMessage(Object.assign({
                                        event: "EVO:APPLICATION_READY"
                                    }, Sm(t, h, o)), {
                                        type: "default",
                                        targetRelease: "stable"
                                    })
                                })): null === (B = m.clientApi) || void 0 === B || B.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_READY"
                                }, Sm(t, h, o)), {
                                    type: "default",
                                    targetRelease: "stable"
                                }), window.addEventListener("beforeunload", (() => {
                                    var B, P;
                                    null === (B = m.clientApi) || void 0 === B || B.postMessage(Object.assign({
                                        event: "EVO:APPLICATION_UNLOAD"
                                    }, Sm(t, h, o)), {
                                        type: "default",
                                        targetRelease: "stable"
                                    }), null === (P = m.clientApi) || void 0 === P || P.reset()
                                }))
                            })), h.subscribe("disposing", (B => {
                                var P, E;
                                null === (P = m.clientApi) || void 0 === P || P.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_UNLOAD"
                                }, Sm(t, h, function(m) {
                                    if (!m) return;
                                    const {
                                        suppressLoadingScreen: h
                                    } = m;
                                    return o(m, ["suppressLoadingScreen"])
                                }(B))), {
                                    type: "default",
                                    targetRelease: "stable"
                                }), null === (E = m.clientApi) || void 0 === E || E.reset()
                            }))
                        }))
                    }))
                }

                function Sm(o, m, h = {
                    applicationType: "unknown"
                }) {
                    return "game" === m.kind && "game" === h.applicationType ? Object.assign(Object.assign(Object.assign({}, h), {
                        gameType: o.game,
                        gameVertical: o.game_vertical,
                        tableId: m.tableId
                    }), m.virtualTableId && {
                        virtualTableId: m.virtualTableId
                    }) : h
                }
                const Gm = {
                        isAvailable: function() {
                            var o;
                            return "function" == typeof(null === (o = window.EvolutionGamingAndroidAPI) || void 0 === o ? void 0 : o.send)
                        },
                        dispatch: function(o, m = {}) {
                            window.EvolutionGamingAndroidAPI.send(JSON.stringify({
                                type: o,
                                payload: m
                            }))
                        }
                    },
                    um = {
                        isAvailable: function() {
                            try {
                                return window.parent !== window && !!window.parent.postMessage
                            } catch (o) {
                                return !1
                            }
                        },
                        dispatch: function(o, m = {}) {
                            window.parent.postMessage({
                                type: o,
                                payload: m
                            }, "*")
                        }
                    },
                    _m = {
                        isAvailable: function() {
                            var o, m, h;
                            return "function" == typeof(null === (h = null === (m = null === (o = window.webkit) || void 0 === o ? void 0 : o.messageHandlers) || void 0 === m ? void 0 : m.EvolutionGamingWrapperAPI) || void 0 === h ? void 0 : h.postMessage)
                        },
                        dispatch: function(o, m = {}) {
                            window.webkit.messageHandlers.EvolutionGamingWrapperAPI.postMessage(JSON.stringify({
                                type: o,
                                payload: m
                            }))
                        }
                    };
                class Rm {
                    constructor() {
                        this.consumers = []
                    }
                    addConsumer(o) {
                        o.isAvailable() && this.consumers.push(o)
                    }
                    dispatch(o, m = {}) {
                        for (const h of this.consumers) h.dispatch(o, m)
                    }
                }
                let nm;
                const Xm = "index.html";

                function rm(o, m) {
                    if (m) c.z6("gameClientUrlSupport"), window.location.replace(o);
                    else try {
                        window.history.replaceState(null, "", o)
                    } catch (m) {
                        rm(o, !0)
                    }
                }
                const Cm = "loadingScreen--87788",
                    Lm = "gradientContent--e45a4",
                    Vm = "gradient--0f1d8",
                    Nm = "capturedLogo--1678b",
                    cm = "finishProgress--0c00b",
                    Fm = "awardLogos--861ba",
                    $m = "center--9aeab",
                    Im = "content--1ddca",
                    dm = "narrow--8d0d9",
                    Dm = "wide--3bffa",
                    xm = "footer--fba55",
                    Wm = "mobile--76605",
                    Ym = "image--44b6b",
                    Mm = "withFooterLogo--6ca4a",
                    Zm = "star1--da76f",
                    oh = "evoLogo--06ffa",
                    mh = "logoText--42a39",
                    hh = "loaded--10bec",
                    th = "noImage--01a3d",
                    Bh = "tablet--43c30",
                    Ph = "properAnimation--47cc2",
                    Eh = "randomAnimation--de14a";
                var ih;
                class wh {
                    static track(o) {
                        const m = new wh;
                        return o.then((o => m.resolve(o)), (o => m.reject(o))), m
                    }
                    constructor() {
                        this[ih] = "PromiseWrapper", this.resolved = !1, this.promise = new Promise(((o, m) => {
                            this.resolver = o, this.rejector = m
                        }))
                    }
                    unwrap() {
                        return this.promise
                    }
                    reject(o) {
                        return this.rejector(o || "PromiseWrapper rejected with empty reason"), this
                    }
                    resolve(o) {
                        return this.resolved = !0, this.resolver(o), this
                    }
                    isResolved() {
                        return this.resolved
                    }
                    then(o, m) {
                        return this.unwrap().then(o, m)
                    } catch (o) {
                        return this.unwrap().catch(o)
                    } finally(o) {
                        const m = this.unwrap();
                        return m.finally ? m.finally(o) : o ? m.then((m => new Promise((h => {
                            o(), h(m)
                        }))), (m => new Promise(((h, t) => {
                            o(), t(m)
                        })))) : m
                    }
                    done(...o) {
                        return console.warn("PromiseWrapper.done() should not be used."), this.then(...o)
                    }
                    fail(...o) {
                        return console.warn("PromiseWrapper.fail() should not be used."), this.catch(...o)
                    }
                    always(...o) {
                        return console.warn("PromiseWrapper.always() should not be used."), this.then(...o)
                    }
                }

                function fh(o, m = null, h = 1e4, t = !0) {
                    const B = new Image;
                    return B.crossOrigin = m, B.src = o, yh(B, h, t)
                }

                function yh(o, m = 1e4, h = !0) {
                    return o.complete ? Promise.resolve(o) : new Promise(((t, B) => {
                        o.onerror = () => E("error");
                        const P = window.setTimeout((() => {
                            E("timeout")
                        }), m);

                        function E(m) {
                            clearTimeout(P), h && N.Z(o.src, m), B(m)
                        }
                        o.onload = () => {
                            clearTimeout(P), t(o)
                        }
                    }))
                }

                function Jh(o) {
                    const m = document.getElementsByClassName(o).item(0);
                    if (!m) throw new Error(`Loading screen element not found: ${o}`);
                    return m
                }

                function Oh() {
                    try {
                        let o = window;
                        for (; 1;) {
                            const m = o.EVO_LOADER;
                            if ("multi" === (null == m ? void 0 : m.instance.kind)) return m.instance;
                            if (o === o.parent) return null;
                            o = o.parent
                        }
                    } catch (o) {
                        return null
                    }
                }
                ih = Symbol.toStringTag;
                const eh = "reality_check_handler",
                    Hh = "EVOSESSIONID";

                function ah() {
                    const o = a.w(window.location.href).getParam(Hh);
                    o && "undefined" !== o && (window.EVO_SESSION_ID_FALLBACK = o)
                }

                function jh(o) {
                    return "compliance" === a.w(o).getParam("app")
                }

                function ph(o) {
                    const m = a.w(o.href).getParam("mwg");
                    if (m)
                        for (const o of _(m))
                            if (jh(o)) return !0;
                    return !1
                }

                function sh(o) {
                    const m = b({
                            app: "compliance",
                            [$o]: No.TopBar
                        }),
                        h = Oh();
                    if (h) {
                        if ((null == h ? void 0 : h.window) !== window) return;
                        for (const o of h.frames)
                            if (o.layout === No.TopBar && jh(o.location)) return;
                        h.addFrame(m)
                    } else {
                        const h = b({
                            mwg: u([m, window.location.href])
                        });
                        o.init(h)
                    }
                }
                const Qh = /^\*?(\d+\.\d+\.\d+\.\d+-[a-f0-9]{10}).*/,
                    qh = "6.20240808.72721.43530-9cfa25698c".replace(Qh, "$1");
                (function() {
                    ah(),
                        function() {
                            let o = !1;
                            window.addEventListener("beforeunload", (() => {
                                window.EVO_VERBOSE("beforeunload"), o = !0, setTimeout((() => {
                                    o = !1
                                }), 1e3)
                            })), window.addEventListener("popstate", (() => {
                                if (o) {
                                    window.EVO_VERBOSE("beforeunload > popstate");
                                    const o = window.location.href,
                                        m = a.w(o);
                                    m.searchParams._reload = Date.now().toFixed(), window.history.pushState(null, "", m.toString()), c.z6("Popstate event triggered for Gammix BB application"), window.location.replace(o)
                                }
                            }))
                        }(),
                        function() {
                            const o = window.history.pushState;
                            window.history.pushState = function(m, h, t) {
                                o.call(window.history, m, h, t), window.dispatchEvent(new CustomEvent("pushstate"))
                            };
                            const m = window.history.replaceState;
                            window.history.replaceState = function(o, h, t) {
                                m.call(window.history, o, h, t), window.dispatchEvent(new CustomEvent("replacestate"))
                            }
                        }(), window.addEventListener("message", (o => {
                            const m = o.data;
                            if (o.origin === O.receive && m && "object" == typeof m && m.key === e) {
                                window.parent !== window && H(window.parent, o);
                                for (let m = 0; m < window.length; m++) H(window[m], o)
                            }
                        }));
                    const o = a.w(window.location.href),
                        m = new zm;
                    window.EVO_LOADER = m, m.addDeviceTypeToGlobalClasses(), Object.defineProperty(window, "EVO_LOADER", {
                            get: () => m,
                            set: () => {
                                console.warn("window.EVO_LOADER cannot be overwritten")
                            }
                        }),
                        function(o) {
                            return function() {
                                const o = a.w(window.location.href),
                                    m = o.getParam("origin");
                                if (!m) return Promise.resolve();
                                if (m.startsWith("https%3A%2F%2F")) return Promise.reject("`origin` parameter has been incorrectly double encoded");
                                window.console.log("Full URL", window.location.href), window.console.log("Processing origin parameter:", m);
                                const h = a.w(m);
                                if (h.pathname.length <= 1 && !h.search) return t();
                                if (o.getParam("JSESSIONID") || o.getParam("params")) {
                                    const o = "⚠ `JSESSIONID` or `params` is defined outside of `origin` URL. Please ensure that `origin` value is properly url-encoded.";
                                    window.console.warn(o), window.EVO_VERBOSE(o, 1)
                                }
                                return h.searchParams.json = "true", h.searchParams.cc = "1", h.searchParams.client_version = "6.20240808.72721.43530-9cfa25698c", c.QJ(h.toString(), "json").then((o => {
                                    const m = null == o ? void 0 : o.location;
                                    if ("string" != typeof m) throw new Error("Auth endpoint didn't return correct format.");
                                    const B = a.w(m);
                                    B.hashParams.origin = h.origin;
                                    const P = window.location.pathname + B.search + B.hash;
                                    c.z6("Setting remote origin");
                                    try {
                                        window.history.replaceState(null, "", P)
                                    } catch (o) {
                                        window.location.replace(P)
                                    }
                                    return ah(), t()
                                }));

                                function t() {
                                    if (!window.EVO_SESSION_ID_FALLBACK) return Promise.reject("origin is only allowed when session id is also given in url");
                                    const o = h.origin;
                                    return !1 || o.endsWith(".evo-games.com") || o.endsWith(".evolution.com") ? (window.EVO_ORIGIN = o, 1 && document.cookie ? fetch("/logout", {
                                        credentials: "same-origin",
                                        method: "POST"
                                    }).then((() => {})).catch((() => {})) : Promise.resolve()) : Promise.reject("unsafe origin rejected")
                                }
                            }().catch((m => (window.console.error("⛔", m), window.EVO_VERBOSE(m, 1), o.failedAuth(), Promise.reject(m))))
                        }(m).then((() => {
                            (function(o) {
                                let m = 0;

                                function h() {
                                    o.isFailed || o.sendLog(Km, Object.assign({
                                        loadingTime: P()
                                    }, E()))
                                }
                                o.addInstanceSwitchListener((t => {
                                    m = performance.now(), o.sendLog(gm, Object.assign({
                                        sharingBrowserContext: !!window.opener,
                                        failureCount: c.wP(),
                                        verboseEnabled: window.EVO_VERBOSE()
                                    }, o.initMetadata)), window.addEventListener("beforeunload", h);
                                    const P = B("visibilitychange"),
                                        E = B("pagehide"),
                                        i = B("pageshow");
                                    document.addEventListener("visibilitychange", P), window.addEventListener("pagehide", E), window.addEventListener("pageshow", i), t.subscribe("gameLoaded", (() => {
                                        window.removeEventListener("beforeunload", h), document.removeEventListener("visibilitychange", P), window.removeEventListener("pagehide", E), window.removeEventListener("pageshow", i)
                                    }))
                                })), o.addFailureListener((m => {
                                    o.sendLog(vm, Object.assign({
                                        failureReason: m.failureReason,
                                        failureDetails: m.failureDetails,
                                        failedURL: m.failedURL,
                                        failureCount: m.failureCount,
                                        willRetry: m.willRetry,
                                        loadingTime: P()
                                    }, E()))
                                }));
                                let t = Am;

                                function B(m) {
                                    return () => {
                                        const h = "pagehide" === m || "visibilitychange" === m && "hidden" === document.visibilityState ? lm : Am;
                                        h !== t && (o.sendLog(h, {
                                            loadingTime: P()
                                        }, {
                                            store: !0
                                        }), t = h)
                                    }
                                }

                                function P() {
                                    return Math.floor(performance.now() - m)
                                }

                                function E() {
                                    let m = 0,
                                        h = 0;
                                    return o.instance.setLogConsumer((({
                                        type: o
                                    }) => {
                                        o === lm ? m += 1 : o === Am && (h += 1)
                                    })), Object.assign({
                                        hideEvents: m,
                                        showEvents: h
                                    }, o.initMetadata)
                                }
                            })(m), km(m, y),
                                function(o) {
                                    0 || window.EVO_ORIGIN || o.shared.subscribe("setup", (m => {
                                        var h;
                                        const t = null === (h = m.casinoConfig) || void 0 === h ? void 0 : h.gameClientUrl;
                                        if (t && !window.location.pathname.startsWith(t))
                                            if (0 || window.EVO_VERBOSE()) window.console.warn(`Ignoring 'gameClientUrl=${t}' because of development/verbose mode.`);
                                            else {
                                                window.console.log(`Adjusting the URL based on 'gameClientUrl'. It will take effect on next page reload.`);
                                                const o = a.w(window.location.href);
                                                o.pathname = t, rm(o.toString(), !1)
                                            }
                                        o.addInstanceSwitchListener((o => {
                                            o.subscribe("config", (o => {
                                                let m = o.frontend_loader || "";
                                                if (m !== Xm && m) {
                                                    if (window.location.pathname.endsWith(m)) return
                                                } else {
                                                    if (window.location.pathname.endsWith(Xm) || window.location.pathname.endsWith("/")) return;
                                                    m = ""
                                                }
                                                window.console.log(`Adjusting the URL based on 'frontend_loader'.`);
                                                const h = a.w(window.location.href);
                                                h.pathname = h.pathname.substring(0, h.pathname.lastIndexOf("/") + 1) + m, rm(h.toString(), !0)
                                            }))
                                        }))
                                    }))
                                }(m),
                                function(o) {
                                    o.shared.subscribe(["setup", "style"], ((m, h) => {
                                        let t = window;
                                        if (function(o, m, h) {
                                                var t;
                                                if (o.isDesktop) return !1;
                                                const {
                                                    swe: B,
                                                    de: P,
                                                    arg: E
                                                } = (null === (t = null == m ? void 0 : m.casinoConfig) || void 0 === t ? void 0 : t.compliance) || {}, i = h.data.mobile_settings || {};
                                                return !(!("compliance" in i) || 0 === Object.keys(i.compliance).length || !B && !P && !E)
                                            }(o.deviceInfo, m, h)) try {
                                            let m = ph(t.location);
                                            for (; !m && t !== t.parent;) m = ph(t.parent.location), t = t.parent;
                                            m || (o.isFailed = !0, sh(o))
                                        } catch (m) {
                                            window.console.error("Unable to read parent windows URL", m), o.isFailed = !0, sh(o)
                                        } else "multi" === o.instance.kind && ph(t.location) && function() {
                                            const o = Oh();
                                            if (o)
                                                for (const m of o.frames) m.layout === No.TopBar && jh(m.location) && (null == o || o.removeFrame(m.frame, {
                                                    update: !0,
                                                    animateOnMobile: !1
                                                }))
                                        }()
                                    }))
                                }(m),
                                function(o, m) {
                                    o.shared.subscribe("setup", (m => {
                                        const h = m.wsHost;
                                        h && o.prefetcher.preconnect(`//${h}`, !0)
                                    }));
                                    const h = m.getParam("app") || m.getParam("game");
                                    h && !h.includes("@") && o.prefetcher.preload({
                                        game: h
                                    }, !0, !0).catch((() => {})), o.addInstanceSwitchListener((o => {
                                        "game" === o.kind && o.subscribe("config", (o => {
                                            const m = a.w(window.location.href);
                                            if ((m.getParam("game") || "") !== (o.game || "")) {
                                                m.searchParams.game = void 0, m.hashParams.game = o.game || void 0;
                                                try {
                                                    window.history.replaceState(null, "", m.toString())
                                                } catch (o) {}
                                            }
                                        }))
                                    }))
                                }(m, o),
                                function(o) {
                                    document.documentElement.setAttribute("lang", window.EVO_LOCALE), o.shared.subscribe("setup", (m => {
                                        o.addInstanceSwitchListener((() => {
                                            document.body.classList.add(m.lang)
                                        }))
                                    }))
                                }(m),
                                function(o) {
                                    o.addInstanceSwitchListener((m => {
                                        "game" === m.kind && o.shared.subscribe("style", (o => {
                                            var m;
                                            if (null === (m = o.data) || void 0 === m ? void 0 : m[eh]) {
                                                let m = o.data[eh].url;
                                                const h = document.getElementById("RealityCheckScript");
                                                if (m && !h) {
                                                    "/" !== m[0] || 0 || (m = (window.EVO_ORIGIN || "") + m);
                                                    const o = document.createElement("script");
                                                    o.type = "text/javascript", o.charset = "utf-8", o.src = m, o.id = "RealityCheckScript", document.head.appendChild(o)
                                                }
                                            }
                                        }))
                                    }))
                                }(m),
                                function(o) {
                                    function m() {
                                        o.displayFailurePopup("error.noDealer", !1, !0)
                                    }
                                    o.addInstanceSwitchListener((h => {
                                        h.subscribe("config", (h => {
                                            var t;
                                            !h || h.error ? h && "object" == typeof h.error && "5013" === h.error.code ? m() : o.failed({
                                                reason: "config",
                                                failureDetails: new Error("invalid config")
                                            }) : (null === (t = h["disabled-client-versions"]) || void 0 === t ? void 0 : t.split(",").find((o => o.replace(Qh, "$1") === qh))) && m()
                                        }))
                                    }))
                                }(m),
                                function(o) {
                                    o.addInstanceSwitchListener((o => {
                                        document.title = "Casino", "game" === o.kind && o.subscribe("config", (o => {
                                            document.title = `Casino: ${o.tableName||o.game||"game"}`
                                        }))
                                    }))
                                }(m),
                                function(o) {
                                    o.addInstanceSwitchListener((o => {
                                        o.subscribe(["config", "gameLoaded"], (m => {
                                            "game" === o.kind && function(o) {
                                                var m;
                                                nm || (null === (m = window.EVO_LOADER) || void 0 === m ? void 0 : m.clientApi) || (nm = function() {
                                                    const o = new Rm;
                                                    return o.addConsumer(um), o.addConsumer(_m), o.addConsumer(Gm), o
                                                }()), null == nm || nm.dispatch(o.type, o.payload)
                                            }({
                                                type: "GAME_LOADED",
                                                payload: {
                                                    gameType: m.game,
                                                    tableId: o.tableId,
                                                    tableName: m.tableName || ""
                                                }
                                            })
                                        }))
                                    }))
                                }(m),
                                function(o) {
                                    return document.addEventListener("visibilitychange", m), void document.addEventListener("webkitvisibilitychange", m);

                                    function m() {
                                        o.wasThrottled = !0
                                    }
                                }(m),
                                function(o) {
                                    const {
                                        isDesktop: m
                                    } = o.deviceInfo;
                                    let h = 0;
                                    if (m) {
                                        let o = !1;
                                        window.addEventListener("load", (() => {
                                            o = !0
                                        })), window.addEventListener("popstate", (() => {
                                            o && (h = setTimeout((() => {
                                                window.EVO_VERBOSE(`popstate ${window.location.hash}`), window.location.reload()
                                            }), 100))
                                        }))
                                    }
                                    window.addEventListener("hashchange", (() => {
                                        h && (clearTimeout(h), h = 0), window.EVO_VERBOSE(`hashchange ${window.location.hash}`), o.init(window.location.href)
                                    }))
                                }(m),
                                function(o) {
                                    if ("empty" === o.instance.kind && !Oh()) try {
                                        o.instance = new Wo(o, "", !0)
                                    } catch (o) {
                                        l.vV(new l.ah("Initialization failed", o))
                                    }
                                }(m),
                                function(o) {
                                    let m;
                                    o.addInstanceSwitchListener((h => {
                                        o.shared.subscribe("style", (o => {
                                            var t;
                                            let B;
                                            if (null === (t = o.data) || void 0 === t ? void 0 : t.mobile_settings) {
                                                const m = o.data.mobile_settings.branded_lobby_gradient;
                                                (null == m ? void 0 : m.light) && m.dark && (B = [m.light, m.dark])
                                            }
                                            h.subscribe("config", (o => {
                                                let h, t;
                                                o.branded_cloth_gradient_light && o.branded_cloth_gradient_dark && (h = [o.branded_cloth_gradient_light, o.branded_cloth_gradient_dark]), o.branded_menu_gradient_light && o.branded_menu_gradient_dark && (t = [o.branded_menu_gradient_light, o.branded_menu_gradient_dark]), m = function(o, m, h, t) {
                                                    let B = "";
                                                    if (o) {
                                                        const m = `linear-gradient(45deg,rgba(${o[1]},0) 0%, rgba(${o[1]},0.8) 50%, rgba(${o[1]},0) 100%)`,
                                                            h = `linear-gradient(45deg,rgb(${o[0]}) -5%,rgb(${o[1]}) 50%,rgb(${o[0]}) 105%)`;
                                                        B += `.game-screen.cloth-gradient {background: -webkit-${m}, -webkit-${h} !important;background: ${m}, ${h} !important;background-size: cover !important;background-repeat: no-repeat !important; }`
                                                    }
                                                    const P = t ? m : h;
                                                    if (P) {
                                                        const o = `linear-gradient(45deg,rgba(${P[1]},0) 0%,rgba(${P[1]},0.8) 50%,rgba(${P[1]},0) 100%)`,
                                                            m = `linear-gradient(45deg,rgb(${P[0]}) -5%,rgb(${P[1]}) 50%,rgb(${P[0]}) 105%)`;
                                                        B += `.${Cm} .${Lm} {background: ${o}, ${m} !important;background-size: cover !important;background-repeat: no-repeat !important; }`
                                                    }
                                                    if (B.length) {
                                                        const o = document.createElement("style");
                                                        return o.type = "text/css", o.media = "screen", document.head.appendChild(o), o.sheet && ((o.sheet.ownerNode || o).innerHTML = B), o
                                                    }
                                                }(h, B, t, !o.game)
                                            }))
                                        })), h.subscribe("disposing", (() => {
                                            var o;
                                            null === (o = null == m ? void 0 : m.parentNode) || void 0 === o || o.removeChild(m)
                                        }))
                                    }))
                                }(m),
                                function(o) {
                                    const m = Jh(Cm),
                                        h = Jh(Zm);
                                    o.shared.getPromise("i18n").then((o => {
                                        Jh(mh).textContent = o.common["mobile.poweredby"]
                                    }));
                                    let t = !1;

                                    function B(o) {
                                        o.target instanceof HTMLElement && "BUTTON" === o.target.tagName || o.preventDefault()
                                    }

                                    function P(o = !0) {
                                        Jh(oh).style.opacity = o ? "1" : "0"
                                    }

                                    function E() {
                                        const m = Jh(Im),
                                            h = o.deviceInfo.isDesktop ? 16 / 9 : 1 / 1,
                                            t = window.innerWidth / window.innerHeight > h,
                                            B = o.deviceInfo.isTablet;
                                        m.classList.toggle(Dm, t), m.classList.toggle(dm, !t), m.classList.toggle(Bh, B)
                                    }

                                    function i(o, h, t) {
                                        h && m.classList.add(th), o || m.classList.add(Wm, Vm);
                                        const B = Jh($m);
                                        t ? c.Bt(B) : c.kl(B), c.kl(m, !0), m.classList.remove(cm), Jh(Ym).classList.remove(hh)
                                    }

                                    function w() {
                                        m.classList.add(cm), t || (window.removeEventListener("resize", E), window.setTimeout((() => {
                                            c.Bt(m), document.body.classList.remove("loading"), m.classList.remove(th, Mm, Eh, Ph, Nm), h.style.transform = "", window.removeEventListener("touchmove", B), window.removeEventListener("touchstart", B), window.removeEventListener("touchend", B), o.instance.publish("loadingScreenHidden", null)
                                        }), 500))
                                    }

                                    function f() {
                                        this.classList.add(hh)
                                    }

                                    function y(o, m) {
                                        for (const h of m) h && fh(h).then((m => o.prepend(m))).catch((() => {}))
                                    }

                                    function J(o = !0, m = window, h = {
                                        transfer: 0,
                                        count: 0
                                    }) {
                                        var t, B;
                                        const P = null === (B = null === (t = m.performance) || void 0 === t ? void 0 : t.getEntriesByType) || void 0 === B ? void 0 : B.call(t, "resource");
                                        for (const o of P || []) h.transfer += o.transferSize || 0, h.count++;
                                        if (o)
                                            for (let t = 0; t < m.length; t++) try {
                                                J(!0, m[t], h)
                                            } catch (o) {
                                                return null
                                            }
                                        return h
                                    }
                                    o.addInstanceSwitchListener((O => {
                                        const e = o.deviceInfo.isDesktop,
                                            H = "game" !== O.kind;
                                        let a = 0,
                                            j = -1,
                                            p = null;
                                        if ("multi" === O.kind) return void w();
                                        const s = wh.track(O.getPromise("gameLoaded"));
                                        o.captureLogo = function() {
                                            t = !0;
                                            const o = Jh(Ym),
                                                h = yh(o).then((() => s.isResolved() ? Promise.reject(new Error("Game has already loaded, the logo cannot be captured")) : (m.classList.add(Nm), o))),
                                                B = () => {
                                                    t = !1
                                                };
                                            return O.subscribe("disposing", B), {
                                                logo: h,
                                                release: () => {
                                                    B(), s.isResolved() && w()
                                                }
                                            }
                                        }, i(e, H, !1), E(), window.removeEventListener("resize", E), window.addEventListener("resize", E);
                                        const Q = o.deviceInfo.isEventPassiveSupported;
                                        window.addEventListener("touchmove", B, Q && {
                                            passive: !1
                                        }), window.addEventListener("touchstart", B, Q && {
                                            passive: !1
                                        }), window.addEventListener("touchend", B), o.shared.subscribe("style", (o => {
                                            const h = "false" === o.data.show_evo_logo;
                                            O.subscribe("config", (o => {
                                                const t = function(o, m = !1) {
                                                    const h = "evolution" === o.game_provider || !o.game_provider;
                                                    return m ? !1 !== function(o) {
                                                        try {
                                                            const m = window.sessionStorage.getItem(o);
                                                            return m ? JSON.parse(m) : void 0
                                                        } catch (o) {
                                                            return
                                                        }
                                                    }(Vo) : h ? "false" !== o.show_evo_logo : "true" === o.show_evo_logo
                                                }(o, H);
                                                var B;
                                                !h && t && (P(), B = function(o) {
                                                    const m = o.graphical_footerLogos;
                                                    return m ? m.trim().split(",").map(F) : []
                                                }(o), B.length && (m.classList.add(Mm), y(Jh(xm), B))), H || function(o, m, h) {
                                                    try {
                                                        window.sessionStorage.setItem(o, JSON.stringify(m))
                                                    } catch (o) {
                                                        null == h || h(o)
                                                    }
                                                }(Vo, t)
                                            }))
                                        })), o.shared.subscribe("setup", (o => {
                                            O.subscribe("config", (m => {
                                                var h;
                                                (function(o) {
                                                    if (o) {
                                                        const m = Jh(Ym);
                                                        m.removeEventListener("load", f), m.addEventListener("load", f), m.src = o
                                                    }
                                                })(function(o, m, h) {
                                                    const t = function(o, m, h) {
                                                        const t = window.EVO_LOCALE || m.locale,
                                                            B = m.lang,
                                                            P = h ? "graphical_desktopLoadingScreen" : "graphical_mobileLoadingScreen";
                                                        return o[`${P}_${t}`] || o[`${P}_${B}`] || o[P]
                                                    }(m, h, o);
                                                    return F(t)
                                                }(e, m, o)), e || (h = function(o) {
                                                    const m = o.graphical_mobileAwardLogos;
                                                    return m ? m.trim().split(",").map(F) : []
                                                }(m), y(Jh(Fm), h))
                                            }))
                                        })), O.subscribe(["config", "gamePackageManifest"], ((t, B) => {
                                            j = parseFloat(t.loader_expected_resource_count || "0") || B.loaderExpectedResourceCount || 0, p = t.loader_resources_counting_mode || B.loaderResourcesCountingMode || "auto";
                                            const P = !j || "none" === p;
                                            m.classList.add(P ? Eh : Ph), P && o.sendLog("CLIENT_LOADING_SCREEN_ISSUE", {
                                                error: "random-animation",
                                                game: t.game,
                                                app: B.application
                                            }), a = window.setInterval((() => {
                                                const o = J("auto" === p);
                                                if (o) {
                                                    if ("non-recursive" === p) {
                                                        const m = O.loadProgress;
                                                        if (!m) return;
                                                        o.count += m.count || 0, o.transfer += m.transfer || 0
                                                    }
                                                    if (j) {
                                                        const m = Math.max(.01, Math.min(.99, o.count / j));
                                                        h.style.transform = `translateX(${(600*m).toFixed(0)}%)`
                                                    }
                                                }
                                            }), 500)
                                        })), O.subscribe("gameLoaded", (() => {
                                            w(), clearInterval(a);
                                            const o = J("auto" === p);
                                            1 && o && j > 0 && Math.abs(1 - o.count / j) > .1 ? window.console.warn(`Mismatch between expected resource count (${j}) and actual.`, o) : window.console.log("Resources loaded:", o)
                                        })), O.subscribe("disposing", (m => {
                                            if (function() {
                                                    const o = Jh(Ym);
                                                    o.removeEventListener("load", f), o.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==", Jh(Fm).textContent = "", Jh(xm).textContent = "", P(!1)
                                                }(), null == m ? void 0 : m.suppressLoadingScreen) return;
                                            const h = "switch" === o.instance.kind && !o.instance.tableId;
                                            i(e, h, !0)
                                        }))
                                    }))
                                }(m),
                                function(o) {
                                    const m = function(o, m, h) {
                                        let t = 0,
                                            B = !1;
                                        return (...P) => {
                                            if (t < o.limit) return t += 1, setTimeout((() => {
                                                t -= 1, B = !1
                                            }), o.timeSpan), m(...P);
                                            B || (B = !0, null == h || h())
                                        }
                                    }({
                                        limit: 20,
                                        timeSpan: 6e4
                                    }, o.sendLog);
                                    o.addInstanceSwitchListener((o => {
                                        o.subscribe("gameLoaded", (() => {
                                            window.parent.postMessage({
                                                type: Um
                                            }, "*")
                                        }))
                                    })), window.addEventListener("message", (({
                                        data: o,
                                        origin: h
                                    }) => {
                                        o.type === Tm && m(bm, {
                                            origin: h,
                                            payload: o.payload
                                        })
                                    }))
                                }(m),
                                function(o) {
                                    o.shared.subscribe("setup", (m => {
                                        o.addInstanceSwitchListener((h => {
                                            h.subscribe("config", (h => {
                                                h.bare_session_id && h.bare_session_id !== m.bare_session_id && o.failed({
                                                    reason: "config",
                                                    failureDetails: "bare_session_id mismatch"
                                                })
                                            }))
                                        }))
                                    }))
                                }(m),
                                function(o) {
                                    window.addEventListener("pageshow", (m => {
                                        m.persisted && o.init(window.location.href, {
                                            triggeredBy: "bfcache"
                                        }).then((() => {
                                            window.EVO_VERBOSE("Re-initialized from bfcache")
                                        })).catch((o => {
                                            window.EVO_VERBOSE(`Re-initializing from failed due to ${o.message}`, 2)
                                        }))
                                    })), window.addEventListener("pagehide", (m => {
                                        m.persisted && o.instance.dispose().then((() => {
                                            console.log("Prepared for bfcache")
                                        })).catch((o => {
                                            console.error(`Preparation of bfcache failed`, o)
                                        }))
                                    }))
                                }(m), m.init()
                        })).catch((() => {}))
                })()
            })()
        })()
    </script>
</body>

</html>