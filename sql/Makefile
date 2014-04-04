SQL_DIR = tables
SCRIPT_DIR = scripts

all: dump.sql
	
dump.sql: db.sql data.sql
	cat $^ > dump.sql && rm $^

db.sql:
	cd $(SQL_DIR) && cat colors.sql cities.sql votes.sql > ../db.sql

data.sql: db.sql
	$(SCRIPT_DIR)/generate_data.php > data.sql

clean:
	rm dump.sql
