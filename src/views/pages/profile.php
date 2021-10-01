<?= $render('header', ['loggedUser' => $loggedUser]); ?>

<section class="container main">
    <?= $render('sidebar', ['activeMenu' => 'profile']); ?>

    <section class="feed">

        <div class="row">
            <div class="box flex-1 border-top-flat">
                <div class="box-body">
                    <div class="profile-cover" style="background-image: url('<?= $base; ?>/media/covers/<?= $user->cover; ?>');"></div>
                    <div class="profile-info m-20 row">
                        <div class="profile-info-avatar">
                            <img src="<?= $base; ?>/media/avatars/<?= $user->avatar; ?>" />
                        </div>
                        <div class="profile-info-name">
                            <div class="profile-info-name-text"><?= $user->name; ?></div>
                            <div class="profile-info-location"><?= $user->city; ?></div>
                        </div>
                        <div class="profile-info-data row">
                            <div class="profile-info-item m-width-20">
                                <div class="profile-info-item-n"><?= count($user->followers); ?></div>
                                <div class="profile-info-item-s">Seguidores</div>
                            </div>
                            <div class="profile-info-item m-width-20">
                                <div class="profile-info-item-n"><?= count($user->following); ?></div>
                                <div class="profile-info-item-s">Seguindo</div>
                            </div>
                            <div class="profile-info-item m-width-20">
                                <div class="profile-info-item-n"><?= count($user->photos); ?></div>
                                <div class="profile-info-item-s">Fotos</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="column side pr-5">

                <div class="box">
                    <div class="box-body">

                        <div class="user-info-mini">
                            <img src="<?= $base; ?>/assets/images/calendar.png" />
                            01/01/1930 (90 anos)
                        </div>

                        <?php if (!empty($user->city)) : ?>
                            <div class="user-info-mini">
                                <img src="<?= $base; ?>/assets/images/pin.png" />
                                <?= $user->city; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($user->work)) : ?>
                            <div class="user-info-mini">
                                <img src="<?= $base; ?>/assets/images/work.png" />
                                <?= $user->work; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="box">
                    <div class="box-header m-10">
                        <div class="box-header-text">
                            Seguindo
                            <span>(<?= count($user->following); ?>)</span>
                        </div>
                        <div class="box-header-buttons">
                            <a href="">ver todos</a>
                        </div>
                    </div>
                    <div class="box-body friend-list">

                    <?php for($q=0;$q<9;$q++):?>
                        <?php if(isset($user->following[$q])): ?>
                            <div class="friend-icon">
                                <a href="<?= $base; ?>/perfil/<?= $follower->id; ?>">
                                    <div class="friend-icon-avatar">
                                        <img src="<?= $base; ?>/media/avatars/<?= $follower->avatar; ?>" />
                                    </div>
                                    <div class="friend-icon-name">
                                        <?= $follower->name; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endif?>
                    <?php endfor?>
                    </div>
                </div>
            </div>
            <div class="column pl-5">

                <div class="box">
                    <div class="box-header m-10">
                        <div class="box-header-text">
                            Fotos
                            <span>(<?= count($user->photos); ?>)</span>
                        </div>
                        <div class="box-header-buttons">
                            <a href="">ver todos</a>
                        </div>
                    </div>
                    <div class="box-body row m-20">

                        <div class="user-photo-item">
                            <a href="#modal-1" rel="modal:open">
                                <img src="media/uploads/1.jpg" />
                            </a>
                            <div id="modal-1" style="display:none">
                                <img src="media/uploads/1.jpg" />
                            </div>
                        </div>

                        <div class="user-photo-item">
                            <a href="#modal-2" rel="modal:open">
                                <img src="media/uploads/1.jpg" />
                            </a>
                            <div id="modal-2" style="display:none">
                                <img src="media/uploads/1.jpg" />
                            </div>
                        </div>

                        <div class="user-photo-item">
                            <a href="#modal-3" rel="modal:open">
                                <img src="media/uploads/1.jpg" />
                            </a>
                            <div id="modal-3" style="display:none">
                                <img src="media/uploads/1.jpg" />
                            </div>
                        </div>

                        <div class="user-photo-item">
                            <a href="#modal-4" rel="modal:open">
                                <img src="media/uploads/1.jpg" />
                            </a>
                            <div id="modal-4" style="display:none">
                                <img src="media/uploads/1.jpg" />
                            </div>
                        </div>

                    </div>
                </div>

                <div class="box feed-item">
                    <div class="box-body">
                        <div class="feed-item-head row mt-20 m-width-20">
                            <div class="feed-item-head-photo">
                                <a href=""><img src="media/avatars/avatar.jpg" /></a>
                            </div>
                            <div class="feed-item-head-info">
                                <a href=""><span class="fidi-name">Bonieky Lacerda</span></a>
                                <span class="fidi-action">fez um post</span>
                                <br />
                                <span class="fidi-date">07/03/2020</span>
                            </div>
                            <div class="feed-item-head-btn">
                                <img src="assets/images/more.png" />
                            </div>
                        </div>
                        <div class="feed-item-body mt-10 m-width-20">
                            Pessoal, tudo bem! Busco parceiros para empreender comigo em meu software.<br /><br />
                            Acabei de aprová-lo na Appstore. É um sistema de atendimento via WhatsApp multi-atendentes para auxiliar empresas.<br /><br />
                            Este sistema permite que vários funcionários/colaboradores da empresa atendam um mesmo número de WhatsApp, mesmo que estejam trabalhando remotamente, sendo que cada um acessa com um login e senha particular....
                        </div>
                        <div class="feed-item-buttons row mt-20 m-width-20">
                            <div class="like-btn on">56</div>
                            <div class="msg-btn">3</div>
                        </div>
                        <div class="feed-item-comments">

                            <div class="fic-item row m-height-10 m-width-20">
                                <div class="fic-item-photo">
                                    <a href=""><img src="media/avatars/avatar.jpg" /></a>
                                </div>
                                <div class="fic-item-info">
                                    <a href="">Bonieky Lacerda</a>
                                    Comentando no meu próprio post
                                </div>
                            </div>

                            <div class="fic-item row m-height-10 m-width-20">
                                <div class="fic-item-photo">
                                    <a href=""><img src="media/avatars/avatar.jpg" /></a>
                                </div>
                                <div class="fic-item-info">
                                    <a href="">Bonieky Lacerda</a>
                                    Muito legal, parabéns!
                                </div>
                            </div>

                            <div class="fic-answer row m-height-10 m-width-20">
                                <div class="fic-item-photo">
                                    <a href=""><img src="media/avatars/avatar.jpg" /></a>
                                </div>
                                <input type="text" class="fic-item-field" placeholder="Escreva um comentário" />
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>

    </section>

</section>
<?= $render('footer'); ?>