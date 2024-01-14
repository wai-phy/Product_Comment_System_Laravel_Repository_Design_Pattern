<?php

namespace App\Repository;

interface IAdminRepository
{
    public function adminGetAllProduct();
    public function adminGetAllComment();
    public function adminDelelteProduct($id);
    public function adminDelelteComment($id);

}
