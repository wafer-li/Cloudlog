<div class="container">
<h2><?php echo $page_title; ?></h2>


<?php if($status == true) { ?>

<p>The backup of your log completed successfully. The output can be found at: <a href="<?php echo base_url(); ?>backup/logbook.adi"><?php echo base_url() . $filename; ?></a></a></p>

<p>You could automate this process by making it a cronjob.</p>

<?php } else { ?>

<p>Something went wrong during the backup process. Check that the backup folder exists and is writeable by your web server user / group.</p>

<?php } ?>

</div>