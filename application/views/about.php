



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" class=" js cssanimations">


<!-- Mirrored from madi.alt-neuro.com/about-us/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2019 11:26:42 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Welcome to Madi Ratnam Gold Jewellers </title>
    <link rel="icon"
        type="image/png" href="<?php echo base_url();?>assets/images/favicon.html" />
    <meta name="keywords" content="Welcome to Madi Ratnam Gold Jewellers ">
    <meta name="description" content="">


    <link href="<?php echo base_url();?>assets/best1_files/style.css" rel="stylesheet" type="text/css">
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

<body>



    <div id="body_container2">



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
                            <a href="<?php echo base_url();?>assets/index-2.html" title="Madi Ratnam Gold Jewellers ">
                                <img src="<?php echo base_url();?>assets/img/logo.png" title="Madi Ratnam Gold Jewellers " width="160"></a></div>
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
              <li><a href="<?php echo base_url();?>index.php/welcome/document">Document</a></li>
               
                <li><a href="<?php echo base_url();?>index.php/welcome/registration">Registration</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/contact">Contact us</a></li>

            </ul>
        </div>
        <div style="background-color: #000; background-repeat: no-repeat; background-size: cover; margin-top: -24px;">


            <div style="margin: auto; padding: 20px; height: 1500px;">

                <!--first history-->

                <div id="his1" align="right" style="color: #fff; margin-right: 206px; margin-top: 50px;">
                    <table>
                        <tr>


                            <td>
                                <div id="click1">
                                    <a href="javascript:void()" onclick="return neha0()" style="text-decoration: none;">
                                        <input type="submit" value="HISTORY" style="background-color: #FAB205; border: #FAB205 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" />
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div id="click2" style="margin-left: 10px;">
                                    <a href="javascript:void()" onclick="return neha1()" style="text-decoration: none;">
                                        <input type="submit" value="ABOUT IMAX INFRA " style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                            <td>
                                <div id="click3" style="margin-left: 10px;">
                                <a href="javascript:void()" onclick="return neha2()" style="text-decoration: none; color: #B6CBCD;">
                                    <input type="submit" value="MISSION & VISION" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a></div>
                            </td>

                        </tr>
                    </table>

                </div>



                <!--cmd-->



                <div id="cmd1" align="right" style="color: #fff; margin-right: 206px; margin-top: 50px; display: none">
                    <table>
                        <tr>


                            <td>
                                <div id="click4">
                                    <a href="index.html">
                                        <input type="submit" value="HISTOR" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                            <td>
                                <div id="click5" style="margin-left: 10px;">
                                    <input type="submit" value="AboutIMAX INFRA Gold" style="background-color: #FAB205; border: #FAB205 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" />
                                </div>
                            </td>

                            <td>
                                <div id="click6" style="margin-left: 10px;">
                                    <a href="javascript:void()" onclick="return neha3()" style="text-decoration: none;">
                                        <input type="submit" value="Mission & Vision" id="neha" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                        </tr>
                    </table>
  </div>
   <!--mission-->
   <div id="mis1" align="right" style="color: #fff; margin-right: 206px; margin-top: 50px; display: none">
                    <table>
                        <tr>


                            <td>
                                <div id="click7">
                                    <a href="index.html">
                                        <input type="submit" value="History" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                            <td>
                                <div id="click8" style="margin-left: 10px;">
                                    <a href="javascript:void()" onclick="return neha4()" style="text-decoration: none;">
                                        <input type="submit" value="About IMAX INFRA" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                            <td>
                                <div id="click9" style="margin-left: 10px;">
                                    <input type="submit" value="Mission & Vision" style="background-color: #FAB205; border: #FAB205 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" />
                                </div>
                            </td>
                        </tr>
                    </table>
  </div>
  <div style="float: left; padding: 20px;">
                    <div style="width: 410px; margin-top: 60px; height: 320px;">

                        <div id="img1">
                            <img src="<?php echo base_url();?>assets/img/owner.jpeg" height="400px;" style="margin-left:20%;margin-top:2%;border-radius:10%;" /></div>
                        <br />

                        <div id="img2" style="display: none; margin-left: 20px; margin-top: -50px;">
                            <img src="<?php echo base_url();?>assets/slider/8.jpg" height="200" style="border-radius:1%;" width="350"/></div>

                        <div id="img3" style="display: none; margin-top: -30px;">
                            <img src="<?php echo base_url();?>assets/slider/e.jpg"  height="200" width="350" style="border-radius:10%;"/></div>

                    </div>
                </div>

                <div style="float: left; padding: 20px;">
                    <div style="width: 480px; height: 460px;">
                        <span style="color: #ccc; font-size: 11px; line-height: 18px;">



                            <div id="profile1" style="display: margin-left:60%;margin-top:30%; ">
                                <b style="font-size: 15px; color: #fff;">
                                </b><br />
                                <br />


                                <br />
                                <br />

                                <div style="margin-top: -30px; color: #999; font-size: 11px; line-height: 20px;">
                                    I MAX infra project today is one of the fastest
						emerging key players in the Indian real estate landscape. Know for its innovative approach to offer state-of-the Art
						GREEN STRUCTURE ,Along with sustainable models, I MAX infraproject.	project.</p> <p class="text-info" align=”justify”>
					 Is commited to mark its excellence in green construction in
						skyline in India.<br />
                                    <br />
