<?php
    require "connect.php";
?>
<?php
      if($_GET['iduser'])
     {
         $iduser= $_GET['iduser'];
         $user = $_GET['txtUsername'];
     
        $level = $_GET['level'];
      
        }
	
?>



<?php require "header.php"?>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
        <h2>   Xem User </h2></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Fullname</th>
                    <th>Birthday</th>
                    <th>Sex</th>
                    <th>Option</th>
                  </tr>
                </thead>

                <?php 
                        $sql= "SELECT * FROM `member` WHERE iduser ='$iduser';  ";
                        $data=mysqli_query($con,$sql);
                       

                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                         echo"<tr>";
                         echo"<form action='sua_user.php' method='get'>";
                         echo"<input type='hidden' value='".$iduser."' name='iduser'>";
                         echo"<input type='hidden' value='".$level."' name='level'>";
                         echo"<td><input type='text' value='".$row['username']."' name='username'></td>";
                         echo"<td><input type='text' value='".$row['email']."' name='email'></td>";
                         echo"<td><input type='text' value='".$row['fullname']."'name='fullname' ></td> ";
                         echo"<td><input type='text' value='".$row['birthday']."'name='birthday' ></td> ";
                         echo"<td><input type='text' value='".$row['sex']."'name='sex' ></td> ";
                         echo"<td> <input type='submit' value='Sưa'></td>";
                         echo"</form>";
                        echo"</tr>";
                        }
                        ?>

                               
                              
                  
                
           
                
               
                </tbody>
              </table>
            </div>
          </div>
        
        </div>
      </div>
            </div>
<?php require "footer.php"?>
           