<?php
session_start();
require 'db.php'; // Ensure the correct path to db.php

if (!isset($_SESSION['user_id'])) {
    echo 
    "<script>
    alert('Please log in to access this page.'); window.location = 'login.php';
    </script>";
    exit();
}

// Now you can use $_SESSION['user_id'] to identify the logged-in user
$user_id = $_SESSION['user_id'];
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'User'; // Fallback if username is not set

// Fetch username from the `users` table
$stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
if (!$stmt) {
    die("Error preparing SQL statement: " . $conn->error);
}
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Optalite Suplemen Mata Terbaik, Beli 50% diskaun (30 tablet)</title>
    <meta name="keywords" content="Optalite, Optalite mata, Optalite Suplemen, Optalite ubat, Optalite tablet, Optalite harga">
    <meta name="description" content="Optalite Membantu memastikan mata cerah dan sihat, meningkatkan penglihatan. Memperbaiki peredaran mikro dan mengekalkan fungsi retina. ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script async="" src="https://a.pancake.vn/js/app.js?vsn=d"></script><script type="text/javascript">
      !function(e,t,i){var a,n=e.innerWidth;if(e[i]=(false||n<768)?"mobile":"desktop","desktop"==e[i])a="width=" + 960 + ", user-scalable=no, initial-scale=1.0";else{var o=1;w=420;w!=n&&(o=n/w),a="width=" + w + ", user-scalable=no, initial-scale=" + o + ", minimum-scale=" + o + ", maximum-scale=" + o}var l=t.createElement("meta");l.name="viewport",l.setAttribute("content",a),t.head.appendChild(l)}(window,document,"DISPLAY");
    </script><meta name="viewport" content="width=960, user-scalable=no, initial-scale=1.0">

      <link rel="canonical" href="https://www.optalite.shop/">
      <meta property="og:url" content="https://www.optalite.shop/">

    <meta property="og:title" content="Optalite Suplemen Mata Terbaik, Beli 50% diskaun (30 tablet)">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://content.pancake.vn/1/s1500x950/fwebp/25/bf/c2/68/48e24098c3f6dd26424d0460db413b2561f331c16fdead30bac919a3.png">
    <meta property="og:description" content="Optalite Membantu memastikan mata cerah dan sihat, meningkatkan penglihatan. Memperbaiki peredaran mikro dan mengekalkan fungsi retina. ">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="https://content.pancake.vn/1/s600x600/fwebp/a3/f4/ad/34/fb81681c0855cc72ebde84e229232dd2aa3651a02e543718e1dc861b.png" sizes="16x16">
    <link rel="dns-prefetch" href="https://statics.pancake.vn">
    <link rel="dns-prefetch" href="https://content.pancake.vn">
    <link rel="dns-prefetch" href="https://www.youtube.com">
    <link rel="dns-prefetch" href="https://a.pancake.vn">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin="">
    <link rel="preconnect" href="https://analytics.tiktok.com/i18n/pixel">
    <link rel="preconnect" href="https://analytics.tiktok.com/api/v2/pixel">


