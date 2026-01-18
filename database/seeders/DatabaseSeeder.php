<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\LawyerProfile;
use App\Models\Question;
use App\Models\QuestionReply;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 0) Admin User
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        // 0.1) Demo Lawyer
        $demoLawyer = User::factory()->create([
            'name' => 'Demo Lawyer',
            'email' => 'lawyer@example.com',
            'role' => 'lawyer',
        ]);

        LawyerProfile::factory()->create([
            'user_id' => $demoLawyer->id,
            'status' => 'accepted',
        ]);

        // 1) Categories
        $categories = Category::factory()->count(10)->create();

        // 2) Normal users (people who ask questions)
        $users = User::factory()->count(30)->create([
            'role' => 'user',
        ]);

        // 3) Lawyers (users) + accepted profiles
        $lawyers = User::factory()->count(10)->create([
            'role' => 'lawyer',
        ]);

        foreach ($lawyers as $lawyer) {
            LawyerProfile::factory()->create([
                'user_id' => $lawyer->id,
                'status' => 'accepted',
            ]);

            // 4) Attach specializations (pivot)
            $lawyer->specializations()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        }

        // 5) Questions (each question belongs to a user + category)
        $questions = Question::factory()->count(80)->make()->each(function ($q) use ($users, $categories) {
            $q->user_id = $users->random()->id;
            $q->category_id = $categories->random()->id;
            $q->save();
        });

        // 6) Replies: only lawyers reply
        foreach ($questions as $question) {
            $replyCount = rand(0, 4);

            for ($i = 0; $i < $replyCount; $i++) {
                $lawyer = $lawyers->random();

                QuestionReply::factory()->create([
                    'question_id' => $question->id,
                    'lawyer_id' => $lawyer->id,
                ]);
            }
        }

        // 7) Articles by lawyers with categories
        Article::factory()->count(25)->make()->each(function ($a) use ($lawyers, $categories) {
            $a->author_id = $lawyers->random()->id;
            $a->category_id = $categories->random()->id;
            $a->save();
        });
    }
}
