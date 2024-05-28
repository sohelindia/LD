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

<?php include 'includes/header.php';?>


    <section data-anim-wrap class="masthead -type-1 z-5">
      <div data-anim-child="fade" class="masthead__bg">
        <img src="#" alt="image" data-src="/assets/img/bali.webp" class="js-lazy">
      </div>

      <div class="container">
        <div class="row justify-center">
          <div class="col-auto">
            <div class="text-center">
              <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white">Find Next Place To Visit</h1>
              <p data-anim-child="slide-up delay-5" class="text-white mt-6 md:mt-10">Discover amzaing places at exclusive deals</p>
            </div>

            <div data-anim-child="slide-up delay-6" class="tabs -underline mt-60 js-tabs">
              <div class="tabs__controls d-flex x-gap-30 y-gap-20 justify-center sm:justify-start js-tabs-controls">

                <div class="">
                  <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Hotel</button>
                </div>

                <div class="">
                  <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button " data-tab-target=".-tab-item-2">Tour</button>
                </div>

                <div class="">
                  <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button " data-tab-target=".-tab-item-3">Activity</button>
                </div>

               

              </div>

              <div class="tabs__content mt-30 md:mt-20 js-tabs-content">

                <div class="tabs__pane -tab-item-1 is-tab-el-active">

                  <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                    <div class="button-grid items-center">

                      <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                        <div data-x-dd-click="searchMenu-loc">
                          <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
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
                        <button class="mainSearch__submit button -dark-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                          <i class="icon-search text-20 mr-10"></i>
                          Search
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tabs__pane -tab-item-2 ">

                  <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                    <div class="button-grid items-center">

                      <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                        <div data-x-dd-click="searchMenu-loc">
                          <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
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
                        <button class="mainSearch__submit button -dark-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                          <i class="icon-search text-20 mr-10"></i>
                          Search
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tabs__pane -tab-item-3 ">

                  <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                    <div class="button-grid items-center">

                      <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                        <div data-x-dd-click="searchMenu-loc">
                          <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
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
                        <button class="mainSearch__submit button -dark-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                          <i class="icon-search text-20 mr-10"></i>
                          Search
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tabs__pane -tab-item-4 ">

                  <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                    <div class="button-grid items-center">

                      <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                        <div data-x-dd-click="searchMenu-loc">
                          <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
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
                        <button class="mainSearch__submit button -dark-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                          <i class="icon-search text-20 mr-10"></i>
                          Search
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tabs__pane -tab-item-5 ">

                  <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                    <div class="button-grid items-center">

                      <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                        <div data-x-dd-click="searchMenu-loc">
                          <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
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
                        <button class="mainSearch__submit button -dark-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                          <i class="icon-search text-20 mr-10"></i>
                          Search
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tabs__pane -tab-item-6 ">

                  <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                    <div class="button-grid items-center">

                      <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                        <div data-x-dd-click="searchMenu-loc">
                          <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
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
                        <button class="mainSearch__submit button -dark-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                          <i class="icon-search text-20 mr-10"></i>
                          Search
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tabs__pane -tab-item-7 ">

                  <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                    <div class="button-grid items-center">

                      <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                        <div data-x-dd-click="searchMenu-loc">
                          <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
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
                        <button class="mainSearch__submit button -dark-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                          <i class="icon-search text-20 mr-10"></i>
                          Search
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
      <div class="container">
        <div data-anim="slide-up delay-1" class="row y-gap-20 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Popular Destinations</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>

          <div class="col-auto md:d-none">

            <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
              View All Destinations <div class="icon-arrow-top-right ml-15"></div>
            </a>

          </div>
        </div>

        <div class="relative pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="base-2 xl-4 lg-3 md-2 sm-2 base-1" data-anim="slide-up delay-2">
          <div class="swiper-wrapper">

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="/assets/img/destinations/1/1.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">New York</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="/assets/img/destinations/1/2.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">London</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="/assets/img/destinations/1/3.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Barcelona</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="/assets/img/destinations/1/4.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Sydney</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                <div class="citiesCard__image ratio ratio-3:4">
                  <img src="#" data-src="/assets/img/destinations/1/5.webp" alt="image" class="js-lazy">
                </div>

                <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                  <div class="citiesCard__bg"></div>

                  <div class="citiesCard__top">
                    <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                  </div>

                  <div class="citiesCard__bottom">
                    <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Rome</h4>
                    <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                  </div>
                </div>
              </a>

            </div>

          </div>


          <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-prev">
            <i class="icon icon-chevron-left text-12"></i>
          </button>

          <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-next">
            <i class="icon icon-chevron-right text-12"></i>
          </button>


          <div class="slider-scrollbar bg-light-2 mt-40 sm:d-none js-scrollbar"></div>

          <div class="row pt-20 d-none md:d-block">
            <div class="col-auto">
              <div class="d-inline-block">

                <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
                  View All Destinations <div class="icon-arrow-top-right ml-15"></div>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
      <div class="container">
        <div class="row y-gap-20">
          <div data-anim="slide-up" class="col-md-6">

            <div class="ctaCard -type-1 rounded-4 ">
              <div class="ctaCard__image ratio ratio-63:55">
                <img class="img-ratio js-lazy" src="#" data-src="/assets/img/backgrounds/1.png" alt="image">
              </div>

              <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-30">


                <h4 class="text-40 lg:text-26 text-white">Things to do on<br> your trip</h4>

                <div class="d-inline-block mt-30">
                  <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Experiences</a>
                </div>
              </div>
            </div>

          </div>

          <div data-anim="slide-up delay-1" class="col-md-6">

            <div class="ctaCard -type-1 rounded-4 ">
              <div class="ctaCard__image ratio ratio-63:55">
                <img class="img-ratio js-lazy" src="#" data-src="/assets/img/backgrounds/2.png" alt="image">
              </div>

              <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-30">

                <div class="text-15 fw-500 text-white mb-10">Enjoy Summer Deals</div>


                <h4 class="text-40 lg:text-26 text-white">Up to 70% Discount!</h4>

                <div class="d-inline-block mt-30">
                  <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Learn More</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    
    <section class="layout-pt-md layout-pb-md">
      <div data-anim="slide-up delay-1" class="container">
        <div class="row y-gap-10 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">National Hotel</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>

       
        </div>

        <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev" data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">
          <div class="swiper-wrapper">

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/1.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                        Breakfast included
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Montcalm At Brewery London City</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/2.png" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/1.png" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/3.png" alt="image">
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

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>Staycity Aparthotels Deptford Bridge Station</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/3.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                        Best Seller
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Westin New York at Times Square</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/4.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                        Top Rated
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/1.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                        Breakfast included
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Montcalm At Brewery London City</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/2.png" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/1.png" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/3.png" alt="image">
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

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>Staycity Aparthotels Deptford Bridge Station</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/3.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                        Best Seller
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Westin New York at Times Square</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/4.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                        Top Rated
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

          </div>


          <div class="d-flex x-gap-15 items-center justify-center sm:justify-start pt-40 sm:pt-20">
            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-left-hover js-hotels-prev">
                <i class="icon icon-arrow-left"></i>
              </button>
            </div>

            <div class="col-auto">
              <div class="pagination -dots text-border js-hotels-pag"></div>
            </div>

            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-right-hover js-hotels-next">
                <i class="icon icon-arrow-right"></i>
              </button>
            </div>
          </div>

        </div>
      </div>
    </section>


    <section class="layout-pt-md layout-pb-md">
      <div data-anim="slide-up delay-1" class="container">
        <div class="row y-gap-10 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">International Hotel</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>

       
        </div>

        <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev" data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">
          <div class="swiper-wrapper">

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/1.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                        Breakfast included
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Montcalm At Brewery London City</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/2.png" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/1.png" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/3.png" alt="image">
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

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>Staycity Aparthotels Deptford Bridge Station</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/3.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                        Best Seller
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Westin New York at Times Square</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/4.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                        Top Rated
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/1.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                        Breakfast included
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Montcalm At Brewery London City</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/2.png" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/1.png" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="/assets/img/hotels/3.png" alt="image">
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

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>Staycity Aparthotels Deptford Bridge Station</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/3.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                        Best Seller
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>The Westin New York at Times Square</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

            <div class="swiper-slide">

              <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="/assets/img/hotels/4.png" alt="image">


                    </div>

                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                    <div class="cardImage__leftBadge">
                      <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                        Top Rated
                      </div>
                    </div>

                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">₹70472</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>

          </div>


          <div class="d-flex x-gap-15 items-center justify-center sm:justify-start pt-40 sm:pt-20">
            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-left-hover js-hotels-prev">
                <i class="icon icon-arrow-left"></i>
              </button>
            </div>

            <div class="col-auto">
              <div class="pagination -dots text-border js-hotels-pag"></div>
            </div>

            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-right-hover js-hotels-next">
                <i class="icon icon-arrow-right"></i>
              </button>
            </div>
          </div>

        </div>
      </div>
    </section>
    


