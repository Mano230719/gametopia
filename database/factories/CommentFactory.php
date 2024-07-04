<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\User;
use App\Models\Blog;
use Carbon\Carbon;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Comment::class;

    public function definition(): array
    {

        // Fetching existing user IDs and blog IDs from the database
        $userIds = User::pluck('id')->toArray();
        $blogIds = Blog::pluck('id')->toArray();

        // Generating a timestamp for the comment's date
        $createdAt = $this->faker->dateTimeBetween('-1 year', 'now');

        $customComments = [
            'Great post!',
            'Very informative!',
            'This helped me a lot.',
            'Thanks for sharing this.',
            'Interesting read.',
            'I enjoyed reading this.',
            'Well explained!',
            'I learned something new.',
            'Looking forward to more.',
            'Insightful content.',
            'Good job!',
            'Well written.',
            'Keep up the good work!',
            'This was eye-opening.',
            'I appreciate the effort.',
            'This is fantastic!',
            'Love your content.',
            'You make it easy to understand.',
            'Awesome explanation!',
            'Brilliant!',
            'Exactly what I needed.',
            'This made my day.',
            'Very helpful.',
            'Thanks for the tips.',
            'Excellent post!',
            'I\'m impressed.',
            'You nailed it.',
            'This is gold.',
            'This is a gem.',
            'Well researched.',
            'I can relate to this.',
            'Spot on!',
            'This is invaluable.',
            'I\'ve bookmarked this.',
            'This deserves more attention.',
            'This should be shared widely.',
            'You\'ve got a fan here.',
            'This inspired me.',
            'You\'re making a difference.',
        ];

        return [
            'content' => $this->faker->randomElement($customComments),
            'user_id' => $this->faker->randomElement($userIds),
            'blog_id' => $this->faker->randomElement($blogIds),
            'date' => Carbon::instance($createdAt),
        ];
    }
}
