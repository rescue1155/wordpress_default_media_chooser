<div id="wpbody" role="main">
  <div class="wrap">
  <h1 class="wp-heading-inline">DMS Icon</h1>
    <form action="" method="post">

    </form>
  </div>
</div>

<div class="do_repeater">
<div class="do_field_repeater">
  <input type="text" name="extension_name[]" class="extension" value="" required="">
  <input type="text" name="image_url[]" id="image_url" class="image_url image" value="">
  <input type="button" name="upload-btn" id="upload-btn" class=" upload-btn button-secondary" value="Upload Image">
</div>
<div class="repeater"></div>
  <button class="do_add">Add</button>
  <button class="do_remove">Remove</button>
</div>

<script>
jQuery(document).ready(function($){
$('.do_add').on('click',function(e){
  $(this).closest('.do_repeater').find('.do_field_repeater').clone(true).appendTo('.repeater');
})

$('.upload-btn').click(function(e) {
    e.preventDefault();
    var thisObj = $(this);
    var image = wp.media({
        title: 'Upload Image',
        multiple: false
    }).open()
    .on('select', function(e){
        var uploaded_image = image.state().get('selection').first();
        //console.log(uploaded_image);
        var image_url = uploaded_image.toJSON().url;

        console.log(image_url);
        console.log(  thisObj.closest('.do_field_repeater').find('.image_url').val(image_url)  );
        //$('.image_url').val(image_url);
    });
});
});
</script>
