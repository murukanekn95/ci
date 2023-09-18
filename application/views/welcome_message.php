<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php echo form_open('welcome/save_data', array('id' => 'myform')) ?>
    <input type="text" name="username" class="">
    <input type="file" name="logo[]" multiple class="" accept=".jpg, .jpeg, .png">
    <input type="checkbox" name="options[]" value="one">
    <input type="checkbox" name="options[]" value="two">
    <input type="checkbox" name="options[]" value="three">
    <input type="checkbox" name="options[]" value="four">
    <input type="submit" name="submit" value="Save">
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">
        $(document).on('submit',"#myform", function(e) {
          e.preventDefault();
                $.ajax({
          url: "<?php echo base_url(); ?>welcome/save_data",
          method: 'POST',
          data: new FormData(this),
          contentType:false,
          processData:false,
          success: function(data){
          
            data = JSON.parse(data);
            
          }
        });

        });
    </script>
  </body>
</html>