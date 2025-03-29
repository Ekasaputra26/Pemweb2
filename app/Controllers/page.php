<?php namespace App\Controllers;
class page extends BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "faqs page";
    }
    public function Biodata()
    {
        echo "Nama: Muhammad Eka Saputra"; 
        echo "TTl: 260425"; 
        echo "Hobi: Makan siang dibulan ramadhan"; 
    }
}