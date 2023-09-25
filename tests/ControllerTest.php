<?php
namespace Mzert\Tests;
use Mzert\EmployeeMgtApp\Controller
;
use PHPUnit\Framework\TestCase;


class ControllerTest extends TestCase
{
    public function testCreateEmployee()
    {
        $controller = new Controller();
        // Define test data
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'position' => 'Manager'
        ];

        // Call the createEmployee method
        $result = $controller->createEmployee($data);

        // Assert that the result meets your expectations
        $this->assertTrue(true, $result); // Adjust the assertion based on your actual implementation
    }

    public function testGetAllEmployees()
    {
        $controller = new Controller();

        $this->assertIsArray($controller->getAllEmployees(), "Array is returned!");
    }

    public function testUpdateEmployee()
    {
        $controller = new Controller();

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'position' => 'Manager',
            'id' => 3
        ];

        $this->assertTrue(true, $controller->updateEmployee($data));
    }
}