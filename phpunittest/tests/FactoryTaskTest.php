<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/FactoryTask.php');

class FactoryTaskTest extends TestCase
{
	/** @test */
	public function printTextDocTest(): void
	{
		$documentText = 'Document text here';
		$res = DocumentPrinter::print('text', $documentText);
		self::assertEquals('TextDocument: Document text here', $res);
	}

	/** @test */
	public function printPdfDocTest(): void
	{
		$documentText = 'Document text here';
		$res = DocumentPrinter::print('pdf', $documentText);
		self::assertEquals('PdfDocument: Document text here', $res);
	}

	/** @test */
	public function testExceptionPrintDoc(): void
	{
		$this->expectException(InvalidArgumentException::class);
		$this->expectExceptionMessage('Document type not found.');
		$documentText = 'Document text here';
		DocumentPrinter::print('ewrwerwer', $documentText);
	}
}
