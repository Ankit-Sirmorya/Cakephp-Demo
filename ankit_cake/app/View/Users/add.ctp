<!-- File: /app/views/users/add.ctp -->    

<h1>Add New User</h1>

<?php
echo $this->Form->create('User');
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('email');
echo $this->Form->input('mobile');
echo $this->Form->end('Save New User');
 
?>