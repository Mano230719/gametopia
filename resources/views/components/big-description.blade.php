<div class="container mx-auto my-12">
    <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-12">
        {{-- Gamer Shop Section --}}
        <div class="col-span-1 bg-gray-200 p-6 rounded-3xl border border-gray-300 shadow-inner">
            <div class="flex items-center">
                <i class="fa-solid fa-money-bill-1-wave text-red-500 text-3xl mr-3 mt-3"></i>
                <h1 class="text-2xl font-bold mt-2">Gamer Shop</h1>
            </div>
            <hr class="border-red-400 border-t-2 rounded-xl my-8">
            <p class="text-justify mt-2">
                In this website you can find a shop for all your gaming needs. As mentioned above, you have many
                genres to explore, such as games for PCs, the classical experience, as well as games for consoles,
                for those who want a wider screen to take in the view, and even games for handhelds, for those who
                need to game on the run,the choice is yours to make! Of course, you can have all the games in the
                world, but it would mean nothing if you have nothing to run them with. So our store also provides
                PC components as well as consoles and handhelds at a reasonable price for those in need.
                Lastly, if none of the above interests you, our store also offers board games, for a virtual-free,
                hands-on exprerience, which can be either relaxing and cooperative, or completely engaging and
                competitive.
                Be sure to check it out!
            </p>
        </div>

        <div class="col-span-1 flex items-center justify-center">
            <img src="{{ asset('images/gaming.png') }}" alt="Gaming Shop" class="hidden lg:block">
        </div>

        {{-- Forum Section --}}
        <div class="col-span-1 flex items-center justify-center">
            <img src="{{ asset('images/forum.png') }}" alt="Forum" class="hidden lg:block">
        </div>

        <div class="col-span-1 bg-gray-200 p-6 rounded-3xl border border-gray-300 shadow-inner">
            <div class="flex items-center">
                <i class="fa-solid fa-comments text-red-500 text-3xl mr-3 mt-2"></i>
                <h1 class="text-2xl font-bold mt-2">Forum</h1>
            </div>
            <hr class="border-red-400 border-t-2 rounded-xl my-8">
            <p class="text-justify mt-2">
                We also provide a forum where you can ask questions if you are stuck in a game, if you want quick
                answers to your gaming problems or if you simply want to debate gaming lore or speculations. Also, this
                forum has a section for PC building and setup, where you can look for and ask about the best PC builds
                and setups out there, about prices and upcoming hardware, and pretty much anything to suit your needs.
                Of course, there is also a section for board games, where you can ask people how to play certain games,
                find out about new incoming stuff and perhaps even arrange meetings so you can play together with
                likeminded people, who knows you might even make a few friends along the way. All that is required is to
                remain respectful and mindful of other people's boundaries, so no harrasment and trash talking, ok?
                We await you with open arms!
            </p>
        </div>

        {{-- Blog Section --}}
        <div class="col-span-1 bg-gray-200 p-6 rounded-3xl border border-gray-300 shadow-inner">
            <div class="flex items-center">
                <i class="fa-regular fa-newspaper text-red-500 text-3xl mr-3 mt-2"></i>
                <h1 class="text-2xl font-bold mt-2">Blog</h1>
            </div>
            <hr class="border-red-400 border-t-2 rounded-xl my-8">
            <p class="text-justify mt-2">
                Our blog is meant to keep you up to date with new developments of the gaming industry. It is similar to
                our forum, but has a more direct and focused approach on things. Here you can find out about new
                hardware development and pricing for your PC, games' statuses from alpha to release, new board games and
                expansions, upcoming events such as GamesCon preparations and development, and many more aspects,
                opinions and statistics of the gaming world. Its purpose is informational only, and it has no influence
                over our pricing and offers, it is here just to keep you posted and able to make more informed decisions
                on your purchases. With all that said, come and take a look at the latest news!
            </p>
        </div>

        <div class="col-span-1 flex items-center justify-center">
            <img src="{{ asset('images/blog.png') }}" alt="Blog" class="hidden lg:block">
        </div>
    </div>
</div>
