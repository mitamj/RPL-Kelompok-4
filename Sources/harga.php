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
                        <h2 class="title">DAFTAR HARGA</h2>
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
                            <div style="background:linear-gradient(to bottom,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.4)),url(admin/pages/asset/foto/<?php echo $pas['foto1'];?>);background-size: cover;" valign="bottom" class="card-header color-white no-border" valign="bottom" class="card-header color-white no-border"><?php echo $pas['nama'];?></div>
                            <div class="card-content">
                                <div class="card-content-inner">
                                    <p class="color-gray">Kategori <?php echo $pas['kategori'];?></p>
                                    <p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Harga : <?php echo($pas['harga']);?></p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="pasar.php<?=$pas['nama'];?>><i class="fa fa-location-arrow" aria-hidden="true"></i>Lihat Pasar</a>
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