<section class="layout-pt-md layout-pb-md">
      <div data-anim="slide-up delay-1" class="container is-in-view">
        <div class="row y-gap-10 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">National Tour</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>

       
        </div>

                 <div class="row y-gap-30 mt-4">

                <div   class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/hotels/1.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div   class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">


                          <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                            <div class="swiper-wrapper">

                              <div class="swiper-slide">
                                <img class="col-12" src="/assets/img/hotels/2.png" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="/assets/img/hotels/1.png" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="/assets/img/hotels/3.png" alt="image">
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

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div   class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/hotels/3.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div  class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/hotels/4.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

              </div>
              
              
      </div>
    </section>
    
    
     
       
       
       

<section class="layout-pt-md layout-pb-md">
      <div data-anim="slide-up delay-1" class="container is-in-view">
        <div class="row y-gap-10 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">International Tour</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>

       
        </div>

                 <div class="row y-gap-30 mt-4">

                <div   class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/hotels/1.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                            Breakfast included
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Montcalm At Brewery London City</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div   class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">


                          <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                            <div class="swiper-wrapper">

                              <div class="swiper-slide">
                                <img class="col-12" src="/assets/img/hotels/2.png" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="/assets/img/hotels/1.png" alt="image">
                              </div>

                              <div class="swiper-slide">
                                <img class="col-12" src="/assets/img/hotels/3.png" alt="image">
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

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>Staycity Aparthotels Deptford Bridge Station</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div   class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/hotels/3.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                            Best Seller
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>The Westin New York at Times Square</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

                <div  class="col-xl-3 col-lg-3 col-sm-6">

                  <a href="hotel-single-1.html" class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">

                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">

                          <img class="rounded-4 col-12" src="/assets/img/hotels/4.png" alt="image">


                        </div>

                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>


                        <div class="cardImage__leftBadge">
                          <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                            Top Rated
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="hotelsCard__content mt-10">
                      <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                      </h4>

                      <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>

                      <div class="d-flex items-center mt-20">
                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8</div>
                        <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                        <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                      </div>

                      <div class="mt-5">
                        <div class="fw-500">
                          Starting from <span class="text-blue-1">US$72</span>
                        </div>
                      </div>
                    </div>
                  </a>

                </div>

              </div>
              
              
      </div>
    </section>
    
    
     
       



    <section class="layout-pt-md layout-pb-lg">
      <div data-anim-wrap class="container">
        <div class="row y-gap-20 justify-between">

          <div data-anim-child="slide-up delay-1" class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="/assets/img/featureIcons/1/1.svg" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="/assets/img/featureIcons/1/2.svg" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="/assets/img/featureIcons/1/3.svg" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
    
    
      <section class="layout-pt-lg layout-pb-lg bg-dark-3">
      <div class="container">
        <div class="row y-gap-60">
          <div class="col-xl-5 col-lg-6">
            <h2 class="text-30 text-white">What our customers are<br> saying us?</h2>
            <p class="text-white mt-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor nibh, sit amet tempor nibh finibus et. Aenean eu enim justo.</p>

            <div class="row y-gap-30 text-white pt-60 lg:pt-40">
              <div class="col-sm-5 col-6">
                <div class="text-30 lh-15 fw-600">13m+</div>
                <div class="lh-15">Happy People</div>
              </div>

              <div class="col-sm-5 col-6">
                <div class="text-30 lh-15 fw-600">4.88</div>
                <div class="lh-15">Overall rating</div>

                <div class="d-flex x-gap-5 items-center pt-10">

                  <div class="icon-star text-white text-10"></div>

                  <div class="icon-star text-white text-10"></div>

                  <div class="icon-star text-white text-10"></div>

                  <div class="icon-star text-white text-10"></div>

                  <div class="icon-star text-white text-10"></div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-10">


            <div class="testimonials-slider-2 js-testimonials-slider-2">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40 shadow-2">
                    <div class="">
                      <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
                      <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

                      <div class="pt-20 mt-28 border-top-light">
                        <div class="row x-gap-20 y-gap-20 items-center">
                          <div class="col-auto">
                            <img src="/assets/img/avatars/1.png" alt="image">
                          </div>

                          <div class="col-auto">
                            <div class="text-15 fw-500 lh-14">user xyz</div>
                            <div class="text-14 lh-14 text-light-1 mt-5">Traveller</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40 shadow-2">
                    <div class="">
                      <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
                      <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

                      <div class="pt-20 mt-28 border-top-light">
                        <div class="row x-gap-20 y-gap-20 items-center">
                          <div class="col-auto">
                            <img src="/assets/img/avatars/1.png" alt="image">
                          </div>

                          <div class="col-auto">
                            <div class="text-15 fw-500 lh-14">user xyz</div>
                            <div class="text-14 lh-14 text-light-1 mt-5">Traveller</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40 shadow-2">
                    <div class="">
                      <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
                      <p class="testimonials__text lh-18 fw-500 text-dark-1">&quot;Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic.&quot;</p>

                      <div class="pt-20 mt-28 border-top-light">
                        <div class="row x-gap-20 y-gap-20 items-center">
                          <div class="col-auto">
                            <img src="/assets/img/avatars/1.png" alt="image">
                          </div>

                          <div class="col-auto">
                            <div class="text-15 fw-500 lh-14">user xyz</div>
                            <div class="text-14 lh-14 text-light-1 mt-5">Traveller</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>


              <div class="d-flex x-gap-15 items-center justify-center pt-30">
                <div class="col-auto">
                  <button class="d-flex items-center text-24 arrow-left-hover text-white js-prev">
                    <i class="icon icon-arrow-left"></i>
                  </button>
                </div>

                <div class="col-auto">
                  <div class="pagination -dots text-white-50 js-pagination"></div>
                </div>

                <div class="col-auto">
                  <button class="d-flex items-center text-24 arrow-right-hover text-white js-next">
                    <i class="icon icon-arrow-right"></i>
                  </button>
                </div>
              </div>

            </div>
          </div>
        </div>


    
      </div>
    </section>




    <section class="layout-pt-lg layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Get inspiration for your next trip</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40">

          <div data-anim-child="slide-left delay-1" class="col-lg-4 col-sm-6">

            <a href="" class="blogCard -type-1 d-block ">
              <div class="blogCard__image">
                <div class="ratio ratio-4:3 rounded-4 rounded-8">
                  <img class="img-ratio js-lazy" src="#" data-src="/assets/img/blog/1.png" alt="image">
                </div>
              </div>

              <div class="mt-20">
                <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2024</div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-left delay-2" class="col-lg-4 col-sm-6">

            <a href="" class="blogCard -type-1 d-block ">
              <div class="blogCard__image">
                <div class="ratio ratio-4:3 rounded-4 rounded-8">
                  <img class="img-ratio js-lazy" src="#" data-src="/assets/img/blog/2.png" alt="image">
                </div>
              </div>

              <div class="mt-20">
                <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2024</div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-left delay-3" class="col-lg-4 col-sm-6">

            <a href="" class="blogCard -type-1 d-block ">
              <div class="blogCard__image">
                <div class="ratio ratio-4:3 rounded-4 rounded-8">
                  <img class="img-ratio js-lazy" src="#" data-src="/assets/img/blog/3.png" alt="image">
                </div>
              </div>

              <div class="mt-20">
                <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2024</div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>


 

