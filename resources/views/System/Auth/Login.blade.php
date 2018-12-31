<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypto, Material Design HTML Template</title>
    
    <!-- load fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons%7CPlayfair+Display:400,400i,700%7CRoboto+Condensed:400,700" rel="stylesheet">
    <!-- Crypto Styles -->
    <link id="crypto-stylesheet" rel="stylesheet" href="assets/css/night-gold-orange.css">
    <!-- page specific CSS -->
    
  </head>

  <body class="mdc-typography mdc-theme--background crypro-theme-gradient">


    
  <div class="crypro-login-container">
    <div class="crypro-login-container__box">
      <div class="crypro-login-container__box-inner">
        <h2 class="crypto-widget__heading mdc-typography--subtitle1 mdc-theme--primary">
          <span class="crypto-widget__heading-text">Sign in</span>
          <span class="crypto-widget__heading-border"></span>
        </h2>
        <form class="crypto-login-form">
          <div class="mdc-text-field mdc-text-field--fullwidth crypto-margin-bottom-big">
            <input type="text" id="username-text-field" class="mdc-text-field__input">
            <label for="username-text-field" class="mdc-floating-label">Username</label>
            <div class="mdc-line-ripple"></div>
          </div>
          <div class="mdc-text-field mdc-text-field--fullwidth ">
            <input required pattern=".{8,}"
              id="pw"
              type="password"
              class="mdc-text-field__input"
              aria-controls="pw-validation-msg"
              autocomplete="current-password" />
            <label for="pw" class="mdc-floating-label">Password</label>
            <div class="mdc-line-ripple"></div>
          </div>
          <p class="mdc-text-field-helper-text mdc-text-field-helper-text--persistent mdc-text-field-helper-text--validation-msg crypto-margin-bottom-big"
              id="pw-validation-msg">
            Must be at least 8 characters long
          </p>
          <div class="crypto-display-flex crypto-display-flex--space-between crypto-margin-bottom-big">
            <div class="mdc-form-field">
              <div class="mdc-checkbox">
                <input type="checkbox" class="mdc-checkbox__native-control" id="remember-me-checkbox"/>
                <div class="mdc-checkbox__background">
                  <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                    <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                  </svg>
                  <div class="mdc-checkbox__mixedmark"></div>
                </div>
              </div>
              <label for="remember-me-checkbox">Remember me</label>
            </div>

            <div class="mdc-form-field">

              <a href="{{ route('getForgotPassword') }}">Forgot pwd?</a>
            </div>
          </div>
          <a href="login.html" class="mdc-button mdc-button--unelevated big-round-corner-button">Log In</a>
        </form>
      </div>
      <p class="mdc-typography--body2 mdc-theme--on-surface"><a href="register.html">Create an account</a> in order to use our services. If you have a facebook account, log into it for this process. Sign in with Facebook or Google</p>
    </div>
  </div>



    <!-- initialise material components js -->
    <script src="/cryptum/demo/assets/js/material-components-web.min.js"></script>
    <script>mdc.autoInit()</script>

    <!-- page specific JS -->
    
  <script src="assets/js/pages/login.js"></script>


  </body>
</html>