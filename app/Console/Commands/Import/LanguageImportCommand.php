<?php

namespace App\Console\Commands\Import;

use App\Models\Geography\Language;
use Illuminate\Console\Command;
use PrinsFrank\Standards\Language\LanguageAlpha2;

class LanguageImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:language-dataset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import languages in database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Importing Languages');

        $languagesToImport = LanguageAlpha2::cases();
        $newLanguagesCount = 0; // Initialize the count of new languages

        if (empty($languagesToImport)) {
            $this->info('There are no new languages to import');

            return Command::SUCCESS;
        }

        $bar = $this->output->createProgressBar(count($languagesToImport));

        foreach ($languagesToImport as $language) {
            $created = Language::firstOrCreate(
                ['code' => $language->value],
                [
                    'name' => $language->name,
                    'type' => 'ISO_639_1',
                ]
            );

            if ($created->wasRecentlyCreated) {
                $newLanguagesCount++; // Increment the count for each new language added
            }

            $bar->advance();
        }

        $bar->finish();
        $this->info("\n{$newLanguagesCount} new languages imported successfully");

    }
}
