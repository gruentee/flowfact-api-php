#!/usr/bin/env python

import requests
#import json

BASE_URL = 'https://flowfactapi.flowfact.com/com.flowfact.server/api/rest/v1.0/'
user = '301001/Klaus Erfölg'
pw = 'P0werYourL1fe'

headers = {'Accept': 'application/json'}
r = requests.get(BASE_URL + 'customers/301001/users', auth=(user, pw), headers=headers)

#print(r.json())
json = r.json()

for key, value in json.items():
    if bool not in [type(key), type(value)]:
        if type(key) != bool:
            print(key)
        if type(value) != bool:
            print (value)

