<?php
namespace App\Services;

use App\Models\CategoryProduct;

class CategoryProductService{

    public function saveOrUpdateByCode(CategoryProduct $role){
        $data = $role->getAttributes();
        CategoryProduct::updateOrCreate(['code' => $data['code']],$data);
    }

    public function findByCode(string $code){
        return CategoryProduct::where('code',$code)->first();
    }

}
