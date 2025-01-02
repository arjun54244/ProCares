<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileMap extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $address;
    public $map;
    public $mapimg;
    public $times;
    public function __construct($name , $address, $map, $mapimg, $times)
    {
        $this->name = $name ;
        $this->address = $address ;
        $this->map = $map ;
        $this->mapimg = $mapimg ;
        $this->times = $times ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profile-map');
    }
}
