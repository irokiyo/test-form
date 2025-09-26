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
            ->orwhere('first_name', 'like', '%' . $keyword . '%')
            ->orwhere('email', 'like', '%' . $keyword . '%');
        }
        return $query;

    }
        public function scopeGenderFilter($query, $gender)
    {
            if (!empty($gender)){
            $query->where('gender',$gender);
        }
        return $query;
    }
        public function scopeCategoryFilter($query, $categoryContent)
        {
            if (!empty($categoryContent)){ //$query->where('カラム名', '値');
                $query->whereHas('category', function ($q) use ($categoryContent) {
            $q->where('content', $categoryContent);
                });
            }
            return $query;
        }
}