<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
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
 .img{
     background-image: url("img/blog/blog_2.png");
     background-repeat: repeat;
 }
</style>
<body class="img">

<!-- <img src="img/blog/blog_2.png" alt=""> -->

<h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">Doctor View</h2>
    <table class="center">
            <tr>
                <th>Name</th>
                <th>Qualifications</th>
                <th>Speciality</th>
                <!-- <th>Doctor ID</th> -->
            </tr>

            @foreach ($doctors ?? '' as $doctor)
            <tr>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->qualifications}}</td>
                <td>{{$doctor->speciality}}</td>

                <!-- Buttons with Icons -->
            <td>
                <a class="btn" style="border:1px solid;" href="{{URL::to('doctupdate', $doctor->id)}}" title= "Update -> {{$doctor->name}}"> <i class="fa fa-edit"></i></a>
                <a class="btn" style="border:1px solid;" href="{{URL::to('doctdelete', $doctor->id)}}" onclick="return confirm ('Are you sure to delete the doctor {{$doctor->name}} having Name {{$doctor->name}}?')" title="Delete -> {{$doctor->name}}"> <i class="fa fa-trash"></i></a> 
            </td>
            </tr>
            @endforeach
    </table>
    <a class="btn" style="border:1px solid;" href="{{URL::to('/doctcreate')}}" title="Add New Doctor">Create</a>
</body>
</html>