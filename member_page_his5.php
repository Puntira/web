<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

      Header("Location: form_login.php"); 
      

}else{?>

<?php

$menu = "member_page_his5";

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
              $sql = "SELECT * FROM devsystem WHERE ID = '{$_SESSION["UserID"]};' ";
                $result = $conn->query($sql);?>
                
     <div align="left"> 
        <a href="m_dev_system.php?ID=<?php echo $_SESSION['UserID'];?>">   
        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user-plus"></i> แบบฟอร์ม ขอปรับปรุง/จัดทำระบบงาน </button></a>
       
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
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">เลขที่ขอ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">วันที่แจ้งขอ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 4%;">ผู้แจ้งขอ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 6%;">มีความประสงค์</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 6%;">ภาพประกอบ</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 6%;">วันที่ให้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ให้บริการ</th>
                  
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">-</th>   
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    
                    $ID              = $row['ID'];
                    $devsys_num      = $row['devsys_num'];
                    $devsysdate      = $row['devsysdate'];
                    $fname_devsys    = $row['fname_devsys'];
                    $lis_devsys      = $row['lis_devsys'];
                    $devsys_status   = $row['devsys_status'];
                    $servicedevdate  = $row['servicedevdate'];
                    $servicedevname  = $row['servicedevname'];
                    $path            = "img/";
                    $image           = $row["image"];
                    
                    ?>
                <tr>
                    <td><center><?php echo $ID;?></center></td>
                    <td><center><?php echo $devsys_num;?></center></td>
                        <td><?php echo $devsysdate;?></td>
                        <td><?php echo $fname_devsys;?></td>
                        <td><?php echo $lis_devsys;?></td>
                        <td><center><?php echo '<img src="'.$path.$image.'" width=50 height=50 >'; ?><br /></center></td>
                        
                         <font color="green"><td><?php echo $devsys_statusname[$devsys_status];?></td></font> 
                         <td><?php echo $servicedevdate;?></td>  
                         <td><?php echo $servicedevname;?></td> 


                  <td>
                    <a class="btn btn-info btn-xs" href="member_detail_his5.php?devsys_num=<?php echo $devsys_num;?>" 
                      >
                      <i class="fas fa-eye"></i></a>  

                      <a class="btn btn-warning btn-xs" href="member_form_his5.php?devsys_num=<?php echo $devsys_num;?>" 
                      >
                      <i class="fas fa-pencil-alt"></i></a>   

                      <a class="btn btn-danger btn-xs" href="member_deleted_his5.php?devsys_num=<?php echo $devsys_num;?>" 
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
