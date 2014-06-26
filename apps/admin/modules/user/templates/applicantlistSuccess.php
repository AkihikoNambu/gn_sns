<h1>Applicants</h1>

<table>
<thead>
<tr>
  <th>user_name</th>
  <!-- <th>first name</th>
  <th>middle name</th>
  <th>last name</th>
  <th>e-mail</th>
  <th>participation year</th>
  <th>Created at</th> -->
  <th>Id</th>
  <th>申請承認</th>
</tr>
</thead>
<tbody>
<?php foreach ($applicants as $applicant): ?>
<tr>
    <td><?php echo $applicant->getUserName() ?></td>
      <!-- <td><?php //echo link_to($applicant->getFirstName(), $applicant->getFacebookUrl()) ?></td>
      <td><?php //echo $applicant->getMiddleName() ?></td>
      <td><?php //echo $applicant->getLastName() ?></td>
      <td><?php //echo $applicant->getEmail() ?></td>
      <td><?php //echo $applicant->getParticipationYear() ?></td>
      <td><?php //echo $applicant->getCreatedAt() ?></td> -->
      <!-- <td><?php //echo $applicant->getUpdatedAt() ?></td> -->
      <td><?php echo link_to($applicant->getId(), 'applicant/show?id='.$applicant->getId()) ?></td>
      <td>
        <?php use_helper('Object') ?>
        <?php echo form_tag('user/approve') ?>
        <?php echo object_input_hidden_tag($applicant, 'getId') ?>
        <?php echo input_hidden_tag('certification', '1') ?>
        <?php echo submit_tag('承認') ?>
        </form>
      </td>
  </tr>
  <br /><br />

  
  <?php endforeach; ?>
  </tbody>
  </table>

<?php echo link_to ('create', 'applicant/create') ?>