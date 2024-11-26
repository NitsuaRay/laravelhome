<section class="text-blue body-font flex-grow" id="home">
    <div class="container mx-auto flex px-24 py-12 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="sm:text-4xl text-5xl text-dark lg:text-6xl mb-4 font-bold">Welcome To</h1>
            <h2 class="mb-7 text-4xl lg:text-5xl sm:text-2xl font-bold text-primary">Home<span class="text-secondary">Pro</span></h2>
            <p class="mb-8 leading-relaxed text-base">"Discover reliable home service pros with ease on our platform,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Simplify your search and get your home needs sorted hassle-free!"</p>
            <div class="flex justify-center">
                <button class="inline-flex text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-secondary rounded text-lg"><a href="{{ route('profile.edit') }}">Book Now</a></button>
            </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('backend/assets/images/landing.png') }}">
        </div>
    </div>
</section>