<?php

namespace App\Console\Commands\Database;

use Illuminate\Console\Command;

class SafeRefreshDatabasesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:safe-fresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Safely refresh all databases with manual confirmation for each. Optionally seed them.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $databases = [
            'mysql' => ['path' => 'database/migrations/discover', 'seeder' => 'DiscoverSeeder'],
            'mysql_scraper' => ['path' => 'database/migrations/scraper', 'seeder' => 'ScraperSeeder'],
        ];

        foreach ($databases as $connection => $settings) {
            if ($this->confirm("Are you sure you want to refresh the '{$connection}' database? This will erase all data.", false)) {

                $shouldSeed = $this->confirm("Do you want to seed the '{$connection}' database after refreshing?", true);
                $this->performMigration($connection, $settings['path'], $shouldSeed, $settings['seeder']);

            } else {
                $this->info("Skipping '{$connection}' database refresh.");
            }
        }

        $this->info('Database refresh process completed.');
    }

    protected function performMigration($connection, $path, $shouldSeed, $seeder = null)
    {
        $options = [
            '--database' => $connection,
            '--path' => $path,
            '--force' => true,
        ];

        if ($shouldSeed && $seeder) {
            $options['--seed'] = true;
            // Specify the seeder class for this connection
            $options['--seeder'] = $seeder;
        }

        $this->call('migrate:fresh', $options);

        $message = "Successfully refreshed '{$connection}' database.";
        if ($shouldSeed && $seeder) {
            $message .= " Seeded using {$seeder}.";
        }
        $this->info($message);

    }
}
