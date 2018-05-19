<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<section class="section-reservation bg1-pattern p-t-180 p-b-113">
    <div class="container">
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Acciones
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-item">
                    <?= $this->Html->link(__('Listar usuarios'), ['action' => 'index']) ?>
                </div>
                <div class="dropdown-item">
                <?= $this->Form->postLink(__('Eliminar usuario'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <div class="t-center">
                    <span class="tit2 t-center">
                        Editar usuario
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Formulario
                    </h3>
                </div>

                <form class="wrap-form-reservation size22 m-l-r-auto" method="post" action=<?php echo $user->id?> >
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Role -->
                            <span class="txt9">
                                Rol
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="role" value=<?php echo $user->role?> required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Role -->
                            <span class="txt9">
                                Nombres
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="first_name" value=<?php echo $user->first_name?> required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Role -->
                            <span class="txt9">
                                Apellidos
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="last_name" value=<?php echo $user->last_name?> required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Role -->
                            <span class="txt9">
                                Usuario
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="username" value=<?php echo $user->username?> required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Role -->
                            <span class="txt9">
                                Contraseña
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="password" name="password" value=<?php echo $user->password?> required >
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Role -->
                            <span class="txt9">
                                Telefono
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" value=<?php echo $user->phone?> required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Role -->
                            <span class="txt9">
                                Correo
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" value=<?php echo $user->email?> required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Role -->
                            <span class="txt9">
                                Activo
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="active" value=<?php echo $user->active?> required>
                            </div>
                        </div>

                    </div>

                    <div class="wrap-btn-booking flex-c-m m-t-6">
                        <!-- Button3 -->
                        <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                            Editar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>