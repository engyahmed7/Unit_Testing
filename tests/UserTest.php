<?php
use PHPUnit\Framework\TestCase;
require './src/User.php';




class UserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new User('Belal Abo Ata', 'belal@gmail.com');
    }

    public function testGetName()
    {
        $this->assertEquals('Belal Abo Ata', $this->user->getName());
    }

    public function testSetName()
    {
        $this->user->setName('Noha');
        $this->assertEquals('Noha', $this->user->getName());
    }

    public function testGetEmail()
    {
        $this->assertEquals('belal@gmail.com', $this->user->getEmail());
    }

    public function testSetEmail()
    {
        $this->user->setEmail('nohasalah@iti.gov.eg');
        $this->assertEquals('nohasalah@iti.gov.eg', $this->user->getEmail());
    }
}
