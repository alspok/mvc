$form = new FormHelper('POST', '/alspok/oop/mvc/index.php/posts/add/store');

<div class="panel-body"></div>
<h2>Registration</h2>
	<table>
		<tr><td>Name:</td><td><?php $form->input(['name' => 'name', 'type' => 'text', 'placeholder' => '']); echo $form->get(); ?></tc></tr>
		<tr><td>E.mail:</td><td><?php $form->input(['name' => 'email', 'type' => 'text', 'placeholder' => '']); echo $form->get(); ?></td></tr>
		<!-- <tr><td>Pass:</td><td><?php $form->input(['name' => 'pass', 'type' => 'text', 'placeholder' => '']); echo $form->get(); ?></td></tr>
		<tr><td>Conf pass:</td><?php $form->input(['name' => 'confpass', 'type' => 'text', 'placeholder' => '']); echo $form->get(); ?><td></td></tr> -->
	</table>