<?php include 'includes/footer.php';?>


  </main>


  <div class="mapFilter" data-x="mapFilter" data-x-toggle="-is-active">
    <div class="mapFilter__overlay"></div>

    <div class="mapFilter__close">
      <button class="button -blue-1 size-40 bg-white shadow-2" data-x-click="mapFilter">
        <i class="icon-close text-15"></i>
      </button>
    </div>

    <div class="mapFilter__grid" data-x="mapFilter__grid" data-x-toggle="-filters-hidden">
      <div class="mapFilter-filter scroll-bar-1">
        <div class="px-20 py-20 md:px-15 md:py-15">
          <div class="d-flex items-center justify-between">
            <div class="text-18 fw-500">Filters</div>

            <button class="size-40 flex-center rounded-full bg-blue-1" data-x-click="mapFilter__grid">
              <i class="icon-chevron-left text-12 text-white"></i>
            </button>
          </div>

          <div class="mapFilter-filter__item">
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

          <div class="mapFilter-filter__item">
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

          <div class="mapFilter-filter__item">
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

          <div class="mapFilter-filter__item">
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

          <div class="mapFilter-filter__item">
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

          <div class="mapFilter-filter__item">
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

          <div class="mapFilter-filter__item">
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
        </div>
      </div>

      <div class="mapFilter-results scroll-bar-1">
        <div class="px-20 py-20 md:px-15 md:py-15">
          <div class="row y-gap-10 justify-between">
            <div class="col-auto">
              <div class="text-14 text-light-1">
                <span class="text-dark-1 text-15 fw-500">3,269 properties</span>
                in Europe
              </div>
            </div>

            <div class="col-auto">
              <button class="button -blue-1 h-40 px-20 md:px-5 text-blue-1 bg-blue-1-05 rounded-100">
                <i class="icon-up-down mr-10"></i>
                Top picks for your search
              </button>
            </div>
          </div>


          <div class="mapFilter-results__item">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-md-auto">
                <div class="ratio ratio-1:1 size-120">
                  <img src="/assets/img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                </div>
              </div>

              <div class="col-md">
                <div class="row x-gap-20 y-gap-10 justify-between">
                  <div class="col-lg">
                    <h4 class="text-16 lh-17 fw-500">
                      Great Northern Hotel, a Tribute Portfolio Hotel, London
                      <span class="text-10 text-yellow-2">
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                      </span>
                    </h4>
                  </div>

                  <div class="col-auto">
                    <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>
                </div>

                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="size-38 rounded-4 flex-center bg-blue-1">
                        <span class="text-14 fw-600 text-white">4.8</span>
                      </div>

                      <div class="ml-10">
                        <div class="text-13 lh-14 fw-500">Exceptional</div>
                        <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="text-14 text-light-1 mr-10">8 nights</div>
                      <div class="fw-500">₹70472</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mapFilter-results__item">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-md-auto">
                <div class="ratio ratio-1:1 size-120">
                  <img src="/assets/img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                </div>
              </div>

              <div class="col-md">
                <div class="row x-gap-20 y-gap-10 justify-between">
                  <div class="col-lg">
                    <h4 class="text-16 lh-17 fw-500">
                      Great Northern Hotel, a Tribute Portfolio Hotel, London
                      <span class="text-10 text-yellow-2">
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                      </span>
                    </h4>
                  </div>

                  <div class="col-auto">
                    <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>
                </div>

                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="size-38 rounded-4 flex-center bg-blue-1">
                        <span class="text-14 fw-600 text-white">4.8</span>
                      </div>

                      <div class="ml-10">
                        <div class="text-13 lh-14 fw-500">Exceptional</div>
                        <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="text-14 text-light-1 mr-10">8 nights</div>
                      <div class="fw-500">₹70472</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mapFilter-results__item">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-md-auto">
                <div class="ratio ratio-1:1 size-120">
                  <img src="/assets/img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                </div>
              </div>

              <div class="col-md">
                <div class="row x-gap-20 y-gap-10 justify-between">
                  <div class="col-lg">
                    <h4 class="text-16 lh-17 fw-500">
                      Great Northern Hotel, a Tribute Portfolio Hotel, London
                      <span class="text-10 text-yellow-2">
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                      </span>
                    </h4>
                  </div>

                  <div class="col-auto">
                    <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>
                </div>

                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="size-38 rounded-4 flex-center bg-blue-1">
                        <span class="text-14 fw-600 text-white">4.8</span>
                      </div>

                      <div class="ml-10">
                        <div class="text-13 lh-14 fw-500">Exceptional</div>
                        <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="text-14 text-light-1 mr-10">8 nights</div>
                      <div class="fw-500">₹70472</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mapFilter-results__item">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-md-auto">
                <div class="ratio ratio-1:1 size-120">
                  <img src="/assets/img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                </div>
              </div>

              <div class="col-md">
                <div class="row x-gap-20 y-gap-10 justify-between">
                  <div class="col-lg">
                    <h4 class="text-16 lh-17 fw-500">
                      Great Northern Hotel, a Tribute Portfolio Hotel, London
                      <span class="text-10 text-yellow-2">
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                      </span>
                    </h4>
                  </div>

                  <div class="col-auto">
                    <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>
                </div>

                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="size-38 rounded-4 flex-center bg-blue-1">
                        <span class="text-14 fw-600 text-white">4.8</span>
                      </div>

                      <div class="ml-10">
                        <div class="text-13 lh-14 fw-500">Exceptional</div>
                        <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="text-14 text-light-1 mr-10">8 nights</div>
                      <div class="fw-500">₹70472</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mapFilter-results__item">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-md-auto">
                <div class="ratio ratio-1:1 size-120">
                  <img src="/assets/img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                </div>
              </div>

              <div class="col-md">
                <div class="row x-gap-20 y-gap-10 justify-between">
                  <div class="col-lg">
                    <h4 class="text-16 lh-17 fw-500">
                      Great Northern Hotel, a Tribute Portfolio Hotel, London
                      <span class="text-10 text-yellow-2">
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                      </span>
                    </h4>
                  </div>

                  <div class="col-auto">
                    <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>
                </div>

                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="size-38 rounded-4 flex-center bg-blue-1">
                        <span class="text-14 fw-600 text-white">4.8</span>
                      </div>

                      <div class="ml-10">
                        <div class="text-13 lh-14 fw-500">Exceptional</div>
                        <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="text-14 text-light-1 mr-10">8 nights</div>
                      <div class="fw-500">₹70472</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mapFilter-results__item">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-md-auto">
                <div class="ratio ratio-1:1 size-120">
                  <img src="/assets/img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                </div>
              </div>

              <div class="col-md">
                <div class="row x-gap-20 y-gap-10 justify-between">
                  <div class="col-lg">
                    <h4 class="text-16 lh-17 fw-500">
                      Great Northern Hotel, a Tribute Portfolio Hotel, London
                      <span class="text-10 text-yellow-2">
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                      </span>
                    </h4>
                  </div>

                  <div class="col-auto">
                    <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>
                </div>

                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="size-38 rounded-4 flex-center bg-blue-1">
                        <span class="text-14 fw-600 text-white">4.8</span>
                      </div>

                      <div class="ml-10">
                        <div class="text-13 lh-14 fw-500">Exceptional</div>
                        <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="text-14 text-light-1 mr-10">8 nights</div>
                      <div class="fw-500">₹70472</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mapFilter-results__item">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-md-auto">
                <div class="ratio ratio-1:1 size-120">
                  <img src="/assets/img/hotels/1.png" alt="image" class="img-ratio rounded-4">
                </div>
              </div>

              <div class="col-md">
                <div class="row x-gap-20 y-gap-10 justify-between">
                  <div class="col-lg">
                    <h4 class="text-16 lh-17 fw-500">
                      Great Northern Hotel, a Tribute Portfolio Hotel, London
                      <span class="text-10 text-yellow-2">
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                      </span>
                    </h4>
                  </div>

                  <div class="col-auto">
                    <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>
                </div>

                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="size-38 rounded-4 flex-center bg-blue-1">
                        <span class="text-14 fw-600 text-white">4.8</span>
                      </div>

                      <div class="ml-10">
                        <div class="text-13 lh-14 fw-500">Exceptional</div>
                        <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="text-14 text-light-1 mr-10">8 nights</div>
                      <div class="fw-500">₹70472</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="mapFilter-map">
        <div class="map js-map"></div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

  <script src="/assets/js/vendors.js"></script>
  <script src="/assets/js/main.js"></script>
</body>

</html>