<h1>applicant</h1>

<table>
<thead>
<tr>
  <th>user_name</th>
  <th>first name</th>
  <th>middle name</th>
  <th>last name</th>
  <th>e-mail</th>
  <th>participation year</th>
  <th>Created at</th>
  <th>Id</th>
  <th>申請承認</th>
  <th>申請削除</th>
</tr>
</thead>
<tbody>
<?php foreach ($applicants as $applicant): ?>
<tr>
    <td><?php echo $applicant->getAppUserName() ?></td>
      <td><?php echo link_to($applicant->getAppFirstName(), $applicant->getAppFacebookUrl()) ?></td>
      <td><?php echo $applicant->getAppMiddleName() ?></td>
      <td><?php echo $applicant->getAppLastName() ?></td>
      <td><?php echo $applicant->getAppEmail() ?></td>
      <td><?php echo $applicant->getAppParticipationYear() ?></td>
      <td><?php echo $applicant->getCreatedAt() ?></td>
      <!-- <td><?php //echo $applicant->getUpdatedAt() ?></td> -->
      <td><?php echo link_to($applicant->getId(), 'applicant/show?id='.$applicant->getId()) ?></td>
      <td>
        <?php //echo form_tag('applicant/approval') ?>
        <?php //echo input_hidden_tag('user_name', $applicant->getAppUserName()) ?>
        <?php //echo input_hidden_tag('first_name', $applicant->getAppFirstName()) ?>
        <?php //echo input_hidden_tag('middle_name', $applicant->getAppMiddleName()) ?>
        <?php //echo input_hidden_tag('last_name', $applicant->getAppLastName()) ?>
        <?php //echo input_hidden_tag('email', $applicant->getAppEmail()) ?>
        <?php //echo input_hidden_tag('facebook_url', $applicant->getAppFacebookUrl()) ?>
        <?php //echo input_hidden_tag('year', $applicant->getAppParticipationYear()) ?>
        <?php echo submit_tag('承認') ?>
        </form>
      </td>
      <td>
        <?php //echo form_tag('applicant/sakujo') ?>
        <?php //echo input_password_tag('sakujo_key', '') ?>
        <?php //echo input_hidden_tag('id', $applicant->getId()) ?>
        <?php //echo submit_tag('削除') ?>
        <?php echo link_to('削除', 'applicant/delete?id='.$applicant->getId(), 'post=true&confirm=Are you sure?') ?>
        </form>
      </td>
  </tr>
  <br /><br />

  
  <?php endforeach; ?>
  </tbody>
  </table>

<?php echo link_to ('create', 'applicant/create') ?>