<?php

class HTMLPage
{
    private $table;

    public function __construct($size)
    {
        $this->table = new Table($size);
    }

    public function renderButtons()
    {
        echo '<div style="text-align: center">';
        echo '<input type="button" value="Button" onclick="document.querySelectorAll(\'td\').forEach(function (cell) { cell.style.backgroundColor = \'yellow\'; });"/>';
        echo '<input type="button" value="Count" onclick="document.querySelectorAll(\'td\').forEach(function (cell) { cell.style.backgroundColor = \'yellow\'; });
        alert(\'Количество ячеек c нулем и с более чем двумя соседними единицами: ' . $this->table->countZeroes() . '\');" />';
        echo '<input type="button" value="Button" onclick="document.querySelectorAll(\'td\').forEach(function (cell) { cell.style.backgroundColor = \'yellow\'; });" />';
        echo '</div>';
    }

    public function renderPage()
    {
        $this->table->renderTable();
    }
}