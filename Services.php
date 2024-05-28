<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Boostrap CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/vendors.css">
    <link rel="stylesheet" href="/assets/css/main.css">




    <title>Lushy Days</title>
</head>
<body>

    <?php include 'includes/header.php' ;?>




    <div class="container z--1 services-top-1-cntntr">
        <div style="width: 100%; max-width: 1280px;">
            <!-- <h2>Dynamic Pills</h2>
            <p>To make the tabs toggleable, add the data-toggle="pill" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p> -->
            <div style="display: flex; padding: 0em 1em;">
              <div class="width: auto; display: flex;">
                <ul class="nav nav-pills" style="display: flex; flex-wrap: no-wrap;">
                    <li class="active"><a class="services-tabs" data-toggle="pill" href="#tab-1">Overview</a></li>
                    <li><a class="services-tabs" data-toggle="pill" href="#tab-2">Hotels</a></li>
                    <li><a class="services-tabs" data-toggle="pill" href="#tab-3">Activities</a></li>
                    <li><a class="services-tabs" data-toggle="pill" href="#tab-4">Transfers</a></li>
                    <li><a class="services-tabs" data-toggle="pill" href="#tab-5">Addon service</a></li>
                    <li><a class="services-tabs" data-toggle="pill" href="#tab-6">Terms</a></li>
                </ul>
              </div>
            </div>
        
            <div class="tab-content">
                
                <div id="tab-1" class="tabs-on-menu tab-pane fade in active" style="padding: 1.25em;">
                    Overview
                </div>

                <!-- Tab - 2 -->
                <!-- Tab - 2 -->
                <div id="tab-2" class="tabs-on-menu tab-pane fade" style="display: flex; flex-wrap: wrap-reverse;">
                    
                    
                    <!-- Cards - Modal  | left side ---- lefte side-->
                    <!-- Cards - Modal  | left side ---- lefte side-->
                    <div class="service-card-mrl-1r">

                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.4em 1.1em; padding-right: 0em;">
                          <div style="">
                            <select name="#" id="#" style="width: 10em; padding: 0.65em 1em; background: white; red; border: 1px solid #ffdc74; border-radius: 10px;">
                              <option value="#">Hotel 1</option>
                              <option value="#">Hotel 2</option>
                              <option value="#">Hotel 3</option>
                              <option value="#">Hotel 4</option>
                            </select>
                          </div>

                          <div style="padding: 0.9em 1em; display: flex; justify-content: space-between; position: sticky; top: 0px; left: 0px; width: 70%;">
                            <span style="display: inline-block; width: 100%;"><input type="text" placeholder="Search Eg. Hotels in Dubai" style="border: 1px solid #ffdc74; border-radius: 10px; padding: 0.5em 1em;"></span>
                            <button style="padding: 0.5em 2em; margin-left: 10px; border-radius: 10px; background-color: orange; color: white;">Search</button>
                          </div>
                        </div>


                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-1-left-sides-tab-2">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/1838640/pexels-photo-1838640.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Hyatt hotel of dubai</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                      </p>

                                      <p class="card-text">
                                        <div>Ratings: 4.9 | 
                                          <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"/></svg>
                                          </span>
                                        </div>
                                        <div style="margin-top: -12px;">Price: $200/- per day</div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; background: orange; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white;">View</span>
                                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>




                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-2-left-sides-tab-2">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/705773/pexels-photo-705773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Mughal 7 Star Hotel of dubai</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                      </p>

                                      <p class="card-text">
                                        <div>Ratings: 4.9 | 
                                          <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"/></svg>
                                          </span>
                                        </div>
                                        <div style="margin-top: -12px;">Price: $200/- per day</div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; background: orange; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white;">View</span>
                                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>





                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-3-left-sides-tab-2">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/2462015/pexels-photo-2462015.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Premium 5 Star Hotel</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                      </p>

                                      <p class="card-text">
                                        <div>Ratings: 4.9 | 
                                          <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"/></svg>
                                          </span>
                                        </div>
                                        <div style="margin-top: -12px;">Price: $200/- per day</div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; background: orange; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white;">View</span>
                                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>




                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-4-left-sides-tab-2">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/1334605/pexels-photo-1334605.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">The hotel of Paris in Dubai</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                      </p>

                                      <p class="card-text">
                                        <div>Ratings: 4.9 | 
                                          <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"/></svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"/></svg>
                                          </span>
                                        </div>
                                        <div style="margin-top: -12px;">Price: $200/- per day</div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; background: orange; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white;">View</span>
                                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>



                    </div>




                    <!-- Cards - Modal  | right side ---- right side-->
                    <!-- Cards - Modal  | right side ---- right side-->
                    <div class="service-card-mrl-1r" style="display: flex; justify-content: center; flex-wrap: wrap; ">


                        <div class="on-mobile-flex-wrap" style="display: flex; flex-wrap: wrap: justify-content: space-between; align-items: center; padding: 0.4em 1.1em; padding-right: 0em;">
                          <div style="" class="on-mobile-w-full">
                            <select name="#" class="on-mobile-w-full" id="#" style="width: 10em; padding: 0.65em 1em; background: white; red; border: 1px solid #ffdc74; border-radius: 10px;">
                              <option value="#">Hotel 1</option>
                              <option value="#">Hotel 2</option>
                              <option value="#">Hotel 3</option>
                              <option value="#">Hotel 4</option>
                            </select>
                          </div>

                          <div class="on-mobile-w-full on-mobile-flex-wr" style="padding: 0.9em 1em; display: flex; justify-content: space-between; position: sticky; top: 0px; left: 0px; width: 70%;">
                            <span class="on-mobile-w-full" style="display: inline-block; width: 100%;"><input type="text" placeholder="Search Eg. Hotels in Dubai" style="border: 1px solid #ffdc74; border-radius: 10px; padding: 0.5em 1em;"></span>
                            <button class="on-mobile-w-full" style="padding: 0.5em 2em; margin-left: 10px; border-radius: 10px; background-color: orange; color: white;">Search</button>
                          </div>
                        </div>



 
                        <div class="card  mb-3 card-services-srvs-2 on-mobile-w-full" style="max-height: 300px;" data-bs-toggle="modal" data-bs-target="#modal-1-right-sides-tab-2">
                            <div class="row g-0 on-mobile-w-full" style="max-height: 300px">
                                <div class="col-md-4 on-mobile-w-full" style="width: 100%; border-radius: 1em; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                                    <img src="https://images.pexels.com/photos/260931/pexels-photo-260931.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div class="col-md-8" style="width: 100%">
                                  <div class="">
                                      <div style="">
                                        <div>
                                            <h3 class="">The HotelBlue India</h3>
                                            <p class="" style="margin-top: -10px;">
                                              </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                              <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                            <p></p>

                                            <p class="card-text" >
                                              </p><div>Ratings: 4.9 | 
                                              <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                                              </span>
                                          </div>
                                              <div style="margin-top: -12px;">Price: $200/- per day</div>

                                              <span style="cursor: pointer; width: 100%; background: orange; height: 2.5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-radius: 2em; margin-top: 1.5em;">
                                                <span style="color: white;">Add or Exlpore</span>
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                              </span>
                                      </div>
                                </div>
                                  </div>
                                </div>
                            </div>
                        </div>




                        <div class="card  mb-3 card-services-srvs-2 on-mobile-w-full" style="max-height: 300px;" data-bs-toggle="modal" data-bs-target="#modal-2-right-sides-tab-2">
                            <div class="row g-0 on-mobile-w-full" style="max-height: 300px">
                                <div class="col-md-4 on-mobile-w-full" style="width: 100%; border-radius: 1em; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                                    <img src="https://images.pexels.com/photos/1470502/pexels-photo-1470502.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div class="col-md-8" style="width: 100%">
                                  <div class="">
                                      <div style="">
                                        <div>
                                            <h3 class="">Hotel of Saudi</h3>
                                            <p class="" style="margin-top: -10px;">
                                              </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                              <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                            <p></p>

                                            <p class="card-text" >
                                              </p><div>Ratings: 4.9 | 
                                              <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                                              </span>
                                          </div>
                                              <div style="margin-top: -12px;">Price: $200/- per day</div>

                                              <span style="cursor: pointer; width: 100%; background: orange; height: 2.5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-radius: 2em; margin-top: 1.5em;">
                                                <span style="color: white;">Add or Exlpore</span>
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                              </span>
                                      </div>
                                </div>
                                  </div>
                                </div>
                            </div>
                        </div>






                        <div class="card  mb-3 card-services-srvs-2 on-mobile-w-full" style="max-height: 300px;" data-bs-toggle="modal" data-bs-target="#modal-3-right-sides-tab-2">
                            <div class="row g-0 on-mobile-w-full" style="max-height: 300px">
                                <div class="col-md-4 on-mobile-w-full" style="width: 100%; border-radius: 1em; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                                    <img src="https://images.pexels.com/photos/3144580/pexels-photo-3144580.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div class="col-md-8" style="width: 100%">
                                  <div class="">
                                      <div style="">
                                        <div>
                                            <h3 class="">Reddison Blue Hotel</h3>
                                            <p class="" style="margin-top: -10px;">
                                              </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                              <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                            <p></p>

                                            <p class="card-text" >
                                              </p><div>Ratings: 4.9 | 
                                              <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                                              </span>
                                          </div>
                                              <div style="margin-top: -12px;">Price: $200/- per day</div>

                                              <span style="cursor: pointer; width: 100%; background: orange; height: 2.5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-radius: 2em; margin-top: 1.5em;">
                                                <span style="color: white;">Add or Exlpore</span>
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                              </span>
                                      </div>
                                </div>
                                  </div>
                                </div>
                            </div>
                        </div>







                        <div class="card  mb-3 card-services-srvs-2 on-mobile-w-full" style="max-height: 300px;" data-bs-toggle="modal" data-bs-target="#modal-4-right-sides-tab-2">
                            <div class="row g-0 on-mobile-w-full" style="max-height: 300px">
                                <div class="col-md-4 on-mobile-w-full" style="width: 100%; border-radius: 1em; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                                    <img src="https://images.pexels.com/photos/2373201/pexels-photo-2373201.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div class="col-md-8" style="width: 100%">
                                  <div class="">
                                      <div style="">
                                        <div>
                                            <h3 class="">Reliance Hotels of Dubai</h3>
                                            <p class="" style="margin-top: -10px;">
                                              </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                              <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                            <p></p>

                                            <p class="card-text" >
                                              </p><div>Ratings: 4.9 | 
                                              <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                                              </span>
                                          </div>
                                              <div style="margin-top: -12px;">Price: $200/- per day</div>

                                              <span style="cursor: pointer; width: 100%; background: orange; height: 2.5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-radius: 2em; margin-top: 1.5em;">
                                                <span style="color: white;">Add or Exlpore</span>
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                              </span>
                                      </div>
                                </div>
                                  </div>
                                </div>
                            </div>
                        </div>






                        <div class="card  mb-3 card-services-srvs-2 on-mobile-w-full" style="max-height: 300px;" data-bs-toggle="modal" data-bs-target="#modal-5-right-sides-tab-2">
                            <div class="row g-0 on-mobile-w-full" style="max-height: 300px">
                                <div class="col-md-4 on-mobile-w-full" style="width: 100%; border-radius: 1em; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                                    <img src="https://images.pexels.com/photos/764830/pexels-photo-764830.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div class="col-md-8" style="width: 100%">
                                  <div class="">
                                      <div style="">
                                        <div>
                                            <h3 class="">The Green's Hotel</h3>
                                            <p class="" style="margin-top: -10px;">
                                              </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                              <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                            <p></p>

                                            <p class="card-text" >
                                              </p><div>Ratings: 4.9 | 
                                              <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                                              </span>
                                          </div>
                                              <div style="margin-top: -12px;">Price: $200/- per day</div>

                                              <span style="cursor: pointer; width: 100%; background: orange; height: 2.5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-radius: 2em; margin-top: 1.5em;">
                                                <span style="color: white;">Add or Exlpore</span>
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                              </span>
                                      </div>
                                </div>
                                  </div>
                                </div>
                            </div>
                        </div>




                        <div class="card  mb-3 card-services-srvs-2 on-mobile-w-full" style="max-height: 300px;" data-bs-toggle="modal" data-bs-target="#modal-6-right-sides-tab-2">
                            <div class="row g-0 on-mobile-w-full" style="max-height: 300px">
                                <div class="col-md-4 on-mobile-w-full" style="width: 100%; border-radius: 1em; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                                    <img src="https://images.pexels.com/photos/2992314/pexels-photo-2992314.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div class="col-md-8" style="width: 100%">
                                  <div class="">
                                      <div style="">
                                        <div>
                                            <h3 class="">The Black & White Hotels</h3>
                                            <p class="" style="margin-top: -10px;">
                                              </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                                              <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                            <p></p>

                                            <p class="card-text" >
                                              </p><div>Ratings: 4.9 | 
                                              <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                                              </span>
                                          </div>
                                              <div style="margin-top: -12px;">Price: $200/- per day</div>

                                              <span style="cursor: pointer; width: 100%; background: orange; height: 2.5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-radius: 2em; margin-top: 1.5em;">
                                                <span style="color: white;">Add or Exlpore</span>
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                              </span>
                                      </div>
                                </div>
                                  </div>
                                </div>
                            </div>
                        </div>






                    </div>




                </div>
                
                
                
                <!-- Tab - 3 -->
                <!-- Tab - 3 -->
                <div id="tab-3" class="tabs-on-menu tab-pane fade" style="display: flex; flex-wrap: wrap-reverse;">
                    
                    
                    <!-- Cards - Modal  | left side ---- lefte side-->
                    <!-- Cards - Modal  | left side ---- lefte side-->
                    <div class="service-card-mrl-1r">

                          <div style="display: flex; flex-wrap: wrap; justify-content: start; align-items: center; height: 100px; font-size: 12px; padding: 1em 1em;">
                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>

                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>


                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>

                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>

                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>
                          </div>

                          <div style="padding: 0.4em 1.3em; margin-top: 1em;">
                            <h1>
                              Included Activities
                            </h1>
                          </div>


                          <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-1-left-sides-tab-3">
                              <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                  <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                      <img src="https://images.pexels.com/photos/413960/pexels-photo-413960.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                  </div>

                                  <div style="padding: 0.5em;">
                                    <div>
                                        <h3 class="card-title" style="">Half Day Dubai Tour</h3>
                                        <p class="card-text" style="margin-top: -10px;">
                                          <div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                                          <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                          <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                        </p>

                                        <p class="card-text">
                                          <div>
                                            <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">No Meal</span>
                                            <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Transfers</span>
                                            <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Ticket</span>
                                          </div>

                                          <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                            <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/></svg></span>
                                            <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/></svg></span>
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                          </span>
                                        </p>
                                    </div>
                                  </div>
                              </div>
                          </div>



                          <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-2-left-sides-tab-3">
                              <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                  <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                      <img src="https://images.pexels.com/photos/417344/pexels-photo-417344.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                  </div>

                                  <div style="padding: 0.5em;">
                                    <div>
                                        <h3 class="card-title">3 Hours Boat Trip</h3>
                                        <p class="card-text" style="margin-top: -10px;">
                                          <div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                                          <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                          <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                        </p>

                                        <p class="card-text">
                                          <div>
                                            <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">No Meal</span>
                                            <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Transfers</span>
                                            <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Ticket</span>
                                          </div>

                                          <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                            <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/></svg></span>
                                            <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/></svg></span>
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                          </span>
                                        </p>
                                    </div>
                                  </div>
                              </div>
                          </div>



                          <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-3-left-sides-tab-3">
                              <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                  <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                      <img src="https://images.pexels.com/photos/90286/pexels-photo-90286.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                  </div>

                                  <div style="padding: 0.5em;">
                                    <div>
                                        <h3 class="card-title">1 Hours Helicopter Trip</h3>
                                        <p class="card-text" style="margin-top: -10px;">
                                          <div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                                          <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                          <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                        </p>

                                        <p class="card-text">
                                          <div>
                                            <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">No Meal</span>
                                            <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Transfers</span>
                                            <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Ticket</span>
                                          </div>

                                          <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                            <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/></svg></span>
                                            <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/></svg></span>
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                          </span>
                                        </p>
                                    </div>
                                  </div>
                              </div>
                          </div>
                    </div>




                    <!-- Cards - Modal  | right side ---- right side-->
                    <!-- Cards - Modal  | right side ---- right side-->
                    <div class="service-card-mrl-1r">


                        <!-- <div style="display: flex; flex-wrap: wrap; justify-content: start; align-items: center; height: 100px; font-size: 12px; padding: 1em 1em;""></div> -->

                        <div style="display: flex; justify-content: space-between; padding: 0.4em 1.3em; margin-top: 1em;">
                          <h1>
                            More Activities
                          </h1>

                          <div>
                            <button style="font-size: 12px; padding: 0.4 1em; min-width: 5em; min-height: 2.5em; background-color: #f5f5f5; border: 1px solid #f9f9f9;">All</button>
                            <button style="font-size: 12px; padding: 0.4 1em; min-width: 5em; min-height: 2.5em; background-color: orange; color: white; border: 1px solid #f9f9f9;">Polpular</button>
                          </div>
                        </div>
                                              

                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-1-right-sides-tab-3">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/3599596/pexels-photo-3599596.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">2 Hours Hockey Game</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">No Meal</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Transfers</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Ticket</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/></svg></span>
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>




                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-2-right-sides-tab-3">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/813011/pexels-photo-813011.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">1 Day Ship Trip over dubai's boundaries</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">No Meal</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Transfers</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Ticket</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/></svg></span>
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>




                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-3-right-sides-tab-3">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/735869/pexels-photo-735869.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Night Dinner with Family</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">No Meal</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Transfers</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Ticket</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/></svg></span>
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>



                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-4-right-sides-tab-3">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/251808/pexels-photo-251808.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">5 Star Hotel Dinner Room Booking</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">No Meal</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Transfers</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Ticket</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/></svg></span>
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>



                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-5-right-sides-tab-3">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/414110/pexels-photo-414110.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">4 Hours Desert Tour</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">No Meal</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Transfers</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Ticket</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/></svg></span>
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>



                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-6-right-sides-tab-3">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/7199827/pexels-photo-7199827.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Night Visit in Museum of Future</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">No Meal</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Transfers</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Ticket</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"/></svg></span>
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        


                    </div>




                </div>



                <!-- Tab - 4 -->
                <!-- Tab - 4 -->
                <div id="tab-4" class="tabs-on-menu tab-pane fade in active">
                    <div class="service-card-mrl-1r">


                          <div style="display: flex; flex-wrap: wrap; justify-content: start; align-items: center; height: 100px; font-size: 12px; padding: 1em 1em;">
                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>

                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>


                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>

                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>

                            <span style="margin: 0em 0em;">
                              <div class="default-filter-btns-me">1 Morning</div>
                              <div class="default-filter-btns-me">1 Evening</div>
                            </span>
                          </div>

                          <div style="padding: 0.4em 1.3em; margin-top: 1em;">
                            <h1>
                              Included Transfers
                            </h1>
                          </div>
                        
                        
                    
                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-1-left-sides-tab-4">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/892522/pexels-photo-892522.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">BMW S7 Transportation service</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">From: Hotel</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">To: Airport</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Drop Off</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Pvt. Transfers</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/></svg></span>
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/></svg></span>
                                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>



                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-2-left-sides-tab-4">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/3764984/pexels-photo-3764984.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Rolls Royz R4 Trans. service</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">From: Hotel</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">To: Airport</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Drop Off</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Pvt. Transfers</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/></svg></span>
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/></svg></span>
                                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>



                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-3-left-sides-tab-4">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/919073/pexels-photo-919073.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Porchue Luxury Trans. Service</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">From: Hotel</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">To: Airport</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Drop Off</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Pvt. Transfers</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/></svg></span>
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/></svg></span>
                                          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024"><path fill="white" d="M512 160c320 0 512 352 512 352S832 864 512 864S0 512 0 512s192-352 512-352m0 64c-225.28 0-384.128 208.064-436.8 288c52.608 79.872 211.456 288 436.8 288c225.28 0 384.128-208.064 436.8-288c-52.608-79.872-211.456-288-436.8-288m0 64a224 224 0 1 1 0 448a224 224 0 0 1 0-448m0 64a160.19 160.19 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160s-71.744-160-160-160"/></svg> -->
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="service-card-mrl-1r">

                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 0.4em 1.3em; margin-top: 1em;">
                          <h1>
                            More Transfers
                          </h1>

                          <div>
                            <button style="font-size: 12px; padding: 0.4 1em; min-width: 5em; min-height: 2.5em; background-color: #f5f5f5; border: 1px solid #f9f9f9;">All</button>
                            <button style="font-size: 12px; padding: 0.4 1em; min-width: 5em; min-height: 2.5em; background-color: orange; color: white; border: 1px solid #f9f9f9;">Polpular</button>
                          </div>
                        </div>
                        
                    
                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-1-right-sides-tab-4">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/4674338/pexels-photo-4674338.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Nissan N23 Pickup & Drop off</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">From: Hotel</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">To: Airport</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Drop Off</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Pvt. Transfers</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"></path></svg></span>
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>



                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-2-right-sides-tab-4">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/3608967/pexels-photo-3608967.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Bus for Family Transportation</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">From: Hotel</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">To: Airport</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Drop Off</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Pvt. Transfers</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"></path></svg></span>
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>



                        <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; background: white;" data-bs-toggle="modal" data-bs-target="#modal-3-right-sides-tab-4">
                            <div class="n-mobile-w-full on-mobile-flex-wrap" style="display: flex; align-items: center; flex-wrap: no-wrap;">
                                <div class="on-mobile-w-full" style="width: 200px; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; border-radius: 1em;">
                                    <img src="https://images.pexels.com/photos/569679/pexels-photo-569679.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
                                </div>

                                <div style="padding: 0.5em;">
                                  <div>
                                      <h3 class="card-title">Bus Transportation Booking</h3>
                                      <p class="card-text" style="margin-top: -10px;">
                                        <div style="color: #818181; font-size: 12px;">From: Hotel</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">To: Airport</div>
                                        <div style="color: #818181; font-size: 12px; margin-top: -10px">Time: Any</div>
                                      </p>

                                      <p class="card-text">
                                        <div>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Drop Off</span>
                                          <span style="display: inline-block; padding: 0px 7px; color: orange; border-radius: 80px; border: 1px solid orange; font-size: 12px;">Pvt. Transfers</span>
                                        </div>

                                        <span style="position: absolute; cursor: pointer; bottom: 0.4em; right: 0.4em; height: 2.5em; width: 5em; border-top-left-radius: 80px; display: flex; justify-content: center; align-items: center; border-bottom-right-radius: 2em;">
                                          <span style="color: white; height: 2em; width: 2em; background: orange; margin: 2px; border-radius: 80px; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 13H5v-2h6V5h2v6h6v2h-6v6h-2z"></path></svg></span>
                                        </span>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>





                <!-- Tab - 5 -->
                <!-- Tab - 5 -->
                <div id="tab-5" class="tabs-on-menu tab-pane fade in active" style="padding: 1.2em;">
                        
                
                    <div style="display: block;">
                        <div style="min-height: 10em; width: 100%; padding: 1em; border: 2px solid #ffd670; border-bottom: 2px solid orange; box-shadow: 1em 1em 1em -1.1em #ffd670; margin: 2em 0em;">
                         
                            <h2>Meal</h2>
                            <h3>Select <span style="color: orange;">Meal</span> As per your requirement</h3>

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span>
                                    <div>Destination</div>
                                    <div>
                                      <select name="#" id="#" style="border: 1px solid #b8b8b8; min-width: 7em; padding: 0.3em 1em;">
                                        <option value="#">Dubai</option>
                                        <option value="#">Quwait</option>
                                      </select>
                                    </div>
                                </span>


                                <span style="margin: 0em 1em;">
                                    <div>No. of Meals</div>
                                    <div>
                                      <select name="#" id="#" style="border: 1px solid #b8b8b8; min-width: 7em; padding: 0.3em 1em;">
                                        <option value="#">1</option>
                                        <option value="#">2</option>
                                        <option value="#">3</option>
                                        <option value="#">4</option>
                                        <option value="#">5</option>
                                        <option value="#">6</option>
                                        <option value="#">7</option>
                                        <option value="#">8</option>
                                        <option value="#">9</option>
                                      </select>
                                    </div>
                                </span>


                                <span>
                                    <div>Meal type</div>
                                    <div>
                                      <select name="#" id="#" style="border: 1px solid #b8b8b8; min-width: 7em; padding: 0.3em 1em;">
                                        <option value="#">Pure Veg</option>
                                        <option value="#">Non Veg</option>
                                      </select>
                                    </div>
                                </span>



                                <span style="margin: 0em 1em;">
                                    <div>Meal Time</div>
                                    <div>
                                      <select name="#" id="#" style="border: 1px solid #b8b8b8; min-width: 7em; padding: 0.3em 1em;">
                                        <option value="#">On Break Fast</option>
                                        <option value="#">On Lunch</option>
                                        <option value="#">On Dinner</option>
                                      </select>
                                    </div>
                                </span>




                                <span style="margin: 0em 1em;">
                                    <div>Adults <span style="font-size: 10px;">(12 - 50 yrs)</span></div>
                                    <div><input type="number" style="border: 1px solid #b8b8b8; max-width: 7em; padding: 0.15em 0.1em;"></div>
                                </span>


                                <span style="margin: 0em 1em;">
                                    <div>Childs <span style="font-size: 10px;">(0 - 12 yrs)</span></div>
                                    <div><input type="number" style="border: 1px solid #b8b8b8; max-width: 7em; padding: 0.15em 0.1em;"></div>
                                </span>


                                <span style="margin-top: 2em; margin-bottom: 0.1em;">
                                  <button style="border: 1px solid orange; color: white; background-color: orange; min-width: 10em; max-height: 2.7em; padding: 0.15em 0.1em;">Add & Proceed</button>
                                </span>

                            </div>





                            <div style="display: flex; flex-wrap: wrap; justify-content: space-start; align-items: center; margin-top: 3em;">
                                
                                <div style="width: 100%;">
                                    <h3>My Selections</h3>
                                </div>

                                <div style="width: 100%; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; background-color: #f1f1f1; padding: 1em; margin-top: 1em;">
                                    <span>
                                        <div>Destination</div>
                                        <div>
                                          <p>Dubai</p>
                                        </div>
                                    </span>


                                    <span style="margin: 0em 1em;">
                                        <div>No. of Meals</div>
                                        <div>
                                          <p>5</p>
                                        </div>
                                    </span>


                                    <span>
                                        <div>Meal type</div>
                                        <div>
                                          <p>Non Veg</p>
                                        </div>
                                    </span>



                                    <span style="margin: 0em 1em;">
                                        <div>Meal Time</div>
                                        <div>
                                          <p>Lunch</p>
                                        </div>
                                    </span>




                                    <span style="margin: 0em 1em;">
                                        <div>Adults <span style="font-size: 10px;">(12 - 50 yrs)</span></div>
                                        <div>
                                          <p>5</p>
                                        </div>
                                    </span>


                                    <span style="margin: 0em 1em;">
                                        <div>Childs <span style="font-size: 10px;">(0 - 12 yrs)</span></div>
                                        <div>
                                          <p>8</p>
                                        </div>
                                    </span>


                                    <span style="margin-top: 2em; margin-bottom: 0.1em;">
                                      <button style="border: 1px solid black; color: white; background-color: black; min-width: 9em; max-height: 2.7em; padding: 0.15em 0.1em;">Remove</button>
                                    </span>
                                </div>

                            </div>
                        </div>




                        <div style="min-height: 10em; width: 100%; padding: 1em; border: 2px solid #ffd670; border-bottom: 2px solid orange; box-shadow: 1em 1em 1em -1.1em #ffd670; margin: 2em 0em;">
                         
                            <h2>Visa</h2>
                            <h3>Select <span style="color: blue;">Visa</span> As per your requirement</h3>

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span>
                                    <div>Destination</div>
                                    <div>
                                      <select name="#" id="#" style="border: 1px solid #b8b8b8; width: 15em; padding: 0.3em 1em;">
                                        <option value="#">Dubai</option>
                                        <option value="#">Quwait</option>
                                      </select>
                                    </div>
                                </span>


                                <span style="margin: 0em 1em;">
                                    <div>Validity</div>
                                    <div>
                                      <select name="#" id="#" style="border: 1px solid #b8b8b8; width: 12em; padding: 0.3em 1em;">
                                        <option value="#">1-10 Days</option>
                                        <option value="#">11 - 20 Days</option>
                                        <option value="#">21 - 30 Day</option>
                                        <option value="#">1 Month - 2 Month</option>
                                        <option value="#">3 - Month - 4 Month</option>
                                      </select>
                                    </div>
                                </span>




                                <span style="margin: 0em 1em;">
                                    <div>Adults <span style="font-size: 10px;">(12 - 50 yrs)</span></div>
                                    <div><input type="number" style="border: 1px solid #b8b8b8; max-width: 7em; padding: 0.15em 0.1em;"></div>
                                </span>


                                <span style="margin: 0em 1em;">
                                    <div>Childs <span style="font-size: 10px;">(0 - 12 yrs)</span></div>
                                    <div><input type="number" style="border: 1px solid #b8b8b8; max-width: 7em; padding: 0.15em 0.1em;"></div>
                                </span>


                                <span style="margin-top: 2em; margin-bottom: 0.1em;">
                                  <button style="border: 1px solid orange; color: white; background-color: orange; min-width: 10em; max-height: 2.7em; padding: 0.15em 0.1em;">Add & Proceed</button>
                                </span>

                            </div>





                            <div style="display: flex; flex-wrap: wrap; justify-content: space-start; align-items: center; margin-top: 3em;">
                                
                                <div style="width: 100%;">
                                    <h3>My Selections</h3>
                                </div>

                                <div style="width: 100%; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; background-color: #f1f1f1; padding: 1em; margin-top: 1em;">
                                    <span>
                                        <div>Destination</div>
                                        <div>
                                          <p>Dubai</p>
                                        </div>
                                    </span>


                                    <span style="margin: 0em 1em;">
                                        <div>No. of Meals</div>
                                        <div>
                                          <p>5</p>
                                        </div>
                                    </span>


                                    <span>
                                        <div>Meal type</div>
                                        <div>
                                          <p>Non Veg</p>
                                        </div>
                                    </span>



                                    <span style="margin: 0em 1em;">
                                        <div>Meal Time</div>
                                        <div>
                                          <p>Lunch</p>
                                        </div>
                                    </span>




                                    <span style="margin: 0em 1em;">
                                        <div>Adults <span style="font-size: 10px;">(12 - 50 yrs)</span></div>
                                        <div>
                                          <p>5</p>
                                        </div>
                                    </span>


                                    <span style="margin: 0em 1em;">
                                        <div>Childs <span style="font-size: 10px;">(0 - 12 yrs)</span></div>
                                        <div>
                                          <p>8</p>
                                        </div>
                                    </span>


                                    <span style="margin-top: 2em; margin-bottom: 0.1em;">
                                      <button style="border: 1px solid black; color: white; background-color: black; min-width: 9em; max-height: 2.7em; padding: 0.15em 0.1em;">Remove</button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                
                
                </div>





                <!-- Tab - 6 -->
                <!-- Tab - 6 -->
                <div id="tab-6" class="tabs-on-menu tab-pane fade in active">
                    <div class="service-card-mrl-1r" style="padding: 1.2em; width: 100%;">
                       <h2>Term</h2>

                       <div style="width: 100%; padding: 1em;">
                           <div style="width: 100%; display: flex; align-items: center; border: 1px solid #f1f1f1; border-bottom: 1px solid orange; color: black; padding: 1em; margin: 1em 0em; background-color: #f9f9f9;">
                                <span style="margin-right: 1em; width: 1.5em; height: 1.5em; border-radius: 80px; background-color: orange; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg></span>
                                <p style="width: 100%; color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium alias itaque, consequatur, sint aut maiores soluta </p>
                           </div>


                           <div style="width: 100%; display: flex; align-items: center; border: 1px solid #f1f1f1; border-bottom: 1px solid orange; color: black; padding: 1em; margin: 1em 0em; background-color: #f9f9f9;">
                                <span style="margin-right: 1em; width: 1.5em; height: 1.5em; border-radius: 80px; background-color: orange; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg></span>
                                <p style="width: 100%; color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium alias itaque, consequatur, sint aut maiores soluta </p>
                           </div>


                           <div style="width: 100%; display: flex; align-items: center; border: 1px solid #f1f1f1; border-bottom: 1px solid orange; color: black; padding: 1em; margin: 1em 0em; background-color: #f9f9f9;">
                                <span style="margin-right: 1em; width: 1.5em; height: 1.5em; border-radius: 80px; background-color: orange; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg></span>
                                <p style="width: 100%; color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium alias itaque, consequatur, sint aut maiores soluta </p>
                           </div>


                           <div style="width: 100%; display: flex; align-items: center; border: 1px solid #f1f1f1; border-bottom: 1px solid orange; color: black; padding: 1em; margin: 1em 0em; background-color: #f9f9f9;">
                                <span style="margin-right: 1em; width: 1.5em; height: 1.5em; border-radius: 80px; background-color: orange; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg></span>
                                <p style="width: 100%; color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium alias itaque, consequatur, sint aut maiores soluta </p>
                           </div>


                           <div style="width: 100%; display: flex; align-items: center; border: 1px solid #f1f1f1; border-bottom: 1px solid orange; color: black; padding: 1em; margin: 1em 0em; background-color: #f9f9f9;">
                                <span style="margin-right: 1em; width: 1.5em; height: 1.5em; border-radius: 80px; background-color: orange; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg></span>
                                <p style="width: 100%; color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium alias itaque, consequatur, sint aut maiores soluta </p>
                           </div>


                           <div style="width: 100%; display: flex; align-items: center; border: 1px solid #f1f1f1; border-bottom: 1px solid orange; color: black; padding: 1em; margin: 1em 0em; background-color: #f9f9f9;">
                                <span style="margin-right: 1em; width: 1.5em; height: 1.5em; border-radius: 80px; background-color: orange; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg></span>
                                <p style="width: 100%; color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium alias itaque, consequatur, sint aut maiores soluta </p>
                           </div>


                           <div style="width: 100%; display: flex; align-items: center; border: 1px solid #f1f1f1; border-bottom: 1px solid orange; color: black; padding: 1em; margin: 1em 0em; background-color: #f9f9f9;">
                                <span style="margin-right: 1em; width: 1.5em; height: 1.5em; border-radius: 80px; background-color: orange; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg></span>
                                <p style="width: 100%; color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium alias itaque, consequatur, sint aut maiores soluta </p>
                           </div>


                           <div style="width: 100%; display: flex; align-items: center; border: 1px solid #f1f1f1; border-bottom: 1px solid orange; color: black; padding: 1em; margin: 1em 0em; background-color: #f9f9f9;">
                                <span style="margin-right: 1em; width: 1.5em; height: 1.5em; border-radius: 80px; background-color: orange; display: flex; justify-content: center; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4z"/></svg></span>
                                <p style="width: 100%; color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium alias itaque, consequatur, sint aut maiores soluta </p>
                           </div> 
                       </div>
                    </div>
                </div>
                
                

            </div>
        </div>
    </div>






