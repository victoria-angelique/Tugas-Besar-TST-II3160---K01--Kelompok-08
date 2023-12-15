<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
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
    <h1>Data Rating Wahana</h1>

    <div class="w-30">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('myChart');

        let data = [];
        let labels = [];
        
        <?php if (!empty($analytics)): ?>
        <?php foreach ($analytics as $data):?>
            labels.push('<?= esc($data['nama']) ?>')
            data.push('<?= esc($data['rating']) ?>')
        <?php endforeach ?>

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: labels,
            datasets: [{
                label: '# of Votes',
                data: data,
                borderWidth: 1
            }]
            },
            options: {
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