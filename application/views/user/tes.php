       <div class="page-heading">
           <div class="page-title">
               <div class="row">
                   <div class="col-12 col-md-6 order-md-1 order-last">
                       <h3><?= $form->nama ?></h3>
                   </div>
               </div>
           </div>
           <?php
            $var = $isi->isi;
            $array = explode('-', $var);
            foreach ($array as $values) {
                $val[] = $values;
            }
            ?>
           <style>
               .table {
                   border: 2px;
               }
           </style>
           <section class="section">
               <div class="card">
                   <div class="card-body">
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th colspan="2" class="bg-primary text-white text-center">OUTCOME BASED THINKING</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td style="width: 30%">apa yang sebenarnya anda inginkan
                                       dalam negosiasi ini?</td>
                                   <td style="width: 30%"><?= $val[0] ?></td>
                               </tr>
                               <tr>
                                   <td style="width: 30%">Apa yang mereka inginkan dalam
                                       negosiasi ini? Jika saya tidak tahu,
                                       kira kira mereka menginginkan apa?</td>
                                   <td style="width: 30%"><?= $val[1] ?></td>
                               </tr>
                               <tr>
                                   <td style="width: 30%">Apa batas minimal yang masih bisa
                                       anda terima dalam negosiasi ini</td>
                                   <td style="width: 30%"><?= $val[2] ?></td>
                               </tr>
                               <tr>
                                   <td style="width: 30%">Apa masalah yang mungkin terjadi
                                       pada proses ini?</td>
                                   <td style="width: 30%"><?= $val[3] ?></td>
                               </tr>
                               <tr>
                                   <td style="width: 30%">Bagaimana cara menyelesaikan
                                       masalah ini jika mungkin, buat
                                       problem yang akan menjadi beban
                                       jika tidak deal?</td>
                                   <td style="width: 30%"><?= $val[4] ?></td>
                               </tr>
                               <tr>
                                   <td style="width: 30%">Bagaimana saya membuat hal dalam
                                       proses bisa sebagai kesimpulan akhir
                                       untuk deal?</td>
                                   <td style="width: 30%"><?= $val[5] ?></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
               </div>
           </section>
       </div>