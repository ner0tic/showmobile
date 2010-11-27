<!-- apps/frontend/modules/passenger/templates/_datatable.php //-->
                <table class="data-table" id="show-data">
                    <tr>
                        <th colspan="4">shows&nbsp;<a href="<?=url_for('@event_new')?>"><img src="/images/themes/rounded/icons/add_icon.png" height="16" width="16" alt="Add show"/></a></th>
                        <th class="sort">
                            <select name="show-sortby" onChange="resort('show-data',this.value);">
                                <option selected>sort by</option>
                                <option value="last_name">Last Name</option>
                                <option value="show_id">Show</option>
                            </select>
                        </th>
                    </tr>
<?php foreach ($passengers as $i => $passenger): ?>
                    <tr class="table-row <?=fmod($i,2) ? 'even-row' : 'odd-row' ?>">
                        <td><?=$passenger->getName()?></td>
                        <td><?=$passenger->getDriver()->getShow()?></td>
                        <td><?=$passenger->getDriver()->getShow()->getVenue()?></td>
                        <td><?=format_date($passenger->getDriver()->getShow()->getStartTime(),'m d, y')?></td>
<!--                        <td>
                            <div class="table-controls">
                                <a href="<?=url_for('show/edit?id='.$show->getId())?>" title="edit show information">
                                    <img src="/images/themes/rounded/icons/edit_icon.png" width="16" height="16" alt="edit show information" />
                                    <span class="control-txt">edit</span>
                                </a>
                                <a href="<?=url_for('show/delete?id='.$show->getId())?>" title="remove show">
                                    <img src="/images/themes/rounded/icons/delete_icon.png" width="16" height="16" alt="remove show" />
                                    <span class="control-txt">delete</span>
                                </a>
                            </div>
                        </td>
//-->                    </tr>
<?php endforeach ?>
                </table>
