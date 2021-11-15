<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
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

</style>
<body>
    <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">Patient View</h2>

    <table class="center">
        <tr>
            <th>Name</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>Blood Type</th>
            <th>Tol No</th>
            <th>Address</th>
        </tr>

        @foreach ($patients ?? '' as $patient)
        <tr>
            <td> {{$patient -> name}} </td>
            <td> {{$patient -> dob}} </td>
            <td> {{$patient -> gender}} </td>
            <td> {{$patient -> bloodtype}} </td>
            <td> {{$patient -> telno}} </td>
            <td> {{$patient -> address}} </td>

            <!-- Buttons with Icons -->
            <td>
                <a class="btn" style="border:1px solid;" href="{{URL::to('pupdate', $patient->id)}}" title= "Update -> {{$patient->name}}"> <i class="fa fa-edit"></i></a>
                <a class="btn" style="border:1px solid;" href="{{URL::to('pdelete', $patient->id)}}" onclick="return confirm ('Are you sure to delete the patient {{$patient->name}} having ID {{$patient->name}}?')" title="Delete -> {{$patient->name}}"> <i class="fa fa-trash"></i></a> 
            </td>
        </tr>
        @endforeach
    </table>
    <a class="btn" style="border:1px solid;" href="{{URL::to('/pcreate')}}" title="Add New Patient">Create</a>
</body>
</html>