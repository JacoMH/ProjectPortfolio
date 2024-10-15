<x-visitor>
    <div class='mr-auto ml-10'>
        <label for="timelineDropdown" name='title'></label>

        <select name="timelineDropdown" id="timelineDropdown" onChange="saveSelection()">
        <option value="Latest" selected>Latest</option>
        <option value="Oldest">Oldest</option>
        </select>
    </div>  
    <!-- add each project here, change colour of timeline bar to blue -->
    <section>
        <div class='flex justify-center p-12'>
            <ol id='timeline' class="relative border-s border-blue-500 dark:border-blue-700 flex flex-col">                  
                <li class="mb-10 ms-4 flex">
                    <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-700 dark:border-blue-900 dark:bg-blue-700 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out"></div>
                    <div>
                        <img class=' mx-10 my-3 max-w-[350px] rounded-lg shadow-lg ring-4 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out' src="{{asset('gif-maker/Screenshot 2024-07-29 181801.png')}}"></img>
                    </div>

                    <div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">August 2024</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">GIF Maker</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">A Simple C# tool I developed when refining my skills to create a gif out of images imported, includes a friendly user interface.</p>
                        <a href="{{url('/projects/gif-maker')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Project <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg></a>
                    </div>
                </li>
                <li class="mb-10 ms-4 flex">
                    <div>
                        <img class=' mx-10 my-3 max-w-[350px] rounded-lg shadow-lg ring-4 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out' src='{{asset('EER/Screenshot 2024-04-18 171126.png')}}'></img>
                    </div>

                    <div>
                        <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-700 dark:border-blue-900 dark:bg-blue-700 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">May 2024</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Energy Efficiency Rating Of Residential Buildings</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">My first project built within a team include more info here.</p>
                        <a href="{{url('/projects/EER')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Project <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg></a>
                    </div>
                </li>
                <li class="ms-4 mb-10 flex">

                    <div>
                        <img class=' mx-10 my-3 max-w-[350px] rounded-lg shadow-lg ring-4 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out' src='{{asset('Social-Media\User Profile Page.png')}}'></img>
                    </div>

                    <div>
                        <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-700 dark:border-blue-900 dark:bg-blue-700 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">May 2024</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Social Media Platform</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">In my first large scale project, I built a social media platform using just PHP, CSS and some JavaScript. No libraries or frameworks were used.</p>
                        <a href="{{url('/projects/Social-Media')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Project <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg></a>
                    </div>
                </li>
                <li class="mb-10 ms-4 flex">
                    <div>
                        <img class=' mx-10 my-3 max-w-[350px] rounded-lg shadow-lg ring-4 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out' src='https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg'></img>
                    </div>
                    
                    <div>
                        <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-700 dark:border-blue-900 dark:bg-blue-700 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">January 2024</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Other C# project i forgot what i did for it</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Include details here when you find out.</p>
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Project <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg></a>
                    </div>
                </li>
                <li class="mb-10 ms-4 flex">
                    <div>
                        <img class=' mx-10 my-3 max-w-[350px] rounded-lg shadow-lg ring-4 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out' src='https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg'></img>
                    </div>

                    <div>
                        <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-700 dark:border-blue-900 dark:bg-blue-700 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">January 2024</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">First Web Dev Project</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Show what I did, and compare that to how much better I am now.</p>
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Project <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg></a>
                    </div>
                </li>
                
                
            </ol>
        </div>
    </section>

    <script>  
        

        $(document).ready(function() {


            // Function to update the timeline based on selected option
            function updateTimeline(order) {
                const timeline = $('#timeline');
                
                // Toggle classes based on the selected order
                if (order === 'Latest') {
                    timeline.removeClass('flex-col-reverse').addClass('flex-col');
                } else {
                    timeline.removeClass('flex-col').addClass('flex-col-reverse');
                }
            }

            // Initial load to set timeline order
            updateTimeline('Latest');

            // Event listener for dropdown change
            $('#timelineDropdown').on('change', function() {
                const selectedValue = $(this).val();
                updateTimeline(selectedValue);
            });
        });
    </script>
  </x-visitor>