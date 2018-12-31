@extends('System.Layouts.Home')
@section('content')

<main class="crypto-main">

        <div class="crypto-main__content mdc-theme--text-primary-on-background">
          

          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                <!--<div class="crypto-widget">
                  <h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
                    <span class="crypto-widget__heading-text">BTC Wallet Overview</span>
                    <span class="crypto-widget__heading-border"></span>
                  </h2>
                  <div class="crypto-widget__content">
                    <div class="crypto-wallet-overview">
                      <h1 class="mdc-typography--headline2 crypto-margin-none crypto-text-shadow mdc-theme--primary crypto-wallet-overview__value">0.81215</h1>
                      <span class="crypto-wallet-overview__stats crypto-wallet-overview__stats--up">12.4%</span>
                      <span class="crypto-wallet-overview__market-value">$5316.8</span>
                    </div>
                  </div>
                </div>-->
               
                <div class="crypto-widget">
                  <h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
                    <span class="crypto-widget__heading-text">BTC Market Price</span>
                    <span class="crypto-widget__heading-border"></span>
                  </h2>
                  <div class="crypto-widget__content">
                    <ul class="crypto-price-list">
                      <li class="crypto-price-list__coin">
                        <span class="crypto-price-list__coin-name mdc-typography--overline">BTC</span>
                        <h3 class="crypto-price-list__coin-value mdc-theme--primary mdc-typography--subtitle1">$0.000000</h3>
                        <span class="crypto-price-list__coin-performance mdc-typography--subtitle1 crypto-price-list__coin-performance--up">0.000000%</span>
                        <span class="crypto-price-list__border mdc-theme--primary-bg"></span>
                      </li>
                      <li class="crypto-price-list__coin">
                        <span class="crypto-price-list__coin-name mdc-typography--overline">ETH</span>
                        <h3 class="crypto-price-list__coin-value mdc-theme--primary mdc-typography--subtitle1">$0.000000</h3>
                        <span class="crypto-price-list__coin-performance mdc-typography--subtitle1 crypto-price-list__coin-performance--down">0.000000%</span>
                        <span class="crypto-price-list__border mdc-theme--primary-bg"></span>
                      </li>
                      <li class="crypto-price-list__coin">
                        <span class="crypto-price-list__coin-name mdc-typography--overline">ADC</span>
                        <h3 class="crypto-price-list__coin-value mdc-theme--primary mdc-typography--subtitle1">$0,000000</h3>
                        <span class="crypto-price-list__coin-performance mdc-typography--subtitle1 crypto-price-list__coin-performance--up">0.000000%</span>
                        <span class="crypto-price-list__border mdc-theme--primary-bg"></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell--span-8-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                <div class="crypto-widget">
                  <h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
                    <span class="crypto-widget__heading-text">TRANSFER ADC</span>
                    <span class="crypto-widget__heading-border"></span>
                  </h2>
                  <div class="crypto-widget__content">
                    <div class="settings-form-panels">
                      <div class="crypto-settings-form-panel crypto-settings-form-panel--active">
                        <form class="crypto-general-form">
                          <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-text-field mdc-text-field--transparent crypto-margin-bottom-big crypto-w-100">
                                <input type="text" id="first-name-text-field" class="mdc-text-field__input" value="John">
                                <label for="first-name-text-field" class="mdc-floating-label">Member ADC</label>
                                <div class="mdc-line-ripple"></div>
                              </div>
                            </div>

                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-text-field mdc-text-field--transparent crypto-margin-bottom-big crypto-w-100">
                                <input type="text" id="last-name-text-field" class="mdc-text-field__input" value="0.000">
                                <label for="last-name-text-field" class="mdc-floating-label">Amount ADC</label>
                                <div class="mdc-line-ripple"></div>
                              </div>
                            </div>
                            
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-text-field mdc-text-field--transparent crypto-margin-bottom-big crypto-w-100">
                                <input type="email" id="email-text-field" class="mdc-text-field__input" value="USD">
                                <label for="email-text-field" class="mdc-floating-label">USD</label>
                                <div class="mdc-line-ripple"></div>
                              </div>
                            </div>
                            
                            <div class="mdc-layout-grid__cell--span-6">
                              <a href="profile.html" class="mdc-button mdc-button--unelevated big-round-corner-button">Tranfer</a>
                              <a href="profile.html" class="mdc-button mdc-button--unelevated big-round-corner-button">Cancel</a>
                            </div>
                             
                          </div>
                        </form>
                      </div>
                      <div class="crypto-settings-form-panel">
                        <form class="crypto-general-form">
                          <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-text-field mdc-text-field--transparent crypto-margin-bottom-big crypto-w-100">
                                <input type="email" id="alt-email-text-field" class="mdc-text-field__input">
                                <label for="alt-email-text-field" class="mdc-floating-label">Alternate Email</label>
                                <div class="mdc-line-ripple"></div>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-text-field mdc-text-field--transparent crypto-margin-bottom-big mdc-text-field--fullwidth">
                                <input type="tel" id="tel-text-field" class="mdc-text-field__input">
                                <label for="tel-text-field" class="mdc-floating-label">Phone</label>
                                <div class="mdc-line-ripple"></div>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-text-field mdc-text-field--transparent crypto-margin-bottom-big crypto-w-100">
                                <input required pattern=".{8,}"
                                id="pw"
                                type="password"
                                class="mdc-text-field__input"
                                autocomplete="current-password" />
                                <label for="pw" class="mdc-floating-label">Password</label>
                                <div class="mdc-line-ripple"></div>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-text-field mdc-text-field--transparent crypto-margin-bottom-big crypto-w-100">
                                <input required pattern=".{8,}"
                                  id="confirm-pw"
                                  type="password"
                                  class="mdc-text-field__input"
                                  autocomplete="current-password" />
                                <label for="confirm-pw" class="mdc-floating-label">Confirm Password</label>
                                <div class="mdc-line-ripple"></div>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                              <a href="profile.html" class="mdc-button mdc-button--unelevated big-round-corner-button">Submit</a>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="crypto-settings-form-panel">
                        <form class="crypto-general-form">
                          <div class="mdc-layout-grid__inner crypto-margin-bottom-big">
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-form-field">
                                <div class="mdc-checkbox">
                                  <input type="checkbox" class="mdc-checkbox__native-control" id="schedules-checkbox"/>
                                  <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                      <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                  </div>
                                </div>
                                <label for="schedules-checkbox">Send me daily reports</label>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--align-middle">
                              <div class="switch-wrapper">
                                <div class="mdc-switch crypto-switch-selector">
                                  <div class="mdc-switch__track"></div>
                                  <div class="mdc-switch__thumb-underlay">
                                    <div class="mdc-switch__thumb">
                                      <input type="checkbox" id="avatar-switch" class="mdc-switch__native-control" role="switch" aria-checked="false">
                                    </div>
                                  </div>
                                </div>
                                <label for="avatar-switch">Display avatars</label>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-form-field">
                                <div class="mdc-checkbox">
                                  <input type="checkbox" class="mdc-checkbox__native-control" id="devices-checkbox"/>
                                  <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                      <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                  </div>
                                </div>
                                <label for="devices-checkbox">Keep all mobile devices disconnected</label>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--align-middle">
                              <div class="switch-wrapper">
                                <div class="mdc-switch crypto-switch-selector">
                                  <div class="mdc-switch__track"></div>
                                  <div class="mdc-switch__thumb-underlay">
                                    <div class="mdc-switch__thumb">
                                      <input type="checkbox" id="personal-switch" class="mdc-switch__native-control" role="switch" aria-checked="false">
                                    </div>
                                  </div>
                                </div>
                                <label for="personal-switch">Hide personal data</label>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-form-field">
                                <div class="mdc-checkbox">
                                  <input type="checkbox" class="mdc-checkbox__native-control" id="authentication-checkbox"/>
                                  <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                      <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                  </div>
                                </div>
                                <label for="authentication-checkbox">Enable two-factor authentication</label>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--align-middle">
                              <div class="mdc-form-field">
                                <div class="mdc-switch crypto-switch-selector">
                                  <div class="mdc-switch__track"></div>
                                  <div class="mdc-switch__thumb-underlay">
                                    <div class="mdc-switch__thumb">
                                      <input type="checkbox" id="notification-switch" class="mdc-switch__native-control" role="switch" aria-checked="false">
                                    </div>
                                  </div>
                                </div>
                                <label for="notification-switch">Silence all notifications</label>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                              <a href="profile.html" class="mdc-button mdc-button--unelevated big-round-corner-button">Save</a>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="crypto-settings-form-panel">
                        <form class="crypto-general-form">
                          <div class="mdc-layout-grid__inner crypto-margin-bottom-big">
                            <div class="mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--align-middle">
                              <div class="mdc-form-field">
                                <div class="mdc-checkbox">
                                  <input type="checkbox" class="mdc-checkbox__native-control" id="transactions-checkbox"/>
                                  <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                      <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                  </div>
                                </div>
                                <label for="transactions-checkbox">Disable all transactions</label>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="crypto-display-flex mdc-layout-grid__cell--align-middle">
                                <div class="mdc-select mdc-select-box crypto-currency-select" id="currency-select">
                                  <select class="mdc-select__native-control">
                                    <option value="usd" selected>USD</option>
                                    <option value="euro">EUR</option>
                                    <option value="sterling">Pound</option>
                                  </select>
                                  <label class="mdc-floating-label mdc-floating-label--float-above">Currency for transactions</label>
                                  <div class="mdc-line-ripple"></div>
                                </div>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                              <div class="mdc-form-field">
                                <div class="mdc-checkbox">
                                  <input type="checkbox" class="mdc-checkbox__native-control" id="delete-transactions-checkbox"/>
                                  <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                      <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                  </div>
                                </div>
                                <label for="delete-transactions-checkbox">Delete transactions older than 6 months</label>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--align-middle">
                              <div class="mdc-form-field">
                                <div class="mdc-switch crypto-switch-selector">
                                  <div class="mdc-switch__track"></div>
                                  <div class="mdc-switch__thumb-underlay">
                                    <div class="mdc-switch__thumb">
                                      <input type="checkbox" id="yolo-switch" class="mdc-switch__native-control" role="switch" aria-checked="false">
                                    </div>
                                  </div>
                                </div>
                                <label for="yolo-switch">Silence all notifications</label>
                              </div>
                            </div>
                            <div class="mdc-layout-grid__cell--span-6">
                               <a href="profile.html" class="mdc-button mdc-button--unelevated big-round-corner-button">Save</a>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>

      </main>
@endsection('content')


   