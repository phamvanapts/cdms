<?php

class User extends BaseModel {
    public $id;
    public $name;
    public $email;

    public function __construct($id = null, $name = null, $email = null) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function save() {
        // Logic to save user data to the database
    }

    public function update() {
        // Logic to update user data in the database
    }

    public function delete() {
        // Logic to delete user from the database
    }

    public static function find($id) {
        // Logic to find a user by ID
    }

    public static function all() {
        // Logic to retrieve all users
    }
}