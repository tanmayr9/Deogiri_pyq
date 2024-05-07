
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: fixed #111827;
            color: rgb(188, 196, 231);
        }

        .img {
            object-fit: fill;
            width: 100%;
            height: 300px;
        }

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);


        .feedback-button {
            height: 50px;
            border: solid 3px #CCCCCC;
            background: #333;
            width: 50px;
            line-height: 32px;
            -webkit-transform: rotate(-90deg);
            font-weight: 600;
            color: white;
            transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            text-align: center;
            font-size: 17px;
            position: fixed;
            right: 40px;
            bottom: 10%;
            font-family: "Roboto", helvetica, arial, sans-serif;
            z-index: 999;
            border-radius: 1000px
        }

        #feedback-main {
            display: none;
            float: left;
            padding-top: 0px;
            z-index: 1000;
            position: fixed;
            right: 22%;
            top: 20%;
        }

        #feedback-div {
            /* background-color: rgba(72, 72, 72, 0.4); */
            padding-left: 35px;
            padding-right: 35px;
            padding-top: 35px;
            padding-bottom: 50px;
            width: 300px;
            float: left;
            left: 50%;
            position: absolute;
            margin-top: 30px;
            margin-left: -260px;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            /* width: 30%; */
        }

        /* .feedback-input {
            color: #3c3c3c;
            font-family: "Roboto", helvetica, arial, sans-serif;
            font-weight: 500;
            font-size: 18px;
            border-radius: 0;
            line-height: 22px;
            background-color: #fbfbfb;
            padding: 13px 13px 13px 54px;
            margin-bottom: 10px;
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            border: 3px solid rgba(0, 0, 0, 0);
        }

        .feedback-input:focus {
            background: #fff;
            box-shadow: 0;
            border: 3px solid #3498db;
            color: #3498db;
            outline: none;
            padding: 13px 13px 13px 54px;
        }

        /* Icons ---------------------------------- 
        #feedback-name {
            background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #feedback-name:focus {
            background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
            background-size: 30px 30px;
            background-position: 8px 5px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #feedback-email {
            background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #feedback-email:focus {
            background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #feedback-comment {
            background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #feedback-comment {
            width: 100%;
            height: 150px;
            line-height: 150%;
            resize: vertical;
        }

        input:hover,
        #feedback-comment:hover,
        input:focus,
        #feedback-comment:focus {
            background-color: white;
        }

        #feedback-button-blue {
            font-family: "Roboto", helvetica, arial, sans-serif;
            float: left;
            width: 100%;
            border: #fbfbfb solid 4px;
            cursor: pointer;
            background-color: #3498db;
            color: white;
            font-size: 24px;
            padding-top: 22px;
            padding-bottom: 22px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            margin-top: -4px;
            font-weight: 700;
        }

        /* #feedback-button-blue:hover {
            /* background-color: rgba(0, 0, 0, 0); 
        color: #3498db;
        background-color: rgb(33, 33, 55);
        border: 2px solid rgb(33, 33, 55);
        } */

        .feedback-button-blue:hover {
            color: #0493bd;
        }

        .feedback-ease {
            width: 0px;
            height: 74px;
            background-color: #fbfbfb;
            -webkit-transition: .3s ease;
            -moz-transition: .3s ease;
            -o-transition: .3s ease;
            -ms-transition: .3s ease;
            transition: .3s ease;
        }

        .feedback-submit:hover .feedback-ease {
            width: 100%;
            background-color: white;
        }

        .carousel-caption {
            background-color: #14161868;
            text-align: center;
        }


        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: rgba(109, 90, 90, 0.528);
        }

        .containerr:hover .overlay {
            opacity: 1;
        }

        .text {
            color: #cdbce2;
            font-size: 30px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            font-weight: bold;
        }

        .containerr {
            position: relative;
            /* width: 50%; */
        }

        /* .team2{
            display: block;
        }

        @media only screen and (max-width: 580px) {
            #feedback-div {
                left: 3%;
                margin-right: 3%;
                width: 350px;
                /* margin-left: 0; */
        /* padding-left: 3%;
                padding-right: 3%; s
            }
        }
*/
        @media only screen and (max-width: 400px) {
            video {
                margin-top: 130px;
            }
            .navbar-brand{
                display: none;
            }
        } 
        video:hover {
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
                    -o-transform:scale(1.1);
                    -ms-transform:scale(1.1);
                    transform:scale(1.05);
                top: 0;
                left: 0;
                width: 100%;
                margin: auto;
                z-index: 0;
            }

            .sticky {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 999;
                box-shadow: #7c4dff;
            }

            .btn {
                background-color: #905cf0;
                color: #f5f5f5;
                border: 1px solid #6351ce;
            }

            .btn:hover {
                background-color: #8045edd7;
                color: #ededf3;
                font-size: small;
                border: 2px solid #7c4dff;

            }
           
    </style>
