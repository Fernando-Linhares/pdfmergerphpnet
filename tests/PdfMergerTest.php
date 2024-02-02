<?php

namespace Test;

use Pdfmergerphpnet\PdfMerger;
use PHPUnit\Framework\TestCase;

class PdfMergerTest extends TestCase
{
    /**
     * @test
     */
    public function initialize_merger_is_ok()
    {
        $merger = new PdfMerger();

        $this->assertInstanceOf(PdfMerger::class, $merger);
    }

    /**
     * @depends initialize_merger_is_ok
     * @test
     */
    public function merge_files_is_working_good()
    {
        $merger = new PdfMerger();

        $merger->outputFile(__DIR__.'/filestotest/pdf-test-merged.pdf');

        $merger->addFile(__DIR__.'/filestotest/pdf-test1.pdf');
        $merger->addFile(__DIR__.'/filestotest/pdf-test2.pdf');
        $merger->addFile(__DIR__.'/filestotest/pdf-test3.pdf');
        $merger->addFile(__DIR__.'/filestotest/pdf-test4.pdf');

        $merdedFile = $merger->merge();

        $this->assertEquals(
            __DIR__.'/filestotest/pdf-test-merged.pdf',
            $merdedFile
        );
    }
}