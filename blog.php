<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--google fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--sytle sheet-->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        .aboutme{
            border-bottom: 1px solid gray;
            margin-bottom: 50px;
            margin-top: 50px;
            margin-right: 5px;
        }
        .aboutme h2 {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 1.5px;
            line-height: 1.5px;
            color: #0BA7E2;
            font-family: fangsong;
        }

        .aboutme i {
            color: #0BA7E2;
            font-size: 30px;
            float: right;
        }

        .blog_content {
                margin-bottom: 150px;
    /* border-bottom: 1px solid gray; */
    margin-left: 25px;
    margin-right: 25px;
        }

        .img {
            position: relative;
        }

        .img img {
            width: 90%;
            height: auto;
        }

        .img_text {
                position: absolute;
    background: white;
    margin-top: -60px;
    margin-left: 3%;
    padding: 9px;
    /* width: 60px; */
    text-align: center;
    border: 1px solid gray;
    box-shadow: 5px 5px 30px 10px;
    transition: transform 0.5s linear;

        }

        .img_text:hover {
            margin-left: 3%;
            transform: scale(1.4) rotate(360deg);
        }

        .img_text h4 {
            font-family: sans-serif;
            font-size: 18px;
            color: #0BA7E2;
        }

        .img_text h2 {
            margin-bottom: 6px;
            font-size: 21px;
            letter-spacing: .5px;
            text-transform: capitalize;
        }

        .img_text p {
            font-family: serif;
            font-style: italic;
            color: #777;
            font-size: 14px;
            border-bottom: 1px solid gray;
        }

        .border-top {
            border-top: 4px dotted #67E8FE;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <!--start of blog heading -->
    <div class="container_fulied">
        <div class="row">
             <?php include('action/sidenav.php'); ?>
            <div class="col-sm-10">
                <div class="row aboutme">
                    <div class="col-sm-6">
                        <h2>My Blog</h2>
                    </div>
                    <div class="col-sm-6">
                        <span><i class="fas fa-rss-square"></i></span>
                    </div>
                </div>
                <div class="row blog_content">
                    <div class="col-sm-4">
                        <div class="img">
                            <img src="img/img-1.jpg" alt="" class="responsive">
                        </div>
                        <div class="img_text">
                            <h4>Web Design</h4>
                            <h2>Way to New Design</h2>
                            <p>Date: 16/02/2023</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="img">
                            <img src="img/img-1.jpg" alt="" class="responsive">
                        </div>
                        <div class="img_text">
                            <h4>Web Design</h4>
                            <h2>Way to New Design</h2>
                            <p>Date: 16/02/2023</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="img">
                            <img src="img/img-3.jpg" alt="" class="responsive">
                        </div>
                        <div class="img_text">
                            <h4>Web Design</h4>
                            <h2>Way to New Design</h2>
                            <p>Date: 16/02/2023</p>
                        </div>
                    </div>
                </div>
                <div class="border-top"></div>
                <div class="row blog_content">
                    <div class="col-sm-4">
                        <div class="img">
                            <img src="img/img-1.jpg" alt="" class="responsive">
                        </div>
                        <div class="img_text">
                            <h4>Web Design</h4>
                            <h2>Way to New Design</h2>
                            <p>Date: 16/02/2023</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="img">
                            <img src="img/img-1.jpg" alt="" class="responsive">
                        </div>
                        <div class="img_text">
                            <h4>Web Design</h4>
                            <h2>Way to New Design</h2>
                            <p>Date: 16/02/2023</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="img">
                            <img src="img/img-3.jpg" alt="" class="responsive">
                        </div>
                        <div class="img_text">
                            <h4>Web Design</h4>
                            <h2>Way to New Design</h2>
                            <p>Date: 16/02/2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>