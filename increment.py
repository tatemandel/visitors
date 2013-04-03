#!/usr/bin/python


f = open ("counter.txt", "r")
num = f.read()
f.close()

f = open ("counter.txt", "w")
f.write(str(int(num) + 1))
f.close()
