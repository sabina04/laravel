<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function Children() {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }
}
