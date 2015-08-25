@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/companies.css") }}
@endsection

@section('pageTitle')
	Represented Companies
@endsection

@section('content')
	<?php
		$arrCompanies = DB::select("SELECT * FROM represented_companies");
	?>
	<div class="row">
		<div class="col-xs-6">
			<ul class="listing">
				@for ($i =  0; $i < count($arrCompanies) / 2; $i++)
					<?php $company = $arrCompanies[$i] ?>
					@include("companies.companyMarkup")
				@endfor
			</ul>
		</div>
		<div class="col-xs-6">
			<ul class="listing">
				@for ($i = (ceil(count($arrCompanies) / 2)); $i < count($arrCompanies); $i++)
					<?php $company = $arrCompanies[$i] ?>
					@include("companies.companyMarkup")
				@endfor
			</ul>
		</div>
	</div>
@endsection