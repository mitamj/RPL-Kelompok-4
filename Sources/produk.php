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
                    <div class="page-content">

                        <?php
                            $no=0;
                            while($pas=mysql_fetch_array($tampilPas)){
                            $no++
                        ?>  

                        <div class="card demo-card-header-pic">
                           <div class="card-content">
                                <div class="card-content-inner">
								
                                    <p class="color-gray">Kategori <?php echo $pas['kategori'];?></p>
                                    <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Nama : <?php echo($pas['nama']);?></p>
									<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Harga : <?php echo($pas['harga']);?></p>
									<p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Tanggal Harga : <?php echo($pas['tgl_harga']);?></p>
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