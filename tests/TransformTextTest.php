<?php

namespace tests\advtests;

use App\Classes\TransformText;
use PHPUnit\Framework\TestCase;

class TransformTextTest extends TestCase
{
    private TransformText $text;

    public function setUp(): void
    {
        $this->text = new TransformText();
    }

    public function testStringRevers()
    {
        $this->assertEquals("тевирП! онваД ен ьсиледив.", $this->text->stringRevers(
            "Привет! Давно не виделись."
        ));
        $this->assertIsString($this->text->stringRevers("Привет! Давно не виделись."));
    }
}
