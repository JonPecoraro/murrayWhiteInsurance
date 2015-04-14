@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/team.css") }}
@endsection

@section('pageTitle')
	Our Team
@endsection

@section('content')
	<?php
		$arrTeamMembers = DB::select("SELECT * FROM team_members");
	?>
	<div class="row">
		<div class="col-xs-6">
			<ul class="listing">
				@for ($i =  0; $i < count($arrTeamMembers) / 2; $i++)
					<?php $teamMember = $arrTeamMembers[$i] ?>
					@include("team.teamMemberMarkup")
				@endfor
			</ul>
		</div>
		<div class="col-xs-6">
			<ul class="listing">
				@for ($i = (count($arrTeamMembers) / 2 + 1); $i < count($arrTeamMembers); $i++)
					<?php $teamMember = $arrTeamMembers[$i] ?>
					@include("team.teamMemberMarkup")
				@endfor
			</ul>
		</div>
	</div>
@endsection