<style type="text/css">*{margin:0;padding:0;box-sizing:border-box;outline:0;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font:inherit;border:0}html{font-size:12px;line-height:1.5;-webkit-tap-highlight-color:transparent;font-family:'Roboto',sans-serif;font-feature-settings:'tnum'}body{background-color:#fff;font-size:12px;color:#000}.pageview{overflow:hidden}.lazy{background:none!important}ol,ul{list-style:none}b{font-weight:bold}.visibility-hidden{visibility:hidden!important}.cursor-pointer{cursor:pointer}.full-height{height:100%}.full-width{width:100%}.full-mask-size{-webkit-mask-size:100% 100%}.mask-position{-webkit-mask-position:0% 0%}.u-select-none{user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}.p-absolute{position:absolute}.p-relative{position:relative}.gallery-view-icon-next img,.gallery-view-icon-prev img,.carousel-icon-next img,.carousel-icon-prev img{width:25px;height:25px;filter:drop-shadow(0 0 1px black)}.icon-play-video{position:absolute;width:60px;height:60px;top:calc(50% - 30px);left:calc(50% - 30px);cursor:pointer;background-position:center center;background-size:cover;background-repeat:no-repeat;background-image:url(https://content.pancake.vn/1.1/30/5a/c2/93/9ec72c8ce8898050035dddbb989c950bc1faabdc1fdcc11175dea467.svg)}.player-btn-unmute{position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;cursor:pointer}.player-btn-unmute>div{content:"";position:absolute;width:60px;height:60px;top:calc(50% - 30px);left:calc(50% - 30px);background-size:90%;background-color:rgba(0,0,0,.5);
  border-radius:100%;background-repeat:no-repeat;background-position:center center;background-image:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2036%2036%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22m%2021.48%2C17.98%20c%200%2C-1.77%20-1.02%2C-3.29%20-2.5%2C-4.03%20v%202.21%20l%202.45%2C2.45%20c%20.03%2C-0.2%20.05%2C-0.41%20.05%2C-0.63%20z%20m%202.5%2C0%20c%200%2C.94%20-0.2%2C1.82%20-0.54%2C2.64%20l%201.51%2C1.51%20c%20.66%2C-1.24%201.03%2C-2.65%201.03%2C-4.15%200%2C-4.28%20-2.99%2C-7.86%20-7%2C-8.76%20v%202.05%20c%202.89%2C.86%205%2C3.54%205%2C6.71%20z%20M%209.25%2C8.98%20l%20-1.27%2C1.26%204.72%2C4.73%20H%207.98%20v%206%20H%2011.98%20l%205%2C5%20v%20-6.73%20l%204.25%2C4.25%20c%20-0.67%2C.52%20-1.42%2C.93%20-2.25%2C1.18%20v%202.06%20c%201.38%2C-0.31%202.63%2C-0.95%203.69%2C-1.81%20l%202.04%2C2.05%201.27%2C-1.27%20-9%2C-9%20-7.72%2C-7.72%20z%20m%207.72%2C.99%20-2.09%2C2.08%202.09%2C2.09%20V%209.98%20z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}.d-none{display:none}a:link,a:visited{color:inherit}a{text-decoration:none}.section-container{margin:auto}.text-block-css{display:inline-block;word-break:break-word;-webkit-background-clip:text!important}.animationText span{display:inline-block}.animationText .bar{position:absolute;height:100%;width:3px;background:currentColor;top:0;right:0}.animate-word-wrapper{position:relative;overflow:hidden;vertical-align:top;transition:width .6s;text-align:start}.animate-word-wrapper>span{white-space:nowrap;position:absolute;top:0;left:0;font:inherit}.animate-word-wrapper span i{font:inherit;font-style:initial;display:inline-block;backface-visibility:hidden;-webkit-backface-visibility:hidden}.animate-word-wrapper span i.in{animation-name:rotate-3-in;animation-fill-mode:forwards;animation-duration:.6s}.animate-word-wrapper span i.out{animation-name:rotate-3-out;animation-fill-mode:forwards;animation-duration:.6s}.animationText .hidden{opacity:0;z-index:-1}.animationText .visible{opacity:1;position:relative}.inline{display:inline !important}.caret-dummy{animation:caret-popping 1s infinite}.caret{transform:scaleY(1.3) translateY(-3%)}@keyframes rotate-3-out{0%{transform:rotateY(0);-webkit-transform:rotateY(0)}100%{transform:rotateY(-180deg);-webkit-transform:rotateY(-180deg)}}@-webkit-keyframes rotate-3-out{0%{transform:rotateY(0);-webkit-transform:rotateY(0)}100%{transform:rotateY(-180deg);-webkit-transform:rotateY(-180deg)}}@keyframes rotate-3-in{0%{transform:rotateY(180deg);-webkit-transform:rotateY(180deg)}100%{transform:rotateY(0);-webkit-transform:rotateY(0)}}@-webkit-keyframes rotate-3-in{0%{transform:rotateY(180deg);-webkit-transform:rotateY(180deg)}100%{transform:rotateY(0);-webkit-transform:rotateY(0)}}@keyframes caret-popping{0%{opacity:0}50%{opacity:1}100%{opacity:0}}.com-button{cursor:pointer;user-select:none;-webkit-user-select:none;transition:transform 200ms ease-out;-webkit-transition:transform 200ms ease-out}.com-button:active{transform:translateY(5px);-webkit-transform:translateY(5px)}.button-css{display:flex;display:-webkit-flex;align-items:center;-webkit-align-items:center;justify-content:center;-webkit-justify-content:center;text-align:center}.button-text{display:table-cell;vertical-align:middle;text-align:unset}.list-paragraph-container ul{counter-reset:needaname}.list-paragraph-container li{position:relative;counter-increment:needaname;word-break:break-word}.list-paragraph-container li::before{position:absolute;left:0;-webkit-mask-size:100% 100%;-webkit-mask-position:0% 0%;background-repeat:no-repeat;background-size:100% 100%}.image-block-css{overflow:hidden}.image-background,.image-background-compare{margin:0 auto}.image-background-compare{top:0;left:0;width:100%;height:100%}.image-compare-line{position:absolute;top:50%;left:50%;z-index:40;width:38px;height:38px;margin-top:-22px;margin-left:-22px;cursor:pointer;border:3px solid #fff;border-radius:1000px;-webkit-box-shadow:0px 0px 12px rgba(51,51,51,0.5);box-shadow:0px 0px 12px rgba(51,51,51,0.5)}.image-compare-left-arrow,.image-compare-right-arrow{top:50%;margin-top:-6px;position:absolute;width:0;height:0;border:6px inset transparent}.image-compare-left-arrow{left:50%;margin-left:-17px;border-right:6px solid #fff}.image-compare-right-arrow{right:50%;margin-right:-17px;border-left:6px solid #fff}.image-compare-line:before,.image-compare-line:after{position:absolute;z-index:30;display:block;content:" ";background:#fff}.image-compare-line:before{left:50%;width:3px;height:9999px;bottom:50%;margin-bottom:22px;-webkit-box-shadow:0 3px 0 #fff,0px 0px 12px rgba(51,51,51,0.5);box-shadow:0 3px 0 #fff,0px 0px 12px rgba(51,51,51,0.5)}.image-compare-line:after{left:50%;width:3px;height:9999px;top:50%;margin-top:22px;-webkit-box-shadow:0 -3px 0 #fff,0px 0px 12px rgba(51,51,51,0.5);box-shadow:0 -3px 0 #fff,0px 0px 12px rgba(51,51,51,0.5)}.group-container{width:100%;height:100%}.countdown-wrapper{display:flex;display:-webkit-flex;pointer-events:none;font-size:20px}.countdown-message{width:100%;position:absolute;height:100%;top:0;left:0;background:#000;color:#fff;display:flex;align-items:center;justify-content:center}.countdown-item{display:flex;display:-webkit-flex;justify-content:center;-webkit-justify-content:center;font:inherit;align-items:center;-webkit-align-items:center;width:calc((100% - 40px)/4);height:calc(100% - 10px);margin:5px;flex-direction:column;-webkit-flex-direction:column}.countdown-wrapper .timer-number-wrapper{display:flex}.countdown-wrapper .timer-number{overflow:hidden;position:relative}.countdown-wrapper .timer-number .show{transition-property:transform;transition-duration:.3s;transition-timing-function:ease;transform:translateY(0%)}.countdown-wrapper .timer-number .next{transition-property:transform;transition-duration:.3s;transition-timing-function:ease;position:absolute;transform:translateY(0%)}.countdown-item .text{font-size:.8em}.input-number-quantity-css{width:100%;height:100%;overflow:hidden;display:flex;user-select:none}.input-number-quantity-css .minus,.plus{display:flex;align-items:center;justify-content:center;flex-shrink:0;cursor:pointer}.input-number-quantity-css .minus{border-right:inherit}.input-number-quantity-css .plus{border-left:inherit}.input-number-quantity-css input{text-align:center;background:transparent;color:inherit;width:100%;height:100%;border:0;outline:none;padding-left:10px;padding-right:10px;box-sizing:border-box;border-radius:0}.input-number-quantity-css input::placeholder{color:#979797;-webkit-text-fill-color:#979797}.input-number-quantity-css input::-webkit-outer-spin-button,.input-number-quantity-css input::-webkit-inner-spin-button{-webkit-appearance:none;margin:0}.input-number-quantity-css input[type=number]{-moz-appearance:textfield}.field-error{top:0;right:0;position:absolute;height:100%;width:30px}.field-error img{width:16px;height:16px;position:absolute;left:calc(50% - 8px);
    top:calc(50% - 8px)}.input-css{overflow:hidden}.input-css input{background:transparent;color:inherit;padding-left:10px;border-radius:0;text-align:inherit;letter-spacing:inherit}.input-css input::placeholder{text-transform:var(--placeholder-transform);text-decoration:var(--placeholder-decoration)}.input-datetime{overflow:hidden}.input-datetime input{background:transparent;width:100%;height:100%;padding-left:10px;padding-right:10px;border-radius:0;box-sizing:border-box;-webkit-appearance:textfield;-moz-appearance:textfield;text-align:inherit;letter-spacing:inherit}.input-datetime input::placeholder{text-transform:var(--placeholder-transform);text-decoration:var(--placeholder-decoration)}.input-datetime .input-datetime-placeholder{position:absolute;top:0;padding-left:12px;height:100%;width:100%;align-items:center;display:flex;z-index:-1}.input-file{overflow:hidden;display:flex;display:-webkit-flex;align-items:center;-webkit-align-items:center;justify-content:space-between;-webkit-justify-content:space-between;padding:0 10px;cursor:pointer}.input-file .title{overflow:hidden;white-space:nowrap;text-overflow:ellipsis}.input-file input[type="file"]{opacity:0;cursor:pointer;top:0;left:0}.textarea-css{width:100%;height:100%;overflow:hidden}.textarea-css textarea{background:transparent;padding-top:6px;padding-bottom:0;color:inherit;padding-left:10px;border-radius:0;text-align:inherit;letter-spacing:inherit}.textarea-css textarea::placeholder{text-transform:var(--placeholder-transform);text-decoration:var(--placeholder-decoration)}.com-checkbox-group{min-height:40px}.checkbox-group-css{display:flex;display:-webkit-flex;flex-direction:row;-webkit-flex-direction:row;flex-wrap:wrap;-webkit-flex-wrap:wrap;padding-left:10px;min-height:40px}.checkbox-group-item{display:flex;display:-webkit-flex;align-items:center;-webkit-align-items:center}.checkbox-group-input{margin-right:10px;width:13px;height:13px;min-width:13px;min-height:13px}.com-radio{min-height:40px;height:auto!important}.radio-css{min-height:40px;display:flex;display:-webkit-flex;flex-direction:row;-webkit-flex-direction:row;flex-wrap:wrap;-webkit-flex-wrap:wrap}.radio-item{display:flex;display:-webkit-flex;align-items:center;-webkit-align-items:center;border-radius:5px;padding-left:10px}.radio-input{margin-right:10px;width:13px;height:13px;min-width:13px;min-height:13px}.select-css{overflow:hidden;padding-top:0;padding-bottom:0}.select-css select{text-align:inherit;letter-spacing:inherit}.select-css option:first-child{color:#979797}.chevron{pointer-events:none;color:#979797;position:absolute;right:0;width:26px;height:100%;top:0}.chevron .icon{position:absolute;display:block;width:14px;height:14px;border:2px solid transparent;border-radius:100px;top:calc(50% - 7px);left:calc(50% - 7px)}.chevron .icon::after{content:"";display:block;position:absolute;width:6px;height:6px;border-bottom:2px solid;border-right:2px solid;transform:rotate(45deg);-webkit-transform:rotate(45deg)}.select-css select{background:transparent;padding-right:26px;padding-left:10px;appearance:none;-webkit-appearance:none;-moz-appearance:none;-o-appearance:none;color:#979797}.select-css select.select{color:inherit}.address-css{overflow:hidden}.address-css .select-container{color:inherit;padding-top:0;padding-bottom:0;border-radius:0;display:flex;display:-webkit-flex;justify-content:space-between;-webkit-justify-content:space-between}.address-css .select-field{height:100%;flex:1;position:relative}.address-css select{background:transparent;padding-left:10px;padding-right:26px;width:100%;appearance:none;-webkit-appearance:none;-moz-appearance:none;-o-appearance:none;height:100%;color:#979797}.address-css select.select{color:inherit}.address-css select option:first-child{color:#979797}.address-column{background:transparent!important;border-width:0!important}.address-column .select-column{flex-direction:column;border-radius:inherit!important;border-color:inherit!important;border-style:inherit!important}.address-column .select-column .select-field{width:100%;border-radius:inherit;border-width:1px;border-color:inherit;border-style:inherit;overflow:hidden}.icon-container{position:absolute;left:calc(50% - 10px);top:calc(50% - 10px)}.loader{position:relative;height:20px;width:20px;display:inline-block;animation:around 5.4s infinite}@keyframes around{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}.loader::after,.loader::before{content:"";background:white;position:absolute;display:inline-block;width:100%;height:100%;border-width:2px;border-color:#333 #333 transparent transparent;border-style:solid;border-radius:20px;box-sizing:border-box;top:0;left:0;animation:around 0.7s ease-in-out infinite}.loader::after{animation:around 0.7s ease-in-out 0.1s infinite;background:transparent}.button-loader,.button-loader:before,.button-loader:after{border-radius:50%;width:1.3em;height:1.3em;animation-fill-mode:both;animation:bblFadInOut 1.8s infinite ease-in-out}.button-loader{color:#FFF;font-size:7px;position:relative;text-indent:-9999em;transform:translateZ(0);animation-delay:-0.16s;display:none;top:-17px}.button-loader:before,.button-loader:after{content:'';position:absolute;top:0}.button-loader:before{left:-3.5em;animation-delay:-0.32s}.button-loader:after{left:3.5em}@keyframes bblFadInOut{0%,80%,100%{box-shadow:0 2.5em 0 -1.3em}40%{box-shadow:0 2.5em 0 0}}.line-css{padding:8px 0}.line-container{border-left-width:0!important;border-right-width:0!important;border-bottom-width:0!important}.popup-wrapper{top:0;left:0}.popup-background{overflow:hidden}.popup-backdrop{background:rgba(0,0,0,.5);position:fixed;top:0;left:0;z-index:1000000}.popup-center{top:0;left:0;right:0;bottom:0;margin:auto}.popup-top-left{top:0;left:0}.popup-top-center{top:0;left:50%;transform:translate3d(-50%,0,0);-webkit-transform:translate3d(-50%,0,0)}.popup-top-right{top:0;right:0}.popup-center-left{left:0;top:50%;transform:translate3d(0,-50%,0);-webkit-transform:translate3d(0,-50%,0)}.popup-center-right{right:0;top:50%;transform:translate3d(0,-50%,0);-webkit-transform:translate3d(0,-50%,0)}.popup-bottom-left{bottom:0;left:0}.popup-bottom-center{bottom:0;left:50%;transform:translate3d(-50%,0,0);-webkit-transform:translate3d(-50%,0,0)}.popup-bottom-right{bottom:0;right:0}.overlay{pointer-events:none;width:100%;height:100%;position:absolute;top:0;left:0;border-radius:inherit}.cart-quantity-css{overflow:hidden;display:flex;display:-webkit-flex}.cart-quantity-css .minus{border-right:inherit}.cart-quantity-css .plus{border-left:inherit}.cart-quantity-css input{text-align:center;background:transparent;color:inherit;padding-left:10px;padding-right:10px;border-radius:0;-moz-appearance:textfield}.cart-quantity-css input::-webkit-outer-spin-button,.cart-quantity-css input::-webkit-inner-spin-button{-webkit-appearance:none}.cart-quantity-css .minus,.cart-quantity-css .plus{display:flex;display:-webkit-flex;align-items:center;-webkit-align-items:center;justify-content:center;-webkit-justify-content:center;flex-shrink:0;-webkit-flex-shrink:0;user-select:none;cursor:pointer;-webkit-user-select:none;width:40px}.product-attr-selected{top:0;left:0;overflow:hidden}.lightbox-btn-close{background-color:#a8a8a8;width:21px;height:21px;position:absolute;cursor:pointer}.lightbox-btn-close > span{position:absolute;z-index:9999;width:14px;height:14px;top:calc(50% - 7px);left:calc(50% - 7px);-webkit-mask-size:100% 100%;-webkit-mask-position:0% 0%;background:#fff;-webkit-mask-image:url(data:image/svg+xml;base64,PHN2ZyBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSdub25lJyAgd2lkdGg9JzE0JyBoZWlnaHQ9JzE0JyB2aWV3Qm94PScwIDAgMTQgMTQnIGZpbGw9J25vbmUnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+PHBhdGggZD0nTTEyLjU5IDBMNyA1LjU5TDEuNDEgMEwwIDEuNDFMNS41OSA3TDAgMTIuNTlMMS40MSAxNEw3IDguNDFMMTIuNTkgMTRMMTQgMTIuNTlMOC40MSA3TDE0IDEuNDFMMTIuNTkgMFonIGZpbGw9JyMyRTNBNTknLz48L3N2Zz4=)}.lightbox-image,.lightbox-video,.lightbox-iframe{position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;max-width:80%;max-height:80%}.lightbox-iframe{width:100%;height:100%}.lightbox-backdrop{width:100%;background:rgba(0,0,0,.5);height:100%;position:fixed;top:0;left:0;z-index:1000000000;touch-action:none}.w-alert-message-wrapper{position:fixed;top:15px;z-index:999999;left:50%;padding:10px 16px;border:1px solid var(--color-alert,#15942A);-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);--transform-translateX:-50%;background:white;border-radius:8px;-webkit-box-shadow:0px 2px 8px 0px rgba(0,0,0,0.15);box-shadow:0px 2px 8px 0px rgba(0,0,0,0.15);display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.w-alert-message{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.w-alert-message .icon{line-height:22px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-left:0px;margin-right:6px}.w-alert-message span.close-icon{margin-left:6px;margin-right:0px;color:#80808085;cursor:pointer}.login-popup-wrapper .backdrop-login{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.5);display:none;z-index:99}.login-popup-wrapper .popup-default-login{position:fixed;top:45%;left:50%;width:400px;height:160px;transform:translate(-50%,-50%);z-index:999;display:none;max-width:calc(100% - 50px);border:1px solid rgba(0,0,0,.3);background-color:#fff;border-radius:10px}.login-popup-wrapper .popup-default-login .popup-login-title{background-color:rgba(6,21,40,.05);color:#000;padding:12px 15px;font-weight:600;font-size:16px;border-top-left-radius:10px;border-top-right-radius:10px}.login-popup-wrapper .popup-default-login .popup-login-content{font-size:14px;padding:0 20px;margin-top:10px;line-height:18px;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;text-overflow:ellipsis;display:-webkit-box}.login-popup-wrapper .popup-default-login .popup-login-btn{display:block;position:absolute;right:15px;bottom:10px;margin:0 auto;padding:10px 0;border:none;width:80px;text-transform:uppercase;text-align:center;color:#000;background-color:#e6e6e6;border-radius:5px;text-decoration:none;font-size:14px;font-weight:600;cursor:pointer}

</style>

<!--STYLE UNTUK LAPTOP SCREEN-->
                <style type="text/css" media="screen and (min-width: 768px)">.section-container{max-width:960px;}
                
/* PAGE ORDER */

/* PAGE KEDUA */

/* CURRENT PAGE 2 (14) */
body {
        background-image: url('https://content.pancake.vn/1/s3160x2040/fwebp/a0/b4/ef/26/3394e0ff4eb168a6818a0375e48fca41021b7cd7aa576b2feafd4197.png');
        background-size: 155%;
        background-attachment: fixed;
        background-position: center;
        background-position-y: 60px;
        background-repeat: no-repeat;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }
  #w-06oxglsv{

    top: 60px;
    left: 0;
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between; /* Space between sections */
    overflow: hidden; /* Prevents any content from overflowing */
  }
  #w-06oxglsv .section-wrapper{opacity: 1;}

  #w-19fgekjy{top:203.5px;left:405px;width:654px;height:527px;}
  #w-19fgekjy .image-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;border-width:0px;position:absolute;z-index:null;}
  #w-19fgekjy .image-background{width:654.13875px;height:527px;top:0px;left:0px;background:center center/ cover no-repeat scroll content-box  border-box url("https://content.pancake.vn/1/s1309x1054/fwebp/25/bf/c2/68/48e24098c3f6dd26424d0460db413b2561f331c16fdead30bac919a3.png");}#w-19fgekjy .image-background.fb{background:center center/ cover no-repeat scroll content-box  border-box url("https://content.pancake.vn/1/s1309x1054/25/bf/c2/68/48e24098c3f6dd26424d0460db413b2561f331c16fdead30bac919a3.png");}#w-19fgekjy .image-background-compare{background: undefined;clip: rect(0, 327px, 527px, 0);}

  #w-tsdfdj6q{top:80px;left:1px;width:955px;height:38.390625px;}
  #w-tsdfdj6q .text-block{background:;}
  #w-tsdfdj6q .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(2, 116, 254, 1);font-family:'Roboto', sans-serif;font-size:32px;font-style:italic;font-weight:bold;line-height:1.2;text-align:center;}

  #w-3no0zcp7{top:120px;left:330.5px;width:294px;height:auto;}
  #w-3no0zcp7 .line-container{border-color:rgba(230, 126, 34, 1);border-style:solid;border-width:2px;}

