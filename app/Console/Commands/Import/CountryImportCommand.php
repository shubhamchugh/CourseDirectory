<?php

namespace App\Console\Commands\Import;

use App\Models\Geography\City;
use App\Models\Geography\Country;
use App\Models\Geography\Region;
use App\Models\Geography\State;
use App\Models\Geography\SubRegion;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class CountryImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:country-dataset
    {--all : Import all datasets}
    {--regions : Import regions only}
    {--subregions : Import subregions only}
    {--countries : Import countries only}
    {--states : Import states only}
    {--cities : Import cities only}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import country-related datasets into the database. Datasets must be imported in the following sequence due to dependencies: regions, subregions, countries, states, cities.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Check if at least one option is provided
        if (! $this->option('all') && ! $this->option('regions') && ! $this->option('subregions') && ! $this->option('countries') && ! $this->option('states') && ! $this->option('cities')) {
            $this->error('At least one option is required.');
            $this->line('Usage:');
            $this->line('  import:country-dataset --all');
            $this->line('  import:country-dataset --regions');
            $this->line('  import:country-dataset --subregions');
            $this->line('  import:country-dataset --countries');
            $this->line('  import:country-dataset --states');
            $this->line('  import:country-dataset --cities');

            $this->warn('Warning: Datasets must be imported in sequence due to dependencies.');
            $this->line('Correct sequence:');

            // Define the headers and rows for the table
            $headers = ['Sequence', 'Dataset'];
            $rows = [
                ['1', 'Regions'],
                ['2', 'Subregions'],
                ['3', 'Countries'],
                ['4', 'States'],
                ['5', 'Cities'],
            ];

            // Display the table
            $this->table($headers, $rows);

            return 1; // Return non-zero exit code to indicate error
        }

        if ($this->option('all')) {
            $this->importRegions();
            $this->importSubRegions();
            $this->importCountries();
            $this->importStates();
            $this->importCities();
            $this->info('All datasets imported successfully.');

            return 0;
        }

        if ($this->option('regions')) {
            $this->importRegions();
            $this->info('Regions imported successfully.');
        }

        if ($this->option('subregions')) {
            $this->importSubRegions();
            $this->info('Subregions imported successfully.');
        }

        if ($this->option('countries')) {
            $this->importCountries();
            $this->info('Countries imported successfully.');
        }

        if ($this->option('states')) {
            $this->importStates();
            $this->info('States imported successfully.');
        }

        if ($this->option('cities')) {
            $this->importCities();
            $this->info('Cities imported successfully.');
        }

        if (! $this->option('all') && ! $this->options()) {
            $this->warn('No options provided. Use --all to import all datasets or specify individual datasets to import.');
        }

        return 0; // Return zero to indicate everything went well

    }

    private function importRegions()
    {
        $this->info('Importing regions');

        $data = Http::get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/regions.json')
            ->object();

        $newRecordCount = 0; // Initialize the count of new regions

        $collection = collect($data);

        $this->output->progressStart($collection->count());

        $collection->each(function ($item) use (&$newRecordCount) {

            $created = Region::firstOrCreate(
                [
                    'id' => $item->id,
                ],
                [
                    'name' => $item->name,
                    'translations' => json_encode($item->translations),
                    'wikiDataId' => $item->wikiDataId,
                ]
            );
            if ($created->wasRecentlyCreated) {
                $newRecordCount++; // Increment the count for each new language added
            }

            $this->output->progressAdvance();
        });

        $this->output->progressFinish();

        $this->info("\n{$newRecordCount} New regions data has been fetched and stored in the database.\n\r");
    }

    private function importSubRegions()
    {
        $this->info('Importing sub-regions');

        $data = Http::get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/subregions.json')
            ->object();

        $newRecordCount = 0; // Initialize the count of new regions

        $collection = collect($data);

        $this->output->progressStart($collection->count());

        $collection->each(function ($item) use (&$newRecordCount) {
            $created = SubRegion::firstOrCreate(
                [
                    'id' => $item->id,
                ],
                [
                    'name' => $item->name,
                    'region_id' => $item->region_id,
                    'translations' => json_encode($item->translations),
                    'wikiDataId' => $item->wikiDataId,
                ]
            );

            if ($created->wasRecentlyCreated) {
                $newRecordCount++; // Increment the count for each new language added
            }

            $this->output->progressAdvance();
        });

        $this->output->progressFinish();

        $this->info("\n{$newRecordCount} New sub-regions data has been fetched and stored in the database.\n\r");
    }

    private function importCountries()
    {
        $this->info('Importing Countries');

        $data = Http::get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/countries.json')
            ->object();

        $newRecordCount = 0; // Initialize the count of new regions

        $collection = collect($data);

        $this->output->progressStart($collection->count());

        $collection->each(function ($item) use (&$newRecordCount) {

            $timezone = json_decode(json_encode($item->timezones), true);
            $timezone = (! empty($timezone)) ? $timezone[0] : null;
            $created = Country::firstOrCreate(
                [
                    'id' => $item->id,
                ],
                [
                    'name' => $item->name,
                    'sub_region_id' => $item->subregion_id,
                    'iso3' => $item->iso3,
                    'iso2' => $item->iso2,
                    'numeric_code' => $item->numeric_code,
                    'phone_code' => $item->phone_code,
                    'capital' => $item->capital,
                    'currency' => $item->currency,
                    'currency_name' => $item->currency_name,
                    'currency_symbol' => $item->currency_symbol,
                    'tld' => $item->tld,
                    'native' => $item->native,
                    'region' => $item->region,
                    'subregion' => $item->subregion,
                    'nationality' => $item->nationality,
                    'latitude' => $item->latitude,
                    'longitude' => $item->longitude,
                    'emoji' => $item->emoji,
                    'emojiU' => $item->emojiU,
                    'timezones' => $timezone,
                    'translations' => $item->translations,
                ]
            );

            if ($created->wasRecentlyCreated) {
                $newRecordCount++; // Increment the count for each new language added
            }

            $this->output->progressAdvance();
        });

        $this->output->progressFinish();

        $this->info("\n{$newRecordCount} New Countries data has been fetched and stored in the database.\n\r");
    }

    private function importStates()
    {
        $this->info('Importing States');

        $data = Http::get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/states.json')
            ->object();

        $newRecordCount = 0; // Initialize the count of new regions

        $collection = collect($data);

        $this->output->progressStart($collection->count());

        $collection->each(function ($item) use (&$newRecordCount) {
            $created = State::firstOrCreate(
                [
                    'id' => $item->id,
                ],
                [
                    'name' => $item->name,
                    'country_id' => $item->country_id,
                    'country_code' => $item->country_code,
                    'country_name' => $item->country_name,
                    'state_code' => $item->state_code,
                    'type' => $item->type,
                    'latitude' => $item->latitude,
                    'longitude' => $item->longitude,
                ]
            );

            if ($created->wasRecentlyCreated) {
                $newRecordCount++; // Increment the count for each new language added
            }

            $this->output->progressAdvance();
        });

        $this->output->progressFinish();

        $this->info("\n{$newRecordCount} New states data has been fetched and stored in the database.\n\r");
    }

    private function importCities()
    {
        $this->info('Importing Cities');

        $data = Http::get('https://raw.githubusercontent.com/dr5hn/countries-states-cities-database/master/cities.json')
            ->object();

        $newRecordCount = 0; // Initialize the count of new regions

        $collection = collect($data);

        $this->output->progressStart($collection->count());

        $collection->each(function ($item) use (&$newRecordCount) {
            $created = City::firstOrCreate(
                [
                    'id' => $item->id,
                ],
                [
                    'name' => $item->name,
                    'state_id' => $item->state_id,
                    'state_code' => $item->state_code,
                    'state_name' => $item->state_name,
                    'country_code' => $item->country_code,
                    'country_name' => $item->country_name,
                    'latitude' => $item->latitude,
                    'longitude' => $item->longitude,
                    'wikiDataId' => $item->wikiDataId,
                ]
            );

            if ($created->wasRecentlyCreated) {
                $newRecordCount++; // Increment the count for each new language added
            }

            $this->output->progressAdvance();
        });

        $this->output->progressFinish();

        $this->info("\n{$newRecordCount} New cities data has been fetched and stored in the database.\n\r");
    }
}
