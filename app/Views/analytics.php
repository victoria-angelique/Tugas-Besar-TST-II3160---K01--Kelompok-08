<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Analytics</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Nunito:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="<?= base_url('js/chart.js') ?>" ></script>
</head>


<body>
    <?php include 'navbar.php'; ?>
    <div class="overflow-x-auto px-8">
        <h2 class="text-3xl font-title font-bold tracking-tight text-black sm:text-4xl my-6 tracking-wide">Analytics</h2>
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>ID Wahana</th>
                <th>Kapasitas</th>
                <th>Rating</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($wahana as $index=>$data): ?>
                    <tr>
                        <th><?= esc($index)+1 ?></th>
                        <td><?= esc($data['nama']) ?></td>
                        <td><?= esc($data['wahanaId']) ?></td>
                        <td><?= esc($data['kapasitas']) ?></td>
                        <td><?= esc($data['ratingWahana']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="my-8 flex flex-row gap-8 px-8">
        <div>
            <h2 class="text-xl font-bold">Rating Permainan</h2>
            <div style="height: 300px; width: 600px; margin-top: 16px">
                <canvas id="ratingChart"></canvas>
            </div>
        </div>
        <div>
            <?php if(empty($domisili)): ?>
                <h2 class="text-xl font-bold text-error">Sistem reservasi unreached!</h2>
            <?php else: ?>
                <h2 class="text-xl font-bold">Persebaran pemain terbanyak dari setiap kota</h2>
                <div style="height: 300px; width: 800px; margin-top: 16px">
                    <canvas id="domisiliChart"></canvas>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        // ini ngambil elemennya
        const ratingCtx = document.getElementById('ratingChart');
        const domisiliCtx = document.getElementById('domisiliChart');

        let ratingData = [];
        let ratingLabels = [];
        let domisiliData = [];
        let domisiliLabels = [];
        
        <?php if (!empty($analytics)): ?>
        <?php foreach ($analytics as $data):?>
            ratingLabels.push('<?= esc($data['nama']) ?>')
            ratingData.push('<?= esc($data['rating']) ?>')
        <?php endforeach ?>

        
        new Chart(ratingCtx, {
            type: 'bar',
            data: {
                labels: ratingLabels,
            datasets: [{
                label: 'Rating',
                data: ratingData,
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                beginAtZero: true
            }
        }
    }
});
        <?php endif; ?>

        <?php if (!empty($domisili)): ?>
        <?php foreach ($domisili as $data):?>
            domisiliLabels.push('<?= esc($data['asal_kota_pengunjung']) ?>')
            domisiliData.push('<?= esc($data['total']) ?>')
        <?php endforeach ?>
        new Chart(domisiliCtx, {
            type: 'bar',
            data: {
            labels: domisiliLabels,
            datasets: [{
                label: 'Jumlah Pemesanan',
                data: domisiliData,
                borderWidth: 1
            }]
            },
            options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
    <?php endif; ?>
    </script>
</body>

</html>