/* BORANG PUTIH */
#w-9p3jjj4k{top:200px;left:-80px;width:511px;height:470px;}#w-u55w9d0v{top:0px;left:0px;width:431px;height:480px;}#w-u55w9d0v .rectangle-css{border-color:rgba(229, 231, 235, 1);border-radius:20px;border-style:solid;background:rgba(255, 255, 255, 1);}#w-rc93od6w{top:14px;left:10px;width:411px;height:45px;}#w-rc93od6w .text-block{background:;}#w-rc93od6w .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(145, 23, 16, 1);font-size:30px;font-style:italic;font-weight:bold;text-align:center;}#w-n2o3nndd{top:53px;left:79.5px;width:371px;height:80px;}

#w-qjk87l6j{top:0px;left:48px;width:323px;height:80px;}
  #w-gvncxy8b{top:73px;left:39.5px;width:352px;height:60px;}#w-gvncxy8b .text-block{background:;}#w-gvncxy8b .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(255, 14, 1, 1);font-size:40px;font-style:italic;font-weight:bold;text-align:center;}#w-9f07bxgx{top:206.5px;left:28.5px;width:374px;height:151px;}#w-9f07bxgx form{border-radius:20px;font-size:13px;}#w-9f07bxgx {}
  #w-urg7q04l{top:-60px;left:0px;width:374px;height:40px;}
  #w-urg7q04l .input-css{border-color:rgba(134, 134, 134, 1);border-radius:20px;border-style:solid;border-width:1px;}
  #w-urg7q04l input{background:#fff;}
  #w-urg7q04l input::placeholder{color:rgba(107, 107, 107, 1);-webkit-text-fill-color:rgba(107, 107, 107, 1)!important;}

    #qtstepper{top:-10px;left:0px;width:374px;height:40px;}
  #qtstepper .input-css{border-color:rgba(134, 134, 134, 1);border-radius:20px;border-style:solid;border-width:1px;}
  #qtstepper input{background:#fff;}
  #qtstepper input::placeholder{color:rgba(107, 107, 107, 1);-webkit-text-fill-color:rgba(107, 107, 107, 1)!important;}

  #w-1z13ui5d{top:40px;left:0px;width:374px;height:40px;}#w-1z13ui5d .input-css{border-color:rgba(134, 134, 134, 1);border-radius:20px;border-style:solid;border-width:1px;}#w-1z13ui5d input{background:#fff;}#w-1z13ui5d input::placeholder{color:rgba(107, 107, 107, 1);-webkit-text-fill-color:rgba(107, 107, 107, 1)!important;}

    #alamat{top:50px;left:0px;width:374px;height:40px;}
  #alamat .input-css{border-color:rgba(134, 134, 134, 1);border-radius:20px;border-style:solid;border-width:1px;}
  #alamat input{background:#fff;}
  #alamat input::placeholder{color:rgba(107, 107, 107, 1);-webkit-text-fill-color:rgba(107, 107, 107, 1)!important;}

