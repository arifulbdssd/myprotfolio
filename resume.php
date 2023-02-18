<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
            margin-right: 10px;
            margin-left: 10px;
        }
        .aboutme2{
             margin-right: 10px;
            margin-left: 10px;
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
        /*.clms10{
            margin-left: 10px;
            margin-right: 10px;
        }*/
        .resu_text {
            margin-top: 50px;
            bottom: 50px;
        }

        .resu_text h4,
        p,
        h5 {
            border-left: 2px solid #0BA7E2;
            padding-left: 20px;
        }

        .resu_text p {
            width: 70%;
        }

        .resu_text i {
            font-size: 24px;
            color: #0BA7E2;
            margin-left: -12px;
            margin-top: 15px;
            padding-right: 20px;
            margin-bottom: 15px;
        }

        .resu_text span {
            padding-bottom: 10px;
            padding-left: 10px;
            text-align: center;
            font-size: 24px;
            /* margin-bottom: 10px;*/
        }

        .resu_text h4 {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: .8px;
            line-height: 26px;
            margin: 0;
            text-transform: uppercase;
        }

        .resu_text h5 {
            margin-top: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            font-family: "Roboto", sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            color: #0BA7E2 !important;
        }

        .resu_text p {
            font-size: 16px;
            margin-bottom: 0px;
            text-align: justify;
        }
       /* .exper-text{
            margin-left: 10px;
            margin-right: 10px;
        }*/
        .exper-text h3 {
            text-align: center;
            border-bottom: 2px solid #0BA7E2 !important;
        }

        .experince {
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <section>
        <div class="container_fulied">
            <div class="row">
                 <?php include('action/sidenav.php'); ?>

                <div class="col-sm-10">
                    <div class="row aboutme">
                        <div class="col-sm-6">
                            <h2>About ME</h2>
                        </div>
                        <div class="col-sm-6">
                            <span><i class="far fa-user"></i></span>
                        </div>
                    </div>
                    <div class="row exper-text aboutme2">
                <div class="col-sm-6">
                    <h3>EXPERIENCE</h3>
                    <div class="resu_text">
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2016</span>
                        <h4>LEAD UI DESIGNER</h4>
                        <h5>BIG DESIGN COMPANY, NY, USA</h5>
                        <p>Sit cupiditate praesentium ex esse nulla Facere fuga perspiciatis eveniet provident neque Ea ratione non minus temporibus ipsum Sunt minima</p>
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2018</span>
                    </div>
                </div>
                <div class="col-sm-6 exper-text">
                    <h3>EDUCATION</h3>
                    <div class="resu_text">
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2016</span>
                        <h4>LEAD UI DESIGNER</h4>
                        <h5>BIG DESIGN COMPANY, NY, USA</h5>
                        <p>Sit cupiditate praesentium ex esse nulla Facere fuga perspiciatis eveniet provident neque Ea ratione non minus temporibus ipsum Sunt minima</p>
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2018</span>
                    </div>
                </div>
            </div>
            <div class="row exper-text aboutme2">
                <div class="col-sm-6">
                    <div class="resu_text">
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2016</span>
                        <h4>LEAD UI DESIGNER</h4>
                        <h5>BIG DESIGN COMPANY, NY, USA</h5>
                        <p>Sit cupiditate praesentium ex esse nulla Facere fuga perspiciatis eveniet provident neque Ea ratione non minus temporibus ipsum Sunt minima</p>
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2018</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="resu_text">
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2016</span>
                        <h4>LEAD UI DESIGNER</h4>
                        <h5>BIG DESIGN COMPANY, NY, USA</h5>
                        <p>Sit cupiditate praesentium ex esse nulla Facere fuga perspiciatis eveniet provident neque Ea ratione non minus temporibus ipsum Sunt minima</p>
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2018</span>
                    </div>
                </div>
            </div> 
            <div class="row exper-text aboutme2">
                <div class="col-sm-6">
                    <div class="resu_text">
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2016</span>
                        <h4>LEAD UI DESIGNER</h4>
                        <h5>BIG DESIGN COMPANY, NY, USA</h5>
                        <p>Sit cupiditate praesentium ex esse nulla Facere fuga perspiciatis eveniet provident neque Ea ratione non minus temporibus ipsum Sunt minima</p>
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2018</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="resu_text">
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2016</span>
                        <h4>LEAD UI DESIGNER</h4>
                        <h5>BIG DESIGN COMPANY, NY, USA</h5>
                        <p>Sit cupiditate praesentium ex esse nulla Facere fuga perspiciatis eveniet provident neque Ea ratione non minus temporibus ipsum Sunt minima</p>
                        <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i>2018</span>
                    </div>
                </div>
            </div>
            <div class="row experince exper-text aboutme2">
                <div class="col-sm-6 ">
                    <h3>EXPERIENCE</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Oral Draw : 75%</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Hand Draw : 75%</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Photoshop Draw : 75%</div>
                    </div><br>
                </div>
                <div class="col-sm-6 ">
                    <h3>Codeing Skill</h3>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Oral Draw : 75%</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Hand Draw : 75%</div>
                    </div><br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">Photoshop Draw : 75%</div>
                    </div><br>
                </div>
            </div>         
                   
                </div><!--end of colsm10-->
            </div>
        </div>
    </section>
    <section>
        <div class="container_fulied">

            
            
            
        </div>
    </section>
    <section>
        <div class="container_fulied">
            
        </div>
    </section>
</body>

</html>