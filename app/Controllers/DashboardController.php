<?php 
namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function view()
    {
        echo '<pre>';
        print_r($_SESSION);
        exit;
    }

    public function add()
    {
        
    }
}