<!-- File: /app/views/users/index.ctp -->

<?php echo $this->Form->postLink('Add New User',array('controller' => 'users', 'action' => 'add')); ?>
<center><h1>Users Data</h1></center>
<table>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-mail</th>
        <th>Mobile</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['first_name']; ?></td>
        <td><?php echo $user['User']['last_name']; ?></td>
        <td><?php echo $user['User']['email']; ?></td>
        <td><?php echo $user['User']['mobile']; ?></td>
        <td>
        <?php echo $this->Form->postLink('Edit', array('action'=>'edit', $user['User']['id']));?> | 
        <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']), null, 'Are you sure?' )?>

        </td>
    </tr>
    <?php endforeach; ?>

</table>