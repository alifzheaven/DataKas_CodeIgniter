<div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
     <div class="card-header">Kelola Data Siswa</div>
     <div class="card-body">
          <?php
               
               echo anchor('siswa/tambah','Tambah_Siswa','class="btn btn-primary"
               style="margin:0 5px; margin-bottom: 15px;" ');
               echo anchor ('siswa/laporan','Cetak Laporan','class="btn btn-secondary" style="margin: 0 5px; margin-bottom: 15px;"');
               ?>
          <table class="table table-striped">
               <thead>
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">NISN</th>
                         <th scope="col">NAMA_LENGKAP</th>
                         <th scope="col">minggu1</th>
                         <th scope="col">minggu2</th>
                         <th scope="col">minggu3</th>
                         <th scope="col">minggu4</th>
                         <th scope="col">bulan</th>
                         <th scope="col">tanggal</th>
                         <th scope="col">AKSI</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                         if ($query->num_rows() > 0) {
                              $no = 1;
                              foreach ($query->result() as $row) {
                                   echo '
                                        <tr>
                                             <td>'.$no++.'</td>
                                             <td>'.$row->nisn.'</td>
                                             <td>'.$row->nama_lengkap.'</td>
                                             <td>'.$row->minggu1.'</td>
                                             <td>'.$row->minggu2.'</td>
                                             <td>'.$row->minggu3.'</td>
                                             <td>'.$row->minggu4.'</td>
                                             <td>'.$row->bulan.'</td>
                                             <td>'.$row->tanggal.'</td>
                                             <td>
                                                  '.anchor('siswa/edit/'.$row->siswa_id, 'Edit', 'class="btn btn-xs btn-success"').'
                                                  '.anchor('siswa/hapus/'.$row->siswa_id, 'Hapus', 'class="btn btn-xs btn-danger"').'
                                             </td>
                                        </tr>
                                   ';
                              }
                         }else{
                              echo '
                                   <tr>
                                        <td colspan="6" class="text-center">Data masih kosong !</td>
                                   </tr>
                              ';
                         }
                    ?>
               </tbody>
          </table>
     </div>
</div>