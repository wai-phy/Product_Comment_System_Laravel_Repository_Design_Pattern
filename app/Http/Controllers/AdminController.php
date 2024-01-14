<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $admin;

    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }

    public function adminGetAllProducts()
    {
        $products = $this->admin->adminGetAllProduct();

        return view('admin.products')->with('products', $products);
    }

    public function adminGetAllComments()
    {
        $comments = $this->admin->adminGetAllComment();

        return view('admin.comments')->with('comments', $comments);
    }

    public function adminDeleteSingleProduct($id)
    {
        $this->admin->adminDelelteProduct($id);

        return redirect('/admin/products');
    }

    public function adminDeleteSingleComment($id)
    {
        $this->admin->adminDelelteComment($id);

        return redirect('/admin/comments');
    }
}
