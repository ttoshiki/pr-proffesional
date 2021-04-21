<li class="card">
    <a href="<?php the_permalink(); ?>" class="card_img">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
        <?php else: ?>
            <img src="<?= esc_url( get_theme_file_uri() ); ?>/images/noimg.png" alt="No img">
        <?php endif; ?>
    </a>
    <div class="card_body">
        <div class="meta">
            <?php if ($column_terms) : ?>
                <p><a href="<?= esc_url($column_term_link); ?>" class="label"><?= esc_html($column_term_name); ?></a></p>
            <?php endif; ?>
            <span class="date"><time datetime="<?= esc_attr(get_the_date('Y-m-d')); ?>"><?= esc_html(get_the_date('Y.m.d')); ?></time></span>
        </div>
        <a href="<?php the_permalink(); ?>" class="ttl"><?php the_title(); ?></a>
    </div>
</li>
