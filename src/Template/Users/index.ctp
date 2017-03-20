<div class="container">
<p style="margin-left:500px;"><?= $this->Html->link("Add User", ['action' => 'add']) ?></p>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Fullname</th>
        <th>Username</th>
        <th>Address</th>
        <th>Email</th>
        <th>Sex</th>
        <th>Role_flg</th>
        <th>Created</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
         <?php foreach($users as $tot): ?>
      <tr>
        <td><?= $tot->fullname ?></td>
        <td><?= $tot->username ?></td>
        <td><?= $tot->address ?></td>
        <td><?= $tot->email ?></td>
        <td><?= $tot->sex ?></td>
        <td><?= $tot->role_flg ?></td>
        <td><?= $tot->created ?></td>
        <td><?=$this->Form->postLink(
                    'Delete',
                    '/users/delete/' . $tot->id_user,
                    ['confirm'=>'Are you sure?']
                ) ?>
                <?= $this->Html->link('Edit','/users/edit/' .$tot->id_user)?></td>
      </tr>
       <?php endforeach; ?>
    </tbody>
  </table>
</div>

    <div class="pagination">
        <li><?php echo $this->Paginator->numbers(); ?></li>
    </div>
<style>
    .content_top{
        display:none;
    }
    .header_slide{
        display:none;
    }
</style>


