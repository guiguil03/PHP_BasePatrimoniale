<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class MapController extends BaseController {
    public function index() {
        $data['api_key'] = GOOGLE_MAPS_API_KEY;
        return $this->twig->render('map_view.html',$data);
    }
}
