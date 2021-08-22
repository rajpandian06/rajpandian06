<?php

$server = "localhost";
$admin = "root";
$password = "";
$database = "sakthi_store";

$connect = mysqli_connect($server, $admin, $password) or die("unable to connect");
mysqli_select_db($connect, $database);


if (isset($_POST['submit'])) {
    $fullname = $_POST['name'];
    $mobilenumber = $_POST['number'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];


    $query = "insert into user values('$fullname','$mobilenumber','$email','$comment')";
    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        echo "<script> alert('u have successfully submitted') </script>";
    } else {
        echo "<script> alert('failed') </script>";
    }
}




?>
<!doctype html>
<html lang="en">

<head>
    <title>sakthi store</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome icon cdn link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        .navbar {
            background-color: #2f3542 !important;
            padding: 20px 10px;
        }

        .navbar .navbar-brand {
            font-size: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            word-spacing: 2px;
            font-weight: bolder;
            font-style: italic;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #collapsibleNavId .nav-link {
            font-size: 18px;
            color: #ffffff !important;
        }

        #collapsibleNavId .nav-link:hover {
            color: #ff6348 !important;
        }

        section {
            min-height: 100vh;
            width: 100%;
        }
        #about img {
            height: 350px;
            width: 350px;
        }

        #about P {
            font-size: 25px;
            letter-spacing: 2px;
            word-spacing: 3px;
        }

        .card img {
            height: 150px;
            width: 150px;
            object-fit: cover;
            padding: 10px 0px;
        }
        .about {
            margin-top: 8%;
        }

        .product {
            margin-top: 8%;
        }

        .contact {
            margin-top: 8%;
        }

        footer h1 {
            font-size: 18px !important;
        }

        .contact img {
            height: 350px;
            width: 350px;
        }

        .about p {
            font-family: 'Poppins', sans-serif;
            font-size: 20px !important;
            text-align: justify;
        }

        .card:hover {
            color: red;
        }

        .card img:hover {
            transform: scale(1.1);
        }
        .tales{
            width: 100%;
            height: 550px;
        }
    </style>

