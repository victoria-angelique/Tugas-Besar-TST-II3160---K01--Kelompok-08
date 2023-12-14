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
</head>

<body>
    <div class="w-screen h-screen bg-[#F1F5F5]">
        <div class="flex justify-center bg-[#F1F5F5]">
            <div class="container w-max h-max mt-36 mx-8 px-10 py-16 md:p-16 bg-[#F1F5F5] rounded-3xl">
                <div class="col-5">
                    <h1 class="font-title font-bold text-xl md:text-3xl text-center mb-16 text-black">Wahana Dududu World</h1>
                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div id="alert-border-2" class="flex items-center p-4 mb-4 rounded-xl text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <div class="ms-3 text-sm font-medium">
                                <?= session()->getFlashdata('msg') ?>
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-2" aria-label="Close">
                                <span class="sr-only">Dismiss</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url(); ?>/AuthAPIController/login_action" method="post">
                        <div class="flex flex-col space-y-4">
                            <input type="text" name="username" placeholder="username" class="form-control py-2 px-4 bg-white rounded-lg text-black">
                            <input type="password" name="password" placeholder="password" class="form-control py-2 px-4 bg-white rounded-lg text-black">
                            <button type="submit" class="font-text font-bold bg-[#555A6A] w-40 mt-4 rounded-md text-[#FFFFFF] py-2 mx-auto">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>