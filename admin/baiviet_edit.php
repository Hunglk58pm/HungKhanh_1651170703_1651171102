<?php
    require "connect.php";
?>
<?php
      if($_GET['idgrap'])
     {
         $idgrap= $_GET['idgrap'];
         $cid= $_GET['cid'];
         //echo $idgrap;
        }
	
?>



<?php require "header.php"?>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
        <h2>   Xem tin của  danh mục </h2></div>
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
                        $sql= "SELECT * FROM `grap_danhmuc` WHERE idgrap ='$idgrap';  ";
                        $data=mysqli_query($con,$sql);
                       

                        while($row=mysqli_fetch_array($data, MYSQLI_ASSOC))
                        {
                         echo"<tr>";
                         echo"<form action='sua.php' method='GET'>";
                         echo"<input type='hidden' value='".$cid."' name='cid'>";
                         echo"<input type='hidden' value='".$idgrap."' name='idgrap'>";
                         echo"<td><input type='text' value='".$row['img']."' name='img'></td>";
                         echo"<td><input type='text' value='".$row['tieude']."' name='tieude'></td>";
                         echo"<td><textarea type='text' name='noidung'> ".$row['noidung']."</textarea></td> ";
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
           