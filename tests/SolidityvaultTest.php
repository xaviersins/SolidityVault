<?php
/**
 * Tests for SolidityVault
 */

use PHPUnit\Framework\TestCase;
use Solidityvault\Solidityvault;

class SolidityvaultTest extends TestCase {
    private Solidityvault $instance;

    protected function setUp(): void {
        $this->instance = new Solidityvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
