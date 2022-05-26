<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

	  Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page4";

?>
<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลขอใช้บริการ บุคคลากร</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  
<?php include('mysql/config.php');
              $sql = "SELECT * FROM servicemember ORDER BY memberstatus 
              ASC, servicememdate DESC, memberid ASC";
                $result = $conn->query($sql);?>
    
             <div align="right"> 
<a href="search_ser.php">   
<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-file"></i> รายงานข้อมูลขอใช้บริการระบบ </button></a>
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
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">เลขที่ขอใช้ระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ขอใช้ระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ขอใช้ระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ขอใช้ระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>



                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงาน M</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลงชื่อ หน.ส่วนงาน M</th!-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการ M</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลงชื่อผู้อำนวยการ M</th!-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงาน IT</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลงชื่อ หน.ส่วนงาน IT</th!-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการ IT</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลงชื่อผู้อำนวยการ IT</th!-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">วันที่ให้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ผู้ให้บริการ</th>


                   <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $memberid = $row['memberid'];
                    $membername = $row['membername'];
                    $memberdate = $row['memberdate'];
                    $membercase = $row['membercase'];
                    $servicememdate = $row['servicememdate'];
                    $memberstatus=$row['memberstatus'];

                    $b_ser_status=$row['b_ser_status'];
                    //$b_ser_name=$row['b_ser_name'];

                    $b1_ser_status=$row['b1_ser_status'];
                    //$b1_ser_name=$row['b1_ser_name'];

                    $bit_ser_status=$row['bit_ser_status'];
                    //$bit_ser_name=$row['bit_ser_name'];

                    $bit1_ser_status=$row['bit1_ser_status'];
                    //$bit1_ser_name=$row['bit1_ser_name'];

                    $servicename = $row['servicename'];
                    ?>
                <tr>
                    <td><center><?php echo $memberid;?></center></td>
                        <td><?php echo $memberdate;?></td>
                        <td><?php echo $membername;?></td>
                        <td><?php echo $membercase;?></td>
                        <td><?php echo $memberstatusname[$memberstatus];?></td>

                        <td><?php echo $b_ser_statusname[$b_ser_status];?></td>
                        <!--td><?php echo $b_ser_name;?></td!-->

                        <td><?php echo $b1_ser_statusname[$b1_ser_status];?></td>
                        <!--td><?php echo $b1_ser_name;?></td!-->

                        <td><?php echo $bit_ser_statusname[$bit_ser_status];?></td>
                        <!--td><?php echo $bit_ser_name;?></td!-->

                        <td><?php echo $bit1_ser_statusname[$bit1_ser_status];?></td>
                        <!--td><?php echo $bit1_ser_name;?></td!-->


                        <td><?php echo $servicememdate;?></td>
                        <td><?php echo $servicename;?></td>

                  <td>
                    <a class="btn btn-info btn-xs" href="adm_detail_mem.php?memberid=<?php echo $memberid;?>" 
                      >
                      <i class="fas fa-eye">
                      </i>
                   
                    </a>                         
                   <a class="btn btn-warning btn-xs" href="adm_form_mem.php?memberid=<?php echo $memberid; ?>" >
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a>

                    <a class="btn btn-danger btn-xs" href="adm_deleted_mem.php?memberid=<?php echo $memberid ?>" >
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
