<!-- apps/frontend/modules/event/templates/_datatable.php //-->
<?php use_stylesheet('events.css.php') ?>
                <table class="data-table" id="event-data">
<!--                    <tr>
                        <th colspan="4">events&nbsp;<a href="<?php echo url_for('@event_new')?>"><img src="/images/themes/rounded/icons/add_icon.png" height="16" width="16" alt="Add show"/></a></th>
                        <th class="sort">
                            <select name="show-sortby" onChange="resort('show-data',this.value);">
                                <option selected>sort by</option>
                                <option value="last_name">Last Name</option>
                                <option value="show_id">Show</option>
                            </select>
                        </th>
                    </tr>
//-->
<?php foreach ($events as $i => $event): ?>
                    <tr class="table-row <?php echo fmod($i,2) ? 'even-row' : 'odd-row' ?>">
                        <td>
                            <h2>
        <?php $count = $event->getBands()->count()-1; //-- because we start counting at 0
              foreach($event->getBands() AS $x => $band): ?>
                        <?php echo ucwords($band->getName()).($x < $count?', ':', and more');?>
        <?php endforeach ?>
                            </h2>
                            <h3 class="help">@ <?php echo $event->getVenue()?> - <?php echo format_date($event->getStartTime(),'d')?> <?php echo format_date($event->getStartTime(),'t')?> $<?php echo $event->getCost()?></h3>
                        </td>
<!--                        <td>
                            <div class="table-controls">
                                <a href="<?php echo url_for('event/edit?id='.$event->getId())?>" title="edit show information">
                                    <img src="/images/themes/rounded/icons/edit_icon.png" width="16" height="16" alt="edit show information" />
                                    <span class="control-txt">edit</span>
                                </a>
                                <a href="<?php echo url_for('event/delete?id='.$event->getId())?>" title="remove show">
                                    <img src="/images/themes/rounded/icons/delete_icon.png" width="16" height="16" alt="remove show" />
                                    <span class="control-txt">delete</span>
                                </a>
                            </div>
                        </td>
//-->                    </tr>
<?php endforeach ?>
                </table>