<!-- Tab 3: Modals -->
<!-- Tab 3: Modals -->

<!-- Tab 2: - left: 1 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-1-left-sides-tab-2" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Hyatt hotel of dubai</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/1838640/pexels-photo-1838640.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                  <h3 style="margin-top: 1em;">Hyatt hotel of dubai</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-1" style="min-width: 80px; display: inline-block;">Check In</label>  
                      <input type="date" placeholder="Check in" id="hotel-check-in-1">
                    </span>


                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-date-1" style="min-width: 80px; display: inline-block;">Check Out</label>  
                      <input type="date" placeholder="Check out" id="hotel-check-in-date-1">
                    </span>
                  </div>


                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Meal Plan</option>
                        <option value="#">BreakFast with Lunch & Dinner</option>
                        <option value="#">Only Break-Fast</option>
                        <option value="#">Only Lunch</option>
                        <option value="#">Only Dinner</option>
                        <option value="#">Break fast & Lunch</option>
                        <option value="#">Lunch & Dinner</option>
                        <option value="#">Dinner & Break Fast</option>
                      </select>
                    </span>


                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="Adult">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWN">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWB">
                    </span>
                  </div>





                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px; width: 100%;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Room Type</option>
                        <option value="#">Standrd Room</option>
                      </select>
                    </span>
                  </div>





                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>





