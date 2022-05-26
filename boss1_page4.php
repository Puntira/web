
<?php 
@session_start();
if (!$_SESSION["UserID"]){

Header("Location: form_login.php");
}else{ ?>

<?php

$menu = "boss1_page4";

?>
<?php include('b1_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายการข้อมูลลงทะเบียน/ยกเลิกผู้ใช้งาน </h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  <?php include('mysql/config.php');
              $sql = "SELECT * FROM regdelsystem ORDER BY system_status
              ASC, systemdate DESC, system_num ASC";
                $result = $conn->query($sql);?>

         
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
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">เลขที่รายการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">ID</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่แจ้งขอ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ชื่อผู้แจ้งขอ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">มีความประสงค์</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงาน M</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการ M</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงาน IT</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการ IT</th>
                

               
                   <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $system_num = $row['system_num'];
                    $ID = $row['ID'];
                    $systemdate = $row['systemdate'];
                    $fname_sys = $row['fname_sys'];
                    $reg_del_sys = $row['reg_del_sys'];
                    $system_status=$row['system_status'];

                    $b_sys_status=$row['b_sys_status'];
                    $b1_sys_status=$row['b1_sys_status'];

                    $bit_sys_status=$row['bit_sys_status'];
                    $bit1_sys_status=$row['bit1_sys_status'];

                    ?>
                <tr>
                  <td><center><?php echo $system_num;?></center></td>
                  <td><center><?php echo $ID;?></center></td>

                        <td><?php echo date("d/m/Y",strtotime("+543 year".$systemdate));?></td>
                        <td><?php echo $fname_sys;?></td>
                        <td><?php echo $reg_del_sys;?></td>
                        <td><?php echo $system_statusname[$system_status];?></td>

                        <td><?php echo $b_sys_statusname[$b_sys_status];?></td>
                        <td><?php echo $b1_sys_statusname[$b1_sys_status];?></td>

                        <td><?php echo $bit_sys_statusname[$bit_sys_status];?></td>
                        <td><?php echo $bit1_sys_statusname[$bit1_sys_status];?></td>
                      
                     
                  <td>
                    <a class="btn btn-info btn-xs" href="boss1_detail_regdel_pass.php?system_num=<?php echo $system_num;?>" 
                      >
                      <i class="fas fa-eye">
                      </i>
                    </a> 
                    <a class="btn btn-warning btn-xs" href="boss1_form_regdel_pass.php?system_num=<?php echo $system_num; ?>" >
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
<?php } ?>