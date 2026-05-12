<?php
/**
 * Tests for OpenCVML
 */

use PHPUnit\Framework\TestCase;
use Opencvml\Opencvml;

class OpencvmlTest extends TestCase {
    private Opencvml $instance;

    protected function setUp(): void {
        $this->instance = new Opencvml(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Opencvml::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
