<?php

$page = "home";
include('header.php');


?>
<style>
.container {
  max-width: 960px;
}
.globalContent {
    margin-top: -70px;
    z-index: -19;
}
.border-bottom {
    border-bottom: none!important;
}

.bg-white {
    background-color: #efefef00!important;
}

img.my-0.mr-md-auto.font-weight-normal {
    margin-top: 5px!important;
}
.shadow-sm {
    box-shadow: none!important;
}
.homepage-wrap {
    max-width: 100%;
    width: 1020px;
    margin: auto;
    z-index: 100;
    display: block;
}

img.my-0.mr-md-auto.font-weight-normal {
    float: left;
}

nav.my-2.my-md-0.mr-md-3 {
    float: right;
}

a.btn.btn-outline-primary {
    float: right;
}

nav.my-2.my-md-0.mr-md-3 {
    margin-top: 7px!important;
}
@media (max-width: 767px) {
.globalContent {
    margin-top: 0px; 
}
nav.my-2.my-md-0.mr-md-3 {
    margin-top: 25px!important;
    margin-right: 0px!important;
}

img.my-0.mr-md-auto.font-weight-normal {
  width: 100%;
}
a.btn.btn-outline-primary {
    margin-top: 15px;
}
nav.my-2.my-md-0.mr-md-3 {
  width: 100%;
}
nav.my-2.my-md-0.mr-md-3 {
    text-align: center;
}
a.btn.btn-outline-primary {
  width: 100%;
}




}


.d-flex.flex-column.flex-md-row.align-items-center.p-3.px-md-4.mb-3.bg-white.border-bottom.shadow-sm {
    max-width: 1075px;
    margin: 0 auto;
    width: 100%;
}

nav.my-2.my-md-0.mr-md-3 {
    margin-right: 19px!important;
}

/*
 * Custom translucent site header
 */

.site-header {
  background-color: rgba(0, 0, 0, .85);
  -webkit-backdrop-filter: saturate(180%) blur(20px);
  backdrop-filter: saturate(180%) blur(20px);
}
.site-header a {
  color: #999;
  transition: ease-in-out color .15s;
}
.site-header a:hover {
  color: #fff;
  text-decoration: none;
}

/*
 * Dummy devices (replace them with your own or something else entirely!)
 */

.product-device {
  position: absolute;
  right: 10%;
  bottom: -30%;
  width: 300px;
  height: 540px;
  background-color: #333;
  border-radius: 21px;
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}

.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}

.product-device-2 {
  top: -25%;
  right: auto;
  bottom: 0;
  left: 5%;
  background-color: #e5e5e5;
}


/*
 * Extra utilities
 */

.flex-equal > * {
  -ms-flex: 1;
  flex: 1;
}
@media (min-width: 768px) {
  .flex-md-equal > * {
    -ms-flex: 1;
    flex: 1;
  }
  
}



.overflow-hidden { overflow: hidden; }

.m-md-3 {
    margin: 0rem!important;
}
.mr-md-3, .mx-md-3 {
    margin-right: 0rem!important;
}
.mr-md-3, .mx-md-3 {
    margin-right: 0rem!important;
}
.mb-3, .my-3 {
    margin-bottom: 0rem!important;
}
.mt-md-3, .my-md-3 {
    margin-top: 0rem!important;
}
.mb-md-3, .my-md-3 {
    margin-bottom: 0rem!important;
}
.pl-md-3, .px-md-3 {
    padding-left: 0rem!important;
}
</style>
  <body>
  <body>


  <style>


