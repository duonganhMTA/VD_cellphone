<?php echo $this->Html->script('ckeditor/ckeditor');?>
<style>
   label{
      display: none;
   }
</style>
<div class="container" style="font-weight: bold;margin-bottom: 20px;">
   <h3 ">Add News</h3> 
   <div class="row" style="width:100%;margin-left: 400px;">
      <?= $this->Form->create(null, ['url' => ['controller' => 'News', 'action' => 'addnews']]); ?>
        <?php echo 'News name:'.'<br>'?>
        <?php echo $this->Form->input('name_news');?>
        <?php echo 'Content:'.'<br>'?>
         <?= $this->Form->textarea('content',array('class'=>'ckeditor','value'=>"")); ?>   
      <button class="sumb" type="submit" name="add" >Add</button>
      <?= $this->Flash->render() ?>
    <?php echo $this->Form->end();?>
   </div>
     
</div>

<script type=”text/javascript”>

    CKEDITOR.replace('content', {
    language: 'vi',
    });
    htmlspecialchars('content', ENT_COMPAT);//dùng cái này để mã hóa dữ liệu từ ckeditor
    html_entity_decode($data, ENT_QUOTES, 'UTF-8');//
 
</script>