#!/bin/bash

data_source=`cat /tmp/data_source.txt`
redis-cli -h redis_server set data_source $data_source