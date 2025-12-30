<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class Enable2FA extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = '2fa:enable {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enable two-factor authentication for a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        
        $user = User::where('email', $email)->first();
        
        if (!$user) {
            $this->error("User with email {$email} not found.");
            return 1;
        }
        
        $user->two_factor_enabled = true;
        $user->save();
        
        $this->info("Two-factor authentication enabled for {$user->name} ({$user->email})");
        
        return 0;
    }
}