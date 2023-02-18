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
        .contact_head {
            margin-top: 50px;
            margin-bottom: 50px;
            border-bottom: 2px solid #00A3E1;
            margin-left: 10px;
            margin-right: 10px;
        }

        .contact_head h2 {
            color: #00A3E1;
        }

        .contact_head i {
            float: right;
            color: #00A3E1;
            font-size: 40px;
        }

        .mailing h3 {
            display: inline-block;
            font-size: 22px;
            line-height: 1;
            font-weight: 600;
            font-family: "Playfair Display", serif;
            border-bottom: 2px solid #00A3E1;
            text-transform: capitalize;
        }

        .mail {
            margin-top: 50px;
        }

        .mail input {
            width: 100%;
            /*float: right;*/
            padding: 7px;
            border: 2px solid gray;
        }

        .child input {
            width: 100%;
            /*float: left!important;*/
            padding: 7px;
            border: 2px solid gray;
        }

        .desc textarea {}

        .butt button {
            margin-top: 30px;
            width: 100%;
            padding: 5px;
            color: #00A3E1;
            border: 2px solid #00A3E1;
        }

        .butt button:hover {
            background: #00A3E1;
            color: white;
            /* transition: transform 1s;*/
        }

        .fly i {
            font-size: 30px;
            color: #00A3E1;
            margin-top: 50px;
            margin-bottom: 10px;
            text-align: center;
            /*float: right;*/
            margin-left: 45%;
        }

        .fly p {
            font-size: 18px;
            text-align: center;
            /*padding-top: 20px;*/
        }

        .map {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <!--Start contact heading-->
    <div class="container-fulied">
        <div class="row">
            <?php include('action/sidenav.php'); ?>
            <!--end of side nav bar-->
            <div class="col-sm-10">
                <div class="row contact_head">
                    <div class="col-sm-8">
                        <h2>Contact Me.</h2>
                    </div>
                    <div class="col-sm-4">
                        <div><i class="fas fa-envelope"></i></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-2 servi">
                        <h3>Let's Talk</h3>
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class="row">
                    <div class="mailing">
                        <form action="" class="mail">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <input type="text" name="" value="" placeholder="Name" required>
                                </div>
                                <div class="col-sm-4 child">
                                    <input type="mail" name="" value="" placeholder="Email" required>
                                </div>
                                <div class="col-sm-2"></div>
                            </div><br><br>
                            <div class="row desc">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <textarea name="" id="" cols="90" rows="10"></textarea>
                                </div>
                                <div class="col-sm-2"></div>
                                <br>
                            </div>

                            <div class="row butt">
                                <div class="col-sm-5"></div>
                                <div class="col-sm-2">
                                    <button class="">Send Message</button>
                                </div>
                                <div class="col-sm-5"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <section class="fly">
                    <div class="contaier_fulied">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="">
                                    <i class="fas fa-paper-plane"></i>
                                    <p>arifulbdssd@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Uzirpur,Kaligonj,Satkhira</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="">
                                    <i class="fas fa-phone-volume"></i>
                                    <p>+88 01776256676</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999.482389620627!2d89.12456991427256!3d22.513037540829504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a01ddd19df5948b%3A0xe072124b94289afb!2sUzirpur%2C%20Assasuni!5e1!3m2!1sen!2sbd!4v1676469911095!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!--end of cls10-->
        </div>
    </div>
</body>
</html>