 <?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    
    
    <script type="text/javascript" src="validate.js"></script>

    <script type="text/javascript">
        $(document).ready(function()
        {   
            // Add US Phone Validation
            jQuery.validator.addMethod('phoneUS', function(phone_number, element) 
            {
            phone_number = phone_number.replace(/\s+/g, ''); 
            return this.optional(element) || phone_number.length > 9 &&
            phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
            }, 'Please enter a valid phone number.');

            $("#form").validate();
        });

    </script>
</head>
<body>
    <form action="" method="post" id="form">
        <fieldset>
            <label for="name">Name:<em>*</em></label>
            <input type="text" name="name" id="name" class="required" value="<?php echo $form['name'];?>">
            <?php echo $error['name']; ?>

            <label for="name">Phone (000=000=0000):<em>*</em></label>
            <input type="text" name="phone" id="phone" class="required phoneUS" value="<?php echo $form['phone'];?>">
            <?php echo $error['phone']; ?>

            <label for="name">Fax(000=000=0000):</label>
            <input type="text" name="fax" id="fax" value="<?php echo $form['fax'];?>">

            <label for="name">Email:<em>*</em></label>
            <input type="text" name="email" id="email" class="required email" value="<?php echo $form['email'];?>">
            <?php echo $error['email']; ?>

            <label for="name">Comments:</label>
            <input type="text" name="comments" id="comments" value="<?php echo $form['comments'];?>">

            <p class="required_msg">* required fields</p>

            <input type="submit" name="submit" id="submit">


        </fieldset>
    </form>
    
</body>
</html>