from flask import Flask, render_template, request, jsonify, make_response
import json
app = Flask(__name__)

@app.route('/numberofhits')
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
    app.run(
        debug=True
    )
