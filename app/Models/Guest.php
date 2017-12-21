<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model {

    public function getImageAttribute() {
        return 'https://placehold.it/1920x1080';
    }

}
