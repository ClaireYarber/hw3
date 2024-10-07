<h1>Courses</h1>h1>
<div class="table-responsive">
  <table class="table">
    <thread>
      <th>ID</th>
      <th>Name</th>
      <th>Credits</th>
      </tr>
    </thread>
    <tbody>
  <?php
  while ($course = $courses->fetch_assoc()) {
  ?>
    <tr>
      <td><?php echo $course{'course_id']; ?></td>
      <td><?php echo $course{'course_name']; ?></td>
      <td><?php echo $course{'credits']; ?></td>
    </tr>
  <?php
  }
  ?>
      </tbody>
    </table>
  </div>
