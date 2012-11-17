
<form method="post" action="index.php?r=prescription/create">
    <input type="text" name="pid"/>
    <input type="hidden" name="did" value="<?php echo $model->id?>"/>
    <button>search</button>
    <input type="submit">
</form>