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
          <span class="crypto-widget__heading-text">Reset Password</span>
          <span class="crypto-widget__heading-border"></span>
        </h2>
        <form class="crypto-login-form">
          <div class="mdc-text-field mdc-text-field--fullwidth crypto-margin-bottom-big">
            <input required
              id="email"
              type="email"
              class="mdc-text-field__input"/>
            <label for="email" class="mdc-floating-label">Email</label>
            <div class="mdc-line-ripple"></div>
          </div>
          <div class="crypto-display-flex crypto-display-flex--space-between">
            <div class="mdc-form-field">
              <a href="index.html" class="mdc-button mdc-button--unelevated big-round-corner-button">Reset</a>
            </div>
            <div class="mdc-form-field">
              <a href="{{ route('getDashboard')}}">Back to login</a>
            </div>
          </div>
        </form>
      </div>

      <p class="mdc-typography--body2 mdc-theme--on-surface">Enter your Email and instructions will be sent to you</p>
    </div>
  </div>



    <!-- initialise material components js -->
    <script src="/cryptum/demo/assets/js/material-components-web.min.js"></script>
    <script>mdc.autoInit()</script>

    <!-- page specific JS -->
    
  <script src="assets/js/pages/forgot-password.js"></script>


  </body>
</html>
