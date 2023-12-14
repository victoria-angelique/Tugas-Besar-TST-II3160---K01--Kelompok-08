<div class="w-screen py-4 bg-[#FFFFFF]">
    <div class="flex flex-row justify-between mx-4 md:mx-8">
        <div class="flex flex-row">
            <a href="https://imgbb.com/" class=" w-[10%] h-[10%] md:w-[10%] md:h-[10%]"><img src="https://i.ibb.co/F8LwrDC/Screenshot-2023-12-13-at-14-09-54-removebg-preview.png" alt="logo" border="0" class=""></a>
            <h1 class="font-title my-auto ml-4 text-2xl hidden md:flex text-black">Wahana Dududu World</h1>
        </div>
        <?php if (session()->get('isLoggedIn')) : ?>
        <div class="flex flex-row space-x-2 md:space-x-8">
            <button class="font-text font-semibold bg-[#FFFFFF] px-4 md:px-8 rounded-xl text-sm md:text-lg text-black py-2 my-auto hover:bg-[#F1F5F5]">home</button>
            <form action="/logout" method="GET" class = "my-auto">
                <button class="font-text font-semibold bg-[#FFFFFF] px-4 md:px-8 rounded-xl text-sm md:text-lg text-black py-2 hover:bg-[#F1F5F5]">sign out</button>
            </form>
        </div>
        <?php endif; ?>
    </div>
</div>
<script>
</script>