<?php

class Student
{

    // database connection and table name
    private $conn;
    private $table_name = "students";
    private $table_name2 = "fees_collections";

    // object properties
    public $id;
    public $name;
    public $address;


    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // read single Student
    function read()
    {

        // select all query
        $query = "SELECT * FROM " . $this->table_name;

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }


    // used when filling up the update student form
    function readOne($ids)
    {


        $query = "SELECT $this->table_name.id, $this->table_name.name,$this->table_name.address,
                  $this->table_name2.feesAmount,$this->table_name2.paidAmount FROM $this->table_name2,
                  students where students.id = $ids and $this->table_name2.id = $ids";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;

    }

    // update payment
    function update()
    {

        // update query
        $query = "UPDATE
                " . $this->table_name2 . "
            SET
               
                paidAmount = :paidAmount
                
            WHERE
                id = :id";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->paidAmount = htmlspecialchars(strip_tags($this->paidAmount));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // bind new values
        $stmt->bindParam(':paidAmount', $this->paidAmount);
        $stmt->bindParam(':id', $this->id);

        // execute the query
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


}