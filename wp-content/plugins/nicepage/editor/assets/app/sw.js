!function(e){function t(s){if(n[s])return n[s].exports;var o=n[s]={i:s,l:false,exports:{}};return e[s].call(o.exports,o,o.exports,t),o.l=true,o.exports}var n={};return t.m=e,t.c=n,t.d=function(e,n,s){if(!t.o(e,n))Object.defineProperty(e,n,{configurable:false,enumerable:true,get:s})},t.n=function(e){var n=e&&e.__esModule?function t(){return e["default"]}:function t(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="/Content/BundledScripts/",t(t.s=82)}({82:function(e,t,n){"use strict";n(83)},83:function(e,t,n){"use strict";var s="npsw-"+"4.7.1",o=['sw.js?ver=4.7.1','froala.js?ver=4.7.1','app.js?ver=4.7.1','froala.css?ver=4.7.1','app.css?ver=4.7.1'];self.addEventListener("install",(function(e){console.log("ServiceWorker: sw.js: Install:",s);var t=decodeURIComponent(new URL(location).searchParams.get("assetsPath")),n=o.map((function(url){return t+url}));e.waitUntil(caches.open(s).then((function(cache){return cache.addAll(n)})))})),self.addEventListener("activate",(function(e){console.log("ServiceWorker: sw.js: Activate:",s),clients.claim(),e.waitUntil(caches.keys().then((function(e){return Promise.all(e.map((function(e){if(s!==e&&e.startsWith("npsw-"))return console.log("ServiceWorker: sw.js: Delete Old Cache.",e),caches.delete(e);else return Promise.resolve(true)})))})).then((function(){console.log("ServiceWorker: sw.js: New version of sw.js now ready to handle fetches.")})))})),self.addEventListener("fetch",(function(e){for(var t=false,n=0;n<o.length;n++)if(-1!==e.request.url.indexOf(o[n])){t=true;break}if(t)e.respondWith(caches.match(e.request).then((function(t){if(t)return console.log("ServiceWorker: sw.js: Fetch Hit",e.request.url,s),t;if("only-if-cached"!==e.request.cache||"same-origin"===e.request.mode)return console.log("ServiceWorker: sw.js: Fetch Error! Request is not in cache.",e.request.method,e.request.url,s),fetch(e.request)})).catch((function(e){console.error("ServiceWorker: sw.js: Fetch Failed.",e)})))})),self.addEventListener("message",(function(e){if(e.data&&"SKIP_WAITING"===e.data.action)console.log("ServiceWorker: sw.js: Message skipWaiting"),self.skipWaiting()}))}});