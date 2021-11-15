<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
 /* table {
    margin: 25px;
 } */
 th, td {
    padding: 5px;
 }
 table.center{
     margin-left: auto;
     margin-right: auto;
 }
.main{
    /* background-image: url("img/.jpg"); */
}
.container{
    /* background: rgba(0,0,0,0.4); */
    padding: 20px;
    margin-top: 30px;
    width: 1050px;
    margin-left: auto;
     margin-right: auto;
     border-radius: 5px;
     justify-content: center;
}
table{
    font-size: 16px;
    /* color: white; */
}
.des{
    text-shadow: 2px 2px #B2AEAC;
    font-weight: bolder;
}
th{
    background: #6F6F73;
    color: white;
}
.btn{
    font-weight: bold;
}
</style>
<body class="main">
    <h2 class="des" style="border: 1px solid #D2CFCD; padding: 10px; color: white; background-color:#6F6F73; text-align:center;">View Appointment</h2>
    
   <div class="container">
   <table class="table table-bordered table-striped" style="text-align:center">
        <tr>
            <th>Name</th>
            <th>Patient Mail</th>
            <th>Time</th>
            <th>Appointment Description</th>
            <th>Appointment Type</th>
            <th>Operations</th>
        </tr>

        @foreach ($appointments ?? '' as $appointment)
        <tr>
            <!-- <th scope="row">1</th> -->
            <td> {{$appointment -> name}} </td>
            <td> {{$appointment -> email}} </td>
            <td> {{$appointment -> time}} </td>
            <td> {{$appointment -> aptmnt_desc}} </td>
            <td> {{$appointment -> aptmnt_type}} </td>

             <!-- Buttons with Icons  -->
            <td>
                <a class="btn" style="border:1px solid; background:green;color: white;" href="{{URL::to('aptmntupdate', $appointment->id)}}" title= "Update -> {{$appointment->id}}"> <i class="fa fa-edit"></i></a>
                <a class="btn" style="border:1px solid;" href="{{URL::to('aptmntdelete', $appointment->id)}}" onclick="return confirm ('Are you sure to delete the appointment {{$appointment->type}} having ID {{$appointment->aptmnt_id}}?')" title="Delete -> {{$appointment->aptmnt_id}}"> <i class="fa fa-trash"></i></a> 
            </td>
        </tr>
        @endforeach
    </table>
    <a class="btn" style="border:1px solid;background: #A9F6FC; color:black" href="{{URL::to('/aptmntcreate')}}" title="Add New Appointment">Add New Appointment</a>
   </div>
</body>
</html>