import pandas as pd
import quandl

# Just check the url https://www.quandl.com/ and search for Google Data
df = quandl.get('WIKI/GOOGL')
print(df.head)
