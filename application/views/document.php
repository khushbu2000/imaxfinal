<?php
?>

<html xmlns="http://www.w3.org/1999/xhtml" class=" js cssanimations">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   

    <title>Welcome to IMAX INFRA </title>
    <link rel="icon"type="image/png" href="<?php echo base_url();?>assets/img/logo.png" />
    <meta name="keywords" content="Welcome to imax infra ">
    <meta name="description" content="">


    <link href="<?php echo base_url();?>assets/best1_files/style.css" rel="stylesheet" type="text/css" >
    <link type="text/css" href="<?php echo base_url();?>assets/best1_files/menu.css" rel="stylesheet" media="all">
    <link href="#" rel="shortcut icon">

    <style>
        .error_class {
            color: #FF0000;
        }

        .add_class_nes {
            color: #003366;
        }

        .error_classi {
            color: #999999;
        }


        .txt1 {
            color: #FF00FF;
            font-weight: bold;
            font-size: x-large;
        }

        .txt2 {
            color: #FFDE00;
            font-weight: bold;
            font-size: x-large;
        }

        .txt3 {
            color: #9CE400;
            font-weight: bold;
            font-size: x-large;
        }
        -->
    </style>

    <script src="<?php echo base_url();?>assets/best1_files/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/best1_files/modernizr.custom.86080.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#subscribe_id").click(function () {

                var u_mail = $("#Email").val();

                if (u_mail == '' || u_mail == "E-mail address") {

                    $("#Email").addClass("error_class");
                }
                else if (!validateEmail(u_mail)) {
                    $("#Email").addClass("error_class");
                }
                else {
                    var result_b = true;
                }

                if (result_b == true) {
                    $.post('newsletter_mail.html', { email_id: u_mail }, function (data) {

                        if (data == 'success') {
                            $("#newsLetter_success").css("color", "green");
                            $("#Email").val("E-mail address");
                            $("#Email").addClass("error_classi");
                            $("#newsLetter_success").html("Your request has been accepted!");
                            $("#newsLetter_success").addClass("add_class_nes");
                        }
                        else {
                            //alert("failed");
                            $("#newsLetter_success").html("Mail not send");
                            $("#newsLetter_success").addClass("error_class");
                        }
                    })
                }

                function validateEmail($email) {
                    //var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    var emailReg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
                    if (!emailReg.test($email)) {
                        return false;
                    } else {
                        return true;
                    }
                }
            });


            $(".search_tool").click(function () {    //alert("hhhh");

                $('#search-form').submit();

            });



        });
    </script>

</head>

