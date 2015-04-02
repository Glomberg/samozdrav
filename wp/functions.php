<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}
function no_more_jumping($post) {  
  return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Далее'.'</a>';  
}  
add_filter('the_content_more_link', 'no_more_jumping'); 
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
// pagination
function bazz_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span> ". __('Страницы: ', 'existentia') ." </span>\n<ul>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li><a href='' class='active'>".$i."</a></li>":
				 "<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
             }
         }
         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</ul>\n</div>\n";
     }
}
function slider() {
	print <<<HERE
	<div class="inner">
		<section class="slider">
			<div class="text">
				Комплекс &laquo;Самоздрав&raquo; - устраняет спазм<br>
				сосудов за счет нормализации газового<br>
				состава крови и может применяться при:<br>
				- артериальной гипертензии;<br>
				- стенокардии и аритмии;<br>
				- бронхиальной астме;<br>
				- мигрени и ряде других заболеваний.
			</div>
		</section>
		<section class="contacts">
			<div class="contacts-email">
				<div class="contacts-icon"></div>
				<span>SamoZdrav1@mail.ru</span>
			</div>
			<div class="contacts-phones">
				<div class="contacts-icon"></div>
				<span>8 (495) 374-71-86 (Мск)<br>
					8 (812) 643-20-47 (СПб)<br>
					8 (800) 500-51-86 (РФ)
				</span>
			</div>
		</section>		
	</div>
	<div class="clear"></div>
HERE;
}