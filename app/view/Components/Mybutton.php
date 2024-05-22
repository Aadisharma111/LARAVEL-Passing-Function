<?php
namespace App\Http\Components;
use closure;
use Illuminate\contracts\View\View;
use Illuminate\View\Component;
                             // now extends button class
    class Mybutton extends Component
    {
        public $title='';

        public function __construct($title)
        {
            $this->title= $title;
        }
           public function render(): View|closure|string
        {
            return view ('Components.button');
            
        }
    }