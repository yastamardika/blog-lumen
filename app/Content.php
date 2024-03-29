<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Content extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'content';
    protected $fillable = [
        'title', 'text'
    ];
    public $timestamps = false;
}