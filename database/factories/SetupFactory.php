<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Setup;
use App\Models\SetupCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setup>
 */
class SetupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Setup::class;

    public function definition(): array
    {
        $category = SetupCategory::inRandomOrder()->first();

        $setupData = [];

        switch ($category->setup_category_name) {
            case 'gaming-setups':
                $setupData = [
                    'setup_name' => $this->faker->randomElement(['Ultimate Gaming Setup', 'Gamer\'s Paradise', 'Battlestation X', 'Dream Gaming Rig']),
                    'motherboard' => $this->faker->randomElement(['ASUS ROG Strix Z590-E Gaming', 'MSI MPG B550 Gaming Carbon WiFi', 'GIGABYTE Z490 AORUS ULTRA']),
                    'graphics_card' => $this->faker->randomElement(['NVIDIA GeForce RTX 3080', 'AMD Radeon RX 6800 XT', 'NVIDIA GeForce RTX 3070']),
                    'processor' => $this->faker->randomElement(['Intel Core i9-11900K', 'AMD Ryzen 9 5900X', 'Intel Core i7-11700K']),
                    'ram' => $this->faker->randomElement(['Corsair Vengeance LPX 32GB (2 x 16GB) DDR4-3200', 'G.SKILL Ripjaws V Series 32GB (2 x 16GB) DDR4-3600', 'Crucial Ballistix 32GB (2 x 16GB) DDR4-3200']),
                ];
                break;
            case 'home-office-setups':
                $setupData = [
                    'setup_name' => $this->faker->randomElement(['Minimalist Home Office', 'Productivity Haven', 'Zen Workspace']),
                    'motherboard' => $this->faker->randomElement(['ASUS Prime B550M-A/CSM', 'GIGABYTE B450 AORUS M', 'MSI B450 TOMAHAWK MAX']),
                    'graphics_card' => $this->faker->randomElement(['NVIDIA GeForce GTX 1650', 'AMD Radeon RX 550', 'NVIDIA GeForce GTX 1660 Ti', 'AMD Radeon RX 560']),
                    'processor' => $this->faker->randomElement(['AMD Ryzen 5 5600G', 'Intel Core i5-11400', 'AMD Ryzen 7 5700G']),
                    'ram' => $this->faker->randomElement(['Corsair Vengeance LPX 16GB (2 x 8GB) DDR4-3200', 'G.SKILL Ripjaws V Series 16GB (2 x 8GB) DDR4-3600', 'Crucial Ballistix 16GB (2 x 8GB) DDR4-3200']),
                ];
                break;
            case 'content-creation-setups':
                $setupData = [
                    'setup_name' => $this->faker->randomElement(['Creative Studio Setup', 'Content Creator\'s Corner', 'Inspiration Station']),
                    'motherboard' => $this->faker->randomElement(['ASUS ProArt B550-Creator', 'GIGABYTE X570 AORUS MASTER', 'MSI Creator TRX40']),
                    'graphics_card' => $this->faker->randomElement(['NVIDIA GeForce RTX 3090', 'AMD Radeon Pro W6800X Duo', 'NVIDIA Quadro RTX 6000']),
                    'processor' => $this->faker->randomElement(['AMD Ryzen 9 5950X', 'Intel Core i9-12900K', 'AMD Ryzen Threadripper 3990X']),
                    'ram' => $this->faker->randomElement(['G.SKILL Trident Z Neo Series 64GB (4 x 16GB) DDR4-3600', 'Corsair Dominator Platinum RGB 64GB (4 x 16GB) DDR4-3200', 'HyperX Fury RGB 64GB (4 x 16GB) DDR4-3200']),
                ];
                break;
            case 'minimalist-setups':
                $setupData = [
                    'setup_name' => $this->faker->randomElement(['Simplicity Redefined', 'Minimalist Zen', 'Clean and Functional']),
                    'motherboard' => $this->faker->randomElement(['ASUS Prime A320I-K', 'GIGABYTE B450 I AORUS PRO WIFI', 'MSI MPG B550I GAMING EDGE WIFI']),
                    'graphics_card' => $this->faker->randomElement(['NVIDIA GeForce GTX 1050 Ti', 'AMD Radeon RX 580', 'NVIDIA GeForce GTX 1660 Super', 'AMD Radeon RX 570']),
                    'processor' => $this->faker->randomElement(['AMD Ryzen 3 3300X', 'Intel Core i3-10100', 'AMD Ryzen 5 3400G']),
                    'ram' => $this->faker->randomElement(['Corsair Vengeance LPX 8GB (2 x 4GB) DDR4-3200', 'G.SKILL Ripjaws V Series 8GB (2 x 4GB) DDR4-3600', 'Crucial Ballistix 8GB (2 x 4GB) DDR4-3200']),
                ];
                break;
            default:
                $setupData = [
                    'setup_name' => $this->faker->sentence,
                    'motherboard' => $this->faker->sentence,
                    'graphics_card' => $this->faker->sentence,
                    'processor' => $this->faker->sentence,
                    'ram' => $this->faker->sentence,
                ];
                break;
        }

        return array_merge($setupData, [
            'setup_category_id' => $category->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