/* pesan optalite */
#w-v4vswso7 {
    position: absolute; /* Ensure it's positioned relative to its parent */
    top:150px;left:30px; /* Center vertically n Center horizontally */
    transform: translate(-50%, -50%); /* Adjust for the element's own width/height */
    width:314px;height:51px;
}
/* Button Styling */
#w-v4vswso7 .button-css{background:linear-gradient(180deg, rgba(47, 201, 232, 1) 0%, rgba(2, 116, 254, 1) 100%);border-color:rgba(229, 231, 235, 1);border-radius:6px;border-style:solid;color:rgba(255, 255, 255, 1);font-size:18px;font-weight:bold;display: flex; /* Flexbox for centering text */
    justify-content: center; /* Center text horizontally */
    align-items: center; /* Center text vertically */
box-shadow: none; /* Remove any shadow effect */
    text-shadow: none; /* Remove text shadow */
  }
    /* Remove Highlighted/Box Effect */
#w-v4vswso7 .button-css:hover,
#w-v4vswso7 .button-css:focus {
    background: linear-gradient(180deg, rgba(47, 180, 220, 1) 0%, rgba(2, 90, 230, 1) 100%);
    color: white;
    outline: none; /* Remove focus outline */
    text-shadow: none; /* Ensure no text shadow */
}

  #w-8dlqyzq4{top:430px;left:28.5px;width:374px;height:21px;} #w-8dlqyzq4 .text-block{background:;}#w-8dlqyzq4 .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(29, 29, 29, 1);font-size:14px;font-style:italic;font-weight:bold;text-align:center;}


#w-d2qshzus{top:55px;left:400px;width:319px;height:279px;}

  #w-9ew3v2ip{top:0px;left:0px;width:319px;height:279px;}#w-9ew3v2ip .image-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;border-width:0px;position:absolute;z-index:null;}#w-9ew3v2ip .image-background{width:639.4306220095696px;height:333.0367822966508px;top:0px;left:-164.17154811715483px;background:center center/ cover no-repeat scroll content-box  border-box url("https://content.pancake.vn/1/s1279x667/fwebp/5b/1c/81/f4/bd7de7907bec374b55329474ad9bb4de2a1fb6b3ae2f2899d9155e56.png");}#w-9ew3v2ip .image-background.fb{background:center center/ cover no-repeat scroll content-box  border-box url("https://content.pancake.vn/1/s1279x667/5b/1c/81/f4/bd7de7907bec374b55329474ad9bb4de2a1fb6b3ae2f2899d9155e56.png");}#w-9ew3v2ip .image-background-compare{background: undefined;clip: rect(0, 159.5px, 279px, 0);}#w-3ddsmkft{top:144.5px;left:81.5px;width:182px;height:34.5px;}#w-3ddsmkft .text-block{background:;}#w-3ddsmkft .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(255, 255, 255, 1);font-size:23px;font-weight:bold;text-align:center;}#w-5p31xhp1{top:202.5px;left:111.5px;width:133px;height:38.375px;}#w-5p31xhp1 .text-block{background:;}#w-5p31xhp1 .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(255, 255, 255, 1);font-size:16px;font-style:italic;font-weight:bold;line-height:1.2;text-align:center;text-decoration:line-through;}

   #w-b7w0ymqa{top:700px;left:-120px;width:507px;height:51px;}#w-b7w0ymqa .text-block{background:;}#w-b7w0ymqa .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(32, 32, 32, 1);font-size:16px;font-style:italic;text-align:center;}

