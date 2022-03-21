<?php

require_once 'model/Connect.php';

class Lop
{
    private int $ma;
    private string $ten;

    public function get_ma(): int
    {
        return $this -> ma;
    }

    public function show_ma(): string
    {
        return "#" . $this -> ma;
    }

    public function set_ma($var): void
    {
        $this -> ma = $var;
    }

    public function get_ten(): string
    {
        return $this -> ten;
    }

    public function set_ten($var): void
    {
        $this -> ten = $var;
    }

    public function all(): array
    {
        $sql = "select * from lop";
        $result = (new Connect()) -> select($sql);

        $arr = [];
        foreach ($result as $row) {
            $object = new self();
            $object -> set_ma($row['ma']);
            $object -> set_ten($row['ten']);

            $arr[] = $object;
        }
        return $arr;
    }

    public function create($ten): void
    {
        $object = new self();
        $object -> set_ten($ten);

        $sql = "insert into lop(ten) values('{$object -> ten}')";
        (new Connect()) -> execute($sql);
    }

    public function find($ma)
    {
        $sql = "select * from lop where ma = '$ma' ";
        $result = (new Connect()) -> select($sql);
        $row = mysqli_fetch_array($result);

        $object = new self();
        $object -> set_ma($row['ma']);
        $object -> set_ten($row['ten']);

        return $object;
    }

    public function update($ma, $ten): void
    {
        $object = new self();
        $object -> set_ma($ma);
        $object -> set_ten($ten);

        $sql = "update lop set
        ten = '{$object->get_ten()}' where ma = '{$object->get_ma()}' ";
        (new Connect()) -> execute($sql);
    }

    public function destroy($ma): void
    {
        $sql = "delete from lop where ma = '$ma' ";
        (new Connect()) -> execute($sql);
    }
}