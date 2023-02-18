<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <!--google fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--sytle sheet-->
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio</title>
</head>
<style>
    .prot_head{
    border-bottom: 1px solid gray;
    /*margin-bottom: 50px;*/
    margin-top: 50px;
    margin-right: 5px;
    }
   .prot_head h2 {
       font-size: 32px;
    font-weight: 700;
    letter-spacing: 1.5px;
    line-height: 1.5px;
    color: #0BA7E2;
    font-family: fangsong;
    }
    .prot_head i{
            color: #0BA7E2;
    font-size: 30px;
    float: right;
    }
    .portfolio {
        margin-top: 50px;
        margin-bottom: 50px;
        border-bottom: 2px solid #00A3E1;
    }

    .portfolio h2 {
        color: #00A3E1;
    }

    .portfolio i {
        float: right;
        color: #00A3E1;
        font-size: 40px;
    }

    .btnclass ul li {
        list-style: none;
        display: inline-block;
        float: right;
        font-size: 18px;
        /*text-decoration: none;*/
        border: 1px solid gray;
        padding: 10px;
    }

    .btnclass ul li {
        border-radius: 35px 2px 5px 0px;
        margin-right: 10px;
    }

    .btnclass ul li a {
        text-decoration: none;
    }

    .ullist {
       /* margin-bottom: 50px;*/
        margin-top: 50px;
    }

    .ullist ul {
        float: left;
    }

    .card1 {
        position: relative;
        margin-bottom: 20px;
        cursor: pointer;
        text-align: center;
    }

    .text {
        position: absolute;
        background: gray;
        width: 100%;
        height: 100%;
        text-align: center;
        padding-top: 70px;
        display: none;
    }

    .card:hover .text {
        display: inline-block;
        /*position: absolute;*/
        background: #65A9BE;
        width: 100%;
        height: 100%;
        text-align: center;
        padding-top: 70px;
        opacity: 0.8;
        transition: 1s;
        transform: ;
    }

    .text h5 {
        margin-top: 20px;
        font-size: 20px;
        font-family: sans-serif;
        color: white;
        font-weight: 600;
        letter-spacing: 4.5px;
    }

    .text p {
        font-size: 24px;
        color: white;
        padding: 10px;
        margin-bottom: 10px;
    }

    .text img {
        height: 50px;
        width: 50px;
        border: 1px solid gray;
        padding: 5px;
    }
</style>

<body>
    <section>
        <div class="container_fulied">
            <div class="row ">
                 <?php include('action/sidenav.php'); ?>
                <!--end of nav clsm-->
                <div class="col-sm-10">
                    <div class="row prot_head">
                        <div class="col-sm-8">
                            <h2>Portfolio</h2>
                        </div>
                        <div class="col-sm-4">
                            <div><i class="fas fa-laptop"></i></div>
                        </div>
                    </div>
                    <div class="row btnclass">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-5 ullist">
                            <ul>
                                <li><a href="">All</a></li>
                                <li><a href="">Design</a></li>
                                <li><a href="">Development</a></li>
                                <li><a href="">Others</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <section class="portfolio">
                        <div class="container_fulied">

                        </div>
                    </section>
                    <div class="row card1">
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="img/img-2.jpg" alt="">
                                <div class="text">
                                    <h5>Book Design</h5>
                                    <p>Ariful</p>
                                    <img src="img/author-1.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="img/img-3.jpg" alt="">
                                <div class="text">
                                    <h5>Web Development</h5>
                                    <p>Tanima</p>
                                    <img src="img/author-3.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="img/img-2.jpg" alt="">
                                <div class="text">
                                    <h5>Book Design</h5>
                                    <p>Ariful</p>
                                    <img src="img/author-1.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row card1">
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="img/img-2.jpg" alt="">
                                <div class="text">
                                    <h5>Book Design</h5>
                                    <p>Ariful</p>
                                    <img src="img/author-1.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="img/img-3.jpg" alt="">
                                <div class="text">
                                    <h5>Web Development</h5>
                                    <p>Tanima</p>
                                    <img src="img/author-3.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img src="img/img-2.jpg" alt="">
                                <div class="text">
                                    <h5>Book Design</h5>
                                    <p>Ariful</p>
                                    <img src="img/author-1.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--start of portfolio section-->
</body>

</html>