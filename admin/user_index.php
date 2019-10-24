

<?php
    require "connect.php";
    ?>
<?php require "header.php"?>
<?php
if ($_GET['txtUsername']) 
{
  $user = $_GET['txtUsername'];
  $level = $_GET['level'];
 
}
?>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        <h2>   Xem danh sách danh mục </h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tên User</th>
                        <th>Quyền User</th>
                        <th>Email</th>
                        <th>Tên đầy đủ</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <?php 
                    $sql= "SELECT * FROM `member`";
                    
                    $data=mysqli_query($con,$sql);
                    
                    while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                    {   
                        echo"<tr>";
                        
                        echo"<td>".$row['username']."</td>";
                        echo"<td>".$row['level']."</td>";
                        echo"<td>".$row['email']."</td>";
                        echo"<td>".$row['fullname']."</td>";
                        echo"<td>".$row['birthday']."</td>";
                        echo"<td>".$row['sex']."</td>";
                        echo"<td><a href='user_edit.php?txtUsername=".$user."&level=".$level."&iduser=".$row['iduser']."'>Sua thong tin User</a>";
                        if($level < $row['level'])
                        {
                            echo " <br><a href='xoa_user.php?txtUsername=".$user."&level=".$level."&iduser=".$row['iduser']."&levelxoa=".$row['level']."'>Xóa</a></td>";
                        
                        }
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

