<?php

   $username = "";
					$email = "";
					$errors = "";
					$db = mysqli_connect('localhost','root','123456789','registration');

					$chap=$_POST['chap'];
					$que=$_POST['que'];

					$sql="INSERT INTO question VALUES('$chap','$que')";
					$r=mysqli_query($db, $sql);
					
					echo "<p>Your Question $que On Chapter $chap Has Been Submitted.</p>";

					echo "<br></br>Doubts Submitted Till Now.<br></br>";

					$sql="SELECT * FROM question";
					$r=mysqli_query($db, $sql);	
                    echo "<table cellpadding=\"5\" cellspacing=\"5\" border=\"black\">";
                    echo "<th>Chapter</th> <th>Question</th>";
					if (mysqli_num_rows($r) > 0) {
                        while($row = mysqli_fetch_assoc($r)) {
                          echo "<tr><td>" .$row["chapter"]. "</td><td>" .$row["doubt"]. "</td></tr>";
                           }
                       }


    header("Refresh:7;url=studentpage.php");

                    		
 
?>