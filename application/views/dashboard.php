<?php
  $pemasukan = $this->Transaksi_model->pemasukan();
  $pengeluaran = $this->Transaksi_model->pengeluaran();
  $saldo_akhir = $pemasukan-$pengeluaran;
?>
<button  type="button" class="btn btn-danger mb-3">
  <a data-toggle="modal" data-bs-toggle="modal" data-bs-target="#exampleModal" mb-3><i class='bx bxs-printer'></i>Laporan</a>
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Laporan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url('home/laporan')?>" method="get" target="_blank">
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label" >Tanggal Awal</label>
              <input type="date" class="form-control" name="tanggal1">
            </div>
            <div class="mb-3">
              <label class="form-label" >Tanggal Akhir</label>
              <input type="date" class="form-control" name="tanggal2">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<div class="col-xs-12">
    <div class="box box-solid">
      <div class="box-body">
          <div class="col-xs-12">
              <table class="table table-striped">
                <tbody>
                <tr>
                  <td colspan="3" style="text-align: center; font-size: 18px;">TOTAL SEMUA PEMASUKAN 
                  </td>
                </tr>
                <tr>
                  <td style="text-align: center;">HARI INI</td>
                  <td style="text-align: center;">BULAN INI</td>
                  <td style="text-align: center;">TOTAL PEMASUKAN</td>
                </tr>
                <tr>
                  <td style="text-align: center;">Rp. <?= number_format($this->Transaksi_model->pemasukan_hari_ini());?></td>
                  <td style="text-align: center;">Rp. <?= number_format($this->Transaksi_model->pemasukan_bulan_ini());?></td> 
                  <td style="text-align: center;">Rp. <?= number_format($this->Transaksi_model->pemasukan());?></td> 
                </tr>
                </tbody>
              </table>
          </div>
          <div class="col-xs-12">
              <table class="table table-striped">
                <tbody>
                <tr>
                  <td colspan="4" style="text-align: center; font-size: 18px;">TOTAL SEMUA PENGELUARAN
                  </td>
                </tr>
                <tr>
                  <td style="text-align: center;">HARI INI</td>
                  <td style="text-align: center;">BULAN INI</td>
                  <td style="text-align: center;">TOTAL PENGELUARAN</td>
                  <td style="text-align: center;">SALDO AKHIR</td>
                </tr>
                <tr>
                <td style="text-align: center;">Rp. <?= number_format($this->Transaksi_model->pengeluaran_hari_ini());?></td>
                  <td style="text-align: center;">Rp. <?= number_format($this->Transaksi_model->pengeluaran_bulan_ini());?></td> 
                  <td style="text-align: center;">Rp. <?= number_format($this->Transaksi_model->pengeluaran());?></td> 
                  <td style="text-align: center;">Rp. <?= number_format($saldo_akhir);?></td> 
                </tr>
                </tbody>
              </table>
          </div>
        </div>
    </div>
  </div>
