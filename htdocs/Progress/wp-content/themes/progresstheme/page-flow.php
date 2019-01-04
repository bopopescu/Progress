<?php
/*
Template Name: flow
*/
get_header();
?>
    <aside> 
        <?php get_sidebar(); //sidebar.phpを取得 ?>
    </aside>
    <section class="top-anim">
        <img src="<?php echo get_template_directory_uri(); ?>/img/flow/speedy.png" alt="top-img">
    </section>
    <section class="top-anim-sp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/flow/speedy_sp.png" alt="top-img">
    </section>
    <section class="flow-container">
        <div class="section-title">
            <h3 class="char-color">flow</h3>
            <div class="title">
                <h1>不<span class="char-color">用</span>品<span class="sm-char">回収の流れ</span></h1>
            </div>
            <h3 class="char-color">全力、迅速にスムーズな対応</h3>
            <p>ご連絡からお見積もり、不用品回収作業、適正処理まで迅速にスムーズに行います。<br>まずはお気軽にお問い合わせください！</p>
        </div>
        <section class="flow-contents">
            <div class="list-pc">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step1img.png" alt="pic">
                </div>
                <div class="step-l">
                    <span class="line"></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/operator-avatar.png" alt="icon" class="icon">
                    <h2 class="char-color">お問い合わせ</h2>
                    <p>電話orメールorLINEでお気軽にお問い合わせください。電話受付時間8時〜21時年中無休
                        メール・LINEは２４時間受付。
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/tel_num.png" alt="" >
                </div>
            </div>
            <div class="list-pc">
                <div class="step-r">
                    <span class="line"></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/clipboard.png" alt="icon" class="icon">
                    <h2 class="char-color">無料お見積もり訪問</h2>
                    <p>見積もりには10分程度のお時間を頂戴しその場で金額提示いたします。回収金額にご納得いただけなかった場合はご遠慮なくお断りください。回収費用にご納得いただいてのご契約となります。買い取れる不用品はその場で現金買い取り致します！見積もり当日の不用品回収も可！
                    </p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step2img.png" alt="point">
                </div>
            </div>
            <div class="list-pc">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step3img.png">
                </div>
                <div class="step-l">
                    <span class="line"></span> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/baggage.png" alt="icon" class="icon">
                    <h2 class="char-color">不用品引き取り・買い取り</h2>
                    <p>ご希望の日時に不用品回収にお伺いいたします。お忙しいお客様のお時間を無駄に出来ません！
                        分別や整理は必要ありませんので、そのままの状態でOKです。お客様と処分品を確認した後、
                        回収作業を行います！
                        （もちろん、お見積もり当日の不用品・粗大ゴミ回収も可能です！）
                    </p>
                </div>
            </div>
            <div class="list-pc">
                <div class="step-r">
                    <span class="line"></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/housekeeping.png" alt="icon" class="icon">
                    <h2 class="char-color">回収後のお掃除</h2>
                    <p>回収作業後はしっかりと掃除機でお部屋のお掃除をさせていただきます。特に粗大ゴミ回収後にはホコリも
                        キレイに回収いたします。回収させて頂くだけが不用品回収リングの仕事ではありません！
                        不用品回収・買い取り後も簡易掃除で気持ちよく対応させていただきます。
                    </p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step4img.png" alt="point">
                </div>
            </div>
            <div class="list-pc">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step5img.png" alt="point">
                </div>
                <div class="step-l">
                    <span class="line"></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/purse.png" alt="icon" class="icon">
                    <h2 class="char-color">作業完了・精算</h2>
                    <p>回収作業終了後、お客様にご確認して頂きその後、ご確認いたします。見積もり書に記載した金額のみ！
                        不用品対応作業後に追加料金が発生することは一切ありません。お客様にご挨拶し失礼いたします。
                        またの不用品回収・粗大ゴミ回収・不用品買い取りのご利用お待ちしております！
                    </p>
                </div>
            </div>
            <div class="list-pc">
                <div class="step-r">
                    <span class="line"></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/recycling.png" alt="icon" class="icon">
                    <h2 class="char-color">リサイクルに</h2>
                    <p>お客様より回収・買い取りした不用品・粗大ゴミは、家電リサイクル法をはじめ、各基準に基づいて適正に処理・
                        適正業者に委託いたします。また、不用品のほとんどをリユースするシステムを整えています。不用品リサイクルを
                        推し進め、エコにもつなげると同時に、不用品対応業界最安値を目指しております。
                    </p>
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step6img.jpg" alt="point">
                </div>
            </div>
        </section>
    </section>
    <section class="flow-container-sp">
        <div class="section-title">
            <div class="title">
                <h1>不<span class="char-color">用</span>品<span class="sm-char">回収の流れ</span></h1>
            </div>
            <span>flow</span>
            <span class="line"></span>
            <span>全力、迅速にスムーズな対応</span>
            <p>ご連絡からお見積もり、不用品回収作業、適正処理まで迅速にスムーズに行います。</p>
            <p>まずはお気軽にお問い合わせください！</p>
        </div>
        <section class="flow-contents-sp">
            <div class="list">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step1img_sp.png" alt="pic">
                </div>
                <span class="line"></span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/flow/operator-avatar_sp.png" alt="icon" class="icon">
                <span>お問い合わせ</span>
                <p>電話orメールorLINEでお気軽にお問い合わせください。電話受付時間8時〜21時年中無休
                    メール・LINEは２４時間受付。
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/flow/tel_num.png" alt="" >
            </div>
            <div class="list">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step2img_sp.png" alt="point">
                </div>
                <span class="line"></span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/flow/clipboard.png" alt="icon" class="icon">
                <span>無料お見積もり訪問</span>
                <p>見積もりには10分程度のお時間を頂戴しその場で金額提示いたします。回収金額にご納得いただけなかった場合は
                    ご遠慮なくお断りください。回収費用にご納得いただいてのご契約となります。買い取れる不用品はその場で現金
                    買い取り致します！
                    見積もり当日の不用品回収も可！
                </p>
            </div>
            <div class="list">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step3img_sp.png">
                </div>
                <span class="line"></span> 
                <img src="<?php echo get_template_directory_uri(); ?>/img/flow/baggage.png" alt="icon" class="icon">
                <span>不用品引き取り・買い取り</span>
                <p>ご希望の日時に不用品回収にお伺いいたします。お忙しいお客様のお時間を無駄に出来ません！
                    分別や整理は必要ありませんので、そのままの状態でOKです。お客様と処分品を確認した後、
                    回収作業を行います！
                    （もちろん、お見積もり当日の不用品・粗大ゴミ回収も可能です！）
                </p>
            </div>
            <div class="list">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step4img_sp.png" alt="point">
                </div>
                <span class="line"></span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/flow/housekeeping.png" alt="icon" class="icon">
                <span>回収後のお掃除</span>
                <p>回収作業後はしっかりと掃除機でお部屋のお掃除をさせていただきます。特に粗大ゴミ回収後にはホコリも
                    キレイに回収いたします。回収させて頂くだけが不用品回収リングの仕事ではありません！
                    不用品回収・買い取り後も簡易掃除で気持ちよく対応させていただきます。
                </p>
            </div>
            <div class="list">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step5img_sp.png" alt="point">
                </div>
                <span class="line"></span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/flow/purse.png" alt="icon" class="icon">
                <span>作業完了・精算</span>
                <p>回収作業終了後、お客様にご確認して頂きその後、ご確認いたします。見積もり書に記載した金額のみ！
                    不用品対応作業後に追加料金が発生することは一切ありません。お客様にご挨拶し失礼いたします。
                    またの不用品回収・粗大ゴミ回収・不用品買い取りのご利用お待ちしております！
                </p>
            </div>
            <div class="list">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flow/step6img_sp.jpg" alt="point">
                </div>
                <span class="line"></span>
                <img src="<?php echo get_template_directory_uri(); ?>/img/flow/recycling.png" alt="icon" class="icon">
                <span>リサイクルに</span>
                <p>お客様より回収・買い取りした不用品・粗大ゴミは、家電リサイクル法をはじめ、各基準に基づいて適正に処理・
                    適正業者に委託いたします。また、不用品のほとんどをリユースするシステムを整えています。不用品リサイクルを
                    推し進め、エコにもつなげると同時に、不用品対応業界最安値を目指しております。
                </p>
            </div>
        </section>
    </section>
    <section class="card">
        <span>各種クレジットカードもご利用いただけます</span>
        <img src="<?php echo get_template_directory_uri(); ?>/img/card_sp.png" alt="">
    </section>
    <section class="banner">
        <ul class="slider">
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner_mitsui.jpg" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner_STAFF.jpg" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner_VOICE.jpg" alt="">
            </li>
        </ul>
    </section>
    <div class="guideLine">
        <span>不用品回収リング TOPページ</span>
    </div>
<?php get_footer(); // footer.phpを取得　PHPで終了 ?>