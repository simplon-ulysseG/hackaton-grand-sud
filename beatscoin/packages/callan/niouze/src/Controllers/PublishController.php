<?php

namespace Callan\Niouze\Controllers;

use Illuminate\View\View;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Callan\Niouze\Models\Entry as Niouze;

class PublishController extends Controller
{

    protected $news, $last, $events;


    public function __construct(){
        $news = Niouze::orderBy('date', 'desc')->take(5)->get();
        $this->news = $news;
        $this->last = $news->first();
        $this->events = Niouze::orderBy('date', 'desc')->get();
        
    }

    public function compose(View $view){
        $view->with(['news' => $this->news, 'last' => $this->last, 'events' => $this->events]);
    }
}