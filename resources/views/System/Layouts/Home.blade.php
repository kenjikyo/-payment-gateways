<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    
    <!-- load Google fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons%7CPlayfair+Display:400,400i,700%7CRoboto+Condensed:400,700" rel="stylesheet">
    <!-- Crypto Styles -->
    <link id="crypto-stylesheet" rel="stylesheet" href="assets/css/night-gold-orange.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- page specific CSS -->
    
  </head>

  <body class="mdc-typography pace-on mdc-theme--background crypro-theme-gradient">

    <div class="crypto-loader"></div>


    <div class="crypto-wrapper">

      <div class="crypto-sidenav">
        <nav class="crypto-navigation">
          <a href="{{route('getDashboard')}}" class="crypto-navigation__logo">
            <!-- Image element or even SVG can be used here -->
            <!-- <img src="/cryptum/demo/assets/images/crypto-logo.svg" alt="Crypto" class="crypto-navigation__logo-image">
             -->
             <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg">
              <g fill-rule="nonzero" transform="translate(22 22)">
                <path d="m0 3.64v14.26c9.44-.94 16.96-8.46 17.9-17.9h-14.26c-.62 1.7-1.94 3.02-3.64 3.64z" fill="var(--mdc-theme-primary-800)" />
                <path d="m-22-2c0 10.38 7.9 18.9 18 19.9v-14.26c-2.32-.84-4-3.04-4-5.64s1.68-4.8 4-5.64v-14.26c-10.1 1-18 9.52-18 19.9z" fill="var(--mdc-theme-primary-200)"/>
                <path d="m3.64-4h14.26c-.94-9.44-8.46-16.96-17.9-17.9v14.26c1.7.62 3.02 1.94 3.64 3.64z" fill="var(--mdc-theme-primary-600)"/>
              </g>
            </svg>

          </a>
          <ul class="crypto-navigation__list">
            
              <li class="crypto-navigation__list-item mdc-ripple-surface ">
                <a href="{{route('getDashboard')}}">
                  <i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">timeline</i>
                  
                  <span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
                    Dashboard
                  </span>
                </a>
              </li>
            
              <li class="crypto-navigation__list-item mdc-ripple-surface ">
                <a href="{{ route('getWallet') }}">
                  <i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">account_balance_wallet</i>
                  
                    <span class="crypto-navigation__list-item__badge">2</span>
                  
                  <span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
                    Wallet
                  </span>
                </a>
              </li>
               <li class="crypto-navigation__list-item mdc-ripple-surface ">
                  <a href="{{ route('getTransfer') }}">
                    <img src="assets\images\card2.png" style="width: 18%; margin: auto;">
                    
                    <span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
                      Transfer
                    </span>
                  </a>
                </li>
          
              <li class="crypto-navigation__list-item mdc-ripple-surface crypto-navigation__list-item--active">
                <a href="{{ route('getExchange') }}">
                  <i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">bar_chart</i>
                  
                  <span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
                    Exchange
                  </span>
                </a>
              </li>
            
              <li class="crypto-navigation__list-item mdc-ripple-surface ">
                <a href="{{ route('getProfile') }}">
                  <i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">person</i>
                  
                  <span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
                    Profile
                  </span>
                </a>
              </li>
            
              <li class="crypto-navigation__list-item mdc-ripple-surface ">
                <a href="{{ route('getManage') }}">
                  <i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">category</i>
                  
                  <span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
                    Manage
                  </span>
                </a>
              </li>
            
              <li class="crypto-navigation__list-item mdc-ripple-surface ">
                <a href="{{ route('getLogin') }}">
                  <i class="material-icons crypto-navigation__list-item__icon" aria-hidden="true">power_settings_new</i>
                  
                  <span class="crypto-navigation__list-item__label mdc-theme--on-surface mdc-typography--overline">
                    Logout
                  </span>
                </a>
              </li>
            
          </ul>
        </nav>

      </div>
        @yield('content')
    </div>

   

    <!-- initialise material components js -->
    <script src="assets/js/material-components-web.min.js"></script>
    <script>mdc.autoInit()</script>
    <!-- initialise marquee js -->
    <script src="assets/js/marquee3k.js"></script>
    <script>Marquee3k.init()</script>
    <!-- layout js -->
    <script data-pace-options='{ "ajax": false, "restartOnRequestAfter": false }' src="assets/js/pace.min.js"></script>
    <script src="assets/js/apexcharts.min.js"></script>
    <!-- switcher js -->
    <script src="assets/js/partials/switcher.js"></script>
    <!-- page specific JS -->
    
   <script src="assets/js/pages/reports.js"></script>

    @yield('scrip')
  </body>
</html>
