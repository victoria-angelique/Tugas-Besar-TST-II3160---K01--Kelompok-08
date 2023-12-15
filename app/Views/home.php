<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Nunito:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="w-screen h-screen bg-[#FFFFFF]">
        <?php include 'navbar.php'; ?>
        <div class="relative overflow-x-auto">
            <table class = "table-auto">
            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"> -->
                    <tr>
                        <th class="px-6 py-3">
                            ID Wahana
                        </th>
                        <th class="px-6 py-3">
                            Nama Wahana
                        </th>
                        <th class="px-6 py-3">
                            Kapasitas
                        </th>
                        <th class="px-6 py-3">
                            Rating Wahana
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($wahana as $wahanaList) { ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-70">
                            <td class= "px-6 py-4"><?php echo $wahanaList['wahanaId']; ?></td>
                            <td class= "px-6 py-4"><?php echo $wahanaList['nama']; ?></td>
                            <td class= "px-6 py-4"><?php echo $wahanaList['kapasitas']; ?></td>
                            <td class= "px-6 py-4"><?php echo $wahanaList['ratingWahana']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>