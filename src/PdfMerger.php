<?php

namespace Pdfmergerphpnet;

class PdfMerger
{
   private string $outputFile;

   private array $files;

   private string $binary = 'bin/merger/mergerpdf';

   /**
    * @param string $filepath
    * @return void
    */
   public function addFile(string $filepath): void
   {
        $this->files[] = $filepath;
   }

   /**
    * @param string $filepath
    * @return void
    */
   public function outputFile(string $filepath): void
   {
        $this->outputFile = $filepath;
   }

   /**
    * @param string $filepath
    * @return void
    */
   public function binary(string $filepath): void
   {
        $this->binary = $filepath;
   }

   /**
    * @param string $filepath
    * @return string
    */
   public function merge()
   {
        $command = $this->binary
        . ' ' . $this->outputFile
        . ' ' . implode(' ', $this->files);

        shell_exec($command);

        return $this->outputFile;
   }
}