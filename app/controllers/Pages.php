<?php

class Pages extends Controller
{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    
    public function index()
    {
        echo "Hello My Son, Tint Wai";
    }

    public function user()
    {
        $this->view('pages/index');
    }
}