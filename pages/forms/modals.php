



 <table id="example6" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>Detail</th>
                                <th>Description</th>
                                
                               
                              </tr>
                              </thead>
                              <tbody>

                                <?php 
                                $querry="SELECT * FROM USER WHERE USERID=1";
                                $result=mysqli_query($conn,$querry);
                                while($row=mysqli_fetch_array($result))
                                {
                                 
                      
                                ?>


                              
                              <tr>
                                <td>Name</td>
                                <td><?php echo $row[1]; ?></td>                                          
                              </tr>
                              <tr>
                                <td>Phone</td>
                                <td><?php echo $row[2]; ?></td>                                          
                              </tr>
                              <tr>
                                <td>ID Number</td>
                                <td><?php echo $row[3]; ?></td>                                          
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td><?php echo $row[4]; ?></td>   
                              </tr>
                              <tr>
                                <td>Domain</td>
                                <td><?php if ($row[6]==1) {
                                  # code...
                                  echo "Administrator";
                                }elseif ($row[6]==2) {
                                  # code...
                                  echo "Member";
                                }else{
                                  echo "Error";
                                } ?></td>   
                              </tr>
                              <tr>
                                <td>Status</td>
                                <td><?php if ($row[7]==1) {
                                  # code...
                                  echo "Active";
                                }elseif ($row[7]==2) {
                                  # code...
                                  echo "Suspended";
                                }else{
                                  echo "Undefined";
                                } ?></td>   
                              </tr>
                              <tr>
                                <td>Sub County</td>
                                <td><?php if ($row[8]==1) {
                                  # code...
                                  echo "Awendo";
                                }elseif ($row[8]==2) {
                                  # code...
                                  echo "Kuria East";
                                }elseif ($row[8]==3) {
                                  # code...
                                  echo "Kuria West";
                                }elseif ($row[8]==4) {
                                  # code...
                                  echo "Nyatike";
                                }elseif ($row[8]==5) {
                                  # code...
                                  echo "Rongo";
                                }elseif ($row[8]==6) {
                                  # code...
                                  echo "Suna East";
                                }elseif ($row[8]==7) {
                                  # code...
                                  echo "Suna West";
                                }elseif ($row[8]==8) {
                                  # code...
                                  echo "Uriri";
                                }else{
                                  echo "Error";
                                } ?></td>   
                              </tr>
                              <tr>
                                <td>Pin Number</td>
                                <td><?php echo $row[10]; ?></td>   
                              </tr>
                              <tr>
                                <td>Occupation</td>
                                <td><?php echo $row[11]; ?></td>   
                              </tr>
                              <tr>
                                <td>P.O.Box</td>
                                <td><?php echo $row[13]; ?></td>   
                              </tr>
                              <tr>
                                <td>Gender</td>
                                <td><?php if ($row[14]==1) {
                                  # code...
                                  echo "Male";
                                }elseif ($row[14]==2) {
                                  # code...
                                  echo "Female";
                                }else{
                                  echo "Undefined";
                                } ?></td>   
                              </tr>
                              <tr>
                                <td>Kin Name</td>
                                <td><?php echo $row[15]; ?></td>   
                              </tr>
                              <tr>
                                <td>Kin ID</td>
                                <td><?php echo $row[16]; ?></td>   
                              </tr>
                              <tr>
                                <td>Kin Relation</td>
                                <td><?php echo $row[18]; ?></td>   
                              </tr>
                              <tr>
                                <td>Witness</td>
                                <td><?php echo $row[19]; ?></td>   
                              </tr>
                              <tr>
                                <td>Witness ID</td>
                                <td><?php echo $row[20]; ?></td>   
                              </tr>
                              <tr>
                                <td>Witness Phone</td>
                                <td><?php echo $row[22]; ?></td>   
                              </tr>
                              <tr>
                                <td>Employer</td>
                                <td><?php echo $row[23]; ?></td>   
                              </tr>
                              <tr>
                                <td>Employment Position</td>
                                <td><?php echo $row[25]; ?></td>   
                              </tr>
                              <tr>
                                <td>Employment Number</td>
                                <td><?php echo $row[24]; ?></td>   
                              </tr>
                              <tr>
                                <td>Employment Location</td>
                                <td><?php echo $row[26]; ?></td>   
                              </tr>

                              <?php
                              }
                              ?>
                             
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>Detail</th>
                                <th>Description</th>
                               
                               
                              </tr>
                              </tfoot>
                            </table>