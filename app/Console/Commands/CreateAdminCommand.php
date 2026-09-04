<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Mail\WelcomeAdminMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin {--name= : The name of the admin user} {--email= : The email address} {--password= : The password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Administrator account for the AQUAMEN dashboard';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('==================================================');
        $this->info('         AQUAMEN Admin Account Creator            ');
        $this->info('==================================================');

        $name = $this->option('name') ?: $this->ask('Enter Administrator Full Name');
        $email = $this->option('email') ?: $this->ask('Enter Administrator Email Address');
        $password = $this->option('password') ?: $this->secret('Enter Password (hidden)');

        $validator = Validator::make([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ], [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        if ($validator->fails()) {
            $this->error('Validation failed:');
            foreach ($validator->errors()->all() as $error) {
                $this->error('- ' . $error);
            }
            return 1;
        }

        $existingUser = User::where('email', $email)->first();
        if ($existingUser) {
            $existingUser->role = 'admin';
            $existingUser->password = Hash::make($password);
            $existingUser->must_change_password = true;
            $existingUser->save();
            $this->info("✓ Existing user [{$email}] was successfully updated to Admin role!");
            return 0;
        }

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => 'admin',
            'must_change_password' => true,
        ]);

        // Send Welcome Email
        try {
            Mail::to($user->email)->send(new WelcomeAdminMail($user->name, $user->email, $password));
            $this->info("✓ Welcome email sent to {$user->email}");
        } catch (\Throwable $e) {
            $this->warn("⚠ Notice: Could not send email ({$e->getMessage()})");
        }

        $this->info('==================================================');
        $this->info("✓ Admin account created successfully!");
        $this->info("Name  : {$user->name}");
        $this->info("Email : {$user->email}");
        $this->info("Role  : {$user->role}");
        $this->info('==================================================');

        return 0;
    }
}
