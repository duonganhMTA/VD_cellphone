<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <?= $this->Html->charset() ;?>
    <?=$this->Html->css('login.css')?>

        <?= $this->fetch('meta'); ?>
        <?= $this->fetch('css') ;?>
        <?= $this->fetch('script'); ?>
</head>
<body style="font-size:30px;background: url(../img/dark_wall.png) fixed ;background-repeat: no-repeat;background-size: 100% 100%;">
<h2>Login</h2><br>
<div class="container">
    <div class="row">
        <?=$this->Form->create();?>
        <?=$this->Form->input('username');?><br>
        <?=$this->Form->input('password');?><br>
        <?=$this->Form->button('Login');?><br>
        <?php echo '(Do you have not an account?)'?>
        <?=$this->Html->link('Register',['action'=>'../users/register'])?>
        <?=$this->Flash->render()?>
        <?=$this->Form->end();?>
  
  </div>
</div>
</body>
</html>
