   <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
   <!--sidebar start-->
   <?php
    $id = $_SESSION['admin']['id_member'];
    $hasil_profil = $lihat->member_edit($id);
    ?>
   <aside>
       <div id="sidebar" class="nav-collapse ">
           <!-- sidebar menu start-->
           <ul class="sidebar-menu" id="nav-accordion">

               <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar']; ?>" class="img-circle" width="100" height="110"></a></p>
               <h5 class="centered"><?php echo $hasil_profil['nm_member']; ?></h5>
               <h5 class="centered">( <?php echo $hasil_profil['NIK']; ?> )</h5>

               <li class="mt">
                   <a href="index.php">
                       <i class="fa fa-dashboard"></i>
                       <span>Dashboard</span>
                   </a>
               </li>

               <li>
                   <a href="index.php?page=barang">
                       <i class="fa fa-desktop"></i>
                       <span>Barang</span>
                   </a>
               </li>
               <li>
                   <a href="index.php?page=kategori">
                       <i class="fa fa-desktop"></i>
                       <span>Kategori</span>
                   </a>
               </li>
               <li>
                   <a href="index.php?page=user">
                       <i class="fa fa-desktop"></i>
                       <span>User</span>
                   </a>
               </li>
               <li>
                   <a href="index.php?page=jual">
                       <i class="fa fa-desktop"></i>
                       <span>Transaksi Jual</span>
                   </a>
               </li>
               <li>
                   <a href="index.php?page=laporan">
                       <i class="fa fa-desktop"></i>
                       <span>Laporan Penjualan</span>
                   </a>
               </li>
               <li>
                   <a href="index.php?page=pengaturan">
                       <i class="fa fa-cog"></i>
                       <span>Pengaturan Toko</span>
                   </a>
               </li>
           </ul>
           <!-- sidebar menu end-->
       </div>
   </aside>
   <!--sidebar end-->