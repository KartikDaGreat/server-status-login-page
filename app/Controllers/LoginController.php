<?php 
namespace App\Controllers;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    private $login = '' ;
    public function __construct(){
      
        $this->login = new LoginModel();       
    }
    
    // show login form
    public function index()    {  
        $session = session();  
        $session->setFlashdata('msg', '');
        return view('login');
    }      

    //check user is exist or not
    public function login(){
        $session = session();
        
        $data = array('user_id'=>$this->request->getVar('user_id'),'password'=>$this->request->getVar('password'));
        $user =  $this->login->where($data);
        $rows = $user->countAllResults();
        if($rows==1)
        {
            $session  -> set('islogged',1);
            return view('dashboard');
        }
        else
        {
            $session->setFlashdata('msg', 'Invalid User');
            return view('login');
        }
     }
}