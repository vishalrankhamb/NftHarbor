<?php
/**
 * Tests for NftHarbor
 */

use PHPUnit\Framework\TestCase;
use Nftharbor\Nftharbor;

class NftharborTest extends TestCase {
    private Nftharbor $instance;

    protected function setUp(): void {
        $this->instance = new Nftharbor(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftharbor::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
