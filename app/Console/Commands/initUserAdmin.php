<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class initUserAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add Admin To Database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name     = $this->ask('Enter Your Name');
        $phone    = $this->ask('Enter Your Phone');
        $email    = $this->ask('Enter Your Email');
        $password = $this->secret('Enter Your Password');

        User::create([
           'name'     => $name,
           'phone'    => $phone,
           'email'    => $email,
           'password' => Hash::make($password),
        ]);

        $this->info('Your Super account Created');

        return Command::SUCCESS;
    }
}