Setting benchmarks by initialing the concept of green
									building technology in NORTH INDIA.
								I MAX infra project offers the most innovative and
									diversified product mix comprising resident, Commercial/IT
									park, Retails, Hotels,Farms House and SEZ. 
						
                                    <br />
                                    <br />





                                </div>



                            </div>
                            <br />

                            <div id="profile2" style="display: none">

                                <b style="font-size: 15px; color: #fff;">ABOUT IMAX INFRA</b><br />
                                <br />

                                <div style="color: #999; font-size: 11px; line-height: 22px;">

                                    <b style="font-size: 15px; color: #fff;">IMAX INFRA</b>
                                           I MAX infra project today is one of the fastest
						emerging key players in the Indian real estate landscape. Know for its innovative approach to offer state-of-the Art
						GREEN STRUCTURE ,Along with sustainable models, I MAX infraproject.	project.</p> <p class="text-info" align=”justify”>
					 .<br />etc...
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Our Company</b>
                                    <br />
                                    Is commited to mark its excellence in green construction in
						skyline in India
                                    <br />
                   
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Product Collection</b>
                                    <br />
                                    <address style="font-size: 15px; color: #fff;">
                                      
                                    </address>
                                    <br />

                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5">
                                        <tr>
                                            <td colspan="2" align="left" class="txt1">projects</td>
                                        </tr>
                                        <tr>
                                            <td width="10" align="left">&nbsp;</td>
                                            <td align="left">LAND INVESTMENT</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">HOME INVESTMENT</td>
                                        </tr>
                                    
                                
                                    </table>


                                    <br />
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Best Facilities</b><br />
                                   
                                   IMAX INFRA provide best facilities  .Home investment  and land investment .<br />

                                    <b style="font-size: 15px; color: #fff;">Infrastructural Setup</b><br />
                                    IMAX INFRA  is supported by a well equipped and complete production unit, which is outfitted with all the necessary tools to carry out its processing works in the most efficient and smooth 
    manner possible. Our handmade range is manufactured by a team of dexterous and expert craftsmen who carefully carve out the designs. 
    
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Why Us?</b>
                                    <br />

                                    <br />
                                    Committed and expert jewellery designers who are well trained in various operations<br />


                                </div>


                            </div>
                            <br />
                            <br />

                            <div id="profile3" style="display: none; margin-top: -30px">
                                <b style="font-size: 15px; color: #fff;">Vision</b><br />
                                <br />

                                <div style="color: #999; font-size: 11px; line-height: 18px;">
                                    <br />
                                  Is commited to mark its excellence in green construction in
						skyline in India
                                    <br />
                                    Customer Satisfaction<br />
                                    Employee Satisfaction<br />
                                   



                                    <br />
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Mission</b><br />
                                    <br />
                                    To create a culture of professionalism, core competence, teamwork, leadership and service excellence.
                                    <br />
                                    To leverage modern cost effective techniques resulting in quality, durability, wealth creation and value multiplication.
                                    <br />
                                    To render value added services creating customer delight through technological excellence and adherence to system and procedures with the extra-ordinary active involvement of human resources.
                                    <br />
                                   IMAX INFRA  has always been a symbol of trust for its customer.
                                    <br />

                                    <br />
                                    <br />
                                    <br />
                                </div>
  </div>
  </span>
  </div>
                </div>
 </div>
 </div>

     </div>
       <?php $this->load->view('footer')?>
        </div>
        <!-- Footer end-->


    </div>
    <!--<script src="js1/jquery.min.js"></script>-->
    <!--<script>
jQuery(document).ready(function() {
  // Handler for .ready() called.
  alert("hi");
});
</script>-->
</body>

<!-- Mirrored from madi.alt-neuro.com/about-us/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2019 11:26:46 GMT -->
</html>


<script>

    function neha1() {
        //alert("1");
        document.getElementById('profile3').style.display = "none"
        document.getElementById('profile1').style.display = "none"
        document.getElementById('img1').style.display = "none"
        document.getElementById('img3').style.display = "none"
        document.getElementById('his1').style.display = "none"

        document.getElementById('profile2').style.display = "block"
        document.getElementById('click2').style.display = "block"
        document.getElementById('img2').style.display = "block"
        document.getElementById('cmd1').style.display = "block"

    }


    function neha2() {
        //alert("1");
        document.getElementById('profile2').style.display = "none"
        document.getElementById('profile1').style.display = "none"
        document.getElementById('img1').style.display = "none"
        document.getElementById('img2').style.display = "none"
        document.getElementById('his1').style.display = "none"
        document.getElementById('cmd1').style.display = "none"

        document.getElementById('profile3').style.display = "block"
        document.getElementById('click3').style.display = "block"
        document.getElementById('img3').style.display = "block"
        document.getElementById('mis1').style.display = "block"

    }



    function neha3() {
        //alert("1");
        document.getElementById('profile2').style.display = "none"
        document.getElementById('profile1').style.display = "none"
        document.getElementById('img1').style.display = "none"
        document.getElementById('img2').style.display = "none"
        document.getElementById('his1').style.display = "none"
        document.getElementById('cmd1').style.display = "none"

        document.getElementById('profile3').style.display = "block"
        document.getElementById('click6').style.display = "block"
        document.getElementById('img3').style.display = "block"
        document.getElementById('mis1').style.display = "block"

    }



    function neha4() {
        //alert("1");
        document.getElementById('profile3').style.display = "none"
        document.getElementById('profile1').style.display = "none"
        document.getElementById('img3').style.display = "none"
        document.getElementById('img2').style.display = "none"
        document.getElementById('his1').style.display = "none"
        document.getElementById('mis1').style.display = "none"

        document.getElementById('profile2').style.display = "block"
        document.getElementById('click8').style.display = "block"
        document.getElementById('img2').style.display = "block"
        document.getElementById('cmd1').style.display = "block"

    }


</script>
     


