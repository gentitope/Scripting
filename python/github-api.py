from urllib2 import urlopen, Request

username = 'gentitope'
url = "https://api.github.com/users/gentitope/repos"
token = "f1d35d9fa3b5a814393a01760067927a0ba2004f"

request = Request(url)
request.add_header('Authorization', 'token %s' % token)
response = urlopen(request)
response = (response.read())
file = open("pyoutput.txt", "w")
file.write(response)
file.close()