/* copyright */
  #w-0t0daep2{top:60px;left:0px;position:relative;width:100%;height:73px;z-index: 1000;}#w-0t0daep2 .section-wrapper{opacity:1;}#w-0t0daep2 .section-background{background:rgba(23, 106, 201, 1);}#w-k9nhsuxt{top:26px;left:252px;width:456px;height:27px;}#w-k9nhsuxt .text-block{background:;}#w-k9nhsuxt .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(255, 255, 255, 1);font-size:18px;text-align:center;}

  #w-__popup_default__{position:fixed;width:477px;height:265px;}#w-__popup_default__::-webkit-scrollbar{display:none}#w-__popup_default__ .popup-background{background:rgba(255, 255, 255, 1);border-color:rgba(76, 175, 80, 0.8);border-radius:13px;border-style:solid;box-shadow:4px 4px 9px 0px rgba(139,195,74,0.200);color:rgba(69,64,64,1.000);}#w-oc2dcqis{top:27px;left:44.5px;width:257px;height:42px;}#w-oc2dcqis .text-block{background:;}#w-oc2dcqis .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(69, 64, 64, 1);font-size:28px;font-weight:bold;text-align:start;}#w-pn1igdhr{top:95px;left:44.5px;width:388px;height:96px;}#w-pn1igdhr .text-block{background:;}#w-pn1igdhr .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;font-family:'Roboto', sans-serif;font-size:16px;font-weight:400;text-align:start;text-transform:normal;}#w-au0o7yag{top:207px;left:301.5px;width:130px;height:40px;}#w-au0o7yag .button-css{background:rgba(76, 175, 80, 0.8);border-radius:6px;border-style:solid;color:rgba(255, 255, 255, 1);font-size:14px;font-weight:bold;}#w-au0o7yap{top:0px;left:448px;z-index:1;width:29px;height:29px;}#w-au0o7yap {
    box-shadow: undefined;
    filter: undefined;
  }#w-au0o7yap .rectangle-css{-webkit-mask-image:url(data:image/svg+xml;base64,PHN2ZyBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSdub25lJyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHdpZHRoPScxMDAlJyBoZWlnaHQ9JzEwMCUnIHZpZXdCb3g9JzAgMCAyNCAyNCc+IDxwYXRoIGQ9J00xMy40NiwxMkwxOSwxNy41NFYxOUgxNy41NEwxMiwxMy40Nkw2LjQ2LDE5SDVWMTcuNTRMMTAuNTQsMTJMNSw2LjQ2VjVINi40NkwxMiwxMC41NEwxNy41NCw1SDE5VjYuNDZMMTMuNDYsMTJaJz48L3BhdGg+IDwvc3ZnPg==);border-color:#E5E7EB;border-style:solid;z-index:1;background:rgb(212, 212, 212);}.-popup-checkout .-close, .-zoom .-close {
    width: undefinedpx;
    height: undefinedpx;
  }.-checkout-gallery .gallery-view-item {
    background-size: cover !important;
  }

#w-1j9ycv91{top:60px;left:0px;position:relative;width:100%;height:326px;}#w-1j9ycv91 .section-wrapper{opacity:1;}

