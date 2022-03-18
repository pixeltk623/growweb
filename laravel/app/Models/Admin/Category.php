<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';

    protected $guarded = ['id'];

    public static function getAllCategory($post) {

        $resultObject =  DB::table('categories')->where('deleted_by', null);

        if (isset($post['status']) && !empty($post['status'])) {
            $resultObject->where('status', $post['status']);
        }

        $data = [];
        $data = $resultObject->get();
        if(count($data)>0) {
            return $data;
        } else {
            return $data;
        }
    }
}
