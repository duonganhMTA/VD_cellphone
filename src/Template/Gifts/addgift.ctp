<html>
 <?= $this->Html->script('ckeditor/ckeditor');?>
<style>
   label{
      display: none;
   }
   .header_slide{
      display: none;
   }
   input{
    width:100%;
   }
   .content_top{
      display:none;
   }
  
</style>
 <h3 style="color:red;margin-left:500px;">Information gift</h3>
<div class="container" style="font-weight: bold;margin-bottom: 20px;">
   <div class="row" style="width:100%;margin-bottom:80px;">
      <?= $this->Form->create(null, ['url' => ['controller' => 'Gifts', 'action' => 'addgift']]); ?>
        <?php echo 'Gift name:'.'<br>'?>
        <?= $this->Form->input('name_gift');?>
        <?php echo 'Content:'.'<br>'?>
         <?= $this->Form->textarea('content_gift',array('class'=>'ckeditor','value'=>"")); ?>   
      <button class="sumb" type="submit" name="add" >Add</button>
      <?= $this->Flash->render() ?>
    <?php echo $this->Form->end();?>
   </div>
   <div class="clear"></div>
</div>

<script type=”text/javascript”>
    CKEDITOR.replace('content_gift', {
    language: 'vi',
    });
    htmlspecialchars('content_gift', ENT_COMPAT);//dùng cái này để mã hóa dữ liệu từ ckeditor
    html_entity_decode($data, ENT_QUOTES, 'UTF-8');//
 
</script>
</html>