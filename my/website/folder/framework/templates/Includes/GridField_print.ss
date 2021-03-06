<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<% if $Title %><title>$Title</title><% end_if %>
	</head>
	<body onload="window.print();">
		<% if $Title %><h3>$Title</h3><% end_if %>
		<table>
			<thead>
				<tr><% loop $Header %><th>$CellString</th><% end_loop %></tr>
			</thead>
			<tbody>
				<% if $ItemRows %>
				<% loop $ItemRows %>
					<tr><% loop $ItemRow %><td>$CellString</td><% end_loop %></tr>
				<% end_loop %>
				<% else %>
					<tr>
						<td colspan="$Header.Count"><p><% _t('GridField.NoItemsFound', 'No items found') %></p></td>
					</tr>
				<% end_if %>
			</tbody>
		</table>
		<p>
			<% _t('GridField.PRINTEDAT', 'Printed at') %> $Datetime.Time, $Datetime.Date
			<br />
			<% _t('GridField.PRINTEDBY', 'Printed by') %> $Member.Name
		</p>
	</body>

</html>
