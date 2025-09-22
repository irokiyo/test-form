<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
        protected $fillable = [
            'category_id',
            'last_name',
            'first_name',
            'gender',
            'email',
            'tel1',
            'tel2',
            'tel3',
            'address',
            'building',
            'detail'
        ];
        public function category()
        {
            return $this->belongsTo(Category::class);
        }
        public function scopeCategorySearch($query, $category_id)
    {
        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
        return $query;
    }
        public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)){
            $query->where('last_name', 'like', '%' . $keyword . '%')
            ->where('first_name', 'like', '%' . $keyword . '%')
            ->where('email', 'like', '%' . $keyword . '%')
            ->where('gender', 'like', '%' . $keyword . '%')
            ->where('created_at', 'like', '%' . $keyword . '%');
        }
        return $query;
    }
}
