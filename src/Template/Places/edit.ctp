<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Place $place
 */
?>
<section class="section-reservation bg1-pattern p-t-180 p-b-113">
    <div class="container">
        <nav class="nav">
            <div class="dropdown p-b-10">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Acciones
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-item">
                        <?= $this->Html->link(__('Listar lugares'), ['action' => 'index']) ?>
                    </div>
                    <div class="dropdown-item">
                    <?= $this->Form->postLink(__('Eliminar lugar'), ['action' => 'delete', $place->id], ['confirm' => __('Are you sure you want to delete # {0}?', $place->id)]) ?>
                    </div> 
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <div class="t-center">
                    <span class="tit2 t-center">
                        Editar lugar
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Formulario
                    </h3>
                </div>

                <form class="wrap-form-reservation size22 m-l-r-auto" method="post" action=<?php echo $place->id?> >
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Role -->
                            <span class="txt9">
                                Nombre
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" value=<?php echo $place->name?> required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Role -->
                            <span class="txt9">
                                Dirección
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="address" value="<?php echo $place->address?>" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Role -->
                            <span class="txt9">
                                Capacidad
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="size" value=<?php echo $place->size?> required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <!-- Role -->
                            <span class="txt9">
                                Activo
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="active" value=<?php echo $place->active?> required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <!-- Role -->
                            <span class="txt9">
                                Apertura
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="time" name="time_open" value=<?php echo $place->time_open->format('H:i')?> required >
                            </div>
                        </div>

                        <div class="col-md-3">
                            <!-- Role -->
                            <span class="txt9">
                                Cierre
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="time" name="time_close" value=<?php echo $place->time_close->format('H:i')?> required >
                            </div>
                        </div>

                        <div class="col-md-3">
                            <!-- Role -->
                            <span class="txt9">
                                Imagen
                            </span>

                            <div class="wrap-inputname pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23 p-t-8">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="file" name="image" value=<?php echo $place->image?> required >
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
