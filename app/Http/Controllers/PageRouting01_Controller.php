<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRouting01_Controller extends Controller
{
   public function index(){
      return(view('PageRouting01.Home'));
   }
   public function About(){
     return(view('PageRouting01.about'));
   }
   public function Service(){
     return(view('PageRouting01.service'));
   }
   public function Skill(){
     return(view('PageRouting01.skil'));
   }
   public function Contact(){
     return(view('PageRouting01.contact'));
   }
}
