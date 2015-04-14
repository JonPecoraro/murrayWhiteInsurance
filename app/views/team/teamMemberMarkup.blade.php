<li class="clearfix">
	<div class="pull-left">
		<?php $linkAddress = str_replace(".jpg", "_large.jpg", $teamMember->image) ?>
		<a href="{{ $linkAddress }}">
			{{ HTML::image($teamMember->image, $teamMember->first_name . " " . $teamMember->last_name) }}
		</a>
	</div>
	<div ="pull-right">
		<ul class="teamMemberInfo">
			<li>
				<?php
					$name = $teamMember->first_name . " " . $teamMember->last_name;
					if (strlen($teamMember->suffix))
					{
						$name = $name . ", " . $teamMember->suffix;
					}
					if (strlen($teamMember->qualifications))
					{
						$name = $name . ", " . $teamMember->qualifications;
					}
				?>
				{{ $name }}
			</li>
			<li>{{ $teamMember->position }}</li>
			<li>Extension: {{ $teamMember->extension }}</li>
			<li>{{ HTML::link("mailto:" . $teamMember->email, "Email " . $teamMember->first_name) }}</li>
		</ul>
	</div>
</li>