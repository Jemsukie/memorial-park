<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }

    public function links (){
        return [
            [
                'name' => 'Home',
                'link' => 'Home/'
            ],
            [
                'name' => 'About',
                'link' => 'Home/about'
            ],
            [
                'name' => 'Contact Us',
                'link' => 'Home/contact'
            ],
            [
                'name' => 'Login',
                'link' => 'Home/login'
            ]
        ];
    }
    
    public function index(){
        
        $data['title'] = 'Home';
        $data['links'] = $this->links();

        $html['body'] = view('extras/navigation', $data)
        . view('homepage/index', $data)
        . view('highcharts/map');
        $html['head'] = view('extras/head', $data);
        $html['sidebar'] = view('extras/sidebar', $data);

        return view('extras/body', $html);
    }

    public function about(){

        $data['title'] = 'About';
        $data['links'] = $this->links();

        $html['body'] = view('extras/navigation', $data)
        . view('homepage/about');

        $html['head'] = view('extras/head', $data);
        $html['sidebar'] = view('extras/sidebar', $data);

        return view('extras/body', $html);
    }

    public function contact(){

        $data['title'] = 'Contact Us';
        $data['links'] = $this->links();

        $html['body'] = view('extras/navigation', $data)
        . view('homepage/contact');

        $html['head'] = view('extras/head', $data);
        $html['sidebar'] = view('extras/sidebar', $data);

        return view('extras/body', $html);
    }

    public function login(){

        $data['title'] = 'Login';
        $data['links'] = $this->links();

        $html['body'] = view('extras/navigation', $data)
        . view('homepage/login');

        $html['head'] = view('extras/head', $data);
        $html['sidebar'] = view('extras/sidebar', $data);

        return view('extras/body', $html);
    }

    public function signup(){

        $data['title'] = 'Sign Up';
        $data['links'] = $this->links();

        $html['body'] = view('extras/navigation', $data)
        . view('homepage/signup');

        $html['head'] = view('extras/head', $data);
        $html['sidebar'] = view('extras/sidebar', $data);

        return view('extras/body', $html);
    }
}

?>
