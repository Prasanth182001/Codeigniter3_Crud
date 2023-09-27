<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <style>
        *{font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}
        table{width:100%; text-align: center;}
        a{text-decoration:none;}
        .blue{color:green; margin-left: 90%;}
        .Green{color:dark magenta;}
        .red{color:red;}
        .Yello{color:blue;}
        .out , .out td,.out th{
            border:1px solid black;
            background-color:skyblue;
            padding: 8px;
            margin:auto;
            border-collapse:collapse;}
        .in {width:50%}
        .in th{width:25%}
        .in td{width:25%}
        .out th{background-color:gray; color:white;}
        .cen{ display: flex; justify-content: center;}
        form{width: 25%;
    display: flex;flex-direction: column; justify-content: center;
    margin:auto; padding:40px; background-color:skyblue; margin-top:80px}
    input{margin-top:5px;}
    </style>
</head>
<body>


    <?php
    if(isset($data)){
        ?>
        
        <form action="<?=base_url('home/update')?>" method="post">
        <h1>Update Form</h1>
        
                <lable>Id</lable>
                <input type='number' name='stdid' required='' readonly="" value="<?=$data[0]->Id?>">
                <lable>Name</lable>
                <input type='text' name='stdname' required='' value="<?=$data[0]->Student_Name?>">
                <lable>Age</lable>
                <input type='text' name='stdage' required='' value="<?=$data[0]->Student_Age?>">
                <lable>City</lable>
                <input type='text' name='stdcity' required='' value="<?=$data[0]->Student_City?>">
                <lable>Mobile Number</lable>
                <input type='number' name='stdnumber' required='' value="<?=$data[0]->Student_Number?>">
                <input type='submit' name='submit' value='Update'>
    </form> 
        <?php
    }elseif(isset($v_data)){
            ?>
            <h1 class='cen'>Student Details</h1>
            <table class="out in">
            <tr>
                    <th>Student Id :</th>
                    <td><?=$v_data[0]->Id?></li></td>
                </tr>
                <tr>
                    <th>Student Name :</th>
                    <td><?=$v_data[0]->Student_Name?></li></td>
                </tr>
                <tr>
                    <th>Student Age :</th>
                    <td><?=$v_data[0]->Student_Age?></li></td>
                </tr>
                <tr>
                    <th>Student City :</th>
                    <td><?=$v_data[0]->Student_City?></li></td>
                </tr>
                <tr>
                    <th>Student Number :</th>
                    <td><?=$v_data[0]->Student_Number?></li></td>
                </tr>

        
            <?php
    }
    else{
        ?>
        <h1>Student Details</h1>
        
        <a href="<?=base_url("home/register")?>" class="blue">Add Datas</a>

        <table class="out">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Number</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        if(isset($Table)){
            foreach($Table as $row)
            {
              ?>
              <tr>
              <td><?=$row->Id?></td>
              <td><?=$row->Student_Name?></td>
              <td><?=$row->Student_Age?></td>
              <td><?=$row->Student_City?></td>
              <td><?=$row->Student_Number?></td>
              <td><a href="<?=base_url("home/view/").$row->Id?>" class="Green">View</a></td>
              <td><a href="<?=base_url("home/edit/").$row->Id?>" class="Yello">Edit</a></td>
              <td><a href="<?=base_url("home/delete/").$row->Id?>" class="red">Delete</a></td>
              </tr>
              <?php
            }
        }
        ?>
    </table>
        <?php
    }
    ?>

    
</body>
</html>