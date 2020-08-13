<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<link rel="stylesheet" href="css/progressBar.css" />
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>


<p class="">"MY COUPLES ARE ROMANTICS AT HEART. THEY KNOW THAT AT THE END OF THE DAY, LIFE IS JUST SO MUCH SWEETER WHEN THEY’RE TOGETHER."</p> 
        
<p class="about">Jim was borned in Seattle area and went to school at Seattle Central to pursue a degree in Photography and Design. He lived for 8 years in Europe, and during this period he worked at Vogue Wedding Magazine. at Jim Carson Photography we realize the importance of these physical memories and the result is a stunning final presentation unveiling the beginning of your new life together.</p>



  <div class="row"> <svg class="radial-progress" data-percentage="100" viewBox="0 0 80 80">
    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 0;"></circle>
    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">Photography</text>
    </svg> <svg class="radial-progress" data-percentage="95" viewBox="0 0 80 80">
    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 147.3406954533613;"></circle>
    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">Photoshop</text>
    </svg> <svg class="radial-progress" data-percentage="83" viewBox="0 0 80 80">
    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 163.774330867872806;"></circle>
    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">Video</text>
    </svg> <svg class="radial-progress" data-percentage="99" viewBox="0 0 80 80">
    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 167.13272917097697;"></circle>
    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">Creativity</text>
    </svg></div>



<script>
    $("document").ready(function(){

        $('p:eq(0)').addClass('message');
        
});
</script>

<script>
$(function(){

    // Remove svg.radial-progress .complete inline styling
    $('svg.radial-progress').each(function( index, value ) { 
        $(this).find($('circle.complete')).removeAttr( 'style' );
    });

    // Activate progress animation on scroll
    $(window).scroll(function(){
        $('svg.radial-progress').each(function( index, value ) { 
            // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
            if ( 
                $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
            ) {
                // Get percentage of progress
                percent = $(value).data('percentage');
                // Get radius of the svg's circle.complete
                radius = $(this).find($('circle.complete')).attr('r');
                // Get circumference (2πr)
                circumference = 2 * Math.PI * radius;
                // Get stroke-dashoffset value based on the percentage of the circumference
                strokeDashOffset = circumference - ((percent * circumference) / 100);
                // Transition progress for 1.25 seconds
                $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
            }
        });
    }).trigger('scroll');

});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


 <?php include 'includes/footer.php';?>