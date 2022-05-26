<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

	  Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page3";

?>
<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูล ยืม/คืน อุปกรณ์คอมพิวเตอร์</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
         <?php include('mysql/config.php');
              $sql = "SELECT * FROM borroworreturn ORDER BY requeststatusbr 
              ASC, borrowdate DESC, requestnumbr ASC";
                $result = $conn->query($sql);?>

       <div align="right"> 
<a href="search_borr.php">   
<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-file"></i> รายงานข้อมูลขอใช้อุปกรณ์ </button></a>
      </div></div>
    
       <div align="right"> 
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
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">เลขที่ขอยืม</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ขอยืม</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">ชื่อผู้ยืม</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายการอุปกรณ์</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะผู้ขอ</th>


                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงาน M</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลงชื่อ หน.ส่วนงาน M</th-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการ M</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลงชื่อผู้อำนวยการ M</th!-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงาน IT</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลงชื่อ หน.ส่วนงาน IT</th!-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการ IT</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลงชื่อผู้อำนวยการ IT</th!-->


                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ให้ยืม</th!-->
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ให้ยืม</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่คืน</th!-->
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้รับคืน</th>

                   <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $requestnumbr = $row['requestnumbr'];
                    $requesterbr = $row['requesterbr'];
                    $requestdatebr = $row['requestdatebr'];
                    $requestcasebr = $row['requestcasebr'];
                    //$borrowdate = $row['borrowdate'];
                    $requeststatusbr=$row['requeststatusbr'];

                    $b_borr_status=$row['b_borr_status'];
                    //$b_borr_name = $row['b_borr_name'];

                    $b1_borr_status=$row['b1_borr_status'];
                    //$b1_borr_name = $row['b1_borr_name'];

                    $bit_borr_status=$row['bit_borr_status'];
                    //$bit_borr_name = $row['bit_borr_name'];

                    $bit1_borr_status=$row['bit1_borr_status'];
                    //$bit1_borr_name = $row['bit1_borr_name'];

                    $supporterbr = $row['supporterbr'];
                    //$returndate = $row['returndate'];
                    $supporterre = $row['supporterre'];
                    ?>
                <tr>
                    <td><center><?php echo $requestnumbr;?></center></td>
                        <td><?php echo $requestdatebr;?></td>
                        <td><?php echo $requesterbr;?></td>
                        <td><?php echo $requestcasebr;?></td>
                        <td><?php echo $requeststatusbrname[$requeststatusbr];?></td>



                        <td><?php echo $b_borr_statusname[$b_borr_status];?></td>
                        <!--td><?php echo $b_borr_name;?></td!-->

                        <td><?php echo $b1_borr_statusname[$b1_borr_status];?></td>
                        <!--td><?php echo $b1_borr_name;?></td!-->

                        <td><?php echo $bit_borr_statusname[$bit_borr_status];?></td>
                        <!--td><?php echo $bit_borr_name;?></td!-->

                        <td><?php echo $bit1_borr_statusname[$bit1_borr_status];?></td>
                        <!--td><?php echo $bit1_borr_name;?></td!-->



                        <!--td><?php echo $borrowdate;?></td!-->
                        <td><?php echo $supporterbr;?></td>
                        <!--td><?php echo $returndate;?></td!-->
                        <td><?php echo $supporterre;?></td>

                  <td>
                    <a class="btn btn-info btn-xs" href="adm_detail_borr.php?requestnumbr=<?php echo $requestnumbr;?>" 
                      >
                      <i class="fas fa-eye">
                      </i>
                   
                    </a>                         
                   <a class="btn btn-warning btn-xs" href="adm_form_borr.php?requestnumbr=<?php echo $requestnumbr; ?>" >
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a>

                    <a class="btn btn-danger btn-xs" href="adm_deleted_borr.php?requestnumbr=<?php echo $requestnumbr ?>" >
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
