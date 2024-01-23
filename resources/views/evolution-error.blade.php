<!DOCTYPE html><html lang="en-GB"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,viewport-fit=cover,interactive-widget=resizes-content">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Casino">
    <meta name="author" content="Evolution Gaming">
    <meta name="build" content="Build Version: 6.20231117.71445.34680-3b0b320907 at 2023-11-20 07:42:32 UTC" id="build">
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
            } catch (r) {
                o("ES2017 or PointerEvent")
            }
            var r = new Image;

            function o(r) {
                r = "This browser does not support " + r + ". Redirecting to the error page...";
                try {
                    console.error(r)
                } catch (r) {}
                location.href = "/frontend/evo/errors/unsupported-browsers.html" + location.search + location.hash
            }
            r.onerror = function() {
                o("WebP")
            }, r.src = "data:image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA=="
        })()
    </script>
    <script>
        (function() {
            "use strict";
            try {
                eval("Promise=class P extends Promise{constructor(...a){super(...a);this.__stackTraceError=new Error('Promise created');}}")
            } catch (e) {}
            window.globalThis || (window.globalThis = window), null == Element.prototype.getAttributeNames && (Element.prototype.getAttributeNames = function() {
                    for (var e = this.attributes, r = e.length, t = new Array(r), a = 0; a < r; a++) t[a] = e[a].name;
                    return t
                }),
                function(e) {
                    var r = e.performance || (e.performance = {});

                    function t() {}
                    r.mark || (r.mark = t), r.measure || (r.measure = t), e[Symbol("iOS weakref hack")] = r
                }(globalThis)
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const e = window.location,
                n = e.pathname;
            "/" !== n.slice(-1) && ".html" !== n.slice(-5) && e.replace(`${n}/${e.search}${e.hash}`);
            const o = {};
            for (const e of document.cookie.split(";")) {
                const [n, t] = e.replace(/^\s*(.*)\s*$/, "$1").split(/\s*=\s*(.+)/);
                o[n] = n in o ? void 0 : t
            }
            if (!o.cdn && !o.locale) try {
                const n = new URLSearchParams(e.hash.substr(1));
                o.locale = n.get("locale");
                const t = n.get("cdn");
                t && new URL(t).origin.endsWith(".egcdn.com") && (o.cdn = t)
            } catch (e) {}
            window.EVO_CDN = o.ignore_cdn ? "" : (o.cdn || "").replace(/\/+$/, ""), window.EVO_LOCALE = o.locale || void 0, window.EVO_VERBOSE = function() {
                return !1
            }, window.EVO_VERBOSE_ENABLE = function() {
                window.EVO_VERBOSE() || (document.cookie = "verbose=true; path=/", window.EVO_VERBOSE = function(e, n, o, t) {
                    if (!e) return !0;
                    const i = document.getElementById("verbose-log") || document.body;
                    if (!i) return !0;
                    let d = null,
                        r = !1;
                    if (o && (d = i.querySelector(`[data-key="${o}"]`)), d) {
                        const e = d.getAttribute("data-timer");
                        e && window.clearTimeout(parseFloat(e))
                    } else d = document.createElement("div"), o && d.setAttribute("data-key", o), r = !0;
                    if (d.textContent = e, d.style.color = ["", "#ffc", "#fcc"][n || 0], t) {
                        const e = window.setTimeout((() => {
                            d.parentNode === i && i.removeChild(d)
                        }), t);
                        d.setAttribute("data-timer", e.toString())
                    }
                    return r && (i.appendChild(d), i.scrollTop = i.offsetHeight), !0
                }, window.addEventListener("error", i, !0))
            }, window.EVO_VERBOSE_DISABLE = function() {
                document.cookie = "verbose=false; path=/", window.EVO_VERBOSE = function() {
                    return !1
                }, window.removeEventListener("error", i, !0)
            };
            const t = window.location.href.indexOf("verbose=") > -1;

            function i(e) {
                var n;
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                let o = (null === (n = e.error) || void 0 === n ? void 0 : n.stack) || e.message;
                e.filename && (o += ` ${e.filename}`), window.EVO_VERBOSE(o, 2, "", 1e4)
            }
            t && (document.cookie = "verbose=true; path=/"), "true" === o.verbose || t ? window.EVO_VERBOSE_ENABLE() : window.EVO_VERBOSE_DISABLE(), window.addEventListener("unhandledrejection", (e => {
                if (!(null === window || void 0 === window ? void 0 : window.EVO_VERBOSE)) return;
                const n = e.reason;
                let o = `${n}`;
                const t = n instanceof Error ? n.stack : "";
                (null == n ? void 0 : n.name) && -1 === o.indexOf(n.name) && (o += ` ${n.name}`), (null == n ? void 0 : n.message) && -1 === o.indexOf(n.message) && (o += ` ${n.message}`);
                const i = `Unhandled promise rejection, reason: ${o}`,
                    d = new Error(i),
                    r = e.promise.__stackTraceError,
                    c = r ? r.stack.substr(7).replace(/\\n.*\\n/, "\\n") : "";
                d.stack = `${i}\n${c}\n${t}`, window.EVO_VERBOSE(i, 2), "undefined" != typeof Sentry && Sentry.captureException(d)
            })), window.EVO_VERBOSE("6.20231117.71445.34680-3b0b320907"), window.EVO_CDN && window.EVO_VERBOSE(`cdn: ${window.EVO_CDN}`), window.EVO_POPUP = function(e, n) {
                const o = document.getElementById("loader-popup"),
                    t = i("div", i("label", e));

                function i(e, n) {
                    const o = document.createElement(e);
                    return o.appendChild(function(e) {
                        return "undefined" != typeof Node ? e instanceof Node : "object" == typeof e
                    }(n) ? n : document.createTextNode(n)), o
                }
                null == n || n.forEach((function(e) {
                    const n = i("button", e.content);
                    n.onclick = function() {
                        var n;
                        null === (n = e.callback) || void 0 === n || n.call(e), o.removeChild(t)
                    }, t.appendChild(n)
                })), -1 === o.innerHTML.indexOf(t.outerHTML) && o.appendChild(t)
            }
        })()
    </script>
    <script>
        (function() {
            "use strict";
            const e = "service.worker.ae4b3558.js";

            function t(t) {
                return !t.active || !t.active.scriptURL.endsWith(e)
            }

            function r(e) {
                "undefined" != typeof Sentry && Sentry.captureException(e)
            }(async function() {
                if (navigator.cookieEnabled) try {
                    await async function() {
                        if (!navigator.serviceWorker) return;
                        const a = await navigator.serviceWorker.getRegistrations();
                        let i = !1;
                        for (const e of a) t(e) ? await e.unregister() : i = !0;
                        i || await navigator.serviceWorker.register(e), navigator.serviceWorker.addEventListener("message", (e => {
                            if ("processing-failed" === e.data.type) {
                                const t = new Error(e.data.message);
                                t.stack = e.data.stack, r(t)
                            }
                        }))
                    }()
                } catch (e) {
                    r(e), console.error(e)
                }
            })()
        })()
    </script>
    <style id="loader">
        *{margin:0;padding:0}body,html{-webkit-text-size-adjust:100%!important;-moz-text-size-adjust:100%!important;text-size-adjust:100%!important;background-color:#000;color:#fff;font:10px/12px Inter,Arial,sans-serif;height:100%}input,select,textarea{font-family:Inter,Arial,sans-serif}input::-ms-clear{display:none}.uc-video-toolbar{display:none}.loader-frame-container{align-items:center;display:flex;height:100vh;overflow:hidden;position:absolute;right:0;top:0;width:100vw}body.phone .loader-frame-container,body.tablet .loader-frame-container{height:100%;width:100%}.loader-frame-container iframe{background:rgba(0,0,0,.1);border:none;box-sizing:border-box;display:inline-block;vertical-align:top}body.phone .loader-frame-container iframe,body.tablet .loader-frame-container iframe{height:100%;width:100%}.loader-frame-container .games-container{align-items:center;display:flex;flex-wrap:wrap;justify-content:center}body.phone .loader-frame-container .games-container,body.tablet .loader-frame-container .games-container{align-items:start;height:100%;width:100%}.loader-frame-container .sidebar-container{bottom:0;height:100%;position:fixed;right:0}@media (orientation:landscape){.loader-frame-container .sidebar-container{top:0}}.loader-frame-container .sidebar-container iframe{background:0 0;height:100%;width:100%}.loader-frame-container .topbar-container{left:0;position:absolute;right:0;top:0;width:100%}body.tablet .loader-frame-container.withTopBar .games-container{height:calc(100% - 30px);padding-top:30px}body.phone .sidebar-container iframe{animation:MWshowKeyframes .5s linear forwards}body.phone .sidebar-container iframe.disposing{animation:MWhideKeyframes .5s linear}body.phone .loader-frame-container.withTopBar .games-container{height:calc(100% - 30px);padding-top:30px}@media (orientation:landscape){body.phone .loader-frame-container.withTopBar .sidebar-container{top:30px}}@keyframes MWshowKeyframes{0%{transform:translateY(100vh)}to{transform:translateY(0)}}@keyframes MWhideKeyframes{to{transform:translateY(100vh)}}#loader-popup{align-items:center;bottom:0;display:flex;flex-direction:column;flex-wrap:wrap;font:12px/1.5 Segoe UI,Helvetica,Arial,sans-serif;justify-content:center;left:0;position:absolute;right:0;top:0;-webkit-user-select:none;-moz-user-select:none;user-select:none;z-index:1000001}#loader-popup:empty{display:none}body.tablet #loader-popup{font-size:14px}body.desktop #loader-popup{font-size:calc(1vmin + 5px)}#loader-popup>div{background-color:#1a1a1a;border:.0833em solid rgba(150,255,255,.97);border-radius:.5em;box-sizing:border-box;margin:.5em;max-width:90%;padding:1.4em 2.8em;text-align:center}#loader-popup label{display:block}#loader-popup a,#loader-popup button{background-color:initial;border:.0833em solid #4d4d4d;border-radius:1.5em;color:#dcdcdc;cursor:pointer;font-size:1em;font-weight:400;line-height:2;margin:1em 1em 0;min-width:20%;padding:0 2em;text-decoration:none;text-transform:uppercase;transition:background-color .5s ease}#loader-popup a:hover,#loader-popup button:hover{background-color:hsla(0,0%,100%,.4);color:#fff}#loader-popup body.ka a,#loader-popup body.ka button{text-transform:none}.rootContainer--512ac{display:block;height:100%;left:0;overflow:auto;position:absolute;top:0;width:100%}body.ios.native .rootContainer--512ac{height:100vh;width:100vw}#verbose-log{word-wrap:break-word;color:#fff;font-family:monospace;font-size:10px;height:50vh;left:0;line-height:1;max-width:100%;overflow:hidden;pointer-events:none;position:fixed;text-shadow:1px 1px 2px #000;top:0;white-space:pre-wrap;width:100vw;z-index:1000002}.loadingScreen--87788{align-items:center;background:#000;bottom:0;display:none;justify-content:center;left:0;position:absolute;right:0;top:0;z-index:1000000}.gradient--0f1d8{background-position:50%;background-repeat:no-repeat;background-size:cover;background:linear-gradient(45deg,transparent,rgba(5,10,10,.8) 50%,transparent),linear-gradient(45deg,#414650 -5%,#050a0a 50%,#414650 105%)!important}.loadingScreen--87788.finishProgress--0c00b{opacity:0;transition:opacity .5s}.content--1ddca{position:relative}.content--1ddca.narrow--8d0d9{font-size:6.25vw;height:56.25vw;width:100vw}.content--1ddca.wide--3bffa{font-size:11.11111vh;height:100vh;width:177.77778vh}.center--9aeab{height:.88em;margin:0 auto;top:5.95em;width:2.75em}.center--9aeab,.footer--fba55{left:0;position:absolute;right:0}.footer--fba55{align-items:center;display:flex;flex-direction:column;height:.3em;top:1.15em;width:100%}.footer--fba55>div{font-size:10%;margin-top:1em;white-space:nowrap}.footer--fba55>img{animation:appearingLogoKeyframes--af0f0 .2s linear;height:100%;margin:auto;width:auto}.mobile--76605 .footer--fba55{height:.24em;top:.93em}.mobile--76605 .content--1ddca.narrow--8d0d9{font-size:17vw;height:50vw;width:85vw}.mobile--76605 .content--1ddca.wide--3bffa{font-size:20vh;height:72vh;width:66vh}.mobile--76605 .center--9aeab{bottom:0;position:absolute;top:auto}.mobile--76605 .image--44b6b{bottom:1em;height:auto;max-height:100%;object-fit:contain;position:absolute}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .footer--fba55{height:.23em;top:.9em}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .center--9aeab{bottom:.72em}.mobile--76605.withFooterLogo--6ca4a .wide--3bffa .image--44b6b{bottom:1.62em;margin-left:2.5%;width:95%}.mobile--76605.withFooterLogo--6ca4a .content--1ddca.wide--3bffa{font-size:17vh}.line1--b6711{background-image:radial-gradient(hsla(0,0%,100%,.3) 15%,hsla(0,0%,100%,.1) 60%,hsla(0,0%,100%,0) 70%);background-position:center 0,center 50%;background-repeat:no-repeat,no-repeat;height:11.765%;position:absolute;top:11.765%;visibility:hidden;width:100%}.line1--b6711:after{background-image:radial-gradient(#fff 15%,hsla(0,0%,100%,0) 70%);content:"";display:block;height:18.234%;top:44%}.line1--b6711:after,.line2--f8241{background-position:50%;background-repeat:no-repeat;position:absolute;width:100%}.line2--f8241{background-image:radial-gradient(hsla(0,0%,100%,.5) 15%,hsla(0,0%,100%,.3) 65%,hsla(0,0%,100%,0) 71%);height:1.967%;overflow:hidden;top:17%;visibility:hidden}.star1--da76f{height:47.059%;position:absolute;top:-4.96%;transition:transform .2s;visibility:hidden;width:14.546%}.star2--7a218{animation:starRotationKeyframes--daa9e 2s linear infinite;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width='48' height='48' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3CradialGradient fx='50%25' fy='50%25' r='49.1%25' id='c'%3E%3Cstop stop-color='%23fff' offset='30%25'/%3E%3Cstop stop-color='%23fff' stop-opacity='.5' offset='100%25'/%3E%3C/radialGradient%3E%3Cfilter x='-84%25' y='-84%25' width='268%25' height='268%25' filterUnits='objectBoundingBox' id='a'%3E%3CfeMorphology radius='.1' operator='dilate' in='SourceAlpha' result='d'/%3E%3CfeOffset in='d' result='e'/%3E%3CfeGaussianBlur stdDeviation='2' in='e' result='f'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0' in='f' result='g'/%3E%3CfeOffset in='SourceAlpha' result='h'/%3E%3CfeGaussianBlur stdDeviation='7' in='h' result='i'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0' in='i' result='j'/%3E%3CfeMerge%3E%3CfeMergeNode in='g'/%3E%3CfeMergeNode in='j'/%3E%3C/feMerge%3E%3C/filter%3E%3Cpath d='M17.4 14H19l11 1-11 1h-1.6l1.1 1.1 7.1 8.5-8.5-7-1.1-1.2V19l-1 11-1-11v-1.6l-1.1 1.1-8.5 7.1 7-8.5 1.2-1.1H11L0 15l11-1h1.6l-1.1-1.1-7.1-8.5 8.5 7 1.1 1.2V11l1-11 1 11v1.6l1.1-1.1 8.5-7.1-7 8.5-1.2 1.1z' id='b'/%3E%3C/defs%3E%3Cg transform='translate(8.8 8.8)' fill='none' fill-rule='evenodd'%3E%3Cuse fill='%23000' filter='url(%23a)' xlink:href='%23b'/%3E%3Cuse fill='url(%23c)' xlink:href='%23b'/%3E%3C/g%3E%3C/svg%3E");background-position:100%;background-repeat:no-repeat;background-size:100% 100%;float:right;height:100%;width:100%}.evoLogo--06ffa{background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='330' height='40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23FFF'%3E%3Cpath d='M103.534 5.493h20.347v4.61h-15.06v6.727h10.026v4.61H108.82v7.53h15.525v4.611h-20.812z'/%3E%3Cpath d='M122.88 13.615h5.415l4.738 13.917 4.4-13.917h5.245l-7.276 19.966h-4.865zm18.967 10.025c0-6.09 4.23-10.406 10.28-10.406 6.006 0 10.236 4.315 10.236 10.406 0 6.007-4.314 10.322-10.364 10.322-6.006 0-10.152-4.23-10.152-10.322zm15.186.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.949 2.284-4.949 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.991-2.2 4.991-5.922zm7.714-18.655h5.287v28.469h-5.287zm8.306 20.474V13.615h5.245V25.29c0 2.665 1.27 4.23 3.638 4.23 2.75 0 3.892-2.326 3.892-5.753V13.615h5.245V33.58h-5.245v-2.834c-1.058 2.073-2.877 3.215-5.457 3.215-4.526 0-7.318-3.215-7.318-8.376zm22.815 2.707V17.845h-2.834v-4.23h2.834V9.85l5.119-2.876v6.64h3.934v4.231h-3.976v9.94c0 .974.465 1.397 1.438 1.44h2.326v4.356h-4.06c-3.85-.211-4.696-1.988-4.78-5.288zm11.436-22.715h5.457v5.118h-5.457V5.578zm.085 8.037h5.288V33.58h-5.288V13.615zm7.671 10.025c0-6.09 4.23-10.406 10.28-10.406 6.007 0 10.237 4.315 10.237 10.406 0 6.007-4.315 10.322-10.364 10.322-6.007 0-10.152-4.23-10.152-10.322zm15.187.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.95 2.284-4.95 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.992-2.2 4.992-5.922zm7.671-10.152h5.246v3.257c1.057-2.327 3.003-3.68 5.837-3.68 4.357 0 6.938 2.919 6.938 8.418v11.97h-5.246V21.906c0-2.792-1.057-4.23-3.51-4.23-2.497 0-4.02 2.03-4.02 5.753V33.58h-5.245V13.615zM94.61 8.579C89.833 2.276 81.135.499 73.929 4.347c2.816 6.339 4.926 13.779 18.806 14.214 1.629.051 3.418.007 5.391-.148-.284-3.975-1.578-7.276-3.516-9.834zm-2.56 11.108c-8.35.413-12.272 3.458-14.721 7.213-1.441 2.21-2.374 4.665-3.4 6.974 10.131 5.41 23.214-.295 24.198-14.067-2.253-.177-4.267-.21-6.075-.12z'/%3E%3C/g%3E%3C/svg%3E") no-repeat center .22em;background-size:contain;bottom:0;height:65%;opacity:0;position:absolute;text-align:left;transition:opacity .2s;width:100%}.evoLogo--06ffa:empty{opacity:0}.logoText--42a39{font:300 .14em Segoe UI,Helvetica,Arial,sans-serif;opacity:.65;position:absolute;text-align:center;transition:opacity .2s;width:100%}.image--44b6b{display:block;height:100%;object-fit:cover;opacity:0;transition:opacity .5s;width:100%}.image--44b6b.loaded--10bec{opacity:1}.awardLogos--861ba{align-items:center;display:flex;flex-direction:row;height:10em;justify-items:center;left:.5em;position:absolute;top:.5em}.awardLogos--861ba>img{animation:appearingLogoKeyframes--af0f0 .5s linear;height:100%;padding-right:.5em}.loadingScreen--87788.noImage--01a3d .content--1ddca.narrow--8d0d9{height:84vw}.loadingScreen--87788.noImage--01a3d .content--1ddca.wide--3bffa{height:133vh}.loadingScreen--87788.noImage--01a3d .content--1ddca.tablet--43c30{font-size:6.25vw}.loadingScreen--87788.noImage--01a3d .center--9aeab{height:1em;top:50%;width:2.85em}.loadingScreen--87788.noImage--01a3d .line1--b6711{bottom:0;top:auto}.loadingScreen--87788.noImage--01a3d .line2--f8241{bottom:.045em;top:auto}.loadingScreen--87788.noImage--01a3d .star1--da76f{bottom:-14.5%;height:.4em;top:auto;width:.4em}.loadingScreen--87788.noImage--01a3d .evoLogo--06ffa{background-position:center .36em;bottom:auto;height:1em;left:-1.13em;top:-.5em;width:5.1em}.loadingScreen--87788.noImage--01a3d .logoText--42a39{font-size:.18em}.loadingScreen--87788.properAnimation--47cc2 .line1--b6711,.loadingScreen--87788.properAnimation--47cc2 .line2--f8241,.loadingScreen--87788.properAnimation--47cc2 .star1--da76f{visibility:visible}.loadingScreen--87788.randomAnimation--de14a .star1--da76f{transform:translateX(300%);transition:none;visibility:visible}@media screen and (max-height:35px){.awardLogos--861ba,.evoLogo--06ffa,.image--44b6b{display:none}.content--1ddca{max-height:100vh}}@keyframes starRotationKeyframes--daa9e{0%{transform:rotate(0)}to{transform:rotate(1turn)}}@keyframes appearingLogoKeyframes--af0f0{0%{opacity:0}to{opacity:1}}
    </style>
</head>

<body class="notranslate desktop">
    <div id="verbose-log" data-sandbox="ignore"></div>
    <div id="loader-popup"><div><label>This game is currently under maintenance, please retry at a later point or pick another game.</label></div></div>
    <div class="loadingScreen--87788 finishProgress--0c00b" data-sandbox="ignore" style="display: none;">
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


</body></html>