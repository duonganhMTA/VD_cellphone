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
<div class="container" style="border:1px solid white; width:450px;height: 700px;margin-bottom:20px;background-color: black;">
    <div class="row" style="margin-left: 30px;background-color:black;margin-right: 30px;">
      <?php echo $this->Form->create($user, array('require'));?>
        <b style="color:white;"><?php echo 'Fullname:'.'<br>'.'<br>'?></b>
        <?= $this->Form->input('fullname',array('class'=>'form-control','placeholder'=>'fullname','type'=>'text','label'=>false,'required'=>false)) ?><br>
        <b style="color:white;"><?php echo 'Username:'.'<br>'.'<br>'?></b>
        <?= $this->Form->input('username',array('class'=>'form-control','placeholder'=>'username','type'=>'text', 'label'=>false,'id'=>'username','required'=>false)) ?><br>
      <b style="color:white;"><?php echo 'Password:'.'<br>'.'<br>'?></b>
      <?= $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Email','type'=>'password','label'=>false,'required'=>false)) ?><br>
      <b style="color:white;"><?php echo 'Email:'.'<br>'.'<br>'?></b>
      <?= $this->Form->input('email',array('class'=>'form-control','placeholder'=>'Email','type'=>'email', 'id'=>'email','label'=>false,'required'=>false)) ?><br>
      <b style="color:white;"><?php echo 'Address'.'<br>'.'<br>'?></b>
      <?= $this->Form->input('address',array('class'=>'form-control','placeholder'=>'address','type'=>'text','label'=>false,'required'=>false)) ?><br>
      <b style="color:white;"><?php echo 'Sex'.'<br>'.'<br>'?></b>
      <div style="float:left">
       <?= $this->Form->input('sex', ['type' => 'checkbox','label'=>'Boy','value' =>'1','required'=>false]); ?>
      </div>
       <?= $this->Form->input('sex', ['type' => 'checkbox','label'=>'Girl','value' =>'0','required'=>false]); ?>
      <br>
      <b style="color:white;"><?php echo 'Role_flg'.'<br>'.'<br>'?></b>
      <select name='role_flg'>
         <option value='0'>User</option>
         <option value='1'>Admin</option>
         <option value='2'>Manager</option>
      </select>
       <b style="color:black;"><br><br><?=$this->Form->button('Submit');?></b>
      <?php echo $this->Form->end();?>
    </div>
</div>
</body>
