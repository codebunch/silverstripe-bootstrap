#!/bin/bash
# simple script to run silverstripe dev/build and flush

php vendor/silverstripe/framework/cli-script.php dev/build "flush=1"

