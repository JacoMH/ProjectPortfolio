<x-visitor class='min-w-[450px]'>
    <div class=" invisible sm:visible absolute inset-0 -z-10 h-full w-full bg-white">
        <div class="absolute inset-0 bg-[radial-gradient(circle_800px_at_100%_200px,rgba(101,126,235,0.5),transparent)]"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_bottom,transparent,white 80%)]"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:6rem_4rem]"></div>
    </div>
    <section class='flex flex-col min-h-screen justify-center sm:h-screen px-4 py-8 sm:py-0 overflow-y-auto' >
        <div class='text-center'>
            <section class='flex sm:flex-row flex-col justify-center sm:mr-10 mt-13'>
                <div class=' align-middle text-left ml-12 text-lg leading-relaxed text-gray-700 content-center max-w-[400px]'>
                    <div class='text-5xl text-gray-700 mb-12 mt-[60px]'>
                        Hello, my name is <span class='text-blue-500'>Jacob Heyes.</span>
                    </div>
                    I am
                    a 2nd year <span class='text-blue-500'>Software Engineering</span> student studying at <a class='text-blue-500 hover:scale-105 hover:underline' href='https://www.shu.ac.uk/' target='_blank' rel="noreferrer noopener">Sheffield Hallam University.</a>
                    This is a <span class='text-blue-500'>self-made</span> website to display my knowledge of the field 
                    and what projects I have been working, or have worked on.

                    <div class='mt-9 flex self-center'>
                        <a href="{{ url('portfolio')}}" class="relative inline-flex items-center justify-center p-10 px-6 py-3 overflow-hidden font-medium text-blue-600 transition duration-300 ease-out border-2 border-blue-600 rounded-full shadow-md group">
                            <span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-blue-600 group-hover:translate-x-0 ease">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </span>
                            <span class="absolute flex items-center justify-center w-full h-full text-blue-500 transition-all duration-300 transform group-hover:translate-x-full ease text-xl">Portfolio</span>
                            <span class="relative invisible">Portfolio</span>
                            </a>
                    </div>
                </div>

                <!-- switch to another image -->
                <div class="flex self-center">
                    <img class='max-w-[350px] sm:ml-[200px] m-10 rounded-lg shadow-lg ring-4 ring-blue-500 ring-opacity-50 ring-offset-2 ring-offset-blue-200 hover:ring-opacity-100 hover:ring-offset-4 hover:scale-105 transition-all duration-300 ease-in-out' src='https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg'></img>
                </div>
            </section>
    
        </div>
    </section>
</x-visitor>