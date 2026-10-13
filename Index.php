<?php get_header(); ?>

<main class="container py-5">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('mb-5'); ?>>
                <h1 class="mb-3"><?php the_title(); ?></h1>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>

    <?php else : ?>

        <article>
            <h1>Aucun contenu trouvé</h1>
            <p>La page demandée n’existe pas ou aucun article n’a été trouvé.</p>
        </article>

    <?php endif; ?>
</main>

<?php get_footer(); ?>