<!-- Tab 2: - left: 2 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-2-left-sides-tab-2" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Mughal 7 Star Hotel of dubai</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/705773/pexels-photo-705773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                  <h3 style="margin-top: 1em;">Mughal 7 Star Hotel of dubai</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-2" style="min-width: 80px; display: inline-block;">Check In</label>  
                      <input type="date" placeholder="Check in" id="hotel-check-in-2">
                    </span>


                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-date-2" style="min-width: 80px; display: inline-block;">Check Out</label>  
                      <input type="date" placeholder="Check out" id="hotel-check-in-date-2">
                    </span>
                  </div>


                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Meal Plan</option>
                        <option value="#">BreakFast with Lunch & Dinner</option>
                        <option value="#">Only Break-Fast</option>
                        <option value="#">Only Lunch</option>
                        <option value="#">Only Dinner</option>
                        <option value="#">Break fast & Lunch</option>
                        <option value="#">Lunch & Dinner</option>
                        <option value="#">Dinner & Break Fast</option>
                      </select>
                    </span>


                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="Adult">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWN">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWB">
                    </span>
                  </div>





                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px; width: 100%;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Room Type</option>
                        <option value="#">Standrd Room</option>
                      </select>
                    </span>
                  </div>





                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>



<!-- Tab 2: - left: 3 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-3-left-sides-tab-2" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Premium 5 Star Hotel</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/2462015/pexels-photo-2462015.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                  <h3 style="margin-top: 1em;">Premium 5 Star Hotel</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-3" style="min-width: 80px; display: inline-block;">Check In</label>  
                      <input type="date" placeholder="Check in" id="hotel-check-in-3">
                    </span>


                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-date-3" style="min-width: 80px; display: inline-block;">Check Out</label>  
                      <input type="date" placeholder="Check out" id="hotel-check-in-date-3">
                    </span>
                  </div>


                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Meal Plan</option>
                        <option value="#">BreakFast with Lunch & Dinner</option>
                        <option value="#">Only Break-Fast</option>
                        <option value="#">Only Lunch</option>
                        <option value="#">Only Dinner</option>
                        <option value="#">Break fast & Lunch</option>
                        <option value="#">Lunch & Dinner</option>
                        <option value="#">Dinner & Break Fast</option>
                      </select>
                    </span>


                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="Adult">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWN">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWB">
                    </span>
                  </div>





                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px; width: 100%;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Room Type</option>
                        <option value="#">Standrd Room</option>
                      </select>
                    </span>
                  </div>





                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>



