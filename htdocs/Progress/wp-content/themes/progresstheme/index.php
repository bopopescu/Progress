<?php get_header(); // header.phpを取得　?>
    <aside> 
        <?php get_sidebar(); //sidebar.phpを取得 ?>
    </aside>
    <section id="content" class="clearfix">
        <section id="top-image">
            <div class="up-top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top_img.jpg" alt="">
            </div>
            <div class="slide">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide01.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide02.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide03.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide04.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide05.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide06.jpg" alt=""></li>
                </ul>
            </div>
        </section>
        <section id="top-image-sp">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/top_img_sp.jpg" alt="">
            </div>
            <!-- <div class="slide">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide1_sp.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide2_sp.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide3_sp.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide4_sp.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide5_sp.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/slide6_sp.jpg" alt=""></li>
                </ul>
            </div> -->
        </section>
        <section class="table-map">
            <h3 id="map-title">対応エリア</h3>
            
            <div class="map-describe">
                <div class="ja-map">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/map_main.png" alt="">
                </div>
                <div class="map-detail">
                    <h2>
                        全国に対応
                    </h2>
                    <div>
                        <p>不要品リングは全国21都道府県に拠点を構えており、全国で不用品<br>回収粗大ゴミ回収にお伺いすることが可能です。<br>他社に依頼したけど断られたという方や、近くに対応している不<br>
                        用品回収業者がなくてお困りの方など、ぜひプログレスにご相談<br>
                        ください。</p>
                        <section>※対応エリア外の隣接する地域も出張回収が可能な場合もございます。</section>
                        <section>お気軽にお問い合わせください。</section>
                    </div>
                </div>
            </div>
        </section>

        <section class="competitive-rates">
            <div class="section-title">
                <h1>激<span class="char-color">安</span><span class="sm-char">の理由</span></h1>
                <span>competitive rates</span>
            </div>
            <!-- <a href=""><i class="fas fa-arrow-alt-circle-right fa-3x"></i></a> -->
            
            <div class="competitive-comments">
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/balloon1.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/balloon2.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/balloon3.png" alt="">
                    </li>
                </ul>
            </div>
            <div class="competitive-comments-sp">
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/balloon1_SP.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/balloon2_SP.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/balloon3_SP.png" alt="">
                    </li>
                </ul>
            </div>
            <div class="character-image">
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/character02.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/character01.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/character03.png" alt="">
                    </li>
                </ul>
            </div>
            <div class="character-image-sp">
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/character02_SP.png" alt="">
                </span>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/character01_SP.png" alt="">
                </span>
                <span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/character03_SP.png" alt="">
                </span>
            </div>
            <div class="circle-rate">
                <div>
                    <p>どうしてもリサイクル</p>
                    <p>できない約２割の不要</p>
                    <p>品のみ処理工場で適切</p>
                    <p>に処理しています。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/70.png" alt="">
                </div>
            </div>
            <div class="competitive-items-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/img/item2.png" alt="">
            </div>
            <div class="competitive-items-sp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/item_SP.png" alt="">
            </div>
        </section>

        <section class="flow">
            <div class="section-title">
                <h1>不<span class="char-color">用</span>品<span class="sm-char">回収の流れ</span></h1>
                <span>flow</span>
            </div>
            <!-- <a href=""><i class="fas fa-arrow-alt-circle-right fa-3x"></i></a> -->
            <div class="flow-img-pc">
                <img src="<?php echo get_template_directory_uri(); ?>/img/step.png" alt="">
            </div>
            <div class="flow-img-sp">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/step_sp.png" alt="">
                </div>
                <div>
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/1_SP.png" alt="">
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/2_SP.png" alt="">
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/3_SP.png" alt="">
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/4_SP.png" alt="">
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/5_SP.png" alt="">
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/6_SP.png" alt="">
                        </li>

                    </ul>
                </div>
            </div>
        </section>

        <section class="reason">
            <div class="section-title">
                <h1>リングが<span class="char-color">選</span>ばれる<span class="sm-char">理由</span></h1>
                <span>reason</span>
            </div>
            <!-- <a href=""><i class="fas fa-arrow-alt-circle-right fa-3x"></i></a> -->
            <div class="reason-describe">
                <div class="r-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reason02.jpg" alt="" id="r-pic-left">
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT4.png" alt="">
                            <p>他の不用品回収業者より高ければご遠慮なくお申<br>
                            し付けください。</p>
                        </div>
                    </div>
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT5.png" alt="">
                            <p>不用品の高価買取ならアース東京まで！幅広く買<br>
                            取品目を設定しております。</p>
                        </div>
                    </div>
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT6.png" alt="">
                            <p>不用品回収前に正式見積書をご提出。以降に回収<br>
                            料金の追加は一切無く安心！</p>
                        </div>
                    </div>
                </div>
                <div class="r-center">
                    <div class="reason-circle-light">
                        <h2>
                            迅速対応
                        </h2>
                    </div>
                    <div class="reason-circle-dark">
                        <h2>
                            業界最安値
                        </h2>
                    </div>
                    <div class="reason-circle-light">
                        <h2>
                            見積無料
                        </h2>
                    </div>
                    <div class="reason-circle-dark">
                        <h2>
                            高価買取
                        </h2>
                    </div>
                    <div class="reason-circle-light">
                        <h2>
                            少量対応
                        </h2>
                    </div>
                    <div class="reason-circle-dark">
                        <h2>
                            追加料金ナシ
                        </h2>
                    </div>
                </div>
                <div class="r-right">
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT1.png" alt="">
                            <p>不用品1点でも回収にお伺い致します。TV１台から家１軒<br>
                            まるごと整理までおまかせください。</p>
                        </div>
                    </div>
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT2.png" alt="">
                            <p>不用品の量が分からない場合にも便利！<br>
                            お見積もりは完全に無料です。</p>
                        </div>
                    </div>
                
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT3.png" alt="">
                            <p>ご希望の日時に不用品回収に伺います。<br>
                            問い合わせも365日OK・即日対応！</p>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reason01.jpg" alt="" id="r-pic-right">
                </div>
                <div class="r-right-sp">
                    <div class="reason-point">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/POINT1_sp.png" alt="">
                        <p>不用品1点でも回収にお伺い致します。TV１台から家１軒<br>
                        まるごと整理までおまかせください。</p>
                    </div>
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT2_sp.png" alt="">
                            <p>不用品の量が分からない場合にも便利！<br>
                            お見積もりは完全に無料です。</p>
                        </div>
                    </div>
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT3_sp.png" alt="">
                            <p>ご希望の日時に不用品回収に伺います。<br>
                            問い合わせも365日OK・即日対応！</p>
                        </div>
                    </div>
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT4_sp.png" alt="">
                            <p>他の不用品回収業者より高ければご遠慮なくお申<br>
                            し付けください。</p>
                        </div>
                    </div>
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT5_sp.png" alt="">
                            <p>不用品の高価買取ならアース東京まで！幅広く買<br>
                            取品目を設定しております。</p>
                        </div>
                    </div>
                    <div class="reason-point">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/POINT6_sp.png" alt="">
                            <p>不用品回収前に正式見積書をご提出。以降に回収<br>
                            料金の追加は一切無く安心！</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="example"> 
            <!-- phpのブログ処理 -->
            <div class="section-title">
                <h1>買取事<span class="char-color">例</span><span class="sm-char">の紹介</span></h1>
                <span>example</span>
            </div>
            <!-- <a href=""><i class="fas fa-arrow-alt-circle-right fa-3x"></i></a> -->
            <div class="example-sales">
                <div class="example-prossece">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lv.jpg" alt="">
                        <h1>S様</h1>
                        <span>
                            電話も丁寧な対応で気持ち良く、安心してお願<br>
                            いできました。色々な要望にも丁寧に対応して<br>
                            もらって、スタッフさんも明るく笑顔で感じが<br>
                            良かったです。
                        </span>
            
                    </div>
                </div>
                <div class="customer-voice">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lv.jpg" alt="">
                    <h1>S様</h1>
                    <span>
                        電話も丁寧な対応で気持ち良く、安心してお願<br>
                        いできました。色々な要望にも丁寧に対応して<br>
                        もらって、スタッフさんも明るく笑顔で感じが<br>
                        良かったです。
                    </span>
                </div>
                <div class="customer-voice">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lv.jpg" alt="">
                    <h1>S様</h1>
                    <span>
                        電話も丁寧な対応で気持ち良く、安心してお願<br>
                        いできました。色々な要望にも丁寧に対応して<br>
                        もらって、スタッフさんも明るく笑顔で感じが<br>
                        良かったです。
                    </span>
                </div>
            </div> 
        </section>

        <section class="items">
            <div class="section-title">
                <h1>買取<span class="char-color">可</span>能品目</h1>
                <span>items</span>
            </div>
            <!-- <a href=""><i class="fas fa-arrow-alt-circle-right fa-3x"></i></a> -->
            <div class="sale-items">
                <table class="table-items" bordercolor="rgb(145, 177, 54)">
                    <tr>
                        <th>
                            <p>電化製品</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/kaden.png" alt="">
                        </th>
                        <th>
                            <p>家具類</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sofa.png" alt="">
                        </th>
                        <th>
                            <p>パソコン類</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/guitar.png" alt="">
                        </th>
                        <th>
                            <p>楽器類</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pc.png" alt="">
                        </th>
                        <th>
                            <p>ブランド品</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bag.png" alt="">
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <p>貴金属</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/watch.png" alt="">
                        </td>
                        <td>
                            <p>骨董品</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tsubo.png" alt="">
                        </td>
                        <td>
                            <p>ゲーム・玩具類</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/game.png" alt="">
                        </td>
                        <td>
                            <p>車両・バイク</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/car.png" alt="">
                        </td>
                        <td>
                            <p>農具・工具</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/drill.png" alt="">
                        </td>
                    </tr>
                </table>

            </div>
        </section>
        <section class="service"> 
            <ul>
                <li class="light">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service2_SP.png" alt="">
                    <a href="">
                        <h4>不用品サービス</h4>
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
                <li id="reform" class="dark">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service3_SP.png" alt="">
                    <a href="">
                        <h4>リフォーム・<br>ハウスクリーニング</h4>
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
                <li class="light">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service4_SP.png" alt="">
                    <a href="">
                        <h4>引っ越しサービス</h4>
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
                <li class="dark">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service5_SP.png" alt="">
                    <a href="">
                        <h4>不動産関連サービス</h4>
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
                <li class="light">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service7_SP.png" alt="">
                    <a href="">
                        <h4>家具組立・移動</h4>
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
                <li class="dark">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service8_SP.png" alt="">
                    <a href="">
                        <h4>遺品整理</h4>
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </section>
        <section class="voice">
            <div class="section-title">
                <h1>お客様<span class="sm-char">の<span class="char-color">声</span></span></h1>
                <span>voice</span>
            </div>
            <!-- <a href=""><i class="fas fa-arrow-alt-circle-right fa-3x"></i></a> -->
            <div class="voice-container">
                <div class="customer-voice">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/lv.jpg" alt="">
                        <h1>S様</h1>
                        <span>
                            電話も丁寧な対応で気持ち良く、安心してお願<br>
                            いできました。色々な要望にも丁寧に対応して<br>
                            もらって、スタッフさんも明るく笑顔で感じが<br>
                            良かったです。
                        </span>
            
                    </div>
                </div>
                <div class="customer-voice">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lv.jpg" alt="">
                    <h1>S様</h1>
                    <span>
                        電話も丁寧な対応で気持ち良く、安心してお願<br>
                        いできました。色々な要望にも丁寧に対応して<br>
                        もらって、スタッフさんも明るく笑顔で感じが<br>
                        良かったです。
                    </span>
                </div>
                <div class="customer-voice">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lv.jpg" alt="">
                    <h1>S様</h1>
                    <span>
                        電話も丁寧な対応で気持ち良く、安心してお願<br>
                        いできました。色々な要望にも丁寧に対応して<br>
                        もらって、スタッフさんも明るく笑顔で感じが<br>
                        良かったです。
                    </span>
                </div>
            </div>
        </section>
        <section class="questions">
            <div class="section-title">
                <h1>よくあるご<span class="char-color">質</span>問</h1>
                <p>question</p>
            </div>
            <!-- <a href=""><i class="fas fa-arrow-alt-circle-right fa-3x"></i></a> -->
            <table>
                <tbody class="question-table">
                    <tr>
                        <th>不用品対応の支払いはどうすればいいですか？</th>
                        <td>></td>
                        <tr class="answer">
                            <th>bjkg</th>
                            <td></td>
                        </tr>
                    </tr>
                    <tr>
                        <th>不用品対応の支払いはどうすればいいですか？</th>
                        <td>></td>
                    </tr>
                    <tr class="answer">
                        <th>bjkg</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>不用品対応の支払いはどうすればいいですか？</th>
                        <td>></td>
                    </tr>
                    <tr class="answer">
                        <th>bjkg</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>不用品対応の支払いはどうすればいいですか？</th>
                        <td>></td>
                    </tr>
                    <tr class="answer">
                        <th>bjkg</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="card">
            <span>各種クレジットカードもご利用いただけます</span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/card_sp.png" alt="">
        </section>
        <section class="banner">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/card_sp.png" alt="">
                </li>
            </ul>
        </section>
        <div class="guideLine">
            <span>不用品回収リング TOPページ</span>
        </div>
    </section>
<?php get_footer(); // footer.phpを取得　PHPで終了