<h2>Listing Posts</h2>
<br>
<?php if ($posts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Slug</th>
			<th>Summary</th>
			<th>Body</th>
			<th>User id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->slug; ?></td>
			<td><?php echo $item->summary; ?></td>
			<td><?php echo $item->body; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td>
				<?php echo Html::anchor('admin/posts/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/posts/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/posts/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Posts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/posts/create', 'Add new Post', array('class' => 'btn btn-success')); ?>

</p>
