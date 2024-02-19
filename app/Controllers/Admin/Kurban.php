<?php

namespace App\Controllers\Admin;

use App\Models\Kategori_staff_model;
use App\Models\Undangan_model;

class Kurban extends BaseController
{
    // mainpage
    public function index()
    {
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM kurban a JOIN galeri b ON a.id_galeri=b.id_galeri');
        $results = $query->getResult();
        $data = ['title'     => 'KURBAN ',
            'content'        => 'admin/kurban/index',
            'kurbanlist' => $results
        ];
        echo view('admin/layout/wrapper', $data);
    
    }
}
?>