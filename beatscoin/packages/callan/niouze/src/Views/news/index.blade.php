@extends(config('pages.pages_template'))

@section('content')
<div class="ui centered grid container">
	<div class="eight wide left aligned column">
		<h2 class="ui dividing">Agenda</h2>
		<a href="/actus/create" class="ui right floated right labeled icon green button">Add<i class="add icon"></i></a>
		<br><br>
		<table class="ui striped celled stackable table">
			<thead>
				<th class="five wide left aligned">News</th>
				<th class="three wide center aligned">Date</th>
				<th class="three wide center aligned">Lieux</th>
				<th class="one wide center aligned">Edit</th>
			</thead>
			@foreach($news as $n)
			<tr>
				<td class="left aligned"><a href="#"> {{$n->title}} </a></td>
				<td class="center aligned">{{$n->date}}</td>
				<td class="center aligned">{{$n->lieux}}</td>
				<td class="center aligned"><a href="/actus/edit/{{$n->id}}" class="ui inverted icon blue button"><i class="edit icon"></i></a></td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection