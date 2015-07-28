from flask import Flask, render_template, request, jsonify, make_response
# import the flask extension
from flask.ext.cache import Cache
import json
#from data import extract_data
#from data.extract_data import *

import config
app = Flask(__name__)

# define the cache config keys, remember that it can be done in a settings file
app.config['CACHE_TYPE'] = 'simple'

# register the cache instance and binds it on to your app 
app.cache = Cache(app)

@app.route('/numberofhits')
@app.cache.cached(timeout=60)  # cache this view for 1 minutes
def numberofhits():
    json_string = config.grand_total()
    response = make_response(json_string)
    response.headers['Access-Control-Allow-Origin'] = '*'
    response.headers['Access-Control-Allow-Credentials'] = 'true'
    return response

@app.route('/usage')
@app.cache.cached(timeout=60)  # cache this view for 1 minute
def usagehits():
    usage_count  = config.usage_hits()
    response = make_response(usage_count)
    response.headers['Access-Control-Allow-Origin'] = '*'
    response.headers['Access-Control-Allow-Credentials'] = 'true'
    return response

if __name__ == '__main__':
    app.run(port=5000,debug=True)
