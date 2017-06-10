<?php
    include "database/koneksi.php";
    $tampilPas=mysql_query("SELECT * FROM tb_produk ORDER BY id_produk ASC");
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
                        <h2 class="title">DAFTAR PRODUK</h2>
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
                    
                    <form class="searchbar searchbar-init" data-search-list=".list-block-search" data-search-in=".item-title" data-found=".searchbar-found" data-not-found=".searchbar-not-found">
                     <div class = "searchbar-input">
                        <input type = "search" placeholder = "Cari Produk"><a href = "#" class = "searchbar-clear"></a>
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
                        
                        <div class="content-block searchbar-not-found">
                            <div class="card-content-inner">
                                <center>Produk tidak ditemukan</center>
                            </div>
                        </div>
 
                        <div class ="list-block list-block-search searchbar-found">
							<ul>
    
								<li class="card item-content">
									<div class="item-inner">
										<div class="card-content">
											<div class="card-content-inner">
												<h4 class="item-title"><b><?php echo $pas['nama'];?></b></h4>
												<table style="width:200%">
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
												</table><br>
											</div>
										</div>                          
									</div>
								</li>
							</ul>
                        
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