<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day2 PHP</title>

    <style>

    body{
        display:flex;
        justify-content:center;
        align-items:center;
    }

    form{
        width:300px;
        background-color:rgba(0,0,0,0.5);
        border-radius:10px;
        padding:20px;
        margin-top:72px;
    }

    h2{
        text-align:center;
        text-decoration:underline;
        padding:5px;
        background-color:red;
        border-radius:4px;
    }

    label{
        display:block;
        font-weight:bold;
        padding:3px;
        margin-top:10px;
    }

    input{
        width:293px;
        height:30px;
        font-size:15px;
        border-radius:5px;
        border-top:none;
        border-left:none;
        border-right:none;
        border-color:black;
        background:transparent;
        padding-left:10px;
    }

    select{
        width:293px;
        height:30px;
        font-size:15px;
        background:transparent;
        margin-bottom:10px;
    }

    button{
        margin-top:10px;
        width:90px;
        height:40px;
        border-radius:10px;
        font-size:20px;
        font-weight:bold;
    }
    button:active{
        border:none;
        background:green;
    }

    strong{
        margin-left:20px;
        display:grid;
        font-size:20px;
    }

    </style>

</head>
<body>
    
    <form action="Day2.php" method="post">

        <h2>Personal Information</h2>

    <label for="Username">Username</label>
    <input type="text" name="User" required placeholder="Okechuku">
    
    <label for="Password">Password</label>
    <input type="text" name="Pass" required placeholder="Blessing">

    <label for="Email">Email</label>
    <input type="email" name="Email" id="Email" required placeholder="example@gmail.com">

    <label for="Gender">Gender</label>
    <select name="Gen">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
    </select>

    <label for="TelephonNumber">Mobile</label>
    <input type="tel" name="tel" required >

    <button name="sub">Submit</button>


    </form>

    <?php

    if(empty($sub)){

        $User = $_POST['User'];
        $Pass = $_POST['Pass'];
        $Email = $_POST['Email'];
        $Gen = $_POST['Gen'];
        $tel = $_POST['tel'];
        $sub = $_POST['sub'];

        echo "<strong> Your Data </strong>";
        echo "<strong> <p> Your Username Is: </strong> {$User}";
        echo "<strong> Your Password Is: </strong> {$Pass}";
        echo "<strong> Your Email Is: </strong> {$Email}";
        echo "<strong> Your Gender Is: </strong> {$Gen}";
        echo "<strong> Your Mobile Number Is: </strong> {$tel}";


    } else
    {
        echo "No data has been Passed";
    }


    ?>
</body>
</html>