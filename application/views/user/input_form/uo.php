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
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="goal1">Goal A</label>
                                <input type="text" required class="form-control" id="goal1" name="goal1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="iim1">Interest & Inner Motivation A</label>
                                <input type="text" required class="form-control" id="iim1" name="iim1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="sw1">Strength & Weakness A</label>
                                <input type="text" required class="form-control" id="sw1" name="sw1" placeholder="">
                            </div>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="goal2">Goal B</label>
                                <input type="text" required class="form-control" id="goal2" name="goal2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="iim2">Interest & Inner Motivation B</label>
                                <input type="text" required class="form-control" id="iim2" name="iim2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="sw2">Strength & Weakness B</label>
                                <input type="text" required class="form-control" id="sw2" name="sw2" placeholder="">
                            </div>
                        </div>
                        <!-- /.col-sm-4 -->
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="goal3">Goal C</label>
                                <input type="text" required class="form-control" id="goal3" name="goal3" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="iim3">Interest & Inner Motivation C</label>
                                <input type="text" required class="form-control" id="iim3" name="iim3" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="sw3">Strength & Weakness C</label>
                                <input type="text" required class="form-control" id="sw3" name="sw3" placeholder="">
                            </div>
                        </div>
                        <!-- /.col-sm-4 -->
                    </div>
                    <div class="form-group mt-3">
                        <label for="itp">Informasi tentang perusahaan</label>
                        <textarea class="form-control" required id="itp" name="itp" placeholder="Informasi Perusahaan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="negosiasi">Bagaimana negosiasi mereka terakhir</label>
                        <textarea class="form-control" required id="negosiasi" name="negosiasi" placeholder="Negosiasi terakhir"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>