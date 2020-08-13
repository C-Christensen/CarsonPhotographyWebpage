<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<link rel="stylesheet" href="css/pricing.css" />

<h2 class="pageID"><?=$heading2?></h2>



<div class="columns">
                <ul class="price">
                    <li class="header">Elopement</li>
                    <li class="grey">$ 120.00 / session</li>
                    <li>3 hour session</li>
                    <li>35 digital pictures</li>
                    <li>Seattle area</li>  
                    <li class="grey"><a href="contact.php" class="button"><b>Contact</b></a></li>
                </ul>
            </div>
            
            <div class="columns">
                <ul class="price">
                    <li class="header">Wedding</li>
                    <li class="grey">$ 250.00 / session</li>
                    <li>6 hour session</li>
                    <li>120 digital and printed pictures</li>
                    <li>Pre-wedding session</li>
                    <li>Washinton area</li>
                    <li class="grey"><a href="contact.php" class="button"><b>Contact</b></a></li>
                </ul>
            </div>

            <div class="columns">
                <ul class="price">
                <li class="header">Mini Wedding</li>
                <li class="grey">$ 180.00 / session</li>
                <li>4 hour session</li>
                <li>50 printed pictures</li>
                <li>Washinton area</li>
                <li class="grey"><a href="contact.php" class="button contact"><b>Contact</b></a></li>
                </ul>
            </div>

 <script>
     $("document").ready(function(){
        var $ul = $('ul');
        $ul.hide().each(function(index) {
            $(this).delay(500 * index).fadeIn(400);
            });

         $ul.on('load', function() {
             $(this).fadeOut(700);
        });
});
</script>  
<script>
    $("document").ready(function(){

        // Get the background color of the first list item.
        var backgroundColor = $('ul li').eq(11).css('background-color', '#000' );
        
});
</script>



<?php include 'includes/footer.php';?>