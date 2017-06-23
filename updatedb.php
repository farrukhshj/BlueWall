<?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $assng=$_POST['txt-assignment'];
                $dd=date("Y-m-d", strtotime($_POST['duedate']));
                $edd=date("Y-m-d", strtotime($_POST['extdate']));
                $cmnts=$_POST['txt-comment'];
                $ctg=$_POST['category'];
                $mtrc=$_POST['metric'];
                $ownr=$_POST['txt-owner'];
                $backurl=$_POST['urlholder'];
                $id=$_POST['idholder'];
                $status=$_POST['statusholder'];
                $dept=$_POST['department'];
                
                
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname= "bluewall";

                    
                    $conn = new mysqli($servername, $username, $password,$dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "update card set assignment='$assng',status='$status',ext_due_date='$edd',comments='$cmnts',category='$ctg',metric='$mtrc',owner='$ownr',dept_name='$dept' where id=$id;";
                    if ($conn->query($sql) === TRUE) {
                        echo "Card Updated";
                        echo $backurl;
                        header('Location:'.$backurl);
                    } 
                    else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
            }
?>


