  <!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="/assets/css/vendors.css">
  <link rel="stylesheet" href="/assets/css/main.css">

  <title>Lushy Days</title>
</head>

<body>
  <div class="preloader js-preloader d-none">
    <div class="preloader__wrap">
      <div class="preloader__icon">
        <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1_41)">
            <path d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z" fill="#3554D1" />
          </g>

          <defs>
            <clipPath id="clip0_1_41">
              <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
            </clipPath>
          </defs>
        </svg>
      </div>
    </div>

    <div class="preloader__title">LushyDays</div>
  </div>

  <main>

<?php include 'includes/header2.php';?>


    <section class="pt-40 pb-40 bg-light-2">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="text-center">
              <h1 class="text-30 fw-600">Find Your Dream Luxury Hotel</h1>
            </div>

            <div class="mainSearch -col-3-big bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30">
              <div class="button-grid items-center">

                <div class="searchMenu-loc pl-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                  <div data-x-dd-click="searchMenu-loc">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                    <div class="text-15 text-light-1 ls-2 lh-16">
                      <input autocomplete="off" type="search" placeholder="London" class="js-search js-dd-focus" />
                    </div>
                  </div>


                  <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                    <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                      <div class="y-gap-5 js-results">

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                              </div>
                            </div>
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>


                <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el">

                  <div data-x-dd-click="searchMenu-date">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                    <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                      <span class="js-first-date">Wed 2 Mar</span>
                      -
                      <span class="js-last-date">Fri 11 Apr</span>
                    </div>
                  </div>


                  <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                    <div class="bg-white px-30 py-30 rounded-4">
                      <div class="elCalendar js-calendar-el-calendar"></div>
                    </div>
                  </div>
                </div>


                <div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

                  <div data-x-dd-click="searchMenu-guests">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                    <div class="text-15 text-light-1 ls-2 lh-16">
                      <span class="js-count-adult">2</span> adults
                      -
                      <span class="js-count-child">1</span> childeren
                      -
                      <span class="js-count-room">1</span> room
                    </div>
                  </div>


                  <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                    <div class="bg-white px-30 py-30 rounded-4">
                      <div class="row y-gap-10 justify-between items-center">
                        <div class="col-auto">
                          <div class="text-15 fw-500">Adults</div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">2</div>
                            </div>

                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <div class="border-top-light mt-24 mb-24"></div>

                      <div class="row y-gap-10 justify-between items-center">
                        <div class="col-auto">
                          <div class="text-15 lh-12 fw-500">Children</div>
                          <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">1</div>
                            </div>

                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <div class="border-top-light mt-24 mb-24"></div>

                      <div class="row y-gap-10 justify-between items-center">
                        <div class="col-auto">
                          <div class="text-15 fw-500">Rooms</div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">1</div>
                            </div>

                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="button-item">
                  <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-4 bg-blue-1 text-white">
                    <i class="icon-search text-20 mr-10"></i>
                    Search
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
      <div class="container">
        <div class="row y-gap-30">
          <div class="col-xl-3 col-lg-4 lg:d-none">
            <aside class="sidebar y-gap-40">
            
              <div class="sidebar__item -no-border">
                <h5 class="text-18 fw-500 mb-10">Search by property name</h5>
                <div class="single-field relative d-flex items-center py-10">
                  <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="e.g. Best Western">
                  <button class="absolute d-flex items-center h-full">
                    <i class="icon-search text-20 px-15 text-dark-1"></i>
                  </button>
                </div>
              </div>

              <div class="sidebar__item">
                <h5 class="text-18 fw-500 mb-10">Deals</h5>
                <div class="sidebar-checkbox">

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                      <div class="d-flex items-center">
                        <div class="form-checkbox">
                          <input type="checkbox">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>
                        <div class="text-15 ml-10">Free cancellation</div>
                      </div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                      <div class="d-flex items-center">
                        <div class="form-checkbox">
                          <input type="checkbox">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>
                        <div class="text-15 ml-10">Reserve now, pay at stay </div>
                      </div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                      <div class="d-flex items-center">
                        <div class="form-checkbox">
                          <input type="checkbox">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>
                        <div class="text-15 ml-10">Properties with special offers</div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="sidebar__item">
                <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
                <div class="sidebar-checkbox">

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                      <div class="d-flex items-center">
                        <div class="form-checkbox">
                          <input type="checkbox">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>
                        <div class="text-15 ml-10">Breakfast Included</div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">92</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                      <div class="d-flex items-center">
                        <div class="form-checkbox">
                          <input type="checkbox">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>
                        <div class="text-15 ml-10">Romantic</div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">45</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                      <div class="d-flex items-center">
                        <div class="form-checkbox">
                          <input type="checkbox">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>
                        <div class="text-15 ml-10">Airport Transfer</div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">21</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                      <div class="d-flex items-center">
                        <div class="form-checkbox">
                          <input type="checkbox">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>
                        <div class="text-15 ml-10">WiFi Included </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">78</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                      <div class="d-flex items-center">
                        <div class="form-checkbox">
                          <input type="checkbox">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>
                        <div class="text-15 ml-10">5 Star</div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">679</div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="sidebar__item pb-30">
                <h5 class="text-18 fw-500 mb-10">Nightly Price</h5>
                <div class="row x-gap-10 y-gap-30">
                  <div class="col-12">
                    <div class="js-price-rangeSlider">
                      <div class="text-14 fw-500"></div>

                      <div class="d-flex justify-between mb-20">
                        <div class="text-15 text-dark-1">
                          <span class="js-lower"></span>
                          -
                          <span class="js-upper"></span>
                        </div>
                      </div>

                      <div class="px-5">
                        <div class="js-slider"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sidebar__item">
                <h5 class="text-18 fw-500 mb-10">Amenities</h5>
                <div class="sidebar-checkbox">

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Breakfast Included</div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">92</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">WiFi Included </div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">45</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Pool</div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">21</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Restaurant </div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">78</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Air conditioning </div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">679</div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="sidebar__item">
                <h5 class="text-18 fw-500 mb-10">Star Rating</h5>
                <div class="row x-gap-10 y-gap-10 pt-10">

                  <div class="col-auto">
                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">1</a>
                  </div>

                  <div class="col-auto">
                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">2</a>
                  </div>

                  <div class="col-auto">
                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">3</a>
                  </div>

                  <div class="col-auto">
                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">4</a>
                  </div>

                  <div class="col-auto">
                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">5</a>
                  </div>

                </div>
              </div>

              <div class="sidebar__item">
                <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
                <div class="sidebar-checkbox">

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="form-radio d-flex items-center ">
                        <div class="radio">
                          <input type="radio" name="name">
                          <div class="radio__mark">
                            <div class="radio__icon"></div>
                          </div>
                        </div>
                        <div class="ml-10">Any</div>
                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">92</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="form-radio d-flex items-center ">
                        <div class="radio">
                          <input type="radio" name="name">
                          <div class="radio__mark">
                            <div class="radio__icon"></div>
                          </div>
                        </div>
                        <div class="ml-10">Wonderful 4.5+</div>
                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">45</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="form-radio d-flex items-center ">
                        <div class="radio">
                          <input type="radio" name="name">
                          <div class="radio__mark">
                            <div class="radio__icon"></div>
                          </div>
                        </div>
                        <div class="ml-10">Very good 4+</div>
                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">21</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="form-radio d-flex items-center ">
                        <div class="radio">
                          <input type="radio" name="name">
                          <div class="radio__mark">
                            <div class="radio__icon"></div>
                          </div>
                        </div>
                        <div class="ml-10">Good 3.5+ </div>
                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">78</div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="sidebar__item">
                <h5 class="text-18 fw-500 mb-10">Style</h5>
                <div class="sidebar-checkbox">

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Budget</div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">92</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Mid-range </div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">45</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Luxury</div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">21</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Family-friendly </div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">78</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Business </div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">679</div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="sidebar__item">
                <h5 class="text-18 fw-500 mb-10">Neighborhood</h5>
                <div class="sidebar-checkbox">

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Central London</div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">92</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Guests&#39; favourite area </div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">45</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Westminster Borough</div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">21</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Kensington and Chelsea </div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">78</div>
                    </div>
                  </div>

                  <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">

                      <div class="d-flex items-center">
                        <div class="form-checkbox ">
                          <input type="checkbox" name="name">
                          <div class="form-checkbox__mark">
                            <div class="form-checkbox__icon icon-check"></div>
                          </div>
                        </div>

                        <div class="text-15 ml-10">Oxford Street </div>

                      </div>

                    </div>

                    <div class="col-auto">
                      <div class="text-15 text-light-1">679</div>
                    </div>
                  </div>

                </div>
              </div>
            </aside>
          </div>

          <div class="col-xl-9 col-lg-8">
            <div class="row y-gap-10 items-center justify-between">
              <div class="col-auto">
                <div class="text-18"><span class="fw-500">3,269 properties</span> in Europe</div>
              </div>

              <div class="col-auto">
                <div class="row x-gap-20 y-gap-20">
                  <div class="col-auto">
                    <button class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                      <i class="icon-up-down text-14 mr-10"></i>
                      Top picks for your search
                    </button>
                  </div>

                  <div class="col-auto d-none lg:d-block">
                    <button data-x-click="filterPopup" class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                      <i class="icon-up-down text-14 mr-10"></i>
                      Filter
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="filterPopup bg-white" data-x="filterPopup" data-x-toggle="-is-active">
              <aside class="sidebar -mobile-filter">
                <div data-x-click="filterPopup" class="-icon-close">
                  <i class="icon-close"></i>
                </div>

                <div class="sidebar__item">
                  <div class="flex-center ratio ratio-15:9 js-lazy" data-bg="img/general/map.png">
                    <button class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute" data-x-click="mapFilter">
                      <i class="icon-destination text-22 mr-10"></i>
                      Show on map
                    </button>
                  </div>
                </div>

                <div class="sidebar__item">
                  <h5 class="text-18 fw-500 mb-10">Search by property name</h5>
                  <div class="single-field relative d-flex items-center py-10">
                    <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="e.g. Best Western">
                    <button class="absolute d-flex items-center h-full">
                      <i class="icon-search text-20 px-15 text-dark-1"></i>
                    </button>
                  </div>
                </div>

                <div class="sidebar__item">
                  <h5 class="text-18 fw-500 mb-10">Deals</h5>
                  <div class="sidebar-checkbox">

                    <div class="row items-center justify-between">
                      <div class="col-auto">
                        <div class="d-flex items-center">
                          <div class="form-checkbox">
                            <input type="checkbox">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>
                          <div class="text-15 ml-10">Free cancellation</div>
                        </div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">
                        <div class="d-flex items-center">
                          <div class="form-checkbox">
                            <input type="checkbox">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>
                          <div class="text-15 ml-10">Reserve now, pay at stay </div>
                        </div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">
                        <div class="d-flex items-center">
                          <div class="form-checkbox">
                            <input type="checkbox">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>
                          <div class="text-15 ml-10">Properties with special offers</div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="sidebar__item">
                  <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
                  <div class="sidebar-checkbox">

                    <div class="row items-center justify-between">
                      <div class="col-auto">
                        <div class="d-flex items-center">
                          <div class="form-checkbox">
                            <input type="checkbox">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>
                          <div class="text-15 ml-10">Breakfast Included</div>
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">92</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">
                        <div class="d-flex items-center">
                          <div class="form-checkbox">
                            <input type="checkbox">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>
                          <div class="text-15 ml-10">Romantic</div>
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">45</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">
                        <div class="d-flex items-center">
                          <div class="form-checkbox">
                            <input type="checkbox">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>
                          <div class="text-15 ml-10">Airport Transfer</div>
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">21</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">
                        <div class="d-flex items-center">
                          <div class="form-checkbox">
                            <input type="checkbox">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>
                          <div class="text-15 ml-10">WiFi Included </div>
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">78</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">
                        <div class="d-flex items-center">
                          <div class="form-checkbox">
                            <input type="checkbox">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>
                          <div class="text-15 ml-10">5 Star</div>
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">679</div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="sidebar__item pb-30">
                  <h5 class="text-18 fw-500 mb-10">Nightly Price</h5>
                  <div class="row x-gap-10 y-gap-30">
                    <div class="col-12">
                      <div class="js-price-rangeSlider">
                        <div class="text-14 fw-500"></div>

                        <div class="d-flex justify-between mb-20">
                          <div class="text-15 text-dark-1">
                            <span class="js-lower"></span>
                            -
                            <span class="js-upper"></span>
                          </div>
                        </div>

                        <div class="px-5">
                          <div class="js-slider"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="sidebar__item">
                  <h5 class="text-18 fw-500 mb-10">Amenities</h5>
                  <div class="sidebar-checkbox">

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Breakfast Included</div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">92</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">WiFi Included </div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">45</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Pool</div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">21</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Restaurant </div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">78</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Air conditioning </div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">679</div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="sidebar__item">
                  <h5 class="text-18 fw-500 mb-10">Star Rating</h5>
                  <div class="row y-gap-10 x-gap-10 pt-10">

                    <div class="col-auto">
                      <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">1</a>
                    </div>

                    <div class="col-auto">
                      <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">2</a>
                    </div>

                    <div class="col-auto">
                      <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">3</a>
                    </div>

                    <div class="col-auto">
                      <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">4</a>
                    </div>

                    <div class="col-auto">
                      <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">5</a>
                    </div>

                  </div>
                </div>

                <div class="sidebar__item">
                  <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
                  <div class="sidebar-checkbox">

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="form-radio d-flex items-center ">
                          <div class="radio">
                            <input type="radio" name="name">
                            <div class="radio__mark">
                              <div class="radio__icon"></div>
                            </div>
                          </div>
                          <div class="ml-10">Any</div>
                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">92</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="form-radio d-flex items-center ">
                          <div class="radio">
                            <input type="radio" name="name">
                            <div class="radio__mark">
                              <div class="radio__icon"></div>
                            </div>
                          </div>
                          <div class="ml-10">Wonderful 4.5+</div>
                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">45</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="form-radio d-flex items-center ">
                          <div class="radio">
                            <input type="radio" name="name">
                            <div class="radio__mark">
                              <div class="radio__icon"></div>
                            </div>
                          </div>
                          <div class="ml-10">Very good 4+</div>
                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">21</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="form-radio d-flex items-center ">
                          <div class="radio">
                            <input type="radio" name="name">
                            <div class="radio__mark">
                              <div class="radio__icon"></div>
                            </div>
                          </div>
                          <div class="ml-10">Good 3.5+ </div>
                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">78</div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="sidebar__item">
                  <h5 class="text-18 fw-500 mb-10">Style</h5>
                  <div class="sidebar-checkbox">

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Budget</div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">92</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Mid-range </div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">45</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Luxury</div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">21</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Family-friendly </div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">78</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Business </div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">679</div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="sidebar__item">
                  <h5 class="text-18 fw-500 mb-10">Neighborhood</h5>
                  <div class="sidebar-checkbox">

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Central London</div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">92</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Guests&#39; favourite area </div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">45</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Westminster Borough</div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">21</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Kensington and Chelsea </div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">78</div>
                      </div>
                    </div>

                    <div class="row items-center justify-between">
                      <div class="col-auto">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 ml-10">Oxford Street </div>

                        </div>

                      </div>

                      <div class="col-auto">
                        <div class="text-15 text-light-1">679</div>
                      </div>
                    </div>

                  </div>
                </div>
              </aside>
            </div>

            <div class="mt-30"></div>

            <div class="row y-gap-30">

              <div class="col-12">

                <div class="border-top-light pt-30">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">

                      <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/lists/hotel/1/1.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="col-md">
                      <h3 class="text-18 lh-16 fw-500">
                        Great Northern Hotel, a Tribute Portfolio<br class="lg:d-none"> Hotel, London

                        <div class="d-inline-block ml-10">
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                        </div>
                      </h3>

                      <div class="row x-gap-10 y-gap-10 items-center pt-10">
                        <div class="col-auto">
                          <p class="text-14">Westminster Borough, London</p>
                        </div>

                        <div class="col-auto">
                          <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                        </div>

                        <div class="col-auto">
                          <div class="size-3 rounded-full bg-light-1"></div>
                        </div>

                        <div class="col-auto">
                          <p class="text-14">2 km to city center</p>
                        </div>
                      </div>

                      <div class="text-14 lh-15 mt-20">
                        <div class="fw-500">King Room</div>
                        <div class="text-light-1">1 extra-large double bed</div>
                      </div>

                      <div class="text-14 text-green-2 lh-15 mt-10">
                        <div class="fw-500">Free cancellation</div>
                        <div class="">You can cancel later, so lock in this great price today.</div>
                      </div>

                      <div class="row x-gap-10 y-gap-10 pt-20">

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Breakfast</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">WiFi</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Spa</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Bar</div>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-auto text-right md:text-left">
                      <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                        <div class="col-auto">
                          <div class="text-14 lh-14 fw-500">Exceptional</div>
                          <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                        </div>
                        <div class="col-auto">
                          <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                        </div>
                      </div>

                      <div class="">
                        <div class="text-14 text-light-1 mt-50 md:mt-20">8 nights, 2 adult</div>
                        <div class="text-22 lh-12 fw-600 mt-5">₹78972</div>
                        <div class="text-14 text-light-1 mt-5">+₹789828 taxes and charges</div>


                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                          See Availability <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="border-top-light pt-30">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">

                      <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                        <div class="cardImage__content">


                          <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                            <div class="swiper-wrapper">

                              <div class="swiper-slide">
                                <img class="col-12" src="/assets/img/lists/hotel/1/2.png" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="/assets/img/lists/hotel/1/1.png" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="/assets/img/lists/hotel/1/3.png" alt="image">
                              </div>

                            </div>

                            <div class="cardImage-slider__pagination js-pagination"></div>

                            <div class="cardImage-slider__nav -prev">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                <i class="icon-chevron-left text-10"></i>
                              </button>
                            </div>

                            <div class="cardImage-slider__nav -next">
                              <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                <i class="icon-chevron-right text-10"></i>
                              </button>
                            </div>
                          </div>

                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="col-md">
                      <h3 class="text-18 lh-16 fw-500">
                        Great Northern Hotel, a Tribute Portfolio<br class="lg:d-none"> Hotel, London

                        <div class="d-inline-block ml-10">
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                        </div>
                      </h3>

                      <div class="row x-gap-10 y-gap-10 items-center pt-10">
                        <div class="col-auto">
                          <p class="text-14">Westminster Borough, London</p>
                        </div>

                        <div class="col-auto">
                          <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                        </div>

                        <div class="col-auto">
                          <div class="size-3 rounded-full bg-light-1"></div>
                        </div>

                        <div class="col-auto">
                          <p class="text-14">2 km to city center</p>
                        </div>
                      </div>

                      <div class="text-14 lh-15 mt-20">
                        <div class="fw-500">King Room</div>
                        <div class="text-light-1">1 extra-large double bed</div>
                      </div>

                      <div class="text-14 text-green-2 lh-15 mt-10">
                        <div class="fw-500">Free cancellation</div>
                        <div class="">You can cancel later, so lock in this great price today.</div>
                      </div>

                      <div class="row x-gap-10 y-gap-10 pt-20">

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Breakfast</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">WiFi</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Spa</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Bar</div>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-auto text-right md:text-left">
                      <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                        <div class="col-auto">
                          <div class="text-14 lh-14 fw-500">Exceptional</div>
                          <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                        </div>
                        <div class="col-auto">
                          <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                        </div>
                      </div>

                      <div class="">
                        <div class="text-14 text-light-1 mt-50 md:mt-20">8 nights, 2 adult</div>
                        <div class="text-22 lh-12 fw-600 mt-5">₹78972</div>
                        <div class="text-14 text-light-1 mt-5">+₹789828 taxes and charges</div>


                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                          See Availability <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="border-top-light pt-30">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">

                      <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/lists/hotel/1/3.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="col-md">
                      <h3 class="text-18 lh-16 fw-500">
                        Great Northern Hotel, a Tribute Portfolio<br class="lg:d-none"> Hotel, London

                        <div class="d-inline-block ml-10">
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                        </div>
                      </h3>

                      <div class="row x-gap-10 y-gap-10 items-center pt-10">
                        <div class="col-auto">
                          <p class="text-14">Westminster Borough, London</p>
                        </div>

                        <div class="col-auto">
                          <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                        </div>

                        <div class="col-auto">
                          <div class="size-3 rounded-full bg-light-1"></div>
                        </div>

                        <div class="col-auto">
                          <p class="text-14">2 km to city center</p>
                        </div>
                      </div>

                      <div class="text-14 lh-15 mt-20">
                        <div class="fw-500">King Room</div>
                        <div class="text-light-1">1 extra-large double bed</div>
                      </div>

                      <div class="text-14 text-green-2 lh-15 mt-10">
                        <div class="fw-500">Free cancellation</div>
                        <div class="">You can cancel later, so lock in this great price today.</div>
                      </div>

                      <div class="row x-gap-10 y-gap-10 pt-20">

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Breakfast</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">WiFi</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Spa</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Bar</div>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-auto text-right md:text-left">
                      <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                        <div class="col-auto">
                          <div class="text-14 lh-14 fw-500">Exceptional</div>
                          <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                        </div>
                        <div class="col-auto">
                          <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                        </div>
                      </div>

                      <div class="">
                        <div class="text-14 text-light-1 mt-50 md:mt-20">8 nights, 2 adult</div>
                        <div class="text-22 lh-12 fw-600 mt-5">₹78972</div>
                        <div class="text-14 text-light-1 mt-5">+₹789828 taxes and charges</div>


                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                          See Availability <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="border-top-light pt-30">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">

                      <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/lists/hotel/1/4.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="col-md">
                      <h3 class="text-18 lh-16 fw-500">
                        Great Northern Hotel, a Tribute Portfolio<br class="lg:d-none"> Hotel, London

                        <div class="d-inline-block ml-10">
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                        </div>
                      </h3>

                      <div class="row x-gap-10 y-gap-10 items-center pt-10">
                        <div class="col-auto">
                          <p class="text-14">Westminster Borough, London</p>
                        </div>

                        <div class="col-auto">
                          <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                        </div>

                        <div class="col-auto">
                          <div class="size-3 rounded-full bg-light-1"></div>
                        </div>

                        <div class="col-auto">
                          <p class="text-14">2 km to city center</p>
                        </div>
                      </div>

                      <div class="text-14 lh-15 mt-20">
                        <div class="fw-500">King Room</div>
                        <div class="text-light-1">1 extra-large double bed</div>
                      </div>

                      <div class="text-14 text-green-2 lh-15 mt-10">
                        <div class="fw-500">Free cancellation</div>
                        <div class="">You can cancel later, so lock in this great price today.</div>
                      </div>

                      <div class="row x-gap-10 y-gap-10 pt-20">

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Breakfast</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">WiFi</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Spa</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Bar</div>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-auto text-right md:text-left">
                      <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                        <div class="col-auto">
                          <div class="text-14 lh-14 fw-500">Exceptional</div>
                          <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                        </div>
                        <div class="col-auto">
                          <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                        </div>
                      </div>

                      <div class="">
                        <div class="text-14 text-light-1 mt-50 md:mt-20">8 nights, 2 adult</div>
                        <div class="text-22 lh-12 fw-600 mt-5">₹78972</div>
                        <div class="text-14 text-light-1 mt-5">+₹789828 taxes and charges</div>


                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                          See Availability <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="border-top-light pt-30">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">

                      <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/lists/hotel/1/5.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="col-md">
                      <h3 class="text-18 lh-16 fw-500">
                        Great Northern Hotel, a Tribute Portfolio<br class="lg:d-none"> Hotel, London

                        <div class="d-inline-block ml-10">
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                        </div>
                      </h3>

                      <div class="row x-gap-10 y-gap-10 items-center pt-10">
                        <div class="col-auto">
                          <p class="text-14">Westminster Borough, London</p>
                        </div>

                        <div class="col-auto">
                          <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                        </div>

                        <div class="col-auto">
                          <div class="size-3 rounded-full bg-light-1"></div>
                        </div>

                        <div class="col-auto">
                          <p class="text-14">2 km to city center</p>
                        </div>
                      </div>

                      <div class="text-14 lh-15 mt-20">
                        <div class="fw-500">King Room</div>
                        <div class="text-light-1">1 extra-large double bed</div>
                      </div>

                      <div class="text-14 text-green-2 lh-15 mt-10">
                        <div class="fw-500">Free cancellation</div>
                        <div class="">You can cancel later, so lock in this great price today.</div>
                      </div>

                      <div class="row x-gap-10 y-gap-10 pt-20">

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Breakfast</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">WiFi</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Spa</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Bar</div>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-auto text-right md:text-left">
                      <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                        <div class="col-auto">
                          <div class="text-14 lh-14 fw-500">Exceptional</div>
                          <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                        </div>
                        <div class="col-auto">
                          <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                        </div>
                      </div>

                      <div class="">
                        <div class="text-14 text-light-1 mt-50 md:mt-20">8 nights, 2 adult</div>
                        <div class="text-22 lh-12 fw-600 mt-5">₹78972</div>
                        <div class="text-14 text-light-1 mt-5">+₹789828 taxes and charges</div>


                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                          See Availability <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="border-top-light pt-30">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">

                      <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/lists/hotel/1/6.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="col-md">
                      <h3 class="text-18 lh-16 fw-500">
                        Great Northern Hotel, a Tribute Portfolio<br class="lg:d-none"> Hotel, London

                        <div class="d-inline-block ml-10">
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                        </div>
                      </h3>

                      <div class="row x-gap-10 y-gap-10 items-center pt-10">
                        <div class="col-auto">
                          <p class="text-14">Westminster Borough, London</p>
                        </div>

                        <div class="col-auto">
                          <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                        </div>

                        <div class="col-auto">
                          <div class="size-3 rounded-full bg-light-1"></div>
                        </div>

                        <div class="col-auto">
                          <p class="text-14">2 km to city center</p>
                        </div>
                      </div>

                      <div class="text-14 lh-15 mt-20">
                        <div class="fw-500">King Room</div>
                        <div class="text-light-1">1 extra-large double bed</div>
                      </div>

                      <div class="text-14 text-green-2 lh-15 mt-10">
                        <div class="fw-500">Free cancellation</div>
                        <div class="">You can cancel later, so lock in this great price today.</div>
                      </div>

                      <div class="row x-gap-10 y-gap-10 pt-20">

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Breakfast</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">WiFi</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Spa</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Bar</div>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-auto text-right md:text-left">
                      <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                        <div class="col-auto">
                          <div class="text-14 lh-14 fw-500">Exceptional</div>
                          <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                        </div>
                        <div class="col-auto">
                          <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                        </div>
                      </div>

                      <div class="">
                        <div class="text-14 text-light-1 mt-50 md:mt-20">8 nights, 2 adult</div>
                        <div class="text-22 lh-12 fw-600 mt-5">₹78972</div>
                        <div class="text-14 text-light-1 mt-5">+₹789828 taxes and charges</div>


                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                          See Availability <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-12">

                <div class="border-top-light pt-30">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">

                      <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/lists/hotel/1/7.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                      </div>

                    </div>

                    <div class="col-md">
                      <h3 class="text-18 lh-16 fw-500">
                        Great Northern Hotel, a Tribute Portfolio<br class="lg:d-none"> Hotel, London

                        <div class="d-inline-block ml-10">
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                          <i class="icon-star text-10 text-yellow-2"></i>
                        </div>
                      </h3>

                      <div class="row x-gap-10 y-gap-10 items-center pt-10">
                        <div class="col-auto">
                          <p class="text-14">Westminster Borough, London</p>
                        </div>

                        <div class="col-auto">
                          <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                        </div>

                        <div class="col-auto">
                          <div class="size-3 rounded-full bg-light-1"></div>
                        </div>

                        <div class="col-auto">
                          <p class="text-14">2 km to city center</p>
                        </div>
                      </div>

                      <div class="text-14 lh-15 mt-20">
                        <div class="fw-500">King Room</div>
                        <div class="text-light-1">1 extra-large double bed</div>
                      </div>

                      <div class="text-14 text-green-2 lh-15 mt-10">
                        <div class="fw-500">Free cancellation</div>
                        <div class="">You can cancel later, so lock in this great price today.</div>
                      </div>

                      <div class="row x-gap-10 y-gap-10 pt-20">

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Breakfast</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">WiFi</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Spa</div>
                        </div>

                        <div class="col-auto">
                          <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Bar</div>
                        </div>

                      </div>
                    </div>

                    <div class="col-md-auto text-right md:text-left">
                      <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                        <div class="col-auto">
                          <div class="text-14 lh-14 fw-500">Exceptional</div>
                          <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                        </div>
                        <div class="col-auto">
                          <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                        </div>
                      </div>

                      <div class="">
                        <div class="text-14 text-light-1 mt-50 md:mt-20">8 nights, 2 adult</div>
                        <div class="text-22 lh-12 fw-600 mt-5">₹78972</div>
                        <div class="text-14 text-light-1 mt-5">+₹789828 taxes and charges</div>


                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white mt-24">
                          See Availability <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

            <div class="border-top-light mt-30 pt-30">
              <div class="row x-gap-10 y-gap-20 justify-between md:justify-center">
                <div class="col-auto md:order-1">
                  <button class="button -blue-1 size-40 rounded-full border-light">
                    <i class="icon-chevron-left text-12"></i>
                  </button>
                </div>

                <div class="col-md-auto md:order-3">
                  <div class="row x-gap-20 y-gap-20 items-center md:d-none">

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">1</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">3</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">5</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">...</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">20</div>

                    </div>

                  </div>

                  <div class="row x-gap-10 y-gap-20 justify-center items-center d-none md:d-flex">

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">1</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                    </div>

                    <div class="col-auto">

                      <div class="size-40 flex-center rounded-full">3</div>

                    </div>

                  </div>

                  <div class="text-center mt-30 md:mt-10">
                    <div class="text-14 text-light-1">1 – 20 of 300+ properties found</div>
                  </div>
                </div>

                <div class="col-auto md:order-2">
                  <button class="button -blue-1 size-40 rounded-full border-light">
                    <i class="icon-chevron-right text-12"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    
<?php include 'includes/footer.php';?>


  </main>



  <!-- JavaScript -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

  <script src="/assets/js/vendors.js"></script>
  <script src="/assets/js/main.js"></script>
</body>

</html>


