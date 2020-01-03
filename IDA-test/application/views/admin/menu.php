<div class="admintools" style="overflow-y: scroll ">
<?php foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>


<!-- <?php  echo "string just to test out the data"; ?> -->
<?php echo $output; ?>


<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</div>
