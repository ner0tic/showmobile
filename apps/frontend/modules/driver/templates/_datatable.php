<!-- apps/frontend/modules/driver/templates/_datatable.php //-->
                <table class="data-table" id="driver-data">
                    <tr>
                        <th colspan="4">drivers&nbsp;<a href="<?php echo url_for('@driver_new')?>"><img src="/images/themes/rounded/icons/add_icon.png" height="16" width="16" alt="Add driver"/></a></th>
                        <th class="sort">
                            <select name="driver-sortby" onChange="resort('driver-data',this.value);">
                                <option selected>sort by</option>
                                <option value="last_name">Last Name</option>
                                <option value="show_id">Show</option>
                            </select>
                        </th>
                    </tr>
<?php foreach ($drivers as $i => $driver): ?>
                    <tr class="table-row <?php echo fmod($i,2) ? 'even-row' : 'odd-row' ?>">
                        <td><?php echo $driver->getEvent()->listBands()?></td>
                        <td><?php echo $driver->getEvent()->getVenue()->getName()?></td>
                        <td><?php echo $driver->getPassengerCount()?> passengers</td>
                        <td><?php echo format_date($driver->getEvent()->getStartTime(),'m d, y')?></td>
<!--                        <td>
                            <div class="table-controls">
                                <a href="<?php echo url_for('driver/edit?id='.$driver->getId())?>" title="edit driver information">
                                    <img src="/images/themes/rounded/icons/edit_icon.png" width="16" height="16" alt="edit driver information" />
                                    <span class="control-txt">edit</span>
                                </a>
                                <a href="<?php echo url_for('driver/delete?id='.$driver->getId())?>" title="remove driver">
                                    <img src="/images/themes/rounded/icons/delete_icon.png" width="16" height="16" alt="remove driver" />
                                    <span class="control-txt">delete</span>
                                </a>
                            </div>
                        </td>
//-->                    </tr>
<?php endforeach ?>
                </table>
