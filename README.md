# OpenFace HTTP interface

A very simple, craply implemented php based web interface for running OpenFace 2. Runs on a LAMP server. 

## Installing

Download these scripts into a directory in your web root.

Create an 'uploads' directory writable by www-data

Create a 'tmp' directory writable by www-data

Create an 'outputs' directory writable by www-data

## How it works

You upload a file (it goes in uploads)

It runs OpenFace on the command line and pipes STDOUT to a file in the tmp directory

OpenFace outputs are put in a directory in "outputs"

Once it is complete and the directory exists in output, it is zipped and you can then download the zip. 