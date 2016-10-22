<div class="media">

	<a class="pull-left" href="{{ route('profile.index', ['username'=>$user->username]) }}">
		<img class="media-object" alt="{{ $user->getNameOrUsername() }}" src="/uploads/avatars/{{ $user->avatar}}" style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px; >
	</a>

	<div class="media-body">
		<h3 class="media-heading"><a href="{{ route('profile.index', ['username'=>$user->username]) }}">{{ $user->getNameOrUsername() }}</a></h3>

		@if(Auth::user()->id==$user->id)

		<form enctype="multipart/form-data" action="/akash" method="POST">
		<label>Change Display Pic</label>
		<input type="file" name="avatar">
		<input type="hidden" name="token" value="{{ csrf_token() }}">
		<input type="submit" name="avatar" value="Update" class="pull-right btn btn-sm btn-primary">
		<input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
		@endif
		

		@if($user->location)
		<p> {{ $user->location }} </p>


		@endif
		

	</div>
</div>