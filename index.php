<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<link rel="stylesheet" href="css/grid.css" />

<div id="sale"></div>
<div class="row"> 
  <div class="column">
    <img src="images/beach-wedding.jpeg" alt="Wedding at Oregon Beach">
    <img src="images/bride-window.jpeg" alt="Bride looking at the window">
    <img src="images/castelo-jonny-meggie.jpg" alt="Jonny and Meggie Castle Wedding">
    <img src="images/castle-wedding-bornwild.jpeg" alt="Bornwild Castle Wedding">
  </div>
  <div class="column">
    <img src="images/mary-wedding-farm.jpg" alt="Wedding in a farm">
    <img src="images/wedding-in-the-rain.jpg" alt="Picture of couple in the rain">
    <img src="images/fall-weeding-christophers.jpeg" alt="Christophers Wedding in the fall 2018">
  </div> 
  <div class="column">
    <img src="images/robert-jenny-wedding.jpg" alt="Robert and Jenny Wedding 2016">
    <img src="images/rosely-wedding-mexico.jpg" alt="Elopement in Mexico">
    <img src="images/wedding-happiness.jpeg" alt="Happy couple after Wedding">
    <img src="images/forest-weeding.jpeg" alt="Wedding in a Forest at Pudget Sound">
  </div>
</div>

<script>
    $("document").ready(function () {
        var newP = $("<p>");
        newP.append("<em>Ends tomorrow! Enjoy extra 15% off</em>");
        $("#sale").html(newP);
        
        $('p:eq(0)').addClass('sale');
    });
</script>

<?php include 'includes/footer.php';?>