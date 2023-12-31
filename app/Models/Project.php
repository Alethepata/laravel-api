<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'start_date',
        'explanation',
        'type_id',
        'user_id',
        'image',
        'image_name'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function tecnologies(){
        return $this->belongsToMany(Tecnology::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public static function generateSlug($string){

        $slug =  Str::slug($string, '-');
        $original_slug = $slug;

        $exists = Project::where('slug', $slug)->first();
        $c = 1;

        while($exists){
            $slug = $original_slug. '-'. $c;
            $exists = Project::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }

}
