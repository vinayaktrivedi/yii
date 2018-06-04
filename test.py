from pymemcache.client import base
client=base.Client(('localhost',7999))
client.set('test','pharmeasy')
print(client.get('test'))
