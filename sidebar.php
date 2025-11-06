<div id="hs-sidebar-content-push-to-mini-sidebar" class=" hs-overlay [--auto-close:lg] hs-overlay-minified:w-13 lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 w-64
                hs-overlay-open:translate-x-0
                -translate-x-full transition-all duration-300 transform
                h-full
                hidden
                overflow-x-hidden
                fixed top-0 start-0 bottom-0 z-60
                bg-white border-e border-gray-200 dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full ">
        <!-- Header -->
        <header class="py-4 px-2  flex justify-between items-center gap-x-2">

            <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80 dark:text-white hs-overlay-minified:hidden" href="#" aria-label="Brand">My App</a>

            <div class="lg:hidden">
                <!-- Close Button -->
                <button type="button" class="flex justify-center items-center gap-x-3 size-6 bg-white border border-gray-200 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200" data-hs-overlay="#hs-sidebar-content-push-to-mini-sidebar">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
                <!-- End Close Button -->
            </div>
            <div class="hidden lg:block">
                <!-- Toggle Button -->
                <button type="button" class="flex justify-center items-center flex-none gap-x-3 size-9 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-content-push-to-mini-sidebar" aria-label="Minify navigation" data-hs-overlay-minifier="#hs-sidebar-content-push-to-mini-sidebar">
                    <svg class="hidden hs-overlay-minified:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="3" rx="2" />
                        <path d="M15 3v18" />
                        <path d="m8 9 3 3-3 3" />
                    </svg>
                    <svg class="hs-overlay-minified:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="3" rx="2" />
                        <path d="M15 3v18" />
                        <path d="m10 15-3-3 3-3" />
                    </svg>
                    <span class="sr-only">Navigation Toggle</span>
                </button>
                <!-- End Toggle Button -->
            </div>
        </header>
        <!-- End Header -->

        <!-- Body -->
        <nav class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <div class=" pb-0 px-2  w-full flex flex-col flex-wrap">
                <ul class="space-y-1">
                    <li>
                        <a class="min-h-[36px] flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-white" href="./index.php">
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                            <span class="hs-overlay-minified:hidden">Home</span>
                        </a>
                    </li>


                    <!-- Star Area Calculate Side bar -->


                    <li class="hs-accordion" id="users-accordion">
                        <button type="button" class=" hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200" aria-expanded="true" aria-controls="users-accordion-collapse-1">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4 " stroke-linecap="round" stroke-linejoin="round">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                            </svg>


                            <span class="hs-overlay-minified:hidden">Area Calculate</span>

                            <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="users-accordion-collapse-1" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="users-accordion">
                            <ul class="hs-accordion-group pt-1 ps-7 space-y-1" data-hs-accordion-always-open>
                                <li class="hs-accordion" id="users-accordion-sub-1">
                                    <a href="./area.php" type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200" aria-expanded="true" aria-controls="users-accordion-sub-1-collapse-1">
                                        Area Calculator
                                    </a>


                                </li>

                                <li class="hs-accordion" id="users-accordion-sub-2">
                                    <a href="./record_list.php" type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200" aria-expanded="true" aria-controls="users-accordion-sub-2-collapse-1">
                                        All Area Record Lists
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Area Calculate Side bar -->


                    <!-- Star Exchange Calculate Side bar -->
                    <li>
                        <a class="min-h-[36px] w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200" href="#">
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                <line x1="16" x2="16" y1="2" y2="6" />
                                <line x1="8" x2="8" y1="2" y2="6" />
                                <line x1="3" x2="21" y1="10" y2="10" />
                                <path d="M8 14h.01" />
                                <path d="M12 14h.01" />
                                <path d="M16 14h.01" />
                                <path d="M8 18h.01" />
                                <path d="M12 18h.01" />
                                <path d="M16 18h.01" />
                            </svg>
                            <span class="text-nowrap hs-overlay-minified:hidden">
                                Exchange Rate
                                <span class="ms-auto py-0.5 px-1.5 inline-flex items-center gap-x-1.5 text-xs bg-gray-200 text-gray-800 rounded-full dark:bg-neutral-600 dark:text-neutral-200">New</span>
                            </span>
                        </a>
                    </li>
                    <!-- End Exchange Calculate Side bar -->


                    <li>
                        <a class="min-h-[36px] w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200" href="#">

                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                            <span class="hs-overlay-minified:hidden">Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Body -->
    </div>
</div>