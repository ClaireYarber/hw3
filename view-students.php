<h1>Students</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Credits</th>
      </tr>
    </thead>
    <tbody>
  <?php
  while ($course = $courses->fetch_assoc()) {
  ?>
    <tr>
      <td><?php echo $course['course_id']; ?></td>
      <td><?php echo $course['course_name']; ?></td>
      <td><?php echo $course['credits']; ?></td>
    </tr>
  <?php
  }
  ?>
    </tbody>
  </table>
</div>
