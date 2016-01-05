<?php
/*
    Template Name: Template Partner
*/
    ?>
<?php get_header(); ?>

<div class="main" Id="main">
      		<section class="wrap-slider">
		      	<div class="container">
		      		<div class="row">
		          		<div class="col-md-8 recent-width box-cate">
								<div class="entry-content clearfix">
                                    <ul id="myList">
                                    	<li>1</li>
                                    	<li>2</li>
                                    	<li>3</li>
                                    	<li>4</li>
                                    	<li>5</li>
                                    	<li>6</li>
                                    	<li>7</li>
                                    	<li>8</li>
                                    	<li>9</li>
                                    	<li>10</li>
                                    </ul>
                                    <div id="loadMore">Load more</div>
									<div id="showLess">Show less</div>
                                </div>
		          		</div>
		          		<div class="col-md-4 event-width">
		          			<?php
						        if( is_active_sidebar( 'colormag_right_sidebar' ) ) {
						           if ( !dynamic_sidebar( 'colormag_right_sidebar' ) ):
						           endif;
						        }
						    ?>
		          		</div>
		          	</div>
		      </div>
		    </section>
</div>


<?php get_footer(); ?>

<script>
	$(document).ready(function () {
	    size_li = $("#myList li").size();
	    x=3;
	    $('#myList li:lt('+x+')').show();
	    $('#loadMore').click(function () {
	        x= (x+5 <= size_li) ? x+5 : size_li;
	        $('#myList li:lt('+x+')').show();
	    });
	    $('#showLess').click(function () {
	        x=(x-5<0) ? 3 : x-5;
	        $('#myList li').not(':lt('+x+')').hide();
	    });
	});
</script>
