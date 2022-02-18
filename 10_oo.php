<?php

interface PdfInterface
{
    static public function generate(string $content) : string;
    static public function printPDF($file);
}

class DOMPDF implements PdfInterface
{
    static public function generate(string $content) : string
    {
        return "<h1>{$content}</h1>";
    }
    static public function printPdf($file)
    {
        return $file;
    }
}

class PdfFile implements PdfInterface
{
    static public function generate(string $content) : string
    {
        return "<h1>{$content}</h1>";
    }
    static public function printPdf($file)
    {
        return $file;
    }
}

class PDF extends DOMPDF
{

}

echo PDF::generate('olá');
