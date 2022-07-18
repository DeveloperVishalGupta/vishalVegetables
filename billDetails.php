<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once("./header.php") ?>

    <div class="conatiner-fluid lightGreenBG">
        <div class="justify-content-center py-4 row">
            <div class="col-2">
                <span class="border-secondary align-items-center border green_bgcolor box_shadow border-light d-flex justify-content-center mx-auto rounded-circle" style="width: 50px;height: 50px;"> <i class="fa-cart-shopping text-light fa-solid" style="font-size: larger;"></i></span>
            </div>
            <div class="col-2 text-center">
                <span class=" border-secondary align-items-center border d-flex  box_shadow justify-content-center mx-auto rounded-circle" style="width: 50px;height: 50px;"> <i class="fa-solid fa-location-dot" style="font-size: larger;"></i></span>
            </div>
            <div class="col-2 text-center">
                <span class="border-secondary align-items-center border d-flex  box_shadow justify-content-center mx-auto rounded-circle" style="width: 50px;height: 50px;"> <i class="fa-solid fa-wallet" style="font-size: larger;"></i></span>
            </div>
        </div>
    </div>
    <div class="conatiner-fluid my-2">
        <div class="row" style="height: 54.5vh;">
            <!-- cart product details  -->
            <div class="col-md-7 d-none">
                <div class="box_shadow_with_padding">
                    <h5>Cart Items <span class="green_color">10</span></h5>
                    <div class="align-items-center border border-danger d-flex justify-content-between px-3 py-1 rounded mb-3" style="background-color: #ff4e4e45 !important;">
                        <div class="">
                            <div class="d-flex">
                                <span class="mr-2"><i class="fa-circle-exclamation fa-solid text-danger"></i></span>
                                <p class="mb-1 text-danger">6 Items Unavailable</p>
                            </div>
                            <p class="mb-1 small" style="letter-spacing: 1px;">Sorry some items from your cart are sold out for now</p>
                        </div>
                        <button class="btn btn-sm green_bgcolor text-light" type="button">Review</button>
                    </div>
                    <div class="">
                        <div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="align-items-center border mb-3 justify-content-around">
                            <div class="align-items-center row">
                                <div class="col-3">
                                    <img src="./images/cat-img4.jpg" alt="" class="w-75" style=" border-radius: 9px;">
                                </div>
                                <div class="col-5 pl-0">
                                    <h5 class="h5 ">Watermelon <span class="green_color mb-1 weight ">( 500 gm ) </span></h5>
                                    <h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i>100</span></span></h5>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="">
                                        <span class=""><i class="fa-solid fa-trash-can" style="font-size: large;"></i></span>
                                        <div class="mt-3">
                                            <button class="border-secondary btn btn-sm green_bgcolor text-light" type="button" style="letter-spacing: 1px;"> <i class="fa-solid fa-minus text-light"></i> </button>
                                            <button class="btn btn-sm text-dark" type="button" style="letter-spacing: 1px;">10</button>
                                            <button class="border-secondary btn btn-sm green_bgcolor text-light" type="button" style="letter-spacing: 1px;"> <i class="fa-solid fa-plus text-light"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="box-shadow: 2px 2px 5px 1px #c8c8c8;border-radius: 9px;" class="align-items-center border mb-3 justify-content-around">
                            <div class="align-items-center row">
                                <div class="col-3">
                                    <img src="./images/cat-img4.jpg" alt="" class="w-75" style=" border-radius: 9px;">
                                </div>
                                <div class="col-5 pl-0">
                                    <h5 class="h5 ">Watermelon <span class="green_color mb-1 weight ">( 500 gm ) </span></h5>
                                    <h5 class="Price"><span class=""><span class="green_color"><i class="fa-indian-rupee-sign fa-solid mr-1"></i>100</span></span></h5>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="">
                                        <span class=""><i class="fa-solid fa-trash-can" style="font-size: large;"></i></span>
                                        <div class="mt-3">
                                            <button class="border-secondary btn btn-sm green_bgcolor text-light" type="button" style="letter-spacing: 1px;"> <i class="fa-solid fa-minus text-light"></i> </button>
                                            <button class="btn btn-sm text-dark" type="button" style="letter-spacing: 1px;">10</button>
                                            <button class="border-secondary btn btn-sm green_bgcolor text-light" type="button" style="letter-spacing: 1px;"> <i class="fa-solid fa-plus text-light"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="box_shadow_with_padding">
                    <div id="map" style="height: 250px !important;">

                    </div>
                    <div class="bg-light border-0 mt-2 mx-auto overflow-hidden pac-card rounded " id="pac-card" style="box-shadow: darkgrey -1px 1px 3px;; width: 90%;">
                        <div id="pac-container" class="d-flex ">
                            <input id="pac-input" type="text" class="form-control border-right-0" placeholder="Enter a location" />
                            <button type="button" id="curr" onclick="getLocation()" class="bg-white border btn btn-link"><i class="fa-solid fa-location-crosshairs"></i></button>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row profile">
                            <div class="col-12 d-flex justify-content-between pb-2 pt-4 px-0" style="border-bottom: 2px solid gray;">
                                <!-- <input type="checkbox" name="" class="pr-2" id=""> -->
                                <div class="pl-2">
                                    <h6 class="mb-0 " style="font-weight: 600;">Home</h6>
                                    <p class="secondryFontFamily mb-0">85/3 Soi Prachumporn Chaengwatana Road Thungsonghong
                                        Laksi, Bangkok,- 10210. Thailand</p>
                                </div>
                                <div class="changes_address pt-2">
                                    <button type="button" style="text-decoration: none;" class="border-dark btn btn-light btn-link btn-sm text-dark">Change</button>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="container">
                        <form action="" class="py-3">
                            <input type="text" class="form-control mb-2" placeholder="Line 1">
                            <input type="text" class="form-control mb-2" placeholder="Line 2">
                            <input type="text" class="form-control mb-2" placeholder="Line 3">
                            <input type="text" class="form-control mb-2" placeholder="Line 4">
                        </form>
                    </div>
                    <div class="container">
                        <small><b>Save As</b></small>
                        <div class="btns mt-2">
                            <button type="button" style="text-decoration: none;" class="px-3 border-dark btn btn-light btn-link btn-sm text-dark">Home</button>
                            <button type="button" style="text-decoration: none;" class="px-3 border-dark btn btn-light btn-link btn-sm text-dark">Office</button>
                            <button type="button" id="save_as_other" style="text-decoration: none; background-color: lightgray;" class="px-3 ml-2  btn btn-light btn-sm text-dark">Other</button>
                            <input type="text" class="form-control mt-2" style="display: none;" id="address_name" placeholder="Eg. John’s home, Mom’s place etc">
                        </div>
                    </div>
                    <div id="infowindow-content" style="display: none;">
                        <span id="place-name" class="title font-weight-bold"></span><br />
                        <span id="place-address"></span>
                    </div>
                    <div class="save_address text-center">
                        <a href="#"><button type="button" class="btn btn-sm green_bgcolor mt-4 px-3 rounded text-light">Save address</button></a>
                    </div>

                    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyUheX8uRbF-htWMLzI6n4ENhFLIRpN1Q&callback=initMap&libraries=places&v=weekly" async></script>
