<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class Cron extends Controller
{
    // show login form
    public function geturl($url = null)    {  
        if ($url)
        {
            $cronurl = $url;
            $splitted = explode('?', $cronurl);
            $args = explode(',', $splitted[1]);
            $query = 'INSERT INTO customer_server_details VALUES (';
            foreach ($args as $arg)
            {
                $query .= $arg .',';
            }
    }
    }

}