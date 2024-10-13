<x-visitor>
    @vite('resources\js\filter.js');
    Timeline
    <label for="timelineDropdown" name='title'></label>

    <select name="timelineDropdown" id="timelineDropdown" onChange="saveSelection()">
    <option value="Latest" selected>Latest</option>
    <option value="Oldest">Oldest</option>
    </select>
    
        
    <!-- add each project here, change colour of timeline bar to blue -->
    <section>
        <div class='flex justify-center p-12'>
            <ol id='timeline' class="relative border-s border-blue-500 dark:border-blue-700 flex flex-col">                  
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-700 dark:border-blue-900 dark:bg-blue-700 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in Tailwind CSS</h3>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg></a>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-700 dark:border-blue-900 dark:bg-blue-700 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
                </li>
                <li class="ms-4 mb-10">
                    <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-700 dark:border-blue-900 dark:bg-blue-700 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2022</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind CSS</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web components and interactive elements built on top of Tailwind CSS.</p>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-blue-500 rounded-full mt-1.5 -start-1.5 border border-blue-700 dark:border-blue-900 dark:bg-blue-700 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out"></div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2022</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
                </li>
                
                
            </ol>
        </div>
    </section>

    <script>  
        
             // Function to save selected value to localStorage
             function saveSelection() {
                const selectedOption = document.getElementById('timelineDropdown').value;
                localStorage.setItem('selectedTimeline', selectedOption);
            }
        
            // Function to load saved value from localStorage
            function loadSelection() {
                const savedOption = localStorage.getItem('selectedTimeline');
                if (savedOption) {
                    document.getElementById('timelineDropdown').value = savedOption;
                }
            }

        $(document).ready(function() {


            // Function to update the timeline based on selected option
            function updateTimeline(order) {
                loadSelection();
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