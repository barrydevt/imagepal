# Imagepal

An expressive image helper for Laravel. 

- Save / tag images against any model.
- Manipulate images on the fly.

## Getting Started

1. Install the package from composer
2. Run the migration script
3. Add the `HasModelImage` trait to your model, so for example, if you want to add avatar images to your `User` model, add the following trait:

```php
<?php

namespace App\Models;

use Barrydevt\Imagepal\Concerns\HasModelImages;

class User extends Authenticatable
{
    use HasModelImages;

    protected $images = [
        'avatar' => [
            'size' => [100,100]
        ]   
    ];
```

4. Save an avatar image with the image pal facade:

```php
$user = User::find(1);
$user->images()->save('https://www.image.com/image.png');
```

5. Now you have the image saved, you can use it in your blade templates:

```html
<img src="{{ $user->images('avatar')->url }}" alt="{{ $user->images('avatar')->alt }}" />
```
