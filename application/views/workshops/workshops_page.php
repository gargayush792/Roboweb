
   
<?php if(!empty($pics)):?>


<ul id="wkshop-pics">
{pics}
<li>
    <img src="<?php echo base_url();?>uploads/{name}" alt="picture">
</li>
{/pics}
</ul>

<?php endif;?>