<!-- Tab 2: - Right: 1 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-1-right-sides-tab-2" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">The HotelBlue India</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/260931/pexels-photo-260931.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                  <h3 style="margin-top: 1em;">The HotelBlue India</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-1" style="min-width: 80px; display: inline-block;">Check In</label>  
                      <input type="date" placeholder="Check in" id="hotel-check-in-1">
                    </span>


                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-date-1" style="min-width: 80px; display: inline-block;">Check Out</label>  
                      <input type="date" placeholder="Check out" id="hotel-check-in-date-1">
                    </span>
                  </div>


                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Meal Plan</option>
                        <option value="#">BreakFast with Lunch & Dinner</option>
                        <option value="#">Only Break-Fast</option>
                        <option value="#">Only Lunch</option>
                        <option value="#">Only Dinner</option>
                        <option value="#">Break fast & Lunch</option>
                        <option value="#">Lunch & Dinner</option>
                        <option value="#">Dinner & Break Fast</option>
                      </select>
                    </span>


                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="Adult">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWN">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWB">
                    </span>
                  </div>





                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px; width: 100%;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Room Type</option>
                        <option value="#">Standrd Room</option>
                      </select>
                    </span>
                  </div>





                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>



<!-- Tab 2: - Right: 2 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-2-right-sides-tab-2" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Hotel of Saudi</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/1470502/pexels-photo-1470502.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                  <h3 style="margin-top: 1em;">Hotel of Saudi</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-1" style="min-width: 80px; display: inline-block;">Check In</label>  
                      <input type="date" placeholder="Check in" id="hotel-check-in-1">
                    </span>


                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-date-1" style="min-width: 80px; display: inline-block;">Check Out</label>  
                      <input type="date" placeholder="Check out" id="hotel-check-in-date-1">
                    </span>
                  </div>


                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Meal Plan</option>
                        <option value="#">BreakFast with Lunch & Dinner</option>
                        <option value="#">Only Break-Fast</option>
                        <option value="#">Only Lunch</option>
                        <option value="#">Only Dinner</option>
                        <option value="#">Break fast & Lunch</option>
                        <option value="#">Lunch & Dinner</option>
                        <option value="#">Dinner & Break Fast</option>
                      </select>
                    </span>


                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="Adult">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWN">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWB">
                    </span>
                  </div>





                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px; width: 100%;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Room Type</option>
                        <option value="#">Standrd Room</option>
                      </select>
                    </span>
                  </div>





                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>