</div>
                <script>
                    // This example requires the Places library. Include the libraries=places
                    // parameter when you first load the API. For example:

                    function initMap() {
                        const map = new google.maps.Map(document.getElementById("map"), {
                            center: {
                                lat: 19.0692646,
                                lng: 72.9986069
                            },
                            zoom: 13,
                            mapTypeControl: false,
                        });
                        const card = document.getElementById("pac-card");
                        const input = document.getElementById("pac-input");
                        const options = {
                            fields: ["formatted_address", "geometry", "name"],
                            strictBounds: false,
                            types: ["establishment"],
                        };

                        // map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

                        const autocomplete = new google.maps.places.Autocomplete(input, options);

                        // Bind the map's bounds (viewport) property to the autocomplete object,
                        // so that the autocomplete requests use the current map bounds for the
                        // bounds option in the request.
                        autocomplete.bindTo("bounds", map);

                        const infowindow = new google.maps.InfoWindow();
                        const infowindowContent = document.getElementById("infowindow-content");

                        infowindow.setContent(infowindowContent);

                        const marker = new google.maps.Marker({
                            map,
                            anchorPoint: new google.maps.Point(0, -29),
                        });

                        autocomplete.addListener("place_changed", () => {
                            infowindow.close();
                            marker.setVisible(false);

                            const place = autocomplete.getPlace();

                            if (!place.geometry || !place.geometry.location) {
                                // User entered the name of a Place that was not suggested and
                                // pressed the Enter key, or the Place Details request failed.
                                window.alert("No details available for input: '" + place.name + "'");
                                return;
                            }

                            // If the place has a geometry, then present it on a map.
                            if (place.geometry.viewport) {
                                map.fitBounds(place.geometry.viewport);
                            } else {
                                map.setCenter(place.geometry.location);
                                map.setZoom(17);
                            }
                            console.log(`location ${place.geometry.location},name ${ place.name}.addredd ${place.formatted_address}`);
                        });



                    }
                </script>
                <script>
                    $(function() {
                        $("#Header").load("header.html");
                        $("#footer").load("footer.html");
                    });
                    $("#save_as_other").click(function() {
                        $("#address_name").show();
                    })
                </script>
                <script src="./js/javascript.js"></script>

            </div>
            <div class="col-md-5">
                <div class="box_shadow_with_padding">
                    <h5>Bill Details</h5>
                    <table class="table table-borderless secondryFontFamily">
                        <tbody>
                            <tr>
                                <td colspan="2" class="secondryFontFamily">Total Items Price</td>
                                <td class="secondryFontFamily"><span> <i class="fa-indian-rupee-sign fa-solid mr-1 "></i></span>672</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="secondryFontFamily">Product Discount</td>
                                <td class="secondryFontFamily"><span>- <i class="fa-indian-rupee-sign fa-solid mr-1"></i></span>34</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="secondryFontFamily">Cart Total <span class="badge badge-success float-right small secondryFontFamily" style="letter-spacing: 1px;">5 items</span></td>
                                <td class="secondryFontFamily"><span> <i class="fa-indian-rupee-sign fa-solid mr-1"></i></span>638</td>

                            </tr>
                            <tr>
                                <td colspan="2" class="secondryFontFamily">Other Charges</td>
                                <td class="secondryFontFamily"><span><i class="fa-indian-rupee-sign fa-solid mr-1"></i></span>0</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="">Total To Pay <span class="badge badge-success float-right small secondryFontFamily" style="letter-spacing: 1px;">You saved <i class="fa-indian-rupee-sign text-light fa-solid mr-1"></i> 34</span></td>
                                <td class=""><span> <i class="fa-indian-rupee-sign fa-solid mr-1"></i></span>638</td>

                            </tr>
                        </tbody>
                    </table>
                    <div class="align-items-center border d-flex green_bgcolor justify-content-between mt-4 mx-auto px-4 py-1 rounded w-75">
                        <div class="">
                            <p class="mb-0 text-light">Total Price</p>
                            <p class="mb-0 text-light">638</p>
                        </div>
                        <h6 class="h5 mb-0 text-light">Select Address</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <?php include_once("./footer.php") ?> -->
</body>

</html>