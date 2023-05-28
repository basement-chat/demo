<?php

namespace Database\Seeders;

use App\Models\User;
use BasementChat\Basement\Models\PrivateMessage;
use Database\Factories\PrivateMessageFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        PrivateMessage::truncate();
        User::truncate();

        $users = User::factory(10)->create();
        $user = $users->first();

        $senders = $users->skip(1)->flatMap(fn (User $user): array => array_fill(0, 10, $user));
        $senders->each(function (User $sender, int $index) use ($user, $senders): void {
            PrivateMessageFactory::new()
                ->when(
                    value: fake()->boolean(),
                    callback: fn (PrivateMessageFactory $factory): PrivateMessageFactory => (
                        $factory->betweenTwoUsers(receiver: $user, sender: $sender)
                    ),
                    default: fn (PrivateMessageFactory $factory): PrivateMessageFactory => (
                        $factory->betweenTwoUsers(receiver: $sender, sender: $user)
                    ),
                )
                ->create([
                    'created_at' => now()
                        ->subHours($senders->count())
                        ->addMinutes(fake()->numberBetween(1, 55))
                        ->addHours($index),
                    'read_at' => now(),
                ]);
        });

        dump("Email: $user->email");
        dump('Password: password');
    }
}
