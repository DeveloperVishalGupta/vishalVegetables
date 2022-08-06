<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/VendorAdmin.css">
    <!-- <link rel="stylesheet" href="adminstyle.css"> -->
    <link rel="stylesheet" href="../boostrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../bootstrap/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- popper link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- javascript link  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- datatable cdn  -->
    <!-- // -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- chart.js cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"
        integrity="sha512-tMabqarPtykgDtdtSqCL3uLVM0gS1ZkUAVhRFu1vSEFgvB73niFQWJuvviDyBGBH22Lcau4rHB5p2K2T0Xvr6Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        #header {
            position: fixed;
            top: 0;
            z-index: 100;
            background: white;
            box-shadow: 0px 1px 2px 0px lightgrey;
            max-height: 66px;
        }
    </style>

</head>

<body style="background-color: #f6f6fe;">
    <div class="container-fluid" id="header">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <h1>Vishal</h1>
                    <span style="padding-left: 1rem;" onclick="toggleside_panel()"><i class="fas fa-bars"></i></span>
                </div>
            </div>
            <div class="align-items-center col-md-10 d-flex justify-content-end">
                <div class="user">
                    <ul class="header_user_list">
                        <li class="h_u_list" id="notification"><span><i class="fas fa-question-circle"
                                    style="color: #0680e1;"></i></span> <span class="header_icon_name"
                                style="color: gray;"><b>Help</b></span></li>
                        <li class="h_u_list" id="user"><span><i class="fas fa-user" style="color: #0680e1;"></i></span>
                            <span class="header_icon_name" style="color: gray;"><b>User</b></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 ">
                <div class="side_panel" id="side_panel">
                    <ul>
                        <li class="">
                            <div class="user_list">
                                <span class="user_branch">VG</span>
                                <span class="icon_name">Vishal</span>
                                <span style="padding-left: .15rem;"><i class="fas fa-chevron-right"
                                        style="color: #afa8a8;"></i></span>
                            </div>
                        </li>
                        <li class="list" id="Dashboard"><span><i class="fas fa-th side_panel_icon"></i></span> <span
                                class="icon_name adminMenu" >Dashboard</span></li>
                        <li class="list" id="salesChart"><span><i class="fas fa-chart-line side_panel_icon"></i></span> <span
                                class="icon_name adminMenu" >Sales</span></li>
                        <li class="list" id="RegisteredUser"><span><i class="fa-solid fa-address-card side_panel_icon"></i></span> <span
                                class="icon_name adminMenu" style="
                            padding-left: .88rem;" >Registered User</span></li>
                        <li class="list" id="PendingOrder"><span><i class="far fa-chart-bar side_panel_icon"></i></span> <span
                                class="icon_name adminMenu" style="
                            padding-left: 1.2rem;" >Pending Order</span></li>
                        <li class="list"  id="CompleteOrder"><span><i class="far fa-clipboard side_panel_icon"></i></span> <span
                                class="icon_name adminMenu" style="
                            padding-left: 1.38rem;">Complete Order</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card" id="dashboardView">
                    <div class="card-body">
                        <div class="container-fluid dashboard">
                            <h3>Dashboard</h3>
                            <div class="row mx-0 mt-4">
                                <div class="col-sm-12 col-md-4 ">
                                    <div class="card">
                                        <div class="card-body py-3">

                                            <div
                                                class="statistics-details d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="statistics-title">Users</p>
                                                    <h3 class="rate-percentage"> 50
                                                    </h3>
                                                </div>
                                                <img src="../adminImages/admin_user_logo.png" class="w-25" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 ">
                                    <div class="card">
                                        <div class="card-body py-3">
                                            <div
                                                class="statistics-details d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="statistics-title">Complete Orders</p>
                                                    <h3 class="rate-percentage">
                                                        134
                                                    </h3>
                                                </div>
                                                <img src="../adminImages/order-complete-.png" class="w-25" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="card">
                                        <div class="card-body py-3">
                                            <div
                                                class="statistics-details d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="statistics-title">Cancel Orders</p>
                                                    <h3 class="rate-percentage">20
                                                    </h3>
                                                </div>
                                                <img src="../adminImages/cancelled.png" class="w-25" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 mx-0">
                                <div class="col-sm-12 col-md-4 ">
                                    <div class="card">
                                        <div class="card-body py-3">
                                            <div
                                                class="statistics-details d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="statistics-title">Orders</p>
                                                    <h3 class="rate-percentage"> 180
                                                    </h3>
                                                </div>
                                                <img src="../adminImages/sales-order.jpg" class="w-25" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="card">
                                        <div class="card-body py-3">
                                            <div
                                                class="statistics-details d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="statistics-title">Pending Orders</p>
                                                    <h3 class="rate-percentage"> 125
                                                    </h3>
                                                </div>
                                                <img src="../adminImages/sales-order.jpg" class="w-25" alt="">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="card">
                                        <div class="card-body py-3">
                                            <div
                                                class="statistics-details d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="statistics-title">Ongoing Orders</p>
                                                    <h3 class="rate-percentage"> 135
                                                    </h3>
                                                </div>
                                                <img src="../adminImages/ongoing_leb_test.jpg" class="w-25" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-4" id="totalSalesView">
                    <div class="card-body">
                        <h3>Total Sales</h3>
                        <div class="row">
                            <div class="col-md-5 mx-auto">
                                <canvas id="pie_chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid Register_user_details my-4" id="RegisteredUserView">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Registered User</h3>

                            <div class="row">
                                <div class="col-md-12">
                                    <table id="userDetailTable" class="display">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contct</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Vishal</td>
                                                <td>12345678909</td>
                                                <td>Vishal@gmail.com</td>
                                                <td>Mumbai</td>
                                            </tr>
                                            <tr>
                                                <td>Vishal</td>
                                                <td>12345678909</td>
                                                <td>Vishal@gmail.com</td>
                                                <td>Mumbai</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid Pending_order_details my-4" id="PendingOrderView">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Pending Order</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="Pending_order_Table" class="display">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Brand</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>imageLocation</th>
                                                <td>Vishal</td>
                                                <td>apple</td>
                                                <td>12345</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                                <td>mumbai</td>
                                            </tr>
                                            <tr>
                                            <th>imageLocation</th>
                                                <td>Vishal</td>
                                                <td>apple</td>
                                                <td>12345</td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                                <td>mumbai</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid Complete_order_details my-4" id="CompleteOrderView">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Complete Order</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="Complete_order_Table" class="display">
                                        <thead>
                                        <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Brand</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <th>imageLocation</th>
                                                <td>Vishal</td>
                                                <td>apple</td>
                                                <td>12345</td>
                                                <td><span class="badge badge-success">Completed</span></td>
                                                <td>mumbai</td>
                                            </tr>
                                            <tr>
                                            <th>imageLocation</th>
                                                <td>Vishal</td>
                                                <td>apple</td>
                                                <td>12345</td>
                                                <td><span class="badge badge-success">Completed</span></td>
                                                <td>mumbai</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
    <div class="user_profile" id="user_profile" style="display: none;">
        <li class="list user_profile_list"><span><i class="fas fa-id-card-alt side_panel_icon "></i></span> <span
                class="icon_name" style="
            padding-left: 1.2rem;">Profile</span></li>
        <li class="list"><span><i class="far fa-clipboard side_panel_icon user_profile_list"></i></span> <span
                class="icon_name" style="
            padding-left: 1.38rem;">Xyz</span></li>
        <li class="list"><span><i class="fas fa-sign-out-alt side_panel_icon user_profile_list"></i></span> <span
                class="icon_name" style="
            padding-left: 1.4rem;">Logout</span></li>
    </div>
    <div class="chat_panel border" id="notification_panel" style="display: none;">
        <div class="notification_header">
            <div class="align-items-center d-flex justify-content-around massage_row py-3 notification_tabs">
                <h6 style="color: gray; cursor: pointer;">Notifications</h6>
                <a href="#" style="text-decoration: none; color: gray;">
                    <h6 class="mb-0">Mark All As Read</h6>
                </a>
            </div>
        </div>
        <div class="body border">
            <div class="program_massages">
                <div class="massage_row">
                    <div class="sender_image_area">
                        <div class="circle_image_icon">
                            <span><i class="fas fa-code"></i></span>
                        </div>
                    </div>
                    <div class="massage_area">
                        <p class="small_text">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="massage_time" style="margin-bottom: 0%;">10 min ago</p>
                    </div>
                </div>
            </div>
            <div class="program_massages">
                <div class="massage_row">
                    <div class="sender_image_area">
                        <div class="circle_image_icon">
                            <span><i class="fas fa-code"></i></span>
                        </div>
                    </div>
                    <div class="massage_area">
                        <p class="small_text">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="massage_time" style="margin-bottom: 0%;">10 MIN AGO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer"></footer>

