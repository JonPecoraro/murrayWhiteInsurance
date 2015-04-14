<style>
	.tableBorder,
	.tableBorder td {
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>
<h3>Contact Information</h3>
<table class="tableBorder">
	<tr>
		<td><strong>Number</strong></td>
		<td>{{ $phone }}</td>
	</tr>
	<tr>
		<td><strong>Mailing Address</strong></td>
		<td>{{ $mailingAddress }}</td>
	</tr>
	<tr>
		<td><strong>Garaging Address</strong></td>
		<td>{{ $garagingAddress }}</td>
	</tr>
	<tr>
		<td><strong>County</strong></td>
		<td>{{ $county }}</td>
	</tr>
	<tr>
		<td><strong>Current Auto Policy Premium & Coverage</strong></td>
		<td>{{ $currentPremium }}</td>
	</tr>
	<tr>
		<td><strong>Non-Drivers</strong></td>
		<td>{{ $nonDrivers[0] }}</td>
	</tr>
</table>

<h3>Insured Drivers</h3>
<?php $counter = 1; ?>
@while (true)
	<?php if (!isset(${"firstName_" . $counter})) break; ?>
	<table class="tableBorder">
		<tr>
			<td><strong>Name</strong></td>
			<td>{{ ${"firstName_" . $counter} }} {{ ${"lastName_" . $counter} }}</td>
		</tr>
		<tr>
			<td><strong>Date of Birth</strong></td>
			<td>{{ ${"dateOfBirthMonth_" . $counter} }}/{{ ${"dateOfBirthDay_" . $counter} }}/{{ ${"dateOfBirthYear_" . $counter} }}</td>
		</tr>
		<tr>
			<td><strong>SSN</strong></td>
			<td>{{ ${"social_" . $counter} }}</td>
		</tr>
		<tr>
			<td><strong>License Number</strong></td>
			<td>{{ ${"license_" . $counter} }}</td>
		</tr>
		<tr>
			<td><strong>State</strong></td>
			<td>{{ ${"state_" . $counter} }}</td>
		</tr>
	<table>
	<br />
	<?php $counter++; ?>
@endwhile

<h3>Vehicle Information</h3>
<?php $counter = 1; ?>
@while (true)
	<?php if (!isset(${"vehicleYear_" . $counter})) break; ?>
	<table class="tableBorder">
		<tr>
			<td><strong>Vehicle</strong></td>
			<td>{{ ${"vehicleYear_" . $counter} }} {{ ${"make_" . $counter} }} {{ ${"model_" . $counter} }}</td>
		</tr>
		<tr>
			<td><strong>VIN Number</strong></td>
			<td>{{ ${"vinNumber_" . $counter} }}</td>
		</tr>
		<tr>
			<td><strong>Mileage</strong></td>
			<td>{{ ${"mileage_" . $counter} }}</td>
		</tr>
		<tr>
			<td><strong>Usage</strong></td>
			<td>{{ ${"usage_" . $counter} }}</td>
		</tr>
		<tr>
			<td><strong>Special Features</strong></td>
			<td>{{ ${"features_" . $counter} }}</td>
		</tr>
	<table>
	<br />
	<?php $counter++; ?>
@endwhile

