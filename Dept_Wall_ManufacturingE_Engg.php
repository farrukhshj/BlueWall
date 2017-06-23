
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
            $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
            $result = $conn->query($sql);   
                
                echo "<html>
                        <head>
                            <title>Manufacturing Engineering Wall</title>
                             <style>
                                body{
                                    background-color: #BABABA;
                                    width:98%;
                                }
                                #logo
                                {
                                  background-color: #FFFF7F;
                                  width:300px;
                                  height:40px;
                                  border-right:none;
                                }
                                table{
                                     
                                     margin-top:1%;
                                     border-collapse: collapse;
                                     border:2px solid;
                                }
                                th, td {
                                        border: 2px solid black;
                                        word-wrap: break-word;
                                }
                                
                                .titles{
                                    width: 97%;
                                    height: 50px;
                                    text-align: center;
                                        font-size: 15px;
                                        background-color: #0938E1;
                                        color:white;
                                    }
                                    #dept-title{
                                         background-color: #FFFF7F;
                                         height:50px;
                                         font-size: 40px;
                                         border-left: none;
                                         text-align: left;
                                         padding-left: 4%;
                                    }
                                    td.td-rows{
                                        background-color: #009900;
                                        font-size: 16px;
                                        color: white;
                                        width: 50px;
                                        word-break: break-all;
                                    }
                                    
                                    input.subbtn
                                    {
                                        cursor:pointer;
                                        background-color:white;
                                    }
                                    #newcard{
                                         width:100%;
                                         height:98%;
                                         background-color: orange;
                                         font-size:16px;
                                    }
                                </style>
                                <script>
                                    function newcard()
                                    {
                                       window.location='card.php';
                                    }
                                    function redirect()
                                    {
                                       window.location='home.html';
                                    }
                                    function update()
                                    {
                                      alert('hi');
                                      document.forms['myForm'].submit();
                                    }
                               </script>
                            </head>
                            <body background='images/Background.jpg'>
                                <table id='main-table'>
                                    <tr>
                                        <td colspan='2' id='logo'><input id='logo' type='image' src='images/logo.png' alt='logo' onclick='redirect()' /></td>
                                        <th colspan='5' id='dept-title'>Manufacturing Engineering</th>
                                    </tr>
                                    <tr>
                                        <th><input id='newcard' type='button' value='New Card' onclick='newcard()'/></th>
                                        <th><textarea class='titles'>Improve Customer Satisfaction</textarea></th>
                                        <th><textarea class='titles'>Increase Velocity</textarea></th>
                                        <th><textarea class='titles'>Improve Employee Morale</textarea></th>
                                        <th><textarea class='titles'>Audit Ready</textarea></th>
                                        <th><textarea class='titles'>Make Safety Personal</textarea></th>
                                        <th><textarea class='titles'>Attachments</textarea></th>
                                    </tr>
                                    <tr>
                                        <td class='td-rows' rowspan='2'>Assignment/Project</td>
                                    </tr>";
                
                                    if ($result->num_rows > 0) {
                                    echo"<tr>";
                                    echo"<td name='a11'>";      
                                                    
                                     while($row = $result->fetch_assoc()) {
                                           $x=$row['category'];
                                           $y=$row['metric'];
                                           
                                           if(strcmp($x,"a")==0)
                                            {
                                                 if(strcmp($y,"1")==0)
                                                 {
                                                       if(strcmp($row["status"],"0")==0)
                                                       {
                                                           $color='green';
                                                       }
                                                       if(strcmp($row["status"],"1")==0)
                                                       {
                                                           $color='yellow';
                                                       }
                                                       if(strcmp($row["status"],"2")==0)
                                                       {
                                                           $color='red';
                                                       }
                                                       echo "
                                                        <form action='updatecard.php' method='post'>
                                                            <table class='card-table' style='background-color:white'>
                                                            <tr>
                                                            <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                                            <th>Status</th>
                                                            </tr>
                                                            <tr>
                                                            <td><text>".$row["assignment"]."</text></td>
                                                            <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                                            </tr>
                                                            <tr>
                                                            <th>Due Date</th>
                                                            <th>Owner</th>
                                                            </tr>
                                                            <tr>
                                                            <td><text>".$row["due_date"]."</text></td>
                                                            <td><text>".$row["owner"]."</text></td>
                                                            </tr>
                                                            </table>
                                                            <input type='hidden' value=".$row["id"]." name='id'/>
                                                       </form>
                                                    ";
                                                  }
                                           
                                            }
                                         
                                     }
                                     echo"</td>";
                                /**************************************************************A2***************************************/
                                     $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                     $result = $conn->query($sql);   
                                     echo"<td name='a21'>";
                                     
                                     while($row = $result->fetch_assoc()) {
                                     $x=$row['category'];
                                     $y=$row['metric'];
                                     if(strcmp($x,"a")==0)
                                       {
                                           if(strcmp($y,"2")==0)
                                            {
                                               if(strcmp($row["status"],"0")==0)
                                                       {
                                                           $color='green';
                                                       }
                                                       if(strcmp($row["status"],"1")==0)
                                                       {
                                                           $color='yellow';
                                                       }
                                                       if(strcmp($row["status"],"2")==0)
                                                       {
                                                           $color='red';
                                                       }        
                                               
                                               echo "
                                                       <form action='updatecard.php' method='post'>
                                                       <table class='card-table' style='background-color:white'>
                                                       <tr>
                                                       <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                                       <th>Status</th>
                                                       </tr>
                                                       <tr>
                                                       <td><text>".$row["assignment"]."</text></td>
                                                       <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                                       </tr>
                                                       <tr>
                                                       <th>Due Date</th>
                                                       <th>Owner</th>
                                                       </tr>
                                                       <tr>
                                                       <td><text>".$row["due_date"]."</text></td>
                                                       <td><text>".$row["owner"]."</text></td>
                                                       </tr>
                                                       </table>
                                                       <input type='hidden' value=".$row["id"]." name='id'/>
                                                       </form>";
                                              }
                                           
                                            }
                                        }
                                        echo"</td>";
                            /**********************************************A3*********************************************************/                                    
                                     $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                     $result = $conn->query($sql);   
                                     echo"<td name='a31'>";
                                     
                                     while($row = $result->fetch_assoc()) {
                                     $x=$row['category'];
                                     $y=$row['metric']; 
                                     if(strcmp($x,"a")==0)
                                      {
                                           if(strcmp($y,"3")==0)
                                            {
                                               if(strcmp($row["status"],"0")==0)
                                                       {
                                                           $color='green';
                                                       }
                                                       if(strcmp($row["status"],"1")==0)
                                                       {
                                                           $color='yellow';
                                                       }
                                                       if(strcmp($row["status"],"2")==0)
                                                       {
                                                           $color='red';
                                                       }        
                                               
                                                echo "
                                                       <form action='updatecard.php' method='post'>
                                                       <table class='card-table' style='background-color:white'>
                                                       <tr>
                                                       <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                                       <th>Status</th>
                                                       </tr>
                                                       <tr>
                                                       <td><text>".$row["assignment"]."</text></td>
                                                       <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                                       </tr>
                                                       <tr>
                                                       <th>Due Date</th>
                                                       <th>Owner</th>
                                                       </tr>
                                                       <tr>
                                                       <td><text>".$row["due_date"]."</text></td>
                                                       <td><text>".$row["owner"]."</text></td>
                                                       </tr>
                                                       </table>
                                                       <input type='hidden' value=".$row["id"]." name='id'/>
                                                       </form>
                                                    ";
                                              }
                                           }
                                        }
                                    echo"</td>";
                                 /****************************************A4******************************************/
                                     $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                     $result = $conn->query($sql);   
                                     echo"<td name='a41'>";
                                     
                                     while($row = $result->fetch_assoc()) {
                                     $x=$row['category'];
                                     $y=$row['metric'];
                                     if(strcmp($x,"a")==0)
                                       {
                                           if(strcmp($y,"4")==0)
                                            {
                                               if(strcmp($row["status"],"0")==0)
                                                       {
                                                           $color='green';
                                                       }
                                                       if(strcmp($row["status"],"1")==0)
                                                       {
                                                           $color='yellow';
                                                       }
                                                       if(strcmp($row["status"],"2")==0)
                                                       {
                                                           $color='red';
                                                       }        
                                               
                                               
                                                    echo "
                                                       <form action='updatecard.php' method='post'>
                                                       <table class='card-table' style='background-color:white'>
                                                       <tr>
                                                       <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                                       <th>Status</th>
                                                       </tr>
                                                       <tr>
                                                       <td><text>".$row["assignment"]."</text></td>
                                                       <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                                       </tr>
                                                       <tr>
                                                       <th>Due Date</th>
                                                       <th>Owner</th>
                                                       </tr>
                                                       <tr>
                                                       <td><text>".$row["due_date"]."</text></td>
                                                       <td><text>".$row["owner"]."</text></td>
                                                       </tr>
                                                       </table>
                                                       <input type='hidden' value=".$row["id"]." name='id'/>
                                                       </form>
                                                    ";
                                              }
                                           
                                            }
                                        }
                                        echo "</td>";
                                 
                            /*************************************************A5*****************************************/
                                     $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                     $result = $conn->query($sql);   
                                     echo"<td name='a51'>";
                                     
                                     while($row = $result->fetch_assoc()) {
                                     $x=$row['category'];
                                     $y=$row['metric'];
                                     if(strcmp($x,"a")==0)
                                       {
                                           if(strcmp($y,"5")==0)
                                            {
                                               if(strcmp($row["status"],"0")==0)
                                                       {
                                                           $color='green';
                                                       }
                                                       if(strcmp($row["status"],"1")==0)
                                                       {
                                                           $color='yellow';
                                                       }
                                                       if(strcmp($row["status"],"2")==0)
                                                       {
                                                           $color='red';
                                                       }        
                                               
                                                     echo "
                                                       <form action='updatecard.php' method='post'>
                                                       <table class='card-table' style='background-color:white'>
                                                       <tr>
                                                       <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                                       <th>Status</th>
                                                       </tr>
                                                       <tr>
                                                       <td><text>".$row["assignment"]."</text></td>
                                                       <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                                       </tr>
                                                       <tr>
                                                       <th>Due Date</th>
                                                       <th>Owner</th>
                                                       </tr>
                                                       <tr>
                                                       <td><text>".$row["due_date"]."</text></td>
                                                       <td><text>".$row["owner"]."</text></td>
                                                       </tr>
                                                       </table>
                                                       <input type='hidden' value=".$row["id"]." name='id'/>
                                                       </form>
                                                    ";
                                              }
                                           
                                            }
                                        } 
                                        echo "</td>";    
                                        echo "<td name='a61'><a href='attachments/test.xlsx'>Sample Spread Sheet</a></td>
                                              </tr>";
                                              
                                              
/*******************************************B1**********************************************************************************/
                                    echo" <tr>
                                          <td class='td-rows' rowspan='2'>Hot this week</td>
                                          </tr>
                                          <tr>";
                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='b11'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"b")==0)
                                          {
                                            if(strcmp($y,"1")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                              }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/********************************************************B2************************************************/                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='b12'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"b")==0)
                                          {
                                            if(strcmp($y,"2")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                              }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/********************************************************************B3*************************************************************/                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='b13'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"b")==0)
                                          {
                                            if(strcmp($y,"3")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                              }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/*************************************************************************B4*********************************************************************/                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='b14'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"b")==0)
                                          {
                                            if(strcmp($y,"4")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/********************************************************************************B5**************************************************************/
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='b15'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"b")==0)
                                          {
                                            if(strcmp($y,"5")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                              }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }                                          
                                          
                                    echo "   </td>      
                                            <td name='b16'><a href='attachments/test.xlsx'>Sample Spread Sheet</a></td>
                                            </tr>";
