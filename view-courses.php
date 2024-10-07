<h1>Courses</h1>h1>
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
  while ($course = $courses-> fetch_assoc()) {
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
