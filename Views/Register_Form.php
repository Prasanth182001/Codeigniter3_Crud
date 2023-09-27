<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register_Form</title>
    <style>
     *{font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}
     form{width: 25%;
    display: flex;flex-direction: column; justify-content: center;
    margin:auto; padding:40px; background-color:skyblue; margin-top:80px}
    input{margin-top:5px;}
    
    </style>
</head>
<body>
    <form action="<?=base_url('home/add')?>" method="post">
    <h1>Register Form</h1>
        <lable>Name</lable>
        <input type='text' name='stdname' required=''>
        <lable>Age</lable>
        <input type='text' name='stdage' required=''>
        <lable>City</lable>
        <input type='text' name='stdcity' required=''>
        <lable>Mobile Number</lable>
        <input type='number' name='stdnumber' required=''>
        <input type='submit' name='submit' value='submit'>
    </form> 
</body>
</html>