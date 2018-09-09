<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id', // Temporary
    ];

   protected $dates = ['published_at']; // Treat all dates as instances of Carbon


    public function scopePublished($query)
    {

        $query->where('published_at', '<=', Carbon::now());

    }

    public function scopeUnpublished($query)
    {

        $query->where('published_at', '>', Carbon::now());

    }

    // setNameAttribute - Naming Convention

    public function setPublishedAtAttribute($date)
    {

        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

       // $this->attributes['published_at'] = Carbon::parse($date);  // Set date at midnight


    }
}