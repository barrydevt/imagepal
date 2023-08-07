<?php

namespace Barrydevt\Imagepal\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;

class ImageStoreService
{
    /**
     * @param string $url
     * @return string
     */
    public function saveFromUrl(string $url): string
    {
        $contents = file_get_contents($url);
        $name = substr($url, strrpos($url, '/') + 1);
        Storage::put($name, $contents);

        return $name;
    }
}
