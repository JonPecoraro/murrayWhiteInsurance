@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/representedCompanies.css") }}
@endsection

@section('pageTitle')
	Represented Companies
@endsection

@section('content')
	<div class="row">
		<div class="col-xs-6">
			<ul class="companyList">
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://www.americanstrategic.com" target="_blank">
								{{ HTML::image("/img/logos/americanStrategicInsurance.jpg", "American Strategic Insurance") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>American Strategic Insurance</li>
								<li>866-274-8765</li>
								<li>{{ HTML::link("http://www.americanstrategic.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://www.foremost.com" target="_blank">
								{{ HTML::image("/img/logos/foremostInsuranceGroup.jpg", "Foremost Insurance Group") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>Foremost Insurance Group</li>
								<li>800-527-3907</li>
								<li>{{ HTML::link("http://www.foremost.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://www.isurity.com" target="_blank">
								{{ HTML::image("/img/logos/isurity.jpg", "Isurity") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>Isurity</li>
								<li>336-869-3000</li>
								<li>{{ HTML::link("http://www.isurity.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="https://www.jsausa.com" target="_blank">
								{{ HTML::image("/img/logos/jacksonSumner.jpg", "Jackson Sumner") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>Jackson Sumner</li>
								<li>8800-342-5572</li>
								<li>{{ HTML::link("https://www.jsausa.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="https://www.libertymutual.com" target="_blank">
								{{ HTML::image("/img/logos/libertyMutual.jpg", "Liberty Mutual") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>Liberty Mutual</li>
								<li>888-398-8924</li>
								<li>{{ HTML::link("https://www.libertymutual.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://www.msagroup.com" target="_blank">
								{{ HTML::image("/img/logos/mainStreetAmericaGroup.jpg", "Main Street America Group") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>Main Street America Group</li>
								<li>800-226-0875</li>
								<li>{{ HTML::link("http://www.msagroup.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="col-xs-6">
			<ul class="companyList">
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://www.plmilm.com" target="_blank">
								{{ HTML::image("/img/logos/pennsylvaniaLumbermens.jpg", "Pennsylvania Lumbermens") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>Pennsylvania Lumbermens</li>
								<li>800-752-1895</li>
								<li>{{ HTML::link("http://www.plmilm.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://www.progressive.com" target="_blank">
								{{ HTML::image("/img/logos/progressive.jpg", "Progressive") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>Progressive</li>
								<li>800-776-4737</li>
								<li>{{ HTML::link("http://www.progressive.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>	
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://www.safeco.com" target="_blank">
								{{ HTML::image("/img/logos/safeCo.jpg", "SafeCo") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>SafeCo</li>
								<li>800-332-3226</li>
								<li>{{ HTML::link("http://www.safeco.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="https://www.stateauto.com" target="_blank">
								{{ HTML::image("/img/logos/stateAuto.jpg", "State Auto") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>State Auto</li>
								<li>614-464-5000</li>
								<li>{{ HTML::link("https://www.stateauto.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://www.gotapco.com" target="_blank">
								{{ HTML::image("/img/logos/tapco.jpg", "Tapco") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>Tapco</li>
								<li>800-334-5579 </li>
								<li>{{ HTML::link("http://www.gotapco.com", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="col-xs-6">
							<a href="http://www.uticanational.com/Insurance" target="_blank">
								{{ HTML::image("/img/logos/uticaNational.jpg", "Utica National") }}
							</a>
						</div>
						<div class="col-xs-6">
							<ul>
								<li>Utica National</li>
								<li>804-560-6600</li>
								<li>{{ HTML::link("http://www.uticanational.com/Insurance", "Visit website", ["target" => "_blank"]) }}</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
@endsection