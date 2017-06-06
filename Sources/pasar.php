<?php
    include "database/koneksi.php";
    $tampilPas=mysql_query("SELECT * FROM tb_pasar ORDER BY id_pasar ASC");
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
                        <h2 class="title">PASAR</h2>
                    </div>
                    <div class="right">
                        <a href="index.html" class="link icon-only">
                            <i class="fa fa-home"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="pages navbar-through">
                <div data-page="blog" class="page">
                    
                    <form data-search-list = ".list-block-search" data-search-in = ".card-header" 
                     class = "searchbar searchbar-init">
                     <div class = "searchbar-input">
                        <input type = "search" placeholder = "Cari Pasar"><a href = "#" 
                           class = "searchbar-clear"></a>
                     </div>
                     <a href = "#" class = "searchbar-cancel"><font color="white">Batal</font></a>
                  </form>
                  
                  <div class = "searchbar-overlay"></div>
                    
                    <div class="page-content pull-to-refresh-content">
                        
                        <div class="pull-to-refresh-layer">
                          <div class="preloader"></div>
                          <div class="pull-to-refresh-arrow"></div>
                        </div>

                        <?php
                            $no=0;
                            while($pas=mysql_fetch_array($tampilPas)){
                            $no++
                        ?>  
                        
                        <div class ="list-block list-block-search searchbar-found">
                           
                        <div class="card demo-card-header-pic">
                            <div style="background:linear-gradient(to bottom,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.4)),url(admin/pages/asset/foto/<?php echo $pas['foto1'];?>);background-size: cover;" valign="bottom" class="card-header color-white no-border" valign="bottom"><b><?php echo $pas['nama'];?></b></div>
                            <div class="card-content">
                                <div class="card-content-inner">
                                    <p class="color-gray"><?php echo $pas['lokasi'];?></p>
                                    <table style="width:100%">
                                      <tr>
                                        <td><i class="fa fa-info-circle" aria-hidden="true"></i></td>
                                        <td>Status Pasar</td>
                                        <td>: Pasar <?php echo $pas['status'];?></td> 
                                      </tr>
                                      <tr>
                                        <td><i class="fa fa-crosshairs" aria-hidden="true"></i></td>
                                        <td>Luas Area</td>
                                        <td>: <?=number_format($pas['luas'],0,",",".");?> M<sup>2</sup></td> 
                                      </tr>
                                      <tr>
                                        <td><i class="fa fa-cog" aria-hidden="true"></i></td>
                                        <td>No. Registrasi</td>
                                        <td>: <?php echo $pas['no_reg'];?></td> 
                                      </tr>
                                      <tr>
                                        <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                                        <td>Tanggal Berdiri</td>
                                        <td>: <?php echo $pas['tgl_berdiri'];?></td> 
                                      </tr>
                                      <tr>
                                        <td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
                                        <td>Jam Buka</td>
                                        <td>: 07.00 - 18.00 WIB</td> 
                                      </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="https://www.google.co.id/maps/search/<?=$pas['nama'];?>" class="link external"><i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp; Lihat di Peta</a>
                                <a href="#" class="ac-3"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp; Bagikan</a>
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
    </div>
</body>