<?php

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/general-page-intro",null);
get_template_part("/template-parts/landing-page/blog-list",null);


?>
<div class="otp-input-fields">
  <input type="number" class="otp__digit otp__field__1">
  <input type="number" class="otp__digit otp__field__2">
  <input type="number" class="otp__digit otp__field__3">
  <input type="number" class="otp__digit otp__field__4">
  <input type="number" class="otp__digit otp__field__5">
  <input type="number" class="otp__digit otp__field__6">
</div>
<?php get_footer()?>