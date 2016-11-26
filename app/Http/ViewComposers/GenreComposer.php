<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Repositories\GenreRepository;
/**
 * Description of GenreComposer
 *
 * @author NTHanh
 */
class GenreComposer 
{
    /**
     * The genre repository implementation
     * @var GenreRepository 
     */
    protected $genres;
    
    public function __construct(GenreRepository $genre) {
        $this->genres = $genre;
    }
    
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('genre', $this->genres->test());
    }
    
}
