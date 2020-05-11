#!/bin/sh

mysql -e "create table flag(flag varchar(256)); insert into flag values('$DASFLAG');" -uroot -proot test
export DASFLAG=flag_not_here
DASFLAG=flag_not_here
