<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Sign up -->

<div class="section-signup bg1-pattern p-t-180 p-b-85" style="min-height:87.9vh">
    <form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5" method="post" action="login">
        <span class="txt5 m-10">
            Acceso empleados
        </span>

        <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
            <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="username" placeholder="Usuario">
            <i class="fa fa-user ab-r-m m-r-18" aria-hidden="true"></i>
        </div>
        <div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
            <input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password" placeholder="Contraseña">
            <i class="fa fa-key ab-r-m m-r-18" aria-hidden="true"></i>
        </div>

        <!-- Button3 -->
        <button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
            Entrar
        </button>
    </form>
</div>
