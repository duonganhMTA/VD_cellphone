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
 <h3 style="color:black;">Comments</h3>
<div class="container" style="font-weight: bold;margin-bottom: 20px;">
   <div class="row" style="width:100%;margin-bottom:80px;">

        <?= $this->Form->create(null, ['url' => ['controller' => 'Comments', 'action' => 'addcomment']]); ?>
        <?= $this->Form->textarea('content',array('class'=>'ckeditor','value'=>"",'placeholder'=>'moi ban nhap binh luan')); ?>   
        <button class="sumb" type="submit" name="add" style="margin-right:0px";>Send</button>
        <?= $this->Flash->render() ?>
         <?php echo $this->Form->end();?>

   </div>
   <div class="clear"></div>
   <?=$this->Element('/comments/viewComment');?>
</div>

<script type=”text/javascript”>
    CKEDITOR.replace('content', {
    language: 'vi',
    });
    htmlspecialchars('content', ENT_COMPAT);//dùng cái này để mã hóa dữ liệu từ ckeditor
    html_entity_decode($data, ENT_QUOTES, 'UTF-8');//
 
</script>
</html>