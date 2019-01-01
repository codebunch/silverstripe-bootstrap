#!/bin/bash
# simple script to run silverstripe dev/build and flush

php vendor/silverstripe/framework/cli-script.php dev/build "flush=1"

# validate exit status
if [ "$?" -eq "0" ]; then
  echo "Cheers! Your Build is Successfull"
  exit 0
else
  echo "Your Build is failed, have a look at your error.log. Incase you havent created error log, please do add it in .env"
fi
