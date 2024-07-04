<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Log;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition()
    {
        $category = Category::inRandomOrder()->first();
        $subcategory = Subcategory::where('category_id', $category->id)->inRandomOrder()->first();

        // Debug logging
        Log::info('Seeding product with category:', ['category' => $category]);
        Log::info('Seeding product with subcategory:', ['subcategory' => $subcategory]);

        $productData = [];

        switch ($category->category_name) {
            case 'pc-games':
                $productData = [
                    'product_name' => $this->faker->randomElement(['The Witcher 3', 'Cyberpunk 2077', 'Minecraft', 
                                                                   'Fallout 3', 'Assassins Creed 3', 'GTA V', 
                                                                   'Call of Duty 4', 'Crysis 3', 'Age of Empires 3', 
                                                                   'Star Wars: Fallen Order', 'Elden Ring', 
                                                                   'The Elder Scrolls V', 'Wolfenstein', 'Borderlands 2', 
                                                                   'Outlast', 'Amnesia', 'No Mans Sky', 'Rimworld', 'Teraria', 
                                                                   'Tomb Raider', 'Civilization VI', 'The Sims 4', 'Subnautica', 'Destiny 2']),
                    'product_description' => 'This is a PC game. Experience immersive gameplay and stunning graphics.',
                    'product_image' => $this->getRandomProductImage('pc-games'),
                ];
                break;
            
            case 'pc-components':
                if ($subcategory) {
                    switch ($subcategory->sub_category_name) {
                        case 'motherboards':
                            $productData = [
                                'product_name' => $this->faker->randomElement(['ASUS ROG Maximus XIII Hero', 'MSI MPG B550 Gaming Edge WiFi', 'GIGABYTE Z690 AORUS MASTER',
                                                                               'ASRock B450 Steel Legend', 'EVGA Z590 FTW WIFI', 'MSI MAG B560M Mortar WiFi',
                                                                               'ASUS TUF Gaming B660-PLUS WiFi', 'GIGABYTE Z690 AORUS ELITE AX', 'ASRock X570 Phantom Gaming 4',
                                                                               'MSI MEG Z590 ACE', 'ASUS ROG Strix Z590-E Gaming WiFi', 'GIGABYTE B560M AORUS PRO AX', 
                                                                               'EVGA Z590 FTW WiFi', 'ASRock Z690 Taichi', 'MSI MAG X570 TOMAHAWK WiFi',
                                                                               'ASUS Prime Z690-A', 'GIGABYTE B660 AORUS ELITE AX', 'ASRock Z590 Extreme',
                                                                               'MSI MPG Z690 GAMING PRO CARBON WIFI', 'ASUS ROG Maximus XIII Hero','GIGABYTE Z690 AORUS XTREME', 
                                                                               'ASRock X570 Phantom Gaming X', 'MSI MEG Z690 GODLIKE', 'ASUS ROG Strix B660-E Gaming WiFi']),
                                'product_description' => 'High-performance motherboard for your custom PC build.',
                                'product_image' => $this->getRandomProductImage('motherboards'),
                            ];
                            break;
                        
                        case 'graphics-cards':
                            $productData = [
                                'product_name' => $this->faker->randomElement(['NVIDIA RTX 3080', 'AMD Radeon RX 6800', 'NVIDIA RTX 3090',
                                                                               'AMD Radeon RX 6900 XT', 'NVIDIA RTX 3070', 'AMD Radeon RX 6700 XT',
                                                                               'NVIDIA RTX 3060 Ti', 'AMD Radeon RX 6600 XT', 'NVIDIA RTX 2080 Ti',
                                                                               'AMD Radeon RX 5700 XT', 'NVIDIA RTX 3060', 'AMD Radeon RX 6500 XT',
                                                                               'NVIDIA GTX 1660 Super', 'AMD Radeon RX 5600 XT', 'NVIDIA GTX 1650 Super',
                                                                               'AMD Radeon RX 5500 XT', 'NVIDIA RTX 3050 Ti', 'AMD Radeon RX 580',
                                                                               'AMD Radeon RX 480', 'NVIDIA GTX 1050 Ti', 'NVIDIA GTX 1060',
                                                                               'AMD Radeon RX Vega 64', 'NVIDIA GTX 960', 'AMD Radeon RX 460']),
                                'product_description' => 'Powerful graphics card for high-end gaming.',
                                'product_image' => $this->getRandomProductImage('graphics-cards'),
                            ];
                            break;

                        case 'processors':
                            $productData = [
                                'product_name' => $this->faker->randomElement(['Intel i9-11900K', 'AMD Ryzen 9 5950X', 'Intel i7-12700K',
                                                                               'AMD Ryzen 7 5800X', 'Intel i5-12600K', 'AMD Ryzen 5 5600X',
                                                                               'Intel i9-12900K', 'AMD Ryzen 9 5900X', 'Intel i7-11700K',
                                                                               'AMD Ryzen 7 5700G', 'Intel i5-11600K', 'AMD Ryzen 5 5600G',
                                                                               'Intel i9-10900K', 'AMD Ryzen 9 3950X', 'Intel i7-10700K',
                                                                               'AMD Ryzen 7 3700X', 'Intel i5-10600K', 'AMD Ryzen 5 3600X',
                                                                               'Intel i9-9900K', 'AMD Ryzen 9 3900X', 'Intel i7-9700K',
                                                                               'AMD Ryzen 7 2700X', 'Intel i5-9600K', 'AMD Ryzen 5 2600X']),
                                'product_description' => 'Top-tier processor for seamless multitasking and gaming.',
                                'product_image' => $this->getRandomProductImage('processors'),
                            ];
                            break;
                        
                        case 'ram':
                            $productData = [
                                'product_name' => $this->faker->randomElement(['Corsair Vengeance LPX 16GB', 'G.Skill Ripjaws V 32GB', 'Crucial Ballistix 8GB',
                                                                               'Team T-Force Dark Za 32GB', 'Kingston HyperX Fury 8GB', 'ADATA XPG Spectrix D41 4GB',
                                                                               'Patriot Viper Steel 16GB', 'Corsair Dominator Platinum RGB 32GB', 'G.Skill Trident Z RGB 16GB',
                                                                               'TeamGroup T-Force Delta RGB 32GB', 'Crucial Ballistix Max RGB 8GB', 'HyperX Predator RGB 32GB',
                                                                               'Corsair Vengeance RGB Pro 16GB', 'Patriot Viper 4 Blackout 8GB', 'G.Skill Sniper X 16GB',
                                                                               'ADATA XPG Spectrix D60G 32GB', 'Team T-Force Vulcan Z 4GB', 'Kingston HyperX Fury RGB 32GB',
                                                                               'Crucial Ballistix RGB 4GB', 'Corsair Vengeance LPX 32GB', 'G.Skill Ripjaws V 8GB',
                                                                               'TeamGroup T-Create Classic 16GB', 'Patriot Viper Steel RGB 8GB', 'ADATA XPG Spectrix D50 32GB']),
                                'product_description' => 'High-speed RAM to boost your PC performance.',
                                'product_image' => $this->getRandomProductImage('ram'),
                            ];
                            break;
                    }
                }
                break;

            case 'console-games':
                if ($subcategory) {
                    switch ($subcategory->sub_category_name) {
                        case 'playstation':
                            $productData = [
                                'product_name' => $this->faker->randomElement(['God of War', 'Marvels Spider-Man 2', 'The Last of Us', 
                                                                               'Horizon: Zero Dawn', 'Ghost of Tsushima', 'Final Fantasy 7', 
                                                                               'Uncharted 4', 'Ratchet & Clank', 'Hogwarts Legacy', 
                                                                               'Sackboy', 'Returnal', 'inFamous: Second Son', 
                                                                               'Detroit: Become Human', 'The Last Guardian', 'Bloodborne', 
                                                                               'Shadow of the Colossus', 'Little Big Planet 3', 'Gran Turismo 7', 
                                                                               'Stray', 'Baldurs Gate 3', 'Battlefield 2042', 
                                                                               'Mortal Kombat 11', 'ARK: Survival Evolved', 'Rise of the Ronin']),
                                'product_description' => 'Exclusive PlayStation game with rich storytelling and gameplay.',
                                'product_image' => $this->getRandomProductImage('playstation-games'),
                            ];
                            break;

                        case 'xbox':
                            $productData = [
                                'product_name' => $this->faker->randomElement(['Halo Infinite', 'Forza Horizon 5', 'Gears 5', 
                                                                               'Sea of Thieves', 'Fable 3', 'State of Decay 3', 
                                                                               'The Outer Worlds', 'Hellblade: Senuas Sacrifice', 'Starfield', 
                                                                               'FIFA 2023', 'Psychonauts 2', 'Sniper Elite 4', 
                                                                               'Rainbow Six Siege', 'Back 4 Blood', 'Valorant', 
                                                                               'Farming Simulator 15', 'Diablo 3', 'Lords of the Fallen', 
                                                                               'Lego Star Wars', 'Guardians of the Galaxy', 'Cities Skylines', 
                                                                               'Control', 'Dead Space', 'Deathloop']),
                                'product_description' => 'Exciting Xbox game with high-quality graphics and action.',
                                'product_image' => $this->getRandomProductImage('xbox-games'),
                            ];
                            break;
                    }
                }
                break;

            case 'boardgames':
                $productData = [
                    'product_name' => $this->faker->randomElement(['Settlers of Catan', 'Ticket to Ride', 'Pandemic',
                                                                   'Carcassonne', 'Codenames', 'Azul',
                                                                   'Splendor', '7 Wonders', 'Wingspan',
                                                                   'Root', 'Scythe', 'Terraforming Mars',
                                                                   'Gloomhaven', 'Dominion', 'Betrayal at House on the Hill',
                                                                   'Catan: Cities & Knights', 'Kingdomino', 'Sushi Go!', 
                                                                   'The Crew: The Quest for Planet Nine', 'Everdell', 'Dixit',
                                                                   'Gizmos', 'Love Letter', 'On Mars']),
                    'product_description' => 'Check out this new boardgame. Perfect for family and friends.',
                    'product_image' => $this->getRandomProductImage('board-games'),
                ];
                break;

            default:
                $productData = [
                    'product_name' => $this->faker->word,
                    'product_description' => $this->faker->sentence,
                    'product_image' => $this->faker->imageUrl(150, 100),
                ];
                break;
        }

        return array_merge($productData, [
            'price' => $this->faker->randomFloat(2, 10, 200),
            'stock_quantity' => $this->faker->numberBetween(1, 100),
            'category_id' => $category->id,
            'subcategory_id' => $subcategory ? $subcategory->id : null,
        ]);
    }
    
    private function getRandomProductImage($categorySlug)
    {
        // Define specific images for each category/subcategory
        switch ($categorySlug) {
            case 'pc-games':
                return $this->faker->randomElement([
                    'https://cdn.thegamesdb.net/images/original/boxart/front/9302-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/14517-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/50424-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/86-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/33255-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/25833-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/20952-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/9598-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/648-2.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/750-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/62909-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/91060-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/817-2.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/5647-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/17769-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/70080-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/24778-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/2642-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/65101-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/18751-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/50624-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/117154-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/34835-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/36612-1.jpg'
                ]);
            case 'motherboards':
                return $this->faker->randomElement([
                    'https://i.pinimg.com/736x/df/1a/5d/df1a5d0d01e04c8563cb1e584b6af28f.jpg',
                    'https://i.pinimg.com/564x/3e/0e/ae/3e0eae9e54d63ba721e837574a6fb0ef.jpg',
                    'https://i.pinimg.com/564x/c2/5e/3c/c25e3c44b181fe07495894c156d8b359.jpg',
                    'https://i.pinimg.com/564x/05/7b/b5/057bb5448f5c6ea75f5a924ebf835956.jpg',
                    'https://i.pinimg.com/564x/ce/0d/3d/ce0d3d755c1e67da9c51f96634c6b138.jpg',
                    'https://i.pinimg.com/564x/11/96/f8/1196f89f281404c8b443c9cc29a3349e.jpg',
                    'https://i.pinimg.com/564x/b9/61/4b/b9614b3ee7203e8eff9e69783119ecf4.jpg',
                    'https://i.pinimg.com/564x/b9/57/86/b95786d47647b791151ed469c1d656bd.jpg',
                    'https://i.pinimg.com/736x/6c/5b/b7/6c5bb7eb0c42a9ba2f5ea52050520fb0.jpg',
                    'https://i.pinimg.com/564x/c1/5c/e1/c15ce18875a05ac79b98c8a074e50d39.jpg',
                    'https://i.pinimg.com/564x/01/6f/35/016f35b675ab7ca423919bd58b105f21.jpg',
                    'https://i.pinimg.com/564x/e2/e2/a0/e2e2a0028058701217d4efebe1e50842.jpg',
                ]);
            case 'graphics-cards':
                return $this->faker->randomElement([
                    'https://i.pinimg.com/564x/44/2f/87/442f87af982565628a4d4cb2cd079c0f.jpg',
                    'https://i.pinimg.com/564x/7b/1f/00/7b1f00e937e40806021e6bc10df9d777.jpg',
                    'https://i.pinimg.com/564x/15/30/d3/1530d3c72925fe415976930a00bf8206.jpg',
                    'https://s13emagst.akamaized.net/products/68125/68124693/images/res_a7e7057373f398ba37da575cbdae23a9.jpg',
                    'https://s13emagst.akamaized.net/products/53518/53517452/images/res_44afc0ff5bcc4a7527fd6073f0200524.jpg',
                    'https://s13emagst.akamaized.net/products/54964/54963824/images/res_7acaa34773580c431773f001df58cb9f.jpg',
                ]);
            case 'processors':
                return $this->faker->randomElement([
                    'https://s13emagst.akamaized.net/products/61980/61979090/images/res_337544077aa67b6f37d3c48cc0a18e5e.jpg',
                    'https://s13emagst.akamaized.net/products/61980/61979093/images/res_b4d137144445ace34b03e0b7116186c6.jpg',
                    'https://s13emagst.akamaized.net/products/52087/52086115/images/res_4b0474ac12d7b5f60a01500a92cf6256.jpg',
                    'https://s13emagst.akamaized.net/products/53898/53897992/images/res_73dd7c7ec8faab155c232258b9b26eea.jpg',
                    'https://s13emagst.akamaized.net/products/55095/55094716/images/res_646078caa51c58fcde8abbeb5e2c1762.jpg',
                    'https://s13emagst.akamaized.net/products/33357/33356156/images/res_d9ff1a1c7b4211edab2dcdf5bafe7121.jpg',
                ]);
            case 'ram':
                return $this->faker->randomElement([
                    'https://s13emagst.akamaized.net/products/18939/18938029/images/res_77d1afe00da5657bbe888337e3f9dc31.jpg',
                    'https://s13emagst.akamaized.net/products/35003/35002858/images/res_d182cf17916b2f0de77dbf417b17fff8.jpg',
                    'https://s13emagst.akamaized.net/products/39295/39294442/images/res_62c9874550df27e643eafac1a3d58814.jpg',
                    'https://s13emagst.akamaized.net/products/60086/60085084/images/res_9a44520c441834248098c38d2e188496.jpg',
                    'https://s13emagst.akamaized.net/products/41111/41110625/images/res_bce53ab7e73d14236f68ba17c1fd44ea.jpg',
                    'https://s13emagst.akamaized.net/products/23320/23319212/images/res_affb83402bdd821bacd465b8aa61e7c5.jpg',
                    'https://s13emagst.akamaized.net/products/57386/57385993/images/res_f516d79ab1d1ed965447f9e2511a1bcf.jpg',
                    'https://s13emagst.akamaized.net/products/16522/16521170/images/res_a053dad7bbae6a878ac5ef44fdb9829d.jpg',
                ]);
            case 'playstation-games':
                return $this->faker->randomElement([
                    'https://cdn.thegamesdb.net/images/original/boxart/front/87886-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/54488-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/101266-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/29523-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/74666-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/103619-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/21416-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/29275-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/77448-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/73752-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/77207-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/19565-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/48142-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/34990-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/20960-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/52796-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/85734-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/97682-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/106648-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/119851-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/96455-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/81457-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/50033-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/121549-1.jpg',
                ]);
            case 'xbox-games':
                return $this->faker->randomElement([
                    'https://cdn.thegamesdb.net/images/original/boxart/front/60180-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/87604-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/118110-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/52211-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/111258-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/52681-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/62529-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/54139-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/87602-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/104912-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/92425-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/78077-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/92512-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/93762-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/72904-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/29555-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/17651-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/25812-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/87599-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/116824-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/64130-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/105032-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/104730-1.jpg',
                    'https://cdn.thegamesdb.net/images/original/boxart/front/12773-1.jpg',
                ]);
            case 'board-games':
                return $this->faker->randomElement([
                    'https://i.pinimg.com/564x/6d/06/7a/6d067a867e1808a362d7a291de93eace.jpg',
                    'https://i.pinimg.com/564x/32/63/4f/32634f66472d390b6e27c0d777ae33ad.jpg',
                    'https://i.pinimg.com/736x/f7/ec/98/f7ec98c80c6fec101c36fb6fd94274b6.jpg',
                    'https://i.pinimg.com/564x/b3/e9/ba/b3e9ba144ed74a9b4e36b1b75567c998.jpg',
                    'https://i.pinimg.com/564x/f9/b6/b5/f9b6b5ddb8eb7eeede66a253c1cee62a.jpg',
                    'https://i.pinimg.com/736x/d5/62/22/d5622296134142f4e034486fecf2a5a9.jpg',
                    'https://i.pinimg.com/564x/00/24/e4/0024e4f5640265651ad691367897f33b.jpg',
                    'https://i.pinimg.com/564x/45/2e/b3/452eb365b224e2bf9ed7082689b3fcf1.jpg',
                    'https://i.pinimg.com/564x/d6/e2/27/d6e227c553b191b87e97771abc40c475.jpg',
                    'https://i.pinimg.com/564x/68/c2/28/68c228aaf38db9bd538d062eed914a6e.jpg',
                    'https://i.pinimg.com/736x/b9/e6/83/b9e683a545d66b71f512233cd95d5280.jpg',
                    'https://i.pinimg.com/564x/d7/2f/c3/d72fc3a72f8373142f00bb064ab4c775.jpg',
                    'https://i.pinimg.com/564x/e9/97/2d/e9972d524a6c3562277cbd44f30f1e45.jpg',
                    'https://i.pinimg.com/564x/e3/bb/ef/e3bbef5e32eeea79483e91136a7e56f4.jpg',
                    'https://i.pinimg.com/564x/7a/df/24/7adf24e2144b8ccdbfdbce8f8cc6c993.jpg',
                    'https://i.pinimg.com/564x/65/02/32/65023202b10eff2edfdf9a52c68bbc27.jpg',
                    'https://i.pinimg.com/736x/5f/b7/5f/5fb75fa32b48ca16995c3cfadc9047a3.jpg',
                    'https://i.pinimg.com/564x/20/bb/8e/20bb8e67ef4a6b3e193e9c4ab379d027.jpg',
                    'https://i.pinimg.com/564x/00/f9/92/00f99217ac99ec2a05c4434ded598bb1.jpg',
                    'https://i.pinimg.com/736x/6a/ed/86/6aed868276cecfdc049ced81780d7094.jpg',
                    'https://i.pinimg.com/564x/38/00/ef/3800efce500b6d96e69b075e67500aeb.jpg',
                    'https://i.pinimg.com/736x/03/ce/39/03ce3932fadcecb7591b55da9f64e9aa.jpg',
                    'https://i.pinimg.com/564x/42/68/c3/4268c348217d5635cba0fb7ef9d0ffc7.jpg',
                    'https://i.pinimg.com/564x/40/20/37/4020377aca5f7be8e5b31e1a2fc8e221.jpg',
                ]);
            default:
                return 'https://example.com/default-product-image.jpg';
        }
    }
}