</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">sakthi <span class="text-danger">Store</span></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav m-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home"><i class="fas fa-home me-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><i class="fas fa-address-card me-1"></i>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product"><i class="fas fa-shopping-cart me-1"></i>Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fas fa-phone-alt me-1"></i>Contact</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-outline-danger btn-lg text-capitalize">Book Order<i
                        class="fas fa-shopping-cart ms-2"></i></button>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- home start -->
    <main id="home">
        <div class="home">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                        <img src="https://st3.depositphotos.com/1037238/13110/v/600/depositphotos_131102446-stock-illustration-supermarket-grocery-store.jpg"
                            alt="First slide" class="tales">
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpaperbat.com/img/7618-free-download-how-do-whole-foods-new-365-grocery-stores-compare-to.jpg"
                            alt="second slide" class="tales">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.gobankingrates.com/wp-content/uploads/2020/04/grocery-delivery-iStock-1214541379.jpg"
                            alt="third slide" class="tales">
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
    <!-- home end -->

    <!-- about start -->
    <section id="about">
        <div class="container about p-5">
            <h1 class="text-center my-5">About us</h1>
            <div class="row">
                <div class="col-lg-6 text-center">
                    <p class="mt-lg-3">Our grocery store now has self-checkout, for your convenience. It's like getting
                        punched
                        in the throat,
                        for your comfort.Life is like waiting in line at the grocery store. You wait, you slowly move
                        forward, you pay the price, then you exit unsatisfied and broke.</p>
                </div>
                <div class="col-lg-6 mt-3 text-center">
                    <img src="https://us.123rf.com/450wm/dolgachov/dolgachov1807/dolgachov180700084/103936796-woman-with-smartphone-buying-food-at-supermarket.jpg?ver=6"
                        alt="grocery shop pic" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- product strat -->
    <section id="product">
        <div class="container-fluid product p-5">
            <h1 class="text-center my-5">Our Products</h1>
            <div class="row mb-5">
                <div class="col-lg-3 px-1 py-2">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top img-fluid"
                                src="https://m.media-amazon.com/images/I/51kJcHmZtPS.jpg" alt="sugar pic">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Parry's White Sugar, 1kg</h4>
                            <h6 class="text-muted">M.R.P.:₹50.00</h6>
                            <h6 class="text-muted">Sale:₹48.00(₹0.05/gram)</h6>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-dark my-2"><i
                                        class="fas fa-cart-plus me-2"></i>Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-1 py-2">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top img-fluid"
                                src="https://m.media-amazon.com/images/I/71hFwEGKyZL._SL1000_.jpg" alt="dhall pic">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Premium Toor Dal, 1kg</h4>
                            <h6 class="text-muted">M.R.P.:₹189.00</h6>
                            <h6 class="text-muted">Sale:₹167.00(₹167.00/kg)</h6>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-dark my-2"><i
                                        class="fas fa-cart-plus me-2"></i>Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-1 py-2">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top img-fluid"
                                src="https://m.media-amazon.com/images/I/81Crql2FqrL._SL1500_.jpg"
                                alt="dark fantasy pic">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Sunfeast Dark Fantasy</h4>
                            <h6 class="text-muted">M.R.P.:₹90.00</h6>
                            <h6 class="text-muted">Sale:₹81.00(₹27.00/100g)</h6>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-dark my-2"><i
                                        class="fas fa-cart-plus me-2"></i>Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-1 py-2">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top img-fluid"
                                src="https://m.media-amazon.com/images/I/81koTixFtqL._SL1500_.jpg" alt="soap pic">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Santoor Aloe Fresh Soap</h4>
                            <h6 class="text-muted">M.R.P.:₹150.00</h6>
                            <h6 class="text-muted">Sale:₹137.00(₹27.40/count)</h6>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-dark my-2"><i
                                        class="fas fa-cart-plus me-2"></i>Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-3 px-1 py-2">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top img-fluid"
                                src="https://m.media-amazon.com/images/I/61DZ+zx2EKL._SX679_.jpg" alt="horlicks pic">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Horlicks drink, 750g</h4>
                            <h6 class="text-muted">M.R.P.:₹320.00</h6>
                            <h6 class="text-muted">Sale:₹309.00(₹0.41/gram)</h6>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-dark my-2"><i
                                        class="fas fa-cart-plus me-2"></i>Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-1 py-2">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top img-fluid"
                                src="https://m.media-amazon.com/images/I/518GEoZtbhL.jpg" alt="tata salt pic">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Tata Salt, 1kg</h4>
                            <h6 class="text-muted">M.R.P.:₹25.00</h6>
                            <h6 class="text-muted">Sale:₹21.00(₹10.00/500g)</h6>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-dark my-2"><i
                                        class="fas fa-cart-plus me-2"></i>Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-1 py-2">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top img-fluid"
                                src="https://m.media-amazon.com/images/I/71EesMJmIqL._SL1500_.jpg" alt="chocos pic">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Kellogg's Chocos, 250g</h4>
                            <h6 class="text-muted">M.R.P.:₹175.00</h6>
                            <h6 class="text-muted">Sale:₹165.00(₹700.00/kg)</h6>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-dark my-2"><i
                                        class="fas fa-cart-plus me-2"></i>Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-1 py-2">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top img-fluid"
                                src="https://m.media-amazon.com/images/I/61uIs+np2TL._SL1500_.jpg" alt="biscuit pic">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Britannia 50-50, 120g</h4>
                            <h6 class="text-muted">M.R.P.:₹30.00</h6>
                            <h6 class="text-muted">Sale:₹24.00(₹20.00/100g)</h6>
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-dark my-2"><i
                                        class="fas fa-cart-plus me-2"></i>Add to
                                    Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary btn-lg my-1">Click here for more items<i
                        class="fas fa-arrow-right ms-3"></i></button>
            </div>
        </div>
    </section>
    <!-- product end -->

    <!-- contact start -->
    <section id="contact">
        <div class="container contact p-5">
            <h1 class="text-center my-5">Contact us</h1>
            <div class="row">
                <div class="col-lg-6 text-center py-5">
                    <img src="https://www.biptrack.com/img/BIPGuy-support.gif" alt="contact gif " class="img-fluid">

                </div>
                <div class="col-lg-6">
                    <form action="index.php" method="post" onsubmit="return validate()">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="msg1"
                                placeholder="Enter ur name">
                            <small id="msg1" class="form-text"></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mobile Number</label>
                            <input type="number" class="form-control" name="number" id="number" aria-describedby="msg2"
                                placeholder="Enter ur number">
                            <small id="msg2" class="form-text"></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email-Id</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="msg3"
                                placeholder="Enter ur email-id">
                            <small id="msg3" class="form-text"></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Leave Comments</label>
                            <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- contact end -->

    <!-- footer start -->
    <footer class="bg-dark p-2">
        <div class="container">
            <h1 class="text-white text-center text-capitalize">Copyright © 2021 Sakthi Store All Rights Reserved</h1>
        </div>
    </footer>
    <!-- footer end -->


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <!-- script start -->
    <script>
        function validate() {

            let fullName = document.getElementById("name").value;
            let mobileNumber = document.getElementById("number").value;
            let email = document.getElementById("email").value;
            let comment = document.getElementById("comment").value;
            let nameCheck = /^[a-zA-Z]{3,25}$/;
            let emailCheck = /^(?=.*[.])([a-zA-Z0-9]+)@([a-zA-Z0-9]+).([a-z]{2,8})$/;
            let numberCheck = /^[7-9]{1}[0-9]{9}$/;

            // fullname
            if (fullName.trim() == null || fullName.trim() == "") {
                document.getElementById("msg1").innerHTML = "**Enter ur name**";
                document.getElementById("msg1").style.color = "red";
                document.getElementById("name").style.border = "2px solid red";
                return false;
            }
            if (nameCheck.test(fullName)) {
                document.getElementById("msg1").innerHTML = "**valid**"
                document.getElementById("msg1").style.color = "green";
                document.getElementById("name").style.border = "2px solid green";
            } else {
                document.getElementById("msg1").innerHTML = "**ur name should contain a-zA-Z letters only and minimum 3 letter**"
                document.getElementById("msg1").style.color = "red";
                document.getElementById("name").style.border = "2px solid red";
                return false;
            }

            // number
            if (mobileNumber.trim() == null || mobileNumber.trim() == "") {
                document.getElementById("msg2").innerHTML = "**Enter ur number**";
                document.getElementById("msg2").style.color = "red";
                document.getElementById("number").style.border = "2px solid red";
                return false;
            }
            if (numberCheck.test(mobileNumber)) {
                document.getElementById("msg2").innerHTML = "**valid**"
                document.getElementById("msg2").style.color = "green";
                document.getElementById("number").style.border = "2px solid green";
            } else {
                document.getElementById("msg2").innerHTML = "**Enter a valid number**"
                document.getElementById("msg2").style.color = "red";
                document.getElementById("number").style.border = "2px solid red";
                return false;
            }

            // email
            if (email.trim() == null || email.trim() == "") {
                document.getElementById("msg3").innerHTML = "**Enter ur email**";
                document.getElementById("msg3").style.color = "red";
                document.getElementById("email").style.border = "2px solid red";
                return false;
            }
            if (emailCheck.test(email)) {
                document.getElementById("msg3").innerHTML = "**valid**"
                document.getElementById("msg3").style.color = "green";
                document.getElementById("email").style.border = "2px solid green";
            } else {
                document.getElementById("msg3").innerHTML = "**enter a valid email address**"
                document.getElementById("msg3").style.color = "red";
                document.getElementById("email").style.border = "2px solid red";
                return false;
            }

            // comment
            if (comment.trim() == null || comment.trim() == "") {
                alert("please write ur comments");
                return false;
            } else {
                alert("u have successfully submitted");
            }
        }
    </script>
    <!-- script end -->
</body>

</html>