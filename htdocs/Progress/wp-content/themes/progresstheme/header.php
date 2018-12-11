<!DOCTYPE html>
<html <?php language_attributes(); //html要素のlang属性を出力 ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); //文字エンコーディング情報を出力 ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ===============**************************===================- -->
    <meta name="robots" content="noindex">
     <!-- ==================================- -->
    <title><?php wp_title( '|', true, 'right' );   //ページタイトルを出力 ?><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
    <?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入します ?>
</head>
<body>
    <header>
        <nav class="mb-nav">
            <div class="mb-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_SP.png" alt="logo">
            </div>
            <div class="mb-title">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo2_SP.png" alt="logo">
            </div>
            <div class="mb-menu">
                <div class="mb-hamburger">
                    <a class="menu-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
