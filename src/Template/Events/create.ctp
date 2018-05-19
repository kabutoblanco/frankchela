<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-180 p-b-113" ng-app="appEvents">
    <div class="container" ng-controller="eventCtrl as ec">
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <div class="t-center">
                    <span class="tit2 t-center">
                        Cotizador
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Formulario
                    </h3>
                    <div class="row">
                        <div class="col-md-12 txt5 t-center">Total: $ <span clas="txt5" ng-model="ec.total">{{ec.total}}</span></div>
                    </div>
                </div>
                <div ng-switch="ec.section">                    
                    <place ng-switch-when="0"></place>
                    <menu ng-switch-when="1"></menu>
                    <utensils ng-switch-when="2"></utensils>
                    <dates ng-switch-when="3"></dates>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->Html->script('angular.min') ?>
<?= $this->Html->script('app') ?>
<?= $this->Html->script('directives') ?>
<?= $this->Html->script('modules/places/PlacesServices') ?>
<?= $this->Html->script('modules/places/PlacesController') ?>
<?= $this->Html->script('modules/thematics/ThematicsController') ?>
<?= $this->Html->script('modules/thematics/ThematicsServices') ?>
<?= $this->Html->script('modules/eventTypes/EventTypesServices') ?>
<?= $this->Html->script('modules/eventTypes/EventTypesController') ?>
<?= $this->Html->script('modules/events/EventsController') ?>
<?= $this->Html->script('modules/events/EventsServices') ?>
<?= $this->Html->script('modules/menus/MenusController') ?>
<?= $this->Html->script('modules/menus/MenusServices') ?>
