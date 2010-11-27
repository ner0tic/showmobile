<!-- apps/frontend/modules/passenger/templates/_datatable_ride.php //-->
<?php use_stylesheet('rides.css.php') ?>
<h1>
    rides&nbsp;<a href="#"><img src="/images/themes/rounded/icons/add_icon.png" height="16" width="16" alt="Add ride"/></a>
    <div class="float-right ">
        <select name="ride-sortby" onChange="resort('ride-data',this.value);">
            <option selected>sort by</option>
            <option value="last_name">Last Name</option>
            <option value="show_id">Show</option>
        </select>
    </div>
</h1>
                <table class="data-table" id="ride-data">
                    <tr>
                        <th colspan="4"></th>
                        <th class="sort">

                        </th>
                    </tr>
<?php foreach ($rides as $i => $ride): ?>
                    <tr class="table-row <?=fmod($i,2) ? 'even-row' : 'odd-row' ?>">
                        <td><?=$ride->getUser()->getName()?></td>
                        <td><?=$ride->getDriver()->getEvent()->listBands()?></td>
                        <td><?=$ride->getDriver()->getEvent()->getVenue()?></td>
                        <td><?=format_date($ride->getDriver()->getEvent()->getStartTime(),'d t')?></td>
<!--                        <td>
                            <div class="table-controls">
                                <a href="<?=url_for('ride/edit?id='.$ride->getId())?>" title="edit ride information">
                                    <img src="/images/themes/rounded/icons/edit_icon.png" width="16" height="16" alt="edit ride information" />
                                    <span class="control-txt">edit</span>
                                </a>
                                <a href="<?=url_for('ride/delete?id='.$ride->getId())?>" title="remove ride">
                                    <img src="/images/themes/rounded/icons/delete_icon.png" width="16" height="16" alt="remove ride" />
                                    <span class="control-txt">delete</span>
                                </a>
                            </div>
                        </td>
//-->                    </tr>
<?php endforeach ?>
                </table>
