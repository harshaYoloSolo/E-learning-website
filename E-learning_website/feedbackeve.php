<?php
    $username = "";
    $email = "";
    $errors = "";
    // connect to database
    $db = mysqli_connect('localhost','root','123456789','registration');
    
        $name=$_POST['name'];
        $username=$_POST['username'];
        $sub=$_POST['sub'];

        $sql="INSERT INTO feedback values('$name','$username','$sub')";
        $r=mysqli_query($db, $sql);

                   echo "<p>Your Feedback $sub Has Been Submitted.</p>";

                    echo "<br></br>Feedback Submitted Till Now.<br></br>";
    $sql="SELECT * FROM feedback";
    $r=mysqli_query($db, $sql); 
                    echo "<table cellpadding=\"5\" cellspacing=\"5\" border=\"black\">";
                    echo "<th>Name</th> <th>Username</th> <th>Subject</th>";
                    if (mysqli_num_rows($r) > 0) {
                        while($row = mysqli_fetch_assoc($r)) {
                          echo "<tr><td>" .$row["name"]. "</td><td>" .$row["username"]. "</td><td>" .$row["subject"]."</td></tr>";
                           }
                       }

    header("Refresh:7;url=studentpage.php");

?>