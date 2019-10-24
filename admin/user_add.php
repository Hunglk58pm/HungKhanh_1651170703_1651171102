<?php
    require "connect.php";
?>

<?php require "header.php"?>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
        <h2>   Them User </h2></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                        <th>Tên User</th>
                        <th>Password</th>
                        <th>Quyền User</th>
                        <th>Email</th>
                        <th>Tên đầy đủ</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Tùy chọn</th>
                  </tr>
                </thead>

                <?php 
                         echo"<tr>";
                         echo"<form action='themuser.php' method='GET'>";
                         echo"<td><input type='text' value='' name='username'></td>";
                         echo"<td><input type='text' value='' name='password'></td>";
                         echo"<td><input type='text' value='' name='level'></td>";
                         echo"<td><input type='text' value='' name='email'></td>";
                         echo"<td><input type='text' value='' name='fullname'></td>";
                         echo"<td><input type='text' value='' name='birthday'></td>";
                         echo"<td><input type='text' value='' name='sex'></td>";
                         echo"<td> <input type='submit' value='Them'></td>";
                         echo"</form>";
                        echo"</tr>";
                        ?>
                </tbody>
              </table>
            </div>
          </div>
        
        </div>
      </div>
            </div>
<?php require "footer.php"?>
           