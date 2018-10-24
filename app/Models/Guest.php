<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model {

    use SoftDeletes;

    public function getImageAttribute() {
        return 'https://placehold.it/1920x1080';
    }

}
