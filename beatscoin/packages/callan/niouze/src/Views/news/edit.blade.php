@extends(config('pages.pages_template'))

@section('content')
<div class="ui centered grid container">
	<div class="eight wide left aligned column">
		<form method="post" class="ui form" action="/actus/create">
			{{csrf_field()}}
			{{method_field('PUT')}}
			<input type="hidden" name="id" value="{{$edit->id}}">
			<div class="fields">
				<div class="ten wide field">
					<label>Nom du groupe</label>
					<input type="text" name="title" value="{{$edit->title}}">
				</div>
				<div class="ten wide field">
					<label>Style de musique</label>
					<input type="text" name="category" value="{{$edit->category}}">
				</div>
			</div>
			<div class="fields">
				<div class="ten wide field">
					<label>Date</label>
					<input type="date" name="date" value="{{$edit->date}}">
				</div>
				<div class="ten wide field">
					<label>heure</label>
					<input type="time" name="hour" value="{{$edit->hour}}">
				</div>
			</div>
			<div class="field">
				<label>Description</label>
				<textarea name="content" cols="30" rows="10">{{$edit->content}}</textarea>
			</div>
			<div class="five wide field">
				<div class="ui right labeled input">
				<div class="ui label">€</div>
					<input type="text" name="price" value="{{$edit->price}}">
					<div class="ui basic label">.00</div>
				</div>
			</div>
			<button type="submit" class="ui right labeled icon blue button">Send <i class="send icon"></i></button>
		</form>
	</div>
</div>
@endsection