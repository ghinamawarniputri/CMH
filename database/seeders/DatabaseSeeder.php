<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            if (!Schema::hasTable('portfolios')) {
                Schema::create('portfolios', function ($table) {
                    $table->id();
                    $table->string('name');
                    $table->enum('genre', ['Accoustic', 'Dubstep', 'Jazz', 'Pop', 'Progressive', 'Sundanese']);
                    $table->string('link', 2083);
                    $table->timestamps();
                });
                $this->command->info('✅ Portfolio table created');
            }

            if (DB::table('portfolios')->count() === 0) {
                DB::table('portfolios')->insert([
                    [
                        'name' => 'Dapoer Catering SR',
                        'genre' => 'Accoustic',
                        'link' => 'https://api.soundcloud.com/tracks/2046389160',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'name' => 'Goyobod Laris',
                        'genre' => 'Dubstep',
                        'link' => 'https://api.soundcloud.com/tracks/2046389153',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'name' => 'Dimsum by Inmons Fix',
                        'genre' => 'Jazz',
                        'link' => 'https://api.soundcloud.com/tracks/2046389164',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'name' => 'Bubuk Cabe Pa Abdul',
                        'genre' => 'Pop',
                        'link' => 'https://api.soundcloud.com/tracks/2046390272',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'name' => 'Aku Baru',
                        'genre' => 'Progressive',
                        'link' => 'https://api.soundcloud.com/tracks/2046389156',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                    [
                        'name' => 'Hudang Hese',
                        'genre' => 'Sundanese',
                        'link' => 'https://api.soundcloud.com/tracks/2046389168',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ]);
                $this->command->info('✅ Initial portfolio data inserted');
            } else {
                $this->command->warn('⚠️ Portfolio table already has data (skipping)');
            }
        } catch (\Exception $e) {
            $this->command->error('❌ Error seeding portfolio table: ' . $e->getMessage());
            \Log::error('Portfolio seeder failed', ['error' => $e->getMessage()]);
        }

    }
}
