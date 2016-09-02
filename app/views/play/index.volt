{{content()}}


<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Description</th>
			<th>Company</th>
			<th>Price</th>
			<th>Info</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			{% for game in games %}
			<td>{{game.getId()}}</td>
			<td>{{game.getName()}}</td>
			<td>{{game.getDescription()}}</td>
			<td>{{game.getCompany()}}</td>
			<td>{{game.getCost()}}</td>
			<td></td>
		</tr>
			{% endfor %}
	</tbody>
</table>