#w-gwho48pn{top:63.5px;left:329.5px;width:294px;height:auto;}#w-gwho48pn .line-container{border-color:rgba(2, 116, 254, 1);border-style:solid;border-width:2px;}
#w-tr61o48o{top:18.5px;left:-220px;width:1400px;height:40.796875px;}#w-tr61o48o .text-block{background:;}#w-tr61o48o .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(2, 116, 254, 1);font-family:'Roboto', sans-serif;font-size:34px;font-style:italic;font-weight:bold;line-height:1.2;text-align:center;}#w-bbmqo22g{top:111.5px;left:-62px;width:226px;height:143px;}#w-t82hvf2d{top:0px;left:63px;width:100px;height:100px;}#w-t82hvf2d {
    box-shadow: undefined;
    filter: undefined;
  }#w-t82hvf2d .rectangle-css{-webkit-mask-image:url(data:image/svg+xml;base64,PHN2ZyBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSdub25lJyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAyNCAyNCIgY2xhc3M9ImdtYWlsIj48cGF0aCBkPSJNMjAsMThIMThWOS4yNUwxMiwxM0w2LDkuMjVWMThINFY2SDUuMkwxMiwxMC4yNUwxOC44LDZIMjBNMjAsNEg0QzIuODksNCAyLDQuODkgMiw2VjE4QTIsMiAwIDAsMCA0LDIwSDIwQTIsMiAwIDAsMCAyMiwxOFY2QzIyLDQuODkgMjEuMSw0IDIwLDRaIj48L3BhdGg+PC9zdmc+);border-color:rgba(229, 231, 235, 1);border-style:solid;background:rgba(2, 116, 254, 1);}#w-df4cniu7{top:100px;left:0px;width:226px;height:43.1875px;}#w-df4cniu7 .text-block{background:;}#w-df4cniu7 .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(2, 116, 254, 1);font-size:18px;line-height:1.2;text-align:center;}#w-0xkvjmcc{top:111.5px;left:323px;width:314px;height:177px;}#w-orfa5mgt{top:0px;left:117px;width:81px;height:81px;}#w-orfa5mgt {
    box-shadow: undefined;
    filter: undefined;
  }#w-orfa5mgt .rectangle-css{-webkit-mask-image:url(data:image/svg+xml;base64,PHN2ZyBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSdub25lJyB3aWR0aD0nNTAnIGhlaWdodD0nNjEnIHZpZXdCb3g9JzAgMCA1MCA2MScgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz48cGF0aCBkPSdNMzMuMzM1NSA0My4zNTIzTDM3LjY0MSAzOC4wOTc1QzM4LjIyMDggMzcuMzk4NSAzOC45NTQ1IDM2LjkyIDM5Ljc1MjkgMzYuNzIwMUM0MC41NTEzIDM2LjUyMDIgNDEuMzgwMSAzNi42MDc2IDQyLjEzODcgMzYuOTcxNEw0Ny4zODYgMzkuNTI4NUM0OC4xNTI1IDM5LjkwODIgNDguODA5OCA0MC41NTY0IDQ5LjI3NSA0MS4zOTE0QzQ5Ljc0MDIgNDIuMjI2NCA0OS45OTI1IDQzLjIxMDcgNTAgNDQuMjIwM1Y1NS45NDk4QzQ5Ljk5NTYgNTYuNjM2NyA0OS44NzcyIDU3LjMxNTMgNDkuNjUyMyA1Ny45NDQ4QzQ5LjQyNzIgNTguNTc0MyA0OS4xMDAyIDU5LjE0MTggNDguNjkwNyA1OS42MTMxQzQ4LjI4MTIgNjAuMDg0MyA0Ny43OTggNjAuNDQ5NSA0Ny4yNjk4IDYwLjY4NjhDNDYuNzQxNyA2MC45MjQgNDYuMTc5NyA2MS4wMjgzIDQ1LjYxNzcgNjAuOTkzNEM4Ljg0Nzk4IDU4LjIwMTkgMS40Mjg3MiAyMC4xOTgzIDAuMDI1NTk1NSA1LjY1Mzc1Qy0wLjAzOTUzNjMgNC45Mzk1IDAuMDE5OTc4IDQuMjE2NTQgMC4yMDAyMTggMy41MzIzMUMwLjM4MDQ1OCAyLjg0ODE4IDAuNjc3MzQ4IDIuMjE4MzcgMS4wNzEzNCAxLjY4NDMxQzEuNDY1MzQgMS4xNTAyNSAxLjk0NzUzIDAuNzI0MDU5IDIuNDg2MTkgMC40MzM3NzNDMy4wMjQ4MyAwLjE0MzQ4NyAzLjYwNzc1IC0wLjAwNDMwODQzIDQuMTk2NTggOS41NjA1M2UtMDVIMTMuNDgwM0MxNC4zMDg3IDAuMDAzMDg4MzUgMTUuMTE3NCAwLjMwODUwOSAxNS44MDI1IDAuODc3MDY5QzE2LjQ4NzYgMS40NDU2MiAxNy4wMTc2IDIuMjUxMzIgMTcuMzI0NSAzLjE5MDVMMTkuNDE5NSA5LjU5NDg2QzE5LjcyNzUgMTAuNTE2OSAxOS44MDYxIDExLjUyOTMgMTkuNjQ1NSAxMi41MDU2QzE5LjQ4NDggMTMuNDgxOSAxOS4wOTIgMTQuMzc4OCAxOC41MTYxIDE1LjA4NDJMMTQuMjEwNyAyMC4zMzlDMTQuMjEwNyAyMC4zMzkgMTYuNjkwMSA0MC44MTg4IDMzLjMzNTUgNDMuMzUyM1onIGZpbGw9J2JsYWNrJy8+PC9zdmc+);border-color:rgba(229, 231, 235, 1);border-style:solid;background:rgba(2, 116, 254, 1);}#w-f2o3kgd2{top:90.5px;left:0px;width:314px;height:86.375px;}#w-f2o3kgd2 .text-block{background:;}#w-f2o3kgd2 .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(2, 116, 254, 1);font-size:18px;line-height:1.2;text-align:center;}#w-8cx93k5v{top:111.5px;left:739.5px;width:314px;height:155px;}#w-4257knrj{top:0px;left:123px;width:68px;height:81px;}#w-4257knrj {
    box-shadow: undefined;
    filter: undefined;
  }#w-4257knrj .rectangle-css{-webkit-mask-image:url(data:image/svg+xml;base64,PHN2ZyBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSdub25lJyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxNjExLjI0OTkgMTg5Ni4wODMzIiBjbGFzcz0iZmlsZS10ZXh0LW8iPjxwYXRoIGQ9Ik0xNDY4IDM4MHEyOCAyOCA0OCA3NnQyMCA4OHYxMTUycTAgNDAtMjggNjh0LTY4IDI4SDk2cS00MCAwLTY4LTI4dC0yOC02OFY5NnEwLTQwIDI4LTY4VDk2IDBoODk2cTQwIDAgODggMjB0NzYgNDh6bS00NDQtMjQ0djM3NmgzNzZxLTEwLTI5LTIyLTQxbC0zMTMtMzEzcS0xMi0xMi00MS0yMnptMzg0IDE1MjhWNjQwSDk5MnEtNDAgMC02OC0yOHQtMjgtNjhWMTI4SDEyOHYxNTM2aDEyODB6TTM4NCA4MDBxMC0xNCA5LTIzdDIzLTloNzA0cTE0IDAgMjMgOXQ5IDIzdjY0cTAgMTQtOSAyM3QtMjMgOUg0MTZxLTE0IDAtMjMtOXQtOS0yM3YtNjR6bTczNiAyMjRxMTQgMCAyMyA5dDkgMjN2NjRxMCAxNC05IDIzdC0yMyA5SDQxNnEtMTQgMC0yMy05dC05LTIzdi02NHEwLTE0IDktMjN0MjMtOWg3MDR6bTAgMjU2cTE0IDAgMjMgOXQ5IDIzdjY0cTAgMTQtOSAyM3QtMjMgOUg0MTZxLTE0IDAtMjMtOXQtOS0yM3YtNjRxMC0xNCA5LTIzdDIzLTloNzA0eiI+PC9wYXRoPjwvc3ZnPg==);border-color:rgba(229, 231, 235, 1);border-style:solid;background:rgba(2, 116, 254, 1);}#w-4gexvgii{top:90.5px;left:0px;width:314px;height:64.78125px;}#w-4gexvgii .text-block{background:;}#w-4gexvgii .text-block-css{border-color:rgba(229, 231, 235, 1);border-style:solid;color:rgba(2, 116, 254, 1);font-size:18px;line-height:1.2;text-align:center;}#w-9b2lnprt{top:137px;left:249px;width:32px;height:52px;}#w-9b2lnprt {
    box-shadow: undefined;
    filter: undefined;
  }#w-9b2lnprt .rectangle-css{-webkit-mask-image:url(data:image/svg+xml;base64,PHN2ZyBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSdub25lJyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxMDI0IDE4OTYuMDgzMyIgY2xhc3M9ImFuZ2xlLWRvdWJsZS1yaWdodCI+PHBhdGggZD0iTTU5NSA5NjBxMCAxMy0xMCAyM2wtNDY2IDQ2NnEtMTAgMTAtMjMgMTB0LTIzLTEwbC01MC01MHEtMTAtMTAtMTAtMjN0MTAtMjNsMzkzLTM5M0wyMyA1NjdxLTEwLTEwLTEwLTIzdDEwLTIzbDUwLTUwcTEwLTEwIDIzLTEwdDIzIDEwbDQ2NiA0NjZxMTAgMTAgMTAgMjN6bTM4NCAwcTAgMTMtMTAgMjNsLTQ2NiA0NjZxLTEwIDEwLTIzIDEwdC0yMy0xMGwtNTAtNTBxLTEwLTEwLTEwLTIzdDEwLTIzbDM5My0zOTMtMzkzLTM5M3EtMTAtMTAtMTAtMjN0MTAtMjNsNTAtNTBxMTAtMTAgMjMtMTB0MjMgMTBsNDY2IDQ2NnExMCAxMCAxMCAyM3oiPjwvcGF0aD48L3N2Zz4=);border-color:rgba(229, 231, 235, 1);border-style:solid;background:rgba(2, 116, 254, 1);}#w-cad9qd92{top:137px;left:679px;width:32px;height:52px;}#w-cad9qd92 {
    box-shadow: undefined;
    filter: undefined;
  }#w-cad9qd92 .rectangle-css{-webkit-mask-image:url(data:image/svg+xml;base64,PHN2ZyBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSdub25lJyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxMDI0IDE4OTYuMDgzMyIgY2xhc3M9ImFuZ2xlLWRvdWJsZS1yaWdodCI+PHBhdGggZD0iTTU5NSA5NjBxMCAxMy0xMCAyM2wtNDY2IDQ2NnEtMTAgMTAtMjMgMTB0LTIzLTEwbC01MC01MHEtMTAtMTAtMTAtMjN0MTAtMjNsMzkzLTM5M0wyMyA1NjdxLTEwLTEwLTEwLTIzdDEwLTIzbDUwLTUwcTEwLTEwIDIzLTEwdDIzIDEwbDQ2NiA0NjZxMTAgMTAgMTAgMjN6bTM4NCAwcTAgMTMtMTAgMjNsLTQ2NiA0NjZxLTEwIDEwLTIzIDEwdC0yMy0xMGwtNTAtNTBxLTEwLTEwLTEwLTIzdDEwLTIzbDM5My0zOTMtMzkzLTM5M3EtMTAtMTAtMTAtMjN0MTAtMjNsNTAtNTBxMTAtMTAgMjMtMTB0MjMgMTBsNDY2IDQ2NnExMCAxMCAxMCAyM3oiPjwvcGF0aD48L3N2Zz4=);border-color:rgba(229, 231, 235, 1);border-style:solid;background:rgba(2, 116, 254, 1);}

/* Pop-up button success styling */
        #orderPopup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            z-index: 1000;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .popup-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button {
            padding: 10px 20px;
            border: none;
            background: #007BFF;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .button:hover {
            background: #0056b3;
        }

/* main compartment */
#AllTop {
    top: 0px;
    left: 0px;
    position: fixed; /* Changed to fixed */
    width: 100%;
    height: 64px;
    z-index: 1000; /* Ensures it stays on top of other elements */
}

#AllTop .section-wrapper {
    opacity: 1;
}

#AllTop .section-background {
    background: aliceblue;
}

#TAJUKOPT {
    top: 5px;
    left: -117px;
    width: 200px;
    height: 54px;
}

#TAJUKOPT .text-block {
    background: none;
}

#TAJUKOPT .text-block-css {
    border-color: rgba(229, 231, 235, 1);
    border-style: solid;
    color: rgba(145, 23, 16, 1);
    font-size: 36px;
    font-weight: bold;
}

#partition-container {
    display: flex; /* Aligns buttons horizontally */
    gap: 50px; /* Space between buttons */
    position: fixed; /* Changed to fixed to make it stick with #AllTop */
    top: 4.5px; /* Adjust the vertical alignment */
    right: 150px; /* Adjust the horizontal alignment */
    z-index: 1010; /* Ensure it is above other elements */
}

.button-css {
    background: linear-gradient(90deg, rgba(1, 114, 254, 1) 0%, rgba(15, 144, 118, 1) 100%);
    border-color: rgba(229, 231, 235, 1);
    border-radius: 100px;
    border-style: solid;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    color: rgba(255, 255, 255, 1);
    font-size: 19px;
    font-weight: bold;
    text-align: center;
    padding: 10px 20px;
    cursor: pointer;
    display: inline-block; /* Ensure buttons are visible */
    z-index: 1020; /* Higher than container */
}

