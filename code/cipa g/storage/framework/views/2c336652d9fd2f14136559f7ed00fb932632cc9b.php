     <?php $__env->startSection('faq'); ?>
     <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<body>
	<form action="faq" method="POST">
		<?php echo e(csrf_field()); ?>

	<div class="box1">
    <div class="line2 wrapper">
    <h2><strong>P</strong>reviously <strong >A</strong>sked <strong>Q</strong>uestion</h2></div>
    <div class="form-horizontal">
<table class="table table-bordered">
    
	<?php $__currentLoopData = $con; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<td>
	<tr><?php echo e($value->question); ?></tr>
	<tr><?php echo e($value->answer); ?></tr>
</td>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<br><br>

<div>
	<h2 class="color2"><strong>P</strong>ost <strong>Y</strong>our <strong>Q</strong>uestion <strong>H</strong>ere</h2>
</div>
	
		<table class="table table-bordered">
		<tr>
		<td class="control-label col-sm-2"><h4>Question:</h4></td>
		<td><textarea  class="form-control" id="qu" name="question"  required="required"></textarea></td>
		</tr>
<tr>
			<td class="control-label col-sm-2"></td><td><input type="submit" name="SUBMIT" value="POST Question" class="button2 color3"></td>
		</tr>

</table>

</div>
</form>
</div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.faq', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>