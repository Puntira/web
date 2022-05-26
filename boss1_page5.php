<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

    Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "boss1_page5";

?>

<?php include('b1_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลปรับปรุง/จัดทำระบบงาน</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  <?php include('mysql/config.php');
              $sql = "SELECT * FROM devsystem ORDER BY devsys_status 
              ASC, devsysdate DESC, devsys_num ASC";
                $result = $conn->query($sql);?>

</div>
       
      
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped dataTable" 
                      role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">เลขที่แจ้ง</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">ID</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">วันที่แจ้ง</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ชื่อผู้แจ้ง</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">มีความประสงค์</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">ภาพประกอบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะผู้แจ้ง</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น หน.ส่วนงาน M</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็นผู้อำนวยการ M</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น หน.ส่วนงาน IT</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็นผู้อำนวยการ IT</th>

                   <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

                    $devsys_num = $row['devsys_num'];
                    $ID = $row['ID'];
                    $devsysdate = $row['devsysdate'];
                    $fname_devsys = $row['fname_devsys'];
                    $lis_devsys = $row['lis_devsys'];
                    $devsys_status = $row['devsys_status'];

                    $b_dev_status = $row['b_dev_status'];
                    $b1_dev_status = $row['b1_dev_status'];
                    $bit_dev_status = $row['bit_dev_status'];
                    $bit1_dev_status = $row['bit1_dev_status'];
                    $path = "img/";
                    $image = $row["image"];
                    ?>
                <tr>
                    <td><center><?php echo $devsys_num;?></center></td>
                    <td><center><?php echo $ID;?></center></td>

                        <td><?php echo date("d/m/Y",strtotime("+543 year".$devsysdate ));?></td>
                        <td><?php echo $fname_devsys;?></td>
                        <td><?php echo $lis_devsysname[$lis_devsys];?></td>  
                        <td><center><?php echo '<img src="'.$path.$image.'" width=50 height=50 >'; ?><br /></center></td>
                        <td><?php echo $devsys_statusname[$devsys_status];?></td>
                        <td><?php echo $b_dev_statusname[$b_dev_status];?></td>
                        <td><?php echo $b1_dev_statusname[$b1_dev_status];?></td>
                        <td><?php echo $bit_dev_statusname[$bit_dev_status];?></td>
                        <td><?php echo $bit1_dev_statusname[$bit1_dev_status];?></td>
                    


                  <td>
                    <a class="btn btn-info btn-xs" href="boss1_detail_devsys_pass.php?devsys_num=<?php echo $devsys_num;?>" 
                     >
                      <i class="fas fa-eye">
                      </i>
                   
                    </a>                         
                   <a class="btn btn-warning btn-xs" href="boss1_form_devsys_pass.php?devsys_num=<?php echo $devsys_num; ?>" >
                      <i class="fas fa-podcast">
                      </i>
                    </a>
                  </td>     
                </tr>
                    
               <?php } ?>
                                    
              </tbody>
            </table>
            
          </div>
          <div class="col-md-1" >    
          </div>
        </div>
      </div>      
    </div>  
  </div>
  <!-- /.col -->
</div>
</section>
<!-- /.content -->
<?php include('footer.php'); ?>
<script>
$(function () {
$(".datatable").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false,
});
});
</script>
</body>
</html>
<?php }?>
