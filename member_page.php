<?php 
@session_start();
if (!$_SESSION["UserID"]){

      Header("Location: form_login.php");

}else{ ?>

<?php

$menu = "member_page";

?>
<?php include('m_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายการข้อมูลแจ้งซ่อม พนักงาน/ลูกจ้าง</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  
         <div align="right"> 
        <a href="m_request.php?ID=<?php echo $_SESSION['UserID'];?> ">   
          <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-user-plus"></i> แบบฟอร์มแจ้งซ่อม </button></a>
       
      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">

 <?php include('mysql/config.php');
              $sql = "SELECT * FROM requests ORDER BY requeststatus 
              ASC, requestdate DESC, requestdate ASC";
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
                  <th nowrap tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เลขที่แจ้งซ่อม</th>
                  <th nowrap tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ID</th>
                  <th nowrap tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่แจ้ง</th>
                  <th nowrap tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้แจ้ง</th>
                  <th nowrap tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แจ้งปัญหา</th>
                  <th nowrap tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>

                  <th nowrap  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงานM</th>
                  
                  <th nowrap  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการM</th>         

                  <th nowrap  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็น หน.ส่วนงานit</th>
            
                  <th nowrap  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเห็นผู้อำนวยการit</th>
                
                  <th nowrap tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ให้บริการ</th>
                  <th nowrap tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ให้บริการ</th>
                  <th nowrap tabindex="0" rowspan="1" colspan="1" style="width: 3%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $requestnum = $row['requestnum'];
                    $ID = $row['ID'];
                    $requester = $row['requester'];
                    $requestdate = $row['requestdate'];
                    $requestcase = $row['requestcase'];
                    $servicedate = $row['servicedate'];
                    $requeststatus = $row['requeststatus'];

                    $b_req_status = $row['b_req_status'];                 

                    $b1_req_status = $row['b1_req_status'];
                   
                    $bit_req_status = $row['bit_req_status'];
                    
                    $bit1_req_status = $row['bit1_req_status'];
                  
                    $supporter = $row['supporter'];
                    ?>
                <tr>
                   <td><center><?php echo $requestnum;?></center></td>
                   <td><center><?php echo $ID;?></center></td>
                        <td><?php echo $requestdate;?></td>
                        <td><?php echo $requester;?></td>
                        <td><?php echo $requestcase;?></td>
                        <td><?php echo $requeststatusname
                              [$requeststatus];?></td>

                        <td><?php echo $b_req_statusname
                              [$b_req_status];?></td>
                        

                        <td><?php echo $b1_req_statusname
                              [$b1_req_status];?></td>
                       

                        <td><?php echo $bit_req_statusname
                              [$bit_req_status];?></td>
                    

                        <td><?php echo $bit1_req_statusname
                              [$bit1_req_status];?></td>
                    

                        <td><?php echo $servicedate;?></td>
                        <td><?php echo $supporter;?></td>


                  <td>
        <a class="btn btn-info btn-xs" href="mem_detail_req.php?requestnum=<?php echo $requestnum;?>" 
                      >
                      <i class="fas fa-eye">
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