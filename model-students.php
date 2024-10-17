<?php
function selectStudents() {
    $conn = null;
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT student_id, student_name_name, class FROM `students` ");
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
