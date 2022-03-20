<?php

class Connect
{
    private string $host = 'localhost';
    private string $user = 'root';
    private string $password = '';
    private string $database = 'j2school';

    private function ConnectDB()
    {
        $connect = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        mysqli_set_charset($connect, 'UTF-8');

        return $connect;
    }

    public function select($sql)
    {
        $connect = $this->ConnectDB();
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);
        return $result;
    }

    public function execute($sql) : void
    {
        $connect = $this->ConnectDB();
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }
}