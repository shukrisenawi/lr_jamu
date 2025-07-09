<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    private $menus;
    public function __construct()
    {
        $this->menus = [
            'home' => [
                'label' => 'Laman Utama',
                'url' => '/site',
            ],
            'testimoni' => [
                'label' => 'Testimoni',
                'url' => '/site/testimoni',
            ],
            'stokist' => [
                'label' => 'Senarai Stokis',
                'url' => '/site/stockist',
            ],
            'galeri' => [
                'label' => 'Galeri',
                'url' => '/site/galeri',
            ],
            'login' => [
                'label' => 'Login',
                'url' => '/login',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar', [
            'menus' => $this->menus,
        ]);
    }
}
