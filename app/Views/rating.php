<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rating</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Nunito:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg-white">
    <?php include 'navbar.php'; ?>
    <div class="mx-auto max-w-screen-lg h-max py-24 sm:px-6 sm:py-32 lg:px-2">
        <div class="bg-FFFFFF px-2 pt-2 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:px-24 lg:pt-0">
        <div class="text-center mx-auto lg:py-32 lg:text-center flex justify-center items-center flex-col">
            <h2 class="text-3xl font-title font-bold tracking-tight text-black sm:text-4xl">Give Us Rating!</h2>
            <p class="mt-6 font-text text-lg leading-8 text-gray-400">Berikan penilaian terhadap wahana yang baru kamu mainkan.</p><br>
            <div class = "form-control">
            <form action="<?php echo base_url(); ?>/api/rating" method="post">
                <div class="flex flex-row space-x-4">
                        <div class="mx-4">
                            <span class="font-title label-text">1 - Tidak Asyik</span> 
                            <input type="radio" name="rating" class="form-control radio checked:bg-red-500" value = 1 checked />
                        </div>
                        <div class="mx-4"> 
                            <span class="font-tilte label-text">2 - Kurang Asyik</span> 
                            <input type="radio" name="rating" class="form-control radio checked:bg-blue-500" value = 2 checked />
                        </div>
                        <div class="mx-4"> 
                            <span class="font-title label-text">3 - Biasa Aja</span> 
                            <input type="radio" name="rating" class="form-control radio checked:bg-blue-500" value = 3 checked />
                        </div>
                        <div class="mx-4"> 
                            <span class="font-title label-text">4 - Cukup Asyik</span> 
                            <input type="radio" name="rating" class="form-control radio checked:bg-blue-500" value = 4 checked />
                        </div>
                        <div class="mx-4"> 
                            <span class="font-title label-text">5 - Asyik</span> 
                            <input type="radio" name="rating" class="form-control radio checked:bg-blue-500" value = 5 checked />
                        </div>
                </div>
                <button type="submit" class="font-text font-bold bg-[#555A6A] w-40 mt-4 rounded-md text-[#FFFFFF] py-2 mx-auto">submit</button>
            </form>
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>
</body>

</html>