<!-- Tab 2: - Right: 3 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-3-right-sides-tab-2" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Reddison Blue Hotel</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/3144580/pexels-photo-3144580.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                  <h3 style="margin-top: 1em;">Reddison Blue Hotel</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-1" style="min-width: 80px; display: inline-block;">Check In</label>  
                      <input type="date" placeholder="Check in" id="hotel-check-in-1">
                    </span>


                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-date-1" style="min-width: 80px; display: inline-block;">Check Out</label>  
                      <input type="date" placeholder="Check out" id="hotel-check-in-date-1">
                    </span>
                  </div>


                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Meal Plan</option>
                        <option value="#">BreakFast with Lunch & Dinner</option>
                        <option value="#">Only Break-Fast</option>
                        <option value="#">Only Lunch</option>
                        <option value="#">Only Dinner</option>
                        <option value="#">Break fast & Lunch</option>
                        <option value="#">Lunch & Dinner</option>
                        <option value="#">Dinner & Break Fast</option>
                      </select>
                    </span>


                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="Adult">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWN">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWB">
                    </span>
                  </div>





                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px; width: 100%;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Room Type</option>
                        <option value="#">Standrd Room</option>
                      </select>
                    </span>
                  </div>





                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>




<!-- Tab 2: - Right: 4 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-4-right-sides-tab-2" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Reliance Hotels of Dubai</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/2373201/pexels-photo-2373201.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                  <h3 style="margin-top: 1em;">Reliance Hotels of Dubai</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-1" style="min-width: 80px; display: inline-block;">Check In</label>  
                      <input type="date" placeholder="Check in" id="hotel-check-in-1">
                    </span>


                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-date-1" style="min-width: 80px; display: inline-block;">Check Out</label>  
                      <input type="date" placeholder="Check out" id="hotel-check-in-date-1">
                    </span>
                  </div>


                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Meal Plan</option>
                        <option value="#">BreakFast with Lunch & Dinner</option>
                        <option value="#">Only Break-Fast</option>
                        <option value="#">Only Lunch</option>
                        <option value="#">Only Dinner</option>
                        <option value="#">Break fast & Lunch</option>
                        <option value="#">Lunch & Dinner</option>
                        <option value="#">Dinner & Break Fast</option>
                      </select>
                    </span>


                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="Adult">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWN">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWB">
                    </span>
                  </div>





                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px; width: 100%;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Room Type</option>
                        <option value="#">Standrd Room</option>
                      </select>
                    </span>
                  </div>





                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>



