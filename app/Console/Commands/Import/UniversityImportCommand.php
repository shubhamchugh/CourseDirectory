<?php

namespace App\Console\Commands\Import;

use App\Models\Partner\University;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class UniversityImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:university-dataset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import university in database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $result = Http::timeout(600)->get('https://www.whed.net/results_institutions.php?requete=%28Global+WHED+ID%3DIAU%29&total=20966&ret=home.php&Chp0=&Chp1=&Chp2=+IAU&Chp3=&Chp4=&Chp5=&use=&afftri=yes&stat=Global+WHED+ID&sort=IAUMember+DESC%2CCountry%2CInstNameEnglish%2CiBranchName&nbr_ref_pge=21000')->body();

        $this->info('Importing Universities');

        $crawler = new Crawler($result, 'https://www.whed.net/');

        $crawler->filter('a[title="More details"]')->each(function ($item) {

            $link = $item->link();

            $this->info('Getting date from '.$link->getUri().PHP_EOL);

            $detail = Http::timeout(600)->get($link->getUri())->body();

            $detailCrawler = new Crawler($detail, 'https://www.whed.net/');

            $iau_id = $detailCrawler->filter('.tools.fleft span')->first()->text();

            $iau_url = $detailCrawler->filter('.tools.fleft a')->first()->text();

            $name = $detailCrawler->filter('.detail_right div:nth-child(1)')->first()->text();

            $detail_name = $detailCrawler->filter('.detail_name')->first()->text();

            $images = $detailCrawler->filter('.galerie')->each(function ($detail) {
                return (! empty($detail)) ? Str::of($detail->attr('style'))->match('/url\((.*?)\)/').PHP_EOL : null;
            });

            $logo = $detailCrawler->filter('.logo')->first()->attr('src', 'not_found');

            $webpage = $detailCrawler->filter('.lien')->first()->attr('href', 'http://notfound.com');

            University::firstOrCreate([
                'name' => $name,
            ], [
                'iau' => $iau_id,
                'iau_url' => $iau_url,
                'detail_name' => $detail_name,
                'web_page' => $webpage,
            ]);
        });

    }
}
