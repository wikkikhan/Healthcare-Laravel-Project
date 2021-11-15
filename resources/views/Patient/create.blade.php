<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Patient</title>
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
<h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">Add New Patient</h2>

<form action="{{ route ('/padd')}}" method="post">
        @csrf
        <label for="name">Patient Name: &nbsp;</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="dob">DOB: &nbsp;</label>
        <input type="text" id="dob" name="dob"><br><br>

        <label for="gen">Gender: &nbsp;</label>
        <input type="text" id="gen" name="gender"><br><br>

        <label for="btype">Blood Type: &nbsp;</label>
        <input type="text" id="btype" name="bloodtype"><br><br>

        <label for="tno">Tell No: &nbsp;</label>
        <input type="text" id="tno" name="telno"><br><br>

        <label for="adrs">Address: &nbsp;</label>
        <input type="text" id="adrs" name="address"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>