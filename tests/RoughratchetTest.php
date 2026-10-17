<?php
/**
 * Tests for RoughRatchet
 */

use PHPUnit\Framework\TestCase;
use Roughratchet\Roughratchet;

class RoughratchetTest extends TestCase {
    private Roughratchet $instance;

    protected function setUp(): void {
        $this->instance = new Roughratchet(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughratchet::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
