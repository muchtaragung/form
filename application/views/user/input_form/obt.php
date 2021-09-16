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
                <form action="#" method="post">
                    <div class="form-group mt-3">
                        <label for="val1">Lawan yang dihandle: (opponent)</label>
                        <input type="text" class="form-control" required id="val1" name="val1" placeholder="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="val1">Apa yang sebenarnya anda inginkan
                            dalam negosiasi ini</label>
                        <textarea class="form-control" required id="val1" name="val1" placeholder=""></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="val2">Apa yang mereka inginkan dalam
                            negosiasi ini? Jika saya tidak tahu,
                            kira kira mereka menginginkan apa?</label>
                        <textarea class="form-control" required id="val2" name="val2" placeholder=""></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="val3">Apa batas minimal yang masih bisa
                            anda terima dalam negosiasi ini</label>
                        <textarea class="form-control" required id="val3" name="val3" placeholder=""></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="val4">Apa masalah yang mungkin terjadi
                            pada proses ini?</label>
                        <textarea class="form-control" required id="val4" name="val4" placeholder=""></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="val5">Bagaimana cara menyelesaikan
                            masalah ini jika mungkin, buat
                            problem yang akan menjadi beban
                            jika tidak deal?</label>
                        <textarea class="form-control" required id="val5" name="val5" placeholder=""></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="val6">Bagaimana saya membuat hal dalam
                            proses bisa sebagai kesimpulan akhir
                            untuk deal?</label>
                        <textarea class="form-control" required id="val6" name="val6" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>