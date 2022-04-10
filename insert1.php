<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
    <style>
        .box{
            border:2px double black;
            padding: 10px;
            width:400px;
            height:150px;
            margin-top:145px;
            background: pink;
            color:black;
            font-size:19px;
            
        }
    </style>
</head>

<body>
    <center>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Follower";
        $conn = mysqli_connect("localhost", "root", "", "Follower");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $username = $_REQUEST['username'];
       // $gender = $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $phonecode = $_REQUEST['phonecode'];
        $phone = $_REQUEST['phone'];
        
        // Performing insert query execution
        // here our table name is data_follow
        $sql = "INSERT INTO data_follow VALUES ('$username','$email','$phonecode','$phone')";
        $sql1= "select * from data_follow";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.". " Please browse your localhost php my admin". " to view the updated data</h3>";

            echo nl2br("\n$username\n $email\n $phonecode\n $phone");
        } else{
            echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
        
        $retval = mysqli_query($conn, $sql1);

        if (!$retval) {
        die("Could not get the data".mysqli_error($conn));
        }
        $count = 0;
        while($row = mysqli_fetch_array($retval)){

        $count+=1;
        //echo "Student ID: ".$row['studentID']."<br>";
        //echo "Student USN: ".$row['studentusn']."<br>";
        //echo "Student Name: ".$row['studentname']."<br>";
        //echo "Student Address:".$row['Address']."<br>";
        }
        echo nl2br("<br>");
        echo nl2br("<br>");
        echo nl2br("<br>");
        echo "<button>The number of followers are ".$count;
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    <button><a href="form_vis.html">Go Back to Subscribe</a></button><br><br><br>
    <a href="mvpdf.pdf"><h2><span style="color:red;">Download Here</span></h2></a> 
    <center>
        <div class="box mt-4">
            <h2>Project Submitted By:</h2>
        
            <li class="list-group-item">PATHAN ALI AZAM</li>
            <li class="list-group-item">SHAIK HEENA</li>
            <li class="list-group-item">SHAIK MASTANI</li>
    
        </div>
    </center>
</body>

</html>