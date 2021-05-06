<?php get_header(); ?>
  <main>
    this is main content



          <ul>
          <?php
            $args = array(
              'posts_per_page' => 3, // 表示件数の指定
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ): // ループの開始
            setup_postdata( $post ); // 記事データの取得
          ?>
            <li>
              <!--a href="<?php the_permalink(); ?>"><?php the_title(); ?></a-->
              <h4>
                <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
              </h4>
              <section>
                <p>更新日時：<?php the_modified_date('Y年n月j日 H時i分'); ?></p>
                <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
              </section>
              <hr>
            </li>
          <?php
            endforeach; // ループの終了
            wp_reset_postdata(); // 直前のクエリを復元する
          ?>
          </ul>

  </main>
<?php get_footer(); ?>
