<?php 

//Template Name: Pagina institucional

get_header(); 

$fields = get_fields();

?>

<main class='container'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <h1 class='my-3'> <?php echo $fields['titulo']; ?></h1>

            <image src="<?php echo $fields['imagen'];?>"/>
                
            <hr>
            
            <?php the_content(); ?>

         <?php }
    }?>
</main>

<?php get_footer(); ?>
