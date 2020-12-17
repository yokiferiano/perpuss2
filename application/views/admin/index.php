<div class="page-header">
</div>
 <div class="jumbotron jumbotron-fluid" style="background-image: url(assets/upload/learning.jpeg); background-size:cover; text-align: center; width: 1140px; height: 450px ">
  <div class="container">
 </div>
</div>
<body style="background-image: url(assets/upload/pexels-photo-1939485.jpeg); background-size:cover;">

<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="panel panel" style="background-image: url(assets/upload/buku_1.jpg); background-size:cover; text-align: center";>
      <div class="panel-heading">
      <div class="row">
        <div class="col-xs-3">
          <i class="glyphicon glyphiconfolder-open"></i>
        </div>
        <div class="col-xs-9 text-right">
          <div class="huge">
            <font size="18"><b><?php echo $this->M_perpus->get_data('buku')->num_rows(); ?></b></font>
          </div>
              <div><b>Jumlah Buku yang terdaftar</b></div>
            </div>
          </div>
        </div>
        <a href="<?php echo base_url().'admin/buku' ?>">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="panel panel" style="background-image: url(assets/upload/anggota.jpeg); background-size:cover; text-align: center";>>
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="glyphicon glyphiconuser"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge">
                <font size="18"><b><?php echo $this->M_perpus->get_data('anggota')->num_rows(); ?></b></font>
              </div>
                  <div><b>Jumlah Anggota yang terdaftar</b></div>
                </div>
              </div>
            </div>
            <a href="<?php echo base_url().'admin/anggota' ?>">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="glyphicon glyphiconsort"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">
                    <font size="18"><b><?php echo $this->M_perpus->edit_data(array('status_peminjaman'=>0),'transaksi')->num_rows(); ?></b></font>
                  </div>
                      <div><b>Peminjaman belum selesai</b></div>
                    </div>
                  </div>
                </div>
                <a href="<?php echo base_url().'admin/peminjaman' ?>">
                  <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="glyphicon glyphiconok"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">
                        <font size="18"><b><?php echo $this->M_perpus->edit_data(array('status_peminjaman'=>1),'transaksi')->num_rows(); ?></b></font>
                      </div>
                          <div><b>Peminjaman Sudah selesai ok</b></div>
                        </div>
                      </div>
                    </div>
                    <a href="<?php echo base_url().'admin/peminjaman' ?>">
                      <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                        <div class="clearfix"></div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-lg-4">
                  <div class="panel panel" style="background-image:url(assets/upload/buku.jpg);background-size:cover";>
                    <div class="panel-heading">
                      <h3 class="panel-title" style="font-size:18px;font-weight:bold;"><i class="glyphicon glyphicon-random arrow-right"></i> Buku</h3>
                    </div>
                        <div class="panel-body" style=" opacity: 0.6;">
                          <div class="list-group">
                            <?php foreach ($buku as $b) { ?>
                              <a href="#" class="list-group-item">
                                <span class="badge"><?php if($b->status_buku==1){echo "Tersedia";} else{echo "Dipinjam";} ?></span>
                                <i class="glyphicon glyphiconuser"></i><?php echo $b->judul_buku; ?>
                              </a>
                            <?php } ?>
                          </div>
                          <div class="text-right" style="font-size:18px;font-weight:bold;">
                            <a href="<?php echo base_url().'admin/buku' ?>">Lihat Semua Buku <i class="glyphicon glyphicon-arrow-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="panel panel" style="background-image:url(assets/upload/anggota.jpeg); background-size:cover";>
                        <div class="panel-heading">
                          <h3 class="panel-title" style="font-size:18px;font-weight:bold;"><i class="glyphicon glyphicon-user o"></i>Anggota Terbaru</h3>
                        </div>
                            <div class="panel-body"style=" opacity: 0.6;">
                              <div class="list-group">
                                <?php foreach ($anggota as $a) { ?>
                                  <a href="#" class="list-group-item">
                                    <span class="badge"><?php echo $a->gender; ?></span>
                                    <i class="glyphicon glyphiconuser"></i><?php echo $a->nama_anggota; ?>
                                  </a>
                                <?php } ?>
                              </div>
                              <div class="text-right"style="font-size:18px;font-weight:bold;">
                                <a href="<?php echo base_url().'admin/anggota' ?>"> Lihat Semua Anggota <i class="glyphicon glyphicon-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-5">
                          <div class="panel panel-default">
                            <h3 class="panel-title" style="font-size:18px;font-weight:bold;"><i class="glyphicon glyphicon-sort"></i> Peminjaman Terakhir</h3>
                            </div>
                            <div class="panel-body">
                              <div class="table-responsive">
                                <table class="tabel table-bordered tablehover table-striped">
                                  <thead>
                                    <tr>
                                      <th>Tgl. Transaksi</th>
                                      <th>Tgl. Pinjam</th>
                                      <th>Tgl. Kembali</th>
                                      <th>Total Denda</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    foreach ($transaksi as $p) {
                                      ?>
                                      <tr>
                                        <td><?php echo date('d/m/Y',strtotime($p->tgl_pencatatan)); ?></td>
                                        <td><?php echo date('d/m/Y',strtotime($p->tgl_pinjam)); ?></td>
                                        <td><?php echo date('d/m/Y',strtotime($p->tgl_kembali)); ?></td>
                                        <td><?php echo "Rp. ".number_format($p->total_denda)." ,-"; ?></td>
                                      </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>
                              </div>
                                    <div class="text-right">
                                      <a href="<?php echo base_url().'admin/transaksi' ?>">Lihat Semua Transaksi <i class="glyphicon glyphicon-arrow-right"></i></a>
                                    </div>
                                  </div>
                                </div>

                                    <!-- /.row -->
                                  </div>
