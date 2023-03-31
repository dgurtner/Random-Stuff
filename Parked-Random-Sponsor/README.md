# Parked-Random-Sponsor

The Parked Random Sponsor is a project for parked domains. My goal is to create one centralized location for all my outgoing links, such as portfolio links, social links, and even affiliate links. The gurt.co domain, since it's short, is that central location. 

The idea is to keep *one* list of links to use as recommended/sponsored links on the parked domain homepages. I don't want to use the generic "coming soon" text from my hosting company – this is my attempt to create something that's more unique and also simplifies my process for parked domains. Who knows, maybe one of you reading this will find one of my recommendations useful ;-)

# requester

The requester is the homepage of the parked domain. The requester first calls the sender in an iframe to select a random recommended/sponsored link and puts it in the data.json file. Then the requester calls again to fetch and parse the json and puts it in the appropriate spots inside the parked homepage HTML.

# sender

After receiving the first call from the requester, sender selects a random recommended/sponsored link and puts it in the data.json file. On the second call, the requester is able to fetch and parse the data.json for further use.
