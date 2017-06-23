<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname= "bluewall";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password,$dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $backurl;
            $flag=0; 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id=$_POST['id'];
                /*$assng=$_POST['txt-assignment'];
                $dd=date("Y-m-d", strtotime($_POST['duedate']));
                $edd=date("Y-m-d", strtotime($_POST['extdate']));
                $cmnts=$_POST['txt-comment'];
                $ctg=$_POST['category'];
                $mtrc=$_POST['metric'];
                $ownr=$_POST['txt-owner'];
                $backurl=$_POST['urlholder'];
                $status=$_POST['statusholder'];
                $dept=$_POST['department'];*/
                  
            }
            $sql = "select assignment,status,due_date,ext_due_date,comments,owner from card where id=".$id.";";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0)
                {
            
                    while($row = $result->fetch_assoc()) {    
                    echo "<html>
                          <head>
                        <title>Update Wall Card</title>
                            <link rel='stylesheet' href='//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
                            <script src='//code.jquery.com/jquery-1.10.2.js'></script>
                            <script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
                            <link rel='stylesheet' href='/resources/demos/style.css'>
                            <script>
                                $(function() {
                                
                                $('#extdate').datepicker();
                                });
                           </script>
                           <script>
                               var flag=0; 

                                function saveurl()
                                {
                                    document.getElementById('urlholder').value=document.referrer;
                                    document.getElementById('statusholder').value='0';            
                                }
                                function swapcolor()
                                {
                                            flag=(flag+1)%3;
                                            if(flag == 1)
                                            {
                                                document.getElementById('div-status').style.backgroundColor='yellow';
                                                document.getElementById('statusholder').value='1';
                                            }

                                            if(flag == 2)
                                            {
                                                document.getElementById('div-status').style.backgroundColor='red';
                                                document.getElementById('statusholder').value='2';
                                            }

                                            if(flag == 0)
                                            {

                                                document.getElementById('div-status').style.backgroundColor='green';
                                                document.getElementById('statusholder').value='0';
                                            }
                                }

                            </script>
                            <style>
                                #div-status{
                                    background: green; width: 50px; height: 50px; border: solid 1px; margin-left: 60px;
                                }
                                #div-leg1{
                                    background: green; width: 20px; height: 20px; border: solid 1px;
                                }
                                #div-leg2{
                                    background: yellow; width: 20px; height: 20px; border: solid 1px; 
                                }
                                #div-leg3{
                                    background: red; width: 20px; height: 20px; border: solid 1px;
                                }
                                table {
                                        border-collapse: collapse;
                                }

                                table, th, td {
                                        border: 1px solid black;
                                        word-wrap: break-word;
                                }

                                #txt-assignment{
                                        width: 400px;
                                        height: 160px;
                                }
                                #txt-comment{
                                    width: 400px;
                                }
                                #table-legend{
                                    margin-top:10px;
                                }
                                #p-legend{
                                    margin-top: 40px;
                                }
                                #txt-owner{
                                    height: 40px;
                                }
                                #extdate{
                                    color: red;
                                }
                                select.combo{
                                    width: 97%;
                                }
                                input.buttons{
                                    margin-top: 2%;
                                    width: 150px;
                                    height: 50px;
                                    font-size: 16px;
                                }
                                #submitbtn{
                                    background-color: green;
                                    color: white;

                                }
                                #closebtn
                                {
                                    width: 150px;
                                    height: 50px;
                                    font-size: 16px;
                                    background-color:blue;
                                    color:white;
                                }

                            </style>
                          </head>  
                        <body onload='saveurl()'>
                          <form id='myform' action='updatedb.php' method='post'>
                            <table width='40%'>
                                <tr>
                                    <th colspan='2'>Assignment/Project</th>
                                    <th colspan='2'>Status</th>
                                </tr>    
                                <tr>    
                                    <td rowspan='5' colspan='2'> 
                                        <textarea id='txt-assignment' name='txt-assignment' required>".$row['assignment']."</textarea>
                                    </td>


                                    <td colspan='2'>
                                        <div id='div-status' onclick='swapcolor()'></div>
                                    </td>  
                                </tr>

                                <tr>
                                    <th>Due Date</th>
                                </tr>

                                <tr>
                                    <td><input type='text' name='duedate' value=".$row['due_date']." required readonly/></td>
                                </tr>
                                <tr>
                                    <th>Extended Due Date</th>
                                </tr>
                                <tr>
                                    <td><input type='text' id='extdate' name='extdate'></td>
                                </tr>

                                <tr>
                                    <th colspan='2'>Comments</th>
                                    <th colspan='2'>Owner</th>
                                </tr>
                                <tr>
                                    <td colspan='2'><input type='textarea' id='txt-comment' name='txt-comment'/></td>
                                    <td colspan='2'><input type='text' id='txt-owner' name='txt-owner' value=".$row['owner']." required/></td>
                                </tr>

                                <tr>
                                    <td><h4>Choose a category *</h4></td>
                                    <td>
                                        <select class='combo' name='category' required>
                                            <option value=''> </option>
                                            <option value='a'>Assignment/Project</option>
                                            <option value='b'>Hot this week</option>
                                            <option value='c'>CAR</option>
                                            <option value='d'>Parking lot</option>                                    
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Choose metric *</h4></td>
                                    <td>
                                        <select class='combo' name='metric' required>
                                            <option value=''> </option>
                                            <option value='1'>Improve Customer Satisfaction</option>
                                            <option value='2'>Increase Velocity</option>
                                            <option value='5'>Make Safety Personal</option>
                                            <option value='3'>Improve Employee Morale</option>
                                            <option value='4'>Audit Ready</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Change Department *</h4></td>
                                    <td>
                                        <select class='combo' name='department' required>
                                            <option value=''> </option>
                                            <option value='Industrial'>Industrial Engineering</option>
                                            <option value='ManufacturingE'>Manufacturing Engineering</option>
                                            <option value='Manufacturing'>Manufacturing</option>
                                            <option value='Quality'>Quality</option>
                                            <option value='Lean'>Lean</option>
                                            <option value='Purchasing'>Purchasing</option>
                                            <option value='Inventory'>Inventory Control</option>
                                            <option value='Planning'>Planning</option>
                                            <option value='Test'>Test Engineering</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>

                            <input class='buttons' id='submitbtn' type='submit'/>
                            <input class='buttons' id='resetbtn' type='button' value='Clear' onclick='location.reload()'/>
                            <input class='buttons' id='backbtn' type='button' value='Back' onclick='history.go(-1);'/>
                            <button id='closebtn' name='category' value='e'>Close Card</button>
                            <input name='urlholder' id='urlholder' type='hidden'/>
                            <input name='statusholder' id='statusholder' type='hidden'/>
                            <input name='idholder' type='hidden' value='$id'>
                        </form>
                        <p id='p-legend'>Legend</p>
                            <table width='20%' id='table-legend'>
                                <tr>
                                    <td><div id='div-leg1'></div></td>
                                    <td>No Issues</td>
                                </tr>
                                <tr>
                                    <td><div id='div-leg2'></div></td>
                                    <td>Need Help</td>
                                </tr>
                                <tr>
                                    <td><div id='div-leg3'></div></td>
                                    <td>Cannot close within due date</td>
                                </tr>

                            </table>    
                      </body>
                    </html>
                    ";

                    }
            }               
?>
