<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Doctor Record</title>
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
</style>
<body>
<h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">Update Doctor Record</h2>

<form action="{{ route ('/doctedit', $doctors->id)}}" method="post">
    @csrf

    <label for="name">Doctor Name: &nbsp;</label>
    <input type="text" id="name" name="name" value="{{$doctors->name}}"><br><br>

    <label for="qua">Qualifications: &nbsp;</label>
    <input type="text" id="qua" name="qualifications" value="{{$doctors->qualifications}}"><br><br>

    <label for="spe">Speciality: &nbsp;</label>
    <input type="text" id="spe" name="speciality" value="{{$doctors->speciality}}"><br><br>

    <!-- <label for="desc">Appointment Decs: &nbsp;</label>
    <input type="text" id="desc" name="aptmnt_desc" value="{{$doctors->aptmnt_desc}}"><br><br>

    <label for="type">Appointment Type: &nbsp;</label>
    <input type="text" id="type" name="aptmnt_type" value="{{$doctors->aptmnt_type}}"><br><br> -->

    <input type="submit" value="Update">
</form>
</body>
</html>