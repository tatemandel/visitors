#!/usr/bin/python

import re
import sys

allArgs = "".join(sys.argv)

f = open('brow.txt','r')
data = f.read()
info = data.split(',')
f.close()


if re.search("Chrome", allArgs):
    info[0] = str(int(info[0]) + 1)
elif re.search("Safari", allArgs):
    info[1] = str(int(info[1]) + 1)
elif re.search("MSIE", allArgs):
    info[2] = str(int(info[2]) + 1)
elif re.search("Firefox", allArgs):
    info[3] = str(int(info[3]) + 1)

print "Chrome:", info[0] + "<br/>"
print "Safari:", info[1] + "<br/>"
print "Internet Explorer:", info[2] + "<br/>"
print "Firefox:", info[3] + "<br/>"


f = open('brow.txt','w')
f.write(','.join(info))
f.close()
