<?php

    function delete_from_db($table, $id) {
        require('is_logged_in.php');

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
            if ($_SESSION['is_admin'] != 1) {
                throw new Exception("Brak uprawniń dla tej operacji", 401);
            }
            if (!isset($id)) {
                header('Location: /index.php');
                exit();
            }
            require('get_db_conf.php');
            $conn = new mysqli($servername, $username, $password, $dbname);
            $stmt = $conn->prepare("DELETE FROM $table WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (mysqli_sql_exception $e) {
            $error_message = urlencode($e->getMessage());
    
            header('Location: /error.php?code=500&message=' . $error_message);
            exit(); // Make sure to exit after the header redirection
        } catch (Exception $e) {
            $error_message = urlencode($e->getMessage());
            $error_code = $e->getCode();
            header('Location: /error.php?code='.$error_code.'&message=' . $error_message);
            exit(); // Make sure to exit after the header redirection
        }

        
    }


?>