<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Laravelista\Bard\UrlSet as Sitemap;

class SitemapController extends Controller
{
    protected $sitemap;

    public function __construct(Sitemap $sitemap)
    {
        $this->sitemap = $sitemap;
    }

    public function generate()
    {
        // first way
        $home = $this->sitemap->addUrl(url('/'));
        $home->setPriority(0.8);
        $home->setChangeFrequency('hourly');
        $home->setLastModification(\Carbon\Carbon::now());
        $home->addTranslation("de", url('/de'));

        // second way
        $this->sitemap->addUrl(
            url('/contact'),
            0.5,
            null,
            new \DateTime('2015-04-01'),
            [
                [
                    "hreflang" => 'de',
                    'href' => url('/de/contact')
                ]
            ]
        );

        // third way
        $this->sitemap->addUrl(url('gallery'));

        return $this->sitemap->render();
    }
}
