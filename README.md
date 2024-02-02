# PDF MERGER PHP .NET

### Overview

Simple way to merge pdf in php lib

### Setup

> You need to compile the binary before use this lib

Run:
        composer compile
        composer test

### Usage
        use Pdfmergerphpnet\PdfMerger;

        $merger = new PdfMerger;

        $merger->outputFile('/path/to/file');

        $merger->addFile('/path/to/file');
        $merger->addFile('/path/to/file');
        $merger->addFile('/path/to/file');

        $merdedFile = $merger->merge(); // '/path/to/file' -> output

### Setting another binary
    $merger->binary('/path/to/file');

### Test
#### Run
        $ composer test

### Author

- Fernando Linhares Silvestre
