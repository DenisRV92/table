<?php

class Table
{
    private $table = [];
    private $size;

    public function __construct(int $size)
    {
        $this->size = $size;
        $this->generateTable();
    }

    public function generateTable()
    {

        for ($i = 0; $i < $this->size; $i++) {
            $row = [];
            for ($j = 0; $j < $this->size; $j++) {
                $row[] = rand(0, 1);
            }
            $this->table[] = $row;
        }
    }

    public function renderTable()
    {
        echo '<table style="margin: 0 auto;">';
        foreach ($this->table as $row) {
            echo '<tr>';
            foreach ($row as $cell) {
                echo '<td style="width: 30px; height: 30px;">' . $cell . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    public function countZeroes(): int
    {
        $count = 0;

        for ($i = 0; $i < $this->size; $i++) {
            for ($j = 0; $j < $this->size; $j++) {
                if ($this->table[$i][$j] == 0) {
                    $count += $this->countAdjacentOnes($i, $j) > 2 ? 1 : 0;
                }
            }
        }

        return $count;
    }

    private function countAdjacentOnes(int $row,int $col): int
    {
        $count = 0;

        if ($row > 0 && $this->table[$row - 1][$col] == 1) {
            $count++;
        }

        if ($row < $this->size - 1 && $this->table[$row + 1][$col] == 1) {
            $count++;
        }

        if ($col > 0 && $this->table[$row][$col - 1] == 1) {
            $count++;
        }

        if ($col < $this->size - 1 && $this->table[$row][$col + 1] == 1) {
            $count++;
        }

        return $count;
    }

}