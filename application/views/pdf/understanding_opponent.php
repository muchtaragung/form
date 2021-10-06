<center>
    <h1>Understanding Opponent</h1>
</center>
<style type="text/css">
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
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

    .tg .tg-1tka {
        background-color: #9b9b9b;
        font-family: Arial, Helvetica, sans-serif !important;
        ;
        font-size: 26px;
        font-weight: bold;
        text-align: center;
        vertical-align: top
    }

    .tg .tg-z476 {
        background-color: #34cdf9;
        color: #ffffff;
        font-family: Arial, Helvetica, sans-serif !important;
        ;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        vertical-align: top
    }

    .tg .tg-480y {
        font-family: Arial, Helvetica, sans-serif !important;
        ;
        font-size: 16px;
        text-align: center;
        vertical-align: top
    }
</style>
<table class="tg">
    <thead>
        <tr>
            <th class="tg-1tka">Stake Holder</th>
            <th class="tg-1tka">A</th>
            <th class="tg-1tka">B</th>
            <th class="tg-1tka">C</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="tg-z476">Goal</td>
            <?php foreach ($goal as $gol) : ?>
                <td class="tg-480y"><?= $gol ?></td>
            <?php endforeach ?>
        </tr>
        <tr>
            <td class="tg-z476">Interest And Inner Motivation</td>
            <?php foreach ($interest as $inter) : ?>
                <td class="tg-480y"><?= $inter ?></td>
            <?php endforeach ?>
        </tr>
        <tr>
            <td class="tg-z476">Strength &amp; Weakness</td>
            <?php foreach ($saw as $ss) : ?>
                <td class="tg-480y"><?= $ss ?></td>
            <?php endforeach ?>
        </tr>
        <tr>
            <td class="tg-z476">Informasi Tentang Perusahaan</td>
            <td class="tg-480y" colspan="3"><?= $informasi ?></td>
        </tr>
        <tr>
            <td class="tg-z476">Bagaimana Negosiasi Mereka Terakhir</td>
            <td class="tg-480y" colspan="3"><?= $bagaimana ?></td>
        </tr>
    </tbody>
</table>