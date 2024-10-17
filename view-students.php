<h1>Students</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
      </tr>
    </thead>
    <tbody>
  <?php
  while ($student = $students->fetch_assoc()) {
  ?>
    <tr>
      <td><?php echo $student['student_id']; ?></td>
      <td><?php echo $student['student_name']; ?></td>
      <td><?php echo $student['class']; ?></td>
    </tr>
  <?php
  }
  ?>
    </tbody>
  </table>
</div>
