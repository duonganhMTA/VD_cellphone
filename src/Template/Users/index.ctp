<h1>Blog user</h1>
<p><?= $this->Html->link("Add User", ['action' => 'add']) ?></p>
<div class="container">
    <div class="row">
        <div class="col-md-2">Fullname</div>
        <div class="col-md-1">Username</div>
        <div class="col-md-1">Address</div>
        <div class="col-md-2">Email</div>
        <div class="col-md-1">Sex</div>
        <div class="col-md-1">Role_flg</div>
        <div class="col-md-2">Created</div>
        <div class="col-md-2">Action</div>
    </div>
    <div class="row">
        <?php foreach($users as $tot): ?>
            <div class="col-md-2"><?= $tot->fullname ?></div>
            <div class="col-md-1"><?= $tot->username ?></div>
            <div class="col-md-1"><?= $tot->address ?></div>
            <div class="col-md-2"><?= $tot->email ?></div>
            <div class="col-md-1"><?= $tot->sex ?></div>
            <div class="col-md-1"><?= $tot->role_flg ?></div>
            <div class="col-md-2"><?= $tot->created ?></div>
            <div class="col-md-2">
                <?=$this->Form->postLink(
                    'Delete',
                    '/users/delete/' . $tot->id_user,
                    ['confirm'=>'Are you sure?']
                ) ?>
                <?= $this->Html->link('Edit','/users/edit/' .$tot->id_user)?>
            </div>
            <?php endforeach; ?>
    </div>
</div>
    <ul class="pagination">
        <li><?php echo $this->Paginator->numbers(); ?></li>
    </ul>
   
 <!-- <?php echo $this->Paginator->prev(' < ' . __('previous')); ?> 
<?php echo $this->Paginator->first('< first'); ?> 
<?php echo $this->Paginator->numbers(); ?> 
 <?php echo $this->Paginator->next(' next >'); ?>  
<?php echo $this->Paginator->last(' last >'); ?>-->


<link href="~/Content/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="~/Content/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    <script src="~/Content/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>