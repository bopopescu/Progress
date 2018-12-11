<?php if ( have_posts() ) : // もし投稿があるなら　?>
    投稿を出力する前に表示する内容
    <?php while ( have_posts() ) : the_post(); // 繰り返し処理（ループ）開始　?>
        投稿の内容を表示
    <?php endwhile; // 繰り返し処理終了?>
    投稿を出力したあとに表示する内容
<?php else : // 投稿がない場合　?>
    投稿がない場合に表示する内容
<?php endif;    // 条件分岐終了　?>