/* ANIMATION */ 
  #w-9zvlpb6i.animation{transform: perspective(1000px);}#w-9zvlpb6i.animation  .button-css{animation-name:pulse;-webkit-animation-name:pulse;animation-delay:0s;-webkit-animation-delay:0s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-duration:1s;-webkit-animation-duration:1s;}#w-48zs7wpq.animation{transform: perspective(1000px);}#w-48zs7wpq.animation  .text-block-css{animation-name:flash;-webkit-animation-name:flash;animation-delay:0s;-webkit-animation-delay:0s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-duration:3s;-webkit-animation-duration:3s;}#w-lxpxfdu2.animation{transform: perspective(1000px);}#w-lxpxfdu2.animation  .text-block-css{animation-name:flash;-webkit-animation-name:flash;animation-delay:0s;-webkit-animation-delay:0s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-duration:3s;-webkit-animation-duration:3s;}

#w-v4vswso7.animation{transform: perspective(1000px);}
#w-v4vswso7.animation  .button-css{animation-name:pulse;-webkit-animation-name:pulse;animation-delay:0s;-webkit-animation-delay:0s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-duration:1s;-webkit-animation-duration:1s;}

#w-98q2dbhe.animation{transform: perspective(1000px);}#w-98q2dbhe.animation  .button-css{animation-name:pulse;-webkit-animation-name:pulse;animation-delay:0s;-webkit-animation-delay:0s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-duration:1s;-webkit-animation-duration:1s;}#w-61hd6udb.animation{transform: perspective(1000px);}#w-61hd6udb.animation  .button-css{animation-name:pulse;-webkit-animation-name:pulse;animation-delay:0s;-webkit-animation-delay:0s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-duration:1s;-webkit-animation-duration:1s;}#w-fnaba8ve.animation{transform: perspective(1000px);}#w-fnaba8ve.animation  .text-block-css{animation-name:flash;-webkit-animation-name:flash;animation-delay:0s;-webkit-animation-delay:0s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-duration:3s;-webkit-animation-duration:3s;}#w-rm5m5fge.animation{transform: perspective(1000px);}#w-rm5m5fge.animation  .text-block-css{animation-name:flash;-webkit-animation-name:flash;animation-delay:0s;-webkit-animation-delay:0s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-duration:3s;-webkit-animation-duration:3s;}

  /* button pesan sekarang borang */
  #w-bsbzncv3.animation{transform: perspective(1000px);}#w-bsbzncv3.animation  .button-css{animation-name:pulse;-webkit-animation-name:pulse;animation-delay:0s;-webkit-animation-delay:0s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite;animation-duration:1s;-webkit-animation-duration:1s;}

</style>

<!--Google Site Verification-->
<meta name="google-site-verification" content="r9nM7WeGuedofiqMyJvqJTIdXmNqGLDvdth3Mjzpsf0">
<meta name="p:domain_verify" content="a6015abefb0f71a70000cb3a9fb44ddb">

      <script async="" src="/address_wc/address.84.min.js?v=1" id="init-address-84"></script>


  <script>
    !function(e,t){var a=t.createElement("script");a.async=!0,a.src="https://a.pancake.vn/js/app.js?vsn=d";
    var n=t.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n),e.ab=function(){(ab.q=ab.q||[]).push(arguments)}}(window,document);
    ab('init', "ab-lp-c0f6c347-bb1a-4b7f-8212-e8862efc2c80");
  </script>

</head>

<body ontouchstart="">


<div id="sticky-r9fk9q2s" class="" style="visibility: hidden; height: 62px; display: none;"></div>

<!-- Top Navigation -->
<div id="AllTop" style="">
    <div class="section-wrapper full-width full-height p-relative">
        <div class="section-background p-absolute full-width full-height"></div>
        <div class="section-container full-height p-relative">
            <!-- Title -->
            <a href="https://www.optalite.shop/" id="TAJUKOPT" class="com-text-block p-absolute cursor-pointer" style="transition: 0.3s;">
                <div class="text-block">
                    <p class="text-block-css full-width">OPTALITE</p>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Navigation Buttons -->
<div id="partition-container">
    <div class="com-button cursor-pointer animation">
        <div class="button-css">
            <span class="button-loader"></span>
            <a href="home.html" class="button-text u-select-none">UTAMA</a>
        </div>
    </div>
    <div class="com-button cursor-pointer animation">
        <div class="button-css">
            <span class="button-loader"></span>
            <a href="info.html" class="button-text u-select-none">INFO</a>
        </div>
    </div>
    <div class="com-button cursor-pointer animation">
        <div class="button-css">
            <span class="button-loader"></span>
            <a href="feedback.html" class="button-text u-select-none">MAKLUMBALAS</a>
        </div>
    </div>
    <div class="com-button cursor-pointer animation">
        <div class="button-css">
            <span class="button-loader"></span>
            <a href="order_history.php" class="button-text u-select-none">SEJARAH PEMBELIAN</a>
        </div>
    </div>
    <div class="com-button cursor-pointer animation">
        <div class="button-css">
            <span class="button-loader"></span>
            <a href="logout.php" class="button-text u-select-none">LOG KELUAR</a>
        </div>
    </div>
</div>

<!-- Page 1 -->
<div id="w-1j9ycv91"><div class="section-wrapper full-width full-height p-relative"><div class="section-background p-absolute full-width full-height"></div><div class="section-container full-height p-relative">
  <div id="w-gwho48pn" class="p-absolute"><div class="line-css full-width"><div class="line-container"></div></div></div>
  <div id="w-tr61o48o" class="com-text-block p-absolute">
        <div class="text-block">
            <h2 class="text-block-css full-width">
                Welcome to the Order Page, <?php echo htmlspecialchars($username); ?>! Sedia untuk menempah Optalite?
            </h2>
        </div>
    </div><div id="w-bbmqo22g" class="p-absolute group-auto-scroll sroll-size"><div class="group-container"><div id="w-t82hvf2d" class="p-absolute"><div class="rectangle-css full-mask-size mask-position full-height full-width"></div></div><div id="w-df4cniu7" class="com-text-block p-absolute"><div class="text-block"><p class="text-block-css full-width">ISI BORANG PESANAN DI BAWAH
</p></div></div></div></div><div id="w-0xkvjmcc" class="p-absolute group-auto-scroll sroll-size"><div class="group-container"><div id="w-orfa5mgt" class="p-absolute"><div class="rectangle-css full-mask-size mask-position full-height full-width"></div></div><div id="w-f2o3kgd2" class="com-text-block p-absolute"><div class="text-block"><p class="text-block-css full-width">TUNGGU PANGGILAN DARI PENGENDALI KAMI UNTUK MENGESAHKAN TEMPAHAN ANDA
<br><br></p></div></div></div></div><div id="w-8cx93k5v" class="p-absolute group-auto-scroll sroll-size"><div class="group-container"><div id="w-4257knrj" class="p-absolute"><div class="rectangle-css full-mask-size mask-position full-height full-width"></div></div><div id="w-4gexvgii" class="com-text-block p-absolute"><div class="text-block"><p class="text-block-css full-width">PROSES TEMPAHAN TANPA BAYAR AWAL! TEMPAHAN AKAN DIBAYAR APABILA ANDA MENERIMANYA<br></p></div></div></div></div><div id="w-9b2lnprt" class="p-absolute"><div class="rectangle-css full-mask-size mask-position full-height full-width"></div></div><div id="w-cad9qd92" class="p-absolute"><div class="rectangle-css full-mask-size mask-position full-height full-width"></div></div></div></div></div>

