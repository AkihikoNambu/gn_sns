<?php
// auto-generated by sfPropelCrud
// date: 2014/05/27 06:29:45
?>
<table>
<tbody>
<tr>
<th>Image: </th>
<td><?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$report->getImage()) ?></td>
</tr>
<tr>
<th>Year: </th>
<td><?php echo $report->getYear() ?></td>
</tr>
<tr>
<th>Host country: </th>
<td><?php echo $report->getHostCountry() ?></td>
</tr>
<tr>
<th>Body: </th>
<td><?php echo $report->getBody() ?></td>
</tr>
<tr>
<th>Reportfile: </th>
<td>
	<?php echo link_to($report->getReportfile(), '/'.sfConfig::get('sf_upload_dir_name').'/'.$report->getReportfile()) ?></td>
</tr>
<tr>
<th>Id: </th>
<td><?php echo $report->getId() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'report/edit?id='.$report->getId()) ?>
&nbsp;<?php echo link_to('list', 'report/list') ?>