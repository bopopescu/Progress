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
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/competitive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/flow.css" />
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script> -->
    <?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入します ?>
</head>
<body>
    <header>
        <nav class="mb-nav">
            <div class="mb-logo">
                <a href="/Progress">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_SP.png" alt="logo">
                </a>
            </div>
            <div class="mb-title">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo2_SP.png" alt="logo">
            </div>
            <div class="mb-menu">
                <a class="menu-trigger">
                    <span></span>
                    <span></span>
                    <div>MENU</div>
                </a>
            </div>
        </nav>
        <div class="menu-contents">
            <ul class="f-contents">
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">選ばれる理由</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">不用品サービス</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">リフォーム・ハウスクリーニング</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">引っ越しサービス</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">家具組立・移動サービス</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">不動産売却・解体工事</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">各種クレジットカード<br>ご利用いただけます</a>
                </li>
            </ul>
            <ul class="f-contents">
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">買取対応品目一覧</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">サービスの流れ</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">法人のお客様</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">不用品の行方</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">お客様の声</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">買取事例のご紹介</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">よくあるご質問</a>
                </li>
            </ul>
            <ul class="f-contents">
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">当社の強み</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">会社概要</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">プライバシーポリシー</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">スタッフ紹介</a>
                </li>
                <li>
                    <i class="fas fa-angle-right"></i>
                    <a href="">無料見積相談フォーム</a>
                </li>
            </ul>
        </div>
    </header>
