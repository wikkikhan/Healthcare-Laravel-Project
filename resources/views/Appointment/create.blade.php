<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Appointment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Appointment</title>
    <!-- <link rel="icon" href="img/favicon.png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Below W3Schools link can be used to study different buttons -->
    <!-- https://www.w3schools.com/howto/howto_css_icon_buttons.asp -->
    <!-- For Success alert that appears after deletion -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    table, th, td {
        border: 1px solid black;
        text-align: center;
    }
 th, td {
    padding: 5px;
 }
 table.center{
     margin-left: auto;
     margin-right: auto;
 }
 .sbtn{
     border-radius: 5px;
     background: white;
     color: white;
     border: #2e2d2d;
 }
 #colr{
    background: #e8ebe9;
     color: white;
     border: 0px;
     font-size: 18px;
     font-weight: bold;
     border-radius: 5px;
     padding: 5px 10px;
     
 }
</style>
<body>
    <!-- <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">Add New Appointment</h2> -->

     <!--::regervation_part start::-->
     <form action="{{ route ('/aptmntadd')}}" method="post">
        @csrf

     <section class="regervation_part">
        <div class="container mt-5"></div>
        <div class="container mt-5"></div>
        <div class="container mt-5"></div>
        <div class="container mt-5">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7 col-md-6">
                    <div class="regervation_part_iner">
                        <form>
                            <h2>Update Your Appointment</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <!-- <input type="text" id="name" name="name"><br><br> -->
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                                </div>
                                <div class="form-group col-md-6">
                                <!-- <input type="text" id="mail" name="email"><br><br> -->
                                    <input type="text" class="form-control" id="mail" placeholder="Email address" name="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="type" name="aptmnt_type">
                                        <option value="1" selected>Select Type</option>
                                        <option value="2">Name of service</option>
                                        <option value="3">Name of service</option>
                                        <option value="4">Name of service</option>
                                        <option value="5">Name of service</option>
                                    </select>
                                </div>
                                <div class="form-group time_icon col-md-6">
                                <!-- <input type="text" id="time" name="time"><br><br> -->
                                    <select class="form-control" id="time" name="time">
                                        <option value="" selected>Time</option>
                                        <option value="1">8 AM TO 10AM</option>
                                        <option value="1">10 AM TO 12PM</option>
                                        <option value="1">12PM TO 2PM</option>
                                        <option value="1">2PM TO 4PM</option>
                                        <option value="1">4PM TO 6PM</option>
                                        <option value="1">6PM TO 8PM</option>
                                        <option value="1">4PM TO 10PM</option>
                                        <option value="1">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group col-md-6"> -->
                                <!-- <input type="text" id="type" name="aptmnt_type"><br><br> -->
                                    <!-- <input type="text" class="form-control" id="type" placeholder="type" name="aptmnt_type">
                                </div> -->
                                <div class="form-group col-md-12">
                                <!-- <input type="text" id="desc" name="aptmnt_desc"><br><br> -->
                                    <textarea class="form-control" id="desc" rows="4" placeholder="Your Note" name="aptmnt_desc"></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="#" class="sbtn"><input id="colr" style="color:white" type="submit" value="Submit"></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="img/reservation.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    <!--::regervation_part end::-->

    <!-- <form action="{{ route ('/aptmntadd')}}" method="post">
        @csrf -->

        <!-- <label for="name">Patient Name: &nbsp;</label>
        <input type="text" id="name" name="name"><br><br> -->

        <!-- <label for="mail">Patient Mail: &nbsp;</label>
        <input type="text" id="mail" name="email"><br><br> -->

        <!-- <label for="time">Time: &nbsp;</label>
        <input type="text" id="time" name="time"><br><br> -->

        <!-- <label for="desc">Appointment Desc: &nbsp;</label>
        <input type="text" id="desc" name="aptmnt_desc"><br><br> -->

        <!-- <label for="type">Appointment Type: &nbsp;</label>
        <input type="text" id="type" name="aptmnt_type"><br><br> -->

        <!-- <input type="submit" value="Submit"> -->
    <!-- </form> -->
</body>
</html>