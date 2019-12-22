<?php template_event(TEMPLATE_BEFORE_FOOTER); ?>

           </div> <!-- /main --> 
        </div>  <!-- /row -->

 </div>  <!-- /container-fluid -->
 
 
 <?php 
 template_event(TEMPLATE_FOOTER_BEGIN);
 
 if (!template_event(TEMPLATE_REPLACE_FOOTER)) 
 wp_footer(); 
 
 template_event(TEMPLATE_FOOTER_END);
 ?>   
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
 
 <script type="text/javascript">  
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
 
 <?php template_event(TEMPLATE_AFTER_FOOTER); ?>
    
</body>

</html>