<?php

ob_start();

?>
<div class="flex w-full p-2">

    <div class="relative mx-auto w-full">
        <a href="/hikes/fiche/<?=$datahike["id"]?>" class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
            <div class="rounded-lg bg-white p-4 shadow">
                <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                    <div class="w-full transform transition-transform duration-500 ease-in-out hover:scale-110">
                        <div class="absolute inset-0 rounded-lg">
                            <img class="rounded-lg" src="https://static.onecms.io/wp-content/uploads/sites/34/2020/08/04/woman-hiking-mountain-getty-0720.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="absolute bottom-0 left-5 mb-3 flex">
                        <p class="flex items-center font-medium text-white shadow-sm">
                            <i class="fa fa-camera mr-2 text-xl text-white"></i>
                            10
                        </p>
                    </div>
                    <div class="absolute bottom-0 right-5 mb-3 flex">
                        <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-heart mr-2 text-2xl text-white"></i>
                        </p>
                    </div>
                    
                    <span class="absolute top-0 right-2 z-10 mt-3 ml-3 inline-flex select-none rounded-sm bg-[#1f93ff] px-2 py-1 text-xs font-semibold text-white"> TAGS </span>
                    <span class="absolute top-0 left-0 z-10 mt-3 ml-3 inline-flex select-none rounded-lg bg-transparent px-3 py-2 text-lg font-medium text-white"> <i class="fa fa-star"></i> </span>
                </div>
            
                <div class="mt-4">
                    <h2 class="line-clamp-1 text-2xl font-medium text-gray-800 md:text-lg" title="New York"><?= $datahike["name"]?></h2>
                </div>
                <div class="mt-4 text-ellipsis overflow-hidden h-20">
                    <p class="line-clamp-1 mt-2 text-lg max-h-full text-ellipsis overflow-hidden text-gray-800"><?= $datahike["description"] ?></p>
                </div>
                <div class="justify-center">
                    <div class="mt-4 flex space-x-3 overflow-hidden rounded-lg px-1 py-1">
                        <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bed mr-2 text-blue-900"></i>
                            <?= $datahike["distance"]?> km
                        </p>
                
                        <p class="flex items-center font-medium text-gray-800">
                            <i class="fa fa-bath mr-2 text-blue-900"></i>
                            <?= $datahike["duration"]?>
                        </p>
                    </div>
                </div>
                <div class="mt-8 grid grid-cols-2">
                    <div class="flex items-center">
                        <div class="relative">
                            <div class="h-6 w-6 rounded-full bg-gray-200 md:h-8 md:w-8"></div>
                            <span class="bg-primary-red absolute top-0 right-0 inline-block h-3 w-3 rounded-full"></span>
                        </div>
                        
                        <p class="line-clamp-1 ml-2 text-gray-800"><?= $datahike["user"]?></p>
                    </div>

                    <?php
                        if (isset($_SESSION["user"]) && ($_SESSION["user"]["role"] == "admin" || $_SESSION["user"]["id"] == $datahike["id_creator"]))
                        {
                    ?>
                    <div class="flex justify-end">
                        <button><i class="fa fa-sms mx-1 rounded-md bg-[#0174E1] py-1 px-3 text-2xl text-white"></i></button>
                        <button><i class="fa fa-phone rounded-md bg-[#0174E1] py-1 px-3 text-2xl text-white"></i></button>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </a>
    </div>
<!-- https://tailwindcomponents.com/component/property-card-real-estate-demo -->

<?php
}
?>
</div>
<?php
    echo $content;
    $content = ob_get_clean();
