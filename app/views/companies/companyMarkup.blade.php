<li class="clearfix">
	<div class="pull-left">
		<a href="{{ $company->url }}" target="_blank">
			{{ HTML::image($company->image, $company->name) }}
		</a>
	</div>
	<div ="pull-right">
		<ul class="companyInfo">
			<li>{{ $company->name }}</li>
			<li>{{ $company->phone }}</li>
			<li>{{ HTML::link($company->url, "Visit website", ["target" => "_blank"]) }}</li>
		</ul>
	</div>
</li>