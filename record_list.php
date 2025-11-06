<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area App</title>
    <link rel="stylesheet" href="./src/style.css">
</head>

<body>

    <main class="max-w-[1000px] mx-auto py-10 px-50">
        <header>
            <h1 class="text-3xl font-serif font-bold">
                Backend Projects
            </h1>

            <!-- Navigation Toggle -->
            <div class="lg:hidden py-6 text-center">
                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-start bg-gray-800 border border-gray-800 text-white text-sm font-medium rounded-lg shadow-2xs align-middle hover:bg-gray-950 focus:outline-hidden focus:bg-gray-900 dark:bg-white dark:text-neutral-800 dark:hover:bg-neutral-200 dark:focus:bg-neutral-200" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-content-push-to-mini-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-sidebar-content-push-to-mini-sidebar">
                    Open
                </button>
            </div>
            <!-- End Navigation Toggle -->
        </header>

        <!-- Sidebar -->
        <?php include("./sidebar.php") ?>
        <!-- End Sidebar -->



        <section class="bg-gray-100 my-6 p-10 rounded-lg">
            <ol class="flex items-center whitespace-nowrap mb-5">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                        Home
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="./index.php">
                        Area Calculator
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
                    Record Lists
                </li>
            </ol>

            <hr class="border-black">

            <section>
                <?php

                $fileName="record.txt";
                if(!file_exists($fileName)){
                    touch($fileName);
                }

                $fileStream=fopen($fileName,"r");

                while(!feof($fileStream)) :
                    $content=fgets($fileStream);
                    if($content==="\n") continue;
                        
                
                ?>
                
                    <p class="font-mono text-gray-700 my-3 bg-yellow-50 py-2 px-4">
                        <?= $content ?>
                    </p>


                <?php endwhile; ?>

                <a href="./index.php" type="button" class="w-full  justify-center  py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Calculate Again
                </a>
            </section>

        </section>
    </main>

    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>