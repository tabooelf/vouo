<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    static function best($length = 4){
        return self::with('category')->where('is_hot', 1)->orderBy('updated_at', 'desc')->take($length)->get()->toArray();
    }

    static function tags($length = 10){
        return self::take($length)->orderBy('updated_at', 'desc')->pluck('name', 'id')->toArray();
    }
    // 排序规则
    public function scopeWithOrder($query, $order){
        switch ($order) {
            case 'hot':
                $query->hot();
                break;
            case 'up':
                $query->up();
                break;
            case 'down':
                $query->down();
                break;
            default:
                $query->new();
                break;
        }
        return $query->with('category');
    }

    public function scopeNew($query){
        $query->orderBy('updated_at', 'desc');
    }

    public function scopeHot($query){
        $query->where('is_hot', 1)->orderBy('updated_at', 'desc');
    }

    public function scopeDown($query){
        $query->orderBy('price', 'desc')->orderBy('updated_at', 'desc');
    }

    public function scopeUp($query){
        $query->orderBy('price', 'asc')->orderBy('updated_at', 'asc');
    }
}
