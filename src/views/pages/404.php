<?= $render('header', ['loggedUser' => $loggedUser]); ?>

<h1>
    <p style="margin-top: 30px;" align="center">Página não encontrada, <?= $user->name; ?></p>
</h1>
<h4>
    <p style="margin-top: 10px;" align="center">Para retornar, <a href="<?= $base; ?>/">clique aqui</a></p>
</h4>