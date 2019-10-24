<?php
    require "connect.php";
?>
<?php
      if($_GET['cid'])
     {
         $cid= $_GET['cid'];
         //echo $cid;
        }
	
?>



<?php require "header.php"?>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
        <h2>   Xem tin của  danh mục </h2>
        
      </div> 
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Tùy chọn</th>
                  </tr>
                </thead>

                <?php 
                        $sql= "SELECT * FROM `grap_danhmuc` WHERE cid ='$cid';  ";
                        $data=mysqli_query($con,$sql);
                       

                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                        echo"<tr>";
                        echo"<td><img src='' alt=''>".$row['img']."</td>";
                        echo"<td>".$row['tieude']."</td>";
                        echo"<td>".$row['noidung']."</td>";
                        echo"<td><a href='baiviet_edit.php?cid=".$cid."&idgrap=".$row['idgrap']."'>Sửa</a>
                         <br> <a href='xoatin.php?cid=".$cid."&idgrap=".$row['idgrap']."'>Xóa</a></td>";
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
           