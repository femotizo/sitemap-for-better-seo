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
        // place future code here

        return $this->sitemap->render();
    }
}
