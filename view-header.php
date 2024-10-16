<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Courses</h1>
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
                try {
                    $courses = selectCourses();
                    while ($course = $courses->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($course['course_id']) . "</td>";
                        echo "<td>" . htmlspecialchars($course['course_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($course['credits']) . "</td>";
                        echo "</tr>";
                    }
                } catch (Exception $e) {
                    echo "<tr><td colspan='3'>Error: " . htmlspecialchars($e->getMessage()) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

