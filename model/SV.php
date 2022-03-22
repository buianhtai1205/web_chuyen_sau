<?php

require_once 'model/Connect.php';

class SV
{
    private int $ma;
    private string $ten;
    private string $ma_lop;
    private string $ten_lop;

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

    public function get_ten() : string
    {
        return $this -> ten;
    }

    public function set_ten($var): void
    {
        $this -> ten = $var;
    }

    public function get_ma_lop() : string
    {
        return $this->ma_lop;
    }
    public function set_ma_lop($var) : void
    {
        $this->ma_lop = $var;
    }
    public function get_ten_lop() : string
    {
        return $this->ten_lop;
    }
    public function set_ten_lop($var) : void
    {
        $this->ten_lop = $var;
    }

    public function all(): array
    {
        $sql = "select sinh_vien.*, lop.ten as ten_lop 
            from sinh_vien join lop on sinh_vien.ma_lop = lop.ma ";
        $result = (new Connect()) -> select($sql);

        $arr = [];
        foreach ($result as $row) {
            $object = new self();
            $object -> set_ma($row['ma']);
            $object -> set_ten($row['ten']);
            $object -> set_ma_lop($row['ma_lop']);
            $object -> set_ten_lop($row['ten_lop']);

            $arr[] = $object;
        }
        return $arr;
    }

    public function create($ten, $ma_lop): void
    {
        $object = new self();
        $object -> set_ten($ten);
        $object -> set_ma_lop($ma_lop);

        $sql = "insert into sinh_vien(ten, ma_lop) values('{$object -> ten}', '{$object -> ma_lop}')";
        (new Connect()) -> execute($sql);
    }

    public function find($ma)
    {
        $sql = "select * from sinh_vien where ma = '$ma' ";
        $result = (new Connect()) -> select($sql);
        $row = mysqli_fetch_array($result);

        $object = new self();
        $object -> set_ma($row['ma']);
        $object -> set_ten($row['ten']);
        $object -> set_ma_lop($row['ma_lop']);

        return $object;
    }

    public function update($ma, $ten, $ma_lop): void
    {
        $object = new self();
        $object -> set_ma($ma);
        $object -> set_ten($ten);
        $object -> set_ma_lop($ma_lop);

        $sql = "update sinh_vien set
        ten = '{$object->get_ten()}', ma_lop = '{$object->get_ma_lop()}'
        where ma = '{$object->get_ma()}' ";
        (new Connect()) -> execute($sql);
    }

    public function destroy($ma): void
    {
        $sql = "delete from sinh_vien where ma = '$ma' ";
        (new Connect()) -> execute($sql);
    }
}