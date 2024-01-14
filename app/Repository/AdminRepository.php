<?php

namespace App\Repository;

use App\Models\Comment;
use App\Models\Product;
use PhpParser\Node\Expr\FuncCall;

class AdminRepository implements IAdminRepository
{

    public function adminGetAllProduct()
    {
        return Product::all();
    }

    public function adminGetAllComment()
    {
        return Comment::all();
    }

    public function adminDelelteProduct($id)
    {
        return Product::find($id)->delete();
    }

    public function adminDelelteComment($id)
    {
        return Comment::find($id)->delete();
    }
}
