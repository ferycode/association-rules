<div class="row marketing">
  <div class="col-sm-4">
    <h4><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;&nbsp;Data Transaksi</h4>
    <p>Disini Anda dapat melihat, menghapus, dan mengupdate data transaksi.</p>
    <br>
    <a href="<?php echo base_url(); ?>transaksi/lihat" class="btn btn-info">Data Transaksi</a>
    <!-- <div class="btn-group dropup">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
        Data Transaksi&nbsp;&nbsp;<span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="<?php echo base_url(); ?>transaksi/lihat">Lihat Data</a></li>
        <li><a href="<?php echo base_url(); ?>transaksi/edit">Edit Data</a></li>
      </ul>
    </div> -->
  </div>
  <div class="row visible-xs">
    <div class="col-sm-12">
      <div class="separator middle"></div>
    </div>
  </div>
  <div class="col-sm-4">
    <h4><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Tambah Transaksi</h4>
    <p>Disini Anda dapat melakukan penambahan data transaksi yang dilakukan.</p>
    <br>
    <a href="<?php echo base_url(); ?>transaksi/tambah" class="btn btn-info">Tambah Data</a>
    <!-- <div class="btn-group dropup">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
        Data Item&nbsp;&nbsp;<span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
         <li><a href="<?php echo base_url(); ?>item/lihat">Lihat Data</a></li>
        <li><a href="<?php echo base_url(); ?>item/edit">Edit Data</a></li>
      </ul>
    </div> -->
  </div>
  <div class="row visible-xs">
    <div class="col-sm-12">
      <div class="separator middle"></div>
    </div>
  </div>
  <div class="col-sm-4">
    <h4><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Perhitungan</h4>
    <p>Disini Anda dapat melihat hasil perhitungan data mining dengan menggunakan metode Association Rule.</p>
    <a href="<?php echo base_url(); ?>perhitungan/hitung" class="btn btn-info">Perhitungan</a>
  </div>
</div>