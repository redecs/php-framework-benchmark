#!/bin/sh

base="http://php-benchmark.redecs.local"

cd `dirname $0`
cd benchmarks

sh hello_world.sh "$base"
