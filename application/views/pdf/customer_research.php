<center>
    <h1>Customer Research</h1>
</center>
<style type="text/css">
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
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
            <th class="tg-1tka">Objectives</th>
            <th class="tg-1tka">Functions</th>
            <th class="tg-1tka">Functions</th>
            <th class="tg-1tka">Functions</th>
            <th class="tg-1tka">Functions</th>
            <th class="tg-1tka">Functions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="tg-z476">Tujuan Bisnis & Tujuan Pribadi</td>
            <?php foreach ($tujuan as $data) : ?>
                <td class="tg-480y"><?= $data ?></td>
            <?php endforeach ?>
        </tr>
        <tr>
            <td class="tg-z476">Goal Berdasarkan Trend</td>
            <?php foreach ($tujuan as $data) : ?>
                <td class="tg-480y"><?= $data ?></td>
            <?php endforeach ?>
        </tr>
    </tbody>
</table>