<!-- Tab 2: - Right: 5 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-5-right-sides-tab-2" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">The Green's Hotel</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/764830/pexels-photo-764830.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                  <h3 style="margin-top: 1em;">The Green's Hotel</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-1" style="min-width: 80px; display: inline-block;">Check In</label>  
                      <input type="date" placeholder="Check in" id="hotel-check-in-1">
                    </span>


                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-date-1" style="min-width: 80px; display: inline-block;">Check Out</label>  
                      <input type="date" placeholder="Check out" id="hotel-check-in-date-1">
                    </span>
                  </div>


                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Meal Plan</option>
                        <option value="#">BreakFast with Lunch & Dinner</option>
                        <option value="#">Only Break-Fast</option>
                        <option value="#">Only Lunch</option>
                        <option value="#">Only Dinner</option>
                        <option value="#">Break fast & Lunch</option>
                        <option value="#">Lunch & Dinner</option>
                        <option value="#">Dinner & Break Fast</option>
                      </select>
                    </span>


                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="Adult">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWN">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWB">
                    </span>
                  </div>





                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px; width: 100%;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Room Type</option>
                        <option value="#">Standrd Room</option>
                      </select>
                    </span>
                  </div>





                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>



<!-- Tab 2: - Right: 6 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-6-right-sides-tab-2" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">The Black & White Hotels</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/2992314/pexels-photo-2992314.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                  <h3 style="margin-top: 1em;">The Black & White Hotels</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-1" style="min-width: 80px; display: inline-block;">Check In</label>  
                      <input type="date" placeholder="Check in" id="hotel-check-in-1">
                    </span>


                    <span style="font-size: 12px; width: 45%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <label for="hotel-check-in-date-1" style="min-width: 80px; display: inline-block;">Check Out</label>  
                      <input type="date" placeholder="Check out" id="hotel-check-in-date-1">
                    </span>
                  </div>


                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Meal Plan</option>
                        <option value="#">BreakFast with Lunch & Dinner</option>
                        <option value="#">Only Break-Fast</option>
                        <option value="#">Only Lunch</option>
                        <option value="#">Only Dinner</option>
                        <option value="#">Break fast & Lunch</option>
                        <option value="#">Lunch & Dinner</option>
                        <option value="#">Dinner & Break Fast</option>
                      </select>
                    </span>


                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="Adult">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWN">
                    </span>
                    
                    <span style="margin: 2px; font-size: 12px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <input type="number" placeholder="CWB">
                    </span>
                  </div>





                  <div style="display: flex; justify-content: space-between; align-items: center; margin: 1em 0em;">
                    <span style="margin: 2px; font-size: 12px; width: 100%;  display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid orange;">
                      <select name="#" id="#">
                        <option value="#">Select Room Type</option>
                        <option value="#">Standrd Room</option>
                      </select>
                    </span>
                  </div>





                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>
















