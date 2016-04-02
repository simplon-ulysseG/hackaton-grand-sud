<?php

namespace Callan\Niouze\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Callan\Niouze\Models\Entry as Niouze;

class NiouzeController extends Controller
{
	private function mergeDate($date, $hour){
		$d = Carbon::createFromFormat('Y-m-d', $date);
		$h = explode(':', $hour);
		$d->hour = $h[0];
		$d->minute = $h[1];
		return $d;
	}

	public function getIndex(){
		$news = Niouze::all();
		return view('niouze::news.index')->with('news', $news);
	}
	public function getCreate(){
		return view('niouze::news.create');
	}
	
	public function postCreate(Request $req){
		$data = $req->except('id','_token', 'hour');
		$data['slug'] = str_slug($data['title'], '-');
		$data['date'] = $this->mergeDate($data['date'], $req->hour);		
		$add = Niouze::create($data);
		$req->session()->flash('message', 'Actu ajoutée !');

		return redirect('/actus');
	}

	public function getEdit($id){
		$edit = Niouze::findOrFail($id);
		return view('niouze::news.edit')->with('edit', $edit);
	}

	public function putEdit(Request $req){
		$edit = Niouze::findOrFail($req->input('id'));
		$edit->title = $req->input('title');
		$edit->category = $req->input('category');
		$edit->content = $req->input('content');
		$edit->date = $this->mergeDate($req->date, $req->hour);;
		$edit->price = $req->input('price');
		$edit->save();
		return redirect('/actus');
	}

	public function postEdit(Request $req, $id = null){
		dd($req->all());
		return view('niouze::news.index')->with('news', $news);
	}

	public function getEvent($slug = null){
		$event = Niouze::where('slug', $slug)->first();
		return view('niouze::news.event')->with('event', $event);
	}
}
