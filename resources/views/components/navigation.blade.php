<section class='flex flex-row justify-between'>
            <div class='p-3 max-w-[700px] pr-4'>
                <a href='{{ url('/') }}' class='{{ request()->is('/') ? 'bg-indigo-200' : '' }}'>Welcome</a>
                <a href='{{ url('portfolio') }}' class='{{ request()->is('portfolio', 'projects/gif-maker', 'projects/EER', 'projects/Social-Media') ? 'bg-indigo-200' : '' }}'>Portfolio</a>
                <a href='{{ url('skills')}}' class='{{ request()->is('skills') ? 'bg-indigo-200' : '' }}'>Skills</a>
                <a href='{{ url('contact')}}' class='{{ request()->is('contact') ? 'bg-indigo-200' : '' }}'>Contact</a>
            </div>
</section>


