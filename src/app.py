from flask import Flask, render_template, request, jsonify, make_response
# import the flask extension
from flask.ext.cache import Cache
import json
app = Flask(__name__)

# define the cache config keys, remember that it can be done in a settings file
app.config['CACHE_TYPE'] = 'simple'

# register the cache instance and binds it on to your app 
app.cache = Cache(app)

@app.route('/numberofhits')
@app.cache.cached(timeout=100)  # cache this view for 5 minutes

def numberofhits():
    json_data = open("data-2014.json")
    data = json.load(json_data)
    json_string = json.dumps(data)
    response = make_response(json_string)
    response.headers['Access-Control-Allow-Origin'] = '*'
    response.headers['Access-Control-Allow-Credentials'] = 'true'
    return response
    #return jsonify(data=json_string)

if __name__ == '__main__':
    app.run(port=5000,debug=True)
