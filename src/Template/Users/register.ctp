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
<h2 style="margin-left: 600px;margin-top: 50px;font-size: 40px;">Register</h2>
<div class="container" style="border:1px solid black; width:450px;height: 700px;margin-bottom:20px;">
    <div class="row" style="margin-left: 30px;">
      <?php echo $this->Form->create($user, array('require'));?>
        <?php echo 'Fullname:'.'<br>'.'<br>'?>
        <?= $this->Form->input('fullname',array('class'=>'form-control','placeholder'=>'fullname','type'=>'text','label'=>false,'required'=>false)) ?><br>
        <?php echo 'Username:'.'<br>'.'<br>'?>
        <?= $this->Form->input('username',array('class'=>'form-control','placeholder'=>'username','type'=>'text', 'label'=>false,'id'=>'username','required'=>false)) ?><br>
      <?php echo 'Password:'.'<br>'.'<br>'?>
      <?= $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Email','type'=>'password','label'=>false,'required'=>false)) ?><br>
      <?php echo 'Email:'.'<br>'.'<br>'?>
      <?= $this->Form->input('email',array('class'=>'form-control','placeholder'=>'Email','type'=>'email', 'id'=>'email','label'=>false,'required'=>false)) ?><br>
      <?php echo 'Address'.'<br>'.'<br>'?>
      <?= $this->Form->input('address',array('class'=>'form-control','placeholder'=>'address','type'=>'text','label'=>false,'required'=>false)) ?><br>
      <?php echo 'Sex'.'<br>'.'<br>'?>
      <div style="float:left">
       <?= $this->Form->input('sex', ['type' => 'checkbox','label'=>'Boy','value' =>'1','required'=>false]); ?>
      </div>
       <?= $this->Form->input('sex', ['type' => 'checkbox','label'=>'Girl','value' =>'0','required'=>false]); ?>
      <br>
      <?php echo 'Role_flg'.'<br>'.'<br>'?>
      <select name='role_flg'>
         <option value='0'>User</option>
         <option value='1'>Admin</option>
         <option value='2'>Manager</option>
      </select>
       <br><br><?=$this->Form->button('Submit');?>
      <?php echo $this->Form->end();?>
    </div>
</div>
</body>