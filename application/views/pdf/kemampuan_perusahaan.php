<center>
    <h1>Form Kemampuan Perusahaan</h1>
</center>

<style type="text/css">
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
        table-layout: auto;
        width: 100%
    }

    .tg td {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-3mr7 {
        background-color: #3531ff;
        border-color: #000000;
        color: #ffffff;
        font-size: 22px;
        font-weight: bold;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-60hs {
        font-size: 20px;
        text-align: left;
        vertical-align: top
    }
</style>
<table class="tg">
    <thead>
        <tr>
            <th class="tg-3mr7">Perusahaan</th>
            <th class="tg-3mr7">Produk &amp; Layanan</th>
            <th class="tg-3mr7">SDM</th>
            <th class="tg-3mr7">Lainnya</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="tg-60hs"><?= $isi->perusahaan[0] ?></td>
            <td class="tg-60hs"><?= $isi->produk_layanan[0] ?></td>
            <td class="tg-60hs"><?= $isi->sdm[0] ?></td>
            <td class="tg-60hs"><?= $isi->lainnya[0] ?></td>
        </tr>
        <tr>
            <td class="tg-60hs"><?= $isi->perusahaan[1] ?></td>
            <td class="tg-60hs"><?= $isi->produk_layanan[1] ?></td>
            <td class="tg-60hs"><?= $isi->sdm[1] ?></td>
            <td class="tg-60hs"><?= $isi->lainnya[1] ?></td>
        </tr>
        <tr>
            <td class="tg-60hs"><?= $isi->perusahaan[2] ?></td>
            <td class="tg-60hs"><?= $isi->produk_layanan[2] ?></td>
            <td class="tg-60hs"><?= $isi->sdm[2] ?></td>
            <td class="tg-60hs"><?= $isi->lainnya[2] ?></td>
        </tr>
    </tbody>
</table>