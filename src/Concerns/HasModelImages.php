<?php

namespace Barrydevt\Imagepal\Concerns;

use Barrydevt\Imagepal\Models\ModelImage;
use Barrydevt\Imagepal\Services\ImageStoreService;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasModelImages
{
    /**
     * @param string $filename
     * @return void
     */
    public function attachImage(string $filename)
    {
        if(strpos($filename, 'http') === 0) {
            $service = new ImageStoreService();
            $localFilename = $service->saveFromUrl($filename);
        }

        $model = new ModelImage([
            'filename' => $localFilename,
            'filetype' => 'image',
            'description' => 'image',
            'enabled' => true,
            'group' => 'MAIN'
        ]);

        $this->images()->save($model);
    }

    /**
     * @return MorphMany
     */
    public function image(string $id)
    {
        return $this->morphMany(ModelImage::class, 'model')->where('group', $id)->first();
    }
}
