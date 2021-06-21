
            <?php include('include/header.php');?>
      
            <script type="text/javascript">

  function delet(id)
  {
    if(confirm("you want to delete ?"))
    {
      window.location.href='delete_agent.php?x='+id;
    }
  }

</script>
    <!-- Header -->
    
    <section>
       
       <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
        <section class="content">
                    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            <h2 style="text-align: center;">
                             View Agent
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                       <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>No.Tlp</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        <?php
                                        $i=1;
include'include/config.php';

$query=mysqli_query($con,"select * from agent");
while($res=mysqli_fetch_array($query))
{
$id_agent=$res['id_agent'];
$foto=$res['foto'];
?>

                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $res['name'];?></td>
                                            <td><?php echo $res['nik'];?></td>
                                            <td><?php echo $res['no_tlp'];?></td>
                                            <td><?php echo $res['email'];?></td>
                                            <td><?php echo $res['password'];?></td>
                                            <td><?php echo $res['address'];?></td>
                                            <td><?php echo $res['gender'];?></td>
                                            <td><img src="../agen/images/agent_image/<?php echo $img;?>" width="120"></td>
                                             <td>
    <a class='btn btn-info'   href="update_agent.php?&id_agent=<?php echo $id_agent;?>"><span class="glyphicon glyphicon-pencil"></span></a>
    <a class='btn btn-danger' onclick="delet(<?php echo $id_agent;?>);" ><span class="glyphicon glyphicon-remove" style="color:white;"></span></a>

   <!-- <a class='btn btn-success' href="dashboard.php?page=c_info&id=<?php echo $id;?>"><span class="fa fa-eye"></span></a>-->
  
    </td>
                                        </tr>
                                   <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
            <?php include'include/footer.php';?>


                                