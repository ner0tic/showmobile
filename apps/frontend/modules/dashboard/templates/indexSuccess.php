<!-- apps/frontend/modules/dashboard/templates/indexSuccess.php -->
<?php use_stylesheet('gmap.css.php') ?>
<?php use_stylesheet('datatable.css.php') ?>
            <div class="pathbar">&nbsp;<?php echo ucwords($sf_user->getGuardUser()->getFirstName().' '.$sf_user->getGuardUser()->getLastName())?>&nbsp;&gt;&nbsp;dashboard</div>
            <div class="alert-center">
                <h1>
                    {%alertTitle%}
                    <div class="close-btn">&nbsp;</div>
                </h1>
                <span>{%alertMsg%}</span>
            </div>
            <!-- dashboard :: databoxes //-->
            <div class="data-box" id="content">
                <h1>Local Events</h1>
                <div class="cols-two-wrapper google-map">
                    <div class="cols-two-a clearfix">
<?php use_helper('JavascriptBase','GMap') ?>
<?php include_map($gMap,array('width'=>'320px','height'=>'320px')); ?>
<!--                        <div style="background-color: #efebc0;height:380px;width:380px;">&nbsp;</div>
//-->                    </div>
                    <div class="cols-two-b float-right clearfix">
<?php include_partial('event/datalist',array('events' => $events)) ?>
                    </div>
                </div>
                <div class="cols-two-wrapper">
                    <div class="cols-two-a data-table-wrapper dashed-right-two">
<?php include_partial('passenger/datatable_ride',array('rides' => $rides)) ?>
                    </div>
                    <div class="cols-two-b float-right data-table-wrapper">
<?php include_partial('driver/datatable',array('drivers' => $drives)) ?>
                    </div>
                </div>
            </div>
<?php include_map_javascript($gMap); ?>
