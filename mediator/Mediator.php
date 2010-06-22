<?php
class Mediator
{
    public $btnView = null;
    public $btnSearch = null;
    public $btnBook = null;

    public $show = null;

    public function registerView($v)
    {
        $this->btnView = $v;
    }

    public function registerSearch($s)
    {
        $this->s = $s;
    }

    public function registerBook($b)
    {
        $this->btnBook = $b;
    }

    public function registerDisplay($d)
    {
        $this->show = $d;
    }

    public function book()
    {
        $this->btnBook->setEnabled(false);
        $this->btnView->setEnabled(true);
        $this->btnSearch->setEnabled(true);

        $this->show->setText('booking ...');
    }

    public function view()
    {
        $this->btnView->setEnabled(false);
        $this->btnSearch->setEnabled(true);
        $this->btnBook->setEnabled(true);

        $this->show->setText('viewing ...');
    }

    public function search()
    {
        $this->btnSearch->setEnabled(false);
        $this->btnView->setEnabled(true);
        $this->btnBook->setEnabled(true);

        $this->show->setText('searching ...');
    }
}

