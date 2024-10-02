<h1>Instructors</h1>h1>
<div class="table-responsive">
  <table class="table">
    <thread>
      <tr>
        <th>Name</th>
        <th>Office</th>
      </tr>
    </thread>
    <tbody>
  <?php
  while ($instructor = $instructors-> fetch_assoc()) {
  ?>
    <tr>
      <td><?php echo $instructor{'instructor_id']; ?></td>
      <td><?php echo $instructor{'instructor_name']; ?></td>
      <td><?php echo $instructor{'office_number']; ?></td>
    </tr>
  <?php
  }
  ?>
      </tbody>
    </table>
  </div>
