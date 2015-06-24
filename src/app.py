from flask import Flask, render_template, json
import json
import os
# Initialize the Flask application
app = Flask(__name__)

@app.route('/totalnumberofhits')
def index():
    json_data = open("data-2014.json")
    data = json.load(json_data)
    #obj  = '{"fruits": ["apple", "banana", "orange"]}'
    #data  = json.loads(obj)
    #print type(obj)
    # Convert python object to json
    json_string = json.dumps(data)
    #print len(json_string)
    print 'Json: %s' % json_string

    # Convert json to python object
    new_obj = json.loads(json_string)
    #print 'Python obj: ', new_obj

#return jsonify(data=json.dumps(data))
    # Render template
    return render_template('index.html', json = json_string, obj = len(json_string))
  

# Run
if __name__ == "__main__":
      app.debug = True
      app.run()

