<?php
function selectStudents() {
    $conn = null;
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT course_id, course_name, credits FROM `courses`");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    } catch (Exception $e) {
        if ($conn !== null) {
            $conn->close();
        }
        throw $e;
    }
}
?>
