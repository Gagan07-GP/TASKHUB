<?php 
include 'dbconf.php';
   
   // Get current time
   $currentTime = date('Y-m-d H:i:s');
   
   // Query to selectaddtask7 with expired deadlines and no notification sent
   $sql = "SELECT * FROM addtask7 WHERE deadline < ? AND not_sent = 0";
   $stmt = $con->prepare($sql);
   $stmt->bind_param("s", $currentTime);
   $stmt->execute();
   $result = $stmt->get_result();
   
   // Check if anyaddtask7 are found
   while ($row = $result->fetch_assoc()) {
       $taskId = $row['srno'];
       $taskName = $row['taskname'];
       $userEmail = $row['user_email']; // Fetch user email dynamically
   
       // Send email notification
       $subject = 'Deadline Passed for Task: ' . $taskName;
       $message = 'The deadline for the task "' . $taskName . '" has passed.';
       $headers = 'From: taskhub@gmail.com'; // Replace with your sender email address
   
       // Use mail function to send the email
       if (mail($userEmail, $subject, $message, $headers)) {
           echo "Notification sent for task ID $taskId.<br>";
   
           // Update the notification status in the database
           $updateSql = "UPDATE addtask7 SET not_sent = 1 WHERE srno = ?";
           $updateStmt = $conn->prepare($updateSql);
           $updateStmt->bind_param("i", $taskId);
           $updateStmt->execute();
       } else {
           echo "Failed to send notification for task ID $taskId.<br>";
       }
   }
   
   // Close connections
   $stmt->close();
   $con->close();
   ?>