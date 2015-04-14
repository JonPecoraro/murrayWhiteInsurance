@extends('layouts.default')

@section('headContent')
	{{ HTML::style("/css/story.css") }}
@endsection

@section('pageTitle')
	Our Story
@endsection

@section('content')
<p>
	{{ HTML::image("/img/murraySeniorScaled.jpg", "Murray White Senior", ["class" => "img-responsive img-rounded", "align" => "left"]) }} 
	Murray M. White, Inc. Was originally organized in July of 1937 after Murray M. White, Sr. agreed to purchase the assets
	of the Manufacturers Insurance Agency and the Furniture City Insurance Agency with the purpose of acting as an agency of
	Insurance Companies in the selling and soliciting of insurance coverage.
</p>
<p>
	Since that time the organization has grown from its original staff of three and it's original staff of three and its small
	office at 118 E. Commerce Street to its present location, 1911 N. Main Street. The primary source of income for the
	organization consists of commission income and service fees for various types of insurance coverages. The agency is proud
	of its growth in the high quality of its service to its customers.
</p>
<p>
	Murray M. White Sr., Secretary, General Manager and Founder semi-retired in 1969 due to ill health, and passed away
	November 26, 1971.
</p>
<p>
	The affairs of the agency are handled administratively by the officers and staff although the officers are responsible for
	establishing policy, approving new programs,  and delegating responsibility and authority. The agency's success is directly
	related to the loyalty and dedication of both the officers and the staff.
</p>
<p>
	Murray White Associates, Inc. is an affiliated company of Murray M. White, Inc. and was founded June 9, 1973 with the
	purpose of specializing in employee benefit programs, group life and medical long term disability, high limit accident,
	pension and profit sharing programs, individual life, disability income and hospital insurance.
</p>
@endsection