<!-- Tab 3: Modals -->
<!-- Tab 3: Modals -->

<!-- Tab 3: - left: 1 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-2-left-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Half Day Dubai Tour</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/413960/pexels-photo-413960.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">Half Day Dubai Tour</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>




<!-- Tab 3: - left: 2 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-2-left-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Half Day Dubai Tour</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/705773/pexels-photo-705773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">Half Day Dubai Tour</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>











<!-- Tab 3: - left: 2 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-2-left-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">3 Hours Boat Trip</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/417344/pexels-photo-417344.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">3 Hours Boat Trip</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>




<!-- Tab 3: - left: 3 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-3-left-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">1 Hours Helicopter Trip</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/90286/pexels-photo-90286.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">1 Hours Helicopter Trip</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>



<!-- Tab 3: - right: 1 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-1-right-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">2 Hours Hockey Game</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/3599596/pexels-photo-3599596.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">2 Hours Hockey Game</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Any time</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>

<!-- Tab 3: - left: 2 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-2-right-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">1 Day Ship Trip over dubai's boundaries</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/813011/pexels-photo-813011.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">1 Day Ship Trip over dubai's boundaries</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>


<!-- Tab 3: - left: 3 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-3-right-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Night Dinner with Family</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/735869/pexels-photo-735869.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">Night Dinner with Family</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>


<!-- Tab 3: - left: 4 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-4-right-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">5 Star Hotel Dinner Room Booking</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/251808/pexels-photo-251808.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">5 Star Hotel Dinner Room Booking</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>


<!-- Tab 3: - left: 5 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-5-right-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">4 Hours Desert Tour</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/414110/pexels-photo-414110.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">4 Hours Desert Tour</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>


<!-- Tab 3: - left: 6 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-6-right-sides-tab-3" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Night Visit in Museum of Future in dubai</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/7199827/pexels-photo-7199827.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">Night Visit in Museum of Future in dubai</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Location: Dubai</div>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>










<!--  -->
<!-- Tab 4: Modals -->
<!-- Tab 4: Modals -->

