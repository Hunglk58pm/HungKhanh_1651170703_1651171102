<?php
    require "connect.php";
?>

<?php require "header.php"?>
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
        <h2>   Them bai viet vao danh mục </h2></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Danh muc</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Tùy chọn</th>
                  </tr>
                </thead>

                <?php 
                         echo"<tr>";
                         echo"<form action='thembaiviet.php' method='GET'>";
                         echo"<td><input type='text' value='' name='cid'></td>";
                         echo"<td><input type='text' value='' name='img'></td>";
                         echo"<td><input type='text' value='' name='tieude'></td>";
                         echo"<td><textarea type='text' name='noidung'> </textarea></td> ";
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
           