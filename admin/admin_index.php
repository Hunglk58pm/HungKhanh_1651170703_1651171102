

<?php
    require "connect.php";
    ?>
   <?php 
if ($_GET['txtUsername']) 
{
  $user = $_GET['txtUsername'];

  $level = $_GET['level'];
 
}
?>
<?php require "header.php"?>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        <h2> Chào mừng: <?php echo $user."<br>Level: ".$level?>   </h2>
        <h2>   Xem danh sách danh mục </h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tên danh mục</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <?php 
                    $sql= "SELECT * FROM `danhmuc`";
                    
                    $data=mysqli_query($con,$sql);
                    
                    while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                    {
                        echo"<tr>";
                        
                        echo"<td>".$row['tendanhmuc']."</td>";
                        echo"<td><a href='baiviet_index.php?&cid=".$row['iddanhmuc']."&txtUsername=".$user."&level=".$level."'>Xem bài viết</a></td>";
                        
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

