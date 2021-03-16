<!doctype html>
<html lang="en">
<?php
include 'session.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Genesis</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="chats.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Genesis</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
       <a class="nav-link" href="../logout.php"><?php echo $login_session; ?> | Sign out</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <?php include("navigation.php") ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Chats</h1>
                </div>

                <div>
                    <div class="messaging">
                        <div class="inbox_msg">
                            <div class="inbox_people">
                                <div class="headind_srch">
                                    <div class="recent_heading">
                                        <h4>Recent</h4>
                                    </div>
                                    <div class="srch_bar">
                                        <div class="stylish-input-group">
                                            <input type="text" class="search-bar" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="inbox_chat scroll">
                                    <div class="chat_list active_chat">
                                        <div class="chat_people">
                                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                <p>Test, which is a new approach to have all solutions
                                                    astrology under one roof.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_list">
                                        <div class="chat_people">
                                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                <p>Test, which is a new approach to have all solutions
                                                    astrology under one roof.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_list">
                                        <div class="chat_people">
                                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                <p>Test, which is a new approach to have all solutions
                                                    astrology under one roof.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_list">
                                        <div class="chat_people">
                                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                <p>Test, which is a new approach to have all solutions
                                                    astrology under one roof.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_list">
                                        <div class="chat_people">
                                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                <p>Test, which is a new approach to have all solutions
                                                    astrology under one roof.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_list">
                                        <div class="chat_people">
                                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                <p>Test, which is a new approach to have all solutions
                                                    astrology under one roof.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_list">
                                        <div class="chat_people">
                                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                                <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                                <p>Test, which is a new approach to have all solutions
                                                    astrology under one roof.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mesgs">
                                <div class="msg_history">
                                    <div class="incoming_msg">
                                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                                <p>Test which is a new approach to have all
                                                    solutions</p>
                                                <span class="time_date"> 11:01 AM | June 9</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outgoing_msg">
                                        <div class="sent_msg">
                                            <p>Test which is a new approach to have all
                                                solutions</p>
                                            <span class="time_date"> 11:01 AM | June 9</span>
                                        </div>
                                    </div>
                                    <div class="incoming_msg">
                                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                                <p>Test, which is a new approach to have</p>
                                                <span class="time_date"> 11:01 AM | Yesterday</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="outgoing_msg">
                                        <div class="sent_msg">
                                            <p>Apollo University, Delhi, India Test</p>
                                            <span class="time_date"> 11:01 AM | Today</span>
                                        </div>
                                    </div>
                                    <div class="incoming_msg">
                                        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                                <p>We work directly with our designers and suppliers,
                                                    and sell direct to you, which means quality, exclusive
                                                    products, at a price anyone can afford.</p>
                                                <span class="time_date"> 11:01 AM | Today</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="type_msg">
                                    <div class="input_msg_write">
                                        <input type="text" class="write_msg" placeholder="Type a message" />
                                        <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>