</head>

<body>

    <nav class="navbar sticky  shadow-lg p-1" id="nav" style="background-color: #1f2937; ">
        <div class=" col-sm-0 col-md-3 d-0">
            <a class="navbar-brand w-100" href="index.php">
                <img src="logo.png" alt="Deogiri" width="90%" height="50%">
            </a>
        </div>

        <div class=" col-sm-8 " style="color: #27b4f5;">
            <h1 class="text-center">Deogiri College Of Engineering </h1>
            <h3 class="text-center"> Aurangabad </h3>
            
        </div>
        <!-- <div class="col-lg">
             <h4>Contact Us</h4>
            <div class=" text-end" style="color: #2b6c9b;">
                <h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                      </svg> 
                    deogiripyq@gmail.com
                </h5>
            </div>
            <div class=" text-end" style="color: rgb(28, 93, 121);">
                 <h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg> 8856917094 </h5>
                   <h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>9405936752
                </h5>
            </div>
        </div> -->

    </nav>
    <!-- <div id="carouselExampleCaptions" class="carousel slide container m-auto bg-light my-2"
        style="width: 75%; height: 300px; background: transparent;" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner " data-bs-interval="2000">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="departments/civil.jpeg" class="img d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Civil Deparrtment</h5>
                    <p>DIEMS</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="departments/CSE.jpeg" class="img d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block " >
                    <h5>CSE Department</h5>
                    <p>DIEMS</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="departments/ELECT.jpeg" class="img d-block " style=" object-fit: fill;
                width: 100%;
                height: 300px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Elctrical Dept.</h5>
                    <p>DIEMS</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="departments/mech.jpeg" class="img d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mechanical Dept.</h5>
                    <p>DIEMS</p>
                </div>

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="departments/entc.jpeg" class="img d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ENTC Dept.</h5>
                    <p>DIEMS</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->
    <div class="video shadow-lg rounded m-auto p-2 mt-5">
        <video src="departments/WhatsApp Video 2023-04-09 at 14.32.54.mp4" width="100%" poster="th-removebg-preview.png"
            height="400px" controls autoplay>

        </video>
    </div>
    <div class=" w-75 row m-auto mt-5">
        <div class="card container rounded shadow 
                    mx-auto  col-md-4 p-2 m-2 " style="background-color: #1e293b; color: #c1c0ea;">
            <img class="card-img-top w-75 m-auto" src="departments/Question-removebg-preview.png" alt="" height="30%">
            <div class="card-title text-center">
                <h2 style="color: #f5f5f5;">PYQ BATU Papers</h2>
            </div>

            <!-- <img src="38873dc2b35fc18242944c2fab685192--printers-vectors.jpg" alt="Avatar" style="object-fit: cover;
                            width: 100%;" class="image"> -->
            <div class="card-body">
                <p>Previous year paper helps you to highlighting your strengths and
                    weaknesses
                    in specific areas of the exam. By downloading your Papers, you can gain a better understanding
                    of where you need to focus your study efforts for future exams. Additionally, exam reports can
                    help you track your progress.
                </p>
                <button type="button" class="btn btn-primary m-auto"><a href="welcome.php" style="text-decoration: none; color:#f5f5f5"> Start Now</a></button>
            </div>

        </div>
        <div class="card  rounded shadow 
                    mx-auto containerr  col-md-4 p-2 m-2" style="background-color: #1e293b; color: #c1c0ea;">
            <img class="card-img-top" src="departments/download-removebg-preview.png" alt="" width="80%" height="30%">
            <div class="text-center card-title">
                <h2 style="color: #f5f5f5;">Track Your Prepration</h2>
            </div>
            <div class="overlay" style="width: 100%; ">
                <div class="text">Coming Soon...</div>
            </div>
            <!-- <img src="38873dc2b35fc18242944c2fab685192--printers-vectors.jpg" alt="Avatar" style="object-fit: cover;
                            width: 100%;" class="image"> -->
            <div class="card-body">
                <p>With the help of this feature you can track your studies and give practice exam based on completed topics.
                </p>
                <button class="btn m-auto btn-dark" disabled type="button"
                    style="background-color: #c1c0ea; color: #905cf0; font-weight: bold;">Coming Soon..</button>
            </div>

        </div>
    </div>


    <!-- <div class="container col-sm-12 w-75 m-auto my-5" id="team" style="background-color: #014254;">
     <h2 class="text-light m-3">Meet Our Team </h2>
        <div class="img1 w-100"><img src="departments/ELECT.jpeg" alt="" width="100%"></div>
        <div class="content row "
            style="position: relative; margin-top: -35px; background-color: #0493bd; opacity: 80%;">
            <div class="col-sm-3 m-auto">
                <div class="m-auto text-center w-75">
                    <h3>ABC</h3>
                    <h4 style="border-top: 5px solid #0dc3f5;">Head Developer</h4>
                </div>
            </div>
            <div class="col-sm-3 m-auto">
                <div class="m-auto text-center w-75">
                    <h3>ABC</h3>
                    <h4 style="border-top: 5px solid #0dc3f5;">Head Developer</h4>
                </div>
            </div>
            <div class="col-lg-3 m-auto">
                <div class="m-auto text-center w-75">
                    <h3>ABC</h3>
                    <h4 style="border-top: 5px solid #0dc3f5;">Head Developer</h4>
                </div>
            </div>

        </div>
    </div> -->
    <div class="team2 mb-5">
        <h2 class="text-center m-5" style="color: #9d7ef3; ">Meet Our Team</h2>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner p-2">
                <div class="carousel-item " data-bs-interval="1500">
                    <div class="card container rounded shadow 
            mx-auto  col-md-3 p-2 m-2" style="background-color: #374151; color: #fefbf6;">
                        <img class="card-img-top w-75 m-auto" src="New folder/avtar.png" alt="" height="30%">
                        <div class="card-title text-center">
                            <div class="row">
                                <h2>Gokul Sagale</h2>
                            </div>
                            <div class="row w-50 m-auto" style="border-top: 5px solid #9e01ff;">
                                <h3>Developer</h3>
                            </div>
                        </div>

                        <!-- <img src="38873dc2b35fc18242944c2fab685192--printers-vectors.jpg" alt="Avatar" style="object-fit: cover;
                    width: 100%;" class="image"> -->
                        <div class="card-body">


                        </div>

                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <div class="card container rounded shadow 
                mx-auto  col-md-3 p-2 m-2" style="background-color: #374151; color: #fefbf6;">
                        <img class="card-img-top w-75 m-auto" src="New folder/avtar.png" alt="" height="30%">
                        <div class="card-title text-center">
                            <div class="row">
                                <h2>Sagar Pandit</h2>
                            </div>
                            <div class="row w-50 m-auto" style="border-top: 5px solid #9e01ff;">
                                <h3>Developer</h3>
                            </div>
                        </div>

                        <!-- <img src="38873dc2b35fc18242944c2fab685192--printers-vectors.jpg" alt="Avatar" style="object-fit: cover;
                        width: 100%;" class="image"> -->
                        <div class="card-body">


                        </div>

                    </div>
                </div>
                <div class="carousel-item active" data-bs-interval="2000">
                    <div class="card container rounded shadow 
                mx-auto  col-md-3 p-2 m-2" style="background-color: #374151; color: #fefbf6;">
                        <img class="card-img-top w-75 m-auto" src="New folder/avtar.png" alt="" height="30%">
                        <div class="card-title text-center">
                            <div class="row">
                                <h2>Tanmay Rathod</h2>
                            </div>
                            <div class="row w-50 m-auto" style="border-top: 5px solid #9e01ff;">
                                <h3>Head Developer</h3>
                            </div>
                        </div>

                        <!-- <img src="38873dc2b35fc18242944c2fab685192--printers-vectors.jpg" alt="Avatar" style="object-fit: cover;
                        width: 100%;" class="image"> -->
                        <div class="card-body">


                        </div>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <footer class="text-center text-lg-start text-white m-0" style="background-color: #1c2331" id="contact">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-1" style="background-color: #6351ce">
            <!-- Left -->
            <div class="mt-auto">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="mx-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google"
                    viewBox="0 0 16 16">
                    <path
                        d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3 mx-auto">
                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->
                    <!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        - Links 
                        <h6 class="text-uppercase fw-bold">Courses</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px">
                        <p>
                            <a href="#courses" class="text-white">C Programming</a>
                        </p>
                        <p>
                            <a href="#courses" class="text-white">Python</a>
                        </p>
                        <p>
                            <a href="#courses" class="text-white">Java</a>
                        </p>
                        <p>
                            <a href="#courses" class="text-white">C++</a>
                        </p>
                    </div> -->
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="text-decoration: none; color: white;">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #8059ec; height: 4px">
                        <p>
                            <a href="https://www.dietms.org/" class=" text-white" style="color: white;">Official
                                Site</a>
                        </p>
                        <p>
                            <a href="https://dbatuerp.com/studentLogin" class="text-white">Students Log-in</a>
                        </p>

                        <p>
                            <a href="#feedback-main" class="text-light">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-6 col-xl-6 mx-auto mb-4 text-center">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold" style="color: #9284e5; font-size: larger;">DIEMS</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 4px">
                        <p>
                            Deogiri Campus, <br> Railway Station Road, <br> Ch. Sambhajinagar (Aurangabad) , <br>
                            Maharashtra 431005
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 4px">


                        <p><i class="fas fa-envelope mr-3"></i> <a
                                href="mailto:deogiripyq@gmail.com">deogiripyq@gmail.com</a>
                        </p>
                        <p><i class="fas fa-phone mr-3"></i><a href="tel:+918856917094"> +
                                91 8856917094</a></p>
                        <p><i class="fas fa-print mr-3"></i> <a href="tel:+919405936752">+
                                91 9405936752</a></p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color: white; text-decoration: none;">
            © 2023 Copyright:
            DIEMS
        </div>
        <!-- Copyright -->
    </footer>
    <div id="feedback-main">
        <div id="feedback-div" class="shadow container" style="background-color: #6cc7e3;">
            <form style="color: #014254; ">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">FeedBack</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <button id="popup" class="feedback-button" onclick="toggle_visibility()"><svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" class="bi bi-question-square-fill" viewBox="0 0 16 16">
            <path
                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z" />
        </svg></button>

    <script>
        function toggle_visibility() {
            var e = document.getElementById('feedback-main');
            if (e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }


    </script>
    <script src="_include/js/feedback.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
</body>

</html>