<legend>
	Manage your libraries
	<div class="btn-group pull-right">
		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="icon-cog"></i> Tools <span class="caret"></span>
		</a>
		<ul class="dropdown-menu">
			<li><a href="/libraries/import"><i class="icon-cloud-upload"></i> Import references</a></li>
			<li><a href="/libraries/export"><i class="icon-cloud-download"></i> Export references</a></li>
			<li class="divider"></li>
			<li><a href="/libraries/dedupe"><i class="icon-resize-small"></i> Eliminate Duplicates</a></li>
		</ul>
	</div>
</legend>

<script type="batt" src="/batt/schema"></script>
<script type="batt">
[
	{
		uses: 'libraries',
		type: 'table',
		dataSource: {
			table: 'libraries',
			filter: {},
		},
		columns: [
			{
				type: 'dropdown',
				children: [
					{
						title: 'View',
						action: '/libraries/view/{{data._id}}'
					},
					{
						title: 'Edit',
						action: '/libraries/edit/{{data._id}}'
					},
					{
						title: 'Detect duplicates',
						action: '/libraries/dupes/{{data._id}}'
					},
					{
						title: 'Delete',
						action: '/libraries/delete/{{data._id}}'
					},
				]
			},
			{
				type: 'link',
				title: 'Title',
				text: "{{data.title}}",
				action: '/libraries/view/{{data._id}}'
			}
		]
	},
	{
		type: 'button',
		action: '/libraries/create',
		text: '<i class="icon-plus"></i> Create new library',
		class: 'btn btn-success'
	}
]
</script>
