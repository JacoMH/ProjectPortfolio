<section class='flex bg-gray-100 shadow-lg p-4 justify-center sm:justify-normal'>
    <div class='flex space-x-6 max-w-[700px] justify-between'>
        <a href='{{ url('/') }}' class='{{ request()->is('/') ? "bg-blue-500 text-white" : "text-gray-700 hover:text-blue-500" }} transition-colors duration-200 px-3 py-2 rounded-md font-semibold'>
            Welcome
        </a>
        <a href='{{ url('portfolio') }}' class='{{ request()->is('portfolio', 'projects/Blog-Platform', 'projects/EER', 'projects/Social-Media', 'projects/gif-maker', 'projects/To-Do-Project') ? "bg-blue-500 text-white" : "text-gray-700 hover:text-blue-500" }} transition-colors duration-200 px-3 py-2 rounded-md font-semibold'>
            Portfolio
        </a>
        <a href='{{ url('skills')}}' class='{{ request()->is('skills') ? "bg-blue-500 text-white" : "text-gray-700 hover:text-blue-500" }} transition-colors duration-200 px-3 py-2 rounded-md font-semibold'>
            Skills
        </a>
        <a href='{{ url('contact')}}' class='{{ request()->is('contact') ? "bg-blue-500 text-white" : "text-gray-700 hover:text-blue-500" }} transition-colors duration-200 px-3 py-2 rounded-md font-semibold'>
            Contact
        </a>
    </div>
</section>
