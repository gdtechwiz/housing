<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;	

class VillasModel extends Model
{
    protected $table="villas";

    // use Searchable;

	// public function searchableAs()
    // {
    // 	return 'villas';
    // }

    public function getRouteKeyName()
    {
    	return 'slug';
    }

}