<body bgcolor="#FDFEFE">



    <div id="body_container2" >



        <!--Top Container Start-->
        <div id="top_container" style="background-image: url('<?php echo base_url();?>assets/images/gol1.jpg'); background-size: cover; background-repeat: no-repeat; height: 140px; box-shadow: 0px 0px 20px #e3e3e3;">
            <div class="top">
                <div id="totmenu">
                </div>

                <div class="clear"></div>
            </div>


            <div style="text-align: center;">
                <table width="" border="0">
                    <tr>
                        <td>
                            <div style="float: left !important; margin-left: 185px;">
                           
                                <img src="<?php echo base_url();?>assets/img/logo.png" title="IMAX INFRA " width="160" height="90"></a></div>
                        </td>

                        <td>
                            <div style="float: left !important; margin-left: 250px;">
                                <br />

                                <span style="margin-left: 270px">

                                    <img src="<?php echo base_url();?>assets/img/face.png" height="30px">

                                    <img src="<?php echo base_url();?>assets/img/twr.png" height="30px;">
                                </span>
                                <br />
                                <table>
                                    <tr>
                                        <td><span style="font-size: 14px"><b style="font-weight: bold">Email:</b>imaxinfra77@gmail.com </span>| </td>
                                        <td>
                                            <img src="<?php echo base_url();?>assets/images/phone_2.png" height="17px" /></td>
                                        <td>
                                            <div style="font-size: 15px">+91-9208643071</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>

                    </tr>
                 </table>
 </div>
   <div style="clear: both;"></div>
            <style>
                .menu1,
                .menu1 ul,
                .menu1 li,
                .menu1 a {
                    margin: 0;
                    padding: 0;
                    border: none;
                    outline: none;
                }

                .menu1 { /*Find this class in the css file*/
                    height: 40px;
                    width: 100%; /*I changed this to a percentage of the page,*/
                    margin-left: auto; /*Then added these two margin styles.*/
                    margin-right: auto;
                    background: #4c4e5a;
                    background: -webkit-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                    background: -moz-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                    background: -o-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                    background: -ms-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                    background: linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                }

                    .menu1 li {
                        position: relative;
                        list-style: none;
                        float: left;
                        display: block;
                        height: 40px;
                    }

                        .menu1 li a {
                            display: block;
                            padding: 0 18px;
                            margin: 6px 0;
                            line-height: 28px;
                            text-decoration: none;
                            border-left: 1px solid #393942;
                            border-right: 1px solid #4f5058;
                            font-family: Helvetica, Arial, sans-serif;
                            font-size: 12px;
                            color: #f3f3f3;
                            text-shadow: 1px 1px 1px rgba(0,0,0,.6);
                            -webkit-transition: color .2s ease-in-out;
                            -moz-transition: color .2s ease-in-out;
                            -o-transition: color .2s ease-in-out;
                            -ms-transition: color .2s ease-in-out;
                            transition: color .2s ease-in-out;
                        }

                        .menu1 li:first-child a {
                            border-left: none;
                        }

                        .menu1 li:last-child a {
                            border-right: none;
                        }

                        .menu1 li:hover > a {
                            color: #FFD007;
                        }

                    .menu1 ul {
                        position: absolute;
                        top: 40px;
                        left: 0;
                        opacity: 50;
                        background: #1f2024;
                        -webkit-border-radius: 0 0 5px 5px;
                        -moz-border-radius: 0 0 5px 5px;
                        border-radius: 0 0 5px 5px;
                        -webkit-transition: opacity .25s ease .1s;
                        -moz-transition: opacity .25s ease .1s;
                        -o-transition: opacity .25s ease .1s;
                        -ms-transition: opacity .25s ease .1s;
                        transition: opacity .25s ease .1s;
                    }

                    .menu1 li:hover > ul {
                        opacity: 50;
                    }

                    .menu1 ul li {
                        height: 0;
                        overflow: hidden;
                        padding: 0;
                        -webkit-transition: height .25s ease .1s;
                        -moz-transition: height .25s ease .1s;
                        -o-transition: height .25s ease .1s;
                        -ms-transition: height .25s ease .1s;
                        transition: height .25s ease .1s;
                    }

                    .menu1 li:hover > ul li {
                        height: 36px;
                        overflow: visible;
                        padding: 0;
                    }

                    .menu1 ul li a {
                        width: 100px;
                        padding: 4px 0 4px 40px;
                        margin: 0;
                        border: none;
                        border-bottom: 1px solid #353539;
                    }

                    .menu1 ul li:last-child a {
                        border: none;
                    }

                    .menu1 a.documents {
                        background: url(../img/docs.html) no-repeat 6px center;
                    }

                    .menu1 a.messages {
                        background: url(../img/bubble.html) no-repeat 6px center;
                    }

                    .menu1 a.signout {
                        background: url(../img/arrow.html) no-repeat 6px center;
                    }
            </style>
            <ul class="menu1">
                <li><span style="color: #43454F"></span></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/welcome_message">Home</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/about">About us</a></li>

                <li><a href="#">Products</a>

                    <ul>
                       
                    </ul>

                </li>
                <li><a href="<?php echo base_url();?>index.php/welcome/about">Legal</a></li>
                
                <!--<li><a href="../showroom/index.html">Showroom</a></li>
    <li><a href="../testimonial/index.html">Customer comments</a></li>
    <li><a href="../media-coverage/index.html">Media coverage</a></li>
    <li><a href="../education/index.html">Education</a></li>-->
                
                <li><a href="<?php echo base_url();?>index.php/welcome/registration">Registration</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/contact">Contact us</a></li>
                	<li><a href="<?php echo base_url();?>index.php/welcome/login">Login</a></li>

            </ul>
        </div>
        <div style="background-color: #000; background-repeat: no-repeat; background-size: cover; margin-top: -24px;">


            <div style="margin: auto; padding: 20px; height: 1500px;">

                <!--first history-->

                <div id="his1" align="right" style="color: #FDFEFE; margin-right: 206px; margin-top: 50px;">
                  

                </div>
  <!--cmd-->
   <div id="cmd1" align="right" style="background-color: #FDFEFE; margin-right: 206px; margin-top: 50px; display: none">
                   
  </div>
   <!--mission-->
   <div id="mis1" align="right" style="background-color: #FDFEFE; margin-right: 206px; margin-top: 50px; display: nonebackground-color:white">
                   
  </div>
  
  <!--<div style="float: left; padding: 20px;">
                    <div style="width: 410px; margin-top: 60px; height: 320px;">

                        <div id="img1">
                            <img src="<?php //echo base_url();?>assets/img/cod1.jpg" height="300px;" style="margin-left:20%;margin-top:2%;border-radius:10%;" /></div>
                        <br />

                        <div id="img2" style="display: none; margin-left: 20px; margin-top: -50px;">
                            <img src="<?php //echo base_url();?>assets/img/col3.jpeg" /></div>

                        <div id="img3" style="display: none; margin-top: -30px;">
                            <img src="<?php echo base_url();?>assets/img/col2.jpeg" /></div>

                    </div>
                </div>-->
                 
                           <img src="<?php echo base_url();?>assets/img/legal.jpeg" height="400"  style="margin-left:10%;"/>   
                        
                   
                         <br/>
                           <br/>
                          <img src="<?php echo base_url();?>assets/img/legal1.jpeg" " width="500" />
                         
                       
                         
                            
                        
                         
                     
                     
                        
               

                <div style="float: left; padding: 20px;">
                    <div style="width: 480px; height: 460px;">
                        <span style="color: #ccc; font-size: 11px; line-height: 18px;">



                            </span></div></div></div></div></div></body></html>
                             
        <?php $this->load->view('footer')?>