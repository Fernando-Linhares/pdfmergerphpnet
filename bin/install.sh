#/usr/bin/bash

mkdir ${PWD}/build
cd ${PWD}/build
git clone https://github.com/Fernando-Linhares/MergerPdf .
dotnet publish -o ../bin/merger
cd ../
rm -rf ${PWD}/build
