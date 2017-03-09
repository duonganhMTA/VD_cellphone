<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h2 style="margin-left: 600px;margin-top: 50px;font-size: 40px;">Login</h2><br>
<div class="container" style="border:1px solid black; width:400px;height: 200px">
    <div class="row" style="margin-left: 30px;">
        <br>
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