</body>
<script>
    function toggleside_panel() {
        if (side_panel.style.display != "none" && side_panel.style.display != "") {
            side_panel.style.display = "none";
        } else {
            side_panel.style.display = "block";
        }
    }
    document.getElementById('user').addEventListener('click', function () {
        var user_profile_id = document.getElementById('user_profile');
        if (user_profile_id.style.display != 'none') {
            console.log(1);
            user_profile_id.style.display = 'none';
        } else {
            user_profile_id.style.display = 'block';
        }
    });
    document.getElementById('notification').addEventListener('click', function () {
        var notification_panel_id = document.getElementById('notification_panel');
        if (notification_panel_id.style.display != 'none') {
            console.log(1);
            notification_panel_id.style.display = 'none';
        } else {
            notification_panel_id.style.display = 'block';
        }
    });

    $(document).ready(function () {
        $('#userDetailTable').DataTable();
        $('#Pending_order_Table').DataTable();
        $('#Complete_order_Table').DataTable();
    });
</script>
<script>
    const labels = ['Quartr-1', 'Quartr-2', 'Quartr-3', 'Quartr-4'];

    const data = {

        labels: labels,
        datasets: [{
            label: "my second graph",
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            data: [1000, 3000, 2700, 7000],
            title: {
                display: true,
                text: 'Precipitation in Toronto'
            }
        }]
    }
    const config = {
        type: "pie",
        data: data,
        option: {}
    }
    const my_pie_chart = new Chart(document.getElementById('pie_chart'), config);

