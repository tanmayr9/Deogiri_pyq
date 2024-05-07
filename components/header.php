<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .square_btn {

            position: relative;

            display: inline-block;

            font-weight: bold;

            padding: 0.25em 0.5em;

            text-decoration: none;

            color: #00BCD4;

            background: #ECECEC;

            border-radius: 0 15px 15px 0;

            transition: .4s;

        }


        .square_btn:hover {

            background: #636363;

        }

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
            right: 20%;
            top: 25%;
        }

        #feedback-div {
            /* background-color: rgba(72, 72, 72, 0.4); */
            padding-left: 35px;
            padding-right: 35px;
            padding-top: 35px;
            padding-bottom: 50px;
            width: 450px;
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

        }

        video:hover {
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.05);
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

        #nav {
            margin-bottom: 120px;
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