/*# sourceMappingURL=default-cf4e579ec72ea541d524.min.css.map*/
:root{overflow:visible}.no-scroll{overflow:hidden}main{overflow-x:hidden}main .stripes{position:absolute;z-index:-1;width:100%;display:grid;-webkit-transform:skewY(-12deg);transform:skewY(-12deg)}main .common-UppercaseTitle{margin-bottom:20px;color:#32325d}main .common-UppercaseTitle img{display:block;width:72px;height:72px;margin-bottom:23px}main p.common-BodyText+p.common-BodyText{margin-top:1em}main .overlay{position:fixed;z-index:501;z-index:calc(500 + 1);width:100%;height:100%;opacity:0;pointer-events:none;background:-webkit-gradient(linear,left top,left bottom,from(rgba(80,126,177,.95)),color-stop(10%,rgba(112,157,199,.95)),color-stop(38%,rgba(221,233,245,.95)),color-stop(48%,rgba(234,242,249,.95)),color-stop(62%,rgba(242,250,255,.95)));background:linear-gradient(rgba(80,126,177,.95),rgba(112,157,199,.95) 10%,rgba(221,233,245,.95) 38%,rgba(234,242,249,.95) 48%,rgba(242,250,255,.95) 62%);-webkit-transition:opacity .7s;transition:opacity .7s;will-change:opacity}main .overlay.active{opacity:1;pointer-events:auto}body{overflow-x:hidden}.globalNav .colorize,.productNav a.home,.productNav a.home:hover{color:#fff}.globalNav .colorize.active,.globalNav .colorize:hover{color:hsla(0,0%,100%,.75)}.productNav .colorize{color:#3d7bb7}.productNav .colorize.active,.productNav .colorize:hover{color:#07427a}.productNav .separator{opacity:.1}main{position:relative;display:block}main header{border-top:1px solid transparent}@media (min-width:670px){main header{border:none}}main header .stripes{top:0;grid:repeat(5,200px)/repeat(10,1fr);-webkit-transform-origin:0;transform-origin:0;background:-webkit-gradient(linear,left top,left bottom,from(#507eb1),color-stop(10%,#709dc7),color-stop(38%,#dde9f5),color-stop(48%,#eaf2f9),color-stop(62%,#f6f9fc));background:linear-gradient(#507eb1,#709dc7 10%,#dde9f5 38%,#eaf2f9 48%,#f6f9fc 62%)}main header .stripes :first-child{grid-column:span 3;background:-webkit-gradient(linear,left top,right top,from(rgba(243,251,255,.4)),color-stop(20%,rgba(243,251,255,.15)),to(rgba(243,251,255,0)));background:linear-gradient(100grad,rgba(243,251,255,.4),rgba(243,251,255,.15) 20%,rgba(243,251,255,0))}main header .stripes :nth-child(2){grid-area:3/span 3/auto/-1}main header .stripes :nth-child(3){grid-row:4;grid-column:span 5}main header .stripes :nth-child(4){grid-area:4/span 5/auto/-1}main header .stripes :nth-child(5){grid-area:auto/1/-1/-1;background:-webkit-gradient(linear,left top,right top,color-stop(80%,#fff),to(#f5fafd));background:linear-gradient(100grad,#fff 80%,#f5fafd)}@media (min-width:670px){main header .stripes :nth-child(2){background:-webkit-gradient(linear,left top,right top,from(rgba(0,119,204,0)),color-stop(40%,rgba(0,119,204,.05)),to(rgba(0,119,204,.35)));background:linear-gradient(100grad,rgba(0,119,204,0),rgba(0,119,204,.05) 40%,rgba(0,119,204,.35))}main header .stripes :nth-child(3){background:-webkit-gradient(linear,left top,right top,color-stop(50%,#fff),to(hsla(0,0%,100%,0)));background:linear-gradient(100grad,#fff 50%,hsla(0,0%,100%,0))}main header .stripes :nth-child(4){background:-webkit-gradient(linear,left top,right top,color-stop(10%,rgba(0,119,204,0)),to(rgba(0,119,204,.05)));background:linear-gradient(100grad,rgba(0,119,204,0) 10%,rgba(0,119,204,.05))}}#header-hero>*{position:absolute}#header-hero{position:relative;height:210px;margin:150px 20px 40px}@media (min-width:670px){#header-hero{width:50%;right:0;position:absolute;height:auto;margin:0}}@-webkit-keyframes hero-illustration-fade-in{0%{opacity:0;-webkit-transform:scale(.85);transform:scale(.85)}}@keyframes hero-illustration-fade-in{0%{opacity:0;-webkit-transform:scale(.85);transform:scale(.85)}}#header-hero .hero-illustration,#header-hero .play-video{will-change:opacity,transform;-webkit-animation:hero-illustration-fade-in 2s cubic-bezier(.165,.84,.44,1) backwards;animation:hero-illustration-fade-in 2s cubic-bezier(.165,.84,.44,1) backwards}#header-hero .hero-illustration:first-child{bottom:0;right:0;-webkit-animation-delay:.6s;animation-delay:.6s}#header-hero .hero-illustration:nth-child(2){left:calc(50% - 100px);-webkit-animation-delay:.4s;animation-delay:.4s}#header-hero .hero-illustration:nth-child(3){z-index:1;top:calc(50% - 56px);-webkit-animation-delay:.2s;animation-delay:.2s}@media (min-width:670px){#header-hero .hero-illustration:first-child{top:327px;left:212px;bottom:auto;right:auto}#header-hero .hero-illustration:nth-child(2){top:193px;left:96px}#header-hero .hero-illustration:nth-child(3){left:20px;top:265px}}#header-hero .hero-illustration:before{content:"";position:absolute;left:12px;top:12px;right:12px;bottom:0;opacity:.4}#header-hero .hero-illustration:first-child:before{-webkit-box-shadow:0 15px 40px #47b6cc;box-shadow:0 15px 40px #47b6cc}#header-hero .hero-illustration:nth-child(2):before{-webkit-box-shadow:0 15px 40px #2397af;box-shadow:0 15px 40px #2397af}#header-hero .hero-illustration:nth-child(3):before{-webkit-box-shadow:0 15px 40px #d77051;box-shadow:0 15px 40px #d77051}#header-hero .hero-illustration svg{position:relative;width:200px;vertical-align:middle}#header-hero .play-video{position:relative;z-index:1;height:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-animation-delay:.8s;animation-delay:.8s}@media (min-width:670px){#header-hero .hero-illustration svg{height:162px;width:288px}#header-hero .play-video{left:20px;top:321px;width:480px;position:absolute;height:auto}}#header-hero .common-Button{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;margin:auto;padding:0 18px;border-radius:20px;background:hsla(0,0%,100%,.92);-webkit-box-shadow:0 5px 10px rgba(153,107,46,.1);box-shadow:0 5px 10px rgba(153,107,46,.1);color:#7795f8;opacity:0;-webkit-transition:opacity .7s,-webkit-transform .15s ease;transition:opacity .7s,-webkit-transform .15s ease;transition:transform .15s ease,opacity .7s;transition:transform .15s ease,opacity .7s,-webkit-transform .15s ease;will-change:opacity;cursor:pointer}#header-hero .common-Button.active{opacity:1}@supports ((-webkit-backdrop-filter:blur(3px)) or (backdrop-filter:blur(3px))){#header-hero .common-Button{-webkit-backdrop-filter:blur(3px);backdrop-filter:blur(3px);background:hsla(0,0%,100%,.85)}}#header-hero .common-Button svg{-ms-flex-item-align:center;align-self:center;width:12px;height:14px;margin-right:9px;fill:#7795f8;-webkit-transition:fill .2s;transition:fill .2s}@media (min-width:670px){#header-hero .common-Button:hover svg{fill:#3ecf8e}}#header-hero .cubes{top:0}#header-hero .cube{position:absolute;will-change:transform;-webkit-animation:cube-fade-in 2s cubic-bezier(.165,.84,.44,1);animation:cube-fade-in 2s cubic-bezier(.165,.84,.44,1)}#header-hero .cube:first-child{margin-top:-270px}#header-hero .cube:nth-child(2){z-index:1;margin-top:-265px}#header-hero .cube:nth-child(3){z-index:-1;margin:-355px 0 0 50px}#header-hero .cube:nth-child(3)~.cube{display:none}@media (min-width:670px){#header-hero .cubes .cube{margin:0}#header-hero .cube:nth-child(3){z-index:0}#header-hero .cube:nth-child(3)~.cube{display:block}}@-webkit-keyframes cube-fade-in{0%{opacity:0;-webkit-transform:scale(.5);transform:scale(.5)}}@keyframes cube-fade-in{0%{opacity:0;-webkit-transform:scale(.5);transform:scale(.5)}}#header-hero .cube div{position:absolute;width:100%;height:100%}#header-hero .cube .shadow{top:40%;background:#07427a}#header-hero .cube .sides{-webkit-transform-style:preserve-3d;transform-style:preserve-3d;-webkit-perspective:600px;perspective:600px}#header-hero .cube .sides div{-webkit-backface-visibility:hidden;backface-visibility:hidden;will-change:transform}#overlay-video{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}#overlay-video video{max-height:100%;padding:0;-webkit-box-shadow:0 20px 40px #aab7c4;box-shadow:0 20px 40px #aab7c4;will-change:transform}#intro{position:relative;z-index:1;padding-bottom:80px}#intro .common-SectionTitle{color:#1d1d5c;font-size:32px}#intro .common-BodyText{margin:25px 0;color:#5e6d89}#intro ul{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}#intro li:first-child{margin:0 12px 12px 0}#intro li:first-child .common-Button{color:#fff;background-color:#3ecf8e}#intro li:first-child .common-Button:active{background-color:#24b47e}#intro li:last-child .common-Button{color:#7795f8}@media (min-width:670px){#intro{padding-top:190px;position:static;padding-bottom:140px}#intro .common-SectionTitle{max-width:420px;font-size:40px}#intro .common-BodyText{margin:25px 56% 80px 0}#intro li:first-child{margin:0 20px 0 0}}@media (min-width:880px){#intro{padding-top:205px}}@media (prefers-reduced-motion){#header-hero *{-webkit-animation:none!important;animation:none!important}}#key-benefits .common-BodyTitle{padding:8px 0 10px}#key-benefits .common-BodyText{margin-bottom:2em}@media (min-width:670px){#key-benefits{display:grid;grid:repeat(3,auto)/auto-flow 1fr;grid-gap:0 41px}#key-benefits>[id$=icon]{-ms-flex-item-align:center;align-self:center}#key-benefits .common-BodyText{margin:0}}#customization-fallback-icon,#customization-icon{width:70px;height:70px;margin-left:-13px}#customization-icon [href$=checkbox]{fill:#d8f5ff}#customization-icon [href$=checkmark]{fill:#fff;opacity:0}#customization-icon .control use{-webkit-transform-origin:9.5px 9.5px;transform-origin:9.5px 9.5px}#customization-fallback-icon{display:block;background:url(/img/v3/connect/features/key-benefits/customization-fallback.svg)}#globe-icon{margin-left:-2px}#globe-icon canvas{vertical-align:middle}#rocket-icon{width:75px;margin-left:-11px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}#rocket-icon .flame{will-change:transform;-webkit-transform-origin:15px 37.5px;transform-origin:15px 37.5px}#comparison{position:relative;margin-top:70px}@media (min-width:670px){#comparison{margin-top:120px}}@media (min-width:880px){#comparison{margin-top:170px}}#comparison .stripes{height:100%;grid:repeat(2,200px)/1fr minmax(0,1000px) 1fr;grid:repeat(2,200px)/1fr minmax(0,calc(1040px - 20px * 2)) 1fr;-ms-flex-line-pack:justify;align-content:space-between;background:-webkit-gradient(linear,left top,right top,from(#545fdd),color-stop(50%,#6772e5));background:linear-gradient(100grad,#545fdd,#6772e5 50%)}@media (min-width:670px){#comparison .stripes{height:calc(100% - 120px)}}#comparison .stripes :first-child{grid-column:2;background:-webkit-gradient(linear,left top,right top,color-stop(70%,rgba(41,50,205,0)),to(rgba(41,50,205,.5)));background:linear-gradient(100grad,rgba(41,50,205,0) 70%,rgba(41,50,205,.5))}#comparison .stripes :nth-child(2){background:-webkit-gradient(linear,left top,right top,from(#76eea7),to(#4acf8c));background:linear-gradient(100grad,#76eea7,#4acf8c)}#comparison .stripes :nth-child(3){grid-row:2;background:-webkit-gradient(linear,left top,right top,from(#6adaff),to(rgba(106,218,255,.7)));background:linear-gradient(100grad,#6adaff,rgba(106,218,255,.7))}#comparison .common-UppercaseTitle{padding-top:85px;margin-bottom:40px;text-align:center;color:#fff}#comparison .common-UppercaseTitle img{margin-left:auto;margin-right:auto}#comparison .common-UppercaseTitle strong{display:block;color:#74dbf9}#comparison .container-lg{display:grid;grid:auto/1fr;grid-gap:20px 0}#comparison section{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;border-radius:8px;background:#fff}#comparison section:before{content:"";position:absolute;width:100%;height:100%;z-index:-1;-webkit-box-shadow:0 30px 60px -12px rgba(50,50,93,.25),0 18px 36px -18px rgba(0,0,0,.3),0 -12px 36px -8px rgba(0,0,0,.025);box-shadow:0 30px 60px -12px rgba(50,50,93,.25),0 18px 36px -18px rgba(0,0,0,.3),0 -12px 36px -8px rgba(0,0,0,.025);border-radius:8px}@media (min-width:880px){#comparison .common-UppercaseTitle{margin-bottom:65px}#comparison .container-lg{grid:auto/auto-flow 1fr;grid-gap:0 12px}}#comparison .common-UppercaseText{padding:11px 0;text-align:center;border-radius:8px 8px 0 0}#comparison section:first-child .common-UppercaseText{color:#525f7f;background:#f4f8fb}#comparison section:last-child .common-UppercaseText{color:#24b47e;background:#f2feef}#comparison .common-BodyText{margin:20px}@media (min-width:670px){#comparison .common-BodyText{margin:38px 40px}}#comparison ul{position:relative;-webkit-box-flex:1;-ms-flex:1;flex:1;background:linear-gradient(100grad,#fff 54px,#f2f6fa 0) repeat-x;background-size:55px 100%;border-bottom-right-radius:8px;border-bottom-left-radius:8px}#comparison li{display:-webkit-box;display:-ms-flexbox;display:flex;padding:7px 0}#comparison li:nth-child(odd){background:rgba(228,237,245,.4)}#comparison .centered-label{display:block;text-align:center}#comparison .label{--label-padding-x:7px;padding:2px var(--label-padding-x);border-radius:20px;font-weight:600;font-size:13px;color:#fff;text-transform:uppercase}#comparison li:not(:last-child) .label{position:relative;z-index:1}#comparison li:first-child .label{margin-left:7px;background:#68d4f8}#comparison li:nth-child(2) .label{margin-left:18%;background:#7795f8}#comparison li:nth-child(3) .label{margin-left:24%;background:#f6a4eb}#comparison li:nth-child(4) .label{margin-left:34%;background:#f5be58}#comparison li:nth-child(5) .label{margin-left:25%;background:#fa755a}@media (min-width:670px){#comparison li:nth-child(5) .label{margin-left:58%}}#comparison li:last-child .label{margin-right:7px;background:#3ecf8e}#comparison section:first-child li:last-child{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}#comparison section:last-child li:last-child .label{-webkit-box-flex:1;-ms-flex:1;flex:1;margin-left:86px}#comparison .launch-marker{--size:6px;position:absolute;width:var(--size);height:100%;top:0;margin-left:calc(-1 * var(--label-padding-x) - var(--size) + 1px)}#comparison .launch-marker-circle{position:absolute;top:calc(var(--size) / -2);width:var(--size);height:var(--size);border-radius:50%;background:#fff;border:2px solid #3ecf8e}#comparison .launch-marker-bar{display:block;height:100%;margin:0 2px;background:#e4edf5}#routing-payments{--diagram-height:220px}#routing-payments .common-UppercaseTitle{padding-top:100px;text-align:center}#routing-payments .common-UppercaseTitle img{margin-left:auto;margin-right:auto}#routing-payments .intro{margin-bottom:.8em;font-size:24px;line-height:36px;color:#3ecf8e}#routing-payments .intro em{font-style:normal}@media (min-width:670px){#routing-payments{--diagram-height:280px}#routing-payments .intro{text-align:center}}@media (min-width:880px){#routing-payments{--diagram-height:406px}#routing-payments .common-UppercaseTitle{padding-top:140px}#routing-payments .container-lg{display:grid;grid:auto/340px 1fr;grid-gap:0 47px}#routing-payments .intro{margin:0;text-align:right;font-size:26px;line-height:39px}#routing-payments .common-BodyText{margin-right:35px}}#routing-diagram-legend{font-size:12px;font-weight:600;text-transform:uppercase;padding:40px 0 20px;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}#routing-diagram-legend,#routing-diagram-legend li{display:-webkit-box;display:-ms-flexbox;display:flex}#routing-diagram-legend li{-webkit-box-align:center;-ms-flex-align:center;align-items:center}#routing-diagram-legend .customer{color:#24b47e}#routing-diagram-legend .platform{color:#3297d3}#routing-diagram-legend .merchant{color:#d782d9}#routing-diagram-legend .bank{color:#f5be58}#routing-diagram-legend span{width:11px;height:11px;border-radius:50%;margin-right:6px}#routing-diagram-legend .customer span{background:#aff1b6}#routing-diagram-legend .platform span{background:#8feffb}#routing-diagram-legend .merchant span{background:#ffe0f5}#routing-diagram-legend .bank span{background:#fdeebe}#routing-payments nav{position:relative;margin-bottom:.7em}@media (min-width:670px){#routing-diagram-legend{font-size:13px;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}#routing-diagram-legend li+li{margin-left:39px}}@media (min-width:880px){#routing-diagram-legend{grid-column:2;padding:60px 0 15px}#routing-payments nav{display:grid;-ms-flex-line-pack:justify;align-content:space-between;margin:0 0 0 76px}}#routing-payments nav div>*{width:100%;height:40px}#routing-payments nav .selection{position:absolute;border-radius:4px;background:#fff;-webkit-box-shadow:0 6px 12px -2px rgba(50,50,93,.25),0 3px 7px -3px rgba(0,0,0,.3);box-shadow:0 6px 12px -2px rgba(50,50,93,.25),0 3px 7px -3px rgba(0,0,0,.3);will-change:transform;-webkit-transform-origin:50% 0;transform-origin:50% 0}#routing-payments nav button{position:relative;text-align:left;cursor:pointer;padding-left:14px;font-weight:600;font-size:15px;text-transform:uppercase;color:#45b2e8}#routing-payments nav button:disabled{color:#c3cdd6;cursor:auto}#routing-payments nav .coming-soon:before{content:"SOON";font-weight:600;font-size:13px;color:#fff;border-radius:3px;background:#3ecf8e;padding:0 3px;margin-right:2px}#routing-payments nav p{position:absolute;padding-left:14px;font-size:15px;line-height:20px;color:#6b7c93;will-change:opacity;margin-top:calc(var(--diagram-height) + 20px)}@media (min-width:670px){#routing-payments nav p{margin-right:50%}}@media (min-width:880px){#routing-payments nav p{top:5px;position:relative;margin:0}}#routing-payments nav p:before{position:absolute;left:0;color:#45b2e8;font:16px StripeIcons;content:"\2192"}#routing-diagram,#routing-diagram-grid{height:var(--diagram-height)}#routing-diagram{--step-size:72px;--step-gap:10px;--step-translate:202px;-webkit-transition-property:-webkit-transform;transition-property:-webkit-transform;transition-property:transform;transition-property:transform,-webkit-transform;-webkit-transition-timing-function:cubic-bezier(.2,1,.3,1.05);transition-timing-function:cubic-bezier(.2,1,.3,1.05);pointer-events:none}#routing-diagram-grid{position:absolute;width:100%;left:0;background:-webkit-gradient(linear,left top,left bottom,from(#fff),color-stop(hsla(0,0%,100%,0)),to(#fff)),url(/img/v3/connect/features/routing-diagram/grid-background.png);background:linear-gradient(#fff,hsla(0,0%,100%,0),#fff),url(/img/v3/connect/features/routing-diagram/grid-background.png);background-size:100% 100%,60px 60px}@media (min-width:880px){#routing-diagram,#routing-diagram-grid{grid-area:3/2;max-width:608px}#routing-diagram-grid{border:2px solid #f2f6fa;border-radius:4px;position:static;background:url(/img/v3/connect/features/routing-diagram/grid-background.png);background-size:101px 101px}}#routing-diagram,#routing-diagram .label,#routing-diagram .step{-webkit-transition-duration:.85s;transition-duration:.85s;will-change:transform}#routing-diagram .step{position:absolute;width:72px;height:72px;left:50%;top:50%;margin:-36px 0 0 -36px;-webkit-transition-property:opacity,-webkit-transform;transition-property:opacity,-webkit-transform;transition-property:transform,opacity;transition-property:transform,opacity,-webkit-transform;-webkit-transition-timing-function:cubic-bezier(.2,1,.3,1.05),cubic-bezier(0,1,0,1);transition-timing-function:cubic-bezier(.2,1,.3,1.05),cubic-bezier(0,1,0,1)}#routing-diagram .hidden{opacity:0;-webkit-transition-timing-function:cubic-bezier(.2,1,.3,1.05),cubic-bezier(.5,0,.7,.5);transition-timing-function:cubic-bezier(.2,1,.3,1.05),cubic-bezier(.5,0,.7,.5)}#routing-diagram .label{display:block;height:100%;border-radius:50%;-webkit-transition-property:-webkit-transform;transition-property:-webkit-transform;transition-property:transform;transition-property:transform,-webkit-transform;-webkit-transition-timing-function:cubic-bezier(.2,1,.3,1.05);transition-timing-function:cubic-bezier(.2,1,.3,1.05)}#routing-diagram .customer .label{background:#aff1b6 url(/img/v3/connect/features/routing-diagram/customer.svg) no-repeat 50% 50%}#routing-diagram .platform .label{background:#8feffb url(/img/v3/connect/features/routing-diagram/platform.svg) no-repeat 50% 50%}#routing-diagram .merchant .label{background:#ffe0f5 url(/img/v3/connect/features/routing-diagram/merchant.svg) no-repeat 50% 50%}#routing-diagram .bank .label{background:#fdeebe url(/img/v3/connect/features/routing-diagram/bank.svg) no-repeat 50% 50%}#routing-diagram .platform{z-index:1}@-webkit-keyframes move-arrows{to{-webkit-mask-position:11px 0;mask-position:11px 0}}@keyframes move-arrows{to{-webkit-mask-position:11px 0;mask-position:11px 0}}@-webkit-keyframes move-arrows-delayed{to{-webkit-mask-position:330px 0;mask-position:330px 0}}@keyframes move-arrows-delayed{to{-webkit-mask-position:330px 0;mask-position:330px 0}}#routing-diagram .step:not(.platform):before{content:"";position:absolute;width:110px;width:calc(202px - 72px - 10px * 2);height:8px;top:calc(50% - 4px);-webkit-mask:url(/img/v3/connect/features/routing-diagram/arrows-delayed.svg);mask:url(/img/v3/connect/features/routing-diagram/arrows-delayed.svg);-webkit-transition-property:opacity,-webkit-transform;transition-property:opacity,-webkit-transform;transition-property:opacity,transform;transition-property:opacity,transform,-webkit-transform;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:cubic-bezier(.25,.46,.45,.94);transition-timing-function:cubic-bezier(.25,.46,.45,.94);-webkit-transition-delay:.3s;transition-delay:.3s;will-change:opacity,transform}#routing-diagram.animate-arrows .step:not(.platform):before{-webkit-mask:url(/img/v3/connect/features/routing-diagram/arrow.svg);mask:url(/img/v3/connect/features/routing-diagram/arrow.svg);-webkit-animation:move-arrows .5s linear infinite;animation:move-arrows .5s linear infinite}#routing-diagram.animate-arrows .step.delayed:not(.platform):before{-webkit-mask:url(/img/v3/connect/features/routing-diagram/arrows-delayed.svg);mask:url(/img/v3/connect/features/routing-diagram/arrows-delayed.svg);-webkit-animation:move-arrows-delayed 3s ease-in-out infinite;animation:move-arrows-delayed 3s ease-in-out infinite}#routing-diagram .backwards:before{-webkit-transform:scaleX(-1);transform:scaleX(-1)}#routing-diagram .step.hidden:before{opacity:0;-webkit-transition-duration:.1s;transition-duration:.1s;-webkit-transition-delay:0s;transition-delay:0s}#routing-diagram .bank:before,#routing-diagram .customer:before{left:100%;margin-left:10px}#routing-diagram .bank:before{background:-webkit-gradient(linear,left top,right top,from(#fdeebe),to(#8feffb));background:linear-gradient(100grad,#fdeebe,#8feffb)}#routing-diagram .customer:before{background:-webkit-gradient(linear,left top,right top,from(#aff1b6),to(#8feffb));background:linear-gradient(100grad,#aff1b6,#8feffb)}#routing-diagram .merchant:before{right:100%;background:-webkit-gradient(linear,left top,right top,from(#8feffb),to(#ffc7ee));background:linear-gradient(100grad,#8feffb,#ffc7ee);margin-right:10px}#routing-diagram .merchant.backwards:before{background:linear-gradient(-100grad,#8feffb,#ffc7ee)}#onboarding-verification{position:relative;margin-top:160px}@media (min-width:880px){#onboarding-verification{height:780px;margin-top:250px}}#onboarding-verification .stripes{height:100%;grid:repeat(2,200px)/repeat(3,1fr);-ms-flex-line-pack:justify;align-content:space-between;background:linear-gradient(192deg,#b2cbe1,#f6f9fc 42%)}#onboarding-verification .stripes :first-child{grid-column:3;background:-webkit-gradient(linear,left top,right top,from(rgba(241,248,252,0)),to(#f1f8fc));background:linear-gradient(100grad,rgba(241,248,252,0),#f1f8fc)}@media (min-width:880px){#onboarding-verification .stripes :last-child{background:-webkit-gradient(linear,left top,right top,from(#74e4a2),to(#24b47e));background:linear-gradient(100grad,#74e4a2,#24b47e)}}#onboarding-verification .phone{position:fixed;z-index:2;width:100%;bottom:0;top:0;background:rgba(246,249,252,.95);opacity:0;-webkit-transition:opacity .8s;transition:opacity .8s;pointer-events:none;left:0;-webkit-tap-highlight-color:transparent}#onboarding-verification .phone.active{opacity:1;pointer-events:auto}#onboarding-verification .phone .screen{--screen-width:390px;--form-spacing:25px;--form-separator:#e6ebf1;position:relative;width:var(--screen-width);height:690px;border-radius:6px;background:-webkit-gradient(linear,left top,left bottom,color-stop(70%,#f6f9fc),to(#fff));background:linear-gradient(#f6f9fc 70%,#fff);overflow:hidden;-webkit-transform:scale(.82051);transform:scale(.82051);-webkit-transform-origin:0 0;transform-origin:0 0;left:calc(50vw - 160px);top:calc(50vh - 284px);-webkit-box-shadow:0 10px 20px rgba(50,50,93,.1);box-shadow:0 10px 20px rgba(50,50,93,.1)}#onboarding-verification .phone .screen>*{width:100%}@media (min-width:670px){#onboarding-verification .container-lg{display:grid;grid:auto/auto-flow 1fr;margin-bottom:-30px}#onboarding-verification .phone{height:900px;border-radius:65px;-webkit-box-shadow:inset 6px -6px 15px rgba(145,160,180,.45),-30px 30px 40px rgba(118,146,180,.18);box-shadow:inset 6px -6px 15px rgba(145,160,180,.45),-30px 30px 40px rgba(118,146,180,.18);position:relative;width:440px;top:auto;left:-30px;z-index:auto;background:-webkit-gradient(linear,right top,left bottom,from(#f3f8fb),to(#e5ebf2));background:linear-gradient(to bottom left,#f3f8fb,#e5ebf2);opacity:1;-webkit-transition:none;transition:none;pointer-events:auto}#onboarding-verification .phone:after,#onboarding-verification .phone:before{content:"";position:absolute}#onboarding-verification .phone:before{width:76px;height:8px;left:182px;top:54px;border-radius:4px;background:#e4eaf1}#onboarding-verification .phone:after{width:70px;height:70px;left:185px;bottom:18px;border-radius:35px;background:#dde3eb}#onboarding-verification .phone .screen{margin:0 auto;-webkit-transform:none;transform:none;left:0;top:105px;-webkit-box-shadow:-1px 1px 6px rgba(170,183,204,.2);box-shadow:-1px 1px 6px rgba(170,183,204,.2)}}@media (min-width:880px){#onboarding-verification .container-lg{margin-bottom:0}#onboarding-verification .phone{left:0;bottom:15px}}#hestia-flow,#hestia-replay{z-index:1;height:100%}#hestia-flow,#hestia-flow>*,#hestia-replay{position:absolute}#hestia-flow .will-animate{will-change:transform}#hestia-flow header{width:100%;z-index:1}#hestia-header-background{position:absolute;border-radius:6px}#hestia-header-background path:last-child{opacity:0}#hestia-flow header>h1{position:relative;padding:var(--form-spacing) 0 0 var(--form-spacing);font-size:24px;font-weight:400;color:#025450}#hestia-merchant-icon{position:relative;display:block;width:72px;height:72px;border-radius:50%;background:#fff;-webkit-box-shadow:0 2px 4px rgba(2,84,80,.05),0 7px 14px rgba(2,84,80,.05);box-shadow:0 2px 4px rgba(2,84,80,.05),0 7px 14px rgba(2,84,80,.05)}#hestia-merchant-icon img{position:absolute}#hestia-merchant-icon [src*=merchant]{width:40px;left:calc(50% - 20px);top:19px}#hestia-merchant-icon [src*=checkmark]{width:28px;left:53px;top:-2px;border-radius:50%;-webkit-box-shadow:0 4px 10px rgba(2,84,80,.1);box-shadow:0 4px 10px rgba(2,84,80,.1);opacity:0}#hestia-merchant-icon~*{display:block}#hestia-flow header strong{margin:43px 0 8px;font-weight:500;color:#fff;text-shadow:0 1px 2px rgba(2,84,80,.03)}#hestia-notification{--banner-spacing:8px;position:absolute;top:var(--banner-spacing);left:var(--banner-spacing);right:var(--banner-spacing);border-radius:12px;background:rgba(223,245,234,.9);visibility:hidden}#hestia-notification h1{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;color:#79a7a2;text-transform:uppercase;background:rgba(243,251,247,.8);border-radius:12px 12px 0 0;padding:9px;font-size:14px;font-weight:500}@supports (-webkit-backdrop-filter:blur(10px)){#hestia-notification{-webkit-backdrop-filter:blur(10px);background:rgba(239,250,244,.6)}#hestia-notification h1{background:hsla(0,0%,100%,.45)}}#hestia-notification img{width:20px;margin-right:9px}#hestia-notification p{padding:22px 18px;font-size:17px;font-weight:500;color:#025450}#hestia-flow header~section{width:100%;top:313px}#hestia-flow .will-slide-in{-webkit-transform:translate(var(--screen-width));transform:translate(var(--screen-width))}#hestia-flow .fake-button,#hestia-flow .fake-input{height:50px;border-radius:6px;-webkit-box-shadow:0 1px 3px rgba(50,50,93,.15),0 4px 6px rgba(112,157,199,.15);box-shadow:0 1px 3px rgba(50,50,93,.15),0 4px 6px rgba(112,157,199,.15)}#hestia-flow .fake-input{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;background:#fff}#hestia-flow .fake-input img{width:20px;margin:0 11px 0 15px}#hestia-flow .fake-input p{display:-webkit-box;display:-ms-flexbox;display:flex;font-size:17px;color:#525f7f}#hestia-flow .fake-input .space{width:4px}#hestia-flow .fake-button{position:relative;text-align:center;font-size:15px;font-weight:600;line-height:50px;color:#fff;text-transform:uppercase;background-color:#6772e5}#hestia-flow .fake-button:after{content:"";position:absolute;width:9px;height:8px;right:21px;top:calc(50% - 4px);background:url(/img/v3/connect/features/hestia/arrow.svg)}#hestia-flow>section h1{text-transform:uppercase;color:#32325d;font-size:15px;font-weight:600;margin-bottom:19px}#hestia-flow>section>h1{margin-left:var(--form-spacing);margin-right:var(--form-spacing)}#hestia-contact-info [class^=fake]{margin:0 var(--form-spacing) var(--form-spacing)}#hestia-verification{bottom:0}#hestia-verification .fake-input{position:absolute;width:160px}#hestia-verification .fake-input:after,#hestia-verification .fake-input:before{content:"";position:absolute;width:33.33333%;width:calc(100% / 3);height:100%}#hestia-verification .fake-input:before{border-right:1px solid var(--form-separator)}#hestia-verification .fake-input:after{right:0;border-left:1px solid var(--form-separator)}#hestia-verification h1+.fake-input{left:var(--form-spacing)}#hestia-verification .fake-input+.fake-input{right:var(--form-spacing)}#hestia-verification span{font-weight:500;font-size:24px;color:#424770}#hestia-verification p{-webkit-box-flex:0;-ms-flex:0 33.33333%;flex:0 33.33333%;-ms-flex:0 calc(100% / 3);flex:0 calc(100% / 3);-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}#hestia-verification .fake-keyboard{--key-height:55px;position:absolute;width:100%;bottom:0;display:grid;grid:repeat(4,var(--key-height))/repeat(3,1fr);grid-gap:1px;background:var(--form-separator);-webkit-box-shadow:0 -1px 6px rgba(112,157,199,.12);box-shadow:0 -1px 6px rgba(112,157,199,.12);-webkit-transform:translateY(100%);transform:translateY(100%)}#hestia-verification .fake-keyboard span{text-align:center;line-height:var(--key-height);background:#fff;will-change:background-color}#hestia-verification .fake-keyboard :first-child{grid-row:4;grid-column:2}#hestia-verification .fake-keyboard:after,#hestia-verification .fake-keyboard:before{content:"";grid-row:4;background:#f6f9fc}#hestia-bank-info{display:grid;grid:auto/repeat(2,1fr);grid-gap:var(--form-spacing) 20px;-webkit-box-sizing:border-box;box-sizing:border-box;padding:0 var(--form-spacing)}#hestia-bank-info .fake-button,#hestia-card-selection{grid-column:span 2}#hestia-card-selection.fake-input{height:auto;-ms-flex-wrap:wrap;flex-wrap:wrap}#hestia-card-selection .group-row{-webkit-box-flex:100%;-ms-flex:100%;flex:100%;height:50px;border-top:1px solid #e9faea}#hestia-card-selection .group-row:first-child{border:none;background:#f9fff7;color:#24b47e;font-size:17px;font-weight:500;line-height:50px;text-indent:15px;border-radius:6px 6px 0 0}#hestia-card-selection .group-row:nth-child(2){color:#32325d;font-weight:600;font-size:15px;text-transform:uppercase}#hestia-card-selection .group-row:last-child,#hestia-card-selection .group-row:nth-child(2){display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}#hestia-card-selection .group-row:last-child{border-top-color:var(--form-separator)}#hestia-card-selection .fake-radio{position:relative;padding:0 10px 0 43px}#hestia-card-selection .fake-radio:before{content:"";position:absolute;width:18px;height:18px;border-radius:10px;border:1px solid #cfd7df;top:-1px;left:15px}#hestia-card-selection .fake-radio span{position:absolute;width:12px;height:12px;border-radius:6px;background:#6772e5;opacity:0;top:3px;left:19px}#hestia-confirmation{text-align:center;text-shadow:0 1px 2px rgba(2,84,80,.03)}#hestia-confirmation *{opacity:0}#hestia-flow #hestia-confirmation h1{color:#fff;font-size:20px;margin:50px 0 10px}#hestia-confirmation{font-weight:500;font-size:20px;color:#d6facf}#hestia-confirmation,#hestia-stripe-logo{z-index:1}#hestia-stripe-logo{width:50px;left:calc(50% - 25px);bottom:var(--form-spacing);fill:#dde3eb;will-change:opacity}#hestia-replay{display:none}@media (min-width:670px){#hestia-replay{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;border-radius:6px;background:-webkit-gradient(linear,left top,left bottom,from(#72cca8),color-stop(13%,#aee7c8),color-stop(38%,#f3f9f8),color-stop(63%,#fdfeff),color-stop(75%,#f3f4ff),to(#fff));background:linear-gradient(#72cca8,#aee7c8 13%,#f3f9f8 38%,#fdfeff 63%,#f3f4ff 75%,#fff);will-change:opacity;opacity:0;display:-webkit-box;display:-ms-flexbox;display:flex}}@supports (-webkit-backdrop-filter:blur(40px)){#hestia-replay{-webkit-backdrop-filter:blur(40px);backdrop-filter:blur(40px);background:hsla(0,0%,100%,.3)}}#hestia-replay button{text-align:center;color:#3ecf8e;font-weight:600;font-size:20px;text-transform:uppercase}#hestia-replay button:not(:disabled){cursor:pointer}#hestia-replay img{display:block;width:72px;margin:0 auto 25px;-webkit-transition:-webkit-transform .25s;transition:-webkit-transform .25s;transition:transform .25s;transition:transform .25s,-webkit-transform .25s}#hestia-replay button:active img{-webkit-transform:scale(.9);transform:scale(.9)}#onboarding-verification .content{padding:100px 0 80px}#onboarding-verification .common-UppercaseTitle{text-align:center}#onboarding-verification .common-UppercaseTitle img{margin-left:auto;margin-right:auto}#onboarding-verification .content button{padding-left:42px;margin-top:2em;color:#24b47e;background:#fff url(/img/v3/connect/features/view-onboarding-demo.svg) no-repeat 9px 50%;background-size:24px 24px}@media (min-width:670px){#onboarding-verification .content{display:grid;-ms-flex-line-pack:center;align-content:center;padding:0 0 100px}#onboarding-verification .common-UppercaseTitle{text-align:left}#onboarding-verification .common-UppercaseTitle img{margin-left:0}#onboarding-verification .content button{display:none;background:none}}@media (min-width:880px){#onboarding-verification .content{padding:0 0 180px}}#compliance{position:relative;z-index:1}#compliance .stripes{grid:200px/1fr minmax(0,1000px) 1fr;grid:200px/1fr minmax(0,calc(1040px - 20px * 2)) 1fr}#compliance .stripes :first-child{grid-column-end:span 2;background:-webkit-gradient(linear,left top,right top,color-stop(45%,#fff),to(#fafdfe));background:linear-gradient(100grad,#fff 45%,#fafdfe)}#compliance .stripes :last-child{background:-webkit-gradient(linear,left top,right top,from(#68d4f8),to(#5ac7f1));background:linear-gradient(100grad,#68d4f8,#5ac7f1)}#compliance .common-UppercaseTitle{padding-top:75px;text-align:center}#compliance .common-UppercaseTitle img{margin-left:auto;margin-right:auto}#compliance aside{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1;margin-top:30px;padding:22px 20px 18px;border-radius:4px;background:#f6f9fc}#compliance h2{margin-bottom:18px;color:#57c3f0;font-weight:600;text-transform:uppercase;font-size:15px}#compliance li{position:relative;padding-left:28px}#compliance li+li{margin-top:9px}#compliance li:before{content:url(/img/v3/connect/features/lawyer-friendly-checkmark.svg);position:absolute;top:3px;left:0;width:19px}#compliance .eu-guide{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;grid-column:span 2;padding:30px;margin-top:30px;overflow:hidden;-webkit-box-shadow:0 13px 27px -5px rgba(50,50,93,.25),0 8px 16px -8px rgba(0,0,0,.3),0 -6px 16px -6px rgba(0,0,0,.025);box-shadow:0 13px 27px -5px rgba(50,50,93,.25),0 8px 16px -8px rgba(0,0,0,.3),0 -6px 16px -6px rgba(0,0,0,.025)}#compliance .eu-guide svg{display:none;position:absolute;width:130px;height:130px;top:50%;margin-top:-65px;left:-35px}#compliance .eu-guide .copy{max-width:550px}#compliance .eu-guide .common-BodyText{margin-top:10px}#compliance .eu-guide .common-Button--default{margin-top:20px;background-color:#3ecf8e}#compliance .eu-guide .common-Button--default:active{color:#fff;background-color:#24b47e}@media (min-width:670px){#compliance .eu-guide{padding:40px 40px 40px 140px}#compliance .eu-guide svg{display:block}}@media (min-width:880px){#compliance .common-UppercaseTitle{padding-bottom:15px;padding-top:140px}#compliance .container-lg{display:grid;grid:auto/1fr 1fr;grid-gap:35px}#compliance aside{margin-top:1px}#compliance .eu-guide{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-top:0}#compliance .eu-guide .copy{margin-right:50px}#compliance .eu-guide .common-Button--default{margin-top:0}}#platform-management:before{content:"";display:block;height:2px;margin:50px 0;background:#f2f6fa}#platform-management .common-UppercaseTitle{text-align:center}#platform-management .common-UppercaseTitle img{margin-left:auto;margin-right:auto}@media (min-width:880px){#platform-management{display:grid;grid:auto/1fr auto;grid-gap:0 70px}#platform-management:before{grid-column-end:span 2;margin:80px 0}#platform-management .content{min-height:530px}#platform-management .common-UppercaseTitle{text-align:left}#platform-management .common-UppercaseTitle img{margin-left:0}}#platform-management .laptop{position:relative;width:584px;height:405px;top:30px;-webkit-transform:scale(.57);transform:scale(.57);-webkit-transform-origin:0 40px;transform-origin:0 40px;left:calc(50% - 166px)}#platform-management .laptop *{position:absolute}#platform-management .laptop .shadow{left:17px;right:17px;top:40px;height:490px;opacity:.3;background:#7692b3;-webkit-filter:blur(30px);filter:blur(30px)}@media (min-width:670px){#platform-management .laptop{margin-top:2em;-webkit-transform:none;transform:none;left:calc(50% - 292px)}}@media (min-width:880px){#platform-management .laptop{left:0;margin:0}#platform-management .laptop .shadow{will-change:transform}}#platform-management .laptop .lid{width:100%;height:100%;background:linear-gradient(45deg,#e5ebf2,#f3f8fb);border-radius:20px;-webkit-box-shadow:inset 1px -4px 6px rgba(145,161,181,.3);box-shadow:inset 1px -4px 6px rgba(145,161,181,.3)}#platform-management .laptop .camera{--size:4px;width:var(--size);height:var(--size);top:10px;left:50%;margin-left:-2px;border-radius:50%;background:#dae0e8}#platform-management .laptop .screen{top:24px;bottom:35px;left:17px;right:17px;border-radius:4px;-webkit-box-shadow:-1px 1px 6px rgba(171,183,204,.2);box-shadow:-1px 1px 6px rgba(171,183,204,.2);background:#f2f6fa}#platform-management .laptop .chassis{width:100%;height:142px;top:calc(100% - 11px);border-radius:8px 8px 14px 14px;-webkit-transform:perspective(880px) rotateX(40deg);transform:perspective(880px) rotateX(40deg);-webkit-transform-origin:50% 0;transform-origin:50% 0;background:linear-gradient(rgba(145,161,181,.2),rgba(145,161,181,0)),linear-gradient(45deg,#e5ebf2,#f3f8fb);-webkit-box-shadow:inset 0 -2px 3px rgba(145,161,181,.5),inset -1px -6px 4px rgba(253,255,255,.9);box-shadow:inset 0 -2px 3px rgba(145,161,181,.5),inset -1px -6px 4px rgba(253,255,255,.9)}#platform-management .laptop .chassis *{opacity:.3;background:linear-gradient(45deg,#b2bdcc,#c1ccd8);-webkit-box-shadow:1px 1px 1px hsla(0,0%,100%,.75);box-shadow:1px 1px 1px hsla(0,0%,100%,.75)}#platform-management .laptop .keyboard{left:28px;right:28px;top:8px;height:66px;border-radius:2px 2px 4px 4px}#platform-management .laptop .trackpad{left:165px;right:165px;top:76px;height:52px;border-radius:4px 4px 6px 6px}#dashboard-connected-accounts{display:-webkit-box;display:-ms-flexbox;display:flex;width:1020px;min-height:550px;left:calc(50% - 510px);-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:50% 0;transform-origin:50% 0;font-size:15px;background:url(/img/v3/connect/features/platform-management/dashboard-chrome.svg) no-repeat;background-size:100% 550px}#platform-management #dashboard-connected-accounts *{position:static}#dashboard-connected-accounts .active{font-weight:600;color:#6772e5}#connected-accounts-nav{-webkit-box-flex:0;-ms-flex:0 0 256px;flex:0 0 256px;padding-top:26px;color:#424770}#connected-accounts-nav h1{margin-left:42px;padding-bottom:3px;font-size:17px;font-weight:500}#connected-accounts-nav ul{margin:29px 0 0 32px}@media (min-width:880px){#connected-accounts-nav ul{margin-top:32px}}#connected-accounts-nav li+li{margin-top:15px}#connected-accounts-view{-webkit-box-flex:1;-ms-flex:1;flex:1;padding-top:77px}#connected-accounts-subnav{display:-webkit-box;display:-ms-flexbox;display:flex;padding-bottom:3px;color:#525f7f}#connected-accounts-subnav li+li{margin-left:25px}#connected-accounts-view section{margin-top:20px;border-radius:6px;background:#fff;-webkit-box-shadow:0 13px 27px -5px rgba(50,50,93,.25),0 8px 16px -8px rgba(0,0,0,.3),0 -6px 16px -6px rgba(0,0,0,.025);box-shadow:0 13px 27px -5px rgba(50,50,93,.25),0 8px 16px -8px rgba(0,0,0,.3),0 -6px 16px -6px rgba(0,0,0,.025);overflow:hidden;color:#8898aa}#connected-accounts-view section h2{padding:20px;border-bottom:2px solid #e6ebf1;text-transform:uppercase;font-size:1em;color:#424770}#connected-accounts-view section li{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:14px 20px}#connected-accounts-view section li:nth-child(2n){background:#f6f9fc}#connected-accounts-view section svg{width:16px}#connected-accounts-view section strong{margin:0 10px}#connected-accounts-view section .state-badge{margin-left:auto;line-height:22px;padding:0 8px;border-width:1px;border-style:solid;border-radius:12px;text-transform:uppercase;font-weight:600}#connected-accounts-upcoming strong{color:#f79a59}#connected-accounts-upcoming path:first-child{fill:#fdbc72}#connected-accounts-upcoming path:last-child{fill:#f79a59}#connected-accounts-upcoming .state-badge{color:#f79a59;border-color:#fdbc72}#connected-accounts-recent strong{color:#45b2e8}#connected-accounts-recent path:first-child{fill:#68d4f8}#connected-accounts-recent path:last-child{fill:#45b2e8}#connected-accounts-recent .state-badge{color:#45b2e8;border-color:#68d4f8}#international-support:before{content:"";display:block;height:2px;margin-bottom:50px;background:#f2f6fa}#international-support .common-UppercaseTitle{text-align:center}#international-support .common-UppercaseTitle img{margin-left:auto;margin-right:auto}@media (min-width:670px){#international-support{--gutter:30px;display:grid;grid-template-rows:120px auto;grid-template-columns:306px 1fr;grid-gap:0 var(--gutter);-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-top:140px}#international-support:before{grid-column-end:span 2;margin:0}#international-support .content{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}#international-support .common-UppercaseTitle{text-align:left}#international-support .common-UppercaseTitle img{margin-left:0}}@media (min-width:880px){#international-support{--gutter:41px;grid-template-rows:200px auto;margin-top:0}#international-support .common-BodyText{-webkit-columns:2;columns:2;-webkit-column-gap:var(--gutter);column-gap:var(--gutter)}}#international-support a{font-weight:500;color:#6772e5;-webkit-transition:color .2s;transition:color .2s}#international-support a svg{width:10px;margin-left:3px;fill:currentcolor;-webkit-transition:fill .1s;transition:fill .1s}#international-support a:hover{color:#45b2e8}#international-support aside{font-size:15px;color:#6b7c93;-webkit-box-shadow:0 13px 27px -5px rgba(50,50,93,.25),0 8px 16px -8px rgba(0,0,0,.3),0 -6px 16px -6px rgba(0,0,0,.025);box-shadow:0 13px 27px -5px rgba(50,50,93,.25),0 8px 16px -8px rgba(0,0,0,.3),0 -6px 16px -6px rgba(0,0,0,.025);border-radius:8px;margin-top:1.5em}@media (min-width:670px){#international-support aside{margin:0}}#international-support aside>*{padding:0 22px}#international-support aside h2{color:#57c3f0;font-weight:600;text-transform:uppercase;font-size:15px;padding-top:1.2em;padding-bottom:1.2em}#international-support aside h2:not(:first-child){margin-top:21px;border-top:2px solid #f1f6fa}#international-support aside ul{display:grid}#international-support .flag-list{grid-auto-columns:-webkit-min-content;grid-auto-columns:min-content;grid-auto-flow:column;margin-top:12px}#international-support .flag-list .common-FlagIcon:before{margin-right:5px}#international-support .flag-list :not(.common-FlagIcon){white-space:nowrap;padding-left:7px}#international-support .contact-us{margin-top:12px}#bank-networks{grid:auto/1fr 1fr;grid-gap:12px 0;margin-bottom:1.5em}#international-support #settlement-currencies{grid-template-columns:repeat(6,-webkit-min-content);grid-template-columns:repeat(6,min-content);padding-bottom:22px;font-weight:500;font-size:13px}#settlement-currencies li{padding:0 9px;border-right:1px solid #e4edf5}#settlement-currencies li:nth-child(6n){border:none;padding-right:0}#settlement-currencies li:nth-child(6n - 5){padding-left:0}#settlement-currencies li:nth-child(6)~li{padding-top:6px}#features-list{top:0;padding:40px;display:none}#features-list .container-lg{height:100%;padding:0;background:#fff;-webkit-box-shadow:0 20px 40px rgba(50,50,93,.2);box-shadow:0 20px 40px rgba(50,50,93,.2);border-radius:6px;overflow:auto;-webkit-transform:translateY(90vh) scale(.1);transform:translateY(90vh) scale(.1);will-change:transform;-webkit-transition:-webkit-transform .7s cubic-bezier(.19,1,.22,1.015);transition:-webkit-transform .7s cubic-bezier(.19,1,.22,1.015);transition:transform .7s cubic-bezier(.19,1,.22,1.015);transition:transform .7s cubic-bezier(.19,1,.22,1.015),-webkit-transform .7s cubic-bezier(.19,1,.22,1.015);-webkit-overflow-scrolling:touch}#features-list.active .container-lg{-webkit-transform:none;transform:none}#features-list h1{position:-webkit-sticky;position:sticky;top:0;margin-left:40px;padding-left:15px;line-height:40px;color:#025450;font-size:15px;font-weight:600;text-transform:uppercase;background:rgba(116,228,162,.95);border-radius:0 6px 0 6px}@supports ((-webkit-backdrop-filter:blur(6px)) or (backdrop-filter:blur(6px))){#features-list h1{-webkit-backdrop-filter:blur(6px);backdrop-filter:blur(6px);background:rgba(116,228,162,.8)}}#features-list section+section h1{border-radius:6px 0 0 6px}#features-list .common-UppercaseText{margin:0 40px;padding-top:35px;color:#45b2e8}#features-list li.common-BodyText{padding-left:25px;background:url(/img/v3/connect/features/feature-checkmark.svg) no-repeat 0 8px;background-size:11px 10px}#features-list .main-list+.common-UppercaseText{border-top:2px solid #f2f6fa}#features-list .main-list{display:grid;grid-gap:20px 40px;margin:25px 40px 35px}#features-list .sub-list{margin-top:.8em;font-size:15px}#features-list .sub-list li{padding:5px 0;border-top:1px solid #f6f9fc}@media (min-width:670px){#features-list .main-list{grid-template-columns:repeat(auto-fit,minmax(300px,1fr))}#features-list .sub-list{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}#features-list .sub-list li{-webkit-box-flex:50%;-ms-flex:50%;flex:50%;padding:2px 10px;border:none}#features-list .sub-list li:nth-child(4n+1),#features-list .sub-list li:nth-child(4n - 2){background:#f6f9fc}}#features-list .container-lg>p.common-BodyText{margin-left:40px;padding:2em 40px 2em 0;border-top:2px solid #f2f6fa}#code-examples{position:relative;overflow:hidden;margin-top:60px;background:linear-gradient(-12deg,#7795f8 50%,#6772e5 80%,#555abf)}#code-examples .stripes{z-index:0;grid:repeat(2,200px)/1fr repeat(4,minmax(0,250px)) 1fr;grid:repeat(2,200px)/1fr repeat(4,minmax(0,calc((1040px - 20px * 2) / 4))) 1fr;height:100%;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;margin-top:270px}#code-examples .stripes span{grid-column-end:-1}#code-examples .stripes :first-child{background:-webkit-gradient(linear,left top,right top,from(rgba(103,114,229,0)),color-stop(50%,rgba(103,114,229,.3)),to(#6772e5));background:linear-gradient(100grad,rgba(103,114,229,0),rgba(103,114,229,.3) 50%,#6772e5)}#code-examples .stripes :last-child{grid-column-start:span 2;background:-webkit-gradient(linear,left top,right top,from(rgba(143,239,251,0)),color-stop(50%,rgba(143,239,251,.3)),color-stop(75%,rgba(143,239,251,.55)),to(rgba(143,239,251,.9)));background:linear-gradient(100grad,rgba(143,239,251,0),rgba(143,239,251,.3) 50%,rgba(143,239,251,.55) 75%,rgba(143,239,251,.9))}#code-examples .container-lg{position:relative;padding-top:60px;padding-bottom:60px}#code-examples .header-group{padding:0 0 50px 90px}#code-examples .header-group img{position:absolute;width:72px;left:17px;left:calc(20px - 3px)}#code-examples .common-UppercaseTitle{padding-top:6px;margin-bottom:3px}#code-examples .common-UppercaseTitle,#code-examples a,#code-examples button{color:#fff}#code-examples h2{color:#8feffb}#code-examples a,#code-examples button,#code-examples h2{font-size:15px;font-weight:600;text-transform:uppercase}#code-examples nav{position:relative}#code-examples nav>*{display:block;line-height:40px;height:40px}#code-examples nav .selection{position:absolute;width:100%;border-radius:4px;background:#68d4f8;-webkit-box-shadow:0 6px 12px -2px rgba(50,50,93,.25),0 3px 7px -3px rgba(0,0,0,.3);box-shadow:0 6px 12px -2px rgba(50,50,93,.25),0 3px 7px -3px rgba(0,0,0,.3);will-change:transform;-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transition:-webkit-transform .3s cubic-bezier(.165,.84,.44,1);transition:-webkit-transform .3s cubic-bezier(.165,.84,.44,1);transition:transform .3s cubic-bezier(.165,.84,.44,1);transition:transform .3s cubic-bezier(.165,.84,.44,1),-webkit-transform .3s cubic-bezier(.165,.84,.44,1)}#code-examples nav button{position:relative;text-align:left;cursor:pointer;padding-left:10px}#code-examples nav a{margin:11px 11px 0;border-top:2px solid rgba(184,253,254,.15)}#code-examples nav img{position:relative;bottom:1px;width:18px;height:16px;vertical-align:middle;margin-right:4px;pointer-events:none}#editor{position:relative;margin-top:4em;border-radius:8px}#prism{background:#fff;-webkit-box-shadow:0 6px 12px -2px rgba(50,50,93,.25),0 3px 7px -3px rgba(0,0,0,.3);box-shadow:0 6px 12px -2px rgba(50,50,93,.25),0 3px 7px -3px rgba(0,0,0,.3);border-radius:4px;-webkit-transition:-webkit-box-shadow .15s ease-in-out .15s;transition:-webkit-box-shadow .15s ease-in-out .15s;transition:box-shadow .15s ease-in-out .15s;transition:box-shadow .15s ease-in-out .15s,-webkit-box-shadow .15s ease-in-out .15s}#editor.runkit #prism{-webkit-box-shadow:none;box-shadow:none}#runkit{position:absolute;top:0;left:0;right:0;margin:-2px -5px -6px}#runkit iframe{position:fixed;opacity:0;-webkit-transition:opacity .15s ease-in-out;transition:opacity .15s ease-in-out;-webkit-transition-delay:.15s;transition-delay:.15s}#editor.runkit #runkit iframe{position:inherit;opacity:1}#editor pre{display:none}#editor pre.active{display:-webkit-box;display:-ms-flexbox;display:flex}#editor pre>*{padding:12px;font-size:13px;line-height:1.5}#editor .custom-line-numbers{text-align:right;background:#f2feef;color:#5dc79e;border-radius:4px 0 0 4px}#editor code{display:block;overflow:auto;-webkit-overflow-scrolling:touch}#runkit-warning{height:0}#runkit-warning.visible{height:auto}#runkit-warning p{opacity:0;max-width:inherit;margin:20px 0;padding:4px 9px;line-height:22px;color:#fa755a;text-align:left;font-size:13px;font-weight:500;-webkit-transition:opacity .3s ease-in-out;transition:opacity .3s ease-in-out;background:#fff;border-radius:4px;-webkit-box-shadow:0 2px 4px rgba(50,50,93,.1);box-shadow:0 2px 4px rgba(50,50,93,.1)}#runkit-warning p:empty{margin:0;padding:0}#runkit-warning.visible p{opacity:1}#runkit-warning a{color:#fa755a;font-size:13px;text-decoration:underline;text-transform:none}@media (min-width:670px){#code-examples{margin-top:100px}#code-examples .container-lg{padding-top:100px}#code-examples nav{width:306px;right:20px;position:absolute}#editor{min-height:399px;margin:0 347px 0 0}#code-examples p.warning{margin-right:347px}}main footer.container-lg{--spacing:5em;margin-top:var(--spacing);margin-bottom:var(--spacing)}main footer.container-lg .common-UppercaseText{margin:2.2em 0 1em;color:#24b47e}main footer.container-lg .common-Link{margin-top:1em}@media (min-width:670px){main footer.container-lg{display:grid;grid:repeat(3,auto)/auto-flow 1fr;grid-gap:0 40px}main footer.container-lg .common-UppercaseText{margin-top:0}}@media (min-width:880px){main footer.container-lg{--spacing:100px}}pre .highlighted-line{background:rgba(99,115,131,.08)}code .token{padding:0;margin:0}code .token:not(.script){font-weight:400}code .token.property{font-weight:500}.language-php .token.operator,code .token.atrule,code .token.keyword{color:#6772e5}code.language-markup .token.namespace,code .token.attr-name,code .token.selector,code .token.tag,code .token.tag *{color:#0075d6}.language-php .token.operator,code .token.atrule,code .token.keyword,code .token.tag{font-weight:600}code .token.attr-name{font-style:italic}code .token.comment{font-weight:400;color:#91a2b0}code.language-url,code .token.function,code .token.url{font-weight:600;color:#3297d3}.language-ruby .token.constant+.token.punctuation,.language-ruby .token.constant+.token.punctuation+.token.symbol,code .token.boolean,code .token.builtin,code .token.class-name,code .token.constant,code .token.namespace{font-weight:600;color:#2191ef}code .token.number{color:#fa755a}code .token.header{font-weight:700}.language-bash .token.function,code .token.curl,code .token.option,code .token.variable{color:teal;font-weight:600}.language-bash .token.function,code .token.curl,code .token.option{font-weight:500}.language-bash .token.option,code.language-css .property,code .token.parameter,code .token.symbol{font-weight:500;color:#d14}code.language-html .token.attr-value>.punctuation:not(:first-child),code.language-markup .token.attr-value>.punctuation:not(:first-child),code .token.attr-value,code .token.macro,code .token.string,code .token.stripe,code .token.value{font-weight:400;color:#159570}code .token.macro .keyword{color:#064508}code .token.publishable-key,code .token.secret-key,code .token.token-tooltip{background:#eceff1;border-radius:3px;padding:2px;margin:-2px}code .token.publishable-key.enabled,code .token.secret-key.enabled,code .token.token-tooltip.enabled{background:#dfe3e6}pre{position:relative;color:#424770}pre .line-numbers{position:absolute;pointer-events:none;top:11px;left:29px;width:16px;counter-reset:linenumber;line-height:19px;font-family:Source Code Pro,monospace}pre .line-numbers>span{pointer-events:none;display:block;counter-increment:linenumber}pre .line-numbers>span:before{content:counter(linenumber);color:#bec5ca;display:block;font-size:13px;text-align:right;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}pre .line-numbers>span.highlighted:before{color:#858c90;font-weight:500}pre.language-bash .line-numbers>span:before,pre.language-curl .line-numbers>span:before{content:">"}pre.language-bash .line-numbers>span:first-child:before,pre.language-curl .line-numbers>span:first-child:before{content:"$"}

/*# sourceMappingURL=index-cf4e579ec72ea541d524.min.css.map*/
</style>


  <script src="./Stripe Connect_ Payments platform for marketplaces &amp; platforms_files/index-lazy-cf4e579ec72ea541d524.min.js.download"></script></head>

  <body>

    

   

    <div class="globalContent">
      
<main>
  <header>
    <div class="stripes">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <template id="cube-template"></template>

    <div id="header-hero">
      <span class="hero-illustration">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 162"><defs><lineargradient id="header-illustration3-a" x1="0%" y1="100%" y2="0%"><stop stop-color="#B4F3B6" offset="0%"></stop><stop stop-color="#B4F3B6" offset="30%"></stop><stop stop-color="#8AE5E4" offset="70%"></stop><stop stop-color="#85E3E9" offset="100%"></stop></lineargradient><lineargradient id="header-illustration3-b" x1="0%" y1="0%" y2="100%"><stop stop-color="#ADEAE5" offset="0%"></stop><stop stop-color="#84E1D9" offset="50%"></stop><stop stop-color="#DCF1ED" offset="100%"></stop></lineargradient><lineargradient id="header-illustration3-c" x1="50%" x2="50%" y1="0%" y2="100%"><stop stop-color="#90CCDD" offset="0%"></stop><stop stop-color="#3196C4" offset="100%"></stop></lineargradient><lineargradient id="header-illustration3-d" x1="50%" x2="50%" y1="0%" y2="100%"><stop stop-color="#B5E8E9" offset="0%"></stop><stop stop-color="#9EE5E9" offset="80%"></stop><stop stop-color="#DCF1ED" offset="100%"></stop></lineargradient><lineargradient id="header-illustration3-e" x1="0%" y1="0%" y2="0%"><stop stop-color="#239ADD" offset="0%"></stop><stop stop-color="#54C3E4" offset="100%"></stop></lineargradient></defs><g fill="none" fill-rule="evenodd"><rect width="288" height="162" fill="url(#header-illustration3-a)" rx="4"></rect><path fill="#009B8B" d="M134.48 56.86A2 2 0 0 1 136 56h11v61H99c-.55 0-.76-.39-.48-.86l35.96-59.28z" opacity=".15"></path><polygon fill="url(#header-illustration3-b)" points="151 45 190 108 112 108"></polygon><polygon fill="url(#header-illustration3-c)" points="151 45 112 108 117 108 151 53.077"></polygon><polygon fill="url(#header-illustration3-d)" points="190 108 151 45 151 53.077 185 108"></polygon><rect width="78" height="9" x="112" y="108" fill="url(#header-illustration3-e)" rx="1"></rect></g></svg>

      </span>
      <span class="hero-illustration">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 162"><defs><lineargradient id="header-illustration2-a" x1="0%" y1="100%" y2="0%"><stop stop-color="#57C6E4" offset="0%"></stop><stop stop-color="#EAD6F7" offset="100%"></stop></lineargradient><lineargradient id="header-illustration2-b" x1="100%" x2="0%" y1="0%" y2="100%"><stop stop-color="#E7B8EB" offset="0%"></stop><stop stop-color="#C670CC" offset="100%"></stop></lineargradient><lineargradient id="header-illustration2-c" x1="0%" y1="0%" y2="100%"><stop stop-color="#9BEFA0" offset="0%"></stop><stop stop-color="#C1F2C1" offset="50%"></stop><stop stop-color="#DCF5D8" offset="70%"></stop><stop stop-color="#DFF5D9" offset="100%"></stop></lineargradient><lineargradient id="header-illustration2-d" x1="50%" x2="50%" y1=".83%" y2="100%"><stop stop-color="#E9A3E5" offset="0%"></stop><stop stop-color="#C472C0" offset="20%"></stop><stop stop-color="#8D278E" offset="100%"></stop></lineargradient><lineargradient id="header-illustration2-e" x1="50%" x2="50%" y1=".35%" y2="100%"><stop stop-color="#3BBE56" offset="0%"></stop><stop stop-color="#41C15D" offset="30%"></stop><stop stop-color="#C5EBC9" offset="70%"></stop><stop stop-color="#C8ECC8" offset="100%"></stop></lineargradient><lineargradient id="header-illustration2-f" x1="100%" x2="0%" y1="50%" y2="50%"><stop stop-color="#C4F7CA" offset="0%"></stop><stop stop-color="#85EA95" offset="100%"></stop></lineargradient><lineargradient id="header-illustration2-g" x1="100%" x2="0%" y1="50%" y2="50%"><stop stop-color="#E9B9E1" offset="0%"></stop><stop stop-color="#D171CD" offset="100%"></stop></lineargradient><lineargradient id="header-illustration2-h" x1="100%" x2="0%" y1="0%" y2="100%"><stop stop-color="#FFFFFF" offset="0%"></stop><stop stop-color="#FAF7EF" offset="40%"></stop><stop stop-color="#DEECED" offset="60%"></stop><stop stop-color="#ACD9E6" offset="100%"></stop></lineargradient><lineargradient id="header-illustration2-i" x1="50%" x2="50%" y1="0%" y2="100%"><stop stop-color="#3A2B52" offset="0%"></stop><stop stop-color="#4C356D" offset="20%"></stop><stop stop-color="#53347A" offset="100%"></stop></lineargradient><lineargradient id="header-illustration2-j" x1="50%" x2="50%" y1="0%" y2="100%"><stop stop-color="#4C3366" offset="0%"></stop><stop stop-color="#53366F" offset="10%"></stop><stop stop-color="#8551A0" offset="20%"></stop><stop stop-color="#7C479C" offset="60%"></stop><stop stop-color="#C67FDE" offset="80%"></stop><stop stop-color="#AC5FCC" offset="100%"></stop></lineargradient></defs><g fill="none" fill-rule="evenodd"><rect width="288" height="162" fill="url(#header-illustration2-a)" rx="4"></rect><polygon fill="#2699CD" fill-opacity=".3" points="119 51.545 74 80 87 80 87 115 119 115"></polygon><polygon fill="url(#header-illustration2-b)" points="142 77 82 77 82 73.182 142 35"></polygon><polygon fill="url(#header-illustration2-c)" points="142 35 202 73.182 202 77 142 77"></polygon><polygon fill="url(#header-illustration2-d)" points="82 77 84.462 77 142 40.385 142 35 82 73.182"></polygon><path fill="url(#header-illustration2-e)" d="M202 77h-2.46L142 40.38V35l60 38.18V77z"></path><rect width="32" height="42" x="95" y="73" fill="url(#header-illustration2-f)"></rect><rect width="62" height="42" x="127" y="73" fill="url(#header-illustration2-g)"></rect><rect width="13" height="4" x="82" y="73" fill="#411A5F" fill-opacity=".5"></rect><rect width="13" height="4" x="189" y="73" fill="#2BB752" fill-opacity=".5"></rect><rect width="94" height="4" x="95" y="111" fill="#43458B" fill-opacity=".15"></rect><rect width="94" height="4" x="95" y="73" fill="#43458B" fill-opacity=".15"></rect><path fill="#8CABE3" fill-opacity=".5" d="M219.13 80L241 115h4V80h-25.88z"></path><circle cx="242" cy="74" r="9" fill="#8CABE3" fill-opacity=".5"></circle><path fill="#F9D2EE" d="M223 79.8l22 35.2 22-35.2V75h-44v4.8z"></path><circle cx="245" cy="71" r="9" fill="url(#header-illustration2-h)"></circle><rect width="44" height="5" x="223" y="75" fill="#D88CD9" opacity=".5"></rect><path fill="url(#header-illustration2-i)" d="M223 79.8l22 35.2v-6.4L224 75h-1v4.8z"></path><path fill="url(#header-illustration2-j)" d="M267 75h-1l-21 33.6v6.4l22-35.2V75z"></path></g></svg>

      </span>
      <span class="hero-illustration">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 162"><defs><lineargradient id="header-illustration1-a" x1="0%" y1="100%" y2="0%"><stop stop-color="#FFD77F" offset="0%"></stop><stop stop-color="#FFF3A3" offset="100%"></stop></lineargradient><lineargradient id="header-illustration1-b" x1="50%" x2="50%" y1="0%" y2="100%"><stop stop-color="#FF985C" offset="0%"></stop><stop stop-color="#FFBB7F" offset="100%"></stop></lineargradient><lineargradient id="header-illustration1-c" x1="50%" x2="50%" y1="0%" y2="100%"><stop stop-color="#FF956B" offset="0%"></stop><stop stop-color="#FF6542" offset="100%"></stop></lineargradient><lineargradient id="header-illustration1-d" x1="50%" x2="50%" y1="0%" y2="100%"><stop stop-color="#FFFFFF" offset="0%"></stop><stop stop-color="#FFFFFF" offset="30%"></stop><stop stop-color="#F9F6EF" offset="100%"></stop></lineargradient></defs><g fill="none" fill-rule="evenodd"><rect width="288" height="162" fill="url(#header-illustration1-a)" rx="4"></rect><path fill="url(#header-illustration1-b)" fill-rule="nonzero" d="M3 122.4c4.34-3.45 8.72-7.18 13.12-11.18l26.78 29.75a296.2 296.2 0 0 1-15.26 12.96L3 122.4zm-3 2.65l24.49 31.34a243.3 243.3 0 0 1-7.62 5.61H3.99A4 4 0 0 1 0 158v-32.95zM123.66 0l17.1 9.1a297.56 297.56 0 0 1-8.61 17.14L97.17 6.85c1.25-2.32 2.45-4.6 3.58-6.85h22.9zm8.52 0h12.53c-.73 1.78-1.5 3.6-2.3 5.44L132.17 0zM95.25 10.36l34.97 19.39a404.04 404.04 0 0 1-10.2 17.3L86.1 25.84a364.78 364.78 0 0 0 9.15-15.5zM83.97 29.23l33.92 21.2a471.95 471.95 0 0 1-10.68 16.06L74.44 43.54c3.33-4.8 6.51-9.58 9.53-14.3zM72.15 46.82l32.77 22.94A494.14 494.14 0 0 1 93.25 85.6L61.3 61.52c3.74-4.86 7.37-9.78 10.85-14.7zm-13.3 17.86L90.8 88.76a480.63 480.63 0 0 1-11.75 14.45L48.41 77.5a434.33 434.33 0 0 0 10.44-12.82zM45.8 80.54l30.65 25.72a434.9 434.9 0 0 1-13.61 15.1l-28.79-27.8c3.93-4.15 7.85-8.5 11.75-13.02zm-14.5 15.92l28.78 27.8c-4.73 4.9-9.48 9.57-14.25 14l-26.78-29.75c4.07-3.8 8.16-7.82 12.24-12.05z"></path><path fill="url(#header-illustration1-c)" fill-rule="nonzero" d="M256.87 6.15l19.49 4.5a80 80 0 0 1-3.06 10.43l-18.56-7.5a60.17 60.17 0 0 0 2.13-7.43zm.39-1.96c.25-1.4.45-2.8.6-4.19h20.1a78.46 78.46 0 0 1-1.2 8.69l-19.5-4.5zm-3.22 11.27l18.54 7.49a82.72 82.72 0 0 1-4.37 9.28l-17.65-9.38c1.34-2.44 2.5-4.9 3.48-7.4zm-4.48 9.12l17.67 9.4a90.24 90.24 0 0 1-5.43 8.26l-16.36-11.46c1.51-2.04 2.89-4.1 4.12-6.2zm-5.34 7.8l16.38 11.46c-2.14 2.78-4.47 5.5-7 8.17l-14.37-13.87c1.8-1.9 3.46-3.82 4.99-5.77zm-6.38 7.2l14.36 13.87c-2.27 2.3-4.69 4.55-7.26 6.76l-13.36-14.83a99.28 99.28 0 0 0 6.26-5.8zm-7.8 7.08l13.37 14.84a140.4 140.4 0 0 1-7.76 6l-12.02-15.94a120.6 120.6 0 0 0 6.41-4.9zM222 52.7l12.03 15.96c-2.58 1.8-5.28 3.58-8.1 5.31l-10.59-16.94c2.32-1.42 4.54-2.87 6.66-4.33zm-8.37 5.36l10.59 16.95a191.8 191.8 0 0 1-8.5 4.82l-9.4-17.66c2.54-1.35 4.98-2.72 7.3-4.1zm-9.07 5.04l9.39 17.66c-2.68 1.4-5.44 2.76-8.3 4.1l-9.08-17.83.21-.1a207 207 0 0 0 7.78-3.83zm-9.8 4.78l9.08 17.83a303.83 303.83 0 0 0-7.76 3.8l-9.4-17.66c2.63-1.34 5.32-2.66 8.08-3.97zm-9.85 4.88l9.39 17.66a267.08 267.08 0 0 0-7.76 4.17l-10.3-17.15c2.8-1.58 5.7-3.14 8.67-4.68zm-10.41 5.67l10.3 17.14c-2.5 1.43-4.92 2.86-7.26 4.31l-11.19-16.58c2.64-1.65 5.35-3.27 8.15-4.87zm-9.84 5.93l11.18 16.58c-2.44 1.54-4.8 3.1-7.08 4.68l-12.04-15.98c2.56-1.78 5.2-3.54 7.94-5.28zm-9.57 6.43l12.03 15.97a176.52 176.52 0 0 0-6.67 4.96l-12.86-15.32c2.4-1.9 4.9-3.76 7.5-5.6zM146 97.66l12.86 15.31a152.9 152.9 0 0 0-6.34 5.35l-13.9-14.39c2.36-2.12 4.82-4.21 7.38-6.27zm-8.85 7.62l13.89 14.39a132.6 132.6 0 0 0-5.88 5.74l-14.87-13.39c2.17-2.27 4.46-4.52 6.86-6.74zm-8.23 8.2l14.86 13.38a115.26 115.26 0 0 0-5.71 6.62l-15.76-12.31c2.07-2.6 4.27-5.16 6.61-7.69zm-7.85 9.26l15.76 12.31a101.65 101.65 0 0 0-4.66 6.59l-16.58-11.19c1.7-2.6 3.53-5.17 5.48-7.71zm-6.56 9.4l16.59 11.19a92.7 92.7 0 0 0-4.03 7.18l-17.34-10.01a112.13 112.13 0 0 1 4.78-8.36zm-5.68 10.15l17.36 10.02a85.5 85.5 0 0 0-3.21 7.71l-18.2-8.48c1.19-3.1 2.53-6.19 4.05-9.25zm-4.74 11.13l18.23 8.5-.02.08h-20.87c.76-2.88 1.64-5.74 2.66-8.58z"></path><path fill="url(#header-illustration1-c)" d="M176.42 162h-9.58a102.5 102.5 0 0 1 5.18-5.43l4.4 5.43zm13.75 0h-11.18l-5.52-6.82c2.42-2.27 4.98-4.45 7.68-6.54l9.02 13.36zm6.54 0h-4.13l-9.83-14.58a112.12 112.12 0 0 1 7.96-5.42l10 17.33c-1.36.87-2.7 1.76-4 2.67zM288 139.41c-1.8 0-3.56.01-5.31.04l-.7-19.99c1.98-.03 3.98-.05 6.01-.05v20zm-8.01-19.9l.7 19.98c-3 .07-5.93.18-8.8.35l-1.74-19.93c3.21-.2 6.5-.33 9.84-.4zm-11.84.52l1.74 19.93c-2.86.18-5.67.4-8.41.69l-2.79-19.82c3.1-.32 6.24-.59 9.46-.8zm-11.44 1.02l2.78 19.8c-2.87.32-5.68.69-8.41 1.1l-3.82-19.63c3.08-.48 6.23-.9 9.45-1.27zm-11.43 1.59l3.82 19.62c-2.8.46-5.52.97-8.17 1.53l-4.84-19.4c3-.65 6.06-1.23 9.2-1.75zm-11.15 2.18l4.84 19.4c-2.76.62-5.44 1.3-8.04 2.03l-6.18-19.02c3.04-.88 6.17-1.68 9.38-2.41zm-11.3 2.97l6.18 19.02c-2.69.8-5.29 1.66-7.8 2.58l-7.5-18.54c2.95-1.1 6-2.12 9.12-3.06zm-10.99 3.76l7.5 18.54a115.26 115.26 0 0 0-8.04 3.45l-8.77-17.98c3-1.43 6.1-2.76 9.31-4zm-11.11 4.89l8.77 17.97a101.65 101.65 0 0 0-7.08 3.88l-10-17.33c2.67-1.59 5.44-3.1 8.31-4.52z"></path><path fill="#003400" d="M77.57 38.97L102 56v6.83L74.44 43.54c1.06-1.52 2.1-3.05 3.13-4.57zM102 67.72v6.13l-.07.1L69.1 51.07c1.03-1.42 2.05-2.83 3.05-4.25L102 67.72z"></path><circle cx="97" cy="46" r="9" fill="#FF7F43"></circle><circle cx="96" cy="43" r="9" fill="url(#header-illustration1-d)"></circle><polygon fill="#41C344" points="69 33 102 56 102 74 69 51" opacity=".8"></polygon><polygon fill="#95EF9A" points="102 72.294 103 73 103 55 69 31 69 33 102 56"></polygon><polygon fill="#C1004C" points="247 21 264 31 264 39 247 29" opacity=".6"></polygon><path fill="#FFFFFF" d="M252.03 25.96a5 5 0 1 0 8.56 5.03l-8.56-5.03zm1.34-1.21a5 5 0 0 1 7.62 4.49l-7.62-4.5z"></path></g></svg>

      </span>
        
    <div class="cubes">
      <div class="cube" style="width: 15px; height: 15px; left: 35px; top: 465px;">
        <div class="shadow" style="filter: blur(9px); opacity: 0.125;"></div>
        <div class="sides">
          <div class="back" style="transform: rotateX(-37.0037deg) rotateY(-441.92deg) translateZ(7.5px); background-color: rgb(137, 240, 182);"></div>
          <div class="top" style="transform: rotateX(52.9963deg) rotateZ(261.92deg) translateZ(7.5px); background-color: rgb(175, 249, 194);"></div>
          <div class="left" style="transform: rotateX(-37.0037deg) rotateY(-351.92deg) translateZ(7.5px); background-color: rgb(179, 249, 195);"></div>
          <div class="front" hidden="" style="transform: rotateX(-12.7122deg) rotateY(-89.9795deg) translateZ(7.5px); background-color: rgb(147, 242, 185);"></div>
          <div class="right" hidden="" style="transform: rotateX(-25.4243deg) rotateY(-89.959deg) translateZ(7.5px); background-color: rgb(139, 241, 182);"></div>
          <div class="bottom" hidden=""></div>
        </div>
      </div>
    
      <div class="cube" style="width: 25px; height: 25px; left: 55px; top: 415px;">
        <div class="shadow" style="filter: blur(15px); opacity: 0.208333;"></div>
        <div class="sides">
          <div class="back" style="transform: rotateX(-91.3267deg) rotateY(-485.414deg) translateZ(12.5px); background-color: rgb(217, 229, 240);"></div>
          <div class="top" style="transform: rotateX(-1.32668deg) rotateZ(305.414deg) translateZ(12.5px); background-color: rgb(255, 255, 255);"></div>
          <div class="left" style="transform: rotateX(-91.3267deg) rotateY(-395.414deg) translateZ(12.5px); background-color: rgb(193, 213, 231);"></div>
          <div class="front" style="transform: rotateX(-91.3267deg) rotateY(-305.414deg) translateZ(12.5px); background-color: rgb(199, 216, 233);"></div>
          <div class="right" style="transform: rotateX(-91.3267deg) rotateY(-215.414deg) translateZ(12.5px); background-color: rgb(222, 233, 242);"></div>
          <div class="bottom" hidden=""></div>
        </div>
      </div>
    
      <div class="cube" style="width: 120px; height: 120px; left: 140px; top: 400px;">
        <div class="shadow" style="filter: blur(72px); opacity: 0.4;"></div>
        <div class="sides">
          <div class="back" style="transform: rotateX(-89.9407deg) rotateY(-37.0717deg) translateZ(60px); background-color: rgb(221, 232, 242);" hidden=""></div>
          <div class="top" style="transform: rotateX(-11.507deg) rotateZ(-161.309deg) translateZ(60px); background-color: rgb(252, 253, 254);"></div>
          <div class="left" hidden="" style="transform: rotateX(-89.9407deg) rotateY(52.9283deg) translateZ(60px); background-color: rgb(217, 229, 240);"></div>
          <div class="front" style="transform: rotateX(-101.507deg) rotateY(161.309deg) translateZ(60px); background-color: rgb(229, 237, 245);"></div>
          <div class="right" style="transform: rotateX(-101.507deg) rotateY(251.309deg) translateZ(60px); background-color: rgb(215, 228, 240);"></div>
          <div class="bottom" hidden=""></div>
        </div>
      </div>
    
      <div class="cube" style="width: 40px; height: 40px; left: 420px; top: 155px;">
        <div class="shadow" style="filter: blur(24px); opacity: 0.333333;"></div>
        <div class="sides">
          <div class="back" style="transform: rotateX(-34.373deg) rotateY(-447.949deg) translateZ(20px); background-color: rgb(223, 233, 242);"></div>
          <div class="top" style="transform: rotateX(55.627deg) rotateZ(267.949deg) translateZ(20px); background-color: rgb(240, 245, 249);"></div>
          <div class="left" style="transform: rotateX(-34.373deg) rotateY(-357.949deg) translateZ(20px); background-color: rgb(245, 248, 251);"></div>
          <div class="front" hidden="" style="transform: rotateX(-11.5161deg) rotateY(-89.772deg) translateZ(20px); background-color: rgb(228, 237, 245);"></div>
          <div class="right" hidden="" style="transform: rotateX(-23.0907deg) rotateY(-89.9997deg) translateZ(20px); background-color: rgb(225, 235, 243);"></div>
          <div class="bottom" hidden=""></div>
        </div>
      </div>
    
      <div class="cube" style="width: 15px; height: 15px; left: 440px; top: 280px;">
        <div class="shadow" style="filter: blur(9px); opacity: 0.125;"></div>
        <div class="sides">
          <div class="back" style="transform: rotateX(290.242deg) rotateY(-337.646deg) translateZ(7.5px); background-color: rgb(153, 244, 187);"></div>
          <div class="top" style="transform: rotateX(380.242deg) rotateZ(157.646deg) translateZ(7.5px); background-color: rgb(193, 253, 200);"></div>
          <div class="left" style="transform: rotateX(269.51deg) rotateY(-236.386deg) translateZ(7.5px); background-color: rgb(122, 237, 176);" hidden=""></div>
          <div class="front" style="transform: rotateX(269.51deg) rotateY(-146.386deg) translateZ(7.5px); background-color: rgb(135, 240, 181);" hidden=""></div>
          <div class="right" style="transform: rotateX(290.242deg) rotateY(-67.6461deg) translateZ(7.5px); background-color: rgb(127, 238, 178);"></div>
          <div class="bottom" hidden="" style="transform: rotateX(89.6736deg) rotateZ(-97.5905deg) translateZ(7.5px); background-color: rgb(154, 244, 187);"></div>
        </div>
      </div>
    
      <div class="cube" style="width: 25px; height: 25px; left: 480px; top: 228px;">
        <div class="shadow" style="filter: blur(15px); opacity: 0.208333;"></div>
        <div class="sides">
          <div class="back" style="transform: rotateX(-319.541deg) rotateY(36.7486deg) translateZ(12.5px); background-color: rgb(255, 222, 191);"></div>
          <div class="top" hidden="" style="transform: rotateX(-89.8774deg) rotateZ(-122.013deg) translateZ(12.5px); background-color: rgb(255, 218, 185);"></div>
          <div class="left" style="transform: rotateX(-269.544deg) rotateY(92.8355deg) translateZ(12.5px); background-color: rgb(255, 186, 142);" hidden=""></div>
          <div class="front" style="transform: rotateX(-269.544deg) rotateY(182.836deg) translateZ(12.5px); background-color: rgb(255, 217, 184);" hidden=""></div>
          <div class="right" style="transform: rotateX(-319.541deg) rotateY(306.749deg) translateZ(12.5px); background-color: rgb(255, 216, 183);"></div>
          <div class="bottom" style="transform: rotateX(-409.541deg) rotateZ(216.749deg) translateZ(12.5px); background-color: rgb(255, 232, 205);"></div>
        </div>
      </div>
    
      <div class="cube" style="width: 100px; height: 100px; left: 580px; top: 255px;">
        <div class="shadow" style="filter: blur(60px); opacity: 0.4;"></div>
        <div class="sides">
          <div class="back" hidden=""></div>
          <div class="top" hidden=""></div>
          <div class="left" style="transform: rotateX(84.3635deg) rotateY(-88.6725deg) translateZ(50px); background-color: rgb(209, 224, 237);"></div>
          <div class="front" style="transform: rotateX(84.3635deg) rotateY(1.32753deg) translateZ(50px); background-color: rgb(232, 240, 246);"></div>
          <div class="right" hidden=""></div>
          <div class="bottom" style="transform: rotateX(-5.63646deg) rotateZ(1.32753deg) translateZ(50px); background-color: rgb(254, 254, 254);"></div>
        </div>
      </div>
    
      <div class="cube" style="width: 25px; height: 25px; left: 780px; top: 320px;">
        <div class="shadow" style="filter: blur(15px); opacity: 0.208333;"></div>
        <div class="sides">
          <div class="back" style="transform: rotateX(-12.4507deg) rotateY(-2.64663deg) translateZ(12.5px); background-color: rgb(196, 253, 201);"></div>
          <div class="top" style="transform: rotateX(77.5493deg) rotateZ(-177.353deg) translateZ(12.5px); background-color: rgb(161, 246, 189);"></div>
          <div class="left" style="transform: rotateX(-12.4507deg) rotateY(87.3534deg) translateZ(12.5px); background-color: rgb(148, 243, 185);"></div>
          <div class="front" hidden="" style="transform: rotateX(-6.31005deg) rotateY(89.8832deg) translateZ(12.5px); background-color: rgb(150, 243, 186);"></div>
          <div class="right" hidden=""></div>
          <div class="bottom" hidden=""></div>
        </div>
      </div>
    
      <div class="cube" style="width: 120px; height: 120px; left: 780px; top: 120px;">
        <div class="shadow" style="filter: blur(72px); opacity: 0.4;"></div>
        <div class="sides">
          <div class="back" hidden=""></div>
          <div class="top" style="transform: rotateX(74.2928deg) rotateZ(57.3036deg) translateZ(60px); background-color: rgb(235, 242, 247);"></div>
          <div class="left" hidden=""></div>
          <div class="front" style="transform: rotateX(-15.7072deg) rotateY(-57.3036deg) translateZ(60px); background-color: rgb(236, 242, 247);"></div>
          <div class="right" style="transform: rotateX(-15.7072deg) rotateY(32.6964deg) translateZ(60px); background-color: rgb(242, 246, 250);"></div>
          <div class="bottom" hidden=""></div>
        </div>
      </div>
    
      <div class="cube" style="width: 100px; height: 100px; left: 900px; top: 310px;">
        <div class="shadow" style="filter: blur(60px); opacity: 0.4;"></div>
        <div class="sides">
          <div class="back" style="transform: rotateX(108.695deg) rotateY(-104.349deg) translateZ(50px); background-color: rgb(255, 197, 157);"></div>
          <div class="top" hidden=""></div>
          <div class="left" hidden="" style="transform: rotateX(89.8396deg) rotateY(-27.4718deg) translateZ(50px); background-color: rgb(255, 208, 171);"></div>
          <div class="front" hidden="" style="transform: rotateX(89.8396deg) rotateY(62.5282deg) translateZ(50px); background-color: rgb(255, 195, 154);"></div>
          <div class="right" style="transform: rotateX(108.695deg) rotateY(165.651deg) translateZ(50px); background-color: rgb(255, 219, 187);"></div>
          <div class="bottom" style="transform: rotateX(18.6949deg) rotateZ(75.6514deg) translateZ(50px); background-color: rgb(255, 243, 221);"></div>
        </div>
      </div>
    
      <div class="cube" style="width: 40px; height: 40px; left: 1030px; top: 200px;">
        <div class="shadow" style="filter: blur(24px); opacity: 0.333333;"></div>
        <div class="sides">
          <div class="back"></div>
          <div class="top"></div>
          <div class="left"></div>
          <div class="front"></div>
          <div class="right"></div>
          <div class="bottom"></div>
        </div>
      </div>
    </div></div>


    <section id="intro" class="container">
      <h1 class="common-SectionTitle">The login system for the books</h1>
      <p class="common-BodyText">
        NL Softworks has been working on creating a safe secure and smooth login system for the people. This will allow developers who have an idea to get a jump start and skip
        all the setup and worry with creating a php login with all the features that are standard now.
      </p>
    
    </section>
  </header>

 
<div class="container">

<img class="img-fluid" src="https://www.taskade.com/images/landing-main.png">


</div>
  

<div class="row align-items-center" style="background-color: #efefef; padding: 50px 0;">
<div class="container">
<div class="row align-items-center">
    <div class="col-md-6 col-sm-12">
    <h3>Inbox</h3>
      <p>You will have an inbox with all your news and latest updates from the day and ongoing issues</p>
    </div>
 
    <div class="col-md-6 col-sm-12">
    <img class="img-fluid" src="https://storage.googleapis.com/spec-host-backup/mio-design%2Fassets%2F0B6xUSjjSulxcdnAxWFVoRWxJSVE%2Fshapemeaning-do-reply-1.png">
    </div>
    </div>
    </div>
  </div>


  <div class="container">

<div class="row align-items-center" style="padding: 50px 10px;">
    <div class="col-md-4 col-sm-12">
    <video width="100%" height="" autoplay loop>
  <source src="https://storage.googleapis.com/spec-host-backup/mio-design%2Fassets%2F15mus9LljNRSo2ZVit08Mayol35-_PZ22%2Fplacement-snackbar-dont.mp4
" type="video/mp4" />
  Your browser does not support the video tag.
</video>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-6 col-sm-12">
      <h3>Messages</h3>
      <p>Once you login you will see all the other users that are registerd and you will be able to send them messages</p>
    </div>
  </div>











  </div>





<div class="container">


<?php include('footer.php'); ?>
</div>