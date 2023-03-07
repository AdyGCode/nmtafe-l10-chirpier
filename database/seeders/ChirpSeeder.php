<?php

namespace Database\Seeders;

use App\Models\Chirp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedChirps = [
            [
                'user_id'=>'1',
                'message'=>'You auto know me by now.',
            ],
            [
                'user_id'=>'2',
                'message'=>'Auto who?',
            ],
            [
                'user_id'=>'1',
                'message'=>'Auto.',
            ],
            [
                'user_id'=>'2',
                'message'=>"Who's there",
            ],
            [
                'user_id'=>'1',
                'message'=>'Knock, Knock.',
            ],
        ];

        foreach ($seedChirps as $newChirp) {
            $user = Chirp::create([
                'user_id' => $newChirp['user_id'],
                'message' => $newChirp['message'],
            ]);
        }
    }
}
