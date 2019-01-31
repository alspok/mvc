<table>
		<tr>
			<td style="width: 100px">Name:</td><td><?php $form->input(['name' => 'name', 'type' => 'text', 'placeholder' => '']); echo $form->get(); ?></td>
		</tr>
		<tr>
			<td style="width: 100px">E.mail:</td><td><?php $form->input(['name' => 'email', 'type' => 'text', 'placeholder' => '']); echo $form->get(); ?></td>
		</tr>
		<tr>
			<td style="width: 100px">Pass:</td><td><?php $form->input(['name' => 'pass', 'type' => 'password', 'placeholder' => '']); echo $form->get(); ?></td>
		</tr>
		<tr>
			<td style="width: 100px">Conf pass:</td><?php $form->input(['name' => 'confpass', 'type' => 'password', 'placeholder' => '']); echo $form->get()?><td></td>
		</tr>
		<tr>
			<td style="width: 100px">Pass:</td><td><?php $form->input(['name' => 'submit', 'type' => 'submit', 'placeholder' => '']); echo $form->get(); ?></td>
		</tr>
</table>