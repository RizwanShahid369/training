<?php
require_once 'connection.php';

/**
 * Class DB
 */
class DB
{
    /**
     * @param $fname
     * @param $lastname
     * @param $address
     */
    public function addRecord($fname, $lastname, $address)
    {
        try {
            global $conn;
//            $sql = "INSERT INTO student (first_name, last_name, address)
//    VALUES ('$fname', '$lastname', '$address')";
//            // use exec() because no results are returned
//            $conn->exec($sql);

            ////////////

            $stmt = $conn->prepare("INSERT INTO student (first_name, last_name, address)
    VALUES (:firstname, :lastname, :adress)");
            $stmt->bindParam(':firstname', $n);
            $stmt->bindParam(':lastname', $l);
            $stmt->bindParam(':adress', $ad);

            // insert a row
            $n = $fname;
            $l = $lastname;
            $ad = $address;
            $stmt->execute();
            ///////////////
            echo "New record created successfully";
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }

    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        try {
            global $conn;
            // sql to delete a record
            $sql = "DELETE FROM student WHERE id=$id";

            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

    }

    /**
     * @param $first_name
     * @param $last_name
     * @param $address
     * @param $id
     */
    public function update($first_name, $last_name, $address, $id)
    {
        try {
            global $conn;
            $sql = "UPDATE student SET first_name = '$first_name',last_name = '$last_name', address = '$address' WHERE id=$id";

            // Prepare statement
            $stmt = $conn->prepare($sql);

            // execute the query
            $stmt->execute();

            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

    }

    /**
     * @param $id
     * @return mysqli_stmt|PDOStatement
     */
    public function retrieve($id)
    {
        try {
            global $conn;

            $sql= "SELECT * FROM student WHERE id=$id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt;


        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * @return mysqli_stmt|PDOStatement
     */
    public function getAll()
    {
        try {
            global $conn;

            $sql= "SELECT * FROM student";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt;


        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
