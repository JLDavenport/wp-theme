<?php
/* Template Name: Sections */
	get_header();
	remove_filter( ‘the_content’, ‘wpautop’ );
	remove_filter( ‘the_excerpt’, ‘wpautop’ );
?>
<main class="post">
    <div class="container">
      <div class="row">
	  
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="col-xs-12 col-sm-10 col-sm-offset-1">
            <div class="panel post">
              <div class="panel-body">
				<div class="post-content" itemprop="articleBody">
				
					<div class="text-center">
					  <img src="/wp-content/uploads/2017/12/map.png" alt="Western Region map" id="map" usemap="#western-region-map">
					  <map name="western-region-map">
						<area  alt="" title="" href="/sections/1N" shape="poly" coords="140,2,185,3,170,45,142,45" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/1E" shape="poly" coords="191,6,173,49,183,60,182,82,193,94,186,124,243,134,255,58,238,35,237,12" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/2W" shape="poly" coords="259,77,269,100,291,98,308,105,317,134,357,137,357,156,318,159,319,216,295,219,270,225,249,246,244,230,223,223,223,210,234,210,238,201,254,201,257,135,250,133,248,93" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/2N" shape="poly" coords="245,11,244,27,260,47,260,70,275,93,298,87,301,99,314,99,326,135,342,131,365,130,364,155,355,163,367,167,375,177,396,173,417,178,425,96,392,73,383,30,360,17" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/2S" shape="poly" coords="326,164,348,163,354,172,367,179,392,177,395,189,418,183,417,228,359,226,354,220,348,220,340,209,324,210" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/6E" shape="poly" coords="314,226,321,226,324,216,337,218,351,229,398,233,400,311,374,314,373,333,352,316,335,318,323,304,323,258,310,253,310,231" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/6W" shape="poly" coords="210,214,219,215,217,227,241,232,243,254,267,242,270,232,304,225,303,257,318,261,319,307,331,327,292,327,239,308,195,304,190,293,235,293,240,263,206,227" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/4S" shape="poly" coords="193,248,220,248,236,262,233,287,189,287" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/4N" shape="poly" coords="186,216,196,217,216,244,193,242,185,274,174,277,147,255,146,243,148,238,187,241" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/3S" shape="poly" coords="136,206,147,208,149,198,166,198,184,234,142,232" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/3N" shape="poly" coords="130,198,141,202,146,192,168,191,183,211,201,210,206,203,229,205,235,194,245,195,252,142,181,132,177,149,136,140,127,158,119,167" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/1S" shape="poly" coords="122,153,128,136,174,142,175,126,185,129,186,121,179,117,186,91,178,86,179,60,142,46,122,105,115,147" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/1N" shape="poly" coords="9,2,90,5,124,58,112,66,81,54,28,82,9,70,8,53" style="outline:none;" target="_self">
						<area  alt="" title="" href="/sections/6P" shape="poly" coords="7,124,61,114,92,140,96,216,117,227,105,254,131,314,102,336,10,333" style="outline:none;" target="_self">
					  </map>
					</div>

					<hr>
					<h2>Western Region Sections</h2>
					<?php echo file_get_contents('http://western.oa-bsa.org/includes/sectionchiefs.php'); ?>
					<?php the_content(__('<div class="read-more"><p class="btn btn-block btn-default">Read More</p></div>'));?>
				</div>
              </div>
			  <div class="panel-footer">
				<div class="post-date date">
				  <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" itemprop="datePublished">
					Published <?php the_time('F jS, Y') ?>
				  </time>
				  <?php edit_post_link('edit', '<a>', '</a>'); ?> <br> by <?php the_author(); ?> 
				</div>
			 </div>
            </div>
          </div>
		  
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		
<?php require_once('footer.php'); ?>