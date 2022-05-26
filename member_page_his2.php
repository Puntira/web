<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

      Header("Location: form_login.php"); 
      

}else{?>

<?php

$menu = "member_page_his2";

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
              $sql = "SELECT * FROM borroworreturn WHERE ID = '{$_SESSION["UserID"]};' ";
                $result = $conn->query($sql);?>


        <div align="left"> 
        <a href="m_borroworreturn.php?ID=<?php echo $_SESSION['UserID']; ?>">   
          <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user-plus"></i> แบบฟอร์มขอใช้อุปกรณ์ </button></a>
        </div>
                
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-12">
          <table id="example1" class="table table-bordered table-striped dataTable" 
                      role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row" class="info">

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">ID</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">เลขที่ขอใช้</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">วันที่ขอใช้</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">ผู้ขอใช้</th>
              
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">รายการอุปกรณ์ที่ขอใช้</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รหัสครุภัณฑ์</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เพื่อใช้ในงาน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>  


                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ยืม</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ให้ยืม</th>  

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่คืน</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ให้คืน</th>     

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    
                    $ID           = $row['ID'];
                    $requestnumbr   = $row['requestnumbr'];
                    $requestdatebr = $row['requestdatebr'];
                    $requesterbr    = $row['requesterbr'];
                    $requestcasebr = $row['requestcasebr'];

                    $codeitembr   = $row['codeitembr'];
                    $requestnotebr   = $row['requestnotebr'];                    
                    $requeststatusbr   = $row['requeststatusbr'];  
                   
                    $borrowdate   = $row['borrowdate'];
                    $supporterbr   = $row['supporterbr'];

                    $returndate   = $row['returndate'];
                    $supporterre   = $row['supporterre'];
                   
                    ?>
                <tr>
                    <td><center><?php echo $ID;?></center></td>
                    <td><center><?php echo $requestnumbr;?></center></td>
                        <td><?php echo $requestdatebr;?></td>
                        <td><?php echo $requesterbr;?></td>
                        <td><?php echo $requestcasebrname[$requestcasebr];?></td>
                         
                         <td><?php echo $codeitembr;?></td> 
                         <td><?php echo $requestnotebr;?></td>                   
                         <font color="green"><td><?php echo $requeststatusbrname[$requeststatusbr];?></td></font>

                         <td><?php echo $borrowdate;?></td>  
                         <td><?php echo $supporterbr;?></td>  
                         
                         <td><?php echo $returndate;?></td>  
                         <td><?php echo $supporterre;?></td> 

                  <td>
                    <a class="btn btn-info btn-xs" href="member_detail_his2.php?requestnumbr=<?php echo $requestnumbr;?>" 
                      >
                      <i class="fas fa-eye"></i></a>  

                      <a class="btn btn-warning btn-xs" href="member_form_his2.php?requestnumbr=<?php echo $requestnumbr;?>" 
                      >
                      <i class="fas fa-pencil-alt"></i></a>   

                      <a class="btn btn-danger btn-xs" href="member_deleted_his2.php?requestnumbr=<?php echo $requestnumbr;?>" 
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
