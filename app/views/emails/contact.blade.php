<style>
	.tableBorder,
	.tableBorder td {
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>
<p>A message has been sent from a user on the website</p>
<table class="tableBorder">
	<tr>
		<td><strong>Name</strong></td>
		<td>{{{ $firstName }}} {{{ $lastName }}}</td>
	</tr>
	<tr>
		<td><strong>Email Address</strong></td>
		<td>{{{ $email }}}</td>
	</tr>
	<tr>
		<td><strong>Message</strong></td>
		<td>{{{ $contactMessage }}}</td>
	</tr>
</table>
