<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Exam;
use App\Models\Profile;
use App\Models\Question;
use App\Models\Story;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create([
            'name' => 'Akun Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => '2023-12-07 06:33:55',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        \App\Models\User::factory(1)->create([
            'name' => 'Akun User',
            'email' => 'user@gmail.com',
            'email_verified_at' => '2023-12-07 06:33:55',
            'password' => bcrypt('user'),
            'role' => 'test taker',
        ]);

        // \App\Models\User::factory(1)->create([
        //     'name' => 'Akun Guest',
        //     'email' => 'guest@gmail.com',
        //     'email_verified_at' => '2023-12-07 06:33:55',
        //     'password' => bcrypt('guest'),
        //     'role' => 'guest',
        // ]);

        // Exam::factory()->create([
        //     'code' => 'EXM-LfosNc4yMp',
        //     'category'=> 'ept',
        //     'title' => 'ept',
        //     'activated' => 'no',
        //     'status' => 'progress'

        // ]);

        // Story::factory()->create([
        //     'exam_code' => 'EXM-LfosNc4yMp',
        //     'code' => 'EXM-Q3uIdDE1dR',
        //     'story' => 'story/1705323899_Y2meta.app - The Verkkars Ez4ence - CS-GO MVP MUSİC KIT (320 kbps).mp3',
        //     'section'=> 'part b'
        // ]);

        // Story::factory()->create([
        //     'exam_code' => 'EXM-LfosNc4yMp',
        //     'code' => 'EXM-ABC',
        //     'story' => 'story/1705323899_Y2meta.app - The Verkkars Ez4ence - CS-GO MVP MUSİC KIT (320 kbps).mp3',
        //     'section'=> 'part c'
        // ]);

        // Story::factory()->create([
        //     'exam_code' => 'EXM-LfosNc4yMp',
        //     'code' => 'EXM-DEF',
        //     'story' => 'ABCDEFGHJK',
        //     'section'=> 'reading'
        // ]);

        // Question::factory(30)->create([
        //     'exam_code' => 'EXM-LfosNc4yMp',
        //     'question' => 'question/1705323952_Y2meta.app - The Verkkars Ez4ence - CS-GO MVP MUSİC KIT (320 kbps).mp3',
        //     'answer_a' => 'a', 
        //     'answer_b' => 'a', 
        //     'answer_c' => 'a', 
        //     'answer_d' => 'a',
        //     'correct_answer' => 'a',
        //     'section' => 'part a' 
        // ]);

        // Question::factory(15)->create([
        //     'exam_code' => 'EXM-LfosNc4yMp',
        //     'story_code'=> 'EXM-LfosNc4yMp',
        //     'question' => 'question/1705323952_Y2meta.app - The Verkkars Ez4ence - CS-GO MVP MUSİC KIT (320 kbps).mp3',
        //     'answer_a' => 'a', 
        //     'answer_b' => 'a', 
        //     'answer_c' => 'a', 
        //     'answer_d' => 'a',
        //     'correct_answer' => 'a',
        //     'section' => 'part b' 
        // ]);

        // Question::factory(15)->create([
        //     'exam_code' => 'EXM-LfosNc4yMp',
        //     'story_code'=> 'EXM-ABC',
        //     'question' => 'question/1705323952_Y2meta.app - The Verkkars Ez4ence - CS-GO MVP MUSİC KIT (320 kbps).mp3',
        //     'answer_a' => 'a', 
        //     'answer_b' => 'a', 
        //     'answer_c' => 'a', 
        //     'answer_d' => 'a',
        //     'correct_answer' => 'a',
        //     'section' => 'part c' 
        // ]);

        // Question::factory(20)->create([
        //     'exam_code' => 'EXM-LfosNc4yMp',
        //     'story_code'=> 'EXM-DEF',
        //     'question' => 'question/1705323952_Y2meta.app - The Verkkars Ez4ence - CS-GO MVP MUSİC KIT (320 kbps).mp3',
        //     'answer_a' => 'a', 
        //     'answer_b' => 'a', 
        //     'answer_c' => 'a', 
        //     'answer_d' => 'a',
        //     'correct_answer' => 'a',
        //     'section' => 'reading' 
        // ]);

        // Question::factory(20)->create([
        //     'exam_code' => 'EXM-LfosNc4yMp',
        //     'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, praesentium?',
        //     'answer_a' => 'a', 
        //     'answer_b' => 'a', 
        //     'answer_c' => 'a', 
        //     'answer_d' => 'a',
        //     'correct_answer' => 'a',
        //     'section' => 'written' 
        // ]);

        // Question::factory(20)->create([
        //     'exam_code' => 'EXM-LfosNc4yMp',
        //     'question' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, praesentium?',
        //     'answer_a' => 'a', 
        //     'answer_b' => 'a', 
        //     'answer_c' => 'a', 
        //     'answer_d' => 'a',
        //     'correct_answer' => 'a',
        //     'section' => 'structure' 
        // ]);
    }
}