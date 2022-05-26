<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

	  Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page2";

?>

<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลแจ้งซ่อม</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
 <?php include('mysql/config.php');
              $sql = "SELECT * FROM requests ORDER BY requeststatus 
              ASC, requestdate DESC, requestdate ASC";
                $result = $conn->query($sql);?>
    
       <div align="right"> 
<a href="search_req.php">   
<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-file"></i> รายงานข้อมูลแจ้งซ่อม </button></a>
</div>
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
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เลขที่แจ้งซ่อม</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่แจ้ง</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้แจ้ง</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">แจ้งปัญหา</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะผู้แจ้ง</th>

                  <!--Start Page admin for //4LV,,,,,-->

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงาน M</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลงชื่อ หน.ส่วนงาน M</th!-->
                  <!--5LV-->
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการ M</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลงชื่อผู้อำนวยการ M</th!-->
                   <!--6LV-->
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงาน IT</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลงชื่อ หน.ส่วนงาน IT</th!-->
                   <!--7LV-->
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการ IT</th>
                  <!--th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลงชื่อผู้อำนวยการ IT</th!-->
                   <!--5LV-->
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ให้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ให้บริการ</th>

                   <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $requestnum = $row['requestnum'];
                    $requester = $row['requester'];
                    $requestdate = $row['requestdate'];
                    $requestcase = $row['requestcase'];
                    $servicedate = $row['servicedate'];
                    $requeststatus = $row['requeststatus'];

                    $supporter = $row['supporter'];

                    $b_req_status = $row['b_req_status'];
                    //$b_req_name = $row['b_req_name'];

                    $b1_req_status = $row['b1_req_status'];
                    //$b1_req_name = $row['b1_req_name'];

                    $bit_req_status = $row['bit_req_status'];
                    //$bit_req_name = $row['bit_req_name'];

                    $bit1_req_status = $row['bit1_req_status'];
                    //$bit1_req_name = $row['bit1_req_name'];

                    
                    ?>
                <tr>
                   <td><center><?php echo $requestnum;?></center></td>
                        <td><?php echo $requestdate;?></td>
                        <td><?php echo $requester;?></td>
                        <td><?php echo $requestcase;?></td>
                        <td><?php echo $requeststatusname
                              [$requeststatus];?></td>
                       


                        <td><?php echo $b_req_statusname
                              [$b_req_status];?></td>
                        <!--td><?php echo $b_req_name;?></td!-->

                        <td><?php echo $b1_req_statusname
                              [$b1_req_status];?></td>
                        <!--td><?php echo $b1_req_name;?></td!-->

                        <td><?php echo $bit_req_statusname
                              [$bit_req_status];?></td>
                        <!--td><?php echo $bit_req_name;?></td!-->

                        <td><?php echo $bit1_req_statusname
                              [$bit1_req_status];?></td>
                        <!--td><?php echo $bit1_req_name;?></td!-->

                        <td><?php echo $servicedate;?></td>
                        <td><?php echo $supporter;?></td>

                       

                  <td>
                    <a class="btn btn-info btn-xs" href="adm_detail_req.php?requestnum=<?php echo $requestnum;?>" 
                      >
                      <i class="fas fa-eye">
                      </i>
                    </a> 

                   <a class="btn btn-warning btn-xs" href="adm_form_req.php?requestnum=<?php echo $requestnum; ?>" >
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a>

                    <a class="btn btn-danger btn-xs" href="adm_deleted_req.php?requestnum=<?php echo $requestnum ?>" >
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
