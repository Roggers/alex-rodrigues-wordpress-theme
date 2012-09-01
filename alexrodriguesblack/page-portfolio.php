<?php  /* Template Name: Portfolio */  
    
      
      
    get_header();   
      
    query_posts('post_type=portfolio&posts_per_page=9');  
      


      
    ?>  
        <div id="main" class="col6 group">   
      
    <h2>My Work (Paid or For Fun)</h2>  
      
    <div class="group">  
      
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
      
        <?php  
            $title= str_ireplace('"', '', trim(get_the_title()));  
            $desc= str_ireplace('"', '', trim(get_the_content()));  
        ?>     
      
        <div class="item">  

                    <div class="img"><a title="<?=$title?>: <?=$desc?>" rel="lightbox[work]" href="<?php print  portfolio_thumbnail_url($post->ID) ?>"><?php the_post_thumbnail(); ?></a></div>  
                    <p><strong><?=$title?></strong> <?php print the_content(); ?> <a title="<?=$title?>: <?=$desc?>" rel="lightbox[work]" href="<?php the_permalink(); ?>">(Read More!)</a></p>  
                    <?php $site= get_post_custom_values('projLink');   
                        if($site[0] != ""){  
                      
                    ?>  
                        <p><a href="<?=$site[0]?>">Visit this project</a></p>  
                          
                    <?php }else{ ?>  
                        <p><em>No Preview link</em></p>  
                    <?php } ?>  
                </div>  
      
              
    <?php endwhile; endif; ?>  
      
    </div>  
      
    </div>  
      
    <?php get_footer(); ?>  