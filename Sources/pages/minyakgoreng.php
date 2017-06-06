<?php
    include "database/koneksi.php";
    $tampilPas=mysql_query("SELECT * FROM tb_produk WHERE kategori = 'Minyak Goreng'");
?>

<body>
    <div class="views">
        <div class="view view-main">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="#" class="link icon-only open-panel">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="center">
                        <h2 class="title">DAFTAR HARGA MINYAK GORENG</h2>
                    </div>
					<div class="right">
                        <a href="kategori.php" class="link icon-only">
                            <i class="fa fa-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="pages navbar-through">
                <div data-page="blog" class="page">
                    <div class="page-content">

                        <?php
                            $no=0;
                            while($pas=mysql_fetch_array($tampilPas)){
                            $no++
                        ?>  

                        <div class="card demo-card-header-pic">
                           <div class="card-content">
                                <div class="card-content-inner">
								 <p><b><?php echo($pas['nama']);?></b></p>
								    <table style="width:100%">
                                      <tr>
                                        <td><i class="fa fa-tag" aria-hidden="true"></i></td>
                                        <td>Harga</td>
                                        <td>: <?php echo $pas['harga'];?></td> 
                                      </tr>
                                      <tr>
                                        <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                                        <td>Diperbarui</td>
                                        <td>: <?php echo($pas['tgl_harga']);?></td> 
                                      </tr>
                                      <tr>
                                        <td><i class="fa fa-file-text-o" aria-hidden="true"></i></td>
                                        <td>Kategori</td>
                                        <td>: <?php echo $pas['kategori'];?></td> 
                                      </tr>
                                    </table>
                                </div>
                            </div>
                           
                        </div>

                        <?php
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>