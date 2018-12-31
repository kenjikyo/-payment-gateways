@extends('System.Layouts.Home')
@section('content')
 <main class="crypto-main">

        <div class="crypto-main__content mdc-theme--text-primary-on-background">
              

            <div class="mdc-layout-grid">
              <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                  <div class="crypto-widget">
                    <h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
                      <span class="crypto-widget__heading-text">Account overview</span>
                      <span class="crypto-widget__heading-border"></span>
                    </h2>
                    <div class="crypto-widget__content">
                      <div class="crypto-wallet-overview">
                        <h1 class="mdc-typography--headline2 crypto-margin-none crypto-display-flex mdc-theme--primary crypto-text-shadow crypto-wallet-overview__balance">0.0000</h1>

                        <span class="crypto-wallet-overview__market-value mdc-theme--primary">USD</span>
                      </div>
                    </div>
                  </div>
                  <div class="crypto-widget">
                    <h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
                      <span class="crypto-widget__heading-text">Wallets Overview</span>
                      <span class="crypto-widget__heading-border"></span>
                    </h2>
                    <div class="crypto-widget__content">
                      <ul class="crypto-border-list">
                        <li class="crypto-border-list__item crypto-border-list__item--large crypto-wallet ">
                          <!-- BTC WALLET -->
                          <a href="wallet.html" class="mdc-theme--on-surface">
                            <h4 class="crypto-wallet__name mdc-typography--overline">BTC</h4>
                            <h2 class="crypto-wallet__value mdc-typography--headline3">0.000000</h2>
                            <span class="crypto-wallet__stats crypto-wallet__stats--up mdc-typography--caption">0.00%</span>
                            <span class="crypto-wallet__market crypto-wallet__market--bitcoin mdc-typography--caption"></span>
                            <span class="crypto-coin__border mdc-theme--primary-bg"></span>
                            <span class="crypto-border-list__border-hover mdc-theme--secondary-bg"></span>
                          </a>
                        </li>
                        <li class="crypto-border-list__item crypto-border-list__item--large crypto-wallet ">
                          <!-- BTC WALLET -->
                          <a href="wallet.html" class="mdc-theme--on-surface">
                            <h4 class="crypto-wallet__name mdc-typography--overline">ETH</h4>
                            <h2 class="crypto-wallet__value mdc-typography--headline3">0.000000</h2>
                            <span class="crypto-wallet__stats crypto-wallet__stats--up mdc-typography--caption">0.00%</span>
                            <span class="crypto-wallet__market crypto-wallet__market--ethereum mdc-typography--caption"></span>
                            <span class="crypto-coin__border mdc-theme--primary-600-bg"></span>
                            <span class="crypto-border-list__border-hover mdc-theme--secondary-bg"></span>
                          </a>
                        </li>
                        <li class="crypto-border-list__item crypto-border-list__item--large crypto-wallet ">
                          <!-- BTC WALLET -->
                          <a href="wallet.html" class="mdc-theme--on-surface">
                            <h4 class="crypto-wallet__name mdc-typography--overline">ADC</h4>
                            <h2 class="crypto-wallet__value mdc-typography--headline3">0.000000</h2>
                            <span class="crypto-wallet__stats crypto-wallet__stats--up  mdc-typography--caption">0.00%</span>
                            <span class="crypto-wallet__market crypto-wallet__market--litecoin mdc-typography--caption"></span>
                            <span class="crypto-coin__border mdc-theme--primary-800-bg"></span>
                            <span class="crypto-border-list__border-hover mdc-theme--secondary-bg"></span>
                          </a>
                        </li>
                        <li class="crypto-wallet crypto-wallet--new">
                          <a href="#" class="crypto-wallet crypto-wallet--new mdc-theme--on-surface">
                            <h4 class="crypto-wallet__name mdc-typography--overline">+ ADD NEW</h4>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="crypto-widget">
                    <h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
                      <span class="crypto-widget__heading-text">Most Invested</span>
                      <span class="crypto-widget__heading-border"></span>
                    </h2>
                    <div class="crypto-widget__content">
                      <div class="crypto-wallet-overview">
                        <h1 class="mdc-typography--headline2 crypto-margin-none crypto-display-flex mdc-theme--primary crypto-text-shadow">0.000000<span class="mdc-typography--subtitle1">$</span></h1>

                        <span class="crypto-wallet-overview__market-value mdc-theme--primary">BTC</span>
                      </div>
                      <div id="chart-most-invested"></div>
                    </div>
                  </div>
                </div>
                <div class="mdc-layout-grid__cell--span-9-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">
                  <div class="crypto-widget">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-6-tablet mdc-layout-grid__cell--span-3-phone">
                        <h2 class="crypto-widget__heading mdc-typography--overline mdc-theme--primary">
                          <span class="crypto-widget__heading-text">Transactions List</span>
                          <span class="crypto-widget__heading-border"></span>
                        </h2>
                      </div>
                      <div class="mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-2-tablet mdc-layout-grid__cell--span-1-phone crypto-widget__actions">
                        <div id="toolbar" class="toolbar mdc-menu-surface--anchor">
                          <button class="mdc-button" id="menu-button">
                            <i class="material-icons mdc-button__icon" aria-hidden="true">more_vert</i>
                          </button>
                          <div class="mdc-menu mdc-menu-surface" id="widget-menu">
                              <ul class="mdc-menu__items mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                <li class="mdc-list-item" role="menuitem" tabindex="0">WEEK</li>
                                <li class="mdc-list-item" role="menuitem" tabindex="0">MONTH</li>
                                <li class="mdc-list-item" role="menuitem" tabindex="0">YEAR</li>
                              </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="crypto-widget__content crypto-overflow-x-auto">
                      <table class="mdl-data-table mdc-typography--overline">
                        <thead class="crypto-transactions-list__labels">
                          <tr>
                            <th></th>
                            <th class="mdl-data-table__cell--non-numeric">Date</th>
                            <th class="mdl-data-table__cell--non-numeric">Description</th>
                            <th class="mdl-data-table__cell--non-numeric">To/From</th>
                            <th>Amount</th>
                            <th class="mdl-data-table__cell--non-numeric">Status</th>
                            <th class="mdl-data-table__cell--non-numeric"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="crypto-transactions-list__item">
                            <td class="mdl-data-table__cell--icon"><i class="fab fa-bitcoin"></i></td>
                            <td class="mdl-data-table__cell--non-numeric">28 JUN 2018, 17:21</td>
                            <td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
                            <td class="mdl-data-table__cell--non-numeric">E9873HJKDFJSFHA</td>
                            <td>0.061BTC <span class="crypto-transactions-list__item-price">($445)</span></td>
                            <td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--pending">Pending</td>
                            <td><a href="#" class="crypto-transactions-list__item-toggle"><i class="material-icons">chevron_right</i></a></td>
                          </tr>
                          <tr class="crypto-transactions-list__item--details">
                            <td colspan="7">
                              <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Version no <span class="mdc-list-item__meta">1</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Flag <span class="mdc-list-item__meta">0001</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Lock time <span class="mdc-list-item__meta">135180102155</span>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Witnesses <span class="mdc-list-item__meta">2</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        In-counter <span class="mdc-list-item__meta">177165211146174175</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Out-counter <span class="mdc-list-item__meta">111232135106240239</span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                        <tbody class="crypto-transactions-list__separator">
                          <tr><td colspan="7"></td></tr></tbody>
                        <tbody>
                          <tr class="crypto-transactions-list__item">
                            <td class="mdl-data-table__cell--icon"><i class="fab fa-ethereum"></i></td>
                            <td class="mdl-data-table__cell--non-numeric">28 MAR 2018, 18:22</td>
                            <td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
                            <td class="mdl-data-table__cell--non-numeric">E9873HJKDFAWRZ</td>
                            <td>0.061BTC <span class="crypto-transactions-list__item-price">($455)</span></td>
                            <td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
                            <td><a href="#" class="crypto-transactions-list__item-toggle"><i class="material-icons">chevron_right</i></a></td>
                          </tr>
                          <tr class="crypto-transactions-list__item--details">
                            <td colspan="7">
                              <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Version no <span class="mdc-list-item__meta">1</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Flag <span class="mdc-list-item__meta">0001</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Lock time <span class="mdc-list-item__meta">135180102155</span>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Witnesses <span class="mdc-list-item__meta">2</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        In-counter <span class="mdc-list-item__meta">177165211146174175</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Out-counter <span class="mdc-list-item__meta">111232135106240239</span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                        <tbody class="crypto-transactions-list__separator">
                          <tr><td colspan="7"></td></tr></tbody>
                        <tbody>
                          <tr class="crypto-transactions-list__item">
                            <td class="mdl-data-table__cell--icon"><i class="fab fa-viacoin"></i></td>
                            <td class="mdl-data-table__cell--non-numeric">28 JAN 2018, 14:59</td>
                            <td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
                            <td class="mdl-data-table__cell--non-numeric">E9873HJKDFFIKGQ</td>
                            <td>0.061BTC <span class="crypto-transactions-list__item-price">($423)</span></td>
                            <td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
                            <td><a href="#" class="crypto-transactions-list__item-toggle"><i class="material-icons">chevron_right</i></a></td>
                          </tr>
                          <tr class="crypto-transactions-list__item--details">
                            <td colspan="7">
                              <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Version no <span class="mdc-list-item__meta">1</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Flag <span class="mdc-list-item__meta">0001</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Lock time <span class="mdc-list-item__meta">135180102155</span>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Witnesses <span class="mdc-list-item__meta">2</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        In-counter <span class="mdc-list-item__meta">177165211146174175</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Out-counter <span class="mdc-list-item__meta">111232135106240239</span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                        <tbody class="crypto-transactions-list__separator">
                          <tr><td colspan="7"></td></tr></tbody>
                        <tbody>
                          <tr class="crypto-transactions-list__item">
                            <td class="mdl-data-table__cell--icon"><i class="fab fa-monero"></i></td>
                            <td class="mdl-data-table__cell--non-numeric">24 DEC 2017, 14:41</td>
                            <td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
                            <td class="mdl-data-table__cell--non-numeric">E9873HJKDFPWRE</td>
                            <td>0.061BTC <span class="crypto-transactions-list__item-price">($411)</span></td>
                            <td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
                            <td><a href="#" class="crypto-transactions-list__item-toggle"><i class="material-icons">chevron_right</i></a></td>
                          </tr>
                          <tr class="crypto-transactions-list__item--details">
                            <td colspan="7">
                              <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Version no <span class="mdc-list-item__meta">1</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Flag <span class="mdc-list-item__meta">0001</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Lock time <span class="mdc-list-item__meta">135180102155</span>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Witnesses <span class="mdc-list-item__meta">2</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        In-counter <span class="mdc-list-item__meta">177165211146174175</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Out-counter <span class="mdc-list-item__meta">111232135106240239</span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                        <tbody class="crypto-transactions-list__separator">
                          <tr><td colspan="7"></td></tr></tbody>
                        <tbody>
                          <tr class="crypto-transactions-list__item">
                            <td class="mdl-data-table__cell--icon"><i class="fab fa-ethereum"></i></td>
                            <td class="mdl-data-table__cell--non-numeric">21 DEC 2017, 15:43</td>
                            <td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
                            <td class="mdl-data-table__cell--non-numeric">E9873HJKDFHFDE</td>
                            <td>0.000000BTC <span class="crypto-transactions-list__item-price">($0000)</span></td>
                            <td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
                            <td><a href="#" class="crypto-transactions-list__item-toggle"><i class="material-icons">chevron_right</i></a></td>
                          </tr>
                          <tr class="crypto-transactions-list__item--details">
                            <td colspan="7">
                              <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Version no <span class="mdc-list-item__meta">1</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Flag <span class="mdc-list-item__meta">0001</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Lock time <span class="mdc-list-item__meta">135180102155</span>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Witnesses <span class="mdc-list-item__meta">2</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        In-counter <span class="mdc-list-item__meta">177165211146174175</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Out-counter <span class="mdc-list-item__meta">111232135106240239</span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                        <tbody class="crypto-transactions-list__separator">
                          <tr><td colspan="7"></td></tr></tbody>
                        <tbody>
                          <tr class="crypto-transactions-list__item">
                            <td class="mdl-data-table__cell--icon"><i class="fab fa-bitcoin"></i></td>
                            <td class="mdl-data-table__cell--non-numeric">20 DEC 2017, 13:47</td>
                            <td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
                            <td class="mdl-data-table__cell--non-numeric">E9873HJKDFMFGV</td>
                            <td>0.061BTC <span class="crypto-transactions-list__item-price">($478)</span></td>
                            <td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--rejected">Rejected</td>
                            <td><a href="#" class="crypto-transactions-list__item-toggle"><i class="material-icons">chevron_right</i></a></td>
                          </tr>
                          <tr class="crypto-transactions-list__item--details">
                            <td colspan="7">
                              <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Version no <span class="mdc-list-item__meta">1</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Flag <span class="mdc-list-item__meta">0001</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Lock time <span class="mdc-list-item__meta">135180102155</span>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Witnesses <span class="mdc-list-item__meta">2</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        In-counter <span class="mdc-list-item__meta">177165211146174175</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Out-counter <span class="mdc-list-item__meta">111232135106240239</span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                        <tbody class="crypto-transactions-list__separator">
                          <tr><td colspan="7"></td></tr></tbody>
                        <tbody>
                          <tr class="crypto-transactions-list__item">
                            <td class="mdl-data-table__cell--icon"><i class="fas fa-euro-sign"></i></td>
                            <td class="mdl-data-table__cell--non-numeric">28 NOV 2017, 11:31</td>
                            <td class="mdl-data-table__cell--non-numeric">Payment to OX LLC</td>
                            <td class="mdl-data-table__cell--non-numeric">E9873HJKDFWMSO</td>
                            <td>0.061BTC <span class="crypto-transactions-list__item-price">($445)</span></td>
                            <td class="mdl-data-table__cell--non-numeric crypto-transactions-list__status crypto-transactions-list__status--confirmed">Confirmed</td>
                            <td><a href="#" class="crypto-transactions-list__item-toggle"><i class="material-icons">chevron_right</i></a></td>
                          </tr>
                          <tr class="crypto-transactions-list__item--details">
                            <td colspan="7">
                              <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Version no <span class="mdc-list-item__meta">1</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Flag <span class="mdc-list-item__meta">0001</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Lock time <span class="mdc-list-item__meta">135180102155</span>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">
                                    <ul class="mdc-list mdc-list--dense demo-list">
                                      <li class="mdc-list-item">
                                        Witnesses <span class="mdc-list-item__meta">2</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        In-counter <span class="mdc-list-item__meta">177165211146174175</span>
                                      </li>
                                      <li class="mdc-list-item">
                                        Out-counter <span class="mdc-list-item__meta">111232135106240239</span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- cryto-widget end -->
                    <div class="mdc-snackbar mdc-elevation--z24"
                        aria-live="assertive"
                        aria-atomic="true"
                        aria-hidden="true">
                      <div class="mdc-snackbar__text"></div>
                      <div class="mdc-snackbar__action-wrapper">
                        <button type="button" class="mdc-snackbar__action-button"></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <aside id="my-mdc-dialog"
              class="mdc-dialog"
              aria-labelledby="my-mdc-dialog-label"
              aria-describedby="my-mdc-dialog-description">
              <div class="mdc-dialog__surface">
                <header class="mdc-dialog__header">
                  <h2 id="my-mdc-dialog-label" class="mdc-dialog__header__title">
                    Add A New Wallet
                  </h2>
                </header>
                <div id="my-mdc-dialog-description" class="mdc-dialog__body">
                  <div class="crypto-display-flex crypto-display-flex--end crypto-margin-bottom-big">
                    <div class="mdc-text-field crypto-display-flex__flexed mdc-text-field--fullwidth">
                      <input type="text" id="wallet-name" class="mdc-text-field__input" placeholder="Wallet Name">
                      <div class="mdc-line-ripple"></div>
                    </div>
                    <div class="mdc-select mdc-select-box crypto-coin-select" id="coin-select">
                      <select class="mdc-select__native-control">
                        <option value="btc" selected>BTC</option>
                        <option value="ghs">GHS</option>
                        <option value="bch">BCH</option>
                        <option value="btg">BTG</option>
                        <option value="eth">ETH</option>
                        <option value="dash">DASH</option>
                      </select>
                      <div class="mdc-line-ripple"></div>
                    </div>
                  </div>
                </div>
                <footer class="mdc-dialog__footer">
                  <button type="button" class="mdc-button mdc-dialog__footer__button mdc-dialog__footer__button--cancel">Cancel</button>
                  <button type="button" class="mdc-button mdc-dialog__footer__button mdc-dialog__footer__button--accept mdc-dialog__action">Add</button>
                </footer>
              </div>
              <div class="mdc-dialog__backdrop"></div>
            </aside>

        </div>

</main>
@endsection