</script>

<script>

    $(document).ready(function () {
        $('#dashboardView').show();
        $("#totalSalesView").hide();
        $("#RegisteredUserView").hide();
        $("#PendingOrderView").hide();
        $("#CompleteOrderView").hide();
    });
    $("#Dashboard").click(function () {
        $('#dashboardView').show();
        $("#totalSalesView").hide();
        $("#RegisteredUserView").hide();
        $("#PendingOrderView").hide();
        $("#CompleteOrderView").hide();
    });
    $("#salesChart").click(function () {
        $("#totalSalesView").show();
        $("#dashboardView").hide();
        $("#RegisteredUserView").hide();
        $("#PendingOrderView").hide();
        $("#CompleteOrderView").hide();
    });
    $("#RegisteredUser").click(function () {
        $("#RegisteredUserView").show();
        $("#totalSalesView").hide();
        $("#dashboardView").hide();
        $("#PendingOrderView").hide();
        $("#CompleteOrderView").hide();
    });
    $("#PendingOrder").click(function () {
        $("#PendingOrderView").show();
        $("#CompleteOrderView").hide();
        $("#dashboardView").hide();
        $("#totalSalesView").hide();
        $("#RegisteredUserView").hide();
    });
    $("#CompleteOrder").click(function () {
        $("#CompleteOrderView").show();
        $("#PendingOrderView").hide();
        $("#dashboardView").hide();
        $("#totalSalesView").hide();
        $("#RegisteredUserView").hide();
    });
</script>
<script src="../js/javascript.js"></script>

</html>
