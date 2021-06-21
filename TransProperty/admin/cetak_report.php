
            <?php include('../agen/include/header.php');?>
      
            <script type="text/javascript">

  function delet(id)
  {
    if(confirm("you want to delete ?"))
    {
      window.location.href='delete_property.php?x='+id;
    }
  }

</script>
    <!-- Header -->
    
    <section>
       
       <!-- Left Sidebar -->
<?php include('../agen/include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
<style>
    @media print{
        .btn, .cara{
            display: none;
        }
    }
</style>
     
        <section style="margin-left: 2%; margin-top: 2%;" class="row">
                    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a class="btn btn-info" href="report.php">Kembali</a>
                            <h2 style="text-align: center;">
                             Report
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
                                            <th>Tanggal</th>
                                            <th>Nama Property</th>
                                            <th>Nama Pemilik</th>
                                            <th>Nama Agent</th>
                                            <th>Harga Property</th>
                                            <th>Keuntungan</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                        $keuntungan2 = 0;
                                        $i=1;
include'include/config.php';

$query=mysqli_query($con,"select * from report");
while($res=mysqli_fetch_array($query))
{
$id_report=$res['id_report'];
$img=$res['foto'];
?>

                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $res['tanggal'];?></td>
                                            <td><?php echo $res['property'];?></td>
                                            <td><?php echo $res['pemilik'];?></td>
                                            <td><?php echo $res['agen'];?></td>
                                            <td><?php echo $res['harga'];?></td>
                                            <td><?php echo $res['keuntungan'];?></td>
                                            
                                        </tr>

                                   <?php 
                                   $keuntungan2 += $res['keuntungan'];
                                }
                                    ?>
                                   <tr style="font-weight: bold;">
                                       <td colspan="6"><center>Jumlah Keuntungan</center></td>
                                       <td><?php echo $keuntungan2;  ?></td>
                                   </tr>

                                    </tbody>
                                </table>
                                <p class="cara">#Silahkan Klik <b>KANAN</b> Lalu pilih <b>CETAK/PRINT</b> Untuk Mencetak Report</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
            <?php include'../agen/include/footer.php';?>


                                