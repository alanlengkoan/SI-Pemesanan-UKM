<!-- untuk bagian head -->
<?php include_once 'atribut/head.php' ?>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;">
                                <label>Realtime</label>
                <script type="text/javascript">
                    function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
                        var waktu = new Date(); //membuat object date berdasarkan waktu saat 
                        var sh = waktu.getHours() + ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
                        var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
                        var ss = waktu.getSeconds() + ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
                        document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
                    }
                </script>

                <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
                    <span id="clock"></span>
                    &nbsp;
                    <?php
                        $hari = date('l');
                        /*$new = date ('l, F d, Y', strtotime($Today));*/
                        if ($hari == "Sunday") {
                            echo "Minggu";
                        } elseif ($hari == "Monday") {
                            echo "Senin";
                        } elseif ($hari == "Tuesday") {
                            echo "Selasa";
                        } elseif ($hari == "Wednesday") {
                            echo "Rabu";
                        } elseif ($hari == "Thursday") {
                            echo ("Kamis");
                        } elseif ($hari == "Friday") {
                            echo "Jum'at";
                        } elseif ($hari == "Saturday") {
                            echo "Sabtu";
                        }
                        
                        $tgl = date('d');
                        echo $tgl;
                        $bulan = date('F');
                        if ($bulan == "January") {
                            echo " Januari ";
                        } elseif ($bulan == "February") {
                            echo " Februari ";
                        } elseif ($bulan == "March") {
                            echo " Maret ";
                        } elseif ($bulan == "April") {
                            echo " April ";
                        } elseif ($bulan == "May") {
                            echo " Mei ";
                        } elseif ($bulan == "June") {
                            echo " Juni ";
                        } elseif ($bulan == "July") {
                            echo " Juli ";
                        } elseif ($bulan == "August") {
                            echo " Agustus ";
                        } elseif ($bulan == "September") {
                            echo " September ";
                        } elseif ($bulan == "October") {
                            echo " Oktober ";
                        } elseif ($bulan == "November") {
                            echo " November ";
                        } elseif ($bulan == "December") {
                            echo " Desember ";
                        }
                        $tahun = date('Y');
                        echo $tahun;
                    ?>
                    &nbsp; <a href="../logout.php" class="btn btn-danger square-btn-adjust fa fa-sign-out fa-lg">Logout </a>
            </div>
        </nav>

        <!-- begin:: side-bar -->
        <?php include_once 'atribut/side-bar.php'; ?>
        <!-- end:: side-bar -->
        
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman'] == "produk") {
                        include 'produk.php';
                    } else if ($_GET['halaman'] == "pembelian") {
                        include 'pembelian.php';
                    } else if ($_GET['halaman'] == "pelanggan") {
                        include 'pelanggan.php';
                    } else if ($_GET['halaman'] == "detail") {
                        include 'detail.php';
                    } else if ($_GET['halaman'] == "tambahproduk") {
                        include 'tambahproduk.php';
                    } else if ($_GET['halaman'] == "hapusproduk") {
                        include 'hapusproduk.php';
                    } else if ($_GET['halaman'] == "ubahproduk") {
                        include 'ubahproduk.php';
                    } else if ($_GET['halaman'] == "tambahberita") {
                        include 'tambahberita.php';
                    } else if ($_GET['halaman'] == "hapusberita") {
                        include 'hapusberita.php';
                    } else if ($_GET['halaman'] == "ubahberita") {
                        include 'ubahberita.php';
                    } else if ($_GET['halaman'] == "tambahprofilukm") {
                        include 'tambahprofilukm.php';
                    } else if ($_GET['halaman'] == "hapusprofilukm") {
                        include 'hapusprofilukm.php';
                    } else if ($_GET['halaman'] == "ubahprofilukm") {
                        include 'ubahprofilukm.php';
                    } else if ($_GET['halaman'] == "logout") {
                        include 'logout.php';
                    } else if ($_GET['halaman'] == "pembayaran") {
                        include 'pembayaran.php';
                    } else if ($_GET['halaman'] == "laporan_pembelian") {
                        include 'laporan_pembelian.php';
                    } else if ($_GET['halaman'] == "berita") {
                        include 'berita.php';
                    } else if ($_GET['halaman'] == "hapuspelanggan") {
                    include 'hapuspelanggan.php';
                    } 
                    else if ($_GET['halaman'] == "profilukm") {
                        include 'profilukm.php';
                    }
                    } else {
                        include 'home.php';
                    }
                ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>

<!-- untuk bagian foot -->
<?php include_once 'atribut/foot.php' ?>