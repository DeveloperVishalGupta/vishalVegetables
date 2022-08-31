<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- customCss link  -->
    <link rel="stylesheet" href="../css/adminStyle.css">
    <!-- <link rel="stylesheet" href="./boostrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../boostrap/css/bootstrap.css">

    <!-- animate.js cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- owlcarousel css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- iziTost css  -->
    <link rel="stylesheet" href="./node_modules/izitoast/dist/css/iziToast.min.css">

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="bg-light">
    <div class="mx-0 row">
        <div class="bg-white col-lg-2 col-md-3 col-12 rounded adminMenu">
            <section class="MenuSection">
                <!-- user Details  -->
                <div class="align-items-center d-flex justify-content-between py-1 userDetails">
                    <div class="d-flex">
                        <img src="../images/logo.png" alt="UserImage" class="border rounded-circle" style="width: 40px; height: 40px;">
                        <div class="UserName ml-2">
                            <p class="mb-0  textLightGray respestToUser mediumFontWeight" style="font-size: smaller;">Hello</p>
                            <h6 class="mb-0 text-dark">Vishal Gupta</h6>
                        </div>
                    </div>
                    <span class="logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                </div>
                <!-- totla earning  -->
                <div class="TotalEarning border-bottom my-3" style="border-width: 2px;">
                    <p class="textLightGray mb-0 mediumFontWeight" style="font-size: smaller;">Earning</p>
                    <h4><span><i class="fa-solid fa-indian-rupee-sign"></i> </span> 12,000/-</h4>
                </div>
                <div class="menus">
                    <ul class="list-unstyled mb-0">
                        <li class=" pl-3 py-1 menuList"><span class="mr-2"><i class="fa-solid fa-braille" style="width: 25px;"></i></span>Dashboard</li>
                        <li class=" pl-3 py-1 menuList"><span class="mr-2"><i class="fa-solid fa-cubes-stacked" style="width: 25px;"></i></span>Products</li>
                        <li class=" pl-3 py-1 menuList"><span class="mr-2"><i class="fa-solid fa-basket-shopping" style="width: 25px;"></i></span>Sales</li>
                        <div class="align-items-center d-flex justify-content-between pr-3 menuList">
                            <li class=" pl-3 py-1 "><span class="mr-2"><i class="fa-solid fa-dolly" style="width: 25px;"></i></span>Orders</li>
                            <span class="badge badge-danger">4</span>
                        </div>
                        <div class="align-items-center d-flex justify-content-between pr-3 menuList">
                            <li class=" pl-3 py-1 "><span class="mr-2"><i class="fa-solid fa-chart-line" style="width: 25px;"></i></span>Analysis</li>
                            <span class="badge badge-danger">4</span>
                        </div>
                        <li class=" pl-3 py-1 menuList"><span class="mr-2"><i class="fa-solid fa-money-check-dollar" style="width: 25px;"></i></span>Payout</li>
                        <li class=" pl-3 py-1 menuList"><span class="mr-2"><i class="fa-solid fa-screwdriver-wrench" style="width: 25px;"></i></span>Setting</li>
                    </ul>
                </div>
                <!-- <div class="logo_copywrite position-absolute text-center" style="bottom: 8px;right: 20%;">
                    <img src="../images/logo.png" alt="" class="text-left" style="width: 35%;">
                    <div class="">
                        <p class=" font-weight-bold mb-0 small">@2022 Vishal Gupta</p>
                        <p class="small mb-0">All rights reserved</p>
                    </div>
                </div> -->
            </section>
        </div>
        <div class="col-lg-10 col-md-9 bg-white rounded">
            <div class="align-items-center mx-0 row mb-5">
                <div class="col-md-4">
                    <h4 class="mb-0">Dashboard</h4>
                    <p class="mb-0 small textLightGray">Everything here</p>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mt-2 px-1 searchbar" style="border-bottom: 1px solid lightgray;">
                        <span class="textLightGray"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="search" class="border-0 form-control py-0">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="align-items-center d-flex justify-content-end">
                        <p class="mb-0 small" style="font-weight: 600;">View Your Store</p>
                        <span class="ml-2"><i class="fa-solid fa-money-bill-trend-up"></i></span>
                    </div>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="saleReport">
                                <h6 class="mb-4">Sale Reports</h6>
                                <div class="d-flex">
                                    <p class='mb-0 pr-2'>Showing for : </p>
                                    <div class="" style="font-weight: 500;">

                                        <span class="mr-2"><i class="fa-solid fa-calendar-days"></i></span>
                                        <span class="firstDate">aug 24 - </span>
                                        <span class="LastDate">aug 29</span>
                                        <span class="currentYear">2022</span>
                                    </div>
                                </div>

                                <div>
                                    <canvas id="saleReportsChart" width="400" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="Earning">
                                <h6>Earning</h6>
                                <div>
                                    <canvas id="earningSaleChart" class="w-100" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="statisticHeader">
                        <h6 class="mb-0 ">Statics</h6>
                        <p class="small mb-0 text-dark mediumFontWeight"><span class="mr-2"><i class="fa-solid fa-calendar-days"></i></span> Last 30 days</p>
                    </div>
                    <div class="Order">
                        <span><i class="fa-solid fa-bag-shopping"></i></span>
                        <div class="">
                            <p>Order</p>
                            <h5>100 <span></span></h5>
                        </div>
                    </div>
                    <div class="evenue"></div>
                    <div class="Earning"></div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../node_modules/chart.js/dist/chart.js"></script>
<script src="../js/adminJs.js"></script>
<script>
    // line graph 
    const saleReportsChartCanvas = document.getElementById('saleReportsChart').getContext('2d');
    const saleReportsGraph = new Chart(saleReportsChartCanvas, {
        type: 'line',
        data: {
            labels: ['Jan', 'Fab', 'March', 'April', 'June', 'July'],
            datasets: [{
                label: 'Sale Reports    ',
                data: [12, 19, 3, 5, 2, 3],
                borderColor: '#1ab293ab',
                backgroundColor: '#ff000073',
                borderWidth: 1,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    //  doneut graph 
    const earningSaleChartCanvas = document.getElementById('earningSaleChart').getContext('2d');
    const earningSaleGraph = new Chart(earningSaleChartCanvas, {
        type: 'doughnut',
        data: {
            labels: ['Income', 'Text', 'Fees'],
            datasets: [{
                label: 'Sale Reports    ',
                data: [12, 19, 3],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1,
                borderAlign: 'cenetr',
                weight: 1,
                hoverOffset: 5,
            }],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
</script>

</html>