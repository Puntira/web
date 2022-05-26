<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

      Header("Location: form_login.php"); 
      

}else{?>

<?php

$menu = "member_page_his";

?>

<?php include('m_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> รายการข้อมูลขอใช้บริการระบบ</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  <?php include('mysql/config.php');
              $sql = "SELECT * FROM requests WHERE ID = '{$_SESSION["UserID"]};'";
                $result = $conn->query($sql);?>
                
          <div align="left"> 
        <a href="m_request.php?ID=<?php echo $_SESSION['UserID'];?> ">   
          <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-user-plus"></i> แบบฟอร์มแจ้งซ่อม </button></a>
        
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

                  <th nowrap  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">ID</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">เลขที่แจ้ง</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">วันที่แจ้ง</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">ผู้แจ้ง</th>
              

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">แจ้งปัญหา</th>
                  <th nowrap  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รายละเอียดปัญหา</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ให้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ให้บริการ</th>     
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    
                    $ID           = $row['ID'];
                    $requestnum   = $row['requestnum'];
                    $requester    = $row['requester'];
                    $requestdate   = $row['requestdate'];
                    $requestcase   = $row['requestcase'];
                    $requestnote   = $row['requestnote'];
                    $requeststatus = $row['requeststatus'];

                    $servicedate   = $row['servicedate'];
                    $supporter   = $row['supporter'];
                   
                    ?>
                <tr>
                    <td><center><?php echo $ID;?></center></td>
                    <td><center><?php echo $requestnum;?></center></td>
                        <td><?php echo $requestdate;?></td>
                        <td><?php echo $requester;?></td>
                        <td><?php echo $requestcasename[$requestcase];?></td>
                        <td><?php echo $requestnote;?></td>                   
                         <font color="green"><td><?php echo $requeststatusname[$requeststatus];?></td></font>
                         <td><?php echo $servicedate;?></td>  
                         <td><?php echo $supporter;?></td>  

                  <td>
                    <a class="btn btn-info btn-xs" href="member_detail_his.php?requestnum=<?php echo $requestnum;?>" 
                      >
                      <i class="fas fa-eye"></i></a>  

                      <a class="btn btn-warning btn-xs" href="member_form_his.php?requestnum=<?php echo  $requestnum;?>" 
                      >
                      <i class="fas fa-pencil-alt"></i></a>   

                      <a class="btn btn-danger btn-xs" href="member_deleted_his.php?requestnum=<?php echo  $requestnum;?>" 
                      >
                      <i class="fas fa-trash-alt"></i></a>                          
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
