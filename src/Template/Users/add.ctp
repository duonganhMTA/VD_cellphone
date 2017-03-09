<html>
<head>
    <style>
        form {
        width: 180px;
        margin-left: 557px;
        text-align: left;
    }
    button{
            font-family: inherit;
             font-size: inherit;
            line-height: inherit;
            margin-top: 41px;
            margin-bottom: 16px;
    }

    </style>
</head>
<body>
<h1>Add User</h1>
<?php
    echo $this->Form->create();
    echo $this->Form->input('fullname');
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->input('address');
    echo $this->Form->input('email');
    echo '<div class="checkbox"><b>Sex</b>
       <label><input type="checkbox" name="sex" value="1"> Nam</label>
       <label><input type="checkbox" name="sex" value="0"> Nữ</label>';
    echo '</div>';
    echo $this->Form->button(__('Save User'));
    echo $this->Form->end();
?>
</body>
</html>