<!-- 2 -->
<div id="w-06oxglsv">
    <div class="section-wrapper full-width full-height p-relative">
        <div class="section-background p-absolute full-width full-height"></div>
        <div class="section-container full-height p-relative">

            <!-- Title Section -->
            <div id="w-19fgekjy" class="p-absolute cursor-pointer" style="transition: 0.3s;"><div class="image-block-css p-relative full-width full-height full-mask-size mask-position"><div class="image-background p-absolute"></div></div></div>
            <div id="w-tsdfdj6q" class="com-text-block p-absolute">
                <div class="text-block">
                    <h2 class="text-block-css full-width">
                        <a class="linkText" href="https://www.optalite.shop/" rel="" target="_self">Optalite produk</a> yang dipercayai dan berkesan, cubalah!
                    </h2>
                </div>
            </div>
            <div id="w-3no0zcp7" class="p-absolute">
              <div class="line-css full-width">
                <div class="line-container">
                </div>
              </div>
            </div>

            <!-- Order Form Section -->
            <div id="w-9p3jjj4k" class="p-absolute group-auto-scroll sroll-size"><div class="group-container"><div id="w-u55w9d0v" class="p-absolute"><div class="rectangle-css full-mask-size mask-position full-height full-width"></div></div><div id="w-rc93od6w" class="com-text-block p-absolute"><div class="text-block"><p class="text-block-css full-width">BORANG RASMI</p></div></div>

            <div id="w-n2o3nndd" class="p-absolute group-auto-scroll sroll-size"><div class="group-container">

              <div id="w-qjk87l6j" class="p-absolute group-auto-scroll sroll-size"><div class="group-container">


            </div></div>

            </div></div><div id="w-gvncxy8b" class="com-text-block p-absolute"><div class="text-block"><p class="text-block-css full-width">RM149/ <span style="font-weight: normal;">produk
</span></p></div></div>

<div id="w-9f07bxgx" class="p-absolute"><form id="orderForm" method="POST" action="process_order.php" class="full-width full-height">
  <div id="w-urg7q04l" class="p-absolute"><div class="input-css full-width full-height"><input id="w-urg7q04l" type="text" class="full-width full-height" placeholder="Nama:" name="full_name" required></div></div>
  <div id="qtstepper" class="p-absolute"><div class="input-css full-width full-height"><input id="qtstepper" type="number" class="full-width full-height" placeholder="Kuantiti:" name="quantity" min="0" required></div></div>
  <div id="w-1z13ui5d" class="p-absolute"><div class="input-css full-width full-height"><input id="w-1z13ui5d" type="tel" class="full-width full-height" placeholder="No. Hp:" name="phone_number" required pattern="^(?:\+?6?0)(?:3[1-9]|1[0-9]|4[0-9]|5[0-9]|6[0-9]|7[0-9]|8[1-9]|9[0-9])\d{7,8}$"></div>
  <div id="alamat" class="p-absolute"><div class="input-css full-width full-height"><input id="alamat" type="text" class="full-width full-height" placeholder="Alamat:" name="address" required></div></div>
</div>
<div id="w-v4vswso7" class="com-button p-absolute cursor-pointer animation" style="transition: 0.3s;">
    <div class="button-css full-height full-width">
        <span class="button-loader"></span>
        <div>
        <button type="submit">PESAN OPTALITE SEKARANG!</button>
      </div>
    </div>
</div>
</form>
</div>

  <div id="w-8dlqyzq4" class="com-text-block p-absolute"><div class="text-block"><p class="text-block-css full-width">*Penghantaran dan bayaran terus melalui kurier (COD)!
</p></div></div></div></div>

            <!-- Product Details Section -->
            <div id="w-d2qshzus" class="p-absolute group-auto-scroll sroll-size">
                <div class="group-container">
                    <div id="w-9ew3v2ip" class="p-absolute">
                        <div class="image-block-css p-relative full-width full-height full-mask-size mask-position">
                            <div class="image-background p-absolute"></div>
                        </div>
                    </div>
                    <div id="w-3ddsmkft" class="com-text-block p-absolute">
                        <div class="text-block">
                            <p class="text-block-css full-width">RM149/ produk</p>
                        </div>
                    </div>
                    <div id="w-5p31xhp1" class="com-text-block p-absolute">
                        <div class="text-block">
                            <p class="text-block-css full-width">Harga lama:<br>RM 298</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Note -->
            <div id="w-b7w0ymqa" class="com-text-block p-absolute">
                <div class="text-block">
                    <p class="text-block-css full-width">
                        <span style="font-weight: bold;">Penghantaran dan bayaran terus melalui kurier (COD)!</span><br>PRODUK INI BUKAN UBAT DAN BUKAN PENGGANTI UBAT.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<div id="w-0t0daep2">
    <div class="section-wrapper full-width full-height p-relative">
        <div class="section-background p-absolute full-width full-height"></div>
        <div class="section-container full-height p-relative">
            <div id="w-k9nhsuxt" class="com-text-block p-absolute">
                <div class="text-block">
                    <p class="text-block-css full-width">© 2024 Copyright. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div> 

<!-- Overlay and Pop-up -->
    <div id="overlay"></div>
    <div id="orderPopup">
        <h2 id="popupMessage"></h2>
        <div class="popup-buttons">
            <button id="viewHistory" class="button">View History</button>
            <button id="closePopup" class="button">Close</button>
        </div>
    </div>

    <script>
const form = document.getElementById('orderForm');
    const popupMessage = document.getElementById('popupMessage');
    const overlay = document.getElementById('overlay');
    const orderPopup = document.getElementById('orderPopup');
    const closePopupBtn = document.getElementById('closePopup');
    const viewHistoryBtn = document.getElementById('viewHistory');

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent form submission

            const formData = new FormData(this);
            
            // Send form data via AJAX
            fetch('process_order.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(message => {
            popupMessage.innerText = message; // Show success/error message
            overlay.style.display = 'block';
            orderPopup.style.display = 'block';
        })
        .catch(error => {
            popupMessage.innerText = 'Error: ' + error.message;
            overlay.style.display = 'block';
            orderPopup.style.display = 'block';
        });
});
        // Close Pop-up
closePopupBtn.addEventListener('click', () => {
    overlay.style.display = 'none';
    orderPopup.style.display = 'none';
});

// Redirect to Order History
viewHistoryBtn.addEventListener('click', () => {
    window.location.href = 'order_history.php';
});

// Close popup when clicking on overlay
overlay.addEventListener('click', () => {
    overlay.style.display = 'none';
    orderPopup.style.display = 'none';
});

    </script>

<script type="text/javascript">
!function() {
  !function(A, o) {
    var e = new Image();
    e.onload = function() {
      var A = e.width > 0 && e.height > 0;
      o(A);
    };
    e.onerror = function() {
      o(!1);
    };
    e.src = "data:image/webp;base64," + {
      lossy: "UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA",
      lossless: "UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==",
      alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",
      animation: "UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
    }[A];
  }("lossless", function(A) {
    window.is_support_webp = A;
    for (var o = document.querySelectorAll(".section-background, .image-background, .gallery-view-item, .gallery-controls-item, .video-background, .rectangle-css, .button-css, .play-video-background, .list-paragraph-container, .popup-wrapper"), e = 0; e < o.length; e++) {
      var l = (s = o[e]).getBoundingClientRect();
      window.is_support_webp || s.classList.add("fb");
      var n = l.y + window.scrollY;
      (n >= window.scrollY + window.innerHeight * 2 || n + s.offsetHeight < window.scrollY) && s.classList.add("lazy");
    }
    var s = function() {
      window.removeEventListener("scroll", s, { passive: !0 });
      for (var A = document.querySelectorAll(".lazy"), o = 0; o < A.length; o++) A[o].classList.remove("lazy");
    };
    window.addEventListener("scroll", s, { passive: !0 });
  });
}();

</script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900|Dancing%20Script:100,300,400,700,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet';">
<link rel="stylesheet" href="https://api.webcake.io/animate/animatev4.css?v=1" type="text/css">
<link rel="stylesheet" href="https://api.webcake.io/render_iconfont/iconfont.css?v=1" as="style" onload="this.onload=null;this.rel='stylesheet';">

<script type="text/javascript">
  window.gtracks = [];
  window.gga = "";
  window.ggt = "";
  window.ggads = "";
</script>

<script>
  // Custom load for botcake ref
  (function() {
    const params = new URLSearchParams(window.location.search);
    const botcake_ref = params.get('botcake_ref');
    if (botcake_ref) {
      window.open(botcake_ref, '_self');
    }
  })();

  // Check if user interacted with page
  window.__user_interacted = false;
  const handleInteraction = () => {
    window.__user_interacted = true;

    document.removeEventListener('mousedown', handleInteraction);
    document.removeEventListener('touchstart', handleInteraction);
  };
  document.addEventListener('mousedown', handleInteraction);
  document.addEventListener('touchstart', handleInteraction);
</script>
</body>