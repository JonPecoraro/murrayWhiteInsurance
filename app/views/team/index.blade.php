@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/team.css") }}
@endsection

@section('pageTitle')
	Our Team
@endsection

@section('content')
	<?php
		$arrTeamMembers = DB::select("SELECT * FROM team_members WHERE image IS NOT NULL");
		$arrTeamMembersNoImage = DB::select("SELECT * FROM team_members WHERE image IS NULL");
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
				@for ($i = (ceil(count($arrTeamMembers) / 2)); $i < count($arrTeamMembers); $i++)
					<?php $teamMember = $arrTeamMembers[$i] ?>
					@include("team.teamMemberMarkup")
				@endfor
			</ul>
		</div>
	</div>
	@if (!empty($arrTeamMembersNoImage))
		<h3>Not Pictured</h3>
		<div class="row">
			<div class="col-xs-6">
				<ul class="listing">
					@for ($i =  0; $i < count($arrTeamMembersNoImage) / 2; $i++)
						<?php $teamMember = $arrTeamMembersNoImage[$i] ?>
						@include("team.teamMemberMarkup")
					@endfor
				</ul>
			</div>
			<div class="col-xs-6">
				<ul class="listing">
					@for ($i = (ceil(count($arrTeamMembersNoImage) / 2)); $i < count($arrTeamMembersNoImage); $i++)
						<?php $teamMember = $arrTeamMembersNoImage[$i] ?>
						@include("team.teamMemberMarkup")
					@endfor
				</ul>
			</div>
		</div>
	@endif
@endsection