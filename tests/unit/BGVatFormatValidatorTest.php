<?php

namespace rocketfellows\BGVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\BGVatFormatValidator\BGVatFormatValidator;

class BGVatFormatValidatorTest extends TestCase
{
    /**
     * @var BGVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new BGVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'BG123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BG0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BG111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BG1111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BG999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BG9999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BG0123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'BG01234567899',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'BG01234567',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'BG0123456789A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'BG012345678A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'BGA123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GA123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0123456789A',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0123456A8',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'A012345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0123!56789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0123.56789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'AAAAAAAAA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'AAAAAAAAAA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'BGAAAAAAAAA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'BGAAAAAAAAAA',
                'isValid' => false,
            ],
        ];
    }
}
