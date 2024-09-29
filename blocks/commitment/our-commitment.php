<!-- Our Commitment -->
<?php 
$oc_title = get_field('oc_title');
$oc_desc_1 = get_field('oc_desc_1');
$oc_desc_2 = get_field('oc_desc_2');
?>
<section class="commitment-message section-gap">
  <div class="container">
    <div class="cm-content">
      <h4><?php echo $oc_title;?></h4>
      <div class="para-wrapper">
        <?php echo $oc_desc_1; ?>
        <?php echo $oc_desc_1; ?>
      </div>
    </div>
  </div>
</section>
<!-- !Our Commitment -->