<!-- Tab4 - left: 1 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-1-left-sides-tab-4" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">BMW S7 Transportation service</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/892522/pexels-photo-892522.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">BMW S7 Transportation service</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Transfer: Drop Off</div>
                    </p>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: center; margin: 1em 0em;">
                  <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Baggage Quantity</option>
                      <option value="#">1 Pcs</option>
                      <option value="#">2 Pcs</option>
                      <option value="#">3 Pcs</option>
                      <option value="#">4 Pcs</option>
                      <option value="#">5 Pcs</option>
                      <option value="#">6 Pcs</option>
                      <option value="#">7 Pcs</option>
                      <option value="#">8 Pcs</option>
                    </select>
                    <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Transport Type</option>
                      <option value="#">PVT</option>
                      <option value="#">SPVT</option>
                      <option value="#">CPVT</option>
                    </select>
                  </div>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>





<!-- Tab4 - left: 2 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-2-left-sides-tab-4" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Rolls Royz R4 Trans. service</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/3764984/pexels-photo-3764984.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">Rolls Royz R4 Trans. service</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Transfer: Drop Off</div>
                    </p>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: center; margin: 1em 0em;">
                  <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Baggage Quantity</option>
                      <option value="#">1 Pcs</option>
                      <option value="#">2 Pcs</option>
                      <option value="#">3 Pcs</option>
                      <option value="#">4 Pcs</option>
                      <option value="#">5 Pcs</option>
                      <option value="#">6 Pcs</option>
                      <option value="#">7 Pcs</option>
                      <option value="#">8 Pcs</option>
                    </select>
                    <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Transport Type</option>
                      <option value="#">PVT</option>
                      <option value="#">SPVT</option>
                      <option value="#">CPVT</option>
                    </select>
                  </div>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>




<!-- Tab4 - left: 3 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-3-left-sides-tab-4" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Porchue Luxury Trans. Service</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/919073/pexels-photo-919073.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">Porchue Luxury Trans. Service</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Transfer: Drop Off</div>
                    </p>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: center; margin: 1em 0em;">
                  <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Baggage Quantity</option>
                      <option value="#">1 Pcs</option>
                      <option value="#">2 Pcs</option>
                      <option value="#">3 Pcs</option>
                      <option value="#">4 Pcs</option>
                      <option value="#">5 Pcs</option>
                      <option value="#">6 Pcs</option>
                      <option value="#">7 Pcs</option>
                      <option value="#">8 Pcs</option>
                    </select>
                    <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Transport Type</option>
                      <option value="#">PVT</option>
                      <option value="#">SPVT</option>
                      <option value="#">CPVT</option>
                    </select>
                  </div>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Remove</button>
        <button type="button" class="buttons-on-modal-pri">Edit & Change</button>
      </div>
    </div>
  </div>
</div>




<!-- Tab4 - right: 1 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-1-right-sides-tab-4" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Nissan N23 Pickup & Drop off</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/4674338/pexels-photo-4674338.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">Nissan N23 Pickup & Drop off</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Transfer: Drop Off</div>
                    </p>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: center; margin: 1em 0em;">
                  <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Baggage Quantity</option>
                      <option value="#">1 Pcs</option>
                      <option value="#">2 Pcs</option>
                      <option value="#">3 Pcs</option>
                      <option value="#">4 Pcs</option>
                      <option value="#">5 Pcs</option>
                      <option value="#">6 Pcs</option>
                      <option value="#">7 Pcs</option>
                      <option value="#">8 Pcs</option>
                    </select>
                    <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Transport Type</option>
                      <option value="#">PVT</option>
                      <option value="#">SPVT</option>
                      <option value="#">CPVT</option>
                    </select>
                  </div>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>




<!-- Tab4 - right: 2 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-2-right-sides-tab-4" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Bus for Family Transportation</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/3608967/pexels-photo-3608967.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">Bus for Family Transportation</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Transfer: Drop Off</div>
                    </p>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: center; margin: 1em 0em;">
                  <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Baggage Quantity</option>
                      <option value="#">1 Pcs</option>
                      <option value="#">2 Pcs</option>
                      <option value="#">3 Pcs</option>
                      <option value="#">4 Pcs</option>
                      <option value="#">5 Pcs</option>
                      <option value="#">6 Pcs</option>
                      <option value="#">7 Pcs</option>
                      <option value="#">8 Pcs</option>
                    </select>
                    <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Transport Type</option>
                      <option value="#">PVT</option>
                      <option value="#">SPVT</option>
                      <option value="#">CPVT</option>
                    </select>
                  </div>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>



<!-- Tab4 - right: 2 -->
<div class="modal fade opacity-1" style="backdrop-filter: blur(0.4em); height: 100%; width: 100%;" id="modal-3-right-sides-tab-4" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-top: 2em;">
  <div class="modal-dialog">
    <div class="modal-content" style="box-shadow: none; padding: 1em; margin-top: 10em; border-radius: 1em; border: 1px solid orange;">
      <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 1em;">
        <h3 id="exampleModalLabel">Bus Transportation Booking</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="">
      <div class="card  mb-3 card-services-srvs-1" style="max-width: 500px; border: none; padding: 0; background: white;">
          <div class="row g-0 on-mobile-w-full">
              <div class="col-md-4 on-mobile-w-full" style="width: 100%; height: 120px; background: red; display: flex; justify-content: center; align-items: center; overflow: hidden; ">
                  <img src="https://images.pexels.com/photos/569679/pexels-photo-569679.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid rounded-start" alt="...">
              </div>

              <div>
                <h3 style="margin-top: 1em;">Bus Transportation Booking</h3>
                  <p class="" style="margin-top: -10px;">
                    </p><div style="color: #818181; font-size: 12px;">Transfer: Drop Off</div>
                    </p>
                    <div style="color: #818181; font-size: 12px; margin-top: -10px">City: Dubai</div>
                  <p></p>

                  <div style="display: flex; justify-content: center; margin: 1em 0em;">
                  <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Baggage Quantity</option>
                      <option value="#">1 Pcs</option>
                      <option value="#">2 Pcs</option>
                      <option value="#">3 Pcs</option>
                      <option value="#">4 Pcs</option>
                      <option value="#">5 Pcs</option>
                      <option value="#">6 Pcs</option>
                      <option value="#">7 Pcs</option>
                      <option value="#">8 Pcs</option>
                    </select>
                    <select name="#" id="#" style="padding: 0.5em; border-bottom: 1px solid orange; margin: 4px;">
                      <option value="#">Select Transport Type</option>
                      <option value="#">PVT</option>
                      <option value="#">SPVT</option>
                      <option value="#">CPVT</option>
                    </select>
                  </div>

                  <p class="card-text">
                    </p><div>Ratings: 4.9 | 
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="orange" d="m19.65 9.04l-4.84-.42l-1.89-4.45c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.73l3.67-3.18c.67-.58.32-1.68-.56-1.75M12 15.4V6.1l1.71 4.04l4.38.38l-3.32 2.88l1 4.28z"></path></svg>
                    </span>
                </div>
                    <div style="margin-top: -12px;">Price: $200/- per day</div>
                </div>
              </div>
          </div>
      </div>



      <div style="display: flex; justify-content: end;">
        <button type="button" class="buttons-on-modal-sec" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="buttons-on-modal-pri">Add & Proceed</button>
      </div>
    </div>
  </div>
</div>






<?php include "includes/footer.php" ?>





    
</body>


    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
        })
    </script>





    <!-- JavaScript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

    <script src="/assets/js/vendors.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/animation.js"></script>
</html>