/**********************************************************C1****************************************************************/                                            
                                    echo" <tr>
                                          <td class='td-rows' rowspan='2'>CAR</td>
                                          </tr>
                                          <tr>";
                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='c11'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"c")==0)
                                          {
                                            if(strcmp($y,"1")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                              }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/********************************************************C2************************************************/                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='c12'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"c")==0)
                                          {
                                            if(strcmp($y,"2")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                              }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/********************************************************************B3*************************************************************/                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='c13'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"c")==0)
                                          {
                                            if(strcmp($y,"3")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                              }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/*************************************************************************C4*********************************************************************/                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='c14'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"c")==0)
                                          {
                                            if(strcmp($y,"4")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/********************************************************************************B5**************************************************************/
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='c15'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"c")==0)
                                          {
                                            if(strcmp($y,"5")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                              }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }                                          
                                          
                                    echo "  </td>      
                                            <td name='c16'></td>";
/***************************************************************D1*******************************************************************/                                    
                                            echo "<tr>
                                                  <td class='td-rows' rowspan='2'>Parking Lot</td>
                                                  </tr>
                                                  <tr>";
                                            
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='d11'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"d")==0)
                                          {
                                            if(strcmp($y,"1")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/******************************************************************************D2*************************************************************/                                                
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='d12'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"d")==0)
                                          {
                                            if(strcmp($y,"2")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/***********************************************************************D3************************************************************************/                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='d13'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"d")==0)
                                          {
                                            if(strcmp($y,"3")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
                                          
/*****************************************************************************D4********************************************************************/                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='d14'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"d")==0)
                                          {
                                            if(strcmp($y,"4")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/*******************************************************************D5********************************************************************/
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='d15'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"d")==0)
                                          {
                                            if(strcmp($y,"5")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td><td name='d16'></td></tr>";
                                          
/****************************************************************************E1******************************************************/                                          
                                          echo"<tr>
                                          <td class='td-rows' rowspan='2'>Closed Assignment</td>
                                          </tr>
                                          <tr>";
                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='e11'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"e")==0)
                                          {
                                            if(strcmp($y,"1")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/*****************************************************************************E2**********************************************/
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='e12'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"e")==0)
                                          {
                                            if(strcmp($y,"2")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";

/**********************************************************************************E3****************************************************/
                                          
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='e13'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"e")==0)
                                          {
                                            if(strcmp($y,"3")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/************************************************************************E4********************************************************/
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='e14'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"e")==0)
                                          {
                                            if(strcmp($y,"4")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td>";
/****************************************************************************E5*****************************************************************/
                                          $sql = "SELECT * from card where dept_name like ('ManufacturingE');";
                                          $result = $conn->query($sql);   
                                          echo"<td name='e15'>";
                                          while($row = $result->fetch_assoc()) {
                                          $x=$row['category'];
                                          $y=$row['metric'];
                                          if(strcmp($x,"e")==0)
                                          {
                                            if(strcmp($y,"5")==0)
                                            {
                                             if(strcmp($row["status"],"0")==0)
                                             {
                                                                  $color='green';
                                             }
                                             if(strcmp($row["status"],"1")==0)
                                             {
                                                                  $color='yellow';
                                             }
                                             if(strcmp($row["status"],"2")==0)
                                             {
                                                                  $color='red';
                                             }        
                                            echo "
                                              <form action='updatecard.php' method='post'>
                                              <table class='card-table' style='background-color:white'>
                                              <tr>
                                              <th><input class='subbtn' type='submit' value='Assignment/Project'/></th>
                                              <th>Status</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["assignment"]."</text></td>
                                              <td><textarea style='resize:none;width:50px;height:30px;background-color:".$color.";' readonly></textarea></td>
                                              </tr>
                                              <tr>
                                              <th>Due Date</th>
                                              <th>Owner</th>
                                              </tr>
                                              <tr>
                                              <td><text>".$row["due_date"]."</text></td>
                                              <td><text>".$row["owner"]."</text></td>
                                              </tr>
                                              </table>
                                              <input type='hidden' value=".$row["id"]." name='id'/>
                                              </form>
                                                 ";
                                                 }
                                               }
                                          }
                                          echo"</td><td name='e16'></td></tr>
                                        </table>
                                    </body>
                                </html>   
                               ";
                    
            }   
                  
            else 
            {
                echo "0 results";
            }
?>