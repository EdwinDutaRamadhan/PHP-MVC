<div class="container md-5">
    <h6>Transkrip Nilai</h6>
    <table class="table table-bordered" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Matakuliah</th>
            <th>SKS</th>
            <th>Nilai</th>
            <th>AK</th>
            <th>Tahun</th>
        </tr>
        <?php foreach($data['transkrip'] as $transkrip): ?>
        <tr>
            <td><?= $transkrip['no']; ?></td>
            <td><?= $transkrip['kode']; ?></td>
            <td><?= $transkrip['matakuliah']; ?></td>
            <td><?= $transkrip['sks']; ?></td>
            <td><?= $transkrip['nilai']; ?></td>
            <td><?= $transkrip['ak']; ?></td>
            <td><?= $transkrip['tahun']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>