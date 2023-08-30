


<?php
     
  require('../../conn.php');
  
  if (isset($_REQUEST['id'])) {
      
    $id = intval($_REQUEST['id']);
    $query = "SELECT * FROM LOAN WHERE ID='$id' ";
    $stmt = mysqli_query($conn,$query);
    
    $row=mysqli_fetch_array($stmt);
    
      
    ?>
      
    <div class="table-responsive">
    
    <table id="example7" class="table table-bordered table-hover">
        <tr>
                                <td>National ID</td>
                                <td class="project-actions text-left">
                                    <a href="/Nurses/pages/forms/<?php echo $row[7];?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-envelope">
                                        </i>
                                        ID Card  
                                    </a>
                                    
                                </td>                                          
                              </tr>
                              <tr>
                                <td>Slip One</td>
                                <td class="project-actions text-left">
                                    <a href="/Nurses/pages/forms/<?php echo $row[8];?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-envelope">
                                        </i>
                                        PaySlip  
                                    </a>
                                    
                                </td>                                          
                              </tr>
                              <tr>
                                <td>Slip Two</td>
                                <td class="project-actions text-left">
                                    <a href="/Nurses/pages/forms/<?php echo $row[9];?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-envelope">
                                        </i>
                                        PaySlip  
                                    </a>
                                    
                                </td>                                        
                              </tr>
                              <tr>
                                <td>Name (First Guarantor)</td>
                                <td><?php echo $row[10]; ?></td>   
                              </tr>

                              <tr>
                                <td>ID (First Guarantor)</td>
                                <td><?php echo $row[11]; ?></td>   
                              </tr>
                              <tr>
                                <td>Phone (First Guarantor)</td>
                                <td><?php echo '0'.$row[12]; ?></td>   
                              </tr>
                              <tr>
                                <td>Amount (First Guarantor)</td>
                                <td><?php echo "Ksh.".number_format($row[13],2);  ?></td>   
                              </tr>
                              <tr>
                                <td>National ID (First Guarantor)</td>
                                <!-- <td><?php echo $row[14]; ?></td> -->

                                <td class="project-actions text-left">
                                    <a href="/Nurses/pages/forms/<?php echo $row[14];?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-envelope">
                                        </i>
                                        ID Card  
                                    </a>
                                    
                                </td> 
                              </tr>


                              <tr>
                                <td>Name (Second Guarantor)</td>
                                <td><?php echo $row[15]; ?></td>   
                              </tr>

                              <tr>
                                <td>ID (Second Guarantor)</td>
                                <td><?php echo $row[16]; ?></td>   
                              </tr>
                              <tr>
                                <td>Phone (Second Guarantor)</td>
                                <td><?php echo '0'.$row[17]; ?></td>   
                              </tr>
                              <tr>
                                <td>Amount (Second Guarantor)</td>
                                <td><?php echo "Ksh.".number_format($row[18],2);  ?></td>   
                              </tr>
                              <tr>
                                <td>National ID (Second Guarantor)</td>
                                <!-- <td><?php echo $row[14]; ?></td> -->

                                <td class="project-actions text-left">
                                    <a href="/Nurses/pages/forms/<?php echo $row[19];?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-envelope">
                                        </i>
                                        ID Card  
                                    </a>
                                    
                                </td> 
                              </tr>



                              <tr>
                                <td>Name (Third Guarantor)</td>
                                <td><?php echo $row[20]; ?></td>   
                              </tr>

                              <tr>
                                <td>ID (Third Guarantor)</td>
                                <td><?php echo $row[21]; ?></td>   
                              </tr>
                              <tr>
                                <td>Phone (Third Guarantor)</td>
                                <td><?php echo '0'.$row[22]; ?></td>   
                              </tr>
                              <tr>
                                <td>Amount (Third Guarantor)</td>
                                <td><?php echo "Ksh.".number_format($row[23],2);  ?></td>   
                              </tr>
                              <tr>
                                <td>National ID (Third Guarantor)</td>
                                <!-- <td><?php echo $row[14]; ?></td> -->

                                <td class="project-actions text-left">
                                    <a href="/Nurses/pages/forms/<?php echo $row[24];?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-envelope">
                                        </i>
                                        ID Card  
                                    </a>
                                    
                                </td> 
                              </tr>





    </table>
      
    </div>
      
    <?php       
  }
?>

