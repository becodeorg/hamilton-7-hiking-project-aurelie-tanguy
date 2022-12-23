<?php
    ob_start();
?>

<div id="last-users">
                <h1 class="font-bold py-4 uppercase">MY HIKES</h1>
                <div class="overflow-x-scroll">
                    <table class="w-full whitespace-nowrap">
                        <thead class="bg-black/60">
                            <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
                            <th class="text-left py-3 px-2">data creation</th>
                            <th class="text-left py-3 px-2">distance</th>
                            <th class="text-left py-3 px-2">duration</th>
                            <th class="text-left py-3 px-2">elevation gain</th>
                            <th class="text-left py-3 px-2 rounded-r-lg">day walk</th>
                        </thead>
                        <tr class="border-b border-gray-700">
                            <td class="py-3 px-2 font-bold">
                                <div class="inline-flex space-x-3 items-center">
                                    Thai Mei
                                </div>
                            </td>
                            <td class="py-3 px-2">dd/mm/yyyy</td>
                            <td class="py-3 px-2">x km</td>
                            <td class="py-3 px-2">xxHxx</td>
                            <td class="py-3 px-2">xx %</td>
                            <td class="py-3 px-2">dd/mm/yyyy</td>
                        </tr>
                    </table>
                </div>
            </div>
            
<?php
    $content = ob_get_clean();