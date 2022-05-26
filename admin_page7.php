<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

	  Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page7";

?>

<?php include('adm_header.php'); ?>
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
<div align="right"> 
<a href="search_devsys.php">   
<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-file"></i> รายงานข้อมูลปรับปรุง/จัดทำระบบงาน </button></a>
</div></div>
       
      
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
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">วันที่แจ้ง</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ชื่อผู้แจ้ง</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">มีความประสงค์</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">ภาพประกอบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะผู้แจ้ง</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น หน.ส่วนงาน M</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลงชื่อ หน.ส่วนงาน M</th!-->
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็นผู้อำนวยการ M</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลงชื่อผู้อำนวยการ M</th!-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็น หน.ส่วนงาน IT</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลงชื่อ หน.ส่วนงาน IT</th!-->
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ความเห็นผู้อำนวยการ IT</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลงชื่อผู้อำนวยการ IT</th!-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">วันที่ให้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ผู้ให้บริการ</th>

                   <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

                    $devsys_num = $row['devsys_num'];
                    $devsysdate = $row['devsysdate'];
                    $fname_devsys = $row['fname_devsys'];
                    $lis_devsys = $row['lis_devsys'];
                    $devsys_status = $row['devsys_status'];

                    $servicedevdate = $row['servicedevdate'];
                    $servicedevname = $row['servicedevname'];

                    $b_dev_status = $row['b_dev_status'];
                    //$b_dev_name =$row['b_dev_name'];
                    $b1_dev_status = $row['b1_dev_status'];
                    //$b1_dev_name =$row['b1_dev_name'];

                    $bit_dev_status = $row['bit_dev_status'];
                   // $bit_dev_name =$row['bit_dev_name'];
                    $bit1_dev_status = $row['bit1_dev_status'];
                    //$bit1_dev_name =$row['bit1_dev_name'];
                    $path = "img/";
                    $image = $row["image"];
                    ?>
                <tr>
                    <td><center><?php echo $devsys_num;?></center></td>
                        <td><?php echo $devsysdate;?></td>
                        <td><?php echo $fname_devsys;?></td>
                        <td><?php echo $lis_devsys;?></td>   
                        <td><center><?php echo '<img src="'.$path.$image.'" width=50 height=50 >'; ?><br /></center></td>
                        <td><?php echo $devsys_statusname[$devsys_status];?></td>

                        <td><?php echo $b_dev_statusname[$b_dev_status];?></td>
                        <!--td><?php echo $b_dev_name;?></td!-->   
                        <td><?php echo $b1_dev_statusname[$b1_dev_status];?></td>
                        <!--td><?php echo $b1_dev_name;?></td!-->
                       
                        <td><?php echo $bit_dev_statusname[$bit_dev_status];?></td>
                        <!--td><?php echo $bit_dev_name;?></td!-->
                        <td><?php echo $bit1_dev_statusname[$bit1_dev_status];?></td>
                        <!--td><?php echo $bit1_dev_name;?></td!-->

                        <td><?php echo $servicedevdate;?></td>
                        <td><?php echo $servicedevname;?></td>

                  <td>
                    <a class="btn btn-info btn-xs" href="adm_detail_devsys.php?devsys_num=<?php echo $devsys_num;?>" 
                     >
                      <i class="fas fa-eye">
                      </i>
                   
                    </a>                         
                   <a class="btn btn-warning btn-xs" href="adm_form_devsys.php?devsys_num=<?php echo $devsys_num; ?>" >
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a>

                    <a class="btn btn-danger btn-xs" href="adm_deleted_devsys.php?devsys_num=<?php echo $devsys_num ?>" >
                      <i class="fas fa-trash-alt">
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
<?php include('adm_footer.php'); ?>
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
