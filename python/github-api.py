from urllib2 import urlopen, Request
import json
import sys

username = 'gentitope'
url = "https://api.github.com/users/gentitope/repos"
token = "xd2a7c455a1bb8ea76ca63c2c9038be46443ff73d"

request = Request(url)
request.add_header('Authorization', 'token %s' % token)
response = urlopen(request)
response = (response.read())
#print response
data  = json.loads(response)
#print data
orig_stdout = sys.stdout
file = open("pyoutput.txt", "w")
sys.stdout = file
for x in data:
        res = x['name']
        print res
sys.stdout = orig_stdout
file.close()



