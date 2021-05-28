<?php get_header(); ?>

<main class="container">
  <?php if(have_posts()){
        while(have_posts()){
            the_post();?>
            <h1 class="my-3"> <?php the_title() ?> </h1>
            <?php the_content(); ?>
      <?php }
  } ?>

  <div class="lista-productos my-5">
    <h2 class="text-center"> PRODUCTOS </h2>
    <div class="row">
      <div class = "col-12">
      <select name="categoria-productos" id="categoria-productos" class="form-control">
        <option value="">Todas las categorias</option>
        <?php $terms = get_terms('categoria-productos',array('hide_empty' => true));
          forEach($terms as $term){
              echo '<option value="'.$term->slug.'">'.$term->name.'</option>';
          }               
        ?>      
      </select>     
      </div>
    </div>
    <div id="resultado-producto" class="row justify-content">
      <?php
        $args = array(
            'post_type' => 'producto',
            'post_per_page' => -1
        );

        $productos = new WP_Query($args);
        if($productos->have_posts()){
          while($productos->have_posts()){
            $productos->the_post();
            ?>
            <div class="col-4">
              <figure>
                <?php the_post_thumbnail('large'); ?>
              </figure>
              <h4 class='my-3 text-center'>
                <a href="<?php the_permalink() ?>">
                  <?php the_title()?>
                </a>
              </h4>
            </div>
          <?php }
        }
       ?>
     </div>
     <div class="row">
        <div class="col-12">
        <h1>Novedades</h1>
        <div class="row" id="resultado-novedades">
        
        </div>
        
        </div>
     </div>
  </div>
</main>

<?php get_footer(); ?>
