<h1>Users</h1>

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
</tr>
</thead>
<tbody>
<?php foreach ($users as $user): ?>
<tr>
    <td><?php echo $user->getUserName() ?></td>
      <!-- <td><?php //echo link_to($applicant->getFirstName(), $applicant->getFacebookUrl()) ?></td>
      <td><?php //echo $applicant->getMiddleName() ?></td>
      <td><?php //echo $applicant->getLastName() ?></td>
      <td><?php //echo $applicant->getEmail() ?></td>
      <td><?php //echo $applicant->getParticipationYear() ?></td>
      <td><?php //echo $applicant->getCreatedAt() ?></td> -->
      <!-- <td><?php //echo $applicant->getUpdatedAt() ?></td> -->
      <td><?php echo link_to($user->getId(), 'user/show?id='.$user->getId()) ?></td>
  </tr>
  <?php endforeach; ?>
  <br /><br/>

  
  
  </tbody>
  </table>
