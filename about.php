<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--google fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--sytle sheet-->
    <link rel="stylesheet" href="css/style.css">
    <title>About ME</title>
    <style>
        .aboutme{
            border-bottom: 1px solid gray;
            margin-bottom: 50px;
            margin-top: 50px;
            margin-right: 5px;
        }
        .aboutme h2{
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 1.5px;
            line-height: 1.5px;
            color: #0BA7E2;
            font-family: fangsong;
        }
        .aboutme i{
            color: #0BA7E2;
            font-size: 30px;
            float: right;
        }
        .desc h3{
            font-size: 22px;
            font-weight: 700;
            font-family: "Playfair Display", serif;
        }
        .desc_list h3{
            font-size: 22px;
            font-weight: 700;
            font-family: "Playfair Display", serif;
        }
        .desc_list ul{
            margin-top: 30px;
        }
        .desc_list li{
            list-style: none;
            margin-bottom: 5px;
        }
        .desc_list button{
            border: 2px solid  #00A3E1;
            background: white;
            width: 50%;
            margin-top: 20px;
        }
        .desc_list button:hover{
            background: #00A3E1;
           
        }
        .item{
            font-family: "Playfair Display", serif;
            font-size: 16px;
            margin-right: 15px;
            padding-bottom: 2px;
            color: #222;
            border-bottom:2px solid #00A3E1;
        }
        .icon i{
            font-size: 40px;
            color: #00A3E1;
            text-align: center;
            margin-left: 34%;
        }
        .service_sec{
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .services h3{
            display: inline-block;
            font-size: 22px;
            line-height: 1;
            font-weight: 600;
            font-family: "Playfair Display", serif;
            border-bottom: 2px solid #00A3E1;
            text-transform: capitalize;
            
        }
        .services h4{
        font-size: 22px;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
        font-family: sans-serif;
        text-transform: capitalize;
        }
        .servi h3{
            border-bottom: 2px solid green;
            text-align: center;
            border-right: 1px solid green;
            border-radius: 9px 44px 5px 25px;
            padding: 10px;
            margin-bottom: 50px;
            text-transform: capitalize;
        }
        .testimonials{
            margin-top: 50px;
            margin-bottom: 10px;
        }
        .testimonials h3{
            border-bottom: 2px solid green;
            text-align: center;
            border-right: 1px solid green;
            border-radius: 9px 44px 5px 25px;
            padding: 10px;
            margin-bottom: 50px;
            text-transform: capitalize;
        }
        .symble{
            background: #E3E3E3;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 100px 0px 108px 0px;
        }
        .symble i{
            font-size: 50px;
            color: #00A3E1;
            padding: 20px;
        }
        .happyclient img{
            margin-bottom: 20px;
            border-radius: 50px 0px 50px 0px;
        }
        .happyclient h4{
            font-size: 18px;
            font-weight: 600px;
            padding-bottom: 20px;
            border-bottom: 2px solid #00A3E1;
        }
        .happyclient p{
            font-size: 14px;
        }
        .cls10{
            padding-left: 25px;
            padding-right: 25px;
        }
    </style>
</head>

<body>
    <div class="container_fulied">
        <div class="row">
       <?php include('action/sidenav.php'); ?>
            <!--start of about me div-->
            <div class="col-sm-10 cls10">
                <div class="row aboutme">
                    <div class="col-sm-6">
                        <h2>About ME</h2>
                    </div>
                    <div class="col-sm-6">
                        <span><i class="far fa-user"></i></span>
                    </div>
                </div>
                <!--end of about head div-->
                <!--Start of descripton div-->
                <div class="container_fulied">
                    <div class="row">
                        <div class="col-sm-8 desc">
                            <h3>UI/UX Designer & Developer</h3>
                            <br>
                            <p>Dolor reprehenderit aut repudiandae maiores recusandae. Consequatur dolor nisi labore commodi ipsa? Excepturi velit laboriosam at voluptatibus cupiditate est vel. Dolorem praesentium itaque fugiat placeat quas consequatur? Obcaecati natus rerum</p>
                            <p>Consectetur consectetur nesciunt nesciunt blanditiis amet? Quod quis unde aliquid excepturi laudantium? Illo architecto aliquam velit illo magnam neque perferendis sint Incidunt eius ipsa inventore labore eos velit. Minus hic magni reiciendis necessitatibus ex Quidem officia deleniti accusamus obcaecati dolores. Porro culpa quibusdam impedit porro praesentium excepturi. Alias ab consequatur?</p>
                        </div>
                        <div class="col-sm-4 desc_list">
                            <h3>Personal Information</h3>
                            <ul>
                                <li>
                                    <sapn class="item">Name:</sapn>Ariful
                                    <span></span>
                                </li>
                                <li>
                                    <sapn class="item">Residence:</sapn>
                                    <span>Bangladesh</span>
                                </li>
                                <li>
                                    <sapn class="item">Address:</sapn>
                                    <span>Uzirpur,Kaligonj,Satkhira</span>
                                </li>
                                <li>
                                    <sapn class="item">Email:</sapn>
                                    <span>arifulbdssd@gmail.com</span>
                                </li>
                                <li>
                                    <sapn class="item">Phone:</sapn>
                                    <span>+88 01776256676</span>
                                </li>
                                <li>
                                    <sapn class="item">Freelance:</sapn>
                                    <span>Avilable</span>
                                </li>
                                <button class="btn btn-main">Download</button>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end of descripton div-->
                <section class="service_sec">
                    <div class="container_fulied">
                       <div class="row">
                            <div class="col-sm-5"></div>
                            <div class="col-sm-2 servi">
                                <h3>Services</h3>
                            </div>
                            <div class="col-sm-5"></div>
                       </div>
                        <div class="row services">
                            <div class="col-sm-3">
                                <div class="icon">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <h4>Web Development</h4>
                                <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="icon">
                                    <i class="fas fa-pen-nib"></i>
                                </div>
                                <h4>Web Design</h4>
                                <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h4>Responsive Design</h4>
                                <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="icon">
                                    <i class="fab fa-medapps"></i>
                                </div>
                                <h4>Web apps</h4>
                                <p>Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--end of service Section-->
                <section>
                    <div class="container_fulied">
                       <div class="row">
                            <div class="col-sm-5"></div>
                            <div class="col-sm-2 servi">
                                <h3>Clients</h3>
                            </div>
                            <div class="col-sm-5"></div>
                       </div>
                        <div class="row client">
                            <div class="col-sm-2">
                                <img src="img/client-01.png" alt="clientImg">
                            </div>
                            <div class="col-sm-2">
                                <img src="img/client-02.png" alt="clientImg">
                            </div>
                            <div class="col-sm-2">
                                <img src="img/client-04.png" alt="clientImg">
                            </div>
                            <div class="col-sm-2">
                                <img src="img/client-05.png" alt="clientImg">
                            </div>
                            <div class="col-sm-2">
                                <img src="img/client-08.png" alt="clientImg">
                            </div>
                            <div class="col-sm-2">
                                <img src="img/client-09.png" alt="clientImg">
                            </div>
                        </div>
                    </div>
                </section>
                <!--end of client image section-->
                <section class="testimonials">
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <h3>TESTIMONIALS</h3>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="container_fulied">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="symble"> 
                                    <p><span><i class="fab fa-artstation"></i></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptate!</p>
                                </div>
                                <div class="row happyclient">
                                   <div class="col-sm-3"> <img src="img/author-3.jpg" alt="profilepic">
                                   </div>
                                   <div class="col-sm-9">
                                       <h4>Alesa Bolson</h4>
                                    <p>Designer</p>
                                   </div>
                                   
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="symble">
                                    <p><span><i class="fab fa-artstation"></i></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptate!</p>
                                </div>
                                <div class="row happyclient">
                                   <div class="col-sm-3"> <img src="img/author-1.jpg" alt="profilepic">
                                   </div>
                                   <div class="col-sm-9">
                                       <h4>Alesa Bolson</h4>
                                    <p>Designer</p>
                                   </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <!--End of col-sm - 10 -->
            <!--End of about me div-->
        </div>
    </div>
</body>

</html>