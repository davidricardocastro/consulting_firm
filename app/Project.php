<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'project_region',
        'project_country',
        'project_area',
        'project_sector',
        'project_description'        
    ];
    
    protected $guarded = [
        'id'
    ];
}
