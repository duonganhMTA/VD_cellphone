       <?=$this->Html->css('register.css')?>
     <!--   <?= $this->Html->script('checklogin_register'); ?> -->
        <?= $this->fetch('meta'); ?>
        <?= $this->fetch('css') ;?>
        <?= $this->fetch('script'); ?>
<div class="wrapper">
  <h1>Register For An Account</h1>
   <?php echo $this->Form->create($user, array('require'));?>
        <?php echo '<h4>'.'Fullname:'.'</h4>'?>
        <?= $this->Form->input('fullname',array('class'=>'form-control','placeholder'=>'fullname','type'=>'text','label'=>false,'required'=>true)) ?>
        <?php echo '<h4>'.'Username:'.'</h4>'?>
        <?= $this->Form->input('username',array('class'=>'form-control','placeholder'=>'username','type'=>'text', 'label'=>false,'id'=>'username','required'=>true)) ?>
      <?php echo '<h4>'.'Password:'.'</h4>'?>
      <?= $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Email','type'=>'password','label'=>false,'required'=>true)) ?>
      <?php echo '<h4>'.'Email:'.'</h4>'?>
      <?= $this->Form->input('email',array('class'=>'form-control','placeholder'=>'Email','type'=>'email', 'id'=>'email','label'=>false,'required'=>true)) ?>
      <?php echo '<h4>'.'Address'.'</h4>'?>
      <?= $this->Form->input('address',array('class'=>'form-control','placeholder'=>'address','type'=>'text','label'=>false,'required'=>false)) ?>
      <?php echo '<h4>'.'Sex'.'</h4>'?>
      <div style="float:left">
       <?= $this->Form->input('sex', ['type' => 'checkbox','label'=>'Boy','value' =>'1','required'=>false]); ?>
      </div>
       <?= $this->Form->input('sex', ['type' => 'checkbox','label'=>'Girl','value' =>'0','required'=>false]); ?>
      
      <?php echo '<h4>'.'Role_flg'.'</h4>'?>
      <select name='role_flg'>
         <option value='0'>User</option>
         <option value='1'>Admin</option>
         <option value='2'>Manager</option>
      </select>
      <?=$this->Form->button('Submit');?>
      <a href="../users/login">
        <h4> <?= $this->Html->image('arrow-prev.png',array('alt'=>'CakePHP','style'=>'height:25px;width:25px;'))?>
         Back</h4>
      </a>
      <?php echo $this->Form->end();?>
    
</div>

