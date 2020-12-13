<?php
/*
    ?????????????? ???????? ?????????????? "????????? ?????"

    $documentText = 'Document text here';

    DocumentPrinter::print('text', $documentText);
    //TextDocument

    DocumentPrinter::print('pdf', $documentText);
    //PdfDocument
*/
class DocumentPrinter {

	public static function print ($type = '', $text = '')
	{
		$className = 'Doc_'.ucfirst($type);
		if(class_exists($className)) {
			$obj = new $className($text);
			$res = $obj->getContent();
			echo $res;
			return $res;
		} else {
			throw new InvalidArgumentException('Document type not found.');
		}
	}
}

class Doc_text
{
	protected $text;

	public function __construct(string $text)
	{
		$this->text = $text;
	}

	public function getContent():string
	{
		return "TextDocument: {$this->text}";
	}
}

class Doc_pdf
{
	protected $text;

	public function __construct(string $text)
	{
		$this->text = $text;
	}

	public function getContent():string
	{
		return "PdfDocument: {$this->text}";
	}
}

//$documentText = 'Document text here ';
//DocumentPrinter::print('text', $documentText);
//DocumentPrinter::print('pdf', $documentText);

