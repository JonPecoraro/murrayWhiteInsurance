@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/whoAreWe.css") }}
@endsection

@section('pageTitle')
	Who Are We
@endsection

@section('content')
	<div class="row">
		<div class="col-xs-12">
			<p>
				{{ HTML::image("/img/groupPhotoScaled.jpg", "Murray White Insurance group photo", ["class" => "img-responsive img-rounded", "align" => "left"]) }}
				Murray White Insurance Agency is an independent insurance agency organized in 1937, with an accent on the word
				"independent". We represent many of the major insurance companies, but are not "obligated" to any one of them. 
				This gives us greater flexibility in how we serve our clients. We can choose from a wider range of policies and 
				features and thereby select the company and the coverage that precisely suits your requirements.
			</p>
			<p>
				Our logo and sign reads "general insurance" which means that we can provide insurance and bonds for virtually
				any type of business, for example:<br />
				<p>
					Commercial:<br />
					Auto dealers, Restaurants, Garages, Colleges, Universities, Churches, Schools, Contractors, Printers,
					Manufacturers, Machine shops, Environmental and Hazardous Waste, Warehouses, Retails and Wholesale,
					Airports and Aircraft
				</p>
				<p>
					Personal:<br />
					Homeowners, Farms, Renters, Auto, Personal Umbrella (Excess Liability), Watercraft, Personal Article Floaters
				</p>
			</p>
			<p>
				We have found that the combination of experience, training and talent yields the most professional service.
				That is why we maintain a staff of highly skilled people from a wide variety of insurance backgrounds. From
				our staff, to our services, to our office complex, professionalism is the cornerstone of our operation.
			</p>
			<p>
				Murray White Associates, Inc. started in 1937 as the life and health division of Murray White Insurance Agency.
				Murray White Associates, Inc. offers professional service regarding life, health, dental, disability, pension,
				estate planning and employee benefits. It is our goal to offer individuals and employers the most economical and
				comprehensive benefits available.
			</p>
			<p>
				For example, we offer individual life, health, dental, disability, and estate planning. We also offer
				short-term medical coverage to cover college students and people changing jobs. We provide travel accident
				coverage from trips abroad, Medicare supplement and long-term care coverage for the senior market.
			</p>
			<p>
				The following is a list of the employee benefits that we can provide:<br />
				<ul>
					<li>Life, accidental Death &amp; Dismemberment (AD&amp;D)</li>
					<li>Payroll Deduction Voluntary Life, Accident, Disability &amp; Cancer</li>
					<li>Medical-PPO &amp; HMO-Conventional and alternate Funding</li>
					<li>Dental Employer Sponsored and 100% Voluntary</li>
					<li>Short-Term and Long-Term Disability</li>
					<li>Prescription Drug Card</li>
					<li>Long Term Care Plans</li>
					<li>Travel Accident Plans</li>
					<li>College Student Accident/Medical &amp; Athletic Coverage</li>
				</ul>
			</p>
			<p>
				It is our goal to help individuals and employer groups navigate the complexities of the benefits necessary to
				provide the best possible protection and peace of mind in the working environment today.
			</p>
		</div>
	</div>
@endsection