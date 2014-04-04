# Votes

## A small php test app.

There is a [live demo](http://vote.bitmakr.com) available.

## Deployment Instructions
To generate a MySQL dump file with all [tables](sql/tables) and test data:

```
 $ cd build
 $ make
```
  
  The Makefile will generate tables and data into a single MySQL dump file: ```dump.sql```.
  
  The test data can be tweaked by altering the PHP CLI [test data generation script](sql/scripts/generate_data.php).
  
  Please be sure to set proper database credentials in [www/DataAccess/Config.php](www/DataAccess/Config.php).
